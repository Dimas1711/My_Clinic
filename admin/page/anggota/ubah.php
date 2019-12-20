<?php
// include "koneksi.php";

// $id = $_GET['ID_ANGGOTA'];

// $sql = $koneksi->query("SELECT * FROM tb_anggota where ID_ANGGOTA = '$id'");

// $tampil = $sql -> fetch_assoc();


// $jenis_kelamin = $tampil['JENIS_KELAMIN'];

// $PT = $tampil['PENDIDIKAN_TERAKHIR'];
// $JA = $tampil['JENIS_ANGGOTA'];

require 'functions_admin.php';
$id = $_GET['ID_ANGGOTA'];
$ang = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id'")[0];

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubah($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'home.php?page=anggota';
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
      Ubah Anggota
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="GAMBARLAMA" id="password" value="<?= $ang["FOTO"];?>">

                <div class="form-group">
                    <label>Id_Anggota</label>
                    <input class="form-control" name="ID_ANGGOTA"  value="<?= $ang["ID_ANGGOTA"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="PASSWORD" type="password"  value="<?= $ang["PASSWORD"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="NO_KTP_NIM_NIP" value="<?= $ang["NO_KTP_NIM_NIP"]?>" />

                </div>
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input class="form-control" name="NAMA_ANGGOTA" value="<?= $ang["NAMA_ANGGOTA"]?>"/>

                </div>
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <select class="form-control" name="JENIS_ANGGOTA" value="<?= $ang["JENIS_ANGGOTA"]?>" >
                    <option value="">Silahkan Pilih</option>
                                        <option value="umum" <?php if ($ang["JENIS_ANGGOTA"] == 'Umum') {echo "selected";} ?> >Umum</option>
                                        <option value="mahasiswa" <?php if ($ang["JENIS_ANGGOTA"] == 'Mahasiswa') {echo "selected";} ?> >Mahasiswa</option>
                                        <option value="karyawan" <?php if ($ang["JENIS_ANGGOTA"] == 'Karyawan') {echo "selected";} ?> >Karyawan</option>
                                        <option value="keluarga Karyawan" <?php if ($ang["JENIS_ANGGOTA"] == 'Keluarga Karyawan') {echo "selected";} ?> >Keluarga Karyawan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="JENIS_KELAMIN"  >
                    <option value="">Silahkan Pilih</option>
                                <option value="L" <?php if ($ang["JENIS_KELAMIN"] == 'L') {echo "selected";} ?> >Laki - Laki</option>
                                <option value="P" <?php if ($ang["JENIS_KELAMIN"] == 'P') {echo "selected";} ?> >Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="TEMPAT_TANGGAL_LAHIR" type="date" value="<?= $ang["TANGGAL_LAHIR"]?>"/>

                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="ALAMAT" value="<?= $ang["ALAMAT"]?>" />

                </div>
                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select class="form-control" name="PENDIDIKAN_TERAKHIR"  value="<?= $ang["PENDIDIKAN_TERAKHIR"]?>">
                    <option >- - - - - - -</option>
                      <option value="SD" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'SD') {echo "selected";} ?> >SD</option>
                      <option value="SMP" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'SMP') {echo "selected";} ?> >SMP</option>
                      <option value="SMA" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'SMA') {echo "selected";} ?> >SMA</option>
                      <option value="SMP" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'D1') {echo "selected";} ?> >D1</option>
                      <option value="SMA" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'D3') {echo "selected";} ?> >D3</option>
                      <option value="S1" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'D4 / S1') {echo "selected";} ?> >D4 / S1</option>
                      <option value="S2" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'S2') {echo "selected";} ?> >S2</option>
                      <option value="S3" <?php if ($ang["PENDIDIKAN_TERAKHIR"] == 'S3') {echo "selected";} ?> >S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="NO_HP"  value="<?= $ang["NO_HP"]?>"/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Prodi</label>
                    <input class="form-control" type="text" name="PEKERJAAN_PRODI" value="<?= $ang["PEKERJAAN_PRODI"]?>"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="EMAIL" value="<?= $ang["EMAIL"]?>" />
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="FOTO" />
                </div>
                <div>
                  <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

          
