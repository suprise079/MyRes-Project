-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 09:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database myres;
use myres;

--
-- Database: `myres`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `Res_ID` int(11) NOT NULL,
  `Res_Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Campus` varchar(50) DEFAULT NULL,
  `Price_Accreditation` int(11) DEFAULT NULL,
  `Sharing` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`Res_ID`, `Res_Name`, `Address`, `Campus`, `Price_Accreditation`, `Sharing`, `Email`, `Telephone`, `Description`) VALUES
(1, 'Citiq Students', '139 Carolin Street, Brixton, Johannesburg, 2109', 'APK', 3500, 'Yes', 'umhlangaJ@citiq.co.za', 724183154, 'For your home away from home. Single rooms in a communal house.'),
(2, 'City Waldorf Student Accommodation', '35 Sauer Street (1634 Albertina Sisulu), Johannesburg, 2000', 'APK', 3500, 'Yes', 'hellen@citywaldorf.com', 722246181, 'For your home away from home. Single rooms in a communal house.'),
(3, 'Hlala Kamnandi Properties', '35 Hampton Avenue, Rossmore, Johannesburg, 2092', 'APK', 3500, 'No', 'minky@hlalakamnandi.co.za', 732560297, 'For your home away from home. Single rooms in a communal house.'),
(4, 'Mafadi Property Management', '145 High Street, Brixton, Johannesburg, 2092', 'APB', 3500, 'No', 'brixton@mafadi.co.za', 825883199, 'For your home away from home. Single rooms in a communal house.'),
(5, 'Malibu Estates', '153 Collins Street, Brixton, Johannesburg, 2019', 'APB', 3500, 'Yes', 'malibu@absamail.co.za', 837881204, 'For your home away from home. Single rooms in a communal house.'),
(6, 'Lapeng Student Accommodation', '79 Collins Street, Brixton, Johanneburg, 2092', 'APB', 3500, 'No', 'sizwe.noruwana@gmail.com', 826670295, 'For your home away from home. Single rooms in a communal house.'),
(7, 'Colec Properties', '3 Gordon Terrace, Yeoville, Johannesburg, 2198', 'DFC', 3500, 'Yes', 'dustin@colecproperties.co.za', 843333124, 'For your home away from home. Single rooms in a communal house.'),
(8, 'Highlands Urban Living', '3 Highlands Street, Highlands, Johannesburg, 2092', 'DFC', 3500, 'Yes', 'smskhosana@gmail.com', 835480182, 'For your home away from home. Single rooms in a communal house.'),
(9, 'Respublica Student Living', '17 Hadfield Road, Berea, Johannesburg, 2000', 'DFC', 3500, 'No', 'xiki@respublica.co.za', 100200300, 'For your home away from home. Single rooms in a communal house.'),
(10, 'Harambe Accommodation', '955 Python Crescent, Johannesburg, 1862', 'SWC', 3500, 'Yes', 'mfaba.thabisile@gmail.com', 824502400, 'For your home away from home. Single rooms in a communal house.'),
(11, 'The Richmond', '42 Richmond Ave, Auckland Park, Johannesburg, 2092', 'APK', 5000, 'No', 'info@richmondlife.co.za', 873653166, 'For your home away from home. Single rooms in a communal house.'),
(12, 'Richmond Corner', '56 Richmond Ave, Auckland Park, Johannesburg, 2092', 'APK', 4800, 'Yes', 'info@richmondcorner.co.za', 873522767, 'For your home away from home. Single rooms in a communal house.'),
(13, 'Kingsway Place Student Accomodation', '66 Kingsway Ave, Auckland Park, Johannesburg, 2092', 'APK', 4800, 'No', 'info@kingswayplace.co.za', 873579081, 'For your home away from home. Single rooms in a communal house.');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `Res_ID` int(11) DEFAULT NULL,
  `Pictures` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`Pictures`)),
  `Location` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Average` double DEFAULT NULL,
  `Res_ID` int(11) DEFAULT NULL,
  `Comment_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Res_ID` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `User_Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `Comment_ID` int(11) NOT NULL,
  `Comment_Name` varchar(50) DEFAULT NULL,
  `Ratings` double DEFAULT NULL,
  `Comment_Date` datetime DEFAULT NULL,
  `Comment_Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`Res_ID`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD KEY `ResID` (`Res_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `Res_ID` (`Res_ID`),
  ADD KEY `Comment_ID` (`Comment_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Res_ID`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `ResID` FOREIGN KEY (`Res_ID`) REFERENCES `accomodation` (`Res_ID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `Res_ID` FOREIGN KEY (`Res_ID`) REFERENCES `accomodation` (`Res_ID`),
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`Comment_ID`) REFERENCES `user_comment` (`Comment_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Res_ID`) REFERENCES `accomodation` (`Res_ID`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`Res_ID`) REFERENCES `accomodation` (`Res_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
