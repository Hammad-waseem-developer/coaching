-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 03:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knewton_coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `alumnai`
--

CREATE TABLE `alumnai` (
  `alumnai_id` int(11) NOT NULL,
  `alumnai_name` varchar(30) DEFAULT NULL,
  `field_id` int(11) DEFAULT NULL,
  `alumnai_achivement` varchar(50) DEFAULT NULL,
  `alumnai_qualification` varchar(50) DEFAULT NULL,
  `alumnai_image` varchar(50) DEFAULT NULL,
  `alumnai_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumnai`
--

INSERT INTO `alumnai` (`alumnai_id`, `alumnai_name`, `field_id`, `alumnai_achivement`, `alumnai_qualification`, `alumnai_image`, `alumnai_desc`) VALUES
(7, 'Shahzaib', 2, 'Course Complete', 'Inter', '47Ol2Cjh_image00070.jpeg', 'HE Complete from aptech'),
(10, 'farhan', 3, 'Course Complete', 'Inter', 'dwspgGNc_LogoMakr-3SlyoR.png', 'This is desc'),
(11, 'Muhammad Farhan', 8, 'highest postion in First year', 'Intermediate', 'Hhc63Oyt_IMG_1834.png', 'alumni description is greate');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `announcement_name` varchar(100) NOT NULL,
  `announcement_desc` varchar(500) NOT NULL,
  `announcement_date` date NOT NULL,
  `announcement_image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_name`, `announcement_desc`, `announcement_date`, `announcement_image`) VALUES
(6, 'Holiday', 'This is announcement', '2023-03-08', NULL),
(8, 'Eid Holiday', 'Eid Holiday for 6 Days', '2003-04-22', 'vXnvRpu3_Logo Main Dark.png');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(5, 'Four 5'),
(8, 'Six'),
(9, 'first year'),
(10, 'second year');

-- --------------------------------------------------------

--
-- Table structure for table `coaching`
--

CREATE TABLE `coaching` (
  `coaching_id` int(11) NOT NULL,
  `coaching_name` varchar(100) NOT NULL,
  `coaching_email` varchar(50) NOT NULL,
  `coaching_contact` varchar(20) NOT NULL,
  `coaching_web` varchar(50) NOT NULL,
  `coaching_address` varchar(200) NOT NULL,
  `coaching_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coaching`
--

INSERT INTO `coaching` (`coaching_id`, `coaching_name`, `coaching_email`, `coaching_contact`, `coaching_web`, `coaching_address`, `coaching_logo`) VALUES
(2, 'Knewton Coaching Center s', 'knewtoncoachingcenter@gmail.com', '03048855814', 'https://www.theproviderssolutions.com/', 'bhittai Colony Korangi Crossing Karachi', '8Uagk9sr_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE `faculity` (
  `faculity_id` int(11) NOT NULL,
  `faculity_name` varchar(30) NOT NULL,
  `faculity_contact` varchar(20) NOT NULL,
  `faculity_contact2` varchar(15) DEFAULT NULL,
  `faculity_address` varchar(200) DEFAULT NULL,
  `faculity_cnic` varchar(20) NOT NULL,
  `faculity_qualification` varchar(50) NOT NULL,
  `experience` int(11) NOT NULL,
  `faculity_gender` enum('M','F') NOT NULL,
  `faculity_joining` date NOT NULL,
  `faculity_field` int(11) NOT NULL,
  `faculity_image` varchar(250) DEFAULT NULL,
  `faculity_cv` varchar(250) DEFAULT NULL,
  `faculity_email` varchar(50) NOT NULL,
  `faculity_password` varchar(250) NOT NULL,
  `faculity_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`faculity_id`, `faculity_name`, `faculity_contact`, `faculity_contact2`, `faculity_address`, `faculity_cnic`, `faculity_qualification`, `experience`, `faculity_gender`, `faculity_joining`, `faculity_field`, `faculity_image`, `faculity_cv`, `faculity_email`, `faculity_password`, `faculity_status`) VALUES
(1, 'Muhammad Farhan', '03162859445', NULL, 'korangi crossing ', '909808234809', 'matric', 5, 'M', '2023-12-31', 8, NULL, NULL, 'farhan@gmail.com', 'eyJpdiI6IkN4RTFVa0dQYVptUW55Unc4ZXI5RlE9PSIsInZhbHVlIjoiSzBndTA5OExtNDdEVnJEWDZaQklZelBjRjNKZGVWYUhtMWcxRTVRNFJxUT0iLCJtYWMiOiJhZTU0MWQ2MjFmMzg5NDY4ZTQ0NzQ4MDdjZmZjMDczMDhhODFhZWM0OTgwODVmYzVhYmQ2N2YyNGIwZGE2OGMxIiwidGFnIjoiIn0=', 1),
(3, 'Muhammad Farhan', '03162859445', NULL, 'korangi crossing', '909808234809', 'matric', 5, 'M', '2023-12-31', 8, NULL, NULL, 'farhan@gmail.com', 'eyJpdiI6IlAwNzB1N202WjBLQ3dRN1dPU3NxaHc9PSIsInZhbHVlIjoibVVMU2h6WlpaYWdDYzA2Wm1ydEpjcjQwRm5ZdHV0OHhFRVQ4UDNkRFBNYz0iLCJtYWMiOiJmYTEzMTY5YmVhOTFkNGMwNWUzZmY3NTI5NTRiMGYwMWY2NjllYWExMWUyYzNiYjhkZmZmN2E2YTQ2YTE4MjVkIiwidGFnIjoiIn0=', 1);

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `field_id` int(11) NOT NULL,
  `field_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`field_id`, `field_name`) VALUES
(2, 'Commerce'),
(3, 'Arts 2'),
(8, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `session_name`) VALUES
(1, '2021-2022'),
(2, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_fname` varchar(30) NOT NULL,
  `student_contact` varchar(20) NOT NULL,
  `father_contact` varchar(20) NOT NULL,
  `student_cnic` varchar(15) NOT NULL,
  `f_occupation` varchar(50) DEFAULT NULL,
  `office_contact` varchar(20) DEFAULT NULL,
  `office_address` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `section` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = A , 2 = B , 3 = C , 4 = D , 5 = E',
  `class_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_status` tinyint(1) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_fname`, `student_contact`, `father_contact`, `student_cnic`, `f_occupation`, `office_contact`, `office_address`, `address`, `section`, `class_id`, `field_id`, `session_id`, `student_email`, `student_password`, `student_status`, `picture`, `role`) VALUES
(6, 'Muhammad Farhan syed', 'Muhammad Ramzan', '03162859445', '03162859445', '42501-9936391-3', 'teacher', '03162945899', 'Korangi Crossing karachi', 'House no L-388 Street no 10 Korangi Crossing Karachi', 1, 9, 8, 1, 'farhan@gmail.com', 'eyJpdiI6Im8rdlQ5ajlKTklGUHFwN2dhT0FMc1E9PSIsInZhbHVlIjoiQlpZaVljQ21Kb0xRaGZSd0U0OS8vdz09IiwibWFjIjoiNDU0YWFjZWNjZjE2NDYyYjA3YmQ0NjVkNDcwYWFhNzE3NjY3ZWM5NjkwMmI3NGM5MDA3NmYzMTM3OWVjZTY0MiIsInRhZyI6IiJ9', 1, 'JsnloL1w_Logo Main Dark.png', 0),
(7, 'Ali raza', 'askskd', '03162859445', '03162859445', '42501-9936391-3', 'teacher', '03162945899', 'Korangi Crossing karachi', 'dkflsdk fs', 1, 9, 8, 1, 'ali@gmail.com', 'eyJpdiI6Ik9uVWdZR0d5S3F0dFR2ODByT3FWa3c9PSIsInZhbHVlIjoib3BEQkIwQUU5TTNyOVVXbnEvbnpqZz09IiwibWFjIjoiMmY2ZDgxOGY3OGRmY2E4NWRjZGE4MDFiNmFjODY0OWExM2E1NTNlNGUyNDYzYzVkNTYwZWJmMWE2NmM0MzgyZSIsInRhZyI6IiJ9', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

CREATE TABLE `student_test` (
  `studenttest_id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `test_id` int(30) NOT NULL,
  `obtain_marks` bigint(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_test`
--

INSERT INTO `student_test` (`studenttest_id`, `student_id`, `test_id`, `obtain_marks`, `status`, `date`) VALUES
(6, 6, 2, 20, 1, '2023-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(2, 'English'),
(3, 'Urdu'),
(9, 'Math 2');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_title` varchar(30) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `test_marks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_title`, `subject_id`, `test_marks`) VALUES
(1, 'urdu test', 3, '25'),
(2, 'physics test', 9, '50');

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

CREATE TABLE `user_models` (
  `userID` bigint(30) NOT NULL,
  `username` varchar(150) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_models`
--

INSERT INTO `user_models` (`userID`, `username`, `useremail`, `userpassword`) VALUES
(1, 'shahzaibikram', 'shahzaibikram563@gmail.com', 'simba'),
(2, 'fabiha44', 'ftariq524@gmail.com', 'fabiha44'),
(3, 'farhan', 'muhammadfarha44500@gmail.com', 'farhan@9090');

-- --------------------------------------------------------

--
-- Table structure for table `user_msg`
--

CREATE TABLE `user_msg` (
  `msg_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_date` date NOT NULL,
  `user_message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_msg`
--

INSERT INTO `user_msg` (`msg_id`, `user_name`, `user_contact`, `user_email`, `user_date`, `user_message`) VALUES
(2, 'Fabiha', '03302838962', 'missfabiha04@gmail.com', '2023-04-02', 'My name is Fabiha!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `alumnai`
--
ALTER TABLE `alumnai`
  ADD PRIMARY KEY (`alumnai_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `coaching`
--
ALTER TABLE `coaching`
  ADD PRIMARY KEY (`coaching_id`);

--
-- Indexes for table `faculity`
--
ALTER TABLE `faculity`
  ADD PRIMARY KEY (`faculity_id`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `field_id` (`field_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `student_test`
--
ALTER TABLE `student_test`
  ADD PRIMARY KEY (`studenttest_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- Indexes for table `user_msg`
--
ALTER TABLE `user_msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumnai`
--
ALTER TABLE `alumnai`
  MODIFY `alumnai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coaching`
--
ALTER TABLE `coaching`
  MODIFY `coaching_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculity`
--
ALTER TABLE `faculity`
  MODIFY `faculity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_test`
--
ALTER TABLE `student_test`
  MODIFY `studenttest_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_models`
--
ALTER TABLE `user_models`
  MODIFY `userID` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_msg`
--
ALTER TABLE `user_msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnai`
--
ALTER TABLE `alumnai`
  ADD CONSTRAINT `alumnai_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`session_id`) REFERENCES `session` (`session_id`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
