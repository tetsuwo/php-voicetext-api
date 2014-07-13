VoiceTextAPI
============

The unofficial PHP client for the [VoiceText Web API](https://cloud.voicetext.jp/webapi).


Installation
------------

1. Install [Composer](https://getcomposer.org/).

2. Add below in `require` property on `composer.json`.

    {
        "require": {
            "tetsuwo/voice-text-api": "dev-master"
        }
    }

3. Execute below command.

    $ php composer.phar install


Usage
-----

At first, set up client.

    $client = new VoiceText\API\Client('{API_KEY}', '{API_PASSWORD}');


### Method of Speech synthesis (Text-to-speech)


    $client->getTts(array(
        'text'    => 'こんばんは、モヤモヤさ◯ぁ～ずです。',
        'speaker' => show'
    ));

See [official website](https://cloud.voicetext.jp/webapi) more details.
