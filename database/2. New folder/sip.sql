-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 03:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjaman`
--

CREATE TABLE `tbl_pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `judul` varchar(90) NOT NULL,
  `ringkas` text NOT NULL,
  `lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjaman`
--

INSERT INTO `tbl_pinjaman` (`id_pinjaman`, `judul`, `ringkas`, `lengkap`) VALUES
(1, 'UMKM', 'Hadirkan kemudahan dengan berbagai layanan pembiayaan yang sesuai dengan kebutuhan usaha mikro dan kecil (UMKM) Anda', ''),
(2, 'Corporate', 'Berbagai solusi pembiayaan yang memberikan kemudahan dan fleksibilitas dalam bertransaksi untuk kemajuan bisnis anda', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk_pinjaman`
--

CREATE TABLE `tbl_produk_pinjaman` (
  `id_produk_pinjaman` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `nama_pinjaman` varchar(80) NOT NULL,
  `ringkas_pinjaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk_pinjaman`
--

INSERT INTO `tbl_produk_pinjaman` (`id_produk_pinjaman`, `id_pinjaman`, `nama_pinjaman`, `ringkas_pinjaman`) VALUES
(1, 1, 'Kredit Modal kerja', 'Hadirkan kemudahan untuk pembiayaan inventory/piutang/proyek dan kebutuhan modal kerja anda lainnya'),
(2, 1, 'Kredit Investasi', 'Nikamati fasilitas untuk rehabilitasi, modernisasi perluasan dan pendirian proyek barus sesuai kebutuhan investasi pengembangan usaha anda'),
(3, 1, 'Kredit usah Rakyat (KUR)', 'Hadirkan fasilitas kredit untuk membantu usaha mikri kecil, dan koperasi anda'),
(4, 1, 'Kredit Usaha Mikro (KUM)', 'Dukungan kredit untuk kebutuhan investasi serta kebutuhan modal kerja anda untuk usaha produktif maupun konsumtif skala mikro'),
(5, 2, 'Kredit Modal Kerja', 'Hadirkan kemudahan untuk pembiayaan inventori/ piutang/ proyek dan kebutuhan modal kerja anda'),
(6, 2, 'Kredit Investasi', 'Nikamati fasiltas kredit untuk rehabilitasi, modernisasi, perluasan dan pendirian proyek baru sesuai kebutuhan investasi pengambangan usaha ada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpanan`
--

CREATE TABLE `tbl_simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `nama_simpanan` varchar(70) NOT NULL,
  `pendek` text NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_simpanan`
--

INSERT INTO `tbl_simpanan` (`id_simpanan`, `nama_simpanan`, `pendek`, `penjelasan`) VALUES
(1, 'Tabungan Bisnis', 'Hadirkan layanan yang cepat, mudah dan jaringan yang luas terbesar di indonesia guna kelancaran transaksi bisnis anda', ''),
(2, 'Deposito Rupiah', 'Pastikan memilih investasi yang memberi keuntungan rasa aman, terpercaya dan dapat di andalkan', ''),
(3, 'Deposito Valas', 'Nikmati berbagai pilihan jenis mata uang serta pembayaran bunga yang fleksibel untuk keperluan isvetasi anda', ''),
(4, 'Tabungan Payroll - Perusahaan', 'Rasakan kemudahan menggunakan fasilitas pengajian di BANKKU, serta dapatkan fasilitas keuntungan yang bernilai lebih khusus untuk karyawan anda', ''),
(5, 'Giro Rupiah', 'Hadirkan sarana pendukung yang terpercaya untuk mengembangkan usaha anda', ''),
(6, 'Giro Valas', 'Nikmati berbagai keuntungan untuk simpanan valuta asing anda, dengan bertransaksi sesuai yang anda inginkan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pinjaman`
--
ALTER TABLE `tbl_pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `tbl_produk_pinjaman`
--
ALTER TABLE `tbl_produk_pinjaman`
  ADD PRIMARY KEY (`id_produk_pinjaman`);

--
-- Indexes for table `tbl_simpanan`
--
ALTER TABLE `tbl_simpanan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pinjaman`
--
ALTER TABLE `tbl_pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_produk_pinjaman`
--
ALTER TABLE `tbl_produk_pinjaman`
  MODIFY `id_produk_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_simpanan`
--
ALTER TABLE `tbl_simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
