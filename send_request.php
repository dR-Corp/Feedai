<?php

    $data = json_decode(file_get_contents('php://input'), true);

    // Configuration de la requête cURL
    $ch = curl_init('https://api.openai.com/v1/engines/text-davinci-003/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer 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'
    ));

    $response = curl_exec($ch);
    echo json_encode($response);
    curl_close($ch);

?>