-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 08:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineads`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogindetails`
--

CREATE TABLE `alogindetails` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `adminEmail` varchar(20) NOT NULL,
  `adminPassword` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alogindetails`
--

INSERT INTO `alogindetails` (`adminID`, `adminName`, `adminEmail`, `adminPassword`) VALUES
(1, 'Hirusha', 'hirusha@gmail.com', 'hirusha123'),
(2, 'Dewmini', 'dewmini@gmail.com', 'dewmini123'),
(3, 'Pankaji', 'pankaji@gmail.com', 'pankaji123'),
(4, 'Dewduni', 'dewduni@gmail.com', 'dewduni123'),
(5, 'Nethranjana', 'netha@gmail.com', 'netha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogindetails`
--
ALTER TABLE `alogindetails`
  ADD PRIMARY KEY (`adminID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogindetails`
--
ALTER TABLE `alogindetails`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
