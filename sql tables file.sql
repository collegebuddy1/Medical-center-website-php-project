-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2016 at 08:50 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `patientid` int(1) NOT NULL AUTO_INCREMENT,
  `DOCTORSNAME` varchar(50) NOT NULL,
  `PATIENTNAME` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `DIAGNOSES` varchar(100) NOT NULL,
  `PAYMENT` int(70) NOT NULL,
  `DATE` varchar(20) NOT NULL,
  PRIMARY KEY (`patientid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

DROP TABLE IF EXISTS `appoinment`;
CREATE TABLE IF NOT EXISTS `appoinment` (
  `appoin id` int(4) NOT NULL AUTO_INCREMENT,
  `drname` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `center` varchar(50) NOT NULL,
  PRIMARY KEY (`appoin id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appoin id`, `drname`, `fullname`, `phonenumber`, `email`, `date`, `center`) VALUES
(7, 'Dr Sadia Altaf', 'ali', 'ali.5221@hotmail.com', '03335115199', 'May 6, 2016 ', 'Burhani Medical Center'),
(4, 'Dr Sadia Altaf', 'ali', 'ali.5221@hotmail.com', '03315552539', 'May 1, 2016 ', 'Burhani Medical Center');

-- --------------------------------------------------------

--
-- Table structure for table `appointlogin`
--

DROP TABLE IF EXISTS `appointlogin`;
CREATE TABLE IF NOT EXISTS `appointlogin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointlogin`
--

INSERT INTO `appointlogin` (`id`, `USERNAME`, `PASSWORD`) VALUES
(1, 'DR SADIA', 'qwerty1234');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `docid` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(44) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `timings` text NOT NULL,
  `Pic` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `docid`, `name`, `gender`, `email`, `contact`, `specialization`, `timings`, `Pic`) VALUES
(5, 'DR SHABBAR', 'DR SHABBAR', 'male', 'shab1167@gmail.coom', '03335115199', 'Medicine', '2:00 to 8:00 pm', ''),
(4, 'DR SHABBIR', 'DR SHABBIR', 'male', 'shib1167@gmail.coom', '03215070092', 'Radiology', '10:00 to 2:00 pm & 8:00 to 11:00 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `EXPENSEID` int(50) NOT NULL AUTO_INCREMENT,
  `DATE` varchar(50) NOT NULL,
  `EXPENSE` varchar(100) NOT NULL,
  `PRICE` int(100) NOT NULL,
  PRIMARY KEY (`EXPENSEID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`EXPENSEID`, `DATE`, `EXPENSE`, `PRICE`) VALUES
(8, 'May 5, 2016 ', 'tablets', 200),
(7, 'May 5, 2016 ', 'injection', 100),
(9, 'May 5, 2016 ', 'tablets', 200000),
(10, 'May 6, 2016 ', 'injecction', 200),
(11, 'May 6, 2016 ', 'medicine', 300),
(12, 'May 6, 2016 ', ' 4 subway', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `patientid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(14) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `diagnose` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patientid`, `name`, `gender`, `contact`, `diagnose`) VALUES
(3, 'samina12', 'samina shakir', 'female', '03215070092', 'pain in stomach');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `docid` int(4) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=MyISAM AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`docid`, `NAME`, `USERNAME`, `PASSWORD`) VALUES
(144, 'Dr Shabbar', 'shab1167', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

DROP TABLE IF EXISTS `updates`;
CREATE TABLE IF NOT EXISTS `updates` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `updateid` varchar(50) NOT NULL,
  `heading` text NOT NULL,
  `paragraph` longtext NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `updateid`, `heading`, `paragraph`, `date`) VALUES
(8, 'MEDICAL CAMP ', 'MEDICAL CAMP', 'FREE MEDICAL CHECK UP FOR PATIENTS THAT HAVE TB PROBLEMS', '26 APRIL TO 10 MAY 2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
