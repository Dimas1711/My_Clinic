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
                    <input class="form-control" name="id_obat" />

                </div>
                <div class="form-group">
                    <label>NAMA OBAT</label>
                    <input class="form-control" name="nama_obat"  />

                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" name="harga" type="number"/>

                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input class="form-control" name="stok" type="number"/>

                </div>
                <div>
                  <input  type="submit" name="simpan" value="simpan" class="btn btn-primary">
                </div>
              </form>

              </div>
            </div>

          </div>
          </div>

          <?php

          $id = @$_POST ['id_obat'];
          $nama = @$_POST ['nama_obat'];
          $harga = @$_POST ['harga'];
          $stok = @$_POST ['stok'];
          $simpan = @$_POST ['simpan'];


          if ($simpan) {
            $sql = $koneksi -> query ("insert into tb_obat(ID_OBAT , NAMA_OBAT ,HARGA , STOK)
            values('$id' , '$nama' ,'$harga' , '$stok')");
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
