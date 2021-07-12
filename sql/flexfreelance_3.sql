-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 11:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2
-- author: zyk0
-- github.com/zyk0/flexfreelance

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flexfreelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Проектирование сайта\r\n'),
(2, 'Администрирование сервера\r\n'),
(3, 'Поддержка баз данных'),
(4, 'Иллюстрации и анимация\r\n'),
(5, 'графический дизайн');

-- --------------------------------------------------------

--
-- Table structure for table `singles`
--

CREATE TABLE `singles` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `singles`
--

INSERT INTO `singles` (`id`, `title`, `text`, `author`, `category_id`, `users_id`, `date`) VALUES
(1, 'title_1', 'If music be the food of love, play on', 'sinara', 5, 7, '2021-04-26'),
(2, 'title_2', 'The course of true love never did run smooth', 'ladoga', 5, 5, '2021-04-08'),
(3, 'title_3', 'Love is a smoke and is made with the fume of sighs', 'ladoga', 5, 5, '2021-04-15'),
(9, 'Kalli', 'If music be the `food` of &#039;love&#039;, &quot;play&quot; on,', 'viti', 4, 0, '2021-04-30'),
(11, 'a`ut&#039;h&#039;or&quot;', 'How sharper than a serpent&#039;s tooth it is to have a thankless child!', 'onega', 3, 6, '2021-05-02'),
(12, 'a`ut&#039;h&#039;or&quot;', 'How sharper than a serpent&#039;s tooth it is to have a thankless child!', 'onega', 3, 6, '2021-05-02'),
(13, 'Knoc', 'Go to you bosom: Knock there, and ask your heart what it doth know.', 'onega', 1, 6, '2021-05-02'),
(14, 'asveja', 'Качает ветер плавно провода,\r\nПеребивая свет.', 'Asveja', 1, 20, '2021-05-02'),
(15, 'Tennessee', 'state in the Southeastern region of the United States', 'MjÃ¸sa', 1, 21, '2021-05-05'),
(16, 'Merchant of Venice', 'â€˜All that glisters is not gold.â€˜', 'Asveja', 4, 20, '2021-07-10'),
(17, 'Romeo and Juliet', 'love is a fire burning in your loverâ€™s eyes', 'allaki', 0, 22, '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(5, 'ladoga', 'ladoga', 'ladoga@karilia.fi', 'd05e53a24eda11e16c53501146807a17', 'uploads/1619429265stock-photo-portrait-of-young-beautiful-cute-chebackground-666258808.jpg'),
(6, 'onega', 'onega', 'onega@karilia.fi', '9df3c6b919ea71ce08b7eb062a9c72c2', 'uploads/1619429296pexels-photo-1898558.jpg'),
(7, 'sinara', 'sinara', 'sinara@lake.che', '9a15903196a9d774c3fa5f6a62a8af9c', 'uploads/1619429337pexels-photo-1550049.jpg'),
(9, 'malaren', 'malaren', 'malaren@xn--insj-8qa.se', '573d1d92da74f01f771da4be0839b40c', 'uploads/1619429725____pexels-photo-4921275.jpg'),
(10, 'Saimaa', 'Saimaa', 'Saimaa@Saimaa.fi', '6fa6d58772b602d1ffe12bd1ba15f935', 'uploads/1619429867Saimaa.jpeg'),
(11, 'ermistu', 'ermistu', 'ermistu@jarv.es', '3659e8c27537c4e86f045b9be6b88012', 'uploads/1619443056pexels-photo-1550049.jpg'),
(19, 'Ãœlemiste', 'ulemiste', 'ulemiste@esti.ee', '563f7ab4336f54e695bf518364ebfd8d', 'uploads/1619767191pexels-photo-4919713.jpg'),
(20, 'Asveja', 'asveja', 'asveja@lithuania.lv', 'ea025ace4d71b974bb94cc36f50fc96d', 'uploads/1619943708images.jpg'),
(21, 'MjÃ¸sa', 'mjosa', 'mjosa@akershus.no', '5b317c01d743911632ac85192c1fecd2', 'uploads/1620196996kategoriyaa_.jpg'),
(22, 'allaki', 'allaki', 'allaki@lake.che', '4176162d53c9408c8e12353dd726dc37', 'uploads/1626082734allaki.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singles`
--
ALTER TABLE `singles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Iauthor` (`author`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `singles`
--
ALTER TABLE `singles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
