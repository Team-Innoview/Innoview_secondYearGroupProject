-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2020 at 12:15 PM
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
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `hall_no` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `emp_no` varchar(100) NOT NULL,
  PRIMARY KEY (`hall_no`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`hall_no`, `time`, `emp_no`) VALUES
('AL002', 'Tuesday 8-10', 'EmpT003'),
('AL002', 'Tuesday 10-12', 'EmpT001'),
('x', 'Monday 8-10', 'EmpT001'),
('AL001', 'Monday 2-4', 'EmpT003'),
('N003', 'Sunday 10-12', 'EmpT002'),
('N002', 'Wednesday 10-12', 'EmpT001'),
('N001', 'Wednesday 2-4', 'EmpT002'),
('', 'Monday 8-10', 'EmpT001'),
('None', 'Monday 8-10', 'EmpT001'),
('AL002', 'Monday 8-10', 'EmpT001'),
('AL001', 'Monday 8-10', 'EmpT001'),
('AL002', 'Monday 12-2', 'EmpT003'),
('AL001', 'Tuesday 2-4', 'EmpT001'),
('AL001', 'Saturday 4-6', 'EmpT002'),
('N001', 'Sunday 4-6', 'EmpT001'),
('AL002', 'Monday 2-4', 'EmpT002');

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
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `contactno` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`contactno`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contactno`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Hasini', 'hasini@gmail.com', 'Science', 'Hi bro'),
(2, 'Ravindu Perera', 'ravindu@gmail.com', 'Welcome message', 'Fist come first value'),
(3, 'chamodi', 'mailtochamodij@gmail.com', 'Welcome ', 'Thanks for your collaboration'),
(4, 'abc', 'abc@ucsc.cmb.ac.lk', 'Maaths', 'abc xyz'),
(5, 'chamodi', 'mailtochamodij@gmail.com', 'Welcome', 'Hi');

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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `subject`, `grade`, `teacher_fk`) VALUES
('Biology2AL', 'Biology', 'AL', 'EmpT051'),
('Chemistry1AL', 'Chemistry', 'AL', 'EmpT050'),
('Maths1AL', 'Mathematics', 'AL', 'EmpT053');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

DROP TABLE IF EXISTS `day`;
CREATE TABLE IF NOT EXISTS `day` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `time`) VALUES
(1, 'Monday 8-10'),
(2, 'Monday 10-12'),
(3, 'Monday 12-2'),
(4, 'Monday 2-4'),
(5, 'Monday 4-6'),
(6, 'Tuesday 8-10'),
(7, 'Tuesday 10-12'),
(8, 'Tuesday 12-2'),
(9, 'Tuesday 2-4'),
(10, 'Tuesday 4-6'),
(11, 'Wednesday 8-10'),
(12, 'Wednesday 10-12'),
(13, 'Wednesday 12-2'),
(14, 'Wednesday 2-4'),
(15, 'Wednesday 4-6'),
(16, 'Thursday 8-10'),
(17, 'Thursday 10-12'),
(18, 'Thursday 12-2'),
(19, 'Thursday 2-4'),
(20, 'Thursday 4-6'),
(21, 'Friday 8-10'),
(22, 'Friday 10-12'),
(23, 'Friday 12-2'),
(24, 'Friday 2-4'),
(25, 'Friday 4-6'),
(26, 'Saturday 8-10'),
(27, 'Saturday 10-12'),
(28, 'Saturday 12-2'),
(29, 'Saturday 2-4'),
(30, 'Saturday 4-6'),
(31, 'Sunday 8-10'),
(32, 'Sunday 10-12'),
(33, 'Sunday 12-2'),
(34, 'Sunday 2-4'),
(35, 'Sunday 4-6');

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

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_no`, `capacity`) VALUES
('AL001', 1000),
('AL002', 1000),
('N001', 300),
('N002', 300),
('N003', 200);

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
  `notification_id` int(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `date`, `message`) VALUES
(2, '2020-02-29', 'Today class are not held in our institute'),
(3, '2020-01-27', 'Class Canceled '),
(4, '2020-02-27', 'Results displayed at the Notice Board'),
(7, '2020-02-14', 'Today class are not held in our institute');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

DROP TABLE IF EXISTS `receptionist`;
CREATE TABLE IF NOT EXISTS `receptionist` (
  `emp_no` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`emp_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`emp_no`, `name`, `contact_no`, `address`) VALUES
('1346', 'Nisal Adikari', '0710442471', 'kelaniya'),
('87999', 'chamodi', '0768774260', 'Matara'),
('E100', 'Bhashitha Pasindu', '0777600285', 'Polhena'),
('E123', 'Lakshan', '0710442471', 'Matara'),
('E8', 'ucsc', '4122789656', 'Matara'),
('Emp029', 'Buddhini', '0715678673', 'Kekanadura'),
('Emp38', 'x', '0715678673', 'Matara'),
('Emp39', 'x', '0768774260', 'Galle'),
('Emp999', 'Bandula Gunawardene', '0710442471', 'Colombo'),
('Empoo1', 'Chamo', '0768774260', 'Matara'),
('EmpR0100', 'Gunasena Silva', '0715678673', 'Mannar'),
('EmpR0101', 'Dharmakeerthi Alwis', '0768774260', 'Mannar'),
('EmpT004', 'Ram', '0776547654', 'Nugegoda');

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
('S2020AL00105', 'Banuka', 'Gamage', '', '0768774260', 'Matara', '1996-01-25', 'chamo@gmail.com'),
('S2020AL0100', 'Bagya Perera', 'Perera', '', '0768774260', 'Matara', '1997-02-12', 'mailtochamodij@gmail.com'),
('S2020AL0101', 'Malaka Silva', 'Silva', '', '0768774260', 'Jaffna', '1996-09-12', 'admin@gmail.com'),
('S2020AL0103', 'Sachi', 'Gamage', '', '0768774260', 'Matara', '1966-02-11', 'sachi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_learn`
--

DROP TABLE IF EXISTS `student_learn`;
CREATE TABLE IF NOT EXISTS `student_learn` (
  `studentid_fk` varchar(15) NOT NULL,
  `courseid_fk` varchar(20) NOT NULL,
  PRIMARY KEY (`studentid_fk`,`courseid_fk`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_learn`
--

INSERT INTO `student_learn` (`studentid_fk`, `courseid_fk`) VALUES
('S2020AL00105', 'Biology2AL'),
('S2020AL00105', 'Chemistry1AL'),
('S2020AL00105', 'Maths1AL'),
('S2020AL00105', 'pick3'),
('S2020AL0100', 'Biology2AL'),
('S2020AL0100', 'Chemistry1AL'),
('S2020AL0100', 'pick2'),
('S2020AL0100', 'pick3'),
('S2020AL0101', 'Chemistry1AL'),
('S2020AL0101', 'Maths1AL'),
('S2020AL0101', 'pick2'),
('S2020AL0101', 'pick3'),
('S2020AL0103', 'Biology2AL'),
('S2020AL0103', 'Chemistry1AL'),
('S2020AL0103', 'pick2'),
('S2020AL0103', 'pick3');

-- --------------------------------------------------------

--
-- Table structure for table `student_parent`
--

DROP TABLE IF EXISTS `student_parent`;
CREATE TABLE IF NOT EXISTS `student_parent` (
  `studentid_fk` varchar(15) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  PRIMARY KEY (`studentid_fk`),
  KEY `fk1` (`studentid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_parent`
--

INSERT INTO `student_parent` (`studentid_fk`, `name`, `contact_no`) VALUES
('S2020AL0001', 'Gunawardene', '0710442745'),
('S2020AL0002', 'Gunaweera', '0710445145'),
('S2020AL0003', 'Munaweera', '0715487965'),
('S2020AL0004', 'Ranaweera', '0716498745'),
('S2020AL0005', 'Ranaweeraka', '0716498745'),
('S2020AL0006', 'Fernando', '0771561674'),
('S2020AL0007', 'Ranaweeraka', '0716498745'),
('S2020AL0008', 'Ranaweeraka', '0716498745'),
('S2020AL0009', 'Ranaweeraka', '0716498745'),
('S2020AL0010', 'Ranaweeraka', '0716498745'),
('S2020AL00105', 'Weerasinghe', '0779175404'),
('S2020AL0011', 'Gunawardana', '0412256897'),
('S2020AL0012', 'Jayathilaka', '4122789657'),
('S2020AL0070', 'Tharumall', '0765786738'),
('S2020AL0071', 'Kasun', '0765786738'),
('S2020AL0072', 'Tharumall', '0412256897'),
('S2020AL0073', 'Jaythilaka', '0779175404'),
('S2020AL00778', 'nimal', '4122789657'),
('S2020AL0078', 'nimal', '8888888889'),
('S2020AL00789', 'Weerasinghe', '0779175404'),
('S2020AL0100', 'Tharumall Yapa', '4122789657'),
('S2020AL0101', 'Weerasinghe', '0779175404'),
('S2020AL0103', 'Tharumall', '0412256897'),
('S2020AL0870', 'mama', '8888888886'),
('S2020AL978', 'Weerasinghe', '0779175404'),
('Stud123', 'mama', '0412256897'),
('Student2', 'Premasiri', '0718082180');

-- --------------------------------------------------------

--
-- Table structure for table `stupay`
--

DROP TABLE IF EXISTS `stupay`;
CREATE TABLE IF NOT EXISTS `stupay` (
  `payment_id` int(100) NOT NULL AUTO_INCREMENT,
  `subjectpay` varchar(20) NOT NULL,
  `studentid` varchar(15) NOT NULL,
  `paydate` date NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stupay`
--

INSERT INTO `stupay` (`payment_id`, `subjectpay`, `studentid`, `paydate`, `amount`) VALUES
(1, 'PMaths1AL', 'S2020AL0070', '2020-02-16', 1500),
(2, 'PMaths1AL', 'S2020AL0012', '2020-02-16', 2000),
(3, 'pick', 'S2020AL0100', '2020-02-17', 1500),
(4, 'Chemistry1AL', 'S2020AL0101', '2020-02-17', 1500),
(5, 'Biology2AL', 'S2020AL0100', '2020-02-03', 1000);

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

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`emp_no`, `name`, `gender`, `contact_no`, `email`) VALUES
('EmpT050', 'Rohan Rohitha', '', '0768774260', 'mailtochamodij@gmail.com'),
('EmpT051', 'Harith Mendis', '', '0768774260', 'k@gmail.com'),
('EmpT053', 'Malsha Gamage', '', '0768774260', 'chamo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_teach`
--

DROP TABLE IF EXISTS `teacher_teach`;
CREATE TABLE IF NOT EXISTS `teacher_teach` (
  `teacherid_fk` varchar(15) NOT NULL,
  `courseid_fk` varchar(20) NOT NULL,
  PRIMARY KEY (`teacherid_fk`,`courseid_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_teach`
--

INSERT INTO `teacher_teach` (`teacherid_fk`, `courseid_fk`) VALUES
('EmpT050', 'Chemistry1AL'),
('EmpT051', 'Biology2AL'),
('EmpT053', 'Maths1AL');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_up`
--

DROP TABLE IF EXISTS `teacher_up`;
CREATE TABLE IF NOT EXISTS `teacher_up` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_up`
--

INSERT INTO `teacher_up` (`id`, `name`, `subject`, `filename`, `file`) VALUES
('Emp89', 'ucsc', 'Science', 'ddd', 'Screenshot (9).png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_upload`
--

DROP TABLE IF EXISTS `teacher_upload`;
CREATE TABLE IF NOT EXISTS `teacher_upload` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `filename` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_upload`
--

INSERT INTO `teacher_upload` (`id`, `name`, `subject`, `filename`) VALUES
('EmpT010', 'chamodi', 'Maths', 'jnekfhidsfhifieiwoe'),
('EmpT010', 'chamodi', 's01', 'Name a mamal who can fly');

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
-- Table structure for table `upload_answers`
--

DROP TABLE IF EXISTS `upload_answers`;
CREATE TABLE IF NOT EXISTS `upload_answers` (
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_answers`
--

INSERT INTO `upload_answers` (`student_id`, `name`, `subject_id`, `answer`) VALUES
('S2020AL0070', 'chamodi', 'Maths', 'hiiii'),
('S2020AL0011', 'ucsc', 'Maths', 'gjdjchdsjsdhk'),
('S2020AL0070', 'ucsc', 'Maths', 'bjdcdkhcsdk'),
('S2020AL0070', 'ucsc', 'Maths', 'bjdcdkhcsdk'),
('S2020AL0100', 'Bagya Perera', 's01', 'Bat');

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
('Emp38', 'Receptionist', 'x', 'a'),
('Emp39', 'Receptionist', 'x', 'a'),
('EmpR0100', 'Receptionist', 'Piumi', '4563'),
('EmpR0101', 'Receptionist', 'Dharmakeerthi Alwis', '1234'),
('EmpT050', 'Teacher', 'Rohan Rohitha', '1234'),
('EmpT051', 'Teacher', 'Harith Mendis', '1234'),
('EmpT053', 'Teacher', 'Malsha Gamage', '1234'),
('S2020AL00105', 'Student', 'Banuka Gamage', '1234'),
('S2020AL0100', 'Student', 'Bagya Perera', '1234'),
('S2020AL0101', 'Student', 'Malaka Silva', '1234'),
('S2020AL0103', 'Student', 'Sachini', '1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`teacher_fk`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk6` FOREIGN KEY (`studentid_fk`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`emp_no`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
