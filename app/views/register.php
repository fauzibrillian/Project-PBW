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

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Jumlah tiket melebihi yg telah ditentukan";
        } elseif ($_GET['pesan'] == "hari") {
            echo "Tanggal belum dipilih";
        } elseif ($_GET['pesan'] == "kosong") {
            echo "Tidak ada jadwal pada hari yg dipilih";
        } elseif ($_GET['pesan'] == "over") {
            echo "Jumlah pesan tiket melebihi yg ditentukan pemilik";
        }
    }
    include '../function/database.php';
    $db = new database();
    ?>
    <form action="../controllers/Controller.php?aksi=create_pengunjung" method="POST">
        <div class="login_page">
            <table>
                <thead>
                    <tr>
                        <td>Hari</td>
                        <td>Harga</td>
                    </tr>
                </thead>
                <?php
                foreach ($db->tampil_data_ticketing() as $x) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $x['hari']; ?></td>
                            <td><?php echo $x['harga']; ?></td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
            <div class="login_pagebox">
                <img src="view/img/cut.png" width="200px" height="180px">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" id="textt" name="nama" placeholder="Nama">
                </div>
                <div>
                    <label for="no_ktp">No. KTP</label>
                    <input type="text" id="textt" name="no_ktp" placeholder="No. KTP">
                </div>
                <div>
                    <label for="no_hp">No. Hp</label>
                    <input type="text" id="textt" name="no_hp" placeholder="No. HP">
                </div>
                <div>
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" placeholder="jumlah tiket" widht="20px" height="20px">
                </div>
                <div>
                    <label for="jadwal">Jadwal</label>
                    <input type="date" name="jadwal" placeholder="Jadwal" widht="20px" height="20px">
                </div>
                <input type="submit" value="Submit">
                <div class="button">
                    <a id="back" href="index.html">Back</a></li>
                </div>
            </div>
        </div>
    </form>
</body>

</html>