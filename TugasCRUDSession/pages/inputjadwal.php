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
    <title>Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>

<style>
    .loginn {
        width: 400px;
        text-align: center;
        padding: 2px;
        box-sizing: border-box;
        border-radius: 15px;
    }

    .dropdown-input {
        background-color: rgba(31, 31, 44, 255)
    }
</style>

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
                        <a class="nav-link text-secondary" href="inputlab.php">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="inputwaktu.php">Waktu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="inputjadwal.php">Jadwal</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link active text-secondary" aria-current="page" href="../logout.php">Logout</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="main">
        <div class="mt-3 w-100 container">
            <div class="row">
                <div class="col-7">
                    <table class="table text-light fs-6 text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">MK Praktikum</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Lab</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'connecting.php';
                            $no = 1;
                            $mysql = "SELECT jadwal.id_jadwal, jadwal.mk, jadwal.jurusan, lab.lab, waktu.waktu_mulai, waktu.waktu_selesai
                            FROM jadwal
                            INNER JOIN lab ON jadwal.id_lab = lab.id_lab
                            INNER JOIN waktu ON jadwal.id_waktu = waktu.id_waktu";
                            $query = mysqli_query($connect, $mysql);

                            while ($data = mysqli_fetch_array($query)) {

                            ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $data['mk'] ?></td>
                                    <td><?= $data['jurusan'] ?></td>
                                    <td><?= $data['lab'] ?></td>
                                    <td><?= $data['waktu_mulai'] ?> - <?= $data['waktu_selesai'] ?></td>
                                    <td><a type="submit" href="editjadwal.php? id_jadwal= <?= $data['id_jadwal'] ?>" class="btn btn-outline-light">Edit</a>
                                        <a type="submit" href="hapus.php? id_jadwal= <?= $data['id_jadwal'] ?>" class="btn btn-outline-danger" value="submit">Delete</a>
                                    </td>
                                </tr>


                        </tbody>
                    <?php
                                $no++;
                            }
                    ?>
                    </table>
                </div>

                <div class="col-5">
                    <form method="POST" action="inputjadwal_proses.php">
                        <center>

                            <a>Input Jadwal Praktikum
                                <hr size="2px" width="80%" color="white" />
                            </a>
                            <h6>Buat jadwal praktikum sesuai dengan yang diinginkan</h6>
                            <div class="loginn">
                                <form>
                                    <div class="row mt-5">
                                        <div class="col-8">
                                            <input type="text" class="form-control bg-transparent text-white w-100 " placeholder="Masukkan MK Praktikum" name="inputmk">
                                        </div>
                                        <div class="col-4 fs-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inputjurusan" id="inlineRadio1" value="IF">
                                                <label class="form-check-label" for="inlineRadio1">IF</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inputjurusan" id="inlineRadio2" value="SI">
                                                <label class="form-check-label" for="inlineRadio2">SI</label>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            
                                            <select class="form-select dropdown-input text-light" aria-label="Default select example" name="inputlab">
                                            <option selected>Lab</option>
                                               <?php
                                                include 'connecting.php';

                                                $mysql = "SELECT * FROM lab";
                                                $query = mysqli_query($connect, $mysql);

                                                while ($data = mysqli_fetch_array($query)) {

                                                ?>
                                                    <option value=" <?= $data['id_lab'] ?>"><?= $data['lab'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <select class="form-select dropdown-input text-light" aria-label="Default select example" name="inputwaktu">
                                                <option selected>Waktu</option>
                                                <?php
                                                include 'connecting.php';

                                                $mysql = "SELECT * FROM waktu";

                                                $query = mysqli_query($connect, $mysql);

                                                while ($data = mysqli_fetch_array($query)) {

                                                ?>
                                                    <option value=" <?= $data['id_waktu'] ?>"><?= $data['waktu_mulai'] ?>-<?= $data['waktu_selesai'] ?></option>
                                                <?php
                                                }
                                                ?>

                                            </select>
                                        </div>

                                        <div class="col">
                                            <a href="#"> <button class="btn btn-outline-light w-100 mt-5">Submit</button>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <button type="reset" class="btn btn-outline-secondary w-100 mt-5" type="submit" value="submit">Reset</button>
                                        </div>
                                    </div>
                            </div>
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