<?php
include 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tb_user (username, password) VALUES ('$username', '$password')";

if (mysqli_query($koneksi, $query_sql)){
    echo '<script language="javascript">
              alert ("Register Success !");
              window.location="login.php";
              </script>';
              exit();
    }
?>
}