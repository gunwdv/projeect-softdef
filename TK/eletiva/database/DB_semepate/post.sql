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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID_post` int(11) NOT NULL,
  `Group_subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ID_subject` int(8) NOT NULL,
  `name_subject` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `type_post` int(2) NOT NULL,
  `title_post` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `msg_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`ID_post`, `Group_subject`, `ID_subject`, `name_subject`, `type_post`, `title_post`, `msg_post`, `time_post`, `create_by`) VALUES
(1, 'กลุ่มภาษาและการสื่อสาร', 90201003, 'ENGLISH FOR ACADEMIC PURPOSES', 1, 'test', 'qwertyuiopasdfghjklzxcvbnm', '2021-11-12 16:08:13', 2),
(2, 'กลุ่มคุณค่าแห่งชีวิต', 90641001, 'CHARM SCHOOL', 1, 'test', 'qwertyuiopasdfghjklzxcvbnm', '2021-11-12 18:52:21', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID_post`),
  ADD UNIQUE KEY `ID_subject` (`ID_subject`),
  ADD KEY `post_2` (`name_subject`),
  ADD KEY `post_4` (`create_by`),
  ADD KEY `Group_subject` (`Group_subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_1` FOREIGN KEY (`ID_subject`) REFERENCES `subject` (`ID_subject`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_2` FOREIGN KEY (`name_subject`) REFERENCES `subject` (`Name_subject`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_3` FOREIGN KEY (`Group_subject`) REFERENCES `subject` (`Group_subject`) ON UPDATE CASCADE,
  ADD CONSTRAINT `post_4` FOREIGN KEY (`create_by`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
