-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2011 at 11:19 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ictfest2011`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_reg`
--

CREATE TABLE IF NOT EXISTS `all_reg` (
  `reg_id` varchar(6) NOT NULL,
  `nameReg` varchar(40) NOT NULL,
  `insName` varchar(80) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_reg`
--


-- --------------------------------------------------------

--
-- Table structure for table `counter_strike_contest`
--

CREATE TABLE IF NOT EXISTS `counter_strike_contest` (
  `reg_id` varchar(6) NOT NULL,
  `teamName` varchar(20) NOT NULL,
  `insName` varchar(180) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `playerOne` varchar(40) NOT NULL,
  `playerTwo` varchar(40) NOT NULL,
  `playerThree` varchar(40) NOT NULL,
  `playerFour` varchar(40) NOT NULL,
  `playerFive` varchar(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_strike_contest`
--


-- --------------------------------------------------------

--
-- Table structure for table `fifa11_contest`
--

CREATE TABLE IF NOT EXISTS `fifa11_contest` (
  `reg_id` varchar(6) NOT NULL,
  `insName` varchar(80) NOT NULL,
  `partName` varchar(40) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifa11_contest`
--


-- --------------------------------------------------------

--
-- Table structure for table `gk_contest`
--

CREATE TABLE IF NOT EXISTS `gk_contest` (
  `reg_id` varchar(6) NOT NULL,
  `teamName` varchar(20) NOT NULL,
  `insName` varchar(80) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `partNameOne` varchar(40) NOT NULL,
  `partNameTwo` varchar(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk_contest`
--


-- --------------------------------------------------------

--
-- Table structure for table `ict_olympiad_contest`
--

CREATE TABLE IF NOT EXISTS `ict_olympiad_contest` (
  `reg_id` varchar(6) NOT NULL,
  `insName` varchar(80) NOT NULL,
  `partName` varchar(40) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict_olympiad_contest`
--


-- --------------------------------------------------------

--
-- Table structure for table `programming_contest`
--

CREATE TABLE IF NOT EXISTS `programming_contest` (
  `reg_id` varchar(6) NOT NULL,
  `teamName` varchar(20) NOT NULL,
  `insName` varchar(80) NOT NULL,
  `coachName` varchar(40) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `teamLeader` varchar(40) NOT NULL,
  `memberOne` varchar(40) NOT NULL,
  `memberTwo` varchar(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programming_contest`
--


-- --------------------------------------------------------

--
-- Table structure for table `registration_status`
--

CREATE TABLE IF NOT EXISTS `registration_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL,
  `remarks` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `registration_status`
--

INSERT INTO `registration_status` (`id`, `status`, `remarks`) VALUES
(1, 1, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `showcase_contest`
--

CREATE TABLE IF NOT EXISTS `showcase_contest` (
  `reg_id` varchar(6) NOT NULL,
  `insName` varchar(80) NOT NULL,
  `partName` varchar(40) NOT NULL,
  `partnerName1` varchar(40) NOT NULL,
  `partnerName2` varchar(40) NOT NULL,
  `projectName` text NOT NULL,
  `projectType` varchar(16) NOT NULL,
  `projectDesc` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `reg_date` datetime NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showcase_contest`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
