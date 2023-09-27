-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 11:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `profilelist`
--

CREATE TABLE `profilelist` (
  `id` int(5) NOT NULL,
  `name` char(20) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` int(100) NOT NULL,
  `address` text NOT NULL,
  `picture` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profilelist`
--

INSERT INTO `profilelist` (`id`, `name`, `dob`, `phone_number`,  `address`, `picture`) VALUES
(20, 'leo', '2023-08-24', '086153', , 'sdasd', 'image/download.jpg'),
(31, 'leo', '2023-08-24', '076553', 'cbv', 'image/prothomalo-bangla_2022-05_51e3bc68-ace4-4c99-9456-8e10116b9c8d_vadaima_1_20220522163910.webp'),
(38, 'sdfhsfd', '2023-09-06', '097654345', 'dfyhdfthuy', 'image/2s2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profilelist`
--
ALTER TABLE `profilelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profilelist`
--
ALTER TABLE `profilelist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
