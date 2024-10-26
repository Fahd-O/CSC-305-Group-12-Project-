-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 19, 2023 at 12:50 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MoneyBag.`
--

-- --------------------------------------------------------

--
-- Table structure for table `MoneyBag_Registered_User_Info_Table`
--

CREATE TABLE `MoneyBag_Registered_User_Info_Table` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='This is where registered user details are stored.';

--
-- Dumping data for table `MoneyBag_Registered_User_Info_Table`
--

INSERT INTO `MoneyBag_Registered_User_Info_Table` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Fahd', 'realabiolafahad@gmail.com', '$2y$10$LqjGLRvHu31v571snEhJx.XB1jhn3Z/oMYvcsoyl39tjX5K0MWbv.'),
(2, '4Fahd', '4realabiolafahad@gmail.com', '$2y$10$63HG0Bu2PQ0MmtVBaw91quqDaQJcrkHa0vlihxAeDLOV3/sedPfaO'),
(3, 'You', 'you@me.com', '$2y$10$/9oqERSnPvrJ5CxhAc.V/u7C6d4ogys9ppi77ijw0WSdkPINTp2Y6'),
(4, 'we8', 'we@us.com', '$2y$10$3wdYlH1hy43fv5e0YqoFv.IqfS4gUXro.P7hrvpaGmmSHhpmMvUR6'),
(5, 'me and you', 'me@you.com', '$2y$10$Ni34IWjsDunCk5h05BnkG.sY3iWITEz.oaAC2Tfvg9DQRn13s3yg.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MoneyBag_Registered_User_Info_Table`
--
ALTER TABLE `MoneyBag_Registered_User_Info_Table`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MoneyBag_Registered_User_Info_Table`
--
ALTER TABLE `MoneyBag_Registered_User_Info_Table`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
