<?php

namespace Jstack\Newyse\Model;

/**
 * Object Reservability
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSObjectReservability.html
 */
class ObjectReservability
{
    /**
     * @var boolean
     */
    protected $reservable;

    /**
     * @var integer
     */
    protected $objectId;

    /**
     * @var Object
     */
    protected $object;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @return boolean
     */
    public function isReservable()
    {
        return $this->reservable;
    }

    /**
     * @param boolean $reservable
     * @return ObjectReservability
     */
    public function setReservable($reservable)
    {
        $this->reservable = $reservable;
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
     * @return ObjectReservability
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return Object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param Object $object
     * @return ObjectReservability
     */
    public function setObject($object)
    {
        $this->object = $object;
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
     * @return ObjectReservability
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
     * @return ObjectReservability
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}
