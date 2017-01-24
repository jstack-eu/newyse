<?php

namespace Jstack\Newyse\Model;

/**
 * Reservation Instalment
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSReservationInstalment.html
 */
class ReservationInstalment
{
    /**
     * @var string
     */
    protected $term;

    /**
     * @var \DateTime
     */
    protected $issueDate;

    /**
     * @var \DateTime
     */
    protected $dueDate;

    /**
     * @var float
     */
    protected $value;

    /**
     * @var float
     */
    protected $due;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $payerType;

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     * @return ReservationInstalment
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @param \DateTime $issueDate
     * @return ReservationInstalment
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTime $dueDate
     * @return ReservationInstalment
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return ReservationInstalment
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * @param float $due
     * @return ReservationInstalment
     */
    public function setDue($due)
    {
        $this->due = $due;
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
     * @return ReservationInstalment
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayerType()
    {
        return $this->payerType;
    }

    /**
     * @param string $payerType
     * @return ReservationInstalment
     */
    public function setPayerType($payerType)
    {
        $this->payerType = $payerType;
        return $this;
    }
}
