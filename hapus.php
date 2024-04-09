<?php
session_start(); // Start the session
// if ( !isset($_SESSION["login"]) ){
//     header("location:login.php");
//     exit();
// }
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tablemahasiswa WHERE id = '$id'";

if($connection->query($query)) {
    echo '<script type="text/javascript"> confirm("Yakin ingin menghapus data"); window.location.href = "index.php"; </script>';
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>