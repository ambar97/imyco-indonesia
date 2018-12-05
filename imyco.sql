-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 06:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imyco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `NIK` int(20) NOT NULL,
  `nmLengkap` varchar(225) NOT NULL,
  `Alamat` text NOT NULL,
  `TTL` date NOT NULL,
  `NoHp` varchar(12) NOT NULL,
  `Foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `NIK`, `nmLengkap`, `Alamat`, `TTL`, `NoHp`, `Foto`) VALUES
(1, 21896381, 'Zainal', 'Demak', '2018-08-01', '08746035053', ''),
(2, 21896382, 'Abidin', 'Jember', '2018-09-10', '08923412368', '');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `idGalery` int(11) NOT NULL,
  `jdlGalery` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`idGalery`, `jdlGalery`, `kategori`, `link`, `action`) VALUES
(7, 'Kopi Jamur Tiram', 'Foto', '', 2),
(8, 'Kopi Jamur Ligzi', 'Video', 'https://www.youtube.com/watch?v=L3wxXGCymrk&list=RDRUi54JTgL5s&index=6', 1),
(9, 'Kopi Jamur Hitam', 'Video', 'https://www.youtube.com/watch?v=kXYiU_JCYtU&list=RDRUi54JTgL5s&index=28', 1),
(10, 'Kopi Jamur Putih', 'FOto', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idGalery`),
  ADD KEY `action` (`action`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `idGalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`action`) REFERENCES `admin` (`idAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
