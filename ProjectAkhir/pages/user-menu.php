<!DOCTYPE html>
<html lang="en">
<?php
include('../koneksi/koneksi.php');
session_start();
if (empty($_SESSION['username'])) {
    header("location: user-login.php?pesan=belum_login");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/baguli.css">
    <link rel="shortcut icon" href="../img/babi2.png" type="image/x-icon">
</head>

<body style="min-height: 100vh;" class="d-flex flex-column">
    <div class="bg-nav">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">
                    <img src="../img/babi3.png" alt="Bootstrap" width="70" height="70">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link bg-nav" href="user-home.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-nav text-light" href="user-menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-nav" href="user-layanan.php">Layanan</a>
                        </li>
                    </ul>

                    <a type="text" class="bg-nav" onclick="alerta1()">Contact Us</a>
                    <a type="submit" href="../proses/user-logout.php" class="btn btn-outline-light ms-3 text-dark log-button">Logout</a>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <?php
    include '../koneksi/koneksi.php';
    $sql = "SELECT * FROM menu";
    $query = mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_array($query)) {

    ?>

        <div class="bg-menu flex-grow-1 py-5">
            <center>
                <div class="card text-bg-light" style="max-width: 650px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../img/slide1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title mt-4"><?= $data['menu'] ?></h5>
                                <p class="card-text"><?= $data['deskripsi'] ?> </p>
                                <h6 class="card-title">Rp. <?= $data['harga'] ?></h6>
                                <a type="submit" class="btn btn-secondary" href="user-layanan.php">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
        }
            ?>
            </center>
        </div>


        <script>
            function alerta1() {
                alert("0812134423 atau via email : cs@bagulbliai.com");
            }
        </script>
</body>

</html>