<?php
include '../function/database.php';
$db = new database();

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="view/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/bd45d9ab9b.js" crossorigin="anonymous"></script>
    <title>Tempat Wisata</title>
</head>


<div class="nav">
        <ul class="nav_left">
            <li><a id="home" href="index.html"><i class="fa fa-home"></i></a>Menu </li>
            <li><a id="about" href="#about2">About us</a></li>
            <li><a id="contact" href="#contact2">Contact</a></li>
        </ul>
        <ul class="nav_right">
            <li><a id="search"><i class="fa fa-search"></i></a></li>
            <li><input type="text" placeholder="Search"></li>
        </ul>
    </div>
<br>
<br>

<!-- <a class="btn btn-primary" href="input.php">Input Data</a> -->
<div class="container-left">
	<div class="col-md-12">
		<table class="table">
            <tr>
            <td><a href="users.php" class="btn btn-primary">Data User</a></td>
            <td><a href="pengunjung.php" class="btn btn-primary">Data Pengunjung</a></td>
            <td><a href="ticket.php" class="btn btn-primary">Data Ticket</a></td>
            <td><a href="pengunjung_pemilik.php" class="btn btn-primary">Laporan Pengunjung</a></td>
            <td><a href="" class="btn btn-primary">Laporan booking</a></td>
            <td><a href="penjualan_pemilik.php" class="btn btn-primary">Laporan penjualan</a></td>
            </tr>
        </table>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>