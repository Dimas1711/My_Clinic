<?php 

require 'functions_admin.php';

$id = $_GET['ID_PENGUMUMAN'];

if (hapus_pengumuman($id) > 0) 
{
    echo "<script> 
    alert('Data Berhasil Di Hapus');
    document.location.href = '?page=pengumuman';
    </script>";
    
}
else {
    echo "<script> 
    alert('Gagal Hapus Data');
    document.location.href = '?page=pengumuman';
    </script>";


}








?>