<?php
session_start();
if($_SESSION['pk_user'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['login_status'] != "admin")
	{
		echo "This page for User only!";
		exit();
	}	


?>
  