<?php

require 'functions_admin.php';
$id = $_GET['ID_ANGGOTA'];
$ang = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id'")[0];

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]))
{
        //cek data berhasil ditambah? 
            if (acc($_POST) > 0) 
            {
                echo "<script> 
                alert('Data Berhasil Di Ubah');
                document.location.href = '?page=verifikasi';
                </script>";           
            }
            else {
                echo "<script> 
                alert('Gagal Ubah Data');
                document.location.href = '?page=verifikasi';
                </script>";
            }       
}

if( isset ($_POST["ban"]))
{
        //cek data berhasil ditambah? 
            if (hapus_anggota($_POST) > 0) 
            {
                echo "<script> 
                alert('Data Berhasil Di Ubah');
                document.location.href = '?page=verifikasi';
                </script>";           
            }
            else {
                echo "<script> 
                alert('Gagal Ubah Data');
                document.location.href = '?page=verifikasi';
                </script>";
            }       
}
 ?>



<div class="panel panel-default">
    <div class="panel-heading">
    Detail Verifikasi Anggota
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post" enctype="multipart/form-data">
                <div class="form-group col-lg-6">
                    <label>NO.KTP_NIM_NIP</label>
                    <p class="form-control" name="NO_KTP_NIM_NIP"><?=  $ang["NO_KTP_NIM_NIP"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Nama Anggota</label>  
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["NAMA_ANGGOTA"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Jenis Anggota</label>
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["JENIS_ANGGOTA"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Jenis Kelamin</label>
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["JENIS_KELAMIN"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Tanggal Lahir</label>
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["TANGGAL_LAHIR"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Usia</label>
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["USIA"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Alamat</label>
                   <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["ALAMAT"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Pendidikan Terakhir</label>
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["PENDIDIKAN_TERAKHIR"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>No.Hp</label>
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["NO_HP"]?></p>
                </div>
                <div class="form-group col-lg-6">
                    <label>Pekerjaan Prodi</label>
              
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["PEKERJAAN_PRODI"]?></p>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <p class="form-control" name="NAMA_ANGGOTA"><?=  $ang["EMAIL"]?></p>
                </div>
             
                <div class="form-group">
                    <label>Foto</label>
                    <br>
                    <input type="hidden" name="GAMBARLAMA" value="<?= $ang["FOTO"];?>"> 
                    <img class="foto" src="img/<?= $ang["FOTO"];?>" alt="" width="150px">
                     <input class="form-control" type="file" name="FOTO" value="img/<?= $ang["FOTO"];?>" />
                </div>
                <div>
                  <a href="?page=verifikasi&aksi=accept&ID_ANGGOTA=<?= $ang["ID_ANGGOTA"];?>" name="hapus" class="btn btn-info"><i class="fa fa-check"></i>Terima</a>  
                <a href="?page=verifikasi&aksi=reject&ID_ANGGOTA=<?= $ang["ID_ANGGOTA"]; ?>"onclick="return confirm('Anda Yakin Ingin Reject Data Ini ?');" class="btn btn-danger"><i class="fa fa-times"></i>Tolak</a>
                
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

          
