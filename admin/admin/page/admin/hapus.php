

<?php
require 'functions_admin.php';

$id = $_GET['ID_ADMIN'];

if( hapus_admin($id) > 0 )
    {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '?page=admin';
        </script>";
    }
else
    {
        echo "<script>
        alert('Gagal Menghapus Data');
        document.location.href = '?page=admin';
        </script>";
        // echo mysqli_error($conn);

    }
?>
