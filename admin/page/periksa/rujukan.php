<?php
require 'functions_admin.php';
$id = $_GET['ID_BEROBAT'];
$berobat = query("SELECT * FROM tb_berobat WHERE ID_BEROBAT = '$id'")[0];
$id_anggota = $berobat["ID_ANGGOTA"];
$qAnggota = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id_anggota'")[0];
$id_klinik = $berobat["ID_KLINIK"];
$qklinik = query("SELECT * FROM tb_klinik  WHERE ID_KLINIK ='$id_klinik'")[0];



if (isset ($_POST["submit"])) 
{


 // input_rujukan($_POST);
 if (input_rujukan($_POST) > 0) {
   echo "<script>
   alert('Data Berhasil Ditambahkan');
    
   document.location.href = 'home1.php?page=laporan';
  
      </script>";
     
 }
 else {
  echo "<script>alert('Gagal Menambahkan Data')</script>";
 }
}

  $carikode = mysqli_query($conn, "SELECT max(ID_RUJUKAN) FROM tb_rujukan") or die(mysqli_error($conn));
  $datakode = mysqli_fetch_array($carikode);
  if($datakode)
  {
          $nilaikode = substr($datakode[0], 2);
          $kode = (int) $nilaikode;
          $kode = $kode + 1;
          $hasilkode = "RJ" .str_pad($kode, 5, "0", STR_PAD_LEFT);
  }
  else
  {
          $hasilkode = "RJ0001";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RUJUKAN</title>
    
  <script src="jQuery.js"></script>
</head>
<body>
<div class=" col-sm-12 col-xs-12">                     
<div class="panel panel-default">
    <h1>RUJUKAN</h1>
    <hr>
      <form method ="POST">
    
      <div class="form-group">
                    <label>ID_RUJUKAN</label>
                    <input class="form-control" type="text" id="ID_RUJUKAN" name="ID_RUJUKAN"  value="<?php echo $hasilkode ?>" readonly />
      </div>
      <div class="form-group">
                    <label>ID_BEROBAT</label>
                    <input class="form-control" type="text" id="ID_BEROBAT" name="ID_BEROBAT" value="<?= $berobat["ID_BEROBAT"];?>" readonly />
      </div>
      <div class="form-group">
                    <label>ID_ANGGOTA</label>
                    <input class="form-control" type="text" id="ID_ANGGOTA" name="ID_ANGGOTA" value="<?= $berobat["ID_ANGGOTA"];?>"readonly />
      </div>
     
      <div class="form-group">
                    <label>NAMA_ANGGOTA</label>
                    <input class="form-control" type="text" id="NAMA_ANGGOTA" name="NAMA_ANGGOTA" value="<?= $qAnggota ["NAMA_ANGGOTA"]?>" readonly />
      </div>
      <div class="form-group">
                    <label>JENIS_KELAMIN</label>
                    <input class="form-control" type="text" id="JENIS_KELAMIN" name="JENIS_KELAMIN" value="<?= $qAnggota ["JENIS_KELAMIN"]?>"readonly />
      </div>
      <div class="form-group">
                    <label>TENSI</label>
                    <input class="form-control" type="text" id="TENSI" name="TENSI" value="<?= $berobat ["TENSI"]?>" readonly />
      </div>
      <div class="form-group">
                    <label>DIAGNOSA</label>
                    <input class="form-control" type="text" id="DIAGNOSA" name="DIAGNOSA"  value="<?= $berobat ["DIAGNOSA"]?>"readonly />
      </div>
      <div class="form-group">
                    <label>ID_KLINIK</label>
                    <input class="form-control" type="text" id="ID_KLINIK" name="ID_KLINIK"  value="<?= $qklinik ["ID_KLINIK"]?>" readonly />
      </div>
      <div class="form-group">
                    <label>NAMA_KLINIK</label>
                    <input class="form-control" type="text" id="NAMA_KLINIK" name="NAMA_KLINIK"  value="<?= $qklinik ["NAMA_KLINIK"]?>" readonly />
      </div>
      <div class="form-group">
                    <label>TUJUAN</label>
                    <input class="form-control" type="text" id="TUJUAN" name="TUJUAN"/>
      </div>

    <div class="form-group">
    <input type="submit" name ="submit" class="btn btn-info" value="Print"></input>
    </div>
</div>
</div>
</form> 
</body>