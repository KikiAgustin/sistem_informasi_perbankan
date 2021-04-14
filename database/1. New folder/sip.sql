-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 10:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Indexes for table `tbl_simpanan`
--
ALTER TABLE `tbl_simpanan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_simpanan`
--
ALTER TABLE `tbl_simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
