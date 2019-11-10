<?php

$conn = mysqli_connect("localhost","root","","coba");

$query = 
mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="profil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
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
                      <a class="dropdown-item" href="data_klinik.php">Data Klinik</a>
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

</header>


    <section>
      <h2>Edit Profil</h2>
      <table>
          <tr>
              <td>ID Anggota</td>
              <td>:</td>
              <td>Klinik Rawat Jalan Pratama Politeknik Negeri Jember</td>
          </tr>
          <tr>
              <td>Password</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
          <tr>
              <td>NO.KTP/NIM/NIP</td>
              <td>:</td>
              <td>Ir. Nanang Dwi Wahyono, M.M.</td>
          </tr>
          <tr>
              <td>Nama Anggota</td>
              <td>:</td>
              <td>Jalan Mastrip No. 64 Jember 68101</td>
          </tr>
          <tr>
              <td>Jenis Anggota</td>
              <td>:</td>
              <td>(0331) 333532 – 34</td>
          </tr>
          <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td>(0331) 333531</td>
          </tr>
          <tr>
              <td>Tempat Tanggal Lahir</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
          <tr>
              <td>Alamat</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
          <tr>
              <td>Pendidikan Terakhir</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
          <tr>
              <td>No.HP</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
          <tr>
              <td>Pekerjaan/Prodi</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
          <tr>
              <td>Email</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
          <tr>
              <td>Foto</td>
              <td>:</td>
              <td>politeknik@polije.ac.id</td>
          </tr>
      </table>
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
