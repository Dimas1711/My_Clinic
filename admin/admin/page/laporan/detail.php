<?php
require 'functions_admin.php';
$id = $_GET['ID_BEROBAT'];
$berobat = query("SELECT * FROM tb_berobat WHERE ID_BEROBAT = '$id'")[0];
$id_anggota = $berobat["ID_ANGGOTA"];
//memanggil nama dari anggota
$qAnggota = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id_anggota'")[0];
//memanggil nama kliniknya berdasarkan id klinik
$id_klinik = $berobat["ID_KLINIK"];
$kliniknya = query("SELECT * FROM tb_klinik WHERE ID_KLINIK ='$id_klinik'")[0];
$obat = query("SELECT tb_obat.STOK FROM tb_obat");
// $detailnya = query("SELECT tb_detail_berobat.ID_DETAIL FROM tb_detail_berobat WHERE ID_DETAIL");
$tanggal = date("Y/m/d");
$table = query("SHOW TABLE STATUS LIKE 'tb_detail_berobat'")[0];
$detailnya = $table["Auto_increment"];

if( isset ($_POST["tambahkan"]) )
{
        //cek data berhasil ditambah?
    $nama = $_POST["NAMA_OBAT"];
    $jumlah = $_POST["JUMLAH"];
    $dosis = $_POST["CATATAN"];
      if (empty($nama && $jumlah && $dosis)) {
        echo "<script>
        alert('Fields Tidak Boleh Kosong');
        </script>";
      }
       else if( input_detail($_POST) > 0 )
        {

            echo "<script>
                alert('Data Berhasil');
                document.location.href = 'home1.php?page=periksa&aksi=resepobat&ID_BEROBAT='$id'';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Mengubah Data')</script>";
        }
       
}

if( isset ($_POST["simpan"]))
{
  echo "<script>
                alert('Data Berhasil');
                document.location.href = 'home1.php?page=laporanberobat';
                </script>";
}

if (isset ($_POST["update"])){
  // update_data($_POST);
    $nama = $_POST["NAMA_OBAT"];
    $jumlah = $_POST["JUMLAH"];
    $dosis = $_POST["CATATAN"];
      if (empty($nama && $jumlah && $dosis)) {
        echo "<script>
        alert('Fields Tidak Boleh Kosong');
        </script>";
      }
      else if (update_data($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil');
        document.location.href = 'home1.php?page=detail&aksi=resepobat&ID_BEROBAT='$id'';
        </script>";
      }  
      else{
          echo "<script>alert('Gagal Mengubah Data')</script>";
      }
}

if (isset ($_POST["hapus"])){
  // update_data($_POST);
  hapus_resep($_POST);
  // if (hapus_resep($_POST) > 0) {
  //   echo "<script>
  //   alert('Data Berhasil');
  //   document.location.href = 'home1.php?page=detail&aksi=resepobat&ID_BEROBAT='$id'';
  //   </script>";
  // }  
  // else{
  //         echo "<script>alert('Gagal Mengubah Data')</script>";
  // }
}
if (isset($_POST["racikan"])){
  echo "<script>
  document.location.href = 'home1.php?page=detail&aksi=racikan&ID_BEROBAT=$id';
  </script>";
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
<div class=" col-sm-12 col-xs-12">
                     
<div class="col-md-12">
    <h1>Detail Berobat </h1>
    <hr>
    <form method ="POST">
    <div class="form-group">
    <label for="TANGGAL"><b>TANGGAL</b></label> <input style="margin-left:85px;" type="datetime" name="TANGGAL" value="<?= $tanggal;?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_BEROBAT"><b>ID BEROBAT</b></label> <input style="margin-left:70px;"type="text" name="ID_BEROBAT" value="<?= $berobat["ID_BEROBAT"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_ANGGOTA"><b>ID ANGGOTA</b></label> <input style="margin-left:65px;" type="text" name="ID_ANGGOTA" value="<?= $berobat["ID_ANGGOTA"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="NAMA_ANGGOTA"><b>NAMA ANGGOTA</b></label><input style="margin-left:43px;" type="text" name="NAMA_ANGGOTA" value="<?=$qAnggota["NAMA_ANGGOTA"];?>" readonly>
    </br>
    </div>
   
    <div class="form-group">
    <label for="ID_KLINIK"><b>KLINIK</b></label> <input style="margin-left:110px;" type="text"  name="NAMA_KLINIK" value="<?=$kliniknya["NAMA_KLINIK"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>SISTOLE</b></label> <input style="margin-left:100px;" type="text" name="ALERGI" value="<?= $berobat["SISTOLE"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>DIASTOLE</b></label> <input style="margin-left:87px;" type="text" name="ALERGI" value="<?= $berobat["DIASTOLE"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>ANAMNESA</b></label> <input style="margin-left:78px;" type="text" name="ALERGI" value="<?= $berobat["ANAMNESA"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>SUHU</b></label> <input style="margin-left:115px;" type="text" name="ALERGI" value="<?= $berobat["SUHU"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>NADI</b></label> <input style="margin-left:120px;" type="text" name="ALERGI" value="<?= $berobat["NADI"];?>" readonly>
    </br>
    </div> <div class="form-group">
    <label for="ALERGI"><b>PERNAPASAN</b></label> <input style="margin-left:65px;" type="text" name="ALERGI" value="<?= $berobat["PERNAPASAN"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>DIAGNOSA</b></label> <input style="margin-left:80px;" type="text" name="ALERGI" value="<?= $berobat["DIAGNOSA"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>ALERGI OBAT</b></label> <input style="margin-left:65px;" type="text" name="ALERGI" value="<?= $berobat["ALERGI_OBAT"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>CATATAN</b></label> <input style="margin-left:90px;" type="text" name="ALERGI" value="<?= $berobat["CATATAN"];?>" readonly>
    </br>
    </div>
   
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
       
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Obat
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="table-beli" >
                        <thead>
                            <tr>
                            <th>Id Detail</th>
                                <th>Id Obat</th>
                                <th>Nama Obat</th>
                                <th hidden>Stok</th>
                                <th>Jumlah</th>
                                <th>Catatan</th>
                                <th>Status</th>
                            </tr>
            
            
                        </thead>
                        <tbody>

                      <?php
                     
                       // $sql = $koneksi -> query ("SELECT tb_detail_berobat.ID_BEROBAT , tb_detail_berobat.ID_OBAT , tb_obat.NAMA_OBAT , tb_detail_berobat.JUMLAH FROM tb_detail_berobat,tb_obat WHERE tb_detail_berobat.ID_OBAT = tb_obat.ID_OBAT AND tb_detail_berobat.ID_BEROBAT ='$id'");
                     $sql = $koneksi-> query ("SELECT ID_DETAIL , tb_detail_berobat.ID_OBAT , NAMA_OBAT , STOK , JUMLAH  , DOSIS ,STATUS FROM tb_detail_berobat , tb_obat WHERE tb_detail_berobat.ID_OBAT = tb_obat.ID_OBAT AND ID_BEROBAT ='$id'");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr><td><?php echo $data ['ID_DETAIL']; ?></td>
                            <td><?php echo $data ['ID_OBAT']; ?></td>
                            <td><?php echo $data ['NAMA_OBAT']; ?></td>
                            <td hidden><?php echo $data ['STOK']; ?></td>
                            <td><?php echo $data ['JUMLAH']; ?></td>
                            <td><?php echo $data ['DOSIS']; ?></td>
                            <td><?php echo $data ['STATUS']; ?></td>
                        
                        
                        
                        
                      </tr>

                      <?php } ?>
                    </tbody>

                    <tbody>
                    
                   
                    
                    </tbody>
                    </table>
                  
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class=" col-sm-12 col-xs-12">   
                  </form>    
               
