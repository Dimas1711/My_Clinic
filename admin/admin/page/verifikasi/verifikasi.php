<?php
require 'functions_admin.php';
$anggota = query("select * from tb_anggota WHERE STATUS='Pending'");
if(!isset($_SESSION["status"])){
    echo "<script>alert('login sek boss')</script>";
    
    header("location:index.php");
  }
?>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Verifikasi Anggota
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                        <th>ID Anggota</th>
                        <th>NO.KTP/NIM/NIP</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                            </tr>
                        </thead>

            <?php foreach ($anggota as $row ) :  ?>
                <tr>
                    <td><?= $row["ID_ANGGOTA"];?></td>
                    <td><?= $row["NO_KTP_NIM_NIP"];?></td>
                    <td><?= $row["NAMA_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_KELAMIN"];?></td>
                    <td>
                        <!-- <a href="?page=verifikasi&aksi=accept&ID_ANGGOTA=<?= $row["ID_ANGGOTA"];?>" name="hapus" class="btn btn-info"><i class="fa fa-check"></i></a>  
                        <a href="?page=verifikasi&aksi=reject&ID_ANGGOTA=<?= $row["ID_ANGGOTA"]; ?>"onclick="return confirm('Anda Yakin Ingin Reject Data Ini ?');" class="btn btn-danger"><i class="fa fa-times"></i></a>
                    </td>      -->
                        <a href="?page=verifikasi&aksi=detail&ID_ANGGOTA=<?= $row["ID_ANGGOTA"];?>" name="hapus" class="btn btn-primary"><i class="fa fa-search"></i></a>  
                    
                    </td>
                </tr>
<?php endforeach; ?>
                   


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

                  
       
                  