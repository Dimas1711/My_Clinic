<?php
require 'functions_admin.php';
$admin = query("select * from tb_admin");
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
              Data Admin
            </div>
            <a href="?page=admin&aksi=tambah" class="btn btn-primary" style=" margin-top:10px; margin-left:10px;">Tambah Admin</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <!-- <th>No</th> -->

                                <th>NO.KTP/NIM/NIP</th>
                                <th>NAMA ADMIN</th>
                                <th>JENIS KELAMIN</th>
                                <th>TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>PENDIDIKAN TERAKHIR</th>
                                <th>NO.HP</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php foreach ($admin as $row ) :  ?>
                <tr>
                    
                    <td><?= $row["NO_KTP_NIM_NIP"];?></td>
                    <td><?= $row["NAMA_ADMIN"];?></td>
                    <td><?= $row["JENIS_KELAMIN"];?></td>
                    <td><?= $row["TANGGAL_LAHIR"];?></td>
                    <td><?= $row["ALAMAT"];?></td>
                    <td><?= $row["PENDIDIKAN_TERAKHIR"];?></td>
                    <td><?= $row["NO_HP"];?></td>
                    <td>
                        <a href="?page=admin&aksi=ubah&ID_ADMIN=<?= $row["ID_ADMIN"];?>" class="btn btn-info"><i class="fa fa-edit"></i></a>  
                        <a href="?page=admin&aksi=hapus&ID_ADMIN=<?= $row["ID_ADMIN"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" class="btn btn-danger"><i class="fa fa-close"></i></a>
                    </td>     
                </tr>
<?php endforeach; ?>
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
