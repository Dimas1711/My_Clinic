<?php 

require 'functions_admin.php';

$id = $_GET['ID_BEROBAT'];

if (hapus_resep($id) > 0) 
{
    echo "<script> 
    alert('Data Berhasil Di Hapus');
    document.location.href = '?page=periksa&aksi=resepobat';
    </script>";
    
}
else {
    echo "<script> 
    alert('Gagal Hapus Data');
    document.location.href = '?page=periksa&aksi=resepobat&ID_BEROBAT';
    </script>";


}
?>