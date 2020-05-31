-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 11:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piket_pcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `piket`
--

CREATE TABLE `piket` (
  `id_piket` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_piket` time NOT NULL,
  `selesai_piket` time DEFAULT NULL,
  `aktivitas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `piket`
--

INSERT INTO `piket` (`id_piket`, `nim`, `mulai_piket`, `selesai_piket`, `aktivitas`, `created_at`, `updated_at`) VALUES
(1, '3.34.18.0.01', '21:39:07', '16:31:15', 'Menyapu EDIT', '2020-05-27 14:39:07', '2020-05-30 02:31:15'),
(2, '3.34.18.0.04', '21:46:14', '16:31:28', 'Tidur EDIT', '2020-05-27 14:44:14', '2020-05-30 02:31:28'),
(3, '3.34.18.0.05', '10:45:08', '12:45:08', 'Makan', '2020-05-29 03:45:08', '2020-05-29 05:45:08'),
(5, '3.34.18.0.01', '01:09:00', '01:09:00', 'Tidur', '2020-05-28 11:09:11', '2020-05-28 11:09:11'),
(6, '3.34.18.0.03', '20:11:55', '03:09:00', 'Nulis', '2020-05-28 13:12:15', '2020-05-28 13:12:15'),
(7, '3.34.18.0.02', '20:11:55', '18:57:00', 'Meng', '2020-05-29 04:57:47', '2020-05-29 04:57:47'),
(8, '3.34.18.0.02', '12:07:23', '19:07:00', 'Nulis aja', '2020-05-29 05:07:23', '2020-05-29 05:07:23'),
(9, '3.34.18.0.02', '04:58:45', '04:58:00', 'Mengelap', '2020-05-29 21:58:45', '2020-05-29 21:58:45'),
(10, '3.34.18.0.01', '06:02:24', '06:02:00', 'null', '2020-05-29 23:02:24', '2020-05-29 23:02:24'),
(11, '3.34.18.0.04', '08:29:07', '08:29:00', 'Mancing', '2020-05-30 01:29:07', '2020-05-30 01:29:07'),
(12, '3.34.18.0.01', '14:40:56', '16:31:37', 'Pacaran', '2020-05-30 07:40:56', '2020-05-30 02:31:37'),
(13, '3.34.18.0.03', '15:40:19', '15:40:42', 'Cek', '2020-05-31 08:40:19', '2020-05-31 01:40:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `piket`
--
ALTER TABLE `piket`
  ADD PRIMARY KEY (`id_piket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `piket`
--
ALTER TABLE `piket`
  MODIFY `id_piket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
