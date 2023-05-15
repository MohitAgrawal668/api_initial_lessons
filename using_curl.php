<?php
    $api_key="sk_test_51N80laSAaB4KoL2VxtQwr42MBaOdrUg4WlilWzocqkYj9JN33eFOQuNgrzZczFgTfLDPsQ6KVXWCa7bqbtJK44Om00d8YzUKiI";
    
    $data=[
        "name"=>"ravi",
        "email"=>"ravi@gmail.com"
    ];

    require __DIR__."/vendor/autoload.php";
    $stripe=new \Stripe\StripeClient($api_key);
    $customer=$stripe->customers->create($data);
    echo $customer;

    
    /*curl_setopt_array($ch,[
        CURLOPT_URL => "https://api.stripe.com/v1/customers",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERPWD => $api_key,
        CURLOPT_POSTFIELDS=>http_build_query($data)
    ]);
    $response = curl_exec($ch);

    curl_close($ch);
    echo $response;*/
?>