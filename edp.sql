-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2019 at 05:01 AM
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
  `jumlah` int(10) NOT NULL,
  `unit_order` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang_keluar`
--

INSERT INTO `tb_barang_keluar` (`id`, `id_transaksi`, `tanggal_masuk`, `tanggal_keluar`, `divisi`, `kode_barang`, `nama_barang`, `satuan`, `jumlah`, `unit_order`) VALUES
(18, 'WG-201981064973', '01/10/2019', '01/10/2019', 'EDP-IT', 'LP-001', 'Laptop HP', 'Pcs', 1, 'Marketing'),
(19, 'WG-201924691387', '04/10/2019', '05/10/2019', 'EDP-IT', 'PR-0001', 'Printer Canon Pixma', 'Pcs', 1, 'Farmasi'),
(20, 'WG-201992638154', '01/10/2019', '05/10/2019', 'EDP-IT', 'MO-003', 'Mouse Logitech', 'Pcs', 1, 'HRD'),
(21, 'WG-201963058194', '08/10/2019', '11/10/2019', 'EDP-IT', 'PR-0002', 'Printer HP LaserJet', 'PC', 1, 'Administration'),
(22, 'WG-201906893752', '11/10/2019', '22/10/2019', 'EDP-IT', 'LX-001', 'Printer Epson LX-310', 'PC', 1, 'Farmasi');

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
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang_masuk`
--

INSERT INTO `tb_barang_masuk` (`id_transaksi`, `tanggal`, `divisi`, `kode_barang`, `nama_barang`, `satuan`, `jumlah`) VALUES
('WG-201906893752', '11/10/2019', 'EDP-IT', 'LX-001', 'Printer Epson LX-310', 'Pcs', 4),
('WG-201924691387', '04/10/2019', 'EDP-IT', 'PR-0001', 'Printer Canon Pixma', 'Pcs', 5),
('WG-201963058194', '08/10/2019', 'EDP-IT', 'PR-0002', 'Printer HP LaserJet', 'Pcs', 4),
('WG-201989346217', '21/10/2019', 'EDP-IT', 'LP-001', 'Laptop Merk HP', 'Pcs', 3),
('WG-201991275380', '01/10/2019', 'EDP-IT', 'MO-002', 'Keyboard', 'Pcs', 5),
('WG-201992638154', '01/10/2019', 'EDP-IT', 'MO-003', 'Mouse Logitech', 'Pcs', 4),
('WG-201998430275', '22/10/2019', 'EDP-IT', 'PR-003', 'Printer E-Tiket Zebra', 'Pcs', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` int(11) NOT NULL,
  `kode_divisi` varchar(150) NOT NULL,
  `nama_divisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_divisi`, `kode_divisi`, `nama_divisi`) VALUES
(1, 'Accounting', 'Accounting'),
(2, 'Administration', 'Administration'),
(3, 'Bayitabung-ffc', 'Bayi Tabung - FFC'),
(4, 'Diklat', 'Diklat'),
(5, 'Dokter', 'Dokter'),
(6, 'EDP-IT', 'EDP - IT'),
(7, 'Farmasi', 'Farmasi'),
(8, 'Finance', 'Finance'),
(9, 'Fisioterapi', 'Fisioterapi'),
(10, 'HRD', 'HRD'),
(11, 'IGD', 'IGD'),
(12, 'Kamar-Bayi', 'Kamar Bayi'),
(13, 'Lab', 'Laboratorium'),
(14, 'Lab-Cytogenetic', 'Lab - Cytogenetic'),
(15, 'Logistik', 'Logistik'),
(16, 'Marketing', 'Marketing'),
(17, 'Manajemen', 'Manajemen'),
(18, 'Medis-Penunjang', 'Medis - Penunjang'),
(19, 'MR', 'MR'),
(20, 'OK', 'OK'),
(21, 'PDCA', 'PDCA'),
(22, 'Perawatan-Lt.1', 'Perawatan - Lt. 1'),
(23, 'Perawatan-Lt.2', 'Perawatan - Lt. 2'),
(24, 'Perawatan-Lt.3', 'Perawatan - Lt. 3'),
(25, 'Poli-Anak', 'Poli - Anak'),
(26, 'Poli-Gigi', 'Poli - Gigi'),
(27, 'Poli-Obsgyn', 'Poli - Obsgyn'),
(28, 'Purchasing', 'Purchasing'),
(29, 'Radiologi', 'Radiologi'),
(30, 'Tax&Audit', 'Tax & Audit'),
(31, 'Umum', 'Umum'),
(32, 'VK', 'VK'),
(33, 'Others', 'Others'),
(34, 'RK', 'Ruko Pembelian'),
(35, 'PJ', 'Poli - Jantung'),
(36, 'PJ', 'Pajak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_file_upload`
--

CREATE TABLE `tb_file_upload` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(250) NOT NULL,
  `ukuran_file` varchar(150) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pc`
--

CREATE TABLE `tb_pc` (
  `id_pc` int(11) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `divisi` varchar(150) NOT NULL,
  `hostname` varchar(150) NOT NULL,
  `user` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `hard_disk` varchar(10) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `processor` varchar(150) NOT NULL,
  `os` varchar(150) NOT NULL,
  `ip_address` varchar(150) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `internet` varchar(10) NOT NULL,
  `lokal` varchar(10) NOT NULL,
  `simrs` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pc`
--

INSERT INTO `tb_pc` (`id_pc`, `tgl_input`, `divisi`, `hostname`, `user`, `jenis`, `hard_disk`, `ram`, `processor`, `os`, `ip_address`, `lokasi`, `status`, `internet`, `lokal`, `simrs`) VALUES
(1, '31/10/2019', 'Administration', 'ANAK_1', 'Adm', 'PC', '500 GB', '2 GB', 'IP dual-core CPU E 5700 3.00 Ghz', 'Windows 7 Ultimate 64 bit', '192.168.100.72', 'Lobby', 'Aktif', 'Tidak', 'Ya', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_printer`
--

CREATE TABLE `tb_printer` (
  `id_printer` int(11) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `qty_out` int(10) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `backup` varchar(10) NOT NULL,
  `kepemilikan` varchar(20) NOT NULL,
  `posisi_skg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_printer`
--

INSERT INTO `tb_printer` (`id_printer`, `tgl_input`, `kategori`, `merk`, `type`, `serial_number`, `qty_out`, `capacity`, `kondisi`, `status`, `keterangan`, `warna`, `pengguna`, `lokasi`, `qty`, `backup`, `kepemilikan`, `posisi_skg`) VALUES
(1, '30/10/2019', 'Printer', 'Canon', 'G2010', 'KLHP46543', 1, '', 'Kurang', 'Aktif', 'Hasil fotocopy hitam putih bergaris putus-putus', 'Hitam', 'MR - 05', 'Lantai 5', 0, 'Tidak', 'Vendor', 'MR - 05'),
(3, '30/10/2019', 'Printer', 'Epson', 'LQ-2190', 'MK4Y050934', 1, '', 'Baik', 'Aktif', '', 'Krem', 'Accounting', 'Lantai 5', 1, 'Tidak', 'RS', 'Accounting'),
(4, '30/10/2019', 'Printer', 'Epson', 'LQ-2190', 'MK4Y079281', 1, '', 'Baik', 'Aktif', '', 'Krem', 'Accounting', 'Lantai 5', 1, 'Tidak', 'RS', 'Accounting'),
(5, '30/10/2019', 'Printer', 'HP Color Laserjet', 'Pro MFP M181 FW', 'VNC4C10966', 1, '', 'Baik', 'Aktif', '', 'Putih', 'Bu Ria', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Bu Ria'),
(7, '30/10/2019', 'Printer', 'Epson', 'LX-310', 'Q7FY422918', 1, '', 'Baik', 'Aktif', '', 'Krem', 'Bu Ria', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Bu Ria'),
(8, '30/10/2019', 'Printer', 'HP Laserjet', 'P1102', 'VNC4W93737', 1, '', 'Baik', 'Aktif', '', 'Abu-abu', 'Accounting', 'Lantai 5', 0, 'Tidak', 'RS', 'Accounting'),
(9, '30/10/2019', 'Printer', 'Epson', 'L100', 'Belum', 1, '', 'Baik', 'Aktif', '', 'Hitam', 'Gudang Farmasi', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Gudang Farmasi'),
(10, '30/10/2019', 'Printer', 'Epson', 'LX-300+II', 'HJEY050287', 1, '', 'Baik', 'Aktif', '', 'Krem', 'Gudang Farmasi', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Gudang Farmasi'),
(11, '30/10/2019', 'Printer', 'Canon', 'IP2770', 'HSFH38761', 1, '', 'Baik', 'Aktif', '', 'Hitam', 'HRD', 'Lantai 5', 0, 'Tidak', 'Vendor', 'HRD'),
(12, '30/10/2019', 'Printer', 'Epson', 'LX-300+II', 'G8QY20032', 1, '', 'Baik', 'Aktif', '', 'Krem', 'HRD', 'Lantai 5', 0, 'Tidak', 'Vendor', 'HRD'),
(13, '30/10/2019', 'Printer', 'Epson', 'LX-300+II', 'G8QY22086', 1, '', 'Baik', 'Aktif', '', 'Krem', 'Bu Lusi', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Bu Lusi'),
(17, '30/10/2019', 'Printer', 'HP Color Laserjet', 'Pro MFP M181 FW', 'Belum', 1, '', 'Kurang', 'Aktif', 'Hasil cetak kurang rapih, ada tinta yang bermasalah', 'Putih', 'Bu Shinta', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Bu Shinta'),
(19, '30/10/2019', 'Printer', 'Epson', 'L120', 'Belum', 1, '', 'Baik', 'Aktif', '', 'Hitam', 'Bu Julia', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Bu Julia'),
(20, '30/10/2019', 'Printer', 'Canon', 'IP2770', 'HSFS12041', 1, '', 'Baik', 'Aktif', '', 'Hitam', 'Bu Wayan', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Bu Wayan'),
(21, '30/10/2019', 'Printer', 'Epson', 'L210', 'RAEK105749', 1, '', 'Baik', 'Aktif', '', 'Hitam', 'Marketing', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Marketing'),
(22, '30/10/2019', 'Printer', 'Canon', 'IP2770', 'HSFH87436', 0, '', 'Baik', 'Aktif', '', 'Hitam', 'Farmasi Rajal', 'Lantai 5', 1, 'Ya', 'Vendor', 'EDP / IT'),
(23, '30/10/2019', 'Printer', 'Epson', 'LQ-2190', 'MK4Y017459', 1, '', 'Rusak', 'Tidak', 'Tidak terpakai di Ruang Bu Asih', 'Krem', 'Bu Tiur', 'Lantai 5', 0, 'Tidak', 'RS', 'Bu Tiur'),
(24, '30/10/2019', 'Printer', 'Epson', 'LQ-2190', 'MK4Y083606', 1, '', 'Baik', 'Aktif', '', 'Krem', 'Bu Tiur', 'Lantai 5', 0, 'Tidak', 'RS', 'Bu Tiur'),
(26, '30/10/2019', 'Printer', 'HP Laserjet', 'P1102', 'VNC3C10549', 1, '', 'Baik', 'Aktif', '', 'Abu-abu', 'Bu Tiur', 'Lantai 5', 0, 'Tidak', 'RS', 'Bu Tiur'),
(27, '30/10/2019', 'Printer', 'Epson', 'LX-300+II', 'G8QY037295', 1, '', 'Baik', 'Aktif', '', 'Krem', 'Pak Edy', 'Lantai 5', 0, 'Tidak', 'Vendor', 'Pak Edy'),
(28, '30/10/2019', 'Printer', 'Epson', 'LX-310', 'Q7FY279307', 0, '', 'Rusak', 'Aktif', 'Tidak mau narik kertas', 'Abu-abu', 'Farmasi Rajal', 'Lobby', 0, 'Tidak', 'Vendor', 'EDP / IT'),
(29, '30/10/2019', 'Printer', 'Epson', 'LX-310', 'Q7FY453219', 1, '', 'Baru', 'Aktif', '', 'Abu-abu', '-', 'Lantai 5', 1, 'Ya', 'RS', 'EDP / IT'),
(30, '30/10/2019', 'Fotocopy', 'Toshiba', 'eStudio 30084', 'Belum', 1, '', 'Baik', 'Aktif', '', 'Hitam', 'Umum', 'Lantai 5', 0, 'Tidak', 'RS', 'Umum'),
(31, '30/10/2019', 'Printer', 'Epson', 'LX-300+', 'C8FY085070', 0, '', 'Baik', 'Aktif', '', 'Krem', 'FIN', 'Lantai 5', 1, 'Ya', 'Vendor', 'EDP / IT'),
(32, '30/10/2019', 'Printer', 'Epson', 'LX-300+II', 'NJEY124850', 0, '', 'Baik', 'Aktif', '', 'Krem', 'ACC', 'Lantai 5', 1, 'Ya', 'Vendor', 'EDP / IT'),
(33, '30/10/2019', 'Printer', 'Zebra', 'GC240t', '54J142801072', 0, '', 'Baik', 'Aktif', '', 'Krem', 'Farmasi Ranap', 'Lantai 3', 1, 'Ya', 'Vendor', 'EDP / IT'),
(34, '30/10/2019', 'Printer', 'HP Laserjet', 'P1102', 'VNF8S55929', 0, '', 'Baik', 'Aktif', '', 'Abu-abu', 'Umum', 'Lantai 5', 1, 'Ya', 'RS', 'EDP / IT');

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
(1, 'admin', 'admin@admin.com', '$2y$10$TVaKYRQt/aQwA.8Qy8pR7OqSgDPAgXIaVRcec9C6y2AZvyMt/V9NC', 1, '31-10-2019 4:47'),
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
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tb_file_upload`
--
ALTER TABLE `tb_file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pc`
--
ALTER TABLE `tb_pc`
  ADD PRIMARY KEY (`id_pc`);

--
-- Indexes for table `tb_printer`
--
ALTER TABLE `tb_printer`
  ADD PRIMARY KEY (`id_printer`);

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
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_file_upload`
--
ALTER TABLE `tb_file_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pc`
--
ALTER TABLE `tb_pc`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_printer`
--
ALTER TABLE `tb_printer`
  MODIFY `id_printer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
