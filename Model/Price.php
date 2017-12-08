<?php

namespace Jstack\Newyse\Model;

/**
 * Price
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Price.html
 */
class Price
{
    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $priceInclusive;

    /**
     * @var \DateTime
     */
    protected $arrivalDate;

    /**
     * @var \DateTime
     */
    protected $departureDate;

    /**
     * @var \DateTime
     */
    protected $calculationDate;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var Special
     */
    protected $special;

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceInclusive()
    {
        return $this->priceInclusive;
    }

    /**
     * @param float $priceInclusive
     * @return Price
     */
    public function setPriceInclusive($priceInclusive)
    {
        $this->priceInclusive = $priceInclusive;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param \DateTime $arrivalDate
     * @return Price
     */
    public function setArrivalDate(\DateTime $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param \DateTime $departureDate
     * @return Price
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCalculationDate()
    {
        return $this->calculationDate;
    }

    /**
     * @param \DateTime $calculationDate
     * @return Price
     */
    public function setCalculationDate($calculationDate)
    {
        if(!$calculationDate instanceof \DateTime) {
            $calculationDate = new \DateTime($calculationDate);
        }

        $this->calculationDate = $calculationDate;
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
     * @return Price
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return Special
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * @param Special $special
     * @return Price
     */
    public function setSpecial(Special $special)
    {
        $this->special = $special;
        return $this;
    }
}
