-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 08:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `edification`
--

CREATE TABLE `edification` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edification`
--

INSERT INTO `edification` (`id`, `name`, `email`, `number`) VALUES
(1, 'Sakshi Gupta', 'sanu1234@gmail.com', '2147483647'),
(2, 'Ritiksha Gupta', 'ritikshagupta@gmail.com', '2147483647'),
(3, 'Rajas Gupta', 'sanu1234@gmail.com', '1234567890'),
(4, 'Khushi Mewara', 'khushi@gmail.com', '2147483647'),
(5, 'Ekta Sharma', 'Ekta@gmail.com', '987654321'),
(6, 'Sanu Maheshwari', 'sanu1234@gmail.com', '2147483647'),
(7, 'Sakshi Gupta', 'sanu1234@gmail.com', '1234567890'),
(8, 'Ity Maheshwari', 'ity@gmail.com', '2147483647'),
(9, 'MADHU GUPTA', 'ritikshagupta45678@gmail.com', '9509964094'),
(10, 'Lavi Sharma', 'lavi@gamil.com', '8765342190'),
(11, 'raju', 'sanu1234@gmail.com', '773748782'),
(12, 'hghjghj', 'hjg@djf.com', '5675327322'),
(13, 'hghjghj', 'hjg@djf.com', '5675327322'),
(14, 'hghjghj', 'hjg@djf.com', '5675327322'),
(15, 'hghjghj', 'hjg@djf.com', '5675327322'),
(16, 'hghjghj', 'hjg@djf.com', '5675327322'),
(17, 'hghjghj', 'hjg@djf.com', '5675327322'),
(18, 'MADHU GUPTA', 'sakshigupta543210@0gm0ail.com', '564365436'),
(19, 'MADHU GUPTA', 'sakshigupta543210@0gm0ail.com', '564365436'),
(20, 'MADHU GUPTA', 'sakshigupta543210@0gm0ail.com', '564365436');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edification`
--
ALTER TABLE `edification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `edification`
--
ALTER TABLE `edification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
