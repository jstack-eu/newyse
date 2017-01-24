<?php

namespace Jstack\Newyse\Model;

/**
 * Resource Capacity
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSResourceCapacity.html
 */
class ResourceCapacity
{
    /**
     * @var integer
     */
    protected $resourceId;

    /**
     * @var integer
     */
    protected $subjectId;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $subjectName;

    /**
     * @var integer
     */
    protected $minAge;

    /**
     * @var integer
     */
    protected $maxAge;

    /**
     * @var integer
     */
    protected $minQuantity;

    /**
     * @var integer
     */
    protected $maxQuantity;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @return int
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * @param int $resourceId
     * @return ResourceCapacity
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @param int $subjectId
     * @return ResourceCapacity
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;
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
     * @return ResourceCapacity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param string $subjectName
     * @return ResourceCapacity
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
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
     * @return ResourceCapacity
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;
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
     * @return ResourceCapacity
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinQuantity()
    {
        return $this->minQuantity;
    }

    /**
     * @param int $minQuantity
     * @return ResourceCapacity
     */
    public function setMinQuantity($minQuantity)
    {
        $this->minQuantity = $minQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * @param int $maxQuantity
     * @return ResourceCapacity
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;
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
     * @return ResourceCapacity
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
     * @return ResourceCapacity
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}
