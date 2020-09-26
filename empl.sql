-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 07:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empl`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence_report`
--

CREATE TABLE `attendence_report` (
  `id` int(10) NOT NULL,
  `empl_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `date` varchar(12) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence_report`
--

INSERT INTO `attendence_report` (`id`, `empl_id`, `name`, `date`, `status`) VALUES
(12, 0, 'Rafi', '2019-12-03', 'present'),
(14, 0, 'Shourov', '2019-12-03', 'absent'),
(15, 0, '23', '2019-12-11', 'present'),
(16, 0, '111', '2019-12-11', 'absent'),
(17, 222, 'asdf', '2019-12-10', 'present'),
(18, 12, 'a', '2019-12-03', 'present'),
(19, 12, 'a', '2019-12-04', 'absent'),
(20, 123, 'khan', '2019-12-03', 'present'),
(21, 123, 'khan', '2019-12-04', 'absent'),
(22, 123, 'khan', '2019-12-05', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `empl_account`
--

CREATE TABLE `empl_account` (
  `id` int(11) NOT NULL,
  `empl_name` text NOT NULL,
  `empl_user_name` varchar(50) NOT NULL,
  `empl_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empl_account`
--

INSERT INTO `empl_account` (`id`, `empl_name`, `empl_user_name`, `empl_pass`) VALUES
(1, 'Shourov', 'shourov', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Rafi', 'rafi', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `empl_info`
--

CREATE TABLE `empl_info` (
  `id` int(11) NOT NULL,
  `empl_id` int(11) NOT NULL,
  `empl_name` text NOT NULL,
  `empl_desi` text NOT NULL,
  `empl_addr` varchar(50) NOT NULL,
  `empl_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empl_info`
--

INSERT INTO `empl_info` (`id`, `empl_id`, `empl_name`, `empl_desi`, `empl_addr`, `empl_phone`) VALUES
(11, 1247, 'Rafi', 'CEO', 'Dhaka', '12474'),
(13, 214, 'Shourov', 'Manager', 'Gazipur', '1245784');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence_report`
--
ALTER TABLE `attendence_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empl_account`
--
ALTER TABLE `empl_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empl_info`
--
ALTER TABLE `empl_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence_report`
--
ALTER TABLE `attendence_report`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `empl_account`
--
ALTER TABLE `empl_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `empl_info`
--
ALTER TABLE `empl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
