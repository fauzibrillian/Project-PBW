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


<h3>Menu Pemilik </h3>

<!-- <a class="btn btn-primary" href="input.php">Input Data</a> -->
<div class="container">
	<div class="col-md-12">
		<table class="table">
            <tr>
            <td><a href="users.php" class="btn btn-primary">Data User</a></td>
            <td><a href="pengunjung.php" class="btn btn-primary">Data Pengunjung</a></td>
            <td><a href="" class="btn btn-primary">Data Ticket</a></td>
            <td><a href="" class="btn btn-primary">Laporan Pengunjung</a></td>
            <td><a href="" class="btn btn-primary">Laporan booking</a></td>
            <td><a href="" class="btn btn-primary">Laporan penjualan</a></td>
            </tr>
        </table>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>