-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 02:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pa`
--

-- --------------------------------------------------------

--
-- Table structure for table `easy_pa`
--

CREATE TABLE IF NOT EXISTS `easy_pa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(60) DEFAULT NULL,
  `cust_firstname` varchar(60) DEFAULT NULL,
  `cust_second_name` varchar(60) DEFAULT NULL,
  `cust_last_name` varchar(60) DEFAULT NULL,
  `cust_email` varchar(60) DEFAULT NULL,
  `cust_id_no` varchar(60) DEFAULT NULL,
  `cust_kra_pin` varchar(60) DEFAULT NULL,
  `cust_phone_no` varchar(60) DEFAULT NULL,
  `cust_dob` varchar(60) DEFAULT NULL,
  `cust_postaladdress` varchar(60) DEFAULT NULL,
  `cust_postalCode` varchar(60) DEFAULT NULL,
  `nok_name` varchar(60) DEFAULT NULL,
  `nok_relationship` varchar(60) DEFAULT NULL,
  `nok_phone_no` varchar(60) DEFAULT NULL,
  `nok_email` varchar(60) DEFAULT NULL,
  `cover_option_pa_std` varchar(60) DEFAULT NULL,
  `cover_option` varchar(60) DEFAULT NULL,
  `cover_startdate` varchar(60) DEFAULT NULL,
  `cover_enddate` varchar(60) DEFAULT NULL,
  `cover_timestamp` DEFAULT CURRENT_TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
