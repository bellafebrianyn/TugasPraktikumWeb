<?php
include '../koneksi/koneksi.php';

$id_delivery = $_POST['id_delivery'];
$nama = $_POST['nama'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$note = $_POST['note'];
$payment = $_POST['payment'];
$bukti = $_POST['bukti'];


$sql = "INSERT INTO delivery VALUES(id_delivery, '$nama', '$menu', '$jumlah', '$alamat', '$nohp', '$note', '$payment', '$bukti')";

$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:../pages/user-home.php");
} else {
    echo "Input Form Gagal.";
}
