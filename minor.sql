-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 03:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_customer`
--

CREATE TABLE `add_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_customer`
--

INSERT INTO `add_customer` (`id`, `name`, `address`, `gender`, `phone`) VALUES
(1, 'SAROJ KUMAR', 'JANAKPUR,BELHI-9', '0', 435),
(2, 'Tika sah', 'janakpur, dharan', '0', 9815809465),
(3, 'Tika sah', 'janakpur, dharan', 'female', 98158065),
(4, 'SAROJ KUMAR', 'JANAKPUR,BELHI-9', 'male', 3243),
(5, 'Tika', 'Belhi', 'female', 9815809465),
(6, 'Tika sah', 'janakpur, dharan', 'female', 9815809465),
(7, 'Tika sah', 'janakpur, dharan', 'male', 9815809465),
(8, '', '', '', 0),
(9, '', '', '', 0),
(10, 'tika', 'sdsjkh', 'male', 123),
(11, 'tika', 'kj', 'female', 5432),
(12, 'Tika', 'Belhi', 'female', 9815809),
(13, 'ritesh', 'ksjfh', '', 3975),
(14, 'tika', 'fhgjbn', 'male', 4567),
(15, 'UNKNOWN', 'UNKNOWN', 'MALE', 0),
(16, 'UNKNOWN', 'UNKNOWN', 'MALE', 0),
(17, 'UNKNOWN', 'UNKNOWN', 'MALE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_receptionist`
--

CREATE TABLE `add_receptionist` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$HbsJMd6UU69v3PTq1Y3S5OaBLBhGvIMJEM1RKgY6CMg.8tG9BUNOu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_receptionist`
--

INSERT INTO `add_receptionist` (`id`, `name`, `address`, `gender`, `phone`, `email`, `password`) VALUES
(1, 'kalam', 'khsfkajah', 'male', 987654, 'kalam@gmail.com', '$2y$10$E49WyNrCr8JEfHRBg9niX.FPRJrpszhnEtKauGRRbhM7t/3suA2EW'),
(1, 'raj', 'jsk', 'female', 4389, 'kdj@gmail.com', '$2y$10$HbsJMd6UU69v3PTq1Y3S5OaBLBhGvIMJEM1RKgY6CMg.8tG9BUNOu'),
(1, 'pankaj', 'ertyu', 'male', 9876543, 'rfghb@gmail.com', '$2y$10$uvp.cpSRmFPmgVU47PUcLuMmULjHI7Y8u1lGHF7OYII/uvvn07WZy'),
(1, 'SAROJ KUMAR', 'JANAKPUR,BELHI-9', 'female', 3435, 'skj@gmail.com', '$2y$10$HbsJMd6UU69v3PTq1Y3S5OaBLBhGvIMJEM1RKgY6CMg.8tG9BUNOu'),
(1, 'SAROJ KUMAR', 'JANAKPUR,BELHI-9', 'male', 9815809465, 'tikasah4@gmail.com', '$2y$10$HbsJMd6UU69v3PTq1Y3S5OaBLBhGvIMJEM1RKgY6CMg.8tG9BUNOu'),
(1, 'Tika Sah', 'Belhi', 'male', 9815809465, 'tikasah84@gmail.com', '$2y$10$F3xX2As3jbHTlU17oli5FOX7G96xzpOQFFiYxMVJgpDhFcyxLvjEq'),
(2, 'Tika', 'Belhi', 'male', 9815809465, 'tikasah@gmail.com', '$2y$10$HbsJMd6UU69v3PTq1Y3S5OaBLBhGvIMJEM1RKgY6CMg.8tG9BUNOu');

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `username`, `password`) VALUES
(1, 'tikasah84', '$2y$10$wSZd3XJlvw0yH6j.3oSTIu1GWGaZMMitQMHsAQBHvOWBE0KPaSdt6');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `rate` double NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` double NOT NULL,
  `dis` float NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(1, 'general store', 1),
(2, 'computer', 1),
(3, 'oli', 1),
(4, 'freez', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `item` varchar(20) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `rate` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `item`, `cat_id`, `stock`, `rate`, `status`) VALUES
(1, 'water', 1, 428, 20, 1),
(2, 'apple', 1, 254, 50, 1),
(3, 'keyboard', 2, -14, 200, 1),
(4, 'monitor', 2, 298, 1000, 1),
(5, 'jasmin', 3, 83, 100, 1),
(6, 'coce', 4, 27, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `receptionist` varchar(20) NOT NULL,
  `customer` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `amount`, `receptionist`, `customer`, `date`) VALUES
(1, 5040, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:19:35'),
(2, 5040, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:22:22'),
(3, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:22:59'),
(4, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:23:16'),
(5, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:23:36'),
(6, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:24:35'),
(7, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:25:03'),
(8, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:25:44'),
(9, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:26:22'),
(10, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:26:34'),
(11, 0, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:26:41'),
(12, 3600, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 11:27:01'),
(13, 225, 'Tika Sah', 'Tika sah', '2021-07-31 11:30:16'),
(14, 972, 'Tika Sah', 'Tika sah', '2021-07-31 11:32:59'),
(15, 198, 'Tika Sah', 'SAROJ KUMAR', '2021-07-31 15:27:46'),
(16, 261, 'Tika Sah', '', '2021-07-31 15:35:11'),
(17, 3150, 'Tika Sah', '', '2021-07-31 17:51:23'),
(18, 2700, 'Tika Sah', '', '2021-07-31 17:52:30'),
(19, 9900, 'Tika Sah', '', '2021-07-31 18:11:06'),
(20, 0, 'Tika Sah', 'Tika sah', '2021-07-31 18:42:09'),
(21, 10, 'Tika Sah', 'Tika sah', '2021-07-31 18:56:52'),
(22, 100, 'Tika Sah', 'Tika sah', '2021-07-31 18:57:41'),
(23, 900, 'Tika Sah', 'Tika sah', '2021-07-31 18:59:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_receptionist`
--
ALTER TABLE `add_receptionist`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`cat_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_customer`
--
ALTER TABLE `add_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `test` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
