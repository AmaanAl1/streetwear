-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 11:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streetwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `comment`) VALUES
(1, 'Blake', 'Mackay', 'blake@mail.com', 'Which trousers do you recommend'),
(3, 'amaan', 'ali', 'Amaan@mail.com', 'comment'),
(5, 'sheron', 'ali', 'sheron@mail.com', 'pants'),
(6, 'sheron', 'ali', 'sheron@mail.com', 'pants'),
(7, 'kobe', 'byrant', 'kbryant@gmail.com', ''),
(8, 'kobe', 'byrant', 'kbryant@gmail.com', ''),
(9, 'Amaan', 'ali', 'Amaan@mail.com', ''),
(10, 'Amaan', 'ali', 'Amaan@mail.com', ''),
(11, 'Amaan', 'ali', 'Amaan@mail.com', ''),
(12, 'amaan', 'ali', 'Amaan@mail.com', ''),
(13, 'Amaan', 'Ali', 'Amaan@mail.com', ''),
(14, 'Amaan', 'Ali', 'Amaan@mail.com', ''),
(15, 'Amaan', 'Ali', 'Amaan@mail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
