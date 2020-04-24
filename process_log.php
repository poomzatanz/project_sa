<?php
session_start();
include_once('config.php');

	$id = $_POST['userid'];
	$pass = $_POST['pass'];


	if($id==null and $pass==null) //ทำให้ค่าเป็นnot null
	{
		echo"
		<script>
		window.location='edit_user.php';
		</script>
		";
	}
	else
	{

		$sqltext1 = "select*from user where useid='".$id."' and password ='".$pass."'";
		echo $sqltext1;
		$qury1 = mysqli_query($db,$sqltext1);
		$result=mysqli_fetch_array($qury1,MYSQLI_ASSOC);

		if(!$result)
		{
			
		
			
		}
		else
		{
			
			$_SESSION["pk_user"] = $result["pk_user"];
			$_SESSION["login_status"] = $result["login_status"];
			session_write_close();
			if($result["login_status"] == "admin")
			{
				header("location:admin/index.php");
			}
			else{
				header("location:edit_user.php");
			}

		}
	}

?>

