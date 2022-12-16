-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 09:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `developer` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `platform` enum('PC','XBOX','PS') COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `genre`, `cover`, `developer`, `publisher`, `release_date`, `platform`, `createdAt`, `updatedAt`) VALUES
(1, 'God Of War: Ragnarok', 'Action, Adventure, RPG', 'https://www.powerpyx.com/wp-content/uploads/god-of-war-ragnarok-wallpaper.jpg', 'Santa Monica Studios', 'Sony Interactive Entertainment', '2022-11-09', 'PS', '2022-12-13 07:46:32', NULL),
(2, 'GTA: San Andreas', 'Action', 'https://thumbnails.pcgamingwiki.com/9/95/Grand_Theft_Auto_San_Andreas_Cover.jpg/300px-Grand_Theft_Auto_San_Andreas_Cover.jpg', 'Rockstar Games', 'Rockstar Games', '2004-10-24', 'PS', '2022-12-13 08:03:13', NULL),
(3, 'God Of War', 'Action, Adventure, RPG', 'https://thumbnails.pcgamingwiki.com/3/36/God_of_War_cover.jpg/800px-God_of_War_cover.jpg', 'Santa Monica Srudio', 'Sony Interactive Entertainment', '2018-04-20', 'PS', '2022-12-13 08:03:13', NULL),
(4, 'Persona 5: Royal', 'Action, JRPG', 'https://images.pcgamingwiki.com/0/00/Persona_5_Royal_cover.jpg', 'ATLUS', 'SEGA', '2020-03-21', 'PS', '2022-12-13 08:03:13', NULL),
(5, 'The Witcher 3: Wild Hunt', 'Action, RPG', 'https://images.pcgamingwiki.com/a/a4/The_Witcher_3_Wild_Hunt_-_cover.jpg', 'CD Project Red', 'WB Games', '2015-05-19', 'PC', '2022-12-13 08:03:13', '2022-12-13 02:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id` int(11) NOT NULL,
  `firstName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id`, `firstName`, `lastName`, `email`, `password`, `createdAt`, `updatedAt`) VALUES
(1, 'Ucup', 'Ucub', 'ucup_bin_ucup1402@gmail.com', '12345654', '2022-12-13 04:47:31', '2022-12-13 00:07:25'),
(2, 'John', 'Doe', 'basic@example.com', '123', '2022-12-13 04:51:43', NULL),
(3, 'Budi', 'Budi', 'budii_@gmail.com', 'iniBudiAnakBapakBudi', '2022-12-13 04:51:44', NULL),
(5, 'testUpdate', 'updateOne', 'update@example.com', 'up2date', '2022-12-13 05:52:20', '2022-12-13 00:08:10'),
(7, 'yosi', 'firdaus', 'yosus@gmail.com', '$2y$10$YdNIPfaPrZ23rdpX9RnYze/S7mg16tTxsb2j0yQHO6v0JfdbBcJ/S', '2022-12-16 06:21:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL,
  `review` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `verdict` double NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewer_id`, `games_id`, `review`, `verdict`, `createdAt`, `updatedAt`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sequi ducimus possimus sed eius veniam eligendi dolorem temporibus magni perferendis voluptate repudiandae, dolores ex illum aliquam laborum est cupiditate architecto!', 9.2, '2022-12-13 08:15:04', NULL),
(2, 1, 2, 'ksdjfklnfnjncankfkakfjkjfijikljkaf keren', 8.6, '2022-12-13 08:27:32', NULL),
(3, 1, 5, 'ksdjfklnfnjncankfkakfjkjfijikljkaf mantap', 10, '2022-12-13 08:27:32', NULL),
(4, 2, 3, 'ksdjfklnfnjncankfkakfjkjfijikljkaf mantap', 9.8, '2022-12-13 08:27:32', NULL),
(5, 3, 5, 'test update no.1', 10, '2022-12-13 08:27:32', '2022-12-13 02:54:56'),
(22, 2, 4, 'test', 9, '2022-12-16 06:46:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reviewer` (`reviewer_id`),
  ADD KEY `fk_games` (`games_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_games` FOREIGN KEY (`games_id`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reviewer` FOREIGN KEY (`reviewer_id`) REFERENCES `reviewer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
