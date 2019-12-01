<?php
include "koneksi.php";
$id = $_GET['ID_ADMIN'];
$sql = $koneksi->query("select * from tb_admin where ID_ADMIN = '$id'");
$hp = $koneksi->query("select NO_HP from tb_admin where ID_ADMIN = '$id'");
$tampil = $sql->fetch_assoc();
$jenis_kelamin = $tampil['JENIS_KELAMIN'];
$PT = $tampil['PENDIDIKAN_TERAKHIR'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
      Ubah Data
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>ID ADMIN</label>
                    <input class="form-control" name="id_admin"  value="<?php echo $tampil['ID_ADMIN']; ?>"/>

                </div>
                <div class="form-group">
                    <label>PASSWORD</label>
                    <input class="form-control" name="password" type="password"  value="<?php echo $tampil['PASSWORD']; ?> "/>

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="no_ktp_nim_nip"  value="<?php echo $tampil['NO_KTP_NIM_NIP']; ?> "/>

                </div>
                <div class="form-group">
                    <label>NAMA ADMIN</label>
                    <input class="form-control" name="nama_admin"  value="<?php echo $tampil['NAMA_ADMIN']; ?> "/>

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
                    <label>ALAMAT</label>
                    <input class="form-control" name="alamat"  value="<?php echo $tampil['ALAMAT']; ?> "/>

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="pendidikan_terakhir"  value="<?php echo $tampil['PENDIDIKAN_TERAKHIR']; ?> ">
                      <option >- - - - - - -</option>
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
          $id = @$_POST ['id_admin'];
          $pass = @$_POST ['password'];
          $no_ktp_nim_nip = @$_POST ['no_ktp_nim_nip'];
          $nama = @$_POST ['nama_admin'];
          $jk = @$_POST ['jk'];
          $ttl = @$_POST ['tanggal_lahir'];
          $alamat = @$_POST ['alamat'];
          $pendidikan = @$_POST ['pendidikan_terakhir'];
          $no_hp = @$_POST ['no_hp'];
          $simpan = @$_POST ['simpan'];


          if ($simpan) {
            $sql = $koneksi -> query ("update tb_admin set ID_ADMIN = '$id' ,	PASSWORD = '$pass',	NO_KTP_NIM_NIP = '$no_ktp_nim_nip' ,	NAMA_ADMIN = '$nama' ,JENIS_KELAMIN = '$jk',TANGGAL_LAHIR =  '$ttl',ALAMAT ='$alamat' ,PENDIDIKAN_TERAKHIR = '$pendidikan',
            NO_HP = '$no_hp' where ID_ADMIN = '$id'");
            if ($sql) {
              ?>
              <script type="text/javascript">
                  alert ("Update Berhasil");
                  window.location.href="?page=admin";
              </script>
              <?php
            }
          }

           ?>
