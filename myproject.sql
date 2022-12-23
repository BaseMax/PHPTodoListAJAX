-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 09:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `title`, `description`, `created_at`, `updated_at`, `status`) VALUES
(3, 2, 'vue js', 'i can not learn vue :)', '2022-12-22 13:26:11', '2022-12-22 10:55:49', 0),
(42, 1, '1', 'avoid forgeting laptop', '2022-12-23 21:58:31', '0000-00-00 00:00:00', 1),
(43, 1, '2', 'pretend to tweet milk', '2022-12-23 21:58:41', '0000-00-00 00:00:00', 0),
(44, 1, '3', 'avoid learning needle work', '2022-12-23 21:58:50', '0000-00-00 00:00:00', 0),
(45, 1, '4', 'crash fishing rod', '2022-12-23 21:59:00', '0000-00-00 00:00:00', 0),
(46, 1, '5', 'pretend to avoid charges', '2022-12-23 21:59:16', '0000-00-00 00:00:00', 0),
(47, 1, '6', 'promote fines', '2022-12-23 21:59:26', '0000-00-00 00:00:00', 1),
(48, 1, '7', 'help buy milk', '2022-12-23 21:59:36', '0000-00-00 00:00:00', 0),
(49, 1, '8', 'forget Node.js', '2022-12-23 21:59:44', '2022-12-23 21:13:09', 1),
(50, 1, '9', 'avoid bird', '2022-12-23 21:59:54', '0000-00-00 00:00:00', 1),
(51, 1, '10', 'promote distant relatives', '2022-12-23 22:00:13', '0000-00-00 00:00:00', 0),
(52, 1, '11', 'avoid throwing knife', '2022-12-23 22:00:27', '0000-00-00 00:00:00', 0),
(53, 1, '12', 'skip throwing distant relatives', '2022-12-23 22:00:40', '0000-00-00 00:00:00', 0),
(54, 1, '13', 'pretend to tweet needle work', '2022-12-23 22:00:53', '0000-00-00 00:00:00', 0),
(55, 1, '14', 'skip selling distant relatives', '2022-12-23 22:01:12', '0000-00-00 00:00:00', 0),
(56, 1, '15', 'pretend to fix adults', '2022-12-23 22:01:33', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `joined_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `joined_at`) VALUES
(1, 'ahmadi', 'ahmadi@gmail.com', '123456a', '2022-12-21 13:45:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
