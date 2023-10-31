-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 11:36 PM
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
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registration_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `mobile`, `email`, `address`, `registration_number`) VALUES
(1, '0726200555', 'towetmat@gmail.com', 'kimilili22', 'BMIT/1876/20'),
(2, '795704273', 'frankyfreaky103@gmail.com', '514y9', 'BMIT/1876/20'),
(3, '795704273', 'frankyfreaky103@gmail.com', '514y9', 'BMIT/1876/20'),
(4, '795704273', 'frankyfreaky103@gmail.com', '514y9', 'BMIT/1876/20'),
(5, '07262004444', 'felixlochodo@gmail.com', 'southstreet', 'BMIT/9886/20'),
(6, '0726200222', 'franktec@gmail.com', '514y9', 'BMIT/1886/21'),
(7, '04686668549', 'frankertraky103@gmail.com', '514y9', 'BMIT/1886/20'),
(8, '079567788', 'wick@gmail.com', 'kimathiav', 'BPLO/1222/09/20'),
(9, '07234569499', 'Ken@gmail.com', 'rere', 'BMIT/200/20'),
(10, '07345449459', 'gaela@gmail.com', 'kimathi av', 'BMIT/2000/20'),
(11, '07345449459', 'gaela@gmail.com', 'kimathi av', 'BMIT/2000/20'),
(12, '0745696994', 'frankyfreaky103@gmail.com', '514y9', 'BMIT/1888/20'),
(13, '0795793878', 'frankyfreaky103@gmail.com', 'kimathiav', 'BMIT/1888/21'),
(14, '234567890', 'frankyfreaky103@gmail.com', '514y9', 'BPLO/1222/09/20'),
(15, 'scott', 'scott@gmail.com', 'scott', 'BMIT/1886/2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
