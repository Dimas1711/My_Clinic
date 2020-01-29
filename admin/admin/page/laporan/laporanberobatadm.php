<?php
require 'functions_admin.php';
if(!isset($_SESSION["status"])){
  echo "<script>alert('login sek boss')</script>";
  
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Berobat</title>  
  <script src="jQuery.js"></script>

</head>
<body>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
            Laporan Berobat
            </div>

            <div id="myOverlay" class="overlay">
              <div class="overlay-content">
           <?php
             $sql = $koneksi -> query ("SELECT tb_anggota.NAMA_ANGGOTA FROM tb_anggota, tb_rujukan, tb_berobat WHERE tb_anggota.ID_ANGGOTA = tb_berobat.ID_ANGGOTA AND tb_berobat.ID_BEROBAT = tb_rujukan.ID_BEROBAT")
            ?>
           
              </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                            <th>Tanggal Berobat</th>
                              
                                <th>Nama Anggota</th>
                                <th>Nama Perawat</th>
                                <th>Nama Klinik</th>
                                <th>Sistole</th>
                                <th>Distole</th>
                                <th>Anamnesa</th>
                                <th>Suhu</th>
                                <th>Pernapasan</th>
                                <th>Nadi</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT tb_berobat.ID_BEROBAT,tb_berobat.TANGGAL_BEROBAT, tb_anggota.NAMA_ANGGOTA, tb_karyawan.NAMA_KARYAWAN, tb_klinik.NAMA_KLINIK, tb_berobat.SISTOLE, tb_berobat.DIASTOLE, tb_berobat.ANAMNESA, tb_berobat.SUHU, tb_berobat.PERNAPASAN, tb_berobat.NADI, tb_berobat.CATATAN
                          FROM tb_berobat, tb_anggota, tb_klinik, tb_karyawan
                          WHERE tb_anggota.ID_ANGGOTA = tb_berobat.ID_ANGGOTA   
                          AND tb_klinik.ID_KLINIK = tb_berobat.ID_KLINIK
                          AND tb_karyawan.ID_KARYAWAN = tb_berobat.ID_KARYAWAN");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        
                        <td><?php echo $data ['TANGGAL_BEROBAT']; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['NAMA_KARYAWAN']; ?></td>
                        <td><?php echo $data ['NAMA_KLINIK']; ?></td>
                        <td><?php echo $data ['SISTOLE']; ?></td>
                        <td><?php echo $data ['DIASTOLE']; ?></td>
                        <td><?php echo $data ['ANAMNESA']; ?></td>
                        <td><?php echo $data ['SUHU']; ?></td>
                        <td><?php echo $data ['PERNAPASAN']; ?></td>
                        <td><?php echo $data ['NADI']; ?></td>
                        

                      </tr>

                      <?php  }?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

</form> 
</body>