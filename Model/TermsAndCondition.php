<?php

namespace Jstack\Newyse\Model;

/**
 * TermsAndConditions
 *
 * See http://scws.newyse.com/nwsservice_[YOUR_ACCOUNT_NAME]_live/documentation/xml_ns1__TermsAndConditions.html
 */
class TermsAndCondition
{
    /**
     * @var int
     */
    protected $termAndConditionId;

    /**
     * @var int
     */
    protected $templateId;

    /**
     * @var \DateTime
     */
    protected $validFrom;

    /**
     * @var \DateTime
     */
    protected $validTo;

    /**
     * @var string
     */
    protected $contents;

    /**
     * @return int
     */
    public function getTermAndConditionId()
    {
        return $this->termAndConditionId;
    }

    /**
     * @param int $termAndConditionId
     * @return TermsAndCondition
     */
    public function setTermAndConditionId($termAndConditionId)
    {
        $this->termAndConditionId = $termAndConditionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     * @return TermsAndCondition
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param \DateTime $validFrom
     * @return TermsAndCondition
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @param \DateTime $validTo
     * @return TermsAndCondition
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @param string $contents
     * @return TermsAndCondition
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
        return $this;
    }
}
