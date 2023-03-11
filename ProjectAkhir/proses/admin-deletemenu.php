<?php
include "../koneksi/koneksi.php";
$id_menu = $_GET['id_menu'];
$sql = "DELETE FROM menu WHERE id_menu = $id_menu";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location: ../pages/admin-daftarmenu.php");
} else {
    echo "gabisa";
}
