-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 05:38 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `kd_barang` varchar(2) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `hrg_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `kd_barang`, `nm_barang`, `stok`, `hrg_beli`, `hrg_jual`) VALUES
(1, 'SP', 'Susu Putih', 90, 2000, 4000),
(12, 'FL', 'Floridina', 80, 3000, 3500),
(13, 'CL', 'Coca-Cola', 90, 3000, 4000),
(14, 'KK', 'Kopi Kapal Api', 50, 7000, 9000),
(16, 'RJ', 'Rokok Jarum', 45, 13000, 15000),
(17, 'DL', 'Dunhill', 100, 20000, 50000),
(18, 'TB', 'Tisu Basah', 100, 4000, 5000),
(19, 'AQ', 'Aqua Galon', 20, 15000, 20000),
(20, 'GL', 'Gelas looking', 20, 2000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `datapenjualan`
--

CREATE TABLE `datapenjualan` (
  `id` int(11) NOT NULL,
  `kd_pembeli` varchar(2) NOT NULL,
  `nm_barang1` varchar(50) NOT NULL,
  `nm_barang2` varchar(50) NOT NULL,
  `nm_barang3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapenjualan`
--

INSERT INTO `datapenjualan` (`id`, `kd_pembeli`, `nm_barang1`, `nm_barang2`, `nm_barang3`) VALUES
(2, 'A1', 'Susu Putih', 'Floridina', 'Kopi Kapal Api'),
(3, 'A2', 'Susu Putih', 'Kopi Kapal Api', 'Coca-Cola'),
(4, 'A3', 'Susu Putih', 'Kopi Kapal Api', 'Rokok Jarum'),
(5, 'A4', 'Susu Putih', '', ''),
(6, 'A5', 'Floridina', 'Kopi Kapal Api', 'Coca-Cola'),
(7, 'A6', 'Floridina', 'Kopi Kapal Api', 'Rokok Jarum'),
(8, 'A7', 'Floridina', '', ''),
(9, 'A8', 'Coca-Cola', 'Kopi Kapal Api', 'Rokok Jarum'),
(10, 'A9', 'Kopi Kapal Api', 'Rokok Jarum', ''),
(11, 'B1', 'Rokok Jarum', '', ''),
(12, 'A1', 'Aqua Galon', 'Rokok Jarum', 'Tisu Basah'),
(13, 'B2', 'Dunhill', 'Rokok Jarum', 'Tisu Basah'),
(14, 'B3', 'Gelas looking', 'Tisu Basah', 'Dunhill');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapenjualan`
--
ALTER TABLE `datapenjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `datapenjualan`
--
ALTER TABLE `datapenjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
