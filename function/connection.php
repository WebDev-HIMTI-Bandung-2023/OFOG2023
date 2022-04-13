<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "HIMTIJakarta";
// $port = 3306;

$koneksi = mysqli_connect($server, $username, $password, $database) or die(mysqli_connect_error());
?>