<?php
$host = "localhost";
$username = "id19874503_marvelbyte_user" ;
$password = "D?%}HoTkFgv2A[M&";
$db = "id19874503_marvelbyte";

$dbcon = mysqli_connect($host, $username, $password, $db);
if (!$dbcon) {
	echo "there is a problem with the sql connection";
}
?>