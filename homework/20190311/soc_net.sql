-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 08:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soc_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(250) COLLATE utf8_bin NOT NULL,
  `privacy` varchar(10) COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `privacy`, `date`, `userid`) VALUES
(41, 'Something', 'private', '2019-03-14 19:11:48', 12),
(42, 'Nothing', 'public', '2019-03-14 19:12:04', 12),
(43, 'xcsdz', 'private', '2019-03-14 19:29:39', 12),
(44, 'I danas je lepo vreme...', 'public', '2019-03-14 19:31:56', 12),
(45, '', 'private', '2019-03-14 19:31:59', 12),
(46, '', 'private', '2019-03-14 19:32:00', 12),
(47, '', 'public', '2019-03-14 19:32:03', 12),
(48, 'sada', 'private', '2019-03-14 19:34:23', 12),
(49, 'majkl', 'private', '2019-03-14 19:38:55', 13),
(50, 'Post by majklf', 'private', '2019-03-14 19:44:18', 13),
(51, 'dafasfa', 'public', '2019-03-14 19:44:35', 13),
(52, '', 'private', '2019-03-14 19:44:40', 13),
(53, 'jghjgfjhgfjhgfj', '', '2019-03-14 23:11:38', 20),
(54, ',nbm,nbm,nb,mnb', '', '2019-03-14 23:11:50', 20),
(55, 'Tsstttt', '', '2019-03-14 23:26:24', 20),
(56, 'Tsstttt', '', '2019-03-14 23:26:33', 20),
(57, 'Testtt', 'public', '2019-03-17 06:43:46', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `image` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `username`, `image`, `password`) VALUES
(12, 'Nikola', 'Tesla', 'nikola@gmail.com', 'nikolat', '', '$2y$10$EOBBGYUChbdmdNmt.Y/AIuInC2mA.mlKCVn/zWqWcCthYt2lUVpmW'),
(13, 'Majkl', 'Faradej', 'majkl@gmail.com', 'majklf', '', '$2y$10$demSHJr/Gs.o8n.fDfL4ueGAXEeeRrbNDSIPJrKDTe//2f5//Uowi'),
(18, 'Pera', 'Peric', 'pera@pera.pera', 'perap', '', 'password'),
(19, 'Pera', 'Peric', 'pera@pe.pe', 'peraperic', '', '$2y$10$Wdxrymxli0vvKvpje8I7iOC01QpsVtROdyhmoUqEqz/bUBGc7/Z/K'),
(20, 'Bibib', 'Bibib', 'Bibib@Bibib.Bibib', 'Bibib', '', '$2y$10$sCludSCm8zFhGmvF/r692OlnEu2uymqYNCzvE3UPoVmr8gf5ZUETm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `jedan_korisnik_vise_postova` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
