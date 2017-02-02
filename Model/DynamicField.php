<?php

namespace Jstack\Newyse\Model;

/**
 * Dynamic Field Data.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSDynamicFieldData.html
 */
class DynamicField extends Resort
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var int
     */
    protected $fieldId;

    /**
     * @var int
     */
    protected $imageManagerId;

    /**
     * @var string
     */
    protected $length;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return DynamicField
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return int
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * @param int $fieldId
     *
     * @return DynamicField
     */
    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    /**
     * @return int
     */
    public function getImageManagerId()
    {
        return $this->imageManagerId;
    }

    /**
     * @param int $imageManagerId
     *
     * @return DynamicField
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     *
     * @return DynamicField
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return DynamicField
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return DynamicField
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return DynamicField
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
