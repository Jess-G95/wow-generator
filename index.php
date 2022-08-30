<html>
 <head>
  <title>WOW</title>
 </head>
 <body>
 <?php echo file_get_contents("header.html"); ?> 
 <img src="/assets/owen-button.jpg">
 <?php
 $headers = [
        "Accept: application/json"
    ];
    
 $ch = curl_init("https://owen-wilson-wow-api.herokuapp.com/wows/random");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_exec($ch);
 curl_close($ch);
 ?>
 </body>
</html>