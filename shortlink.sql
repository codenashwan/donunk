-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 08:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shortlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `key` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `url`, `key`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=74yb9E3WY1I&list=RDMM&index=27', 'zs8mKXTP', '2021-08-27 20:45:41', '2021-08-27 20:45:41'),
(2, 'https://www.youtube.com/watch?v=X27IW95OtCA&list=RDMM&index=27', 'm3inN5HN', '2021-08-27 20:48:50', '2021-08-27 20:48:50'),
(3, 'https://www.youtube.com/watch?v=X27IW95OtCA', '8zeGGB56', '2021-08-27 20:50:53', '2021-08-27 20:50:53'),
(4, 'https://www.youtube.com/watch?v=Su6Ad0PDTYw&list=RDMM&index=27', 'MmDfHQkX', '2021-08-27 20:51:14', '2021-08-27 20:51:14'),
(5, 'https://youtu.be/Icdj0jfgwac', 'kPRL7qVd', '2021-08-27 20:57:06', '2021-08-27 20:57:06'),
(6, 'https://www.youtube.com/watch?v=wBzF0NpaMq0', 'VWB1d1l3', '2021-08-28 13:39:46', '2021-08-28 13:39:46'),
(7, 'https://www.youtube.com/watch?v=dI69OAnkpSU', 'BR0ee5th', '2021-08-28 13:44:21', '2021-08-28 13:44:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
