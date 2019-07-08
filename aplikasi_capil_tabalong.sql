-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2019 at 04:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.7

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
  `no_akte` bigint(200) NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anakke` int(5) NOT NULL,
  `status_cetak` int(5) NOT NULL DEFAULT 0,
  `tanggal_permohonan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akte_kelahiran`
--

INSERT INTO `akte_kelahiran` (`id_akte`, `no_akte`, `nama`, `tanggal_lahir`, `tempat_lahir`, `nama_ayah`, `nama_ibu`, `anakke`, `status_cetak`, `tanggal_permohonan`) VALUES
(3123124, 234234253434, 'Akhmad Syarif', '2019-06-30', 'Tanjung baru', 'Dodi', 'Mutia', 2, 1, '2019-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_cetak`
--

CREATE TABLE `hasil_cetak` (
  `id_cetak` int(200) NOT NULL,
  `nik` bigint(200) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `jenis_permohonan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_cetak`
--

INSERT INTO `hasil_cetak` (`id_cetak`, `nik`, `nama`, `tgl_permohonan`, `status`, `jenis_permohonan`) VALUES
(12, 630904300996008, 'Syarif', '2019-07-08', 1, 'Kartu Keluarga'),
(13, 630904300996008, 'Akhmad Syaruf', '2019-07-08', 0, 'KTP'),
(14, 234234253434, 'Akhmad Syaruf', '2019-07-08', 1, 'Akte Kelahiran');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_kk` int(200) NOT NULL,
  `nik` bigint(200) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodenopro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodenokab` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kdoenokec` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodenokel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_cetak` int(5) NOT NULL DEFAULT 0,
  `tanggal_permohonan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_kk`, `nik`, `nama`, `alamat`, `kodepos`, `telp`, `kodenopro`, `kodenokab`, `kdoenokec`, `kodenokel`, `status_cetak`, `tanggal_permohonan`) VALUES
(6, 630904300996008, 'Akhmad Syarif', 'jln Basuki Rahmat', '71514', '087716514565', 'Kalimantan Selatan', 'Tabalong', 'Tanjung', 'Agung', 1, '2019-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id_ktp` int(200) NOT NULL,
  `nik` bigint(100) NOT NULL,
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

INSERT INTO `ktp` (`id_ktp`, `nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `alamat`, `rt`, `rw`, `agama`, `kewarganegaraan`, `status_cetak`, `tanggal_permohonan`) VALUES
(4, 630904300996008, 'Akhmad Syarif', '2019-07-30', 'Tanjung baru', 'laki-laki', 'jln Basuki Rahmat', '2', '1', 'islam', 'indonesia', 0, '2019-07-08');

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
(3, 'koko', '$2y$10$pKoReVjO5lBhDSSkWc1KPuBNK/1kS3uLCSymhEk95Hb6/AsGJnj0.', 1),
(4, '1231312', '$2y$10$Cxb/mSrmcprgOA7DI6k9o.XfyjuFcftVDuDLLL3H8m0zAll5ZIGYO', 1);

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
  ADD PRIMARY KEY (`id_cetak`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id_ktp`);

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
  MODIFY `id_akte` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3123125;

--
-- AUTO_INCREMENT for table `hasil_cetak`
--
ALTER TABLE `hasil_cetak`
  MODIFY `id_cetak` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_kk` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id_ktp` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
