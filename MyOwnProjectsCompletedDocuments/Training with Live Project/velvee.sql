-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 12:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velvee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstName`, `lastName`, `address`, `email`, `city`, `division`, `zipcode`, `age`, `salary`) VALUES
(1, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Rajshahi', 'Rajshahi', '1236', 28, 1500),
(2, 'Syed Zaman ', 'Mostafiz', 'House 5, l', 'zamancsediue44@gmail.com', 'Dhaka', 'Dhaka', '1236', 37, 400),
(3, 'Akbor', 'Imran', 'House 5, l', 'imran@gmail.com', 'Molovibazar', 'Dhaka', '1236', 36, 800),
(4, 'Faisal', 'Imran', 'House 5, l', 'imran@gmail.com', 'Lalmonirhat', 'Lalmonirhat', '1236', 25, 1800),
(5, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Dhaka', 'Dhaka', '1236', 23, 1500),
(6, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Sylhet', 'Sylhet', '1236', 24, 1200),
(7, 'Sadia', 'Hasan', 'House 5, l', 'imran@gmail.com', 'Dhaka', 'Dhaka', '1236', 22, 2500),
(8, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Dhaka', 'Dhaka', '1236', 38, 325),
(9, 'Ajharul', 'PIntu', 'House 5, l', 'imran@gmail.com', 'Dhaka', 'Dhaka', '1236', 36, 750),
(10, 'Kamal', 'Khan', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, NULL, 'Khan', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 'Jabed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_bup`
--

CREATE TABLE `customer_bup` (
  `id` int(11) NOT NULL,
  `fristName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_bup`
--

INSERT INTO `customer_bup` (`id`, `fristName`, `lastName`, `address`, `email`, `city`, `division`, `zipcode`, `age`) VALUES
(1, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Rajshahi', 'Rajshahi', '1236', 28),
(2, 'Syed Zaman ', 'Mostafiz', 'House 5, l', 'zamancsediue44@gmail.com', 'Dhaka', 'Dhaka', '1236', 37),
(3, 'Akbor', 'Imran', 'House 5, l', 'imran@gmail.com', 'Molovibazar', 'Dhaka', '1236', 26),
(4, 'Faisal', 'Imran', 'House 5, l', 'imran@gmail.com', 'Lalmonirhat', 'Lalmonirhat', '1236', 25),
(5, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Dhaka', 'Dhaka', '1236', 23),
(6, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Sylhet', 'Sylhet', '1236', 24),
(7, 'Sadia', 'Hasan', 'House 5, l', 'imran@gmail.com', 'Dhaka', 'Dhaka', '1236', 22),
(8, 'Delowar Jahan', 'Imran', 'House 5, l', 'imran@gmail.com', 'Dhaka', 'Dhaka', '1236', 38);

-- --------------------------------------------------------

--
-- Table structure for table `newtable`
--

CREATE TABLE `newtable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newtable`
--

INSERT INTO `newtable` (`id`, `name`, `pass`, `body`) VALUES
(1, 'This is name one', '202cb962ac59075b964b07152d234b70', 'Body text will go here');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderNumber` varchar(255) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `orderDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderNumber`, `productId`, `customerID`, `orderDate`) VALUES
(1, '1', 1, 4, '2018-01-15 15:26:58'),
(2, '2', 3, 1, '2018-01-15 15:26:58'),
(3, '3', 1, 1, '2018-01-15 15:26:58'),
(4, '4', 1, 2, '2018-01-15 15:26:58'),
(5, '5', 1, 1, '2018-01-15 15:26:58'),
(6, '6', 1, 4, '2018-01-15 15:26:58'),
(7, '7', 4, 6, '2018-01-15 15:26:58'),
(8, '8', 4, 4, '2018-01-15 15:26:58'),
(9, '9', 2, 5, '2018-01-15 15:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Product one', 20),
(2, 'Product two', 30),
(3, 'Product three', 45),
(4, 'Product four', 50),
(5, 'Product five', 80),
(6, 'Product six', 200);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_bup`
--
ALTER TABLE `customer_bup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newtable`
--
ALTER TABLE `newtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customer_bup`
--
ALTER TABLE `customer_bup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `newtable`
--
ALTER TABLE `newtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
