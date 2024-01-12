-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 03:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--
CREATE DATABASE IF NOT EXISTS `temp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `temp`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `email`, `password`) VALUES
(2, 'naglaa ahmed', 'naglaa@ahmed.com', '$2y$10$ZTw5bter3faxakH4xz.U2u3virfOcWkkupWOg9YGtoiajsIBt5xOa'),
(6, 'yasser galal', 'veham30569@kaudat.com', '$2y$10$9dtq57EWOJrpSmdTQskdVuN9sjM22aiDf50/yMICY3xRKiXfAfQBG'),
(7, 'tamer hagras', 'hargras@gmail.com', '$2y$10$RvlwWFAzzrv.cUGPXQKVoeyC8.iXqNDkd7gbIJtSWM7R4nkaUJiUq'),
(8, 'some body', 'veham30569@kaudat.com', '$2y$10$TVpiF1k.lUyLs5lEmePQ6eOY9DYKsqfwRKJd7VTMRyKtos5okDb9O'),
(9, 'ramy', 'veham30569@gmail.com', '$2y$10$AparRwCKyNDl/1N1KLMOhuFQtzBvCxFHF9ytieKKPwVuSD4kEsUWG'),
(14, 'kall', 'shehablajddasfdfiow@gmail.com', '5555'),
(15, 'mazzo', 'mazzo@chack.com', 'mazzochack'),
(18, 'Mohamed yousry516', 'asdffa@fdasfds.com517', 'sdfjkljksdfdfak516'),
(20, 'hp zbook', 'veham30569@kaudat.com', '7727272'),
(21, 'lenovo g4516', 'shehablajdfiow@gmail.com517', '929292516'),
(23, 'ragab hasan516', 'ragab@hasan.com517', '8282828292392323516'),
(24, 'iman ali516', 'venom@gmail.com517', '$2y$10$FWm8ZXBwHMlVQbrcjrWM7OAZOWig4xg2mmob02b23HFDnoqSZowVq');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
