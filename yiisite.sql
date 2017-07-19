-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 08:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiisite`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  `user_Id` int(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `title`, `type`, `note`, `user_Id`, `date`) VALUES
(1, 'Online Shopping website', 'Link', 'www.daraz.pk', 1, '15-Jul-2017'),
(2, 'University of Karachi\'s website', 'Link', 'www.uok.edu.pk', 1, '15-Jul-2017'),
(3, 'HP support\'s link', 'Link', 'https://support.hp.com', 2, '19-Jul-2017'),
(4, 'Favourite Quote', 'Quotes', '\" You can do anything, but not everything.\"\r\n—David Allen', 3, '15-Jul-2017'),
(5, 'Quote By Baltasar Gracian.', 'Quotes', ' A wise man gets more use from his enemies than a fool from his friends.', 2, '15-Jul-2017'),
(6, 'She dives into ocean.', 'Note', 'She dives into ocean to fly, to let dreams be carried away by waves and to let sorrow drown.', 7, '17-Jul-2017'),
(7, 'Link for saving youtube videos.', 'Link', 'youmagictube.com', 7, '17-Jul-2017'),
(8, 'Pirate bay website', 'Link', 'www.piratebay.com', 2, '18-Jul-2017'),
(9, 'My yahoo e-mail', 'E-mail', 'toobamunir15@yahoo.com', 2, '19-Jul-2017'),
(10, 'Stackover flow\' site', 'Link', 'https://stackoverflow.com/', 1, '19-Jul-2017'),
(11, 'Friend\'s Contact', 'Contact', '0334-5643219', 5, '19-Jul-2017'),
(12, 'Doctor\'s contact', 'Contact', '0324-7865432', 1, '19-Jul-2017'),
(13, 'Everything has an end.', 'Note', 'Everything has an end, even the brightest star bursts into flames.', 1, '19-Jul-2017'),
(14, 'My gmail email', 'E-mail', 'alisyed200@gmail.com', 8, '19-Jul-2017'),
(15, 'Inspirational Quote', 'Quotes', 'If you don\'t stick to your values when they are being tested, they\'re not values: they\'re hobbies-Jon Stewart', 5, '19-Jul-2017'),
(16, 'Favourite', 'Quotes', 'It\'s kind of fun to do the impossible-Walt Disney.', 5, '19-Jul-2017');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `username`, `password`) VALUES
(1, 'john', 'daves', 'johnDaves', '123'),
(2, 'Tooba', 'Munir', 'ToobaMunir', 'abc123'),
(3, 'Sarah', 'Ali', 'sarahAli200', 'sara123456'),
(4, 'Shahid', 'Ali', 'shah012', 'alpha123'),
(5, 'Alina', 'Khan', 'alinaKhan300', '123alina'),
(6, 'John', 'Ruskin', 'johnRuskin', '909090'),
(7, 'Farah', 'Hussain', 'farah234', '123456'),
(8, 'Syed', 'Ali', 'syedAli100', '12Alisyed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `notes_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
