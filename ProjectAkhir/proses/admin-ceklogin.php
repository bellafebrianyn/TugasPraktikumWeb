<?php
session_start();
include('../koneksi/koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from admin WHERE username = '$username' AND password = '$password'";
$data = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($data);
echo "$username dan $password ";

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../pages/admin-index.php");
} else {
    header("location: ../pages/admin-login.php?pesan=gagal");
}
