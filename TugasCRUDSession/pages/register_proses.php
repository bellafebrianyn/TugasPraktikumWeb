<?php 

include 'connecting.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$register = "INSERT INTO user VALUES (id_user, '$user', '$pass')";
$query = mysqli_query($connect, $register) or die (mysqli_error($connect));

if($query){
    header("location:register.php");

}else{
    echo "Registrasi Gagal. Silahkan Coba Kembali";
}

?>