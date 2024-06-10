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
$query = mysqli_query($koneksi, "SELECT * FROM tb_data WHERE id='$id'");
$result = mysqli_fetch_array($query);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
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
        <img src="gambar/header.png" class="img fluid" style="max-width: 100%; height:auto;">
    </div>
    <div class="container-sm mb-5" style="background-color:white; max-width:80%; height:auto;">
        <h3 class="text-center p-3">DETAIL DATA E-LOGBOOK</h3>
        <table class="table table-striped table-bordered table-responsive">
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
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>PERALATAN</th>
                <th>KONDISI</th>
            </tr>
            <tr>
                <td class="text-center">VHF - ADC MAIN</td>
                <td class="text-center"><?php echo $result['peralatan1'] ?></td>
            </tr>
            <tr>
                <td class="text-center">VHF - ADC SECONDARY</td>
                <td class="text-center"><?php echo $result['peralatan2'] ?></td>
            </tr>
            <tr>
                <td class="text-center">VHF SECONDARY (PAE)</td>
                <td class="text-center"><?php echo $result['peralatan3'] ?></td>
            </tr>
            <tr>
                <td class="text-center">VHF - ADC BACKUP</td>
                <td class="text-center"><?php echo $result['peralatan4'] ?></td>
            </tr>
            <tr>
                <td class="text-center">VHF - ADC Emergency</td>
                <td class="text-center"><?php echo $result['peralatan5'] ?></td>
            </tr>
            <tr>
                <td class="text-center">ATIS</td>
                <td class="text-center"><?php echo $result['peralatan6'] ?></td>
            </tr>
            <tr>
                <td class="text-center">VOICE RECORDER</td>
                <td class="text-center"><?php echo $result['peralatan7'] ?></td>
            </tr>
            <tr>
                <td class="text-center">DME</td>
                <td class="text-center"><?php echo $result['peralatan8'] ?></td>
            </tr>
            <tr>
                <td class="text-center">DVOR</td>
                <td class="text-center"><?php echo $result['peralatan9'] ?></td>
            </tr>
            <tr>
                <td class="text-center">NDB</td>
                <td class="text-center"><?php echo $result['peralatan10'] ?></td>
            </tr>
            <tr>
                <td class="text-center">LOCALIZER</td>
                <td class="text-center"><?php echo $result['peralatan11'] ?></td>
            </tr>
            <tr>
                <td class="text-center">GLIDE PATH</td>
                <td class="text-center"><?php echo $result['peralatan12'] ?></td>
            </tr>
            <tr>
                <td class="text-center">MIDDLE MARKER</td>
                <td class="text-center"><?php echo $result['peralatan13'] ?></td>
            </tr>
            <tr>
                <td class="text-center">OUTER MARKER</td>
                <td class="text-center"><?php echo $result['peralatan14'] ?></td>
            </tr>
            <tr>
                <td class="text-center">AMSC</td>
                <td class="text-center"><?php echo $result['peralatan15'] ?></td>
            </tr>
            <tr>
                <td class="text-center">AFTN TELEPRINTER 1 (KOM)</td>
                <td class="text-center"><?php echo $result['peralatan16'] ?></td>
            </tr>
            <tr>
                <td class="text-center">AFTN TELEPRINTER 2 (TWR)</td>
                <td class="text-center"><?php echo $result['peralatan17'] ?></td>
            </tr>
            <tr>
                <td class="text-center">AFTN TELEPRINTER 3 (BO)</td>
                <td class="text-center"><?php echo $result['peralatan18'] ?></td>
            </tr>
            <tr>
                <td class="text-center">AFTN TELEPRINTER 4 (METEO)</td>
                <td class="text-center"><?php echo $result['peralatan19'] ?></td>
            </tr>
            <tr>
                <td class="text-center">RADIO MONITOR</td>
                <td class="text-center"><?php echo $result['peralatan20'] ?></td>
            </tr>
            <tr>
                <td class="text-center">INTERNET</td>
                <td class="text-center"><?php echo $result['peralatan21'] ?></td>
            </tr>
            <tr>
                <td class="text-center">TELEPON</td>
                <td class="text-center"><?php echo $result['peralatan22'] ?></td>
            </tr>
            <tr>
                <td class="text-center">RADIO LINK</td>
                <td class="text-center"><?php echo $result['peralatan23'] ?></td>
            </tr>
            <tr>
                <td class="text-center">VSAT</td>
                <td class="text-center"><?php echo $result['peralatan24'] ?></td>
            </tr>
            </tr>
        </table>
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>KETERANGAN</th>
            </tr>
            <tr class="text-center">
                <td><?php echo $result['keterangan'] ?></td>
            </tr>
        </table>
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>CATATAN</th>
            </tr>
            <tr class="text-center">
                <td><?php echo $result['catatan'] ?></td>
            </tr>
        </table>
        <center>
            <a href="logbook.php" class="btn btn-secondary m-3">KEMBALI</a>
            <button class="btn btn-primary m-3" onclick="window.print();">PRINT</button>
        </center>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>