<?php
include_once('config.php');
 $u=  $_POST['userid'];
 $u1=  $_POST['pass'];
 $u2=  $_POST['first'];
 $u3=  $_POST['last'];
 $u4=  $_POST['email'];
 $u5=  $_POST['phone'];
 $u6=  $_POST['status_name'];
 $u7=  $_POST['login_status'];
 $id = $_POST['custId'];
 $sql = "UPDATE `dekdanalatic2020`.`user` SET `useid` = '".$u."', `password` = '".$u1."', `email` = '".$u4."', `first_name` = '".$u2."', `last_name` = '".$u3."', `phone` = '".$u5."', `login_status` = '".$u7."' , `name_status` = '".$u6."' WHERE `pk_user` ".$id;

 $db->query($sql);
 header("location:./user.php");
?>