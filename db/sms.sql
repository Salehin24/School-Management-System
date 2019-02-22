-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 07:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-03-08 19:46:00'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-03-08 19:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_name` text NOT NULL,
  `class_name` text NOT NULL,
  `atten` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `message`, `insert_time`) VALUES
(1, 'mahbub', 'mahbubalum.talukder@gmail.com', ' this is cheek message', '2018-03-29 04:21:11'),
(2, 'mahbub', 'mahbubalum.talukder@gmail.com', ' this is cheek message', '2018-03-29 04:21:18'),
(3, 'babor', 'mahbubalum.talukder@gmail.com', ' this is msg chhek', '2018-03-29 04:22:34'),
(4, 'babor', 'mahbubalum.talukder@gmail.com', ' this is msg chhek', '2018-03-29 04:25:19'),
(5, 'babor', 'mahbubalum.talukder@gmail.com', ' this is msg chhek', '2018-03-29 04:26:27'),
(6, 'mahbubm', 'mahbubalum.talukder@gmail.com', ' this is a chhek', '2018-03-29 04:26:48'),
(7, 'mahbubm', 'mahbubalum.talukder@gmail.com', ' this is a chhek', '2018-03-29 04:27:12'),
(8, 'mahbub', 'mahbubalum.talukder@gmail.com', ' asdfdasf', '2018-03-29 04:27:40'),
(9, 'mahbub', 'mahbubalum.talukder@gmail.com', ' asdfdasf', '2018-03-29 04:28:11'),
(10, 'mahbub', 'mahbubalum.talukder@gmail.com', ' asdfdasf', '2018-03-29 04:29:10'),
(11, 'mahbub', 'mahbubalum.talukder@gmail.com', ' asdfdasf', '2018-03-29 04:29:28'),
(12, 'mahbub', 'mahbubalum.talukder@gmail.com', ' asdfdasf', '2018-03-29 04:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `hmsg`
--

CREATE TABLE `hmsg` (
  `id` int(6) UNSIGNED NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hmsg`
--

INSERT INTO `hmsg` (`id`, `msg`, `time`) VALUES
(1, 'my name is khan', '2018-03-27 16:34:55'),
(30, ' amar somnar', '2018-03-28 06:06:53'),
(31, ' ooooo', '2018-03-28 06:10:57'),
(32, ' ooooo', '2018-03-28 06:13:17'),
(33, ' ooooo', '2018-03-28 06:14:40'),
(34, ' ooooo', '2018-03-28 06:15:01'),
(35, ' adsfjajskdf', '2018-03-28 06:15:13'),
(36, ' amar sonar bangla ami tomai valobashi', '2018-03-28 08:01:36'),
(37, ' amar sonar bangla ami tomai valobashi', '2018-03-28 08:18:17'),
(38, ' amar sonar bangla ami tomai valobashi', '2018-03-28 08:18:33'),
(39, ' ', '2018-03-28 08:28:10'),
(40, ' ', '2018-03-28 08:28:11'),
(41, ' ', '2018-03-28 08:28:11'),
(42, ' ', '2018-03-28 08:28:11'),
(43, ' ', '2018-03-28 08:28:12'),
(44, ' amar bangladesh sobuj semoli desh', '2018-03-28 08:29:38'),
(45, ' amar bangladesh sobuj semoli desh', '2018-03-28 08:30:23'),
(49, '**Admission going on 24/05/18***', '2018-03-28 15:45:51'),
(50, '**Admission going on 24/05/18***', '2018-03-28 15:45:55'),
(51, '**Admission going on 24/05/18***', '2018-03-28 15:46:04'),
(52, '*** H.S.C Exam start from 02-04-18 to 03-03-18.***', '2018-03-28 15:47:56'),
(53, '*** H.S.C Exam start from 02-04-18 to 03-03-18.***', '2018-03-28 15:48:00'),
(54, 'Admission going on ', '2018-03-28 15:51:03'),
(55, 'Admission going on ', '2018-03-28 15:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `letestnews`
--

CREATE TABLE `letestnews` (
  `id` int(11) NOT NULL,
  `news` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letestnews`
--

INSERT INTO `letestnews` (`id`, `news`, `time`) VALUES
(1, 'ajfdasf', '2018-03-28 06:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Six', 6, 'C', '2018-03-08 20:07:46', '2018-03-08 20:12:57'),
(2, 'Six', 6, 'A', '2018-03-08 20:08:33', '0000-00-00 00:00:00'),
(3, 'Seven', 7, 'A', '2018-03-08 20:08:48', '0000-00-00 00:00:00'),
(4, 'Eight', 8, 'A', '2018-03-08 20:09:02', '0000-00-00 00:00:00'),
(5, 'Nine', 9, 'A', '2018-03-08 20:09:13', '0000-00-00 00:00:00'),
(6, 'Ten', 10, 'A', '2018-03-08 20:09:23', '0000-00-00 00:00:00'),
(7, 'Six', 6, 'B', '2018-03-08 20:09:32', '0000-00-00 00:00:00'),
(8, 'Seven', 7, 'B', '2018-03-08 20:09:39', '0000-00-00 00:00:00'),
(9, 'Eight', 8, 'B', '2018-03-08 20:09:48', '0000-00-00 00:00:00'),
(10, 'Nine', 9, 'B', '2018-03-08 20:09:54', '0000-00-00 00:00:00'),
(11, 'Ten', 10, 'B', '2018-03-08 20:10:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(1, 1, 6, 1, 95, '2018-03-08 20:17:48', NULL),
(2, 1, 6, 2, 90, '2018-03-08 20:17:48', NULL),
(3, 1, 6, 4, 98, '2018-03-08 20:17:48', NULL),
(4, 1, 6, 3, 95, '2018-03-08 20:17:48', NULL),
(5, 2, 11, 1, 87, '2018-03-08 20:18:18', NULL),
(6, 2, 11, 2, 85, '2018-03-08 20:18:18', NULL),
(7, 2, 11, 6, 12, '2018-03-08 20:18:18', NULL),
(8, 2, 11, 4, 60, '2018-03-08 20:18:18', NULL),
(9, 2, 11, 3, 90, '2018-03-08 20:18:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Mohammad Mahbub Talukder', '863508', 'mahbubalum.talukder@gmail.com', 'Male', '1996-12-27', 6, '2018-03-08 20:14:04', NULL, 1),
(2, 'Rashid', '863510', 'rashid@gmail.com', 'Male', '1997-10-10', 11, '2018-03-08 20:14:54', NULL, 1),
(3, 'imtiaj', '01', 'imtiaj@gmail.com', 'Male', '1993-03-06', 2, '2018-03-28 16:24:56', NULL, 1),
(4, 'subra ', '02', 'subra@gmail.com', 'Male', '1995-03-02', 1, '2018-03-28 16:25:38', NULL, 1),
(5, 'Ani', '03', 'ani@gmail.com', 'Male', '1993-01-01', 3, '2018-03-28 16:26:13', NULL, 1),
(6, 'jonaki', '04', 'jonaki@gmail.com', 'Male', '1997-01-02', 4, '2018-03-28 16:26:55', NULL, 1),
(7, 'mim', '05', 'mim@gmail.com', 'Male', '1994-03-03', 5, '2018-03-28 16:27:29', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(1, 6, 1, 1, '2018-03-08 20:16:02', '2018-03-08 20:16:02'),
(2, 6, 2, 1, '2018-03-08 20:16:10', '2018-03-08 20:16:10'),
(3, 6, 3, 1, '2018-03-08 20:16:16', '2018-03-08 20:16:16'),
(4, 6, 4, 1, '2018-03-08 20:16:25', '2018-03-08 20:16:25'),
(5, 11, 1, 1, '2018-03-08 20:16:32', '2018-03-08 20:16:32'),
(6, 11, 2, 1, '2018-03-08 20:16:38', '2018-03-08 20:16:38'),
(7, 11, 3, 1, '2018-03-08 20:16:47', '2018-03-08 20:16:47'),
(8, 11, 4, 1, '2018-03-08 20:16:52', '2018-03-08 20:16:52'),
(9, 11, 6, 1, '2018-03-08 20:16:59', '2018-03-08 20:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Bangla', '101', '2018-03-08 20:10:21', '0000-00-00 00:00:00'),
(2, 'English', '107', '2018-03-08 20:10:30', '0000-00-00 00:00:00'),
(3, 'Mathmetics', '109', '2018-03-08 20:10:45', '0000-00-00 00:00:00'),
(4, 'ICT', '275', '2018-03-08 20:10:54', '0000-00-00 00:00:00'),
(5, 'Social Science', '127', '2018-03-08 20:11:20', '0000-00-00 00:00:00'),
(6, 'General sceince', '129', '2018-03-08 20:12:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `roll` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`, `student_name`, `class`, `roll`) VALUES
(1, 'mahbub', 'mahbubalum.talukder@gmail.com', '$2y$10$XOPUo378muc6j.vwtLqZXOmgxEF9iKROGtGR/hFBOJmX3lOJexFAi', '', '', 0),
(2, 'Imtiaz', 'imtiaz@gmail.com', '$2y$10$RWcBp6kOPZM/Oz.dh0TIzO3kPYLjPuHroH7oQzNs7Mvr4OxtauCLG', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmsg`
--
ALTER TABLE `hmsg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letestnews`
--
ALTER TABLE `letestnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hmsg`
--
ALTER TABLE `hmsg`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `letestnews`
--
ALTER TABLE `letestnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
