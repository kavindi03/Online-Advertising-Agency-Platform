-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 11:29 AM
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
-- Table structure for table `feedbacknew`
--

CREATE TABLE `feedbacknew` (
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacknew`
--

INSERT INTO `feedbacknew` (`name`, `email`, `feedback`) VALUES
('Hirusha', 'adamzampagunatilaka@', 'well designed page. thank u for being with us'),
('Kofun', 'Kofun@yahoo.com', 'Last stand Man');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `full_name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(2, 'abcd', 'kkoki@gmail.com', '0701234567', 'uyfdtud', 'baaaaaaaaaaaaaaaaaa', '2024-10-05 07:14:18'),
(4, 'hirusha', 'hirusha@gmail.com', '0701234567', 'uyfdtud', 'mata ba mata ba ', '2024-10-06 02:27:18'),
(5, 'dewmini', 'hirusha@gmail.com', '0701234567', 'uyfdtud', 'as ridenawa', '2024-10-06 06:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `Name` varchar(30) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `payment` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`Name`, `Address`, `Email`, `Mobile`, `payment`) VALUES
('abcd', 'hujhoiuikjnknjk', 'nbgjhdguiqa@gmail.com', 21474832, 45000),
('abcd', 'hujhoiuikjnknjk', 'nbgjhdguiqa@gmail.com', 21474832, 45000),
('jhuj', 'hujhoiuikjnknjk', 'xhyjgfyuif@iojooih', 123654987, 25000),
('dewmini', 'mkomkolp', 'dewmini@gmail.com', 774151835, 25000),
('dewmini', 'mkomkolp', 'dewmini@gmail.com', 774151835, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `cNumber` int(16) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `exdate` varchar(5) NOT NULL,
  `cvv` int(3) NOT NULL,
  `payment_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`cNumber`, `cName`, `exdate`, `cvv`, `payment_status`) VALUES
(789456123, 'Kavindi Pankaji', '07/15', 455, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `userId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `mobile`, `userId`) VALUES
('Hirusha', 'hirusha@gmail.com', 'hirusha123', 787695142, 1),
('Pankaji', 'Pankaji@gmail.com', 'pankaji123', 707430448, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacknew`
--
ALTER TABLE `feedbacknew`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`cNumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
