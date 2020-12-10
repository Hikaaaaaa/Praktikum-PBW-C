<?php 
include("koneksi.php");
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$level = "pegawai";
 
$query = "INSERT INTO user (id, nama, username, password, level) VALUES (
    '',
    '$nama',
    '$username',
    '$pass',
    '$level')";

mysqli_query($db,$query);
 
header("location:admin.php?pesan=input");
?>