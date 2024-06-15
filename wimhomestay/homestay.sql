-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2024 pada 07.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
(1, 'joko', '123'),
(2, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kwitansi`
--

CREATE TABLE `kwitansi` (
  `id_kwitansi` int(11) NOT NULL,
  `id_pesanan1` int(11) NOT NULL,
  `foto_kwitansi` varchar(1000) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `email1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kwitansi`
--

INSERT INTO `kwitansi` (`id_kwitansi`, `id_pesanan1`, `foto_kwitansi`, `tanggal_dibuat`, `email1`) VALUES
(4, 3, '3_aa_6632e92801aff.webp', '2024-05-02', ''),
(5, 4, '4_ciki_6632f095e5b1e.webp', '2024-05-02', ''),
(6, 4, '4_ciki_6643422dd8927.webp', '2024-05-14', ''),
(7, 4, '4_ciki_6656814f61f7c.webp', '2024-05-29', ''),
(8, 3, '3_aa_6656816b12f9f.webp', '2024-05-29', ''),
(9, 7, '7_joko_665693661f087.webp', '2024-05-29', 'bubu@gmail.com'),
(10, 7, '7_joko_6656937808641.webp', '2024-05-29', 'bubu@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `no_HP_pelanggan` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_referensi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `check_in`, `check_out`, `nama_pelanggan`, `no_HP_pelanggan`, `email`, `no_referensi`) VALUES
(2, '2024-04-16', '2024-05-02', 'eeeee', '4564646', '', ''),
(3, '2024-04-10', '2024-05-02', 'aa', '456464633', '', ''),
(4, '2024-05-15', '2024-05-17', 'ciki', '1231231231321', '', ''),
(6, '2024-05-14', '2024-05-11', 'abang bari sipaling ', '12121', 'aaaa', ''),
(7, '2024-05-07', '2024-05-31', 'joko', '0812222', 'bubu@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `id_kwitansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
