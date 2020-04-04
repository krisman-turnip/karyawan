-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2020 pada 20.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan_gaji`
--

CREATE TABLE `aturan_gaji` (
  `jabatan` int(20) NOT NULL,
  `masa_kerja` int(20) NOT NULL,
  `insentif` float NOT NULL,
  `bonus` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aturan_gaji`
--

INSERT INTO `aturan_gaji` (`jabatan`, `masa_kerja`, `insentif`, `bonus`) VALUES
(1, 1, 200000, 300000),
(2, 1, 400000, 500000),
(1, 2, 600000, 700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `kode_penggajian` int(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `nominal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`kode_penggajian`, `nip`, `nama_karyawan`, `tanggal_penerimaan`, `nominal`) VALUES
(1, 2, 'a', '2020-04-03', 4500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kode` int(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `standart_gaji` decimal(20,0) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kode`, `jabatan`, `standart_gaji`, `keterangan`) VALUES
(1, 'staff', '4000000', 'staff'),
(2, 'supervisor', '4500000', 'supervisor'),
(3, 'manager', '10000000', 'manager'),
(4, '', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `masa_kerja` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nip`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `telp`, `email`, `alamat`, `jabatan`, `masa_kerja`) VALUES
(1, 'kiki', '1', '1992-02-02', 217618988, 'kiki@gmail.com', 'jl. gede 2 no2', '', 2),
(2, 'a', 'pria', '1993-03-03', 983912, 'ilham@gmail.com', 'jl kenanga', '1', 1),
(3, 'kumala', '2', '1993-03-02', 983912, 'asda@sda', 'jl kenanga', '', 1),
(4, 'novi', 'wanita', '0000-00-00', 2019291, 'novi@gmail.com', 'Jl. kentang', '1', 1),
(6, 'kumala', 'pria', '2020-04-01', 2918, 'ini@gmail.com', 'kuningan', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`kode_penggajian`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `kode_penggajian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `kode` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
