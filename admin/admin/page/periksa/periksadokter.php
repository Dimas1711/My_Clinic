<?php 
        require 'functions_admin.php';
        
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
                                <th>ID ANGGOTA</th>
                                <th>ID PERAWAT</th>
                                <th>STATUS</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                      $no = 1;
                          $sql = $koneksi -> query ("SELECT * FROM tb_berobat WHERE STATUS = 'pending'");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['TANGGAL_BEROBAT']; ?></td>
                        <td><?php echo $data ['ID_BEROBAT']; ?></td>
                        <td><?php echo $data ['ID_ANGGOTA']; ?></td>
                        <td><?php echo $data ['ID_KARYAWAN']; ?></td>
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