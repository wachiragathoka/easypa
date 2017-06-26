-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2017 at 05:30 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa`
--

-- --------------------------------------------------------

--
-- Table structure for table `easy_pa`
--

CREATE TABLE `easy_pa` (
  `id` int(11) NOT NULL,
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
  `cover_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy_pa`
--

INSERT INTO `easy_pa` (`id`, `user_id`, `cust_firstname`, `cust_second_name`, `cust_last_name`, `cust_email`, `cust_id_no`, `cust_kra_pin`, `cust_phone_no`, `cust_dob`, `cust_postaladdress`, `cust_postalCode`, `nok_name`, `nok_relationship`, `nok_phone_no`, `nok_email`, `cover_option_pa_std`, `cover_option`, `previus_cover`, `previus_cover_name`, `physical_disability`, `physical_disability_names`, `accidents_in_five_years`, `excluded_activities`, `excluded_activities_extension`, `final_declarations`, `cover_premium`, `s_annualSemiaAnnual`, `cover_startdate`, `cover_enddate`, `cover_timestamp`) VALUES
(3, 'Matthew', 'Mathew', 'Wachira', 'Gathoka', 'wachiragathoka@yahoo.com', '24003658', 'P5414A', '0722000000', '20/01/1985', '124', '00200', 'Mathew2 Gathoka2 Wachira2', 'Father', '3242', '23423', '2', 'B', 'yes', 'UAP', 'yes', 'sdaasdsa', 'asdsa', 'yes', 'yes', 'yes', '600', 'semiannual', '27/06/2017', '26/01/2018', '2017-06-26 15:23:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy_pa`
--
ALTER TABLE `easy_pa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy_pa`
--
ALTER TABLE `easy_pa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
