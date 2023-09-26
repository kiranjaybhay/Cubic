-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 10:49 AM
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
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'kiran@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_enquiry`
--

CREATE TABLE `candidate_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_enquiry`
--

INSERT INTO `candidate_enquiry` (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'demo', 'demo@gmail.com', 0, 'demo'),
(2, 'Nitin Bhopatkar', 'kiran.jaybhaye92@gmail.com', 9562387465, 'azsdfasdfasdfsadfs');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `industry`, `email`, `address`, `website`, `contact`, `discription`) VALUES
(9, 'hudas Technologies       ', ' IT industry      ', '  hudastechnologies@gmail.com     ', 'pune', ' hudastechnologies.com      ', '9876544345', ' working on web devlopment     '),
(12, 'jaybhaye', 'demo', 'nb@gmail.com', 'pune', 'demo', '', 'sfgsfrgtstdg');

-- --------------------------------------------------------

--
-- Table structure for table `company_enquiry`
--

CREATE TABLE `company_enquiry` (
  `id` int(11) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company_enquiry`
--

INSERT INTO `company_enquiry` (`id`, `Company_name`, `email`, `contact`, `message`) VALUES
(1, 'demo', 'demo@gmail.com', 0, 'demo'),
(2, 'jaybhaye', 'kir@gmail.com', 9562387465, 'zdxfszdfsdzfsdfs'),
(3, 'Nitin Bhopatkar', 'kiran.jaybha@gmail.com', 1427538690, 'demo'),
(4, 'Nitin Bhopatkar', 'kiran.jaybhaye92@gmail.com', 9562387465, 'demo'),
(5, 'Nitin Bhopatkar', 'kiran.jaybhaye92@gmail.com', 9562387465, 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `cadidate_id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `cadidate_id`, `course`, `school`, `grade`, `year`) VALUES
(1, 1, '10', 'gajanan', 73, 2001),
(2, 1, 'Diploma', 'batu', 56, 2015),
(3, 1, 'degree', 'famt', 65, 2022),
(4, 2, '10', 'gajanan', 73, 2001),
(5, 2, '12', 'batu', 56, 2015),
(6, 2, 'degree', 'famt', 65, 2022),
(7, 3, '10', 'gajanan', 73, 2008),
(8, 3, '12', 'batu', 56, 2018),
(9, 3, 'degree', 'famt', 65, 2022),
(10, 4, '10', 'demo', 73, 2001),
(11, 4, '12', 'demo', 56, 2015),
(12, 4, 'degree', 'demo', 65, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `interview_date` date NOT NULL,
  `interview_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `candidate_id`, `name`, `interview_date`, `interview_time`) VALUES
(1, 1, 'demo ', '2023-09-01', '13:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` decimal(11,2) NOT NULL,
  `worktype` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `position`, `location`, `experience`, `description`, `salary`, `worktype`, `skill`) VALUES
(11, 'web devloper ', 'web devloper ', 'pune ', 2, 'web devloper', 35000.00, 'WFH', ''),
(12, 'sdgdfgd', 'dfgdgdfgd', 'dfgdgdfgd', 2, 'dfgdfgdfgdfgdfg', 23000.00, 'WFH', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `valadity` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `service_type`, `price`, `valadity`, `description`) VALUES
(2, 'szdfgszdfgvszg', 'Consultation', 2000.00, '4', 'szdfgdfgszdg');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `cadidate_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `position` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`cadidate_id`, `company_id`, `name`, `mname`, `email`, `dob`, `contact`, `position`, `experience`, `address`, `gender`, `skill`, `status`, `marital_status`, `file`) VALUES
(1, 12, 'demo     sdfsdfsdf', 'demo ', 'kir@gmail.com', '2023-09-01', 9876544345, 'Web devloper', '2 year', 'pune', 'male', 'php, Html, java ', 'Available', 'Unmarried', '16July.pdf'),
(2, 11, 'jaybhaye Kiran', 'pramila', 'kir@gmail.com', '2023-09-01', 9876544345, 'Web devloper', '2 year', 'pune', 'male', 'php, Html, java', 'Available', 'Married', '16July.pdf'),
(3, 11, 'Nitin Bhopatkar ', 'demo ', 'kir@gmail.com', '2023-09-01', 9876544345, 'Web devloper', '2 year', 'pune', 'male', 'php, Html, java ', 'Available', 'Unmarried', '16July.pdf'),
(4, 0, 'demo', 'demo', 'demo@gmail.com', '2023-09-09', 9876544345, '', '2', 'demo', 'male', 'demo', 'Available', 'Unmarried', '16July.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `workexprience`
--

CREATE TABLE `workexprience` (
  `id` int(11) NOT NULL,
  `cadidate_id` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `workexprience`
--

INSERT INTO `workexprience` (`id`, `cadidate_id`, `companyname`, `position`, `startdate`, `enddate`, `skill`) VALUES
(1, 1, 'appmonks', 'web developer', '2023-09-01', '2023-09-01', 'php, Html, java'),
(2, 1, 'axolotls', 'php', '2023-09-01', '2023-09-02', 'php, Html, java'),
(3, 2, 'appmonks', 'web developer', '2023-09-01', '2023-09-09', 'php, Html, java'),
(4, 2, 'axolotls', 'php', '2023-09-08', '2023-09-09', 'php, Html, java'),
(5, 3, 'appmonks', 'web developer', '2023-09-01', '2023-09-09', 'php, Html, java'),
(6, 3, 'axolotls', 'php', '2023-09-08', '2023-09-22', 'php, Html, java'),
(7, 4, 'demo', 'demo', '2023-09-01', '2023-09-03', 'demo'),
(8, 4, 'demo', 'demo', '2023-09-01', '2023-09-01', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_enquiry`
--
ALTER TABLE `candidate_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_enquiry`
--
ALTER TABLE `company_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`cadidate_id`);

--
-- Indexes for table `workexprience`
--
ALTER TABLE `workexprience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate_enquiry`
--
ALTER TABLE `candidate_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company_enquiry`
--
ALTER TABLE `company_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `cadidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workexprience`
--
ALTER TABLE `workexprience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
