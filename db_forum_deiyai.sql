-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 01:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_forum_deiyai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` int(16) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `kampus` varchar(200) NOT NULL,
  `prodi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jk`, `kewarganegaraan`, `agama`, `nama_ibu`, `email`, `no_telp`, `alamat`, `kode_pos`, `provinsi`, `kabupaten`, `kecamatan`, `pendidikan`, `sekolah`, `kampus`, `prodi`) VALUES
(1, 'kristovel edoway', 13411002, 'Jayapura, PAPUA', '1996-05-07', 'laki-laki', 'Warga Negara Indonesia (WNI)', 'Kristen Protestan', 'Martha Pekey', 'kristovele@gmail.com', '123456789012', 'Entrop, Jaya Asri', '123456', 'PAPUA', 'KOTA JAYAPURA', 'Entrop', 'S.Kom', 'SMK NEGERI 1 NABIRE', 'UNIVERSITAS SAINS DAN TEKNOLOGI JAYAPURA', 'TEKNIK INFORMATIKA'),
(3, 'Marlon Wanggai', 2147483647, 'Biak Numfor', '2020-11-04', 'Laki-Laki', 'Warga Negara Indonesia (WNI)', 'Kristen Protestan', 'Anastasia Safrin', 'alon@gmail.com', '1234567890', 'Pasar Ikan', '12345', 'PAPUA', 'Biak', 'Mauhil', 'Sarjana Komputer', 'SMK NEGERI 1 BIAK', 'Universitas Sains dan Teknologi Jayapura', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `data_kas`
--

CREATE TABLE `data_kas` (
  `kode` int(3) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl` date NOT NULL,
  `jumlah_masuk` int(100) DEFAULT NULL,
  `jenis` varchar(100) NOT NULL,
  `jenis_kas` varchar(20) NOT NULL,
  `jumlah_keluar` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kas`
--

INSERT INTO `data_kas` (`kode`, `keterangan`, `tgl`, `jumlah_masuk`, `jenis`, `jenis_kas`, `jumlah_keluar`) VALUES
(1, 'qwrtyuiop', '2020-11-07', 500000, 'Dana Kas Umum', 'masuk', 0),
(2, 'Terkumpul dana anggota keseluruhan', '2020-11-07', 0, 'Dana Kas Anggota', 'keluar', 800000),
(8, 'Terkumpul dana umum keseluruhan', '2020-11-04', 700000, 'Dana Kas Umum', 'masuk', 0),
(10, 'qwrtyu', '2020-11-03', 500000, 'Dana Kas Anggota', 'masuk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_keluar`
--

CREATE TABLE `data_surat_keluar` (
  `id_surat_keluar` int(15) NOT NULL,
  `no_surat_keluar` varchar(15) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `sifat` varchar(200) NOT NULL,
  `lampiran` varchar(200) NOT NULL,
  `no_surat_masuk` varchar(15) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_masuk`
--

CREATE TABLE `data_surat_masuk` (
  `id_surat_masuk` int(15) NOT NULL,
  `no_surat_masuk` varchar(15) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_surat_masuk`
--

INSERT INTO `data_surat_masuk` (`id_surat_masuk`, `no_surat_masuk`, `tgl_surat`, `tgl_diterima`, `perihal`, `sifat`, `lampiran`, `file`) VALUES
(4, '20112540-TVxy', '2020-11-01', '2020-11-10', 'Pengenalan Mahasiswa Baru', 'Terbuka', 'Pengenalan', '1606367638_ca90a84f81e09923cb63.pdf'),
(5, '20112514-mAI7', '2020-11-03', '2020-11-10', 'Pengenalan Mahasiswa Baru', 'Terbuka', 'Pengenalan', '1606367681_4cea8acf85c169dc2c3f.pdf'),
(6, '20112545-zeZa', '2020-11-04', '2020-11-12', 'as', 'as', 'as', '1606367704_6ead5656419b1bbd919b.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'kristovel edoway', 'kristo', '124578', 'admin'),
(4, 'Marlon Wanggai', 'alon', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kas`
--
ALTER TABLE `data_kas`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `data_surat_keluar`
--
ALTER TABLE `data_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `data_surat_masuk`
--
ALTER TABLE `data_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kas`
--
ALTER TABLE `data_kas`
  MODIFY `kode` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_surat_keluar`
--
ALTER TABLE `data_surat_keluar`
  MODIFY `id_surat_keluar` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_surat_masuk`
--
ALTER TABLE `data_surat_masuk`
  MODIFY `id_surat_masuk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
