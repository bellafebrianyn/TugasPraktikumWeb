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
    <title>Laboratorium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="dashboard.php">Praktikum IF | 123210089</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-secondary" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="inputlab.php">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="inputwaktu.php">Waktu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="inputjadwal.php">Jadwal</a>
                    </li>
                </ul> -->
                <span class="navbar-text">
                    <a class="nav-link active text-secondary" aria-current="page" href="../logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="main">
        <div class="mt-3 w-100 container">
            <div class="row">
                <div class="col">
                    <table class="table text-light fs-6 text-center table-md">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Lab</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'connecting.php';
                            $no = 1;
                            $query = mysqli_query($connect, "SELECT * FROM lab");

                            while ($data = mysqli_fetch_array($query)) {

                            ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $data['lab'] ?></td>
                                    <td><a type="submit" value="submit" class="btn btn-outline-danger" href="hapus.php?id_lab=<?= $data['id_lab'] ?>">Delete</a></td>
                                </tr>

                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <div style="font-size:15px;">
                        <?php 
                            if (isset($_GET['message'])) {
                                if ($_GET['message'] == 'gagalhapus') {
                                    echo "Hapus Data Lab Gagal. Karena Lab Digunakan pada Jadwal";
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="col">
                    <form method="POST" action="inputlab_proses.php">
                        <center>
                            <a>Input Data Lab
                                <hr size="2px" width="80%" color="white" />
                            </a>
                            <h6>Masukkan Ruangan Lab yang Tersedia</h6>
                            <div class="login">
                                <input class="form-control bg-transparent mt-3 text-white" type="text" placeholder="Input Nama Lab" aria-label="default input example " name="inputlab">
                                <button class="btn btn-outline-light w-100 mt-5" type="submit" value="submit">Submit</button>
                            </div>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>