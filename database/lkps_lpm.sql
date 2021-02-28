-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 11:42 PM
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
-- Table structure for table `bidangmklain_dosen`
--

CREATE TABLE `bidangmklain_dosen` (
  `id_bidangmklain_dosen` int(11) NOT NULL,
  `matakuliah_kodelain` varchar(10) NOT NULL,
  `dosen_kodlelain` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bidang_keahliands`
--

CREATE TABLE `bidang_keahliands` (
  `id_bidangkea` int(11) NOT NULL,
  `nama_bidangkea` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidang_keahliands`
--

INSERT INTO `bidang_keahliands` (`id_bidangkea`, `nama_bidangkea`) VALUES
(1, 'Teknik Pertanian'),
(2, 'TeknologiPendidikan'),
(3, 'Rekayasa E-bisnis'),
(4, 'Telekomunikasi'),
(5, 'Pengelolaan Sumber Daya'),
(6, 'Teknik Informatika'),
(7, 'Alam Dan Lingkungan'),
(8, 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `bntkegiatan_ks`
--

CREATE TABLE `bntkegiatan_ks` (
  `id_kegiatanks` int(11) NOT NULL,
  `nama_kegiatanks` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bntkegiatan_ks`
--

INSERT INTO `bntkegiatan_ks` (`id_kegiatanks`, `nama_kegiatanks`) VALUES
(1, 'Penelitian Bersama'),
(2, 'Gelar Ganda(Dual Degree)'),
(3, 'Gelar Bersama(Joint Degree)'),
(4, 'Pertukaran Mahasiswa'),
(5, 'Penerbitan Berkala Ilmiah'),
(6, 'Pemagangan'),
(7, 'Penyelengaraan Seminar/Konferensi Ilmiah'),
(8, 'Pengabdian Kepada Masyarakat'),
(9, 'Pertukaran Dosen'),
(10, 'Pengembangan Kurikulum'),
(11, 'Penyaluran Lulusan'),
(12, 'Pengiriman Praktiso Sebagai Dosen'),
(13, 'Pelatihan Dosen dan Instruktur'),
(14, 'Kredit Transfer'),
(15, 'Pengembangan Pusat Penelitian & Pengembangan Keilmuan'),
(16, 'Pengembangan Sistem/Produk'),
(17, 'Penelitian Bersama - Artikel/Jurnal Ilmiah'),
(18, 'Penelitian Bersama - Patent'),
(19, 'Penelitian Bersama - Prototype'),
(20, 'Visiting Profesor');

-- --------------------------------------------------------

--
-- Table structure for table `ewmpdosen_tabel`
--

CREATE TABLE `ewmpdosen_tabel` (
  `id_ewmpdosen` int(11) NOT NULL,
  `profildosen_id` int(11) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL,
  `pendps_ak` tinyint(4) DEFAULT NULL,
  `pendps_pt` tinyint(4) DEFAULT NULL,
  `pendps_luar` tinyint(4) DEFAULT NULL,
  `dtps_dosen` tinyint(4) DEFAULT 0,
  `penelitia_dosen` tinyint(4) DEFAULT NULL,
  `pkm_dosen` tinyint(4) DEFAULT NULL,
  `tugas_tmbahan` tinyint(4) DEFAULT NULL,
  `jumlah_sks` tinyint(4) DEFAULT NULL,
  `rata_sks` tinyint(4) DEFAULT NULL,
  `tu_status` tinyint(4) DEFAULT 0,
  `gkm_status` tinyint(4) DEFAULT 0,
  `gpm_status` tinyint(4) DEFAULT 0,
  `lpm_status` tinyint(4) DEFAULT 0,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `fakultas_id` int(11) DEFAULT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ewmpdosen_tabel`
--

INSERT INTO `ewmpdosen_tabel` (`id_ewmpdosen`, `profildosen_id`, `prodi_id`, `pendps_ak`, `pendps_pt`, `pendps_luar`, `dtps_dosen`, `penelitia_dosen`, `pkm_dosen`, `tugas_tmbahan`, `jumlah_sks`, `rata_sks`, `tu_status`, `gkm_status`, `gpm_status`, `lpm_status`, `created_at`, `updated_at`, `fakultas_id`, `keterangan`, `kriteria_kode`) VALUES
(1, 1, 1, 12, 12, 12, 1, 12, NULL, NULL, NULL, NULL, 0, 0, 0, 0, '2021-01-24', NULL, 1, NULL, '33');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas_tabel`
--

CREATE TABLE `fakultas_tabel` (
  `id_fakultas` int(11) NOT NULL,
  `kode_fakultas` varchar(10) DEFAULT NULL,
  `nama_fakultas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas_tabel`
--

INSERT INTO `fakultas_tabel` (`id_fakultas`, `kode_fakultas`, `nama_fakultas`) VALUES
(1, 'FTS', 'Fakultas Teknik and Sains'),
(2, 'FKM', 'Fakultas Kesehatan Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `induk_kriteria`
--

CREATE TABLE `induk_kriteria` (
  `id_induk` int(11) NOT NULL,
  `nama_induk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `induk_kriteria`
--

INSERT INTO `induk_kriteria` (`id_induk`, `nama_induk`) VALUES
(1, 'Tata Pamong, Tata Kelola, & Kerjasama'),
(2, 'Mahasiswa'),
(3, 'Dosen'),
(4, 'Keuanagan'),
(5, 'Kurikulum');

-- --------------------------------------------------------

--
-- Table structure for table `jabatabanak_tabel`
--

CREATE TABLE `jabatabanak_tabel` (
  `id_jabantanak` int(11) NOT NULL,
  `kode_jabatanak` varchar(10) NOT NULL,
  `nama_jabatabak` varchar(100) NOT NULL,
  `level_jabatanak` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama_tabel`
--

CREATE TABLE `kerjasama_tabel` (
  `id_kerjasama` int(11) NOT NULL,
  `prodi_id` int(11) DEFAULT NULL,
  `fakultas_id` int(11) DEFAULT NULL,
  `nama_lembaga` varchar(150) NOT NULL,
  `lokasi_ks` varchar(20) DEFAULT NULL,
  `ting_internasional` tinyint(4) DEFAULT 0,
  `ting_nasional` tinyint(4) DEFAULT 0,
  `ting_lokal` tinyint(4) DEFAULT 0,
  `judul_kegiatanks` varchar(225) DEFAULT NULL,
  `jenispatner_ks` varchar(100) DEFAULT NULL,
  `manfaat_ks` text DEFAULT NULL,
  `awal_ks` date DEFAULT NULL,
  `selesai_ks` date DEFAULT NULL,
  `bukti_ks` text DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `gkm_status` tinyint(4) DEFAULT 0,
  `gpm_status` tinyint(4) DEFAULT 0,
  `lpm_status` tinyint(4) DEFAULT 0,
  `dekan_status` tinyint(4) NOT NULL DEFAULT 0,
  `tu_status` tinyint(4) DEFAULT 0,
  `filedoc_ks` text DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerjasama_tabel`
--

INSERT INTO `kerjasama_tabel` (`id_kerjasama`, `prodi_id`, `fakultas_id`, `nama_lembaga`, `lokasi_ks`, `ting_internasional`, `ting_nasional`, `ting_lokal`, `judul_kegiatanks`, `jenispatner_ks`, `manfaat_ks`, `awal_ks`, `selesai_ks`, `bukti_ks`, `kriteria_kode`, `created_at`, `updated_at`, `gkm_status`, `gpm_status`, `lpm_status`, `dekan_status`, `tu_status`, `filedoc_ks`, `keterangan`) VALUES
(15, 1, 1, 'test lagi dong', 'test bagian', 0, 1, 1, 'tets', 'Institusi Pemerintah LN', '12 cinta palsu', '2020-07-29', '2020-07-31', 'Implementations Agreement', '1', '2020-07-26', '2020-09-29', 1, 1, 0, 0, 0, NULL, NULL),
(16, 1, 1, 'tres & zing pantene', 'trea me', 0, 1, 0, 'tsus', 'Institusi Pemerintah DN', 'Bagaimana bisa ya', '2020-07-23', '2020-07-25', 'MoU', '1', '2020-07-26', '2020-11-29', 1, 1, 0, 0, 0, NULL, 'namanya benar'),
(18, 5, 2, 'test 1', 'bogor', 1, 0, 0, 'SAAS', 'Institusi Pedididkan LN', 'dhad', '2020-07-30', '2020-08-01', 'Implementations Agreement', '1', '2020-07-30', NULL, 1, 1, 0, 0, 0, NULL, NULL),
(19, 1, 1, 'Persahaan Waralaba', 'bogor', 1, 1, 0, 'bawa', 'Institusi Pedididkan DN', 'a', '2020-08-15', '2020-08-20', 'MoU', '1', '2020-08-01', '2020-12-23', 2, 0, 0, 0, 1, NULL, 'namanya typo');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_tabel`
--

CREATE TABLE `kriteria_tabel` (
  `id_kriteria` int(5) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL DEFAULT 'NULL',
  `kriteria_induk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_tabel`
--

INSERT INTO `kriteria_tabel` (`id_kriteria`, `nama_kriteria`, `kriteria_induk`) VALUES
(11, 'Kerjasama', 1),
(21, 'Seleksi Mahasiswa', 2),
(22, 'Mahasiswa Asing', 2),
(31, 'Profil Dosen Tetap', 3),
(32, ' Dosen Pembimbing Utama TA', 3),
(33, 'Dosen Tetap EWMP', 3),
(34, 'Dosen Tidak Tetap', 3),
(35, ' Dosen Industri/Praktisi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_tabel`
--

CREATE TABLE `kurikulum_tabel` (
  `id_matakuliah` int(11) NOT NULL,
  `nama_matkul` varchar(70) DEFAULT NULL,
  `kode_mk` varchar(12) DEFAULT NULL,
  `semester_mk` varchar(5) DEFAULT NULL,
  `mk_kopetensi` varchar(2) DEFAULT '0',
  `bobot_kuliah` tinyint(4) DEFAULT NULL,
  `bobot_seminar` tinyint(4) DEFAULT NULL,
  `bobot_praktik` tinyint(4) DEFAULT NULL,
  `konversi_jam` varchar(10) DEFAULT NULL,
  `cp_sikap` varchar(2) NOT NULL DEFAULT '0',
  `cp_pengetahuan` varchar(2) NOT NULL DEFAULT '0',
  `cp_ketramumum` varchar(2) NOT NULL DEFAULT '0',
  `cp_ketramkhusus` varchar(2) NOT NULL DEFAULT '0',
  `dok_renpembe` varchar(50) DEFAULT NULL,
  `unit_penyeleng` varchar(50) DEFAULT NULL,
  `tu_status` int(2) DEFAULT 1,
  `gkm_status` int(2) DEFAULT 0,
  `gpm_status` int(2) DEFAULT 0,
  `prodi_id` varchar(10) NOT NULL DEFAULT 'NULL',
  `kriteria_id` int(3) NOT NULL DEFAULT 51,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum_tabel`
--

INSERT INTO `kurikulum_tabel` (`id_matakuliah`, `nama_matkul`, `kode_mk`, `semester_mk`, `mk_kopetensi`, `bobot_kuliah`, `bobot_seminar`, `bobot_praktik`, `konversi_jam`, `cp_sikap`, `cp_pengetahuan`, `cp_ketramumum`, `cp_ketramkhusus`, `dok_renpembe`, `unit_penyeleng`, `tu_status`, `gkm_status`, `gpm_status`, `prodi_id`, `kriteria_id`, `created_at`, `deleted_at`) VALUES
(128, 'Aqidah ', 'PAI 111', '1', '', 2, 0, 0, '1.7', '', '', '', '', 'Buku Panduan. Silabus', 'Buku Panduan. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(129, 'Pend. Pancasila & Kewarganegaraan ', 'IHK 110', '1', '', 3, 0, 0, '2.5', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(130, 'Bahasa Inggris + Praktikum', 'PBI 107', '1', '', 2, 0, 1, '4.5', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(131, 'Aljabar dan Geometri', 'SIL 102', '1', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(132, 'Fisika Teknik + Praktikum', 'SIL 103', '1', '', 2, 0, 1, '4.5', '', '', '', '', 'Bahan Ajar', 'Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(133, 'Dasar Komp. dan Pemrograman + Praktikum', 'SIL 106', '1', '', 2, 0, 1, '4.5', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(134, 'Menggambar Rekayasa + Praktikum', 'SIL 107', '1', '', 2, 0, 1, '4.5', '', '', '', '', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(135, 'Statis Tertentu', 'SIL 111', '1', '', 3, 0, 0, '2.5', '', '', '', '', 'Bahan Ajar', 'Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(136, 'Syari\'ah', 'PAI 112', '2', '', 2, 0, 0, '1.7', '', '', '', '', 'Buku Panduan. Silabus', 'Buku Panduan. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(137, 'Turunan dan Integral', 'SIL 105', '2', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(138, 'Statis Tak Tentu', 'SIL 112', '2', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(139, 'Struktur Bangunan', 'SIL 113', '2', '', 3, 0, 0, '2.5', '', '', '', '', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(140, 'Pemetaan dan GIS + Praktikum', 'SIL 121', '2', '', 3, 0, 1, '5.3', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(141, 'Sistem Transportasi + Praktikum', 'SIL 122', '2', '', 3, 0, 1, '5.3', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(142, 'Hidrolika 1 + Praktikum', 'SIL 132', '2', '', 3, 0, 1, '5.3', '', '', '', '', 'Bahan Ajar', 'Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(143, 'Akhlak', 'PAI 211', '3', '', 2, 0, 0, '1.7', '', '', '', '', 'Buku Panduan. Silabus', 'Buku Panduan. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(144, 'Bahasa Indonesia', 'PBI 106', '3', '', 2, 0, 0, '1.7', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(145, 'Statistika dan Probabilitas', 'SIL 202', '3', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(146, 'Matriks', 'SIL 203', '3', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(147, 'Mekanika Bahan ', 'SIL 211', '3', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(148, 'Teknologi Bahan Konstruksi+Praktikum', 'SIL 212', '3', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(149, 'Hidrolika 2+Praktikum', 'SIL 231', '3', '', 3, 0, 1, '5.3', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(150, 'Mekanika Tanah 1+Praktikum', 'SIL 244', '3', '', 4, 0, 1, '6.2', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(151, 'IDI (Islam Disiplin Ilmu)', 'PAI212', '4', '', 2, 0, 0, '1.7', '', '', '', '', 'Buku Panduan. Silabus', 'Buku Panduan. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(152, 'Analisis Sistem Untuk Teknik Sipil', 'SIL 201', '4', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(153, 'Struktur Baja I', 'SIL 214', '4', '', 3, 0, 0, '2.5', '', '', '', '', 'Bahan Ajar', 'Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(154, 'Struktur Beton I', 'SIL 215', '4', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(155, 'Analisis Struk. Met. Matriks+Praktikum', 'SIL 216', '4', '', 3, 0, 1, '5.3', '1', '1', '1', '1', 'Rps. Buku', 'Rps. Buku', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(156, 'Rekayasa Lalulintas+Praktikum', 'SIL 221', '4', '', 3, 0, 1, '5.3', '', '', '', '', 'Bahan Ajar', 'Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(157, 'Rekayasa Hidrologi', 'SIL 233', '4', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(158, 'Mekanika Tanah 2', 'SIL 245', '4', '', 3, 0, 1, '5.3', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(159, 'Ekonomi Teknik', 'SIL 301', '5', '', 2, 0, 0, '1.7', '', '', '', '', 'Bahan Ajar', 'Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(160, 'Manajemen Proyek ', 'SIL 306', '5', '', 2, 0, 0, '1.7', '', '', '', '', 'Bahan Ajar', 'Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(161, 'Struktur Baja 2', 'SIL 312', '5', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(162, 'Struktur Beton 2+Praktikum', 'SIL 316', '5', '', 3, 0, 1, '5.3', '1', '1', '1', '1', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(163, 'Perancangan Geometrik Jalan+Praktikum', 'SIL 321', '5', '', 3, 0, 1, '5.3', '', '', '', '', 'Silabus', 'Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(164, 'Teknik Irigasi+Praktikum', 'SIL 333', '5', '', 3, 0, 1, '5.3', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(165, 'Ilmu Lingkungan dan Sanitasi', 'SIL 334', '5', '', 2, 0, 0, '1.7', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(166, 'Rekayasa Pondasi', 'SIL 341', '5', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(167, 'Kewirausahaan Bidang Keteknikan', 'SIL 302', '6', '', 2, 0, 0, '1.7', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(168, 'AMDAL Pembangunan Infrastruktur', 'SIL 303', '6', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(169, 'Manajemen Konstruksi', 'SIL 305', '6', '', 3, 0, 0, '2.5', '', '', '', '', 'RPS', 'RPS', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(170, 'Perkerasan Jalan 1+Praktikum', 'SIL 323', '6', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(171, 'PTM & Alat Berat', 'SIL 324', '6', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(172, 'Rekayasa Pondasi Lanjut', 'SIL 342', '6', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(173, 'Beton Pracetak dan Prategang', 'SIL 314', '6', '', 3, 0, 0, '2.5', '', '', '', '', '', '', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(174, 'Struktur Baja 3', 'SIL 315', '6', '', 3, 0, 0, '2.5', '', '', '', '', '', '', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(175, 'Prasarana Transportasi+Praktikum', 'SIL 322', '6', '', 3, 0, 1, '5.3', '', '', '', '', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(176, 'Manajemen Transportasi Perkotaan', 'SIL 325', '6', '', 3, 0, 0, '2.5', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(177, 'Perencanaan Struktur Bangunan Air', 'SIL 332', '6', '', 3, 0, 1, '5.3', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(178, 'Pemodelan SDA+Praktikum', 'SIL 335', '6', '', 3, 0, 1, '5.3', '', '', '', '', '', '', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(179, 'Kuliah Kerja Nyata (KKN)', 'UIK 351 ', '7', '', 3, 0, 0, '2.5', '', '', '', '', 'Petunjuk Pelaksanaan KKN', 'Petunjuk Pelaksanaan KKN', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(180, 'Metode Penelitian', 'SIL 402', '7', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(181, 'Metode Numerik', 'SIL 405', '7', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(182, 'Perkerasan Jalan 2', 'SIL 421', '7', '', 3, 0, 0, '2.5', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(183, 'Rekayasa Drainase Perkotaan', 'SIL 431', '7', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(184, 'Manajemen Kebencanaan', 'SIL433', '7', '', 2, 0, 0, '1.7', '1', '1', '1', '1', 'RPS. Bahan Ajar', 'RPS. Bahan Ajar', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(185, 'Rekayasa Gempa', 'SIL 412', '7', '', 3, 0, 0, '2.5', '', '', '', '', '', '', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(186, 'Transportasi Perkotaan Terpadu', 'SIL 422', '7', '', 3, 0, 0, '2.5', '', '', '', '', 'RPS. Silabus', 'RPS. Silabus', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(187, 'PSDA Terpadu', 'SIL 432', '7', '', 3, 0, 0, '2.5', '1', '1', '1', '1', '', '', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(188, 'Kerja Praktik', 'SIL 403', '8', '', 2, 0, 0, '1.7', '', '', '', '', '', '', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00'),
(189, 'Skripsi', 'SIL 406', '8', '', 4, 0, 0, '3.3', '', '', '', '', '', '', 1, 0, 0, '1', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_asing_tabel`
--

CREATE TABLE `mahasiswa_asing_tabel` (
  `id_mhs_asing` int(11) NOT NULL,
  `prodi_id` int(4) DEFAULT NULL,
  `fakultas_id` int(4) DEFAULT NULL,
  `nama_prodi` varchar(100) DEFAULT NULL,
  `tahun_akademik_asing` varchar(4) DEFAULT NULL,
  `jumlahmhsaktif_asing` int(5) DEFAULT NULL,
  `jumlahmhsfull_asing` int(5) DEFAULT NULL,
  `jumlahmhspart_asing` int(5) DEFAULT NULL,
  `kriteria_kode` varchar(10) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `tu_status` tinyint(4) NOT NULL DEFAULT 0,
  `gkm_status` tinyint(4) DEFAULT 0,
  `gpm_status` tinyint(4) DEFAULT 0,
  `lpm_status` tinyint(4) NOT NULL DEFAULT 0,
  `dekan_status` tinyint(4) DEFAULT 0,
  `keterangan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_asing_tabel`
--

INSERT INTO `mahasiswa_asing_tabel` (`id_mhs_asing`, `prodi_id`, `fakultas_id`, `nama_prodi`, `tahun_akademik_asing`, `jumlahmhsaktif_asing`, `jumlahmhsfull_asing`, `jumlahmhspart_asing`, `kriteria_kode`, `created_at`, `updated_at`, `tu_status`, `gkm_status`, `gpm_status`, `lpm_status`, `dekan_status`, `keterangan`) VALUES
(4, 1, 0, 'teknik informatika', '2021', 102, 50, 53, '21', '2020-07-25', '2020-12-19', 1, 1, 1, 0, 0, 'test\r\n'),
(19, 1, 1, NULL, '2021', 23, 23, 23, NULL, '0000-00-00', NULL, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_seleksi_tabel`
--

CREATE TABLE `mahasiswa_seleksi_tabel` (
  `id_mhs_seleksi` int(11) NOT NULL,
  `prodi_id` int(4) DEFAULT NULL,
  `fakultas_id` int(4) DEFAULT NULL,
  `tahun_akademik` varchar(4) DEFAULT NULL,
  `daya_tampung` int(5) DEFAULT NULL,
  `pendaftar_msh` int(5) DEFAULT NULL,
  `lulus_seleksi_mhs` int(5) DEFAULT NULL,
  `reguler_baru_mhs` int(5) DEFAULT NULL,
  `transfer_baru_mhs` int(5) DEFAULT NULL,
  `reguler_aktif_mhs` int(5) DEFAULT NULL,
  `transferaktif_mhs` int(5) DEFAULT NULL,
  `kriteria_id` int(5) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL,
  `tu_status` tinyint(4) NOT NULL DEFAULT 0,
  `gpm_status` tinyint(4) NOT NULL DEFAULT 0,
  `lpm_status` tinyint(4) NOT NULL DEFAULT 0,
  `gkm_status` tinyint(4) NOT NULL DEFAULT 0,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_seleksi_tabel`
--

INSERT INTO `mahasiswa_seleksi_tabel` (`id_mhs_seleksi`, `prodi_id`, `fakultas_id`, `tahun_akademik`, `daya_tampung`, `pendaftar_msh`, `lulus_seleksi_mhs`, `reguler_baru_mhs`, `transfer_baru_mhs`, `reguler_aktif_mhs`, `transferaktif_mhs`, `kriteria_id`, `created_at`, `updated_at`, `tu_status`, `gpm_status`, `lpm_status`, `gkm_status`, `keterangan`) VALUES
(16, 1, 1, '2021', 301, 50, 50, 50, 40, 40, 70, 22, '2020-11-30', '2020-11-29', 0, 0, 0, 1, 'salah');

-- --------------------------------------------------------

--
-- Table structure for table `pameram_pubilmi_tabel`
--

CREATE TABLE `pameram_pubilmi_tabel` (
  `id_pameranilmi` int(11) NOT NULL,
  `prodi_kode` varchar(10) NOT NULL,
  `pamjurnal_nasnonak` int(3) NOT NULL,
  `pamjurnal_nasak` int(3) DEFAULT NULL,
  `pamjurnal_intnas` int(3) DEFAULT NULL,
  `pamjur_intnas_putasi` int(3) DEFAULT NULL,
  `pamseminar_wil` date DEFAULT NULL,
  `pamseminar_intnas` varchar(10) DEFAULT NULL,
  `pangadaan_forumwil` int(3) DEFAULT NULL,
  `pengadaan_forumnas` int(3) DEFAULT NULL,
  `pengadaan_forumintnas` int(3) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbingta_tabel`
--

CREATE TABLE `pembimbingta_tabel` (
  `id_pembimbingta` int(11) NOT NULL,
  `prodi_id` int(5) DEFAULT NULL,
  `fakultas_id` int(4) DEFAULT NULL,
  `profildosen_id` int(7) DEFAULT NULL,
  `jumlah_mhsta` int(11) DEFAULT NULL,
  `jumlah_mhstalain` int(11) DEFAULT NULL,
  `jml_keseluruhan` tinyint(4) DEFAULT NULL,
  `rta_keseluruhan` tinyint(4) DEFAULT NULL,
  `kriteria_id` int(5) DEFAULT NULL,
  `tu_status` tinyint(4) DEFAULT 0,
  `gkm_status` tinyint(4) DEFAULT 0,
  `gpm_status` tinyint(4) DEFAULT 0,
  `lpm_status` tinyint(4) DEFAULT 0,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembimbingta_tabel`
--

INSERT INTO `pembimbingta_tabel` (`id_pembimbingta`, `prodi_id`, `fakultas_id`, `profildosen_id`, `jumlah_mhsta`, `jumlah_mhstalain`, `jml_keseluruhan`, `rta_keseluruhan`, `kriteria_id`, `tu_status`, `gkm_status`, `gpm_status`, `lpm_status`, `created_at`, `updated_at`, `keterangan`) VALUES
(1, 1, 1, 33, 3, 4, NULL, NULL, 33, 0, 0, 0, 0, '2021-02-28', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penelitiandtps_tabel`
--

CREATE TABLE `penelitiandtps_tabel` (
  `id_penelitiandtps` int(11) NOT NULL,
  `prodi_kode` varchar(10) NOT NULL,
  `dana_pt` int(3) NOT NULL,
  `dana_mandiri` int(3) DEFAULT NULL,
  `lembaga_negeri` int(3) DEFAULT NULL,
  `lembaga_luarnegeri` int(3) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pkmdtps_tabel`
--

CREATE TABLE `pkmdtps_tabel` (
  `id_pkmdtps` int(11) NOT NULL,
  `prodi_kode` varchar(10) NOT NULL,
  `dana_pt` int(3) NOT NULL,
  `dana_mandiri` int(3) DEFAULT NULL,
  `lembaga_negeri` int(3) DEFAULT NULL,
  `lembaga_luarnegeri` int(3) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodi_tabel`
--

CREATE TABLE `prodi_tabel` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(10) DEFAULT NULL,
  `fakultas_id` varchar(10) DEFAULT NULL,
  `nama_prodi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi_tabel`
--

INSERT INTO `prodi_tabel` (`id_prodi`, `kode_prodi`, `fakultas_id`, `nama_prodi`) VALUES
(1, 'ti01', '1', 'teknik informatika'),
(2, 'ft02', '1', 'Teknik Mesin'),
(3, 'ft03', '1', 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `profildosen_tabel`
--

CREATE TABLE `profildosen_tabel` (
  `id_profildosen` int(11) NOT NULL,
  `prodi_id` tinyint(4) NOT NULL,
  `nidn_dosen` varchar(15) DEFAULT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `status_dosen` tinyint(4) DEFAULT 0,
  `pendpasca_dosen` varchar(100) DEFAULT NULL,
  `namapt_dosen` varchar(100) DEFAULT NULL,
  `kopetensips_dosen` varchar(4) DEFAULT NULL,
  `jabatanak_dosen` tinyint(4) DEFAULT NULL,
  `kesesuaianinti_ps` tinyint(4) DEFAULT NULL,
  `kesesuaian_bidang` tinyint(4) DEFAULT NULL,
  `sertpend_profesi` text DEFAULT NULL,
  `sertkompen_industri` text DEFAULT NULL,
  `prshaan_industri` varchar(200) DEFAULT NULL,
  `nidk` varchar(30) DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL,
  `tu_status` tinyint(4) DEFAULT 0,
  `gkm_status` tinyint(4) DEFAULT 0,
  `gpm_status` tinyint(4) DEFAULT 0,
  `lpm_status` tinyint(4) DEFAULT 0,
  `dekan_status` tinyint(4) DEFAULT 0,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `fakultas_id` int(5) DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profildosen_tabel`
--

INSERT INTO `profildosen_tabel` (`id_profildosen`, `prodi_id`, `nidn_dosen`, `nama_dosen`, `status_dosen`, `pendpasca_dosen`, `namapt_dosen`, `kopetensips_dosen`, `jabatanak_dosen`, `kesesuaianinti_ps`, `kesesuaian_bidang`, `sertpend_profesi`, `sertkompen_industri`, `prshaan_industri`, `nidk`, `kriteria_kode`, `tu_status`, `gkm_status`, `gpm_status`, `lpm_status`, `dekan_status`, `created_at`, `fakultas_id`, `update_at`) VALUES
(1, 1, '123', 'tio', 0, 'S3', NULL, NULL, 1, 1, 1, '123', '123', NULL, NULL, '31', 1, 0, 0, 0, 0, '2020-08-05', 1, NULL),
(2, 1, '430067202', 'Rulhendri, S.T., M.T.', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, '0000-00-00', 1, NULL),
(32, 1, '79427', 'TEST TITAK TETAP 2', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '34', 0, 0, 0, 0, 0, '0000-00-00', 1, NULL),
(33, 1, '', 'TEST INDUSTRI', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Zero Seven', '687234', '35', 0, 0, 0, 0, 0, '0000-00-00', 1, NULL),
(34, 1, '', 'TEST INDUSTRI', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PT. Harta Alam', '64826234', '35', 0, 0, 0, 0, 0, '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publikasiilmi_tabel`
--

CREATE TABLE `publikasiilmi_tabel` (
  `id_publikasi` int(11) NOT NULL,
  `prodi_kode` varchar(10) NOT NULL,
  `jurnas_nonak` int(3) NOT NULL,
  `jurnas_ak` int(3) DEFAULT NULL,
  `jurnal_inter` int(3) DEFAULT NULL,
  `jurinter_putasi` int(3) DEFAULT NULL,
  `seminar_wil` date DEFAULT NULL,
  `seminar_internas` varchar(10) NOT NULL,
  `tulisanmedmas_wil` int(3) DEFAULT NULL,
  `tulisanmedmas_nas` int(3) DEFAULT NULL,
  `tulisanmedmas_intnas` int(3) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rekognisidosen_tabel`
--

CREATE TABLE `rekognisidosen_tabel` (
  `id_rekognisi` int(11) NOT NULL,
  `prodi_kode` varchar(10) NOT NULL,
  `profildosen_kode` varchar(10) NOT NULL,
  `bukti_pendukung` varchar(150) DEFAULT NULL,
  `level_tingkat` int(3) DEFAULT NULL,
  `tahun_rekognisi` date DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `relasimk_dosen`
--

CREATE TABLE `relasimk_dosen` (
  `id_relasmk` int(11) NOT NULL,
  `profildosen_id` int(11) DEFAULT NULL,
  `matakuliah_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relasimk_dosen`
--

INSERT INTO `relasimk_dosen` (`id_relasmk`, `profildosen_id`, `matakuliah_id`) VALUES
(1, 1, 143),
(2, 1, 152);

-- --------------------------------------------------------

--
-- Table structure for table `relasi_bidangkeads`
--

CREATE TABLE `relasi_bidangkeads` (
  `id_relasikea` int(11) NOT NULL,
  `profildosen_id` int(11) DEFAULT NULL,
  `bidangkea_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relasi_bidangkeads`
--

INSERT INTO `relasi_bidangkeads` (`id_relasikea`, `profildosen_id`, `bidangkea_id`) VALUES
(1, 1, 3),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `relasi_ks`
--

CREATE TABLE `relasi_ks` (
  `id_relasiks` int(11) NOT NULL,
  `kerjasama_id` int(11) NOT NULL,
  `kegiatanks_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relasi_ks`
--

INSERT INTO `relasi_ks` (`id_relasiks`, `kerjasama_id`, `kegiatanks_id`, `created_at`, `updated_at`) VALUES
(4, 8, 1, '2020-07-23', NULL),
(5, 8, 3, '2020-07-23', NULL),
(6, 7, 4, '2020-07-23', NULL),
(7, 12, 2, '2020-07-23', NULL),
(8, 12, 3, '2020-07-23', NULL),
(9, 13, 2, '2020-07-26', NULL),
(10, 13, 4, '2020-07-26', NULL),
(11, 14, 2, '2020-07-26', NULL),
(12, 14, 3, '2020-07-26', NULL),
(13, 15, 3, '2020-07-26', NULL),
(15, 16, 2, '2020-07-26', NULL),
(16, 17, 2, '2020-07-26', NULL),
(17, 17, 4, '2020-07-26', NULL),
(18, 18, 2, '2020-07-30', NULL),
(19, 18, 3, '2020-07-30', NULL),
(20, 19, 3, '2020-08-01', NULL),
(21, 15, 1, '2020-08-03', NULL),
(29, 23, 3, '2020-10-13', NULL),
(30, 23, 5, '2020-10-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitasidosen_tabel`
--

CREATE TABLE `sitasidosen_tabel` (
  `id_sitasidosen` int(11) NOT NULL,
  `prodi_kode` varchar(10) NOT NULL,
  `profildosen_kode` int(3) NOT NULL,
  `judul_sitasi` varchar(150) DEFAULT NULL,
  `tanggal_terbit` date DEFAULT NULL,
  `jenis_jurnal` varchar(200) DEFAULT NULL,
  `jumlah_jilid` int(4) DEFAULT NULL,
  `terbitan_artikel` int(3) DEFAULT NULL,
  `halaman_artikel` varchar(50) DEFAULT NULL,
  `penerbit_artike;` varchar(100) DEFAULT NULL,
  `pengadaan_forumintnas` int(3) DEFAULT NULL,
  `jumlah_sitasi` int(4) DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_tabel`
--

CREATE TABLE `user_tabel` (
  `id_user` int(11) NOT NULL,
  `fakultas_id` varchar(10) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `level_user` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tabel`
--

INSERT INTO `user_tabel` (`id_user`, `fakultas_id`, `prodi_id`, `nama_user`, `username`, `password_user`, `level_user`) VALUES
(1, '1', 1, 'mas prodi TI', 'TU_TI', 'a', 5),
(2, '1', 2, 'Mas Prodi Mesin', 'TU_TM', 'a', 5),
(3, '1', 1, 'GKM_TI', 'gkmti', 'gkmti', 4),
(4, '1', NULL, 'GPM TI', 'gpmti', 'gpm', 3),
(5, NULL, NULL, 'LPM UIKA', 'LPM', 'a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidangmklain_dosen`
--
ALTER TABLE `bidangmklain_dosen`
  ADD PRIMARY KEY (`id_bidangmklain_dosen`);

--
-- Indexes for table `bidang_keahliands`
--
ALTER TABLE `bidang_keahliands`
  ADD PRIMARY KEY (`id_bidangkea`);

--
-- Indexes for table `bntkegiatan_ks`
--
ALTER TABLE `bntkegiatan_ks`
  ADD PRIMARY KEY (`id_kegiatanks`);

--
-- Indexes for table `ewmpdosen_tabel`
--
ALTER TABLE `ewmpdosen_tabel`
  ADD PRIMARY KEY (`id_ewmpdosen`),
  ADD KEY `relasiNamadosen` (`profildosen_id`);

--
-- Indexes for table `fakultas_tabel`
--
ALTER TABLE `fakultas_tabel`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD UNIQUE KEY `kode_fakultas` (`kode_fakultas`);

--
-- Indexes for table `induk_kriteria`
--
ALTER TABLE `induk_kriteria`
  ADD PRIMARY KEY (`id_induk`);

--
-- Indexes for table `jabatabanak_tabel`
--
ALTER TABLE `jabatabanak_tabel`
  ADD PRIMARY KEY (`id_jabantanak`),
  ADD UNIQUE KEY `kode_jabatanak` (`kode_jabatanak`);

--
-- Indexes for table `kerjasama_tabel`
--
ALTER TABLE `kerjasama_tabel`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indexes for table `kriteria_tabel`
--
ALTER TABLE `kriteria_tabel`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kurikulum_tabel`
--
ALTER TABLE `kurikulum_tabel`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `mahasiswa_asing_tabel`
--
ALTER TABLE `mahasiswa_asing_tabel`
  ADD PRIMARY KEY (`id_mhs_asing`);

--
-- Indexes for table `mahasiswa_seleksi_tabel`
--
ALTER TABLE `mahasiswa_seleksi_tabel`
  ADD PRIMARY KEY (`id_mhs_seleksi`);

--
-- Indexes for table `pameram_pubilmi_tabel`
--
ALTER TABLE `pameram_pubilmi_tabel`
  ADD PRIMARY KEY (`id_pameranilmi`);

--
-- Indexes for table `pembimbingta_tabel`
--
ALTER TABLE `pembimbingta_tabel`
  ADD PRIMARY KEY (`id_pembimbingta`),
  ADD KEY `relasi_dosenewmp` (`profildosen_id`);

--
-- Indexes for table `penelitiandtps_tabel`
--
ALTER TABLE `penelitiandtps_tabel`
  ADD PRIMARY KEY (`id_penelitiandtps`);

--
-- Indexes for table `pkmdtps_tabel`
--
ALTER TABLE `pkmdtps_tabel`
  ADD PRIMARY KEY (`id_pkmdtps`);

--
-- Indexes for table `prodi_tabel`
--
ALTER TABLE `prodi_tabel`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `kode_prodi` (`kode_prodi`);

--
-- Indexes for table `profildosen_tabel`
--
ALTER TABLE `profildosen_tabel`
  ADD PRIMARY KEY (`id_profildosen`);

--
-- Indexes for table `publikasiilmi_tabel`
--
ALTER TABLE `publikasiilmi_tabel`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `rekognisidosen_tabel`
--
ALTER TABLE `rekognisidosen_tabel`
  ADD PRIMARY KEY (`id_rekognisi`);

--
-- Indexes for table `relasimk_dosen`
--
ALTER TABLE `relasimk_dosen`
  ADD PRIMARY KEY (`id_relasmk`),
  ADD KEY `matakuliah_id` (`matakuliah_id`),
  ADD KEY `profildosen_id` (`profildosen_id`);

--
-- Indexes for table `relasi_bidangkeads`
--
ALTER TABLE `relasi_bidangkeads`
  ADD PRIMARY KEY (`id_relasikea`),
  ADD KEY `bidangkea_id` (`bidangkea_id`),
  ADD KEY `relasi_bk_dosen` (`profildosen_id`);

--
-- Indexes for table `relasi_ks`
--
ALTER TABLE `relasi_ks`
  ADD PRIMARY KEY (`id_relasiks`);

--
-- Indexes for table `sitasidosen_tabel`
--
ALTER TABLE `sitasidosen_tabel`
  ADD PRIMARY KEY (`id_sitasidosen`);

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
-- AUTO_INCREMENT for table `bidangmklain_dosen`
--
ALTER TABLE `bidangmklain_dosen`
  MODIFY `id_bidangmklain_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bidang_keahliands`
--
ALTER TABLE `bidang_keahliands`
  MODIFY `id_bidangkea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bntkegiatan_ks`
--
ALTER TABLE `bntkegiatan_ks`
  MODIFY `id_kegiatanks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ewmpdosen_tabel`
--
ALTER TABLE `ewmpdosen_tabel`
  MODIFY `id_ewmpdosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fakultas_tabel`
--
ALTER TABLE `fakultas_tabel`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `induk_kriteria`
--
ALTER TABLE `induk_kriteria`
  MODIFY `id_induk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jabatabanak_tabel`
--
ALTER TABLE `jabatabanak_tabel`
  MODIFY `id_jabantanak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerjasama_tabel`
--
ALTER TABLE `kerjasama_tabel`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kurikulum_tabel`
--
ALTER TABLE `kurikulum_tabel`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `mahasiswa_asing_tabel`
--
ALTER TABLE `mahasiswa_asing_tabel`
  MODIFY `id_mhs_asing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mahasiswa_seleksi_tabel`
--
ALTER TABLE `mahasiswa_seleksi_tabel`
  MODIFY `id_mhs_seleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pameram_pubilmi_tabel`
--
ALTER TABLE `pameram_pubilmi_tabel`
  MODIFY `id_pameranilmi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembimbingta_tabel`
--
ALTER TABLE `pembimbingta_tabel`
  MODIFY `id_pembimbingta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penelitiandtps_tabel`
--
ALTER TABLE `penelitiandtps_tabel`
  MODIFY `id_penelitiandtps` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pkmdtps_tabel`
--
ALTER TABLE `pkmdtps_tabel`
  MODIFY `id_pkmdtps` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi_tabel`
--
ALTER TABLE `prodi_tabel`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profildosen_tabel`
--
ALTER TABLE `profildosen_tabel`
  MODIFY `id_profildosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `publikasiilmi_tabel`
--
ALTER TABLE `publikasiilmi_tabel`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekognisidosen_tabel`
--
ALTER TABLE `rekognisidosen_tabel`
  MODIFY `id_rekognisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relasimk_dosen`
--
ALTER TABLE `relasimk_dosen`
  MODIFY `id_relasmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relasi_bidangkeads`
--
ALTER TABLE `relasi_bidangkeads`
  MODIFY `id_relasikea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relasi_ks`
--
ALTER TABLE `relasi_ks`
  MODIFY `id_relasiks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sitasidosen_tabel`
--
ALTER TABLE `sitasidosen_tabel`
  MODIFY `id_sitasidosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tabel`
--
ALTER TABLE `user_tabel`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ewmpdosen_tabel`
--
ALTER TABLE `ewmpdosen_tabel`
  ADD CONSTRAINT `relasiNamadosen` FOREIGN KEY (`profildosen_id`) REFERENCES `profildosen_tabel` (`id_profildosen`);

--
-- Constraints for table `pembimbingta_tabel`
--
ALTER TABLE `pembimbingta_tabel`
  ADD CONSTRAINT `relasi_dosenewmp` FOREIGN KEY (`profildosen_id`) REFERENCES `profildosen_tabel` (`id_profildosen`);

--
-- Constraints for table `relasimk_dosen`
--
ALTER TABLE `relasimk_dosen`
  ADD CONSTRAINT `relasimk_dosen_ibfk_1` FOREIGN KEY (`matakuliah_id`) REFERENCES `kurikulum_tabel` (`id_matakuliah`),
  ADD CONSTRAINT `relasimk_dosen_ibfk_2` FOREIGN KEY (`profildosen_id`) REFERENCES `profildosen_tabel` (`id_profildosen`);

--
-- Constraints for table `relasi_bidangkeads`
--
ALTER TABLE `relasi_bidangkeads`
  ADD CONSTRAINT `relasi_bidangkeads_ibfk_1` FOREIGN KEY (`bidangkea_id`) REFERENCES `bidang_keahliands` (`id_bidangkea`),
  ADD CONSTRAINT `relasi_bk_dosen` FOREIGN KEY (`profildosen_id`) REFERENCES `profildosen_tabel` (`id_profildosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
