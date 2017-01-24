<?php

namespace Jstack\Newyse\Mapper;

use Jstack\Newyse\Criteria\Criteria;

class ResponseMapper
{
    /**
     * @param object   $object
     * @param Criteria $criteria
     *
     * @return Criteria
     */
    public static function mapToCriteria($object, Criteria $criteria)
    {
        $reflectionObject = new \ReflectionObject($object);
        $reflectionCriteria = new \ReflectionObject($criteria);

        foreach ($reflectionObject->getProperties() as $reflectionProperty) {

            foreach ($reflectionCriteria->getProperties() as $criteriaReflectionProperty) {
                if (strtolower($criteriaReflectionProperty->getName()) === strtolower($reflectionProperty->getName())) {
                    $reflectionProperty->setAccessible(true);
                    $value = $reflectionProperty->getValue($object);
                    $criteriaReflectionProperty->setValue($criteria, $value);
                }
            }
        }

        return $criteria;
    }

    /**
     * Maps a list of values to a single object
     *
     * @param  array  $values
     * @param  object $object
     *
     * @return object
     */
    public function map(array $values, $object)
    {
        foreach ($values as $property => $value) {
            if ($value instanceof \stdClass) {
                $data = (array) $value;
                if (empty($data)) {
                    continue;
                }

                $first = current($data);
                if (!is_object($first) && !is_array($first)) {
                    // One To One relation
                    $value = $this->map($data, $this->toClass($property));
                } else {
                    // One To Many relation
                    $value = [];
                    foreach ($data as $class => $item) {
                        if (is_array($item)) {
                            // Relation is actually just an array of simple values
                            if (is_string(current($item))) {
                                foreach ($item as $string) {
                                    $value[] = $string;
                                }
                            } else {
                                $value = $this->mapArray($item, $this->toClass($class));
                            }
                        } else {
                            $item = (array) $item;
                            $value[] = $this->map($item, $this->toClass($class));
                        }
                    }
                }
            } elseif (is_string($value)) {
                // Convert DateTime values
                preg_match('/^(([0-9]{4})((-[0-9]{2}){2}(( |T)?([0-9]{2}:){2}[0-9]{2}((\+[0-9]{2}(:[0-9]{2})?)|Z)?)?|(-W[0-9]{2}(-[1-7])?)|(-[1-3]?[0-9]{2})))$/', $value, $matches);
                if (count($matches)) {
                    $value = new \DateTime($value);
                }
            }

            if ($value !== null) {
                $setter = 'set'.$property;
                if (method_exists($object, $setter)) {
                    $object->$setter($value);
                }
            }
        }

        return $object;
    }

    /**
     * Maps an array of items to objects
     *
     * @param  array  $data
     * @param  object $object
     *
     * @return array
     */
    public function mapArray($data, $object)
    {
        if (is_object($data)) {
            $item = (array) $data;
            $data = [$item];
        }

        $response = [];
        foreach ($data as $values) {
            $newObject = clone $object;
            $values = (array) $values;
            $response[] = $this->map($values, $newObject);
        }

        return $response;
    }

    /**
     * @param  string $class
     * @return object
     */
    protected function toClass($class)
    {
        // strip 'WS' if classname starts with WS
        if (substr($class, 0, 2) == 'WS') {
            $class = substr($class, 2);
        }

        // strip 'Item' if classname ends with Item
        if (substr($class, -4) == 'Item') {
            $class = substr($class, 0, -4);
        }

        $class = 'Jstack\\Newyse\\Model\\'.$class;

        return new $class();
    }
}
