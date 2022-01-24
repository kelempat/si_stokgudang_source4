-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Januari 2022 jam 12:10
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar`
--

CREATE TABLE IF NOT EXISTS `keluar` (
  `id_out` varchar(50) NOT NULL,
  `id_brg` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `pembeli` varchar(100) NOT NULL,
  PRIMARY KEY (`id_out`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluar`
--

INSERT INTO `keluar` (`id_out`, `id_brg`, `nama_barang`, `jumlah`, `harga`, `tanggal`, `pembeli`) VALUES
('123', '23', 'hh', '23', '90000', '2022-01-17', 'pembeli'),
('56', 'hguyob', 'ggv', 'bb ', '399999', '2022-01-15', 'pembeli'),
('7', '', 'kemeja', '5', '700000', '2022-01-13', 'pembeli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE IF NOT EXISTS `masuk` (
  `id_in` varchar(25) NOT NULL,
  `suplier` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal_masuk` varchar(50) NOT NULL,
  `harga_satuan` int(1) NOT NULL,
  `jumlah_barang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_in`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id_in`, `suplier`, `nama_barang`, `tanggal_masuk`, `harga_satuan`, `jumlah_barang`) VALUES
('27', 'kk', 'tas', '2022-01-15', 2000, '3'),
('3', 'hh', 'sepatu', '2022-01-24', 20000, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang`
--

CREATE TABLE IF NOT EXISTS `stok_barang` (
  `id_brg` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok_barang`
--

INSERT INTO `stok_barang` (`id_brg`, `nama_barang`, `jumlah`, `harga_satuan`) VALUES
('Pidana Pencurian', '', '', ''),
('Pidana Perjudian', '', '', ''),
('Pidana Perjudian', '', '', ''),
('Perdata Gugatan', '', '', ''),
('Perdata Gugatan', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `paswd` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(10) NOT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'bima', 1, 'admin gudang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
