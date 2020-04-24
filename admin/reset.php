<?php
include('config.php');


$sql = "UPDATE `heroku_4d434d55c02adba`.`check` SET `sum` = '-1' WHERE `pk` = 1";
$result	=	$db->query($sql);
echo"
<script>
window.location='get_data.php';
</script>
";
?>