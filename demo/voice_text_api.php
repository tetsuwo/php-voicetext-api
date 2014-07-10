<?php

require_once('../VoiceText/API/Client.php');
require_once('../VoiceText/API/RequestHandler.php');
require_once('./config.php');

use VoiceText\API;
use VoiceText\API\Client as VoiceTextAPIClient;

$client = new VoiceTextAPIClient(VOICE_TEXT_API_KEY, VOICE_TEXT_API_PASSWORD);

try
{
    $tts = $_POST['tts'];

    $response = $client->getTts([
        'text'          => $tts['text'],
        'speaker'       => $tts['speaker'],
        'emotion'       => $tts['emotion'],
        'emotion_level' => $tts['emotion_level'],
    ]);

    echo base64_encode($response);
}
catch (Exception $e)
{
    printf('{Exception} Code:%s, Message:%s', $e->getCode(), $e->getMessage());
}
