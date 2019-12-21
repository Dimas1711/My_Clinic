<?php 

require 'functions_admin.php';

$id = $_GET['ID_ANGGOTA'];

if (reject($id) > 0) 
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