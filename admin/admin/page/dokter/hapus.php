

<?php
require 'functions_admin.php';

$id = $_GET['ID_DOKTER'];

if( hapus_dokter($id) > 0 )
    {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '?page=dokter';
        </script>";
    }
else
    {
        echo "<script>
        alert('Gagal Menghapus Data');
        document.location.href = '?page=dokter';
        </script>";
        // echo mysqli_error($conn);

    }
?>
