<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Resep Obat</title>
    
  <script src="jQuery.js"></script>
</head>
<body>
<div class=" col-sm-12 col-xs-12">                     
<div class="panel panel-default">
    <h1>Resep Obat</h1>
    <hr>
    <form method ="POST">
    <div class="form-group">
    <label for="ID_BEROBAT"><b>ID BEROBAT</b></label> <input type="text" name="ID_BEROBAT" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_ANGGOTA"><b>ID ANGGOTA</b></label> <input type="text" name="ID_ANGGOTA" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="NAMA_ANGGOTA"><b>NAMA ANGGOTA</b></label><input type="text" name="NAMA_ANGGOTA" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_OBAT"><b>ID OBAT</b></label><input type="text" name="ID_OBAT" required>
    </br>
    </div>
    <div class="form-group">
    <label for="NAMA_OBAT"><b>NAMA OBAT</b></label> <input type="text" name="NAMA_OBAT" readonly>    
    </br>
    </div>
    <div class="form-group">
    <label for="ID_DOKTER"><b>ID DOKTER</b></label> <input type="text"  name="ID_DOKTER" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="NAMA_DOKTER"><b>NAMA DOKTER</b></label> <input type="text" name="NAMA_DOKTER" readonly>
    </br>
    </div>
    <div class="form-group">
    <input type="submit" name ="submit" class="printbtn" value="Print"></input>
    </div>
</div>
</div>
</form> 
</body>