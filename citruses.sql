-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 07:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citruses`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`, `is_approved`) VALUES
(1, 'Mika Mitrovic', 'mikamitro@yahoo.com', 'Fantastic! Thanks to this company I found out some citruses I never dreamed of. Abosulete recommendation to evryone!!1', 1),
(2, 'Somebody', 'anonymous@gmail.com', 'Hey friends, I really like ur lemons! Keep up lemonading us!!', 1),
(3, 'Somebody', 'anonymous@gmail.com', 'Hey friends, I really like ur lemons! Keep up lemonading us!!', 0),
(4, 'sadads', 'asdads@gmail.com', 'asddsadas', 1),
(5, 'Marc London', 'marclon@gmail.com', 'I really love the orange!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`) VALUES
(1, 'Orange', 'Just a completely regular orange here.', 'img/orange.jpg', '5.20'),
(2, 'Lemon', 'Warning! It\'s pretty sour!', 'img/lemon.jpg', '6.00'),
(3, 'Lime', 'It\'s similar to lemon but actually is not a lemon.', 'img/lime.jpg', '4.50'),
(4, 'Pomelo', 'Biggest citrus fruit out there!', 'img/pomelo.jpg', '8.00'),
(5, 'Orangelo', 'A hybrid between grapefruit and orange.', 'img/orangelo.jpg', '12.00'),
(6, 'Limetta', 'Lemon, but sweet!', 'img/limetta.jpg', '12.00'),
(7, 'Persian lime', 'Cross beetween key lime and lemon', 'img/persian_lime.jpg', '5.00'),
(8, 'Tangelo', 'A hybrid between mandarin orange and tangerine.', 'img/tangelo.jpg', '5.50'),
(9, 'Tangerine', 'Smaller than common oranges, but still sweet!', 'img/tangerine.jpg', '7.50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`, `role`) VALUES
(1, 'giomlly', '827ccb0eea8a706c4c34a16891f84e7b', 'giomlly@yahoo.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
