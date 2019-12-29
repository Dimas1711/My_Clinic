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
                              
                                <th>Id Rujukan</th>
                                <th>Id Berobat</th>
                                <th>Id Klinik</th>
                                <th>Tujuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT *FROM tb_rujukan");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        
                        <td><?php echo $data ['ID_RUJUKAN']; ?></td>
                        <td><?php echo $data ['ID_BEROBAT']; ?></td>
                        <td><?php echo $data ['ID_KLINIK']; ?></td>
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

</form> 
</body>