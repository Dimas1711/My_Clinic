<?php
require 'functions.php';

$id = $_GET['id'];

if( hapus($id) > 0 )
    {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = 'anggota.php';
        </script>";
    }
else
    {
        // echo "<script>
        // alert('Gagal Menghapus Data');
        // document.location.href = 'anggota.php';
        // </script>";
        echo mysqli_error($conn);

    }

?>