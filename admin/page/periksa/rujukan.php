<?php
include "koneksi.php";
$id = $_GET['ID_BEROBAT'];
$sql = $koneksi->query("select * from tb_berobat where ID_BEROBAT = '$id'");
echo $sql;
$tampil = $sql->fetch_assoc();
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
                    <input class="form-control" type="text" id="ID_RUJUKAN" name="ID_RUJUKAN" value="<?php echo $tampil['ID_BEROBAT']; ?>readonly />
      </div>
      <div class="form-group">
                    <label>ID_BEROBAT</label>
                    <input class="form-control" type="text" id="ID_BEROBAT" name="ID_BEROBAT" readonly />
      </div>
      <div class="form-group">
                    <label>ID_ANGGOTA</label>
                    <input class="form-control" type="text" id="ID_ANGGOTA" name="ID_ANGGOTA" readonly />
      </div>
     
      <div class="form-group">
                    <label>NAMA_ANGGOTA</label>
                    <input class="form-control" type="text" id="NAMA_ANGGOTA" name="NAMA_ANGGOTA" readonly />
      </div>
      <div class="form-group">
                    <label>JENIS_KELAMIN</label>
                    <input class="form-control" type="text" id="JENIS_KELAMIN" name="JENIS_KELAMIN" readonly />
      </div>
      <div class="form-group">
                    <label>TENSI</label>
                    <input class="form-control" type="text" id="TENSI" name="TENSI" readonly />
      </div>
      <div class="form-group">
                    <label>DIAGNOSA</label>
                    <input class="form-control" type="text" id="DIAGNOSA" name="DIAGNOSA" readonly />
      </div>
      <div class="form-group">
                    <label>ID_DOKTER</label>
                    <input class="form-control" type="text" id="ID_DOKTER" name="ID_DOKTER" readonly />
      </div>
      <div class="form-group">
                    <label>NAMA_DOKTER</label>
                    <input class="form-control" type="text" id="NAMA_DOKTER" name="NAMA_DOKTER" readonly />
      </div>

      <div class="form-group">
                    <label>TUJUAN</label>
                    <input class="form-control" type="text" id="TUJUAN" name="TUJUAN"/>
      </div>

    <div class="form-group">
    <input type="submit" name ="submit" class="printbtn" value="Print"></input>
    </div>
</div>
</div>
</form> 
</body>