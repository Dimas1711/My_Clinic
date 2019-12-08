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
    $_SESSION['user'] = $row ["NAMA_ANGGOTA"];
    $_SESSION['email'] = $row ["EMAIL"];
    $_SESSION['id'] = $row["ID_ANGGOTA"];
    header("location: Home_login.php");
    
  }
  else
  {
    header("location: login.php?gagal");
  }

}
if( isset($_POST["cancel"]) )
{
  header("location: Home_login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="anyar.css">
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
        <table>
          <tr>
            <td colspan="2"><img src="login.png" alt="" class="foto"></td>
          </tr>
          <tr>
            <th>ID ANGGOTA</th>
            <td><input type="text" name="ID_ANGGOTA" id="username" ></td>
          </tr>
          <tr>
            <th class="pass">PASSWORD</th>
            <td class="pass"><input type="password" name="PASSWORD" id="password"></td>
          </tr>
        </table>
        <button type="submit" name="login" class="login">Login</button>  
        <button type="submit" name="cancel" class="cancelbtn">Cancel</button>
        <br>
        <p>Belum Punya Akun ? <a class="link" href="registrasi.php">Daftar Sekarang</a></p>
        <br>
        <p class="p2"><a class="link" href="lupapass.php">Lupa Password</a> ? </p>
       </form>
       
   </section>

   <!-- footer -->
   <footer>

   </footer> 
</body>
</html>