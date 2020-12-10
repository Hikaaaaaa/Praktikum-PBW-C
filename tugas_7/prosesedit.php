<?php

include("koneksi.php");

if(isset($_POST['edit'])){

    $nama = $_POST['nama'];
    $username =$_POST['username'];
    $pass =$_POST['password'];
    $level =$_POST['level'];

    $sql = "UPDATE user SET nama='$nama', username='$username', password='$pass',level='$level' WHERE username='$username'";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: admin.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>