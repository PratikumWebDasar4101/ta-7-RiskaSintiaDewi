-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 08:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `nama` text NOT NULL,
  `nim` int(10) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `jurusan` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `moto_hidup` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`nama`, `nim`, `jenis_kelamin`, `jurusan`, `fakultas`, `asal`, `moto_hidup`) VALUES
('Haifa', 4567, 'Pria', 'MI', 'FIT', 'Bandung', 'gjdgfcjadbfjdf'),
('Nasya', 12345, 'Wanita', 'MI', 'FIT', 'Bandung', 'gsdjfhgud'),
('Hasna', 670117, 'Wanita', 'MI', 'FIT', 'Bandung', 'ewdejygwyge'),
('Riska', 2147483647, 'Wanita', 'MI', 'FIT', 'Bandung', 'Bisa!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
