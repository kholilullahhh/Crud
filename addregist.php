<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$username = $_POST["username"];
$password  = $_POST["password"];
$akses = $_POST["akses"];

//query insert data ke dalam database
$hashed_password = md5 ($password);
$query = "INSERT INTO tablelogin (username, password, akses) VALUES ('$username', '$hashed_password', '$akses')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: login.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>