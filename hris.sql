-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 11:55 PM
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
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `applicants`
--

TRUNCATE TABLE `applicants`;
--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `sex`, `position`, `application_date`, `status`, `date_updated`) VALUES
(1, '1', '1', '1', '2021-04-10', 'F', '1', '2021-03-12', 'H', NULL);

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
  `we_salary4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `employees`
--

TRUNCATE TABLE `employees`;
--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `middlename`, `lastname`, `sex`, `birthdate`, `position`, `date_hired`, `employee_type`, `status`, `leave_credits`, `date_updated`, `salary`, `elem_school`, `elem_from`, `elem_to`, `hs_school`, `hs_from`, `hs_to`, `college_school`, `college_course`, `college_from`, `college_to`, `we_agency1`, `we_position1`, `we_from1`, `we_to1`, `we_salary1`, `we_agency2`, `we_agency3`, `we_agency4`, `we_position2`, `we_position3`, `we_position4`, `we_from2`, `we_from3`, `we_from4`, `we_to2`, `we_to3`, `we_to4`, `we_salary2`, `we_salary3`, `we_salary4`) VALUES
(1, 'Femie', 'Ditchella', 'Marquez', 'F', '1999-04-19', 'Verifier', '2020-10-05', 'COS', 'A', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'asddas', 'asd', 'asd', 'M', '2021-03-12', 'asdasd', '2021-03-12', 'REGULAR', 'A', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'asdasd', 'asdasda', 'asdasd', 'M', '2021-03-16', 'asdasd', '2021-03-12', 'COS', 'RT', 212, '2021-03-15 07:39:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Mohammed Ali', 'Bacelonia', 'Abdullah', 'M', '2021-03-16', 'Admin Officer II', '2021-03-16', 'COS', 'A', 0, '2021-03-15 09:36:00', '30000', 'Sta. Teresa Elementary School', '2004', '2010', 'Sta. Teresa National High School', '2010', '2014', 'Don Mariano Marcos Memorial State University', 'BS in Information Technology', '2014', '2018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'asdasdasd', 'asdasda', 'asdasd', 'M', '2021-03-25', 'asd', '2021-03-19', 'JO', 'A', 11, '2021-03-15 09:12:00', '121', '', '', '', '', '', '', '', '', '', '', 'Ulpi', 'asd', '2021-03-11', '2021-03-26', '123123123', 'dasdas', 'asdasd', 'asdada', 'asdasdasd', 'asdasdasd', 'asdasd', '2021-03-16', '2021-04-02', '2021-03-17', '2021-03-25', '2021-03-26', '2021-03-25', '123', '123123', '123123');

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
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `phone`, `email`, `gender`, `date_created`, `date_updated`, `status`, `type`, `username`, `password`) VALUES
(1, 'John', '', 'Dela Cruz', '2021-03-27', '+639129940219', 'johnescat19@gmail.com', 'Male', '2021-03-02 23:30:27', NULL, 'A', 'A', 'juan01', '$2y$10$qzPh90ME.Lay6yIzUPeJnucplcFRI3xe4BQr1POK6l3.Ymweipjjq');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
