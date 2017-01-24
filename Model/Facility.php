<?php

namespace Jstack\Newyse\Model;

/**
 * Facility.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Facility.html
 */
class Facility
{
    /**
     * @var int
     */
    protected $facilityId;

    /**
     * @var int
     */
    protected $addressManagerId;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var OpeningTime[]
     */
    protected $openingTimes;

    /**
     * @var int
     */
    protected $priority;

    /**
     * @var Resort[]
     */
    protected $resorts;

    /**
     * @return int
     */
    public function getFacilityId()
    {
        return $this->facilityId;
    }

    /**
     * @param int $facilityId
     *
     * @return Facility
     */
    public function setFacilityId($facilityId)
    {
        $this->facilityId = $facilityId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAddressManagerId()
    {
        return $this->addressManagerId;
    }

    /**
     * @param int $addressManagerId
     *
     * @return Facility
     */
    public function setAddressManagerId($addressManagerId)
    {
        $this->addressManagerId = $addressManagerId;

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
     * @return Facility
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * @return Facility
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return Facility
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     *
     * @return Facility
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

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
     * @return Facility
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return OpeningTime[]
     */
    public function getOpeningTimes()
    {
        return $this->openingTimes;
    }

    /**
     * @param OpeningTime[] $openingTimes
     *
     * @return Facility
     */
    public function setOpeningTimes($openingTimes)
    {
        $this->openingTimes = $openingTimes;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return Facility
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return Resort[]
     */
    public function getResorts()
    {
        return $this->resorts;
    }

    /**
     * @param Resort[] $resorts
     *
     * @return Facility
     */
    public function setResorts($resorts)
    {
        $this->resorts = $resorts;

        return $this;
    }
}
