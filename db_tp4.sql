-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2023 pada 15.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tp4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_kota` varchar(100) NOT NULL,
  `id_naungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `tanggal_lahir`, `asal_kota`, `id_naungan`) VALUES
(4, 'Hanni', '2023-06-02', 'Seoul', 2),
(5, 'Min Yoongi', '1993-03-09', 'Bogor', 1),
(6, 'Park Jimin', '1995-10-13', 'Busan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `naungan`
--

CREATE TABLE `naungan` (
  `id_naungan` int(11) NOT NULL,
  `nama_naungan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `naungan`
--

INSERT INTO `naungan` (`id_naungan`, `nama_naungan`) VALUES
(1, 'Big Hit Music'),
(2, 'Ador'),
(3, 'Pledis Entertaiment'),
(8, 'Source Music'),
(10, 'Belift Lab'),
(17, 'KOZ Entertainment');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `id_naungan` (`id_naungan`);

--
-- Indeks untuk tabel `naungan`
--
ALTER TABLE `naungan`
  ADD PRIMARY KEY (`id_naungan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `naungan`
--
ALTER TABLE `naungan`
  MODIFY `id_naungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_naungan`) REFERENCES `naungan` (`id_naungan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
