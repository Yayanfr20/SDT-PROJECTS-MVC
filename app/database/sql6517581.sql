-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql6.freesqldatabase.com
-- Generation Time: 11 Sep 2022 pada 22.50
-- Versi Server: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql6517581`
--

-- Rollback table
DROP TABLE IF EXISTS `multi_users`;
DROP TABLE IF EXISTS `postingan`;
DROP TABLE IF EXISTS `notifikasi`;
DROP TABLE IF EXISTS `global_chat`;
DROP TABLE IF EXISTS `private_chat`;

-- Struktur dari tabel `multi_users`

CREATE TABLE `multi_users` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
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

-- Struktur dari tabel `postingan`

CREATE TABLE `postingan` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `demo` varchar(300) NOT NULL,
  `source` varchar(300) NOT NULL,
  `images` varchar(300) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `author` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Struktur dari tabel notifikasi
CREATE TABLE `notifikasi` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB default CHARSET=utf8mb4;

-- Struktur dari tabel global_chat
CREATE TABLE `global_chat` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULl,
  `receiver` int(11) NOT NULl,
  `replied` int(11) DEFAULT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB default CHARSET=utf8mb4;

-- Struktur dari tabel private_chat
CREATE TABLE `private_chat` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULl,
  `receiver` int(11) NOT NULl,
  `replied` int(11) DEFAULT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB default CHARSET=utf8mb4;