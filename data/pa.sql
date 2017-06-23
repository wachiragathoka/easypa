-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 02:37 PM
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
  `cover_premium` varchar(10) NOT NULL,
  `s_annualSemiaAnnual` varchar(30) NOT NULL,
  `cover_startdate` varchar(60) DEFAULT NULL,
  `cover_enddate` varchar(60) DEFAULT NULL,
  `cover_timestamp` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `easy_pa`
--

INSERT INTO `easy_pa` (`id`, `user_id`, `cust_firstname`, `cust_second_name`, `cust_last_name`, `cust_email`, `cust_id_no`, `cust_kra_pin`, `cust_phone_no`, `cust_dob`, `cust_postaladdress`, `cust_postalCode`, `nok_name`, `nok_relationship`, `nok_phone_no`, `nok_email`, `cover_option_pa_std`, `cover_option`, `cover_premium`, `s_annualSemiaAnnual`, `cover_startdate`, `cover_enddate`, `cover_timestamp`) VALUES
(1, 'Mathew', 'Matthew', 'Wachira', 'Gathoka', 'mgathoka@uap-group.com', '24003658', 'P584857A', '254722896425', '29/06/2017', '921123', '213', 'Peter Gathoka Mburu', 'Father', '0720523449', 'pgmburu@yahoo.com', '2', 'B', '', 'semiannual', '24/06/2017', '24/12/2017', '0000-00-00 00:00:00'),
(2, 'Mathew', 'Matthew', 'gathoka', 'Gathoka', 'mgathoka@uap-group.com', '24003658', 'P584857A', '254722896425', '20/01/1985', '921123', '213', 'Peter Gathoka Mburu', 'Father', '0720523449', 'pgmburu@yahoo.com', '1', 'E', '14600', 'NAN', '24/06/2017', '23/06/2018', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
