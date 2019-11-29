<div class="panel panel-default">
    <div class="panel-heading">
      Tambah Data
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>ID DOKTER</label>
                    <input class="form-control" name="id_dokter" />

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
                    <label>NAMA DOKTER</label>
                    <input class="form-control" name="nama_dokter" />

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
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
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
                    <label>Jenis Poli</label>
                    <select class="form-control" name="poli">
                        <option value="01" >Poli Umum</option>
                        <option value="02">Poli KIA</option>
                        <option value="03">Poli Gigi</option>
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
          include "koneksi.php";
          $id = @$_POST ['id_dokter'];
          $pass = @$_POST ['password'];
          $no_ktp_nim_nip = @$_POST ['no_ktp_nim_nip'];
          $nama = @$_POST ['nama_dokter'];
          $jk = @$_POST ['jk'];
          $ttl = @$_POST ['tanggal_lahir'];
          $alamat = @$_POST ['alamat'];
          $pendidikan = @$_POST ['pendidikan_terakhir'];
          $no_hp = @$_POST ['no_hp'];
          $poli = @$_POST ['poli'];
          $simpan = @$_POST ['simpan'];
          $fileName = $_FILES['gambar']['name'];


          if ($simpan) {
            $sql = $koneksi -> query ("insert into tb_dokter(ID_DOKTER,	PASSWORD,	NO_KTP_NIM_NIP,	NAMA_DOKTER,JENIS_KELAMIN,TANGGAL_LAHIR,ALAMAT,PENDIDIKAN_TERAKHIR,	NO_HP, ID_KLINIK)
            values('$id' , '$pass' ,'$no_ktp_nim_nip' , '$nama' , '$jk' , '$ttl' ,'$alamat','$pendidikan','$no_hp','$poli')");
            if ($sql) {
              ?>
              <script type="text/javascript">
                  alert ("Data Berhasil");
                  window.location.href="?page=dokter";
              </script>
              <?php
            }
          }

           ?>
