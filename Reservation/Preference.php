<?php

namespace Jstack\Newyse\Reservation;

use JMS\Serializer\Annotation as JMS;

class Preference
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $type;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Preference
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Preference
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function toArray()
    {
        return [
            'Id' => $this->id,
            'Type' => $this->type,
        ];
    }
}
