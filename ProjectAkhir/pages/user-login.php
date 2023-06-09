<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Login Page</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/babi2.png" type="image/x-icon" />
</head>

<body class="bgpink">
    <div class="p-5 container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="../img/babi1.jpg" width="480" height="530" alt="" />
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 te">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="../proses/user-ceklogin.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" />
                                        </div>
                                        <div class="form-group"></div>
                                        <input class="btn btn-outline-primary btn-user btn-block" type="submit" value="Login" />
                                        <br>
                                        <div class="form-group text-center small margin">
                                            <?php
                                            if (isset($_GET['pesan'])) {
                                                if ($_GET['pesan'] == "gagal") {
                                                    echo "Login gagal! username dan password salah!";
                                                } else if ($_GET['pesan'] == "logout") {
                                                    echo "*anda telah berhasil logout";
                                                } else if ($_GET['pesan'] == "belum_login") {
                                                    echo "Anda harus login untuk mengakses halaman tersebut!";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </form>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <hr />
                                    <div class="text-center" style="color: grey">
                                        Belum ada akun? <a href="user-regist.php">Daftar di sini.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
</body>

</html>