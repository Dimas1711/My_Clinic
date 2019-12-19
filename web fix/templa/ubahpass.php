<?php
require 'functions.php';
session_start();

$_SESSION['user'];

//ambil data di url
$id = $_SESSION['user'];


//query berdasarkan id
$ang = query("SELECT * FROM tb_anggota WHERE NAMA_ANGGOTA = '$id'")[0];



//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
   //cek data berhasil ditambah?
   if( ubahpassword($_POST) > 0 )
   {
           echo "<script>
           alert('Data Berhasil Diubah');
           document.location.href = 'Home_login.php';
           </script>";
   }
   else
   {
           echo "<script>alert('Gagal Mengubah Data')</script>";
   }   
}
if(isset($_POST["batal"]))
{
        header("Location: Home_login.php");
        exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ubahpass.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>SI WEB Poliklinik Politeknik Negeri Jember</title>

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
      
			<!-- <link rel="stylesheet" href="css/skel-noscript.css" /> -->
			<link rel="stylesheet" href="css/setel.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		<!-- </noscript> -->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
<body  style="background: #cde1ec;">
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

    <section style="margin:30px 250px; padding:100px; font-size:15px; margin-left:300px; background-color: rgba(238, 235, 235, 0.836);">
    <form action="" method="POST">
    <table>
                <input type="hidden" name = "ID_ANGGOTA" value="<?= $ang["ID_ANGGOTA"];?>">
                <input type="hidden" name="PASSWORD" value="<?= $ang["PASSWORD"];?>">
                
                <tr>
                        <td>Password Lama</td>
                        <td class="nama"><input type="text" name="PASSWORD_LAMA" ></td>
                </tr>
                <tr>
                        <td>Password Baru</td>
                        <td class="nama"><input type="password" name="PASSWORD_BARU" ></td>
                </tr>
                <tr>
                        <td>Konfirmasi Password</td>
                        <td class="nama"><input type="text" name="KONFIRMASI_PASSWORD" ></td>
                </tr>
                <button type="submit" name="submit" class="kirim">Kirim</button>
                <button class="batal" name="batal">Batal</button>
    </table>
    </form>
    </section>
</body>
</html>