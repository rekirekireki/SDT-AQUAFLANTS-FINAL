-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 06:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquaflants`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `adminID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adminUniqueID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`adminID`, `username`, `password`, `adminUniqueID`) VALUES
(1, 'AquaFlantAdmin', '123123', 'AscaASD');

-- --------------------------------------------------------

--
-- Table structure for table `planttbl`
--

CREATE TABLE `planttbl` (
  `plantID` int(100) NOT NULL,
  `plantType` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gardenSize` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantDes` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantSoil` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantSun` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantWater` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Photo` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `userName` text NOT NULL,
  `email` text NOT NULL,
  `userPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `userName`, `email`, `userPassword`) VALUES
(2, 'Kayl', 'Dela Pena', 'Kayl', 'kyledelapena45@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `userevents`
--

CREATE TABLE `userevents` (
  `eventID` int(11) NOT NULL,
  `plantID` int(50) NOT NULL,
  `userID` int(50) NOT NULL,
  `start_Date` datetime(6) NOT NULL,
  `end_date` datetime(6) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plantImg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eventName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `watered` varchar(50) NOT NULL,
  `sunlight` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `planttbl`
--
ALTER TABLE `planttbl`
  ADD PRIMARY KEY (`plantID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userevents`
--
ALTER TABLE `userevents`
  ADD PRIMARY KEY (`eventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planttbl`
--
ALTER TABLE `planttbl`
  MODIFY `plantID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userevents`
--
ALTER TABLE `userevents`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
