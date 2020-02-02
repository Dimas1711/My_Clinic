<?php
require 'functions.php';
session_start();

$_SESSION['user'];

//ambil data di url
$id = $_SESSION['user'];


//query berdasarkan id
$ang = query("SELECT * FROM tb_anggota WHERE NAMA_ANGGOTA = '$id'")[0];


if(isset($_POST["batal"]))
{
        header("Location: index.php");
        exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="baru.css">
    <title>Document</title>

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
      
			<link rel="stylesheet" href="css/skel-noscript.css" />
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

        <section style="background-color: rgba(238, 235, 235, 0.836); margin: 30px 250px; padding: 50px; font-size: 15px; margin-left: 300px;">
        <form action="" method="post">
        <h2 class="edit"> Kartu Berobat</h2>
            <table style="margin-left: 200px; background-color: rgba(250, 250, 23, 0.911); position: relative;" border ="1" >
                <tr>
                        <th colspan="2"><b>Kartu Berobat<b></th>
                </tr>     
                <tr>
                        <td class="judul">ID Anggota</td>
                        <td class="nama"><?= $ang["ID_ANGGOTA"];?></td>
                </tr>
                <tr>
                        <td class="judul">No.KTP/NIM/NIP</td>
                        <td class="nama"><?= $ang["NO_KTP_NIM_NIP"]?></td>
                </tr>
                <tr>
                        <td class="judul">Nama Anggota</td>
                        <td class="nama"><?= $ang["NAMA_ANGGOTA"]?></td>
                </tr>
                <tr>
                        <td class="judul">Jenis Anggota</td>
                        <td class="nama"><?= $ang["JENIS_ANGGOTA"]?></td>
                </tr>
                <tr>
                        <td class="judul">Jenis Kelamin</td>
                        <td class="nama"><?= $ang["JENIS_KELAMIN"]?></td>
                </tr>
                <tr>
                        <td class="judul">Usia</td>
                        <td class="nama"><?= $ang["USIA"]?></td>
                </tr>
                <tr>
                        <td class="judul">Alamat</td>
                        <td class="nama"><?= $ang["ALAMAT"]?></td>
                </tr>
                <tr>
                        <td class="judul">Pekerjaan / Prodi</td>
                        <td class="nama"><?= $ang["PEKERJAAN_PRODI"]?></td>
                </tr>
             </table>
                <button type="submit" name="submit" class="btn"><a style="color:black;" href="cetak3.php" target="_blank">Cetak</a></button>
                <button type="submit" name="batal" class="btn2"><a style="color:black;" href="index.php">Batal</a></button>
        </form>
        
             
             
              </section>
    
</body>
</html>
   