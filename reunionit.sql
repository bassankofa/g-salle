-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2022 at 01:41 PM
-- Server version: 5.7.37-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reunionit`
--

-- --------------------------------------------------------

--
-- Table structure for table `ext_log_entries`
--

CREATE TABLE `ext_log_entries` (
  `id` int(11) NOT NULL,
  `action` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL,
  `object_id` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:array)',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `ext_translations`
--

CREATE TABLE `ext_translations` (
  `id` int(11) NOT NULL,
  `locale` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(10) UNSIGNED NOT NULL,
  `features` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `deleted_at`, `name`, `capacity`, `features`, `picture`) VALUES
(1, '2022-04-13 17:36:41', 'grande salle 1', 15, 'a:2:{i:0;s:4:\"Wifi\";i:1;s:16:\"Vidéoprojecteur\";}', 'salle-6256fb23eb916.jpg'),
(2, '2022-04-13 17:39:58', 'grande salle 1', 19, 'a:2:{i:0;s:4:\"Wifi\";i:1;s:16:\"Vidéoprojecteur\";}', 'salle-62570a90e8a26.jpg'),
(3, NULL, 'grande salle 1', 20, 'a:2:{i:0;s:4:\"Wifi\";i:1;s:16:\"Vidéoprojecteur\";}', 'salle-62570b31849dc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type_reservation`
--

CREATE TABLE `type_reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_reservation`
--

INSERT INTO `type_reservation` (`id`, `name`) VALUES
(5, 'Seance de travail');

-- --------------------------------------------------------

--
-- Table structure for table `unavailability`
--

CREATE TABLE `unavailability` (
  `id` int(11) NOT NULL,
  `organiser_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `object` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_reservation_id` int(11) NOT NULL,
  `entite` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unavailability`
--

INSERT INTO `unavailability` (`id`, `organiser_id`, `room_id`, `start_date`, `end_date`, `object`, `type_reservation_id`, `entite`, `etat`) VALUES
(7, 1, 3, '2022-05-06 17:30:00', '2022-05-06 19:30:00', 'Comité de liquidation', 5, 'comptabilité', 'valider'),
(8, 1, 3, '2022-05-12 13:00:00', '2022-05-12 14:30:00', 'Test imprimer', 5, 'DEP COM', 'attente');

-- --------------------------------------------------------

--
-- Table structure for table `unavailability_user`
--

CREATE TABLE `unavailability_user` (
  `unavailability_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unavailability_user`
--

INSERT INTO `unavailability_user` (`unavailability_id`, `user_id`) VALUES
(7, 19),
(8, 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `first_name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `deleted_at`, `first_name`, `last_name`, `email`, `password`, `roles`) VALUES
(1, NULL, 'bachir2', 'gaye', 'bassmpci@gmail.com', '$2a$10$J6DjXwb7eFFaXwjIOCrureTp6fPI/pb95BxSOaJGnfWAF02q6cxiC', 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(15, NULL, 'Emma', 'GOMIS', 'emma.gomis@adsglobalcorp.com', '$2y$10$VHHWcn9es2BuMC9HP0DFcufEtFu7wflezYVe9Y.bsGamDPyUfYDSy', 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(19, NULL, 'Bamba', 'gaye', 'bachir.gaye@adsglobalcorp.com', '$2y$10$X7w3WD1LLAvtjHFn0UNpkODc1x3md00ZRj/k.tvlzq9vjihnyTI3.', 'a:1:{i:0;s:13:\"ROLE_EMPLOYEE\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_class_lookup_idx` (`object_class`),
  ADD KEY `log_date_lookup_idx` (`logged_at`),
  ADD KEY `log_user_lookup_idx` (`username`),
  ADD KEY `log_version_lookup_idx` (`object_id`,`object_class`,`version`);

--
-- Indexes for table `ext_translations`
--
ALTER TABLE `ext_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lookup_unique_idx` (`locale`,`object_class`,`field`,`foreign_key`),
  ADD KEY `translations_lookup_idx` (`locale`,`object_class`,`foreign_key`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_reservation`
--
ALTER TABLE `type_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unavailability`
--
ALTER TABLE `unavailability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F0016D1A0631C12` (`organiser_id`),
  ADD KEY `IDX_F0016D154177093` (`room_id`),
  ADD KEY `IDX_F0016D1EEF1BE73` (`type_reservation_id`);

--
-- Indexes for table `unavailability_user`
--
ALTER TABLE `unavailability_user`
  ADD PRIMARY KEY (`unavailability_id`,`user_id`),
  ADD KEY `IDX_96C9E437F6922FEF` (`unavailability_id`),
  ADD KEY `IDX_96C9E437A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ext_translations`
--
ALTER TABLE `ext_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type_reservation`
--
ALTER TABLE `type_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `unavailability`
--
ALTER TABLE `unavailability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `unavailability`
--
ALTER TABLE `unavailability`
  ADD CONSTRAINT `FK_F0016D154177093` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `FK_F0016D1A0631C12` FOREIGN KEY (`organiser_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_F0016D1EEF1BE73` FOREIGN KEY (`type_reservation_id`) REFERENCES `type_reservation` (`id`);

--
-- Constraints for table `unavailability_user`
--
ALTER TABLE `unavailability_user`
  ADD CONSTRAINT `FK_96C9E437A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_96C9E437F6922FEF` FOREIGN KEY (`unavailability_id`) REFERENCES `unavailability` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
