<?php
require 'functions_admin.php';
$anggota = query("select * from tb_anggota WHERE STATUS = 'Accept'");
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
              Data Anggota
            </div>
              <a href="?page=anggota&aksi=tambah" class="btn btn-primary" style=" margin-top:10px; margin-left:10px;">Tambah Anggota</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                               
                        <th>NO.KTP/NIM/NIP</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Usia</th>
                        <th>NO.HP</th>
                        <th>Pekerjaan/Prodi</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                            </tr>
                        </thead>

            <?php foreach ($anggota as $row ) :  ?>
                <tr>
                    
                    <td><?= $row["NO_KTP_NIM_NIP"];?></td>
                    <td><?= $row["NAMA_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_KELAMIN"];?></td>
                    <td><?= $row["ALAMAT"];?></td>
                    <td><?= $row["USIA"];?></td>
                    <td><?= $row["NO_HP"];?></td>
                    <td><?= $row["PEKERJAAN_PRODI"];?></td>
                    <td><?= $row["EMAIL"];?></td>
                    <td><img src="../img/<?=  $row["FOTO"]; ?>" alt="" width="50px"></td>
                    <td>
                        <a href="?page=anggota&aksi=ubah&ID_ANGGOTA=<?= $row["ID_ANGGOTA"];?>" name="hapus" class="btn btn-info">Ubah</a>  
                        <a href="?page=anggota&aksi=hapus&ID_ANGGOTA=<?= $row["ID_ANGGOTA"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" class="btn btn-danger">Hapus</a>
                    </td>     
                </tr>
<?php endforeach; ?>
                   


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
