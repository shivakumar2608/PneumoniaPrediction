-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 28, 2024 at 08:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pneumonia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `email`, `mobile`, `password`, `login_time`) VALUES
(1, 'shiva', 'shiva', 'shivakumarchanti122@gmail.com', 7093001221, 'shiva', '2022-11-23 03:53:57'),
(2, 'admin', 'admin', 'admin@gmail.com', 1000, 'admin', '2022-11-28 16:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adharnumber` int(100) NOT NULL,
  `adharcard` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `mobile`, `email`, `adharnumber`, `adharcard`, `password`) VALUES
(14, 'Rajesh Thummala', 'rajesh', 70930012211, 'rajesh12@gmail.com', 12355652, 'carosal_image1.jpg', '1'),
(15, 'Jaligama Shiva Kumar', 'shivaa', 70930012212, 'shivakumarchanti1266@gmail.com', 11, 'signup.jpg', '1'),
(16, 'Abhishek', 'abhishek', 7093001221, 'abhishek@gmail.com', 12, 'carosal_image1.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `xRayImage` varchar(225) NOT NULL,
  `symptoms` varchar(225) NOT NULL,
  `timestampp` datetime(5) NOT NULL,
  `result` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `name`, `mobile`, `email`, `xRayImage`, `symptoms`, `timestampp`, `result`) VALUES
(11, 16, 'Abhishek', 7093001221, 'abhishek@gmail.com', '[\"Abhishek-carosal_image4.jpg\"]', 'Fever, Mild Cold, Cough', '2024-01-27 21:04:58.00000', 'yes'),
(12, 16, 'Jaligama Shiva Kumar', 7093001221, 'shivakumarchanti12@gmail.com', '[\"Jaligama Shiva Kumar-carosal_image3.jpg\"]', 'Cough', '2024-01-27 21:17:36.00000', 'yes'),
(13, 14, 'Rajesh', 930012211, 'rajesh@tkrcet.com', '[\"Rajesh-carosal_image1.jpg\"]', 'Cold', '2024-01-27 21:41:33.00000', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
