-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 05:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library61`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `data` text NOT NULL,
  `date` text NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `data`, `date`, `type`) VALUES
(288, 'test', '[{\"f\":\"jp\",\"jp\":\"ced\"},{\"f\":\"th\",\"th\":\",hhh\"},{\"f\":\"kr\",\"kr\":\",hhh\"}]', '2018-12-10 11:33:49', 'f527b4'),
(289, 'test', '{\"ch1\":1,\"ch2\":1,\"ch3\":1,\"ch4\":1}', '2018-12-12 03:29:49', '0x77777'),
(290, '6031050022', '{\"password\":\"fe621770bdef8d6a97b4fe4cf976fc9cc5d608f4\",\"friend name\":\"\\u0e18\\u0e19\\u0e27\\u0e31\\u0e12\\u0e19\\u0e4c\",\"last name\":\"\\u0e1e\\u0e25\\u0e40\\u0e22\\u0e35\\u0e48\\u0e22\\u0e21\",\"status\":\"1\",\"date\":\"\"}', '2018-12-12 03:29:49', '7da621'),
(291, '9aed78e2bf1678b942c781b3d6283f8e', '{\"username\":\"6031050022\",\"book id\":[],\"status\":1}', '2018-12-12 03:29:49', '0a7830');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
