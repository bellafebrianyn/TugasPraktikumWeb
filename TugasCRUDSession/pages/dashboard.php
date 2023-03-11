<?php 
	session_start();
	if(empty($_SESSION['username'])) {
		header("location:../index.php?message=belum_login");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>

<style>
    .main {
        padding: 10%;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="dashboard.php">Praktikum IF | 123210089</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-text">
                <a class="nav-link active text-secondary" aria-current="page" href="../logout.php">Logout</a>
            </span>
        </div>
    </nav>

    <div class="main">

        <h6>Selamat Datang di</h6>
        <h1>Praktikum Informatika</h1>

        <div class="mt-5 w-100 container">
            <div class="row ms-10 ">
                <div class="col-6">
                    <a type="submit" class="btn btn-outline-light w-100" href="inputlab.php">Lab</a>
                </div>
                <div class="col-6">
                    <a type="submit" class="btn btn-outline-light w-100" href="inputwaktu.php">Waktu Praktikum</a>
                </div>
                <div>
                    <a type="submit" class="btn btn-outline-light w-100" href="inputjadwal.php">Jadwal Praktikum</a>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>