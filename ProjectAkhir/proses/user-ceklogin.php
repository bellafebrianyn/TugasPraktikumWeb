<?php
session_start();
include('../koneksi/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from user WHERE username = '$username' AND password='$password'";
$data = mysqli_query($connect, $sql) or die;
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../pages/user-home.php");
} else {
    header("location: ../pages/user-login.php?pesan=gagal");
}
