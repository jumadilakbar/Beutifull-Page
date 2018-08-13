-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 08:27 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poltekes`
--

-- --------------------------------------------------------

--
-- Table structure for table `hematologi`
--

CREATE TABLE `hematologi` (
  `id_periksa` varchar(20) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `no_lab` int(11) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tgl_periksa` varchar(20) NOT NULL,
  `ATLM` varchar(20) NOT NULL,
  `Hasil` text NOT NULL,
  `bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hematologi`
--

INSERT INTO `hematologi` (`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`) VALUES
('4', '1112', 1, ' dokter1 ', '2018-06-16', '1', '1-1-1-1-1-0-0-1-1-1-1-1-0', '70000-70000-70000-105000-70000-0-0-70000-70000-70000-70000-70000-0');

-- --------------------------------------------------------

--
-- Table structure for table `imunologi`
--

CREATE TABLE `imunologi` (
  `id_periksa` varchar(20) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `no_lab` int(11) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tgl_periksa` varchar(20) NOT NULL,
  `ATLM` varchar(30) NOT NULL,
  `Hasil` text NOT NULL,
  `bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunologi`
--

INSERT INTO `imunologi` (`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`) VALUES
('4', '1112', 1, ' dokter1 ', '2018-06-02', '1', 'Reaktif-0-0-Reaktif-Positif-A-Positif-Positif-Positif-Reaktif-Positif-Positif-Positif-Positif-Positif-Positif', '255000-0-0-255000-340000-80000-150000-340000-340000-350000-245000-245000-250000-330000-340000-250000');

-- --------------------------------------------------------

--
-- Table structure for table `kimia`
--

CREATE TABLE `kimia` (
  `id_periksa` varchar(20) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `no_lab` int(11) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tgl_periksa` varchar(20) NOT NULL,
  `ATLM` varchar(20) NOT NULL,
  `Hasil` text NOT NULL,
  `bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kimia`
--

INSERT INTO `kimia` (`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`) VALUES
('4', '1112', 1, ' dokter1 ', '2018-06-08', '1', '0-0-1-1-1-1-1-1-1-1-1-0-1-1-1-1', '40000-0-40000-50000-47000-23000-35000-35000-35000-35000-35000-0-35000-35000-50000-33000');

-- --------------------------------------------------------

--
-- Table structure for table `mikrobiologi`
--

CREATE TABLE `mikrobiologi` (
  `id_periksa` varchar(20) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `no_lab` int(11) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tgl_periksa` varchar(20) NOT NULL,
  `ATLM` varchar(20) NOT NULL,
  `Hasil` text NOT NULL,
  `bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mikrobiologi`
--

INSERT INTO `mikrobiologi` (`id_periksa`, `no_rm`, `no_lab`, `dokter`, `tgl_periksa`, `ATLM`, `Hasil`, `bayar`) VALUES
('4', '1112', 1, ' dokter1 ', '2018-06-02', '1', '1-1', '200000-170000');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `usia` int(11) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `usia`, `jk`, `alamat`, `no_hp`) VALUES
('1112', 'akbar', 'megang sakti', '2018-06-15', 1, 'Wanita', 'megang sakti', '0878000000'),
('1234', 'Muhamad Jumadil Akbar', 'Musi rawas', '1996-11-15', 21, 'Pria', 'yogyakarta', '085868771477'),
('12345', 'Faisal', 'Yogyakarta', '2010-11-11', 8, 'Pria', 'yogyakarta', '085868771477');

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id_user` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `tekanan_darah` varchar(20) NOT NULL,
  `berat_badan` varchar(20) NOT NULL,
  `rujuk` varchar(20) NOT NULL,
  `catatan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `keluhan` text NOT NULL,
  `jenis_periksa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id_user`, `id_periksa`, `no_rm`, `tekanan_darah`, `berat_badan`, `rujuk`, `catatan`, `diagnosa`, `keluhan`, `jenis_periksa`) VALUES
(3, 2, '1234', '80', '70', 'Ya', 'apa', 'apa', 'keluhan', 'Hematologi,Kimia Klinik,Mikrobiologi,Imunologi'),
(3, 4, '1112', '100', '100', 'Ya', 'aa', 'sakit', 'keluhan', 'Hematologi,Kimia Klinik,Mikrobiologi,Imunologi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'analis', 'analis', 'analis', 'analis'),
(3, 'dokter1', 'dokter1', 'dokter1', 'dokter'),
(6, 'kasir', 'kasir', 'kasir', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hematologi`
--
ALTER TABLE `hematologi`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `imunologi`
--
ALTER TABLE `imunologi`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `kimia`
--
ALTER TABLE `kimia`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `mikrobiologi`
--
ALTER TABLE `mikrobiologi`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
