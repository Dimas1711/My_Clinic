<?php
          require 'functions_admin.php';

          //cek tombol sudah ditekan atau belum
          if( isset ($_POST["submit"]) )
          {
           
                  //cek data berhasil ditambah?
                  if( tambah($_POST) > 0 )
                  {
                          echo "<script>
                          alert('Data Berhasil Ditambahkan');
                          document.location.href = 'home.php?page=anggota';
                          </script>";
                  }
                  else
                  {
                          echo "<script>alert('Gagal Menambahkan Data')</script>";
                  }
                 
          }
          if(isset($_POST["batal"]))
          {
                  header("Location: Home_login.php");
                  exit;
          }
          
          
          
          $carikode = mysqli_query($conn, "SELECT max(ID_ANGGOTA) FROM tb_anggota") or die(mysqli_error($conn));
          $datakode = mysqli_fetch_array($carikode);
          if($datakode)
          {
                  $nilaikode = substr($datakode[0], 2);
                  $kode = (int) $nilaikode;
                  $kode = $kode + 1;
                  $hasilkode = "AG" .str_pad($kode, 4, "0", STR_PAD_LEFT);
          }
          else
          {
                  $hasilkode = "AG001";
          }

// include_once 'koneksi.php';

// if (isset($_POST['simpan'])){
//     $fileName = $_FILES['gambar']['name'];
//     $id = $_POST['username'];

//     $pwd=$_POST['password'];
//     $ktp=$_POST['no_ktp_nim_nip'];
//     $user=$_POST['nama_anggota'];
//     $jagt=$_POST['ja'];
//     $jklm=$_POST['jk'];
//     $ttl=$_POST['tanggal_lahir'];
//     $almt=$_POST['alamat'];
//     $pdktr=$_POST['pendidikan_terakhir'];
//     $nohp=$_POST['no_hp'];
//     $prodi=$_POST['pekerjaan_prodi'];
//     $email=$_POST['email'];


    
  
    // mysqli_query($koneksi, "INSERT INTO tb_anggota (ID_ANGGOTA, PASSWORD, NO_KTP_NIM_NIP, NAMA_ANGGOTA, JENIS_ANGGOTA, JENIS_KELAMIN, TANGGAL_LAHIR, ALAMAT, PENDIDIKAN_TERAKHIR, NO_HP, PEKERJAAN_PRODI, EMAIL, FOTO) VALUES ('$id','$pwd','$ktp','$user','$jagt','$jklm','$ttl','$almt','$pdktr','$nohp','$prodi','$email','$fileName')");
    // move_uploaded_file($_FILES['gambar']['tmp_name'], "IMGanggota/".$_FILES['gambar']['name']);
    // echo"<script>alert('Gambar Berhasil diupload !');</script>";
    // header("location:?page=anggota");
//}

?>
<div class="panel panel-default">
    <div class="panel-heading">
      Tambah Anggota
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
        <?php 
            include_once "koneksi.php";
          ?>  
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Id Anggota</label>
                    <input type="text" class="form-control" name="ID_ANGGOTA" value="<?php echo $hasilkode ?>" readonly />

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="PASSWORD" type="password" />

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="NO_KTP_NIM_NIP" />

                </div>
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input class="form-control" name="NAMA_ANGGOTA" />

                </div>
                <div class="form-group col-lg-6">
                    <label>Jenis Anggota</label>
                    <select class="form-control" name="JENIS_ANGGOTA">
                        <option value="Umum">Umum</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Keluarga Karyawan">Keluarga Karyawan</option>
                    </select>
                </div>
         
             
                <div class="form-group col-lg-6">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="JENIS_KELAMIN">
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="TEMPAT_TANGGAL_LAHIR" type="date"/>

                </div>
                <div class="form-group col-lg-6">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="PENDIDIKAN_TERAKHIR">
                      <option >- - - - - - -</option>
                  
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
                <div class="form-group col-lg-6">
                    <label>Pekerjaan Atau Prodi</label>
                    <input class="form-control" type="text" name="PEKERJAAN_PRODI" />
                </div>
                <div class="form-group col-lg-6">
                    <label>Usia</label>
                    <input class="form-control" type="text" name="USIA" />
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="ALAMAT" />

                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="NO_HP" />
                </div>
               
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="EMAIL" />
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="FOTO" />
                </div>
                <div>
                  <input  type="submit" name="submit" value="simpan" class="btn btn-primary">
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

          
