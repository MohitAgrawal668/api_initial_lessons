<?php
    $ch = curl_init();

    $headers=[
        "Authorization: Client-ID yl7PdgAl3J9f3_4y8PhWdsW41UteDkvt0Jd4Hpve9HY"
    ];

    curl_setopt_array($ch,[
        CURLOPT_URL => "https://api.unsplash.com/photos/random",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_HEADER => true
    ]);
    //curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

    $content_length = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

    curl_close($ch);
    echo $status_code."\n";
    echo $content_type."\n";
    echo $status_length."\n";
    echo $response."\n";
?>