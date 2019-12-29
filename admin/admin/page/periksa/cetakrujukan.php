<?php 
require '../../functions_admin.php';

$id = $_GET['id'];

$rujukan = query("SELECT * FROM tb_rujukan WHERE ID_RUJUKAN = '$id'")[0];

$berobat = $rujukan["ID_BEROBAT"];
$berobat2 = query("SELECT * FROM tb_berobat WHERE ID_BEROBAT = '$berobat'")[0];

$anggota = $berobat2["ID_ANGGOTA"];
$anggota2 = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$anggota'")[0];

$dokter = $berobat2["ID_DOKTER"];
$dokter2 = query("SELECT * FROM tb_dokter WHERE ID_DOKTER = '$dokter'")[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="header">
<img src="logo polije.png" alt="">
    <h3>KEMENTRIAN RISET,TEKNOLOGI,DAN PENDIDIKAN TINGGI<br>POLITEKNIK NEGERI JEMBER<br>UNIT POLIKLINIK</h3>
    <p class="judul">JL. Mastrip Kotak Pos 164 Jember 68101 Telp.(0331) 333532-34 Fax.(0331) 333531</p>
</div>
    <h3>SURAT RUJUKAN</h3>
    <P class="tanggal">Jember,</P>
    <p class="ts">Yth. TS Dokter</p>
    <p class="rs">RS</p>
    <p class="di">di</p>
    <p class="tempat">tempat</p>
    <p class="bersama">Bersama ini kami sampaikan pasien:</p>
    <table >
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td style="float: left;"><?= $anggota2['NAMA_ANGGOTA'];?></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td>:</td>
            <td style="float: left; margin-right:10px"><?= $anggota2['USIA'];?></td>
            <td style="float: left;">Tahun</td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td>:</td>
            <td style="float: left;"><?= $berobat2['ANAMNESA'];?></td>
        </tr>
        <tr>
            <td rowspan="2">Pemeriksaan Fisik</td>
            <td rowspan="2">:</td>
            <td style="float: left; margin-right:10px">TD</td>
            <td style="float: left; margin-right:10px"><?= $berobat2['TENSI']?></td>
            <td style="float: left;">mmHg,</td>
            <td style="float: left; margin-right:10px">RR</td>
            <td style="float: left; margin-right:10px">20</td>
            <td style="float: left;">x/menit</td>
        </tr>
        <tr>
            <td style="float: left; margin-right:10px">N</td>
            <td style="float: left; margin-right:10px">10</td>
            <td style="float: left;">x/menit</td>
        </tr>
        <tr>
            <td>Diagnosa</td>
            <td>:</td>
            <td colspan="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis eaque placeat quasi voluptatem facilis impedit voluptatibus natus fugiat accusantium provident saepe laudantium et, soluta vitae! Repudiandae fugit neque nesciunt ipsam.</td>
        </tr>
    </table>
    <p class="mohon ">Mohon periksaan dan penanganan lebih lanjut.</p>
    <p class="btk">BTK,</p>
    <p class="dokter">Dokter yang memeriksa</p>
    <p class="nama">(<?= $dokter2['NAMA_DOKTER'];?>)</p>


    <script>
window.print();
</script>
</body>
</html>