-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 04:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcompanylist`
--

-- --------------------------------------------------------

--
-- Table structure for table `datacontact`
--

CREATE TABLE `datacontact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datacontact`
--

INSERT INTO `datacontact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Name', 'Email', 'Subject', 'Message'),
(2, 'Alex', 'alexatarigan2903@gmail.com', 'Subject', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `dataregister`
--

CREATE TABLE `dataregister` (
  `company_email` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_description` varchar(1000) NOT NULL,
  `company_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacontact`
--
ALTER TABLE `datacontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataregister`
--
ALTER TABLE `dataregister`
  ADD PRIMARY KEY (`company_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datacontact`
--
ALTER TABLE `datacontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
