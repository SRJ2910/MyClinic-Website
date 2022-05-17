-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 25, 2022 at 08:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway system`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_ID` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_ID`, `first_name`, `middle_name`, `last_name`, `pincode`, `city`, `state`, `dob`, `gender`, `age`) VALUES
(1222, 'Adam', 'Brown', 'William', 890097, 'Texas', 'Texas-state', '2001-08-11', 'Male', 23),
(1234, 'Billy', 'Adam', 'Smith', 365250, 'New-Jersey', 'Jersey', '2000-04-14', 'Male', 21);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `transaction_ID` int(11) NOT NULL,
  `passenger_ID` int(11) DEFAULT NULL,
  `pnr_no` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`transaction_ID`, `passenger_ID`, `pnr_no`, `amount`) VALUES
(1234321, 1234, 1456, 1057);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `pnr_no` int(11) NOT NULL,
  `train_no` int(11) DEFAULT NULL,
  `passenger_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`pnr_no`, `train_no`, `passenger_ID`) VALUES
(1456, 1122, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_no` int(11) NOT NULL,
  `train_name` varchar(50) DEFAULT NULL,
  `train_source` varchar(50) DEFAULT NULL,
  `train_destination` varchar(50) DEFAULT NULL,
  `arrival_time` datetime DEFAULT NULL,
  `departure_time` datetime DEFAULT NULL,
  `seats_available` int(11) DEFAULT NULL,
  `reference_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_no`, `train_name`, `train_source`, `train_destination`, `arrival_time`, `departure_time`, `seats_available`, `reference_date`) VALUES
(1122, 'Shatabdi-Express', 'Jaipur', 'Delhi', '2022-04-21 23:15:48', '2022-04-22 07:15:48', 250, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `traveller`
--

CREATE TABLE `traveller` (
  `passenger_ID` int(10) DEFAULT NULL,
  `train_source` varchar(50) DEFAULT NULL,
  `train_destination` varchar(50) DEFAULT NULL,
  `passenger_bookingDate` date DEFAULT NULL,
  `train_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traveller`
--

INSERT INTO `traveller` (`passenger_ID`, `train_source`, `train_destination`, `passenger_bookingDate`, `train_no`) VALUES
(1222, 'Jaipur', 'Delhi', '2022-04-22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`transaction_ID`),
  ADD KEY `passenger_ID` (`passenger_ID`),
  ADD KEY `pnr_no` (`pnr_no`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`pnr_no`),
  ADD KEY `train_no` (`train_no`),
  ADD KEY `passenger_ID` (`passenger_ID`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `traveller`
--
ALTER TABLE `traveller`
  ADD KEY `passenger_ID` (`passenger_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`passenger_ID`) REFERENCES `passenger` (`passenger_ID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`pnr_no`) REFERENCES `ticket` (`pnr_no`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`train_no`) REFERENCES `train` (`train_no`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`passenger_ID`) REFERENCES `passenger` (`passenger_ID`);

--
-- Constraints for table `traveller`
--
ALTER TABLE `traveller`
  ADD CONSTRAINT `traveller_ibfk_1` FOREIGN KEY (`passenger_ID`) REFERENCES `passenger` (`passenger_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
