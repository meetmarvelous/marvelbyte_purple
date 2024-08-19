<?php
$host = "localhost";
$username = "id19874503_marvelbyte_user" ;
$password = "D?%}HoTkFgv2A[M&";
$db = "id19874503_marvelbyte";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
?>