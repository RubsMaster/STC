-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2020 at 02:57 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `integradora`
--

-- --------------------------------------------------------

--
-- Table structure for table `baterias`
--

CREATE TABLE `baterias` (
  `id_bat` int(4) NOT NULL,
  `modelo` varchar(5) NOT NULL,
  `stock` int(3) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baterias`
--

INSERT INTO `baterias` (`id_bat`, `modelo`, `stock`, `precio`) VALUES
(1, '6', 10, 400),
(2, '6s', 10, 450),
(3, '6+', 10, 550),
(4, '6s+', 10, 600),
(5, '7', 10, 600),
(6, '7+', 10, 700),
(7, '8', 10, 600),
(8, '8+', 10, 800),
(9, 'x', 10, 900),
(10, 'xr', 10, 900),
(11, 'xs', 10, 900),
(12, 'xsmax', 10, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `pantallas`
--

CREATE TABLE `pantallas` (
  `id_pant` int(4) NOT NULL,
  `modelo` varchar(5) NOT NULL,
  `stock` int(3) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pantallas`
--

INSERT INTO `pantallas` (`id_pant`, `modelo`, `stock`, `precio`) VALUES
(13, '6', 10, 700),
(14, '6s', 10, 800),
(15, '6+', 10, 800),
(16, '6s+', 10, 1000),
(17, '7', 10, 900),
(18, '7+', 10, 1100),
(19, '8', 10, 1000),
(20, '8+', 10, 1300),
(21, 'x', 10, 3500),
(22, 'xr', 10, 4000),
(23, 'xsmax', 10, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contra` varchar(10) NOT NULL,
  `names` varchar(45) NOT NULL,
  `lastnames` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `estado` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baterias`
--
ALTER TABLE `baterias`
  ADD PRIMARY KEY (`id_bat`);

--
-- Indexes for table `pantallas`
--
ALTER TABLE `pantallas`
  ADD PRIMARY KEY (`id_pant`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baterias`
--
ALTER TABLE `baterias`
  MODIFY `id_bat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pantallas`
--
ALTER TABLE `pantallas`
  MODIFY `id_pant` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
