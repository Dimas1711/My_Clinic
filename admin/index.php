<?php

include_once "koneksi.php";

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
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Klinik Pratama</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				              <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					             </li>
                    <li>
                        <a  href="?page=dashbord"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a  href="?page=anggota"><i class="fa fa-dashboard fa-3x"></i> Data Anggota</a>
                    </li>

                    <li>
                        <a  href="?page=admin"><i class="fa fa-dashboard fa-3x"></i> Data Admin</a>
                    </li>

                    <li>
                        <a  href="?page=dokter"><i class="fa fa-dashboard fa-3x"></i> Data Dokter</a>
                    </li>
                    <li>
                        <a  href="?page=obat"><i class="fa fa-dashboard fa-3x"></i> Data Obat</a>
                    </li>
                    <li>
                        <a  href="?page=periksa"><i class="fa fa-dashboard fa-3x"></i> Periksa</a>
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

                      if ($page == "dashbord") {
                        include "page/dashbord.php";
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
                        }
                        elseif ($page == "periksa") {
                        if ($aksi == "") {
                          include "page/periksa/periksa.php";
                          }
                          if ($aksi == "input") {
                           include "page/periksa/input.php";
                          }
                          if ($aksi == "resepobat") {
                            include "page/periksa/resepobat.php";
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
