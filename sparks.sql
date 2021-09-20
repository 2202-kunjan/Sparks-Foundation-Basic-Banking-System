-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 12:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `balance` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `mobile`, `balance`) VALUES
(1, 'Raj shah', 'rajs@gmail.com', '78542398', 8000),
(2, 'Riya mehta', 'RIya@gmail.com', '78885676', 20000),
(3, 'Arya rao', 'rao@gmail.com', '78767656', 10000),
(4, 'Krish S', 'kris@gmail.com', '74563456', 27000),
(5, 'Ram kapur', 'Kapurr@gmail.com', '88456753', 14000),
(6, 'Sai nath', 'sai@gmail.com', '8765456', 2000),
(7, 'Megha mohite', 'megh@gmail.com', '88456843', 5000),
(8, 'Meena iyer', 'iyer@gmail.com', '98654675', 8000),
(9, 'isha sawant', 'isha@gmail.com', '99876754', 30000),
(10, 'Karan motwani', 'karan2@gmail.com', '89976567', 5000),
(11, 'Maya khan', 'khan@gmail.com', '76589767', 12000),
(12, 'Dev gajbe', 'dev1@gmail.com', '78647564', 7800),
(13, 'Maya khan', 'khan@gmail.com', '76589767', 12000),
(14, 'Maya khan', 'khan@gmail.com', '76589767', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sr.no` int(40) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `receiver` varchar(40) NOT NULL,
  `balance` int(11) NOT NULL,
  `date_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sr.no`, `sender`, `receiver`, `balance`, `date_time`) VALUES
(1, 'Krish S', 'Karan motwani', 2000, '2021-08-19 17:21:13.709476');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `sr.no` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
