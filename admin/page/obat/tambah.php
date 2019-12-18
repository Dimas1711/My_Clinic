<?php
          require 'functions_admin.php';

          //cek tombol sudah ditekan atau belum
          if( isset ($_POST["submit"]) )
          {
           
                  //cek data berhasil ditambah?
                  if( tambahobat($_POST) > 0 )
                  {
                          echo "<script>
                          alert('Data Berhasil Ditambahkan');
                          document.location.href = 'home.php?page=obat';
                          </script>";
                  }
                  else
                  {
                          echo "<script>alert('Gagal Menambahkan Data')</script>";
                  }
                 
          }
      
          
          $carikode = mysqli_query($conn, "SELECT max(ID_OBAT) FROM tb_obat") or die(mysqli_error($conn));
          $datakode = mysqli_fetch_array($carikode);
          if($datakode)
          {
                  $nilaikode = substr($datakode[0], 2);
                  $kode = (int) $nilaikode;
                  $kode = $kode + 1;
                  $hasilkode = "OB" .str_pad($kode, 4 , "0", STR_PAD_LEFT);
          }
          else
          {
                  $hasilkode = "OB0001";
          }
          ?>
<div class="panel panel-default">
    <div class="panel-heading">
      Tambah Data Obat
    </div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form method="post">
                <div class="form-group">
                    <label>ID OBAT</label>
                    <input class="form-control" name="ID_OBAT" value="<?php echo $hasilkode?>" readonly />

                </div>
                <div class="form-group">
                    <label>NAMA OBAT</label>
                    <input class="form-control" name="NAMA_OBAT"  />

                    </div>
                <div class="form-group">
                    <label>KETERANGAN</label>
                    <input class="form-control" name="KETERANGAN"  />

                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name="HARGA" type="number"/>

                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input class="form-control" name="STOK" type="number"/>

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
          $id = @$_POST ['id_obat'];
          $nama = @$_POST ['nama_obat'];
          $ket = @$_POST ['Keterangan'];
          $harga = @$_POST ['harga'];
          $stok = @$_POST ['stok'];
          $simpan = @$_POST ['simpan'];


          if ($simpan) {
            $sql = $koneksi -> query ("insert into tb_obat(ID_OBAT , NAMA_OBAT , Keterangan, HARGA , STOK)
            values('$id' , '$nama' , '$ket' ,'$harga' , '$stok')");
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
