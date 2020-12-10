<?php

include("koneksi.php");

if( isset($_GET['id']) ){
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: admin.php');
    } else {
        header('Location: index.php?status=gagal menghapus');
    }

} else {
    die("akses dilarang...");
}

?>