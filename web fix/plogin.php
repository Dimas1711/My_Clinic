<?php
require "koneksi.php";
$user = $_GET["username"];
$pass = $_GET["pass"];
$query = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE ID_ADMIN ='$user'");
$count = mysqli_num_rows($query);
if($count==1){
    $data = mysqli_fetch_array($query);
    $kode = $data['ID_ADMIN'];
    $password = $data['PASSWORD'];
    if($password==$pass){
        session_start();
        $_SESSION ["ID_ADMIN"] = $kode;
        header('location:index.php');
    }
    else{
        header("location:login.php?pesan=gagal");
    }
}
else{
    header("location:login.php?pesan=gagal");
}
?>