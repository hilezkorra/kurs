-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 02:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linker`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `reciever_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reciever_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reciever_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_name`, `sender_avatar`, `sender_id`, `reciever_name`, `reciever_avatar`, `reciever_id`, `message`, `sent_at`) VALUES
(1, 'bob', 'img/default.png 	', 2, 'bobby', 'img/default.png 	', 4, 'Hello! I am bob! DO YOU WANT TO PARTY?!', '2020-10-30 10:38:13'),
(2, 'bobby', 'img/default.png 	', 4, 'bob', 'img/default.png', 2, 'Yes I am very much down to party', '2020-10-30 10:38:49'),
(3, 'bob', 'img/default.png', 2, 'bobby', 'img/default.png 	', 4, 'Perfect! I am going to ki... I mean dance with you very passionatelly', '2020-10-30 10:39:43'),
(6, 'bobby', 'img/default.png', 4, 'bobey', 'img/default.png', 5, 'THIS CAN\'T SHOW UP!', '2020-10-30 11:01:57'),
(7, 'boby', 'img/default.png', 3, 'bobi', 'img/default.png', 6, 'THIS CAN\'T SHOW UP', '2020-10-30 12:31:59'),
(13, 'bobass', 'img/default.png', 2, 'bobey', 'img/default.png', 5, 'TEst', '2020-11-02 15:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `party_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `party_id`, `user_id`) VALUES
(1, 1, 2),
(2, 1, 5),
(3, 1, 3),
(4, 6, 2),
(5, 8, 2),
(6, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'img/default_party.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `user_id`, `name`, `description`, `date`, `country`, `city`, `avatar`) VALUES
(1, 2, 'Pigout partyy', 'This is a party that will knock your socks off... And put them back on again.', '2020-11-30', 'Azerbaijan', 'Nakhchivan', 'img/users/2/parties/1/dp_1.png'),
(5, 4, 'Whatever Party', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  ', '2020-11-26', 'Afghanistan', 'Herat', 'img/default_party.jpg'),
(6, 5, 'Paratey Karatey', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, ', '2021-03-25', 'Germany', 'Leipzig', 'img/default_party.jpg'),
(7, 2, 'Killer Party', 'sdlgsilgjhas ghhjsfg jsdf lgjsag lsfg', '2020-12-10', 'Germany', 'Berlin', 'img/users/2/parties/7/gintama_2.jpg'),
(8, 2, 'Bumblebee Party', 'Some stupid transformers party', '2020-11-28', 'Barbados', 'Rendezvous', 'img/users/2/parties/8/gs_1.jpg'),
(18, 2, 'This is the ultimate tes', 'pls work', '2020-12-04', 'Bahamas', 'Marsh Harbour', 'img/users/2/parties/18/hxh_3.jpg'),
(21, 3, 'h', 'afhah', '2020-11-24', 'Austria', 'Aigen im Muehlkreis', 'img/default_party.jpg'),
(23, 3, 'bobass', 'zhaha', '2020-11-17', 'Aruba', 'Sabaneta', 'img/users/3/parties/23/garou_1.png'),
(24, 38, 'Bobby', 'agahah', '2020-11-18', 'Austria', 'Aigen', 'img/users/38/parties/24/gintama_2.jpg'),
(25, 38, 'adh', 'adfha', '2020-12-02', 'Bahrain', 'Oil City', 'img/users/38/parties/25/frieza_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partypictures`
--

CREATE TABLE `partypictures` (
  `id` int(11) NOT NULL,
  `party_id` int(11) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partypictures`
--

INSERT INTO `partypictures` (`id`, `party_id`, `path`, `avatar`) VALUES
(1, 7, 'img/users/2/parties/7/hxh_3.jpg', 1),
(2, 7, 'img/users/2/parties/7/gintama_2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `reciever_id` int(10) UNSIGNED NOT NULL,
  `party_id` int(11) UNSIGNED NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `type`, `sender_id`, `reciever_id`, `party_id`, `sent_at`, `status`) VALUES
(18, 'request', 37, 5, 6, '2020-11-03 13:03:08', 'pending'),
(19, 'request', 37, 2, 1, '2020-11-03 13:03:22', 'declined'),
(20, 'request', 6, 2, 7, '2020-11-03 13:33:48', 'accepted'),
(21, 'invite', 6, 2, 8, '2020-11-03 13:33:48', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `userpictures`
--

CREATE TABLE `userpictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'img/default.png',
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `country`, `city`, `bio`) VALUES
(2, 'bobass', 'a@a.com', '$2y$10$vywvCN3X6qYb8jVCJtVtEer8b8ILWke8.aMXQg0uSurJx/YV6NU2u', 'img/users/2/drs_2.jpg', 'Afghanistan', 'Herat', 'This is my bio. sdasdasf'),
(3, 'boby', 'b@a.com', '$2y$10$I0Vh9fRtQbRphbxRfe3Rte6uVvI17ATOUz0mmotezlAY2IBXC975u', 'img/default.png', 'Afghanistan', 'Herat', 'This is someones bio.'),
(4, 'bobby', 'c@a.com', '$2y$10$/mGqvzd06gpdkorAgn97Iu.YGcNQs.ku65PPIg2DhPNN1AkLfzVty', 'img/default.png', 'Afghanistan', 'Kabul', 'This is my bio and it is longgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg'),
(5, 'bobey', 'd@a.com', '$2y$10$LpsCrPqqGtDEX.b.MiTlyeXYtUymFVwSKZw40Ddy8UdnGHYvrAG0G', 'img/default.png', 'Åland Islands', 'Other', 'Tralalalala'),
(6, 'bobi', 'e@a.com', '$2y$10$pT27S6.aPBQ6PBR53HyU4eAtK2j4yVMqDp.gf24NhPKhKOSaAU0P.', 'img/default.png', 'Albania', 'Elbasan', NULL),
(34, 'Cattle boii', 'bsa@a.com', '$2y$10$2L8QxFms0X3szkLBe3vo2ux8LKCH5hzpVBqhQUGMq6fF91yTHmxf2', 'img/users/34frieza_1.jpg', 'Albania', 'Petran', NULL),
(35, 'Holly', 'bob@test.poop', '$2y$10$T.K8tTsq4AhrZQ1AS.ZreO6nZKkbvZ.0kCbqsMeyu7UGrhKBK8jP2', 'img/users/35gs_1.jpg', 'Antigua and Barbuda', 'Parham', NULL),
(36, 'Stein', 'bop@test.poop', '$2y$10$TgdyzlDMfV7xHMk8zz3PUuOx6GN.4mMbMc63wG0Iv9P50lYqtM4ZG', 'img/users/36dbz_2.jpg', 'Aruba', 'San Barbola', NULL),
(37, 'Sugah BOI', 'bops@test.poop', '$2y$10$xLG6mXa.7K01S5MEUn4W2uOWxaaYLPQkkdJMh4oxaBuLunC8vfND2', 'img/users/37dbz_2.jpg', 'Antarctica', 'Other', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `party_id` (`party_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partypictures`
--
ALTER TABLE `partypictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `party_id` (`party_id`),
  ADD KEY `reciever_id` (`reciever_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `userpictures`
--
ALTER TABLE `userpictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `partypictures`
--
ALTER TABLE `partypictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userpictures`
--
ALTER TABLE `userpictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`party_id`) REFERENCES `parties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participants_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`party_id`) REFERENCES `parties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
