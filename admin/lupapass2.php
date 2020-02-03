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
            //echo $row['PASSWORD'];
            
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
    $mail->Body    =  'Silahkan Ganti Password Anda di http://localhost/My_Clinic/admin/resetpass2.php';
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
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Lupa Password</title>
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
                                <h1>Lupa Password?</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >ID Anggota</label>
                                    <input id="username" name="idanggota" required="required" type="text"/>
                                </p>
                                <p> 
                                    <label for="email" class="youpasswd" data-icon="e">Email yang terdaftar</label>
                                    <input id="email" name="email" required="required" type="email" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Kirim" name="login"> 
                                    <input class="button_cancel" type="submit" value="batal" name="batal" onclick="window.location.href='index.php'"> 
                                </p>
                                <p class="change_link">
									Masukkan ID anggota dan email yang terdaftar
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>