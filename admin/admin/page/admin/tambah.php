<?php
          require 'functions_admin.php';
       
          //cek tombol sudah ditekan atau belum
          if( isset ($_POST["submit"]) )
          {
                $pass = $_POST["PASSWORD"];
                $ktp = $_POST["NO_KTP_NIM_NIP"];
                $nama = $_POST["NAMA_KARYAWAN"];
                $ttl = $_POST["TEMPAT_TANGGAL_LAHIR"];
                $alamat = $_POST["ALAMAT"];
                $no = $_POST["NO_HP"];
                $status = $_POST["STATUS"];
                if (empty($pass && $ktp && $nama && $ttl && $alamat && $no && $status)) {
                    echo"<script> alert ('Field tidak boleh kosong')</script>";
                }
                  //cek data berhasil ditambah?
                elseif( tambahadmin($_POST) > 0 )
                  {
                          echo "<script>
                          alert('Data Berhasil Ditambahkan');
                          document.location.href = 'home.php?page=admin';
                          </script>";
                  }
                  else
                  {
                          echo "<script>alert('Gagal Menambahkan Data')</script>";
                  }
                 
          }
          
          
          
          $carikode = mysqli_query($conn, "SELECT max(ID_KARYAWAN) FROM tb_karyawan") or die(mysqli_error($conn));
          $datakode = mysqli_fetch_array($carikode);
          if($datakode)
          {
                  $nilaikode = substr($datakode[0], 2);
                  $kode = (int) $nilaikode;
                  $kode = $kode + 1;
                  $hasilkode = "AM" .str_pad($kode, 2, "0", STR_PAD_LEFT);
          }
          else
          {
                  $hasilkode = "AM01";
          }

?>


<div class="panel panel-default">
    <div class="panel-heading">
      Tambah Data
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
            <input class="form-control" type="hidden" name="STATUS" value="Karyawan" />
                <div class="form-group">
                    <label>ID KARYAWAN</label>
                    <input class="form-control" name="ID_KARYAWAN" value="<?php echo $hasilkode ?>" readonly/>

                </div>
                <div class="form-group">
                    <label>PASSWORD</label>
                    <input class="form-control" name="PASSWORD" type="password" />

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="NO_KTP_NIM_NIP" />

                </div>
                <div class="form-group">
                    <label>NAMA KARYAWAN</label>
                    <input class="form-control" name="NAMA_KARYAWAN" />

                </div>
                <div class="form-group">
                    <label>JENIS KELAMIN</label>
                    <select class="form-control" name="JENIS_KELAMIN">
                        <option value="L" >Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>TANGGAL LAHIR</label>
                    <input class="form-control" name="TEMPAT_TANGGAL_LAHIR" type="date"/>

                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
                    <input class="form-control" name="ALAMAT" />

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="PENDIDIKAN_TERAKHIR">
                
                         <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D3">D3</option>
                        <option value="D4 / S1">D4 / S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="NO_HP" />
                </div>
                <div>
                  <input  type="submit" name="submit" value="simpan" class="btn btn-primary">
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>


