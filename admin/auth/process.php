<!-- Create process login php -->

<?php
session_start();
include '../../config/koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' and password='$pass'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['login'] = "true";
    $_SESSION['username'] = $user;
    $_SESSION['message'] = "Login Berhasil";
    header("location:../index.php");
} else {
    $_SESSION['message'] = "Login Gagal";
    header("location:login.php");
}
?>