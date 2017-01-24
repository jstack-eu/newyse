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
     */
    protected $reservationCategoryCode = 'res';

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
            'Langauge' => $this->language,
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

    private function getAdditions()
    {
        $additions = [];
        foreach ($this->additions as $addition) {
            $additions[] = $addition->toArray();
        }

        return $additions;
    }

    private function getPreferences()
    {
        $preferences = [];
        foreach ($this->preferences as $preference) {
            $preferences[] = $preference->toArray();
        }

        return $preferences;
    }
}
