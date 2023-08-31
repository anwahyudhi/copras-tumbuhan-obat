-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2020 at 11:19 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'ironman', 'ironman', 'Herbalist');

-- --------------------------------------------------------

--
-- Table structure for table `tumbuhan_obat`
--

CREATE TABLE `tumbuhan_obat` (
  `id_tumbuhan` int(11) NOT NULL,
  `nama_tumbuhan` varchar(255) NOT NULL,
  `khasiat` varchar(255) NOT NULL,
  `cara_pengolahan` varchar(255) NOT NULL,
  `cara_penggunaan` varchar(255) NOT NULL,
  `bagian_tumbuhan` varchar(255) NOT NULL,
  `jenis_tumbuhan` varchar(255) NOT NULL,
  `resep` text,
  `gambar` varchar(255) DEFAULT NULL,
  `qi` float DEFAULT NULL,
  `pi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tumbuhan_obat`
--

INSERT INTO `tumbuhan_obat` (`id_tumbuhan`, `nama_tumbuhan`, `khasiat`, `cara_pengolahan`, `cara_penggunaan`, `bagian_tumbuhan`, `jenis_tumbuhan`, `resep`, `gambar`, `qi`, `pi`) VALUES
(218, 'Kayu Manis', 'Maag', 'Direbus', 'Diminum', 'Batang', 'Pohon', NULL, NULL, 0.126356, NULL),
(219, 'Akar Kuning', 'Cacingan', 'Direbus', 'Diminum', 'Batang', 'Liana', NULL, NULL, 0.249375, NULL),
(220, 'Puring', 'Cacingan', 'Direbus', 'Diminum', 'Batang', 'Herba', NULL, NULL, 0.249375, NULL),
(221, 'Hiring', 'Maag', 'Langsung', 'Dimakan', 'Batang', 'Semak', NULL, NULL, 0.0330931, NULL),
(222, 'Pulutan', 'Sakit Gigi', 'Langsung', 'Dimakan', 'Batang', 'Semak', NULL, NULL, 0.192635, NULL),
(223, 'Hanjuang/Andong', 'Sembelit', 'Direbus', 'Diminum', 'Akar', 'Herba', NULL, NULL, 0.108315, NULL),
(224, 'Arben/Rerendem', 'Disentri', 'Direbus', 'Diminum', 'Akar', 'Perdu', NULL, NULL, 0.178469, NULL),
(225, 'Bunga Pagoda', 'Ambeien', 'Direbus', 'Diminum', 'Akar', 'Perdu', NULL, NULL, 0.218514, NULL),
(226, 'Litu/Mintu', 'Sakit Gigi', 'Dihaluskan', 'Dioles', 'Akar', 'Semak', NULL, NULL, 0.297709, NULL),
(227, 'Jati Belanda', 'Diare', 'Dihaluskan', 'Diminum', 'Biji', 'Pohon', NULL, NULL, 0.0342053, 40.4762),
(228, 'Pepaya', 'Cacingan', 'Dihaluskan', 'Diminum', 'Biji', 'Pohon', NULL, NULL, 0.100938, NULL),
(229, 'Kemangi', 'Disentri', 'Direbus', 'Diminum', 'Biji', 'Herba', NULL, NULL, 0.178469, NULL),
(230, 'Daruju', 'Cacingan', 'Dihaluskan', 'Diminum', 'Biji', 'Perdu', NULL, NULL, 0.100938, NULL),
(231, 'Srigading', 'Sembelit', 'Direbus', 'Diminum', 'Biji', 'Perdu', NULL, NULL, 0.108315, NULL),
(232, 'Kacapiring', 'Sembelit', 'Direbus', 'Diminum', 'Biji', 'Perdu', NULL, NULL, 0.108315, NULL),
(233, 'Belimbing Wuluh', 'Usus Buntu', 'Dihaluskan', 'Diminum', 'Buah', 'Pohon', NULL, NULL, NULL, NULL),
(234, 'Kwalot/Buah Makassar', 'Ambeien', 'Dihaluskan', 'Diminum', 'Buah', 'Pohon', NULL, NULL, 0.0884459, NULL),
(235, 'Tangkuhis/Mata Kucing', 'Sakit Perut', 'Langsung', 'Dimakan', 'Buah', 'Pohon', NULL, NULL, 0.0760626, NULL),
(236, 'Kinai/Langsat', 'Sembelit', 'Langsung', 'Dimakan', 'Buah', 'Pohon', NULL, NULL, 0.0283681, NULL),
(237, 'Buah/Tongkol Ulur-ulur', 'Ambeien', 'Direbus', 'Diminum', 'Buah', 'Liana', NULL, NULL, 0.218514, NULL),
(238, 'Mengkudu', 'Sembelit', 'Dihaluskan', 'Diminum', 'Buah', 'Semak', NULL, NULL, 0.0438416, NULL),
(239, 'Akar Letup/Ciplukan', 'Sariawan', 'Langsung', 'Dimakan', 'Buah', 'Semak', NULL, NULL, 0.101656, NULL),
(240, 'Kenop', 'Disentri', 'Direbus', 'Diminum', 'Bunga', 'Herba', NULL, NULL, 0.178469, NULL),
(241, 'Biduri', 'Maag', 'Direbus', 'Diminum', 'Bunga', 'Perdu', NULL, NULL, 0.126356, NULL),
(242, 'Daun Kayu Putih', 'Sakit Perut', 'Dihaluskan', 'Dioles', 'Daun', 'Pohon', NULL, NULL, 0.117551, NULL),
(243, 'Nangka Belanda/Sirsak', 'Diare', 'Direbus', 'Diminum', 'Daun', 'Pohon', NULL, NULL, 0.0845071, 100),
(244, 'Jambu Biji', 'Diare', 'Direbus', 'Diminum', 'Daun', 'Pohon', NULL, NULL, 0.0845071, 100),
(245, 'Daun Salam', 'Diare', 'Direbus', 'Diminum', 'Daun', 'Pohon', NULL, NULL, 0.0845071, 100),
(246, 'Salam', 'Maag', 'Direbus', 'Diminum', 'Daun', 'Pohon', NULL, NULL, 0.126356, NULL),
(247, 'Sikas', 'Maag', 'Direbus', 'Diminum', 'Daun', 'Pohon', NULL, NULL, 0.126356, NULL),
(248, 'Limpasu', 'Sakit Perut', 'Direbus', 'Diminum', 'Daun', 'Pohon', NULL, NULL, 0.290421, NULL),
(249, 'Arok/Ara', 'Diare', 'Langsung', 'Dimakan', 'Daun', 'Pohon', NULL, NULL, 0.0221328, 26.1905),
(250, 'Ombung-ombung/Sembung', 'Diare', 'Direbus', 'Diminum', 'Daun', 'Herba', NULL, NULL, 0.0845071, 100),
(251, 'Sisik naga', 'Sariawan', 'Direbus', 'Dikumur', 'Daun', 'Liana', NULL, NULL, 0.388141, NULL),
(252, 'Sirih', 'Sakit Gigi', 'Langsung', 'Dimakan', 'Daun', 'Liana', NULL, NULL, 0.192635, NULL),
(253, 'Kakabat Biru', 'Diare', 'Dihaluskan', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.0342053, 40.4762),
(254, 'Sangkariho', 'Diare', 'Dihaluskan', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.0342053, 40.4762),
(255, 'Daun manggala', 'Sakit Perut', 'Dihaluskan', 'Dioles', 'Daun', 'Perdu', NULL, NULL, 0.117551, NULL),
(256, 'Duriot', 'Sembelit', 'Dihaluskan', 'Dioles', 'Daun', 'Perdu', NULL, NULL, 0.0438416, NULL),
(257, 'Sembung', 'Maag', 'Direbus', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.126356, NULL),
(258, 'Kelor', 'Sembelit', 'Direbus', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.108315, NULL),
(259, 'Kusuma Indrat/Patikan Kerbau', 'Diare', 'Direbus', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.0845071, 100),
(260, 'Sambiloto', 'Diare', 'Direbus', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.0845071, 100),
(261, 'Saga rambat', 'Sariawan', 'Langsung', 'Dikumur', 'Daun', 'Perdu', NULL, NULL, 0.101656, NULL),
(262, 'Uduk-uduk/Karamunting', 'Sariawan', 'Langsung', 'Dimakan', 'Daun', 'Perdu', NULL, NULL, 0.101656, NULL),
(263, 'Daun ungu', 'Ambeien', 'Direbus', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.218514, NULL),
(264, 'Sembora/Tembora', 'Sakit Perut', 'Dihaluskan', 'Dioles', 'Daun', 'Semak', NULL, NULL, 0.117551, NULL),
(265, 'Iler/Miana', 'Ambeien', 'Direbus', 'Diminum', 'Daun', 'Semak', NULL, NULL, 0.218514, NULL),
(266, 'Katuk', 'Sembelit', 'Direbus', 'Diminum', 'Daun', 'Semak', NULL, NULL, 0.108315, NULL),
(267, 'Tabang', 'Diare', 'Direbus', 'Diminum', 'Daun', 'Perdu', NULL, NULL, 0.0845071, 100),
(268, 'Rinyuang', 'Sembelit', 'Direbus', 'Dioles', 'Daun', 'Pohon', NULL, NULL, 0.108315, NULL),
(269, 'Pulai', 'Sakit Gigi', 'Langsung', 'Dioles', 'Getah', 'Pohon', NULL, NULL, 0.192635, NULL),
(270, 'Patah tulang', 'Sakit Gigi', 'Langsung', 'Dioles', 'Getah', 'Perdu', NULL, NULL, 0.192635, NULL),
(271, 'Sengkuang', 'Diare', 'Direbus', 'Diminum', 'Kulit Batang', 'Pohon', NULL, NULL, 0.0845071, 100),
(272, 'Bungur', 'Diare', 'Direbus', 'Diminum', 'Kulit Batang', 'Pohon', NULL, NULL, 0.0845071, 100),
(273, 'Kayu Serai', 'Ambaien', 'Direbus', 'Diminum', 'Kulit batang', 'Pohon', NULL, NULL, NULL, NULL),
(274, 'Jambu Mede', 'Sembelit', 'Direbus', 'Diminum', 'Kulit Batang', 'Pohon', NULL, NULL, 0.108315, NULL),
(275, 'Pempeng/Mahang Damar', 'Diare', 'Dihaluskan', 'Diminum', 'Kulit Batang', 'Pohon', NULL, NULL, 0.0342053, 40.4762),
(276, 'Manggis', 'Sakit Perut', 'Direbus', 'Diminum', 'Buah', 'Pohon', NULL, NULL, 0.290421, NULL),
(277, 'Jombang', 'Maag', 'Direbus', 'Diminum', 'Semua', 'Herba', NULL, NULL, 0.126356, NULL),
(278, 'Bandotan', 'Sariawan', 'Direbus', 'Diminum', 'Semua', 'Herba', NULL, NULL, 0.388141, NULL),
(279, 'Tali Putri', 'Disentri', 'Direbus', 'Diminum', 'Semua', 'Liana', NULL, NULL, 0.178469, NULL),
(280, 'Putri malu', 'Cacingan', 'Direbus', 'Diminum', 'Semua', 'Perdu', NULL, NULL, 0.249375, NULL),
(281, 'Kucing - Kucingan', 'Sembelit', 'Direbus', 'Diminum', 'Semua', 'Perdu', NULL, NULL, 0.108315, NULL),
(282, 'Pegagan', 'Ambaien', 'Direbus', 'Diminum', 'Semua', 'Semak', NULL, NULL, NULL, NULL),
(283, 'Meniran', 'Disentri', 'Direbus', 'Diminum', 'Semua', 'Semak', NULL, NULL, 0.178469, NULL),
(284, 'Ahiok/Jahe', 'Diare', 'Dihaluskan', 'Diminum', 'Umbi', 'Herba', NULL, NULL, 0.0342053, 40.4762),
(285, 'Temu Rapet', 'Disentri', 'Dihaluskan', 'Diminum', 'Umbi', 'Herba', NULL, NULL, 0.0722375, NULL),
(286, 'Kunyit', 'Maag', 'Dihaluskan', 'Diminum', 'Umbi', 'Herba', NULL, NULL, 0.0511439, NULL),
(287, 'Kencur', 'Maag', 'Direbus', 'Diminum', 'Umbi', 'Herba', NULL, NULL, 0.126356, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tumbuhan_obat`
--
ALTER TABLE `tumbuhan_obat`
  ADD PRIMARY KEY (`id_tumbuhan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tumbuhan_obat`
--
ALTER TABLE `tumbuhan_obat`
  MODIFY `id_tumbuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
