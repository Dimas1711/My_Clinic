<?php
$conn = mysqli_connect("localhost", "root", "", "coba_klinik_2");

if (isset ($_POST["register"]) )
{
        $username = $_POST["username"];
        $jenis = $_POST["jenis"];
        $password = $_POST["password"];
        $ktp = $_POST["ktp"];
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $ttl = $_POST["ttl"];
        $alamat = $_POST["alamat"];
        $pendidikan = $_POST["pendidikan"];
        $nohp = $_POST["nohp"];
        $pekerjaan = $_POST["pekerjaan"];
        
        
        $query="INSERT INTO tb_anggota VALUES
                ('$username','$jenis','$password','$ktp','$nama','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp','$pekerjaan')";
        mysqli_query($conn, $query);

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
                        <td>Jenis Pasien</td>
                        <td class="nama"><input type="text" name="jenis" id="jenis"></td>
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
                        <td>Nama</td>
                        <td class="nama"><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                        <td>Jenis Kelamin</td>
                        <td class="nama"><input type="text" name="jenis_kelamin" id="jenis_kelamin"></td>
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
                        <td class="nama"><input type="text" name="pendidikan"></td>
                </tr>
                <tr>
                        <td>NO.HP</td>
                        <td class="nama"><input type="text" name="nohp" id="nohp"></td>
                </tr>
                <tr>
                        <td>Pekerjaan / Prodi</td>
                        <td class="nama"><input type="text" name="pekerjaan" id="pekerjaan"></td>
                </tr>
                <button type="submit" name="register" class="kirim">Kirim</button>
                <button class="batal">Batal</button>
             </table>
             </form>
        </section>
</body>
</html>