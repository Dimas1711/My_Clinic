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
                        <a href="?page=periksadokter&aksi=detail&ID_ANGGOTA=<?= $data["ID_ANGGOTA"];?>" name="hapus" class="btn btn-primary"><i class="fa fa-search"></i></a>  
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
            
       
                <script>
                var table = document.getElementById('dataTables-example');
    
               for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
             document.getElementById("ID_BEROBAT").value = this.cells[1].innerHTML;
             document.getElementById("ID_ANGGOTA").value = this.cells[2].innerHTML;
             document.getElementById("ID_KARYAWAN").value = this.cells[3].innerHTML;
             document.getElementById("TANGGAL_BEROBAT").value = this.cells[4].innerHTML;
             document.getElementById("SISTOLE").value = this.cells[5].innerHTML;
             document.getElementById("DIASTOLE").value = this.cells[6].innerHTML;
             document.getElementById("ANAMNESA").value = this.cells[7].innerHTML;
             document.getElementById("SUHU").value = this.cells[8].innerHTML;
             document.getElementById("NADI").value = this.cells[9].innerHTML;
             document.getElementById("PERNAPASAN").value = this.cells[10].innerHTML;
             document.getElementById("GOLONGAN_DARAH").value = this.cells[11].innerHTML;
             document.getElementById("BERAT_BADAN").value = this.cells[12].innerHTML;
             document.getElementById("TINGGI_BADAN").value = this.cells[13].innerHTML;
        };
    }

</script>


  

</body>
</html>