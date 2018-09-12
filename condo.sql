-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 04:15 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `condo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', '1234'),
('iqbal', '01115282'),
('user', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `butiran`
--

CREATE TABLE `butiran` (
  `id` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `ic` varchar(13) NOT NULL,
  `warganegara` varchar(8) NOT NULL,
  `bangsa` varchar(8) NOT NULL,
  `no_tel` varchar(12) NOT NULL,
  `emel` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `kenderaan` text NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `member` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kerani`
--

CREATE TABLE `kerani` (
  `id` varchar(10) NOT NULL,
  `user` varchar(13) NOT NULL,
  `pas` varchar(12) NOT NULL,
  `active` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerani`
--

INSERT INTO `kerani` (`id`, `user`, `pas`, `active`) VALUES
('', 'kerani', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pelawat`
--

CREATE TABLE `pelawat` (
  `nama` text NOT NULL,
  `ic` varchar(13) NOT NULL,
  `no_tel` varchar(13) NOT NULL,
  `kenderaan` varchar(20) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelawat`
--

INSERT INTO `pelawat` (`nama`, `ic`, `no_tel`, `kenderaan`, `no_plat`, `tujuan`) VALUES
('Nur Muhammad Iqbal', '990980146789', '0122960285', 'uuvihjbn', 'fcvygvu', 'Lawat saudara di BA-1-2'),
('Nur Muhammad Iqbal', '990980146789', '0122960285', 'uuvihjbn', 'AFJ 3962', 'Lawat saudara di BA-1-2');

-- --------------------------------------------------------

--
-- Table structure for table `polis`
--

CREATE TABLE `polis` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polis`
--

INSERT INTO `polis` (`id`, `username`, `pass`, `active`) VALUES
(25, 'guard', '1234', 1),
(26, 'husin', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `butiran`
--
ALTER TABLE `butiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerani`
--
ALTER TABLE `kerani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `polis`
--
ALTER TABLE `polis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
