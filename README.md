VoiceTextAPI
============

[![Build Status](https://secure.travis-ci.org/tetsuwo/VoiceTextAPI.png)](http://travis-ci.org/tetsuwo/VoiceTextAPI)

The unofficial PHP client for the [VoiceText Web API](https://cloud.voicetext.jp/webapi).


Demonstration
-------------

- [API Explorer](http:://voice-text-api-explorer.herokuapp.com)


Installation
------------

Install [Composer](https://getcomposer.org/).

Add below in `require` property on `composer.json`.

    {
        "require": {
            "tetsuwo/voice-text-api": "dev-master"
        }
    }

Execute below command.

    $ php composer.phar install


Usage
-----

At first, set up client.

    $client = new VoiceText\API\Client('{API_KEY}', '{API_PASSWORD}');


### Method of Speech synthesis (Text-to-speech)

Execute PHP code below to get the Speech synthesis data of specified text.  
And there are binary data of **WAV** format in `$response`.

    $response = $client->getTts(array(
        'text'    => 'こんばんは、モヤモヤさ◯ぁ～ずです。',
        'speaker' => show'
    ));

Return data string for WAV format

    echo 'data:audio/wav;base64,', base64_encode($response);

Excute JavaScript code below to play.

    var audio = new Audio('data:audio/wav;base64,~~~~~~~~~~~');
    audio.play();


See [official website](https://cloud.voicetext.jp/webapi) more details.


ETC.
----

- [Packagist](https://packagist.org/packages/tetsuwo/voice-text-api)

