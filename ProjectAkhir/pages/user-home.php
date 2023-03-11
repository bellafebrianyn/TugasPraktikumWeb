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
    <title>BAGUL BLI AI</title>
    <link rel="shortcut icon" href="../img/babi2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/baguli.css">
</head>

<body>
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
                            <a class="nav-link bg-nav text-light" href="user-home.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-nav" href="user-menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-nav" href="user-layanan.php">Layanan</a>
                        </li>
                    </ul>

                    <a type="text" class="bg-nav" onclick="alerta1()">Contact Us</a>
                    <a type="submit" class="btn btn-outline-light ms-3 text-dark log-button" href="../proses/user-logout.php">Logout</a>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <center>
        <div class="bg-user">
            <br><br><br>
            <h1 class="h3 text-center">Welcome to Bagul Bli Ai</h1>
            <h5 class="h3 h5 mt-1">Dengan bumbu istimewa khas Pulau Bali sejak 1984, <br> menjadikan Babi Guling Bali kami salah satu yang terbaik</h5>
            <div class="p-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner p-10 pt-0">
                        <div class="carousel-item active">
                            <img src="../img/slide1.jpg" class="d-block w-50 h-custom" alt="babi1">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/slide2.jpg" class="d-block w-50 h-custom" alt="babi2">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/slide3.jpg" class="d-block w-50 h-custom" alt="babi3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <footer class="sticky-footer bg-dark">
            <div class="container my-auto">
                <div class="copyright text-center my-auto text-white">
                    <span>Copyright &copy; 2021 Bagul Bli Ai</span>
                </div>
            </div>
        </footer>

        <script>
            function alerta1() {
                alert("0812134423 atau via email : cs@bagulbliai.com");
            }
        </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>