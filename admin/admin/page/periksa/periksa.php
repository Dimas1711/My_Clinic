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
            $sistole = $_POST["SISTOLE"];
            $diastole = $_POST["DIASTOLE"];
            $anamnesa = $_POST["ANAMNESA"];
            $alergi = $_POST["ALERGI"];
            $diagnosa = $_POST["DIAGNOSA"];
            $suhu = $_POST["SUHU"];
            $nadi = $_POST["NADI"];
            $pernapasan = $_POST["PERNAPASAN"];
            $berat = $_POST["BERAT_BADAN"];
            $tinggi = $_POST["TINGGI_BADAN"];
           
            if (empty($sistole && $diastole && $anamnesa && $alergi && $diagnosa && $suhu && $nadi && $pernapasan && $berat && $tinggi)) {
                echo "<script>
                alert('Field Tidak Boleh Kosong');
                </script>"; 
            }
            else if (input_periksa($_POST) > 0){
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'home1.php?page=periksa&aksi=resepobat&ID_BEROBAT=$hasilkode';
                </script>";   
                
            }
            else {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
            }
        }
       elseif (isset ($_POST["rujukan"]))
        { 
            $sistole = $_POST["SISTOLE"];
            $diastole = $_POST["DIASTOLE"];
            $anamnesa = $_POST["ANAMNESA"];
         
            $diagnosa = $_POST["DIAGNOSA"];
            $suhu = $_POST["SUHU"];
            $nadi = $_POST["NADI"];
            $pernapasan = $_POST["PERNAPASAN"];
            $berat = $_POST["BERAT_BADAN"];
            $tinggi = $_POST["TINGGI_BADAN"];
           
            if (empty($sistole && $diastole && $anamnesa && $diagnosa && $suhu && $nadi && $pernapasan && $berat && $tinggi)) {
                echo "<script>
                alert('Field Tidak Boleh Kosong');
                </script>"; 
            }

            else if (input_periksa($_POST) > 0){
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'home1.php?page=periksa&aksi=input&ID_BEROBAT=$hasilkode';
                </script>";   
            
                
            }
            else {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
            }
        }
        
        if(!isset($_SESSION["status"])){
            echo "<script>alert('login sek boss')</script>";
            
            header("location:index.php");
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
                          $sql = $koneksi -> query ("SELECT *FROM tb_anggota WHERE STATUS = 'Accept'");
           
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

                <?php
                    include_once "koneksi.php";
                    
                    $result1 = mysqli_query($koneksi, "SELECT tb_klinik.ID_KLINIK, NAMA_KLINIK , tb_dokter.ID_DOKTER, NAMA_DOKTER FROM tb_klinik , tb_dokter WHERE tb_dokter.ID_KLINIK = tb_klinik.ID_KLINIK AND NAMA_DOKTER='".$_SESSION['username']."'");
                    $row = mysqli_fetch_array($result1);
         
                ?>

                <div class="form-group">
                    <label>Nama Dokter</label><br>
                    <input class="form-control" type="text" id="NAMA_DOKTER" name="NAMA_DOKTER" value="<?= $row["NAMA_DOKTER"]?>" readonly>
                    <input type="hidden" name="ID_DOKTER" value="<?= $row["ID_DOKTER"]?>" >
                </div>                  
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" id="NAMA" name="NAMA_ANGGOTA" readonly />
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
                    <label>Klinik</label>
                    <input class="form-control" type="text" id="POLI" name="POLI" value="<?= $row["NAMA_KLINIK"]?>" readonly>
                    <input type="hidden" name="ID_KLINIK" value="<?= $row["ID_KLINIK"]?>" >
                </div>    
              
                
                <div class="form-group">
                    <label>Sistole</label>
                    <input class="form-control" type="text" name="SISTOLE" id="SISTOLE" />
                </div>

                <div class="form-group">
                    <label>Diastole</label>
                    <input class="form-control" type="text" name="DIASTOLE" id="DIASTOLE" />
                </div>

                <div class="form-group">
                    <label>Anamanesa</label>
                    <input class="form-control" type="text" name="ANAMNESA" id="ANAMNESA" />
                </div>

                <div class="form-group">
                    <label>Alergi Obat</label>
                    <input class="form-control" type="text" name="ALERGI" id="ALERGI" />
                </div>
               
                <div class="form-group">
                    <label>Diagnosa</label>
                    <input class="form-control" type="text" name="DIAGNOSA" id="DIAGNOSA" />
                </div>
                
               

                <div class="form-group col-lg-6">
                    <label>Suhu</label>
                    <input class="form-control" type="text" name="SUHU" id="SUHU" />
                
                </div>

                <div class="form-group col-lg-6">
                    <label>NADI</label>
                    <input class="form-control" type="text" name="NADI" id="NADI" />
                </div>

                <div class="form-group col-lg-6">
                    <label>PERNAPASAN</label>
                    <input class="form-control" type="text" name="PERNAPASAN" id="PERNAPASAN" />
                </div>

                <div class="form-group col-lg-6">
                    <label>GOLONGAN DARAH</label>
                    <select class="form-control" name="GOLONGAN_DARAH" id="GOLONGAN_DARAH">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
                
                <div class="form-group col-lg-6">
                    <label>BERAT BADAN</label>
                    <input class="form-control" type="text" name="BERAT_BADAN" id="BERAT_BADAN"/>
                    
                </div>

                <div class="form-group col-lg-6">
                    <label>TINGGI BADAN</label>
                    <input class="form-control" type="text" name="TINGGI_BADAN" id="TINGGI_BADAN" />
                </div>
                <div class="form-group">
                    <label>Catatan</label>
                    <Textarea class="form-control" type="text" name="CATATAN" id="CATATAN"> </Textarea>
                </div>
               
                    </table>
                        </div>
                    </div>            
                </div>
            
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


  

</body>
</html>