-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 03:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `item_author`, `item_description`, `item_price`, `item_image`) VALUES
(32, 'See Me', 'Nicholas Sparks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut sem est.', 235.00, 'assets/products/2.jpg'),
(33, 'Safe Haven', 'Nicholas Sparks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut sem est.', 185.00, 'assets/products/1.jpg'),
(34, 'The Last Song', 'Nicholas Sparks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut sem est.', 185.00, 'assets/products/3.jpg'),
(35, 'The Lightning Thief', 'Rick Riordan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut sem est.', 250.00, 'assets/products/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`, `role`) VALUES
(2, 'jade', 'abc123@gmail.com', 0, '535a3f59706af73f6b1dcd8770bcf8a7c78984e452e173b3dfa9ed5a783415e21019794b2e15a152a0ffd8bfd4151db9ff1b', '$2y$10$KK0aGHII8c82V3WZOO1jhe2bBMvQlw8AfEUC0SeNL1S1u4rEOBOFC', 'user'),
(3, 'jade', 'abc1234@gmail.com', 0, '60e8407f905af436819e1fb7e8210fa95b3cdc23d1b7d53f3c58ee7a46f2de4ef3c4e6937f8b2e958d0499acb239f14efc3b', '$2y$10$hUb2yq9HF5J3VWcResRSLerFDg32R8A.mzMkiNm9CRrqpMQqhpKCG', 'user'),
(4, 'hi', 'hi@djsksk.com', 0, '283faa879637d7582535273a67ae601b9201d9f88368b4b3ba5ff72efa9f2b0d15f51d1732e61bb2c5da2b9dc017ce5d2f8b', '$2y$10$0waGbyH44Z6az6eTZRfoBe6WsBseycSSQAKm7xUZC2RX5nUQdWQrG', 'user'),
(5, 'ok', 'kslalaa@gmail.com', 0, '93ba9aab0ccb1417bc3105dab82d30b2838ee43f16a571280c5c22770987bc44bb5ce7bdf96c62aeb1023e42cd76efe8991d', '$2y$10$EdP9lEuRDD4/EwwJYRJe5eMJnQlLakD2NAQlO/vsbjCYaSmBD7hHu', 'user'),
(6, 'hi', 'mnzjade@gmaik.com', 0, '92613fd9f6fbad2c0f25faabd07ef99412b4736c2ef894b4afb845545edeb26327d08cfe01dc9f31218abebca286c4222276', '$2y$10$aomzgUPf00AZnM3AoQ8E4u5.QgFdoMOPCNvlNfgiayNpF9S9QSz2a', 'user'),
(7, 'hiaaad', 'mnzjade@gmail.com', 0, 'cb4452958878b764577b64c48faffe78c099f168cec3e294b915fddc82e5c25d404b49e2641cad6caa59ce852627c8f572f5', '$2y$10$FLnoEXAZutYcDnqUKzB98ua3CbR0Ktt/XiWFK8oumCXugdu/Ewmc.', 'user'),
(8, 'superadmin', 'superadmin@gmail.com', 0, '', 'superadmin', ''),
(10, 'superadmin', 'saksaa@gmail.com', 0, 'a390f94872d3f449565a344161a6e148fb1d467b1f72a33b8ccf9f1a1fa06efad9b77184d5e2b1d1b89c72a6475c47a6f478', '$2y$10$jz3zQ5fneAF0jqcLRVMMKOnOl4GM2Mw.xRPpC8awqF90Q/TMiE3CS', 'user'),
(11, 'superadmin', 'superadmin@fallds.com', 0, '0ed58232c59f0280d74ab744a12adffaaf2126a7e4768d8515fde51178b34478981e497b7e8075d50cfbf109cbaa76c9bb27', '$2y$10$DZJfXIjjaTvn/VI8Ea1wgecTgCGOeFU6yjGnz78IosclP4wegEYCu', 'user'),
(12, 'superadmin', 'asaaaaaaaaaas@gmail.com', 0, 'd69720a9d255e3d0686877f9b29e9b09bb85cc7db93b3fb383db50575ef3181f879e50b137e93207bb94265aebe5a0308015', '$2y$10$DwbBvIiwoYCYyvi8qMWmie.OfQDSG5CDRI2ZYfdLQmf1m3uOWuB7K', 'user'),
(13, 'hi', 'haahaha@gmail.com', 0, 'cac22814c6287302eff2d638f979de9245ba2a2852e98373014607d46210c9ef0a7877d208cef838d4718377ba75c095504b', '$2y$10$5469Zq9XZtml9swUNTIGRuW5xAcTBkNsAYQsvSWVSK6SRdKBPjyl6', 'admin'),
(14, 'hihi', 'mnazjade@gmaik.com', 0, '1f618565f0612da283ba7bce8fb61d637c165092a65bda0fb70f152161beda5f98d5f50734ebc15b580043c6ac1d92688667', '$2y$10$fjGDPf9B/l7M4aB6QPBMX.i1Ifz3ifjbRtysdyc2frjg42Q4s.zim', 'admin'),
(15, 'okk', 'okk@gmail.com', 0, '19f6c1b2a7c1008c250d5fc3850162a11dbe8168a84d8787824179341a3b87159fab360e0284046992f14ab95713c9f79f13', '$2y$10$pLUPtfwuSSCt8jGE1Lr.CuRW5wG1k1ziqmv3A2b5IaSZnpMi64M5G', 'user'),
(16, 'aw', 'hahaaha@gmail.com', 0, 'd3ea9047c6dbd1ac4372f3d4a623be9efe2c2c4e731aa069747961f07332c6994e5f6eab0e00f46c464bd07f5ab3b94beef6', '$2y$10$mrTzCzj6rfQC/tzWJyj0eO2cg6l1a/GHmruwK5HYYh4oKNN0a5S8i', 'admin'),
(17, 'hihi', '091@gmail.com', 0, 'f20266b6c438da7bc0131ef995d2d38a52ca5430c7fe61d30ee48fb999e3152f708b55ae49ad52306282e34acb9c7bbeb381', '$2y$10$PI3mNICmC4nzMKSLXaLLk.J5PLlucZMtcsh8CQm0DR4zBwSvzTcO.', 'admin'),
(18, 'ay', 'aaaaad@gmail.com', 0, '646a1a2d0059f31ec92cdf8d6e46b79743f7818348a128450f9409f3805fb580c68e135f3c34802053cbb77a43906311c2d5', '$2y$10$6sZowTWS8nX9NmNjcEnEy.pT9qdcNuE/nGyUQ6ThRZq1yfrXUUx/y', 'admin'),
(19, 'admin', 'admin@gmail.com', 0, '5cf5eccbebbddcee7c3415cff22d5bf41d60225d7a6e6ad5540bf0e24d18526ed725b7761efd246db4c06f76258780383b5a', '$2y$10$RQ2JyHT5.LADidd.pUxIr.gcgdvKfSOkNlvquK/K889UQIRaEhM0S', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
