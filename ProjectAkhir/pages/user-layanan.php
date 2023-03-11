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
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/babi2.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/baguli.css">
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
                            <a class="nav-link bg-nav" href="user-menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-nav text-light" href="user-layanan.php">Layanan</a>
                        </li>
                    </ul>

                    <a type="text" class="bg-nav" onclick="alerta1()">Contact Us</a>
                    <a type="submit" class="btn btn-outline-light ms-3 text-dark log-button" href=" ../proses/user-logout.php">Logout</a>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- <center> -->
    <div class="bg-user p-5 flex-grow-1 ">
        <br><br><br>
        <div class="row gap-5 margin justify-content-center">
            <div class="w-auto">
                <div class="card" style="width: 15rem;">
                    <div class="h3 h5 card-body text-center">
                        <a class="navbar-brand" href="user-form-delivery.php">
                            <img src="../img/deliveryy.png" width="70" height="70">
                        </a>
                        <br><br>
                        Delivery
                    </div>
                </div>
            </div>
            <div class="w-auto">
                <div class="card" style="width: 15rem;">
                    <div class="h3 h5 card-body text-center">
                        <a class="navbar-brand" href="user-form-takeaway.php">
                            <img src="../img/takeaway.jpeg" width="70" height="70">
                        </a>
                        <br><br>
                        Take Away
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </center> -->
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