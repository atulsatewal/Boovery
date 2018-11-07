-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2018 at 01:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

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
(3, 2, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-10-20 06:19:52', '2018-10-20 06:19:52'),
(4, 3, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-10-31 03:44:05', '2018-10-31 03:44:05'),
(5, 4, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-10-31 05:03:50', '2018-10-31 05:03:50'),
(6, 5, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-03 03:35:26', '2018-11-03 03:35:26'),
(7, 3, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-04 06:07:15', '2018-11-04 06:07:15'),
(8, 2, 'closed', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-07 11:38:29', '2018-11-07 11:38:29'),
(9, 2, 'open', NULL, NULL, NULL, NULL, 'cash', 0.00, '2018-11-07 12:04:38', '2018-11-07 12:04:38');

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
(3, 2, 8),
(4, 1, 3),
(5, 1, 2),
(5, 2, 3),
(6, 1, 2),
(7, 1, 1),
(8, 1, 1),
(8, 3, 1);

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
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`Id`, `Name`, `LastName`, `Email`, `Message`) VALUES
(1, 'atul', 'satewal', 'atulsatewal@gmail.com', 'great website');

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
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `isbn`, `author`, `price`, `old_price`, `img_url`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Girl on The Train', 'The Girl on the Train is a psychological thriller novel by British author Paula Hawkins. The novel debuted at No. 1 on The New York Times Fiction Best Sellers of 2015 list dated 1 February 2015, and r', 1234567890123, 'Vikas Mahato', 420.55, 530.00, 'images/product_1.jpg', 1, '2018-10-19 06:12:11', '2018-11-03 17:43:30'),
(2, 5, 'Harry Potter', 'An 11 year old bo discovers that he is one of the greatest wizards of all time.', 3123678567890, 'J. K. Rowling', 450.00, 600.00, 'images/philostone.jpeg', 1, '2018-10-20 04:37:35', '2018-10-20 04:37:35'),
(3, 1, 'Sherlock Holmes', 'A high functioning sociopath solves crime and mystery.', 123123123111, 'Sir Arthor Conan Doyle', 2344.00, 0.00, 'https://duckduckgo.com/i/9ad73b4c.jpg', 1, '2018-11-07 11:18:52', '2018-11-07 11:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
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
(2, 'user', 'user@email.com', 'user', 'eefd49d4f844f752caf0686ba00fcc711e34c8531aeb59eb73228f4ede911077362b9b0fe5f84195ad18c46a38dcb0815b0f3952fbe2d0deac3849b112716260', '7247444c04ed8658f2213abc97c58ee966b2bb3a3eaf25915921b79a369bb3db843c0aca1aeff31a3fc18cf357db7f883cef52305b59f9dfeb7156e65af1e6f3', '2018-10-20 04:38:42', '2018-10-20 04:38:42'),
(3, 'atulsatewal', 'atulsatewal@gmail.com', 'user', '5902602db3ebd57531b118133b79caebc04cf750e11396994dfc422980f360d1836ff040d7eb1cc4574c1288439af63596b47e86c53cb07573e3f82580bbc85e', 'dd0fd28359a296d1fbf1cfc3de4dd75672cc02965e735a3d44f12fcc7d3388f279b928ae5f5ad61c1812f7b2ae538465b6c66d03f7a4d7ff423298e40dfc82ef', '2018-10-31 03:43:42', '2018-10-31 03:43:42'),
(4, 'vishal', 'vishal@gmail.com', 'user', 'be2f60b3418e5c03df19f0427c0ac8ce790eecfd66939e070a2c5284adbdd1fb92e28488548fb37a86b93cfd0c5ba440d4bbe0ae6d0f0a1d03d8875bc1fa62e0', '030475f6d9a809ffb1173c60c9a1a496fc9d2c9067f28ff785899f8d5afa1fee7754f7c62752e4c1e879406bb8bce9d9a514c51699958c2b670237b9a72ceb74', '2018-10-31 05:03:28', '2018-10-31 05:03:28'),
(5, 'renu', 'renu@gmail.com', 'user', '1ab282d547332aa6555edcf7d2064e7b5779e78ffcd0040aea560a7c9b42373fe726dbc3c6cc7f3e9036d9ad89e22fe765a114debd54cda80df6c60c0c423cd4', '9fe7dff2424b9fc34974703028b53bb01dd998eb41d90f973ffa3a1dcdc913fe0e561d5b4fa03781d408dfdea9cc33e0a9f3dcc5dc3126cf3d88e9076876e2eb', '2018-11-03 03:34:26', '2018-11-03 03:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(11) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `country` text NOT NULL,
  `addressLine1` text NOT NULL,
  `addressLine2` text NOT NULL,
  `zipCode` int(6) NOT NULL,
  `city` text NOT NULL,
  `phoneNo` bigint(10) NOT NULL,
  `paymentMethod` enum('cash','credit cart') NOT NULL DEFAULT 'cash',
  `email` varchar(300) NOT NULL,
  `status` enum('N','R','F','D','C') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `cart_id`, `name`, `country`, `addressLine1`, `addressLine2`, `zipCode`, `city`, `phoneNo`, `paymentMethod`, `email`, `status`) VALUES
(1, 3, 'user', 'India', 'j103/1 gautam nagar', 'new delhi', 110049, 'City', 9910597341, 'cash', 'user@email.com', 'N'),
(2, 4, 'atulsatewal', 'India', 'j103/1 gautam nagar', 'new delhi', 110049, 'City', 9910597341, 'cash', 'atulsatewal@gmail.co', 'C'),
(3, 5, 'vishal', 'India', 'j103/1 gautam nagar', 'new delhi', 110049, 'City', 9910597341, 'cash', 'vishal@gmail.com', 'N'),
(4, 6, 'renu', 'India', 'd5/1 3rd floor ', 'chennai', 110047, 'City', 7894512342, 'cash', 'renu@gmail.com', 'N'),
(5, 8, 'user', 'India', 'D-8', 'Gulmohar Park', 110049, 'City', 9650043051, 'cash', 'user@email.com', 'N');

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
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
