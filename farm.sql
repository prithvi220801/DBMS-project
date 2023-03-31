-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 09:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `bid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `adhar` bigint(20) NOT NULL,
  `adno` int(11) NOT NULL,
  `hobli` varchar(20) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `name`, `email`, `password`, `phno`, `adhar`, `adno`, `hobli`, `taluk`, `district`, `pincode`) VALUES
('Rashmi123', 'Rashmi Bhat', 'arashmibhat@gmail.co', 'Rash456%', 7907477277, 123456789012, 12, 'Moodambail', 'Manjeshwar', 'Kasargod', 671323);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `pid` bigint(20) DEFAULT NULL,
  `bid` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `odate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produces`
--

CREATE TABLE `produces` (
  `pid` bigint(20) NOT NULL,
  `sid` varchar(20) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unitprice` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produces`
--

INSERT INTO `produces` (`pid`, `sid`, `category`, `pname`, `qty`, `unitprice`, `description`) VALUES
(1000, 'Krishna234', 'Fruits', 'mango', 20, 100, 'Fully fresh grown mangoes'),
(1001, 'Krishna234', 'Seeds', 'Paddy Seeds', 20, 100, 'Hybrid high germination paddy seeds which generates nutritional rice . ');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `adhar` bigint(20) NOT NULL,
  `adno` varchar(11) NOT NULL,
  `hobli` varchar(20) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `rtc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `name`, `email`, `password`, `phno`, `adhar`, `adno`, `hobli`, `taluk`, `district`, `pincode`, `rtc`) VALUES
('Krishna234', 'Krishna V', 'krishnav@gmail.com', 'Abcd34567', 7890123456, 8901234567, '34', 'Moodambail', 'Manjeshwar', 'Kasargod', 671323, 'UNIT III.pdf'),
('prithvi241', 'prithvi', 'prithvi@gmail.com', 'Prithvi@123', 9743098058, 111122223333, '612', 'gurupura', 'mangalore', 'dk', 574151, 'Transaction Management.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `adhar` (`adhar`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `produces`
--
ALTER TABLE `produces`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `adhar` (`adhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produces`
--
ALTER TABLE `produces`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `produces` (`pid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `buyer` (`bid`);

--
-- Constraints for table `produces`
--
ALTER TABLE `produces`
  ADD CONSTRAINT `produces_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `seller` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
