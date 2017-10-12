<?php
    $ch = curl_init();
    curl_setopt_array($ch , array(
        CURLOPT_URL            => 'http://ooonedvizhimostizakon.intrumnet.com/onlineforms' ,
        CURLOPT_POST           => true ,
        CURLOPT_RETURNTRANSFER => true ,
        CURLOPT_CUSTOMREQUEST  => "POST" ,
        CURLOPT_POSTFIELDS     => http_build_query(array(
            "action"   => "fillform" ,
            "formtype" => 74 ,
            "data"     => array(
                "def_customer" => array(
                    "name" => 'TEST' ,
                    "phone" =>'8882222222'
                )
            )
        ))
    ));
    $responseData = json_decode(curl_exec($ch));//Ответ от сервера
    curl_close($ch);
    print_r($responseData);