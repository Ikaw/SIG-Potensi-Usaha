-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2015 at 03:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sigbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_usaha`
--

CREATE TABLE IF NOT EXISTS `data_usaha` (
`id_usaha` int(11) NOT NULL,
  `nama_usaha` varchar(30) NOT NULL,
  `produk_utama` varchar(20) NOT NULL,
  `alamat_usaha` varchar(50) NOT NULL,
  `deskripsi_usaha` varchar(100) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `id_kec` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_sektor` int(11) NOT NULL,
  `skala` enum('MIKRO','KECIL','MENENGAH') NOT NULL,
  `dihapus` char(1) DEFAULT 'T',
  `aktivasi` enum('ACTIVE','DEACTIVE') NOT NULL DEFAULT 'DEACTIVE'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_usaha`
--

INSERT INTO `data_usaha` (`id_usaha`, `nama_usaha`, `produk_utama`, `alamat_usaha`, `deskripsi_usaha`, `lat`, `lng`, `id_kec`, `id_desa`, `id_sektor`, `skala`, `dihapus`, `aktivasi`) VALUES
(1, 'Ika Bakery', 'Cake Pop', 'Cihampelas', 'Usaha yang mulai dirintis dari tahun 2010', -6.94872, 107.495, 3, 6, 1, 'MIKRO', 'Y', 'DEACTIVE'),
(2, 'Maju Jaya', 'Ikan Laut Segar', 'Jalan Raya Batu Jajar', 'Menyediakan berbagai macam ikan laut segar', -6.91361, 107.498, 2, 4, 3, 'KECIL', 'T', 'DEACTIVE'),
(3, 'Budi Sepatu', 'Sepatu', 'Cihampelas', 'Toko Sepatu', -6.94454, 107.489, 3, 7, 1, 'KECIL', 'T', 'DEACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
`id_desa` int(11) NOT NULL,
  `nama_desa` varchar(20) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `dihapus` char(1) DEFAULT 'T'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `id_kec`, `dihapus`) VALUES
(4, 'Batujajar Barat', 2, 'Y'),
(5, 'Batujajar Tengah', 2, 'T'),
(6, 'Cihampelas', 3, 'T'),
(7, 'Citapen', 3, 'T'),
(8, 'Cipatik', 3, 'T'),
(9, 'Mekarharum', 3, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(50) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `dihapus` char(1) DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
`id_kec` int(11) NOT NULL,
  `nama_kec` varchar(20) NOT NULL,
  `dihapus` char(1) NOT NULL DEFAULT 'T'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`, `dihapus`) VALUES
(2, 'Batu Jajar', 'T'),
(3, 'Cihampelas', 'T'),
(4, 'Cikalong Wetan', 'T'),
(5, 'Cililin', 'T'),
(6, 'Cipatat', 'T'),
(7, 'Cipeundeuy', 'T'),
(8, 'Cipongkor', 'T'),
(9, 'Cisarua', 'T'),
(10, 'Gunung Halu', 'T'),
(11, 'Lembang', 'T'),
(12, 'Ngamprah', 'T'),
(13, 'Padalarang', 'T'),
(14, '', 'Y'),
(15, 'Rongga', 'Y'),
(16, 'Sindang Kerta', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_usaha`
--

CREATE TABLE IF NOT EXISTS `pemilik_usaha` (
  `no_ktp` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tpt_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dihapus` char(1) NOT NULL DEFAULT 'T',
  `aktivasi` enum('DEACTIVE','ACTIVE') NOT NULL DEFAULT 'DEACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_usaha`
--

INSERT INTO `pemilik_usaha` (`no_ktp`, `nama`, `alamat`, `tpt_lahir`, `tgl_lahir`, `foto_ktp`, `no_telp`, `email`, `password`, `dihapus`, `aktivasi`) VALUES
('1234567890', 'Tresna Gumelar', 'Bandung Barat', 'Majene', '2015-06-01', 'digital-book-logo.jpg', '1234567890', 'tresna@mail.com', 'rahasia', 'T', 'DEACTIVE'),
('3273225102940007', 'Ika Widya', 'Jalan Cijawura Hilir No 356', 'Bandung', '1994-02-11', 'digital-book-logo.jpg', '085721740036', 'ikawidyaa@gmail.com', 'rahasia', 'Y', 'DEACTIVE'),
('3273225102940009', 'Iwid', 'Jalan Baru', 'Bandung', '1993-05-23', 'e-book.jpg', '022-7509567', 'iwidiii@gmail.com', 'widya', 'T', 'DEACTIVE'),
('3273225312930008', 'Ani Suryano', 'Jalan Dulu', 'Jogjakarta', '1993-12-13', 'tablet-e-book-library-.jpg', '08657213456', 'ani@mail.com', 'ani', 'T', 'DEACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `sektor_usaha`
--

CREATE TABLE IF NOT EXISTS `sektor_usaha` (
`id_sektor` int(11) NOT NULL,
  `nama_sektor` varchar(20) NOT NULL,
  `dihapus` char(1) NOT NULL DEFAULT 'T'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sektor_usaha`
--

INSERT INTO `sektor_usaha` (`id_sektor`, `nama_sektor`, `dihapus`) VALUES
(1, 'Perhotelan', 'T'),
(2, 'Restoran', 'Y'),
(3, 'Perikanan', 'T'),
(4, 'Pertanian', 'T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_usaha`
--
ALTER TABLE `data_usaha`
 ADD PRIMARY KEY (`id_usaha`), ADD KEY `fk_datausaha_01` (`id_desa`), ADD KEY `fk_datausaha_02` (`id_kec`), ADD KEY `fk_datausaha_03` (`id_sektor`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
 ADD PRIMARY KEY (`id_desa`), ADD KEY `fk_desa_01` (`id_kec`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id_gambar`), ADD KEY `fk_galeri_01` (`id_usaha`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
 ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `pemilik_usaha`
--
ALTER TABLE `pemilik_usaha`
 ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
 ADD PRIMARY KEY (`id_sektor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_usaha`
--
ALTER TABLE `data_usaha`
MODIFY `id_usaha` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
MODIFY `id_sektor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_usaha`
--
ALTER TABLE `data_usaha`
ADD CONSTRAINT `fk_datausaha_01` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`),
ADD CONSTRAINT `fk_datausaha_02` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`),
ADD CONSTRAINT `fk_datausaha_03` FOREIGN KEY (`id_sektor`) REFERENCES `sektor_usaha` (`id_sektor`);

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
ADD CONSTRAINT `fk_desa_01` FOREIGN KEY (`id_kec`) REFERENCES `kecamatan` (`id_kec`);

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
ADD CONSTRAINT `fk_galeri_01` FOREIGN KEY (`id_usaha`) REFERENCES `data_usaha` (`id_usaha`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
