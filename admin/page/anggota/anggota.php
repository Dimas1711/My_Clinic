<?php
require 'functions_admin.php';
$anggota = query("select * from tb_anggota");
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
                                <!-- <th>No</th>
                                <th>NO.KTP/NIM/NIP</th>
                                <th>NAMA ANGGOTA</th>
                                <th>JENIS ANGGOTA</th>
                                <th>JENIS KELAMIN</th>
                                <th>TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>PENDIDIKAN TERAKHIR</th>
                                <th>NO.HP</th>
                                <th>PEKERJAAN</th>
                                <th>EMAIL</th>
                                <th>FOTO</th>
                                <th>AKSI</th> -->
                                <!-- <th>Id Anggota</th>
                        <th>Password</th> -->
                        <th>NO.KTP/NIM/NIP</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Pendidikan Terakhir</th>
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
                    <td><?= $row["TANGGAL_LAHIR"];?></td>
                    <td><?= $row["ALAMAT"];?></td>
                    <td><?= $row["PENDIDIKAN_TERAKHIR"];?></td>
                    <td><?= $row["NO_HP"];?></td>
                    <td><?= $row["PEKERJAAN_PRODI"];?></td>
                    <td><?= $row["EMAIL"];?></td>
                    <td><img src="img/<?=  $row["FOTO"]; ?>" alt="" width="50px"></td>
                    <td>
                        <a href="?page=anggota&aksi=ubah&ID_ANGGOTA=<?= $row["ID_ANGGOTA"];?>" class="btn btn-info">Ubah</a>  
                        <a href="?page=anggota&aksi=hapus&ID_ANGGOTA=<?= $row["ID_ANGGOTA"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" class="btn btn-danger">Hapus</a>
                    </td>     
                </tr>
<?php endforeach; ?>
                   


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
