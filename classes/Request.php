<?php

//http request funktion
function httpRequest($url) {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        die('Curl error: ' . curl_error($ch));
    }

    curl_close($ch);

    return json_decode($response);
}
