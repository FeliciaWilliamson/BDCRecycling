-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2020 at 01:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `customer_ID` int(5) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(80) NOT NULL,
  `experience_pickup_before` tinyint(1) NOT NULL,
  `satisfied_with_pickup` varchar(25) NOT NULL,
  `comments1` varchar(200) NOT NULL,
  `purchased_bins_before` tinyint(1) NOT NULL,
  `satisfied_with_quality_of_bins` varchar(25) NOT NULL,
  `comments2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `new_customer`
--

CREATE TABLE `new_customer` (
  `customer_ID` int(5) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payment_option` varchar(80) NOT NULL,
  `extra_bags` int(5) NOT NULL,
  `extra_bins` int(5) NOT NULL,
  `tax_exempt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(5) NOT NULL,
  `price` varchar(5) NOT NULL,
  `size` varchar(20) NOT NULL,
  `material` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `size`, `material`) VALUES
(1, 'Bin', '7.00', '35 gallon', '50% recyclable material with polypropylene(PP).'),
(2, 'Bags', '2.00', '33X40, 35 gallon, 28', 'made from 100% post-consumer-recycled plastics'),
(4, 'Flags', '5.00', '2X1', '100% polyester made from plastic bottles.');

-- --------------------------------------------------------

--
-- Table structure for table `return_customer`
--

CREATE TABLE `return_customer` (
  `customer_ID` int(5) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `new_bins` int(5) NOT NULL,
  `new_bags` int(5) NOT NULL,
  `new_flags` int(5) NOT NULL COMMENT '$2 a roll',
  `new_bags_and_flags` int(5) NOT NULL COMMENT '$5 for pack of 5',
  `tax_exempt` tinyint(1) NOT NULL COMMENT '$7 for flags and bags'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `new_customer`
--
ALTER TABLE `new_customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_customer`
--
ALTER TABLE `return_customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `customer_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_customer`
--
ALTER TABLE `new_customer`
  MODIFY `customer_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `return_customer`
--
ALTER TABLE `return_customer`
  MODIFY `customer_ID` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
