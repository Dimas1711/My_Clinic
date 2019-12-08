<?php
require 'functions.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>SI WEB Poliklinik Politeknik Negeri Jember</title>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="LOGO-POLITEKNIK-NEGERI-JEMBER.png" width="70" height="70" class="d-inline-block align-top" alt="">
    <div id="text">
    Klinik Pratama
    <br>
    Politeknik Negeri Jember
    </div>
  </a>

        <nav class="navbar navbar-expand-lg navbar-dard bg-light">
                <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="Home_login.php">Home <span class="sr-only">(current)</span></a>
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
                   
                 

    <!-- AWAL BUTTON LOGIN & NAV USER -->    


     <!-- BELUM LOGIN -->
    <?php
    if(!isset($_SESSION["login"])){?>

    <!-- <a style="display:scroll; position:fixed; bottom:0; right:0;" href="" target="_blank"><img src="chat.png" alt=""></a> -->

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
    <button type="button" name="login" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><a id=lgn href="login.php">Login</a>
    </button>

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
                            <a class="dropdown-item" href="#">Cetak Kartu Berobat</a>
                            <a class="dropdown-item" href="ubahpass.php">Ubah Password</a>
                      </div>
                  </li>
    <li class="nav-item ">
    <button type="button" name= "logout" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><a id=lgn href="logout.php"onclick="return confirm('Apakan Anda Benar Ingin Logout?');">Logout</a>
    </button>
    
    
    
  
    <?php }?>

    <!-- AKHIR BUTTON LOGIN & NAV USER  -->



    <!-- Modal -->
                  </ul>
                </div>
                </div>
              </nav>
              <div class="bd-example">

                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">

                        <div class="carousel-item active">
                          <img src="3.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Ruang pemeriksaan umum</h5>
                            <p>Pasien menceritakan keluhannya serta melakukan tes tensi. Selanjutnya pasien diperiksa</p>

                          </div>

                        </div>
                        <div class="carousel-item ">
                          <img src="2.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Ruang Gigi</h5>
                            <p>Ruang periksa gigi</p>
                          </div>
                        </div>

                        <div class="carousel-item ">
                          <img src="pengambilan obat.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Kamar Obat</h5>
                            <p>Tempat pengambilan obat setelah mendapat resep dari dokter</p>
                          </div>
                        </div>

                        <div class="carousel-item ">
                          <img src="ruang pendaftaran.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Tempat pendaftaran atau registrasi</h5>
                            <p>Tempat pasien mendaftarkan diri terlebih dahulu sebelum melakukan pemeriksaan</p>
                          </div>
                        </div>

                        <div class="carousel-item ">
                          <img src="ruang tunggu.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Ruang Tunggu</h5>
                            <p>Tempat antrian pasien menunggu giliran diperiksa</p>
                          </div>
                        </div>

                        <div class="carousel-item ">
                          <img src="ruang periksa 1.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Ruang Periksa 1</h5>
                            <p>Ruang periksa tertutup untuk pasien dengan kepentingan privasi</p>
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
                  </div>
                  <div class="jumbotron">
                <h1 class="display-5">Apa saja sih fasilitas Klinik Pratama Politeknik Negeri Jember?</h1>
                <p class="lead">Gambar di atas merupakan fasilitas-fasilitas yang ada di Klinik Pratama Politeknik Negeri Jember. Untuk selengkapnya silahkan baca dan simak penjelasan di bawah.</p>
                <hr class="my-4">
                <p>Klinik Pratama Politeknik Negeri Jember mempunyai tiga fasilitas utama, yaitu Poli Umum, Poli Gigi, dan Poli KIA. </p>
                <table>
                  <tr>
                    <td><b>1. Poli Umum</b></td>
                  </tr>
                  <tr>
                    <td>Poli Umum merupakan fasilitas untuk jenis pemeriksaan pasien yang mengalami keluhan yang bersifat umum, misalnya pusing,dll.</td>
                  </tr>
                  <tr>
                    <td><b>2. Poli Gigi</b></td>
                  </tr>
                  <tr>
                    <td>Poli Gigi merupakan fasilitas untuk jenis pemeriksaan pasien yang mengalami keluhan pada gigi.</td>
                  </tr>
                  <tr>
                    <td><b>3. Poli KIA</b></td>
                  </tr>
                  <tr>
                    <td>Poli KIA merupakan fasilitas untuk jenis pemeriksaan pasien pada ibu-ibu hamil yang ingin memeriksa kandungannya.</td>
                  </tr>
                </table>
               
               
                <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
              </div>
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