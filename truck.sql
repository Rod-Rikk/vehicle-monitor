-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2020 at 07:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truck`
--

-- --------------------------------------------------------

--
-- Table structure for table `createjob`
--

CREATE TABLE `createjob` (
  `id` int(255) NOT NULL,
  `cus_name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `veh_code` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `sdate` varchar(500) NOT NULL,
  `edate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createjob`
--

INSERT INTO `createjob` (`id`, `cus_name`, `description`, `veh_code`, `location`, `sdate`, `edate`) VALUES
(2, 'Them Inc.', 'Sand collection', 'WL002', 'Afienya', '29-06-2019', '04-07-2019'),
(3, 'Dems Company', 'Quarry Dust collection', '154365', 'Afienya Quarry', '22-06-2019', '02-07-2019'),
(4, 'Qtec', 'dfgegf', '154365', 'sgfgfsf', 'sfgsf', 'dsgfgsd'),
(5, 'Qtec', 'sdfgfvb', '154365', 'fbgfdgs', 'sbsgghg', 'sghshgfh'),
(6, 'Them Inc.', 'hhfjkguy', 'WL001', 'temza', '34/223/76', '756476'),
(7, 'Them Inc.', 'asdfgh', 'nfnmjf', 'dfghl', 'dfghl', 'dfghlfg'),
(8, 'Sumbro Company', 'asdfgh', 'nfnmjf', 'dfghl', 'dfghl', 'dfghlfg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `number` int(50) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `number`, `email`) VALUES
(1, 'Qtec', '101 Accra, Farming Road', 241234567, 'qtec@gmai.com'),
(2, 'Sumbro Company', '222 korle gonno, Accra', 241234567, 'sumbrogh@gmail.com'),
(3, 'Them Inc.', '48 Mataheko, Tema', 234442443, 'them123@gmail.com'),
(4, 'Dems Company', '95 Kejetia Street ,Kumasi', 23445455, 'demsgh1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(255) NOT NULL,
  `num_plate` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `cha_num` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `num_plate`, `description`, `cha_num`, `code`) VALUES
(2, 'gs12390', 'Wheel Loader', '18081019911', 'WL001'),
(3, 'GW1200', 'Trailer', '18081022741', 'WL002'),
(4, 'gs0203', 'jjkkdldl', 'dmjmfm', 'nfnmjf'),
(6, 'GS1200', 'Wheel Loader', '18081022741', 'WL002');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `created`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin', '2019-06-18'),
(2, 'user', '95c946bf622ef93b0a211cd0fd028dfdfcf7e39e', 'user', '2019-06-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createjob`
--
ALTER TABLE `createjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
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
-- AUTO_INCREMENT for table `createjob`
--
ALTER TABLE `createjob`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
