-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 07:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_bomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `kid` int(11) NOT NULL,
  `tajukkursus` varchar(200) DEFAULT NULL,
  `tmula` varchar(10) DEFAULT NULL,
  `takhir` varchar(10) DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `hari` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`kid`, `tajukkursus`, `tmula`, `takhir`, `tempat`, `tahun`, `hari`) VALUES
(1, 'test', '12/12/12', '12/12/1/2', 'test', '2017', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kursusattn`
--

CREATE TABLE `kursusattn` (
  `kursusid` int(11) NOT NULL,
  `one` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT NULL,
  `five` int(11) DEFAULT NULL,
  `six` int(11) DEFAULT NULL,
  `seven` int(11) DEFAULT NULL,
  `eight` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usersbomba`
--

CREATE TABLE `usersbomba` (
  `id` int(11) NOT NULL,
  `nama` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `kursusattn`
--
ALTER TABLE `kursusattn`
  ADD PRIMARY KEY (`kursusid`);

--
-- Indexes for table `usersbomba`
--
ALTER TABLE `usersbomba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kursusattn`
--
ALTER TABLE `kursusattn`
  MODIFY `kursusid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usersbomba`
--
ALTER TABLE `usersbomba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
