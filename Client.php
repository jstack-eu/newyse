<?php

namespace Jstack\Newyse;

use BeSimple\SoapClient\SoapClient;
use BeSimple\SoapCommon\Cache;

class Client extends SoapClient
{
    private $sessionKey;

    protected $url;
    protected $username;
    protected $password;
    protected $distributionChannel;
    protected $languageCode = 'nl';

    public function __construct($username, $password, $distributionChannel, $url, $cacheDir, $languageCode = 'nl')
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
        $this->distributionChannel = $distributionChannel;
        $this->languageCode = $languageCode;

        Cache::setDirectory($cacheDir);
        Cache::setEnabled(1);

        parent::__construct($url, [
            'cache_wsdl' => Cache::TYPE_MEMORY,
            'trace' => true
        ]);
    }

    public function connect()
    {
        $sessionCriteria = new \stdClass();
        $sessionCriteria->Type = 'normal';
        $sessionCriteria->Username = $this->username;
        $sessionCriteria->Password = $this->password;
        $sessionCriteria->LanguageCode = $this->languageCode;
        $sessionCriteria->DistributionchannelCode = $this->distributionChannel;

        $sessionCriteria = new \SoapVar($sessionCriteria, SOAP_ENC_OBJECT, "SessionCriteria");
        $sessionKey = $this->createSession($sessionCriteria);

        $this->setSessionKey($sessionKey);

        return $this;
    }

    public function getSessionKey()
    {
        if ($this->sessionKey == null) {
            $this->connect();
        }

        if (!empty($_SESSION['newyse.sessionkey'])) {
            $this->sessionKey = $_SESSION['newyse.sessionkey'];
        }

        return $this->sessionKey;
    }

    public function setSessionKey($sessionKey)
    {
        $this->sessionKey = $sessionKey;
        $_SESSION['newyse.sessionkey'] = $sessionKey;
    }
}
