-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 02:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_categories`
--

CREATE TABLE `lawyer_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_education`
--

CREATE TABLE `lawyer_education` (
  `le_id` int(11) NOT NULL,
  `le_ institute` varchar(200) NOT NULL,
  `le_degree` varchar(200) NOT NULL,
  `le_startdate` date NOT NULL,
  `le_enddate` date NOT NULL,
  `lawyer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_experience`
--

CREATE TABLE `lawyer_experience` (
  `e_id` int(11) NOT NULL,
  `e_organization` varchar(100) NOT NULL,
  `e_startdate` date NOT NULL,
  `e_enddate` date NOT NULL,
  `lawyer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_info`
--

CREATE TABLE `lawyer_info` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `l_email` varchar(50) NOT NULL,
  `l_phone` varchar(50) NOT NULL,
  `l_address` varchar(500) NOT NULL,
  `l_img` varchar(500) NOT NULL,
  `l_password` varchar(50) DEFAULT NULL,
  `l_cpassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `law_by_cat`
--

CREATE TABLE `law_by_cat` (
  `lawyer_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyer_categories`
--
ALTER TABLE `lawyer_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `lawyer_education`
--
ALTER TABLE `lawyer_education`
  ADD PRIMARY KEY (`le_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `lawyer_experience`
--
ALTER TABLE `lawyer_experience`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `law_by_cat`
--
ALTER TABLE `law_by_cat`
  ADD KEY `lawyer_id` (`lawyer_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyer_categories`
--
ALTER TABLE `lawyer_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyer_education`
--
ALTER TABLE `lawyer_education`
  MODIFY `le_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyer_experience`
--
ALTER TABLE `lawyer_experience`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyer_education`
--
ALTER TABLE `lawyer_education`
  ADD CONSTRAINT `lawyer_education_ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`l_id`);

--
-- Constraints for table `lawyer_experience`
--
ALTER TABLE `lawyer_experience`
  ADD CONSTRAINT `lawyer_experience_ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`l_id`);

--
-- Constraints for table `law_by_cat`
--
ALTER TABLE `law_by_cat`
  ADD CONSTRAINT `law_by_cat_ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`l_id`),
  ADD CONSTRAINT `law_by_cat_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `lawyer_categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
