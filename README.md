VoiceTextAPI
============

[![Build Status](https://secure.travis-ci.org/tetsuwo/php-voicetext-api.png)](http://travis-ci.org/tetsuwo/php-voicetext-api)
[![Latest Stable Version](https://poser.pugx.org/tetsuwo/voicetext-api/v/stable.svg)](https://packagist.org/packages/tetsuwo/voicetext-api)
[![Total Downloads](https://poser.pugx.org/tetsuwo/voicetext-api/downloads.svg)](https://packagist.org/packages/tetsuwo/voicetext-api)
[![Latest Unstable Version](https://poser.pugx.org/tetsuwo/voicetext-api/v/unstable.svg)](https://packagist.org/packages/tetsuwo/voicetext-api)
[![License](https://poser.pugx.org/tetsuwo/voicetext-api/license.svg)](https://packagist.org/packages/tetsuwo/voicetext-api)

The unofficial PHP client for the [VoiceText Web API](https://cloud.voicetext.jp/webapi).


Demonstration
-------------

- [API Explorer](http://voice-text-api-explorer.herokuapp.com/)


Installation
------------

Install [Composer](https://getcomposer.org/).

Add below in `require` property on `composer.json`.

    {
        "require": {
            "tetsuwo/voicetext-api": "dev-master"
        }
    }

Execute below command.

    $ php composer.phar install


Usage
-----

At first, set up client.

    $client = new Tetsuwo\VoiceText\API\Client('{API_KEY}', '{API_PASSWORD}');


### Method of Speech synthesis (Text-to-speech)

Execute PHP code below to get the Speech synthesis data of specified text.  
And there are binary data of **WAV** format in `$response`.

    $response = $client->getTts(array(
        'text'    => 'こんばんは、モヤモヤさ◯ぁ～ずです。',
        'speaker' => show'
    ));

Returns the data string for WAV format.

    echo 'data:audio/wav;base64,', base64_encode($response);

Execute the JavaScript code below to play.

    var audio = new Audio('data:audio/wav;base64,~~~~~~~~~~~');
    audio.play();


See [official website](https://cloud.voicetext.jp/webapi) more details.


LICENSE
-------

This software is released under the MIT License, see LICENSE.


SEE ALSO
--------

- [Packagist](https://packagist.org/packages/tetsuwo/voicetext-api)

