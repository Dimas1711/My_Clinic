<?php
  include_once "koneksi.php";
  $result1 = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE NAMA_KARYAWAN='".$_SESSION['username']."'");
  $row = mysqli_fetch_array($result1);

  $totalperiksa = mysqli_query($koneksi , "SELECT * FROM tb_berobat");
  $d = mysqli_num_rows($totalperiksa);
  
if(!isset($_SESSION["status"])){
    echo "<script>alert('login sek boss')</script>";
    
    header("location:index.php");
  }
?>
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
                   Anda Memiliki Hak Akses Sebagai Perawat
                   </br>
                   Selamat Datang  
                   ' .$row['NAMA_KARYAWAN'].'
                   
                   </div>';
                   
            }
            ?>
            </nav>
          
        <!-- /. NAV SIDE  -->
       
                 <!-- /. ROW  -->
                 <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <div class="text-box" >
                <img src="assets/img/periksa.jpg" class="user-image img-responsive"/>
                    <p class="text-muted">Total Berobat</p>
                    <p class="main-text"><?php echo "$d";?></p>
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
