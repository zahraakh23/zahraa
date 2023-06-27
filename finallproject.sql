-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 11:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finallproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime(6) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `date`, `message`) VALUES
(4, 'zahraa', 'zz@d.com', '2023-06-13 10:07:23.000000', 'jjj'),
(5, 'zahraa', 'hello@gmail.com', '2023-06-26 21:29:49.000000', 'hello website chic design');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(36, 'Wooden door ', '230$', 'images/WhatsApp Image 2023-06-05 at 11.16.08 AM.jpeg'),
(38, 'Brown door', '200$', 'images/WhatsApp Image 2023-06-05 at 11.16.08 AM (1).jpeg'),
(39, 'Silver Door', '180$', 'images/WhatsApp Image 2023-06-05 at 1.27.11 PM.jpeg'),
(40, 'White Door', '160$', 'images/WhatsApp Image 2023-06-05 at 11.17.51 AM.jpeg'),
(41, 'Dark wooden Door', '210$', 'images/WhatsApp Image 2023-06-05 at 11.17.05 AM.jpeg'),
(42, 'yellow Dining Table', '420$', 'images/WhatsApp Image 2023-06-05 at 12.21.04 PM.jpeg'),
(43, 'Modern Dining Table', '380$', 'images/WhatsApp Image 2023-06-05 at 12.19.36 PM.jpeg'),
(44, 'Wooden Dining Table', '500$', 'images/WhatsApp Image 2023-06-05 at 12.19.36 PM (1).jpeg'),
(45, 'Simple Dining Table', '300$', 'images/WhatsApp Image 2023-06-05 at 12.19.35 PM.jpeg'),
(46, 'Black Dining Table', '610$', 'images/WhatsApp Image 2023-06-05 at 12.22.07 PM.jpeg'),
(47, 'Rose Bed', '1300$', 'images/WhatsApp Image 2023-06-05 at 12.34.01 PM.jpeg'),
(48, 'Silver Bed', '1200$', 'images/WhatsApp Image 2023-06-05 at 12.33.41 PM.jpeg'),
(49, 'Wooden Bed', '900$', 'images/WhatsApp Image 2023-06-05 at 12.33.41 PM (1).jpeg'),
(50, 'Modern Bed', '820$', 'images/WhatsApp Image 2023-06-05 at 12.33.41 PM (2).jpeg'),
(51, 'White  Bed', '690$', 'images/WhatsApp Image 2023-06-05 at 12.33.40 PM.jpeg'),
(52, 'Brown Sofa ', '700$', 'images/WhatsApp Image 2023-06-05 at 12.40.32 PM.jpeg'),
(53, 'White Sofa', '520$', 'images/WhatsApp Image 2023-06-05 at 12.40.07 PM.jpeg'),
(54, 'Modern Sofa', '270$', 'images/WhatsApp Image 2023-06-05 at 12.39.15 PM.jpeg'),
(55, 'Rose Sofa', '400$', 'images/WhatsApp Image 2023-06-05 at 12.39.13 PM.jpeg'),
(56, 'Dark Blue Sofa', '560$', 'images/WhatsApp Image 2023-06-05 at 12.39.12 PM.jpeg'),
(57, 'White Library', '460$', 'images/WhatsApp Image 2023-06-05 at 1.12.58 PM.jpeg'),
(58, 'Modern Library', '290$', 'images/WhatsApp Image 2023-06-05 at 1.11.21 PM.jpeg'),
(59, 'Chic Library', '400$', 'images/WhatsApp Image 2023-06-05 at 1.10.32 PM.jpeg'),
(60, 'Simple Library', '230$', 'images/WhatsApp Image 2023-06-05 at 1.10.33 PM.jpeg'),
(61, 'Black Library', '320$', 'images/WhatsApp Image 2023-06-05 at 1.11.21 PM (1).jpeg'),
(62, 'Grey Console', '60$', 'images/WhatsApp Image 2023-06-05 at 1.22.46 PM.jpeg'),
(63, 'Chic Console', '99$', 'images/WhatsApp Image 2023-06-05 at 1.22.45 PM.jpeg'),
(64, 'Wooden Console', '75$', 'images/WhatsApp Image 2023-06-05 at 1.21.42 PM.jpeg'),
(65, 'Simple Console', '55$', 'images/WhatsApp Image 2023-06-05 at 1.21.42 PM (1).jpeg'),
(66, 'Small Console', '40$', 'images/WhatsApp Image 2023-06-05 at 1.22.46 PM (1).jpeg'),
(67, 'Bed for kids Girl', '1800$', 'images/WhatsApp Image 2023-06-05 at 1.31.22 PM.jpeg'),
(68, 'kids Room', '1430$', 'images/WhatsApp Image 2023-06-05 at 1.30.18 PM.jpeg'),
(69, 'White Room', '999$', 'images/WhatsApp Image 2023-06-05 at 1.30.17 PM.jpeg'),
(70, 'Bed for kids Boy', '1200$', 'images/WhatsApp Image 2023-06-05 at 1.32.19 PM.jpeg'),
(71, 'Modern Bed', '1300$', 'images/WhatsApp Image 2023-06-05 at 1.31.22 PM (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `thecard`
--

CREATE TABLE `thecard` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thecard`
--

INSERT INTO `thecard` (`id`, `name`, `price`, `user_id`) VALUES
(73, 'Brown door', '200$', 4),
(74, 'Modern Sofa', '270$', 4),
(75, 'Brown door', '200$', 0),
(76, 'White Door', '160$', 0),
(77, 'Silver Door', '180$', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(4, 'zahraa ', 'hello@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thecard`
--
ALTER TABLE `thecard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `thecard`
--
ALTER TABLE `thecard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
