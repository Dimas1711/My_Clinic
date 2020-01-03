<?php
require 'functions.php';

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
 
        //cek data berhasil ditambah?
        if( tambah($_POST) > 0 )
        {
                echo "<script>
                alert('Terima Kasih Sudah Mendaftar, Silahkan tunggu verifikasi dari admin');
                document.location.href = 'index.php';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
        }
       
}

if( isset ($_POST["batal"]) )
{
    echo "<script>
                document.location.href = 'index.php';
                </script>";
}


$carikode = mysqli_query($conn, "SELECT max(ID_ANGGOTA) FROM tb_anggota") or die(mysqli_error($conn));
$datakode = mysqli_fetch_array($carikode);
if($datakode)
{
        $nilaikode = substr($datakode[0], 2);
        $kode = (int) $nilaikode;
        $kode = $kode + 1;
        $hasilkode = "AG" .str_pad($kode, 4, "0", STR_PAD_LEFT);
}
else
{
        $hasilkode = "AG0001";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Registrasi</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="STATUS" value="Pending">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ID Anggota</label>
                                    <input class="input--style-4" type="text" name="ID_ANGGOTA" value="<?php echo $hasilkode ?>" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label style="margin-top:30px; color:red;" class="label">Digunakan Saat Login</label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="PASSWORD" >
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NO.KTP/NIM/NIP</label>
                                    <input class="input--style-4" type="text" name="NO_KTP_NIM_NIP" >
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Anggota</label>
                                    <input class="input--style-4" type="text" name="NAMA_ANGGOTA" >
                                </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Jenis Anggota</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="JENIS_ANGGOTA">
                                        <option disabled="disabled" selected="selected">Silahkan Pilih</option>
                                        <option value="Umum">Umum</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Karyawan">Karyawan</option>
                                        <option value="Keluarga Karyawan">Keluarga Karyawan</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" name="TEMPAT_TANGGAL_LAHIR">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Laki - laki
                                            <input type="radio" checked="checked" name="JENIS_KELAMIN" value="L">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Perempuan
                                            <input type="radio" name="JENIS_KELAMIN" value="P">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Usia</label>
                                    <input class="input--style-4" type="text" name="USIA">
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat</label>
                                    <input class="input--style-4" type="text" name="ALAMAT">
                                </div>
                            </div>
                        <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Pendidikan Terakhir</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="PENDIDIKAN_TERAKHIR">
                                        <option disabled="disabled" selected="selected">Silahkan Pilih</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4 / S1">D4 / S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pekerjaan / Prodi</label>
                                    <input class="input--style-4" type="text" name="PEKERJAAN_PRODI">
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="EMAIL">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NO.HP</label>
                                    <input class="input--style-4" type="text" name="NO_HP">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Foto</label>
                                    <input class="input--style-4" type="file" name="FOTO">
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button style="margin-top: 100px; margin-left: 200px;" class="btn btn--radius-2 btn--blue" type="submit" name="submit">Kirim</button>
                            <button style="margin-top: 100px; margin-left: 10px;" class="btn btn--radius-2 btn--red" name="batal" value="batal" onclick="window.location.href='index.php'">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->