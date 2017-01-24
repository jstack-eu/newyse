<?php

namespace Jstack\Newyse\Model;

/**
 * Property
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Property.html
 */
class Property
{
    /**
     * @var integer
     */
    protected $propertydefId;

    /**
     * @var integer
     */
    protected $propertyManagerId;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $groupCode;

    /**
     * @var string
     */
    protected $groupName;

    /**
     * @var boolean
     */
    protected $partial;

    /**
     * @var boolean
     */
    protected $hasPreferenceCosts;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $origin;

    /**
     * @return int
     */
    public function getPropertydefId()
    {
        return $this->propertydefId;
    }

    /**
     * @param int $propertydefId
     * @return Price
     */
    public function setPropertydefId($propertydefId)
    {
        $this->propertydefId = $propertydefId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPropertyManagerId()
    {
        return $this->propertyManagerId;
    }

    /**
     * @param int $propertyManagerId
     * @return Price
     */
    public function setPropertyManagerId($propertyManagerId)
    {
        $this->propertyManagerId = $propertyManagerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Price
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @return Price
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Price
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * @param string $groupCode
     * @return Price
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return Price
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPartial()
    {
        return $this->partial;
    }

    /**
     * @param boolean $partial
     * @return Price
     */
    public function setPartial($partial)
    {
        $this->partial = $partial;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isHasPreferenceCosts()
    {
        return $this->hasPreferenceCosts;
    }

    /**
     * @param boolean $hasPreferenceCosts
     * @return Price
     */
    public function setHasPreferenceCosts($hasPreferenceCosts)
    {
        $this->hasPreferenceCosts = $hasPreferenceCosts;
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
     * @return Price
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Price
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Price
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return Price
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }
}
