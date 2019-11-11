<?php
require 'functions.php';

//ambil data di url
$id = $_GET['id'];


//query berdasarkan id
$ang = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id'")[0];




//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubah($_POST) > 0 )
        {
                echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'anggota.php';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Mengubah Data')</script>";
        }
       
}
if(isset($_POST['batal']))
{
        header("Location: anggota.php");
        exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="registrasi.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
        <header>
                <img src="logo polije.png" alt="ini gambar">
                <h1>Klinik Pratama
                    <br>
                    Rawat Jalan
                    <br>
                    Politeknik Negeri Jember
                    <br>
                </h1>
        </header>
        <section>
            <h2> Form Edit Profil</h2>
            <form action="" method="POST" enctype="multipart/form-data" >
            <table>
                
                        <input type="hidden" name="ID_ANGGOTA" id="id_anggota" value="<?= $ang["ID_ANGGOTA"];?>">
                        <input type="hidden" name="PASSWORD" id="password" value="<?= $ang["PASSWORD"];?>">
                        <input type="hidden" name="GAMBARLAMA" id="password" value="<?= $ang["FOTO"];?>">
                <tr>
                        <td>No.KTP/NIM/NIP</td>
                        <td class="nama"><input type="text" name="NO_KTP_NIM_NIP" id="ktp" value="<?= $ang["NO_KTP_NIM_NIP"]?>"></td>
                </tr>
                <tr>
                        <td>Nama Anggota</td>
                        <td class="nama"><input type="text" name="NAMA_ANGGOTA" id="nama" value="<?= $ang["NAMA_ANGGOTA"]?>"></td>
                </tr>
                <tr>
                        <td>Jenis Anggota</td>
                        <td class="nama">
                                <select name="JENIS_ANGGOTA" id="jenis" value="<?= $ang["JENIS_ANGGOTA"]?>" >
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
                        <select name="JENIS_KELAMIN" id="jenis_kelamin" value="<?= $ang["JENIS_KELAMIN"]?>">
                                <option value="">Silahkan Pilih</option>
                                <option value="l">L</option>
                                <option value="p">P</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td class="nama"><input type="text" name="TEMPAT_TANGGAL_LAHIR" id="ttl" value="<?= $ang["TEMPAT_TANGGAL_LAHIR"]?>"></td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td class="nama"><input type="text" name="ALAMAT" id="alamat" value="<?= $ang["ALAMAT"]?>"></td>
                </tr>
                <tr>
                        <td>Pendidikan Terakhir</td>
                        <td class="nama">
                        <select name="PENDIDIKAN_TERAKHIR" id="pendidikan" value="<?= $ang["PENDIDIKAN_TERAKHIR"]?>">
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
                        <td class="nama"><input type="text" name="NO_HP" id="nohp" value="<?= $ang["NO_HP"]?>"></td>
                </tr>
                <tr>
                        <td>Pekerjaan / Prodi</td>
                        <td class="nama"><input type="text" name="PEKERJAAN_PRODI" id="pekerjaan" value="<?= $ang["PEKERJAAN_PRODI"]?>"></td>
                </tr>
                <tr>
                        <td>Email</td>
                        <td class="nama"><input type="text" name="EMAIL" id="email" value="<?= $ang["EMAIL"]?>"></td>
                </tr>
                <tr>
                        <td>Foto</td>
                        <td><img src="img/<?= $ang['FOTO'];?>" alt="" width="100px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="nama"><input type="file" name="FOTO" id="foto" ></td>
                </tr>
                <button type="submit" name="submit" class="kirim">Ubah</button>
                <button class="batal" name="batal">Batal</button>
             </table>
             </form>
        </section>
</body>
</html>