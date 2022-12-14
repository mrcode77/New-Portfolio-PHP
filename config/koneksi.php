<!-- create koneksi php -->

<?php
$host = "localhost";
$user = "admin";
$pass = "Administrator*";
$db = "myportfolio";
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>