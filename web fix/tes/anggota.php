<?php
require 'functions.php';
$anggota = query("select * from tb_anggota");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
        </header>
        <section>
            <h2> Data Anggota</h2>
            <!-- <form action="" method="POST" enctype="multipart/form-data" > -->
            <table border = "1", cellpadding = "15" , cellspacing ="0">
                <tr>
                        <th>Id Anggota</th>
                        <th>Password</th>
                        <th>NO.KTP/NIM/NIP</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Pendidikan Terakhir</th>
                        <th>NO.HP</th>
                        <th>Pekerjaan/Prodi</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                        <!-- <td class="nama"><input type="text" name="id_anggota" id="id_anggota"></td> -->
                </tr>


<?php foreach ($anggota as $row ) :  ?>
                <tr>
                    <td><?= $row["ID_ANGGOTA"] ?></td>
                    <td><?= $row["PASSWORD"];?></td>
                    <td><?= $row["NO_KTP_NIM_NIP"];?></td>
                    <td><?= $row["NAMA_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_KELAMIN"];?></td>
                    <td><?= $row["TEMPAT_TANGGAL_LAHIR"];?></td>
                    <td><?= $row["ALAMAT"];?></td>
                    <td><?= $row["PENDIDIKAN_TERAKHIR"];?></td>
                    <td><?= $row["NO_HP"];?></td>
                    <td><?= $row["PEKERJAAN_PRODI"];?></td>
                    <td><?= $row["EMAIL"];?></td>
                    <td><img src="img/<?=  $row["FOTO"]; ?>" alt="" width="50px"></td>
                    <td>
                        <a href="">Edit</a> |
                        <a href="hapus.php?id=<?= $row["ID_ANGGOTA"]; ?>"onclick="return confirm('Apakan Anda Benar Ingin Menghapus Data Ini?');">Hapus</a>
                    </td>     
                </tr>
<?php endforeach; ?>

<a href="registrasi_tes.php">Tambah Data</a>
             </table>
        </section>
</body>
</html>