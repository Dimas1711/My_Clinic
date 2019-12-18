<?php
require 'functions_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Rujukan</title>
    
  <script src="jQuery.js"></script>
</head>
<body>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
            Laporan Rujukan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id Berobat</th>
                                <th>Id Klinik</th>
                                <th>Id Anggota</th>
                                <th>Tensi</th>
                                <th>Tanggal Berobat</th>
                                <th>Anamnesa</th>
                                <th>Diagnosa</th>
                                <th>Alergi</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT ID_BEROBAT , NAMA_KLINIK , NAMA_ANGGOTA , TENSI , TANGGAL_BEROBAT , ANAMNESA , DIAGNOSA , ALERGI_OBAT , CATATAN FROM tb_berobat , tb_anggota , tb_klinik WHERE tb_berobat.ID_KLINIK = tb_klinik.ID_KLINIK AND tb_anggota.ID_ANGGOTA = tb_berobat.ID_ANGGOTA");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        
                        
                        <td><?php echo $data ['ID_BEROBAT']; ?></td>
                        <td><?php echo $data ['NAMA_KLINIK']; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['TENSI']; ?></td>
                        <td><?php echo $data ['TANGGAL_BEROBAT']; ?></td>
                        <td><?php echo $data ['ANAMNESA']; ?></td>
                        <td><?php echo $data ['DIAGNOSA']; ?></td>
                        <td><?php echo $data ['ALERGI_OBAT']; ?></td>
                        <td><?php echo $data ['CATATAN']; ?></td>

                        
                        
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