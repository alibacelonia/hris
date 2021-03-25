-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 12:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hris`
--
CREATE DATABASE IF NOT EXISTS `hris` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hris`;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE `applicants` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `application_date` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `saln_path` varchar(200) DEFAULT NULL,
  `pds_path` varchar(200) DEFAULT NULL,
  `position_type` varchar(10) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `sex`, `position`, `application_date`, `status`, `date_updated`, `saln_path`, `pds_path`, `position_type`, `remarks`) VALUES
(1, 'John Paul', 'Malinao', 'Maglaya', '2021-04-10', 'M', 'Admin Officer II', '2021-03-12', 'P', '2021-03-22 08:00:00', NULL, NULL, 'JO', NULL),
(3, 'Jose Victorio', 'Bautista', 'Abengona', '2021-03-20', 'M', 'Computer Programmer I', '2021-03-20', 'H', '2021-03-22 08:03:00', NULL, NULL, 'COS', NULL),
(4, 'Johnley', 'Bautista', 'Estigoy', '1998-07-20', 'M', 'Computer Programmer I', '2021-03-20', 'P', '2021-03-20 12:46:00', NULL, NULL, 'COS', NULL),
(5, 'Jericho', 'Bautista', 'De Castro', '1998-06-01', 'M', 'Computer Programmer I', '2021-03-20', 'P', '2021-03-22 07:51:00', NULL, NULL, 'COS', NULL),
(6, 'Jeremy', 'Parrocha', 'Dulay', '1998-06-29', 'M', 'Admin Officer I', '2021-03-20', 'P', '2021-03-22 07:37:00', NULL, NULL, 'COS', NULL),
(7, 'Bryan', 'Bautista', 'Baoas', '1998-12-15', 'M', 'Admin Officer I', '2021-01-22', 'H', '2021-03-25 12:24:00', NULL, NULL, 'CASUAL', 'Magaling kang bata ka'),
(8, 'Kenneth', 'Bautista', 'Corpuz', '1998-06-26', 'M', 'Computer Programmer I', '2021-03-11', 'P', '2021-03-20 12:52:00', NULL, NULL, 'COS', NULL),
(9, 'Eimerine', 'Bautista', 'Gamer', '1997-12-01', 'F', 'Planning Officer II', '2021-03-01', 'R', '2021-03-22 08:03:00', NULL, NULL, 'COS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE `awards` (
  `id` varchar(100) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `uid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `name`, `description`, `date`, `uid`) VALUES
(NULL, 'Award 1', 'Description 1', '2021-03-25', 7),
(NULL, 'Award 2', 'Description 2', '2021-03-26', 7),
(NULL, 'Award 3', 'Description 3', '2021-03-27', 7);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `date_hired` date DEFAULT NULL,
  `employee_type` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `leave_credits` int(10) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `elem_school` varchar(100) DEFAULT NULL,
  `elem_from` varchar(20) DEFAULT NULL,
  `elem_to` varchar(20) DEFAULT NULL,
  `hs_school` varchar(100) DEFAULT NULL,
  `hs_from` varchar(20) DEFAULT NULL,
  `hs_to` varchar(20) DEFAULT NULL,
  `college_school` varchar(100) DEFAULT NULL,
  `college_course` varchar(100) DEFAULT NULL,
  `college_from` varchar(20) DEFAULT NULL,
  `college_to` varchar(20) DEFAULT NULL,
  `we_agency1` varchar(255) DEFAULT NULL,
  `we_position1` varchar(100) DEFAULT NULL,
  `we_from1` varchar(100) DEFAULT NULL,
  `we_to1` varchar(100) DEFAULT NULL,
  `we_salary1` varchar(100) DEFAULT NULL,
  `we_agency2` varchar(100) DEFAULT NULL,
  `we_agency3` varchar(100) DEFAULT NULL,
  `we_agency4` varchar(100) DEFAULT NULL,
  `we_position2` varchar(100) DEFAULT NULL,
  `we_position3` varchar(100) DEFAULT NULL,
  `we_position4` varchar(100) DEFAULT NULL,
  `we_from2` varchar(100) DEFAULT NULL,
  `we_from3` varchar(100) DEFAULT NULL,
  `we_from4` varchar(100) DEFAULT NULL,
  `we_to2` varchar(100) DEFAULT NULL,
  `we_to3` varchar(100) DEFAULT NULL,
  `we_to4` varchar(100) DEFAULT NULL,
  `we_salary2` varchar(100) DEFAULT NULL,
  `we_salary3` varchar(100) DEFAULT NULL,
  `we_salary4` varchar(100) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `middlename`, `lastname`, `sex`, `birthdate`, `position`, `date_hired`, `employee_type`, `status`, `leave_credits`, `date_updated`, `salary`, `elem_school`, `elem_from`, `elem_to`, `hs_school`, `hs_from`, `hs_to`, `college_school`, `college_course`, `college_from`, `college_to`, `we_agency1`, `we_position1`, `we_from1`, `we_to1`, `we_salary1`, `we_agency2`, `we_agency3`, `we_agency4`, `we_position2`, `we_position3`, `we_position4`, `we_from2`, `we_from3`, `we_from4`, `we_to2`, `we_to3`, `we_to4`, `we_salary2`, `we_salary3`, `we_salary4`, `remarks`) VALUES
(1, 'Femie', 'Ditchella', 'Marquez', 'F', '1999-04-19', 'Verifier', '2020-10-05', 'COS', 'A', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Mohammed Ali', 'Bacelonia', 'Abdullah', 'M', '2021-03-16', 'Admin Officer II', '2021-03-16', 'COS', 'A', 0, '2021-03-16 03:53:00', '30000', 'Sta. Teresa Elementary School', '2004', '2010', 'Sta. Teresa National High School', '2010', '2014', 'Don Mariano Marcos Memorial State University', 'BS in Information Technology', '2014', '2018', 'Universal Leaf Philippines Incorporated', 'BAS Developer I', '2018-07-02', '2019-12-10', '17564', 'Department of Agriculture', '', '', 'Project Assistant I', '', '', '2020-07-02', '', '', '2021-03-15', '', '', '16758', '', '', NULL),
(7, 'Andrea', 'Bautista', 'Franco', 'F', '1996-01-18', 'Admin Officer II', '2021-03-16', 'COS', 'A', 0, '2021-03-25 12:30:00', '30000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Magaling kang bata ka'),
(8, 'James', 'Bautista', 'Flores', 'M', '1981-01-20', 'Information Analyst II', '2018-01-17', 'REGULAR', 'A', 15, '2021-03-20 01:04:00', '32000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(9, 'Roel', 'Bautista', 'Goldara', 'M', '1980-10-23', 'Computer Maintenance Technologist II', '2019-10-07', 'REGULAR', 'A', 15, '2021-03-20 01:06:00', '32000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(10, 'Deo', 'Bautista', 'Rivera', 'M', '1973-10-18', 'Admin Officer V', '2017-10-11', 'REGULAR', 'A', 15, '2021-03-20 01:07:00', '42000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(11, 'Roosevelt', 'Bautista', 'Peralta', 'M', '1957-02-20', 'Chief, RAED', '2008-06-20', 'REGULAR', 'A', 15, '2021-03-20 01:08:00', '62000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(16, 'Bryan', 'Bautista', 'Baoas', 'M', '1998-12-15', 'Admin Officer I', '2021-03-22', 'CASUAL', 'A', 0, '2021-03-22 08:02:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Jose Victorio', 'Bautista', 'Abengona', 'M', '2021-03-20', 'Computer Programmer I', '2021-03-22', 'COS', 'A', 15, '2021-03-22 08:03:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `phone`, `email`, `gender`, `date_created`, `date_updated`, `status`, `type`, `username`, `password`) VALUES
(1, 'John', '', 'Dela Cruz', '2021-03-27', '+639129940219', 'johnescat19@gmail.com', 'Male', '2021-03-02 23:30:27', NULL, 'A', 'A', 'juan01', '$2y$10$qzPh90ME.Lay6yIzUPeJnucplcFRI3xe4BQr1POK6l3.Ymweipjjq');

-- --------------------------------------------------------

--
-- Table structure for table `work_history`
--

DROP TABLE IF EXISTS `work_history`;
CREATE TABLE `work_history` (
  `id` int(10) NOT NULL,
  `uid` int(10) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `salary` double(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_history`
--
ALTER TABLE `work_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `work_history`
--
ALTER TABLE `work_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
