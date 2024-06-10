<?php 
include 'koneksi.php';
session_start();
$id = $_GET['id'];
$query = "DELETE FROM tb_data WHERE id='$id'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        header('location: logbook.php');
    }
$_SESSION["sukses"] = 'Data Berhasil Dihapus';
?>