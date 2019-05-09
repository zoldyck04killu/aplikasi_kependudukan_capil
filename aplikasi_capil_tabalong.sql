-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2019 at 06:53 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_capil_tabalong`
--

-- --------------------------------------------------------

--
-- Table structure for table `akte_kelahiran`
--

CREATE TABLE `akte_kelahiran` (
  `id_akte` int(100) NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anakke` int(5) NOT NULL,
  `status_cetak` int(5) NOT NULL DEFAULT 0,
  `tanggal_permohonan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_cetak`
--

CREATE TABLE `hasil_cetak` (
  `NIK` int(30) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `jenis_permohonan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_cetak`
--

INSERT INTO `hasil_cetak` (`NIK`, `nama`, `tgl_permohonan`, `status`, `jenis_permohonan`) VALUES
(11212, 'dadang', '2019-05-08', 1, 'KTP'),
(231321, 'budi', '2019-05-08', 0, 'Kartu Keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `nik` int(20) NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodenopro` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodenokab` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kdoenokec` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodenokel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_cetak` int(5) NOT NULL DEFAULT 0,
  `tanggal_permohonan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`nik`, `nama`, `alamat`, `kodepos`, `telp`, `kodenopro`, `kodenokab`, `kdoenokec`, `kodenokel`, `status_cetak`, `tanggal_permohonan`) VALUES
(231321, 'budi', 'jln', '123121', '086345342', '2312', '1231', '1234', '6453', 0, '2019-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `nik` int(20) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_cetak` int(5) NOT NULL DEFAULT 0,
  `tanggal_permohonan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `alamat`, `rt`, `rw`, `agama`, `kewarganegaraan`, `status_cetak`, `tanggal_permohonan`) VALUES
(11212, 'dadang', '2019-05-05', 'barabai', 'laki-laki', 'jln', '4', '2', 'islam', 'WNI', 1, '2019-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `nik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`nik`, `saran`) VALUES
('123', 'bla bla bla bla blas jasbagcsac');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hak_akses` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '$2y$10$PQoM7kJJEQ3MpEIRglI/supSWRjxb65zymOafthLHmOZxGCSSmS5W', 2),
(3, 'koko', '$2y$10$pKoReVjO5lBhDSSkWc1KPuBNK/1kS3uLCSymhEk95Hb6/AsGJnj0.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akte_kelahiran`
--
ALTER TABLE `akte_kelahiran`
  ADD PRIMARY KEY (`id_akte`);

--
-- Indexes for table `hasil_cetak`
--
ALTER TABLE `hasil_cetak`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akte_kelahiran`
--
ALTER TABLE `akte_kelahiran`
  MODIFY `id_akte` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
