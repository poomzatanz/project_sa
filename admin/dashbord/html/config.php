<?php
error_reporting(0);
ini_set('max_execution_time', 300);
define('DB_NAME', 'dekdanalatic2023');
define('DB_USER', 'poomzaadekd2023');
define('DB_PASSWORD', 'poomzaadekd2023');
define('DB_HOST', 'db4free.net');
// Create connection
$db     =   new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $db->set_charset("utf8");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
