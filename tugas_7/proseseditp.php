<?php

include("koneksi.php");

if(isset($_POST['edit'])){

    $nama = $_POST['nama'];
    $username =$_POST['username'];
    $pass =$_POST['password'];

    $sql = "UPDATE user SET nama='$nama', username='$username', password='$pass' WHERE username='$username'";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: pegawai.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>