<?php
include "../koneksi/koneksi.php";
$id_takeaway = $_GET['id_takeaway'];
$sql = "DELETE FROM takeaway WHERE id_takeaway = $id_takeaway";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location: ../pages/admin-takeaway.php");
} else {
    echo "gabisa";
}
