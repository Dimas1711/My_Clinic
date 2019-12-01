<?php
include "koneksi.php";
$id = $_GET['ID_OBAT'];

$koneksi->query ("delete from tb_obat where ID_OBAT = '$id'");



?>
 <script type="text/javascript">
    
    window.location.href="?page=obat";
</script>
