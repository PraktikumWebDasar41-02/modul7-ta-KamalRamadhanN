-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliah`
--

CREATE TABLE `kuliah` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuliah`
--

INSERT INTO `kuliah` (`id`, `nama`, `nim`, `tgl`, `jk`, `prodi`, `fakultas`, `alamat`, `moto`) VALUES
(1, 'Kamal', '6701174145', '2000-01-04', 'Laki-laki', 'D3 Manajemen Informatika', 'Fakultas Ilmu Terapan', 'Cirebon', 'Ingin Sukses'),
(5, 'KamalAmaw', '6701174100', '1999-05-05', 'Laki-laki', 'D3 Manajemen Pemasaran', 'Fakultas Ilmu Terapan', 'Cirebon', 'Ingin Sukses'),
(6, 'KamalAmaw', '6701174100', '1999-05-05', 'Laki-laki', 'D3 Manajemen Pemasaran', 'Fakultas Ilmu Terapan', 'Cirebon', 'Ingin Sukses'),
(7, 'KamalAmaw', '123123123', '2001-04-15', 'Laki-laki', 'D3 Manajemen Informatika', 'Fakultas Industri Kreatif', 'Cirebon', 'Ingin Sukses'),
(8, 'KamalRN', '6701174040', '2000-01-01', 'Laki-laki', 'D3 Manajemen Informatika', 'Fakultas Ilmu Terapan', 'Cirebon', 'Ingin Sukses Brohhh'),
(9, 'Kamalr', '6701174142', '2000-01-04', 'Laki-laki', 'D3 Manajemen Informatika', 'Fakultas Ilmu Terapan', 'Cirebon', 'Ingin Sukses');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuliah`
--
ALTER TABLE `kuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kuliah`
--
ALTER TABLE `kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
