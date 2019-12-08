-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2019 at 06:02 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innoview_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `teacher` varchar(15) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `no_of_students` int(100) NOT NULL,
  `hall` varchar(10) NOT NULL,
  PRIMARY KEY (`teacher`,`grade`,`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `teacher_fk` varchar(15) NOT NULL,
  PRIMARY KEY (`course_id`,`grade`,`teacher_fk`),
  KEY `fk2` (`teacher_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `hall_no` varchar(10) NOT NULL,
  `capacity` int(100) NOT NULL,
  PRIMARY KEY (`hall_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` varchar(15) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(15) NOT NULL,
  PRIMARY KEY (`notice_id`),
  KEY `fk11` (`publisher`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_send`
--

DROP TABLE IF EXISTS `notice_send`;
CREATE TABLE IF NOT EXISTS `notice_send` (
  `noticeid_fk` varchar(15) NOT NULL,
  `studentid_fk` varchar(15) NOT NULL,
  PRIMARY KEY (`noticeid_fk`,`studentid_fk`),
  KEY `fk17` (`studentid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_send`
--

DROP TABLE IF EXISTS `notification_send`;
CREATE TABLE IF NOT EXISTS `notification_send` (
  `notificationid_fk` varchar(20) NOT NULL,
  `parentid_fk` varchar(12) NOT NULL,
  PRIMARY KEY (`notificationid_fk`,`parentid_fk`),
  KEY `fk15` (`parentid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` varchar(20) NOT NULL,
  `courseid_fk` varchar(20) NOT NULL,
  `studentid_fk` varchar(15) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `fk18` (`courseid_fk`),
  KEY `fk19` (`studentid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `courseid_fk` varchar(20) NOT NULL,
  `studentid_fk` varchar(15) NOT NULL,
  `teacherid_fk` varchar(15) NOT NULL,
  `test_id` varchar(20) NOT NULL,
  `marks` int(100) NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `fk8` (`courseid_fk`),
  KEY `fk9` (`studentid_fk`),
  KEY `fk10` (`teacherid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` varchar(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `address` varchar(500) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email_address` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `gender`, `contact_no`, `address`, `date_of_birth`, `email_address`) VALUES
('178', 'Kamal', 'Silva', 'male', '8888888888', 'gallle', '1996-07-10', 'k@gmail.com'),
('179', 'sujith', 'Silva', 'male', '8888888888', 'gallle', '1996-07-10', 'k@gmail.com'),
('180', 'sujith', 'Silva', 'male', '8888888888', 'gallle', '1996-07-10', 'k@gmail.com'),
('181', 'sujith', 'Premadasa', 'male', '8888888888', 'gallle', '1996-07-10', 'k@gmail.com'),
('2017is032', 'Banuka', 'Hathurusinghe', 'male', '0710442471', 'kelaniya', '2019-11-01', 'banuka.hathurusinghe7@aiesec.net'),
('2017is038', 'fw', 'fwef', 'male', 'c d ', 'vsd', '2019-11-06', 'vw'),
('2017is039', 'fw', 'fwef', 'male', 'c d ', 'vsd', '2019-11-06', 'vw'),
('2017is040', 'fw', 'fwef', 'male', 'c d ', 'vsd', '2019-11-06', 'vw'),
('2017is041', 'fw', 'fwef', 'male', 'c d ', 'vsd', '2019-11-06', 'vw'),
('2017is042', 'fw', 'fwef', 'male', 'c d ', 'vsd', '2019-11-06', 'vw'),
('2017is043', 'fw', 'fwef', 'male', 'c d ', 'vsd', '2019-11-06', 'vw'),
('2017is044', 'fw', 'fwef', 'male', 'c d ', 'vsd', '2019-11-06', 'vw'),
('455', 'Nimal', 'Silva', 'male', '4122567891', 'Tangalle', '2015-11-04', 'k@gmail.com'),
('55', 'tharu', 'Premadasa', 'male', '4122567891', 'Matara', '2013-01-01', 'chamo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_learn`
--

DROP TABLE IF EXISTS `student_learn`;
CREATE TABLE IF NOT EXISTS `student_learn` (
  `studentid_fk` varchar(15) NOT NULL,
  `teacherid_fk` varchar(15) NOT NULL,
  `courseid_fk` varchar(20) NOT NULL,
  PRIMARY KEY (`studentid_fk`,`teacherid_fk`,`courseid_fk`),
  KEY `fk5` (`courseid_fk`),
  KEY `fk7` (`teacherid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_parent`
--

DROP TABLE IF EXISTS `student_parent`;
CREATE TABLE IF NOT EXISTS `student_parent` (
  `nic` varchar(12) NOT NULL,
  `studentid_fk` varchar(15) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  PRIMARY KEY (`nic`,`studentid_fk`),
  KEY `fk1` (`studentid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_parent`
--

INSERT INTO `student_parent` (`nic`, `studentid_fk`, `name`, `contact_no`) VALUES
('968131476V', '55', 'Tharumall', '8888888889'),
('968131478V', '178', 'nimal', '8888888889'),
('968131478V', '179', 'nimal', '8888888889'),
('968131478V', '180', 'nimal', '8888888889'),
('968131478V', '181', 'nimal', '8888888889'),
('968131478V', '455', 'nimal', '8888888886'),
('vdsv', '', 'vsv', 'vsdvsvsdv'),
('vdsv', '2017is039', 'vsv', 'vsdvsvsdv'),
('vdsv', '2017is040', 'vsv', 'vsdvsvsdv'),
('vdsv', '2017is041', 'vsv', 'vsdvsvsdv'),
('vdsv', '2017is042', 'vsv', 'vsdvsvsdv'),
('vdsv', '2017is043', 'vsv', 'vsdvsvsdv'),
('vdsv', '2017is044', 'vsv', 'vsdvsvsdv');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `emp_no` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`emp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_teach`
--

DROP TABLE IF EXISTS `teacher_teach`;
CREATE TABLE IF NOT EXISTS `teacher_teach` (
  `teacherid_fk` varchar(15) NOT NULL,
  `courseid_fk` varchar(20) NOT NULL,
  `hall_no` varchar(10) NOT NULL,
  `numofstudents` int(11) NOT NULL,
  PRIMARY KEY (`teacherid_fk`,`courseid_fk`),
  KEY `fk4` (`courseid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_no` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `teacher` varchar(15) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`test_no`,`course`,`teacher`,`grade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(15) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_name`, `password`) VALUES
('1', '1', 'admin', 'admin'),
('178', 'Student', 'kamal', '1234'),
('179', 'Student', 'kamal', 'navanjana'),
('180', 'Student', 'kamal', '1234'),
('181', 'Student', 'kamal', '1234'),
('2017is032', 'Student', 'banukadhavi', '1234'),
('2017is033', 'Student', 'banukadhavi', '1234'),
('2017is034', 'Student', 'v', '1111'),
('2017is035', 'Student', 'v', '1111'),
('2017is036', 'Student', 'v', '1234'),
('2017is037', 'Student', 'v', '12345'),
('2017is038', 'Student', 'v', '12345'),
('2017is039', 'Student', 'v', '1234'),
('2017is040', 'Student', 'v', '1234'),
('2017is041', 'Student', 'v', '1234'),
('2017is042', 'Student', 'v', '1234'),
('2017is043', 'Student', 'v', '1234'),
('2017is044', 'Student', 'v', 'hyf'),
('455', 'Student', 'nimal', 'nimal'),
('55', 'Student', 'Tharu', 'tharu');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`teacher_fk`) REFERENCES `teacher` (`emp_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `fk11` FOREIGN KEY (`publisher`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notice_send`
--
ALTER TABLE `notice_send`
  ADD CONSTRAINT `fk16` FOREIGN KEY (`noticeid_fk`) REFERENCES `notice` (`notice_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk17` FOREIGN KEY (`studentid_fk`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notification_send`
--
ALTER TABLE `notification_send`
  ADD CONSTRAINT `fk14` FOREIGN KEY (`notificationid_fk`) REFERENCES `notification` (`notification_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk15` FOREIGN KEY (`parentid_fk`) REFERENCES `student_parent` (`nic`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk18` FOREIGN KEY (`courseid_fk`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk19` FOREIGN KEY (`studentid_fk`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk10` FOREIGN KEY (`teacherid_fk`) REFERENCES `teacher` (`emp_no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk8` FOREIGN KEY (`courseid_fk`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk9` FOREIGN KEY (`studentid_fk`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk13` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_learn`
--
ALTER TABLE `student_learn`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`courseid_fk`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk6` FOREIGN KEY (`studentid_fk`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk7` FOREIGN KEY (`teacherid_fk`) REFERENCES `teacher` (`emp_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`emp_no`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_teach`
--
ALTER TABLE `teacher_teach`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`teacherid_fk`) REFERENCES `teacher` (`emp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk4` FOREIGN KEY (`courseid_fk`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
