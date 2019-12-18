<?php
include "koneksi.php";
$id = $_GET['ID_ANGGOTA'];

$koneksi->query ("delete from tb_anggota where ID_ANGGOTA = '$id'");



?>
 <script type="text/javascript">
    
    window.location.href="?page=anggota";
</script>
