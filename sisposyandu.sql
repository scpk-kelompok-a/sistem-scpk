-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 03:57 PM
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
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(1, 'Kurangi Garam dan perbanyak sayur berserat tinggi, Berolahraga minimal 3x seminggu,  Menghindari angin malam, Tidak berolahraga berat, Mengurangi banyak pikiran, Mengurangi makan daging kambing\r\n'),
(2, 'Perbanyak minum vitamin dan olahraga teratur, Menghindari makan makanan pedas dan asam, Menghindari angin malam, Tidak berolahraga berat'),
(3, 'Saran pola makan untuk diabetes mengurangi minuman manis, nasi putih dan makanan berbahan dasar tepung terigu, saus salad, dan madu, Jangan olahraga terlalu berat, Menghindari angin malam'),
(4, 'Menghindari makanan berlemak tinggi dan berolahraga minimal 15 menit sehari, Jangan olahraga terlalu berat, Menghindari angin malam'),
(5, 'Makan sayur dan buah-buahan, hindari rokok, Menghindari makan makanan pedas dan asam, Menghindari angin malam, Tidak berolahraga berat'),
(6, 'Menghindari tidur terlalu malam namun harus tetap istirahat yang cukup, Menghindari angin malam, Tidak berolahraga berat'),
(7, 'Pemberian obat untuk hipertensi dan mengurangi konsumsi daging kambing, kopi, acar, saus kalengan, kulit ayam, dan makanan berlemak lainnya'),
(8, 'Kurangi makan yang berlemak, kurangi garam,sering berolahraga dan perbanyak sayur yang berserat '),
(9, 'Minum vitamin, kurangi makan sembarang, kurangi banyak pikiran dan jangan tidur terlalu malam dan perbanyak makanan berserat'),
(10, 'Pemberian obat jantung, mengurangi olah raga berat, dan istirahat yang cukup, dan kurangi garam, banyakin makan nutrisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
