<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
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
                            <a class="nav-link" href="lain-lain.php">
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
                  </li>
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
                          <img src="2.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Kelompok 3</h5>

                          </div>

                        </div>
                        <div class="carousel-item">
                          <img src="3.jpg" class="d-block w-100" alt="...">
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
                  </div>
                  <br>
                  <div class="macam">
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

                    </div>

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
                   width="1330" height="450" frameborder="2" style="border:1;" allowfullscreen=""></iframe>
                  </div>
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
