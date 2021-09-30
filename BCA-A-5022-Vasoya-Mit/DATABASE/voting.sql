-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2021 at 06:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `c_id` int(3) NOT NULL,
  `c_fnm` varchar(200) NOT NULL,
  `c_gender` varchar(20) NOT NULL,
  `c_bd` varchar(20) NOT NULL,
  `c_mno` int(12) NOT NULL,
  `c_email` varchar(40) NOT NULL,
  `c_cource` varchar(16) NOT NULL,
  `c_committee` varchar(30) NOT NULL,
  `c_time` bigint(20) NOT NULL,
  `c_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`c_id`, `c_fnm`, `c_gender`, `c_bd`, `c_mno`, `c_email`, `c_cource`, `c_committee`, `c_time`, `c_status`) VALUES
(4, 'mit', 'male', '11-7-97', 979972234, 'mit@gmail.com', 'BCA', 'cultural', 1559423209, 1),
(6, 'abhay', 'male', '23-3-99', 2147483647, 'abhay@gmail.com', 'BCA', 'Cultural', 1560027406, 1),
(8, 'akshay', 'male', '22-7-2000', 2147483647, 'akshay@gmail.com', 'BCA', 'E-governance', 1564982523, 1);

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `com_id` int(3) NOT NULL,
  `com_no` int(2) NOT NULL,
  `com_cnm` varchar(200) NOT NULL,
  `com_img` longtext NOT NULL,
  `com_desc` longtext NOT NULL,
  `com_time` bigint(20) NOT NULL,
  `com_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`com_id`, `com_no`, `com_cnm`, `com_img`, `com_desc`, `com_time`, `com_status`) VALUES
(2, 2, 'e-gov', 'imagesEgov.jpg', 'this committee work in all study information', 1559397896, 1),
(4, 4, 'Cultural', 'imagescul.jpg', 'This committee is work in cultural program function... ', 1559399904, 1),
(5, 5, 'E-governance', 'imagesEgov.jpg', 'This committee work in all student information collect and solve...', 1559400298, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetail`
--

CREATE TABLE `studentdetail` (
  `s_id` int(4) NOT NULL,
  `s_no` int(5) NOT NULL,
  `s_fnm` varchar(200) NOT NULL,
  `s_unm` varchar(50) NOT NULL,
  `s_gender` varchar(20) NOT NULL,
  `s_mno` int(12) NOT NULL,
  `s_pwd` varchar(20) NOT NULL,
  `s_cpwd` varchar(20) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_cource` varchar(20) NOT NULL,
  `s_time` bigint(20) NOT NULL,
  `s_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetail`
--

INSERT INTO `studentdetail` (`s_id`, `s_no`, `s_fnm`, `s_unm`, `s_gender`, `s_mno`, `s_pwd`, `s_cpwd`, `s_email`, `s_cource`, `s_time`, `s_status`) VALUES
(10, 0, 'abhay danger', 'abhay', 'male', 2147483647, '12345', '', 'abhay@gmail.com', 'BCA', 1561249066, 1),
(11, 0, 'mit', 'vasoya', 'male', 2147483647, '123', '', 'mit@gmail.com', 'BCA', 1564636512, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vote_id` int(3) NOT NULL,
  `s_fnm` varchar(200) NOT NULL,
  `s_id` int(3) NOT NULL,
  `c_id` int(3) NOT NULL,
  `vote_time` bigint(20) NOT NULL,
  `vote_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vote_id`, `s_fnm`, `s_id`, `c_id`, `vote_time`, `vote_status`) VALUES
(1, '', 0, 1, 1566087100, 1),
(2, '', 0, 4, 1566104861, 1),
(3, '', 0, 4, 1566104864, 1),
(5, '', 0, 6, 1566945339, 1),
(7, '', 0, 4, 1567728282, 1),
(8, '', 0, 6, 1567728375, 1),
(9, '', 0, 4, 1567728401, 1),
(10, '', 1, 6, 1567728566, 1),
(11, '', 0, 4, 1567728623, 1),
(12, '', 0, 4, 1567728787, 1),
(13, '', 0, 6, 1567744847, 1),
(14, '', 0, 8, 1567745143, 1),
(15, '', 0, 4, 1567745857, 1),
(16, 'neha patel', 0, 6, 1567745931, 1),
(17, '', 0, 4, 1567746748, 1),
(18, '', 9, 8, 1567746789, 1),
(19, '', 9, 8, 1567747307, 1),
(20, '', 9, 4, 1568408039, 1),
(21, '', 9, 6, 1568408045, 1),
(22, '', 9, 4, 1568408100, 1),
(23, '', 9, 4, 1568408171, 1),
(24, '', 10, 6, 1568408217, 1),
(25, '', 10, 4, 1568408233, 1),
(26, '', 10, 6, 1568408310, 1),
(27, '', 10, 8, 1568408317, 1),
(28, '', 10, 6, 1568408372, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdetail`
--
ALTER TABLE `studentdetail`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
