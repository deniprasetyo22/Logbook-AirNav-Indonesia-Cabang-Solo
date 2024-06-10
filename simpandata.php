<?php

include "koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$no = $_POST['id'];
$tanggal = $_POST['tanggal'];
$shift = $_POST['shift'];
$personel1 = $_POST['personel1'];
$personel2 = $_POST['personel2'];
$personel3 = $_POST['personel3'];
$personel4 = $_POST['personel4'];
$personel5 = $_POST['personel5'];
$personel6 = $_POST['personel6'];
$peralatan1 = $_POST['peralatan1'];
$peralatan2 = $_POST['peralatan2'];
$peralatan3 = $_POST['peralatan3'];
$peralatan4 = $_POST['peralatan4'];
$peralatan5 = $_POST['peralatan5'];
$peralatan6 = $_POST['peralatan6'];
$peralatan7 = $_POST['peralatan7'];
$peralatan8 = $_POST['peralatan8'];
$peralatan9 = $_POST['peralatan9'];
$peralatan10 = $_POST['peralatan10'];
$peralatan11 = $_POST['peralatan11'];
$peralatan12 = $_POST['peralatan12'];
$peralatan13 = $_POST['peralatan13'];
$peralatan14 = $_POST['peralatan14'];
$peralatan15 = $_POST['peralatan15'];
$peralatan16 = $_POST['peralatan16'];
$peralatan17 = $_POST['peralatan17'];
$peralatan18 = $_POST['peralatan18'];
$peralatan19 = $_POST['peralatan19'];
$peralatan20 = $_POST['peralatan20'];
$peralatan21 = $_POST['peralatan21'];
$peralatan22 = $_POST['peralatan22'];
$peralatan23 = $_POST['peralatan23'];
$peralatan24 = $_POST['peralatan24'];
$keterangan = $_POST['keterangan'];
$catatan = $_POST['catatan'];

$simpan = mysqli_query($koneksi, "INSERT INTO tb_data VALUES ('$id','$tanggal','$shift','$personel1','$personel2','$personel3','$personel4','$personel5','$personel6','$peralatan1','$peralatan2','$peralatan3','$peralatan4','$peralatan5','$peralatan6','$peralatan7','$peralatan8','$peralatan9','$peralatan10','$peralatan11','$peralatan12','$peralatan13','$peralatan14','$peralatan15','$peralatan16','$peralatan17','$peralatan18','$peralatan19','$peralatan20','$peralatan21','$peralatan22','$peralatan23','$peralatan24','$keterangan','$catatan')");
if($simpan){
    echo "<script> alert ('Data Berhasil Disimpan')</script>";
    header("refresh:0;logbook.php");
}else{
    echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
    header("refresh:0;logbook.php");
}

?>