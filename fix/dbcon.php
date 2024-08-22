<?php
$host = "localhost";
$username = "505231" ;
$password = "Mahvellous.";
$db = "505231";

$dbcon = mysqli_connect($host, $username, $password, $db);
if (!$dbcon) {
	echo "there is a problem with the sql connection";
}