<?php
require 'functions_admin.php';
$id = $_GET['ID_ANGGOTA'];
$ang = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id'")[0];

//cek tombol sudah ditekan atau belum

 ?>



<div class="panel panel-default">
    <div class="panel-heading">
      Detail Anggota
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="GAMBARLAMA" value="<?= $ang["FOTO"];?>">

                <div class="form-group">
                    <label>Nomer RM</label>
                    <input class="form-control" name="ID_ANGGOTA"  value="<?= $ang["ID_ANGGOTA"];?>" readonly/>

                </div>
            
                <div class="form-group">
                    <label>NO.KTP_NIM_NIP</label>
                    <input class="form-control" name="NO_KTP_NIM_NIP" value="<?= $ang["NO_KTP_NIM_NIP"]?>" readonly/>

                </div>
                <div class="form-group">
                    <label>Nama Anggota</label>
                    <input class="form-control" name="NAMA_ANGGOTA" value="<?= $ang["NAMA_ANGGOTA"]?>"readonly/>

                </div>
                <div class="form-group">
                    <label>Jenis Anggota</label>
                    <input class="form-control" name="JENIS_ANGGOTA" value="<?= $ang["JENIS_ANGGOTA"]?>" readonly />
                   
                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                    <input class="form-control" name="JENIS_ANGGOTA" value="<?= $ang["JENIS_KELAMIN"]?>" readonly />
                   
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" name="TEMPAT_TANGGAL_LAHIR" type="date" value="<?= $ang["TANGGAL_LAHIR"]?>" readonly/>

                </div>
                <div class="form-group">
                    <label>Usia</label>
                    <input class="form-control" name="USIA" type="text" value="<?= $ang["USIA"]?>" readonly/>

                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="ALAMAT" value="<?= $ang["ALAMAT"]?>" readonly/>

                </div>
                <div class="form-group">
                <label>Pendidikan Terakhir</label>
                    <input class="form-control" type="text" name="NO_HP"  value="<?= $ang["PENDIDIKAN_TERAKHIR"]?>" readonly/>
 
                </div>
                <div class="form-group">
                    <label>No.Hp</label>
                    <input class="form-control" type="number" name="NO_HP"  value="<?= $ang["NO_HP"]?>" readonly/>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Prodi</label>
                    <input class="form-control" type="text" name="PEKERJAAN_PRODI" value="<?= $ang["PEKERJAAN_PRODI"]?>" readonly/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="EMAIL" value="<?= $ang["EMAIL"]?>" readonly/>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="FOTO" />
                </div>
             
              </form>

              </div>
            </div>

          </div>
          </div>

          
