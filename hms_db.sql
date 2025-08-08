-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 09:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `joining_date` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `role` varchar(50) NOT NULL COMMENT '1=Admin',
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `first_name`, `last_name`, `username`, `emailid`, `password`, `dob`, `gender`, `address`, `employee_id`, `joining_date`, `phone`, `role`, `status`, `created_at`) VALUES
(11, 'Md', 'Asif', 'asif', 'asif@gmail.com', '$2y$10$x9iih.K6Kg3sYUZrcpLhX.Zae/r65LPIDCnWePrz4WiD1JCmETwHq', '16/02/2000', 'Male', 'abcd', '1001', '15/11/2023', '0767657656', '1', 1, '2023-11-15 15:22:15'),
(15, 'Md', 'Shamim', 'shamim', 'shami@gmail.com', '$2y$10$1mm7EhUXxQlrHnVJdq9qReXr/anTcYOHN06LHoSQidsGmH.gF/xNS', '27/08/2002', 'Male', 'Abc, Dhaka', '1002', '15/11/2023', '0675765654', '1', 1, '2023-11-16 07:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(11) NOT NULL,
  `appointment_id` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `doctor` varchar(250) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `appointment_id`, `first_name`, `last_name`, `department`, `doctor`, `mobile`, `e_mail`, `date`, `time`, `message`, `status`, `created_at`) VALUES
(1, 'APT-1', 'Abdulla', 'Sagor', 'Dentists', 'Dr. Shamim Ahamed', '01366253625', 'sbdulla@gmail.com', '30/11/2023', '4:50 PM', 'Appointment fix with paul smith', 1, '2023-11-19 07:49:02'),
(3, 'APT-3', 'Md', 'Piash', 'Dentists', 'Dr. Kadambini Ganguly', '01635543654', 'kamrul@gmail.com', '09/11/2023', '5:50 PM', 'This is a problem', 1, '2023-11-19 07:49:28'),
(4, 'APT-4', 'Sagor', 'Khan', 'ENT', 'Dr. Naiem Hossen', '01235432345', 'sagor@gmail.com', '25/11/2023', '12:10 PM', 'Problem', 0, '2023-11-19 07:50:19'),
(5, 'APT-5', 'Asif', 'Islam', 'ENT', 'Dr. Naiem Hossen', '01235432345', 'asif@gmail.com', '25/11/2023', '12:10 PM', 'Problem', 0, '2023-11-19 07:50:55'),
(6, 'APT-6', 'Md', 'Bijoy', 'Neurology', 'Dr. Shamim Ahamed', '01876546765', 'bijoy@gmail.com', '17/11/2023', '4:10 PM', 'Problem', 1, '2023-11-19 07:52:01'),
(7, 'APT-7', 'Md ', 'Epaz', 'Dentists', 'Dr. Naiem Hossen', '01432345676', 'epaz@gmail.com', '21/11/2023', '3:30 PM', 'Problem', 1, '2023-11-19 07:44:25'),
(8, 'APT-8', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:17:33'),
(9, 'APT-9', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:24:23'),
(10, 'APT-10', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:28:12'),
(11, 'APT-11', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:30:20'),
(12, 'APT-12', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:30:33'),
(13, 'APT-13', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:31:01'),
(14, 'APT-14', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:32:31'),
(15, 'APT-15', 'Md', 'Emon', 'Dentists', 'Dr. Naiem Hossen', '01832783874', 'emon@gmail.com', '25/11/2023', '5:50 PM', 'tjrehtjkw', 0, '2023-11-21 19:33:12'),
(16, 'APT-16', 'Md ', 'Abcd', 'Opthalmology', 'Dr. Shamim Ahamed', '04872478342', 'da@gmail.com', '10/11/2023', '4:00 PM', 'fsjfb jfsjhf hjfsdh shd jhhg', 0, '2023-11-21 20:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `e_mail` varchar(60) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=Replay, 0=Not Replay',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `e_mail`, `phone`, `subject`, `message`, `status`, `created_at`) VALUES
(1, 'Md Shakil', 'shakil@gmail.com', '04287468723', 'ABC ED', 'This is a long message', 1, '2023-11-22 20:02:40'),
(2, 'Shamim Hassan', 'shamim@gmail.com', '01236562562', 'ABC Probleam', 'This is a another message ', 1, '2023-11-22 20:06:18'),
(4, 'Sandra Bullock', 'sandra@gmail.com', '04387843724', 'MNB KJ', 'This is a message from Sandra Bullock', 0, '2023-11-22 20:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `department_name`, `description`, `status`, `created_at`) VALUES
(1, 'Dentists', 'Dentists', 1, '2023-05-05 16:50:33'),
(2, 'Neurology', 'Neurology', 1, '2023-05-05 16:50:49'),
(3, 'Opthalmology', 'Opthalmology', 1, '2023-11-15 14:45:38'),
(4, 'ENT', 'ENT', 1, '2023-05-05 18:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `bio` text NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `joining_date` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `role` varchar(50) NOT NULL COMMENT '2=Doctor, 3=Nurse, 4=Accountant',
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `first_name`, `last_name`, `username`, `emailid`, `password`, `dob`, `gender`, `address`, `bio`, `employee_id`, `joining_date`, `phone`, `role`, `status`, `created_at`) VALUES
(7, 'Jane', 'Smith', 'jane', 'jane@hms.com', 'Jane@123#$', '07/03/1990', 'Male', 'Cumilla', 'BSN', '40002', '04/05/2023', '9876543210', '3', 1, '2023-11-11 15:20:21'),
(8, 'Jyoti', 'Batra', 'jyoti', 'jyoti@xyz.com', 'Jyoti@123#$', '24/08/1988', 'Male', 'USA', 'BA', '10001', '03/05/2023', '9876543210', '4', 1, '2023-11-11 15:27:46'),
(10, 'Dr. Naiem', 'Hossen', 'naiem', 'naiem@gmail.com', 'naiem12ER', '23/10/2000', 'Male', 'Saver, Dhaka', 'MBBS', '22233', '09/01/2023', '8767576576', '2', 1, '2023-11-17 12:59:46'),
(11, 'Dr. Shamim', 'Ahamed', 'shamim', 'shamim@gmail.com', 'djhJ76$hJJ', '19/11/2001', 'Male', 'Ashulia, Dhaka', 'MBBS,MD', '22234', '07/11/2023', '0767362232', '2', 1, '2023-11-11 15:09:18'),
(12, 'Dr. Kadambini', 'Ganguly', 'kadambini', 'kadambini@gmail.com', 'djjhJH67#$h', '23/05/2003', 'Female', 'Dhaka', 'MBBS', '22235', '01/11/2023', '047267232', '2', 1, '2023-11-11 15:14:08'),
(13, 'Abdulla', 'Jaber', 'jaber', 'jaber@gmail.com', 'djhjJH&%#33', '19/09/2000', 'Male', 'Rajshahi', 'BSN', '40001', '02/08/2023', '07868376', '3', 1, '2023-11-15 15:44:03'),
(14, 'Epe', 'Khan', 'epe', 'epe@gmail.com', 'djhJHJ&67', '10/07/2002', 'Female', 'Joser', 'BSN', '40003', '01/11/2023', '047287786', '3', 1, '2023-11-11 15:22:53'),
(15, 'Eakra', 'Akter', 'eakra', 'eakra@gmail.com', 'dhjJH6&%', '23/05/2002', 'Female', 'Dhaka', 'BSN', '40004', '03/11/2023', '037286232', '3', 1, '2023-11-11 15:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `patient_type` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `first_name`, `last_name`, `email`, `dob`, `gender`, `patient_type`, `address`, `phone`, `status`, `created_at`) VALUES
(2, 'Sachin', 'Kumar', 'sachin@gmail.com', '09/03/1988', 'Male', 'InPatient', 'USA', '1234567890', 1, '2023-11-09 16:30:13'),
(5, 'Sagor', 'Khan', 'sagor@gmail.com', '04/06/2018', 'Male', 'OutPatient', 'Saver, Dhaka', '4245234534', 1, '2023-11-11 15:55:24'),
(6, 'Kamrul', 'Islam', 'kamrul@gmail.com', '15/03/2002', 'Male', 'InPatient', 'Dhaka', '047365734', 1, '2023-11-11 15:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `title`, `role`, `created_at`) VALUES
(1, 'Admin', 1, '2023-11-15 14:29:22'),
(2, 'Doctor', 2, '2023-11-15 14:29:51'),
(3, 'Nurse', 3, '2023-11-15 14:30:12'),
(4, 'Accountant', 4, '2023-11-15 14:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(250) NOT NULL,
  `available_days` text NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`id`, `doctor_name`, `available_days`, `start_time`, `end_time`, `message`, `status`, `created_at`) VALUES
(1, 'Jane Smith', 'Monday, Wednesday, Friday', '11:00 AM', '5:00 PM', 'Monday, Wednesday and Friday from 11 am to 5 pm', 1, '2023-05-05 18:16:17'),
(2, 'Dr. Shamim Ahamed', 'Sunday', '11:30 AM', '12:14 AM', 'abc problem', 1, '2023-11-16 05:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_week`
--

CREATE TABLE `tbl_week` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_week`
--

INSERT INTO `tbl_week` (`id`, `name`, `created_at`) VALUES
(1, 'Sunday', '2023-05-05 11:16:11'),
(2, 'Monday', '2023-05-05 11:16:25'),
(3, 'Tuesday', '2023-05-05 11:16:37'),
(4, 'Wednesday', '2023-05-05 11:16:49'),
(5, 'Thursday', '2023-05-05 11:16:58'),
(6, 'Friday', '2023-05-05 11:17:06'),
(7, 'Saturday', '2023-05-05 11:17:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_week`
--
ALTER TABLE `tbl_week`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_week`
--
ALTER TABLE `tbl_week`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
