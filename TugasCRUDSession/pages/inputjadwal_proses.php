<?php 
    include 'connecting.php';

$mk = $_POST['inputmk'];
$jurusan = $_POST['inputjurusan'];
$lab = $_POST['inputlab'];
$waktu = $_POST['inputwaktu'];


$sql = "INSERT INTO jadwal VALUES(id_jadwal, '$mk', '$jurusan', '$lab', '$waktu')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if($query)
{
    header("location:inputjadwal.php");
}
else
{
    echo"Input Jadwal Gagal.";
}
