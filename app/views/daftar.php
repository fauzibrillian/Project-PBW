<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="view/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/bd45d9ab9b.js" crossorigin="anonymous"></script>
    <title>Register Page</title>
</head>
<!-- <?php 
// $rand = uniqid(rand(), true);
// print_r($rand);exit;
?> -->
<body>
    <form action="../controllers/Controller.php?aksi=register_users" method="POST">
    <div class="login_page">
        <div class="login_pagebox">
                <img src="view/img/cut.png" width="200px" height="180px">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="text" name="username" placeholder="Nama">
            </div>
            <div >
                <label for="no_ktp">Password</label>
                <input type="password" id="textt" name="password" placeholder="Password">
            </div>
            <div >
                <label for="no_ktp">Level</label>
                <input type="text" id="textt" name="level" placeholder="level">
            </div>
            <input type="submit" value="Daftar">
            <div class= "button">
                <a id="back" href="index.html">Back</a></li>
            </div>
        </div>
    </div>
    </form>
</body>
</html>