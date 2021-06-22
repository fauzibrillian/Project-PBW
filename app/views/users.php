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


<h3>Data User</h3>

<!-- <a class="btn btn-primary" href="input.php">Input Data</a> -->
<div class="container">
	<div class="col-md-12">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<?php
			$no = 1;
			foreach ($db->tampil_data_users() as $x) {
			?>
				<tbody>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $x['username']; ?></td>
						<td><?php echo $x['level']; ?></td>
						<td>
						<a class="btn btn-primary" href="update_user.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
						<a class="btn btn-danger" href="../controllers/Controller.php?id=<?php echo $x['id']; ?>&aksi=hapus_user"">Hapus</a>
						</td>
					</tr>
				</tbody>
			<?php
			}
			?>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>