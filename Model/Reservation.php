<?php

namespace Jstack\Newyse\Model;

/**
 * Reservation.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Reservation.html
 */
class Reservation
{
    /**
     * @var int
     */
    protected $reservationId;

    /**
     * @var string
     */
    protected $reservationNumber;

    /**
     * @var \DateTime
     */
    protected $arrivalDate;

    /**
     * @var \DateTime
     */
    protected $departureDate;

    /**
     * @var \DateTime
     */
    protected $bookDate;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var float
     */
    protected $totalPrice;

    /**
     * @var float
     */
    protected $customerTotalPrice;

    /**
     * @var float
     */
    protected $agentTotalPrice;

    /**
     * @var float
     */
    protected $payingCustomerTotalPrice;

    /**
     * @var float
     */
    protected $dueAmount;

    /**
     * @var string
     */
    protected $resort;

    /**
     * @var string
     */
    protected $distributionChannel;

    /**
     * @var string
     */
    protected $reservationCategoryCode;

    /**
     * @var BillLine[]
     */
    protected $billLines;

    /**
     * @var ReservationBillLine[]
     */
    protected $agentBillLines;

    /**
     * @var ReservationBillLine[]
     */
    protected $payingCustomerBillLines;

    /**
     * @var ReservationInstalment[]
     */
    protected $reservationInstalments;

    /**
     * @var string[]
     */
    protected $infotexts;

    /**
     * @var ReservedResource[]
     */
    protected $reservedResources;

    /**
     * @var Customer
     */
    protected $customerItem;

    /**
     * @var int
     */
    protected $resortId;

    /**
     * @var \DateTime
     */
    protected $modifiedDate;

    /**
     * @var TermsAndCondition[]
     */
    protected $termsAndConditions;

    /**
     * @var string
     */
    protected $voucher;

    /**
     * @return int
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @param int $reservationId
     *
     * @return Reservation
     */
    public function setReservationId($reservationId)
    {
        $this->reservationId = $reservationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservationNumber()
    {
        return $this->reservationNumber;
    }

    /**
     * @param string $reservationNumber
     *
     * @return Reservation
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->reservationNumber = $reservationNumber;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param \DateTime $arrivalDate
     *
     * @return Reservation
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param \DateTime $departureDate
     *
     * @return Reservation
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBookDate()
    {
        return $this->bookDate;
    }

    /**
     * @param \DateTime $bookDate
     *
     * @return Reservation
     */
    public function setBookDate($bookDate)
    {
        $this->bookDate = $bookDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Reservation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     *
     * @return Reservation
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getCustomerTotalPrice()
    {
        return $this->customerTotalPrice;
    }

    /**
     * @param float $customerTotalPrice
     *
     * @return Reservation
     */
    public function setCustomerTotalPrice($customerTotalPrice)
    {
        $this->customerTotalPrice = $customerTotalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getAgentTotalPrice()
    {
        return $this->agentTotalPrice;
    }

    /**
     * @param float $agentTotalPrice
     *
     * @return Reservation
     */
    public function setAgentTotalPrice($agentTotalPrice)
    {
        $this->agentTotalPrice = $agentTotalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getPayingCustomerTotalPrice()
    {
        return $this->payingCustomerTotalPrice;
    }

    /**
     * @param float $payingCustomerTotalPrice
     *
     * @return Reservation
     */
    public function setPayingCustomerTotalPrice($payingCustomerTotalPrice)
    {
        $this->payingCustomerTotalPrice = $payingCustomerTotalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getDueAmount()
    {
        return $this->dueAmount;
    }

    /**
     * @param float $dueAmount
     *
     * @return Reservation
     */
    public function setDueAmount($dueAmount)
    {
        $this->dueAmount = $dueAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getResort()
    {
        return $this->resort;
    }

    /**
     * @param string $resort
     *
     * @return Reservation
     */
    public function setResort($resort)
    {
        $this->resort = $resort;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel;
    }

    /**
     * @param string $distributionChannel
     *
     * @return Reservation
     */
    public function setDistributionChannel($distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservationCategoryCode()
    {
        return $this->reservationCategoryCode;
    }

    /**
     * @param string $reservationCategoryCode
     *
     * @return Reservation
     */
    public function setReservationCategoryCode($reservationCategoryCode)
    {
        $this->reservationCategoryCode = $reservationCategoryCode;

        return $this;
    }

    /**
     * @return ReservationBillLine[]
     */
    public function getBillLines()
    {
        return $this->billLines;
    }

    /**
     * @param ReservationBillLine[] $billLines
     *
     * @return Reservation
     */
    public function setBillLines($billLines)
    {
        $this->billLines = $billLines;

        return $this;
    }

    /**
     * @return ReservationBillLine[]
     */
    public function getAgentBillLines()
    {
        return $this->agentBillLines;
    }

    /**
     * @param ReservationBillLine[] $agentBillLines
     *
     * @return Reservation
     */
    public function setAgentBillLines($agentBillLines)
    {
        $this->agentBillLines = $agentBillLines;

        return $this;
    }

    /**
     * @return ReservationBillLine[]
     */
    public function getPayingCustomerBillLines()
    {
        return $this->payingCustomerBillLines;
    }

    /**
     * @param ReservationBillLine[] $payingCustomerBillLines
     *
     * @return Reservation
     */
    public function setPayingCustomerBillLines($payingCustomerBillLines)
    {
        $this->payingCustomerBillLines = $payingCustomerBillLines;

        return $this;
    }

    /**
     * @return ReservationInstalment[]
     */
    public function getReservationInstalments()
    {
        return $this->reservationInstalments;
    }

    /**
     * @param ReservationInstalment[] $reservationInstalments
     *
     * @return Reservation
     */
    public function setReservationInstalments($reservationInstalments)
    {
        $this->reservationInstalments = $reservationInstalments;

        return $this;
    }

    /**
     * @return \string[]
     */
    public function getInfotexts()
    {
        return $this->infotexts;
    }

    /**
     * @param \string[] $infotexts
     *
     * @return Reservation
     */
    public function setInfotexts($infotexts)
    {
        $this->infotexts = $infotexts;

        return $this;
    }

    /**
     * @return ReservedResource[]
     */
    public function getReservedResources()
    {
        return $this->reservedResources;
    }

    /**
     * @param ReservedResource[] $reservedResources
     *
     * @return Reservation
     */
    public function setReservedResources($reservedResources)
    {
        $this->reservedResources = $reservedResources;

        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomerItem()
    {
        return $this->customerItem;
    }

    /**
     * @param Customer $customerItem
     *
     * @return Reservation
     */
    public function setCustomerItem($customerItem)
    {
        $this->customerItem = $customerItem;

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
     * @return Reservation
     */
    public function setResortId($resortId)
    {
        $this->resortId = $resortId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param \DateTime $modifiedDate
     *
     * @return Reservation
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * @return TermsAndCondition[]
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    /**
     * @param TermsAndCondition[] $termsAndConditions
     *
     * @return Reservation
     */
    public function setTermsAndConditions($termsAndConditions)
    {
        $this->termsAndConditions = $termsAndConditions;

        return $this;
    }

    /**
     * @return \string
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * @param \string $voucher
     *
     * @return Reservation
     */
    public function setVoucher($voucher)
    {
        $this->voucher = $voucher;

        return $this;
    }
}
