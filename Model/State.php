<?php

namespace Jstack\Newyse\Model;

/**
 * State.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSState.html
 */
class State
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $stateId;

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
     * @return State
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return State
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

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
     * @return State
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * @return State
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @param int $stateId
     *
     * @return State
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;

        return $this;
    }
}
