<?php

namespace Jstack\Newyse\Model;

/**
 * MarketingGroup
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__WSMarketingGroup.html
 */
class MarketingGroup
{
    /**
     * @var integer
     */
    protected $resourcegroupId;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getResourcegroupId()
    {
        return $this->resourcegroupId;
    }

    /**
     * @param int $resourcegroupId
     * @return MarketingGroup
     */
    public function setResourcegroupId($resourcegroupId)
    {
        $this->resourcegroupId = $resourcegroupId;
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
     * @return MarketingGroup
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
     * @return MarketingGroup
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
