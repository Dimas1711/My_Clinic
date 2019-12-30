<?php
require 'functions_admin.php';
$dokter = query("SELECT tb_dokter.ID_DOKTER , tb_dokter.NO_KTP_NIM_NIP , tb_dokter.NAMA_DOKTER , tb_dokter.JENIS_KELAMIN ,tb_dokter.TANGGAL_LAHIR , tb_dokter.ALAMAT , tb_dokter.PENDIDIKAN_TERAKHIR , tb_dokter.NO_HP , tb_klinik.NAMA_KLINIK FROM tb_dokter , tb_klinik WHERE tb_dokter.ID_KLINIK = tb_klinik.ID_KLINIK");

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
              Data Dokter
            </div>
              <a href="?page=dokter&aksi=tambah" class="btn btn-primary" style=" margin-top:10px; margin-left:10px;">Tambah Dokter</a>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <!-- <th>No</th> -->
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
                    <?php foreach ($dokter as $row ) :  ?>
                <tr>
                    
                    <td><?= $row["NO_KTP_NIM_NIP"];?></td>
                    <td><?= $row["NAMA_DOKTER"];?></td>
                    <td><?= $row["JENIS_KELAMIN"];?></td>
                    <td><?= $row["TANGGAL_LAHIR"];?></td>
                    <td><?= $row["ALAMAT"];?></td>
                    <td><?= $row["PENDIDIKAN_TERAKHIR"];?></td>
                    <td><?= $row["NO_HP"];?></td>
                    <td><?= $row["NAMA_KLINIK"];?></td>
                    <td>
                        <a href="?page=dokter&aksi=ubah&ID_DOKTER=<?= $row["ID_DOKTER"];?>" class="btn btn-info">Ubah</a>  
                        <a href="?page=dokter&aksi=hapus&ID_DOKTER=<?= $row["ID_DOKTER"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" class="btn btn-danger">Hapus</a>
                    </td>     
                </tr>
<?php endforeach; ?>
                     
                    </tbody>


                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
