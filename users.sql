-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 12:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'frank', '', '', '$2y$10$2T6eB0wyzjdWbNCE8UTWRuvmvtDZP4NsfBowalOckiQGvzkMDFMqK'),
(2, 'frank', '', 'frank', '$2y$10$U8buCOBN0Jn0PKcleNCRpeNPZ6/k0gL5JiwZolU881ifOPGoqAcMa'),
(3, 'john', 'frankyfreaky103@gmail.com', 'doe', '$2y$10$DFlKAn0mVe2IGZL7yM0rKuj72kPySKkUmIC2U/8XcPjGRanoC10OW'),
(4, 'jonathan ', 'jonathan@gmail.com', 'saya', '$2y$10$wApJGz0.GpO1l0oNM/zAcOdlgRDsFVnmHhpe89.R9FjrcspWmpRxO'),
(5, 'kevin', 'frankyfreaky103@gmail.com', 'jones', '$2y$10$OG8a8XFER.zknGZDJmlgkOBCiVrAvpCY0nJwul/G0nZ0BmACAwMYm'),
(6, 'jack', 'jack@gmail.com', 'jacky', '$2y$10$ESoIj8g4CmYyggIIF3yBweoadwUkl4f1UOy67dCVA1O47ZiQsXwMm'),
(7, 'deco', 'deco103@gmail.com', 'deco', '$2y$10$JeO3Hxl5MeuwDRWfGwTbZuwfpLUp82.6q03Bk7g.X8ojSNnbFfeU6'),
(8, 'ken', 'clopp@gmail.com', 'clopp', '$2y$10$HdD0xId7syh/egczKI5sl.82Fxf3GY9l2V1BBmSqEUAJALeLJKcii'),
(9, 'kena', 'kena@gmail.com', 'kena', '$2y$10$ULPfV/jfGfabcKQ2qDgNhOEmAt4Eze6.pNdbUzpRxsbGI/heBNMDC'),
(10, 'john', 'wick@gmail.com', 'wick', '$2y$10$iS9.2LtKjK0lJPk5Ry1esuaU2aNFg.fxCrZwT/T9jOwZnX8qyp/te');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
