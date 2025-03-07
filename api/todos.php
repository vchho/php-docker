<?php
function fetchTodos() {
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://jsonplaceholder.typicode.com/todos",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json'
        ]
    ]);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        return ['error' => curl_error($curl)];
    }

    curl_close($curl);

    return json_decode($response, true);
}
?>