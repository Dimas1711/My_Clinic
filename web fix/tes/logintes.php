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
    header("location: anggota.php");
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
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="ID_ANGGOTA"><br>
        <input type="password" name="PASSWORD" ><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>