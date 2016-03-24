-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Host: sulley.cah.ucf.edu
-- Generation Time: Mar 23, 2016 at 11:23 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.6.19

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

CREATE TABLE `dig4503ajax1` (
  `id` tinyint(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `shortdes` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dig4503ajax1`
--

INSERT INTO `dig4503ajax1` (`id`, `title`, `shortdes`, `location`, `postdate`) VALUES
(1, 'Gaint UFO', 'It was so big i didn\'t know what to do', 'Orlando, FL', '2016-02-12 04:11:51'),
(4, 'zach', 'bell', 'hi', '2016-02-12 04:31:38'),
(5, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-12 04:31:48'),
(6, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-12 04:32:01'),
(7, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-12 04:38:44'),
(8, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-12 04:38:44'),
(9, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-12 04:38:45'),
(10, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-12 04:38:45'),
(11, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-12 04:38:45'),
(12, 'Flying object of spaghetti', 'Some sort of alien flying in the air.  It appeared to be made of spaghetti,  like some sort of flying spaghetti  monster...... Praise his holy noodle appendages.', 'Orlando,  Florida', '2016-02-13 00:33:23'),
(13, 'Flying object of spaghetti', 'Some sort of alien flying in the air.  It appeared to be made of spaghetti,  like some sort of flying spaghetti  monster...... Praise his holy noodle appendages.', 'Orlando,  Florida', '2016-02-13 00:33:32'),
(14, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-02-13 21:02:28'),
(15, 'Big green aliens', 'It probed me!', 'Orlando, FL', '2016-02-19 22:14:41'),
(16, 'Sighting Title', 'Sighting Description', 'Sighting Location', '2016-03-15 22:13:38');

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
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
