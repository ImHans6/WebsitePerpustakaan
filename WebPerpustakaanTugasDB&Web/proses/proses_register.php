<?php
    include '../koneksi.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    

    $input = mysqli_query($koneksi, "INSERT INTO user VALUES(NULL, '$username', '$password','$email','$tempat_lahir', '$tanggal_lahir', '$alamat','$jenis_kelamin') " ); //query untuk memasukkan data kedalam database
    if ($input) {
        header("location:../login.php?pesan=register");
    }
?> 