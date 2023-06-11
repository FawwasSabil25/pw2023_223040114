-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 09:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svr_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `main_desc` varchar(255) DEFAULT NULL,
  `sec_desc` varchar(255) DEFAULT NULL,
  `cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `publisher`, `genre`, `rating`, `price`, `main_desc`, `sec_desc`, `cover`) VALUES
(1, 'Guilty Gear Strive', 'Arc System Works', 'Fighting', '86%', 'Rp, 500.000,00,-', ' a fighting game that features a diverse cast of characters with unique abilities and stunning visuals.', 'uilty Gear Strive is a fighting game developed by Arc System Works and released in June 2021. It is the            latest installment in the Guilty Gear series, which has been around since 1998.', 'gg.jpg'),
(2, 'Forza Horizon', 'Microsoft Studios', 'Driving', '85%', 'Rp, 100.000,00,-', 'an open world racing game you can explore with a large selection of cars', '', 'forza.jpg'),
(3, 'Assetto Corsa', '505 Games', 'Driving', '85%', 'Rp, 108.000,00,-', 'you can race multiple cars in multiple race tracks with sensational driving physics', '', 'AC.jpg'),
(4, 'Counter Strike', 'Valve', 'Shooter', '88%', 'free', 'Hop on 2 teams avaible to successfully defuse a bomb or plant a bomb.', '', 'CS.jpg'),
(5, 'Crysis', 'Crytec', 'Shooter', '91%', 'Rp, 139.000,00,-', 'first person shooting game with high-tech soldiers battle aliens on a tropical island.', '', 'crysis.jpg'),
(6, 'Cult Of the Lamb', 'Devolver Digital', 'Adventure', '88%', 'Rp, 150.000,00,-', '        You take on the role of a sacrificed lamb who gains god-like powers and seeks to rebuild their cult\",', '', 'cotl.jpg'),
(7, 'Genshin Impact', 'Hoyoverse', 'Adventure', '84%', 'Free', 'Travel a world full fantasy and mystery while searching your long lost sibling', '', 'genshin.jpg'),
(8, 'Multiversus', 'Warner Bros. Games', 'Fighting', '86%', 'Free', 'Pick your favoutite characters from warnerbros or cartoon network and start rumble', '', 'multiversus.jpg'),
(9, 'Fallout New Vegas', 'Bethesda Softworks', 'RPG', '82%', 'Rp, 110.000,00,-', 'navigate through the wasteland of a Las Vegas while making choices that affect the story\'s outcome.', '', 'Fallout.jpg'),
(10, 'Powerwash Simulator', 'Square Enix Collective', 'Simulations', '81%', 'Rp, 180.000,00,-', 'a relaxing game where you clean and restore various items and surfaces using a high-pressure washer.', '', 'powerwash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
