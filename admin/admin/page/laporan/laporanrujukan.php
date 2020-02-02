<?php
require 'functions_admin.php';
if(!isset($_SESSION["status"])){
  echo "<script>alert('login sek boss')</script>";
  
  header("location:index.php");
}
$poli = mysqli_query($koneksi,"SELECT * from tb_dokter WHERE NAMA_DOKTER = '".$_SESSION['username']."'");
$row = mysqli_fetch_array($poli);
$polinya = $row['ID_KLINIK'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Rujukan</title>
    
  <script src="jQuery.js"></script>
</head>
<body>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
            Laporan Rujukan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                              
                                <th>Id Rujukan</th>
                                <th>Tanggal Rujukan</th>
                                <th>Nama Anggota</th>
                                <th>Nama Dokter</th>
                                <th>Nama KLinik</th>
                                <th>Dokter Tujuan</th>
                                <th>Tujuan</th>
                                
                                <th>Aksi</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT tb_rujukan.ID_RUJUKAN, tb_klinik.NAMA_KLINIK, tb_berobat.ID_BEROBAT, tb_anggota.NAMA_ANGGOTA, tb_dokter.NAMA_DOKTER, tb_berobat.DIAGNOSA, tb_rujukan.DOKTER_TUJUAN, tb_rujukan.TUJUAN, tb_rujukan.TANGGAL_RUJUKAN
                          FROM tb_rujukan, tb_dokter, tb_anggota, tb_berobat, tb_klinik
                          WHERE tb_berobat.ID_BEROBAT = tb_rujukan.ID_BEROBAT
                          AND tb_anggota.ID_ANGGOTA = tb_berobat.ID_ANGGOTA
                          AND tb_dokter.ID_DOKTER = tb_berobat.ID_DOKTER
                          AND tb_klinik.ID_KLINIK = tb_rujukan.ID_KLINIK
                          AND tb_rujukan.ID_KLINIK = '$polinya'
                          AND tb_berobat.STATUS = 'Accept'");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        
                        <td><?php echo $data ['ID_RUJUKAN']; ?></td>
                        <td><?php echo $data ['TANGGAL_RUJUKAN']; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['NAMA_DOKTER']; ?></td>
                        <td><?php echo $data ['NAMA_KLINIK']; ?></td>
                        <td><?php echo $data ['DOKTER_TUJUAN']; ?></td>
                        <td><?php echo $data ['TUJUAN']; ?></td>
                        
                        <td>
                        <a href="?page=laporanberobat&aksi=detailrujukan&ID_BEROBAT=<?= $data["ID_BEROBAT"];?>" name="detail" class="btn btn-primary"><i class="fa fa-print"></i></a>  
                    </td>
                        
                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

</form> 
</body>