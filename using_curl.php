<?php
    $ch = curl_init();

    $headers=[
        "USER-Agent:MohitAgrawal668"
    ];

    
    curl_setopt_array($ch,[
        CURLOPT_URL => "https://api.github.com/gists/33313cbe4d46b5f928cd7b554521c279",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers
    ]);
    $response = curl_exec($ch);

    curl_close($ch);
    $data = json_decode($response, true);
    print_r($data);
?>