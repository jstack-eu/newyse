<?php

namespace Jstack\Newyse\Model;

/**
 * Accommodation Type Search Object
 *
 * See https://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME_live/documentation/xml_ns1_AccommodationTypeSearchObject.html
 */
class AccommodationTypeSearchObject
{
    /** @var string */
    protected $code;

    /** @var integer */
    protected $objectId;

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
     * @return AccommodationTypeSearchObject
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     *
     * @return AccommodationTypeSearchObject
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }
}
