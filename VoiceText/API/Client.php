<?php

namespace VoiceText\API;


class Client
{
    private $apiKey;
    private $apiPassword;

    public function __construct($apiKey, $apiPassword = '')
    {
        $this->requestHandler = new RequestHandler();
        $this->setApiKey($apiKey);
        $this->setApiPassword($apiPassword);
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->requestHandler->setApiKey($apiKey);
    }

    public function setApiPassword($apiPassword)
    {
        $this->apiPassword = $apiPassword;
        $this->requestHandler->setApiPassword($apiPassword);
    }

    public function getTts($options = null)
    {
        return $this->postRequest('/v1/tts', $options);
    }

    public function postRequest($path, $options)
    {
        return $this->makeRequest('POST', $path, $options);
    }

    public function makeRequest($method, $path, $options, $apiKey = null)
    {
        return $this->requestHandler->request($method, $path, $options);
    }
}
