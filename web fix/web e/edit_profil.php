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
        if( ubah($_POST) > 0 )
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
        header("Location: home_login.php");
        exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
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
        <h2 class="edit"> Form Edit Profil</h2>
            <form action="" method="POST" enctype="multipart/form-data" >
            
            
            <table >
                
                        <input type="hidden" name="ID_ANGGOTA" id="id_anggota" value="<?= $ang["ID_ANGGOTA"];?>">
                        <input type="hidden" name="PASSWORD" id="password" value="<?= $ang["PASSWORD"];?>">
                        <input type="hidden" name="GAMBARLAMA" id="password" value="<?= $ang["FOTO"];?>">
                        

                <tr>
                        <td ><img class="foto" src="img/<?= $ang['FOTO'];?>" alt="" width="150px"></td>
                        <td class="nama"><input type="file" name="FOTO" id="inputfoto"></td>
                </tr>
                <tr>
                        <th>No.KTP/NIM/NIP</th>
                        <td class="nama"><input type="text" name="NO_KTP_NIM_NIP" id="ktp" value="<?= $ang["NO_KTP_NIM_NIP"]?>"></td>
                </tr>
                <tr>
                        <th>Nama Anggota</th>
                        <td class="nama"><input type="text" name="NAMA_ANGGOTA" id="nama" value="<?= $ang["NAMA_ANGGOTA"]?>"></td>
                </tr>
                <tr>
                        <th>Jenis Anggota</th>
                        <td class="nama">
                                <select name="JENIS_ANGGOTA" id="jenis" value="<?= $ang["JENIS_ANGGOTA"]?>" >
                                        <option value="">Silahkan Pilih</option>
                                        <option value="umum" <?php if ($ang["JENIS_ANGGOTA"] == 'Umum') {echo "selected";} ?> >Umum</option>
                                        <option value="mahasiswa" <?php if ($ang["JENIS_ANGGOTA"] == 'Mahasiswa') {echo "selected";} ?> >Mahasiswa</option>
                                        <option value="karyawan" <?php if ($ang["JENIS_ANGGOTA"] == 'Karyawan') {echo "selected";} ?> >Karyawan</option>
                                        <option value="keluarga Karyawan" <?php if ($ang["JENIS_ANGGOTA"] == 'Keluarga Karyawan') {echo "selected";} ?> >Keluarga Karyawan</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <th>Jenis Kelamin</th>
                        <td class="nama">
                        <select name="JENIS_KELAMIN" id="jenis_kelamin" value="<?= $ang["JENIS_KELAMIN"]?>">
                                <option value="">Silahkan Pilih</option>
                                <option value="L" <?php if ($ang["JENIS_KELAMIN"] == 'L') {echo "selected";} ?> >L</option>
                                <option value="P" <?php if ($ang["JENIS_KELAMIN"] == 'P') {echo "selected";} ?> >P</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <td class="nama"><input type="date" name="TEMPAT_TANGGAL_LAHIR" id="ttl" value="<?= $ang["TANGGAL_LAHIR"]?>"></td>
                </tr>
                <tr>
                        <th>Alamat</th>
                        <td class="nama"><input type="text" name="ALAMAT" id="alamat" value="<?= $ang["ALAMAT"]?>"></td>
                </tr>
                <tr>
                        <th>Pendidikan Terakhir</th>
                        <td class="nama">
                        <select name="PENDIDIKAN_TERAKHIR" id="pendidikan" value="<?= $ang["PENDIDIKAN_TERAKHIR"]?>">
                                <option value="">Silahkan Pilih</option>
                                <option value="SD" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'SD') {echo "selected";} ?> >SD</option>
                                <option value="SMP" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'SMP') {echo "selected";} ?> >SMP</option>
                                <option value="SMA" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'SMA') {echo "selected";} ?> >SMA</option>
                                <option value="S1" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'S1') {echo "selected";} ?> >S1</option>
                                <option value="S2" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'S2') {echo "selected";} ?> >S2</option>
                                <option value="S3" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'S3') {echo "selected";} ?> >S3</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <th>NO.HP</th>
                        <td class="nama"><input type="text" name="NO_HP" id="nohp" value="<?= $ang["NO_HP"]?>"></td>
                </tr>
                <tr>
                        <th>Pekerjaan / Prodi</th>
                        <td class="nama"><input type="text" name="PEKERJAAN_PRODI" id="pekerjaan" value="<?= $ang["PEKERJAAN_PRODI"]?>"></td>
                </tr>
                <tr>
                        <th>Email</th>
                        <td class="nama"><input type="text" name="EMAIL" id="email" value="<?= $ang["EMAIL"]?>"></td>
                </tr>
                <button class="kirim" type="submit" name="submit"  onclick="return confirm('Apakah Anda Benar Ingin Merubah Profil Anda?');">Ubah</button>
                <button class="batal" name="batal">Batal</button>
             </table>
             </form>
              </section>
    
</body>
</html>
   