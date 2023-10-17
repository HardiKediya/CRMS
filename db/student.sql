-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 05:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` int(255) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentEmail` varchar(100) NOT NULL,
  `studentPassword` varchar(100) NOT NULL,
  `studentPhone` varchar(100) NOT NULL,
  `studentAddress` varchar(200) NOT NULL,
  `studentProfilepicture` varchar(100) NOT NULL,
  `studentCollagename` varchar(100) NOT NULL,
  `studentBranch` varchar(100) NOT NULL,
  `studentCurrentsemester` int(10) NOT NULL,
  `studentCGPA` varchar(100) NOT NULL,
  `10th_Percentage` varchar(100) NOT NULL,
  `12th_Percentage` varchar(100) NOT NULL,
  `studentStartingyear` int(10) NOT NULL,
  `studentEndingyear` int(10) NOT NULL,
  `studentResume` varchar(100) NOT NULL,
  `lastLogin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `studentName`, `studentEmail`, `studentPassword`, `studentPhone`, `studentAddress`, `studentProfilepicture`, `studentCollagename`, `studentBranch`, `studentCurrentsemester`, `studentCGPA`, `10th_Percentage`, `12th_Percentage`, `studentStartingyear`, `studentEndingyear`, `studentResume`, `lastLogin`) VALUES
(1, 'PARTH PATEL', 'parthpatel20@gnu.ac.in', 'pp', '9662998831', 'abc', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 8, '8', '55', '99', 2019, 2023, 'NA', 'NA'),
(2, 'Aayush Shah', 'aayushshah20@gnu.ac.in', 'aa', '9123456789', 'KALOL', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 8, '8', '99', '99', 2020, 2023, 'NA', 'NA'),
(3, 'Hardi Kediya', 'hardikediya@gmail.com', 'hh', '9123456781', 'DEESA', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 8, '8', '100', '100', 2020, 2023, 'NA', 'NA'),
(4, 'Anshuya Gandhi', 'anshuyagandhi@gmail.com', 'aa', '8123456789', 'RAJASTHAN', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'CE', 8, '8', '99', '99', 2020, 2023, 'NA', 'NA'),
(5, 'Akshat Modi', 'akshatmodi@gmail.com', 'aa', '9123456788', 'MEHSANA', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'CE', 8, '9', '99', '99', 2020, 2023, 'NA', 'NA'),
(6, 'Manan Patel', 'mananpatel@gmail.com', 'mm', '9123456789', 'NASIK', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 8, '8', '99', '99', 2020, 2023, 'NA', 'NA'),
(7, 'Daxesh Patel', 'daxeshpatel@gmail.com', 'dd', '9123456789', 'PANCHOT', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'CE', 8, '10', '99', '99', 2023, 2026, 'NA', 'NA'),
(8, 'Nisarg Patel', 'nisargpatel@gmail.com', 'nn', '9876543216', 'abc', '../../student/ProfilePicture/admin icon.png', 'U. V. Patel Collage of Engineering ', 'IT', 8, '8', '99', '99', 2020, 2023, 'NA', 'NA'),
(9, 'Aashu Patel', 'aashupatel@gmail.com', 'aa', '11111111', 'vapi', '../../student/ProfilePicture/admin icon.png', 'U. V. Patel Collage of Engineering ', 'IT', 8, '8', '99', '99', 2019, 2023, 'NA', 'NA'),
(12, 'Akshar Patel', 'aksharpatel@gnu.ac.in', 'aa', '11111111', 'ABC', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'B.S.C', 8, '9', '99', '99', 2023, 2023, 'NA', 'NA'),
(15, 'Ratnesh', 'ratnesh@gmail.com', 'RRR', '9876543210', '', '../../student/ProfilePicture/admin icon.png', 'U V P C E', 'CE', 3, '7', '', '99', 2020, 2023, 'NA', 'NA'),
(56, 'Bharrgav Chauhan', 'bhargav@gmail.com', 'bb', '9876541230', 'rajkot', '../../student/ProfilePicture/admin icon.png', 'RK UNIVERSITY', 'CE', 8, '7', '79', '88', 2020, 2023, 'NA', 'NA'),
(8989, 'NGENGRJNER', 'abc@gmail.com', 'jknfkf', '9090909', 'jfnjf', 'na', 'nfernfr', 'it', 8, '9', '99', '99', 2020, 2023, 'na', 'na'),
(9999, 'jidifidj', 'abc@gmail.com', 'fdnsif', '099088', 'jfdgjinfgjn', 'na', 'nksnff', 'njcbfb', 8, '8', '77', '77', 2023, 2023, 'NA', 'NA'),
(77777, 'abc', 'abc1234@gmail.com', 'kdfsui', '8574668', 'sgfggfrgr', 'na', 'uvpce', 'it', 8, '8', '99', '99', 2020, 2023, 'na', 'na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
