-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 12:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchId` int(11) NOT NULL,
  `branchNo` varchar(111) NOT NULL,
  `branchName` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchId`, `branchNo`, `branchName`) VALUES
(1, '100100', 'Pune'),
(2, '100101', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `balance` varchar(111) NOT NULL,
  `number` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `accountNo` varchar(111) NOT NULL,
  `branch` varchar(111) NOT NULL,
  `accountType` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `name`, `balance`, `number`, `address`, `accountNo`, `branch`, `accountType`, `date`) VALUES
(1, 'Harsh Salesa', '100', '03356910260', 'Shivaji nagar', '10054691286', '1', 'Current', '2020-10-03 05:50:06'),
(2, 'Lokendra Rathod', '1000', '7890765432', 'Khadki', '10054777916', '1', 'Saving', '2020-10-03 04:50:06'),
(3, 'Aryan Pardeshi', '1300', '8907654321', 'Thane', '15134107391', '2', 'Saving', '2020-10-03 07:52:40'),
(4, 'Yash', '507800', '8329767546', 'DP ROAD', '15134108375', '1', 'Current', '2020-10-03 07:54:18'),
(5, 'Omkar Hande', '500200', '9876541230', 'FC Road', '10987654348', '1', 'Current', '2021-10-09 06:16:40'),
(6, 'Omkar Awale', '8000', '9087654301', 'Pimpri', '09876562345', '1', 'Saving', '2021-10-10 07:06:08'),
(7, 'Rakshanda ', '2000', '7967890987', 'Koregaon Park', '09876221222', '1', 'Saving', '2021-10-10 07:10:23'),
(8, 'Saurabh', '500', '7658904352', 'Panvel', '09256142662', '2', 'Saving', '2021-10-10 07:14:58'),
(9, 'Solomon', '4887500', '9073517371', 'Karjat', '05645642614', '2', 'Current', '2021-10-10 07:14:58'),
(10, 'Aman', '700000', '8765321409', 'Alandi', '09787654321', '1', 'Saving', '2021-10-10 07:19:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchId`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
