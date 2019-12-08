<div class="panel panel-default">
    <div class="panel-heading">
      Tambah Data
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>ID ADMIN</label>
                    <input class="form-control" name="id_admin" />

                </div>
                <div class="form-group">
                    <label>PASSWORD</label>
                    <input class="form-control" name="password" type="password" />

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="no_ktp_nim_nip" />

                </div>
                <div class="form-group">
                    <label>NAMA ADMIN</label>
                    <input class="form-control" name="nama_admin" />

                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                        <option value="L" >Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>TANGGAL LAHIR</label>
                    <input class="form-control" name="tanggal_lahir" type="date"/>

                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
                    <input class="form-control" name="alamat" />

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="pendidikan_terakhir">
                      <option >- - - - - - -</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="no_hp" />
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="gambar" />
                </div>
                <div>
                  <input  type="submit" name="simpan" value="simpan" class="btn btn-primary">
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

          <?php
          include_once "koneksi.php";
          if (isset($_POST['simpan'])){
            $fileName = $_FILES['gambar']['name'];
            $id = $_POST['id_admin'];
        
            $pwd=$_POST['password'];
            $ktp=$_POST['no_ktp_nim_nip'];
            $user=$_POST['nama_admin'];
            $jklm=$_POST['jk'];
            $ttl=$_POST['tanggal_lahir'];
            $almt=$_POST['alamat'];
            $pdktr=$_POST['pendidikan_terakhir'];
            $nohp=$_POST['no_hp'];
        
        
            // update data 
          
            mysqli_query($koneksi, "INSERT INTO tb_admin (ID_ADMIN, PASSWORD, NO_KTP_NIM_NIP, NAMA_ADMIN, JENIS_KELAMIN, TANGGAL_LAHIR, ALAMAT, PENDIDIKAN_TERAKHIR, NO_HP, FOTO) VALUES ('$id','$pwd','$ktp','$user','$jklm','$ttl','$almt','$pdktr','$nohp','$fileName')");
            move_uploaded_file($_FILES['gambar']['name'], "img/".$_FILES['gambar']['name']);
            echo"<script>alert('Gambar Berhasil diupload !');</script>";
            header("location:?page=admin");
        }

           ?>
