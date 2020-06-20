-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 07:40 PM
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
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `nama_jabatan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `nama_jabatan`, `keterangan`) VALUES
('dp_mtc', 'Departemen Maintenance', ''),
('dp_mtm', 'Departemen Multimedia', ''),
('dp_nwk', 'Departemen Network', ''),
('dp_sft', 'Departemen Software', ''),
('dv_hrd', 'Divisi HRD', ''),
('dv_hum', 'Divisi Humas', ''),
('dv_krt', 'Divisi KRT', ''),
('dv_wsh', 'Divisi Workshop', ''),
('id_ltb', 'Litbang', ''),
('pi_adm', 'Administrator', ''),
('pi_sek', 'Sekretaris', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_22_110105_create_users_table', 1),
(2, '2020_03_22_130351_create_jabatan_table', 1),
(3, '2020_03_22_130922_create_piket_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `piket`
--

CREATE TABLE `piket` (
  `id_piket` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `mulai_piket` time NOT NULL,
  `selesai_piket` time DEFAULT NULL,
  `aktivitas` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `piket`
--

INSERT INTO `piket` (`id_piket`, `nim`, `mulai_piket`, `selesai_piket`, `aktivitas`, `created_at`, `updated_at`) VALUES
(1, '3.34.17.1.03', '22:02:33', '22:17:25', 'Menyapu ruang PC', '2020-06-18 15:02:33', '2020-06-18 08:17:25'),
(2, '3.34.18.0.10', '22:02:53', '22:20:32', 'Mengelap', '2020-06-18 15:02:53', '2020-06-18 08:20:32'),
(3, '3.34.18.0.12', '22:20:18', '22:21:06', 'Merapikan rak buku', '2020-06-18 15:20:18', '2020-06-18 08:21:06'),
(4, '3.34.17.0.05', '22:21:25', '22:28:07', 'Membuat proposal', '2020-06-18 15:21:25', '2020-06-18 08:28:07'),
(5, '3.34.18.0.16', '22:28:37', NULL, 'Menyapu teras', '2020-06-18 15:28:37', '2020-06-18 15:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kode_jabatan` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `periode` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `nama`, `kode_jabatan`, `periode`) VALUES
('3.34.17.0.05', 'Afebrianna Setyaningsih', 'id_ltb', '2019/2020'),
('3.34.17.1.03', 'Arga Aji Setyaji', 'pi_adm', '2019/2020'),
('3.34.18.0.10', 'Eka Novi Ana', 'pi_sek', '2019/2020'),
('3.34.18.0.12', 'Ilham Budi Prasetyo', 'dp_sft', '2019/2020'),
('3.34.18.0.16', 'Muhammad Irhammul Umam', 'dp_sft', '2019/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piket`
--
ALTER TABLE `piket`
  ADD PRIMARY KEY (`id_piket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `piket`
--
ALTER TABLE `piket`
  MODIFY `id_piket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
