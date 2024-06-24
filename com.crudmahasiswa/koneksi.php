<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "kampus";
$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
