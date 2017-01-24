<?php

namespace Jstack\Newyse\Model;

/**
 * Resort
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Resort.html
 */
class Resort
{
    /**
     * @var string
     */
    protected $language;

    /**
     * @var integer
     */
    protected $resortId;

    /**
     * @var integer
     */
    protected $resortParentId;

    /**
     * @var integer[]
     */
    protected $regions;

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
    protected $shortDescription;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $visitAddressManagerId;

    /**
     * @var integer
     */
    protected $mailAddressManagerId;

    /**
     * @var integer
     */
    protected $imageManagerId;

    /**
     * @var integer
     */
    protected $propertyManagerId;

    /**
     * @var integer
     */
    protected $supplierId;

    /**
     * @var integer
     */
    protected $dynamicManagerId;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Resort
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return int
     */
    public function getResortId()
    {
        return $this->resortId;
    }

    /**
     * @param int $resortId
     * @return Resort
     */
    public function setResortId($resortId)
    {
        $this->resortId = $resortId;
        return $this;
    }

    /**
     * @return int
     */
    public function getResortParentId()
    {
        return $this->resortParentId;
    }

    /**
     * @param int $resortParentId
     * @return Resort
     */
    public function setResortParentId($resortParentId)
    {
        $this->resortParentId = $resortParentId;
        return $this;
    }

    /**
     * @return \integer[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @param \integer[] $regions
     * @return Resort
     */
    public function setRegions($regions)
    {
        $this->regions = $regions;
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
     * @return Resort
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
     * @return Resort
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return Resort
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
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
     * @return Resort
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getVisitAddressManagerId()
    {
        return $this->visitAddressManagerId;
    }

    /**
     * @param int $visitAddressManagerId
     * @return Resort
     */
    public function setVisitAddressManagerId($visitAddressManagerId)
    {
        $this->visitAddressManagerId = $visitAddressManagerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMailAddressManagerId()
    {
        return $this->mailAddressManagerId;
    }

    /**
     * @param int $mailAddressManagerId
     * @return Resort
     */
    public function setMailAddressManagerId($mailAddressManagerId)
    {
        $this->mailAddressManagerId = $mailAddressManagerId;
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
     * @return Resort
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;
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
     * @return Resort
     */
    public function setPropertyManagerId($propertyManagerId)
    {
        $this->propertyManagerId = $propertyManagerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param int $supplierId
     * @return Resort
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDynamicManagerId()
    {
        return $this->dynamicManagerId;
    }

    /**
     * @param int $dynamicManagerId
     * @return Resort
     */
    public function setDynamicManagerId($dynamicManagerId)
    {
        $this->dynamicManagerId = $dynamicManagerId;
        return $this;
    }
}
