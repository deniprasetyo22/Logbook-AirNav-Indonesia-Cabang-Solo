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
    <title>Tambah Data</title>
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
        <img src="gambar/header.png" class="img fluid" style="max-width: 100%; height:auto;">
    </div>
    <div class="container-sm mb-5" style="background-color:white; max-width:80%; height:auto;">
        <form action="simpandata.php" id="form" method="POST">
            <div class="row">
                <div class="alert alert-secondary text-center col-6">
                    <strong>
                        <label for="tanggal">HARI/TANGGAL</label>
                    </strong>
                    <div class="md-form md-outline input-with-post-icon datepicker">
                        <input type="date" id="tanggal" name="tanggal" class="form-control ml">
                    </div>
                </div>
                <div class="alert alert-secondary text-center col-6">
                    <strong>
                        <label for="shift">SHIFT</label>
                    </strong>
                    <select class="form-select" id="shift" name="shift">
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
                    <span class="input-group-text" id="addon-wrapping">1</span>
                    <input type="text" class="form-control" id="personel1" name="personel1" placeholder="Masukan Nama" autocomplete="off">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">2</span>
                    <input type="text" class="form-control" id="personel2" name="personel2" placeholder="Masukan Nama" autocomplete="off">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">3</span>
                    <input type="text" class="form-control" id="personel3" name="personel3" placeholder="Masukan Nama" autocomplete="off">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">4</span>
                    <input type="text" class="form-control" id="personel4" name="personel4" placeholder="Masukan Nama" autocomplete="off">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">5</span>
                    <input type="text" class="form-control" id="personel5" name="personel5" placeholder="Masukan Nama" autocomplete="off">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">6</span>
                    <input type="text" class="form-control" id="personel6" name="personel6" placeholder="Masukan Nama" autocomplete="off">
                </div>
            </div>
            <table class="table table-striped table-bordered text-center">
                <tr>
                    <th colspan="2">
                        <strong>
                            <label for="peralatan">PERALATAN</label>
                        </strong>
                    </th>
                <tr>
                    <th class="col-6">NAMA ALAT</th>
                    <th>KONDISI</th>
                </tr>
                <tr>
                    <td>VHF - ADC MAIN</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan1" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan1" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>VHF - ADC SECONDARY</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan2" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan2" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>VHF SECONDARY (PAE)</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan3" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan3" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>VHF - ADC BACKUP</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan4" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan4" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>VHF - ADC Emergency</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan5" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan5" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>ATIS</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan6" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan6" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>VOICE RECORDER</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan7" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan7" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>DME</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan8" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan8" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>DVOR</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan9" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan9" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>NDB</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan10" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan10" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>LOCALIZER</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan11" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan11" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>GLIDE PATH</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan12" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan12" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>MIDDLE MARKER</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan13" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan13" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>OUTER MARKER</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan14" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan14" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AMSC</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan15" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan15" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AFTN TELEPRINTER 1 (KOM)</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan16" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan16" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AFTN TELEPRINTER 2 (TWR)</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan17" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan17" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AFTN TELEPRINTER 3 (BO)</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan18" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan18" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AFTN TELEPRINTER 4 (METEO)</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan19" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan19" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>RADIO MONITOR</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan20" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan20" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>INTERNET</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan21" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan21" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>TELEPON</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan22" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan22" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>RADIO LINK</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan23" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan23" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label" for="inlineRadio2">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>VSAT</td>
                    <td>
                        <div class="form-check form-check-inline pe-4">
                            <input class="form-check-input" type="radio" name="peralatan24" id="inlineRadio1" value="Normal">
                            <label class="form-check-label" for="inlineRadio1">Normal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="peralatan24" id="inlineRadio2" value="Tidak Normal">
                            <label class="form-check-label">Tidak Normal</label>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="alert alert-secondary text-center">
                <strong>
                    <label for="keterangan">KETERANGAN</label>
                </strong>
                <label for="keterangan" class="form-label"></label>
                <textarea class="form-control" id="keterangan" rows="3" name="keterangan" placeholder="Masukan Keterangan" autocomplete="off"></textarea>
            </div>
            <div class="alert alert-secondary text-center">
                <strong>
                    <label for="keterangan">CATATAN</label>
                </strong>
                <label for="keterangan" class="form-label"></label>
                <textarea class="form-control" id="catatan" rows="3" name="catatan" placeholder="Masukan Catatan" autocomplete="off"></textarea>
            </div>
            <center>
                <a href="logbook.php" class="btn btn-secondary m-3">KEMBALI</a>
                <button type="submit" class="btn btn-primary" id="submit" name="submit" onclick="contoh()">Submit</button>
            </center>
        </form>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>