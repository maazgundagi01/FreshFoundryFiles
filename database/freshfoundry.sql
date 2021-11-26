-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 10:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshfoundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `baked_goods`
--

CREATE TABLE `baked_goods` (
  `sr_no` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `sr_no` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `sr_no` int(11) NOT NULL,
  `products` text NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dairy`
--

CREATE TABLE `dairy` (
  `sr_no` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fresh_produce`
--

CREATE TABLE `fresh_produce` (
  `sr_no` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `frozen_foods`
--

CREATE TABLE `frozen_foods` (
  `sr_no` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meat`
--

CREATE TABLE `meat` (
  `sr_no` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spices`
--

CREATE TABLE `spices` (
  `sr_no` int(11) NOT NULL,
  `goods` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baked_goods`
--
ALTER TABLE `baked_goods`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `dairy`
--
ALTER TABLE `dairy`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `fresh_produce`
--
ALTER TABLE `fresh_produce`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `frozen_foods`
--
ALTER TABLE `frozen_foods`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `meat`
--
ALTER TABLE `meat`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `spices`
--
ALTER TABLE `spices`
  ADD PRIMARY KEY (`goods_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baked_goods`
--
ALTER TABLE `baked_goods`
  ADD CONSTRAINT `baked_goods_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `categories` (`product_id`);

--
-- Constraints for table `beverages`
--
ALTER TABLE `beverages`
  ADD CONSTRAINT `beverages_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `categories` (`product_id`);

--
-- Constraints for table `dairy`
--
ALTER TABLE `dairy`
  ADD CONSTRAINT `dairy_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `categories` (`product_id`);

--
-- Constraints for table `fresh_produce`
--
ALTER TABLE `fresh_produce`
  ADD CONSTRAINT `fresh_produce_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `categories` (`product_id`);

--
-- Constraints for table `frozen_foods`
--
ALTER TABLE `frozen_foods`
  ADD CONSTRAINT `frozen_foods_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `categories` (`product_id`);

--
-- Constraints for table `meat`
--
ALTER TABLE `meat`
  ADD CONSTRAINT `meat_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `categories` (`product_id`);

--
-- Constraints for table `spices`
--
ALTER TABLE `spices`
  ADD CONSTRAINT `spices_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `categories` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
