<?php


$id = $_GET['ID_DOKTER'];

$sql = $koneksi->query("select * from tb_dokter where ID_DOKTER = '$id'");

$hp = $koneksi->query("select NO_HP from tb_dokter where ID_DOKTER = '$id'");

$tampil = $sql->fetch_assoc();

$jenis_kelamin = $tampil['JENIS_KELAMIN'];

$PT = $tampil['PENDIDIKAN_TERAKHIR'];

$poli = $tampil['ID_KLINIK'];

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
                    <label>ID DOKTER</label>
                    <input class="form-control" name="id_dokter"  value="<?php echo $tampil['ID_DOKTER']; ?>"/>

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
                    <label>NAMA DOKTER</label>
                    <input class="form-control" name="nama_dokter"  value="<?php echo $tampil['NAMA_DOKTER']; ?> "/>

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
                    <label>Tempat Tanggal Lahir</label>
                    <input class="form-control" name="tempat_tanggal_lahir" type="date" value="<?php echo $tampil['TEMPAT_TANGGAL_LAHIR']; ?>"/>

                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
                    <input class="form-control" name="alamat"  value="<?php echo $tampil['ALAMAT']; ?> "/>

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
                        <option value="D3"<?php if ($PT == 'D3'){
                          echo "selected";
                        } ?>>D3</option>
                        <option value="D4 / S1" <?php if ($PT == 'D4 / S1'){
                          echo "selected";
                        } ?>>D4 / S1</option>
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
                    <label>Jenis Poli</label>
                    <select class="form-control" name="poli"  value="<?php echo $poli; ?> ">
                        <option value="01" <?php if ($poli == 'Poli Umum') {
                          echo "selected";
                        } ?>>Poli Umum</option>
                        <option value="02" <?php if ($poli == 'Poli KIA') {
                          echo "selected";
                        } ?>>Poli KIA</option>
                         <option value="03" <?php if ($jenis_kelamin == 'Poli Gigi') {
                          echo "selected";
                        } ?>>Poli Gigi</option>
                    </select>
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

          $id = @$_POST ['id_dokter'];
          $pass = @$_POST ['password'];
          $no_ktp_nim_nip = @$_POST ['no_ktp_nim_nip'];
          $nama = @$_POST ['nama_dokter'];
          $jk = @$_POST ['jk'];
          $ttl = @$_POST ['tempat_tanggal_lahir'];
          $alamat = @$_POST ['alamat'];
          $pendidikan = @$_POST ['pendidikan_terakhir'];
          $no_hp = @$_POST ['no_hp'];
          $polinya = @$_POST ['poli'];
          $simpan = @$_POST ['simpan'];


          if ($simpan) {
            $sql = $koneksi -> query ("update tb_dokter set ID_DOKTER = '$id' ,	PASSWORD = '$pass',	NO_KTP_NIM_NIP = '$no_ktp_nim_nip' ,	NAMA_DOKTER = '$nama' ,JENIS_KELAMIN = '$jk',TEMPAT_TANGGAL_LAHIR =  '$ttl',ALAMAT ='$alamat' ,PENDIDIKAN_TERAKHIR = '$pendidikan',
            NO_HP = '$no_hp' , ID_KLINIK = '$polinya' where ID_DOKTER = '$id'");
            if ($sql) {
              ?>
              <script type="text/javascript">
                  alert ("Update Berhasil");
                  window.location.href="?page=dokter";
              </script>
              <?php
            }
          }

           ?>
