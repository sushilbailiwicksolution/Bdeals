-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 11:23 AM
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
-- Table structure for table `mortgage`
--

CREATE TABLE IF NOT EXISTS `mortgage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `live_uk` enum('No','Yes') NOT NULL DEFAULT 'No',
  `citizen_dual` enum('No','Yes') NOT NULL DEFAULT 'No',
  `default_county_court` enum('No','Yes') NOT NULL DEFAULT 'No',
  `home_repossessed` enum('No','Yes') NOT NULL DEFAULT 'No',
  `mortgage_payments` enum('No','Yes') NOT NULL DEFAULT 'No',
  `help_buy_equity` enum('No','Yes') NOT NULL DEFAULT 'No',
  `useful_home_mortgage` enum('No','Yes') NOT NULL DEFAULT 'No',
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mortgage`
--

INSERT INTO `mortgage` (`id`, `name`, `email`, `phone`, `live_uk`, `citizen_dual`, `default_county_court`, `home_repossessed`, `mortgage_payments`, `help_buy_equity`, `useful_home_mortgage`, `datetime`) VALUES
(1, 'rajesh', 'rajesh@gmail.com', '9311152815', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2018-08-20 13:18:43'),
(2, 'sddsd', 'dsd@gmail.com', '2014578521', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2018-08-20 13:38:58'),
(3, 'sadsad', 'sdsa@gmail.com', '8527412784', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2018-08-20 13:41:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
