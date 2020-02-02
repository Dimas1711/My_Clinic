<?php 
require 'functions_admin.php';

$loadType = $_POST['loadType'];
$loadId = $_POST['loadId'];

if ($loadType=="klinik") {
    $sql = "select ID_KLINIK , NAMA_KLINIK from tb_klinik WHERE ID_KLINIK = '".$loadId."' order by NAMA_KLINIK asc";
} else {
    $sql = "select ID_DOKTER , NAMA_DOKTER from tb_dokter WHERE ID_DOKTER ='".$loadId."' order by NAMA_DOKTER asc";
}
$res = mysqli_query($conn , $sql);
$check = mysqli_num_rows($res);
if($check > 0){
    $HTML="";
    while($row=mysqli_fetch_array($res)){
        $HTML.="<option value='".$row['ID_KLINIK']."'>".$row['1']."</option>";
    }
    echo $HTML;
}

?>