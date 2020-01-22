<?php
include_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['pass'];

$query =
mysqli_query($koneksi,"select * from tb_karyawan where NAMA_KARYAWAN='$username' and PASSWORD='$password' and STATUS = 'Karyawan'");
$cek = mysqli_num_rows($query);

$query1 =
mysqli_query($koneksi,"select * from tb_dokter where NAMA_DOKTER='$username' and PASSWORD='$password'");
$cek1 = mysqli_num_rows($query1);

$query2 =
mysqli_query($koneksi,"select * from tb_karyawan where NAMA_KARYAWAN='$username' and PASSWORD='$password' and STATUS = 'Admin'");
$cek2 = mysqli_num_rows($query2);


if($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    header("location:home2.php?page=dashbord");
}

else if($cek1 > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    header("location:home1.php?page=dashborddokter");
}

else if($cek2 > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    header("location:home.php?page=dashbordadm");
}

else if($username==null || $password==null){
    echo "<script>alert('username dan password tidak boleh kosong');window.history.back();</script>";
}

else{
    echo"<script>alert('username atau password anda salah');window.history.back();</script>";
} 


?>