<?php

namespace VoiceText\API;


class RequestHandler
{
    const BASE_URL = 'https://api.voicetext.jp';

    private $apiKey;
    private $apiPassword;

    public function __construct()
    {
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function setApiPassword($apiPassword)
    {
        $this->apiPassword = $apiPassword;
    }

    public function request($method, $path, $options)
    {
        $options = $options ?: [];

        $request_url = self::BASE_URL . $path;
        $auth_string = sprintf('%s:%s', $this->apiKey, $this->apiPassword);

        if ($method === 'GET') {
            $request_url .= '?' . http_build_query($options);
        }

        try
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $request_url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_USERPWD, $auth_string);
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

            if ($method === 'POST')
            {
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($options));
            }

            $response = curl_exec($ch);

            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($status_code !== 200)
            {
                throw new Exception(sprintf(
                    'HTTP Status Code: %s', $status_code));
            }

            if (curl_errno($ch))
            {
                throw new Exception(sprintf(
                    'cURL Error: No.%s - %s', curl_errno($ch), curl_error($ch)));
            }

            curl_close($ch);

            return $response;
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }
}
