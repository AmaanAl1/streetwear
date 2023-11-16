-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 12:37 AM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(4, 'test2', '$2y$10$ZmGGLMiKh0wapHKI96zu.ee7jQoclW0vVQeC07yGKl0a3cVVU2.lO', 'test2@mail.com'),
(5, 'fred', '$2y$10$EPRAvtdU5/yBGuqprVNn5.kOkQ8FAbLl37r.Elda7n3iL/1R3vRwC', 'fred@mail.com'),
(6, 'admin', '$2y$10$/6lwsUuoIzRY4mghBEfECO7njQjc6pT3.RzpaXDhSrKUt7vK7Zg82', 'admin@mail.com'),
(7, 'amaanali', '$2y$10$vSwM0HI.eaJiE2otARJXVOax5qU3/IOXu9Y5xcdNr.eqJ4mn0GqV.', 'aa@mail.com'),
(8, 'bob1234', '$2y$10$xLDwwD/6PG0X0Vbm..ow4.q6DN9kXvRC0Tq.jIIqmng5hddfAD0.O', 'bob@mail.com'),
(9, 'aa19033', '$2y$10$MRzpWd2x7emq5lG4GuTPUeEFLMX8DsHg.xYC1nC44t0SVVk/iKQAy', 'aa@mail.com');

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
(1, 'Blake', 'Mackay', 'blake@mail.com', 'Which pants do you recommend'),
(3, 'amaan', 'ali', 'Amaan@mail.com', 'fast shipping'),
(5, 'sheron', 'ali', 'sheron@mail.com', 'the material of these clothes are high quality'),
(7, 'kobe', 'byrant', 'kbryant@gmail.com', ''),
(17, 'bob', 'doe', 'bob@mail.com', 'need new styles');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `specials` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `image`, `category`, `specials`) VALUES
(1, 'Pink Hoodie', '(XS,S,M,L,XL,XXL)', '50', 'pink-hoodie.jpg', 'menswear', 'y'),
(2, 'Brown Cargo Pants', '(XS,S,M,L,XL,XXL)', '50', 'brown-pants.jpg', 'menswear', ''),
(4, 'Black T-shirt', '(XS,S,M,L,XL,XXL)', '50', 'black-t.jpg', 'menswear', ''),
(6, 'Blue Jeans', '(XS,S,M,L,XL,XXL)', '50', 'blue-jeans.jpg', 'menswear', 'y'),
(7, 'Green Hoodie', '(XS,S,M,L,XL,XXL)', '50', 'green-hoodie.jpg', 'menswear', ''),
(10, 'Beige Cargo Pants', '(XS,S,M,L,XL,XXL)', '50', 'beige-pants-womens2.jpg', 'womenswear', ''),
(11, 'Black Pants', '(XS,S,M,L,XL,XXL)', '50', 'black-pants-womens.jpg', 'womenswear', ''),
(14, 'White T-Shirt', '(XS,S,M,L,XL,XXL)', '35', 'white-t-womens.jpg', 'womenswear', 'y'),
(15, 'pink t-shirt', '(XS,S,M,L,XL,XXL)', '35', 'pink-t-womens2.jpg', 'womenswear', ''),
(19, 'Blue Jeans', '(XS,S,M,L,XL,XXL)', '50', 'blue-jeans-womens2.jpg', 'womenswear', ''),
(20, 'Green T-Shirt', '(XS,S,M,L,XL,XXL)', '15', 'kids-green-t2.jpg', 'kidswear', ''),
(26, 'Blue Pants', '(XS,S,M,L,XL,XXL)', '30', 'kids-blue-pants2.jpg', 'kidswear', ''),
(27, 'White T-shirt', '(XS,S,M,L,XL,XXL)', '15', 'kids-white-t2.jpg', 'kidswear', ''),
(28, 'Blue T-shirt', '(XS,S,M,L,XL,XXL)', '15', 'kids-blue-t2.jpg', 'kidswear', ''),
(30, 'Black Hoodie', '(XS,S,M,L,XL,XXL)', '50', 'black-hoodie2.jpg', 'menswear', ''),
(32, 'Black Cargo Pants', '(XS,S,M,L,XL,XXL)', '50', 'black-pants.jpg', 'menswear', ''),
(33, 'Brown T-shirt', '(XS,S,M,L,XL,XXL)', '50', 'brown-t.jpg', 'menswear', ''),
(36, 'Brown Pants', '(XS,S,M,L,XL,XXL)', '35', 'brown-pants-womens2.jpg', 'womenswear', 'y'),
(37, 'Grey T-shirt', '(XS,S,M,L,XL,XXL)', '35', 'grey-t-womens2.jpg', 'womenswear', ''),
(40, 'Black T-shirt', '(XS,S,M,L,XL,XXL)', '35', 'black-t-womens2.jpg', 'womenswear', ''),
(42, 'Grey T-shirt', '(XS,S,M,L,XL,XXL)', '15', 'kids-grey-t2.jpg', 'kidswear', ''),
(43, 'Black pants', '(XS,S,M,L,XL,XXL)', '15', 'kids-black-pants2.jpg', 'kidswear', ''),
(47, 'Grey Pants', '(XS,S,M,L,XL,XXL)', '15', 'kids-grey-pants2.jpg', 'kidswear', ''),
(48, 'Green Pants', '(XS,S,M,L,XL,XXL)', '15', 'kids-green-pants2.jpg', 'kidswear', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `InvoiceDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `itemId`, `accountId`, `InvoiceDate`) VALUES
(8, 7, 7, '2023-11-17'),
(9, 7, 7, '2023-11-17'),
(10, 36, 9, '2023-11-17'),
(11, 36, 9, '2023-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemId` (`itemId`),
  ADD KEY `accountId` (`accountId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`itemId`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`accountId`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
