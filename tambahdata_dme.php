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
    <title>DME MOPIENS MARU 320</title>
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

        .inputtable {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="container-sm p-3 my-5">
        <img src="gambar/header2.png" class="img fluid" style="max-width: 100%; height:auto;">
    </div>
    <div class="container-sm mb-5" style="background-color:white; max-width:80%; height:auto;">
        <form action="simpandata_dme.php" method="POST">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <h3 class="text-center p-3">TAMBAH DATA DME</h3>
                    <div class="row">
                        <div class="alert alert-secondary text-center col-6">
                            <strong>
                                <label for="tanggal">HARI/TANGGAL</label>
                            </strong>
                            <div class="md-form md-outline input-with-post-icon datepicker">
                                <input type="date" name="tanggal" class="form-control ml">
                            </div>
                        </div>
                        <div class="alert alert-secondary text-center col-6">
                            <strong>
                                <label for="shift">SHIFT</label>
                            </strong>
                            <select class="form-select" class="shift" name="shift">
                                <option selected>- Pilih Shift -</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                                <option value="Malam">Malam</option>
                            </select>
                        </div>
                    </div>
                    <div class="alert alert-secondary text-center">
                        <strong>
                            <label for="personel">PERSONEL ON DUTY</label>
                        </strong>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" class="addon-wrapping">1</span>
                            <input type="text" class="form-control" class="personel1" name="personel1" placeholder="Masukan Nama" autocomplete="off">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" class="addon-wrapping">2</span>
                            <input type="text" class="form-control" class="personel2" name="personel2" placeholder="Masukan Nama" autocomplete="off">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" class="addon-wrapping">3</span>
                            <input type="text" class="form-control" class="personel3" name="personel3" placeholder="Masukan Nama" autocomplete="off">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" class="addon-wrapping">4</span>
                            <input type="text" class="form-control" class="personel4" name="personel4" placeholder="Masukan Nama" autocomplete="off">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" class="addon-wrapping">5</span>
                            <input type="text" class="form-control" class="personel5" name="personel5" placeholder="Masukan Nama" autocomplete="off">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" class="addon-wrapping">6</span>
                            <input type="text" class="form-control" class="personel6" name="personel6" placeholder="Masukan Nama" autocomplete="off">
                        </div>
                    </div>
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th rowspan="2">PARAMETER</th>
                                <th colspan="2">TRANSMITTER 1</th>
                                <th colspan="2">TRANSMITTER 2</th>
                            </tr>
                            <tr>
                                <th>MONITOR 1</th>
                                <th>MONITOR 2</th>
                                <th>MONITOR 1</th>
                                <th>MONITOR 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>REPLY EFFICIENCY</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data1">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data2">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data3">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data4">
                                </td>
                            </tr>
                            <tr>
                                <td>PULSE RATE</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data5">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data6">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data7">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data8">
                                </td>
                            </tr>
                            <tr>
                                <td>REPLY DELAY</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data9">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data10">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data11">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data12">
                                </td>
                            </tr>
                            <tr>
                                <td>PULSE SPACING</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data13">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data14">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data15">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data16">
                                </td>
                            </tr>
                            <tr>
                                <td>PULSE DURATION</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data17">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data18">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data19">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data20">
                                </td>
                            </tr>
                            <tr>
                                <td>PULSE RISE TIME</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data21">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data22">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data23">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data24">
                                </td>
                            </tr>
                            <tr>
                                <td>PULSE DECAY TIME</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data25">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data26">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data27">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data28">
                                </td>
                            </tr>
                            <tr>
                                <td>FORWARD PEAK POWER</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data29">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data30">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data31">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data32">
                                </td>
                            </tr>
                            <tr>
                                <td>IDENT</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data33">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data34">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data35">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data36">
                                </td>
                            </tr>
                            <tr>
                                <td>LAMPU INDIKATOR</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data37">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data38">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data39">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data40">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
            <center>
                <a href="meterreading.php" class="btn btn-secondary m-3">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit_dme">Submit</button>
            </center>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>