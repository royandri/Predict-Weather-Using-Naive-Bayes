-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 07:12 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_naive`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dataset`
--

CREATE TABLE `tbl_dataset` (
  `id_dataset` int(11) NOT NULL,
  `temperatur` int(11) NOT NULL,
  `kelembapan` int(11) NOT NULL,
  `kecepatan_angin` int(11) NOT NULL,
  `prediksi_cuaca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dataset`
--

INSERT INTO `tbl_dataset` (`id_dataset`, `temperatur`, `kelembapan`, `kecepatan_angin`, `prediksi_cuaca`) VALUES
(1, 27, 86, 8, 'Hujan'),
(2, 28, 82, 9, 'Hujan'),
(3, 28, 79, 10, 'Hujan'),
(4, 30, 72, 11, 'Hujan'),
(5, 30, 70, 11, 'Hujan'),
(6, 31, 68, 11, 'Hujan'),
(7, 31, 68, 10, 'Hujan'),
(8, 25, 93, 5, 'Berawan'),
(9, 25, 94, 4, 'Berawan'),
(10, 24, 95, 4, 'Berawan'),
(11, 24, 96, 4, 'Berawan'),
(12, 25, 92, 4, 'Berawan'),
(13, 25, 93, 3, 'Berawan'),
(14, 28, 78, 5, 'Berawan'),
(15, 23, 98, 2, 'Berawan'),
(16, 26, 90, 6, 'Berawan'),
(17, 23, 85, 9, 'Berawan'),
(18, 26, 70, 9, 'Berawan'),
(19, 22, 58, 7, 'Cerah'),
(20, 24, 56, 6, 'Cerah'),
(21, 24, 56, 9, 'Cerah'),
(22, 29, 28, 7, 'Cerah'),
(23, 28, 29, 8, 'Cerah'),
(24, 27, 34, 10, 'Cerah'),
(25, 25, 40, 11, 'Cerah'),
(26, 22, 49, 13, 'Cerah'),
(27, 23, 45, 12, 'Cerah'),
(28, 29, 48, 12, 'Cerah'),
(29, 29, 50, 13, 'Cerah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dataset`
--
ALTER TABLE `tbl_dataset`
  ADD PRIMARY KEY (`id_dataset`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dataset`
--
ALTER TABLE `tbl_dataset`
  MODIFY `id_dataset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
