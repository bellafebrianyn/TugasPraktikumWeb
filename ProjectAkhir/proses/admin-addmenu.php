<?php
include('../koneksi/koneksi.php');
$menu = $_POST['menu'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];

$sql = "INSERT INTO menu VALUES('','$menu', '$deskripsi', '$harga')";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("Location: ../pages/admin-daftarmenu.php");
} else {
    echo "gagal!";
}
