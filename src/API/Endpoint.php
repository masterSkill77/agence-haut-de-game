<?php

namespace Masterskill\AgenceHautDeGamme\API;


use Masterskill\AgenceHautDeGamme\Classes\Option;
use Exception;

// wp_remote_get

class Endpoint
{
    protected const API_ENDPOINT = 'http://127.0.0.1:8000/api/v1';

    public static function get(string $url, mixed $parameters = []): mixed
    {
        $args = Endpoint::mergeArgs($parameters);
        $response = wp_remote_get(Endpoint::API_ENDPOINT . $url, $args);
        if (is_wp_error($response)) {
            throw new Exception("Error in getting the API");
        } else {
            $body = wp_remote_retrieve_body($response);
            return json_decode($body, true);
        }
    }

    protected static function mergeArgs(mixed $params): array
    {
        return [
            'headers' => [
                'Authorization' => 'Bearer ' . Option::getThemeOption(Option::API_OPTION),
                'Accept' => 'application/json',
                ...$params
            ]
        ];
    }

    public static function getImageAgent(string $url)
    {
        return $url;
    }
}
