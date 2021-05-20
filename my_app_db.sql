-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 05:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_api_requests`
--

CREATE TABLE `tbl_api_requests` (
  `id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_api_requests`
--

INSERT INTO `tbl_api_requests` (`id`, `partner_id`, `datetime`) VALUES
(1, 1, '2021-05-19 19:39:52'),
(2, 2, '2021-05-20 19:39:52'),
(3, 1, '2021-05-18 20:10:27'),
(4, 2, '2021-05-17 20:10:27'),
(5, 1, '2021-05-20 17:08:47'),
(6, 2, '2021-05-20 17:09:04'),
(7, 2, '2021-05-20 17:09:16'),
(8, 2, '2021-05-20 17:11:18'),
(9, 2, '2021-05-20 17:11:40'),
(10, 2, '2021-05-20 17:11:42'),
(11, 2, '2021-05-20 17:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partners`
--

CREATE TABLE `tbl_partners` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_partners`
--

INSERT INTO `tbl_partners` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Partner One', 1, '2021-05-20 19:39:14', '2021-05-20 19:39:14'),
(2, 'Partner Two', 1, '2021-05-20 19:39:14', '2021-05-20 19:39:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_api_requests`
--
ALTER TABLE `tbl_api_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_partners`
--
ALTER TABLE `tbl_partners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_api_requests`
--
ALTER TABLE `tbl_api_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_partners`
--
ALTER TABLE `tbl_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
