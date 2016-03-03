-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2016 at 08:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `za977950`
--

-- --------------------------------------------------------

--
-- Table structure for table `dig4503ajax1`
--

CREATE TABLE IF NOT EXISTS `dig4503ajax1` (
  `id` tinyint(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `shortdes` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dig4503ajax1`
--

INSERT INTO `dig4503ajax1` (`id`, `title`, `shortdes`, `location`, `postdate`) VALUES
(1, 'Title 1', 'short des 1', 'loc 1', '2016-02-11 06:54:34'),
(2, 'Title 1', 'short des 1', 'loc 1', '2016-02-11 07:15:19'),
(3, '', '', '', '2016-02-11 07:24:08'),
(4, '', '', '', '2016-02-11 07:24:08'),
(5, 'title 2', 'short des 2', 'loc 2', '2016-02-11 07:25:06'),
(6, 'title 3', 'short des 3', 'loc 3', '2016-02-11 07:26:50'),
(7, 'title 3', 'short des 3', 'loc 3', '2016-02-11 07:27:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dig4503ajax1`
--
ALTER TABLE `dig4503ajax1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dig4503ajax1`
--
ALTER TABLE `dig4503ajax1`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
