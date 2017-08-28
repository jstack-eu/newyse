<?php

namespace Jstack\Newyse\Criteria;

use JMS\Serializer\Annotation as JMS;
use Jstack\Newyse\Reservation\Addition;
use Jstack\Newyse\Reservation\Preference;
use Jstack\Newyse\Reservation\SubjectQuantity;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationCriteria extends Criteria
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $reservationCategoryCode;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @Assert\NotBlank()
     */
    protected $resourceId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $objectId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @Assert\NotBlank()
     */
    protected $arrivalDate;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @Assert\NotBlank()
     */
    protected $duration;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $specialCode;

    /**
     * @var Preference[]
     *
     * @JMS\Type("array<Jstack\Newyse\Reservation\Preference>")
     */
    protected $preferences = [];

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $language;

    /**
     * @var SubjectQuantity[]
     *
     * @JMS\Type("array<Jstack\Newyse\Reservation\SubjectQuantity>")
     */
    protected $subjects = [];

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
    protected $remark;

    /**
     * @var string
     */
    protected $voucher;

    /**
     * @var string
     */
    protected $sourceCode;

    /**
     * @var string
     */
    protected $sendMethodCode;

    /**
     * @var Addition[]
     *
     * @JMS\Type("array<Jstack\Newyse\Reservation\Addition>")
     */
    protected $additions = [];

    /**
     * @var bool
     */
    protected $returnBill;

    /**
     * @var bool
     */
    protected $returnInstalments;

    /**
     * @var bool
     */
    protected $returnTermsAndConditions;

    /**
     * @var string
     */
    protected $termsAndConditionSignedBy;

    /**
     * @var bool
     */
    protected $sendEmail;

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
     * @return ReservationCriteria
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param  int $objectId
     *
     * @return ReservationCriteria
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param  string $arrivalDate
     *
     * @return ReservationCriteria
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return ReservationCriteria
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialCode()
    {
        return $this->specialCode;
    }

    /**
     * @param  string $specialCode
     *
     * @return ReservationCriteria
     */
    public function setSpecialCode($specialCode)
    {
        $this->specialCode = $specialCode;

        return $this;
    }

    /**
     * @param \Jstack\Newyse\Reservation\Preference[] $preferences
     *
     * @return ReservationCriteria
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;

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
     * @return ReservationCriteria
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return \Jstack\Newyse\Reservation\SubjectQuantity[]
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param \Jstack\Newyse\Reservation\SubjectQuantity[] $subjects
     *
     * @return ReservationCriteria
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;

        return $this;
    }

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
     * @return ReservationCriteria
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     *
     * @return ReservationCriteria
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * @return string
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * @param string $voucher
     * @return ReservationCriteria
     */
    public function setVoucher($voucher)
    {
        $this->voucher = $voucher;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceCode()
    {
        return $this->sourceCode;
    }

    /**
     * @param string $sourceCode
     *
     * @return ReservationCriteria
     */
    public function setSourceCode($sourceCode)
    {
        $this->sourceCode = $sourceCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendMethodCode()
    {
        return $this->sendMethodCode;
    }

    /**
     * @param string $sendMethodCode
     *
     * @return ReservationCriteria
     */
    public function setSendMethodCode($sendMethodCode)
    {
        $this->sendMethodCode = $sendMethodCode;

        return $this;
    }

    /**
     * @param \Jstack\Newyse\Reservation\Addition[] $additions
     *
     * @return ReservationCriteria
     */
    public function setAdditions($additions)
    {
        $this->additions = $additions;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isReturnBill()
    {
        return $this->returnBill;
    }

    /**
     * @param boolean $returnBill
     *
     * @return ReservationCriteria
     */
    public function setReturnBill($returnBill)
    {
        $this->returnBill = $returnBill;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isReturnInstalments()
    {
        return $this->returnInstalments;
    }

    /**
     * @param boolean $returnInstalments
     *
     * @return ReservationCriteria
     */
    public function setReturnInstalments($returnInstalments)
    {
        $this->returnInstalments = $returnInstalments;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isReturnTermsAndConditions()
    {
        return $this->returnTermsAndConditions;
    }

    /**
     * @param boolean $returnTermsAndConditions
     *
     * @return ReservationCriteria
     */
    public function setReturnTermsAndConditions($returnTermsAndConditions)
    {
        $this->returnTermsAndConditions = $returnTermsAndConditions;

        return $this;
    }

    /**
     * @return string
     */
    public function getTermsAndConditionSignedBy()
    {
        return $this->termsAndConditionSignedBy;
    }

    /**
     * @param string $termsAndConditionSignedBy
     *
     * @return ReservationCriteria
     */
    public function setTermsAndConditionSignedBy($termsAndConditionSignedBy)
    {
        $this->termsAndConditionSignedBy = $termsAndConditionSignedBy;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isSendEmail()
    {
        return $this->sendEmail;
    }

    /**
     * @param boolean $sendEmail
     *
     * @return ReservationCriteria
     */
    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }

    /**
     * @param  string $categoryCode
     *
     * @return ReservationCriteria
     */
    public function setReservationCategoryCode($categoryCode)
    {
        $this->reservationCategoryCode = $categoryCode;

        return $this;
    }

    /**
     * Return an associated array based on the API specification by Newyse
     *
     * @return array
     */
    public function getRequest()
    {
        return [
            'ReservationCategoryCode' => ($this->reservationCategoryCode) ? $this->reservationCategoryCode : 'res',
            'Accommodation' => [
                'ResourceId' => $this->resourceId,
                'ArrivalDate' => $this->arrivalDate,
                'Duration' => $this->duration,
                'SpecialCode' => $this->specialCode,
            ],
            'Preferences' => $this->getPreferences(),
            'Language' => $this->language,
            'SubjectQuantities' => $this->getSubjectQuantities(),
            'CustomerId' => $this->customerId,
            'Remark' => $this->remark,
            'Voucher' => $this->voucher,
            'SourceCode' => $this->sourceCode,
            'SendMethodCode' => $this->sendMethodCode,
            'Additions' => $this->getAdditions(),
            'ReturnBill' => $this->returnBill,
            'ReturnInstalments' => $this->returnInstalments,
            'ReturnTermsAndConditions' => $this->returnTermsAndConditions,
            'SendEmail' => $this->sendEmail,
        ];
    }

    /**
     * @return array
     */
    private function getSubjectQuantities()
    {
        $quantities = [];
        foreach ($this->subjects as $subject) {
            $quantities[] = [
                'SubjectId' => $subject->getSubjectId(),
                'Quantity' => $subject->getQuantity(),
            ];
        }

        return $quantities;
    }

    /**
     * @return array
     */
    private function getAdditions()
    {
        $additions = [];
        foreach ($this->additions as $addition) {
            $additions[] = $addition->toArray();
        }

        return $additions;
    }

    /**
     * @return array
     */
    private function getPreferences()
    {
        $preferences = [];
        foreach ($this->preferences as $preference) {
            $preferences[] = $preference->toArray();
        }

        return $preferences;
    }
}
