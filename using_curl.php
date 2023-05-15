<?php
    $ch = curl_init();

    $headers=[
        "Authorization: Client-ID yl7PdgAl3J9f3_4y8PhWdsW41UteDkvt0Jd4Hpve9HY"
    ];

    $response_headers=[];

    $header_callback = function($ch, $header) use (&$response_headers)
        {
             $len = strlen($header);
             $response_headers[]=$header;
             return $len;   
        };
    curl_setopt_array($ch,[
        CURLOPT_URL => "https://api.unsplash.com/photos/random",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_HEADERFUNCTION => $header_callback
    ]);
    //curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    
    curl_close($ch);
    echo $status_code."\n";
    print_r($response_headers);    
    echo $response."\n";
?>