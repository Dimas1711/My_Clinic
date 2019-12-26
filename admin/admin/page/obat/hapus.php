
<?php
require 'functions_admin.php';

$id = $_GET['ID_OBAT'];

if( hapus_obat($id) > 0 )
    {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '?page=obat';
        </script>";
    }
else
    {
        echo "<script>
        alert('Gagal Menghapus Data');
        document.location.href = '?page=obat';
        </script>";
        // echo mysqli_error($conn);

    }
?>
