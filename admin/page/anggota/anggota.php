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
                                <th>No</th>
                                <th>NO.KTP/NIM/NIP</th>
                                <th>NAMA ANGGOTA</th>
                                <th>JENIS ANGGOTA</th>
                                <th>JENIS KELAMIN</th>
                                <th>TEMPAT TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>PENDIDIKAN TERAKHIR</th>
                                <th>NO.HP</th>
                                <th>PEKERJAAN</th>
                                <th>EMAIL</th>
                                <th>FOTO</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                    <tbody>

                      <?php
                      $no = 1;
                          $sql = $koneksi -> query ("SELECT *FROM tb_anggota");
                
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['NO_KTP_NIM_NIP']; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['JENIS_ANGGOTA']; ?></td>
                        <td><?php echo $data ['JENIS_KELAMIN']; ?></td>
                        <td><?php echo $data ['TEMPAT_TANGGAL_LAHIR']; ?></td>
                        <td><?php echo $data ['ALAMAT']; ?></td>
                        <td><?php echo $data ['PENDIDIKAN_TERAKHIR']; ?></td>
                        <td><?php echo $data ['NO_HP']; ?></td>
                        <td><?php echo $data ['PEKERJAAN_PRODI']; ?></td>
                        <td><?php echo $data ['EMAIL']; ?></td>
                        <td><?php echo $data ['FOTO']; ?></td>
                        <td>
                          <a href="?page=anggota&aksi=ubah&ID_ANGGOTA=<?php echo $data['ID_ANGGOTA'];?>" class="btn btn-info">Ubah</a>
                          <a onclick="return confirm ('Anda Yakin Ingin Menghapus Data ini ...???? ')" href="?page=anggota&aksi=hapus&ID_ANGGOTA=<?php echo $data['ID_ANGGOTA'];?>"class="btn btn-danger">Delete</a>
                      </td>
                      </tr>

                      <?php } ?>
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
