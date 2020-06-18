-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 09:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkps_lpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas_tabel`
--

CREATE TABLE `fakultas_tabel` (
  `id_fakultas` int(11) NOT NULL,
  `kode_fakultas` varchar(10) DEFAULT NULL,
  `nama_fakultas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_tabel`
--

CREATE TABLE `kriteria_tabel` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(10) DEFAULT NULL,
  `nama_kriteria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_asing_tabel`
--

CREATE TABLE `mahasiswa_asing_tabel` (
  `is_mhs_asing` int(11) NOT NULL,
  `prodi_kode` varchar(10) DEFAULT NULL,
  `tahun_akademik_asing` date DEFAULT NULL,
  `jumlahmhsaktif_asing` int(11) DEFAULT NULL,
  `jumlahmhsfull_asing` int(11) DEFAULT NULL,
  `jumlahmhspart_asing` int(11) DEFAULT NULL,
  `kriteria_kode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_seleksi_tabel`
--

CREATE TABLE `mahasiswa_seleksi_tabel` (
  `id_mhs_seleksi` int(11) NOT NULL,
  `prodi_kode` int(11) DEFAULT NULL,
  `tahun_akademik` date DEFAULT NULL,
  `daya_tampung` int(11) DEFAULT NULL,
  `pendaftar_msh` int(11) DEFAULT NULL,
  `lulus_seleksi_mhs` int(11) DEFAULT NULL,
  `reguler_baru_mhs` int(11) DEFAULT NULL,
  `transfer_baru_mhs` int(11) DEFAULT NULL,
  `reguler_aktif_mhs` int(11) DEFAULT NULL,
  `transferaktif_mhs` int(11) DEFAULT NULL,
  `kriteria_kode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodi_tabel`
--

CREATE TABLE `prodi_tabel` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` int(11) DEFAULT NULL,
  `fakultas_kode` int(11) DEFAULT NULL,
  `nama_prodi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_tabel`
--

CREATE TABLE `user_tabel` (
  `id_user` int(11) NOT NULL,
  `prodi_kode` varchar(10) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `level_user` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas_tabel`
--
ALTER TABLE `fakultas_tabel`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD UNIQUE KEY `kode_fakultas` (`kode_fakultas`);

--
-- Indexes for table `kriteria_tabel`
--
ALTER TABLE `kriteria_tabel`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD UNIQUE KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indexes for table `mahasiswa_asing_tabel`
--
ALTER TABLE `mahasiswa_asing_tabel`
  ADD PRIMARY KEY (`is_mhs_asing`);

--
-- Indexes for table `mahasiswa_seleksi_tabel`
--
ALTER TABLE `mahasiswa_seleksi_tabel`
  ADD PRIMARY KEY (`id_mhs_seleksi`);

--
-- Indexes for table `prodi_tabel`
--
ALTER TABLE `prodi_tabel`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `kode_prodi` (`kode_prodi`);

--
-- Indexes for table `user_tabel`
--
ALTER TABLE `user_tabel`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas_tabel`
--
ALTER TABLE `fakultas_tabel`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria_tabel`
--
ALTER TABLE `kriteria_tabel`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa_asing_tabel`
--
ALTER TABLE `mahasiswa_asing_tabel`
  MODIFY `is_mhs_asing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa_seleksi_tabel`
--
ALTER TABLE `mahasiswa_seleksi_tabel`
  MODIFY `id_mhs_seleksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi_tabel`
--
ALTER TABLE `prodi_tabel`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tabel`
--
ALTER TABLE `user_tabel`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
