-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 03:15 AM
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
-- Table structure for table `tbl_fitur_kredit_pinjaman`
--

CREATE TABLE `tbl_fitur_kredit_pinjaman` (
  `id_fitur_kredit` int(11) NOT NULL,
  `nama_fitur` text NOT NULL,
  `id_produk_pinjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fitur_kredit_pinjaman`
--

INSERT INTO `tbl_fitur_kredit_pinjaman` (`id_fitur_kredit`, `nama_fitur`, `id_produk_pinjaman`) VALUES
(1, 'Limit kredit di atas Rp. 100 juta s.d Rp. 10 Milyar', 1),
(2, 'Kredit dapat diberikan dalam valuta Rupiah', 1),
(3, 'Jangka waktu sampai dengan 1 (satu) tahun dan dapat diperpanjang', 1),
(4, 'Sifat kredit revolving atau non revolving', 1),
(5, 'Limit kredit di atas Rp. 100 juta s.d Rp. 10 Milyar', 2),
(6, 'Kredit diberikan dalam valuta Rupiah', 2),
(7, 'Jangka waktu lebih dari 1 (satu) tahun', 2),
(8, 'Proses mudah dan cepat', 3),
(9, 'Persyaratan kredit yang ringan', 3),
(10, 'Agunan adalah berupa objek yang dibiayai.', 3),
(11, 'Suku bunga 6% efektif per tahun', 3),
(12, 'Agunan tambahan untuk KUR Mikro dan KUR Penempatan TKI tidak dipersyaratkan, sedangkan untuk KUR Ritel berupa tanah dan/ atau bangunan atau kendaraan bermotor, dengan bukti kepemilikan berupa SHM/ SHGB/ SHGU/ Hak Milik atas Satuan Rumah Susun atau BPKB.Nilai agunan minimal 70% dan maksimal < 100% dari nilai limit kredit.', 3),
(13, 'Proses kredit cepat dan mudah.', 4),
(14, 'Persyaratan kredit ringan.', 4),
(15, 'Limit hingga Rp.200 Juta.', 4),
(16, 'Jangka waktu sampai dengan 5 tahun.', 4),
(17, 'Agunan berupa objek yang dibiayai & fixed assets.', 4),
(18, 'Suku bunga bersaing dengan system perhitungan flat & fixed selama jangka waktu kredit.', 4),
(19, 'Angsuran tetap setiap bulannya.', 4),
(20, 'Jangka Waktu: Maksimal 1 (satu) tahun', 5),
(21, 'Pembiayaan: Bank Mandiri Maksimal 70% dari kebutuhan modal kerja dan pembiayaan sendiri minimal 30%.', 5),
(22, 'Jaminan Utama: Usaha yang dibiayai', 5),
(23, 'Jaminan Tambahan: Dipersyaratkan apabila menurut penilaian Bank diperlukan.', 5),
(24, 'Pembiayaan: maksimal 65% dari cost of project/objek yang dibiayai dan pembiayaan sendiri minimal 35%.', 6),
(25, 'Jaminan Utama: Objek/Proyek yang dibiayai', 6),
(26, 'Jaminan Tambahan: Dipersyaratkan apabila menurut penilaian Bank diperlukan', 6),
(27, 'Penarikan dapat dilakukan setiap saat sesuai kebutuhan usaha.', 5),
(28, 'Bagian yang belum ditarik tidak dikenakan bunga.', 5),
(29, 'Aktivasi keuangan disalurkan melalui rekening pinjaman dan atau rekening giro.', 5),
(30, 'Pencairan atas dasar prestasi', 6),
(31, 'Pencairan langsung dipindahkan ke rekening giro', 6),
(32, 'Besarnya Agunan disesuaikan dengan persentase pembiayaan', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manfaat_pinjaman`
--

CREATE TABLE `tbl_manfaat_pinjaman` (
  `id_manfaat_pinjaman` int(11) NOT NULL,
  `manfaat` text NOT NULL,
  `id_produk_pinjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ringkas_pinjaman` text NOT NULL,
  `detail_pinjaman` text NOT NULL,
  `url` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk_pinjaman`
--

INSERT INTO `tbl_produk_pinjaman` (`id_produk_pinjaman`, `id_pinjaman`, `nama_pinjaman`, `ringkas_pinjaman`, `detail_pinjaman`, `url`) VALUES
(1, 1, 'Kredit Modal kerja', 'Hadirkan kemudahan untuk pembiayaan inventory/piutang/proyek dan kebutuhan modal kerja anda lainnya', 'Mandiri Kredit Modal Kerja Adalah fasilitas kredit yang diberikan untuk memenuhi kebutuhan modal kerja yang habis dalam satu siklus usaha dan atau kebutuhan modal kerja yang bersifat khusus seperti untuk membiayai inventory / piutang / proyek atau kebutuhan khusus lainnya.', 'modalKerja'),
(4, 1, 'Kredit Usaha Mikro (KUM)', 'Dukungan kredit untuk kebutuhan investasi serta kebutuhan modal kerja anda untuk usaha produktif maupun konsumtif skala mikro', 'Kredit Usaha Mikro (KUM) adalah kredit yang diberikan kepada pengusaha mikro untuk membiayai kebutuhan usaha produktif baik untuk kebutuhan investasi maupun kebutuhan modal kerja', 'usahaRakyat'),
(5, 2, 'Kredit Modal Kerja', 'Hadirkan kemudahan untuk pembiayaan inventori/ piutang/ proyek dan kebutuhan modal kerja anda', 'Fasilitas kredit jangka pendek yang diberikan dalam mata uang rupiah maupun valuta asing untuk membiayai kebutuhan modal kerja yang habis dalam satu siklus usaha dengan jangka waktu maksimal 1 (satu) tahun.', 'modalKerjaCorporate'),
(6, 2, 'Kredit Investasi', 'Nikamati fasiltas kredit untuk rehabilitasi, modernisasi, perluasan dan pendirian proyek baru sesuai kebutuhan investasi pengambangan usaha ada', 'Fasilitas kredit jangka menengah dan jangka panjang, yang diberikan dalam mata uang rupiah maupun valuta asing untuk pembiayaan pengadaan barang - barang modal untuk rehabilitasi, modernisasi, perluasan ataupun pendirian proyek baru maupun refinancing , yang pelunasannya bersumber dari hasil usaha dengan barang-barang modal yang dibiayai.', 'kreditInvestasi');

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
-- Indexes for table `tbl_fitur_kredit_pinjaman`
--
ALTER TABLE `tbl_fitur_kredit_pinjaman`
  ADD PRIMARY KEY (`id_fitur_kredit`);

--
-- Indexes for table `tbl_manfaat_pinjaman`
--
ALTER TABLE `tbl_manfaat_pinjaman`
  ADD PRIMARY KEY (`id_manfaat_pinjaman`);

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
-- AUTO_INCREMENT for table `tbl_fitur_kredit_pinjaman`
--
ALTER TABLE `tbl_fitur_kredit_pinjaman`
  MODIFY `id_fitur_kredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_manfaat_pinjaman`
--
ALTER TABLE `tbl_manfaat_pinjaman`
  MODIFY `id_manfaat_pinjaman` int(11) NOT NULL AUTO_INCREMENT;

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
