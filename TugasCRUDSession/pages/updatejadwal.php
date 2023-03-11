<?php
        include 'connecting.php';
        $mk = $_POST['inputmk'];
        $id_jadwal = $_POST['id_jadwal'];
        $jurusan = $_POST['inputjurusan'];
        $lab = $_POST['inputlab'];
        $waktu = $_POST['inputwaktu'];


        $mysql = "UPDATE jadwal SET mk = '$mk', jurusan = '$jurusan', id_lab = '$lab', id_waktu = '$waktu' WHERE id_jadwal = '$id_jadwal'";

        $query = mysqli_query($connect, $mysql) or die (mysqli_error($connect));

        if($query){
            header("location:inputjadwal.php");

        }else{
            echo "Update Data Gagal. Silahkan Coba Kembali";
        }
    ?>