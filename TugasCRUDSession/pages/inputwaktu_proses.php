<?php 
    include 'connecting.php';

$mulai  = $_POST['mulai'];
$sampai = $_POST['sampai'];

$sql = "INSERT INTO waktu VALUES(id_waktu, '$mulai', '$sampai')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if($query)
{
    header("location:inputwaktu.php");
}
else
{
    echo"Input Data Gagal.";
}
