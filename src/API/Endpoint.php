<?php

namespace Masterskill\AgenceHautDeGamme\API;

use Exception;

// wp_remote_get

class Endpoint
{
    protected const API_ENDPOINT = 'http://localhost:8000/api';

    public static function get(string $url, mixed $parameters): mixed
    {
        $response = wp_remote_get(Endpoint::API_ENDPOINT . $url);
        if (is_wp_error($response)) {
            throw new Exception("Error in geting the API");
        } else {
            $body = wp_remote_retrieve_body($response);
            return $body;
        }
    }
}
