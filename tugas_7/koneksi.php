<?php
$server = "localhost";
$user = "root";
$password = "";
$dbase = "prak_pbw";

$db = mysqli_connect($server, $user, $password, $dbase);

if(!$db){
    die("Gagal terhubung ke database : ".mysqli_connect_error());
}
?>