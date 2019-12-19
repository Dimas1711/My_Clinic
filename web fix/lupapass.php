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
  header("location: Home_login.php");
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
    $mail->Body    =  'Silahkan Ganti Password Anda di http://localhost/My_Clinic/web%20fix/web%20e/resetpass.php' ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
    echo "<script>
    alert('Pesan Telah Dikirim di email yang dituju');
    document.location.href = 'Home_login.php';
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
</head>
<body>
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
   
   <section>
   <h2>Form Lupa Password</h2>
    <form action="" method="POST">
    <table>
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
            <td><button class="krm" type="submit">Kirim</button>
            <button class="btl" type="submit" name="batal">Batal</button></td>
        </tr>
        
    </table>
    </form>
   </section>

</body>
</html>