<?php
require 'functions_admin.php';
$id = $_GET['ID_BEROBAT'];
$berobat = query("SELECT * FROM tb_berobat WHERE ID_BEROBAT = '$id'")[0];
$yo = $berobat["ID_ANGGOTA"];
$tes = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$yo'")[0];

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubahdokter($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'home.php?page=periksa';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Mengubah Data')</script>";
        }
       
}
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
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Obat
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                              
                                <th>Nama Obat</th>
                                <th>Keterangan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT *FROM tb_obat");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        
                        <td><?php echo $data ['NAMA_OBAT']; ?></td>
                        <td><?php echo $data ['KETERANGAN']; ?></td>
                        <td><?php echo $data ['HARGA']; ?></td>
                        <td><?php echo $data ['STOK']; ?></td>
                        
                        
                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
<div class=" col-sm-12 col-xs-12">                     
<div class="panel panel-default">
    <h1>Resep Obat</h1>
    <hr>
    <form method ="POST">
    <div class="form-group">
    <label for="ID_BEROBAT"><b>ID BEROBAT</b></label> <input type="text" name="ID_BEROBAT" value="<?= $berobat["ID_BEROBAT"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_ANGGOTA"><b>ID ANGGOTA</b></label> <input type="text" name="ID_ANGGOTA" value="<?= $berobat["ID_ANGGOTA"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="NAMA_ANGGOTA"><b>NAMA ANGGOTA</b></label><input type="text" name="NAMA_ANGGOTA" value="<?=$tes["NAMA_ANGGOTA"];?>" readonly>
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