<?php

namespace Jstack\Newyse\Model;

/**
 * Resource Addition
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__ResourceAddition.html
 */
class ResourceAddition
{
    /**
     * @var MarketingGroup[]
     */
    protected $marketingGroups;

    /**
     * @var integer
     */
    protected $resourceId;

    /**
     * @var integer
     */
    protected $resortId;

    /**
     * @var string
     */
    protected $type;

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
    protected $maxQuantity;

    /**
     * @var integer
     */
    protected $maxReservable;

    /**
     * @var integer
     */
    protected $minQuantity;

    /**
     * @var integer
     */
    protected $imageManagerId;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @return MarketingGroup[]
     */
    public function getMarketingGroups()
    {
        return $this->marketingGroups;
    }

    /**
     * @param MarketingGroup[] $marketingGroups
     * @return ResourceAddition
     */
    public function setMarketingGroups($marketingGroups)
    {
        $this->marketingGroups = $marketingGroups;
        return $this;
    }

    /**
     * @return int
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * @param int $resourceId
     * @return ResourceAddition
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
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
     * @return ResourceAddition
     */
    public function setResortId($resortId)
    {
        $this->resortId = $resortId;
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
     * @return ResourceAddition
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return ResourceAddition
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
     * @return ResourceAddition
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
     * @return ResourceAddition
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
     * @return ResourceAddition
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * @param int $maxQuantity
     * @return ResourceAddition
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxReservable()
    {
        return $this->maxReservable;
    }

    /**
     * @param int $maxReservable
     * @return ResourceAddition
     */
    public function setMaxReservable($maxReservable)
    {
        $this->maxReservable = $maxReservable;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinQuantity()
    {
        return $this->minQuantity;
    }

    /**
     * @param int $minQuantity
     * @return ResourceAddition
     */
    public function setMinQuantity($minQuantity)
    {
        $this->minQuantity = $minQuantity;
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
     * @return ResourceAddition
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return ResourceAddition
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return ResourceAddition
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
