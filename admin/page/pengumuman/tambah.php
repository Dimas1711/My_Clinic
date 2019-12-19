<?php
    require 'functions_admin.php';

    if (isset ($_POST["submit"]) ) 
    {
        if (tambahpengumuman($_POST) > 0)
         {
            echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'home.php?page=pengumuman';
            </script>";
        }
         else {
            echo "<script>alert('Gagal Menambahkan Data')</script>";
        }
    }

    $carikode = mysqli_query($conn, "SELECT max(ID_PENGUMUMAN) FROM tb_pengumuman") or die(mysqli_error($conn));
    $datakode = mysqli_fetch_array($carikode);
    if($datakode)
          {
                  $nilaikode = substr($datakode[0], 2);
                  $kode = (int) $nilaikode;
                  $kode = $kode + 1;
                  $hasilkode = "P" .str_pad($kode, 4 , "0", STR_PAD_LEFT);
          }
          else
          {
                  $hasilkode = "P0001";
          }


?>



<div class="panel panel-default">
    <div class="panel-heading">
      Tambah Pengumuman
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>ID PENGUMUMAN</label>
                    <input class="form-control" name="ID_PENGUMUMAN" value="<?php echo $hasilkode?>" readonly />

                </div>
                <div class="form-group">
                    <label>JUDUL</label>
                    <input class="form-control" name="JUDUL"  />

                    </div>
                <div class="form-group">
                    <label>ISI</label>
                    <input class="form-control" name="ISI"  />

                </div>
               
                <div>
                  <input  type="submit" name="submit" value="simpan" class="btn btn-primary">
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>
          <?php
          include "koneksi.php";
          $id = @$_POST ['ID_PENGUMUMAN'];
          $judul = @$_POST ['JUDUL'];
          $isi = @$_POST ['ISI'];
          $simpan = @$_POST ['simpan'];

          if ($simpan) {
            $sql = $koneksi -> query ("INSERT into tb_pengumuman(ID_PENGUMUMAN , JUDUL , ISI)
            values('$id' , '$judul' , '$isi' )");
            if ($sql) {
              ?>
              <script type="text/javascript">
                  alert ("Data Berhasil");
                  window.location.href="?page=obat";
              </script>
              <?php
            }
          }

           ?>

