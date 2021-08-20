-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 11:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksin_its`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` varchar(100) NOT NULL,
  `jam_selesai` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `vaksinator` int(11) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `mulai_daftar` date NOT NULL,
  `selesai_daftar` date NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `jam_mulai`, `jam_selesai`, `status`, `vaksinator`, `jenis_vaksin`, `mulai_daftar`, `selesai_daftar`, `lokasi`, `kuota`) VALUES
(1, '2021-08-21', '08.00', '12.00', 1, 1, '2', '2021-08-08', '2021-08-16', 'sby', 100),
(2, '2021-12-22', '06:11', '00:09', 0, 1, '2', '2021-10-07', '2021-11-17', 'Sidoarjo', 100);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_vaksin`
--

CREATE TABLE `jenis_vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `nama_vaksin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_vaksin`
--

INSERT INTO `jenis_vaksin` (`id_vaksin`, `nama_vaksin`) VALUES
(2, 'AstraZenaca'),
(7, 'Pfizer');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(250) NOT NULL,
  `nik_pegawai` varchar(200) NOT NULL,
  `nip_pegawai` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `golongan_darah` varchar(100) NOT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nik_pegawai`, `nip_pegawai`, `tanggal_lahir`, `jenis_kelamin`, `golongan_darah`, `nomor_hp`, `status`) VALUES
(1, 'Adi', '32145698712', '36521458411', '2021-08-16', 'L', 'A', '0854125112', 1),
(2, 'Budi', '3651232664411', '11451211221212', '2021-08-01', 'L', 'B', '0854121221145', 0),
(3, 'Siti', '35621745132313', '1112546466464', '2021-08-19', 'P', 'O', '088452212233', 1),
(4, 'Ani', '36545121541236', '1541215445454', '2021-08-29', 'P', 'A', '08845212121111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaksinator`
--

CREATE TABLE `vaksinator` (
  `id_vaksinator` int(11) NOT NULL,
  `nama_instansi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaksinator`
--

INSERT INTO `vaksinator` (`id_vaksinator`, `nama_instansi`) VALUES
(1, 'RSUD Sidoarjo'),
(2, 'Puskesmas Sidoarjo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `vaksinator`
--
ALTER TABLE `vaksinator`
  ADD PRIMARY KEY (`id_vaksinator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vaksinator`
--
ALTER TABLE `vaksinator`
  MODIFY `id_vaksinator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
