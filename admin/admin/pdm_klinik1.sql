-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 10:56 AM
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
  `PENDIDIKAN_TERAKHIR` enum('S1','S2','S3','D1','D2','D3','D4') DEFAULT NULL,
  `NO_HP` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`ID_ADMIN`, `PASSWORD`, `NO_KTP_NIM_NIP`, `NAMA_ADMIN`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `PENDIDIKAN_TERAKHIR`, `NO_HP`) VALUES
('AM01', '123  ', '666666666  ', 'tara  ', 'L', '1978-01-06', 'surabaya  ', 'D4', '08123215263'),
('AM02', '123', '7777777777', 'gema', 'L', '1980-03-12', 'surabaya', 'S1', '08212342121'),
('AM03', '123', '888888888', 'nana', 'P', '1983-06-11', 'jember', 'S1', '082312111211');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `ID_ANGGOTA` varchar(6) NOT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL,
  `NO_KTP_NIM_NIP` varchar(16) DEFAULT NULL,
  `NAMA_ANGGOTA` varchar(50) DEFAULT NULL,
  `JENIS_ANGGOTA` enum('umum','mahasiswa','karyawan','keluarga karyawan') DEFAULT NULL,
  `JENIS_KELAMIN` enum('L','P') DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_TERAKHIR` enum('SD','SMP','SMA','S1','S2','S3') DEFAULT NULL,
  `NO_HP` varchar(13) DEFAULT NULL,
  `PEKERJAAN_PRODI` varchar(3) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `FOTO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`ID_ANGGOTA`, `PASSWORD`, `NO_KTP_NIM_NIP`, `NAMA_ANGGOTA`, `JENIS_ANGGOTA`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `PENDIDIKAN_TERAKHIR`, `NO_HP`, `PEKERJAAN_PRODI`, `EMAIL`, `FOTO`) VALUES
('AG0001', '123', '11111111', 'dimas', 'mahasiswa', 'L', '1999-11-17', 'jember', 'SMA', '081111111111', 'a', 'a', 'a'),
('AG0002', '123', '22222222', 'ryan', 'mahasiswa', 'L', '2019-11-01', 'jember', 'SMA', '082222222', 'b', 'b', 'b'),
('AG0003', '123', '3333333', 'nur', 'mahasiswa', 'L', '2019-11-02', 'jember', 'SMA', '0823333333', 'c', 'c', 'c'),
('AG0004', '123', '44444444', 'ratna', 'mahasiswa', 'P', '2019-11-04', 'jember', 'SMA', '0823444444', 'd', 'd', 'd'),
('AG0005', '123', '555555', 'ridho', 'umum', 'L', '2019-11-12', 'jember', 'S2', '0823123121', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berobat`
--

CREATE TABLE `tb_berobat` (
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_KLINIK` varchar(4) NOT NULL,
  `ID_ANGGOTA` varchar(6) NOT NULL,
  `TENSI` varchar(9) DEFAULT NULL,
  `ANAMNESA` varchar(70) NOT NULL,
  `DIAGNOSA` varchar(70) NOT NULL,
  `TANGGAL_BEROBAT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berobat`
--

INSERT INTO `tb_berobat` (`ID_BEROBAT`, `ID_KLINIK`, `ID_ANGGOTA`, `TENSI`, `ANAMNESA`, `DIAGNOSA`, `TANGGAL_BEROBAT`) VALUES
('B00001', 'K01', 'AG0001', '90/60', '', '', '2019-11-19 05:13:19'),
('B00002', 'K02', 'AG0003', '120/80', '', '', '2019-11-19 07:23:41'),
('B00003', 'K03', 'AG0004', '120/80', '', '', '2019-11-21 04:16:37'),
('B00004', 'K01', 'AG0003', '110/90', '', '', '2019-11-21 06:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_berobat`
--

CREATE TABLE `tb_detail_berobat` (
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_OBAT` varchar(6) NOT NULL,
  `JUMLAH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_berobat`
--

INSERT INTO `tb_detail_berobat` (`ID_BEROBAT`, `ID_OBAT`, `JUMLAH`) VALUES
('B00001', 'OB0002', 10),
('B00002', 'OB0004', 5),
('B00003', 'OB0001', 3),
('B00004', 'OB0001', 4);

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
  `PENDIDIKAN_TERAKHIR` enum('S1','S2','S3','D1','D2','D3','D4') DEFAULT NULL,
  `NO_HP` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`ID_DOKTER`, `ID_KLINIK`, `PASSWORD`, `NO_KTP_NIM_NIP`, `NAMA_DOKTER`, `JENIS_KELAMIN`, `TANGGAL_LAHIR`, `ALAMAT`, `PENDIDIKAN_TERAKHIR`, `NO_HP`) VALUES
('DK01', 'K01', '123', '1234111121', 'alice', 'P', '1990-11-11', 'jember', 'S2', '0817781238'),
('DK02', 'K02', '123', '872131121', 'justin', 'L', '1987-08-08', 'jember', 'S2', '08823277773'),
('DK03', 'K03', '123', '932132811', 'fanny', 'P', '1993-03-18', 'jember', 'S2', '08321231111');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klinik`
--

CREATE TABLE `tb_klinik` (
  `ID_KLINIK` varchar(4) NOT NULL,
  `NAMA_KLINIK` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_klinik`
--

INSERT INTO `tb_klinik` (`ID_KLINIK`, `NAMA_KLINIK`) VALUES
('K01', 'poli umum'),
('K02', 'poli gigi'),
('K03', 'poli kia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `ID_OBAT` varchar(6) NOT NULL,
  `NAMA_OBAT` varchar(50) DEFAULT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`ID_OBAT`, `NAMA_OBAT`, `Keterangan`, `HARGA`, `STOK`) VALUES
('OB0001', 'mixsagrip', 'obat batuk', 10000, 100),
('OB0002', 'Neozep', 'obat pilek', 13000, 140),
('OB0003', 'Paracetamol', 'obat panas', 15500, 120),
('OB0004', 'Bodrex', 'obat pusing', 16000, 130);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rujukan`
--

CREATE TABLE `tb_rujukan` (
  `ID_RUJUKAN` varchar(8) NOT NULL,
  `ID_BEROBAT` varchar(6) NOT NULL,
  `ID_DOKTER` varchar(6) NOT NULL,
  `TUJUAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD KEY `FK_MELAYANI` (`ID_KLINIK`);

--
-- Indexes for table `tb_detail_berobat`
--
ALTER TABLE `tb_detail_berobat`
  ADD KEY `FK_MEMBELI` (`ID_OBAT`),
  ADD KEY `FK_MENGAMBIL_DATA` (`ID_BEROBAT`);

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
-- Indexes for table `tb_rujukan`
--
ALTER TABLE `tb_rujukan`
  ADD PRIMARY KEY (`ID_RUJUKAN`),
  ADD KEY `relasi_rujukan` (`ID_BEROBAT`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_berobat`
--
ALTER TABLE `tb_berobat`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`ID_ANGGOTA`) REFERENCES `tb_anggota` (`ID_ANGGOTA`),
  ADD CONSTRAINT `FK_MELAYANI` FOREIGN KEY (`ID_KLINIK`) REFERENCES `tb_klinik` (`ID_KLINIK`);

--
-- Constraints for table `tb_detail_berobat`
--
ALTER TABLE `tb_detail_berobat`
  ADD CONSTRAINT `FK_MEMBELI` FOREIGN KEY (`ID_OBAT`) REFERENCES `tb_obat` (`ID_OBAT`),
  ADD CONSTRAINT `FK_MENGAMBIL_DATA` FOREIGN KEY (`ID_BEROBAT`) REFERENCES `tb_berobat` (`ID_BEROBAT`);

--
-- Constraints for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_KLINIK`) REFERENCES `tb_klinik` (`ID_KLINIK`);

--
-- Constraints for table `tb_rujukan`
--
ALTER TABLE `tb_rujukan`
  ADD CONSTRAINT `relasi_rujukan` FOREIGN KEY (`ID_BEROBAT`) REFERENCES `tb_berobat` (`ID_BEROBAT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
