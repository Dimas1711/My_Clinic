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
                                <th>ID ANGGOTA</th>
                                <th>NAMA ANGGOTA</th>
                                <th>TANGGAL BEROBAT</th>
                                <th>ANAMNESA</th>
                                <th>DIAGNOSA</th>
                                <th>OBAT</th>
                                <th>RUJUKAN</th>
                                <th>TUJUAN</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                      $no = 1;
                          $sql = $koneksi -> query ("SELECT *FROM tb_anggota WHERE STATUS = 'Accept'");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['ID_ANGGOTA']; ?></td>
                        <td><?php echo $data ['NO_KTP_NIM_NIP']; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['JENIS_ANGGOTA']; ?></td>
                        <td><?php echo $data ['JENIS_KELAMIN']; ?></td>
                        
                        
                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>