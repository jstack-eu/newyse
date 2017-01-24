<?php

namespace Jstack\Newyse\Model;

/**
 * BillLine
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__BillLine.html
 */
class BillLine
{
    /**
     * @var string
     */
    protected $cashFlowRuleName;

    /**
     * @var float
     */
    protected $value;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $multiplier;

    /**
     * @var float
     */
    protected $total;

    /**
     * @var int
     */
    protected $sequence;

    /**
     * @var int
     */
    protected $billLineType;

    /**
     * @var int
     */
    protected $resourceId;

    /**
     * @return string
     */
    public function getCashFlowRuleName()
    {
        return $this->cashFlowRuleName;
    }

    /**
     * @param string $cashFlowRuleName
     * @return BillLine
     */
    public function setCashFlowRuleName($cashFlowRuleName)
    {
        $this->cashFlowRuleName = $cashFlowRuleName;
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
     * @return BillLine
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return BillLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getMultiplier()
    {
        return $this->multiplier;
    }

    /**
     * @param int $multiplier
     * @return BillLine
     */
    public function setMultiplier($multiplier)
    {
        $this->multiplier = $multiplier;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return BillLine
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param int $sequence
     * @return BillLine
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillLineType()
    {
        return $this->billLineType;
    }

    /**
     * @param int $billLineType
     * @return BillLine
     */
    public function setBillLineType($billLineType)
    {
        $this->billLineType = $billLineType;
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
     * @return BillLine
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }
}
