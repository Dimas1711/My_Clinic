<?php
$conn = mysqli_connect("localhost","root","","coba");

function registrasi($data)
{
  global $conn;
  
  $id_anggota = $_POST["id_anggota"];
  $password = $_POST["password"];
  $ktp = $_POST["ktp"];
  $nama = $_POST["nama"];
  $jenis = $_POST["jenis"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $ttl = $_POST["ttl"];
  $alamat = $_POST["alamat"];
  $pendidikan = $_POST["pendidikan"];
  $nohp = $_POST["nohp"];
  $pekerjaan = $_POST["pekerjaan"];
  $email = $_POST["email"];
  $foto = $_POST["foto"];
  
  
  mysqli_query($conn, "INSERT INTO tb_anggota VALUES
          ('$id_anggota','$password','$ktp','$nama','$jenis','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp','$pekerjaan','$email','$foto')");

          return mysqli_affected_rows($conn);
}
?>