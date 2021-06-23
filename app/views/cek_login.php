<?php

session_start();
 
// menghubungkan dengan koneksi
include '../function/database.php';
$db = new database();
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db->connect(),"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:bridge.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>