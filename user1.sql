-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 03:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user1`
--

-- --------------------------------------------------------

--
-- Table structure for table `est`
--

CREATE TABLE `est` (
  `id` int(11) NOT NULL,
  `estname` varchar(50) NOT NULL,
  `estvalue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `est`
--

INSERT INTO `est` (`id`, `estname`, `estvalue`) VALUES
(53, 'rohit', '3'),
(54, 'dqwd', '23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `estimation` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`, `estimation`) VALUES
(1, 'admin', '1234', 'admin', NULL),
(2, 'Rohit', '1234', 'user', NULL),
(3, 'Abhijeet', '1234', 'user', NULL),
(4, 'Ajinkya', '1234', 'user', NULL),
(5, 'Mangesh', '1234', 'user', NULL),
(6, 'Hemendra', '1234', 'user', NULL),
(7, 'Ashish', '1234', 'user', NULL),
(8, 'Nikhil', '1234', 'user', NULL),
(9, 'Pankaj', '1234', 'user', NULL),
(10, 'Pradnya', '1234', 'user', NULL),
(11, 'Ravindra', '1234', 'user', NULL),
(12, 'Shailaja', '1234', 'user', NULL),
(13, 'user', '1234', 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `est`
--
ALTER TABLE `est`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `est`
--
ALTER TABLE `est`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
