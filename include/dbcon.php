<?php
$host = "localhost";
$username = "root" ;
$password = "";
$db = "marvelbyte";

$dbcon = mysqli_connect($host, $username, $password, $db);
if (!$dbcon) {
	echo "there is a problem with the sql connection";
}
