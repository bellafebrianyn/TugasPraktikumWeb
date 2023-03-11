<?php
include "../koneksi/koneksi.php";
$id_delivery = $_GET['id_delivery'];
$sql = "DELETE FROM delivery WHERE id_delivery = $id_delivery";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location: ../pages/admin-delivery.php");
} else {
    echo "gabisa";
}
