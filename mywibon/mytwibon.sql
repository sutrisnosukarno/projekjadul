-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytwibon`
--

-- --------------------------------------------------------

--
-- Table structure for table `twibon`
--

CREATE TABLE `twibon` (
  `id_twibon` int(20) UNSIGNED NOT NULL,
  `gambar_twibon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `twibon`
--

INSERT INTO `twibon` (`id_twibon`, `gambar_twibon`) VALUES
(16, '1672-WhatsAppImage2024-08-07at8.39.19AM.png'),
(17, '1639-WhatsAppImage2024-08-07at8.39.19AM.png'),
(18, '7543-WhatsAppImage2024-08-07at8.39.19AM.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twibon`
--
ALTER TABLE `twibon`
  ADD PRIMARY KEY (`id_twibon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twibon`
--
ALTER TABLE `twibon`
  MODIFY `id_twibon` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
