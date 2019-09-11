<?php

namespace Jstack\Newyse\Model;

/**
 * WSComplexDefinition
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSComplexDefinition.html
 */
class ComplexDefinition
{
    /** @var integer */
    protected $complexDefinitionId;

    /** @var string */
    protected $code;

    /**
     * @return int
     */
    public function getComplexDefinitionId()
    {
        return $this->complexDefinitionId;
    }

    /**
     * @param int $complexDefinitionId
     *
     * @return ComplexDefinition
     */
    public function setComplexDefinitionId($complexDefinitionId)
    {
        $this->complexDefinitionId = $complexDefinitionId;

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
     * @return ComplexDefinition
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}
