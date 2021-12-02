-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 06:58 AM
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
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `sr_no` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`sr_no`, `username`, `password`, `name`, `email`) VALUES
(7, 'testadmin1', 'test', 'testadmin1', 'testadmin@test.com'),
(9, 'testadmin2', 'test', 'testadmin1', 'testadmin@test.com');

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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baked_goods`
--

INSERT INTO `baked_goods` (`sr_no`, `goods`, `goods_id`, `prod_id`, `price`, `image`) VALUES
(6, 'Donut', '1', 'ff-bg-06', 2, 'donut-isolated-on-white-background.jpg'),
(7, 'Dora Cake', '2', 'ff-bg-06', 4, 'istockphoto-1203754979-612x612.jpg'),
(9, 'Crossaint', '3', 'ff-bg-06', 3, '8827495841822.png'),
(11, 'Toast', '5', 'ff-bg-06', 3, 'toast_102709511.jpg');

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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`sr_no`, `goods`, `goods_id`, `prod_id`, `price`, `image`) VALUES
(0, 'Canada Dry 2Lr', '1', 'ff-xb-07', 2, '6000200114480.jpg'),
(0, 'Sprite 500ml', '2', 'ff-xb-07', 1, '1613047785-MLyxZXTe.jpg');

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

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`sr_no`, `products`, `product_id`, `description`) VALUES
(6, 'Baked Goods', 'ff-bg-06', 'Baked Goods and Bread'),
(2, 'Frozen Foods', 'ff-ff-02', 'Frozen Products'),
(1, 'Fresh Produce', 'ff-fp-01', 'Fresh Groceries and Vegetables'),
(7, 'Beverages', 'ff-xb-07', 'Drinks and Beverages'),
(4, 'Dairy', 'ff-xd-04', 'Dairy Products'),
(3, 'Meat', 'ff-xm-03', 'Meat Products'),
(5, 'Spices', 'ff-xs-05', 'Spices');

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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dairy`
--

INSERT INTO `dairy` (`sr_no`, `goods`, `goods_id`, `prod_id`, `price`, `image`) VALUES
(0, 'Butter', '2', 'ff-xd-04', 5, '1488493198427.jpeg'),
(0, 'Yoghurt', '3', 'ff-xd-04', 3, 'alpura_guayaba_145_g.jpg'),
(0, 'Chocolate Milk', '5', 'ff-xd-04', 7, 'imageService.jfif');

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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fresh_produce`
--

INSERT INTO `fresh_produce` (`sr_no`, `goods`, `goods_id`, `prod_id`, `price`, `image`) VALUES
(0, 'Tomato', '1', 'ff-fp-01', 1, 'istockphoto-466175630-612x612.jpg'),
(0, 'Rosner lettuce', '3', 'ff-fp-01', 2, 'Rosner-Lettuce.jpg'),
(0, 'Strawberries', '4', 'ff-fp-01', 3, 'strawberry-on-white-background-to-represent-strawberry-tongue.jpg'),
(0, 'Banana', '5', 'ff-fp-01', 2, 'white-background-fruit-and-vegetables-30.jpg');

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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frozen_foods`
--

INSERT INTO `frozen_foods` (`sr_no`, `goods`, `goods_id`, `prod_id`, `price`, `image`) VALUES
(0, 'Lasagna', '1', 'ff-ff-02', 6, '605388927224.jpg'),
(0, 'Beef pie', '2', 'ff-ff-02', 9, '924581f2-c4b7-41b4-be78-09cc331456ee.6ddf49ff6bec092f6c00dadbc617d7ff.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jsheen`
--

CREATE TABLE `jsheen` (
  `sr_no` int(11) NOT NULL,
  `good_name` varchar(64) DEFAULT NULL,
  `good_price` int(11) DEFAULT NULL,
  `good_image` varchar(255) DEFAULT NULL
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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meat`
--

INSERT INTO `meat` (`sr_no`, `goods`, `goods_id`, `prod_id`, `price`, `image`) VALUES
(0, 'Shrimp', '2', 'ff-xm-03', 4, '681131340939.jpg');

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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spices`
--

INSERT INTO `spices` (`sr_no`, `goods`, `goods_id`, `prod_id`, `price`, `image`) VALUES
(0, 'Dill Pickles', '1', 'ff-xs-05', 5, '114413.jpg'),
(0, 'Oregano Leaves', '2', 'ff-xs-05', 4, '605388881137.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `sr_no` int(11) NOT NULL,
  `good_name` varchar(64) DEFAULT NULL,
  `good_price` int(11) DEFAULT NULL,
  `good_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testadmin1`
--

CREATE TABLE `testadmin1` (
  `sr_no` int(11) NOT NULL,
  `good_name` varchar(64) DEFAULT NULL,
  `good_price` int(11) DEFAULT NULL,
  `good_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr_no` int(111) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr_no`, `first_name`, `last_name`, `username`, `password`, `email`) VALUES
(17, 'test1', 'test1', 'test1', 'test', 'test@test.com'),
(18, 'Jacob', 'Sheen', 'jsheen', 'test', 'jay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `sr_no` int(11) NOT NULL,
  `good_name` varchar(100) NOT NULL,
  `good_price` int(11) NOT NULL,
  `good_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`sr_no`, `good_name`, `good_price`, `good_image`) VALUES
(5, 'Dora Cake', 4, 'istockphoto-1203754979-612x612.jpg'),
(6, 'Dora Cake', 4, 'istockphoto-1203754979-612x612.jpg'),
(7, 'Donut', 4, 'donut-isolated-on-white-background.jpg'),
(8, 'Donut', 4, 'donut-isolated-on-white-background.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `baked_goods`
--
ALTER TABLE `baked_goods`
  ADD PRIMARY KEY (`goods_id`),
  ADD UNIQUE KEY `sr_no` (`sr_no`),
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
-- Indexes for table `jsheen`
--
ALTER TABLE `jsheen`
  ADD PRIMARY KEY (`sr_no`);

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
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `testadmin1`
--
ALTER TABLE `testadmin1`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `baked_goods`
--
ALTER TABLE `baked_goods`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jsheen`
--
ALTER TABLE `jsheen`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testadmin1`
--
ALTER TABLE `testadmin1`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr_no` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
