<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/views/css/main.css">
    <script src="https://kit.fontawesome.com/bd45d9ab9b.js" crossorigin="anonymous"></script>
    <title>Login Pemilik</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <!-- cek pesan notifikasi -->
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Login gagal! username dan password salah!";
                } else if ($_GET['pesan'] == "logout") {
                    echo "Anda telah berhasil logout";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?>
            <form  method="post" action="cek_login.php">
                <div class="login_page">
                    <div class="login_pageboxPem">
                        <div class="center">
                            <img src="view/img/cut.png" width="200px" height="180px">
                        </div>
                        <div>
                            <img src="view/img/black.png" width="20px" height="20px">
                            <input type="text" name="username" id="textt" placeholder="Nama">
                        </div>
                        <div>
                            <img src="view/img/lock.png" width="20px" height="25px">
                            <input type="password" name="password" id="textt" placeholder="Password">
                        </div>
                        <div class="button">
                            <button type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>