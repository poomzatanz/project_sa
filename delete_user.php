<?php
include_once('config.php');
$get_id = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "DELETE FROM `user` WHERE pk_user = ".$get_id;
$db->query($sql);
header("location:./user.php");
?>