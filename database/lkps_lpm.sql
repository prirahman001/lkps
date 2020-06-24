-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 10:19 AM
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
  `kode_prodi` varchar(10) NOT NULL,
  `nama_lembaga` varchar(150) NOT NULL,
  `tingkat_levelks` varchar(2) DEFAULT NULL,
  `judul_kegiatanks` varchar(225) DEFAULT NULL,
  `manfaat_ks` text DEFAULT NULL,
  `awal_ks` date DEFAULT NULL,
  `selesai_ks` date DEFAULT NULL,
  `bukti_ks` text DEFAULT NULL,
  `kriteria_kode` varchar(10) NOT NULL
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
(2, 'kemas01', 'Fks01', 'kesehatan masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `profildosen_tabel`
--

CREATE TABLE `profildosen_tabel` (
  `id_profildosen` int(11) NOT NULL,
  `kode_dosen` varchar(10) DEFAULT NULL,
  `kode_prodi` varchar(10) NOT NULL,
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
(1, 'ft01', 'mas prodi TI', 'ti', 'a', 5),
(2, 'Fks01', 'mas prodi fks', 'fks', 'aa', 5);

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
  ADD PRIMARY KEY (`is_mhs_asing`);

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
  ADD UNIQUE KEY `kode_dosen` (`kode_dosen`);

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
-- AUTO_INCREMENT for table `jabatabanak_tabel`
--
ALTER TABLE `jabatabanak_tabel`
  MODIFY `id_jabantanak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerjasama_tabel`
--
ALTER TABLE `kerjasama_tabel`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `sitasidosen_tabel`
--
ALTER TABLE `sitasidosen_tabel`
  MODIFY `id_sitasidosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tabel`
--
ALTER TABLE `user_tabel`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
