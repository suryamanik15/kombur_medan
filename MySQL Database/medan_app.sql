-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 26. Februari 2015 jam 15:00
-- Versi Server: 5.1.33
-- Versi PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medan_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `check_in_place`
--

CREATE TABLE IF NOT EXISTS `check_in_place` (
  `id_account` varchar(200) NOT NULL,
  `tempat` varchar(600) NOT NULL,
  `check_time` datetime NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `check_in_place`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id_account` varchar(45) NOT NULL,
  `nama` varchar(550) NOT NULL,
  `email` varchar(550) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(550) NOT NULL,
  `tempat_tinggal` varchar(550) NOT NULL,
  `jenkel` enum('Pria','Wanita') NOT NULL,
  `profpic` varchar(600) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`id_account`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_account`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_koordinat`
--

CREATE TABLE IF NOT EXISTS `tbl_koordinat` (
  `id_tempat` int(100) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(550) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `tbl_koordinat`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_level_user`
--

CREATE TABLE IF NOT EXISTS `tbl_level_user` (
  `id_level_user` int(5) NOT NULL,
  `hak_akses` varchar(400) NOT NULL,
  PRIMARY KEY (`id_level_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `hak_akses`) VALUES
(1, 'administrator'),
(2, 'operator'),
(3, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(200) NOT NULL AUTO_INCREMENT,
  `id_account` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `level_user` int(5) NOT NULL,
  `status` enum('active','block') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `tbl_user`
--

