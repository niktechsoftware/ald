-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 10:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ald`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobilenumber` varchar(10) NOT NULL,
  `altnumber` varchar(10) NOT NULL,
  `current_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `joiner_id` int(11) DEFAULT NULL,
  `joiner_name` varchar(30) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `pannumber` varchar(10) DEFAULT NULL,
  `adhaarnumber` varchar(12) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `joining_date` timestamp NULL DEFAULT NULL,
  `active_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `dob` date NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `ifsccode` varchar(20) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `bank_passbook_photo` varchar(150) NOT NULL,
  `adhaar_front_photo` varchar(150) NOT NULL,
  `adhaar_back_photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `parent_id`, `customer_name`, `email`, `username`, `password`, `mobilenumber`, `altnumber`, `current_address`, `permanent_address`, `city`, `state`, `pin`, `joiner_id`, `joiner_name`, `position`, `pannumber`, `adhaarnumber`, `amount`, `status`, `joining_date`, `active_date`, `dob`, `bankname`, `ifsccode`, `branchname`, `account_no`, `bank_passbook_photo`, `adhaar_front_photo`, `adhaar_back_photo`) VALUES
(1, 0, 'Rahul Singh', 'cashonwallet@gmail.com', 'admin1', '123456', '8382829593', '0', '0', '0', '0', '0', 0, 0, '', 1, '0', '123456', '1440.00', 1, '2019-02-19 04:16:29', '2019-02-19 07:29:16', '0000-00-00', 'vacj11212', 'ifcs', 'raj', '1212121212', '1551417583pool.jpg', '1551417583pool.jpg', '1551417583pool.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE IF NOT EXISTS `general_settings` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `fax_number` varchar(15) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `email1` varchar(60) NOT NULL,
  `email2` varchar(60) NOT NULL,
  `language` varchar(30) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `gst_number` varchar(20) NOT NULL,
  `logo` varchar(60) NOT NULL,
  `ico_logo` varchar(60) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `status`, `admin_username`, `admin_password`, `business_name`, `address_1`, `address_2`, `city`, `state`, `pin`, `nationality`, `phone_number`, `fax_number`, `mobile_number`, `email1`, `email2`, `language`, `customer_name`, `gst_number`, `logo`, `ico_logo`, `created`) VALUES
(1, '1', 'ALDADMIN', 'e10adc3949ba59abbe56e057f20f883e', 'ADL Globel Marketing Pvt Ltd.', 'Gorakhpur', '', 'Gorakhpur', 'Uttar Pradesh', '233001', 'Indian', '8382829593', '', '9580121878', 'info@adl.in.net', '', 'HINDI', 'Ramendra Kadri', '', '1427874176logo.jpg', '', '2014-06-21 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
