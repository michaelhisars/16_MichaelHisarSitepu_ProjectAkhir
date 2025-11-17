-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 01:08 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `kode_menu` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_menu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` enum('Makanan','Minuman','Snack','Dessert') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `status_ketersediaan` enum('Tersedia','Habis') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`kode_menu`, `nama_menu`, `kategori`, `harga`, `status_ketersediaan`, `deskripsi`) VALUES
('D0001', 'Crème brûlée', 'Dessert', 60000, 'Habis', 'Crème brûlée adalah hidangan penutup klasik Prancis berupa custard krim yang kaya rasa, disajikan dengan lapisan gula karamel keras yang harus dipecahkan dengan sendok sebelum dimakan.'),
('M0001', 'Foie Gras', 'Makanan', 85000, 'Habis', 'Foie Gras adalah hidangan mewah Prancis berupa hati angsa atau bebek yang digemukkan khusus. Hidangan ini dikenal karena teksturnya yang sangat halus, buttery, dan kaya rasa.'),
('N0001', 'Iced Tea', 'Minuman', 40000, 'Tersedia', 'Iced Tea adalah minuman non-alkohol klasik yang dibuat dari teh yang diseduh, didinginkan, dan disajikan dengan es, seringkali ditambahkan gula dan irisan lemon sederhana.'),
('S0001', 'French Fries', 'Snack', 45000, 'Habis', 'Potongan kentang yang digoreng hingga renyah di luar dan lembut di dalam, disajikan hangat dan dibumbui dengan garam, cocok sebagai hidangan sampingan atau camilan klasik.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jeniskelamin` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `tanggal_lahir`, `jeniskelamin`, `username`, `password`) VALUES
(3, 'Michael Hisar Sitepu', '2007-11-18', 'Laki-Laki', 'michael', '$2y$10$HbniZdr6faWjnl5zFEK53uGOYZjwBizkLFk7tQgPqr8ap4wZd5RCi'),
(4, 'Budi Haryono', '1998-11-23', 'Laki-Laki', 'budi', '$2y$10$5y.ZFZr6XNeMPgFfSDkkYeSACn/MwyVWe4cdVyY/xnHAwq8zit3qm'),
(5, 'Omar Hamizan', '1971-11-23', 'Perempuan', 'omar', '$2y$10$XGR3k4ccV6l3bRTouEYZeelt2XD331rcCpNY.knQcu4cvwyT/szC2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`kode_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
