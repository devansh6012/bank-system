-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 12:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_name` varchar(20) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_name`, `customer_email`, `customer_amount`) VALUES
('Amit', 'amit3@gmail.com', 180000),
('Dev', 'dev123@gmail.com', 1400000),
('Devansh', 'devansh.g6012@gmail.com', 1000000),
('Krunal', 'krunal6@gmail.com', 100000),
('Ninad', 'ninad12@gmail.com', 98000),
('Pratyush', 'pratyush61@gmail.com', 82000),
('Pritish', 'pritish32@gmail.com', 94500),
('Rohan', 'rohan.32@gmail.com', 80000),
('Sahil', 'sahil22@gmail.com', 95500),
('Sangram', 'sangram.h@gmail.com', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `fromname` varchar(20) NOT NULL,
  `toname` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`fromname`, `toname`, `amount`) VALUES
('Dev', 'Sangram', 10000),
('Dev', 'Amit', 90000),
('Rohan', 'Sangram', 10000),
('Sahil', 'Pritish', 4500),
('Ninad', 'Pratyush', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
