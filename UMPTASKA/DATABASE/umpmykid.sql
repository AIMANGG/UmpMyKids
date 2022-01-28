-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 11:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umpmykid`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertsalary`
--

CREATE TABLE `insertsalary` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(8) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `Time` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insertsalary`
--

INSERT INTO `insertsalary` (`id`, `employeeID`, `position`, `name`, `salary`, `bonus`, `Time`, `status`) VALUES
(13, 'SS12345', 'Staff', 'afiefah ', 1234, 21.1, '2022-01-28', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertsalary`
--
ALTER TABLE `insertsalary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertsalary`
--
ALTER TABLE `insertsalary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
