<?php 

require 'functions_admin.php';

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// ini_set( ‘display_errors’, 1 ); 
// error_reporting( E_ALL ); 
// $from = “ryanhartadi999@gmail.com”; 
// $to = “ryanhartadi06@gmail.com”; 
// $subject = “Checking PHP mail”; 
// $message = “PHP mail berjalan dengan baik”; 
// $headers = “From:” . $from; mail($to,$subject,$message, $headers); 
// echo “Pesan email sudah terkirim.”;
$id = $_GET['ID_ANGGOTA'];

$selectquery = mysqli_query($conn, "SELECT * FROM tb_anggota WHERE ID_ANGGOTA ='$id'");        
$count = mysqli_num_rows($selectquery);
$row = mysqli_fetch_array($selectquery);

if (acc($id) > 0) 
{
    // echo "<script> 
    // alert('Data Berhasil Di Ubah');
    // document.location.href = '?page=verifikasi';
    // </script>";

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
        $mail->Body    = 'Akun anda telah disetujui oleh admin silahkan gunakan fitur yang ada di web kami' ;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        // echo 'Message has been sent';
        echo "<script>
        alert('Akun Telah di Accept dan Pesan Telah Dikirim di email yang dituju');
        document.location.href = '?page=verifikasi';
        </script>";
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo "<script>
        alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        </script>";
    }         
                }
    

else {
    echo "<script> 
    alert('Gagal Ubah Data');
    document.location.href = '?page=verifikasi';
    </script>";
}

?>