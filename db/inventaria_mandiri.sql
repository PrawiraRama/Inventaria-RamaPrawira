-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Nov 2023 pada 06.53
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaria_mandiri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `manageadmin`
--

CREATE TABLE `manageadmin` (
  `id_manageadmin` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `manageadmin`
--

INSERT INTO `manageadmin` (`id_manageadmin`, `nama`, `jabatan`) VALUES
(21, 'Rama Prawira', 'Manager Gudang'),
(24, 'Bijana', 'Forclips Guid'),
(25, 'Putra', 'Box Guide');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'user', '$2y$10$kyu7bbuYWuvr.IZ/tgRgu.n7cpT7K3Qiu6FPvp179DcmPJ6qsA5ju', '2'),
(2, 'admin', '$2y$10$kyu7bbuYWuvr.IZ/tgRgu.n7cpT7K3Qiu6FPvp179DcmPJ6qsA5ju', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `manageadmin`
--
ALTER TABLE `manageadmin`
  ADD PRIMARY KEY (`id_manageadmin`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `manageadmin`
--
ALTER TABLE `manageadmin`
  MODIFY `id_manageadmin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
