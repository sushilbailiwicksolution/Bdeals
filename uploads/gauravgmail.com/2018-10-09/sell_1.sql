-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 11:24 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `managbyc_waji`
--

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_type` enum('Sell Now','Live Auction','Call Back') NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `property_type`, `name`, `email`, `phone`, `datetime`) VALUES
(1, '', 'rajesh', 'rajesh@gmail.com', '8528528525', '2018-08-21 12:00:53'),
(2, '', 'rohit', 'rohit@gmail.com', '8527419632', '2018-08-21 12:04:03'),
(3, 'Sell Now', 'sadsad', 'sdsa@gmail.com', '8527412784', '2018-08-21 12:12:11'),
(4, 'Sell Now', 'sadsad', 'sdsa@gmail.com', '8527412784', '2018-08-21 12:12:27'),
(5, 'Call Back', 'gfgdfg', 'fgfd@gmal.com', '7412589632', '2018-08-21 12:31:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
