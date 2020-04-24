<?php
 
$curl = curl_init();
 
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.aiforthai.in.th/tagsuggestion",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "text=มจพ.&numtag=1",
  CURLOPT_HTTPHEADER => array(
    "Apikey: hZ22m05RNeitiE7VxjBDbjv7pHQNqUYJ",
    "Content-Type: application/x-www-form-urlencoded"
  )
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo $response."<br>";
   
    $obj = json_decode($response);
    
    echo($obj->tags[0]->tag);
    echo($obj->tags[0]->score);
}
?>