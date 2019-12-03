<?php
include_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['pass'];

$query =
mysqli_query($koneksi,"select * from tb_admin where NAMA_ADMIN='$username' and PASSWORD='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    header("location:index.php");
}

else if($username==null || $password==null){
    echo "<script>alert('username dan password tidak boleh kosong');window.history.back();</script>";
}

else{
    echo"<script>alert('username atau password anda salah');window.history.back();</script>";
} 

/*require "koneksi.php";
$user = $_GET["username"];
$pass = $_GET["pass"];
$query = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE ID_ADMIN ='$user' AND PASSWORD='$pass'");
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
}*/
?>