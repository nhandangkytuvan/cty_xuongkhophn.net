-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 05:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cty_xuongkhophnnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_group` varchar(255) NOT NULL,
  `user_block` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_avatar`, `user_name`, `user_email`, `user_group`, `user_block`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', 'pham-van-truong-1487748942.jpeg', 'Trường', 'truongbuon@hotmail.com', 'admin', 0, '2017-03-03 08:34:28', '2017-03-03 01:34:28'),
(2, 'user', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', 'pham-thanh-thuy-1487754937.jpeg', 'Thúy', 'vantruong3289@gmail.com', 'bien-tap', 0, '2017-03-07 05:00:39', '2017-03-06 22:00:39'),
(3, 'seo', '$2y$10$.gf0KdHQ45/0iaEjhxW4yO7DS8rlAYK4P4LS0dOAqxsxMFMFiIMIG', NULL, 'Nhường', 'nhuong_xinh@gmail.com', 'seo', 1, '2017-03-03 09:25:27', '2017-03-03 02:25:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
