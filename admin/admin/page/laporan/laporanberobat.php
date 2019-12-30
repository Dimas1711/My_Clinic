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
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID Berobat</th>
                                <th>Nama Anggota</th>
                                <th>Nama Dokter</th>
                                <th>Nama Klinik</th>
                                <th>Anamnesa</th>
                                <th>Diagnosa</th>
                                <th>Alergi Obat</th>
                                <th>Nama Obat</th>
                                <th>Tanggal Berobat</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT tb_berobat.ID_BEROBAT, tb_anggota.NAMA_ANGGOTA, tb_dokter.NAMA_DOKTER, tb_klinik.NAMA_KLINIK, tb_berobat.ANAMNESA, tb_berobat.DIAGNOSA, tb_berobat.ALERGI_OBAT, tb_obat.NAMA_OBAT ,tb_berobat.TANGGAL_BEROBAT FROM tb_berobat, tb_anggota, tb_dokter, tb_detail_berobat, tb_obat, tb_klinik WHERE tb_anggota.ID_ANGGOTA = tb_berobat.ID_ANGGOTA AND tb_dokter.ID_DOKTER = tb_berobat.ID_DOKTER AND tb_berobat.ID_BEROBAT = tb_detail_berobat.ID_BEROBAT AND tb_obat.ID_OBAT = tb_detail_berobat.ID_OBAT AND tb_klinik.ID_KLINIK = tb_berobat.ID_KLINIK");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        
                        <td><?php echo $data ['ID_BEROBAT']; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['NAMA_DOKTER']; ?></td>
                        <td><?php echo $data ['NAMA_KLINIK']; ?></td>
                        <td><?php echo $data ['ANAMNESA']; ?></td>
                        <td><?php echo $data ['DIAGNOSA']; ?></td>
                        <td><?php echo $data ['ALERGI_OBAT']; ?></td>
                        <td><?php echo $data ['NAMA_OBAT']; ?></td>
                        <td><?php echo $data ['TANGGAL_BEROBAT']; ?></td>
                        

                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

</form> 
</body>