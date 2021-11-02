<?php

include 'handlers/af-rapi-say-hi.php';
include 'handlers/af-rapi-tell-me-a-joke.php';

add_action('rest_api_init', function() {
    register_rest_route('af', 'sayhi', [
        'methods'  => 'GET',
        'callback' => 'af_rapi_say_hi',
    ]);

    register_rest_route('af', 'tell-me-a-joke', [
        'mtheods'  => 'GET',
        'callback' => 'af_rapi_tell_me_a_joke',
    ]);
});