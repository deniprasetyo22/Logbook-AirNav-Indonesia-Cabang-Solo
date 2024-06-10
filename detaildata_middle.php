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
$query = mysqli_query($koneksi, "SELECT * FROM tb_middle WHERE id='$id'");
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
        <h3 class="text-center p-3">DETAIL DATA MIDDLE MARKER SELEX 2130</h3>
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
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th colspan="6">POWER SENSOR DATA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="3">TX 1</th>
                            <th colspan="3">TX 2</th>
                        </tr>
                        <tr>
                            <th>TRANSMITTER 1</th>
                            <th>NOMINAL</th>
                            <th>READING</th>
                            <th>TRANSMITTER 1</th>
                            <th>NOMINAL</th>
                            <th>READING</th>
                        </tr>
                        <tr>
                            <td>FORWARD POWER</td>
                            <td>
                                <?php echo $result['data1'] ?>
                            </td>
                            <td>
                                <?php echo $result['data2'] ?>
                            </td>
                            <td>FORWARD POWER</td>
                            <td>
                                <?php echo $result['data3'] ?>
                            </td>
                            <td>
                                <?php echo $result['data4'] ?>
                            </td>
                        <tr>
                            <td>REFLECTED POWER</td>
                            <td>
                                <?php echo $result['data5'] ?>
                            </td>
                            <td>
                                <?php echo $result['data6'] ?>
                            </td>
                            <td>REFLECTED POWER</td>
                            <td>
                                <?php echo $result['data7'] ?>
                            </td>
                            <td>
                                <?php echo $result['data8'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>VSWR</td>
                            <td>
                                <?php echo $result['data9'] ?>
                            </td>
                            <td>
                                <?php echo $result['data10'] ?>
                            </td>
                            <td>VSWR</td>
                            <td>
                                <?php echo $result['data11'] ?>
                            </td>
                            <td>
                                <?php echo $result['data12'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>TRANSMITTER 2</th>
                            <th>NOMINAL</th>
                            <th>READING</th>
                            <th>TRANSMITTER 2</th>
                            <th>NOMINAL</th>
                            <th>READING</th>
                        </tr>
                        <tr>
                            <td>FORWARD POWER</td>
                            <td>
                                <?php echo $result['data13'] ?>
                            </td>
                            <td>
                                <?php echo $result['data14'] ?>
                            </td>
                            <td>FORWARD POWER</td>
                            <td>
                                <?php echo $result['data15'] ?>
                            </td>
                            <td>
                                <?php echo $result['data16'] ?>
                            </td>
                        <tr>
                            <td>REFLECTED POWER</td>
                            <td>
                                <?php echo $result['data17'] ?>
                            </td>
                            <td>
                                <?php echo $result['data18'] ?>
                            </td>
                            <td>REFLECTED POWER</td>
                            <td>
                                <?php echo $result['data19'] ?>
                            </td>
                            <td>
                                <?php echo $result['data20'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>VSWR</td>
                            <td>
                                <?php echo $result['data21'] ?>
                            </td>
                            <td>
                                <?php echo $result['data22'] ?>
                            </td>
                            <td>VSWR</td>
                            <td>
                                <?php echo $result['data23'] ?>
                            </td>
                            <td>
                                <?php echo $result['data24'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered text-center">
                    <tr>
                        <th colspan="3">TX 1</th>
                        <th colspan="3">TX 2</th>
                    </tr>
                    <tr>
                        <th colspan="3">MONITOR INTEGRAL</th>
                        <th colspan="3">MONITOR INTEGRAL</th>
                    </tr>
                    <tr>
                        <th>MONITOR 1</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                        <th>MONITOR 1</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                    </tr>
                    <tr>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data25'] ?>
                        </td>
                        <td>
                            <?php echo $result['data26'] ?>
                        </td>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data27'] ?>
                        </td>
                        <td>
                            <?php echo $result['data28'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data29'] ?>
                        </td>
                        <td>
                            <?php echo $result['data30'] ?>
                        </td>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data31'] ?>
                        </td>
                        <td>
                            <?php echo $result['data32'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>MONITOR 2</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                        <th>MONITOR 2</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                    </tr>
                    <tr>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data33'] ?>
                        </td>
                        <td>
                            <?php echo $result['data34'] ?>
                        </td>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data35'] ?>
                        </td>
                        <td>
                            <?php echo $result['data36'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data37'] ?>
                        </td>
                        <td>
                            <?php echo $result['data38'] ?>
                        </td>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data39'] ?>
                        </td>
                        <td>
                            <?php echo $result['data40'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3">MONITOR STANDBY</th>
                        <th colspan="3">MONITOR STANDBY</th>
                    </tr>
                    <tr>
                        <th>MONITOR 1</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                        <th>MONITOR 1</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                    </tr>
                    <tr>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data41'] ?>
                        </td>
                        <td>
                            <?php echo $result['data42'] ?>
                        </td>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data43'] ?>
                        </td>
                        <td>
                            <?php echo $result['data44'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data45'] ?>
                        </td>
                        <td>
                            <?php echo $result['data46'] ?>
                        </td>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data47'] ?>
                        </td>
                        <td>
                            <?php echo $result['data48'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>MONITOR 2</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                        <th>MONITOR 2</th>
                        <th>NOMINAL</th>
                        <th>DATA</th>
                    </tr>
                    <tr>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data49'] ?>
                        </td>
                        <td>
                            <?php echo $result['data50'] ?>
                        </td>
                        <td>RF LEVEL</td>
                        <td>
                            <?php echo $result['data51'] ?>
                        </td>
                        <td>
                            <?php echo $result['data52'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data53'] ?>
                        </td>
                        <td>
                            <?php echo $result['data54'] ?>
                        </td>
                        <td>IDENT MODULATION</td>
                        <td>
                            <?php echo $result['data55'] ?>
                        </td>
                        <td>
                            <?php echo $result['data56'] ?>
                        </td>
                    </tr>
                </table>
            </table>
        </div>
        <center>
            <a href="data_middle.php" class="btn btn-secondary m-3">KEMBALI</a>
            <button class="btn btn-primary m-3" onclick="window.print();">PRINT</button>
        </center>
    </div>

    <script src="bootstrap/js/bootstrap.min.js'] ?></script>
</body>

</html>