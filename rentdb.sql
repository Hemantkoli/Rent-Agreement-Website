-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 08:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `loginEmail` varchar(45) NOT NULL,
  `loginPassword` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`loginEmail`, `loginPassword`) VALUES
('akshaymaheshjadhav@gmail.com', '1224'),
('rushikeshkoli1000@gmail.com', '111'),
('udaybarkade1998@gmail.com', '1234'),
('vishaldesai253@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `payName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`payName`) VALUES
('Cash'),
('Cheque'),
('Net Banking'),
('Paytm'),
('UPI');

-- --------------------------------------------------------

--
-- Table structure for table `recorddetails`
--

CREATE TABLE `recorddetails` (
  `RID` int(10) UNSIGNED NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `tenantName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `tenancyStartDate` date DEFAULT NULL,
  `tenancyPeriod` varchar(20) DEFAULT NULL,
  `tenancyRent` float UNSIGNED DEFAULT NULL,
  `tenancyDeposit` float UNSIGNED DEFAULT NULL,
  `propertyAddress` varchar(1000) NOT NULL,
  `status` varchar(60) DEFAULT NULL COMMENT 'status from 1-7',
  `Comment` varchar(2000) DEFAULT NULL COMMENT 'any other info'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this stores the all aggrement details';

--
-- Dumping data for table `recorddetails`
--

INSERT INTO `recorddetails` (`RID`, `ownerName`, `tenantName`, `email`, `mobile`, `tenancyStartDate`, `tenancyPeriod`, `tenancyRent`, `tenancyDeposit`, `propertyAddress`, `status`, `Comment`) VALUES
(1, '', '', '', '', '2018-11-12', '11', 11, 12312300, '', 'Submitted To IGR', 'Records comment'),
(2, '', '', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL),
(3, '', '', '', '', NULL, '123', 123, 1200, '', '1', NULL),
(4, '', '', '', '', NULL, '0', 0, 0, '', '1', NULL),
(6, '', '', '', '', '0000-00-00', '0', 0, 0, '', '1', NULL),
(7, '', '', '', '', '2018-12-14', '0', 0, 0, '', '1', NULL),
(8, '', '', '', '', '0000-00-00', '0', 0, 0, '', '1', NULL),
(9, '', '', '', '', NULL, '0', 0, 0, '', '1', NULL),
(10, '', '', '', '', '2018-12-15', '0', 0, 0, '', '1', NULL),
(11, '', '', '', '', '2018-12-22', '0', 0, 0, '', '1', NULL),
(12, '', '', '', '', '0000-00-00', '0', 0, 0, '', '1', NULL),
(13, '', '', '', '', '0000-00-00', '0', 0, 0, '', '1', NULL),
(14, '', '', '', '', '0000-00-00', '0', 0, 0, '', '1', NULL),
(15, '', '', '', '', '0000-00-00', '0', 0, 0, '', '1', NULL),
(16, '', '', '', '', '1999-03-12', '0', 0, 0, '', '1', NULL),
(17, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(18, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(19, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(20, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(21, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(22, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(23, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(24, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(25, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(26, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(27, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(28, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(29, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(30, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(31, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(32, 'vishal', 'sa', 'vishaldesai253@gmail.com', '7709552287', '2019-04-01', '1', 123, 123, 'desai mala arag,miraj sangli,sangli,416410', NULL, NULL),
(33, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(34, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(35, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(36, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(37, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(38, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(39, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(40, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(41, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(42, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(43, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(44, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(45, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL),
(46, '', '', '', '', '0000-00-00', '1', 0, 0, ',,', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='status of current Agreement process';

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusName`) VALUES
('Agreement Prepartion'),
('Delivery'),
('Documnets In Submission'),
('Ready For Biometric'),
('Registered'),
('Shipping'),
('Submitted To IGR');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `UID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(15) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `MobileNo` bigint(12) DEFAULT NULL,
  `EmailID` varchar(45) DEFAULT NULL,
  `AadharNo` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this table stores information related to all user (owner and tenanat)';

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`UID`, `Name`, `Password`, `MobileNo`, `EmailID`, `AadharNo`) VALUES
(1, 'vishal', '123', 917709552287, 'vishaldesai253@gmail.com', 123045678996),
(2, 'a', '123', 1234567890, 'a@a.a', NULL),
(4, 'akshay', '123', 9730853079, 'b@b.b', NULL),
(5, 'Rushi', 'Rushi@123', 7028828831, 'rushikeshkoli1000@gmail.com', NULL),
(6, 'Uday', 'uday@123', 7410549205, 'udaybarkade1998@gmail.com', NULL),
(7, 'Sunil', '8795560777', 9370156550, 'dubeysunil459@gmail.com', NULL),
(8, 'vishaldesai', '12345', 123342, 'vishaldesai253@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`loginEmail`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`payName`);

--
-- Indexes for table `recorddetails`
--
ALTER TABLE `recorddetails`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusName`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID_UNIQUE` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recorddetails`
--
ALTER TABLE `recorddetails`
  MODIFY `RID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `UID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
