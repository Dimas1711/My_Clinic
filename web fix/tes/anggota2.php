<?php

    $conn = mysqli_connect("localhost","root","","test");

    //ambil data dari tabel 
    $result = mysqli_query($conn, "SELECT * FROM tb_anggota");

    //cek error
    // if(!$result)
    // {
    //     echo mysqli_error($conn);
    // }


    //ambil data (fetch) anggota dari object result
    // $ang = mysqli_fetch_assoc($result);
    // var_dump($ang["JENIS_ANGGOTA"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
        </header>
        <section>
            <h2> Data Anggota</h2>
            <!-- <form action="" method="POST" enctype="multipart/form-data" > -->
            <table border = "1", cellpadding = "15" , cellspacing ="0">
                <tr>
                        <th>Id Anggota</th>
                        <th>Password</th>
                        <th>NO.KTP/NIM/NIP</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Pendidikan Terakhir</th>
                        <th>NO.HP</th>
                        <th>Pekerjaan/Prodi</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                        <!-- <td class="nama"><input type="text" name="id_anggota" id="id_anggota"></td> -->
                </tr>


<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                <tr>
                    <td><?= $row["ID_ANGGOTA"] ?></td>
                    <td><?= $row["PASSWORD"];?></td>
                    <td><?= $row["NO_KTP_NIM_NIP"];?></td>
                    <td><?= $row["NAMA_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_ANGGOTA"];?></td>
                    <td><?= $row["JENIS_KELAMIN"];?></td>
                    <td><?= $row["TEMPAT_TANGGAL_LAHIR"];?></td>
                    <td><?= $row["ALAMAT"];?></td>
                    <td><?= $row["PENDIDIKAN_TERAKHIR"];?></td>
                    <td><?= $row["NO_HP"];?></td>
                    <td><?= $row["PEKERJAAN_PRODI"];?></td>
                    <td><?= $row["EMAIL"];?></td>
                    <td><img src="<?php  echo $row["FOTO"]; ?>" alt="" width="50px"></td>
                    <td>
                        <a href="">Edit</a>
                    </td>     
                </tr>
<?php endwhile; ?>
                <!-- <tr>
                        <td>Password</td>
                        <td class="nama"><input type="text" name="password" id="password"></td>
                </tr>
                <tr>
                        <td>No.KTP/NIM/NIP</td>
                        <td class="nama"><input type="text" name="ktp" id="ktp"></td>
                </tr>
                <tr>
                        <td>Nama Anggota</td>
                        <td class="nama"><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                        <td>Jenis Anggota</td>
                        <td class="nama">
                                <select name="jenis" id="jenis">
                                        <option value="">Silahkan Pilih</option>
                                        <option value="umum">Umum</option>
                                        <option value="mahasiswa">Mahasiswa</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="keluarga Karyawan">Keluarga Karyawan</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Jenis Kelamin</td>
                        <td class="nama">
                        <select name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">Silahkan Pilih</option>
                                <option value="l">L</option>
                                <option value="p">P</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td class="nama"><input type="text" name="ttl" id="ttl"></td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td class="nama"><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                        <td>Pendidikan Terakhir</td>
                        <td class="nama">
                        <select name="pendidikan" id="pendidikan">
                                <option value="">Silahkan Pilih</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                                <option value="s1">S1</option>
                                <option value="s2">S2</option>
                                <option value="s3">S3</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>NO.HP</td>
                        <td class="nama"><input type="text" name="nohp" id="nohp"></td>
                </tr>
                <tr>
                        <td>Pekerjaan / Prodi</td>
                        <td class="nama"><input type="text" name="pekerjaan" id="pekerjaan"></td>
                </tr>
                <tr>
                        <td>Email</td>
                        <td class="nama"><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                        <td>Foto</td>
                        <td class="nama"><input type="file" name="foto" id="foto"></td>
                </tr>
                <button type="submit" name="register" class="kirim">Kirim</button>
                <button class="batal" name="batal">Batal</button> -->
             </table>
             <!-- </form> -->
        </section>
</body>
</html>