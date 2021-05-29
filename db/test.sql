-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2021 at 06:51 AM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `agregat`
-- (See below for the actual view)
--
CREATE TABLE `agregat` (
`barcode` int
,`delivered` decimal(23,0)
,`jumlah` bigint
,`onhold` decimal(23,0)
,`packing` decimal(23,0)
,`ready` decimal(23,0)
,`sent` decimal(23,0)
,`total_harga` double
);

-- --------------------------------------------------------

--
-- Table structure for table `pivot`
--

CREATE TABLE `pivot` (
  `id` int NOT NULL,
  `barcode` int NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pivot`
--

INSERT INTO `pivot` (`id`, `barcode`, `product_name`, `price`, `status`) VALUES
(1, 1111, 'APPLE', 10, 'READY'),
(2, 1111, 'APPLE', 20, 'DELIVERED'),
(3, 1111, 'APPLE', 30, 'SENT'),
(4, 1111, 'APPLE', 10, 'ONHOLD'),
(5, 1111, 'APPLE', 20, 'PACKING'),
(6, 1111, 'APPLE', 40, 'SENT'),
(7, 1111, 'APPLE', 50, 'SENT'),
(8, 1122, 'PINAPPLE', 10, 'READY'),
(9, 1122, 'PINAPPLE', 10, 'DELIVERED'),
(10, 1122, 'PINAPPLE', 10, 'PACKING'),
(11, 1122, 'PINAPPLE', 10, 'DELIVERED');

-- --------------------------------------------------------

--
-- Structure for view `agregat`
--
DROP TABLE IF EXISTS `agregat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `agregat`  AS  select `pivot`.`barcode` AS `barcode`,count(`pivot`.`id`) AS `jumlah`,sum(`pivot`.`price`) AS `total_harga`,sum((case when (`pivot`.`status` = 'READY') then 1 else 0 end)) AS `ready`,sum((case when (`pivot`.`status` = 'ONHOLD') then 1 else 0 end)) AS `onhold`,sum((case when (`pivot`.`status` = 'DELIVERED') then 1 else 0 end)) AS `delivered`,sum((case when (`pivot`.`status` = 'PACKING') then 1 else 0 end)) AS `packing`,sum((case when (`pivot`.`status` = 'SENT') then 1 else 0 end)) AS `sent` from `pivot` group by `pivot`.`barcode` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pivot`
--
ALTER TABLE `pivot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pivot`
--
ALTER TABLE `pivot`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
