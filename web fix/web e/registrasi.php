<?php
// require 'functions.php';
$conn = mysqli_connect("localhost","root","","coba");

        $id_anggota = @$_POST['id_anggota'];
        $password = @$_POST['password'];
        $ktp = @$_POST['ktp'];
        $nama = @$_POST['nama'];
        $jenis = @$_POST['jenis'];
        $jenis_kelamin = @$_POST['jenis_kelamin'];
        $ttl = @$_POST['ttl'];
        $alamat = @$_POST['alamat'];
        $pendidikan = @$_POST['pendidikan'];
        $nohp = @$_POST['nohp'];
        $pekerjaan = @$_POST['pekerjaan'];
        $email = @$_POST['email'];      
        $nama_foto = @$_FILES['foto']['name'];
        $tmp_foto = @$_FILES['foto']['tmp_name'];
        $folder = "img/".$nama_foto;

if (isset($_POST['register']))
{
        
        move_uploaded_file($tmp_foto, $folder);
        $query="INSERT INTO tb_anggota VALUES
        ('$id_anggota','$password','$ktp','$nama','$jenis','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp','$pekerjaan','$email','$folder')";

        $sql= mysqli_query($conn, $query);

        if($sql)
        {
                echo "<script>alert('Data Telah Berhasil Disimpan!')</script>"; 
                header("Location: Home.php");
        }
}


if(isset($_POST['batal']))
{
        header("Location: Home.php");
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
                        <td class="nama"><input type="text" name="id_anggota" id="id_anggota"></td>
                </tr>
                <tr>
                        <td>Password</td>
                        <td class="nama"><input type="text" name="password" id="password"></td>
                </tr>
                <tr>
                        <td>No.KTP/NIM/NIP</td>
                        <td class="nama"><input type="text" name="ktp" id="ktp"></td>
                </tr>
                <tr>
                        <td>Nama Anggota</td>
                        <td class="nama"><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                        <td>Jenis Anggota</td>
                        <td class="nama">
                                <select name="jenis" id="jenis">
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
                        <select name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">Silahkan Pilih</option>
                                <option value="l">L</option>
                                <option value="p">P</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td class="nama"><input type="text" name="ttl" id="ttl"></td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td class="nama"><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                        <td>Pendidikan Terakhir</td>
                        <td class="nama">
                        <select name="pendidikan" id="pendidikan">
                                <option value="">Silahkan Pilih</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                                <option value="s1">S1</option>
                                <option value="s2">S2</option>
                                <option value="s3">S3</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>NO.HP</td>
                        <td class="nama"><input type="text" name="nohp" id="nohp"></td>
                </tr>
                <tr>
                        <td>Pekerjaan / Prodi</td>
                        <td class="nama"><input type="text" name="pekerjaan" id="pekerjaan"></td>
                </tr>
                <tr>
                        <td>Email</td>
                        <td class="nama"><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                        <td>Foto</td>
                        <td class="nama"><input type="file" name="foto" id="foto"></td>
                </tr>
                <button type="submit" name="register" class="kirim">Kirim</button>
                <button class="batal" name="batal">Batal</button>
             </table>
             </form>
        </section>
</body>
</html>