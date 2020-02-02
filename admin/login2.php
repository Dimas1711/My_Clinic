<?php
require 'functions.php';
session_start();
if(isset($_POST["login"])){

  $id_anggota = $_POST["ID_ANGGOTA"];
  $password = $_POST["PASSWORD"];


  $result = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id_anggota' AND PASSWORD = '$password' AND STATUS = 'Accept'");


  if( mysqli_num_rows($result) === 1 )
  {
    //cek password
    $row = mysqli_fetch_assoc($result);
    $_SESSION["login"] = true;
    $_SESSION['user'] = $row ["NAMA_ANGGOTA"];
    $_SESSION['email'] = $row ["EMAIL"];
    $_SESSION['id'] = $row["ID_ANGGOTA"];
    echo "<script>
                alert('Berhasil Login');
                document.location.href = 'index.php';
          </script>";
    //header("location: index.php");
    
  }
  else
  {
    header("location: login2.php?gagal");
  }

}
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" autocomplete="on" method="POST"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Nomer RM</label>
                                    <input id="username" name="ID_ANGGOTA" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                    <input id="password" name="PASSWORD" required="required" type="password" /> 
                                </p>
                                <p><a href="lupapass2.php">Lupa Password?</a></p>
                                <p style="text-align:right"><a href="admin/index.php">Login Sebagai Admin/Dokter</a></p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login"> 
                                    <input class="button_cancel" type="submit" value="batal" name="batal" onclick="window.location.href='index.php'"> 
                                </p>
                                <p class="change_link">
									Belum Punya Akun ?
									<a href="registrasi2.php">Daftar Sekarang</a>
								</p>
                            </form>
                        </div>
                        <?php if(isset($_GET["gagal"])){?>
        echo "<script>
                alert('ID anggota dan password tidak sesuai');
                document.location.href = 'index.php';
                </script>";

        <?php }?>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>