<?php
$conn = mysqli_connect("localhost","root","","pdm_klinik1");

function query($query)
{
    global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) )
        {
            $rows[] = $row;
        }
        return $rows;
}

//tambah data
function tambah($data)
{
    global $conn;
        $id_anggota = htmlspecialchars($data["ID_ANGGOTA"]);
        $password = htmlspecialchars($data["PASSWORD"]);
        $ktp = htmlspecialchars($data["NO_KTP_NIM_NIP"]);
        $nama = htmlspecialchars($data["NAMA_ANGGOTA"]);
        $jenis = htmlspecialchars($data["JENIS_ANGGOTA"]);
        $jenis_kelamin = htmlspecialchars($data["JENIS_KELAMIN"]);
        $ttl = htmlspecialchars($data["TEMPAT_TANGGAL_LAHIR"]);
        $alamat = htmlspecialchars($data["ALAMAT"]);
        $pendidikan = htmlspecialchars($data["PENDIDIKAN_TERAKHIR"]);
        $nohp = htmlspecialchars($data["NO_HP"]);
        $pekerjaan = htmlspecialchars($data["PEKERJAAN_PRODI"]);
        $email = htmlspecialchars($data["EMAIL"]);

        //upload foto
        $foto = upload();
        if( !$foto )
        {
            return false;
        }

        $qu = mysqli_query($conn, "INSERT INTO tb_anggota VALUES ('$id_anggota','$password','$ktp','$nama','$jenis','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp','$pekerjaan','$email','$foto')");

        return $qu;


}

function upload()
{
    $namafile = $_FILES["FOTO"]['name'];
    $ukuranfile = $_FILES["FOTO"]['size'];
    $error = $_FILES["FOTO"]['error'];
    $tmpname = $_FILES["FOTO"]['tmp_name'];


    //cek apakah ada foto di upload
    if($error === 4)
    {
        echo "<script>
                alert('Pilih foto terlebih dahulu!');
             </script>";
        return false;
    }

    //cek apakah yang diupload adalah foto 
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if( !in_array($ekstensigambar, $ekstensigambarvalid) )
    {
        echo "<script>
                alert('Yang anda upload bukan Foto!');
              </script>";
        return false;
    }

    // $ukurangambar = ['> 2097152'];
    // if( in_array($ukuranfile, $ukurangambar) )
    // {
    //     echo "<script>
    //             alert('Ukuran Foto Terlalu Besar, Gunakan Maksimal 2MB');
    //           </script>";
    //     return false;

    // }

    //foto lolos
    //generate nama baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;



    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;


}

//hapus data
// function hapus($id)
// {
//     global $conn;
//         mysqli_query($conn, "DELETE FROM tb_anggota WHERE ID_ANGGOTA = '$id'");

//         return mysqli_affected_rows($conn);

// }

//ubah data
function ubah($data)
{
    global $conn;
        $id_anggota = htmlspecialchars($data["ID_ANGGOTA"]);
        $password = htmlspecialchars($data["PASSWORD"]);
        $ktp = htmlspecialchars($data["NO_KTP_NIM_NIP"]);
        $nama = htmlspecialchars($data["NAMA_ANGGOTA"]);
        $jenis = htmlspecialchars($data["JENIS_ANGGOTA"]);
        $jenis_kelamin = htmlspecialchars($data["JENIS_KELAMIN"]);
        $ttl = htmlspecialchars($data["TEMPAT_TANGGAL_LAHIR"]);
        $alamat = htmlspecialchars($data["ALAMAT"]);
        $pendidikan = htmlspecialchars($data["PENDIDIKAN_TERAKHIR"]);
        $nohp = htmlspecialchars($data["NO_HP"]);
        $pekerjaan = htmlspecialchars($data["PEKERJAAN_PRODI"]);
        $email = htmlspecialchars($data["EMAIL"]);
        $fotolama = htmlspecialchars($data["GAMBARLAMA"]);

        

        //cek apa pilih gambar baru atau tidak
        if( $_FILES["FOTO"]['error'] === 4 )
        {
            $foto = $fotolama;
        }
        else
        {
            $foto = upload();
        }
               

        $query="UPDATE tb_anggota SET

                PASSWORD = '$password',
                NO_KTP_NIM_NIP = '$ktp',
                NAMA_ANGGOTA = '$nama',
                JENIS_ANGGOTA = '$jenis',
                JENIS_KELAMIN = '$jenis_kelamin',
                TANGGAL_LAHIR = '$ttl',
                ALAMAT = '$alamat',
                PENDIDIKAN_TERAKHIR = '$pendidikan',
                NO_HP = '$nohp',
                PEKERJAAN_PRODI = '$pekerjaan',
                EMAIL = '$email',
                FOTO = '$foto' 
                WHERE ID_ANGGOTA = '$id_anggota'
                ";

        $sql= mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

//tambah data dokter
function tambahdokter($data)
{
    global $conn;
        $id_dokter = htmlspecialchars($data["ID_DOKTER"]);
        $poli = htmlspecialchars($data["ID_KLINIK"]);
        $password = htmlspecialchars($data["PASSWORD"]);
        $ktp = htmlspecialchars($data["NO_KTP_NIM_NIP"]);
        $nama = htmlspecialchars($data["NAMA_DOKTER"]);
        $jenis_kelamin = htmlspecialchars($data["JENIS_KELAMIN"]);
        $ttl = htmlspecialchars($data["TEMPAT_TANGGAL_LAHIR"]);
        $alamat = htmlspecialchars($data["ALAMAT"]);
        $pendidikan = htmlspecialchars($data["PENDIDIKAN_TERAKHIR"]);
        $nohp = htmlspecialchars($data["NO_HP"]);
        

        $qu = mysqli_query($conn, "INSERT INTO tb_dokter VALUES ('$id_dokter','$poli','$password','$ktp','$nama','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp')");

        return $qu;
}

//ubah data dokter
function ubahdokter($data)
{
    global $conn;
    $id_dokter = htmlspecialchars($data["ID_DOKTER"]);
    $poli = htmlspecialchars($data["ID_KLINIK"]);
    $password = htmlspecialchars($data["PASSWORD"]);
    $ktp = htmlspecialchars($data["NO_KTP_NIM_NIP"]);
    $nama = htmlspecialchars($data["NAMA_DOKTER"]);
    $jenis_kelamin = htmlspecialchars($data["JENIS_KELAMIN"]);
    $ttl = htmlspecialchars($data["TEMPAT_TANGGAL_LAHIR"]);
    $alamat = htmlspecialchars($data["ALAMAT"]);
    $pendidikan = htmlspecialchars($data["PENDIDIKAN_TERAKHIR"]);
    $nohp = htmlspecialchars($data["NO_HP"]);

               

        $query="UPDATE tb_dokter SET

                ID_KLINIK = '$poli',
                PASSWORD = '$password',
                NO_KTP_NIM_NIP = '$ktp',
                NAMA_DOKTER = '$nama',
                JENIS_KELAMIN = '$jenis_kelamin',
                TANGGAL_LAHIR = '$ttl',
                ALAMAT = '$alamat',
                PENDIDIKAN_TERAKHIR = '$pendidikan',
                NO_HP = '$nohp' 
                WHERE ID_DOKTER = '$id_dokter'
                ";

        $sql= mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

//tambah data admin
function tambahadmin($data)
{
    global $conn;
        $id_admin = htmlspecialchars($data["ID_ADMIN"]);
        $password = htmlspecialchars($data["PASSWORD"]);
        $ktp = htmlspecialchars($data["NO_KTP_NIM_NIP"]);
        $nama = htmlspecialchars($data["NAMA_ADMIN"]);
        $jenis_kelamin = htmlspecialchars($data["JENIS_KELAMIN"]);
        $ttl = htmlspecialchars($data["TEMPAT_TANGGAL_LAHIR"]);
        $alamat = htmlspecialchars($data["ALAMAT"]);
        $pendidikan = htmlspecialchars($data["PENDIDIKAN_TERAKHIR"]);
        $nohp = htmlspecialchars($data["NO_HP"]);
        

        $qu = mysqli_query($conn, "INSERT INTO tb_admin VALUES ('$id_admin','$password','$ktp','$nama','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp')");

        return $qu;
}

//ubah data admin
function ubahadmin($data)
{
    global $conn;
    $id_admin = htmlspecialchars($data["ID_ADMIN"]);
    $password = htmlspecialchars($data["PASSWORD"]);
    $ktp = htmlspecialchars($data["NO_KTP_NIM_NIP"]);
    $nama = htmlspecialchars($data["NAMA_ADMIN"]);
    $jenis_kelamin = htmlspecialchars($data["JENIS_KELAMIN"]);
    $ttl = htmlspecialchars($data["TEMPAT_TANGGAL_LAHIR"]);
    $alamat = htmlspecialchars($data["ALAMAT"]);
    $pendidikan = htmlspecialchars($data["PENDIDIKAN_TERAKHIR"]);
    $nohp = htmlspecialchars($data["NO_HP"]);

               

        $query="UPDATE tb_admin SET

                PASSWORD = '$password',
                NO_KTP_NIM_NIP = '$ktp',
                NAMA_ADMIN = '$nama',
                JENIS_KELAMIN = '$jenis_kelamin',
                TANGGAL_LAHIR = '$ttl',
                ALAMAT = '$alamat',
                PENDIDIKAN_TERAKHIR = '$pendidikan',
                NO_HP = '$nohp'
                WHERE ID_ADMIN = '$id_admin'
                ";

        $sql= mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

//tambah data obat
function tambahobat($data)
{
    global $conn;
        $id_obat = htmlspecialchars($data["ID_OBAT"]);
        $nama = htmlspecialchars($data["NAMA_OBAT"]);
        $keterangan = htmlspecialchars($data["KETERANGAN"]);
        $harga = htmlspecialchars($data["HARGA"]);
        $stok = htmlspecialchars($data["STOK"]);
        

        $qu = mysqli_query($conn, "INSERT INTO tb_obat VALUES ('$id_obat','$nama','$keterangan','$harga','$stok')");

        return $qu;
}

//ubah data obat
function ubahobat($data)
{
    global $conn;
        $id_obat = htmlspecialchars($data["ID_OBAT"]);
        $nama = htmlspecialchars($data["NAMA_OBAT"]);
        $keterangan = htmlspecialchars($data["KETERANGAN"]);
        $harga = htmlspecialchars($data["HARGA"]);
        $stok = htmlspecialchars($data["STOK"]);

               

        $query="UPDATE tb_obat SET

                NAMA_OBAT = '$nama',
                KETERANGAN = '$keterangan',
                HARGA = '$harga',
                STOK = '$stok'
                WHERE ID_OBAT = '$id_obat'
                ";

        $sql= mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}
function ubahpengumuman($data)
{
    global $conn;
        $id_pengumuman = htmlspecialchars($data["ID_PENGUMUMAN"]);
        $judul = htmlspecialchars($data["JUDUL"]);
        $isi = htmlspecialchars($data["ISI"]);
        

               

        $query="UPDATE tb_pengumuman SET

                JUDUL = '$judul',
                ISI = '$isi'
                WHERE ID_PENGUMUMAN = '$id_pengumuman'
                ";

        $sql= mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}
function input_periksa($data){

    global $conn;
    $id_berobat = htmlspecialchars($data["ID_BEROBAT"]);
    $id_klinik = htmlspecialchars($data["POLI"]);
    $id_anggota = htmlspecialchars($data["ID_ANGGOTA"]);
    $tensi = htmlspecialchars($data["TENSI"]);   
    $anamnesa = htmlspecialchars($data["ANAMNESA"]);     
    $diagnosa = htmlspecialchars($data["DIAGNOSA"]);
    $alergi = htmlspecialchars($data["ALERGI"]);
    $catatan = htmlspecialchars($data["CATATAN"]);                  
    $tanggal = htmlspecialchars($data["TGL"]);


    $qu = mysqli_query($conn, "INSERT INTO tb_berobat VALUES ('$id_berobat', '$id_klinik','$id_anggota'  , '$tensi' ,'$anamnesa',' $diagnosa',' $catatan',' $alergi','$tanggal')");
    // echo "INSERT INTO tb_berobat VALUES ('$id_berobat', '$id_klinik','$id_anggota'  , '$tensi' ,'$anamnesa',' $diagnosa','$tanggal')";
    return $qu;
    
}

function tambahpengumuman($data)
{
    global $conn;
        $id_pengumuman = htmlspecialchars($data["ID_PENGUMUMAN"]);
        $judul = htmlspecialchars($data["JUDUL"]);
        $isi = htmlspecialchars($data["ISI"]);
     
        

        $qu = mysqli_query($conn, "INSERT INTO tb_pengumuman VALUES ('$id_pengumuman','$judul','$isi')");

        return $qu;
}
function input_rujukan($data){

    global $conn;
    $id_rujukan = htmlspecialchars($data["ID_RUJUKAN"]);
    $id_berobat = htmlspecialchars($data["ID_BEROBAT"]);
    $id_klinik = htmlspecialchars($data["ID_KLINIK"]);
    $tujuan = htmlspecialchars($data["TUJUAN"]);   
   

    $qu = mysqli_query($conn, "INSERT INTO tb_rujukan VALUES ('$id_rujukan', '$id_berobat', '$id_klinik'  , '$tujuan')");
    // echo "INSERT INTO tb_berobat VALUES ('$id_berobat', '$id_klinik','$id_anggota'  , '$tensi' ,'$anamnesa',' $diagnosa','$tanggal')";
    return $qu;
    
}

function input_detail($data){
    global $conn;
    $id_berobat = htmlspecialchars($data["ID_BEROBAT"]);
    $nama_obat = htmlspecialchars($data["NAMA_OBAT"]);
    $id_obat = htmlspecialchars($data["ID_OBAT"]);
    $harga = htmlspecialchars($data["HARGA"]);
    $jumlah = htmlspecialchars($data["JUMLAH"]);
     

 $qu = mysqli_query($conn, "INSERT INTO tb_detail_berobat VALUES ( '','$id_berobat', ' $id_obat'  , ' $jumlah')");
   echo "INSERT INTO tb_detail_berobat VALUES ( '','$id_berobat', ' $id_obat'  , ' $jumlah' )";
  return $qu;
    
    
}
function hapus_anggota($id){
    global $conn;
    // $id = $_GET["ID_ANGGOTA"];
    //$koneksi->query ("delete from tb_anggota where ID_ANGGOTA = '$id'");
    mysqli_query($conn, "DELETE FROM tb_anggota WHERE ID_ANGGOTA = '$id'");
    return mysqli_affected_rows($conn);
}

function hapus_admin($id){
    global $conn;
    
    mysqli_query($conn, "DELETE FROM tb_admin WHERE ID_ADMIN = '$id'");
    return mysqli_affected_rows($conn);
}

function hapus_dokter($id){
    global $conn;
    
    mysqli_query($conn, "DELETE FROM tb_dokter WHERE ID_DOKTER = '$id'");
    return mysqli_affected_rows($conn);
}

function hapus_obat($id){
    global $conn;
    
    mysqli_query($conn, "DELETE FROM tb_obat WHERE ID_OBAT = '$id'");
    return mysqli_affected_rows($conn);
}
function hapus_pengumuman($id){
    global $conn;

    mysqli_query($conn , "DELETE FROM tb_pengumuman WHERE ID_PENGUMUMAN ='$id'");
    return mysqli_affected_rows($conn);
}
?>


