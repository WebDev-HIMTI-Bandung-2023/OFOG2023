<?php

$server = "localhost";
$username = "himtiorg_himtijkt";
$password = "OFOG_2022";
$database = "himtiorg_himtijkt";
$port = 3306;

$koneksi = mysqli_connect($server, $username, $password, $database, $port) or die(mysqli_connect_error());