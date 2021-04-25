-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 09:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(15) NOT NULL,
  `CourseName` varchar(30) NOT NULL,
  `Lecturer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `Lecturer`) VALUES
(1, '1C', 'Solodkov'),
(2, 'Databases', 'Svetlov'),
(3, 'GUI', 'Kuzmenko'),
(4, 'OOP', 'Sevolobov'),
(5, 'web', 'Svetlov');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `GroupID` varchar(15) NOT NULL,
  `Program` varchar(40) NOT NULL,
  `Mentor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`GroupID`, `Program`, `Mentor`) VALUES
('MKN-191', 'mathematics and computer science', 'Ignatev'),
('Pib-191', 'applied computer science', 'Klyachin'),
('PMI-191', 'applied mathematics and computer science', 'Kislov'),
('RTK-191', 'radio engineering', 'Vasilev');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `PointID` int(10) NOT NULL,
  `Sum` int(10) NOT NULL,
  `StID` int(11) NOT NULL,
  `CourseID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`PointID`, `Sum`, `StID`, `CourseID`) VALUES
(1, 35, 1, 1),
(2, 15, 2, 2),
(3, 32, 1, 3),
(4, 32, 1, 4),
(5, 21, 4, 2),
(6, 17, 2, 4),
(7, 23, 3, 5),
(8, 15, 1, 2),
(15, 23, 1, 5),
(16, 31, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StID` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Surname` varchar(15) NOT NULL,
  `DoB` date NOT NULL,
  `Mail` varchar(20) NOT NULL,
  `GroupID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StID`, `Name`, `Surname`, `DoB`, `Mail`, `GroupID`) VALUES
(1, 'Evgeny', 'Anderson', '2001-12-25', 'Pib-9234@volsu.ru', 'PMI-191'),
(2, 'Vladimir', 'Gorin', '2001-12-01', 'vovv@gmail.com', 'Pib-191'),
(3, 'Vasiliy', 'Kiselev', '2001-04-02', 'Vvvas@gmail.com', 'MKN-191'),
(4, 'Roman', 'Feronin', '2000-04-09', 'Romka@gmail.com', 'RTK-191'),
(5, 'Georgy', 'Jenev', '2001-02-02', 'Gej@gmail.com', 'PMI-191');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`PointID`),
  ADD UNIQUE KEY `StID_2` (`StID`,`CourseID`),
  ADD KEY `StID` (`StID`),
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StID`),
  ADD KEY `GroupID` (`GroupID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `PointID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
