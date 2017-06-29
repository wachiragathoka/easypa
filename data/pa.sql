-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 03:22 PM
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
  `quote_id` varchar(60) DEFAULT NULL,
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
  `previus_cover` varchar(3) NOT NULL,
  `previus_cover_name` varchar(100) NOT NULL,
  `physical_disability` varchar(3) NOT NULL,
  `physical_disability_names` text NOT NULL,
  `accidents_in_five_years` text NOT NULL,
  `excluded_activities` varchar(3) NOT NULL,
  `excluded_activities_extension` varchar(3) NOT NULL,
  `final_declarations` varchar(5) NOT NULL,
  `cover_premium` varchar(10) NOT NULL,
  `s_annualSemiaAnnual` varchar(30) NOT NULL,
  `cover_startdate` varchar(60) DEFAULT NULL,
  `cover_enddate` varchar(60) DEFAULT NULL,
  `cover_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
