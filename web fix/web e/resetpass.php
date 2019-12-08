<?php
require 'functions.php';



//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
   //cek data berhasil ditambah?
   if( resetpass($_POST) > 0 )
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
        header("Location: Home_login.php");
        exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ubahpass.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>SI WEB Poliklinik Politeknik Negeri Jember</title>
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
    <form action="" method="POST">
    <table>     
                <tr>
                        <td>Email</td>
                        <td class="nama"><input type="text" name="EMAIL" ></td>
                </tr>
                <tr>
                        <td>Password Baru</td>
                        <td class="nama"><input type="password" name="PASSWORD_BARU" ></td>
                </tr>
                <tr>
                        <td>Konfirmasi Password</td>
                        <td class="nama"><input type="password" name="KONFIRMASI_PASSWORD" ></td>
                </tr>
                <button type="submit" name="submit" class="kirim">Kirim</button>
                <button class="batal" name="batal">Batal</button>
    </table>
    </form>
    </section>
</body>
</html>