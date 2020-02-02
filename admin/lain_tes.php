<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="lain_tes.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    
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
      <!-- <link rel="stylesheet" href="css/lain_tes.css" /> -->
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/setel.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		<!-- </noscript> -->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
<body  style="background:white;">
    <div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
            <img src="LOGO-POLITEKNIK-NEGERI-JEMBER.png" style="float: left; margin: 0px 9px 3px 0px;" width="80" height="80" class="d-inline-block align-top" alt="">
            <h1><a href="#" style="padding: 0px 0px 0px 90px;">Klinik Pratama Politeknik Negeri Jember</a></h1>
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
            <li class="nav-item ">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Profil
                      </a>
                      <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="data_klinik.php">Data Klinik</a>
                            <a class="dropdown-item" href="struktur_organisasi.php">Struktur Organisasi</a>
                            <a class="dropdown-item" href="civitas.php">Civitas</a>
                            <a class="dropdown-item" href="lain_tes.php">Tata Tertib</a>
                            <a class="dropdown-item" href="Alur_Berobat.php">Alur Berobat</a>
                      </div>
                    </li>
                    <li class="nav-item  ">
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
    <a href="login2.php">login</a>
    <!-- <button type="button" name="login" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><a id=lgn href="login.php">Login</a>
    </button> -->
    </li>

						</ul>
					</nav>
			</div>
    </div>
	<!-- Header -->



    <!-- AWAL BUTTON LOGIN & NAV USER -->    


     <!-- BELUM LOGIN -->
    
    
    <?php }?>
    
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
	<!-- Banner -->
  <div id="banner">
			<div class="container">
			</div>
		</div>
  <!-- /Banner -->


  

<section>
      <h2 style="text-align: center; background-color: white; margin: 50px 500px; font-size: 50px; opacity: 0.8;">Tata Tertib</h2>
      <ul style=" background-color: rgb(255, 255, 255); margin-left: 150px; margin-right: 150px; padding-left: 150px; line-height:1.7; opacity: 0.9; font-size: 20px;list-style-type:square;">
                <p><b>Untuk Pengunjung, Penunggu, dan Pasien :</b></p>
                <li>Waktu berkunjung : Siang pukul 10.00 - 12.00 & Sore pukul 17.00 - 19.00</li>
                <li>Dilarang merokok diarea rumah sakit</li>
                <li>Anak usia dibawah 10 tahun tidak diperkenankan dibawa berkunjung ke rumah sakit</li>
                <li>Pasien boleh ditunggu oleh keluarga bila telah diberi ijin dengan menunjukan kartu tunggu. Jumlah penunggu maksimal 2 orang</li>            
                <li>Tidak merusak fasilitas yang ada di rumah sakit</li>
                <li>Pengunjung dan penunggu dilarang duduk di tempat tidur kosong / tempat tidur pasien / kursi roda maupun kereta dorong</li>
                <li>Dilarang membawa tikar, karpet, kasur, bantal dan guling</li>
                <li>Dilarang menjemur pakaian di lingkungan rumah sakit</li>
                <li>Dilarang membuat gaduh dan keributan di lingkungan rumah sakit</li>
                <li>Dilarang membawa senjata tajam / senjata api</li>
                <li>Gunakan bel bantuan sesuai dengan kebutuhan, 1-2 kali bel, tunggu 3-5 menit</li>
</ul> 
</section>



<footer>
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
