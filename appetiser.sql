-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 06:23 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appetiser`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_days` varchar(255) NOT NULL,
  `from_days` date NOT NULL,
  `to_days` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `july_month`
--

CREATE TABLE `july_month` (
  `id` int(11) NOT NULL,
  `days_id` tinyint(4) NOT NULL,
  `weekdays` varchar(255) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `july_month`
--

INSERT INTO `july_month` (`id`, `days_id`, `weekdays`, `days`) VALUES
(4, 7, 'Sun', 1),
(5, 1, 'Mon', 2),
(6, 2, 'Tue', 3),
(7, 3, 'Wed', 4),
(8, 4, 'Thu', 5),
(9, 5, 'Fri', 6),
(10, 6, 'Sat', 7),
(11, 7, 'Sun', 8),
(12, 1, 'Mon', 9),
(13, 2, 'Tue', 10),
(14, 3, 'Wed', 11),
(15, 4, 'Thu', 12),
(16, 5, 'Fri', 13),
(17, 6, 'Sat', 14),
(18, 7, 'Sun', 15),
(19, 1, 'Mon', 16),
(20, 2, 'Tue', 17),
(21, 3, 'Wed', 18),
(22, 4, 'Thu', 19),
(23, 5, 'Fri', 20),
(24, 6, 'Sat', 21),
(25, 7, 'Sun', 22),
(26, 1, 'Mon', 23),
(27, 2, 'Tue', 24),
(28, 3, 'Wed', 25),
(29, 4, 'Thu', 26),
(30, 5, 'Fri', 27),
(31, 6, 'Sat', 28),
(32, 7, 'Sun', 29),
(33, 1, 'Mon', 30),
(34, 2, 'Tue', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `july_month`
--
ALTER TABLE `july_month`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;
--
-- AUTO_INCREMENT for table `july_month`
--
ALTER TABLE `july_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
