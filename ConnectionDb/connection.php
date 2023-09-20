<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "archit3";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if (!$conn) {
	echo "Error".error_log("Cann't Connect to db");
}

?>
