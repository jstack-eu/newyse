<?php

namespace Jstack\Newyse\Reservation;

use JMS\Serializer\Annotation as JMS;

class Addition
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $resourceId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $startDate;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $endDate;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $quantity;

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     *
     * @return Addition
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     *
     * @return Addition
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

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
     *
     * @return Addition
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

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
     *
     * @return Addition
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function toArray()
    {
        return [
            'ResourceId' => $this->resourceId,
            'StartDate' => $this->startDate,
            'EndDate' => $this->endDate,
            'Quantity' => $this->quantity,
        ];
    }
}
