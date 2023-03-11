<?php 
    include 'connecting.php';

$lab = $_POST['inputlab'];

$sql = "INSERT INTO lab VALUES(id_lab, '$lab')";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if($query)
{
    header("location:inputlab.php");
}
else
{
    echo"Input Data Gagal.";
}
