<?php

namespace Jstack\Newyse\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Customer.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Customer.html
 */
class Customer
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $customerId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $titleCode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $firstname;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $middle;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $lastname;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $birthDate;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $bankAccountTypeId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $bankAccountNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $privatePhone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $workPhone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $mobilePhone;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $mobilePhone2;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    protected $mailAllowed;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    protected $emailAllowed;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $attentionOf;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $sex;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $ibanNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $vatNumber;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     */
    protected $isCompany;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $companyName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $department;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $district;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $poBox;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $poBoxZipcode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $fax;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $address1;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $address2;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $housenumberSuffix;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $housenumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $city;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $zipcode;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $country;

    /**
     * @var float
     *
     * @JMS\Type("double")
     */
    protected $latitude;

    /**
     * @var float
     *
     * @JMS\Type("double")
     */
    protected $longitude;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $email;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $privilegeNumber;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $stateId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $socialSecurityNumber;

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     *
     * @return Customer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitleCode()
    {
        return $this->titleCode;
    }

    /**
     * @param string $titleCode
     *
     * @return Customer
     */
    public function setTitleCode($titleCode)
    {
        $this->titleCode = $titleCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return Customer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddle()
    {
        return $this->middle;
    }

    /**
     * @param string $middle
     *
     * @return Customer
     */
    public function setMiddle($middle)
    {
        $this->middle = $middle;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return Customer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     *
     * @return Customer
     */
    public function setBirthDate($birthDate)
    {
        if ($birthDate instanceof \DateTime) {
            $this->birthDate = $birthDate->format('Y-m-d');
        } else {
            $this->birthDate = $birthDate;
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getBankAccountTypeId()
    {
        return $this->bankAccountTypeId;
    }

    /**
     * @param int $bankAccountTypeId
     *
     * @return Customer
     */
    public function setBankAccountTypeId($bankAccountTypeId)
    {
        $this->bankAccountTypeId = $bankAccountTypeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * @param string $bankAccountNumber
     *
     * @return Customer
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;

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
     * @return Customer
     */
    public function setPrivatePhone($privatePhone)
    {
        $this->privatePhone = $privatePhone;

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
     * @return Customer
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;

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
     * @return Customer
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
     * @return Customer
     */
    public function setMobilePhone2($mobilePhone2)
    {
        $this->mobilePhone2 = $mobilePhone2;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMailAllowed()
    {
        return $this->mailAllowed;
    }

    /**
     * @param bool $mailAllowed
     *
     * @return Customer
     */
    public function setMailAllowed($mailAllowed)
    {
        $this->mailAllowed = $mailAllowed;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEmailAllowed()
    {
        return $this->emailAllowed;
    }

    /**
     * @param bool $emailAllowed
     *
     * @return Customer
     */
    public function setEmailAllowed($emailAllowed)
    {
        $this->emailAllowed = $emailAllowed;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttentionOf()
    {
        return $this->attentionOf;
    }

    /**
     * @param string $attentionOf
     *
     * @return Customer
     */
    public function setAttentionOf($attentionOf)
    {
        $this->attentionOf = $attentionOf;

        return $this;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     *
     * @return Customer
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @return string
     */
    public function getIbanNumber()
    {
        return $this->ibanNumber;
    }

    /**
     * @param string $ibanNumber
     *
     * @return Customer
     */
    public function setIbanNumber($ibanNumber)
    {
        $this->ibanNumber = $ibanNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     *
     * @return Customer
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIsCompany()
    {
        return $this->isCompany;
    }

    /**
     * @param bool $isCompany
     *
     * @return Customer
     */
    public function setIsCompany($isCompany)
    {
        $this->isCompany = $isCompany;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return Customer
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $department
     *
     * @return Customer
     */
    public function setDepartment($department)
    {
        $this->department = $department;

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
     * @return Customer
     */
    public function setDistrict($district)
    {
        $this->district = $district;

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
     * @return Customer
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
     * @return Customer
     */
    public function setPoBoxZipcode($poBoxZipcode)
    {
        $this->poBoxZipcode = $poBoxZipcode;

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
     * @return Customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

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
     * @return Customer
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
     * @return Customer
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

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
     * @return Customer
     */
    public function setHousenumberSuffix($housenumberSuffix)
    {
        $this->housenumberSuffix = $housenumberSuffix;

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
     * @return Customer
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;

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
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;

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
     * @return Customer
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Customer
     */
    public function setCountry($country)
    {
        $this->country = $country;

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
     * @return Customer
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
     * @return Customer
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

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
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrivilegeNumber()
    {
        return $this->privilegeNumber;
    }

    /**
     * @param string $privilegeNumber
     *
     * @return Customer
     */
    public function setPrivilegeNumber($privilegeNumber)
    {
        $this->privilegeNumber = $privilegeNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @param int $stateId
     *
     * @return Customer
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    /**
     * @param string $socialSecurityNumber
     *
     * @return Customer
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;

        return $this;
    }

    public function toRequestVariables()
    {
        return [
            'Address1' => $this->address1,
            'Address2' => $this->address2,
            'AttentionOf' => $this->attentionOf,
            'BankAccountNumber' => $this->bankAccountNumber,
            'BankAccountTypeId' => $this->bankAccountTypeId,
            'BirthDate' => $this->birthDate,
            'City' => $this->city,
            'CompanyName' => $this->companyName,
            'Country' => $this->country,
            'CustomerId' => $this->customerId,
            'Department' => $this->department,
            'District' => $this->district,
            'Email' => $this->email,
            'EmailAllowed' => $this->emailAllowed,
            'Fax' => $this->fax,
            'Firstname' => $this->firstname,
            'Housenumber' => $this->housenumber,
            'HousenumberSuffix' => $this->housenumberSuffix,
            'IbanNumber' => $this->ibanNumber,
            'IsCompany' => $this->isCompany,
            'Lastname' => $this->lastname,
            'Latitude' => $this->latitude,
            'Longitude' => $this->longitude,
            'MailAllowed' => $this->mailAllowed,
            'Middle' => $this->middle,
            'MobilePhone' => $this->mobilePhone,
            'MobilePhone2' => $this->mobilePhone2,
            'PoBox' => $this->poBox,
            'PoBoxZipcode' => $this->poBoxZipcode,
            'PrivatePhone' => $this->privatePhone,
            'PrivilegeNumber' => $this->privilegeNumber,
            'Sex' => $this->sex,
            'SocialSecurityNumber' => $this->socialSecurityNumber,
            'StateId' => $this->stateId,
            'TitleCode' => $this->titleCode,
            'VatNumber' => $this->vatNumber,
            'WorkPhone' => $this->workPhone,
            'Zipcode' => $this->zipcode,
        ];
    }
}
