<?php
include "koneksi.php";

$id = $_GET['ID_ANGGOTA'];

$sql = $koneksi->query("SELECT * FROM tb_anggota where ID_ANGGOTA = '$id'");

$tampil = $sql -> fetch_assoc();


$jenis_kelamin = $tampil['JENIS_KELAMIN'];

$PT = $tampil['PENDIDIKAN_TERAKHIR'];
$JA = $tampil['JENIS_ANGGOTA'];

 ?>



<div class="panel panel-default">
    <div class="panel-heading">
      Tambah Anggota
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>Id_Anggota</label>
                    <input class="form-control" name="username"  value="<?php echo $tampil['ID_ANGGOTA']; ?>" />

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="password" type="password"  value="<?php echo $tampil['PASSWORD']; ?>"/>

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="no_ktp_nim_nip" value="<?php echo $tampil['NO_KTP_NIM_NIP']; ?>" />

                </div>
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input class="form-control" name="nama_anggota" value="<?php echo $tampil['NAMA_ANGGOTA']; ?>"/>

                </div>
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <select class="form-control" name="ja" value="<?php echo $JA; ?>" >
                        <option value="Umum"<?php if ($JA == 'Umum') {
                          echo "selected";
                        } ?> >Umum</option>
                        <option value="Mahasiswa" <?php if ($JA =='Mahasiswa') {
                          echo "selected";
                        } ?>>Mahasiswa</option>
                        <option value="Karyawan" <?php if ($JA == 'Karyawan') {
                          echo "selected";
                        } ?>>Karyawan</option>
                        <option value="Keluarga Karyawan <?php if ($JA == 'Keluarga Karyawan') {
                          echo "selected";
                        } ?>">Keluarga Karyawan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk"  value="<?php echo $jenis_kelamin; ?> ">
                        <option value="L" <?php if ($jenis_kelamin == 'L') {
                          echo "selected";
                        } ?>>Laki Laki</option>
                        <option value="P" <?php if ($jenis_kelamin == 'P') {
                          echo "selected";
                        } ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="tanggal_lahir" type="date" value="<?php echo $tampil['TANGGAL_LAHIR']; ?>"/>

                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat" value="<?php echo $tampil['ALAMAT']; ?>" />

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="pendidikan_terakhir"  value="<?php echo $tampil['PENDIDIKAN_TERAKHIR']; ?> ">
                      <option >- - - - - - -</option>
                        <option value="Tidak Sekolah" <?php if ($PT == 'Tidak Sekolah'){
                          echo "selected";
                        } ?>>Tidak Sekolah</option>
                        <option value="SD"<?php if ($PT == 'SD'){
                          echo "selected";
                        } ?>>SD</option>
                        <option value="SMP" <?php if ($PT == 'SMP'){
                          echo "selected";
                        } ?>>SMP</option>
                        <option value="SMA"<?php if ($PT == 'SMA'){
                          echo "selected";
                        } ?>>SMA</option>
                        <option value="D1" <?php if ($PT == 'D1') {
                          echo "selected";
                        } ?>>D1</option>
                        <option value="D2" <?php if ($PT == 'D2') {
                          echo "selected";
                        } ?>>D2</option>
                        <option value="D3"<?php if ($PT == 'D3'){
                          echo "selected";
                        } ?>>D3</option>
                        <option value="D4" <?php if ($PT == 'D4'){
                          echo "selected";                   
                        } ?>>D4</option>
                        <option value="S1" <?php if ($PT == 'S1') {
                          echo "selected";
                        } ?>>S1</option>
                        <option value="S2" <?php if ($PT == 'S2'){
                          echo "selected";
                        } ?>>S2</option>
                        <option value="S3" <?php if ($PT == 'S3'){
                          echo "selected";
                        } ?>>S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="no_hp"  value="<?php echo $tampil['NO_HP']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Prodi</label>
                    <input class="form-control" type="text" name="pekerjaan_prodi" value="<?php echo $tampil['PEKERJAAN_PRODI']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" value="<?php echo $tampil['EMAIL']; ?>" />
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="foto" value="<?php echo $tampil['FOTO']; ?>"/>
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
          include "koneksi.php";
          $id = @$_POST ['username'];
          $pass = @$_POST ['password'];
          $no_ktp_nim_nip = @$_POST ['no_ktp_nim_nip'];
          $nama = @$_POST ['nama_anggota'];
          $ja = @$_POST ['ja'];
          $jk = @$_POST ['jk'];
          $ttl = @$_POST ['tanggal_lahir'];
          $alamat = @$_POST ['alamat'];
          $pendidikan = @$_POST ['pendidikan_terakhir'];
          $no_hp = @$_POST ['no_hp'];
          $pp = @$_POST ['pekerjaan_prodi'];
          $email = @$_POST ['email'];
          $filename =@$_FILES['gambar']['name'];
          $simpan = @$_POST ['simpan'];


          if ($simpan) {
            $sql = $koneksi -> query ("update tb_anggota set ID_ANGGOTA = '$id' ,	PASSWORD = '$pass' ,	NO_KTP_NIM_NIP = '$no_ktp_nim_nip' ,	NAMA_ANGGOTA =  '$nama',JENIS_ANGGOTA = '$ja',JENIS_KELAMIN = '$jk' ,TANGGAL_LAHIR = '$ttl' ,ALAMAT = '$alamat',PENDIDIKAN_TERAKHIR = '$pendidikan',	NO_HP = '$no_hp' , PEKERJAAN_PRODI = '$pp' , EMAIL = '$email' , gambar = '$filename' where ID_ANGGOTA='$id'");
            move_uploaded_file($_FILES['gambar']['tmp_name'], "../img/".$_FILES['gambar']['name']);
            if ($sql) {
              ?>
              <script type="text/javascript">
                  alert ("Update Data Berhasil");
                  window.location.href="?page=anggota";
              </script>
              <?php
            }
          }

           ?>
