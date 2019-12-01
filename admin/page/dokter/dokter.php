<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Dokter
            </div>
              <a href="?page=dokter&aksi=tambah" class="btn btn-primary" style=" margin-top:10px; margin-left:10px;">Tambah Dokter</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NO.KTP/NIM/NIP</th>
                                <th>NAMA DOKTER</th>
                                <th>JENIS KELAMIN</th>
                                <th>TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>PENDIDIKAN TERAKHIR</th>
                                <th>NO.HP</th>
                                <th>KLINIK </th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                    <tbody>

                      <?php
                      include "koneksi.php";
                      $no = 1;
                      $sql = $koneksi -> query ("SELECT *FROM tb_dokter");
                          $sql = $koneksi -> query ("select ID_DOKTER , PASSWORD , NO_KTP_NIM_NIP , NAMA_DOKTER , JENIS_KELAMIN , TANGGAL_LAHIR , ALAMAT , PENDIDIKAN_TERAKHIR ,NO_HP , NAMA_KLINIK from tb_dokter ,tb_klinik WHERE tb_dokter.ID_KLINIK = tb_klinik.ID_KLINIK ");
                          while ($data=$sql->fetch_assoc()) {
                            // code...
                            

                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['NO_KTP_NIM_NIP']; ?></td>
                        <td><?php echo $data ['NAMA_DOKTER']; ?></td>
                        <td><?php echo $data ['JENIS_KELAMIN']; ?></td>
                        <td><?php echo $data ['TANGGAL_LAHIR']; ?></td>
                        <td><?php echo $data ['ALAMAT']; ?></td>
                        <td><?php echo $data ['PENDIDIKAN_TERAKHIR']; ?></td>
                        <td><?php echo $data ['NO_HP']; ?></td>
                        <td><?php echo $data ['NAMA_KLINIK']; ?></td>
                        <td>
                        <a href="?page=dokter&aksi=ubah&ID_DOKTER=<?php echo $data['ID_DOKTER']; ?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm ('Anda Yakin Ingin Menghapus Data ini ? ')" href="?page=dokter&aksi=hapus&ID_DOKTER=<?php echo $data['ID_DOKTER'];?>"class="btn btn-danger">Delete</a>

                      </td>
                      </tr>

                      <?php } ?>
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
