-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2020 at 04:23 PM
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
-- Database: `shiners`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `phonenumber`, `item`, `date`, `status`) VALUES
(1, '1234567890', 'item_1', '1', 'DELIVERED'),
(2, '0987654321', 'item-2', '2', 'READY'),
(3, '1234567890', 'item-1', '1', 'READY'),
(4, '1234554321', 'item-3', '3', 'DELIVERED'),
(5, '0987654321', 'item-4', '5', 'DELIVERED'),
(32, '7890123456', 'item_2', '123', 'READY'),
(33, '7890123456', 'item_2', '123', 'PENDING'),
(34, '1234567890', 'Pro', '123', 'NEW'),
(35, '1234567890', 'Pro', '123', 'NEW'),
(36, '0987654321', 'Premium', '123', 'NEW'),
(37, '0987654321', 'Premium', '123', 'NEW'),
(38, '0987654321', 'Basic', '123', 'NEW'),
(39, '0987654321', 'Premium', '123', 'NEW'),
(40, '0987654321', 'Premium', '2020-05-23', 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` mediumtext DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `address`, `email`, `phonenumber`) VALUES
(1, 'bellaghrtnai', 'bella', 'bellaghrtnai', 'bellaghrt@nai.com', '1234567890'),
(2, 'benuk', 'benu', 'benuk', 'benuk@gmial.com', '0987654321'),
(3, 'neeha', 'neeha', 'neeha', 'neeha2gmail.com', '1234554321'),
(32, 'kaleo', 'kaleo', 'kaleo', 'kaleo@gmail.com', '7002209618'),
(33, 'leo', '', 'leo', 'leo@gmail.com', '4567890123'),
(34, 'first', 'name', 'first name', 'first@name.com', '7890123456'),
(35, 'n', 'm', 'n', 'nn@m.m', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
