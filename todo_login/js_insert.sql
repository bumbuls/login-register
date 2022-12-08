-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb34.awardspace.net
-- Generation Time: Dec 08, 2022 at 08:00 PM
-- Server version: 5.7.20-log
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3931080_bumbuls`
--

-- --------------------------------------------------------

--
-- Table structure for table `js_insert`
--

CREATE TABLE `js_insert` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js_insert`
--

INSERT INTO `js_insert` (`id`, `name`, `username`, `password`, `created_at`) VALUES
(36, '', '', '$2y$10$9YpowVG7nyMv3xN6rdAqVeQ7uB4gvm2wC/h.BJHszeszmkX38zGnO', '2022-12-08 13:18:18'),
(35, 'test', 'test', '$2y$10$DcWK3rbq5iTTZligaaLnju1ilsZ2LztXrujaDT5zyXzmjNqnZHa6a', '2022-12-08 13:10:02'),
(34, 'yesy', 'yes', '$2y$10$Mvu3aW/V6FbKtxXLYZbBQumDtRx2f.nyDoguQcrXj4mCTomHLuMdW', '2022-12-08 12:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `js_insert`
--
ALTER TABLE `js_insert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `js_insert`
--
ALTER TABLE `js_insert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
