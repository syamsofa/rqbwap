<?php
require_once('vendor/autoload.php'); // if you use Composer
//require_once('ultramsg.class.php'); // if you download ultramsg.class.php

// $ultramsg_token = "0aw976k6gc8hj7lz"; // Ultramsg.com token
// $instance_id = "instance21886"; // Ultramsg.com instance id
// $client = new UltraMsg\WhatsAppApi($ultramsg_token, $instance_id);
// for ($i = 1; $i < 200; $i++) {
//     $to = "6289510279475";
//     $body = "Hello world --".$i;
//     $api = $client->sendChatMessage($to, $body);
//     print_r($api);
// }


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ultramsg.com/instance21886/messages/image",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "token=0aw976k6gc8hj7lz&to=6285211534677&image=https://file-example.s3-accelerate.amazonaws.com/images/test.jpg&caption=OK&referenceId=&nocache=",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}