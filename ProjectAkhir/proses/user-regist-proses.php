<?php
include '../koneksi/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO user VALUES('', '$username', '$password', '$nama', '$email')";

$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:../pages/user-login.php");
} else {
    echo "Input Form Gagal.";
}
