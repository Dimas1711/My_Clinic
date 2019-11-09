<?php
$conn = mysqli_connect("localhost","root","","coba");

function registrasi()
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
  $foto = upload();
  
  function upload($foto)
  {
  $nama_file = $_FILES['foto']['nama'];
  $tmp_file = $_FILES['foto']['tmp'];
  $foto_baru = date('dmYHis').$nama_file;

  $path = "img/".$foto_baru;

  move_uploaded_file($tmp_file, $path);
  }

        $query="INSERT INTO tb_anggota VALUES
        ('$id_anggota','$password','$ktp','$nama','$jenis','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp','$pekerjaan','$email','$foto')";

        $sql= mysqli_query($conn, $query);

        if($sql)
        {
                echo 
                "<script>
                        alert('Data Telah Berhasil Disimpan!')
                </script>";  
        }
        else
        {
                echo
                "<script>
                        alert('Terjadi Kesalahan Saat Menyimpan Data')
                </script>"; 
        }
  
