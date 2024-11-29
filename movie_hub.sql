-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 02:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `movie_id`, `user_id`, `booking_date`) VALUES
(2, 10, 4, '2024-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(11) NOT NULL CHECK (`rating` between 1 and 5),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`, `rating`, `timestamp`) VALUES
(1, 'saman', 'Nice', 3, '2024-08-28 08:14:21'),
(2, 'saman', 'Fantastic', 3, '2024-08-28 08:14:42'),
(3, 'saman', 'Fantastic', 3, '2024-08-28 08:16:37'),
(4, 'saman', 'Fantastic', 3, '2024-08-28 08:17:53'),
(5, 'saman', 'Fantastic', 3, '2024-08-28 08:18:42'),
(6, 'saman', 'Fantastic', 3, '2024-08-28 08:21:36'),
(7, 'saman', 'Fantastic', 3, '2024-08-28 08:22:17'),
(8, 'saman', 'Fantastic', 3, '2024-08-28 08:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `rating`) VALUES
(1, 'The Convert', 'Action', 7.5),
(2, 'Bad Boys', 'Action', 7.8),
(3, 'Batman', 'Action', 6),
(4, 'Humane', 'Horror', 6.1),
(5, 'The Strangers', 'Horror', 6.9),
(6, 'Under Paris', 'Horror', 7.6),
(7, 'Verge of Death', 'Horror', 6.6),
(8, 'Godzilla X Kong', 'Horror', 6.2),
(9, 'Farang', 'Horror', 5.9),
(10, 'Ghost Busters', 'Horror', 5.8),
(11, 'Prey', 'Fantasy', 7.6),
(12, 'Ship of the Damned', 'Fantasy', 7.4),
(13, 'All Fun and Games', 'Fantasy', 7.8),
(14, 'Hellhound', 'Fantasy', 7.7),
(15, 'Planet of the Apes', 'Fantasy', 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `contact_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'saman', 'sajith@gmail.com', '$2y$10$vDCgVAge9kzzrIMVAvXVrOVRwRh8/L7fYYEn4jhst3ZhlB0fJXeEu', '2024-08-26 14:11:30'),
(2, 'charith', 'charith@gmail.com', '$2y$10$s7tzcBnYinxu4tFffeJrAubS8FkyNiWRECxeKg3tVqJG2JsUTEw6u', '2024-08-26 14:13:39'),
(4, 'nadil', 'nadil@gmail.com', '$2y$10$rIHgGzYSMTTbzjkKvdmF5OJ74d/oKn/VfRuipUUmp8qwtQAswRhim', '2024-08-27 03:29:45'),
(5, 'nadil', 'chenitha@gmail.com', '$2y$10$eDA4AqFazi0KVPhBQc01auBx/7IndmU3BuDjV5DIZZfer1KHZqqu.', '2024-08-27 07:23:28'),
(7, 'nadil', 'dsdsd@gmail.com', '$2y$10$uTsU0FoTvs6L.nHuqVQKlOOwUAliECbpfi8/eYLz.tBmq8FQm9pUa', '2024-08-27 07:34:59'),
(9, 'shalani', 'shalani@gmail.com', '$2y$10$nc.ftw4eGpBXnEmhRSP0sehupkXC6047kkuYShRzWS4JsJWJWzgz.', '2024-08-27 13:11:06'),
(10, 'shalani@gmail.com', 'shalani@gmail.com', '$2y$10$JoICKZbJriTAb5dyrJ3DDunyzk50.vAI4OK8DMAUa7DgTAcBMDjqe', '2024-08-27 13:21:47'),
(11, 'shalani', 'shalani@gmail.com', '$2y$10$t69PWe3kFfa4505Z/R43peZvyLKJGgyqmJ46Vz2hOsbCiDn/GDCja', '2024-08-27 13:29:36'),
(12, 'bhathiya', 'bhathi@gmail.com', '$2y$10$LWVOAMMEm/TmKBiN2hFiNOdPLpurBGUvLNjg313rlDxK3Kg6NTMCC', '2024-08-27 13:41:45'),
(13, 'bhathiya', 'sajith@gmail.com', '$2y$10$nZSrOZa3Zu7galJueQwYnezraU6/7toFPISfOruuLZHhKUtwPaxA2', '2024-08-28 05:58:26'),
(14, 'bhathiya', 'sajith@gmail.com', '$2y$10$uTqba1ieFtjjhswfa6ifEuHpkxSUXUuKNbrqUx394vjd4FJzsfLdi', '2024-08-28 05:59:56'),
(15, 'saman', 'saman@gmail.com', '$2y$10$EMubH94B/oyHKZ2nvQUKhehxLq8NrCyBY8hhZeQQtOqHMaq9iImya', '2024-08-28 07:39:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
