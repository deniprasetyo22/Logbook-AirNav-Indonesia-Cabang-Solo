<?php

$host="localhost";
$user="root";
$pass="";
$database="db_magang";

$koneksi = mysqli_connect($host, $user, $pass);
if ($koneksi){
    $buka = mysqli_select_db($koneksi, $database);
    if(!$buka){
        echo "Database tidak dapat terhubung";
    }
}else{
    echo "Mysql tidak terhubung";
}

?>