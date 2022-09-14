-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2022 pada 13.47
-- Versi server: 10.8.4-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql6517581`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `multi_users`
--

CREATE TABLE `multi_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `create_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `multi_users`
--

INSERT INTO `multi_users` (`id`, `name`, `username`, `password`, `level`, `email`, `tanggal_lahir`, `jenis_kelamin`, `gambar`, `alamat`, `create_at`) VALUES
(9, 'ryugen', 'ryugen1145', '$2y$10$cqGUCuWjrBsofonLv5wjC.IOPNAnwVxA71t05V2l7BEnvJUxVQrsG', NULL, 'anonimous7770@gmail.com', '2022-09-14', NULL, 'assets/static/6321c2cf669be.png', '', '2022-09-14 09:01:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `demo` varchar(300) NOT NULL,
  `source` varchar(300) NOT NULL,
  `images` varchar(300) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `author` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id`, `title`, `demo`, `source`, `images`, `deskripsi`, `author`, `date`, `kategori`) VALUES
(1, 'Tes ok', 'http://alwaysdark.rf.gd/', 'https://github.com/ryugenxd', 'assets/static/6321cb5a4c040.png', 'Ehem....', 'ryugen', '2022-09-14 12:38:50', 'php'),
(2, 'Tes', 'Ft', 'Tyy', 'assets/static/6321cc718982b.jpg', '555', 'ryugen', '2022-09-14 12:43:29', 'php'),
(3, 'Bot Telegram ', 'http://alwaysdark.rf.gd/', 'https://github.com/ryugenxd', 'assets/static/6321cc960ce28.png', '<b>tes</b>', 'ryugen', '2022-09-14 12:44:06', 'php'),
(4, 'Bot Telegram ', 'http://alwaysdark.rf.gd/', 'https://github.com/ryugenxd', 'assets/static/6321c6e0a836e.jpg', '<b>tes</b>', 'ryugen', '2022-09-14 12:19:44', 'php'),
(5, 'Tes', 'http://alwaysdark.rf.gd/', 'https://github.com/ryugenxd', 'assets/static/6321c8b86d2d3.jpg', 'Bot Telegram', 'ryugen', '2022-09-14 12:27:36', 'php');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `multi_users`
--
ALTER TABLE `multi_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `multi_users`
--
ALTER TABLE `multi_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
