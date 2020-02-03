<?php 
require 'functions_admin.php';
$poli = mysqli_query($koneksi,"SELECT * from tb_dokter WHERE NAMA_DOKTER = '".$_SESSION['username']."'");
$row = mysqli_fetch_array($poli);

$polinya = $row['ID_KLINIK'];
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Periksa</title>
    
  <script src="jQuery.js"></script>
</head>
<body>
  <form  method="post" action="">
<h3 style="margin-left:2.5% ; font-size:20px">

</h3>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Berobat
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>TANGGAL BEROBAT</th>
                                <th>ID BEROBAT</th>
                                <th>NOMER RM</th>
                                <th>NAMA ANGGOTA</th>
                                <th>NAMA PERAWAT</th>
                                <th>STATUS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                      $no = 1;
                          $sql = $koneksi -> query ("SELECT tb_berobat.TANGGAL_BEROBAT, tb_berobat.ID_BEROBAT ,tb_anggota.ID_ANGGOTA, tb_anggota.NAMA_ANGGOTA, tb_karyawan.NAMA_KARYAWAN, tb_berobat.STATUS
                          FROM tb_berobat, tb_anggota, tb_karyawan 
                          WHERE tb_berobat.ID_ANGGOTA = tb_anggota.ID_ANGGOTA
                          AND tb_berobat.ID_KARYAWAN = tb_karyawan.ID_KARYAWAN 
                          AND tb_berobat.STATUS = 'pending' 
                          AND tb_berobat.ID_KLINIK = '$polinya'");
           
           while ($data=$sql ->fetch_assoc()) {
                            
                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['TANGGAL_BEROBAT']; ?></td>
                        <td><?php echo $data ['ID_BEROBAT']; ?></td>
                        <td><?php echo $data ['ID_ANGGOTA']; ?></td>
                        <td><?php echo $data['NAMA_ANGGOTA'];?></td>
                        <td><?php echo $data ['NAMA_KARYAWAN']; ?></td>
                        <td><?php echo $data ['STATUS']; ?></td>
                        <td>
                        <a href="?page=periksadokter&aksi=detail&ID_BEROBAT=<?= $data["ID_BEROBAT"];?>" name="detail" class="btn btn-primary"><i class="fa fa-search"></i></a>  
                    </td>

                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>


  

</body>
</html>