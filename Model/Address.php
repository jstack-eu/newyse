<?php

namespace Jstack\Newyse\Model;

/**
 * Address.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Address.html
 */
class Address
{
    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string
     */
    protected $address2;

    /**
     * @var int
     */
    protected $addressId;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var Country
     */
    protected $country;

    /**
     * @var string
     */
    protected $district;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $fax;

    /**
     * @var string
     */
    protected $housenumber;

    /**
     * @var string
     */
    protected $housenumberSuffix;

    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * @var int
     */
    protected $managerId;

    /**
     * @var string
     */
    protected $mobilePhone;

    /**
     * @var string
     */
    protected $mobilePhone2;

    /**
     * @var string
     */
    protected $poBox;

    /**
     * @var string
     */
    protected $poBoxZipcode;

    /**
     * @var string
     */
    protected $privatePhone;

    /**
     * @var State
     */
    protected $state;

    /**
     * @var string
     */
    protected $workPhone;

    /**
     * @var string
     */
    protected $zipcode;

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     *
     * @return Address
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     *
     * @return Address
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @param int $addressId
     *
     * @return Address
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     *
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param string $district
     *
     * @return Address
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Address
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     *
     * @return Address
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return string
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * @param string $housenumber
     *
     * @return Address
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getHousenumberSuffix()
    {
        return $this->housenumberSuffix;
    }

    /**
     * @param string $housenumberSuffix
     *
     * @return Address
     */
    public function setHousenumberSuffix($housenumberSuffix)
    {
        $this->housenumberSuffix = $housenumberSuffix;

        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     *
     * @return Address
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     *
     * @return Address
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return int
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * @param int $managerId
     *
     * @return Address
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     *
     * @return Address
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone2()
    {
        return $this->mobilePhone2;
    }

    /**
     * @param string $mobilePhone2
     *
     * @return Address
     */
    public function setMobilePhone2($mobilePhone2)
    {
        $this->mobilePhone2 = $mobilePhone2;

        return $this;
    }

    /**
     * @return string
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * @param string $poBox
     *
     * @return Address
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;

        return $this;
    }

    /**
     * @return string
     */
    public function getPoBoxZipcode()
    {
        return $this->poBoxZipcode;
    }

    /**
     * @param string $poBoxZipcode
     *
     * @return Address
     */
    public function setPoBoxZipcode($poBoxZipcode)
    {
        $this->poBoxZipcode = $poBoxZipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrivatePhone()
    {
        return $this->privatePhone;
    }

    /**
     * @param string $privatePhone
     *
     * @return Address
     */
    public function setPrivatePhone($privatePhone)
    {
        $this->privatePhone = $privatePhone;

        return $this;
    }

    /**
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param State $state
     *
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * @param string $workPhone
     *
     * @return Address
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     *
     * @return Address
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }
}
