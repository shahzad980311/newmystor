-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 03:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystor`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'dadex'),
(2, 'amazon'),
(3, 'bochi'),
(4, 'saffaeer');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `product_id` int(11) NOT NULL,
  `ip_adress` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`product_id`, `ip_adress`, `quantity`) VALUES
(11, '::1', 0),
(13, '::1', 0),
(15, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'fruts'),
(2, 'juses'),
(3, 'fasion'),
(4, 'kichen');

-- --------------------------------------------------------

--
-- Table structure for table `insert_product`
--

CREATE TABLE `insert_product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `brand_id` varchar(255) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `insert_product`
--

INSERT INTO `insert_product` (`product_id`, `product_title`, `product_description`, `product_keyword`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(16, 'Orange', 'Oranges are a citrus fruit known for their vibrant color, tangy flavor, and high vitamin C content', '1. Citrus 2. Vitamin C 3. Tangy 4. Refreshing', '2', '3', 'orange3.png', 'orange2.png', 'oringesais.jpg', '300', '2023-10-12 07:20:01', '1'),
(15, 'Watermiloon', 'Watermelon is a delicious and refreshing fruit that is perfect for hot summer days', 'Juicy Sweet Refreshing Hydrating', '1', '1', 'watermilon.jpg', 'watermilon.jpg', 'oring.jpg', '700', '2023-10-12 07:22:15', '1'),
(14, 'Stobry', 'Stobry is a fictional character that is known for his', 'Mischievous Playful Quick thinking Adventures', '1', '1', 'stobrry.jpg', 'srobry2.jpg', 'mix2.jpg', '600', '2023-10-12 07:22:38', '1'),
(12, 'mMango', 'Mango is beast frute in the world', 'mango green mango jusy mango', '1', '2', 'mango1.jpg', 'mango2.jpg', 'mix2.jpg', '200', '2023-10-12 07:23:04', '1'),
(13, 'Ghraps', 'Ghraps is healthy food in the world', 'black ghraps yelo ghraps', '1', '1', 'graps1.jpg', 'graps2.jpg', 'mix1.jpg', '400', '2023-10-12 07:23:20', '1'),
(11, 'apple', 'Apple Inc. is a multinational technology company headquartered in Cupertino, California. It designs, develops, and sells consumer', 'iPhone iPad MacBook Apple Watch iOS macOS App Store Apple Music iCloud Apple TV', '1', '1', 'apple5.jpg', 'apple1.jpg', 'apple2.jpg', '200', '2023-10-12 07:23:39', '1'),
(17, 'oring', 'orange is beast to eye', 'greenorange yelooring', '1', '3\r\n', 'cherry2.png', 'Apple3.jpg', 'cherry3.jpg', '200', '2023-10-12 07:24:00', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `insert_product`
--
ALTER TABLE `insert_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insert_product`
--
ALTER TABLE `insert_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
