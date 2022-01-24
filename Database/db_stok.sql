-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2021 pada 13.03
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar`
--

CREATE TABLE `keluar` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_brg` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `harga_total` varchar(100) NOT NULL,
  `pembeli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluar`
--

INSERT INTO `keluar` (`id_transaksi`, `id_brg`, `nama_barang`, `jumlah`, `harga`, `tanggal`, `harga_total`, `pembeli`) VALUES
('01/PDT.G/2018/PN.KIS', '', 'J. Siahaan', '2018-12-10', 'Belum Kembali', '0', '-', ''),
('01/PID.B/2018/PN.KIS', '', 'A. Nasution', '2018-12-14', '2018-12-16', '2', '-', ''),
('02/PID.B/2018/PN.KIS', '', 'Bejo', '2018-12-11', 'Belum Kembali', '0', 'Input ke CTS', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id_in` varchar(25) NOT NULL,
  `suplier` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal_masuk` varchar(50) NOT NULL,
  `harga_satuan` int(1) NOT NULL,
  `jumlah_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id_in`, `suplier`, `nama_barang`, `tanggal_masuk`, `harga_satuan`, `jumlah_barang`) VALUES
('', '', '', '', 0, ''),
('18', 'budi', 'tisu', '2021-12-27', 2000, '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang`
--

CREATE TABLE `stok_barang` (
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

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `paswd` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(10) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 1, '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_in`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
