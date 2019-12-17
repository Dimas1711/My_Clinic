<?php
require 'functions_admin.php';
$id = $_GET['ID_BEROBAT'];
$berobat = query("SELECT * FROM tb_berobat WHERE ID_BEROBAT = '$id'")[0];
$id_anggota = $berobat["ID_ANGGOTA"];
$tes = query("SELECT * FROM tb_anggota WHERE ID_ANGGOTA = '$id_anggota'")[0];
$id_klinik = $berobat["ID_KLINIK"];
$kliniknya = query("SELECT * FROM tb_klinik WHERE ID_KLINIK ='$id_klinik'")[0];
//cek tombol sudah ditekan atau belum
if( isset ($_POST["submit"]) )
{
        //cek data berhasil ditambah?
        if( ubahdokter($_POST) > 0 )
        {
            echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'home.php?page=periksa';
                </script>";
        }
        else
        {
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
    <label for="ID_BEROBAT"><b>ID BEROBAT</b></label> <input type="text" name="ID_BEROBAT" value="<?= $berobat["ID_BEROBAT"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="ID_ANGGOTA"><b>ID ANGGOTA</b></label> <input type="text" name="ID_ANGGOTA" value="<?= $berobat["ID_ANGGOTA"];?>" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="NAMA_ANGGOTA"><b>NAMA ANGGOTA</b></label><input type="text" name="NAMA_ANGGOTA" value="<?=$tes["NAMA_ANGGOTA"];?>" readonly>
    </br>
    </div>
   
    <div class="form-group">
    <label for="ID_KLINIK"><b>KLINIK</b></label> <input type="text"  name="NAMA_KLINIK" value="<?=$kliniknya["NAMA_KLINIK"];?>" readonly>
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
                              
                                <th>Nama Obat</th>
                                <th>Keterangan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </tr>
                        </thead>

                    <tbody>

                      <?php
                     
                          $sql = $koneksi -> query ("SELECT *FROM tb_obat");
           
                          while ($data=$sql ->fetch_assoc()) {

                       ?>
                      <tr>
                        
                        <td><?php echo $data ['NAMA_OBAT']; ?></td>
                        <td><?php echo $data ['KETERANGAN']; ?></td>
                        <td><?php echo $data ['HARGA']; ?></td>
                        <td><?php echo $data ['STOK']; ?></td>
                        
                        
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
                  <script>

function addRow(){
    var namaobat = document.getElementById('NAMA_OBAT').value;
    var harga = document.getElementById('HARGA').value;
    var jumlah = document.getElementById('JUMLAH').value;

    var table = document.getElementsById('table-detail')[0];
    var newRow = table.insertRow(table.rows.length/2+1);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    cell1.innerHTML = namaobat;
    cell2.innerHTML = harga;
    cell3.innerHTML = jumlah;

    
}


</script>
                
<div class="panel panel-default">
    <h1>Resep Obat</h1>
    <hr>
    <form method ="POST">
    <div class="form-group">
    <label for=">NAMA_OBAT"><b>Nama Obat</b></label> <input type="text" name="NAMA_OBAT" id="NAMA_OBAT"  readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="HARGA"><b>Harga</b></label> <input type="text" name="HARGA" id="HARGA" readonly>
    </br>
    </div>
    <div class="form-group">
    <label for="JUMLAH"><b>Jumlah</b></label><input type="number" name="JUMLAH" id="JUMLAH" >
    </br>
    </div>
    
    
    <div class="form-group">
    <button onclick="addRow();"> Add</button>
    
    </div>
</div>
</div>
</form> 
</body>
 <script>
                var table = document.getElementById('dataTables-example');
    
               for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
             document.getElementById("NAMA_OBAT").value = this.cells[1].innerHTML;
             document.getElementById("HARGA").value = this.cells[2].innerHTML;
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
                    <table class="table table-striped table-bordered table-hover" id="table-detail">
                        <thead>
                            <tr>
                              
                                <th>Nama Obat</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                            </tr>
            
            
                        </thead>
                        

                    <tbody>

                    
                    </tbody>
                    </table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class=" col-sm-12 col-xs-12">       
              