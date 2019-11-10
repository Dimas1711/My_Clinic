<?php
$conn = mysqli_connect("localhost","root","","test");

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
        $foto = htmlspecialchars($data["FOTO"]);         
        // $nama_foto = @$_FILES["FOTO"]["NAME"];
        // $tmp_foto = @$_FILES["FOTO"]["TMP_NAME"];
        // $folder = "img/".$nama_foto;

        // move_uploaded_file($tmp_foto, $folder);

        $query="INSERT INTO tb_anggota VALUES
        ('$id_anggota','$password','$ktp','$nama','$jenis','$jenis_kelamin','$ttl','$alamat','$pendidikan','$nohp','$pekerjaan','$email','$foto')";

        $sql= mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

//hapus data
function hapus($id)
{
    global $conn;
        mysqli_query($conn, "DELETE FROM tb_anggota WHERE ID_ANGGOTA = '$id'");

        return mysqli_affected_rows($conn);

}

?>