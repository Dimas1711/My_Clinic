<?php
require 'functions.php';

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
 
        //cek data berhasil ditambah?
        if( tambah($_POST) > 0 )
        {
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'Home_login.php';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
        }
       
}
if(isset($_POST["batal"]))
{
        header("Location: Home_login.php");
        exit;
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
        $hasilkode = "AG001";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<!-- <noscript> -->
                <link rel="stylesheet" href="css/registrasi.css"/>
			<!-- <link rel="stylesheet" href="css/skel-noscript.css" /> -->
			<link rel="stylesheet" href="css/setel.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		<!-- </noscript> -->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
<body  style="background:#cde1ec;">
    <div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
            <img src="LOGO-POLITEKNIK-NEGERI-JEMBER.png" style="float: left; margin: 0px 9px 3px 0px;" width="80" height="80" class="d-inline-block align-top" alt="">
            <h1><a href="#" style="padding: 0px 0px 0px 90px;">Klinik Pratama Politeknik Negeri Jember</a></h1>
            <!-- <div id="text">
                 Klinik Pratama
                 <br>
                 Politeknik Negeri Jember
            </div> -->
            </div>
            

				</div>
			</div>	
</div>

			
	<!-- Banner -->
  <div id="banner">
			<div class="container">
			</div>
		</div>
  <!-- /Banner -->

        <section>
            <h2> Form Pendaftaran</h2>
            <form action="" method="POST" enctype="multipart/form-data" >
            <table>
                <tr>
                        <td>Id Anggota</td>
                        <td class="nama"><input type="text" name="ID_ANGGOTA" id="id_anggota" value="<?php echo $hasilkode ?>" readonly></td>
                </tr>
                <tr>
                        <td>Password</td>
                        <td class="nama"><input type="password" name="PASSWORD" id="password" ></td>
                </tr>
                <tr>
                        <td>No.KTP/NIM/NIP</td>
                        <td class="nama"><input type="text" name="NO_KTP_NIM_NIP" id="ktp"></td>
                </tr>
                <tr>
                        <td>Nama Anggota</td>
                        <td class="nama"><input type="text" name="NAMA_ANGGOTA" id="nama" ></td>
                </tr>
                <tr>
                        <td>Jenis Anggota</td>
                        <td class="nama">
                                <select name="JENIS_ANGGOTA" id="jenis" >
                                        <option value="">Silahkan Pilih</option>
                                        <option value="umum">Umum</option>
                                        <option value="mahasiswa">Mahasiswa</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="keluarga Karyawan">Keluarga Karyawan</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Jenis Kelamin</td>
                        <td class="nama">
                        <select name="JENIS_KELAMIN" id="jenis_kelamin" >
                                <option value="">Silahkan Pilih</option>
                                <option value="l">L</option>
                                <option value="p">P</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>Tanggal Lahir</td>
                        <td class="nama"><input type="date" name="TEMPAT_TANGGAL_LAHIR"></td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td class="nama"><input type="text" name="ALAMAT" id="alamat" ></td>
                </tr>
                <tr>
                        <td>Pendidikan Terakhir</td>
                        <td class="nama">
                        <select name="PENDIDIKAN_TERAKHIR" id="pendidikan" >
                                <option value="">Silahkan Pilih</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>NO.HP</td>
                        <td class="nama"><input type="text" name="NO_HP" id="nohp" ></td>
                </tr>
                <tr>
                        <td>Pekerjaan / Prodi</td>
                        <td class="nama"><input type="text" name="PEKERJAAN_PRODI" id="pekerjaan" ></td>
                </tr>
                <tr>
                        <td>Email</td>
                        <td class="nama"><input type="text" name="EMAIL" id="email" placeholder="contoh@gmail.com"></td>
                </tr>
                <tr>
                        <td>Foto</td>
                        <td class="nama"><input type="file" name="FOTO" id="foto" ></td>
                </tr>
                <button type="submit" name="submit" class="kirim">Kirim</button>
                <button class="batal" name="batal">Batal</button>
             </table>
             </form>
        </section>
        <script src="js/jQuery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>