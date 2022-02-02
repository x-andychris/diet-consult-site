-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 06:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet_consult_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `blood_group` enum('A-','A+','B-','B+','O-','O+','AB-','AB+') DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `choosen_plan` int(11) DEFAULT NULL,
  `suggested_plan` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diet_types`
--

CREATE TABLE `diet_types` (
  `diet_type_id` int(11) NOT NULL,
  `plan` varchar(450) NOT NULL,
  `summary` varchar(1250) DEFAULT NULL,
  `description` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `diet_super` int(11) DEFAULT NULL,
  `calorie_tracking` tinyint(1) NOT NULL,
  `calorie_intake_per_day` varchar(30) DEFAULT NULL,
  `calorie_burnt_per_day` varchar(30) DEFAULT NULL,
  `is_blood_group` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `food` varchar(450) NOT NULL,
  `food_list` varchar(1500) DEFAULT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') NOT NULL,
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `liquids`
--

CREATE TABLE `liquids` (
  `liquid_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `liquid` varchar(450) NOT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') DEFAULT 'Take',
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `snack_id` int(11) NOT NULL,
  `diet_type_id` int(11) NOT NULL,
  `snack` varchar(450) NOT NULL,
  `info` varchar(4500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `consumption` enum('Take','Avoid') DEFAULT 'Take',
  `moderation` enum('Little','Medium','Large','Any') NOT NULL DEFAULT 'Any',
  `hour_preferred` enum('Breakfast','Lunch','Dinner','Any') NOT NULL DEFAULT 'Any',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diet_types`
--
ALTER TABLE `diet_types`
  ADD PRIMARY KEY (`diet_type_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `liquids`
--
ALTER TABLE `liquids`
  ADD PRIMARY KEY (`liquid_id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`snack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diet_types`
--
ALTER TABLE `diet_types`
  MODIFY `diet_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liquids`
--
ALTER TABLE `liquids`
  MODIFY `liquid_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `snack_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
