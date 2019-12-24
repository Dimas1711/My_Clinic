<?php
require 'functions_admin.php';
$id = $_GET['ID_OBAT'];
$obat = query("SELECT * FROM tb_obat WHERE ID_OBAT = '$id'")[0];

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubahobat($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'home.php?page=obat';
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
      Ubah Data Obat
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>ID OBAT</label>
                    <input class="form-control" name="ID_OBAT"  value="<?= $obat["ID_OBAT"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>NAMA OBAT</label>
                    <input class="form-control"  name="NAMA_OBAT" value="<?= $obat["NAMA_OBAT"];?>"/>
                </div>
                
                
                <div class="form-group">
                    <label>STOK</label>
                    <input class="form-control" type="number" name="STOK" value="<?= $obat["STOK"];?>"/>
                </div>
                <div class="form-group">
                    <label>EXP</label>
                    <input class="form-control"  name="EXP" type="date" value="<?= $obat["EXP"];?>"/>
                </div>
                <div>
                  <button  type="submit" name="submit" value="simpan" class="btn btn-primary">Ubah</button>
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

         
