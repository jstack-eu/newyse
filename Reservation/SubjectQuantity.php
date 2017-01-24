<?php

namespace Jstack\Newyse\Reservation;

use JMS\Serializer\Annotation as JMS;

class SubjectQuantity
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $subjectId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $quantity;

    /**
     * @return int
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @param int $subjectId
     *
     * @return SubjectQuantity
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;

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
     * @return SubjectQuantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
