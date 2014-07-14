<?php

class RequestHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $requestHandler = new Tetsuwo\VoiceText\API\RequestHandler();
        $this->assertInstanceOf('Tetsuwo\VoiceText\API\RequestHandler', $requestHandler);
    }

    public function testSetApiKey()
    {
        $requestHandler = new Tetsuwo\VoiceText\API\RequestHandler();
        $requestHandler->setApiKey('API_KEY');
        $this->assertAttributeEquals('API_KEY', 'apiKey', $requestHandler);
    }
}
