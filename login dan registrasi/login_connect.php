<?php

$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "daftar_pelanggan";

$koneksi = mysqli_connect($hostname, $user, $password, $dbname) or die(mysqli_error($koneksi));

?>