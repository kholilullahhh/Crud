<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama = $_POST["nama"];
$nim  = $_POST["nim"];
$jurusan = $_POST["jurusan"];

//query insert data ke dalam database
$query = "INSERT INTO tablemahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    echo '<script type="text/javascript"> alert("Data berhasil di Update"); window.location.href = "index.php"; </script>';

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>