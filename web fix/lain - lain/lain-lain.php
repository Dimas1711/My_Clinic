<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <header>
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
                        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Data Klinik</a>
                              <a class="dropdown-item" href="#">Struktur Organisasi</a>
                              <a class="dropdown-item" href="#">Civitas</a>
                        </div>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="#">
                          Fasilitas
                          <span class="sr-only" >
                              (current)
                          </span>
                        </a>
                      </li>
                      <li class="nav-item ">
                              <a class="nav-link" href="#">
                                Lain Lain
                              </a>
                              
                      <li class="nav-item ">
                        <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Login
      </button>
  
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Anggota</label>
                  <input type="email" class="form-control" id="exampleInputIDAnggota1" placeholder="ID Anggota">
  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
  
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Login</button>
              </div>
            </div>
            </div>
      </div>

    </header>
    
    <!-- section -->
    <section>
            <h2 class="dataklinik">Tata Tertib</h2>
            <ul>
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

    <!-- footer -->
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