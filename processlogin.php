<?php
session_start();

if($_GET['uname']=='admin' and $_GET['upass']=='admin'){
	$_SESSION["pk_member"] = $_GET['uname'];
	$_SESSION["status"] = $_GET['upass'];
	session_write_close();
	header("location:admin/index.php");
}





?>

