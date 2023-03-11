<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
</head>

<body>
    <div class="main">

        <form method="POST" action="login_proses.php">
            <center>
                <a>Login Page
                    <hr size="1px" width="100%" color="white" />
                </a>
                <div style="font-size: 15px;">
                    <?php
                    if (isset($_GET['message'])) {
                        if ($_GET['message'] == "gagal") {
                            echo "Login Gagal. Username atau Password Salah.";
                        } else if ($_GET['message'] == "logout") {
                            echo "Anda Telah Berhasil Logout.";
                        } else if ($_GET['message'] == "belum_login") {
                            echo "Anda Harus Login Terlebih Dahulu.";
                        }
                    }
                    ?>
                </div>

                <div class="login">
                    <div class="inputan">
                        <input type="text" name="username" required="" placeholder="Masukkan Username">
                    </div>
                    <div class="inputan">
                        <input type="password" name="password" required="" placeholder="Masukkan Password">
                    </div>
                    <div class="inputan-button">
                        <a href="pages/home.php"><input type="submit" value="login"></a>
                    </div>
                    <div class="register">
                        <a class="no-account">Belum Punya Akun?</a>
                        <a class="no-account" href="pages/register.php">Daftar di sini</a>
                    </div>
                </div>
            </center>
        </form>
    </div>

</body>

</html>