<?php
 session_start(); 
 include('config.php');
$process = $_POST['get'];
$query = "UPDATE `user` SET `active_status` = 'ทำงาน' WHERE `pk_user` = ".$_SESSION["pk_member"];
$result = mysqli_query($db,$query);



$data = array("process" => $process,"id" => $_SESSION["pk_member"]);       

$data_string = json_encode($data);                                                                                   
 $ch = curl_init('http://localhost:8080/example');                                                                      
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
 curl_setopt($ch, CURLOPT_TIMEOUT_MS, 2000);                                                                    
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
     'Content-Type: application/json',                                                                                
     'Content-Length: ' . strlen($data_string))                                                                 
 );
//  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
 //curl_exec($ch);
 $output = curl_exec($ch);

 // close curl resource to free up system resources
 curl_close($ch);

 echo $output;
  echo"
  <script>
  window.location='get_data.php';
  </script>
  ";
?>