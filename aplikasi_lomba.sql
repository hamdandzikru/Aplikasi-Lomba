-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2019 pada 19.18
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `aplikasi_lomba`
--
CREATE DATABASE IF NOT EXISTS `aplikasi_lomba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aplikasi_lomba`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_akun`
--

CREATE TABLE IF NOT EXISTS `daftar_akun` (
  `NIM` varchar(10) NOT NULL,
  `NAMA` varchar(40) NOT NULL,
  `ANGKATAN` varchar(4) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `LEVEL` varchar(20) NOT NULL,
  `KODE_ASISTEN` varchar(3),
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_akun`
--

INSERT INTO `daftar_akun` (`NIM`, `NAMA`, `ANGKATAN`, `USERNAME`, `PASSWORD`, `LEVEL`) VALUES
('1', '', '', 'bima', 'bima', 'user'),
('2', '', '', 'aa', 'aa', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
