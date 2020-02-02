
      <?php
            
                    include_once "koneksi.php";
                    include 'functions_admin.php';
                    $id = $_GET['ID_BEROBAT'];
                    // $result1 = mysqli_query($koneksi, "SELECT tb_klinik.ID_KLINIK, NAMA_KLINIK , tb_dokter.ID_DOKTER, NAMA_DOKTER FROM tb_klinik , tb_dokter WHERE tb_dokter.ID_KLINIK = tb_klinik.ID_KLINIK AND NAMA_DOKTER='".$_SESSION['username']."'");
                    // $row = mysqli_fetch_array($result1);

                    // $getdata = query("SELECT * FROM tb_karyawan , tb_berobat , tb_klinik , tb_dokter , tb_anggota
                    //  WHERE tb_karyawan.ID_KARYAWAN = tb_berobat.ID_KARYAWAN AND tb_anggota.ID_ANGGOTA = tb_berobat.ID_ANGGOTA AND tb_klinik.ID_KLINIK = tb_berobat.ID_KLINIK AND tb_dokter.ID_DOKTER = tb_berobat.ID_DOKTER AND tb_berobat.ID_BEROBAT ='$id'")[0];
                    $dokter = mysqli_query($koneksi, "SELECT * FROM tb_dokter WHERE NAMA_DOKTER='".$_SESSION['username']."'");
                    $row = mysqli_fetch_array($dokter);
                    
 $getdata = query("SELECT * FROM tb_karyawan , tb_berobat , tb_klinik , tb_dokter , tb_anggota
                     WHERE tb_karyawan.ID_KARYAWAN = tb_berobat.ID_KARYAWAN AND tb_anggota.ID_ANGGOTA = tb_berobat.ID_ANGGOTA AND tb_klinik.ID_KLINIK = tb_berobat.ID_KLINIK AND tb_berobat.ID_BEROBAT ='$id'")[0];
 
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
      else if (update_detail($_POST) > 0){
          echo "<script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'home1.php?page=detail&aksi=resepobat&ID_BEROBAT=$id';
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

      else if (update_detail($_POST) > 0){
          echo "<script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'home1.php?page=detail&aksi=rujukan&ID_BEROBAT=$id';
          </script>";   
      
          
      }
      else {
          echo "<script>alert('Gagal Menambahkan Data')</script>";
      }
  }
  elseif (isset ($_POST["racikan"]))
  { 


     if (update_detail($_POST) > 0){
          echo "<script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'home1.php?page=detail&aksi=racikan&ID_BEROBAT=$id';
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
<form action="" method="post">
<div class=" col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Detail Periksa
                        </div>
                        <div class="panel-body">
                <table style="margin-left:35%" id="table">
                <div class="form-group">
                    <label>Nama Dokter</label><br>
                    <input class="form-control" type="text" id="NAMA_DOKTER" name="NAMA_DOKTER" value="<?= $row["NAMA_DOKTER"]?>" readonly>
                    <input type="hidden" name="ID_DOKTER" value="<?= $row["ID_DOKTER"]?>" >
                </div>     
                
                <div class="form-group">
                    <label>Klinik</label>
                    <input class="form-control" type="text" id="POLI" name="POLI" value="<?= $getdata["NAMA_KLINIK"]?>" readonly>
                    <input type="hidden" name="ID_KLINIK" value="<?= $getdata["ID_KLINIK"]?>" >
                    <input class="hidden" type="text" id="ID_BEROBAT" name="ID_BEROBAT" value="<?= $getdata["ID_BEROBAT"]?>" readonly />
                </div> 
                
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input class="form-control" type="text" name="ID_ANGGOTA" id="ID_ANGGOTA" value="<?= $getdata["NAMA_ANGGOTA"]?>" readonly/>
                </div>

                <div class="form-group">
                    <label>Nama Perawat</label>
                    <input class="form-control" type="text" id="ID_KARYAWAN" name="ID_KARYAWAN"   value="<?= $getdata["NAMA_KARYAWAN"]?>" readonly />
                </div>

                
                <div class="form-group">
                    <label>Tanggal Berobat</label>
                    <input class="form-control" type="text" name="TANGGAL_BEROBAT" id="TANGGAL_BEROBAT"  value="<?= $getdata["TANGGAL_BEROBAT"]?>" readonly/>
                </div>   
              
                <center>
                <div class="form-group">
                <div class="form-group col-lg-2"> 
                    <label>Sistole</label>
                    <input class="form-control" type="text" name="SISTOLE" id="SISTOLE" readonly /> 
                </div>
                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -45px">MmHg</label>
                </div>

                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label> / </label>
                </div>             
                        
                <div class="form-group col-lg-2">
                    <label>Diastole</label>
                    <input class="form-control" type="text" name="DIASTOLE" id="DIASTOLE" readonly/>
                </div>
                <div class="form-group col-lg-1" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -45px">MmHg</label>
                </div>
                
                </div>
                </center>
                   
                <div class="form-group col-lg-12">
                    <label>Anamanesa</label>
                    <input class="form-control" type="text" name="ANAMNESA" id="ANAMNESA" readonly/>
                </div>
                
                <div class="form-group col-lg-4">
                    <label>Suhu</label>
                    <input class="form-control" type="text" name="SUHU" id="SUHU" readonly/>
                
                </div>
                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -20px">°C</label>
                </div> 

                <div class="form-group col-lg-4">
                    <label>NADI</label>
                    <input class="form-control" type="text" name="NADI" id="NADI" readonly/>
                </div>
                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -25px">X /Menit</label>
                </div>

                <div class="form-group col-lg-4">
                    <label>PERNAPASAN</label>
                    <input class="form-control" type="text" name="PERNAPASAN" id="PERNAPASAN" readonly/>
                </div>
                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -25px">X /Menit</label>
                </div>

                <div class="form-group col-lg-4">
                    <label>GOLONGAN DARAH</label>
                    <input class="form-control" type="text" name="GOLONGAN_DARAH" id="GOLONGAN_DARAH" readonly/>
                </div>
                
                <div class="form-group col-lg-4">
                    <label>BERAT BADAN</label>
                    <input class="form-control" type="text" name="BERAT_BADAN" id="BERAT_BADAN" readonly/>
                    
                </div>
                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -20px">Kg</label>
                </div>

                <div class="form-group col-lg-4">
                    <label>TINGGI BADAN</label>
                    <input class="form-control" type="text" name="TINGGI_BADAN" id="TINGGI_BADAN" readonly/>
                </div>
                <div class="form-group col-lg-2" > 
                    <label style="margin-bottom: 45px;"></label>
                    <label style="margin-left: -20px">cm</label>
                </div>
                
                <div class="form-group">
                    <label>Diagnosa</label>
                    <input class="form-control" type="text" name="DIAGNOSA" id="DIAGNOSA" value="<?= $getdata["DIAGNOSA"]?>" />
                </div>

                <div class="form-group">
                    <label>Alergi Obat</label>
                    <input class="form-control" type="text" name="ALERGI" id="ALERGI" value="<?= $getdata["ALERGI_OBAT"]?>"/>
                </div>

                <div class="form-group">
                    <label>Catatan</label>
                    <Textarea class="form-control" type="text" name="CATATAN" id="CATATAN"><?php echo $getdata["CATATAN"]?> </Textarea>
                </div>
               
                    </table>
                        </div>
                    </div>            
                </div>
            
                <input  type="submit" name="resep" value="Resep Obat" class="btn btn-info">
                <input  type="submit" name="rujukan" value="Rujukan" class="btn btn-primary">
                </form>