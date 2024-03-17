<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tablemahasiswa WHERE id = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>