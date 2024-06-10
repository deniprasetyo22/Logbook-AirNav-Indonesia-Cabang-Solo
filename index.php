<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
?>

<?php
include 'koneksi.php';
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <style>
        body {
            background-image: url('gambar/backgroundweb1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            max-width: 1000px;
            overflow: hidden;
            min-height: 0px;
        }
        </style>
    </head>

    <body>
        <div class="container p-3 my-5 mb-0 text-center">
            <img src="gambar/header2.png" class="img fluid" style="max-width: 100%; height:auto;">
        </div>
        <div class="container d-grid gap-3 p-5 my-5 col-4 text-center"
            style="background-color:white; border-radius: 10px;">
            <a href="logbook.php" class="btn btn-primary btn-lg p-3">E-Logbook</a>
            <a href="meterreading.php" class="btn btn-primary btn-lg p-3">Meter Reading</a>
            <center>
                <a href="logout.php" class="btn btn-danger btn-lg m-3">Logout</a>
            </center>
        </div>

        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>