<?php
require 'functions_admin.php';
$id = $_GET['ID_DOKTER'];
$dok = query("SELECT * FROM tb_dokter WHERE ID_DOKTER = '$id'")[0];

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubahdokter($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'home.php?page=dokter';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Mengubah Data')</script>";
        }
       
}

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
                    <input class="form-control" name="ID_DOKTER"  value="<?= $dok["ID_DOKTER"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>PASSWORD</label>
                    <input class="form-control" name="PASSWORD" type="password"  value="<?= $dok["PASSWORD"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="NO_KTP_NIM_NIP"  value="<?= $dok["NO_KTP_NIM_NIP"];?>"  />

                </div>
                <div class="form-group">
                    <label>NAMA DOKTER</label>
                    <input class="form-control" name="NAMA_DOKTER"  value="<?= $dok["NAMA_DOKTER"];?>"/>

                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="JENIS_KELAMIN" >
                    <option value="">Silahkan Pilih</option>
                                <option value="L" <?php if ($dok["JENIS_KELAMIN"] == 'L') {echo "selected";} ?> >L</option>
                                <option value="P" <?php if ($dok["JENIS_KELAMIN"] == 'P') {echo "selected";} ?> >P</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="TEMPAT_TANGGAL_LAHIR" type="date" value="<?= $dok["TANGGAL_LAHIR"]?>"/>

                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
                    <input class="form-control" name="ALAMAT"  value="<?= $dok["ALAMAT"]?>"/>

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="PENDIDIKAN_TERAKHIR"  value="<?= $dok["PENDIDIKAN_TERAKHIR"]?>">
                    <option >- - - - - - -</option>
                      <option value="SD" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'SD') {echo "selected";} ?> >SD</option>
                      <option value="SMP" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'SMP') {echo "selected";} ?> >SMP</option>
                      <option value="SMA" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'SMA') {echo "selected";} ?> >SMA</option>
                      <option value="SMP" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'D1') {echo "selected";} ?> >D1</option>
                      <option value="SMA" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'D3') {echo "selected";} ?> >D3</option>
                      <option value="S1" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'D4 / S1') {echo "selected";} ?> >D4 / S1</option>
                      <option value="S2" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'S2') {echo "selected";} ?> >S2</option>
                      <option value="S3" <?php if ($dok["PENDIDIKAN_TERAKHIR"] == 'S3') {echo "selected";} ?> >S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="NO_HP"  value="<?= $dok["NO_HP"]?>"/>
                </div>
                <div class="form-group">
                    <label>Jenis Poli</label>
                    <select class="form-control" name="ID_KLINIK"  value="<?= $dok["ID_KLINIK"]?>">
                    <option value="K01" <?php if ($dok["ID_KLINIK"] == 'K01') {echo "selected";} ?> >Poli Umum</option>
                      <option value="K02" <?php if ($dok["ID_KLINIK"] == 'K02') {echo "selected";} ?> >Poli Gigi</option>
                      <option value="K03" <?php if ($dok["ID_KLINIK"] == 'K03') {echo "selected";} ?> >Poli KIA</option>
                    </select>
                </div>
                <div>
                  <button  type="submit" name="submit" value="simpan" class="btn btn-primary">Ubah</button>
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>
