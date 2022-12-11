-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 01:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haas`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `b_id` int(11) NOT NULL,
  `b_title` varchar(30) NOT NULL,
  `b_no` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`b_id`, `b_title`, `b_no`, `u_id`) VALUES
(3, 'a', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `comp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `complaint` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `proceeding_date` date NOT NULL,
  `proceeded_by` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `replyremarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`comp_id`, `user_id`, `title`, `complaint`, `date`, `proceeding_date`, `proceeded_by`, `feedback`, `replyremarks`) VALUES
(4, 1, 'ABC', 'JHIHOPP[JP[JM', '2022-12-10', '2022-12-13', 1, 'OIOIOPIPB', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `con_name` varchar(100) NOT NULL,
  `con_email` varchar(100) NOT NULL,
  `con_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `con_name`, `con_email`, `con_comment`) VALUES
(2, 1, 'abc', 'av@a.com', 'etgryhtjhr');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` int(100) NOT NULL,
  `time1` date NOT NULL,
  `time2` date NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact1` varchar(20) NOT NULL,
  `contact2` varchar(20) NOT NULL,
  `confirm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `user_id`, `title`, `type`, `location`, `time1`, `time2`, `name`, `email`, `contact1`, `contact2`, `confirm`) VALUES
(2, 1, 'b', 'Private', 0, '2022-12-12', '2022-12-15', 'awq', 'aqsaali1244@gmail.com', '12345678910', '12345678910', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `replyremarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `user_id`, `name`, `email`, `feedback`, `replyremarks`) VALUES
(5, 1, 'shahbaz', 'abc@a.com', 'hgjgkujg,l', '');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(50) NOT NULL,
  `o_contact1` int(15) NOT NULL,
  `o_contact2` int(15) NOT NULL,
  `o_email` varchar(50) NOT NULL,
  `o_address` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`o_id`, `o_name`, `o_contact1`, `o_contact2`, `o_email`, `o_address`, `user_id`) VALUES
(4, 'abc', 2147483647, 2147483647, 'aqsaali1244@gmail.com', 'dgrhtgjhntytjn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fname`, `lname`, `email`, `username`, `password`, `cnic`, `gender`) VALUES
(1, 'hammad', 'Ahmad', 'hammad@abc.com', 'qwerty', 'qwerty', '', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`comp_id`),
  ADD KEY `u_id` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `complaints` (`user_id`);

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
