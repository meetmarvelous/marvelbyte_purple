<?php
$host = "	fdb32.awardspace.net";
$username = "4083648_marvel" ;
$password = "Marvelous12345";
$db = "4083648_marvel";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
?>