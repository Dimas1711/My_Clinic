<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Periksa</title>
    
  <script src="jQuery.js"></script>
</head>
<body>
  
<h3 style="margin-left:2.5% ; font-size:20px"> 
  <tr>
                        <td>Id Berobat</td>
                        <td><input type="text" name="id_berobat"></td>
  </tr> 

  <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="tanggal"></td>
  </tr> 

</h3>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Anggota
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID_ANGGOTA</th>
                                <th>NO.KTP/NIM/NIP</th>
                                <th>NAMA ANGGOTA</th>
                                <th>JENIS ANGGOTA</th>
                                <th>JENIS KELAMIN</th>
                               
                               
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
                        <td><?php echo $data ['ID_ANGGOTA']; ?></td>
                        <td><?php echo $data ['NO_KTP_NIM_NIP']; ?></td>
                        <td><?php echo $data ['NAMA_ANGGOTA']; ?></td>
                        <td><?php echo $data ['JENIS_ANGGOTA']; ?></td>
                        <td><?php echo $data ['JENIS_KELAMIN']; ?></td>
                        
                        
                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

<div class=" col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Tensi
                        </div>
                        <div class="panel-body">
                        <table style="margin-left:35%">                  
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" id="nama" name="nama" onkeypress="autofillnya()" />
                </div>
                <div class="form-group">
                    <label>Id_Anggota</label>
                    <input class="form-control" type="text" id="id_anggota" name="id_anggota"  />
                </div>
                <div class="form-group">
                    <label>No.KTP/NIM/NIP</label>
                    <input class="form-control" type="text" name="no" id="no" />
                </div>
                
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <input class="form-control" type="text" name="ja" id="ja" />
                </div>
                <div class="form-group">
                    <label>Jenis Poli</label>
                    <select class="form-control" name="poli">
                        <option value="01" >Poli Umum</option>
                        <option value="02">Poli KIA</option>
                        <option value="03">Poli Gigi</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Tensi</label>
                    <input class="form-control" type="text" name="tensi" id="tensi" />
                </div>
                    </table>
                        </div>
                    </div>            
                </div>
                <a href="?page=periksa&aksi=input&ID_BEROBAT=<?php echo $data['id_berobat']; ?>" class="btn btn-info">Rujukan</a>
                      
                   <a href="?page=periksa&aksi=resepobat&ID_BEROBAT=<?php echo $data['id_berobat']; ?>"class="btn btn-danger">Resep Obat</a>
        
                <script type="text/javascript">
                
                            function autofillnya(){

                                var nama = $("#nama").val();
                                $.ajax({
                                  url : 'page/periksa/yo.php',
                                  data: 'nama='+nama,
                                }).success(function(data){
                                   var json = data,
                                   obj = JSON.parse(json);
                                   $("#nama'").val(obj.NAMA_ANGGOTA);
                                   $("#id_anggota").val(obj.ID_ANGGOTA);
                                   $("#no").val(obj.NO_KTP_NIM_NIP);
                                   $("#ja").val(obj.JENIS_ANGGOTA);
                                 });
                            }
                
                </script>
                <?php

                      $id_berobat = @$_POST['id_berobat'];
                      $id_anggota = @$_POST['id_anggota'];
                      $id_klinik = @$_POST ['poli'];
                      $tensi = @$_POST['tensi'];
                      $tanggal = @$_POST['tanggal'];
                      $input = @$_POST ['input'];
                      $resepobat = @$_POST ['resepobat'];

                      if ($input) {
                       
                        $sql = $koneksi -> query ("insert into tb_berobat (ID_BEROBAT , ID_ANGGOTA , ID_KLINIK , TENSI , TANGGAL_BEROBAT) 
                        values('$id_berobat','$id_anggota' , '$id_klinik' , '$tensi' ,'$tanggal')");
                        if ($sql) {
                          ?>
                           <script type="text/javascript">
                             alert ("Data Berhasil");
                           //  window.location.href="?page=periksa";
                          </script>
                       <?php
                        }
                      }
                      ?>



</body>
</html>