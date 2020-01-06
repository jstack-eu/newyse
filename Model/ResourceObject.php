<?php

namespace Jstack\Newyse\Model;

/**
 * Object.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Object.html
 */
class ResourceObject
{
    const STATUS_CLEAN = 'CLEAN';
    const STATUS_TO_BE_CLEANED = 'TO_BE_CLEANED';
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_CHECKED = 'CHECKED';
    const STATUS_POSTPONED = 'POSTPONED';
    const STATUS_OCCUPIED_CLEAN = 'OCCUPIED_CLEAN';

    /**
     * @var int
     */
    protected $objectId;

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
    protected $name;

    /**
     * @var string
     */
    protected $shortDescription;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $propertyManagerId;

    /**
     * @var int
     */
    protected $imageManagerId;

    /**
     * @var int
     */
    protected $addressManagerId;

    /**
     * @var string
     */
    protected $status;

    /**
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     *
     * @return ResourceObject
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

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
     * @return ResourceObject
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
     *
     * @return ResourceObject
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     *
     * @return ResourceObject
     */
    public function setName($name)
    {
        $this->name = $name;

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
     *
     * @return ResourceObject
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
     *
     * @return ResourceObject
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getPropertyManagerId()
    {
        return $this->propertyManagerId;
    }

    /**
     * @param int $propertyManagerId
     *
     * @return ResourceObject
     */
    public function setPropertyManagerId($propertyManagerId)
    {
        $this->propertyManagerId = $propertyManagerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getImageManagerId()
    {
        return $this->imageManagerId;
    }

    /**
     * @param int $imageManagerId
     *
     * @return ResourceObject
     */
    public function setImageManagerId($imageManagerId)
    {
        $this->imageManagerId = $imageManagerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAddressManagerId()
    {
        return $this->addressManagerId;
    }

    /**
     * @param int $addressManagerId
     *
     * @return ResourceObject
     */
    public function setAddressManagerId($addressManagerId)
    {
        $this->addressManagerId = $addressManagerId;

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
     *
     * @return ResourceObject
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
