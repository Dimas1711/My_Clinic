<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="cetak.css">
</head>
<body>
    <?php 
    include 'functions.php';
    session_start();

$_SESSION['user'];

//ambil data di url
$id = $_SESSION['user'];


//query berdasarkan id
$ang = query("SELECT * FROM tb_anggota WHERE NAMA_ANGGOTA = '$id'")[0];
	?>
            <table border ="1">
                <tr>
                        <th colspan="2">Kartu Berobat</th>
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
                        <td class="judul">Alamat</td>
                        <td class="nama"><?= $ang["ALAMAT"]?></td>
                </tr>
                <tr>
                        <td class="judul">Pekerjaan / Prodi</td>
                        <td class="nama"><?= $ang["PEKERJAAN_PRODI"]?></td>
                </tr>
             </table>

             <script>
                window.print();
             </script>
</body>
</html>