<?php

namespace App\Http\Helpers;

use Illuminate\Http\Request;

class ApiCall
{
    
   public function runApiCall($arg){
//       dd($arg);
              
       $api_url = url('/api/v1');
       $fullApiUrl = $api_url . '?req=' .json_encode($arg);
       dd($fullApiUrl);
       $curl = curl_init();
       
       
       curl_setopt_array($curl, array(
           CURLOPT_POST => 1,
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_URL => $api_url,
           CURLOPT_POSTFIELDS => array(
               'request' => json_encode($arg)
           ),
       ));
       
       
       $result = curl_exec($curl);
       
       curl_close($curl);
       
       return json_decode($result);
       
       
   }
}
