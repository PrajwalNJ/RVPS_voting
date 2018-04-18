-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 02:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_election_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_name` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'This column will contain the names of the administrators.',
  `admin_password` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'This column will contain the admin''s password which will be hashed ',
  `admin_email` varchar(320) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This column will contain the e-mail address ,this will be used to send a reset code in case the admin forgets the password',
  `admin_mobile_no` int(10) NOT NULL COMMENT 'This column will contain the mobile number  of the administrator which will be used to send the reset code ,in case the admin forgets the password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contestant_details`
--

CREATE TABLE `contestant_details` (
  `contestant_name` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL COMMENT 'this column will store the names of the contestants',
  `contestant_picture` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'this column will store relative path of the contestant''s picture',
  `contestant_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'this column will store the unique id of the contestant which will be auto-generated when the admin is addding the name of the contestant',
  `election_type` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'this column will store the type of elections he is standing for'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voting_details`
--

CREATE TABLE `voting_details` (
  `student_roll_no` varchar(2) COLLATE utf8_unicode_ci NOT NULL COMMENT 'this column is used to store the roll no of the students who are voting which will be hashed',
  `student_class` int(10) NOT NULL COMMENT 'this column is used to  store the class of the student ',
  `contestant_unique_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'this column is used to store the unique id of the contestant  who has been casted a vote by the student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestant_details`
--
ALTER TABLE `contestant_details`
  ADD PRIMARY KEY (`contestant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
