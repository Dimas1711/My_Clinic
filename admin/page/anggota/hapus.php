<?php

$id = $_GET['ID_ANGGOTA'];

$koneksi ->query("DELETE from tb_anggota WHERE ID_ANGGOTA='$id'");

 ?>

 <script type="text/javascript">

 window.location.href="?page=anggota";

 </script>
