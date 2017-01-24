<?php

namespace Jstack\Newyse\Model;

/**
 * ReservedResource
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSReservedResource.html
 */
class ReservedResource
{
    const STATUS_DELETED = 'DELETED';
    const STATUS_DEF_CANCELLED = 'DEF_CANCELLED';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_DECLINED = 'DECLINED';
    const STATUS_QUOTATION = 'QUOTATION';
    const STATUS_CHOICE = 'CHOICE';
    const STATUS_BASKET = 'BASKET';
    const STATUS_INITIAL = 'INITIAL';
    const STATUS_OPTIONAL = 'OPTIONAL';
    const STATUS_PROVISIONAL = 'PROVISIONAL';
    const STATUS_DEFINITIVE = 'DEFINITIVE';
    const STATUS_CHECKED_IN = 'CHECKED_IN';
    const STATUS_CHECKED_OUT = 'CHECKED_OUT';

    /**
     * @var int
     */
    protected $reservedResourceId;

    /**
     * @var int
     */
    protected $parentId;

    /**
     * @var int
     */
    protected $resourceId;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $specialCode;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $reservationId;

    /**
     * @var int
     */
    protected $representationId;

    /**
     * @var string
     */
    protected $shortDescription;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $objectId;

    /**
     * @var boolean
     */
    protected $hasPriceOverride;

    /**
     * @var boolean
     */
    protected $removable;

    /**
     * @var boolean
     */
    protected $completed;

    /**
     * @var float
     */
    protected $printedAmount;

    /**
     * @var string
     */
    protected $searchCode;

    /**
     * @var string
     */
    protected $parentCode;

    /**
     * @var int
     */
    protected $billLineType;

    /**
     * @var boolean
     */
    protected $cancelInsteadOfRemind;

    /**
     * @var \DateTime
     */
    protected $actualStartDate;

    /**
     * @var \DateTime
     */
    protected $actualEndDate;

    /**
     * @return int
     */
    public function getReservedResourceId()
    {
        return $this->reservedResourceId;
    }

    /**
     * @param int $reservedResourceId
     * @return ReservedResource
     */
    public function setReservedResourceId($reservedResourceId)
    {
        $this->reservedResourceId = $reservedResourceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return ReservedResource
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
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
     * @return ReservedResource
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return ReservedResource
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @param string $specialCode
     * @return ReservedResource
     */
    public function setSpecialCode($specialCode)
    {
        $this->specialCode = $specialCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ReservedResource
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ReservedResource
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return ReservedResource
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return ReservedResource
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return ReservedResource
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @return ReservedResource
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @param int $reservationId
     * @return ReservedResource
     */
    public function setReservationId($reservationId)
    {
        $this->reservationId = $reservationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRepresentationId()
    {
        return $this->representationId;
    }

    /**
     * @param int $representationId
     * @return ReservedResource
     */
    public function setRepresentationId($representationId)
    {
        $this->representationId = $representationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return ReservedResource
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ReservedResource
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return ReservedResource
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @param int $objectId
     * @return ReservedResource
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isHasPriceOverride()
    {
        return $this->hasPriceOverride;
    }

    /**
     * @param boolean $hasPriceOverride
     * @return ReservedResource
     */
    public function setHasPriceOverride($hasPriceOverride)
    {
        $this->hasPriceOverride = $hasPriceOverride;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isRemovable()
    {
        return $this->removable;
    }

    /**
     * @param boolean $removable
     * @return ReservedResource
     */
    public function setRemovable($removable)
    {
        $this->removable = $removable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCompleted()
    {
        return $this->completed;
    }

    /**
     * @param boolean $completed
     * @return ReservedResource
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrintedAmount()
    {
        return $this->printedAmount;
    }

    /**
     * @param float $printedAmount
     * @return ReservedResource
     */
    public function setPrintedAmount($printedAmount)
    {
        $this->printedAmount = $printedAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchCode()
    {
        return $this->searchCode;
    }

    /**
     * @param string $searchCode
     * @return ReservedResource
     */
    public function setSearchCode($searchCode)
    {
        $this->searchCode = $searchCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentCode()
    {
        return $this->parentCode;
    }

    /**
     * @param string $parentCode
     * @return ReservedResource
     */
    public function setParentCode($parentCode)
    {
        $this->parentCode = $parentCode;
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
     * @return ReservedResource
     */
    public function setBillLineType($billLineType)
    {
        $this->billLineType = $billLineType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCancelInsteadOfRemind()
    {
        return $this->cancelInsteadOfRemind;
    }

    /**
     * @param boolean $cancelInsteadOfRemind
     * @return ReservedResource
     */
    public function setCancelInsteadOfRemind($cancelInsteadOfRemind)
    {
        $this->cancelInsteadOfRemind = $cancelInsteadOfRemind;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualStartDate()
    {
        return $this->actualStartDate;
    }

    /**
     * @param \DateTime $actualStartDate
     * @return ReservedResource
     */
    public function setActualStartDate($actualStartDate)
    {
        $this->actualStartDate = $actualStartDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualEndDate()
    {
        return $this->actualEndDate;
    }

    /**
     * @param \DateTime $actualEndDate
     * @return ReservedResource
     */
    public function setActualEndDate($actualEndDate)
    {
        $this->actualEndDate = $actualEndDate;
        return $this;
    }
}
