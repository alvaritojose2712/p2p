<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;

use Http;
use Response;

class LoginController extends Controller
{
   public function login()
   {
    //return view("index");
    $base = "https://api.binance.com";
    $uri1 = "/sapi/v1/c2c/ads/updateStatus";

    $secretKey = "ir95xIdxdC8ZxK6aOlupO9cJlnMSVwj3UfLLYTRTvQCbrN4kBLTWrRT1RAK8w7DE";

    $headers = [
        "X-MBX-APIKEY" => "e3ZKbZ2Cc9MbbmIcMQKi2HFZmidOVcmPVvx58FUYA8jjVgfTtSfl62D0vDK1PIf3",
    ];

    $fecha = date_create();
    

    $timestamp = round(microtime(true) * 1000);

    $payload = [
        "advNos"=> ["11377052865241579520"],
        "advStatus"=> 1,
        //"timestamp" => $timestamp,

    ];
    $payload = http_build_query($payload);

    $signature =  hash_hmac('sha256',$payload, $secretKey);
    $params = [
        /* "advNos"=> ["11377052865241579520"],
        "advStatus"=> 1 */
        "timestamp" => $timestamp,
        "signature" => $signature,

        "advNos"=> ["11377052865241579520"],
        "advStatus"=> 1,
    ];

    $response = Http::withHeaders($headers)
    ->asForm()
    ->post($base.$uri1 , $params);

    
    
    return $response;        
    if ($response->ok()) {
        $res = $response->json();
    }else{
        return "Error: ".$response->body();
    } 
   }
}
