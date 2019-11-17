<?php

$id = $_GET['ID_ADMIN'];

$koneksi->query("delete from tb_admin where ID_ADMIN = '$id'");


 ?>

 <script type="text/javascript">
    
     window.location.href="?page=admin";
 </script>
