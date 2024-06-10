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
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];
$data4 = $_POST['data4'];
$data5 = $_POST['data5'];
$data6 = $_POST['data6'];
$data7 = $_POST['data7'];
$data8 = $_POST['data8'];
$data9 = $_POST['data9'];
$data10 = $_POST['data10'];
$data11 = $_POST['data11'];
$data12 = $_POST['data12'];
$data13 = $_POST['data13'];
$data14 = $_POST['data14'];
$data15 = $_POST['data15'];
$data16 = $_POST['data16'];
$data17 = $_POST['data17'];
$data18 = $_POST['data18'];
$data19 = $_POST['data19'];
$data20 = $_POST['data20'];
$data21 = $_POST['data21'];

$simpan = mysqli_query($koneksi, "INSERT INTO tb_ndb VALUES ('$id','$tanggal','$shift','$personel1','$personel2','$personel3','$personel4','$personel5','$personel6','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10','$data11','$data12','$data13','$data14','$data15','$data16','$data17','$data18','$data19','$data20','$data21')");
if($simpan){
    echo "<script> alert ('Data Berhasil di simpan')</script>";
    header("refresh:0;data_ndb.php");
}else{
    echo "<script> alert ('Data Tidak Berhasil di simpan')</script>";
    header("refresh:0;data_ndb.php");
}
