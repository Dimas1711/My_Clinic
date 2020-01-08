-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 12:21 PM
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
('AG0002', '', '00001923', 'Rury Agastya', 'Umum', 'L', '2012-02-12', '', 'Jl Mawar', '', '08135678451', 'Mahasiswa', 'ryanhartadi999@gmail.com', '5dfc3728b1286.jpg', 'Accept'),
('AG0003', '123', '123123', 'Ryan Hartadi', 'Mahasiswa', 'L', '2000-01-07', '12', 'Jl Nias Raya', 'SMA', '12312312', 'Mahasiswa', 'ryanhartadi999@gmail.com', '5e01f4e17fd5f.jpg', 'Accept'),
('AG0004', '123', '123', 'Rika', 'Umum', 'L', '2019-12-24', '', 'jember', 'SMP', '081111112121', 'Buruh', 'pdimas1711@gmail.com', '5e097f87a039e.jpg', 'Accept'),
('AG0005', '123', '00001923', 'Agastya Amaranthine Safira ', 'Mahasiswa', 'P', '2000-02-09', '19', 'Jl Nias Raya', 'D4 / S1', '213', 'Mahasiswa', 'ryanhartadi999@gmail.com', '5e095eb5c1727.jpg', 'Accept'),
('AG0006', '12', '123123', 'Rury Agastya', 'Umum', 'P', '2000-01-07', '12', 'Jl Nias Raya', 'D4 / S1', '123', 'Mahasiswa', 'rury@gmail.com', '5e096087d0e23.jpg', 'Accept'),
('AG0007', 'q', 'q', 'q', 'Umum', 'L', '2019-12-30', 'q', 'q', 'SMP', '12', 'q', 'q@gmail.com', '5e0a1345db0e9.jpg', 'Reject'),
('AG0008', 'q', 'qwe', 'q', 'Umum', 'L', '2019-12-30', 'qwe', 'qwe', 'SD', 'qwe', 'qwe', 'qwe', '5e0a13c0bfac3.jpg', 'Pending'),
('AG0009', '123', 'E411801051', 'Dimas Wahyu Pratama', 'Mahasiswa', 'L', '1999-11-17', '20', 'Jl Manggar 4', 'SMA', '081233121321', 'Teknik Informatika', 'pdimas429@gmail.com', '5e0ab1c2c4a2b.png', 'Accept'),
('AG0010', '123', 'e41180111', 'Ryan Hartadi', 'Mahasiswa', 'L', '2000-01-07', '19', 'jl nias raya', 'SMA', '08123411211', 'Teknik Informatika', 'ryanhartadi06@gmail.com', '5e0ab7d2b2e8b.jpg', 'Pending'),
('AG0011', '123', '123', '123', 'Keluarga Karyawan', 'L', '1999-11-22', '20', '123', 'D1', '123', '123', '123@gmail.com', '5e0ef68dae194.jpg', 'Pending'),
('AG0012', '123', '3333333', 'anggota1', 'Umum', 'P', '1994-11-11', '25', 'jember', 'D1', '08222221111', 'Teknik Informatika', 'nama2@gmail.com', 'foto.jpg', 'Pending'),
('AG0013', '123', '123', '123', 'Mahasiswa', 'P', '1990-03-12', '29', 'qwe1', 'SMA', '123', '123', '123@gmail.com', '5e0f5ffad0625.jpg', 'Pending'),
('AG0014', '123', '123', '123', 'Karyawan', 'L', '1979-01-06', '41', '123', 'D1', '0812312312', '123', '123@gmail.com', '5e1003a046b31.jpg', 'Pending');

--
-- Triggers `tb_anggota`
--
DELIMITER $$
CREATE TRIGGER `hitung_usia` BEFORE INSERT ON `tb_anggota` FOR EACH ROW BEGIN
	SET new.USIA = TRUNCATE(DATEDIFF(NOW(), new.TANGGAL_LAHIR) / 365,0);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `hitung_usia_update` BEFORE UPDATE ON `tb_anggota` FOR EACH ROW BEGIN
	SET new.USIA = TRUNCATE(DATEDIFF(NOW(), new.TANGGAL_LAHIR) / 365,0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berobat`
--

CREATE TABLE `tb_berobat` (
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_KLINIK` varchar(4) NOT NULL,
  `ID_DOKTER` varchar(6) NOT NULL,
  `ID_ANGGOTA` varchar(6) NOT NULL,
  `SISTOLE` varchar(3) NOT NULL,
  `DIASTOLE` varchar(3) NOT NULL,
  `TANGGAL_BEROBAT` date NOT NULL,
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

INSERT INTO `tb_berobat` (`ID_BEROBAT`, `ID_KLINIK`, `ID_DOKTER`, `ID_ANGGOTA`, `SISTOLE`, `DIASTOLE`, `TANGGAL_BEROBAT`, `ANAMNESA`, `DIAGNOSA`, `CATATAN`, `ALERGI_OBAT`, `SUHU`, `NADI`, `PERNAPASAN`, `GOLONGAN DARAH`, `BERAT BADAN`, `TINGGI BADAN`) VALUES
('B00001', 'K01', 'DK03', 'AG0004', '', '', '2019-12-30', 'pusing', 'panas', ' tes', '-', '34', '23', '34', 'A', '41', '190'),
('B00002', 'K01', 'DK03', 'AG0006', '', '', '2019-12-30', 'mual', 'hepatitis', ' tes', 'bodrex', '34', '23', '34', 'O', '41', '100'),
('B00003', 'K02', 'DK04', 'AG0005', '', '', '2019-12-30', 'pusing', 'flu ', ' tea', 'paracetamol', '29', '2', '23', 'A', '45', '160'),
('B00004', 'K02', 'DK04', 'AG0003', '', '', '2019-12-30', 'pusing', 'flu ', ' tea', 'paracetamol', '29', '2', '23', 'A', '45', '160'),
('B00005', 'K02', 'DK04', 'AG0006', '', '', '2019-12-30', 'pusing', 'flu ', ' tea', 'paracetamol', '29', '2', '23', 'A', '45', '160'),
('B00006', 'K01', 'DK001', 'AG0004', '', '', '2019-12-30', 'mual', 'hepatitis', ' ', 'paracetamol', '34', '41', '34', 'A', '45', '160'),
('B00007', 'K01', 'DK01', 'AG0003', '', '', '2019-12-30', 'q', 'q', 'q ', 'q', 'q', 'q', 'q', 'A', 'q', 'q'),
('B00008', 'K01', 'DK01', 'AG0005', '', '', '2019-12-31', 'Gatal gatal', '123', ' sadfk', 'Paracetamol', '30', '10', '12', 'A', '21', '31'),
('B00009', 'K01', 'DK01', 'AG0006', '', '', '2019-12-31', 'Gatal gatal', 'Jantung ', ' fd', '12', '30', '21', '11', 'A', '31', '12'),
('B00010', 'K01', 'DK01', 'AG0004', '', '', '2019-12-31', 'Q', 'Q', ' Q', 'Q', 'Q', 'Q', 'Q', 'A', 'Q', 'Q'),
('B00011', 'K01', 'DK01', 'AG0004', '', '', '2019-12-31', '1', '1', ' 1', '1', '121', '1', '1', 'A', '1', '1'),
('B00012', 'K01', 'DK01', 'AG0005', '', '', '2019-12-31', 'Q', 'Q', 'A ', 'Q', 'Q', 'Q', 'Q', 'A', 'Q', 'Q'),
('B00013', 'K01', 'DK01', 'AG0003', '', '', '2019-12-31', 'Gatal gatal', 'Gatal Gatal', 'Penyakit Gatal Gatal ', 'Paracetamol', '36', '120', '120', 'A', '45', '160'),
('B00014', 'K01', 'DK01', 'AG0005', '', '', '2019-12-31', 'Gatal gatal', 'Gatal Gatal', ' Penyakit Gatal Gatal', 'Paracetamol', '36', '120', '120', 'A', '50', '165'),
('B00015', 'K01', 'DK01', 'AG0002', '120', '80', '2020-01-06', 'loro', 'yo', ' yo', 'yo', '36', '10', '10', 'A', '180', '70'),
('B00016', 'K01', 'DK01', 'AG0002', '12', '12', '2020-01-06', '212', '212', '12 ', '212', '21', '21', '12', 'A', '12', '12'),
('B00017', 'K01', 'DK01', 'AG0002', '12', '12', '2020-01-06', '11', '1', '1 ', '1', '1', '1', '1', 'A', '1', '1'),
('B00018', 'K01', 'DK01', 'AG0004', '90', '120', '2020-01-08', 'pusing', 'hepatitis', ' TEST', 'paracetamol', '34', '41', '23', 'A', '30', '160');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_berobat`
--

CREATE TABLE `tb_detail_berobat` (
  `ID_DETAIL` int(11) NOT NULL,
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_OBAT` varchar(7) NOT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `DOSIS` text NOT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_berobat`
--

INSERT INTO `tb_detail_berobat` (`ID_DETAIL`, `ID_BEROBAT`, `ID_OBAT`, `JUMLAH`, `DOSIS`, `STATUS`) VALUES
(18, 'B00022', 'OB0046', 1, '2 x 1', ''),
(20, 'B00025', 'OB0002', 12, '13', ''),
(21, 'B00026', 'OB0009', 12, '12', ''),
(23, 'B00057', 'OB0008', 0, '', ''),
(24, 'B00002', 'OB0047', 10, '3 x1', ''),
(25, 'B00006', 'OB0038', 12, '2 x 1', ''),
(27, 'B00008', 'OB0007', 1, '1x3', ''),
(28, 'B00012', 'OB0005', 1, '1X2', ''),
(29, 'B00013', 'OB0008', 4, '2 x 1', ''),
(30, 'B00013', 'OB0010', 4, '3 x 1 ', '');

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
DELIMITER $$
CREATE TRIGGER `hapus_detail` BEFORE DELETE ON `tb_detail_berobat` FOR EACH ROW BEGIN 
	UPDATE tb_obat 
	SET STOK = old.JUMLAH + STOK
	WHERE ID_OBAT = ID_OBAT ;
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
('DK01', 'K01', '123', '12345', 'Ryan', 'L', '2018-01-08', 'Jl Mawar Hitam Wkwokwok', 'S2', '089'),
('DK02', 'K03', '123', '000019230', 'Samid', 'L', '2000-02-28', 'Jl Mawar', 'S3', '12312312'),
('DK03', 'K01', '123', 'E41180434', 'Ratna Dwi', 'P', '2000-03-27', 'Blitar', 'S2', '081615733008'),
('DK04', 'K02', '123', '35005146778', 'Nur', 'L', '2019-12-06', 'Lumajang', 'D4 / S1', '089863735672');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `ID_KARYAWAN` varchar(6) NOT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL,
  `NO_KTP_NIM_NIP` varchar(16) DEFAULT NULL,
  `NAMA_KARYAWAN` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` enum('L','P') DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_TERAKHIR` enum('SD','SMP','SMA','D1','D3','D4 / S1','S2','S3') DEFAULT NULL,
  `NO_HP` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`ID_KARYAWAN`, `PASSWORD`, `NO_KTP_NIM_NIP`, `NAMA_KARYAWAN`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `PENDIDIKAN_TERAKHIR`, `NO_HP`) VALUES
('A01', 'admin', '3505186703000001', 'Dwi Kristina', 'P', '2000-03-27', 'Jember', 'D4 / S1', '087876565432'),
('AM01', '123', '12345', 'Ratna', 'L', '2018-01-08', 'Jl Mawar Hitam Wkwokwok', 'D4 / S1', '123'),
('AM02', 'admin', '0089127312', 'RyanHartadi', 'L', '2000-01-07', 'Jl Nias Raya', 'S2', '123456777'),
('AM03', '123', '00001923', 'Shinta', 'L', '2000-01-07', 'Jl Mawar', 'D4 / S1', '12312'),
('AM04', '123', '123213', 'admin23', 'P', '2018-06-01', 'Jl.Yo', 'D4 / S1', '123'),
('AM05', '123', '123', '123', 'P', '1990-12-06', '123', 'SMA', '0812312311');

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
  `STOK` int(11) DEFAULT NULL,
  `EXP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`ID_OBAT`, `NAMA_OBAT`, `STOK`, `EXP`) VALUES
('OB0001', 'Acyclovir 400 mg', 322, '2023-03-01'),
('OB0002', 'Amlodipine 5 mg', 181, '2021-05-01'),
('OB0003', 'Amlodipine 10 mg', 165, '2021-07-01'),
('OB0004', 'Amoxcilin 500 mg', 252, '2021-10-01'),
('OB0005', 'Allupurinol 100 mg', 299, '2021-11-01'),
('OB0006', 'Allupurinol 300 mg', 228, '2020-08-01'),
('OB0007', 'Alpara tab', 710, '2022-07-01'),
('OB0008', 'Asam Mefenamat', 358, '2021-12-01'),
('OB0009', 'Asam Tranexamat', 101, '2022-02-01'),
('OB0010', 'Berlosid', 638, '2021-04-01'),
('OB0011', 'Bisacodyl', 58, '2022-03-01'),
('OB0012', 'Cargesik', 279, '2023-07-01'),
('OB0013', 'Calortusin', 184, '2021-10-01'),
('OB0014', 'Caviplex', 589, '2022-07-01'),
('OB0015', 'Ceterizine', 266, '2021-06-01'),
('OB0016', 'Cefadroxil', 398, '2023-07-01'),
('OB0017', 'Cefixime', 232, '2021-07-01'),
('OB0018', 'Clindamisin 150 mg', 46, '2020-09-01'),
('OB0019', 'Clindamisin 300 mg', 99, '2020-11-01'),
('OB0020', 'Curcuma', 133, '2022-02-01'),
('OB0021', 'Dexclosan', 680, '2022-08-01'),
('OB0022', 'Degirol', 232, '2020-08-01'),
('OB0023', 'Dionicol', 115, '2020-02-01'),
('OB0024', 'Dolo-licobion', 659, '2021-04-01'),
('OB0025', 'Eryra', 214, '2021-04-01'),
('OB0026', 'Flucadex', 174, '2020-12-01'),
('OB0027', 'FG Troches', 278, '2020-12-01'),
('OB0028', 'Folavit', 104, '2022-02-01'),
('OB0029', 'Floxigra', 193, '2021-01-09'),
('OB0030', 'Flunarizine', 128, '2020-01-12'),
('OB0031', 'Fladex Forte', 149, '2020-01-01'),
('OB0032', 'Gemfibrosil', 296, '2022-01-04'),
('OB0033', 'GG', 163, '2023-01-07'),
('OB0034', 'Glimepiride 2 mg', 335, '2023-01-04'),
('OB0035', 'Glimepiride 3 mg', 280, '2022-01-02'),
('OB0036', 'Glukosamin', 194, '2022-01-11'),
('OB0037', 'Hufadon', 216, '2022-01-03'),
('OB0038', 'Hufadine', 680, '2022-01-07'),
('OB0039', 'Hufagesic', 381, '2022-01-07'),
('OB0040', 'Hepa-Q', 54, '2022-01-08'),
('OB0041', 'Histigo', 133, '2021-01-08'),
('OB0042', 'Ibuprofen', 285, '2021-01-08'),
('OB0043', 'Inamid', 409, '2021-01-09'),
('OB0044', 'ISDN', 40, '2020-01-08'),
('OB0045', 'Kaditic', 116, '2023-01-08'),
('OB0046', 'Ketokonazole', 61, '2020-01-09'),
('OB0047', 'Lacto B', 43, '2020-01-12'),
('OB0048', 'Lansoprazole', 507, '2022-01-06'),
('OB0049', 'Metformin', 415, '2021-01-07'),
('OB0050', 'Mefinal', 130, '2020-01-12');

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
('P0001', 'Bahaya Ular Cobra', 'Hati hati terhadap serangan Ular Cobra . Dimohon tetap hati hati ');

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
  `TUJUAN` varchar(50) DEFAULT NULL,
  `TANGGAL_RUJUKAN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rujukan`
--

INSERT INTO `tb_rujukan` (`ID_RUJUKAN`, `ID_BEROBAT`, `ID_KLINIK`, `ID_DOKTER`, `DOKTER_TUJUAN`, `TUJUAN`, `TANGGAL_RUJUKAN`) VALUES
('RJ0001', 'B00001', 'K01', 'DK03', 'Bambang', 'Rumah Sakit Jember', '2019-12-30'),
('RJ0002', 'B00003', 'K02', 'DK04', 'Stevanus', 'DKT Jember', '2019-12-30'),
('RJ0003', 'B00004', 'K02', 'DK04', 'Anindyta', 'Rumah Sakit Jember', '2019-12-30'),
('RJ0004', 'B00009', 'K01', 'DK01', 'Ratna', 'Jember', '2019-12-31'),
('RJ0005', 'B00010', 'K01', 'DK01', 'Q', 'Q', '2019-12-31'),
('RJ0006', 'B00014', 'K01', 'DK01', 'Ratna Dwi ', 'Jember Klinik', '2019-12-31');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`ID_KARYAWAN`);

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
  MODIFY `ID_DETAIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
