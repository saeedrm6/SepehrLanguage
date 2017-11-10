-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2017 at 11:24 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahimima_sepehr`
--

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `ID` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Mobile` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `Description` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `Amount` int(11) NOT NULL,
  `Authority` int(11) NOT NULL,
  `refid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`ID`, `fname`, `lname`, `time`, `Mobile`, `Description`, `Email`, `Amount`, `Authority`, `refid`) VALUES
(1, 'سعید', 'رحیمی منش', '2017-09-25 13:43:07', '09193350901', 'سعید رحیمی منش -- B2.Part4 -- 09193350901 -- تهران اسلامشهر خ امام موسی کاظم ک 25 پ41 ط3 -- Rahimimanesh.saeeid@gmail.com', 'Rahimimanesh.saeeid@gmail.com', 100, 54150932, 2147483647),
(2, 'سعید', 'رحیمی منش', '2017-09-25 19:51:53', '09193350901', 'سعید رحیمی منش -- Menschen B1.2 Part2 -- 09193350901 -- تهران -- rahimimanesh.saeeid@gmail.com', 'rahimimanesh.saeeid@gmail.com', 320000, 54180590, 0),
(3, 'سعید', 'رحیمی منش', '2017-09-26 06:06:17', '09193350901', 'سعید رحیمی منش -- HITIT 3.2 -- 09193350901 -- تهران اسلامشهر خ امام موسی کاظم ک 25 پ41 ط3 -- Rahimimanesh.saeeid@gmail.com', 'Rahimimanesh.saeeid@gmail.com', 350000, 54201936, 0),
(4, 'dfgdfgfdg', 'bdfb', '2017-09-26 07:46:01', '345345345', 'dfgdfgfdg bdfb -- Menschen B1.2 Part1 -- 345345345 -- bdbdbdf -- mohamadaminsadeghhasani@gmail.com', 'mohamadaminsadeghhasani@gmail.com', 320000, 54207794, 0),
(5, 'مرتضی', 'موسوی', '2017-10-01 09:43:45', '9193350901', 'مرتضی موسوی -- Menschen A2.1 Part2 -- 9193350901 -- اسلامشهر -- 1@1.com', '1@1.com', 260000, 54635964, 0),
(6, 'سعید', 'رحیمی منش', '2017-10-04 10:58:18', '09193350901', 'سعید رحیمی منش -- Got it S.A.2 -- 09193350901 -- تهران -- rahimimanesh.saeeid@gmail.com', 'rahimimanesh.saeeid@gmail.com', 120000, 0, 0),
(7, 'سعید', 'رحیمی منش', '2017-10-04 11:00:24', '09193350901', 'سعید رحیمی منش -- Got it 2.A.1 -- 09193350901 -- تهران -- takhsisparsseo@gmail.com', 'takhsisparsseo@gmail.com', 140000, 0, 0),
(8, 'سعید', 'رحیمی', '2017-10-04 12:19:49', '9193350901', 'سعید رحیمی -- A1.Part3 -- 9193350901 -- اسلامشهر -- 1@1.com', '1@1.com', 235000, 54880822, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
