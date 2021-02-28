-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2021 at 12:40 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MJhhpLhYIU`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_author` varchar(255) NOT NULL,
  `item_description` varchar(200) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'assets/products/1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `item_author`, `item_description`, `item_price`, `item_image`) VALUES
(39, 'The Mark of Athena', 'Rick Riordan', 'In <em>The Son of Neptune</em>, Percy, Hazel, and Frank met in Camp Jupiter, the Roman equivalent of Camp Halfblood, ', 399.00, 'assets/products/5.jpg'),
(40, 'The House of Hades', 'Rick Riordan', 'At the conclusion of <em>The Mark of Athena</em>, Annabeth and Percy tumble into a pit leading straight to the Underworld. ', 450.00, 'assets/products/6.jpg'),
(41, 'The Son of Neptune', 'Rick Riordan', 'Percy is confused. When he awoke after his long sleep, he didn’t know much more than his name. ', 280.00, 'assets/products/7.jpg'),
(48, 'Hello', 'Rick Riordan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dignissim ut nisi aliquam sodales. Quisque quis vulputate sapien, et facilisis velit.', 399.00, 'assets/products/1.jpg'),
(49, 'Hello', 'Rick Riordan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dignissim ut nisi aliquam sodales. Quisque quis vulputate sapien, et facilisis velit.', 399.00, 'assets/products/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT '1',
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`, `role`) VALUES
(15, 'okk', 'okk@gmail.com', 0, '19f6c1b2a7c1008c250d5fc3850162a11dbe8168a84d8787824179341a3b87159fab360e0284046992f14ab95713c9f79f13', '$2y$10$pLUPtfwuSSCt8jGE1Lr.CuRW5wG1k1ziqmv3A2b5IaSZnpMi64M5G', 'user'),
(16, 'aw', 'hahaaha@gmail.com', 0, 'd3ea9047c6dbd1ac4372f3d4a623be9efe2c2c4e731aa069747961f07332c6994e5f6eab0e00f46c464bd07f5ab3b94beef6', '$2y$10$mrTzCzj6rfQC/tzWJyj0eO2cg6l1a/GHmruwK5HYYh4oKNN0a5S8i', 'admin'),
(18, 'ay', 'aaaaad@gmail.com', 0, '646a1a2d0059f31ec92cdf8d6e46b79743f7818348a128450f9409f3805fb580c68e135f3c34802053cbb77a43906311c2d5', '$2y$10$6sZowTWS8nX9NmNjcEnEy.pT9qdcNuE/nGyUQ6ThRZq1yfrXUUx/y', 'admin'),
(19, 'admin', 'admin@gmail.com', 0, '5cf5eccbebbddcee7c3415cff22d5bf41d60225d7a6e6ad5540bf0e24d18526ed725b7761efd246db4c06f76258780383b5a', '$2y$10$RQ2JyHT5.LADidd.pUxIr.gcgdvKfSOkNlvquK/K889UQIRaEhM0S', 'admin'),
(22, 'admin3', 'admin3@gmail.com', 1, '1', 'admin3', 'admin'),
(24, 'admin2', 'admin2@gmail.com', 1, '1', 'admin2', 'admin'),
(25, 'admin5', 'admin5@gmail.com', 1, '1', '$2y$10$Q2oWQ55BPu2QHoShSkQkO.Vwm16ERFNKyjY0bMVubNXXMMblkO6Q2', 'admin'),
(26, 'admin6', 'admin6@gmail.com', 1, '1', 'admin6', 'admin'),
(27, 'admin7', 'admin7@gmail.com', 1, '1', '$2y$10$zZZ9bHEIcZsP41WQR3Xj5O2xJ/IWhhCDRANDrjAzg91cK1pSlL5hy', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
