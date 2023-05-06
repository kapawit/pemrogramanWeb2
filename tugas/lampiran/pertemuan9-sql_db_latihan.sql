-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2023 at 07:48 AM
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
-- Database: `db_latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dosen`
--

CREATE TABLE `tabel_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_matakuliah` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `ruangan` varchar(50) DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `jam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_krs`
--

CREATE TABLE `tabel_krs` (
  `id_krs` int(11) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `id_matakuliah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_matakuliah`
--

CREATE TABLE `tabel_matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `nama_matakuliah` varchar(100) DEFAULT NULL,
  `sk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_semester`
--

CREATE TABLE `tabel_semester` (
  `id_semester` int(11) NOT NULL,
  `nama_semester` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_matakuliah` (`id_matakuliah`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tabel_krs`
--
ALTER TABLE `tabel_krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `tabel_semester`
--
ALTER TABLE `tabel_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD CONSTRAINT `tabel_jadwal_ibfk_1` FOREIGN KEY (`id_matakuliah`) REFERENCES `tabel_matakuliah` (`id_matakuliah`),
  ADD CONSTRAINT `tabel_jadwal_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `tabel_dosen` (`id_dosen`);

--
-- Constraints for table `tabel_krs`
--
ALTER TABLE `tabel_krs`
  ADD CONSTRAINT `tabel_krs_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tabel_mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `tabel_krs_ibfk_2` FOREIGN KEY (`id_semester`) REFERENCES `tabel_semester` (`id_semester`),
  ADD CONSTRAINT `tabel_krs_ibfk_3` FOREIGN KEY (`id_matakuliah`) REFERENCES `tabel_matakuliah` (`id_matakuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
