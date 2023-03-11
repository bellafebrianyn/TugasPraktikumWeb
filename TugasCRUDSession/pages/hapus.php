<?php
if(isset($_GET['id_lab'])) {
	include 'connecting.php';
	$idlab = $_GET['id_lab'];
	$query = mysqli_query($connect, "DELETE FROM lab WHERE id_lab = $idlab");

	if($query){
		header("location:inputlab.php");
	}else{
		header("location:inputlab.php?message=gagalhapus");
	}
}
else if(isset($_GET['id_waktu'])) {
	include 'connecting.php';
	$idwaktu = $_GET['id_waktu'];
	$query = mysqli_query($connect, "DELETE FROM waktu WHERE id_waktu = $idwaktu");

	if($query){
		header("location:inputwaktu.php");
	}else{
		header("location:inputwaktu.php?message=gagalhapus");
	}
 }
 else if(isset($_GET['id_jadwal'])) {
	include 'connecting.php';
	$idjadwal = $_GET['id_jadwal'];
	$query = mysqli_query($connect, "DELETE FROM jadwal WHERE id_jadwal = $idjadwal");

	if($query){
		header("location:inputjadwal.php");
        die();
	}else{
		echo "Data Tidak Berhasil Dihapus <a href='inputjadwal.php'>Kembali</a>";
	}
 }