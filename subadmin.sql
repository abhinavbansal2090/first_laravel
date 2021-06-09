-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2021 at 02:50 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_managemnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `subadmin`
--

CREATE TABLE `subadmin` (
  `id` int NOT NULL,
  `user` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `assets` varchar(100) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `serialNo` varchar(20) NOT NULL,
  `ModelNo` varchar(30) NOT NULL,
  `ticketStatus` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `agent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subadmin`
--

INSERT INTO `subadmin` (`id`, `user`, `mobile`, `assets`, `priority`, `serialNo`, `ModelNo`, `ticketStatus`, `created_at`, `updated_at`, `agent`) VALUES
(1, 'Abhinav', '8427467880', 'laptop', 'Low', '12345', '12345', 'pending', '2021-06-08 19:14:22', '2021-06-08 19:14:22', ''),
(2, 'Ammi Singh', '8427467880', 'Laptop', 'Low', '12345', '12345', 'Approved', '2021-06-08 20:41:28', '2021-06-09 03:11:44', 'Abhinav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subadmin`
--
ALTER TABLE `subadmin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
