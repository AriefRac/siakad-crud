<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "db_siakad";
$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}