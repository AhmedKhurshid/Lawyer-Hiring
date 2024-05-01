-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 03:41 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `heading`, `text`) VALUES
(1, 'salj;os', 'hatsad ', '44s45ssads'),
(2, 'asd', 'asdsa', 'asd'),
(3, 'asd', 'hat', 'asd'),
(4, 'asdasd', 'asdas', 'asdasd'),
(5, 'asdf', 'asdasd', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `b_heading` varchar(200) NOT NULL,
  `b_image` varchar(200) NOT NULL,
  `b_text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `b_heading`, `b_image`, `b_text`) VALUES
(1, 'asdasdasdasasdas', 'asdfsadasdasdas', 'asdassadasdasdasdasda');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_categories`
--

CREATE TABLE `lawyer_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer_categories`
--

INSERT INTO `lawyer_categories` (`cat_id`, `cat_name`) VALUES
(1, 'DIVOCE'),
(2, 'CRIMINAL'),
(3, 'fire');

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

--
-- Dumping data for table `lawyer_info`
--

INSERT INTO `lawyer_info` (`l_id`, `l_name`, `l_email`, `l_phone`, `l_address`, `l_img`, `l_password`, `l_cpassword`) VALUES
(1, 'abdul wahab', 'wahab52@gmail.com', '032383651', 'federal b area defence', '', '123456', '123456'),
(2, 'ahm', 'furqanrehman653@gmail.com', '03235135', 'federal b area defence', '', '123456', '123456'),
(3, 'bnjasgda', 'ifra@gmail.com', '03235135', 'federal b area defence', '', '123456', '123456'),
(4, 'abdul wahab', 'ifrdfdga@gmail.com', '03235135', 'federal b area defence', '', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `law_by_cat`
--

CREATE TABLE `law_by_cat` (
  `lawyer_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_phone` varchar(20) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `u_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_name`, `u_phone`, `u_address`, `u_email`, `u_password`, `c_password`, `u_image`) VALUES
(1, 'abdul wahab', '03235135', 'federal b area defence', 'wahab52@gmail.com', '123456', '123456', ''),
(2, 'abdul wahab', '03235135', 'federal b area defence', 'wahab52@gmail.com', '123456', '123456', ''),
(3, 'wahab', '03265512', 'DHA ', 'wahab@gmail.com', '123456', '123456', ''),
(4, 'ahmed', '03265512', 'DHA ', 'adgf@hmail.com', '123456', '123456', ''),
(5, 'hamza', '03265512', 'DHA ', 'jkhgjkl@gmail.com', '123456', '123456', ''),
(6, 'bilal', '03265512', 'landi kotal', 'bumzee@gmail.com', 'hamza', 'hamza', ''),
(7, 'hamza', '889876789999', 'dha', 'hamza11@gmail.com', '12345', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyer_categories`
--
ALTER TABLE `lawyer_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
