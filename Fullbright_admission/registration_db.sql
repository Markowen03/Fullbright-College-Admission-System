-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 21, 2024 at 02:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--
-- Error reading structure for table registration_db.students: #1932 - Table &#039;registration_db.students&#039; doesn&#039;t exist in engine
-- Error reading data for table registration_db.students: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `registration_db`.`students`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `students_`
--

CREATE TABLE `students_` (
  `ID` int(20) NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_Number` varchar(20) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_`
--

INSERT INTO `students_` (`ID`, `Full_name`, `Course`, `Email`, `Contact_Number`, `image`, `file`) VALUES
(1, 'Kai Sotto', 'BSIT', 'kaisotto@yahoo.com', '346345643645', 'OIP (6).jpeg', ''),
(3, 'Mark Owen Badua', 'BSIT', 'markowenbadua711@gmail.com', '09083384716', 'IMG_9658 - Copy.JPG', ''),
(9, 'Bantatay', 'Engineering', 'mangpandesal@yahoo.com', '12342121421', 'R (4).jpeg', ''),
(11, 'Razelle Badua', 'Architect', 'raz@yahoo.com', '32543245342', '80007818_831569197270281_3193664482177974272_n.jpg', ''),
(13, 'Arwind Santos', 'BSED', 'arwind@yahoo.com', '3425324543', 'IMG_9649.JPG', ''),
(24, 'Mark', 'BSIT', 'mark@yahoo.com', '12', '400574007_704720091374980_447835395220918635_n.jpg', ''),
(2147483647, 'Diwata  Pares Overload', 'Business', 'Diwata@yahoo.com', '25345353453', 'hq2.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_`
--
ALTER TABLE `students_`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
