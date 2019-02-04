-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2018 at 09:03 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `managbyc_vistarak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expenses`
--

CREATE TABLE IF NOT EXISTS `tbl_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vistarak_id` int(11) NOT NULL,
  `booth_id` int(11) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `bill_date` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `bill_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_expenses`
--

INSERT INTO `tbl_expenses` (`id`, `vistarak_id`, `booth_id`, `latitude`, `longitude`, `tittle`, `description`, `amount`, `bill_date`, `created_at`, `updated_at`, `bill_pic`) VALUES
(15, 100, 0, '28.5839859', '77.3149695', 'est', 'test des', '1800', '2018-03-23', '2018-03-23', '0000-00-00 00:00:00', ''),
(16, 100, 0, '28.5839859', '77.3149695', 'est', 'test des', '1800', '2018-03-23', '2018-03-23', '0000-00-00 00:00:00', ''),
(17, 100, 0, '28.5839859', '77.3149695', 'est', 'test des', '1800', '2018-03-23', '2018-03-23', '0000-00-00 00:00:00', ''),
(18, 100, 0, '28.5839859', '77.3149695', 'est', 'test des', '1800', '2018-03-23', '2018-03-23', '0000-00-00 00:00:00', ''),
(19, 100, 0, '28.5839859', '77.3149695', 'est', 'test des', '1800', '2018-03-23', '2018-03-23', '0000-00-00 00:00:00', ''),
(20, 100, 0, '28.5839859', '77.3149695', 'est', 'test des', '1800', '2018-03-23', '2018-03-23', '0000-00-00 00:00:00', 'meet_15217893901453967.jpg'),
(21, 100, 0, '28.5839254', '77.3149892', 'auto rent', 'bjp relly at vasudha', '200', '2018-06-21', '2018-06-19', '0000-00-00 00:00:00', ''),
(22, 100, 0, '28.5839254', '77.3149892', 'auto rent', 'bjp relly at vasudha', '200', '2018-06-21', '2018-06-19', '0000-00-00 00:00:00', ''),
(23, 20, 0, '28.920925', '79.9622564', 'chai', 'chai \ndaal', '20', '2018-04-12', '2018-06-29', '0000-00-00 00:00:00', ''),
(24, 20, 0, '28.920925', '79.9622564', 'chai', 'chai \ndaal', '20', '2018-04-12', '2018-06-29', '0000-00-00 00:00:00', 'meet_15302840328861897.jpg');
