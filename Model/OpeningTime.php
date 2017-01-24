<?php

namespace Jstack\Newyse\Model;

/**
 * Opening Time.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__OpeningTime.html
 */
class OpeningTime
{
    /**
     * @var string
     */
    protected $comments;

    /**
     * @var string
     */
    protected $dateString;

    /**
     * @var string
     */
    protected $dayString;

    /**
     * @var string
     */
    protected $endTime;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var string
     */
    protected $startTime;

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     *
     * @return OpeningTime
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateString()
    {
        return $this->dateString;
    }

    /**
     * @param string $dateString
     *
     * @return OpeningTime
     */
    public function setDateString($dateString)
    {
        $this->dateString = $dateString;

        return $this;
    }

    /**
     * @return string
     */
    public function getDayString()
    {
        return $this->dayString;
    }

    /**
     * @param string $dayString
     *
     * @return OpeningTime
     */
    public function setDayString($dayString)
    {
        $this->dayString = $dayString;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     *
     * @return OpeningTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     *
     * @return OpeningTime
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     *
     * @return OpeningTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }
}
