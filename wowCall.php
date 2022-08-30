<?php
  function callWow() {
 $headers = [
        "Accept: application/json"
    ];
 $ch = curl_init("https://owen-wilson-wow-api.herokuapp.com/wows/random");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_exec($ch);
 curl_close($ch);
 }
 ?>