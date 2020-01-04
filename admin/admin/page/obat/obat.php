<?php
require 'functions_admin.php';
$obat = query("select * from tb_obat");
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
              Data Obat
            </div>
            <a href="?page=obat&aksi=tambah" class="btn btn-primary" style=" margin-top:10px; margin-left:10px;">Tambah Obat</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                
                                <th>NAMA OBAT</th>
                                <th>STOK</th>
                                <th>EXP</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php foreach ($obat as $row ) :  ?>
                <tr>
                    
                    <td><?= $row["NAMA_OBAT"];?></td>
                    <td><?= $row["STOK"];?></td>
                    <td><?= $row["EXP"]?></td>
                    
                    <td>
                        <a href="?page=obat&aksi=ubah&ID_OBAT=<?= $row["ID_OBAT"];?>" class="btn btn-info"><i class="fa fa-edit"></i></a>  
                        <a href="?page=obat&aksi=hapus&ID_OBAT=<?= $row["ID_OBAT"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" class="btn btn-danger"><i class="fa fa-close"></i></a>
                    </td>     
                </tr>
                <?php endforeach; ?>
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
