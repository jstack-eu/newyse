<?php

namespace Jstack\Newyse\Exception;

class NewyseException extends \Exception
{
    const ACCOMMODATION_NOT_AVAILABLE = 'NWS-00500';

    protected $faultString;
    protected $errorCode;

    public function __construct($method, $response, $criteria, \Exception $previous)
    {
        $message = sprintf('Newyse failed for method %s with criteria %s and response %s', $method, json_encode($criteria), $response);

        if ($previous instanceof \SoapFault) {
            $this->faultString = $previous->faultstring;

            preg_match('/^NWS-[0-9]{5}/', $this->faultString, $matches);
            $this->errorCode = $matches[0];
        }

        parent::__construct($message, null, $previous);
    }

    /**
     * @return mixed
     */
    public function getFaultString()
    {
        return $this->faultString;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
}
