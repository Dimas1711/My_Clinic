<?php 

require 'functions_admin.php';
// ini_set( ‘display_errors’, 1 ); 
// error_reporting( E_ALL ); 
// $from = “ryanhartadi999@gmail.com”; 
// $to = “ryanhartadi06@gmail.com”; 
// $subject = “Checking PHP mail”; 
// $message = “PHP mail berjalan dengan baik”; 
// $headers = “From:” . $from; mail($to,$subject,$message, $headers); 
// echo “Pesan email sudah terkirim.”;
$id = $_GET['ID_ANGGOTA'];

if (acc($id) > 0) 
{
    echo "<script> 
    alert('Data Berhasil Di Ubah');
    document.location.href = '?page=verifikasi';
    </script>";
    
}
else {
    echo "<script> 
    alert('Gagal Ubah Data');
    document.location.href = '?page=verifikasi';
    </script>";


}

?>