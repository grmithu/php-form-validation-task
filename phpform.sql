-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 05:26 PM
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
-- Database: `phptask`
--

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` bigint(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `receipt_id` varchar(20) NOT NULL,
  `items` varchar(255) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_ip` varchar(20) DEFAULT NULL,
  `note` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `entry_at` date DEFAULT NULL,
  `entry_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `amount`, `buyer`, `receipt_id`, `items`, `buyer_email`, `buyer_ip`, `note`, `city`, `phone`, `entry_at`, `entry_by`) VALUES
(1, 10, 'uyik', 'ujikju', 'uiku', 'ui@gmail.com', '::1', 'uo', 'ui', '547655', '2024-09-28', 57),
(2, 10, 'uyik', 'ujikju', 'uiku', 'ui@gmail.com', '::1', 'uo', 'ui', '547655', '2024-09-28', 57),
(3, 10, 'uyik', 'ujikju', 'uiku', 'ui@gmail.com', '::1', 'uo', 'ui', '547655', '2024-09-28', 57),
(4, 1, 'Golam Rabbani Mithu', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 100),
(5, 11, 'Golam Rabbani Mithu1', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 100),
(6, 112, 'Golam Rabbani Mithu1', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 100),
(7, 201, 'Sakib Hasan', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 100),
(8, 202, 'Sakib Hasan', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 202),
(9, 112, 'Golam Rabbani Mithu1', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 100),
(10, 112, 'Golam Rabbani Mithu1', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 100),
(11, 501, 'ollyo con', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 501),
(12, 601, 'ollyo con', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 501),
(13, 4552, 'Hello', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 501),
(14, 14444, 'Hello', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 501),
(15, 14444, 'Hello', '101', 'Books', 'admin@gmail.com', '::1', 'Test', 'Dhaka', '12', '2024-09-28', 501),
(16, 10, 'Tamim Islam', '101', 'Laptop', 'test@gmail.com', '::1', 'This is test note.', 'Dhaka', '01755214411', '2024-09-28', 1001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
