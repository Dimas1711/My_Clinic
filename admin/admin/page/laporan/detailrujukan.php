<?php
require_once 'functions_admin.php';
$id = $_GET['ID_BEROBAT'];
$berobat = query("SELECT * FROM tb_berobat WHERE ID_BEROBAT = '$id'")[0];

$id_anggota = $berobat["ID_ANGGOTA"];
$qAnggota = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id_anggota'")[0];

$id_klinik = $berobat["ID_KLINIK"];
$qklinik = query("SELECT * FROM tb_klinik  WHERE ID_KLINIK ='$id_klinik'")[0];
$rujukan = query("SELECT * FROM tb_rujukan WHERE ID_BEROBAT = '$id'")[0];
$tanggal = date("Y/m/d");
$carikode = mysqli_query($conn, "SELECT max(ID_RUJUKAN) FROM tb_rujukan") or die(mysqli_error($conn));

$datakode = mysqli_fetch_array($carikode);
if($datakode){
        $nilaikode = substr($datakode[0], 2);
        $kode = (int) $nilaikode;
        $kode = $kode + 1;
        $hasilkode = "RJ" .str_pad($kode, 4, "0", STR_PAD_LEFT);
}
else{
        $hasilkode = "RJ0001";
}

if (isset ($_POST["submit"])) 
{

  $dokter = $_POST["DOKTER_TUJUAN"];
  $tujuan = $_POST["TUJUAN"];

  if (empty($dokter && $tujuan)) {
    echo "<script>
    alert('Field Tidak Boleh Kosong');    
    
       </script>";
       
  }

 // input_rujukan($_POST);
 else if(input_rujukan($_POST) > 0) {
   echo "<script>
   alert('Data Berhasil Ditambahkan');    
   document.location.href = 'page/periksa/cetakrujukan.php?id=$hasilkode';
   
      </script>";
      
 }
 else {
  echo "<script>alert('Gagal Menambahkan Data')</script>";
 }
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
      <?php
                    include_once "koneksi.php";
                    
                    $result1 = mysqli_query($koneksi, "SELECT tb_klinik.ID_KLINIK, NAMA_KLINIK , ID_DOKTER , NAMA_DOKTER FROM tb_klinik , tb_dokter WHERE tb_dokter.ID_KLINIK = tb_klinik.ID_KLINIK AND NAMA_DOKTER='".$_SESSION['username']."'");
                    $row = mysqli_fetch_array($result1);
         
                ?>
                 <div class="form-group">
    <label for="TANGGAL"><b>TANGGAL</b></label> <input type="datetime" name="TANGGAL" class="form-control"value="<?= $tanggal;?>" readonly>
  
    </div>
      <div class="form-group">
                    <label>ID_RUJUKAN</label>
                    <input class="form-control" type="text" id="ID_RUJUKAN" name="ID_RUJUKAN"  value="<?php echo $hasilkode ?>" readonly />
      </div>
      <div class="form-group">
                    <label>ID_BEROBAT</label>
                    <input class="form-control" type="text" id="ID_BEROBAT" name="ID_BEROBAT" value="<?= $berobat["ID_BEROBAT"];?>" readonly />
      </div>
      <div class="form-
      ">
                    <label>Nama Dokter</label><br>
                    <input class="form-control" type="text" id="NAMA_DOKTER" name="NAMA_DOKTER" value="<?= $row["NAMA_DOKTER"]?>" readonly>
                    <input type="hidden" name="ID_DOKTER" value="<?= $row["ID_DOKTER"]?>" >
                </div>
      <div class="form-group">
                    <!-- <label>ID_ANGGOTA</label> -->
                    <input class="form-control" type="hidden" id="ID_ANGGOTA" name="ID_ANGGOTA" value="<?= $berobat["ID_ANGGOTA"];?>"readonly />
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
                    <label>Sistole</label>
                    <input class="form-control" type="text" id="TENSI" name="TENSI" value="<?= $berobat ["SISTOLE"]?>" readonly />
      </div>
      <div class="form-group">
                    <label>Diastole</label>
                    <input class="form-control" type="text" id="TENSI" name="TENSI" value="<?= $berobat ["DIASTOLE"]?>" readonly />
      </div>
      <div class="form-group">
                    <label>DIAGNOSA</label>
                    <input class="form-control" type="text" id="DIAGNOSA" name="DIAGNOSA"  value="<?= $berobat ["DIAGNOSA"]?>"readonly />
      </div>
      <div class="form-group">
                    <!-- <label>ID_KLINIK</label> -->
                    <input class="form-control" type="hidden" id="ID_KLINIK" name="ID_KLINIK"  value="<?= $qklinik ["ID_KLINIK"]?>" readonly />
      </div>
      <div class="form-group">
                    <label>Nama Klinik</label>
                    <input class="form-control" type="text" id="NAMA_KLINIK" name="NAMA_KLINIK"  value="<?= $qklinik ["NAMA_KLINIK"]?>" readonly />
      </div>     
      <div class="form-group">
                    <label>Dokter Tujuan</label>
                    <input class="form-control" type="text" id="DOKTER_TUJUAN" name="DOKTER_TUJUAN"  value="<?= $rujukan ["DOKTER_TUJUAN"]?>"readonly />
      </div>
      <div class="form-group">
                    <label>Tujuan Rumah Sakit</label>
                    <input class="form-control" type="text" id="TUJUAN" name="TUJUAN" value="<?= $rujukan ["TUJUAN"]?>"readonly/>
      </div>

    <div class="form-group">
    <!-- <button type="submit"><a href="page/periksa/cetakrujukan.php?id=<?= $hasilkode;?>" target="_blank" name="submit" >Cetak</a></button> -->
    <button type="submit" name ="submit" class="btn btn-primary" value="Print" target="_blank">Cetak</button>
    </div>
</div>
</div>
</form> 
</body>
