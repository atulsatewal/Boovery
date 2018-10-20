-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 05:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
  `delivery_address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `country` varchar(50) NOT NULL,
  `payment_mode` enum('cash','online','','') NOT NULL DEFAULT 'cash',
  `tax` float(8,2) NOT NULL DEFAULT '0.00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `img_url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `isbn`, `author`, `price`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Girl on The Train', 'The Girl on the Train is a psychological thriller novel by British author Paula Hawkins. The novel debuted at No. 1 on The New York Times Fiction Best Sellers of 2015 list dated 1 February 2015, and r', 1234567890123, 'Vikas Mahato', 420.55, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH_CatVX7NY2BsHpS7Gc_CfOYn1qyUfHe8VcfaG9ir9AnL', '2018-10-19 06:12:11', '2018-10-19 17:58:27'),
(2, 1, 'Lethal White (Cormoran Strike 4)', 'I seen a kid killed â€¦ He strangled it, up by the horse.â€™  When Billy, a troubled young man, comes to private eye Cormoran Strike\'s office to ask for his help investigating a crime he thinks he witnessed as a child, Strike is left deeply unsettled. While Billy is obviously mentally distressed and cannot remember many concrete details, there is something sincere about him and his story. But before Strike can question him further, Billy bolts from his office in a panic. Trying to get to the bottom of Billy\'s story, Strike and Robin Ellacott - once his assistant, now a partner in the agency - set off on a twisting trail that leads them through the backstreets of London, into a secretive inner sanctum within Parliament and to a beautiful but sinister manor house deep in the countryside. And during this labyrinthine investigation, Strike\'s own life is far from straightforward: His newfound fame as a private eye means he can no longer operate behind the scenes as he once did. Plus, his relationship with his former a', 545010225, 'J. K. Rowling', 700.45, 'https://www.dubraybooks.ie/content/images/thumbs/025/0256120_lethal-white-cormoran-strike-boook-4_300.jpeg', '2018-10-20 03:18:30', '2018-10-20 03:23:21');

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
(1, 'admin', 'admin@email.com', 'admin', 'c9a99b985b1e871541f20a3f7f6bd8154fa3d2407fb9e3fdc626af5f9a118c150537299b15c5635555062906b0f42984843146cbbb3b06736762991ab0e69cc3', 'dd183b390e0b0cca6d3a6d3ba39226f073806845e15361797aaa5ac52c76840e4998fe6301e46b3950777e2a8a5e0102ae19e830297fbd2a94d5c468451d1167', '2018-10-19 05:57:46', '2018-10-19 05:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`user_id`,`cart_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Constraints for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `user_cart_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `user_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
