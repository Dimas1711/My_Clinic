<?php
require 'functions_admin.php';
$anggota = query("select * from tb_anggota");
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
                       
                        <th>NO.KTP/NIM/NIP</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>NO.HP</th>
                        <th>Pekerjaan/Prodi</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Aksi</th>
                            </tr>
                        </thead>

            <?php foreach ($anggota as $row ) :  ?>
                <tr>
                    
                    <td><?= $row["NO_KTP_NIM_NIP"];?></td>
                    <td><?= $row["NAMA_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_KELAMIN"];?></td>
                    <td><?= $row["TANGGAL_LAHIR"];?></td>
                    <td><?= $row["ALAMAT"];?></td>
                    <td><?= $row["NO_HP"];?></td>
                    <td><?= $row["PEKERJAAN_PRODI"];?></td>
                    <td><?= $row["EMAIL"];?></td>
                    <td><img src="img/<?=  $row["FOTO"]; ?>" alt="" width="50px"></td>
                    <td><?= $row["STATUS"];?></td>
                    <td>
                        <a href="?page=verifikasi&aksi=accept&ID_ANGGOTA=<?= $row["ID_ANGGOTA"];?>" name="hapus" class="btn btn-info">Accept</a>  
                        <a href="?page=verifikasi&aksi=reject&ID_ANGGOTA=<?= $row["ID_ANGGOTA"]; ?>"onclick="return confirm('Anda Yakin Ingin Reject Data Ini ?');" class="btn btn-danger">Reject</a>
                    </td>     
                </tr>
<?php endforeach; ?>
                   


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
