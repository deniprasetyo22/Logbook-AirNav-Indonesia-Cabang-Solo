<?php
    include 'koneksi.php';
    session_start();
    $id = $_GET['id'];
    $query = "DELETE FROM tb_glideslope WHERE id='$id'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        header('location: data_glideslope.php');
    }
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    ?>