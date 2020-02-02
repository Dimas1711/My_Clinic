<?php
require 'functions_admin.php';
$id = $_GET['ID_PENGUMUMAN'];
$pengumuman = query("SELECT * FROM tb_pengumuman WHERE ID_PENGUMUMAN = '$id'")[0];

//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubahpengumuman($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'home.php?page=pengumuman';
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
      Ubah Data Pengumuman
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>ID PENGUMUMAN</label>
                    <input class="form-control" name="ID_PENGUMUMAN"  value="<?= $pengumuman["ID_PENGUMUMAN"];?>" readonly/>

                </div>
                <div class="form-group">
                    <label>JUDUL</label>
                    <input class="form-control"  name="JUDUL" value="<?= $pengumuman["JUDUL"];?>"/>
                </div>
                
                <div class="form-group">
                    <label>ISI</label>
                    <Textarea class="form-control"  name="ISI" ><?php echo $pengumuman["ISI"];?></Textarea>
                </div>
            
                <div>
                  <button  type="submit" name="submit" value="simpan" class="btn btn-primary">Ubah</button>
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

         