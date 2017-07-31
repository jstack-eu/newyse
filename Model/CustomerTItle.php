<?php

namespace Jstack\Newyse\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Customer.
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1_CustomerTitleContainer.html
 */
class CustomerTitle
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $customerTitleId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $code;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     */
    protected $priority;

    /**
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $title;
}
