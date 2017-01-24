<?php

namespace Jstack\Newyse\Model;

/**
 * Special
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Special.html
 */
class Special
{
    /**
     * @var float
     */
    protected $specialPrice;

    /**
     * @var float
     */
    protected $specialPriceInclusive;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $specialName;

    /**
     * @var integer
     */
    protected $specialId;

    /**
     * @var string
     */
    protected $specialPolicy;

    /**
     * @var string
     */
    protected $specialCode;

    /**
     * @var integer
     */
    protected $minAge;

    /**
     * @var integer
     */
    protected $maxAge;

    /**
     * @return float
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * @param float $specialPrice
     * @return Special
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->specialPrice = $specialPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getSpecialPriceInclusive()
    {
        return $this->specialPriceInclusive;
    }

    /**
     * @param float $specialPriceInclusive
     * @return Special
     */
    public function setSpecialPriceInclusive($specialPriceInclusive)
    {
        $this->specialPriceInclusive = $specialPriceInclusive;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Special
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialName()
    {
        return $this->specialName;
    }

    /**
     * @param string $specialName
     * @return Special
     */
    public function setSpecialName($specialName)
    {
        $this->specialName = $specialName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecialId()
    {
        return $this->specialId;
    }

    /**
     * @param int $specialId
     * @return Special
     */
    public function setSpecialId($specialId)
    {
        $this->specialId = $specialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialPolicy()
    {
        return $this->specialPolicy;
    }

    /**
     * @param string $specialPolicy
     * @return Special
     */
    public function setSpecialPolicy($specialPolicy)
    {
        $this->specialPolicy = $specialPolicy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialCode()
    {
        return $this->specialCode;
    }

    /**
     * @param string $specialCode
     * @return Special
     */
    public function setSpecialCode($specialCode)
    {
        $this->specialCode = $specialCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * @param int $minAge
     * @return Special
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * @param int $maxAge
     * @return Special
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
        return $this;
    }
}
