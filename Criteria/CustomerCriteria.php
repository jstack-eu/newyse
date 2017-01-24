<?php

namespace Jstack\Newyse\Criteria;

use Jstack\Newyse\Model\Customer;

class CustomerCriteria extends Criteria
{
    /** @var integer */
    public $CustomerId;

    /** @var string */
    public $TitleCode;

    /** @var string */
    public $Firstname;

    /** @var string */
    public $Middle;

    /** @var string */
    public $Lastname;

    /** @var \DateTime */
    public $BirthDate;

    /** @var integer */
    public $BankAccountTypeId;

    /** @var string */
    public $BankAccountNumber;

    /** @var string */
    public $PrivatePhone;

    /** @var string */
    public $WorkPhone;

    /** @var string */
    public $MobilePhone;

    /** @var string */
    public $MobilePhone2;

    /** @var bool */
    public $MailAllowed;

    /** @var bool */
    public $EmailAllowed;

    /** @var string */
    public $AttentionOf;

    /** @var string */
    public $Sex;

    /** @var string */
    public $IbanNumber;

    /** @var string */
    public $VatNumber;

    /** @var bool */
    public $IsCompany;

    /** @var string */
    public $CompanyName;

    /** @var string */
    public $Department;

    /** @var string */
    public $District;

    /** @var string */
    public $PoBox;

    /** @var string */
    public $PoBoxZipcode;

    /** @var string */
    public $Fax;

    /** @var string */
    public $Address1;

    /** @var string */
    public $HousenumberSuffix;

    /** @var string */
    public $Housenumber;

    /** @var string */
    public $Address2;

    /** @var string */
    public $City;

    /** @var string */
    public $Zipcode;

    /** @var string */
    public $Country;

    /** @var float */
    public $Latitude;

    /** @var float */
    public $Longitude;

    /** @var string */
    public $Email;

    /** @var string */
    public $PrivilegeNumber;

    /** @var integer */
    public $StateId;

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
    }

    /**
     * @return string
     */
    public function getTitleCode()
    {
        return $this->TitleCode;
    }

    /**
     * @param string $TitleCode
     */
    public function setTitleCode($TitleCode)
    {
        $this->TitleCode = $TitleCode;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * @param string $Firstname
     */
    public function setFirstname($Firstname)
    {
        $this->Firstname = $Firstname;
    }

    /**
     * @return string
     */
    public function getMiddle()
    {
        return $this->Middle;
    }

    /**
     * @param string $Middle
     */
    public function setMiddle($Middle)
    {
        $this->Middle = $Middle;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * @param string $Lastname
     */
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * @param DateTime $BirthDate
     */
    public function setBirthDate($BirthDate)
    {
        $this->BirthDate = $BirthDate;
    }

    /**
     * @return int
     */
    public function getBankAccountTypeId()
    {
        return $this->BankAccountTypeId;
    }

    /**
     * @param int $BankAccountTypeId
     */
    public function setBankAccountTypeId($BankAccountTypeId)
    {
        $this->BankAccountTypeId = $BankAccountTypeId;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->BankAccountNumber;
    }

    /**
     * @param string $BankAccountNumber
     */
    public function setBankAccountNumber($BankAccountNumber)
    {
        $this->BankAccountNumber = $BankAccountNumber;
    }

    /**
     * @return string
     */
    public function getPrivatePhone()
    {
        return $this->PrivatePhone;
    }

    /**
     * @param string $PrivatePhone
     */
    public function setPrivatePhone($PrivatePhone)
    {
        $this->PrivatePhone = $PrivatePhone;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->WorkPhone;
    }

    /**
     * @param string $WorkPhone
     */
    public function setWorkPhone($WorkPhone)
    {
        $this->WorkPhone = $WorkPhone;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }

    /**
     * @param string $MobilePhone
     */
    public function setMobilePhone($MobilePhone)
    {
        $this->MobilePhone = $MobilePhone;
    }

    /**
     * @return string
     */
    public function getMobilePhone2()
    {
        return $this->MobilePhone2;
    }

    /**
     * @param string $MobilePhone2
     */
    public function setMobilePhone2($MobilePhone2)
    {
        $this->MobilePhone2 = $MobilePhone2;
    }

    /**
     * @return boolean
     */
    public function isMailAllowed()
    {
        return $this->MailAllowed;
    }

    /**
     * @param boolean $MailAllowed
     */
    public function setMailAllowed($MailAllowed)
    {
        $this->MailAllowed = $MailAllowed;
    }

    /**
     * @return boolean
     */
    public function isEmailAllowed()
    {
        return $this->EmailAllowed;
    }

    /**
     * @param boolean $EmailAllowed
     */
    public function setEmailAllowed($EmailAllowed)
    {
        $this->EmailAllowed = $EmailAllowed;
    }

    /**
     * @return string
     */
    public function getAttentionOf()
    {
        return $this->AttentionOf;
    }

    /**
     * @param string $AttentionOf
     */
    public function setAttentionOf($AttentionOf)
    {
        $this->AttentionOf = $AttentionOf;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param string $Sex
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;
    }

    /**
     * @return string
     */
    public function getIbanNumber()
    {
        return $this->IbanNumber;
    }

    /**
     * @param string $IbanNumber
     */
    public function setIbanNumber($IbanNumber)
    {
        $this->IbanNumber = $IbanNumber;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->VatNumber;
    }

    /**
     * @param string $VatNumber
     */
    public function setVatNumber($VatNumber)
    {
        $this->VatNumber = $VatNumber;
    }

    /**
     * @return boolean
     */
    public function isIsCompany()
    {
        return $this->IsCompany;
    }

    /**
     * @param boolean $IsCompany
     */
    public function setIsCompany($IsCompany)
    {
        $this->IsCompany = $IsCompany;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param string $Department
     */
    public function setDepartment($Department)
    {
        $this->Department = $Department;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->District;
    }

    /**
     * @param string $District
     */
    public function setDistrict($District)
    {
        $this->District = $District;
    }

    /**
     * @return string
     */
    public function getPoBox()
    {
        return $this->PoBox;
    }

    /**
     * @param string $PoBox
     */
    public function setPoBox($PoBox)
    {
        $this->PoBox = $PoBox;
    }

    /**
     * @return string
     */
    public function getPoBoxZipcode()
    {
        return $this->PoBoxZipcode;
    }

    /**
     * @param string $PoBoxZipcode
     */
    public function setPoBoxZipcode($PoBoxZipcode)
    {
        $this->PoBoxZipcode = $PoBoxZipcode;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
    }

    /**
     * @return string
     */
    public function getHousenumberSuffix()
    {
        return $this->HousenumberSuffix;
    }

    /**
     * @param string $HousenumberSuffix
     */
    public function setHousenumberSuffix($HousenumberSuffix)
    {
        $this->HousenumberSuffix = $HousenumberSuffix;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }

    /**
     * @param string $HouseNumber
     */
    public function setHouseNumber($HouseNumber)
    {
        $this->HouseNumber = $HouseNumber;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->Zipcode;
    }

    /**
     * @param string $Zipcode
     */
    public function setZipcode($Zipcode)
    {
        $this->Zipcode = $Zipcode;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param float $Latitude
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param float $Longitude
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getPrivilegeNumber()
    {
        return $this->PrivilegeNumber;
    }

    /**
     * @param string $PrivilegeNumber
     */
    public function setPrivilegeNumber($PrivilegeNumber)
    {
        $this->PrivilegeNumber = $PrivilegeNumber;
    }

    /**
     * @return int
     */
    public function getStateId()
    {
        return $this->StateId;
    }

    /**
     * @param int $StateId
     */
    public function setStateId($StateId)
    {
        $this->StateId = $StateId;
    }
}