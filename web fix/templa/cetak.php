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
    <title>Document</title>
</head>
<body>

<h2>Kartu Berobat</h2>

<table>
    <tr>
        <td>ID Anggota</td>
        <td></td>
    </tr>

</table>
    
</body>
</html>