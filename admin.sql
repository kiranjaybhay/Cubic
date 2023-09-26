-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 08:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'kir@gmail.com', '123456'),
(2, '', 'nb@gmail.com', '123456'),
(3, 'yogiraj', 'kiran.jaybha@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `categary` varchar(255) NOT NULL,
  `perticular` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `daterecordc` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`id`, `date`, `categary`, `perticular`, `description`, `daterecordc`, `isactive`) VALUES
(2, '2023-08-10', '1', 'shop', 'make on of', '2023-08-09', 1),
(8, '2023-08-18', 'rdfgbdfgdf', 'kiran', 'dfgdfgdfgdg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `categary` varchar(255) NOT NULL,
  `perticular` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `daterecordc` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`id`, `date`, `categary`, `perticular`, `description`, `daterecordc`, `isactive`) VALUES
(2, '2023-08-10', '1', 'shop', 'make on of', '2023-08-09', 1),
(8, '2023-08-18', 'rdfgbdfgdf', 'kiran', 'dfgdfgdfgdg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `categary` varchar(255) NOT NULL,
  `perticular` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `daterecordc` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`id`, `date`, `categary`, `perticular`, `description`, `daterecordc`, `isactive`) VALUES
(2, '2023-08-10', '1', 'shop', 'make on of', '2023-08-09', 1),
(8, '2023-08-18', 'rdfgbdfgdf', 'kiran', 'dfgdfgdfgdg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `categary` varchar(255) NOT NULL,
  `perticular` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `daterecordc` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`id`, `date`, `categary`, `perticular`, `description`, `daterecordc`, `isactive`) VALUES
(2, '2023-08-10', '1', 'shop', 'make on of', '2023-08-09', 1),
(8, '2023-08-18', 'rdfgbdfgdf', 'kiran', 'dfgdfgdfgdg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `categary` varchar(255) NOT NULL,
  `perticular` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `daterecordc` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `date`, `categary`, `perticular`, `description`, `daterecordc`, `isactive`) VALUES
(2, '2023-08-10', '1', 'shop', 'make on of', '2023-08-09', 1),
(8, '2023-08-18', 'rdfgbdfgdf', 'kiran', 'dfgdfgdfgdg', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table5`
--
ALTER TABLE `table5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table4`
--
ALTER TABLE `table4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table5`
--
ALTER TABLE `table5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
