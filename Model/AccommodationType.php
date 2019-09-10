<?php

namespace Jstack\Newyse\Model;

/**
 * Accommodation Type / Resource
 *
 * See https://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__AccommodationType.html
 */
class AccommodationType
{
    /**
     * @var ComplexDefinition
     */
    protected $complexDefinition;

    /**
     * @var integer
     */
    protected $resourceId;

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
     * @var string
     */
    protected $description2;

    /**
     * @var integer
     */
    protected $numberOfPersons;

    /**
     * @var integer
     */
    protected $propertyManagerId;

    /**
     * @var integer
     */
    protected $imageManagerId;

    /**
     * @var integer
     */
    protected $addressManagerId;

    /**
     * @var string
     */
    protected $resortCode;

    /**
     * @var integer
     */
    protected $kindId;

    /**
     * @var string
     */
    protected $kindCode;

    /**
     * @var integer
     */
    protected $nrOfBathrooms;

    /**
     * @var integer
     */
    protected $nrOfBedrooms;

    /**
     * @var integer
     */
    protected $dynamicManagerId;

    /**
     * @var integer
     */
    protected $complexDefinitionId;

    /**
     * @var integer
     */
    protected $complexReferenceId;

    /**
     * @var string
     */
    protected $checkinTime;

    /**
     * @var string
     */
    protected $checkoutTime;

    /**
     * @return ComplexDefinition
     */
    public function getComplexDefinition()
    {
        return $this->complexDefinition;
    }

    /**
     * @param ComplexDefinition $complexDefinition
     * @return AccommodationType
     */
    public function setComplexDefinition($complexDefinition)
    {
        $this->complexDefinition = $complexDefinition;
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
     * @return AccommodationType
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
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
     * @return AccommodationType
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
     * @return AccommodationType
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
     * @return AccommodationType
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
     * @return AccommodationType
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
     * @return AccommodationType
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPersons()
    {
        return $this->numberOfPersons;
    }

    /**
     * @param int $numberOfPersons
     * @return AccommodationType
     */
    public function setNumberOfPersons($numberOfPersons)
    {
        $this->numberOfPersons = $numberOfPersons;
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
     * @return AccommodationType
     */
    public function setPropertyManagerId($propertyManagerId)
    {
        $this->propertyManagerId = $propertyManagerId;
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
     * @return AccommodationType
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;
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
     * @return AccommodationType
     */
    public function setAddressManagerId($addressManagerId)
    {
        $this->addressManagerId = $addressManagerId;
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
     * @return AccommodationType
     */
    public function setResortCode($resortCode)
    {
        $this->resortCode = $resortCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getKindId()
    {
        return $this->kindId;
    }

    /**
     * @param int $kindId
     * @return AccommodationType
     */
    public function setKindId($kindId)
    {
        $this->kindId = $kindId;
        return $this;
    }

    /**
     * @return string
     */
    public function getKindCode()
    {
        return $this->kindCode;
    }

    /**
     * @param string $kindCode
     * @return AccommodationType
     */
    public function setKindCode($kindCode)
    {
        $this->kindCode = $kindCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getNrOfBathrooms()
    {
        return $this->nrOfBathrooms;
    }

    /**
     * @param int $nrOfBathrooms
     * @return AccommodationType
     */
    public function setNrOfBathrooms($nrOfBathrooms)
    {
        $this->nrOfBathrooms = $nrOfBathrooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getNrOfBedrooms()
    {
        return $this->nrOfBedrooms;
    }

    /**
     * @param int $nrOfBedrooms
     * @return AccommodationType
     */
    public function setNrOfBedrooms($nrOfBedrooms)
    {
        $this->nrOfBedrooms = $nrOfBedrooms;
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
     * @return AccommodationType
     */
    public function setDynamicManagerId($dynamicManagerId)
    {
        $this->dynamicManagerId = $dynamicManagerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getComplexDefinitionId()
    {
        return $this->complexDefinitionId;
    }

    /**
     * @param int $complexDefinitionId
     * @return AccommodationType
     */
    public function setComplexDefinitionId($complexDefinitionId)
    {
        $this->complexDefinitionId = $complexDefinitionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getComplexReferenceId()
    {
        return $this->complexReferenceId;
    }

    /**
     * @param int $complexReferenceId
     * @return AccommodationType
     */
    public function setComplexReferenceId($complexReferenceId)
    {
        $this->complexReferenceId = $complexReferenceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    /**
     * @param string $checkinTime
     * @return AccommodationType
     */
    public function setCheckinTime($checkinTime)
    {
        $this->checkinTime = $checkinTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    /**
     * @param string $checkoutTime
     * @return AccommodationType
     */
    public function setCheckoutTime($checkoutTime)
    {
        $this->checkoutTime = $checkoutTime;
        return $this;
    }
}
