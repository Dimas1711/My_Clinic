<?php 
        require 'functions_admin.php';
        

        $carikode = mysqli_query($conn, "SELECT max(ID_BEROBAT) FROM tb_berobat") or die(mysqli_error($conn));
        $datakode = mysqli_fetch_array($carikode);
        if($datakode)
        {
                $nilaikode = substr($datakode[0], 2);
                $kode = (int) $nilaikode;
                $kode = $kode + 1;
                $hasilkode = "B" .str_pad($kode, 5, "0", STR_PAD_LEFT);
        }
        else
        {
                $hasilkode = "B00001";
        }

        
        if (isset ($_POST["resep"]))
        {
            if (input_periksa($_POST) > 0){
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'home.php?page=periksa&aksi=resepobat&ID_BEROBAT=$hasilkode';
                </script>";   
                
            }
            else {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
            }
        }
       elseif (isset ($_POST["rujukan"]))
        {
            if (input_periksa($_POST) > 0){
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'home.php?page=periksa&aksi=input';
                </script>";   
            
                
            }
            else {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
            }
        }
        

         
        
?>




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
  <form  method="post" action="">
<h3 style="margin-left:2.5% ; font-size:20px"> 
  <tr>                
        <td>Id Berobat</td>
        <td><input type="text" name="ID_BEROBAT"  value="<?php echo $hasilkode ?>" readonly></td>
  </tr> 

  <tr>
        <td name="TGL">Tanggal</td>
        <label for="TGL" name="TGL"><?php echo date("Y/m/d") ;?>     </label>
        <input type="hidden" name="TGL" value="<?php echo date("Y/m/d") ;?>">
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
                    <input class="form-control" type="text" id="NAMA" name="NAMA" readonly />
                </div>
                <div class="form-group">
                    <label>Id_Anggota</label>
                    <input class="form-control" type="text" id="ID_ANGGOTA" name="ID_ANGGOTA" readonly />
                </div>
                <div class="form-group">
                    <label>No.KTP/NIM/NIP</label>
                    <input class="form-control" type="text" name="NO" id="NO" readonly/>
                </div>
                
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <input class="form-control" type="text" name="JA" id="JA" readonly/>
                </div>
                <div class="form-group">
                    <label>Jenis Poli</label>
                    <select class="form-control" name="POLI">
                        <option value="K01">poli umum</option>
                        <option value="K02">poli kia</option>
                        <option value="K03">poli gigi</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Tensi</label>
                    <input class="form-control" type="text" name="TENSI" id="TENSI" />
                </div>
                <div class="form-group">
                    <label>Alergi Obat</label>
                    <input class="form-control" type="text" name="ALERGI" id="ALERGI" />
                </div>
                <div class="form-group">
                    <label>Anamanesa</label>
                    <input class="form-control" type="text" name="ANAMNESA" id="ANAMNESA" />
                </div>
                <div class="form-group">
                    <label>Diagnosa</label>
                    <input class="form-control" type="text" name="DIAGNOSA" id="DIAGNOSA" />
                </div>
                <div class="form-group">
                    <label>Catatan</label>
                    <input class="form-control" type="text" name="CATATAN" id="CATATAN" />
                </div>
               
                    </table>
                        </div>
                    </div>            
                </div>
               
                <!-- <a href="?page=periksa&aksi=input&ID_BEROBAT=<?php echo $data['ID_BEROBAT']; ?>" name="rujukan" class="btn btn-info">Rujukan</a>
                <a href="?page=periksa&aksi=resepobat&ID_BEROBAT=<?php echo $data['ID_BEROBAT']; ?>" name="resep"class="btn btn-danger">Resep Obat</a>
               -->
                <input  type="submit" name="resep" value="Resep Obat" class="btn btn-info">
                <input  type="submit" name="rujukan" value="Rujukan" class="btn btn-primary">
                </form>
                <script>
                var table = document.getElementById('dataTables-example');
    
               for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
             document.getElementById("ID_ANGGOTA").value = this.cells[1].innerHTML;
             document.getElementById("NAMA").value = this.cells[3].innerHTML;
             document.getElementById("NO").value = this.cells[2].innerHTML;
             document.getElementById("JA").value = this.cells[4].innerHTML;
        };
    }

</script>


                <!-- 
    
    // $id_berobat = @$_POST['id_berobat'];
    // $id_klinik = @$_POST ['poli'];
    // $id_anggota = @$_POST['id_anggota'];
    // $tensi = @$_POST['tensi'];       
    // $anamnesa = @$_POST['anamnesa'];       
    // $diagnosa = @$_POST['diagnosa'];                    
    // $tanggal = @$_POST['tgl'];
    // $rujukan = @$_POST ['rujukan'];
    // $resep = @$_POST ['resep'];

    //                   if ($resep) {
                       
    //                     $sql = $koneksi -> query ("insert into tb_berobat (ID_BEROBAT , ID_ANGGOTA , ID_KLINIK , TENSI , ANAMNESA, DIAGNOSA ,TANGGAL_BEROBAT) 
    //                     values('$id_berobat','$id_anggota' , '$id_klinik' , '$tensi' ,'$anamnesa',' $diagnosa','$tanggal')");
    //                     if ($sql) {
                    //       ?>
                    //        <script type="text/javascript">
                    //          alert ("Data Berhasil");
                    //         //window.location.href="?page=periksa";
                    //       </script>
                    //    
                    //     }
                    //   }
                      ?> -->


  






</body>
</html>