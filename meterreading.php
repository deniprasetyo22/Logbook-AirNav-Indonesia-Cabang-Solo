<!DOCTYPE html>
<html lang="en">
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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meter Reading</title>
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
    <div class="container-sm p-3 my-5">
        <img src="gambar/header2.png" class="img fluid" style="max-width: 100%; height:auto;">
    </div>
    <div class="container-sm mb-5" style="background-color:white; max-width:80%; height:auto;">
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>NAMA PERALATAN</th>
                <th></th>
            </tr>
            <tr class="text-center">
                <td>DME MOPIENS MARU 320</td>
                <td>
                    <a href="data_dme.php" class="btn btn-outline-success">Lihat Data</a>
                </td>
            </tr>
            <tr class="text-center">
                <td>DVOR MOPIENS MARU 220</td>
                <td><a href="data_dvor.php" class="btn btn-outline-success">Lihat Data</a></td>
            </tr>
            <tr class="text-center">
                <td>NDB NAUTEL ND-4000</td>
                <td><a href="data_ndb.php" class="btn btn-outline-success">Lihat Data</a></td>
            </tr>
            <tr class="text-center">
                <td>LOCALIZER SELEX 2100</td>
                <td><a href="data_localizer.php" class="btn btn-outline-success">Lihat Data</a></td>
            </tr>
            <tr class="text-center">
                <td>GLIDESLOPE SELEX 2110</td>
                <td><a href="data_glideslope.php" class="btn btn-outline-success">Lihat Data</a></td>
            </tr>
            <tr class="text-center">
                <td>MIDDLE MARKER SELEX 2130</td>
                <td><a href="data_middle.php" class="btn btn-outline-success">Lihat Data</a></td>
            </tr>
            <tr class="text-center">
                <td>OUTER MARKER SELEX 2130</td>
                <td><a href="data_outer.php" class="btn btn-outline-success">Lihat Data</a></td>
            </tr>
        </table>
        <center>
            <a href="index.php" class="btn btn-secondary m-3">KEMBALI</a>
            <a href="logout.php" class="btn btn-danger m-3">Logout</a>
        </center>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>