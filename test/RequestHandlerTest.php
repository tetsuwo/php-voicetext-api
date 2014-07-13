<?php

class RequestHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $requestHandler = new VoiceText\API\RequestHandler();
        $this->assertInstanceOf('VoiceText\API\RequestHandler', $requestHandler);
    }

    public function testSetApiKey()
    {
        $requestHandler = new VoiceText\API\RequestHandler();
        $requestHandler->setApiKey('API_TOKEN');
        $this->assertAttributeEquals('API_TOKEN', 'apiKey', $requestHandler);
    }
}
