-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 01:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(2) NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bidan`
--

CREATE TABLE `bidan` (
  `id_bidan` int(11) NOT NULL,
  `nama_bidan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dataalternatifkriteria`
--

CREATE TABLE `dataalternatifkriteria` (
  `id_data` int(11) NOT NULL,
  `Nilai` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `id_kader` int(11) NOT NULL,
  `nama_kader` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `nama_keluhan` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kms_lansia`
--

CREATE TABLE `kms_lansia` (
  `id_lansia` int(11) NOT NULL,
  `nama_lansia` varchar(25) NOT NULL,
  `id_pendamping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(25) NOT NULL,
  `bobot` int(11) NOT NULL,
  `sifat` int(11) NOT NULL,
  `satuan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_periksa` int(11) NOT NULL,
  `TglPosyandu` date NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `suhu_tubuh` float NOT NULL,
  `id_lansia` int(11) NOT NULL,
  `id_kader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendamping`
--

CREATE TABLE `pendamping` (
  `id_pendamping` int(11) NOT NULL,
  `nama_pendamping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pohon`
--

CREATE TABLE `pohon` (
  `id_node` int(11) NOT NULL,
  `pertanyaan` varchar(25) NOT NULL,
  `id_ya` int(11) NOT NULL,
  `id_tidak` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `polamakanhidup`
--

CREATE TABLE `polamakanhidup` (
  `id_pola` int(11) NOT NULL,
  `nama_pola` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayatpenyakit`
--

CREATE TABLE `riwayatpenyakit` (
  `id_riwayat` int(11) NOT NULL,
  `nama_riwayat` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indexes for table `dataalternatifkriteria`
--
ALTER TABLE `dataalternatifkriteria`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`id_kader`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- Indexes for table `kms_lansia`
--
ALTER TABLE `kms_lansia`
  ADD PRIMARY KEY (`id_lansia`),
  ADD KEY `id_pendamping` (`id_pendamping`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_lansia` (`id_lansia`),
  ADD KEY `id_kader` (`id_kader`);

--
-- Indexes for table `pendamping`
--
ALTER TABLE `pendamping`
  ADD PRIMARY KEY (`id_pendamping`);

--
-- Indexes for table `pohon`
--
ALTER TABLE `pohon`
  ADD PRIMARY KEY (`id_node`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `polamakanhidup`
--
ALTER TABLE `polamakanhidup`
  ADD PRIMARY KEY (`id_pola`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- Indexes for table `riwayatpenyakit`
--
ALTER TABLE `riwayatpenyakit`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_periksa` (`id_periksa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dataalternatifkriteria`
--
ALTER TABLE `dataalternatifkriteria`
  ADD CONSTRAINT `dataalternatifkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`),
  ADD CONSTRAINT `dataalternatifkriteria_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`);

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`);

--
-- Constraints for table `kms_lansia`
--
ALTER TABLE `kms_lansia`
  ADD CONSTRAINT `kms_lansia_ibfk_1` FOREIGN KEY (`id_pendamping`) REFERENCES `pendamping` (`id_pendamping`);

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`id_lansia`) REFERENCES `kms_lansia` (`id_lansia`),
  ADD CONSTRAINT `pemeriksaan_ibfk_2` FOREIGN KEY (`id_kader`) REFERENCES `kader` (`id_kader`);

--
-- Constraints for table `pohon`
--
ALTER TABLE `pohon`
  ADD CONSTRAINT `pohon_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `polamakanhidup`
--
ALTER TABLE `polamakanhidup`
  ADD CONSTRAINT `polamakanhidup_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`);

--
-- Constraints for table `riwayatpenyakit`
--
ALTER TABLE `riwayatpenyakit`
  ADD CONSTRAINT `riwayatpenyakit_ibfk_1` FOREIGN KEY (`id_periksa`) REFERENCES `pemeriksaan` (`id_periksa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
