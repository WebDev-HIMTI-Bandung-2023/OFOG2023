<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "himtiorg_himtijkt";
$port = '3306';

$koneksi = mysqli_connect($server, $username, $password, $database, $port) or die(mysqli_connect_error());