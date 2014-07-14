<?php

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $client = new Tetsuwo\VoiceText\API\Client('API_KEY', '');
        $this->assertInstanceOf('Tetsuwo\VoiceText\API\Client', $client);
    }

    public function testConstructorDefaults()
    {
        $client = new Tetsuwo\VoiceText\API\Client('AAAA', 'BBBB');
        $this->assertAttributeEquals('AAAA', 'apiKey', $client);
        $this->assertAttributeEquals('BBBB', 'apiPassword', $client);
    }

    public function testSetApiKey()
    {
        $client = new Tetsuwo\VoiceText\API\Client('API_KEY', '');
        $client->setApiKey('AAAA');
        $this->assertAttributeEquals('AAAA', 'apiKey', $client);
    }

    public function testSetApiPassword()
    {
        $client = new Tetsuwo\VoiceText\API\Client('API_KEY', '');
        $client->setApiPassword('BBBB');
        $this->assertAttributeEquals('BBBB', 'apiPassword', $client);
    }
}
