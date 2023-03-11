<?php  

session_start();

include 'pages/connecting.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql	= "SELECT * FROM user WHERE username='$username' AND password='$password'";

$data	= mysqli_query($connect, $sql);
$cek	= mysqli_num_rows($data);

if($cek>0) {
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:pages/dashboard.php");
} else {
	header("location:index.php?message=gagal");
}

?>