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
                        <td name="tgl">Tanggal</td>
                        <label for="tgl"><?php echo date("d/m/Y") ;?>     </label>
                       
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
                <table style="margin-left:35%" id="table">                  
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" id="nama" name="nama" readonly />
                </div>
                <div class="form-group">
                    <label>Id_Anggota</label>
                    <input class="form-control" type="text" id="id_anggota" name="id_anggota" readonly />
                </div>
                <div class="form-group">
                    <label>No.KTP/NIM/NIP</label>
                    <input class="form-control" type="text" name="no" id="no" readonly/>
                </div>
                
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <input class="form-control" type="text" name="ja" id="ja" readonly/>
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
                <div class="form-group">
                    <label>Alergi Obat</label>
                    <input class="form-control" type="text" name="alergi" id="alergi" />
                </div>
                <div class="form-group">
                    <label>Anamanesa</label>
                    <input class="form-control" type="text" name="anamnesa" id="anamnesa" />
                </div>
                <div class="form-group">
                    <label>Diagnosa</label>
                    <input class="form-control" type="text" name="diagnosa" id="diagnosa" />
                </div>
               
                    </table>
                        </div>
                    </div>            
                </div>
                <a href="?page=periksa&aksi=input&ID_BEROBAT=<?php echo $data['id_berobat']; ?>" name="rujukan" class="btn btn-info">Rujukan</a>
                <a href="?page=periksa&aksi=resepobat&ID_BEROBAT=<?php echo $data['id_berobat']; ?>" name="resep"class="btn btn-danger">Resep Obat</a>
                <script>
                var table = document.getElementById('dataTables-example');
    
               for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
             document.getElementById("id_anggota").value = this.cells[1].innerHTML;
             document.getElementById("nama").value = this.cells[3].innerHTML;
             document.getElementById("no").value = this.cells[2].innerHTML;
             document.getElementById("ja").value = this.cells[4].innerHTML;
        };
    }

</script>


                <?php
    
    $id_berobat = @$_POST['id_berobat'];
    $id_klinik = @$_POST ['poli'];
    $id_anggota = @$_POST['id_anggota'];
    $tensi = @$_POST['tensi'];       
    $anamnesa = @$_POST['anamnesa'];       
    $diagnosa = @$_POST['diagnosa'];                    
    $tanggal = @$_POST['tgl'];
    $rujukan = @$_POST ['rujukan'];
    $resep = @$_POST ['resep'];

                      if ($resep) {
                       
                        $sql = $koneksi -> query ("insert into tb_berobat (ID_BEROBAT , ID_ANGGOTA , ID_KLINIK , TENSI , ANAMNESA, DIAGNOSA ,TANGGAL_BEROBAT) 
                        values('$id_berobat','$id_anggota' , '$id_klinik' , '$tensi' ,'$anamnesa',' $diagnosa','$tanggal')");
                        if ($sql) {
                          ?>
                           <script type="text/javascript">
                             alert ("Data Berhasil");
                            //window.location.href="?page=periksa";
                          </script>
                       <?php
                        }
                      }
                      ?>


  






</body>
</html>