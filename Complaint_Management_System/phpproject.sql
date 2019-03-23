-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 03:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`username`, `password`) VALUES
('admin1', 'admin123'),
('admin2', 'admin123'),
('admin3', 'admin123'),
('admin1', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `complaintstable`
--

CREATE TABLE `complaintstable` (
  `username` varchar(20) NOT NULL,
  `level` int(1) NOT NULL,
  `status` text NOT NULL,
  `complaint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintstable`
--

INSERT INTO `complaintstable` (`username`, `level`, `status`, `complaint`) VALUES
('ashwin', 2, 'unsolved', '    \r\n            Chain Snatching'),
('kaustubh', 2, 'unsolved', '    \r\n            DWI'),
('hatish', 1, 'unsolved', '    \r\n            theft simple'),
('vijay', 3, 'unsolved', 'felony    \r\n            ');

-- --------------------------------------------------------

--
-- Table structure for table `workertable`
--

CREATE TABLE `workertable` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workertable`
--

INSERT INTO `workertable` (`username`, `password`, `department`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('worker1', 'worker1', 'level1'),
('worker2', 'worker2', 'level2'),
('', '', ''),
('', '', ''),
('', '', ''),
('worker3', 'worker3', 'level3'),
('worker4', 'worker4', 'level1'),
('worker5', 'worker5', 'level2'),
('worker6', 'worker6', 'level3'),
('worker6', 'worker6', 'level3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
