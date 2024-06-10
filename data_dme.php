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
    <title>Data DME</title>
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
        <h3 class="text-center p-3">DATA DME MOPIENS MARU 320</h3>
        <nav class="navbar bg-light">
            <div class="container-fluid mt-2">
                <a href="tambahdata_dme.php" type="button" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>Tambah</a>
            </div>
        </nav>
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>NO</th>
                <th>DATE</th>
                <th>SHIFT</th>
                <th></th>
            </tr>
            <tr>
                <?php
                include "koneksi.php";
                $data = mysqli_query($koneksi, "SELECT id, tanggal, shift FROM tb_dme ORDER BY id DESC");
                $batas = 10;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
                $previous = $halaman - 1;
                $next = $halaman + 1;
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);
                $no = $halaman_awal + 1;

                $query = mysqli_query($koneksi, "SELECT id, tanggal, shift FROM tb_dme ORDER BY id DESC LIMIT $halaman_awal, $batas");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $data['tanggal']; ?></td>
                    <td class="text-center"><?php echo $data['shift']; ?></td>
                    <td class="text-center col-4">
                        <a href="detaildata_dme.php?id=<?php echo $data['id'] ?>" class="btn btn-outline-success">Lihat Detail</a>
                        <a href="hapus_dme.php?id=<?php echo $data['id']; ?>" class="btn btn-danger alert_notif m-2"> Hapus </a>
                    </td>
            </tr>
        <?php
                }
        ?>

        </table>
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman > 1) {
                                                echo "href='?halaman=$previous'";
                                            } ?>>Previous</a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                echo "href='?halaman=$next'";
                                            } ?>>Next</a>
                </li>
            </ul>
        </nav>
        <center>
            <a href="meterreading.php" class="btn btn-secondary m-3">KEMBALI</a>
            <a href="logout.php" class="btn btn-danger m-3">Logout</a>
        </center>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
        di dalam session sukses  -->
    <?php if (@$_SESSION['sukses']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: 'Data Berhasil Dihapus',
                timer: 1500,
                showConfirmButton: false
            })
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']);
    } ?>
    <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
    <script>
        $('.alert_notif').on('click', function() {
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Apakah yakin hapus data ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"
            }).then(result => {
                //jika klik ya maka arahkan ke proses.php
                if (result.isConfirmed) {
                    window.location.href = getLink
                }
            })
            return false;
        });
    </script>
</body>

</html>