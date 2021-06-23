<?php
include '../function/database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "hapus"){
    $query = "delete FROM pengunjung where id =".$_GET['id']."";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/pengunjung.php");
    }
 }elseif($aksi == "create_users"){
    $query = "INSERT INTO user (username, password, level) VALUES ( '". $_POST['username']."',  '". $_POST['password']."',  '". $_POST['level']."')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
 }
 elseif($aksi == "hapus_user"){
    $query = "delete FROM user where id =".$_GET['id']."";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
 }elseif($aksi == "update"){
    $query = "update pengunjung set nama = '".$_POST['nama']."', no_ktp = '". $_POST['no_ktp']."', no_hp = '" .$_POST['no_hp']."' where id =".$_POST['id']."";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/pengunjung.php");
    }
 }elseif($aksi == "update_user"){
    $query = "update user set username = '".$_POST['username']."', password = '". $_POST['password']."', level = '" .$_POST['level']."' where id =".$_POST['id']."";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
}elseif($aksi == "create_pengunjung"){
    $query = "create pengunjung set nama = '".$_POST['nama']."', no_ktp = '". $_POST['no_ktp']."', no_hp = '" .$_POST['no_hp']."', jadwal = '". $_POST['jadwal']."' where id =".$_POST['id']."";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/register.html");
    }
 }