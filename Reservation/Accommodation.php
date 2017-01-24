<?php

namespace Jstack\Newyse\Reservation;

class Accommodation
{
    /**
     * @var int
     */
    public $ResourceId;

    /**
     * @var int
     */
    public $ObjectId;

    /**
     * @var string
     */
    public $ArrivalDate;

    /**
     * @var int
     */
    public $Duration;

    /**
     * @var string
     */
    public $SpecialCode;

    /**
     * @param \DateTime $arrivalDate
     */
    public function setArrivalDate(\DateTime $arrivalDate)
    {
        $this->ArrivalDate = $arrivalDate->format('Y-m-d');
    }

    /**
     * @param \DateTime $arrivalDate
     * @param \DateTime $departureDate
     */
    public function setDuration(\DateTime $arrivalDate, \DateTime $departureDate)
    {
        $diff = $departureDate->diff($arrivalDate);

        $this->Duration = $diff->days;
    }
}
