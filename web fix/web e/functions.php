<?php
$conn = mysqli_connect("localhost","root","","pdm_klinik");

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

    $ukurangambar = ['> 2097152'];
    if( in_array($ukuranfile, $ukurangambar) )
    {
        echo "<script>
                alert('Ukuran Foto Terlalu Besar, Gunakan Maksimal 2MB');
              </script>";
        return false;

    }

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
                TEMPAT_TANGGAL_LAHIR = '$ttl',
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


?>