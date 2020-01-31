<?php
  include_once "koneksi.php";
  session_start();
  $result1 = mysqli_query($koneksi, "SELECT * FROM tb_dokter WHERE NAMA_DOKTER='".$_SESSION['username']."'");
  $row = mysqli_fetch_array($result1);
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
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php" >Klinik Pratama</a>
            </div>
            <?php
                if ($row!=""){
                  echo '<div style="color: white; padding: 15px 50px 5px 50px; float: left; font-size: 16px;">'.$row['NAMA_DOKTER'].'</div>';
                  echo '<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Log Out</a></div>';
                }
            ?>
            </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				              <li class="text-center">
                    <img src="assets/img/dokter.jpg" class="user-image img-responsive"/>
					             </li>
                    <li>
                        <a  href="?page=dashborddokter"> Dashboard</a>
                    </li>
                    <li>
                        <a  href="?page=periksadokter"> Berobat</a>
                    </li>
                    <li>
                        <a  href="?page=laporan"> Laporan Rujukan</a>
                    </li>
                    <li>
                        <a  href="?page=laporanberobat"> Laporan Berobat</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    <?php

                      $page = @$_GET['page'];
                      $aksi = @$_GET['aksi'];
                      if ($page == "dashborddokter") {
                        include "page/dashborddokter.php";
                      }
                        elseif ($page == "periksadokter") {
                        if ($aksi == "") {
                          include "page/periksa/periksadokter.php";
                          }
                          if ($aksi == "input") {
                           include "page/periksa/rujukan.php";
                          }
                          elseif ($aksi == "cetak") {
                            include "page/periksa/cetakrujukan.php";
                          }
                        
                          else if ($aksi == "detail") {
                            include "page/periksa/detail.php";
                          }
                        }
                        elseif ($page == "detail") {
                           if ($aksi == "resepobat") {
                            include "page/periksa/resep/resepobat.php";
                          }  
                          elseif ($aksi == "racikan") {
                            include "page/periksa/resep/resepracikan.php";
                          }
                          if ($aksi == "hapusresep") {
                            include "page/periksa/resep/hapus.php";
                          }
                        }
                        elseif ($page == "resepobat") {
                          if ($aksi == "hapus") {
                            include "page/periksa/hapus.php";
                          }
                      
                        }
                        elseif ($page == "obat") {
                          if ($aksi == "") {
                            include "page/obat/obat.php";
                          }
                          elseif ($aksi == "tambah"){
                            include "page/obat/tambah.php";
                          }
                          elseif ($aksi == "ubah") {
                            include "page/obat/ubah.php";
                          }
                          elseif ($aksi == "hapus") {
                            include "page/obat/hapus.php";
                          }
                        }
                        elseif ($page == "laporan") {
                          if ($aksi == "") {
                            include "page/laporan/laporanrujukan.php";
                          }
                        }
                        elseif ($page == "laporanberobat") {
                          if ($aksi == "") {
                            include "page/laporan/laporanberobat.php";
                          }
                          elseif ($aksi == "detail") {
                            include "page/laporan/detail.php";
                          }
                        }
                        
                      



                     ?>

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

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
