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

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("ERROR. No ID Selected !");
}
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tb_ndb WHERE id='$id'");
$result = mysqli_fetch_array($query);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
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

        @media print {
            .btn {
                display: none;
            }

        }
    </style>
</head>

<body>
    <div class="container-sm p-3 my-5">
        <img src="gambar/header2.png" class="img fluid" style="max-width: 100%; height:auto;">
    </div>
    <div class="container-sm mb-5" style="background-color:white; max-width:80%; height:auto;">
        <h3 class="text-center p-3">DETAIL DATA NDB NAUTEL ND-4000</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr class="text-center">
                    <th>DATE</th>
                    <th>SHIFT</th>
                </tr>
                <tr class="text-center">
                    <td><?php echo $result['tanggal'] ?></td>
                    <td><?php echo $result['shift'] ?></td>
                </tr>
                <table class="table table-striped table-bordered">
                    <tr class="text-center">
                        <th colspan="7">PERSONEL ON DUTY</th>
                    </tr>
                    <tr class="text-center">
                        <td><?php echo $result['personel1'] ?></td>
                    </tr>
                    <tr class="text-center">
                        <td><?php echo $result['personel2'] ?></td>
                    </tr>
                    <tr class="text-center">
                        <td><?php echo $result['personel3'] ?></td>
                    </tr>
                    <tr class="text-center">
                        <td><?php echo $result['personel4'] ?></td>
                    </tr>
                    <tr class="text-center">
                        <td><?php echo $result['personel5'] ?></td>
                    </tr>
                    <tr class="text-center">
                        <td><?php echo $result['personel6'] ?></td>
                    </tr>
                </table>
            </table>
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>PARAMETER</th>
                        <th>TX I</th>
                        <th>TX II</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FORWARD POWER</td>
                        <td>
                            <?php echo $result['data1'] ?>
                        </td>
                        <td>
                            <?php echo $result['data2'] ?>
                        </td>
                        <td rowspan="10">
                            <?php echo $result['data21'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>REFLECTED POWER</td>
                        <td>
                            <?php echo $result['data3'] ?>
                        </td>
                        <td>
                            <?php echo $result['data4'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>MODULATION DEPTH</td>
                        <td>
                            <?php echo $result['data5'] ?>
                        </td>
                        <td>
                            <?php echo $result['data6'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>AUTOMATIC TUNNING UNIT (ATU)</td>
                        <td>
                            <?php echo $result['data7'] ?>
                        </td>
                        <td>
                            <?php echo $result['data8'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>MANUAL CHANGE OVER</td>
                        <td>
                            <?php echo $result['data9'] ?>
                        </td>
                        <td>
                            <?php echo $result['data10'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>INTERKONEKSI</td>
                        <td>
                            <?php echo $result['data11'] ?>
                        </td>
                        <td>
                            <?php echo $result['data12'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>CHANGE OVER TIME</td>
                        <td>
                            <?php echo $result['data13'] ?>
                        </td>
                        <td>
                            <?php echo $result['data14'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>INDICATOR LAMP & MATERING</td>
                        <td>
                            <?php echo $result['data15'] ?>
                        </td>
                        <td>
                            <?php echo $result['data16'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>MONITORING</td>
                        <td>
                            <?php echo $result['data17'] ?>
                        </td>
                        <td>
                            <?php echo $result['data18'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>IDENTIFICATION</td>
                        <td>
                            <?php echo $result['data19'] ?>
                        </td>
                        <td>
                            <?php echo $result['data20'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <center>
            <a href="data_ndb.php" class="btn btn-secondary m-3">KEMBALI</a>
            <button class="btn btn-primary m-3" onclick="window.print();">PRINT</button>
        </center>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>