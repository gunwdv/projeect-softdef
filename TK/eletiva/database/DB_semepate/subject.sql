-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 09:37 PM
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
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `ID_subject` int(8) NOT NULL,
  `Name_subject` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `Group_subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ID_subject`, `Name_subject`, `Group_subject`) VALUES
(90101002, 'MATHEMATICS IN DAILY LIFE', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90101003, 'STATISTICS IN DAILY LIFE', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90101007, 'INTRODUCTION TO MATHEMATICAL ECONOMICS', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90101008, 'MATHEMATICS IN BUSINESS AND INDUSTRY', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90102005, 'INTRODUCTION TO INFORMATION SYSTEMS FOR MANAGEMENT', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90104003, 'HEALTH AND NUTRITION', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90104005, 'SCIENCE OF PHOTOGRAPHY', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90104007, 'FOOD SCIENCE IN DAILY LIFE', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90104009, 'ENVIRONMENT AND NATURAL RESOURCES CONSERVATION', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90104010, 'HOME GARDEN MANAGEMENT', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90104011, 'PET MANAGEMENT', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90106002, 'HUMAN AND ENERGY', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90106003, 'EARTH AND UNIVERSE', 'กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์'),
(90201003, 'ENGLISH FOR ACADEMIC PURPOSES', 'กลุ่มวิชาภาษา'),
(90201012, 'DEVELOPMENT OF READING AND WRITING SKILLS IN ENGLISH', 'กลุ่มวิชาภาษา'),
(90201013, 'ENGLISH FOR MANAGEMENT', 'กลุ่มวิชาภาษา'),
(90201016, 'ENGLISH FOR PROFESSIONAL COMMUNICATION', 'กลุ่มวิชาภาษา'),
(90201017, 'ENGLISH FOR BUSINESS', 'กลุ่มวิชาภาษา'),
(90201020, 'ENGLISH FOR INDUSTRY', 'กลุ่มวิชาภาษา'),
(90201024, 'ENGLISH FOR PROFESSIONAL PURPOSES', 'กลุ่มวิชาภาษา'),
(90201029, 'ENGLISH FOR TOURISM AND TRAVELLING', 'กลุ่มวิชาภาษา'),
(90201035, 'WRITING AND SPEAKING IN THE PROFESSIONS', 'กลุ่มวิชาภาษา'),
(90201040, 'ORAL ENGLISH COMMUNICATION AT WORK', 'กลุ่มวิชาภาษา'),
(90302001, 'GENERAL PSYCHOLOGY', 'กลุ่มวิชามนุษยศาสตร์'),
(90302003, 'HUMAN RELATIONS', 'กลุ่มวิชามนุษยศาสตร์'),
(90302010, 'PSYCHOLOGY FOR SELF DEVELOPMENT', 'กลุ่มวิชามนุษยศาสตร์'),
(90302011, 'PSYCHOLOGY OF THINKING', 'กลุ่มวิชามนุษยศาสตร์'),
(90303005, 'INTRODUCTION TO PHYSICAL EDUCATION', 'กลุ่มวิชามนุษยศาสตร์'),
(90303011, 'ENHANCEMENT OF QUALITY OF LIFE', 'กลุ่มวิชามนุษยศาสตร์'),
(90304001, 'LIBRARY USAGE AND INFORMATION', 'กลุ่มวิชามนุษยศาสตร์'),
(90305005, 'HUMAN AND TOURIM', 'กลุ่มวิชามนุษยศาสตร์'),
(90306003, 'LIVING SKILLS', 'กลุ่มวิชามนุษยศาสตร์'),
(90306007, 'HAPPINESS SKILLS', 'กลุ่มวิชามนุษยศาสตร์'),
(90306008, 'MEDITATION FOR LIFE DEVELOPMENT', 'กลุ่มวิชามนุษยศาสตร์'),
(90307007, 'SPEECH COMMUNICATION', 'กลุ่มวิชามนุษยศาสตร์'),
(90401007, 'INTRODUCTION TO THAI ECONOMY', 'กลุ่มวิชาสังคมศาสตร์'),
(90401012, 'INTRODUCTION TO MARKETING', 'กลุ่มวิชาสังคมศาสตร์'),
(90401013, 'GENERAL BUSINESS', 'กลุ่มวิชาสังคมศาสตร์'),
(90402007, 'INTRODUCTION TO PRINCIPLES OF SOCIAL AND FAMILY RIGHTS', 'กลุ่มวิชาสังคมศาสตร์'),
(90402011, 'ENGINEERING AND TECHNOLOGY LAWS', 'กลุ่มวิชาสังคมศาสตร์'),
(90402012, 'INTRODUCTION TO ASEAN TRADE AND LABOR MARKET', 'กลุ่มวิชาสังคมศาสตร์'),
(90402013, 'THAI INTELLECTUAL PROPERTY', 'กลุ่มวิชาสังคมศาสตร์'),
(90403008, 'THAI SOCIETY AND CULTURE', 'กลุ่มวิชาสังคมศาสตร์'),
(90403010, 'PUBLIC MANAGEMENT', 'กลุ่มวิชาสังคมศาสตร์'),
(90591002, 'SPORTS AND RECREATIONAL ACTIVITIES', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591003, 'IMMUNITY OF MIND', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591004, 'ARTS OF EMOTION DEVELOPMENT', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591005, 'DESIGNING YOUR LIFE', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591006, 'POWER OF PERSONALITY', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591008, 'PHOTOGRAPHY APPRECIATION', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591009, 'MEDITATION FOR LIFE DEVELOPMENT', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591011, 'IMAGINATIVE ART', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591014, 'POWER OF CHANGE', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591015, 'JOY OF SHARING', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591016, 'HAPPINESS SKILLS', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591019, 'CHARM SCHOOL', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591024, 'FENG SHUI', 'กลุ่มคุณค่าแห่งชีวิต'),
(90591027, 'RAP APPRECIATION', 'กลุ่มคุณค่าแห่งชีวิต'),
(90592001, 'WORLD SOCIETY AWARENESS', 'กลุ่มวิถีแห่งสังคม'),
(90592002, 'LIVING IN DIGITAL SOCIETY', 'กลุ่มวิถีแห่งสังคม'),
(90592003, 'APPLIED THAI WISDOMS', 'กลุ่มวิถีแห่งสังคม'),
(90592004, 'CONTEMPORARY CULTURE', 'กลุ่มวิถีแห่งสังคม'),
(90592007, 'THE PHILOSOPHY OF SUFFICIENCY ECONOMY', 'กลุ่มวิถีแห่งสังคม'),
(90592008, 'TODAY\'S THAI SOCIETY', 'กลุ่มวิถีแห่งสังคม'),
(90592013, 'NATIONAL SECURITY DEVELOPMENT', 'กลุ่มวิถีแห่งสังคม'),
(90592016, 'THAI CULTURE AND TOURISM', 'กลุ่มวิถีแห่งสังคม'),
(90592017, 'SPORTS TOURISM', 'กลุ่มวิถีแห่งสังคม'),
(90592020, 'PATH TO CAREER', 'กลุ่มวิถีแห่งสังคม'),
(90592022, 'THAI ASTROLOGY', 'กลุ่มวิถีแห่งสังคม'),
(90592023, 'DYNAMICS OF THAI SOCIETY', 'กลุ่มวิถีแห่งสังคม'),
(90592028, 'TREE DOCTOR', 'กลุ่มวิถีแห่งสังคม'),
(90592029, 'GAMBLING LITERACY', 'กลุ่มวิถีแห่งสังคม'),
(90592033, 'ACTIVE AGING SOCIETY', 'กลุ่มวิถีแห่งสังคม'),
(90593001, 'INTEGRATED THINKING', 'กลุ่มศาสตร์แห่งการคิด'),
(90593002, 'THINK EARTH', 'กลุ่มศาสตร์แห่งการคิด'),
(90593003, 'SUSTAINABLE ENERGY', 'กลุ่มศาสตร์แห่งการคิด'),
(90593005, 'INNOVATION UNBOXED', 'กลุ่มศาสตร์แห่งการคิด'),
(90593007, 'SERIES IN DAILY LIFE', 'กลุ่มศาสตร์แห่งการคิด'),
(90593009, 'IMMUNITY THROUGH MEDIA', 'กลุ่มศาสตร์แห่งการคิด'),
(90593015, 'FUN WITH AI', 'กลุ่มศาสตร์แห่งการคิด'),
(90593016, 'INFOGRAPHIC DESIGN', 'กลุ่มศาสตร์แห่งการคิด'),
(90593017, 'FUN WITH DRUGS AND HERBS', 'กลุ่มศาสตร์แห่งการคิด'),
(90593019, 'DIGITAL STORY TELLING IN JOURNEY', 'กลุ่มศาสตร์แห่งการคิด'),
(90593021, 'BCG ECONOMY IN ACTION', 'กลุ่มศาสตร์แห่งการคิด'),
(90594001, 'MODERN ENTREPRENEURS', 'ศิลปแห่งการจัดการ'),
(90594002, 'SOCIAL ENTREPRENEURS', 'ศิลปแห่งการจัดการ'),
(90594003, 'MODERN MANAGEMENT AND LEADERSHIP', 'ศิลปแห่งการจัดการ'),
(90594004, 'INVESTMENT PLANNING', 'ศิลปแห่งการจัดการ'),
(90594006, 'LAW FOR NEW GENERATION', 'ศิลปแห่งการจัดการ'),
(90594009, 'KNOWLEDGE MANAGEMENT FOR INNOVATION DEVELOPMENT', 'ศิลปแห่งการจัดการ'),
(90594012, 'INNOVATIVE ENTREPRENEURS', 'ศิลปแห่งการจัดการ'),
(90594013, 'FUN WITH ONLINE BUSINESS', 'ศิลปแห่งการจัดการ'),
(90594015, 'CONTEMPORARY MARKETING', 'ศิลปแห่งการจัดการ'),
(90594016, 'SMART TIPS FOR BEGINNING INVESTERS', 'ศิลปแห่งการจัดการ'),
(90595004, 'DEVELOPMENT OF READING AND WRITING SKILLS IN ENGLISH', 'กลุ่มภาษาและการสื่อสาร'),
(90595012, 'ENGLISH FOR PROFESSIONAL COMMUNICATION', 'กลุ่มภาษาและการสื่อสาร'),
(90595014, 'ENGLISH FOR BUSINESS', 'กลุ่มภาษาและการสื่อสาร'),
(90595016, 'ENGLISH FOR INDUSTRY', 'กลุ่มภาษาและการสื่อสาร'),
(90595017, 'BASIC ENGLISH PRONUNCIATION', 'กลุ่มภาษาและการสื่อสาร'),
(90595022, 'LISTENING AND READING FOR IMPROVING LIFE QUALITY', 'กลุ่มภาษาและการสื่อสาร'),
(90595026, 'LANGUAGE IN THAI SOCIETY', 'กลุ่มภาษาและการสื่อสาร'),
(90595027, 'ENGLISH FOR PUBLIC RELATIONS', 'กลุ่มภาษาและการสื่อสาร'),
(90595029, 'ENGLISH FOR DESIGN', 'กลุ่มภาษาและการสื่อสาร'),
(90595033, 'CHINESE FOR TRAVEL', 'กลุ่มภาษาและการสื่อสาร'),
(90595037, 'FOUNDATION CHINESE', 'กลุ่มภาษาและการสื่อสาร'),
(90595039, 'CHINESE GRAMMAR AND IDIOMS AND PROVERBS', 'กลุ่มภาษาและการสื่อสาร'),
(90641001, 'CHARM SCHOOL', 'กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21 '),
(90641002, 'DIGITAL INTELLIGENCE QUOTIENT', 'กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21 '),
(90641003, 'SPORTS AND RECREATIONAL ACTIVITIES', 'กลุ่มทักษะที่จำเป็นในศตวรรษที่ 21 '),
(90642012, 'DESIGN THINKING', 'กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ'),
(90642043, 'SCIENCE OF BURGER', 'กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ'),
(90642090, 'GLOBAL INSIDE', 'กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ'),
(90642108, 'DIGITAL PHOTOGRAPHY TECHNOLOGY', 'กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ'),
(90642116, 'SMART CITY AND CITY INNOVATION', 'กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ'),
(90642144, 'MAGIC MIRROR', 'กลุ่มทักษะด้านบุคคลและทักษะส่งเสริมวิชาชีพ'),
(90643024, 'HAPPINESS FARMS', 'กลุ่มทักษะด้านการจัดการและภาวะความเป็นผู้นำ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD KEY `Group_subject` (`Group_subject`),
  ADD KEY `Name_subject_2` (`Name_subject`),
  ADD KEY `ID_subject` (`ID_subject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
