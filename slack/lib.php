<?php

# This function deals with the API integrates the flask abd get the result from the ML model 


function get_ml_prediction($text) {
    $url = "http://127.0.0.1:5002/predict";
    # Address to access the local server 
    $data = ['text' => $text];

    $options = [
        'http' => [
            'header'  => "Content-type: application/json",
            'method'  => 'POST',
            'content' => json_encode($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === FALSE) {
        return null; # or handle the error appropriately
    }

    $response = json_decode($result, true);
    return $response['prediction'];
}
