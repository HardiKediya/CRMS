-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 08:35 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adminpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminEmail`, `password`, `adminpic`) VALUES
(1, 'Parth Patel', 'parthpatel20@gnu.ac.in', 'ppp', 'parth.jpeg'),
(2, 'Aayush Shah', 'aayushshah8980@gmail.com', 'aa', 'aayush.jpeg'),
(3, 'Hardi kediya', 'hardikediya@gmail.com', 'hh', 'hardi.jpeg'),
(4, 'Anshuya Gandhi', 'gandhianshu1999@gmail.com', 'aa', 'anshu.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_no` int(100) NOT NULL,
  `studentId` int(100) NOT NULL,
  `jobId` int(100) NOT NULL,
  `applyedDate` varchar(100) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_no`, `studentId`, `jobId`, `applyedDate`, `studentName`, `studentEmail`) VALUES
(2, 1, 2, '04-04-2023', 'Parth Patel', 'parthpatel20@gnu.ac.in'),
(3, 1, 3, '04-04-2023', 'Parth Patel', 'parthpatel20@gnu.ac.in'),
(4, 1, 1, '04-04-2023', 'Parth Patel', 'parthpatel20@gnu.ac.in'),
(5, 1, 10, '04-04-2023', 'Parth Patel', 'parthpatel20@gnu.ac.in'),
(6, 1, 9, '06-04-2023', 'Parth Patel', 'parthpatel20@gnu.ac.in'),
(7, 2, 1, '07-04-2023', 'Aayush Shah', 'aayushshah20@gnu.ac.in'),
(8, 4, 2, '08-04-2023', 'Anshuya Gandhi', 'anshuyagandhi@gmail.com'),
(9, 45345, 2, '11-04-2023', 'aayush shah', 'aayushshah8980@gmail.com'),
(10, 1235898, 9, '13-04-2023', 'harsh', 'adarshpatel19@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(100) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`, `categoryDescription`) VALUES
(1, 'Android', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackform`
--

CREATE TABLE `feedbackform` (
  `no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbackform`
--

INSERT INTO `feedbackform` (`no`, `name`, `email`, `message`) VALUES
(1, 'Aayush', 'Aayush@gmail.com', 'nice website '),
(2, 'Parth', 'Parth@gmail.com', ' I am truly impressed with how you have managed to meet every goal set before you.'),
(3, 'Hardi', 'Hardi@gmail.com', 'I admire your dedication and believe you have a bright future ahead of you.'),
(4, 'Anshuya', 'anshuya@gmail.com', 'nice website, many new features like live chting,filter.'),
(5, 'Bhargav', 'bhargav@gmail.com', 'ek dum mast website che '),
(16, 'ravi', 'ravi@g', 'nice'),
(18, 'Aashu', 'aashupatel19@gnu.ac.in', 'nice website, many new features like live chating,filter.'),
(26, 'Ambari ', 'dept@gmail.com', '213fdsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `tran_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobId` int(100) NOT NULL,
  `recruiterId` int(100) NOT NULL,
  `jobTitle` varchar(100) NOT NULL,
  `jobType` varchar(100) NOT NULL,
  `jobMode` varchar(100) NOT NULL,
  `jobCategory` varchar(255) NOT NULL,
  `stipend` varchar(255) NOT NULL,
  `jobSalary` varchar(255) NOT NULL,
  `lastdate` varchar(255) NOT NULL,
  `jobLocation` varchar(100) NOT NULL,
  `jobVacancy` varchar(100) NOT NULL,
  `jobExperience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `recruiterId`, `jobTitle`, `jobType`, `jobMode`, `jobCategory`, `stipend`, `jobSalary`, `lastdate`, `jobLocation`, `jobVacancy`, `jobExperience`) VALUES
(1, 1, 'Advance Java', 'Only Internship', 'office', 'IT coordinator', '6', '7', '10-05-2023', 'Gandhinagr', '10', 'Fresher'),
(2, 1, 'PHP backend Developer', 'Only Job', 'Work from home', 'software development', '6', '7', '20-04-2023', 'Gandhinagr', '8', 'Fresher'),
(3, 1, 'Python developer', 'ij', 'office', 'software developer', '67', '5000', '05-05-2023', 'surat', '7', 'Fresher'),
(9, 2, 'Java Developer', 'ij', 'Work From Home', 'IT coordinator', '2000', '5555', '10-05-2023', 'Ahmedabad', '5', '1-2 year Experiences'),
(10, 2, 'Android Backend Developer', 'Only internship', 'Office', 'IT coordinator', '2000', '5', '21-04-2023', 'Ahmedabad', '55', 'Fresher'),
(16, 4, 'Quality Testing', 'ij', 'Office', 'Data quality manager', '1000', '5', '07-04-2023', 'Ahmedabad', '5', 'Fresher'),
(18, 7, 'UIUX', 'ij', 'Work From Home', 'Computer systems manager', '5000', '4', '18-04-2023', 'Gandhinagr', '5', 'Fresher'),
(19, 1, 'Software testing ', 'internship-job', 'Work From Home', 'Software quality assurance analyst', '2000', '5000', '09-04-2023', 'Ahmedabad', '5', 'Fresher');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `recruiterId` int(100) NOT NULL,
  `recruiterName` varchar(100) NOT NULL,
  `recruiterEmail` varchar(100) NOT NULL,
  `recruiterPassword` varchar(100) NOT NULL,
  `recruiterPhone` varchar(255) NOT NULL,
  `recruiterProfilepic` varchar(100) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyLogo` varchar(100) NOT NULL,
  `companyDescription` varchar(100) NOT NULL,
  `companyEmail` varchar(100) NOT NULL,
  `companyWebsite` varchar(100) NOT NULL,
  `companyLocation` varchar(100) NOT NULL,
  `companyAddress` varchar(100) NOT NULL,
  `accountStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`recruiterId`, `recruiterName`, `recruiterEmail`, `recruiterPassword`, `recruiterPhone`, `recruiterProfilepic`, `companyName`, `companyLogo`, `companyDescription`, `companyEmail`, `companyWebsite`, `companyLocation`, `companyAddress`, `accountStatus`) VALUES
(1, 'Parth Patel', 'parthpatel20@gnu.ac.in', 'pp', '1234567890', 'parth.jpeg', 'Trend Micro', '6907830.png', 'abc', 'trandmicro@gmail.com', 'https://www.trendmicro.com/', 'Ahmedabad', 'abc', 'blocked'),
(2, 'Aayush Shah', 'aayushshah@gmail.com', 'aa', '134567890', 'aayush.jpeg', 'Infosys', 'infosys.png', 'abc', 'infosys@gmail.com', 'https://www.infosys.com/', 'Ahemdabad', 'Ahemdabad', 'active'),
(4, 'Anshuya Gandhi', 'anshuyagandhi@gmail.com', 'aa', '1234567980', 'anshu.jpg', 'TCS', 'tcs.png', 'abc', 'tcs@gmail.com', 'https://www.tcs.com/', 'Mehsana', 'Mehsana', 'deleted'),
(5, 'Parth  Patel', 'dept@gmail.com', 'dept@gmail.com', '9876543211', '9306703.png', 'bisag', '43135.png', 'abc', 'bisag123@gmail.com', 'bisag', 'Gandhinagr', 'abc', 'blocked'),
(6, 'hardi Kediya', 'hardikediya@gmail.com', 'hh', '9876543211', '1148423.jpeg', 'bisag', '5396569.png', 'dsad', 'bisag@gmail.com', 'dsads', 'Ahmedabad', 'dsads', 'active'),
(7, 'Hardi Khatri', 'hardikhatri@gmail.com', '789', '9979516069', '6382123.jpeg', 'bisag-n', '1284107.png', 'efby', 'sidd@gmail.com', 'https://www.trendmicro.com/', 'mumbai', 'mumbai', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleId` int(100) NOT NULL,
  `jobId` int(100) NOT NULL,
  `scheduleCreateddate` int(100) NOT NULL,
  `scheduleTitle` varchar(100) NOT NULL,
  `scheduleDecription` varchar(100) NOT NULL,
  `schedulePlacementdate` int(100) NOT NULL,
  `scheduleStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Parth Patel', 'parthpatel20@gnu.ac.in', 'pp', '9662998831', 'abc', '5210684.jpeg', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 8, '8', '55', '55', 2019, 2022, 'PARTH\'s Resume.pdf', '20-04-2023'),
(2, 'Aayush Shah', 'aayushshah20@gnu.ac.in', 'aa', '9123456789', 'KALOL', '3410372.jpeg', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 8, '8', '99', '99', 2020, 2023, 'PARTH\'s Resume.pdf', '08-04-2023'),
(3, 'Hardi Kediya', 'hardikediya@gmail.com', 'hh', '9123456781', 'DEESA', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 8, '8', '100', '100', 2020, 2023, 'NA', 'NA'),
(4, 'Anshuya Gandhi', 'anshuyagandhi@gmail.com', 'aa', '8123456789', 'RAJASTHAN', '1078503.jpg', 'U. V. PATEL COLLAGE OF ENGINEERING', 'CE', 8, '8', '99', '99', 2020, 2023, '1075801.pdf', '08-04-2023'),
(5, 'Akshat Modi', 'akshatmodi@gmail.com', 'aa', '9123456788', 'MEHSANA', '6696764.jpeg', 'U. V. PATEL COLLAGE OF ENGINEERING', 'CE', 8, '9', '99', '99', 2020, 2023, '6724469.pdf', '08-04-2023'),
(122, 'abc', 'hardikediya1@gmail.com', '123', '9876543211', 'abc', '../../student/ProfilePicture/admin icon.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'IT', 7, '8', '99', '99.88', 2023, 2025, 'NA', 'NA'),
(2001, 'Parth patel', 'parthkumar8227@gmail.com', 'Parth@123', '9876543121', 'abc', '2943831.jpeg', 'U. V. PATEL COLLAGE OF ENGINEERING', 'CE', 7, '9', '87', '98', 2020, 2023, '6857466.pdf', '15-04-2023'),
(45345, 'aayush shah', 'aayushshah8980@gmail.com', 'Parth@123', '9876543211', 'fgdfgdf', '4357898.png', 'U. V. PATEL COLLAGE OF ENGINEERING', 'CIVIL', 7, '7', '77', '77', 2020, 2023, '1725707.pdf', '11-04-2023'),
(1235898, 'harsh', 'adarshpatel19@gmail.com', 'Aa@123456789', '9876541110', 'sdsdsd', '573619.png', 'asas', 'BSC', 7, '12', '12', '12', 2018, 2022, '1551377.pdf', '13-04-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `adminName` (`adminName`),
  ADD UNIQUE KEY `adminEmail` (`adminEmail`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_no`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `feedbackform`
--
ALTER TABLE `feedbackform`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`tran_no`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`recruiterId`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedbackform`
--
ALTER TABLE `feedbackform`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `recruiterId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
