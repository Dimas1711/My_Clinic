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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<!-- <noscript> -->
      <link rel="stylesheet" href="css/anyar.css"/>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/setel.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		<!-- </noscript> -->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>

<body  style="background: #cde1ec;">
    <div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
            <img src="LOGO-POLITEKNIK-NEGERI-JEMBER.png" style="float: left; margin: 0px 9px 3px 0px;" width="80" height="80" class="d-inline-block align-top" alt="">
            <h3><a href="#" style="padding: 35px 0px 0px 90px;">Klinik Pratama Politeknik Negeri Jember</a></h3>
            <!-- <div id="text">
                 Klinik Pratama
                 <br>
                 Politeknik Negeri Jember
            </div> -->
            </div>
            

				</div>
			</div>	
</div>

		
	<!-- Banner -->
  <div id="banner">
			<div class="container">
			</div>
		</div>
  <!-- /Banner -->

   <!-- section -->
   
   <section style="margin:30px 300px; padding:50px; font-size:15px;">
       <form action="" method="POST">
        <table style="margin-left:100px;">
          <tr>
            <td colspan="2"><img src="login.png" alt="" style="margin-left:180px; width:150px;" class="foto"></td>
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
        
        <button style="margin-left:200px;" type="submit" name="login" class="login" style="margin-left:200px; margin-right:20px;">Login</button>  
        <button type="submit" name="cancel" class="cancelbtn">Cancel</button>
       
        <br><br>
        <p style="margin-top:30px; text-align:center; font-size:23px;">Belum Punya Akun ? <a class="link" href="registrasi.php">Daftar Sekarang</a></p>
        
        <p style="font-size:23px;"class="p2"><a class="link" href="lupapass.php">Lupa Password</a> ? </p>
       </form>
       
   </section>

   <!-- footer -->
   <footer>

   </footer> 
   <script src="js/jQuery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>