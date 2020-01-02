-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 10:14 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `Date`) VALUES
(1, 'Mahedy Hasan', '01781981698', 0, 'Good Work', '2019-02-18 13:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(22) NOT NULL,
  `course_title` varchar(44) NOT NULL,
  `course_code` varchar(44) NOT NULL,
  `semister` varchar(20) NOT NULL,
  `t_id` int(44) NOT NULL,
  `role` int(22) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `course_code`, `semister`, `t_id`, `role`) VALUES
(5, 'Database Management System', 'CSE-2201', 'ii', 2, 0),
(6, 'Assembly Language ', 'CSE-2202', 'ii', 1, 0),
(7, 'Math', 'Math-1101', 'i', 3, 0),
(8, 'Physics', 'PHY-1102', 'i', 4, 0),
(9, 'C++', 'CSE-2101', 'ii', 5, 0),
(10, 'Programming WIth C', 'CSE-1101', 'i', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `Name`, `designation`, `semester`, `email`, `password`, `date`, `status`) VALUES
(1, 'Subir Saha ', 'Assistant Professor', 'ii', 'subir@gmail.com', '123', '2019-02-14 13:44:04', 1),
(2, 'Mahmudul Hasan', 'lecturer', 'i', 'mmh@gmail.com', '123', '2019-02-15 00:23:10', 1),
(3, 'Khalid Hasan', 'Assistant Professor', 'i', 'khalid@gmail.com', '123', '2019-02-15 23:08:18', 0),
(4, 'Hasan Sazzad Iqbal', 'Assistant Professor', 'i', 'sazzad@gmail.com', '123', '2019-02-15 23:09:01', 0),
(5, 'Toukir Ahmed', 'lecturer', 'ii', 'toukir@gmail.com', '123', '2019-02-18 12:29:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `Teacher provided the course outline having weekly content plan w` enum('5','4','3','2','1') NOT NULL,
  `Course objectives,learning outcomes and grading criteria are cle` enum('5','4','3','2','1') NOT NULL,
  `Course integrates throretical course concepts with the real worl` enum('5','4','3','2','1') NOT NULL,
  `Teacher is punctual,arrives on time and leaves on time` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at stimulating the interest in the course conten` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at explaining the subject matter` enum('5','4','3','2','1') NOT NULL,
  `Teacher's presentation was clear,loud ad easy to understand` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at using innovative teaching methods/ways` enum('5','4','3','2','1') NOT NULL,
  `Teacher is available and helpful during counseling hours` enum('5','4','3','2','1') NOT NULL,
  `Teacher has competed the whole course as per course outline` enum('5','4','3','2','1') NOT NULL,
  `Teacher was always fair and impartial:` enum('5','4','3','2','1') NOT NULL,
  `Assessments conducted are clearly connected to maximize learinin` enum('5','4','3','2','1') NOT NULL,
  `What I liked about the course` text NOT NULL,
  `Why I disliked about the course` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `faculty_id`, `Teacher provided the course outline having weekly content plan w`, `Course objectives,learning outcomes and grading criteria are cle`, `Course integrates throretical course concepts with the real worl`, `Teacher is punctual,arrives on time and leaves on time`, `Teacher is good at stimulating the interest in the course conten`, `Teacher is good at explaining the subject matter`, `Teacher's presentation was clear,loud ad easy to understand`, `Teacher is good at using innovative teaching methods/ways`, `Teacher is available and helpful during counseling hours`, `Teacher has competed the whole course as per course outline`, `Teacher was always fair and impartial:`, `Assessments conducted are clearly connected to maximize learinin`, `What I liked about the course`, `Why I disliked about the course`, `date`) VALUES
(3, 'mahedy@gmail.com', 'Mahmudul Hasan', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '\r\nqw', '\r\nqerw', '2019-02-15'),
(4, 'mahedy@gmail.com', 'Subir Saha ', '5', '5', '5', '4', '4', '4', '4', '4', '4', '4', '5', '5', '\r\nwqrer', '\r\nwqr', '2019-02-15'),
(6, 'bashar@gmail.com', 'Khalid Hasan', '5', '5', '5', '4', '4', '4', '4', '5', '4', '4', '4', '4', '\r\nase', '\r\nwer', '2019-02-15'),
(7, 'rakib@gmail.com', 'Toukir Ahmed', '5', '5', '4', '2', '2', '2', '2', '2', '2', '4', '5', '5', '\r\nteaching', 'talking\r\n', '2019-02-18'),
(9, 'mahedy@gmail.com', 'Toukir Ahmed', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '4', '3', '\r\nafhhh', '\r\njkk', '2019-02-18'),
(10, 'asraful@gmail.com', 'Khalid Hasan', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'course details\r\n', 'increasing class\r\n', '2019-02-18'),
(11, 'arafat@gmail.com', 'Toukir Ahmed', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '\r\nGood Listening', '\r\nBad course', '2019-02-18'),
(12, 'ahsan@gmail.com', 'Mahmudul Hasan', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '\r\nGood  Work', '\r\nnone', '2019-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `notice_id` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`notice_id`, `attachment`, `subject`, `Description`, `Date`) VALUES
(8, 'AteekCV_java (1).docx', 'aaaaa', 'dfdfdfd', '2016-07-03 12:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `id` int(22) NOT NULL,
  `name` varchar(44) NOT NULL,
  `roll` varchar(44) NOT NULL,
  `semister` varchar(44) NOT NULL,
  `password` varchar(44) NOT NULL,
  `role` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `name`, `roll`, `semister`, `password`, `role`) VALUES
(1, 'Mahedy Hasan', '150101', 'i', '123', 0),
(2, 'Abu Raihan', '150146', 'ii', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `roll` varchar(44) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `semister` varchar(20) NOT NULL,
  `regid` varchar(20) NOT NULL,
  `status` int(22) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `roll`, `email`, `pass`, `semister`, `regid`, `status`) VALUES
(16, 'Mahedy Hasan', '150101', 'mahedy@gmail.com', '202cb962ac59075b964b07152d234b70', 'ii', '2019-02-14 12:26:24', 0),
(17, 'Arafat Islam', '150126', 'arafat@gmail.com', '202cb962ac59075b964b07152d234b70', 'i', '2019-02-18 11:27:29', 1),
(18, 'Asraful Islam', '150131', 'asraful@gmail.com', '202cb962ac59075b964b07152d234b70', 'i', '2019-02-18 11:39:01', 1),
(19, 'Rakib Hasan', '150144', 'rakib@gmail.com', '202cb962ac59075b964b07152d234b70', 'ii', '2019-02-18 12:26:32', 0),
(20, 'Ahsanul Haque', '150118', 'ahsan@gmail.com', '202cb962ac59075b964b07152d234b70', 'ii', '2019-02-18 13:47:24', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
