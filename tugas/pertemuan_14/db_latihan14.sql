-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2023 at 02:04 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan14`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_datatable` (IN `id` INT(11), IN `jml` INT(11))  DETERMINISTIC COMMENT 'First SP at Expertdeveloper' BEGIN
DECLARE exit handler for sqlexception
BEGIN
-- ERROR
ROLLBACK;
END;
DECLARE exit handler for sqlwarning
BEGIN
-- WARNING
ROLLBACK;
END;
START TRANSACTION;
UPDATE tabel_1 SET jumlah=jumlah-jml WHERE kode=id;
UPDATE tabel_2 SET jumlah=jumlah+jml WHERE kode=id;
COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_1`
--

CREATE TABLE `tabel_1` (
  `kode` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_1`
--

INSERT INTO `tabel_1` (`kode`, `nama_barang`, `jumlah`) VALUES
(1001, 'buku', 0),
(1002, 'pulpen', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_2`
--

CREATE TABLE `tabel_2` (
  `kode` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_2`
--

INSERT INTO `tabel_2` (`kode`, `nama_barang`, `jumlah`) VALUES
(1001, 'buku', 100),
(1002, 'pulpen', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_1`
--
ALTER TABLE `tabel_1`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tabel_2`
--
ALTER TABLE `tabel_2`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_1`
--
ALTER TABLE `tabel_1`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `tabel_2`
--
ALTER TABLE `tabel_2`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
