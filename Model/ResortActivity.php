<?php

namespace Jstack\Newyse\Model;

/**
 * Resort Activity.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__ResortActivity.html
 */
class ResortActivity
{
    /**
     * @var ActivityCategory[]
     */
    protected $activityCategories;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $headText;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $imageManagerId;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var int
     */
    protected $maxAge;

    /**
     * @var int
     */
    protected $maxAttendees;

    /**
     * @var int
     */
    protected $minAge;

    /**
     * @var int
     */
    protected $minAttendees;

    /**
     * @var OpeningTime[]
     */
    protected $openingTimes;

    /**
     * @var string
     */
    protected $priceAdult;

    /**
     * @var string
     */
    protected $priceChild;

    /**
     * @var string
     */
    protected $priceValuePoints;

    /**
     * @var string
     */
    protected $reserve;

    /**
     * @var int
     */
    protected $resortActivityId;

    /**
     * @var Resort[]
     */
    protected $resorts;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $title;

    /**
     * @return ActivityCategory[]
     */
    public function getActivityCategories()
    {
        return $this->activityCategories;
    }

    /**
     * @param ActivityCategory[] $activityCategories
     *
     * @return ResortActivity
     */
    public function setActivityCategories($activityCategories)
    {
        $this->activityCategories = $activityCategories;

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
     *
     * @return ResortActivity
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeadText()
    {
        return $this->headText;
    }

    /**
     * @param string $headText
     *
     * @return ResortActivity
     */
    public function setHeadText($headText)
    {
        $this->headText = $headText;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     *
     * @return ResortActivity
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageManagerId()
    {
        return $this->imageManagerId;
    }

    /**
     * @param string $imageManagerId
     *
     * @return ResortActivity
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return ResortActivity
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * @param int $maxAge
     *
     * @return ResortActivity
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxAttendees()
    {
        return $this->maxAttendees;
    }

    /**
     * @param int $maxAttendees
     *
     * @return ResortActivity
     */
    public function setMaxAttendees($maxAttendees)
    {
        $this->maxAttendees = $maxAttendees;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * @param int $minAge
     *
     * @return ResortActivity
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinAttendees()
    {
        return $this->minAttendees;
    }

    /**
     * @param int $minAttendees
     *
     * @return ResortActivity
     */
    public function setMinAttendees($minAttendees)
    {
        $this->minAttendees = $minAttendees;

        return $this;
    }

    /**
     * @return OpeningTime[]
     */
    public function getOpeningTimes()
    {
        return $this->openingTimes;
    }

    /**
     * @param OpeningTime[] $openingTimes
     *
     * @return ResortActivity
     */
    public function setOpeningTimes($openingTimes)
    {
        $this->openingTimes = $openingTimes;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceAdult()
    {
        return $this->priceAdult;
    }

    /**
     * @param string $priceAdult
     *
     * @return ResortActivity
     */
    public function setPriceAdult($priceAdult)
    {
        $this->priceAdult = $priceAdult;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceChild()
    {
        return $this->priceChild;
    }

    /**
     * @param string $priceChild
     *
     * @return ResortActivity
     */
    public function setPriceChild($priceChild)
    {
        $this->priceChild = $priceChild;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriceValuePoints()
    {
        return $this->priceValuePoints;
    }

    /**
     * @param string $priceValuePoints
     *
     * @return ResortActivity
     */
    public function setPriceValuePoints($priceValuePoints)
    {
        $this->priceValuePoints = $priceValuePoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * @param string $reserve
     *
     * @return ResortActivity
     */
    public function setReserve($reserve)
    {
        $this->reserve = $reserve;

        return $this;
    }

    /**
     * @return int
     */
    public function getResortActivityId()
    {
        return $this->resortActivityId;
    }

    /**
     * @param int $resortActivityId
     *
     * @return ResortActivity
     */
    public function setResortActivityId($resortActivityId)
    {
        $this->resortActivityId = $resortActivityId;

        return $this;
    }

    /**
     * @return Resort[]
     */
    public function getResorts()
    {
        return $this->resorts;
    }

    /**
     * @param Resort[] $resorts
     *
     * @return ResortActivity
     */
    public function setResorts($resorts)
    {
        $this->resorts = $resorts;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return ResortActivity
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return ResortActivity
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
