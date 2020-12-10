<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id='$id'" ;
    // buat query hapus
    $query = mysqli_query($db, $sql);
    $data =mysqli_fetch_array($query);

} else {
    die("akses dilarang...");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Praktikum 8 PBW </title>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adminlte.css">
    <link rel="stylesheet" href="coba.css">
  </head>
  <body>
<div>
  <form class="modal-content animate-modal" action="proseseditp.php" method="POST">

    <div class="container-modal">
      <label for="nama"><b>nama</b></label>
      <input type="text" placeholder="nama" name="nama" value="<?php echo $data['nama'] ?>" required><br>

      <label for="username"><b>username</b></label>
      <input type="text" placeholder="username" name="username" value="<?php echo $data['username'] ?>" required><br>

      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="Password" name="Password" value="<?php echo $data['password'] ?>" required>

      <button type="button" onclick="index.php" class="btn regbtn">Exit</button>
      <button type="submit" value="edit" name='edit' class="btn btn-primary regbtn regbtn-color-blue" >EDIT</button>
    </div>
  </form>
</div>
</body>