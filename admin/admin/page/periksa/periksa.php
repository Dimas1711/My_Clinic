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

        
        if (isset ($_POST["Simpan"]))
        {
            $sistole = $_POST["SISTOLE"];
            $diastole = $_POST["DIASTOLE"];
            $anamnesa = $_POST["ANAMNESA"];
            $suhu = $_POST["SUHU"];
            $nadi = $_POST["NADI"];
            $pernapasan = $_POST["PERNAPASAN"];
            $berat = $_POST["BERAT_BADAN"];
            $tinggi = $_POST["TINGGI_BADAN"];
           
            if (empty($sistole && $diastole && $anamnesa && $suhu && $nadi && $pernapasan && $berat && $tinggi)) {
                echo "<script>
                alert('Field Tidak Boleh Kosong');
                </script>"; 
            }
            else if (input_periksa($_POST) > 0){
                echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'home2.php?page=periksa';
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
         
          $query = "SELECT * FROM tb_dokter ORDER BY ID_DOKTER ASC";
          $result = mysqli_query($conn, $query);
          
          $query2 = "SELECT * FROM tb_klinik ORDER BY ID_KLINIK ASC";
          $result4 = mysqli_query($conn, $query2);
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
                                <th>Nomer RM</th>
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

                    $result2 = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE NAMA_KARYAWAN='".$_SESSION['username']."'");
                    $row2 = mysqli_fetch_array($result2);
         
                ?>

                <div class="form-group">
                    <label>Nama Perawat</label><br>
                    <input class="form-control" type="text" id="NAMA_KARYAWAN" name="NAMA_KARYAWAN" value="<?= $row2["NAMA_KARYAWAN"]?>" readonly>
                    <input type="hidden" name="ID_KARYAWAN" value="<?= $row2["ID_KARYAWAN"]?>" >
                </div>                  
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" type="text" id="NAMA" name="NAMA_ANGGOTA" readonly />
                </div>
                <div class="form-group">
                    <label>Nomer RM</label>
                    <input class="form-control" type="text" id="ID_ANGGOTA" name="ID_ANGGOTA" readonly />
                </div>
              
                <div class="form-group">
                    <label>Klinik</label>
                    <select class="form-control" name="KLINIK">
                    <?php while($data = mysqli_fetch_assoc($result4) ){?>
                    <option name="KLINIK" value="<?php echo $data['ID_KLINIK']; ?>"><?php echo $data['NAMA_KLINIK']; ?>
                    <?php } ?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label>Dokter</label>
                    <select class="form-control" name="DOKTER">
                    <?php while($data = mysqli_fetch_assoc($result) ){?>
                    <option name="DOKTER" value="<?php echo $data['ID_DOKTER']; ?>"><?php echo $data['NAMA_DOKTER']; ?>
                    <?php } ?>
                    </select>
                </div> -->
                
                <div class="form-group">
                    <label>No.KTP/NIM/NIP</label>
                    <input class="form-control" type="text" name="NO" id="NO" readonly/>
                </div>
                
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <input class="form-control" type="text" name="JA" id="JA" readonly/>
                </div>  
                <div class="form-group">
                    <label>Anamanesa</label>
                    <input class="form-control" type="text" name="ANAMNESA" id="ANAMNESA" />
                </div>             
                <center>
                <div class="form-group">
                <div class="form-group col-lg-1"> 
                    <label>Sistole</label>
                    <input class="form-control" type="text" name="SISTOLE" id="SISTOLE" /> 
                </div>
                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -45px">MmHg</label>
                </div>

                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label> / </label>
                </div>             
                        
                <div class="form-group col-lg-1">
                    <label>Diastole</label>
                    <input class="form-control" type="text" name="DIASTOLE" id="DIASTOLE" />
                </div>
                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -45px">MmHg</label>
                </div>
                
                </div>
                </center>

                <div class="form-group col-lg-5">
                    <label>Suhu</label>
                    <input class="form-control" type="text" name="SUHU" id="SUHU" />
                </div>
                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -20px">°C</label>
                </div> 

                <div class="form-group col-lg-3">
                    <label>GOL. DARAH</label>
                    <select class="form-control" name="GOLONGAN_DARAH" id="GOLONGAN_DARAH">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
                
                <div class="form-group col-lg-3">
                    <label>BERAT BADAN</label>
                    <input class="form-control" type="text" name="BERAT_BADAN" id="BERAT_BADAN"/>
                    
                </div>
                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -20px">Kg</label>
                </div>

                <div class="form-group col-lg-3">
                    <label>TINGGI BADAN</label>
                    <input class="form-control" type="text" name="TINGGI_BADAN" id="TINGGI_BADAN" />
                    
                </div>
                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -20px">cm</label>
                </div>

                <div class="form-group col-lg-4">
                    <label>NADI</label>
                    <input class="form-control" type="text" name="NADI" id="NADI" />
                </div>

                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -25px">X /Menit</label>
                </div>   

                <div class="form-group col-lg-4">
                    <label>PERNAPASAN</label>
                    <input class="form-control" type="text" name="PERNAPASAN" id="PERNAPASAN" />
                </div>

                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -25px">X /Menit</label>
                </div>
                <input class="form-control" type="hidden" name="STATUS" id="STATUS" value="pending"/>
                <div class="form-group col-lg-12">
                    <label>Catatan</label>
                    <Textarea class="form-control" type="text" name="CATATAN" id="CATATAN"></Textarea>
                </div>
                    </table>
                        </div>
                    </div>            
                </div>
            
                <input  type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                <input  type="submit" name="Reset" value="Reset" class="btn btn-info" href='home1.php?page=periksa'>
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