-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 01:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sesijos`
--

-- --------------------------------------------------------

--
-- Table structure for table `klausimai`
--

CREATE TABLE `klausimai` (
  `nr` int(11) NOT NULL,
  `klausimas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klausimai`
--

INSERT INTO `klausimai` (`nr`, `klausimas`) VALUES
(1, 'Kiek bus 2+2?'),
(2, 'Kiek bus 10+2?'),
(3, 'Kiek bus 15+15?'),
(4, 'Kiek bus 24+16?'),
(5, 'Kiek bus 9+18?'),
(6, 'Kiek bus 7+21?'),
(7, 'Kiek bus 39+5?'),
(8, 'Kiek bus 100+245?'),
(9, 'Kiek bus 42+172?'),
(10, 'Kiek bus 314+760?'),
(11, 'Kiek bus 416+287?'),
(12, 'Kiek bus 812+462?'),
(13, 'Kiek bus 2046+4676?'),
(14, 'Kiek bus 1467+9860?'),
(15, 'Kiek bus 204*467?');

-- --------------------------------------------------------

--
-- Table structure for table `rezultatai`
--

CREATE TABLE `rezultatai` (
  `klausimai_atsakymai` longtext NOT NULL,
  `pazymys` int(11) NOT NULL,
  `vartotojo_vardas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezultatai`
--

INSERT INTO `rezultatai` (`klausimai_atsakymai`, `pazymys`, `vartotojo_vardas`) VALUES
('1_4 2_12 3_30 4_40 5_27 6_28 7_87067 8_04 9_8704 10_5705 11_8004 12_4 13_7807 14_407407 15_94074', 4, 'jonas'),
('1_4 2_12 3_30 4_40 5_27 6_28 7_44 8_345 9_214 10_1074 11_703 12_1274 13_6722 14_11327 15_95268', 10, 'jonas'),
('1_4 2_12 3_30 4_40 5_27 6_28 7_44 8_345 9_214 10_1074 11_703 12_1274 13_6722 14_11327 15_95268', 10, 'jonas'),
('1_4 2_12 3_30 4_40 5_27 6_28 7_44 8_345 9_214 10_1074 11_703 12_1274 13_6722 14_11327 15_80407', 9, 'jonas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `vartotojas` varchar(255) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`vartotojas`, `slaptazodis`) VALUES
('jonas', 'jonas123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
