-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 10:22 AM
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
-- Table structure for table `bidangmk_dosen`
--

CREATE TABLE `bidangmk_dosen` (
  `id_bidangmk_dosen` int(11) NOT NULL,
  `matakuliah_kode` varchar(10) NOT NULL,
  `dosen_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bntkegiatan_ks`
--

CREATE TABLE `bntkegiatan_ks` (
  `id_kegiatanks` int(11) NOT NULL,
  `nama_kegiatanks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bntkegiatan_ks`
--

INSERT INTO `bntkegiatan_ks` (`id_kegiatanks`, `nama_kegiatanks`) VALUES
(1, 'test1'),
(2, 'test 2'),
(3, 'test 3'),
(4, 'test 4');

-- --------------------------------------------------------

--
-- Table structure for table `ewmpdosen_tabel`
--

CREATE TABLE `ewmpdosen_tabel` (
  `id_ewmpdosen` int(11) NOT NULL,
  `prodi_kode` varchar(10) DEFAULT NULL,
  `profildosen_kode` varchar(10) DEFAULT NULL,
  `pendps_ak` int(3) DEFAULT NULL,
  `pendps_pt` int(3) DEFAULT NULL,
  `pendips_luar` int(3) DEFAULT NULL,
  `dtps_dosen` int(3) DEFAULT NULL,
  `penelitia_dosen` int(3) DEFAULT NULL,
  `pkm_dosen` int(3) DEFAULT NULL,
  `tugas_tmbahan` int(3) DEFAULT NULL,
  `jumlah_sks` int(3) DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'ft01', 'Fakultas Teknik and Sains'),
(2, 'Fks01', 'Fakultas Kesehatan Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `induk_kriteria`
--

CREATE TABLE `induk_kriteria` (
  `id_induk` int(11) NOT NULL,
  `nama_induk` varchar(100) DEFAULT NULL,
  `kriteria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `induk_kriteria`
--

INSERT INTO `induk_kriteria` (`id_induk`, `nama_induk`, `kriteria_id`) VALUES
(1, 'Tata Pamong, Tata Kelola, & Kerjasama', NULL);

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
  `prodi_kode` varchar(10) NOT NULL,
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
  `tu_status` tinyint(4) DEFAULT 1,
  `filedoc_ks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerjasama_tabel`
--

INSERT INTO `kerjasama_tabel` (`id_kerjasama`, `prodi_kode`, `nama_lembaga`, `lokasi_ks`, `ting_internasional`, `ting_nasional`, `ting_lokal`, `judul_kegiatanks`, `jenispatner_ks`, `manfaat_ks`, `awal_ks`, `selesai_ks`, `bukti_ks`, `kriteria_kode`, `created_at`, `updated_at`, `gkm_status`, `gpm_status`, `lpm_status`, `dekan_status`, `tu_status`, `filedoc_ks`) VALUES
(7, 'fks01', 'tiyo', NULL, 1, 1, 0, 'bawa', NULL, 'djoaijdio', '0000-00-00', '2020-07-31', 'MOU', '1', '2020-07-20', NULL, 0, 0, 0, 0, 1, NULL),
(8, 'fks01', 'furnitur silo', NULL, 1, 0, 1, 'Membantu bagunan', NULL, 'hdajhdishidshiashdsai', '2020-07-22', '2020-07-25', 'MOU', '1', '2020-07-21', NULL, 0, 0, 0, 0, 1, NULL),
(13, 'fks01', 'Sablon bogor', 'bogor', 1, 1, NULL, 'belum ada', 'Institusi Pemerintah DN', 'sagat', '2020-07-27', '2020-07-31', 'MoU', '1', '2020-07-26', NULL, 0, 0, 0, 0, 1, NULL),
(14, 'fks01', 'oke cetak', 'jakarta', 0, 1, 0, 'Sans', 'Institusi Pedididkan DN', 'sans', '2020-07-28', '2020-07-31', 'Implementations Agreement', '1', '2020-07-26', NULL, 0, 0, 0, 0, 1, NULL),
(15, 'ti01', 'test', 'test', 0, 1, 0, 'tets', 'Institusi Pemerintah LN', 'test', '2020-07-29', '2020-07-31', 'Implementations Agreement', '1', '2020-07-26', NULL, 2, 2, 0, 0, 2, NULL),
(16, 'ti01', 'tres', 'trea', 0, 1, 0, 'tsus', 'Institusi Pemerintah DN', 'trt', '2020-07-23', '2020-07-25', 'MoU', '1', '2020-07-26', NULL, 2, 2, 0, 0, 2, NULL),
(18, 'ti01', 'test 1', 'bogor', 1, 0, 0, 'SAAS', 'Institusi Pedididkan LN', 'dhad', '2020-07-30', '2020-08-01', 'Implementations Agreement', '1', '2020-07-30', NULL, 1, 0, 0, 0, 1, NULL),
(19, 'ti01', 'tiyo', 'bogor', 0, 1, 0, 'bawa', 'Institusi Pedididkan DN', 'gadjsgjads', '2020-08-15', '2020-08-20', 'MoU', '1', '2020-08-01', NULL, 1, 0, 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_tabel`
--

CREATE TABLE `kriteria_tabel` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(10) DEFAULT NULL,
  `nama_kriteria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_tabel`
--

INSERT INTO `kriteria_tabel` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`) VALUES
(1, '1', 'Kerjasama'),
(2, '21', 'Seleksi Mahasiswa'),
(3, '22', 'Mahasiswa Asing');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_asing_tabel`
--

CREATE TABLE `mahasiswa_asing_tabel` (
  `id_mhs_asing` int(11) NOT NULL,
  `prodi_kode` varchar(10) DEFAULT NULL,
  `nama_prodi` varchar(100) DEFAULT NULL,
  `tahun_akademik_asing` varchar(4) DEFAULT NULL,
  `jumlahmhsaktif_asing` int(11) DEFAULT NULL,
  `jumlahmhsfull_asing` int(11) DEFAULT NULL,
  `jumlahmhspart_asing` int(11) DEFAULT NULL,
  `kriteria_kode` varchar(10) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL,
  `tu_status` tinyint(4) NOT NULL DEFAULT 1,
  `gkm_status` tinyint(4) DEFAULT 0,
  `gpm_status` tinyint(4) DEFAULT 0,
  `lpm_status` tinyint(4) NOT NULL DEFAULT 0,
  `dekan_status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_asing_tabel`
--

INSERT INTO `mahasiswa_asing_tabel` (`id_mhs_asing`, `prodi_kode`, `nama_prodi`, `tahun_akademik_asing`, `jumlahmhsaktif_asing`, `jumlahmhsfull_asing`, `jumlahmhspart_asing`, `kriteria_kode`, `created_at`, `updated_at`, `tu_status`, `gkm_status`, `gpm_status`, `lpm_status`, `dekan_status`) VALUES
(4, 'ti01', 'teknik informatika', '2021', 100, 50, 50, '21', '2020-07-25', '0000-00-00', 1, 0, 0, 0, 0),
(9, 'ti01', 'teknik informatika', '2001', 100, 50, 50, '21', '2020-07-25', '0000-00-00', 1, 0, 0, 0, 0),
(10, 'ti01', 'teknik informatika', '2002', 100, 50, 50, '21', '2020-07-25', '0000-00-00', 1, 0, 0, 0, 0),
(15, 'fks01', 'kesehatan masyarakat', '100', 123, 1111, 123, '21', '2020-07-25', '0000-00-00', 1, 0, 0, 0, 0),
(16, 'fks01', 'kesehatan masyarakat', '2020', 500, 250, 250, '21', '2020-07-25', '0000-00-00', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_seleksi_tabel`
--

CREATE TABLE `mahasiswa_seleksi_tabel` (
  `id_mhs_seleksi` int(11) NOT NULL,
  `prodi_kode` varchar(11) DEFAULT NULL,
  `tahun_akademik` varchar(4) DEFAULT NULL,
  `daya_tampung` int(11) DEFAULT NULL,
  `pendaftar_msh` int(11) DEFAULT NULL,
  `lulus_seleksi_mhs` int(11) DEFAULT NULL,
  `reguler_baru_mhs` int(11) DEFAULT NULL,
  `transfer_baru_mhs` int(11) DEFAULT NULL,
  `reguler_aktif_mhs` int(11) DEFAULT NULL,
  `transferaktif_mhs` int(11) DEFAULT NULL,
  `kriteria_kode` varchar(10) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL,
  `tu_status` tinyint(4) NOT NULL DEFAULT 1,
  `gpm_status` tinyint(4) NOT NULL DEFAULT 0,
  `lpm_status` tinyint(4) NOT NULL DEFAULT 0,
  `gkm_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_seleksi_tabel`
--

INSERT INTO `mahasiswa_seleksi_tabel` (`id_mhs_seleksi`, `prodi_kode`, `tahun_akademik`, `daya_tampung`, `pendaftar_msh`, `lulus_seleksi_mhs`, `reguler_baru_mhs`, `transfer_baru_mhs`, `reguler_aktif_mhs`, `transferaktif_mhs`, `kriteria_kode`, `created_at`, `updated_at`, `tu_status`, `gpm_status`, `lpm_status`, `gkm_status`) VALUES
(1, 'ft01', '2244', 4535, 57, 57, 57, 900, 886, 55, '21', '2020-07-19', '0000-00-00', 1, 0, 0, 0),
(2, 'ft01', '2001', 123, 333, 231, 443, 43, 78, 8, '21', '2020-07-20', '0000-00-00', 1, 0, 0, 0),
(3, 'ft01', '2009', 32, 676, 868, 68, 6, 868, 86, '21', '2020-07-20', '0000-00-00', 1, 0, 0, 0),
(4, 'ft01', '3232', 232, 879, 97, 97, 97, 979, 7, '21', '2020-07-20', '0000-00-00', 1, 0, 0, 0),
(8, 'ti01', '2019', 150, 23, 23, 12, 22, 13, 23, '22', '2020-08-01', '0000-00-00', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah_table`
--

CREATE TABLE `matakuliah_table` (
  `id_matakuliah` int(11) NOT NULL,
  `kode_matakuliah` varchar(10) DEFAULT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `sks_kuliah` int(2) NOT NULL,
  `sks_seminar` int(2) DEFAULT NULL,
  `sks_pratikum` int(2) DEFAULT NULL,
  `semester` int(3) DEFAULT NULL,
  `nama_matakuliah` varchar(100) DEFAULT NULL,
  `semester_mk` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `prodi_kode` varchar(10) DEFAULT NULL,
  `profildosen_kode` varchar(10) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `jumlah_mhsta` int(11) DEFAULT NULL,
  `jumlah_mhstalain` int(11) DEFAULT NULL,
  `kriteria_kode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `fakultas_kode` varchar(10) DEFAULT NULL,
  `nama_prodi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi_tabel`
--

INSERT INTO `prodi_tabel` (`id_prodi`, `kode_prodi`, `fakultas_kode`, `nama_prodi`) VALUES
(1, 'ti01', 'ft01', 'teknik informatika'),
(2, 'fks01', 'fks01', 'kesehatan masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `profildosen_tabel`
--

CREATE TABLE `profildosen_tabel` (
  `id_profildosen` int(11) NOT NULL,
  `prodi_kode` varchar(10) NOT NULL,
  `nidn_dosen` varchar(15) NOT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `status_dosen` varchar(3) DEFAULT NULL,
  `pendpasca_dosen` varchar(3) DEFAULT NULL,
  `namapt_dosen` varchar(100) DEFAULT NULL,
  `kopetensips_dosen` varchar(4) DEFAULT NULL,
  `jabatanak_kode` varchar(3) DEFAULT NULL,
  `kesesuaianps` varchar(3) DEFAULT NULL,
  `sertpend_profesi` text DEFAULT NULL,
  `bidangmk_id` int(11) DEFAULT NULL,
  `sertkompen_industri` text DEFAULT NULL,
  `prshaan_industri` varchar(200) DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `matakuliah_kodelain` int(11) NOT NULL,
  `matakuliah_kode` int(11) NOT NULL,
  `dosen_kode` int(11) NOT NULL,
  `kriteria_kode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, 15, 4, '2020-07-26', NULL),
(15, 16, 2, '2020-07-26', NULL),
(16, 17, 2, '2020-07-26', NULL),
(17, 17, 4, '2020-07-26', NULL),
(18, 18, 2, '2020-07-30', NULL),
(19, 18, 3, '2020-07-30', NULL),
(20, 19, 3, '2020-08-01', NULL);

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
  `prodi_kode` varchar(10) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `level_user` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tabel`
--

INSERT INTO `user_tabel` (`id_user`, `prodi_kode`, `nama_user`, `username`, `password_user`, `level_user`) VALUES
(1, 'ti01', 'mas prodi TI', 'ti', 'a', 5),
(2, 'fks01', 'mas prodi fks', 'fks', 'aa', 5),
(3, 'ti01', 'GKM_Pak Yuggo', 'gkmti', 'gkmti', 4),
(4, 'ti01', 'GPM TI', 'gpm', 'gpm', 3),
(5, '0', 'LPM UIKA', 'lpm', 'lpm', 2),
(6, 'fks01', 'prodi kesmas', 'gkmfks', 'gkmfks', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidangmklain_dosen`
--
ALTER TABLE `bidangmklain_dosen`
  ADD PRIMARY KEY (`id_bidangmklain_dosen`);

--
-- Indexes for table `bidangmk_dosen`
--
ALTER TABLE `bidangmk_dosen`
  ADD PRIMARY KEY (`id_bidangmk_dosen`);

--
-- Indexes for table `bntkegiatan_ks`
--
ALTER TABLE `bntkegiatan_ks`
  ADD PRIMARY KEY (`id_kegiatanks`);

--
-- Indexes for table `ewmpdosen_tabel`
--
ALTER TABLE `ewmpdosen_tabel`
  ADD PRIMARY KEY (`id_ewmpdosen`);

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
  ADD PRIMARY KEY (`id_kriteria`),
  ADD UNIQUE KEY `kode_kriteria` (`kode_kriteria`);

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
-- Indexes for table `matakuliah_table`
--
ALTER TABLE `matakuliah_table`
  ADD PRIMARY KEY (`id_matakuliah`),
  ADD UNIQUE KEY `kode_matakuliah` (`kode_matakuliah`);

--
-- Indexes for table `pameram_pubilmi_tabel`
--
ALTER TABLE `pameram_pubilmi_tabel`
  ADD PRIMARY KEY (`id_pameranilmi`);

--
-- Indexes for table `pembimbingta_tabel`
--
ALTER TABLE `pembimbingta_tabel`
  ADD PRIMARY KEY (`id_pembimbingta`);

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
  ADD PRIMARY KEY (`id_profildosen`),
  ADD UNIQUE KEY `nidn_dosen` (`nidn_dosen`);

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
  ADD PRIMARY KEY (`id_relasmk`);

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
-- AUTO_INCREMENT for table `bidangmk_dosen`
--
ALTER TABLE `bidangmk_dosen`
  MODIFY `id_bidangmk_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bntkegiatan_ks`
--
ALTER TABLE `bntkegiatan_ks`
  MODIFY `id_kegiatanks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ewmpdosen_tabel`
--
ALTER TABLE `ewmpdosen_tabel`
  MODIFY `id_ewmpdosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas_tabel`
--
ALTER TABLE `fakultas_tabel`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `induk_kriteria`
--
ALTER TABLE `induk_kriteria`
  MODIFY `id_induk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatabanak_tabel`
--
ALTER TABLE `jabatabanak_tabel`
  MODIFY `id_jabantanak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerjasama_tabel`
--
ALTER TABLE `kerjasama_tabel`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kriteria_tabel`
--
ALTER TABLE `kriteria_tabel`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa_asing_tabel`
--
ALTER TABLE `mahasiswa_asing_tabel`
  MODIFY `id_mhs_asing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mahasiswa_seleksi_tabel`
--
ALTER TABLE `mahasiswa_seleksi_tabel`
  MODIFY `id_mhs_seleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `matakuliah_table`
--
ALTER TABLE `matakuliah_table`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pameram_pubilmi_tabel`
--
ALTER TABLE `pameram_pubilmi_tabel`
  MODIFY `id_pameranilmi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembimbingta_tabel`
--
ALTER TABLE `pembimbingta_tabel`
  MODIFY `id_pembimbingta` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profildosen_tabel`
--
ALTER TABLE `profildosen_tabel`
  MODIFY `id_profildosen` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_relasmk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relasi_ks`
--
ALTER TABLE `relasi_ks`
  MODIFY `id_relasiks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
