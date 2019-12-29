<?php
require 'functions.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if( isset($_POST["batal"]) )
{
  header("location: index.php");
}


if($_POST)
{
    $email = $_POST['email'];
    $id = $_POST['idanggota'];

        $selectquery = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE EMAIL = '$email' AND ID_ANGGOTA ='$id'");
        $count = mysqli_num_rows($selectquery);
        $row = mysqli_fetch_array($selectquery);

        $tes = $row['PASSWORD'];
        
        // echo $count;

        if($count > 0 )
        {
            // echo $row['PASSWORD'];
            
    $mail = new PHPMailer(true);

try {

    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'gumball4869@gmail.com';                     
    $mail->Password   = 'dimas2019';                               
    $mail->SMTPSecure =  'tls' ;         
    $mail->Port       =  587;                                    

   
    $mail->setFrom('gumball4869@gmail.com', 'Admin Klinik');
    $mail->addAddress($row["EMAIL"]);     



    $mail->isHTML(true);                                 
    $mail->Subject = 'Here is the subject';
    $mail->Body    =  'Silahkan Ganti Password Anda di http://localhost/My_Clinic/admin/user/resetpass.php' ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
    echo "<script>
    alert('Pesan Telah Dikirim di email yang dituju');
    document.location.href = 'index.php';
    </script>";
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "<script>
    alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
    </script>";
}
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
    <link rel="stylesheet" href="lupapass.css">

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
   
   <section style="background-color: rgba(238, 235, 235, 0.836); margin-top: 30px; margin-left: 350px; margin-right: 250px; padding: 50px; font-size: 15px;">
   <h2 style="font-size: 30px; margin-top: 10px; margin-left: 200px;">Form Lupa Password</h2>
    <form action="" method="POST">
    <table style=" margin-top: 50px; margin-left: 150px;">
        <tr>
            <td class="judul"><p>ID Anggota</p></td>
            <td><input type="text" name="idanggota" class="id"></td>
        </tr>
        <tr>
            <td class="judul"><p>Email</p></td>
            <td><input type="text" name="email" class="email"></td>
        </tr>
        <tr>
            <td></td>
            <td ><button  class="krm" type="submit">Kirim</button>
            <button class="btl" type="submit" name="batal">Batal</button></td>
        </tr>
        
    </table>
    </form>
   </section>

</body>
</html>