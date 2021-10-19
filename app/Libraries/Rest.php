<?php

namespace App\Libraries;

class Rest
{
    public function callRest($act, $token, $filter, $order, $limit=0, $offset=0)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_PORT => "8082",
            CURLOPT_URL => "http://10.10.20.26:8082/ws/live2.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n\t\"act\": \"$act\",\n\t\"token\": \"$token\",\n\t\"filter\": \"$filter\",\n\t\"order\": \"$order\",\n\t\"limit\": $limit,\n\t\"offset\": $offset\n}",
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return json_decode($response) ;
        }
    }
}
