<?php
include '../koneksi/koneksi.php';

$nama = $_POST['nama'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$jam = $_POST['jam'];
$note = $_POST['note'];
$payment = $_POST['payment'];
$bukti = $_POST['bukti'];


$sql = "INSERT INTO takeaway VALUES('', '$nama', '$menu', '$jumlah', '$jam', '$note', '$payment', '$bukti')";

$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:../pages/user-home.php");
} else {
    echo "Input Form Gagal.";
}
