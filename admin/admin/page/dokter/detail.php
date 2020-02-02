<?php
require 'functions_admin.php';
$id = $_GET['ID_DOKTER'];
$dok = query("SELECT * FROM tb_dokter , tb_klinik WHERE tb_dokter.ID_KLINIK = tb_klinik.ID_KLINIK AND  ID_DOKTER = '$id'")[0];

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
      Detail Data Dokter
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
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="NO_KTP_NIM_NIP"  value="<?= $dok["NO_KTP_NIM_NIP"];?>"  readonly/>

                </div>
                <div class="form-group">
                    <label>NAMA DOKTER</label>
                    <input class="form-control" name="NAMA_DOKTER"  value="<?= $dok["NAMA_DOKTER"];?>" readonly/>

                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                    <input class="form-control" name="NAMA_DOKTER"  value="<?= $dok["JENIS_KELAMIN"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="TEMPAT_TANGGAL_LAHIR" type="date" value="<?= $dok["TANGGAL_LAHIR"]?>" readonly/>

                </div>
                <div class="form-group">
                    <label>ALAMAT</label>
                    <input class="form-control" name="ALAMAT"  value="<?= $dok["ALAMAT"]?>" readonly/>

                </div>
                <div class="form-group">
                <label>Pendidikan Terakhir</label>
                    <input class="form-control" name="NAMA_DOKTER"  value="<?= $dok["PENDIDIKAN_TERAKHIR"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="NO_HP"  value="<?= $dok["NO_HP"]?>" readonly/>
                </div>
                <div class="form-group">
                    <label>Jenis Poli</label>
                    <input class="form-control" name="ID_KLINIK"  value="<?= $dok["NAMA_KLINIK"]?>" readonly/>
                    
              </form>

              </div>
            </div>

          </div>
          </div>
