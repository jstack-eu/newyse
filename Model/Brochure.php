<?php

namespace Jstack\Newyse\Model;

/**
 * Brochure
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__Brochure.html
 */
class Brochure
{
    /**
     * @var integer
     */
    protected $brochureId;

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
     * @var string
     */
    protected $resortCode;

    /**
     * @return int
     */
    public function getBrochureId()
    {
        return $this->brochureId;
    }

    /**
     * @param int $brochureId
     * @return Brochure
     */
    public function setBrochureId($brochureId)
    {
        $this->brochureId = $brochureId;
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
     * @return Brochure
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
     * @return Brochure
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
     * @return Brochure
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getResortCode()
    {
        return $this->resortCode;
    }

    /**
     * @param string $resortCode
     * @return Brochure
     */
    public function setResortCode($resortCode)
    {
        $this->resortCode = $resortCode;
        return $this;
    }
}
