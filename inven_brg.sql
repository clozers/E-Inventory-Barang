-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 04:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inven_brg`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kondisi` enum('NEW','SECOND') NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `jml_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `kondisi`, `kategori_barang`, `jml_barang`) VALUES
(2312314, 'SABUN', 'SECOND', 'ATK', 15),
(2312415, 'LABEL', 'NEW', 'ATK', 11),
(2345512, 'PoVA', 'NEW', 'BARU', 1),
(23123141, 'BUKU', 'NEW', 'ATK', 2),
(23124125, 'MOUSE', 'NEW', 'ATK', 2);

-- --------------------------------------------------------

--
-- Table structure for table `keluar_barang`
--

CREATE TABLE `keluar_barang` (
  `id_brg_keluar` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `jml_brg_keluar` int(50) NOT NULL,
  `keperluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masuk_barang`
--

CREATE TABLE `masuk_barang` (
  `id_msk_brg` varchar(255) NOT NULL,
  `kode_barang` int(50) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jml_masuk` int(50) NOT NULL,
  `kode_supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_barang`
--

CREATE TABLE `pinjam_barang` (
  `no_pinjam` varchar(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `kode_barang` int(50) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jml_pinjam` int(50) NOT NULL,
  `peminjam` varchar(255) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `kode_barang` int(50) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `jml_brg_masuk` int(50) NOT NULL,
  `jml_brg_keluar` int(50) NOT NULL,
  `total_brg` int(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat_supplier` varchar(255) NOT NULL,
  `telp_supplier` int(50) NOT NULL,
  `kota_supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(50) NOT NULL,
  `level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'arul', 'arul', 123, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `keluar_barang`
--
ALTER TABLE `keluar_barang`
  ADD PRIMARY KEY (`id_brg_keluar`);

--
-- Indexes for table `masuk_barang`
--
ALTER TABLE `masuk_barang`
  ADD PRIMARY KEY (`id_msk_brg`),
  ADD UNIQUE KEY `kode_supplier` (`kode_supplier`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
