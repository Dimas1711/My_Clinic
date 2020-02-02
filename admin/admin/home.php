<?php
  include_once "koneksi.php";
  session_start();
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
                
                  echo '<div style="color: white; padding: 15px 50px 5px 50px; float: left; font-size: 16px;">ADMIN</div>';
                  echo '<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Log Out</a></div>';
                
            ?>
            </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				              <li class="text-center">
                    <img src="assets/img/user.png" class="user-image img-responsive"/>
					             </li>
                    <li>
                        <a  href="?page=dashbordadm"> Dashboard</a>
                    </li>
                    <li>
                        <a  href="?page=verifikasi"> Verifikasi Akun Anggota</a>
                    </li>

                    <li>
                        <a  href="?page=anggota"> Data Anggota</a>
                    </li>

                    <li>
                        <a  href="?page=admin"> Data Admin</a>
                    </li>

                    <li>
                        <a  href="?page=dokter"> Data Dokter</a>
                    </li>
                    <li>
                        <a  href="?page=obat"> Data Obat</a>
                    </li>
                    <li>
                        <a  href="?page=pengumuman">Pengumuman</a>
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

                      if ($page == "dashbordadm") {
                        include "page/dashbordadm.php";
                      }
                      elseif ($page == "anggota") {
                        if ($aksi == "") {
                          include "page/anggota/anggota.php";
                        }
                        elseif ($aksi == "tambah") {
                          include "page/anggota/tambah.php";
                        }
                        elseif ($aksi == "hapus") {
                          include "page/anggota/hapus.php";
                        }
                        elseif ($aksi == "ubah") {
                          include "page/anggota/ubah.php";
                        }
                        elseif ($aksi == "ftam") {
                          include "page/anggota/ftam.php";
                        }
                        elseif ($aksi == "detail") {
                          include "page/anggota/detail.php";
                        }
                      }
                        elseif ($page == "admin") {
                          if ($aksi == "") {
                              include "page/admin/admin.php";
                          }
                          elseif ($aksi =="tambah") {
                              include "page/admin/tambah.php";
                          }
                          elseif ($aksi =="ubah") {
                            include "page/admin/ubah.php";
                          }
                          elseif ($aksi == "hapus") {
                            include "page/admin/hapus.php";
                          }
                          
                        }
                        elseif ($page == "dokter") {
                          if ($aksi == "") {
                          include "page/dokter/dokter.php";
                          }
                          elseif ($aksi == "tambah") {
                            include "page/dokter/tambah.php";
                          }
                          elseif ($aksi == "ubah") {
                            include "page/dokter/ubah.php";
                          }
                          elseif ($aksi == "hapus"){
                            include "page/dokter/hapus.php";
                          }
                          elseif ($aksi == "detail"){
                            include "page/dokter/detail.php";
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
                          elseif ($page == "pengumuman") {
                            if ($aksi == "") {
                              include "page/pengumuman/pengumuman.php";
                            }
                            elseif ($aksi == "tambah"){
                              include "page/pengumuman/tambah.php";
                            }
                            elseif ($aksi == "ubah") {
                              include "page/pengumuman/ubah.php";
                            }
                            elseif ($aksi == "hapus") {
                              include "page/pengumuman/hapus.php";
                        }
                      
                      }
                      elseif ($page == "verifikasi") {
                        if ($aksi == "") {
                          include "page/verifikasi/verifikasi.php";
                        }
                        elseif ($aksi == "accept") {
                          include "page/verifikasi/accept.php";
                        }
                        elseif ($aksi == "detail") {
                          include "page/verifikasi/detail.php";
                        }
                        elseif ($aksi == "reject") {
                          include "page/verifikasi/reject.php";
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
