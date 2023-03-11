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
    <title>FORM DELIVERY</title>
    <link rel="shortcut icon" href="../img/babi2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    <center class="bg-menu flex-grow-1">
        <div class="">
            <div class="card" style="width: 70rem;">
                <img src="../img/card.jpg" class="card-img-top" alt="..." height="450">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Item</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Note</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Link Bukti Payment</th>
                            </tr>
                        </thead>

                        <form method="POST" action="../proses/user-delivery-proses.php">
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" name="nama">
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example" name="menu">
                                            <option selected>Pilih Menu</option>
                                            <?php
                                            include '../koneksi/koneksi.php';

                                            $mysql = "SELECT * FROM menu";
                                            $query = mysqli_query($connect, $mysql);

                                            while ($data = mysqli_fetch_array($query)) {

                                            ?>
                                                <option value=" <?= $data['id_menu'] ?>"><?= $data['menu'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control form-control-sm" type="number" aria-label=".form-control-sm example" name="jumlah">
                                    </td>
                                    <td>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" name="alamat">
                                    </td>
                                    <td>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" name="nohp">
                                    </td>
                                    <td>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" name="note">
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example" name="payment">
                                            <option selected>Pilih Payment</option>
                                            <option value="cash">Cash</option>
                                            <option value="transfer">Transfer</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control form-control-sm" type="text" aria-label=".form-control-sm example" name="bukti">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary" onclick="alerta2()">Pesan Sekarang</button>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </center>

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

        function alerta2() {
            alert("Terimakasih Telah Memesan di Bagul Bli Ali!");
        }
    </script>
</body>

</html>