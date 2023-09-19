-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 04:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_butagfixed`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `date_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `lastname`, `firstname`, `middlename`, `email`, `mobile`, `username`, `password`, `cpassword`, `date_register`) VALUES
(1, 'admin', 'admin2', 'admin1', 'admaw@argon.com', '09216398515', 'admin', '$2y$10$PHgv3HDBBVJ8XAFVTk58E.8F3k31Vo7QeYt/6CMQzHEudUOiT.lUe', '$2y$10$fGGUt2KT5LjkQp4OyybIl.uNiL3f7r33jjsUkQeOngkAIOzvT2t/a', '2023-08-30 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `archivecontact`
--

CREATE TABLE `archivecontact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archivedeceased`
--

CREATE TABLE `archivedeceased` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `lot` varchar(255) NOT NULL,
  `grave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archivefaq`
--

CREATE TABLE `archivefaq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `date_table`
--

CREATE TABLE `date_table` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmincontent`
--

CREATE TABLE `tbladmincontent` (
  `aid` int(11) NOT NULL,
  `navtitles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmincontent`
--

INSERT INTO `tbladmincontent` (`aid`, `navtitles`) VALUES
(1, 'Butag Cemetery\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE `tblannouncement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `announcement` text NOT NULL,
  `postedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblannouncement`
--

INSERT INTO `tblannouncement` (`id`, `title`, `announcement`, `postedby`) VALUES
(1, 'ANNOUNCEMENT!', 'helloo', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontent`
--

CREATE TABLE `tblcontent` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `navtitle` varchar(255) NOT NULL,
  `header1` text DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `header2` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `navlogo` longblob DEFAULT NULL,
  `headerimage1` longblob DEFAULT NULL,
  `headerimage2` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontent`
--

INSERT INTO `tblcontent` (`id`, `title`, `navtitle`, `header1`, `description1`, `header2`, `description2`, `navlogo`, `headerimage1`, `headerimage2`) VALUES
(1, 'Information Management and Cemetery Mapping System', 'Butag Cemetery', 'Butag Cemetery, Bulan, Sorsogon', 'try', 'Information Management and Cemetery Mapping System', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbldeceased`
--

CREATE TABLE `tbldeceased` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `name` text DEFAULT NULL,
  `section` text DEFAULT NULL,
  `lot` text DEFAULT NULL,
  `grave` text DEFAULT NULL,
  `imagepath` mediumtext NOT NULL,
  `startDate` date DEFAULT NULL,
  `expiredDate` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `relatives_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldeceased`
--

INSERT INTO `tbldeceased` (`id`, `date`, `name`, `section`, `lot`, `grave`, `imagepath`, `startDate`, `expiredDate`, `gender`, `age`, `registration_date`, `date_of_birth`, `relatives_name`) VALUES
(5, '2024-07-07', 'nice kensww', '2', '3', '7', 'mapping/assets/img/grave_img/noimage.png', '2023-09-01', '2023-09-30', '', 0, NULL, '2023-09-12', ''),
(60, '2023-09-14', 'sdf', '2', '1', '1', 'mapping/assets/img/grave_img/1694018826_OIG.Pgg.jpg', '2023-09-06', '2033-09-06', '', 0, NULL, '2023-09-16', ''),
(77, '2023-09-08', 'cool', '23', '3', '3', 'mapping/assets/img/grave_img/noimage.png', '2023-09-07', '2028-09-07', 'Male', 23, '2023-09-06', '2023-09-14', 'alo');

-- --------------------------------------------------------

--
-- Table structure for table `tblfaq`
--

CREATE TABLE `tblfaq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `date_register` datetime NOT NULL DEFAULT current_timestamp(),
  `assigned_grave` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archivecontact`
--
ALTER TABLE `archivecontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archivedeceased`
--
ALTER TABLE `archivedeceased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archivefaq`
--
ALTER TABLE `archivefaq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_table`
--
ALTER TABLE `date_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmincontent`
--
ALTER TABLE `tbladmincontent`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontent`
--
ALTER TABLE `tblcontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldeceased`
--
ALTER TABLE `tbldeceased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfaq`
--
ALTER TABLE `tblfaq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `archivecontact`
--
ALTER TABLE `archivecontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archivedeceased`
--
ALTER TABLE `archivedeceased`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `archivefaq`
--
ALTER TABLE `archivefaq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `date_table`
--
ALTER TABLE `date_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbladmincontent`
--
ALTER TABLE `tbladmincontent`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcontent`
--
ALTER TABLE `tblcontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldeceased`
--
ALTER TABLE `tbldeceased`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tblfaq`
--
ALTER TABLE `tblfaq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
