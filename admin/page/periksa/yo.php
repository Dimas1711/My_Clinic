<?php
$koneksi = new mysqli("localhost","root","","pdm_klinik1");
$nama = $_GET['nama'];//sesuai yg ada di
$sql = mysqli_query($koneksi , "select * from tb_anggota where NAMA_ANGGOTA = '$nama'");
$anggota = mysqli_fetch_array($sql);



$data = array (
  'NAMA_ANGGOTA' => $anggota['NAMA_ANGGOTA'],
  'ID_ANGGOTA' => $anggota['ID_ANGGOTA'],
  'NO_KTP_NIM_NIP' => $anggota['NO_KTP_NIM_NIP'],
  'JENIS_ANGGOTA' => $anggota['JENIS_ANGGOTA']
);
echo json_encode($data);
?>
 