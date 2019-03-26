-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2017 at 06:49 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic`
--

CREATE TABLE IF NOT EXISTS `diagnostic` (
  `test_id` varchar(10) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `fees` decimal(7,0) NOT NULL,
  PRIMARY KEY (`test_id`),
  UNIQUE KEY `test_name` (`test_name`),
  UNIQUE KEY `test_name_2` (`test_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnostic`
--

INSERT INTO `diagnostic` (`test_id`, `test_name`, `fees`) VALUES
('t1', 'ecg', '250'),
('t2', 'mri', '10000'),
('t3', 'x-ray', '2000'),
('t4', 'ct-scan', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` char(30) NOT NULL,
  `department` char(20) NOT NULL,
  `p_id` varchar(20) DEFAULT NULL,
  `timings` varchar(10) NOT NULL,
  `phone` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `password`, `name`, `department`, `p_id`, `timings`, `phone`) VALUES
('d1', 'd1d1', 'roy', 'heart', 'p1', '8-16', NULL),
('d2', 'd2d2', 'james', 'eye', NULL, '8-16', NULL),
('d3', 'd3d3', 'jason', 'viral', NULL, '8-16', NULL),
('d4', 'd4d4', 'pooja', 'heart', NULL, '16-24', NULL),
('d5', 'd5d5', 'sumita', 'eye', 'p3', '16-24', NULL),
('d6', 'd6d6', 'arati', 'viral', NULL, '16-24', NULL),
('d7', 'd7d7', 'arjun', 'heart', NULL, '24-8', NULL),
('d8', 'd8d8', 'ben', 'eye', NULL, '24-8', NULL),
('d9', 'd9d9', 'nidhi', 'viral', 'p2', '24-8', NULL),
('d15', 'd15d15', 'teddy', 'eye', '', '8-16', NULL),
('d16', 'd16d16', 'rama', 'heart', '', '16-24', NULL),
('d2', 'd2d2', 'james', 'eye', 'NULL', '8-16', NULL),
('d2', 'd2d2', 'james', 'eye', 'NULL', '8-16', NULL),
('d2', 'd2d2', 'james', 'eye', 'NULL', '8-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` varchar(20) NOT NULL,
  `name` char(30) NOT NULL,
  `sex` enum('m','f','M','F') NOT NULL,
  `phone_no` int(10) NOT NULL,
  `doj` date NOT NULL,
  `salary` int(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `timing` varchar(15) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `name`, `sex`, `phone_no`, `doj`, `salary`, `address`, `email`, `timing`) VALUES
('d1', 'roy', 'm', 147483647, '2017-01-05', 70000, '70-sakur vihar delhi', 'roy@gmail.com', '8-16'),
('d2', 'james', 'm', 134567890, '2016-02-06', 70000, '20-akbar road delhi', 'james@gmail.com', '8-16'),
('d3', 'jason', 'm', 123123123, '2016-03-12', 70000, '30-sen apt,noida', 'jason@gmail.com', '8-16'),
('d4', 'pooja', 'f', 123412341, '2017-04-13', 75000, '40-pusa road,delhi', 'pooja@gmail.com', '16-24'),
('d5', 'sumita', 'f', 98709876, '2017-01-17', 75000, '50-shahdra,delhi', 'sumita@gmail.com', '16-24'),
('d6', 'arati', 'f', 1234554321, '2017-02-07', 75000, '60-krishna nagar,delhi', 'arati@gmail.com', '16-24'),
('d7', 'arjun', 'm', 87587654, '2016-05-23', 80000, '70-madhu vihar delhi', 'arjun@gmail.com', '24-8'),
('d8', 'ben', 'm', 345634567, '2015-12-01', 90000, '14-vivek vihar,delhi', 'ben@gmail.com', '24-8'),
('d9', 'nidhi', 'f', 123443541, '2014-03-04', 90000, '70-rajnagar,up', 'nidhi@gmail.com', '24-8'),
('n1', 'renu', 'f', 707060601, '2002-01-01', 15000, '12-vasundra,up', 'renu@gmail.com', '24-8'),
('n2', 'mary', 'f', 789789789, '2003-02-18', 15000, '12-yamuna nagar,delhi', 'mary@gmail.com', '24-8'),
('n3', 'rose', 'f', 123443211, '2003-02-19', 15000, '14-high rise apt,dehi', 'rose@gmail.com', '8-16'),
('n4', 'clara', 'f', 567765567, '2004-02-17', 15000, '12-anjum valley,delhi', 'clara@gmail.com', '8-16'),
('n5', 'ana', 'f', 789654123, '2003-10-21', 15000, '15-high rise apt,delhi', 'ana@gmail.com', '8-16'),
('w1', 'vijay', 'm', 777788887, '2011-01-12', 10000, '25-raj nagar,up', 'vijay@gmail.com', '8-16'),
('w2', 'rohit', 'm', 741258963, '2011-10-27', 10000, '23-raj nagar,up', 'rohit@gmail.com', '16-24'),
('w3', 'akash', 'm', 785412369, '2011-10-18', 10000, '23-raj nagar,up', 'akash@gmail.com', '24-8'),
('re1', 'asaf', 'm', 123321456, '2017-10-12', 20000, '70-prem nagar,up', 'asaf@gmail.com', '8-16'),
('re2', 'pooja', 'f', 98098890, '2017-02-07', 20000, '72-prem nagar,up', 'pooja@gmail.com', '16-24'),
('re3', 'geeta', 'f', 98876765, '2007-10-19', 20000, '90-prem nagar,up', 'geeta@gmail.com', '24-8'),
('d10', 'ross', 'm', 123123321, '2017-11-01', 212121, '12-1ada,delhi', 'ross@gmail.com', '24-8');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `nur_id` varchar(20) NOT NULL,
  `name` char(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nur_id`, `name`) VALUES
('n1', 'renu'),
('n2', 'mary'),
('n3', 'rose'),
('n4', 'clara'),
('n5', 'ana');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` varchar(20) NOT NULL,
  `name` char(30) NOT NULL,
  `occupation` char(15) NOT NULL,
  `weight` decimal(6,0) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `sex` enum('m','f','M','F') NOT NULL,
  `address` varchar(80) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `admit_date` date NOT NULL,
  `discharge_date` date DEFAULT NULL,
  `m_id` varchar(15) NOT NULL,
  `test_id` varchar(10) NOT NULL,
  `charges` decimal(15,0) DEFAULT NULL,
  `doc_id` varchar(20) NOT NULL,
  `r_id` varchar(10) NOT NULL,
  `place` char(10) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `m_id` (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `name`, `occupation`, `weight`, `phone_no`, `sex`, `address`, `disease`, `admit_date`, `discharge_date`, `m_id`, `test_id`, `charges`, `doc_id`, `r_id`, `place`) VALUES
('p1', 'ram', 'student', '70', 987789989, 'm', '21-gandhi nagar,delhi', 'heart_condition', '2017-10-04', '2017-10-17', 'm4', 't1', '50000', 'd1', 'r1', 'in'),
('p2', 'kshitij', 'worker', '60', 741125852, 'm', '20-lakshmi nagar,delhi', 'viral', '2017-10-02', '2017-10-04', 'm3', 't2', '1000', 'd4', 'r2', 'out'),
('p3', 'manish', 'cricketer', '85', 987765654, 'm', '20-azadpur,delhi', 'eye condition', '2017-11-07', '2017-11-28', 'm1', 't4', '0', 'd7', 'r6', 'in');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `m_id` varchar(15) NOT NULL,
  `stock` int(5) NOT NULL,
  `med_name` varchar(25) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(15) NOT NULL,
  PRIMARY KEY (`m_id`),
  UNIQUE KEY `med_name` (`med_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`m_id`, `stock`, `med_name`, `price`, `description`) VALUES
('m1', 200, 'opti_free', 400, 'eyes'),
('m2', 600, 'aspirin', 100, 'painkiller'),
('m3', 500, 'azithral', 150, 'viral'),
('m4', 500, 'statins', 5000, 'heart_condition'),
('m5', 600, 'eye_drops', 80, 'eyes');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE IF NOT EXISTS `receptionist` (
  `rec_id` varchar(20) NOT NULL,
  `name` char(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`rec_id`, `name`, `password`) VALUES
('re1', 'asaf', 're1re1'),
('re2', 'pooja', 're2re2'),
('re3', 'geeta', 're3re3'),
('re4', 'anaa', 're4re4');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `r_id` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cost` int(10) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`r_id`, `type`, `status`, `cost`) VALUES
('r1', 'special', 'full', 1000),
('r2', 'general', 'empty', 250),
('r3', 'general', 'empty', 250),
('r4', 'operation_theatre', 'empty', 2000),
('r5', 'icu', 'empty', 500),
('r6', 'special', 'full', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `ward_boy`
--

CREATE TABLE IF NOT EXISTS `ward_boy` (
  `wb_id` varchar(20) NOT NULL,
  `name` char(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward_boy`
--

INSERT INTO `ward_boy` (`wb_id`, `name`) VALUES
('w1', 'vijay'),
('w2', 'rohit'),
('w3', 'akash');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
