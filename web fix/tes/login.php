<?php
require 'functions.php';
session_start();
if(isset($_POST["login"])){

  $id_anggota = $_POST["ID_ANGGOTA"];
  $password = $_POST["PASSWORD"];

  $result = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id_anggota' AND PASSWORD = '$password'");

  if( mysqli_num_rows($result) === 1 )
  {
    //cek password
    $row = mysqli_fetch_assoc($result);
    $_SESSION["login"] = true;
    header("location: Home.php");
  }
  else
  {
    header("location: login.php?gagal");
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- header -->
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

   <!-- section -->
   <section>
       <form action="" method="POST">
        <p><b>Username</b></p> <input type="text" name="ID_ANGGOTA" id="username">
        <p><b>Password</b></p> <input type="password" name="PASSWORD" id="password"><br>
        <button type="submit" name="login">LOGIN</button> 
        <a href="home.php"><button type="button" name="cancel">CANCEL</button></a>
        <br>
        <p>Belum Punya Akun ? <a href="#">Daftar Sekarang</a></p>
        <br>
        <a class="lupa" href="lupa-pass.html">Lupa Password?</a>
       </form>
       
   </section>

   <!-- footer -->
   <footer>

   </footer> 
</body>
</html>