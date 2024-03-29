<?php 
//include koneksi database
include('koneksi.php');

//get data dari form
$id     = $_POST["id"];
$nim        = $_POST["nim"];
$nama = $_POST["nama"];
$jurusan       = $_POST["jurusan"];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tablemahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}


?>