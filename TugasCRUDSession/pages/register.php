<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Register Page</title>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>

<style>
    .mainn {
        justify-content: center;
        display: flex;
        font-family: 'roboto';
        font-weight: bold;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        color: rgb(231, 231, 231);
    }
</style>

<body>
    <div class="mainn">

        <form method="POST" action="register_proses.php">
            <center>
                <a style="font-size:40px;">Register Page
                    <hr size="1px" width="100%" color="grey" />
                </a>
                <p style="font-size:16px;">Silahkan buat akun terlebih dahulu</p>

                <div class="login">
                    <div class="inputan">
                        <input type="text" name="username" required="" placeholder="Masukkan Username">
                    </div>
                    <div class="inputan">
                        <input type="password" name="password" required="" placeholder="Masukkan Password">
                    </div>
                    <div class="inputan-button mt-5">
                        <a href="../index.php"><input type="submit" value="DAFTAR"></a>
                    </div>
                    <div class="register mt-3">
                        <a class="no-account" href="#">Sudah Punya Akun?</a>
                        <a class="no-account" href="../index.php">Login di sini</a>
                    </div>
                </div>
            </center>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>