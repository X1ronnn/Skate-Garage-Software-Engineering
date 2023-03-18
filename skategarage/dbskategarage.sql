-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 05:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbskategarage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL,
  `adminFirstName` varchar(128) NOT NULL,
  `adminMiddleName` varchar(128) NOT NULL,
  `adminLastName` varchar(128) NOT NULL,
  `adminUsername` varchar(128) NOT NULL,
  `adminPassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `adminFirstName`, `adminMiddleName`, `adminLastName`, `adminUsername`, `adminPassword`) VALUES
(3, 'Giga', 'X', 'Chad', 'user', '$2y$10$ARUQ30uI3WjGZ2xdRuhMEOaGdP6XyeIzgKYVW3mfQEbj9erEysAgK');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCode` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productColor` varchar(255) NOT NULL,
  `productSize` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productCode`, `productCategory`, `productPrice`, `productQuantity`, `productDescription`, `productColor`, `productSize`, `productImage`) VALUES
(1, 'Skateboard Viper', 'SKT-1-Green', 'Skateboard', 500, 10, 'Skateboard Viper is green.', 'Green', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(2, 'Skateboard Omen', 'SKT-2-Black', 'Skateboard', 500, 20, 'Skateboard Omen is black.', 'Black', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(3, 'Skateboard Jett', 'SKT-3-White', 'Skateboard', 500, 5, 'Skateboard Jett is white.', 'White', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(4, 'Skateboard Reyna', 'SKT-4-Purple', 'Skateboard', 500, 5, 'Skateboard Reyna is purple.', 'Purple', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(5, 'Skateboard Kay/0', 'SKT-5-Gray', 'Skateboard', 500, 30, 'Skateboard Kay/0 is gray.', 'Gray', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(6, 'Skateboard Brimstone', 'SKT-6-Brown', 'Skateboard', 500, 50, 'Skateboard Brimstone is brown', 'Brown', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(7, 'Skateboard Raze', 'SKT-7-Orange', 'Skateboard', 500, 2, 'Skateboard Raze is orange.', 'Orange', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(8, 'Skateboard Sova', 'SKT-8-Gray', 'Skateboard', 500, 10, 'Skateboard Sova is gray.', 'Gray', '25 CM & 8 CM', 'product-images/Skateboard-1.jpg'),
(9, 'Skateboard Skye', 'SKT-9-Green', 'Skateboard', 500, 90, 'Skateboard Skye is green.', 'Green', '25 CM & 8 CM', 'product-images/EnemyTreantAvatar.png'),
(10, 'Skateboard Gekko', 'SKT-10-Yellow', 'Skateboard', 500, 100, 'Skateboard Gekko is yellow.', 'Yellow', '25 CM & 8 CM', 'product-images/PlayerBoyAvatar.png'),
(11, 'Skateboard Breach', 'SKT-11-Orange', 'Skateboard', 500, 80, 'Skateboard Breach is orange.', 'Orange', '25 CM & 8 CM', 'product-images/EnemyFireDemonAvatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userFirstName` varchar(128) NOT NULL,
  `userMiddleName` varchar(128) NOT NULL,
  `userLastName` varchar(128) NOT NULL,
  `userContactNo` varchar(128) NOT NULL,
  `userAddress` varchar(128) NOT NULL,
  `userZipCode` varchar(128) NOT NULL,
  `userUsername` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userPassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userFirstName`, `userMiddleName`, `userLastName`, `userContactNo`, `userAddress`, `userZipCode`, `userUsername`, `userEmail`, `userPassword`) VALUES
(1, 'Arvin Dwight', 'Quiaoit', 'Corpuz', '09271731411', '271, Narra Drive, Tugbungan, Zamboanga City', '7000', 'xiron', 'dwight@gmail.com', '$2y$10$fRg5hqOCNwQqu3LIHDF/A.50ZC3C4sGu0UHXRim2OGwMWzH3dDnZi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
