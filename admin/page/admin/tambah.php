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
                    <label>TEMPAT TANGGAL LAHIR</label>
                    <input class="form-control" name="tempat_tanggal_lahir" type="date"/>

                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
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
                        <option value="D3">D3</option>
                        <option value="D4 / S1">D4 / S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="no_hp" />
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

          $id = @$_POST ['id_admin'];
          $pass = @$_POST ['password'];
          $no_ktp_nim_nip = @$_POST ['no_ktp_nim_nip'];
          $nama = @$_POST ['nama_admin'];
          $jk = @$_POST ['jk'];
          $ttl = @$_POST ['tempat_tanggal_lahir'];
          $alamat = @$_POST ['alamat'];
          $pendidikan = @$_POST ['pendidikan_terakhir'];
          $no_hp = @$_POST ['no_hp'];
          $simpan = @$_POST ['simpan'];


          if ($simpan) {
            $sql = $koneksi -> query ("insert into tb_admin(ID_ADMIN,	PASSWORD,	NO_KTP_NIM_NIP,	NAMA_ADMIN,JENIS_KELAMIN,TEMPAT_TANGGAL_LAHIR,ALAMAT,PENDIDIKAN_TERAKHIR,	NO_HP)
            values('$id' , '$pass' ,'$no_ktp_nim_nip' , '$nama' , '$jk' , '$ttl' ,'$alamat','$pendidikan','$no_hp')");
            if ($sql) {
              ?>
              <script type="text/javascript">
                  alert ("Data Berhasil");
                  window.location.href="?page=admin";
              </script>
              <?php
            }
          }

           ?>
