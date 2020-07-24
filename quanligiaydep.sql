-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 08:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanligiaydep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `pass`, `email`, `type`, `name`, `phone_number`) VALUES
(1, 'admin', 'admin', 'admin@email.com', 1, 'Mr.Admin', '123456789'),
(2, 'mod', 'mod', 'mod@email.com', 0, 'Mr.Mod', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Converse'),
(4, 'Puma'),
(5, 'Vans'),
(6, 'Bitis');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'Men'),
(2, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE `customer_account` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`id`, `username`, `pass`, `email`, `name`, `phone_number`) VALUES
(1, 'hello', '$2y$10$iS5Sj9B./u710uWYQxYkrOlHqFdplNppqParRJ1d20R9ontXPKBuK', 'helloworld@email.com', 'Hello World', '42542546'),
(2, 'duotien', '$2y$10$n2xSb.M0wZDW2YYFb1C10ONf5yUgFdxg8F2fmurxnG6n210T2qs.e', 'duotien@email.com', 'Dương Tiến', '8653434576'),
(3, 'a', '$2y$10$IQXuzslDYHv2JcKKVpto0.bbV5wNAE6t4UjoTcW41YIvf2NEgkFg.', 'a@a.com', 'aaaaaaa', '1235153'),
(4, 'b', '$2y$10$.URFbOMYkBzwJu1kXZel2uzo3uRVchojeF7qjIftBU4ITAOC5rJPu', 'b@b.com', 'Mister BBBBB', '1363821'),
(5, 'c', '$2y$10$atv6Id31nHCjNVa74fLOiezp4.NC0Z/plEzI.37b8rsxK5RbEGJ3.', 'c@c.com', 'Mrs. C', '23567783');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `brand_id` int(10) NOT NULL,
  `cate_id` int(10) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(10) NOT NULL,
  `img_path` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand_id`, `cate_id`, `price`, `quantity`, `img_path`, `description`) VALUES
(1, 'Giày Nikey', 1, 1, 300, 12, 'images/product/react-phantom-run-flyknit-.jpg', 'This is description'),
(2, 'Giày adidas', 2, 2, 150, 300, 'images/product/custom-nike-blazer-low.jpg', 'This is description'),
(3, 'Adidas Ultra Boost 20', 2, 1, 130, 100, 'images/product/Giay_UltraBoost_20.jpg', 'This is description'),
(4, 'Adidas Originals Superstar White', 2, 2, 100, 100, 'images/product/adidas-superstar-white.jpg', 'This is description'),
(5, 'Adidas Originals Superstar Black', 2, 1, 100, 100, 'images/product/Superstar_black.jpg', 'This is description'),
(6, 'Jordan 1 Retro High Court Purple', 2, 1, 120, 100, 'images/product/Jordan1.jpg', 'This is description'),
(7, 'Nike Air Zoom Streak 7', 1, 2, 130, 100, 'images/product/Zoom_Streak7.jpg', 'This is description'),
(8, 'Nike Zoom Fly Flyknit', 1, 1, 100, 100, 'images/product/Zoom_fly_flyknit.jpg', 'This is description'),
(9, 'Nike Air Max 90 Red', 1, 2, 100, 100, 'images/product/Airmax90.jpg', 'This is description\r\n'),
(10, 'Nike Air Max 270', 1, 1, 140, 100, 'images/product/Airmax270.jpg', 'This is description'),
(11, 'Nike Air Zoom Pegasus 33 Shield', 1, 1, 130, 100, 'images/product/Pegasus_33_Shield.jpg', 'This is description'),
(12, 'Converse 1970s High', 3, 1, 100, 50, 'images/product/Converse_1970s.png', '1970s White version'),
(13, 'Puma RS-X', 4, 2, 200, 10, 'images/product/Puma RS-X.jpg', 'Lightful Color'),
(14, 'Puma Cali Trainer', 4, 2, 250, 20, 'images/product/Puma Cali Trainers.jpg', 'This is description'),
(15, 'Converse Low', 3, 1, 50, 100, 'images/product/ConverseLow.jpg', 'Yellow color'),
(16, 'Vans Old Skool ', 5, 2, 80, 50, 'images/product/Van pink.jpg', 'Pink'),
(17, 'Vans Old Skool ', 5, 1, 100, 120, 'images/product/Vans old skool.jpg', 'Vans'),
(18, 'Vans Old Skool ', 5, 2, 80, 100, 'images/product/Vans Slip-on.jpg', 'Slip-on'),
(19, 'Converse All-Stars Logo', 3, 1, 200, 50, 'images/product/Converse.jpg', 'All-Stars Logo'),
(20, 'Converse Water-proof Gore-Tex', 3, 1, 180, 20, 'images/product/Converse1.jpg', 'Waterproof'),
(21, 'Puma X Selena Gomez', 4, 2, 300, 200, 'images/product/PumaxSelena.jpg', 'Selena'),
(22, 'Bitis Hunter PKL', 6, 1, 50, 100, 'images/product/Hunter PKL.jpg', 'This is description'),
(23, 'Bitis Hunter PKL', 6, 1, 50, 50, 'images/product/Hunter PKl.jpeg', 'This is description'),
(24, 'Bitis Hunter X', 6, 2, 30, 100, 'images/product/HUNTER X.jpg', 'This is description\r\n'),
(25, 'Bitis Hunter Core', 6, 2, 35, 50, 'images/product/Hunter Core.jpg', 'Core'),
(26, 'Adidas Originals Superstar White', 2, 2, 100, 100, 'images/product/adidas-superstar-white.jpg', 'This is description'),
(27, 'Nike Air Max 270', 1, 1, 140, 100, 'images/product/Airmax270.jpg', 'This is description');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product1` (`brand_id`),
  ADD KEY `fk_product2` (`cate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_account`
--
ALTER TABLE `customer_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `fk_product2` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
