-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 05:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisposyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `kms`
--

CREATE TABLE `kms` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lansia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pendamping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` int(11) NOT NULL,
  `suhu` int(11) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pola_hidup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pola_makan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kms`
--

INSERT INTO `kms` (`id`, `nama_lansia`, `nama_pendamping`, `usia`, `jenis_kelamin`, `alamat`, `berat`, `suhu`, `tekanan_darah`, `keluhan`, `riwayat_penyakit`, `pola_hidup`, `pola_makan`, `created_at`, `updated_at`) VALUES
(1, 'Tono', 'Maman', 66, 'Pria', 'Jl soekarno no 7', 56, 34, 144, 'Masuk angin', 'Diabetes', 'Berolahraga 3x Seminggu', 'Makan Makanan Berlemak 7x Seminggu', '2020-06-13 02:42:42', '2020-06-13 08:22:54'),
(2, 'Ujang', 'Toni', 66, 'Pria', 'Jl soekarno no 5', 55, 33, 143, 'Masuk angin', 'Diabetes', 'Berolahraga 3x Seminggu', 'Makan Makanan Berlemak 5x Seminggu', '2020-06-13 04:33:25', '2020-06-13 04:33:25'),
(3, 'John', 'Doe', 77, 'Pria', 'Jl soekarno no 6', 55, 35, 141, 'Sesak nafas', 'Diabetes', 'Berolahraga 3x Seminggu', 'Tidak Konsumsi Makanan Berlemak', '2020-06-13 05:54:43', '2020-06-13 05:54:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kms`
--
ALTER TABLE `kms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kms`
--
ALTER TABLE `kms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
