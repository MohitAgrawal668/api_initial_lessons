<?php
    $ch = curl_init();

    $headers=[
        "Authorization: token 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",
        "USER-Agent:MohitAgrawal668"
    ];

    curl_setopt_array($ch,[
        CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_CUSTOMREQUEST => "PUT"
    ]);
    //curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    
    curl_close($ch);
    echo $status_code."\n";
    
    echo $response."\n";
?>