<?php

namespace Kaiopiola\Pagarme\Request;

use Exception as GlobalException;

class Request
{
    public static function Request(string $apiKey, string $url, string $method, array $data = null)
    {
        $client = new \GuzzleHttp\Client();

        try {
            if ($method == "GET") {
                $urlParams = '?';
                $firstRun = true;
                foreach ($data as $key => $value) {
                    if ($value != null) {
                        if(!$firstRun)
                        {
                            $urlParams .= "&";
                        }
                        $urlParams .= $key . "=" . $value . "";
                        $firstRun= false;
                    }
                }
                $url = $url . $urlParams;
                $response = $client->request($method, $url, [
                    'headers' => [
                        'accept' => 'application/json',
                        'authorization' => $apiKey,
                        'content-type' => 'application/json',
                    ],
                ]);
            } else {
                ($data != null) ? $data = json_encode($data) : $data = null;

                $response = $client->request($method, $url, [
                    'body' => $data,
                    'headers' => [
                        'accept' => 'application/json',
                        'authorization' => $apiKey,
                        'content-type' => 'application/json',
                    ],
                ]);
            }
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $message = "";
            $message = json_decode($response->getBody()->getContents());

            return [
                'status' => $e->getCode(),
                'message' => (isset($message)) ? $message : "",
            ];
        };

        $result = json_decode($response->getBody());
        return $result;
    }
}
