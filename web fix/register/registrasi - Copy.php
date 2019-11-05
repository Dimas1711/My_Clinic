<?php
require 'functions.php';
        if(isset ($_POST["register"]))
        {
                if (registrasi($_POST) > 0 )
                {
                        echo"<script>
                                alert('user baru berhasil ditambahkan');
                        </script>";
                }
                else
                {
                        echo mysqli_error($conn); 
                }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
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
            <form action="" method="POST">
            <table>
                <tr>
                        <td>Username</td>
                        <td class="nama"><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                        <td>Password</td>
                        <td class="nama"><input type="text" name="password" id="password"></td>
                </tr>
                <tr>
                        <td>No.KTP/NIM/NIP</td>
                        <td class="nama"><input type="text" name="identitas" id="identitas"></td>
                </tr>
                <tr>
                        <td>Nama</td>
                        <td class="nama"><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                        <td>Jenis Pasien</td>
                        <td class="nama">
                                <select name="jenispasien"> 
                                <option value="umum">Umum</option> 
                                <option value="mahasiswa">Mahasiswa</option> 
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Pekerjaan / Prodi</td>
                        <td class="nama">
                                <select name="pekerjaan/prodi"> 
                                <option value="pria">pria</option> 
                                <option value="wanita">wanita</option> 
                                </select> 
                        </td>
                </tr>
                <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td class="nama"><input type="text" name="ttl" id="ttl"></td>
                </tr>
                <tr>
                        <td>Usia</td>
                        <td class="nama"><input type="text" name="usia" id="usia"></td>
                </tr>
                <tr>
                        <td>Jenis Kelamin</td>
                        <td class="nama">
                                <select name="jeniskelamin"> 
                                <option value="pria">pria</option> 
                                <option value="wanita">wanita</option> 
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td class="nama"><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                        <td>Pendidikan Terakhir</td>
                        <td class="nama"><input type="text" name="pendidikan"></td>
                </tr>
                <tr>
                        <td>NO.HP</td>
                        <td class="nama"><input type="text" name="nohp" id="nohp"></td>
                </tr>
                <button type="submit" name="register" class="kirim">Kirim</button>
                <button class="batal">Batal</button>
             </table>
             </form>
        </section>
</body>
</html>