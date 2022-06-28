-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2019 at 09:51 PM
-- Server version: 10.3.21-MariaDB-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppidkuco_dbppid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_school`
--

CREATE TABLE `tb_school` (
  `schID` varchar(12) NOT NULL,
  `schPwd` varchar(15) NOT NULL,
  `schName` varchar(50) NOT NULL,
  `schNameJawi` varchar(100) DEFAULT NULL,
  `schDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_school`
--

INSERT INTO `tb_school` (`schID`, `schPwd`, `schName`, `schNameJawi`, `schDate`) VALUES
('SAAM', 'adminsaam', 'Sekolah Agama Ayer Manis', NULL, NULL),
('SAB26', 'adminsab26', 'Sekolah Agama Batu 26', NULL, NULL),
('SABK2', 'adminsabk2', 'Sekolah Agama Bandar Kulai 2', NULL, '2019-12-16'),
('SABP', 'adminsabp', 'Sekolah Agama Bandar Putra', 'سکوله اݢام بندر ڤوترا', '2019-12-16'),
('SABP2', 'adminsabp2', 'Sekolah Agama Bandar Putra 2', NULL, NULL),
('SAFBB', 'adminsafbb', 'Sekolah Agama Felda Bukit Batu', 'سکوله اݢام فىلدا بوکيت باتو', '2019-12-16'),
('SAFBP', 'adminsafbp', 'Sekolah Agama Felda Bukit Permai', 'سکوله اݢام فىلدا بوکيت ڤرماي', '2019-12-17'),
('SAFI', 'adminsafi', 'Sekolah Agama Felda Inas', NULL, NULL),
('SAIS', 'adminsais', 'Sekolah Agama Ibnu Sina', NULL, NULL),
('SAKJ', 'adminsakj', 'Sekolah Agama Kulai Jaya', 'سکوله اݢام کولاي جاي', '2019-12-16'),
('SAKP', 'adminsakp', 'Sekolah Agama Kangkar Pulai', NULL, NULL),
('SALF', 'adminsalf', 'Sekolah Agama Ladang Fraser', NULL, NULL),
('SAMJ', 'adminsamj', 'Sekolah Agama Murni Jaya', NULL, NULL),
('SAMJT', 'adminsamjt', 'Sekolah Agama Murni Jaya Terkini', 'سکوله اݢام مورني جاي ترکيني', '2019-12-16'),
('SASB', 'adminsasb', 'Sekolah Agama Seri Bahagia', NULL, NULL),
('SASD', 'adminsasd', 'Sekolah Agama Sedenak', NULL, '2019-12-16'),
('SASGP', 'adminsasgp', 'Sekolah Agama Seri Gunung Pulai', NULL, NULL),
('SASN', 'adminsasn', 'Sekolah Agama Senai', NULL, NULL),
('SASPP', 'adminsaspp', 'Sekolah Agama Sri Pulai Perdana', NULL, NULL),
('SATI', 'adminsati', 'Sekolah Agama Taman Indahpura', NULL, NULL),
('SATKK', 'adminsatkk', 'Sekolah Agama Taman Kota Kulai', NULL, NULL),
('SATKK2', 'adminsatkk2', 'Sekolah Agama Taman Kota Kulai 2', NULL, NULL),
('SATM', 'adminsatm', 'Sekolah Agama Taman Muhibah', NULL, NULL),
('SATPI', 'adminsatpi', 'Sekolah Agama Taman Pulai Indah', NULL, NULL),
('SATSP', 'adminsatsp', 'Sekolah Agama Taman Sri Pulai', NULL, NULL),
('SATSU', 'adminsatsu', 'Sekolah Agama Taman Senai Utama', NULL, NULL),
('SAUC', 'adminsauc', 'Sekolah Agama Ulu Choh', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_school`
--
ALTER TABLE `tb_school`
  ADD PRIMARY KEY (`schID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
