
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
                                <th>No</th>
                                <th>NAMA OBAT</th>
                                <th>HARGA</th>
                                <th>STOK</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                    <tbody>

                      <?php
                      $no = 1;
                          $sql = $koneksi -> query ("select * from tb_obat");

                          while ($data=$sql->fetch_assoc()) {
                            // code...


                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['NAMA_OBAT']; ?></td>
                        <td><?php echo $data ['HARGA']; ?></td>
                        <td><?php echo $data ['STOK']; ?></td>
                        
                        <td>
                        <a href="?page=obat&aksi=ubah&ID_OBAT=<?php echo $data['ID_OBAT'];?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm ('Anda Yakin Ingin Menghapus Data ini ...???? ')" href="?page=obat&aksi=hapus&ID_OBAT=<?php echo $data['ID_OBAT'];?>"class="btn btn-danger">Delete</a>
                      </td>
                      </tr>

                      <?php } ?>
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
