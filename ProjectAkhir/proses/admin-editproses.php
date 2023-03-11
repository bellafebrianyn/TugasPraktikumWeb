<?php
include "../koneksi/koneksi.php";
$id_menu = $_GET['id_menu'];
$menu = $_POST['menu'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$sql = "UPDATE menu SET menu = '$menu', deskripsi = '$deskripsi', harga = '$harga' WHERE id_menu = '$id_menu'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location: ../pages/admin-index.php");
} else {
    echo "gabisa";
}
