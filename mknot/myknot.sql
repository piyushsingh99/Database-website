-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 04:48 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myknot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'ata@gmail.com', 'ata123'),
(2, 'ram@gmail.com', 'ramram'),
(3, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(3) NOT NULL,
  `category` varchar(100) NOT NULL,
  `filename` text NOT NULL,
  `record` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `category`, `filename`, `record`, `price`) VALUES
(2, 'CEO ', 'us1-500.csv', '500', '1500'),
(3, 'Student ', 'us-10000.csv', '10000', '30000'),
(4, 'Student ', 'us-50000.csv', '50000', '5000'),
(5, 'CEO', 'us-500.csv\r\n', '500', '1500'),
(6, 'Employee', 'us1-50000.csv', '500', '1500'),
(7, 'Employee', 'us1-50000.csv', '50000', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'atanu', 'd322aaa23ecf2952d60867326cc1b7e7', 'atanu@gmail.com'),
(2, 'mou', '361228d0a65bd2355b029b2fe0aad7c6', 'mou@gmail.com'),
(3, 'ram', '734379e382de4feb0dce07cb1061ef48', 'ram@gmail.com'),
(4, 'somu', 'b1a6ad1a11c5176a9e9ada92a196b6d4', 'somu@gmail.com'),
(5, 'Atanu-Math', '411d0fe10336e3e598d437ec55ea7ed8', 'math@gmail.com'),
(6, 'nitai', '2fac294a5aba203b0b500743b7e6d97b', 'nitai@gmail.com'),
(7, 'ram', '734379e382de4feb0dce07cb1061ef48', 'ram3@gmail.com'),
(8, 'rama', '36226b453eb255f672f118a1ecc1e4ec', 'rama@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
