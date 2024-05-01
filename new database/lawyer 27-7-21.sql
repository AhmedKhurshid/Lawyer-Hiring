-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 09:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `Short_heading` varchar(200) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `About_para` varchar(2000) NOT NULL,
  `Short_heading2` varchar(200) NOT NULL,
  `heading2` varchar(200) NOT NULL,
  `para_2` varchar(2000) NOT NULL,
  `cases_one` varchar(200) NOT NULL,
  `cases_one_desc` varchar(2000) NOT NULL,
  `cases_two` varchar(200) NOT NULL,
  `cases_two_desc` varchar(2000) NOT NULL,
  `cases_three` varchar(200) NOT NULL,
  `cases_three_desc` varchar(2000) NOT NULL,
  `cases_four` varchar(200) NOT NULL,
  `cases_four_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `Short_heading`, `heading`, `text`, `About_para`, `Short_heading2`, `heading2`, `para_2`, `cases_one`, `cases_one_desc`, `cases_two`, `cases_two_desc`, `cases_three`, `cases_three_desc`, `cases_four`, `cases_four_desc`) VALUES
(0, 'Our History', 'Our Mission', 'Our attorneys and staff are dedicated to protecting the rights of injured individuals. When an innocent person has been hurt by another partyï¿½s negligence, whether on the road, at work, or even in their own home. We make it our mission to ensure they receive the justice they deserve and the compensation required to recover from their injuries.', 'Weï¿½ve seen firsthand how a serious accident can turn a familyï¿½s life upside down in an instant. Every day, people find themselves facing loss of income, mounting medical bills, and long-lasting pain and suffering. They often ensure this suffering with no recourse from the party responsible for their injury. Williams Hart provides victims of negligence with qualified, honest, and compassionate legal representation. We work hard to recover the compensation they deserve.\r\n\r\n\r\nSince 1983, our award-winning attorneys have helped more than 100,000 injured clients secure justice for their suffering. Allow us to do the same for you.', 'Want Help', 'Practice Areas', 'In Law Services, we have got a wide range of legal services. We practice general civil law for businesses, individuals, and local governments too.is abusiness theme perfectly suited legal advisers and offices, lawyers, attorneys, counsels, advocates and other legal and law related services.', 'Family Law', 'Family law consists of a body of statutes and case precedents that govern the legal responsibilities between individuals who share a domestic connection.', 'Fire Accident', 'Fire accidents can result in catastrophic personal injury and devastating damage. Every year, billions of dollars in property damage occurs as a result of fire.', 'Shoplifting', 'Shoplifting law deals with theft crimes that occur in retail establishments. Perpetrators are shoppers who enter the establishment with permission.', 'Drug Offences', 'The legal restrictions placed on the use of controlled drugs are aimed at preventing drug misuse. The principal offences are contained in the Misuse of Drugs Act 1971.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `app_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'It’s My Pleasure to graduate with excellent!', 'images/blog1.jpg', 'We are aiming to provide high quality legal consultancy, support and results for your legal issues. Aiming to provide high quality legal consultancy, ...'),
(2, 'All you want to know about industrial laws', 'images/blog2.jpg', 'Industrial Law. These can include a wide range of legal topics, from employment laws to environmental concerns, contracts, industrial relations, and worker safety regulations.'),
(3, 'New Careers, what makes you qualified?', 'images/blog3.jpg', 'A:A degree in law can open up the doors to various law careers. The job position and salary will depend upon your specialization and level of degree earned.'),
(4, 'All About human laws, our rich and useful library.', 'images/blog4.jpg', 'Human Law is the interpretation of natural law in different contexts (ST II.I.95–97). Natural law is a foundation for moral and civil law. Government laws are dictates of practical reason'),
(5, 'What you must know about financial law changes', 'images/blog5.jpg', 'Financial law is the law and regulation of the insurance, derivatives, commercial banking, capital markets and investment management sectors.'),
(6, 'Keep away from drugs, the penalty is 20 years', 'images/blog6.jpg', 'It is illegal to possess, supply and produce controlled drugs. ... It is also illegal to import or export drugs, or to allow your premises to be used for drug production.');

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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `phone`, `comment`) VALUES
(42, 'Abdul Wahab ', 'wahabqadri75@gmail.com', '03102408172', 'Need to Visit', 'you successfully done !!!'),
(43, 'Abdul Wahab ', 'wahabhanif52@gmail.com', '03102408172', 'lfhswbfsa', 'jjj'),
(44, 'Abdul Wahab ', 'wahabhanif52@gmail.com', '03102408172', 'lfhswbfsa', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `h_id` int(11) NOT NULL,
  `Qualified` varchar(200) NOT NULL,
  `count01` int(11) NOT NULL,
  `Trusted` varchar(200) NOT NULL,
  `count02` int(11) NOT NULL,
  `Cases` varchar(200) NOT NULL,
  `count03` int(11) NOT NULL,
  `Awards` varchar(200) NOT NULL,
  `count04` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`h_id`, `Qualified`, `count01`, `Trusted`, `count02`, `Cases`, `count03`, `Awards`, `count04`) VALUES
(1, 'Qualified Lawyers', 900, 'Trusted Clients', 29058, 'Successful Cases', 956676, 'Honors & Awards', 1500);

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
(3, 'Fire Accident'),
(15, 'Family Law'),
(16, 'Shoplifting'),
(17, 'Criminal'),
(18, 'Drug Offences'),
(19, 'Financial Law'),
(20, 'Insurance'),
(21, 'Civil Litigation');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_education`
--

CREATE TABLE `lawyer_education` (
  `le_id` int(11) NOT NULL,
  `le_institute` varchar(200) NOT NULL,
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

--
-- Dumping data for table `lawyer_experience`
--

INSERT INTO `lawyer_experience` (`e_id`, `e_organization`, `e_startdate`, `e_enddate`, `lawyer_id`) VALUES
(1, 'ofuowehow', '2021-07-08', '2021-08-06', 1);

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
  `l_cpassword` varchar(50) DEFAULT NULL,
  `l_des` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer_info`
--

INSERT INTO `lawyer_info` (`l_id`, `l_name`, `l_email`, `l_phone`, `l_address`, `l_img`, `l_password`, `l_cpassword`, `l_des`) VALUES
(1, 'abdul wahab', 'wahab52@gmail.com', '032383651', 'federal b area defence', 'images/wahab.jpg', '123456', '123456', 'i am wahab hanif'),
(2, 'furqan rehman', 'furqanrehman653@gmail.com', '03235135', 'federal b area defence', 'images/furqan.jpg', '123456', '123456', ''),
(3, 'bisma arif', 'bisma@gmail.com', '03235135', 'federal b area defence', 'images/bisma.jpg', '123456', '123456', 'i am bisma and i am working as a lawyer'),
(4, 'kashif', 'kashif@gmail.com', '03235135', 'federal b area defence', 'images/hamza2.jpg', '123456', '123456', ''),
(5, 'Hamza Ahmed Khan', 'hamza@gmail.com', '023120611171', 'tanveer shaheed park', 'images/hamza.jpg', '4', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `law_by_cat`
--

CREATE TABLE `law_by_cat` (
  `id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `law_by_cat`
--

INSERT INTO `law_by_cat` (`id`, `lawyer_id`, `cat_id`) VALUES
(1, 1, 3),
(2, 2, 15),
(4, 3, 15),
(5, 5, 15),
(6, 4, 16);

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

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
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`h_id`);

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawyer_categories`
--
ALTER TABLE `lawyer_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lawyer_education`
--
ALTER TABLE `lawyer_education`
  MODIFY `le_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lawyer_experience`
--
ALTER TABLE `lawyer_experience`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `law_by_cat`
--
ALTER TABLE `law_by_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer_info` (`l_id`);

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
