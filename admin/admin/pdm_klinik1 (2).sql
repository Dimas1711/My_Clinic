-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 04:36 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdm_klinik1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ID_ADMIN` varchar(6) NOT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL,
  `NO_KTP_NIM_NIP` varchar(16) DEFAULT NULL,
  `NAMA_ADMIN` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` enum('L','P') DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_TERAKHIR` enum('SD','SMP','SMA','D1','D3','D4 / S1','S2','S3') DEFAULT NULL,
  `NO_HP` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`ID_ADMIN`, `PASSWORD`, `NO_KTP_NIM_NIP`, `NAMA_ADMIN`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `PENDIDIKAN_TERAKHIR`, `NO_HP`) VALUES
('AM02', '123', '12345', 'admin', 'L', '2018-01-08', 'Jl Mawar Hitam Wkwokwok', 'D4 / S1', '123'),
('AM03', 'admin', '0089127312', 'RyanHartadi', 'L', '2000-01-07', 'Jl Nias Raya', 'S2', '123456777');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `ID_ANGGOTA` varchar(6) NOT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL,
  `NO_KTP_NIM_NIP` varchar(16) DEFAULT NULL,
  `NAMA_ANGGOTA` varchar(50) DEFAULT NULL,
  `JENIS_ANGGOTA` enum('Umum','Mahasiswa','Karyawan','Keluarga Karyawan') DEFAULT NULL,
  `JENIS_KELAMIN` enum('L','P') DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `USIA` varchar(3) NOT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_TERAKHIR` enum('SD','SMP','SMA','D1','D3','D4 / S1','S2','S3') DEFAULT NULL,
  `NO_HP` varchar(13) DEFAULT NULL,
  `PEKERJAAN_PRODI` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `FOTO` varchar(50) DEFAULT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`ID_ANGGOTA`, `PASSWORD`, `NO_KTP_NIM_NIP`, `NAMA_ANGGOTA`, `JENIS_ANGGOTA`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `USIA`, `ALAMAT`, `PENDIDIKAN_TERAKHIR`, `NO_HP`, `PEKERJAAN_PRODI`, `EMAIL`, `FOTO`, `STATUS`) VALUES
('AG0002', '123', '00001923', 'Rury Agastya', 'Umum', 'L', '2012-02-12', '', 'Jl Mawar', '', '08135678451', 'Mahasiswa', 'ryanhartadi999@gmail.com', '5dfc3728b1286.jpg', 'Accept'),
('AG0003', '123', '123123', 'Ryan Hartadi', 'Mahasiswa', 'L', '2000-01-07', '', 'Jl Nias Raya', 'SMA', '12312312', 'Mahasiswa', 'ryanhartadi999@gmail.com', '5e01f4e17fd5f.jpg', 'Accept'),
('AG0004', '123', '123', 'nama anggota 1', 'Umum', 'L', '2019-12-24', '', 'jember', 'SMP', '081111112121', 'Buruh', 'pdimas1711@gmail.com', '5dfdcc55e47cd.png', 'Accept'),
('AG0005', '123', 'E41180434', 'dwi', 'Umum', 'L', '0000-00-00', '', '', '', '', '', '', '5e034c83c177d.jpeg', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berobat`
--

CREATE TABLE `tb_berobat` (
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_KLINIK` varchar(4) NOT NULL,
  `ID_DOKTER` varchar(6) NOT NULL,
  `ID_ANGGOTA` varchar(6) NOT NULL,
  `NAMA_ANGGOTA` varchar(50) NOT NULL,
  `TENSI` varchar(9) DEFAULT NULL,
  `TANGGAL_BEROBAT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ANAMNESA` varchar(70) DEFAULT NULL,
  `DIAGNOSA` varchar(70) DEFAULT NULL,
  `CATATAN` varchar(50) DEFAULT NULL,
  `ALERGI_OBAT` varchar(20) DEFAULT NULL,
  `SUHU` varchar(4) NOT NULL,
  `NADI` varchar(4) NOT NULL,
  `PERNAPASAN` varchar(4) NOT NULL,
  `GOLONGAN DARAH` enum('A','B','O','AB') NOT NULL,
  `BERAT BADAN` varchar(5) NOT NULL,
  `TINGGI BADAN` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berobat`
--

INSERT INTO `tb_berobat` (`ID_BEROBAT`, `ID_KLINIK`, `ID_DOKTER`, `ID_ANGGOTA`, `NAMA_ANGGOTA`, `TENSI`, `TANGGAL_BEROBAT`, `ANAMNESA`, `DIAGNOSA`, `CATATAN`, `ALERGI_OBAT`, `SUHU`, `NADI`, `PERNAPASAN`, `GOLONGAN DARAH`, `BERAT BADAN`, `TINGGI BADAN`) VALUES
('B00001', 'K03', 'DK001', 'AG0002', 'Rury Agastya', '120 MmHg', '2019-12-26 17:00:00', 'pusing', 'flu ', ' ', '-', '', '', '', 'A', '', ''),
('B00002', 'K03', 'DK001', 'AG0003', 'Ryan Hartadi', '90 MmHg', '2019-12-26 17:00:00', 'flu', 'penat', ' ', '-', '', '', '', 'A', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_berobat`
--

CREATE TABLE `tb_detail_berobat` (
  `ID_DETAIL` int(11) NOT NULL,
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_OBAT` varchar(7) NOT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `TOTAL_HARGA` int(11) NOT NULL,
  `DOSIS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `tb_detail_berobat`
--
DELIMITER $$
CREATE TRIGGER `PENGURANGAN` AFTER INSERT ON `tb_detail_berobat` FOR EACH ROW BEGIN 
	UPDATE tb_obat 
	SET STOK = STOK - NEW.JUMLAH
	WHERE ID_OBAT = NEW.ID_OBAT;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `ID_DOKTER` varchar(6) NOT NULL,
  `ID_KLINIK` varchar(4) NOT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL,
  `NO_KTP_NIM_NIP` varchar(16) DEFAULT NULL,
  `NAMA_DOKTER` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` enum('L','P') DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_TERAKHIR` enum('SD','SMP','SMA','D1','D3','D4 / S1','S2','S3') DEFAULT NULL,
  `NO_HP` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`ID_DOKTER`, `ID_KLINIK`, `PASSWORD`, `NO_KTP_NIM_NIP`, `NAMA_DOKTER`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `PENDIDIKAN_TERAKHIR`, `NO_HP`) VALUES
('DK001', 'K03', '123', '12345', 'Ryan', 'L', '2018-01-08', 'Jl Mawar Hitam Wkwokwok', 'S2', '089');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klinik`
--

CREATE TABLE `tb_klinik` (
  `ID_KLINIK` varchar(4) NOT NULL,
  `NAMA_KLINIK` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klinik`
--

INSERT INTO `tb_klinik` (`ID_KLINIK`, `NAMA_KLINIK`) VALUES
('K01', 'Poli Umum'),
('K02', 'Poli Gigi'),
('K03', 'Poli KIA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `ID_OBAT` varchar(7) NOT NULL,
  `NAMA_OBAT` varchar(50) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL,
  `EXP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`ID_OBAT`, `NAMA_OBAT`, `HARGA`, `STOK`, `EXP`) VALUES
('OB0001', 'Acyclovir 400 mg', 0, 303, '2023-03-01'),
('OB0002', 'Amlodipine 5 mg', 0, 183, '2021-05-01'),
('OB0003', 'Amlodipine 10 mg', 0, 145, '2021-07-01'),
('OB0004', 'Amoxcilin 500 mg', 0, 232, '2021-10-01'),
('OB0005', 'Allupurinol 100 mg', 0, 290, '2021-11-01'),
('OB0006', 'Allupurinol 300 mg', 0, 208, '2020-08-01'),
('OB0007', 'Alpara tab', 0, 691, '2022-07-01'),
('OB0008', 'Asam Mefenamat', 0, 342, '2021-12-01'),
('OB0009', 'Asam Tranexamat', 0, 93, '2022-02-01'),
('OB0010', 'Berlosid', 0, 622, '2021-04-01'),
('OB0011', 'Bisacodyl', 0, 38, '2022-03-01'),
('OB0012', 'Cargesik', 0, 259, '2023-07-01'),
('OB0013', 'Calortusin', 0, 164, '2021-10-01'),
('OB0014', 'Caviplex', 0, 569, '2022-07-01'),
('OB0015', 'Ceterizine', 0, 246, '2021-06-01'),
('OB0016', 'Cefadroxil', 0, 378, '2023-07-01'),
('OB0017', 'Cefixime', 0, 212, '2021-07-01'),
('OB0018', 'Clindamisin 150 mg', 0, 26, '2020-09-01'),
('OB0019', 'Clindamisin 300 mg', 0, 79, '2020-11-01'),
('OB0020', 'Curcuma', 0, 113, '2022-02-01'),
('OB0021', 'Dexclosan', 0, 660, '2022-08-01'),
('OB0022', 'Degirol', 0, 212, '2020-08-01'),
('OB0023', 'Dionicol', 0, 95, '2020-02-01'),
('OB0024', 'Dolo-licobion', 0, 639, '2021-04-01'),
('OB0025', 'Eryra', 0, 194, '2021-04-01'),
('OB0026', 'Flucadex', 0, 154, '2020-12-01'),
('OB0027', 'FG Troches', 0, 258, '2020-12-01'),
('OB0028', 'Folavit', 0, 84, '2022-02-01'),
('OB0029', 'Floxigra', 0, 173, '2021-01-09'),
('OB0030', 'Flunarizine', 0, 108, '2020-01-12'),
('OB0031', 'Fladex Forte', 0, 129, '2020-01-01'),
('OB0032', 'Gemfibrosil', 0, 276, '2022-01-04'),
('OB0033', 'GG', 0, 143, '2023-01-07'),
('OB0034', 'Glimepiride 2 mg', 0, 315, '2023-01-04'),
('OB0035', 'Glimepiride 3 mg', 0, 260, '2022-01-02'),
('OB0036', 'Glukosamin', 0, 174, '2022-01-11'),
('OB0037', 'Hufadon', 0, 196, '2022-01-03'),
('OB0038', 'Hufadine', 0, 672, '2022-01-07'),
('OB0039', 'Hufagesic', 0, 361, '2022-01-07'),
('OB0040', 'Hepa-Q', 0, 34, '2022-01-08'),
('OB0041', 'Histigo', 0, 113, '2021-01-08'),
('OB0042', 'Ibuprofen', 0, 265, '2021-01-08'),
('OB0043', 'Inamid', 0, 389, '2021-01-09'),
('OB0044', 'ISDN', 0, 20, '2020-01-08'),
('OB0045', 'Kaditic', 0, 96, '2023-01-08'),
('OB0046', 'Ketokonazole', 0, 41, '2020-01-09'),
('OB0047', 'Lacto B', 0, 33, '2020-01-12'),
('OB0048', 'Lansoprazole', 0, 487, '2022-01-06'),
('OB0049', 'Metformin', 0, 395, '2021-01-07'),
('OB0050', 'Mefinal', 0, 111, '2020-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `ID_PENGUMUMAN` varchar(6) NOT NULL,
  `JUDUL` text NOT NULL,
  `ISI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`ID_PENGUMUMAN`, `JUDUL`, `ISI`) VALUES
('P0002', 'Ini Pengumuman Keduaku', 'Tes Pengumuman isi ne metu opo ga ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rujukan`
--

CREATE TABLE `tb_rujukan` (
  `ID_RUJUKAN` varchar(8) NOT NULL,
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_KLINIK` varchar(6) NOT NULL,
  `ID_DOKTER` varchar(6) NOT NULL,
  `DOKTER_TUJUAN` varchar(20) NOT NULL,
  `TUJUAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rujukan`
--

INSERT INTO `tb_rujukan` (`ID_RUJUKAN`, `ID_BEROBAT`, `ID_KLINIK`, `ID_DOKTER`, `DOKTER_TUJUAN`, `TUJUAN`) VALUES
('RJ00001', 'B00002', 'K03', '&lt;br', 'Dr. Stevanus', 'Rumah Sakit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`ID_ANGGOTA`);

--
-- Indexes for table `tb_berobat`
--
ALTER TABLE `tb_berobat`
  ADD PRIMARY KEY (`ID_BEROBAT`),
  ADD KEY `FK_MELAKUKAN` (`ID_ANGGOTA`),
  ADD KEY `FK_MELAYANI` (`ID_KLINIK`),
  ADD KEY `ID_DOKTER` (`ID_DOKTER`);

--
-- Indexes for table `tb_detail_berobat`
--
ALTER TABLE `tb_detail_berobat`
  ADD PRIMARY KEY (`ID_DETAIL`),
  ADD KEY `ID_BEROBAT` (`ID_BEROBAT`),
  ADD KEY `ID_OBAT` (`ID_OBAT`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`ID_DOKTER`),
  ADD KEY `FK_MEMILIKI` (`ID_KLINIK`);

--
-- Indexes for table `tb_klinik`
--
ALTER TABLE `tb_klinik`
  ADD PRIMARY KEY (`ID_KLINIK`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`ID_OBAT`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`ID_PENGUMUMAN`);

--
-- Indexes for table `tb_rujukan`
--
ALTER TABLE `tb_rujukan`
  ADD PRIMARY KEY (`ID_RUJUKAN`),
  ADD KEY `FK_MEMPUNYAI` (`ID_BEROBAT`),
  ADD KEY `FK_MENANGANI` (`ID_KLINIK`),
  ADD KEY `ID_DOKTER` (`ID_DOKTER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_berobat`
--
ALTER TABLE `tb_detail_berobat`
  MODIFY `ID_DETAIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_berobat`
--
ALTER TABLE `tb_berobat`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`ID_ANGGOTA`) REFERENCES `tb_anggota` (`ID_ANGGOTA`),
  ADD CONSTRAINT `FK_MELAYANI` FOREIGN KEY (`ID_KLINIK`) REFERENCES `tb_klinik` (`ID_KLINIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
