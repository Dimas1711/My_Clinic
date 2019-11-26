<?php
include "koneksi.php";
$id = $_GET['ID_OBAT'];
$sql = $koneksi->query("select * from tb_obat where ID_OBAT = '$id'");
$tampil = $sql->fetch_assoc();
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
                    <input class="form-control" name="id_obat"  value="<?php echo $tampil['ID_OBAT']; ?>"/>

                </div>
                <div class="form-group">
                    <label>NAMA OBAT</label>
                    <input class="form-control"  name="nama"  value="<?php echo $tampil['NAMA_OBAT']; ?>"/>
                </div>
                
                <div class="form-group">
                    <label>KETERANGAN</label>
                    <input class="form-control"  name="Keterangan"  value="<?php echo $tampil['Keterangan']; ?>"/>
                </div>
            
                <div class="form-group">
                    <label>HARGA</label>
                    <input class="form-control" type="number" name="harga"  value="<?php echo $tampil['HARGA']; ?>"/>
                </div>
                
                <div class="form-group">
                    <label>STOK</label>
                    <input class="form-control" type="number" name="stok"  value="<?php echo $tampil['STOK']; ?>"/>
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
          include "koneksi.php";
          $id = @$_POST ['id_obat'];
          $nama = @$_POST ['nama'];
          $ket = @$_POST ['Keterangan'];
          $harga = @$_POST ['harga'];
          $stok = @$_POST ['stok'];
          $simpan = @$_POST ['simpan'];
 

          if ($simpan) {
            $sql = $koneksi -> query ("update tb_obat set ID_OBAT = '$id' ,	NAMA_OBAT = '$nama', Keterangan = '$ket', HARGA = '$harga', STOK = '$stok' where ID_OBAT = '$id'");
            if ($sql) {
              ?>
              <script type="text/javascript">
                  alert ("Update Berhasil");
                  window.location.href="?page=obat";
              </script>
              <?php
            }
          }

           ?>
