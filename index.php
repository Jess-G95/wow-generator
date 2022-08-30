<html>
 <head>
  <title>WOW</title>
 </head>
 <body>
 <?php echo file_get_contents("header.html"); ?> 
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
 if (isset($_GET['getWow'])) {
    callWow();
  }
 ?>
 <div class="container">
    <img src="/assets/owen-button.jpg">
    <a href='index.php?getWow=true'>Click for a wow!</a>
 </div>
 </body>
</html>