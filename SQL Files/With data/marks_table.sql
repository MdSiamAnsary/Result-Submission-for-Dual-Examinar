-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 12:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultsubmissionfordualexaminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks_table`
--

CREATE TABLE `marks_table` (
  `studentid` varchar(100) NOT NULL,
  `course1quizteacher1` varchar(100) NOT NULL,
  `course1finalteacher1` varchar(100) NOT NULL,
  `course1quizteacher2` varchar(100) NOT NULL,
  `course1finalteacher2` varchar(100) NOT NULL,
  `course2quizteacher1` varchar(100) NOT NULL,
  `course2finalteacher1` varchar(100) NOT NULL,
  `course2quizteacher2` varchar(100) NOT NULL,
  `course2finalteacher2` varchar(100) NOT NULL,
  `course3quizteacher1` varchar(100) NOT NULL,
  `course3finalteacher1` varchar(100) NOT NULL,
  `course3quizteacher2` varchar(100) NOT NULL,
  `course3finalteacher2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_table`
--

INSERT INTO `marks_table` (`studentid`, `course1quizteacher1`, `course1finalteacher1`, `course1quizteacher2`, `course1finalteacher2`, `course2quizteacher1`, `course2finalteacher1`, `course2quizteacher2`, `course2finalteacher2`, `course3quizteacher1`, `course3finalteacher1`, `course3quizteacher2`, `course3finalteacher2`) VALUES
('201103', '35', '45', '34', '47', '35', '49', '36', '49', '25', '27', '27', '27'),
('201101', '36', '48', '37', '49', '37', '46', '35', '49', '38', '50', '38', '50'),
('201102', '35', '45', '36', '48', '36', '46', '38', '46', '36', '48', '35', '47'),
('201113', '36', '51', '36', '51', '36', '52', '36', '51', '36', '50', '37', '52'),
('201114', '37', '49', '36', '49', '37', '49', '37', '49', '36', '50', '38', '50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
