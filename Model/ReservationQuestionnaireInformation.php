<?php

namespace Jstack\Newyse\Model;

class ReservationQuestionnaireInformation
{
    /**
     * @var integer
     */
    protected $reservationId;

    /**
     * @var string
     */
    protected $arrivalDate;

    /**
     * @var string
     */
    protected $departureDate;

    /**
     * @var integer
     */
    protected $rating;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $middleName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var integer
     */
    protected $reservationQuestionnaireId;

    /**
     * @var integer
     */
    protected $questionId;

    /**
     * @var string
     */
    protected $comments;

    /**
     * @var string
     */
    protected $questionnaireId;

    /**
     * @return int
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @param $reservationId
     * @return $this
     */
    public function setReservationId($reservationId)
    {
        $this->reservationId = $reservationId;
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
     * @param $arrivalDate
     * @return $this
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param $departureDate
     * @return $this
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param $rating
     * @return $this
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param $middleName
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * @param $questionId
     * @return $this
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuestionnaireId()
    {
        return $this->questionnaireId;
    }

    /**
     * @param $questionnaireId
     * @return $this
     */
    public function setQuestionnaireId($questionnaireId)
    {
        $this->questionnaireId = $questionnaireId;
        return $this;
    }

    /**
     * @return int
     */
    public function getReservationQuestionnaireId()
    {
        return $this->reservationQuestionnaireId;
    }

    /**
     * @param $reservationQuestionnaireId
     * @return $this
     */
    public function setReservationQuestionnaireId($reservationQuestionnaireId)
    {
        $this->reservationQuestionnaireId = $reservationQuestionnaireId;
        return $this;
    }
}
