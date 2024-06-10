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
$query = mysqli_query($koneksi, "SELECT * FROM tb_glideslope WHERE id='$id'");
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
        <h3 class="text-center p-3">DETAIL DATA GLIDESLOPE SELEX 2110</h3>
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
                        <th colspan="4">WATTMETER DATA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>COURSE TRANSMITTER PARAMETERS</th>
                        <th>LIMIT</th>
                        <th>TX 1</th>
                        <th>TX 2</th>
                    </tr>
                    <tr>
                        <td>CSB FORWARD POWER</td>
                        <td>
                            <?php echo $result['data1'] ?>
                        </td>
                        <td>
                            <?php echo $result['data2'] ?>
                        </td>
                        <td>
                            <?php echo $result['data3'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>CSB REFLECTED POWER</td>
                        <td>
                            <?php echo $result['data4'] ?>
                        </td>
                        <td>
                            <?php echo $result['data5'] ?>
                        </td>
                        <td>
                            <?php echo $result['data6'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SBO FORWARD POWER</td>
                        <td>
                            <?php echo $result['data7'] ?>
                        </td>
                        <td>
                            <?php echo $result['data8'] ?>
                        </td>
                        <td>
                            <?php echo $result['data9'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SBO REFLECTED POWER</td>
                        <td>
                            <?php echo $result['data10'] ?>
                        </td>
                        <td>
                            <?php echo $result['data11'] ?>
                        </td>
                        <td>
                            <?php echo $result['data12'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>STANDBY COURSE TRANSMITTER PARAMETERS</th>
                        <th>LIMIT</th>
                        <th>TX 1</th>
                        <th>TX 2</th>
                    </tr>
                    <tr>
                        <td>CSB FORWARD POWER</td>
                        <td>
                            <?php echo $result['data13'] ?>
                        </td>
                        <td>
                            <?php echo $result['data14'] ?>
                        </td>
                        <td>
                            <?php echo $result['data15'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SBO FORWARD POWER</td>
                        <td>
                            <?php echo $result['data16'] ?>
                        </td>
                        <td>
                            <?php echo $result['data17'] ?>
                        </td>
                        <td>
                            <?php echo $result['data18'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>CLEARENCE TRANSMITTER PARAMETERS</th>
                        <th>LIMIT</th>
                        <th>TX 1</th>
                        <th>TX 2</th>
                    </tr>
                    <tr>
                        <td>FORWARD POWER</td>
                        <td>
                            <?php echo $result['data19'] ?>
                        </td>
                        <td>
                            <?php echo $result['data20'] ?>
                        </td>
                        <td>
                            <?php echo $result['data21'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>REFLECTED POWER</td>
                        <td>
                            <?php echo $result['data22'] ?>
                        </td>
                        <td>
                            <?php echo $result['data23'] ?>
                        </td>
                        <td>
                            <?php echo $result['data24'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>STANDBY CLEARENCE TRANSMITTER PARAMETERS</th>
                        <th>LIMIT</th>
                        <th>TX 1</th>
                        <th>TX 2</th>
                    </tr>
                    <tr>
                        <td>FORWARD POWER</td>
                        <td>
                            <?php echo $result['data25'] ?>
                        </td>
                        <td>
                            <?php echo $result['data26'] ?>
                        </td>
                        <td>
                            <?php echo $result['data27'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>ANTENNA PARAMETERS</th>
                        <th>LIMIT</th>
                        <th>TX 1</th>
                        <th>TX 2</th>
                    </tr>
                    <tr>
                        <td>UPPER ANTENNA FORWARD POWER</td>
                        <td>
                            <?php echo $result['data28'] ?>
                        </td>
                        <td>
                            <?php echo $result['data29'] ?>
                        </td>
                        <td>
                            <?php echo $result['data30'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>MIDDLE ANTENNA FORWARD POWER</td>
                        <td>
                            <?php echo $result['data31'] ?>
                        </td>
                        <td>
                            <?php echo $result['data32'] ?>
                        </td>
                        <td>
                            <?php echo $result['data33'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>LOWER ANTENNA FORWARD POWER</td>
                        <td>
                            <?php echo $result['data34'] ?>
                        </td>
                        <td>
                            <?php echo $result['data35'] ?>
                        </td>
                        <td>
                            <?php echo $result['data36'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <th colspan="6">MONITOR INTEGRAL</th>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="2">COURSE</th>
                        <th rowspan="2">LIMIT</th>
                        <th colspan="2">TX 1</th>
                        <th colspan="2">TX 2</th>
                    </tr>
                    <tr>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                    </tr>
                    <tr>
                        <td>PATH RF LEVEL</td>
                        <td>
                            <?php echo $result['data37'] ?>
                        </td>
                        <td>
                            <?php echo $result['data38'] ?>
                        </td>
                        <td>
                            <?php echo $result['data39'] ?>
                        </td>
                        <td>
                            <?php echo $result['data40'] ?>
                        </td>
                        <td>
                            <?php echo $result['data41'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>PATH DDM</td>
                        <td>
                            <?php echo $result['data42'] ?>
                        </td>
                        <td>
                            <?php echo $result['data43'] ?>
                        </td>
                        <td>
                            <?php echo $result['data44'] ?>
                        </td>
                        <td>
                            <?php echo $result['data45'] ?>
                        </td>
                        <td>
                            <?php echo $result['data46'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>PATH SDM</td>
                        <td>
                            <?php echo $result['data47'] ?>
                        </td>
                        <td>
                            <?php echo $result['data48'] ?>
                        </td>
                        <td>
                            <?php echo $result['data49'] ?>
                        </td>
                        <td>
                            <?php echo $result['data50'] ?>
                        </td>
                        <td>
                            <?php echo $result['data51'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>WIDTH DDM</td>
                        <td>
                            <?php echo $result['data52'] ?>
                        </td>
                        <td>
                            <?php echo $result['data53'] ?>
                        </td>
                        <td>
                            <?php echo $result['data54'] ?>
                        </td>
                        <td>
                            <?php echo $result['data55'] ?>
                        </td>
                        <td>
                            <?php echo $result['data56'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SYNTH LOCK/REV SENSE</td>
                        <td>
                            <?php echo $result['data57'] ?>
                        </td>
                        <td>
                            <?php echo $result['data58'] ?>
                        </td>
                        <td>
                            <?php echo $result['data59'] ?>
                        </td>
                        <td>
                            <?php echo $result['data60'] ?>
                        </td>
                        <td>
                            <?php echo $result['data61'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="2">CLEARENCE</th>
                        <th rowspan="2">LIMIT</th>
                        <th colspan="2">TX 1</th>
                        <th colspan="2">TX 2</th>
                    </tr>
                    <tr>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                    </tr>
                    <tr>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data62'] ?>
                        </td>
                        <td>
                            <?php echo $result['data63'] ?>
                        </td>
                        <td>
                            <?php echo $result['data64'] ?>
                        </td>
                        <td>
                            <?php echo $result['data65'] ?>
                        </td>
                        <td>
                            <?php echo $result['data66'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>150Hz MOD PERCENT</td>
                        <td>
                            <?php echo $result['data67'] ?>
                        </td>
                        <td>
                            <?php echo $result['data68'] ?>
                        </td>
                        <td>
                            <?php echo $result['data69'] ?>
                        </td>
                        <td>
                            <?php echo $result['data70'] ?>
                        </td>
                        <td>
                            <?php echo $result['data71'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SYNTH LOCK</td>
                        <td>
                            <?php echo $result['data72'] ?>
                        </td>
                        <td>
                            <?php echo $result['data73'] ?>
                        </td>
                        <td>
                            <?php echo $result['data74'] ?>
                        </td>
                        <td>
                            <?php echo $result['data75'] ?>
                        </td>
                        <td>
                            <?php echo $result['data76'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>RF FREQ DIFFERENCE</td>
                        <td>
                            <?php echo $result['data77'] ?>
                        </td>
                        <td>
                            <?php echo $result['data78'] ?>
                        </td>
                        <td>
                            <?php echo $result['data79'] ?>
                        </td>
                        <td>
                            <?php echo $result['data80'] ?>
                        </td>
                        <td>
                            <?php echo $result['data81'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <th colspan="6">MONITOR STANDBY</th>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="2">COURSE</th>
                        <th rowspan="2">LIMIT</th>
                        <th colspan="2">TX 1</th>
                        <th colspan="2">TX 2</th>
                    </tr>
                    <tr>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                    </tr>
                    <tr>
                        <td>PATH RF LEVEL</td>
                        <td>
                            <?php echo $result['data82'] ?>
                        </td>
                        <td>
                            <?php echo $result['data83'] ?>
                        </td>
                        <td>
                            <?php echo $result['data84'] ?>
                        </td>
                        <td>
                            <?php echo $result['data85'] ?>
                        </td>
                        <td>
                            <?php echo $result['data86'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>PATH DDM</td>
                        <td>
                            <?php echo $result['data87'] ?>
                        </td>
                        <td>
                            <?php echo $result['data88'] ?>
                        </td>
                        <td>
                            <?php echo $result['data89'] ?>
                        </td>
                        <td>
                            <?php echo $result['data90'] ?>
                        </td>
                        <td>
                            <?php echo $result['data91'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>PATH SDM</td>
                        <td>
                            <?php echo $result['data92'] ?>
                        </td>
                        <td>
                            <?php echo $result['data93'] ?>
                        </td>
                        <td>
                            <?php echo $result['data94'] ?>
                        </td>
                        <td>
                            <?php echo $result['data95'] ?>
                        </td>
                        <td>
                            <?php echo $result['data96'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>WIDTH DDM</td>
                        <td>
                            <?php echo $result['data97'] ?>
                        </td>
                        <td>
                            <?php echo $result['data98'] ?>
                        </td>
                        <td>
                            <?php echo $result['data99'] ?>
                        </td>
                        <td>
                            <?php echo $result['data100'] ?>
                        </td>
                        <td>
                            <?php echo $result['data101'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SYNTH LOCK/REV SENSE</td>
                        <td>
                            <?php echo $result['data102'] ?>
                        </td>
                        <td>
                            <?php echo $result['data103'] ?>
                        </td>
                        <td>
                            <?php echo $result['data104'] ?>
                        </td>
                        <td>
                            <?php echo $result['data105'] ?>
                        </td>
                        <td>
                            <?php echo $result['data106'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="2">CLEARENCE</th>
                        <th rowspan="2">LIMIT</th>
                        <th colspan="2">TX 1</th>
                        <th colspan="2">TX 2</th>
                    </tr>
                    <tr>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                        <th>MONITOR 1</th>
                        <th>MONITOR 2</th>
                    </tr>
                    <tr>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data107'] ?>
                        </td>
                        <td>
                            <?php echo $result['data108'] ?>
                        </td>
                        <td>
                            <?php echo $result['data109'] ?>
                        </td>
                        <td>
                            <?php echo $result['data110'] ?>
                        </td>
                        <td>
                            <?php echo $result['data111'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>150Hz MOD PERCENT</td>
                        <td>
                            <?php echo $result['data112'] ?>
                        </td>
                        <td>
                            <?php echo $result['data113'] ?>
                        </td>
                        <td>
                            <?php echo $result['data114'] ?>
                        </td>
                        <td>
                            <?php echo $result['data115'] ?>
                        </td>
                        <td>
                            <?php echo $result['data116'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SYNTH LOCK</td>
                        <td>
                            <?php echo $result['data117'] ?>
                        </td>
                        <td>
                            <?php echo $result['data118'] ?>
                        </td>
                        <td>
                            <?php echo $result['data119'] ?>
                        </td>
                        <td>
                            <?php echo $result['data120'] ?>
                        </td>
                        <td>
                            <?php echo $result['data121'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>RF FREQ DIFFERENCE</td>
                        <td>
                            <?php echo $result['data122'] ?>
                        </td>
                        <td>
                            <?php echo $result['data123'] ?>
                        </td>
                        <td>
                            <?php echo $result['data124'] ?>
                        </td>
                        <td>
                            <?php echo $result['data125'] ?>
                        </td>
                        <td>
                            <?php echo $result['data126'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <center>
            <a href="data_glideslope.php" class="btn btn-secondary m-3">KEMBALI</a>
            <button class="btn btn-primary m-3" onclick="window.print();">PRINT</button>
        </center>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>