-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2023 pada 06.20
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `respon`
--

CREATE TABLE `respon` (
  `id_respon` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `gedung` varchar(255) NOT NULL,
  `kritik` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `respon`
--

INSERT INTO `respon` (`id_respon`, `id`, `rating`, `gedung`, `kritik`, `created_at`) VALUES
(25, 49, 3, 'JMI', 'good\r\n', '2023-07-05 04:27:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `askot` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `askot`, `umur`, `role`, `email`, `password`, `created_at`, `updated_at`) VALUES
(23, 'PRITA NUR RIFDAH', 'bekasi', 18, '2', 'agro@gmail.com', '$2y$10$euQ8jUpH68eKIJQjR3x.Ye.qs1PEiG6Lmt4BGaly3wivswG0pv8o.', '2023-06-14 05:23:16', '2023-06-11 11:19:10'),
(25, 'ima', 'sbg', 19, '4', 'tppm@gmail.com', '$2y$10$03.kDToozb0LWmQ/FaoeXOEOYCWjteonScj7RWQEzDSAhz.fu6z1W', '2023-06-11 14:29:31', '2023-06-11 14:29:31'),
(32, 'PRITA NUR RIFDAH', 'bks', 19, '1', 'super@gmail.com', '$2y$10$Sqy3puav7NfJtfs/NBwSbOvMT0gEpsLffS42HrPdirRU6B05d269.', '2023-06-15 05:44:27', '2023-06-15 05:25:00'),
(33, 'intan', 'bks', 19, '3', 'keperawatan@gmail.com', '$2y$10$lwRCWRSxUmUfA4UtOIdp.OX69UjN4MfrkIdBm3yDgxczUDvM53dN6', '2023-06-15 05:26:52', '2023-06-15 05:26:52'),
(34, 'syifa', 'sbg', 21, '5', 'jmi@gmail.com', '$2y$10$pm/ShhzJsUeYKh.SxzP33.ebt8LRZf/465jbWZEe.Hj6w2hvK50Ke', '2023-07-05 04:39:29', '2023-06-15 22:22:26'),
(35, 'prita', 'bekasi', 12, '5', 'prita@gmail.com', '$2y$10$jd9M5mlqHVc6dkIA7bjzNOAO8I9abD6HOthJ5.9oxrj.H06JzQ8Ky', '2023-06-16 01:38:49', '2023-06-16 01:37:26'),
(38, 'cinta', 'jakarta', 19, '3', 'cinta@gmail.com', '$2y$10$LpVVE66BcMjsTPWkZNAzNO9x79BoW5C2VPwt/VijawqZ7IX1PHEGi', '2023-06-23 01:45:36', '2023-06-23 01:45:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visit`
--

CREATE TABLE `visit` (
  `id` int(11) NOT NULL,
  `age_range` varchar(50) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visit`
--

INSERT INTO `visit` (`id`, `age_range`, `latitude`, `longitude`, `created_at`) VALUES
(48, 'Mahasiswa', -6.561929, 107.789079, '2023-06-23 01:52:01'),
(49, 'Mahasiswa', -6.559151, 107.757780, '2023-07-04 05:12:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`id_respon`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `respon`
--
ALTER TABLE `respon`
  MODIFY `id_respon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `respon`
--
ALTER TABLE `respon`
  ADD CONSTRAINT `respon_ibfk_1` FOREIGN KEY (`id`) REFERENCES `visit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
