-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 07:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE `std_info` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `enrollno` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_info`
--

INSERT INTO `std_info` (`id`, `name`, `email`, `enrollno`, `contactno`, `profile`) VALUES
(2, 'fenil', 'f@gmail.com', '21SOECA21051', '7845859585', ''),
(6, 'kishan', 'ksakhiya@gmail.com', '21soeca21048', '4686841684', 'image 1.png'),
(9, 'urvang', 'urvang@gmail.com', '21SOECA21014', '9428672937', 'circled-user-male-skin-type-1-2.png'),
(10, 'akshay', 'akshay@gmail.com', '21SOECA21056', '353532523', 'circled-user-male-skin-type-1-2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_info`
--
ALTER TABLE `std_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_info`
--
ALTER TABLE `std_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
