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
$data22 = $_POST['data22'];
$data23 = $_POST['data23'];
$data24 = $_POST['data24'];
$data25 = $_POST['data25'];
$data26 = $_POST['data26'];
$data27 = $_POST['data27'];
$data28 = $_POST['data28'];
$data29 = $_POST['data29'];
$data30 = $_POST['data30'];
$data31 = $_POST['data31'];
$data32 = $_POST['data32'];
$data33 = $_POST['data33'];
$data34 = $_POST['data34'];
$data35 = $_POST['data35'];
$data36 = $_POST['data36'];
$data37 = $_POST['data37'];
$data38 = $_POST['data38'];
$data39 = $_POST['data39'];
$data40 = $_POST['data40'];
$data41 = $_POST['data41'];
$data42 = $_POST['data42'];
$data43 = $_POST['data43'];
$data44 = $_POST['data44'];
$data45 = $_POST['data45'];
$data46 = $_POST['data46'];
$data47 = $_POST['data47'];
$data48 = $_POST['data48'];
$data49 = $_POST['data49'];
$data50 = $_POST['data50'];
$data51 = $_POST['data51'];
$data52 = $_POST['data52'];
$data53 = $_POST['data53'];
$data54 = $_POST['data54'];
$data55 = $_POST['data55'];
$data56 = $_POST['data56'];


$simpan = mysqli_query($koneksi, "INSERT INTO tb_middle VALUES ('$id','$tanggal','$shift','$personel1','$personel2','$personel3','$personel4','$personel5','$personel6','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10',
'$data11','$data12','$data13','$data14','$data15','$data16','$data17','$data18','$data19','$data20',
'$data21','$data22','$data23','$data24','$data25','$data26','$data27','$data28','$data29','$data30',
'$data31','$data32','$data33','$data34','$data35','$data36','$data37','$data38','$data39','$data40',
'$data41','$data42','$data43','$data44','$data45','$data46','$data47','$data48','$data49','$data50',
'$data51','$data52','$data53','$data54','$data55','$data56')");
if($simpan){
    echo "<script> alert ('Data Berhasil di simpan')</script>";
    header("refresh:0;data_middle.php");
}else{
    echo "<script> alert ('Data Tidak Berhasil di simpan')</script>";
    header("refresh:0;data_middle.php");
}
