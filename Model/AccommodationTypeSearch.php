<?php

namespace Jstack\Newyse\Model;

/**
 * Accommodation Type Search
 *
 * See https://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME_live/documentation/xml_ns1_AccommodationTypeSearchContainer.html
 */
class AccommodationTypeSearch
{
    /** @var AccommodationTypeSearchObject[] */
    protected $accommodationTypeSearchObjects;

    /** @var string */
    protected $code;

    /** @var string */
    protected $name;

    /** @var string */
    protected $description;

    /** @var string */
    protected $description2;

    /** @var \DateTime */
    protected $endDate;

    /** @var integer */
    protected $imageManagerId;

    /** @var string */
    protected $resortCode;

    /** @var integer */
    protected $resortId;

    /** @var integer */
    protected $resourceId;

    /** @var string */
    protected $shortDescription;

    /** @var \DateTime */
    protected $startDate;

    /**
     * @return AccommodationTypeSearchObject[]
     */
    public function getAccommodationTypeSearchObjects()
    {
        return $this->accommodationTypeSearchObjects;
    }

    /**
     * @param AccommodationTypeSearchObject[] $accommodationTypeSearchObjects
     *
     * @return AccommodationTypeSearch
     */
    public function setAccommodationTypeSearchObjects(array $accommodationTypeSearchObjects)
    {
        $this->accommodationTypeSearchObjects = $accommodationTypeSearchObjects;

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
     *
     * @return AccommodationTypeSearch
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
     *
     * @return AccommodationTypeSearch
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
     *
     * @return AccommodationTypeSearch
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * @param string $description2
     *
     * @return AccommodationTypeSearch
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;

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
     *
     * @return AccommodationTypeSearch
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

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
     * @return AccommodationTypeSearch
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;

        return $this;
    }

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
     * @return AccommodationTypeSearch
     */
    public function setResortCode($resortCode)
    {
        $this->resortCode = $resortCode;

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
     *
     * @return AccommodationTypeSearch
     */
    public function setResortId($resortId)
    {
        $this->resortId = $resortId;

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
     * @return AccommodationTypeSearch
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

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
     *
     * @return AccommodationTypeSearch
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

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
     *
     * @return AccommodationTypeSearch
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }
}
