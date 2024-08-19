<?php
$host = "localhost";
$username = "505231" ;
$password = "Mahvellous.";
$db = "505231";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
?>