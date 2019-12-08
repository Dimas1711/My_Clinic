
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
                                <th>No</th>

                                <th>NO.KTP/NIM/NIP</th>
                                <th>NAMA ADMIN</th>
                                <th>JENIS KELAMIN</th>
                                <th>TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>PENDIDIKAN TERAKHIR</th>
                                <th>FOTO</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                    <tbody>

                      <?php
                                include_once "koneksi.php";
                      $no = 1;
                          $sql = $koneksi -> query ("select * from tb_admin");

                          while ($data=$sql->fetch_assoc()) {
                            // code...


                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>

                        <td><?php echo $data ['NO_KTP_NIM_NIP']; ?></td>
                        <td><?php echo $data ['NAMA_ADMIN']; ?></td>
                        <td><?php echo $data ['JENIS_KELAMIN']; ?></td>
                        <td><?php echo $data ['TANGGAL_LAHIR']; ?></td>
                        <td><?php echo $data ['ALAMAT']; ?></td>
                        <td><?php echo $data ['PENDIDIKAN_TERAKHIR']; ?></td>
                        <td><?php echo "<img src='img/admin/".$data['FOTO']."' width='100px' height='100px'/>" ?>
                        
                        <td>
                        <a href="?page=admin&aksi=ubah&ID_ADMIN=<?php echo $data['ID_ADMIN'];?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm ('Anda Yakin Ingin Menghapus Data ini ...???? ')" href="?page=admin&aksi=hapus&ID_ADMIN=<?php echo $data['ID_ADMIN'];?>"class="btn btn-danger">Delete</a>
                      </td>
                      </tr>

                      <?php } ?>
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
