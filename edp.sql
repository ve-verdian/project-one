-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2019 at 03:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_keluar`
--

CREATE TABLE `tb_barang_keluar` (
  `id` int(10) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal_masuk` varchar(20) NOT NULL,
  `tanggal_keluar` varchar(20) NOT NULL,
  `divisi` varchar(150) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `unit_order` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang_keluar`
--

INSERT INTO `tb_barang_keluar` (`id`, `id_transaksi`, `tanggal_masuk`, `tanggal_keluar`, `divisi`, `kode_barang`, `nama_barang`, `satuan`, `jumlah`, `unit_order`) VALUES
(18, 'WG-201981064973', '01/10/2019', '01/10/2019', 'EDP-IT', 'LP-001', 'Laptop HP', 'Pcs', '1', 'Marketing'),
(19, 'WG-201924691387', '04/10/2019', '05/10/2019', 'EDP-IT', 'PR-0001', 'Printer Canon Pixma', 'Pcs', '1', 'Farmasi'),
(20, 'WG-201992638154', '01/10/2019', '05/10/2019', 'EDP-IT', 'MO-003', 'Mouse Logitech', 'Pcs', '1', 'HRD'),
(21, 'WG-201963058194', '08/10/2019', '11/10/2019', 'EDP-IT', 'PR-0002', 'Printer HP LaserJet', 'PC', '1', 'Administration'),
(22, 'WG-201906893752', '11/10/2019', '22/10/2019', 'EDP-IT', 'LX-001', 'Printer Epson LX-310', 'PC', '1', 'Farmasi');

--
-- Triggers `tb_barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `TG_BARANG_KELUAR` AFTER INSERT ON `tb_barang_keluar` FOR EACH ROW BEGIN
 UPDATE tb_barang_masuk SET jumlah=jumlah-NEW.jumlah
 WHERE kode_barang=NEW.kode_barang;
 DELETE FROM tb_barang_masuk WHERE jumlah = 0;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `divisi` varchar(150) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang_masuk`
--

INSERT INTO `tb_barang_masuk` (`id_transaksi`, `tanggal`, `divisi`, `kode_barang`, `nama_barang`, `satuan`, `jumlah`) VALUES
('WG-201906893752', '11/10/2019', 'EDP-IT', 'LX-001', 'Printer Epson LX-310', 'Pcs', '4'),
('WG-201924691387', '04/10/2019', 'EDP-IT', 'PR-0001', 'Printer Canon Pixma', 'Pcs', '5'),
('WG-201963058194', '08/10/2019', 'EDP-IT', 'PR-0002', 'Printer HP LaserJet', 'Pcs', '4'),
('WG-201989346217', '21/10/2019', 'EDP-IT', 'LP-001', 'Laptop Merk HP', 'Pcs', '3'),
('WG-201991275380', '01/10/2019', 'EDP-IT', 'MO-002', 'Keyboard', 'Pcs', '5'),
('WG-201992638154', '01/10/2019', 'EDP-IT', 'MO-003', 'Mouse Logitech', 'Pcs', '4'),
('WG-201998430275', '22/10/2019', 'EDP-IT', 'PR-003', 'Printer E-Tiket Zebra', 'Pcs', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `kode_satuan` varchar(100) NOT NULL,
  `nama_satuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `kode_satuan`, `nama_satuan`) VALUES
(1, 'DS', 'Dus'),
(2, 'PC', 'Pcs'),
(5, 'PK', 'Pack'),
(6, 'RM', 'Rim'),
(7, 'BT', 'Batang'),
(8, 'ML', 'Milimeter');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_gambar_user`
--

CREATE TABLE `tb_upload_gambar_user` (
  `id` int(11) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `nama_file` varchar(220) NOT NULL,
  `ukuran_file` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_upload_gambar_user`
--

INSERT INTO `tb_upload_gambar_user` (`id`, `username_user`, `nama_file`, `ukuran_file`) VALUES
(1, 'user', 'nopic2.png', '6.33'),
(2, 'admin', 'avatar5.png', '7.82'),
(7, 'bambang', 'nopic2.png', '6.33'),
(8, 'budi', 'nopic2.png', '6.33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `last_login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `last_login`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$TVaKYRQt/aQwA.8Qy8pR7OqSgDPAgXIaVRcec9C6y2AZvyMt/V9NC', 1, '30-10-2019 3:08'),
(2, 'naraku', 'naraku@gmail.com', '$2y$10$41Q5PhlKHjL6Ds.atmubZOSGrkhK6Va0UP39jVngEHf4GjYyeWI4C', 1, '08-10-2019 8:20'),
(3, 'user', 'user@gmail.com', '$2y$10$gImuxSLMUjGwH2kMaOtmMuJreLa0dIEVkHuE7GEkdma4wcoTtBKPC', 0, '22-10-2019 6:16'),
(27, 'coba', 'coba@coba.com', '$2y$10$bTs4JzqYsAzBeHu2l6Izhu9Ko4t/l9oAt8g38HZCQnLbpBqjBH43.', 1, '23-10-2019 2:49'),
(28, 'bambang', 'bambang@gmail.com', '$2y$10$OGvcuSMyHCQvutjdTHuJte4qBZrIHkWgQsYp2AExNrKa1YBtUtoDS', 0, '21-10-2019 5:18'),
(29, 'joko', 'joko@gmail.com', '$2y$10$NjPjpFy32IB.1BDiAtjbguQ4RRhdh5vRX0mzkPpShUIZT6WBaYIOG', 0, '23-10-2019 2:56'),
(30, 'budi', 'budi@gmail.com', '$2y$10$6AXEswbuyh4glrvN1n8EQuekIOuOjMtA2sPFkacfCNnTRN3ESLuKe', 0, '23-10-2019 3:02'),
(32, 'eko', 'eko@eko.com', '$2y$10$ESGFlxEgGMn9d1qlXNbq/OuYfb.t3FHZAR87gjFlhX6S6OCJA7r5K', 0, '23-10-2019 2:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_upload_gambar_user`
--
ALTER TABLE `tb_upload_gambar_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_upload_gambar_user`
--
ALTER TABLE `tb_upload_gambar_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
