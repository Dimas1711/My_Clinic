<?php
  include_once "koneksi.php";
  $result1 = mysqli_query($koneksi, "SELECT NAMA_KLINIK , NAMA_DOKTER FROM tb_dokter , tb_klinik WHERE tb_klinik.ID_KLINIK = tb_dokter.ID_KLINIK AND NAMA_DOKTER='".$_SESSION['username']."'");
  $row = mysqli_fetch_array($result1);
  $totalanggota = mysqli_query($koneksi , "SELECT * FROM tb_anggota WHERE STATUS = 'ACCEPT'");
  $d = mysqli_num_rows($totalanggota);

  $totaldokter = mysqli_query($koneksi , "SELECT * FROM tb_dokter");
  $e = mysqli_num_rows($totaldokter);

  $totalverifikasi = mysqli_query($koneksi , "SELECT * FROM tb_anggota WHERE STATUS = 'PENDING'");
  $f = mysqli_num_rows($totalverifikasi);

  $totalperiksa = mysqli_query($koneksi , "SELECT * FROM tb_berobat");
  $g = mysqli_num_rows($totalperiksa);
  $new = mysqli_query($koneksi , "SELECT * FROM tb_berobat WHERE STATUS = 'pending'");
  $h = mysqli_num_rows($new);
  if(!isset($_SESSION["status"])){
    echo "<script>alert('login sek boss')</script>";
    
    header("location:index.php");
  }
?>
<!-- sedfgtyhuny -->


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Klinik Pratama</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0 ; background-color : white">
         
            <?php
                if ($row!=""){
                  echo 
                   '<div style="color: black; padding: 15px 50px 5px 50px; float: left; font-size: 32px;  font-family: "Arial, Helvetica, sans-serif";>
                   Anda Memiliki Hak Akses Sebagai Dokter '.$row['NAMA_KLINIK']. '
                   </br>
                   Selamat Datang  
                   ' .$row['NAMA_DOKTER'].'
                  
                   </div>';
                   
            }
            ?>
            </nav>
          
        <!-- /. NAV SIDE  -->
       
                 <!-- /. ROW  -->
               
                 <div class="col-md-3 col-sm-6 col-xs-6">     
                 <div class="panel panel-back noti-box">
            
                <div class="text-box" >
                <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    <p class="text-muted"><b>Total Anggota</b></p>
                    <p class="main-text"><?php echo "$d";?>
                </div>
             </div>
		     </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <div class="text-box" >
                <img src="assets/img/dokter.jpg" class="user-image img-responsive" style= "width:65%"/>
                    <p class="text-muted">Total Dokter</p>
                    <p class="main-text"><?php echo "$e";?></p>
                </div>
             </div>
		     </div>
      <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <div class="text-box" >
                <img src="assets/img/verif.png" class="user-image img-responsive" style= "width:65%"/>
                    <p class="text-muted">Total Berobat</p>
                    <p class="main-text"><?php echo "$g";?></p>
                </div>
             </div>
		     </div>
         <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <div class="text-box" >
                <img src="assets/img/yoo.png" class="user-image img-responsive" style= "width:65%"/>
                    <p class="text-muted">Berobat Baru</p>
                    <p class="main-text"><?php echo "$h";?></p>
                </div>
             </div>
		     </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->


    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
