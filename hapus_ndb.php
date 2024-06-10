<?php
    include 'koneksi.php';
    session_start();
    $id = $_GET['id'];
    $query = "DELETE FROM tb_ndb WHERE id='$id'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        header('location: data_ndb.php');
    }
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    ?>