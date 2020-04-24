<?php
include_once('config.php');
$str = "INSERT INTO `heroku_4d434d55c02adba`.`user`(`useid`, `password`, `email`, `first_name`, `last_name`, `phone`, `login_status`, `name_status`, `active_status`) VALUES ('".$_POST['userid']."', '".$_POST['pass']."', '".$_POST['email']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['phone']."', 'user', '".$_POST['status_name']."', 'off')";
echo $str;
$db->query($str);
header("location:../index.php");
?>