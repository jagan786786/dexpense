-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 08:05 AM
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
-- Database: `expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblexpense`
--

CREATE TABLE `tblexpense` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `ExpenseDate` date DEFAULT NULL,
  `ExpenseItem` varchar(255) NOT NULL,
  `ExpenseCost` varchar(50) NOT NULL,
  `NoteDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblexpense`
--

INSERT INTO `tblexpense` (`ID`, `UserId`, `ExpenseDate`, `ExpenseItem`, `ExpenseCost`, `NoteDate`) VALUES
(1, 12, '2023-07-01', 'Apple', '200', '2023-07-14 19:27:02'),
(2, 12, '2023-06-08', 'wifi', '3000', '2023-07-14 19:27:58'),
(3, 12, '2022-06-24', 'electronics', '20000', '2023-07-14 19:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(1, 'Jagannath Patro', 'jagannathpatro234@gmail.com', '6371813048', 'e10adc3949ba59abbe56e057f20f883e', '2023-07-10 21:10:21'),
(2, 'chinu', 'chinu@gmail.com', '8457880976', 'e10adc3949ba59abbe56e057f20f883e', '2023-07-10 21:18:05'),
(3, 'chinu', 'jaga@gmail.com', '8457880976', 'e10adc3949ba59abbe56e057f20f883e', '2023-07-10 21:18:42'),
(4, 'siba sahu', 'siba@gmail.com', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', '2023-07-10 21:23:50'),
(5, 'siba sahu', 'sibaads@gmail.com', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', '2023-07-10 21:24:27'),
(6, 'siba sahu', 'sibafhgethgu@gmail.com', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', '2023-07-10 21:28:35'),
(7, 'sabita patro', 'sabita@gmail.com', '8457880976', 'e10adc3949ba59abbe56e057f20f883e', '2023-07-11 10:10:25'),
(8, 'jai patro', 'jai@gmail.com', '9668367700', '21b95a0f90138767b0fd324e6be3457b', '2023-07-11 11:26:06'),
(9, 'tanmayee patro', 'tanu@gmail.com', '8144286269', 'b51e8dbebd4ba8a8f342190a4b9f08d7', '2023-07-11 18:32:29'),
(10, 'sabita patro', 'sab@gmail.com', '7418529630', '4297f44b13955235245b2497399d7a93', '2023-07-11 18:42:59'),
(11, 'ayush kant sahu', 'ayush@gmail.com', '6371813048', '123123', '2023-07-11 21:02:53'),
(12, 'Jagannath Mishra', 'jagan@gmail.com', '5848616545', '456456', '2023-07-13 21:41:26'),
(13, 'Jagannath Patro', 'herygyuft@gmail.com', '1231231313', '123123', '2023-07-14 17:48:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblexpense`
--
ALTER TABLE `tblexpense`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblexpense`
--
ALTER TABLE `tblexpense`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
