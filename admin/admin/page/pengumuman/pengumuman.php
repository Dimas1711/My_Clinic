<?php
require 'functions_admin.php';
$obat = query("select * from tb_pengumuman");

?>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Pengumuman
            </div>
            <a href="?page=pengumuman&aksi=tambah" class="btn btn-primary" style=" margin-top:10px; margin-left:10px;">Tambah Pengumuman</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                
                                <th>ID PENGUMUMAN</th>
                                <th>JUDUL</th>
                                <th>ISI</th>
                                <th>AKSI</th>
                                
                            </tr>
                        </thead>
                    <tbody>
                    <?php foreach ($obat as $row ) :  ?>
                <tr>
                    
                    <td><?= $row["ID_PENGUMUMAN"];?></td>
                    <td><?= $row["JUDUL"];?></td>
                    <td><?= $row["ISI"];?></td>
                    
                    <td>
                        <a href="?page=pengumuman&aksi=ubah&ID_PENGUMUMAN=<?= $row["ID_PENGUMUMAN"];?>" class="btn btn-info">Ubah</a>  
                        <a href="?page=pengumuman&aksi=hapus&ID_PENGUMUMAN=<?= $row["ID_PENGUMUMAN"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" class="btn btn-danger">Hapus</a>
                    </td>     
                </tr>
                <?php endforeach; ?>
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>