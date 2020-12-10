<?php 
include ("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

$res_id = $res['id'];
$res_nama = $res['nama'];
$res_username = $res['username'];
$res_level = $res['level'];

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
        $_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
        session_start();
            $_SESSION['id'] = $res_id;
            $_SESSION['nama'] = $res_nama;
            $_SESSION['username'] = $res_username;
            $_SESSION['level'] = $res_level;
		
		header("location: admin.php?pesan=sukses");

	}else if($data['level']=="pegawai"){
		$_SESSION['username'] = $username;
        $_SESSION['level'] = "pegawai";
        session_start();
            $_SESSION['id'] = $res_id;
            $_SESSION['nama'] = $res_nama;
            $_SESSION['username'] = $res_username;
            $_SESSION['level'] = $res_level;
            
        header("location: pegawai.php/pesan=sukses");
        
	}else{
		header("location: index.php?pesan=gagal");
	}	
}else{
	header("location: index.php?pesan=gagal");
}

?>