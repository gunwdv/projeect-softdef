-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 09:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eletiva`
--

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `ID_poll` int(11) NOT NULL,
  `Group_subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ID_subject` int(11) NOT NULL,
  `name_subject` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `type_poll` int(11) NOT NULL,
  `title_poll` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `msg_poll` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pollend` datetime NOT NULL,
  `time_poll` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`ID_poll`),
  ADD KEY `ID_subject` (`ID_subject`,`Group_subject`,`name_subject`),
  ADD KEY `create_by` (`create_by`),
  ADD KEY `poll_2` (`name_subject`),
  ADD KEY `poll_3` (`Group_subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `ID_poll` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `poll`
--
ALTER TABLE `poll`
  ADD CONSTRAINT `poll_1` FOREIGN KEY (`ID_subject`) REFERENCES `subject` (`ID_subject`) ON UPDATE CASCADE,
  ADD CONSTRAINT `poll_2` FOREIGN KEY (`name_subject`) REFERENCES `subject` (`Name_subject`) ON UPDATE CASCADE,
  ADD CONSTRAINT `poll_3` FOREIGN KEY (`Group_subject`) REFERENCES `subject` (`Group_subject`) ON UPDATE CASCADE,
  ADD CONSTRAINT `poll_4` FOREIGN KEY (`create_by`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
