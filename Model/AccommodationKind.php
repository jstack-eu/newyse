<?php

namespace Jstack\Newyse\Model;

/**
 * Accommodation Kind.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__AccommodationKind.html
 */
class AccommodationKind
{
    /**
     * @var int
     */
    protected $accommodationKindId;

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
    protected $description;

    /**
     * @return int
     */
    public function getAccommodationKindId()
    {
        return $this->accommodationKindId;
    }

    /**
     * @param int $accommodationKindId
     *
     * @return AccommodationKind
     */
    public function setAccommodationKindId($accommodationKindId)
    {
        $this->accommodationKindId = $accommodationKindId;

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
     * @return AccommodationKind
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
     * @return AccommodationKind
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return AccommodationKind
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
