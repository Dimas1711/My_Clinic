<?php 
        require 'functions_admin.php';
        
        $carikode = mysqli_query($conn, "SELECT max(ID_DET_PERIKSA) FROM tb_detail_periksa") or die(mysqli_error($conn));
        $datakode = mysqli_fetch_array($carikode);
        if($datakode)
        {
                $nilaikode = substr($datakode[0], 2);
                $kode = (int) $nilaikode;
                $kode = $kode + 1;
                $hasilkode = "Z" .str_pad($kode, 5, "0", STR_PAD_LEFT);
        }
        else
        {
                $hasilkode = "Z00001";
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
            else if (input_detail_periksa($_POST) > 0){
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

            else if (input_detail_periksa($_POST) > 0){
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'home1.php?page=periksa&aksi=input&ID_BEROBAT=$hasilkode';
                </script>";   
            
                
            }
            else {
                echo "<script>alert('Gagal Menambahkan Data')</script>";
            }
        }
        elseif (isset ($_POST["racikan"]))
        { 


           if (input_detail_periksa($_POST) > 0){
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'home1.php?page=periksa&aksi=racikan&ID_BEROBAT=$hasilkode';
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

</h3>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Berobat
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID BEROBAT</th>
                                <th>ID ANGGOTA</th>
                                <th>ID PERAWAT</th>
                                <th>TANGGAL BEROBAT</th>
                                <th>SISTOLE</th>
                                <th>DIASTOLE</th>
                                <th>ANAMNESA</th>
                                <th>SUHU</th>
                                <th>NADI</th>
                                <th>PERNAPASAN</th>
                                <th>GOLONGAN DARAH</th>
                                <th>BERAT BADAN</th>
                                <th>TINGGI BADAN</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                      $no = 1;
                          $sql = $koneksi -> query ("SELECT * FROM tb_berobat WHERE STATUS = 'pending'");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        <td><?php  echo $no++; ?></td>
                        <td><?php echo $data ['ID_BEROBAT']; ?></td>
                        <td><?php echo $data ['ID_ANGGOTA']; ?></td>
                        <td><?php echo $data ['ID_KARYAWAN']; ?></td>
                        <td><?php echo $data ['TANGGAL_BEROBAT']; ?></td>
                        <td><?php echo $data ['SISTOLE']; ?></td>
                        <td><?php echo $data ['DIASTOLE']; ?></td>
                        <td><?php echo $data ['ANAMNESA']; ?></td>
                        <td><?php echo $data ['SUHU']; ?></td>
                        <td><?php echo $data ['NADI']; ?></td>
                        <td><?php echo $data ['PERNAPASAN']; ?></td>
                        <td><?php echo $data ['GOLONGAN DARAH']; ?></td>
                        <td><?php echo $data ['BERAT BADAN']; ?></td>
                        <td><?php echo $data ['TINGGI BADAN']; ?></td>
                        <td><?php echo $data ['STATUS']; ?></td>
                        

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
                    <input type="hidden" name="ID_DET_PERIKSA" value="<?php echo $hasilkode ?>" >
                    <input type="hidden" name="ID_DOKTER" value="<?= $row["ID_DOKTER"]?>" >
                </div>     
                
                <div class="form-group">
                    <label>Klinik</label>
                    <input class="form-control" type="text" id="POLI" name="POLI" value="<?= $row["NAMA_KLINIK"]?>" readonly>
                    <input type="hidden" name="ID_KLINIK" value="<?= $row["ID_KLINIK"]?>" >
                </div> 

                <div class="form-group">
                    <label>Id Berobat</label>
                    <input class="form-control" type="text" id="ID_BEROBAT" name="ID_BEROBAT" readonly />
                </div>
                
                <div class="form-group">
                    <label>Id_Anggota</label>
                    <input class="form-control" type="text" name="ID_ANGGOTA" id="ID_ANGGOTA" readonly/>
                </div>

                <div class="form-group">
                    <label>Id Perawat</label>
                    <input class="form-control" type="text" id="ID_KARYAWAN" name="ID_KARYAWAN" readonly />
                </div>

                
                <div class="form-group">
                    <label>Tanggal Berobat</label>
                    <input class="form-control" type="text" name="TANGGAL_BEROBAT" id="TANGGAL_BEROBAT" readonly/>
                </div>   
              
                <div class="form-group">
                    <label>Sistole</label>
                    <input class="form-control" type="text" name="SISTOLE" id="SISTOLE" readonly/>
                </div> 
                                
                <div class="form-group">
                    <label>Diastole</label>
                    <input class="form-control" type="text" name="DIASTOLE" id="DIASTOLE" readonly/>
                </div>
                   
                <div class="form-group">
                    <label>Anamanesa</label>
                    <input class="form-control" type="text" name="ANAMNESA" id="ANAMNESA" readonly/>
                </div>
                
                <div class="form-group col-lg-6">
                    <label>Suhu</label>
                    <input class="form-control" type="text" name="SUHU" id="SUHU" readonly/>
                
                </div>

                <div class="form-group col-lg-6">
                    <label>NADI</label>
                    <input class="form-control" type="text" name="NADI" id="NADI" readonly/>
                </div>

                <div class="form-group col-lg-6">
                    <label>PERNAPASAN</label>
                    <input class="form-control" type="text" name="PERNAPASAN" id="PERNAPASAN" readonly/>
                </div>

                <div class="form-group col-lg-6">
                    <label>GOLONGAN DARAH</label>
                    <input class="form-control" type="text" name="GOLONGAN_DARAH" id="GOLONGAN_DARAH" readonly/>
                </div>
                
                <div class="form-group col-lg-6">
                    <label>BERAT BADAN</label>
                    <input class="form-control" type="text" name="BERAT_BADAN" id="BERAT_BADAN" readonly/>
                    
                </div>

                <div class="form-group col-lg-6">
                    <label>TINGGI BADAN</label>
                    <input class="form-control" type="text" name="TINGGI_BADAN" id="TINGGI_BADAN" readonly/>
                </div>
                
                <div class="form-group">
                    <label>Diagnosa</label>
                    <input class="form-control" type="text" name="DIAGNOSA" id="DIAGNOSA" />
                </div>

                <div class="form-group">
                    <label>Alergi Obat</label>
                    <input class="form-control" type="text" name="ALERGI" id="ALERGI" />
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
                <input  type="submit" name="racikan" value="racikan" class="btn btn-primary">
                </form>
                <script>
                var table = document.getElementById('dataTables-example');
    
               for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
             document.getElementById("ID_BEROBAT").value = this.cells[1].innerHTML;
             document.getElementById("ID_ANGGOTA").value = this.cells[2].innerHTML;
             document.getElementById("ID_KARYAWAN").value = this.cells[3].innerHTML;
             document.getElementById("TANGGAL_BEROBAT").value = this.cells[4].innerHTML;
             document.getElementById("SISTOLE").value = this.cells[5].innerHTML;
             document.getElementById("DIASTOLE").value = this.cells[6].innerHTML;
             document.getElementById("ANAMNESA").value = this.cells[7].innerHTML;
             document.getElementById("SUHU").value = this.cells[8].innerHTML;
             document.getElementById("NADI").value = this.cells[9].innerHTML;
             document.getElementById("PERNAPASAN").value = this.cells[10].innerHTML;
             document.getElementById("GOLONGAN_DARAH").value = this.cells[11].innerHTML;
             document.getElementById("BERAT_BADAN").value = this.cells[12].innerHTML;
             document.getElementById("TINGGI_BADAN").value = this.cells[13].innerHTML;
        };
    }

</script>


  

</body>
</html>