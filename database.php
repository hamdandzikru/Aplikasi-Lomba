<?php
$host = "localhost";
$username = "root";
$password = "";
$namadatabase = "";
$con = @mysqli_connect("localhost", "root", "", "aplikasi_lomba");

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
echo 'Connected to MySQL';
?>