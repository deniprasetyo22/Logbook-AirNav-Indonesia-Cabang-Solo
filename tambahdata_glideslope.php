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
    <title>Tambah Data Localizer</title>
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
        <form action="simpandata_glideslope.php" method="POST">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <h3 class="text-center p-3">TAMBAH DATA GLIDESLOPE</h3>
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
                                    <input type="text" class="inputtable" autocomplete="off" name="data1">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data2">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data3">
                                </td>
                            </tr>
                            <tr>
                                <td>CSB REFLECTED POWER</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data4">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data5">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data6">
                                </td>
                            </tr>
                            <tr>
                                <td>SBO FORWARD POWER</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data7">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data8">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data9">
                                </td>
                            </tr>
                            <tr>
                                <td>SBO REFLECTED POWER</td>
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
                                <th>STANDBY COURSE TRANSMITTER PARAMETERS</th>
                                <th>LIMIT</th>
                                <th>TX 1</th>
                                <th>TX 2</th>
                            </tr>
                            <tr>
                                <td>CSB FORWARD POWER</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data13">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data14">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data15">
                                </td>
                            </tr>
                            <tr>
                                <td>SBO FORWARD POWER</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data16">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data17">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data18">
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
                                    <input type="text" class="inputtable" autocomplete="off" name="data19">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data20">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data21">
                                </td>
                            </tr>
                            <tr>
                                <td>REFLECTED POWER</td>
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
                                <th>STANDBY CLEARENCE TRANSMITTER PARAMETERS</th>
                                <th>LIMIT</th>
                                <th>TX 1</th>
                                <th>TX 2</th>
                            </tr>
                            <tr>
                                <td>FORWARD POWER</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data25">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data26">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data27">
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
                                    <input type="text" class="inputtable" autocomplete="off" name="data28">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data29">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data30">
                                </td>
                            </tr>
                            <tr>
                                <td>MIDDLE ANTENNA FORWARD POWER</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data31">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data32">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data33">
                                </td>
                            </tr>
                            <tr>
                                <td>LOWER ANTENNA FORWARD POWER</td>
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
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data41">
                                </td>
                            </tr>
                            <tr>
                                <td>PATH DDM</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data42">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data43">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data44">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data45">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data46">
                                </td>
                            </tr>
                            <tr>
                                <td>PATH SDM</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data47">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data48">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data49">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data50">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data51">
                                </td>
                            </tr>
                            <tr>
                                <td>WIDTH DDM</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data52">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data53">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data54">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data55">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data56">
                                </td>
                            </tr>
                            <tr>
                                <td>SYNTH LOCK/REV SENSE</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data57">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data58">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data59">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data60">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data61">
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
                                    <input type="text" class="inputtable" autocomplete="off" name="data62">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data63">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data64">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data65">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data66">
                                </td>
                            </tr>
                            <tr>
                                <td>150Hz MOD PERCENT</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data67">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data68">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data69">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data70">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data71">
                                </td>
                            </tr>
                            <tr>
                                <td>SYNTH LOCK</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data72">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data73">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data74">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data75">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data76">
                                </td>
                            </tr>
                            <tr>
                                <td>RF FREQ DIFFERENCE</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data77">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data78">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data79">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data80">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data81">
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
                                    <input type="text" class="inputtable" autocomplete="off" name="data82">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data83">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data84">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data85">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data86">
                                </td>
                            </tr>
                            <tr>
                                <td>PATH DDM</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data87">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data88">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data89">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data90">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data91">
                                </td>
                            </tr>
                            <tr>
                                <td>PATH SDM</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data92">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data93">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data94">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data95">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data96">
                                </td>
                            </tr>
                            <tr>
                                <td>WIDTH DDM</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data97">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data98">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data99">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data100">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data101">
                                </td>
                            </tr>
                            <tr>
                                <td>SYNTH LOCK/REV SENSE</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data102">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data103">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data104">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data105">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data106">
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
                                    <input type="text" class="inputtable" autocomplete="off" name="data107">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data108">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data109">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data110">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data111">
                                </td>
                            </tr>
                            <tr>
                                <td>150Hz MOD PERCENT</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data112">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data113">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data114">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data115">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data116">
                                </td>
                            </tr>
                            <tr>
                                <td>SYNTH LOCK</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data117">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data118">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data119">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data120">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data121">
                                </td>
                            </tr>
                            <tr>
                                <td>RF FREQ DIFFERENCE</td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data122">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data123">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data124">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data125">
                                </td>
                                <td>
                                    <input type="text" class="inputtable" autocomplete="off" name="data126">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
            <center>
                <a href="data_glideslope.php" class="btn btn-secondary m-3">KEMBALI</a>
                <button type="submit" class="btn btn-primary" name="submit_dme">Submit</button>
            </center>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>