-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2023 at 09:57 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngt_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'sales',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `ip`, `image`, `email`, `password`, `role`, `updated_at`) VALUES
(2, 'Super Admin', '103.107.160.134', 'public/images/avatar-01.jpg', 'francis@ngttech.io', '@BCD1234', 'admin', '2022-11-01 18:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reserve` int NOT NULL,
  `phone` varchar(100) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `reserve`, `phone`, `inserted_at`, `updated_at`) VALUES
(15, 'alext', 'wking0290@yahoo.com.hk', 0, '', '2022-11-02 05:55:24', '2022-11-01 23:55:24'),
(20, 'Michael Leung', 'michaelleung817@live.hk', 0, '', '2022-11-02 19:01:43', '2022-11-02 13:01:43'),
(21, 'nam', 'vcpnam@hotmail.com', 0, '', '2022-11-02 20:17:09', '2022-11-02 14:17:09'),
(22, 'Patrick Woo', 'woopatrick3@gmail.com', 0, '', '2022-11-02 20:19:23', '2022-11-02 14:19:23'),
(23, 'Steven Li', 'steven94135@gmail.com', 0, '', '2022-11-04 01:15:54', '2022-11-03 19:15:54'),
(24, '刘垚', '1306885728@qq.com', 0, '', '2022-11-06 12:20:19', '2022-11-06 06:20:19'),
(25, 'francis', 'francis@francis.com', 0, '', '2022-11-09 19:21:14', '2022-11-09 13:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT 'assets/images/avatar/1.png',
  `password` varchar(200) NOT NULL,
  `inserted_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `image`, `password`, `inserted_at`, `updated_at`) VALUES
(2, 'Test123', 'Test Test', 'Test@test.com', 'assets/images/avatar/22212_6 (2).png', '@BCD1234', '2022-11-10 16:15:03', '2022-11-10 11:30:18'),
(3, 'francis', 'Francis', 'francis@francis.com', 'assets/images/avatar/1.png', 'francis123', '2022-11-10 16:53:15', '2022-11-10 10:54:03'),
(4, 'vcpnam', 'nam', 'vcpnam@hotmail.com', 'assets/images/avatar/1.png', 'vivieismcc', '2022-11-11 23:37:19', '2022-11-11 17:37:19'),
(5, 'twkong', 'tsang', 'wkong0290@yahoo.com.hk', 'assets/images/avatar/1.png', 'Atsang@83', '2022-11-12 17:11:11', '2022-11-12 11:11:11'),
(6, 'tommy', 'CL', 'yfc@qq.com', 'assets/images/avatar/1.png', 'QQ994018071', '2022-12-07 20:16:44', '2022-12-07 14:16:44'),
(7, 'jeffy999', 'mrj', 's011074115@gmail.com', 'assets/images/avatar/1.png', 's011074115', '2023-01-23 21:29:18', '2023-01-23 15:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `usercoin`
--

CREATE TABLE `usercoin` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `coin` int NOT NULL,
  `date` date NOT NULL,
  `redeem_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usercoin`
--

INSERT INTO `usercoin` (`id`, `user_id`, `coin`, `date`, `redeem_time`) VALUES
(1, 2, 1000, '2022-11-10', '2022-11-10 10:15:34'),
(2, 3, 1000, '2022-11-10', '2022-11-10 10:53:54'),
(3, 3, 1000, '2022-11-12', '2022-11-12 07:22:02'),
(4, 6, 1000, '2022-12-07', '2022-12-07 14:18:09'),
(5, 7, 1000, '2023-01-23', '2023-01-23 15:29:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercoin`
--
ALTER TABLE `usercoin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usercoin`
--
ALTER TABLE `usercoin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
