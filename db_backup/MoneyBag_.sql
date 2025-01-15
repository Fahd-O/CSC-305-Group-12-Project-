-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 10:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneybag`
--

-- --------------------------------------------------------

--
-- Table structure for table `moneybag_registered_user_info_table`
--

CREATE TABLE `moneybag_registered_user_info_table` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='This is where registered user details are stored.';

--
-- Dumping data for table `moneybag_registered_user_info_table`
--

INSERT INTO `moneybag_registered_user_info_table` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `TimeStamp`) VALUES
(1, 'Fahd', 'realabiolafahad@gmail.com', '$2y$10$LqjGLRvHu31v571snEhJx.XB1jhn3Z/oMYvcsoyl39tjX5K0MWbv.', '2025-01-15 21:40:17'),
(2, '4Fahd', '4realabiolafahad@gmail.com', '$2y$10$63HG0Bu2PQ0MmtVBaw91quqDaQJcrkHa0vlihxAeDLOV3/sedPfaO', '2025-01-15 21:40:17'),
(3, 'You', 'you@me.com', '$2y$10$/9oqERSnPvrJ5CxhAc.V/u7C6d4ogys9ppi77ijw0WSdkPINTp2Y6', '2025-01-15 21:40:17'),
(4, 'we8', 'we@us.com', '$2y$10$3wdYlH1hy43fv5e0YqoFv.IqfS4gUXro.P7hrvpaGmmSHhpmMvUR6', '2025-01-15 21:40:17'),
(5, 'me and you', 'me@you.com', '$2y$10$Ni34IWjsDunCk5h05BnkG.sY3iWITEz.oaAC2Tfvg9DQRn13s3yg.', '2025-01-15 21:40:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moneybag_registered_user_info_table`
--
ALTER TABLE `moneybag_registered_user_info_table`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moneybag_registered_user_info_table`
--
ALTER TABLE `moneybag_registered_user_info_table`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
