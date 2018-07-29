-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 03:36 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobhunter`
--
CREATE DATABASE IF NOT EXISTS `jobhunter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jobhunter`;

-- --------------------------------------------------------

--
-- Table structure for table `jobemployers`
--

CREATE TABLE IF NOT EXISTS `jobemployers` (
  `NIC` varchar(12) NOT NULL DEFAULT '',
  `firstName` varchar(15) DEFAULT NULL,
  `lastName` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobemployers`
--

INSERT INTO `jobemployers` (`NIC`, `firstName`, `lastName`, `email`, `pass`) VALUES
('951254784v', 'Banuka', 'Aravinda', 'banuka@gmail.com', 'banuka'),
('951475312v', 'isuru', 'Akalanka', 'isuru@gmail.com', 'isuru'),
('951478421v', 'pasan', 'jayawickrama', 'pasan@gmail.com', 'pasan');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `email` varchar(30) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `telephone` char(10) NOT NULL,
  `companyEmail` varchar(30) NOT NULL,
  `category` varchar(40) NOT NULL,
  `salary` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`email`, `companyName`, `telephone`, `companyEmail`, `category`, `salary`, `position`, `time`, `website`) VALUES
('pasan@gmail.com', 'jobHunter', '0767218379', 'htag9320@gmail.com', '9', 50000, 'Web Designer', '0', 'www.jobHunter.com'),
('banuka@gmail.com', 'JetMotor', '0114124578', 'jetmotor@gmail.com', '10', 25000, 'Security ', '0', ''),
('banuka@gmail.com', 'JetMotor', '0112457845', 'jetmotor@gmail.com', '6', 35000, 'Acount manager', '0', ''),
('pasan@gmail.com', 'jobHunter', '0767218379', 'htag9320@gmail.com', '10', 15000, 'Security ', '0', 'www.jobHunter.com'),
('isuru@gmail.com', 'jat Holdings', '0711548754', 'jatholding@gmail.com', '10', 25500, 'Security ', '0', 'www.jatholdings.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE IF NOT EXISTS `jobseekers` (
  `NIC` varchar(12) NOT NULL,
  `firstName` varchar(15) DEFAULT NULL,
  `lastName` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`NIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`NIC`, `firstName`, `lastName`, `email`, `pass`) VALUES
('951254784v', 'Srinath', 'Mahagama', 'srinath@gmail.com', 'srinath'),
('961703190v', 'Hasitha', 'Amarathunga', 'haseeamarathunga@gmail.com', 'clash');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` varchar(250) NOT NULL,
  `company` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`email`, `status`, `description`, `company`) VALUES
('mahagama@gmail.com', 'Selected', 'You are selected.', 'jetMotors'),
('srinath@gmail.com', 'Rejected', 'Sorry, We can'' accept You', 'Job Hunter');

-- --------------------------------------------------------

--
-- Table structure for table `seekers`
--

CREATE TABLE IF NOT EXISTS `seekers` (
  `em_email` varchar(50) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `nic` varchar(15) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `age` int(3) NOT NULL,
  `experiance` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seekers`
--

INSERT INTO `seekers` (`em_email`, `fullName`, `nic`, `address`, `mobile`, `email`, `gender`, `age`, `experiance`) VALUES
('banuka@gmail.com', 'Sahan Soyza', '961703190v', 'colombo 07', '0767218379', 'sahan@gmail.com', 'male', 25, 'I am a security'),
('pasan@gmail.com', 'Srinath Mahagama', '957548714v', 'melsiripura kurunegala', '0711454875', 'srinath@gmail.com', 'Female', 29, 'I am a Good Web designer. I worked in wso2 as a graphic designer last four years.'),
('pasan@gmail.com', 'isuru Akalanka', '951254784v', 'kurunegala', '0768451241', 'isuru@gmail.com', 'male', 22, 'I am a good man'),
('isuru@gmail.com', 'Srinath Mahagama', '961703190v', 'ibbagamuwa', '0767218379', 'mahagama@gmail.com', 'male', 27, 'I am a Good Security'),
('banuka@gmail.com', 'Srinath Mahagama', '961703190v', 'kurunegala', '0767218379', 'srinath@gmail.com', 'male', 25, 'I am a top class Security');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`email`) REFERENCES `jobemployers` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
