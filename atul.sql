-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2018 at 08:48 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atul`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('open','closed','','') NOT NULL DEFAULT 'open',
  `delivery_address` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `payment_mode` enum('cash','online','','') DEFAULT 'cash',
  `tax` float(8,2) DEFAULT '0.00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `status`, `delivery_address`, `city`, `pincode`, `country`, `payment_mode`, `tax`, `updated_at`, `created_at`) VALUES
(3, 2, 'open', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-10-20 06:19:52', '2018-10-20 06:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_id`, `item_id`, `quantity`) VALUES
(3, 1, 5),
(3, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Thriller', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(2, 'Drama', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(3, 'Romance', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(4, 'Horror', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(5, 'Fantasy', '2018-10-19 06:04:44', '2018-10-19 06:04:44'),
(6, 'Sci-Fi', '2018-10-19 06:04:44', '2018-10-19 06:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `isbn` bigint(14) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` float(10,2) NOT NULL,
  `old_price` float(10,2) NOT NULL,
  `img_url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `isbn`, `author`, `price`, `old_price`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Girl on The Train', 'The Girl on the Train is a psychological thriller novel by British author Paula Hawkins. The novel debuted at No. 1 on The New York Times Fiction Best Sellers of 2015 list dated 1 February 2015, and r', 1234567890123, 'Vikas Mahato', 420.00, 530.00, 'images/product_1.jpg', '2018-10-19 06:12:11', '2018-10-19 07:06:35'),
(2, 5, 'Harry Potter', 'An 11 year old bo discovers that he is one of the greatest wizards of all time.', 3123678567890, 'J. K. Rowling', 450.00, 600.00, 'images/product_1.jpg', '2018-10-20 04:37:35', '2018-10-20 04:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` enum('user','admin','','') NOT NULL DEFAULT 'user',
  `password` varchar(512) NOT NULL,
  `salt` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `role`, `password`, `salt`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 'c9a99b985b1e871541f20a3f7f6bd8154fa3d2407fb9e3fdc626af5f9a118c150537299b15c5635555062906b0f42984843146cbbb3b06736762991ab0e69cc3', 'dd183b390e0b0cca6d3a6d3ba39226f073806845e15361797aaa5ac52c76840e4998fe6301e46b3950777e2a8a5e0102ae19e830297fbd2a94d5c468451d1167', '2018-10-19 05:57:46', '2018-10-19 05:57:46'),
(2, 'user', 'user@email.com', 'user', 'eefd49d4f844f752caf0686ba00fcc711e34c8531aeb59eb73228f4ede911077362b9b0fe5f84195ad18c46a38dcb0815b0f3952fbe2d0deac3849b112716260', '7247444c04ed8658f2213abc97c58ee966b2bb3a3eaf25915921b79a369bb3db843c0aca1aeff31a3fc18cf357db7f883cef52305b59f9dfeb7156e65af1e6f3', '2018-10-20 04:38:42', '2018-10-20 04:38:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
