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

    // "Password anda adalah <b>$tes</b>"
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
</head>
<body>
    <form action="" method="POST">
        id anggota : <input type="text" name="idanggota">
        email : <input type="text" name="email">
        <input type="submit">
    </form>
</body>
</html>