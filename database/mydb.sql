-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 10:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`) VALUES
(1, 'ayushvshnv', 'Hello097@', '2020-08-10 13:14:10'),
(4, 'ayushvshnwa', 'Hello097', '2020-08-10 16:06:29'),
(8, 'pranav', 'Hello097', '2020-08-16 12:29:42'),
(9, '', '', '2020-08-16 12:30:35'),
(13, 'pranavdave', 'Hello097', '2020-08-16 12:32:58'),
(18, 'ayushvaishnav', 'Hello097', '2020-08-16 12:34:42'),
(27, 'dev', 'hello', '2020-08-16 12:41:46'),
(28, 'manju', 'Hello097', '2020-08-16 12:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `usersdata`
--

CREATE TABLE `usersdata` (
  `id` int(11) NOT NULL,
  `oauth_pro` varchar(50) NOT NULL,
  `oauthid` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `locale` varchar(20) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersdata`
--

INSERT INTO `usersdata` (`id`, `oauth_pro`, `oauthid`, `f_name`, `l_name`, `email_id`, `gender`, `locale`, `cover`, `picture`, `url`, `created_date`) VALUES
(10, 'google', '111595509313323991903', 'Ayush', 'Vshnv', 'vshnvayush@gmail.com', '', 'en', '', 'https://lh3.googleusercontent.com/a-/AOh14GjE-AO5L3omtedJ8pcBRUPOH6tpGi_cD7Na3LHL', '', '2020-08-16 10:27:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- Indexes for table `usersdata`
--
ALTER TABLE `usersdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `usersdata`
--
ALTER TABLE `usersdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
