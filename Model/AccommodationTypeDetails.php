<?php

namespace Jstack\Newyse\Model;

/**
 * Accommodation Type Details.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSAccommodationTypeDetails.html
 */
class AccommodationTypeDetails extends AccommodationType
{
    /**
     * @var Address
     */
    protected $address;

    /**
     * @var DynamicFieldData[]
     */
    protected $dynamicFieldList;

    /**
     * @var ResourceObject[]
     */
    protected $objectList;

    /**
     * @var Property[]
     */
    protected $propertyList;

    /**
     * @var Image[]
     */
    protected $imageList;

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return AccommodationTypeDetails
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return DynamicFieldData[]
     */
    public function getDynamicFieldList()
    {
        return $this->dynamicFieldList;
    }

    /**
     * @param DynamicFieldData[] $dynamicFieldList
     *
     * @return AccommodationTypeDetails
     */
    public function setDynamicFieldList($dynamicFieldList)
    {
        $this->dynamicFieldList = $dynamicFieldList;

        return $this;
    }

    /**
     * @return \Object[]
     */
    public function getObjectList()
    {
        return $this->objectList;
    }

    /**
     * @param \Object[] $objectList
     *
     * @return AccommodationTypeDetails
     */
    public function setObjectList($objectList)
    {
        $this->objectList = $objectList;

        return $this;
    }

    /**
     * @return Property[]
     */
    public function getPropertyList()
    {
        return $this->propertyList;
    }

    /**
     * @param Property[] $propertyList
     *
     * @return AccommodationTypeDetails
     */
    public function setPropertyList($propertyList)
    {
        $this->propertyList = $propertyList;

        return $this;
    }

    /**
     * @return Image[]
     */
    public function getImageList()
    {
        return $this->imageList;
    }

    /**
     * @param Image[] $imageList
     *
     * @return AccommodationTypeDetails
     */
    public function setImageList($imageList)
    {
        $this->imageList = $imageList;

        return $this;
    }
}
