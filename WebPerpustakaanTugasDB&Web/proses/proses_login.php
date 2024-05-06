<?php
include('../koneksi.php'); // include our database connection

session_start(); // start the session

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['user_id'] = $user_id;
	$_SESSION['status'] = "login";
	echo"login berhasil";
	header("location:../home.php"); 
}else{
	header("location:../login.php?pesan=gagal");
}
?>