-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2019 pada 13.25
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi_kelas`
--

CREATE TABLE `absensi_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sakit` int(30) NOT NULL,
  `alpa` varchar(30) NOT NULL,
  `izin` varchar(30) NOT NULL,
  `tanpa_keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi_kelas`
--

INSERT INTO `absensi_kelas` (`id`, `nama`, `sakit`, `alpa`, `izin`, `tanpa_keterangan`) VALUES
(1, 'Deva', 0, '', '', ''),
(2, 'Aprian', 0, '', '', ''),
(3, 'Deva', 1, '1', '1', '1'),
(4, 'Deva', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
