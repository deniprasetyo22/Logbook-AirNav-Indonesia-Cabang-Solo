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
$data57 = $_POST['data57'];
$data58 = $_POST['data58'];
$data59 = $_POST['data59'];
$data60 = $_POST['data60'];
$data61 = $_POST['data61'];
$data62 = $_POST['data62'];
$data63 = $_POST['data63'];
$data64 = $_POST['data64'];
$data65 = $_POST['data65'];
$data66 = $_POST['data66'];
$data67 = $_POST['data67'];
$data68 = $_POST['data68'];
$data69 = $_POST['data69'];
$data70 = $_POST['data70'];
$data71 = $_POST['data71'];
$data72 = $_POST['data72'];
$data73 = $_POST['data73'];
$data74 = $_POST['data74'];
$data75 = $_POST['data75'];
$data76 = $_POST['data76'];
$data77 = $_POST['data77'];
$data78 = $_POST['data78'];
$data79 = $_POST['data79'];
$data80 = $_POST['data80'];
$data81 = $_POST['data81'];
$data82 = $_POST['data82'];
$data83 = $_POST['data83'];
$data84 = $_POST['data84'];
$data85 = $_POST['data85'];
$data86 = $_POST['data86'];
$data87 = $_POST['data87'];
$data88 = $_POST['data88'];
$data89 = $_POST['data89'];
$data90 = $_POST['data90'];
$data91 = $_POST['data91'];
$data92 = $_POST['data92'];
$data93 = $_POST['data93'];
$data94 = $_POST['data94'];
$data95 = $_POST['data95'];
$data96 = $_POST['data96'];
$data97 = $_POST['data97'];
$data98 = $_POST['data98'];
$data99 = $_POST['data99'];
$data100 = $_POST['data100'];
$data101 = $_POST['data101'];
$data102 = $_POST['data102'];
$data103 = $_POST['data103'];
$data104 = $_POST['data104'];
$data105 = $_POST['data105'];
$data106 = $_POST['data106'];
$data107 = $_POST['data107'];
$data108 = $_POST['data108'];
$data109 = $_POST['data109'];
$data110 = $_POST['data110'];
$data111 = $_POST['data111'];
$data112 = $_POST['data112'];
$data113 = $_POST['data113'];
$data114 = $_POST['data114'];
$data115 = $_POST['data115'];
$data116 = $_POST['data116'];
$data117 = $_POST['data117'];
$data118 = $_POST['data118'];
$data119 = $_POST['data119'];
$data120 = $_POST['data120'];
$data121 = $_POST['data121'];
$data122 = $_POST['data122'];
$data123 = $_POST['data123'];
$data124 = $_POST['data124'];
$data125 = $_POST['data125'];
$data126 = $_POST['data126'];


$simpan = mysqli_query($koneksi, "INSERT INTO tb_glideslope VALUES ('$id','$tanggal','$shift','$personel1','$personel2','$personel3','$personel4','$personel5','$personel6','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10',
'$data11','$data12','$data13','$data14','$data15','$data16','$data17','$data18','$data19','$data20',
'$data21','$data22','$data23','$data24','$data25','$data26','$data27','$data28','$data29','$data30',
'$data31','$data32','$data33','$data34','$data35','$data36','$data37','$data38','$data39','$data40',
'$data41','$data42','$data43','$data44','$data45','$data46','$data47','$data48','$data49','$data50',
'$data51','$data52','$data53','$data54','$data55','$data56','$data57','$data58','$data59','$data60',
'$data61','$data62','$data63','$data64','$data65','$data66','$data67','$data68','$data69','$data70',
'$data71','$data72','$data73','$data74','$data75','$data76','$data77','$data78','$data79','$data80',
'$data81','$data82','$data83','$data84','$data85','$data86','$data87','$data88','$data89','$data90',
'$data91','$data92','$data93','$data94','$data95','$data96','$data97','$data98','$data99','$data100',
'$data101','$data102','$data103','$data104','$data105','$data106','$data107','$data108','$data109','$data110',
'$data111','$data112','$data113','$data114','$data115','$data116','$data117','$data118','$data119','$data120',
'$data121','$data122','$data123','$data124','$data125','$data126')");
if($simpan){
    echo "<script> alert ('Data Berhasil di simpan')</script>";
    header("refresh:0;data_glideslope.php");
}else{
    echo "<script> alert ('Data Tidak Berhasil di simpan')</script>";
    header("refresh:0;data_glideslope.php");
}
