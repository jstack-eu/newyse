<?php

namespace Jstack\Newyse\Model;

/**
 * Resort Details.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSResortDetails.html
 */
class ResortDetails extends Resort
{
    /**
     * @var Address
     */
    protected $address;

    /**
     * @var Property[]
     */
    protected $propertyList;

    /**
     * @var DynamicField[]
     */
    protected $dynamicFieldList;

    /**
     * @var Image[]
     */
    protected $imageList;

    /**
     * @var AccommodationTypeDetails[]
     */
    protected $accommodationTypeList;

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
     * @return ResortDetails
     */
    public function setAddress($address)
    {
        $this->address = $address;

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
     * @return ResortDetails
     */
    public function setPropertyList($propertyList)
    {
        $this->propertyList = $propertyList;

        return $this;
    }

    /**
     * @return DynamicField[]
     */
    public function getDynamicFieldList()
    {
        return $this->dynamicFieldList;
    }

    /**
     * @param DynamicField[] $dynamicFieldList
     *
     * @return ResortDetails
     */
    public function setDynamicFieldList($dynamicFieldList)
    {
        $this->dynamicFieldList = $dynamicFieldList;

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
     * @return ResortDetails
     */
    public function setImageList($imageList)
    {
        $this->imageList = $imageList;

        return $this;
    }

    /**
     * @return AccommodationTypeDetails[]
     */
    public function getAccommodationTypeList()
    {
        return $this->accommodationTypeList;
    }

    /**
     * @param AccommodationTypeDetails[] $accommodationTypeList
     *
     * @return ResortDetails
     */
    public function setAccommodationTypeList($accommodationTypeList)
    {
        $this->accommodationTypeList = $accommodationTypeList;

        return $this;
    }
}
