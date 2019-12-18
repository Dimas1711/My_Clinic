<!-- 
include "koneksi.php";
$id = $_GET['ID_ANGGOTA'];

$koneksi->query ("delete from tb_anggota where ID_ANGGOTA = '$id'");



 <script type="text/javascript">
    
    window.location.href="?page=anggota";
</script> -->

<?php
require 'functions_admin.php';

$id = $_GET['ID_ANGGOTA'];

if( hapus_anggota($id) > 0 )
    {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '?page=anggota';
        </script>";
    }
else
    {
        echo "<script>
        alert('Gagal Menghapus Data');
        document.location.href = '?page=anggota';
        </script>";
        // echo mysqli_error($conn);

    }
?>
