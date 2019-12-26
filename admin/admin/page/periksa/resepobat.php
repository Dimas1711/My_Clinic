<?php
require 'functions_admin.php';
$id = $_GET['ID_BEROBAT'];
$berobat = query("SELECT * FROM tb_berobat WHERE ID_BEROBAT = '$id'")[0];
$id_anggota = $berobat["ID_ANGGOTA"];
//memanggil nama dari anggota
$qAnggota = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id_anggota'")[0];
//memanggil nama kliniknya berdasarkan id klinik
$id_klinik = $berobat["ID_KLINIK"];
$kliniknya = query("SELECT * FROM tb_klinik WHERE ID_KLINIK ='$id_klinik'")[0];
$obat = query("SELECT tb_obat.STOK FROM tb_obat");
// $detailnya = query("SELECT tb_detail_berobat.ID_DETAIL FROM tb_detail_berobat WHERE ID_DETAIL");
$tanggal = date("d/m/Y H:i:s");
$table = query("SHOW TABLE STATUS LIKE 'tb_detail_berobat'")[0];
$detailnya = $table["Auto_increment"];



//$stok = $obat["STOK"];
//$detail_berobat = query("SELECT tb_detail_berobat.JUMLAH FROM tb_detail_berobat");
// $jumlah = $detail_berobat["JUMLAH"];
//cek tombol sudah ditekan atau belum

if( isset ($_POST["tambahkan"]) )
{
        //cek data berhasil ditambah?
      // input_detail($_POST);
      // ($detail_berobat > $obat);
      // if ($detail_berobat > $obat) 
      // {
      //  echo "<script> 
      //  alert('Stok Tidak Mencukupi');
      //  </script>";
      // } 
      
       if( input_detail($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil');
                document.location.href = 'home1.php?page=periksa&aksi=resepobat&ID_BEROBAT='$id'';
                </script>";
        }
        else
        {
                echo "<script>alert('Gagal Mengubah Data')</script>";
        }
       
}

if( isset ($_POST["cetak"]))
{
  echo "<script>
                alert('Data Berhasil');
                document.location.href = 'page/periksa/cetakresep.php';
                </script>";
}

if (isset ($_POST["update"])){
  // update_data($_POST);
  if (update_data($_POST) > 0) {
    echo "<script>
    alert('Data Berhasil');
    document.location.href = 'home1.php?page=periksa&aksi=resepobat&ID_BEROBAT='$id'';
    </script>";
  }  
  else{
          echo "<script>alert('Gagal Mengubah Data')</script>";
  }
}
if (isset ($_POST["hapus"])){
  // update_data($_POST);
  //hapus_resep($_POST);
  if (hapus_resep($_POST) > 0) {
    echo "<script>
    alert('Data Berhasil');
    document.location.href = 'home1.php?page=periksa&aksi=resepobat&ID_BEROBAT='$id'';
    </script>";
  }  
  else{
          echo "<script>alert('Gagal Mengubah Data')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Resep Obat</title>
  <script src="jQuery.js"></script>
</head>
<body>
<div class=" col-sm-12 col-xs-12">                     
<div class="panel panel-default">
    <h1>Resep Obat</h1>
    <hr>
    <form method ="POST">
    <div class="form-group">
    <label for="TANGGAL"><b>TANGGAL</b></label> <input type="datetime" name="TANGGAL" value="<?= $tanggal;?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_BEROBAT"><b>ID BEROBAT</b></label> <input type="text" name="ID_BEROBAT" value="<?= $berobat["ID_BEROBAT"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_ANGGOTA"><b>ID ANGGOTA</b></label> <input type="text" name="ID_ANGGOTA" value="<?= $berobat["ID_ANGGOTA"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="NAMA_ANGGOTA"><b>NAMA ANGGOTA</b></label><input type="text" name="NAMA_ANGGOTA" value="<?=$qAnggota["NAMA_ANGGOTA"];?>" readonly>
    </br>
    </div>
   
    <div class="form-group">
    <label for="ID_KLINIK"><b>KLINIK</b></label> <input type="text"  name="NAMA_KLINIK" value="<?=$kliniknya["NAMA_KLINIK"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ALERGI"><b>ALERGI OBAT</b></label> <input type="text" name="ALERGI" value="<?= $berobat["ALERGI_OBAT"];?>" readonly>
    </br>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Obat
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id Obat</th>
                                <th>Nama Obat</th>
                                <th>Stok</th>
                                <th>Exp</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT *FROM tb_obat");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        <td><?php echo $data ['ID_OBAT']; ?></td>
                        <td><?php echo $data ['NAMA_OBAT']; ?></td>
                        <td><?php echo $data ['STOK']; ?></td>
                        <td><?php echo $data ['EXP']; ?></td>
                        
                      </tr>

                      <?php } ?>
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class=" col-sm-12 col-xs-12">     
                
<div class="panel panel-default">
    <h1>Resep Obat</h1>
    <hr>
    <form method ="POST">
    <div class="form-group">
    <label for=">ID_DETAIL"><b>Id Detail</b></label> <input type="text" name="ID_DETAIL" id="ID_DETAIL" value="<?= $detailnya;?>"  readonly>
    </br>
    </div>
    <div class="form-group">
    <label for=">ID_OBAT"><b>Id Obat</b></label> <input type="text" name="ID_OBAT" id="ID_OBAT"  readonly>
    </br>
    </div>
    <div class="form-group">
    <label for=">NAMA_OBAT"><b>Nama Obat</b></label> <input type="text" name="NAMA_OBAT" id="NAMA_OBAT"  readonly>
    
    </div>
    <div class="form-group">
    <input type="number" name="STOK" id="STOK" hidden>
  
    </div>
    <div class="form-group">
    <label for="JUMLAH"><b>Jumlah</b></label><input type="number" name="JUMLAH" id="JUMLAH">
    </br>
    </div>
    <div class="form-group">
    <label for="CATATAN"><b>Dosis</b></label><input type="text" name="CATATAN" id="CATATAN" ></textarea>
    </br>
    </div>

    
    
    
    <div class="form-group">
    <input  type="submit" name="tambahkan" value="Tambahkan" id="tambahkan" class="btn btn-info">
    <input  type="submit" name="update" value="update" id="update" class="btn btn-info" disabled> 
    </div>
</div>
</div>
<!-- </form>  -->
</body>
 <script>
                var table = document.getElementById('dataTables-example');
    
               for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
             document.getElementById("ID_OBAT").value = this.cells[0].innerHTML;
             document.getElementById("NAMA_OBAT").value = this.cells[1].innerHTML;
        };
    }

</script>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
              Data Obat
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="table-beli" >
                        <thead>
                            <tr>
                            <th>Id Detail</th>
                                <th>Id Obat</th>
                                <th>Nama Obat</th>
                                <th hidden>Stok</th>
                                <th>Jumlah</th>
                                <th>Catatan</th>
                                <th>Aksi</th>
                            </tr>
            
            
                        </thead>
                        <tbody>

                      <?php
                     
                       // $sql = $koneksi -> query ("SELECT tb_detail_berobat.ID_BEROBAT , tb_detail_berobat.ID_OBAT , tb_obat.NAMA_OBAT , tb_detail_berobat.JUMLAH FROM tb_detail_berobat,tb_obat WHERE tb_detail_berobat.ID_OBAT = tb_obat.ID_OBAT AND tb_detail_berobat.ID_BEROBAT ='$id'");
                     $sql = $koneksi-> query ("SELECT ID_DETAIL , tb_detail_berobat.ID_OBAT , NAMA_OBAT , STOK , JUMLAH  , DOSIS FROM tb_detail_berobat , tb_obat WHERE tb_detail_berobat.ID_OBAT = tb_obat.ID_OBAT AND ID_BEROBAT ='$id'");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr><td><?php echo $data ['ID_DETAIL']; ?></td>
                            <td><?php echo $data ['ID_OBAT']; ?></td>
                            <td><?php echo $data ['NAMA_OBAT']; ?></td>
                            <td hidden><?php echo $data ['STOK']; ?></td>
                            <td><?php echo $data ['JUMLAH']; ?></td>
                            <td><?php echo $data ['DOSIS']; ?></td>
                        <td>
              
                       
                        <input  type="submit" name="hapus" value="Hapus" id="hapus" class="btn btn-info"> 
                        <!-- <a href="home1.php?page=periksa&aksi=resepobat&ID_BEROBAT='$id_berobat'"onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" class="btn btn-danger">Hapusaa</a> -->
                
                    </td>  
                        
                        
                        
                      </tr>

                      <?php } ?>
                    </tbody>

                    <tbody>
                    
                   
                    
                    </tbody>
                    </table>
                  
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class=" col-sm-12 col-xs-12">   
                  <input  type="submit" name="cetak" value="Cetak Resep Obat" class="btn btn-info">
                  </form>    
                  <script>
                var table = document.getElementById('table-beli');
                var button = document.getElementById("update");
                var button2 = document.getElementById("tambahkan");
    
               for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
            
             document.getElementById("ID_DETAIL").value = this.cells[0].innerHTML;
             document.getElementById("ID_OBAT").value = this.cells[1].innerHTML;
             document.getElementById("NAMA_OBAT").value = this.cells[2].innerHTML;
             document.getElementById("JUMLAH").value = this.cells[4].innerHTML;
             document.getElementById("CATATAN").value = this.cells[5].innerHTML;
             button.disabled = false;
             button2.disabled = true;
        };
        
    }

</script>