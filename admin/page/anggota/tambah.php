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
                    <input class="form-control" name="username" />

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="password" type="password" />

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="no_ktp_nim_nip" />

                </div>
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input class="form-control" name="nama_anggota" />

                </div>
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <select class="form-control" name="ja">
                        <option value="Umum">Umum</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Keluarga Karyawan">Keluarga Karyawan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="tanggal_lahir" type="date"/>

                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat" />

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="pendidikan_terakhir">
                      <option >- - - - - - -</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
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
                    <label>Pekerjaan Atau Prodi</label>
                    <input class="form-control" type="text" name="pekerjaan_prodi" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" />
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
// include database connection 
include_once 'koneksi.php';

if (isset($_POST['simpan'])){
    $fileName = $_FILES['gambar']['name'];
    $id = $_POST['username'];

    $pwd=$_POST['password'];
    $ktp=$_POST['no_ktp_nim_nip'];
    $user=$_POST['nama_anggota'];
    $jagt=$_POST['ja'];
    $jklm=$_POST['jk'];
    $ttl=$_POST['tanggal_lahir'];
    $almt=$_POST['alamat'];
    $pdktr=$_POST['pendidikan_terakhir'];
    $nohp=$_POST['no_hp'];
    $prodi=$_POST['pekerjaan_prodi'];
    $email=$_POST['email'];


    // update data 
  
    mysqli_query($koneksi, "INSERT INTO tb_anggota (ID_ANGGOTA, PASSWORD, NO_KTP_NIM_NIP, NAMA_ANGGOTA, JENIS_ANGGOTA, JENIS_KELAMIN, TANGGAL_LAHIR, ALAMAT, PENDIDIKAN_TERAKHIR, NO_HP, PEKERJAAN_PRODI, EMAIL, FOTO) VALUES ('$id','$pwd','$ktp','$user','$jagt','$jklm','$ttl','$almt','$pdktr','$nohp','$prodi','$email','$fileName')");
    move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
    echo"<script>alert('Gambar Berhasil diupload !');</script>";
    header("location:?page=anggota");
}

?>
