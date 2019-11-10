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
                document.location.href = 'anggota.php';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
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
            <h2> Form Pendaftaran</h2>
            <form action="" method="POST" enctype="multipart/form-data" >
            <table>
                <tr>
                        <td>Id Anggota</td>
                        <td class="nama"><input type="text" name="ID_ANGGOTA" id="id_anggota" ></td>
                </tr>
                <tr>
                        <td>Password</td>
                        <td class="nama"><input type="text" name="PASSWORD" id="password" ></td>
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
                        <td>Tempat Tanggal Lahir</td>
                        <td class="nama"><input type="text" name="TEMPAT_TANGGAL_LAHIR" id="ttl" ></td>
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
                        <td class="nama"><input type="text" name="EMAIL" id="email" ></td>
                </tr>
                <tr>
                        <td>Foto</td>
                        <td class="nama"><input type="text" name="FOTO" id="foto" ></td>
                </tr>
                <button type="submit" name="submit" class="kirim">Kirim</button>
                <button class="batal" name="batal">Batal</button>
             </table>
             </form>
        </section>
</body>
</html>