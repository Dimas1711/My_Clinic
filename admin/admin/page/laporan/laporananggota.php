<?php 
        require 'functions_admin.php';
        

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Anggota</title>
    
  <script src="jQuery.js"></script>
</head>
<body>
  <form  method="post" action="">
<h3 style="margin-left:2.5% ; font-size:20px"> 
  <tr>                
        <td>Laporan Anggota</td>
        <!--<td><input type="text" name="ID_BEROBAT"  value="<?php// echo $hasilkode ?>" readonly></td>
  </tr> 

  <tr>
        <td name="TGL">Tanggal</td>
        <label for="TGL" name="TGL"><?php// echo date("Y/m/d") ;?>     </label>
        <input type="hidden" name="TGL" value="<?php// echo date("Y/m/d") ;?>">
  </tr>--> 

</h3>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Anggota
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA ANGGOTA</th>
                                <th>NAMA DOKTER</th>
                                <th>NAMA KLINIK</th>
                                <th>TANGGAL BEROBAT</th>
                                <th>TENSI</th>
                                <th>ANAMNESA</th>
                                <th>DIAGNOSA</th>
                                <th>ALERGI OBAT</th>
                                <th>CATATAN</th>
                                <th>ID RUJUKAN</th>
                                <th>DOKTER TUJUAN</th>
                                <th>TUJUAN</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                      $no = 1;
                          $sql = $koneksi -> query ("SELECT tb_berobat.NAMA_ANGGOTA, tb_dokter.NAMA_DOKTER, tb_klinik.NAMA_KLINIK, tb_berobat.TANGGAL_BEROBAT, tb_berobat.TENSI, tb_berobat.ANAMNESA, tb_berobat.DIAGNOSA, tb_berobat.ALERGI_OBAT, tb_berobat.CATATAN,tb_rujukan.ID_RUJUKAN, tb_rujukan.DOKTER_TUJUAN, tb_rujukan.TUJUAN FROM tb_berobat, tb_rujukan, tb_dokter, tb_klinik WHERE tb_dokter.ID_DOKTER = tb_berobat.ID_DOKTER AND tb_klinik.ID_KLINIK = tb_dokter.ID_KLINIK");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['NAMA_DOKTER']; ?></td>
                        <td><?php echo $data ['NAMA_KLINIK']; ?></td>
                        <td><?php echo $data ['TANGGAL_BEROBAT']; ?></td>
                        <td><?php echo $data ['TENSI']; ?></td>
                        <td><?php echo $data ['ANAMNESA']; ?></td>
                        <td><?php echo $data ['DIAGNOSA']; ?></td>
                        <td><?php echo $data ['ALERGI_OBAT']; ?></td>
                        <td><?php echo $data ['CATATAN']; ?></td>
                        <td><?php echo $data ['ID_RUJUKAN']; ?></td>
                        <td><?php echo $data ['DOKTER_TUJUAN']; ?></td>
                        <td><?php echo $data ['TUJUAN']; ?></td>
                        
                        
                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>