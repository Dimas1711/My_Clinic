<?php 

require 'functions_admin.php';


// $id = $_GET['ID_BEROBAT'];

$id = $_GET['ID_DETAIL'];

$id_berobat = $_GET['ID_BEROBAT'];




if (hapus_resep($id) > 0) 
{
    echo "<script> 
    alert('Data Berhasil Di Hapus');
    document.location.href = 'home1.php?page=periksa&aksi=resepobat&ID_BEROBAT='$id_berobat'&ID_DETAIL='$id'';
    </script>";
    
}
else {
    echo "<script> 
    alert('Gagal Hapus Data');
    document.location.href = '?page=periksa&aksi=resepobat&ID_BEROBAT';
    </script>";


}
?>