<?php

$id = $_GET['ID_DOKTER'];

$koneksi->query("delete from tb_dokter where ID_DOKTER = '$id'");


 ?>

 <script type="text/javascript">

    window.location.href="?page=dokter";
 </script>
