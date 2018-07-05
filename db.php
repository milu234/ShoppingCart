<?php
$servername = "localhost";
$username="root";
$password="sanchaitahazra@123";
$db="MilanStore";
//Create Connection

$con = mysqli_connect($servername,$username,$password,$db);

//Check connection

if (!$con) {
	die("Connection Failed".mysqli_connect_error());
	# code...
}
?>