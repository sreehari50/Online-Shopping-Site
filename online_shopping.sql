-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 01:55 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `CID` int(100) NOT NULL,
  `PID` bigint(100) NOT NULL,
  `QTY` int(10) NOT NULL,
  `PRICE` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`CID`, `PID`, `QTY`, `PRICE`) VALUES
(3, 9, 2, 2897),
(3, 9, 3, 8691),
(2, 9, -1, -2897);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` bigint(100) NOT NULL,
  `PNAME` varchar(100) NOT NULL,
  `PRICE` bigint(100) NOT NULL,
  `COLOR` varchar(100) NOT NULL,
  `USES` varchar(100) NOT NULL,
  `BRAND` varchar(100) NOT NULL,
  `IMG` varchar(1000) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `PNAME`, `PRICE`, `COLOR`, `USES`, `BRAND`, `IMG`, `rating`) VALUES
(1, 'SKMEI', 1000, 'BLACK', 'MILITARY SPORT', 'CASIO', 'img\\a1.jpg', 4.2),
(2, 'CURREN', 1267, 'BLACK', 'BUSSINESS', 'CURREN CLUB', 'img\\a8.jpg', 4.5),
(3, 'DS-5GOLDEN', 2897, 'GOLDEN YELLOW', 'PARTYWEAR', 'CASIO', 'img\\a2.jpg', 4.6),
(4, 'TITANCLASS', 4562, 'SILVER', 'PARTYWEAR', 'TITAN', 'img\\a3.jpg', 4.3),
(5, 'PROS', 2312, 'GRAY', 'DAILY', 'PROSCLUB', 'img\\a4.jpg', 4.1),
(6, 'TITANBLACK', 3427, 'BLACK', 'OFFICE', 'TITAN', 'img\\a5.jpg', 4.7),
(7, 'FASTRACKMENS', 3245, 'WHITE', 'PARTY', 'FASTRACK', 'img\\a6.jpg', 4.6),
(8, 'KITMAN', 531, 'WHITE', 'STANDARD', 'KITMANPROS', 'img\\a7.jpg', 4.9),
(9, 'MEGA', 3210, 'BLACK', 'STANDARD', 'OMEGA', 'img\\a9.jpg', 4.6),
(10, 'SEAMASTER', 3275, 'SEABLUE', 'OFFICE', 'OMEGA', 'img\\a10.jpg', 4.3),
(11, 'SPEEDMASTER', 1800, 'BLACK', 'FANCY', 'OMEGA', 'img\\a11.jpg', 4),
(12, 'CHRONOGRAPGIC', 3219, 'BLACK', 'OFFICE', 'PH220', 'img\\a12.jpg', 4.1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `CID` int(100) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(110) NOT NULL,
  `EMAIL` varchar(110) NOT NULL,
  `PASSWORD` varchar(110) NOT NULL,
  `STREET_NAME` varchar(100) NOT NULL,
  `HOUSE_NO` varchar(100) NOT NULL,
  `CITY` varchar(100) NOT NULL,
  `PIN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`CID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `STREET_NAME`, `HOUSE_NO`, `CITY`, `PIN`) VALUES
(1, 'XZCZX', 'XCZCZ', 'XZ@DFZF', 'FDDF', 'DSFDS', 'SDFFDS', 'SDFDS', 'DFSFDS'),
(2, 'fdgdf', 'CXC', 'solamantagore.999@gmail.com', 'DFS', 'dsfsF', 'DSFDSF', 'DFSSFD', 'DFSSF'),
(3, 'any', 'vvb', 'mthlpaul38@gmail.com', '345', 'dfd', 'dsfsddfs', 'sdfdfssfd', 'dfdsffsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`),
  ADD UNIQUE KEY `PID` (`PID`),
  ADD UNIQUE KEY `IMG` (`IMG`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `CID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
