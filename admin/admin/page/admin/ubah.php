<?php
require 'functions_admin.php';
$id = $_GET['ID_KARYAWAN'];
$adm = query("SELECT * FROM tb_karyawan WHERE ID_KARYAWAN = '$id'")[0];

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubahadmin($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'home.php?page=admin';
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
            <input class="form-control" type="hidden" name="STATUS" value="Karyawan" />
                <div class="form-group">
                    <label>ID KARYAWAN</label>
                    <input class="form-control" name="ID_KARYAWAN"  value="<?= $adm["ID_KARYAWAN"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>PASSWORD</label>
                    <input class="form-control" name="PASSWORD" type="password"  value="<?= $adm["PASSWORD"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="NO_KTP_NIM_NIP"  value="<?= $adm["NO_KTP_NIM_NIP"];?>"/>

                </div>
                <div class="form-group">
                    <label>NAMA kARYAWAN</label>
                    <input class="form-control" name="NAMA_ADMIN"  value="<?= $adm["NAMA_KARYAWAN"]?>"/>

                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="JENIS_KELAMIN"  >
                    <option value="">Silahkan Pilih</option>
                                <option value="L" <?php if ($adm["JENIS_KELAMIN"] == 'L') {echo "selected";} ?> >Laki - Laki</option>
                                <option value="P" <?php if ($adm["JENIS_KELAMIN"] == 'P') {echo "selected";} ?> >Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="TEMPAT_TANGGAL_LAHIR" type="date" value="<?= $adm["TANGGAL_LAHIR"]?>"/>

                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
                    <input class="form-control" name="ALAMAT" value="<?= $adm["ALAMAT"]?>" />

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="PENDIDIKAN_TERAKHIR"  value="<?= $ang["PENDIDIKAN_TERAKHIR"]?>">
                    <option >- - - - - - -</option>
                    
                      <option value="SD" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'SD') {echo "selected";} ?> >SD</option>
                      <option value="SMP" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'SMP') {echo "selected";} ?> >SMP</option>
                      <option value="SMA" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'SMA') {echo "selected";} ?> >SMA</option>
                      <option value="D1" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'D1') {echo "selected";} ?> >D1</option>
                      <option value="D3" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'D3') {echo "selected";} ?> >D3</option>
                      <option value="D4 / S1" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'D4 / S1') {echo "selected";} ?> >D4 / S1</option>
                     
                      <option value="S2" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'S2') {echo "selected";} ?> >S2</option>
                      <option value="S3" <?php if ($adm["PENDIDIKAN_TERAKHIR"] == 'S3') {echo "selected";} ?> >S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="NO_HP"  value="<?= $adm["NO_HP"]?>"/>
                </div>
                <div>
                  <button  type="submit" name="submit" class="btn btn-primary">Ubah</button>
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

           
