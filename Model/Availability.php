<?php

namespace Jstack\Newyse\Model;

/**
 * Availability.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Availability.html
 */
class Availability
{
    /**
     * @var string
     */
    protected $resortCode;

    /**
     * @var int
     */
    protected $resourceId;

    /**
     * @var \DateTime
     */
    protected $arrivalDate;

    /**
     * @var \DateTime
     */
    protected $departureDate;

    /**
     * @var Price[]
     */
    protected $prices;

    /**
     * @return string
     */
    public function getResortCode()
    {
        return $this->resortCode;
    }

    /**
     * @param string $resortCode
     *
     * @return Availability
     */
    public function setResortCode($resortCode)
    {
        $this->resortCode = $resortCode;

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
     *
     * @return Availability
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

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
     *
     * @return Availability
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
     *
     * @return Availability
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return Price[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param Price[] $prices
     *
     * @return Availability
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
        return $this->getNights() + 1;
    }

    /**
     * @return int
     */
    public function getNights()
    {
        // Ignore the timezones to get the actual amount of nights
        $start = new \DateTime($this->arrivalDate->format('Y-m-d'));
        $end = new \DateTime($this->departureDate->format('Y-m-d'));

        $diff = $start->diff($end);

        return $diff->days;
    }
}
