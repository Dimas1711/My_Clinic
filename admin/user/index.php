<?php
require 'functions.php';
session_start();

$pengumuman = query("SELECT * FROM tb_pengumuman")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="home.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>SI WEB Poliklinik Politeknik Negeri Jember</title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<!-- <noscript> -->
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/setel.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		<!-- </noscript> -->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

</head>
<!-- <body> -->

<body class="homepage">
    <!-- Image and text -->



    <!-- Header -->
    <div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
							<!-- <h1><a href="#">Colorized</a></h1> -->
							<!-- <span>Design by TEMPLATED</span>
            </div> -->


            <img src="LOGO-POLITEKNIK-NEGERI-JEMBER.png" style="float: left; margin: 0px 9px 3px 0px;" width="80" height="80" class="d-inline-block align-top" alt="">
            <h3><a href="#" style="padding: 35px 0px 0px 90px;">Klinik Pratama Politeknik Negeri Jember</a></h3>
            <!-- <div id="text">
                 Klinik Pratama
                 <br>
                 Politeknik Negeri Jember
            </div> -->
            </div>
            

				</div>
			</div>	


			<div class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>

            <!-- <li class="active"><a href="index.html">Homepage</a></li>
							<li><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="right-sidebar.html">Right Sidebar</a></li>
							<li><a href="two-sidebars.html">Two Sidebars</a></li>
							<li><a href="no-sidebar.html">No Sidebar</a></li> -->


            <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Profil
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="data_klinik.php">Data Klinik</a>
                            <a class="dropdown-item" href="struktur_organisasi.php">Struktur Organisasi</a>
                            <a class="dropdown-item" href="civitas.php">Civitas</a>
                            <a class="dropdown-item" href="lain_tes.php">Tata Tertib</a>
                            <a class="dropdown-item" href="#">Alur Pendaftaran</a>
                      </div>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="fasilitas.php">
                        Fasilitas
                        <span class="sr-only" >
                            (current)
                        </span>
                      </a>
                    </li>

                    <?php
    if(!isset($_SESSION["login"])){?>

    

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          User
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.php"onclick="return confirm('Lakukan Login Terlebih Dahulu Untuk Mengakses Edit Profil');">Edit Profil</a>
                            <a class="dropdown-item" href="login.php"onclick="return confirm('Lakukan Login Terlebih Dahulu Untuk Mengakses Cetak Kartu Berobat');">Cetak Kartu Berobat</a>
                            <a class="dropdown-item" href="login.php"onclick="return confirm('Lakukan Login Terlebih Dahulu Untuk Mengakses Ubah Password');">Ubah Password</a>
                      </div>
                    </li>
    
    <li class="nav-item ">
    <a href="login.php">login</a>
    <!-- <button type="button" name="login" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><a id=lgn href="login.php">Login</a>
    </button> -->
    </li>


						</ul>
					</nav>
			</div>
    </div>
    <?php }?>
	<!-- Header -->
    
    
    

      
      <!-- SUDAH LOGIN -->
    <?php
    if(isset($_SESSION["login"])){?>


    <!--Start of Tawk.to Script-->
<script type="text/javascript">

var Tawk_API=Tawk_API||{};
Tawk_API.visitor = {
name : '<?php echo $_SESSION['user'];?>',
email : '<?php echo $_SESSION['email'];?>'
};

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dce4f60d96992700fc78d18/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

</script>
<!--End of Tawk.to Script-->

    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php 
                            echo $_SESSION['user']; 
                          ?>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="edit_profil.php">Edit Profil</a>
                            <a class="dropdown-item" href="cetak2.php">Cetak Kartu Berobat</a>
                            <a class="dropdown-item" href="ubahpass.php">Ubah Password</a>
                      </div>
                  </li>
    <li class="nav-item ">
    <a href="logout.php">logout</a>
    <!-- <button type="button" name= "logout" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><a id=lgn href="logout.php"onclick="return confirm('Apakan Anda Benar Ingin Logout?');">Logout</a>
    </button> -->
    
    
    
  
    <?php }?>

    <!-- AKHIR BUTTON LOGIN & NAV USER  -->



    <!-- Modal -->
                  </ul>
                </div>
                </div>
              </nav>
              <!-- <div class="bd-example">

                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">

                        <div class="carousel-item active">
                          <img src="2.jpg" class="d-block w-100" alt="..." >
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Kelompok 3</h5>
                          </div>

                        </div>
                        <div class="carousel-item ">
                          <img src="3.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Ini ruang gigi</h5>
                            <p>Ruang periksa gigi</p>
                          </div>
                        </div>

                        <div class="carousel-item ">
                          <img src="1.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Ini ruang gigi</h5>
                            <p>Ruang periksa gigi</p>
                          </div>
                        </div>


                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div> -->
                  <!-- <br> -->
	
	<!-- Banner -->
  <div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

                  
    <!-- Main -->
		<div id="main">
    

<!-- Featured -->


<div class="container">
  <div class="row">
    <section class="4u" > 
      <a href="#" class="image full"><img src="gigi.png" alt="" style="width : 70%;"></a>
      <p>Manfaat Sarang Madu bagi kesehatan.</p>
      Tahukah Anda sarang madu sangat berguna bagi kesehatan. Apa saja sih kegunaan sarang madu? Yuk kita intip!
    </section>
    <section class="4u">
      <a href="#" class="image full"><img src="ini yg umum.png" alt="" style="width : 70%;"></a>
      <p>Bagaimana cara menyimpan madu yang baik dan tepat di dalam kulkas?</p>
    </section>
    <section class="4u">
      <a href="#" class="image full"><img src="umum.png" alt="" style="width : 70%;"></a>
      <p>Berikut merupakan tips dan trik menyimpan madu yang baik dan benar agar tidak hilang khasiatnya</p>
    </section>
  </div>
</div>
<!-- /Featured -->



                  <!-- <div class="macam">
                    <h2> <b> Macam Macam Klinik </b></h2>
                  </div>

                  <div class="card-deck">
                    <div class="card">
                      <img src="ini yg umum.png" class="card-img-top" alt="...">

                    </div>
                    <div class="card">
                      <img src="gigi.png" class="card-img-top" alt="...">

                    </div>
                    <div class="card">
                      <img src="umum.png" class="card-img-top" alt="...">

                    </div> -->




                    <!-- Main Content -->
			<div class="container">
				<div class="divider"></div>
				<div class="row">
					<div class="6u">
						<section>
							<!-- <header>
								<h2>Selamat Datang di Website kami</h2>
              </header> -->
              <div class="row2">
                      <div class="col-sm-6">
                        <div class="tips">
                          <div class="card-body">
                            <h5 class="card-title"><b>Tips For Today</b></h5>
                            <p class="card-text"><?= $pengumuman["JUDUL"]?>
                              <!-- Jember mengalami musim panas yg cukup ekstrim hingga mencapai suhu 37 C .
                              <br>
                              Diharapkan untuk tetap menggunakan masker dan membawa air puth -->
                            </p>
                            <p class="card-text"><?= $pengumuman["ISI"]?>
                            <!-- Tubuh yang sehat selalu didukung dengan asupan kebutuhan nutrisi yang tepat
                            dan tercukupi . Maka cukupilah kebutuhan dasar 4 sehat 5 sempurna dalam makanan
                            yang kamu konsumsi sehari hari . Hindari makanan cepat saji karena tidak baik untuk tubuh -->
                   </p>
                          </div>
                        </div>
                      </div>
                    </div>
							<!-- <p>Selamat datang di Website Sarang Madu Cahya. Website ini merupakan bisnis jual beli sarang madu terpercaya dengan kualitas yang sudah teragreditasi. Banyak konsumen sudah membuktikan kualitas kami, Anda bisa cek di menu testimoni pada slide bar website. Pemesanan dilakukan secara online pada kontak kami, dan pengiriman paling lambat 3-4 hari dan dapat COD untuk Anda yang masih kurang yakin dengan toko kami. Di samping merupakan video profil kami. Silahkan disimak baik-baik untuk lebih meyakinkan Anda terhadap toko kami.</p> -->
						</section>
					</div>
					<div id="sidebar1" class="3u">
						<section>
							<!-- <header>
								<h2>Sidebar #1</h2>
							</header> -->
							<!-- <ul class="default alt">
								<li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
								<li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
								<li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
								<li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
								<li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
							</ul> -->
              <!-- <a href="#" class="image full"><img src="ss.png" height="300" alt=""></a> -->
              <div class="movie">
                      <div class="card1" >
                        <video width="350" height="250" controls preload ><source src="video.mp4" type="video/mp4">
                       </video>
                    </div>
                  </div>
            </section>
          </div>
          
					<div id="sidebar2" class="3u">
						<section>
							<!-- <header>
								<h2>Sidebar #2</h2>
              </header> -->
							<ul class="default alt">
              <div class="jadwal">
                    <div class="card1">
                    Jadwal Praktek :
                    <br>
                    Jam 08.00 - 12.00
                    <br>
                    Jam 13.00 - 15.00
                    <br>
                    istirahat : 12.00 - 13.00
                    </div>
                </div>
								<!-- <li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
								<li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
								<li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
								<li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
								<li class="fa fa-angle-right"><a href="#">Sed quis odio sagittis leo vehicula</a></li> -->
							</ul>
						</section>
					</div>
				</div>
			
			</div>
			<!-- /Main Content -->
			
		</div>
	<!-- /Main -->







<!-- 
                  </div>
                  <div class="row">
                      <div class="col-sm-6">
                        <div class="tips">
                          <div class="card-body">
                            <h5 class="card-title">Tips For Today</h5>
                            <p class="card-text">
                              Jember mengalami musim panas yg cukup ekstrim hingga mencapai suhu 37 C .
                              <br>
                              Diharapkan untuk tetap menggunakan masker dan membawa air puth
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="movie">
                      <div class="card1">
                        <video width="250" height="200" controls preload>
                       </video>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="tips">
                        <div class="card-body">
                          <h5 class="card-title">Tips For Today</h5>
                          <p class="card-text">
                            Tubuh yang sehat selalu didukung dengan asupan kebutuhan nutrisi yang tepat
                            dan tercukupi . Maka cukupilah kebutuhan dasar 4 sehat 5 sempurna dalam makanan
                            yang kamu konsumsi sehari hari . Hindari makanan cepat saji karena tidak baik untuk tubuh
                   </p>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="jadwal">
                    <div class="card1">
                    Jadwal Praktek :
                    <br>
                    Jam 08.00 - 12.00
                    <br>
                    istirahat : 12.00 - 13.00
                    <br>
                    Jam 13.00 - 15.00
                    </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="tips">
                      <div class="card-body">
                        <h5 class="card-title">Alamat</h5>
                        <p class="card-text">
                          JALAN MASTRIP NO. 64 JEMBER 68101<br>
                          <br>
                          TELP. (0331) 333532 – 34 FAKS. (0331) 333531<br>
                          <br>
                          Email: klinikpratamapolije@gmail.com<br>
                          <br>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.421534099274!2d113.72091001451282!3d-8.160214884015843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa6fbfa55a4d83c8c!2sKlinik%20POLIJE!5e0!3m2!1sid!2sid!4v1571283935490!5m2!1sid!2sid"
                   width="1345" height="450" frameborder="2" style="border:1;" allowfullscreen=""></iframe>
                  </div> -->


                  
                  <footer >
                    JALAN MASTRIP NO. 64 JEMBER 68101<br>
                    <br>
                    TELP. (0331) 333532 – 34 FAKS. (0331) 333531<br>
                    <br>
                    Email: klinikpratamapolije@gmail.com<br>
                    <br>

                  </footer>




    <script src="js/jQuery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
