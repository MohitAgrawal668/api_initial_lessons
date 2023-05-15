<?php
    $ch = curl_init();

    $headers=[
        "Authorization: token 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",
        "USER-Agent:MohitAgrawal668"
    ];

    $payload=json_encode([
        "name" => "Created from API",
        "description" => "An example of api"
    ]);

    curl_setopt_array($ch,[
        CURLOPT_URL => "https://api.github.com/user/repos",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $payload   
    ]);
    //curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);

    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    
    curl_close($ch);
    echo $status_code."\n";
    
    echo $response."\n";
?>