<?php
include 'koneksi.php';
if(isset($_POST['btnLogin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    $data=mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
        if($password=$data['password']){
            //login valid
            session_start();  
            $_SESSION['username']=$data['username'];
            header('location:index.php');
        } else {
            //password salah
            header('location:login.php');
        }
    }else{
        //username salah
        header('location:login.php');
    }
}
