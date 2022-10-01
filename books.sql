-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2022 at 10:22 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

DROP TABLE IF EXISTS `book_info`;
CREATE TABLE IF NOT EXISTS `book_info` (
  `isbn` int(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `author` varchar(60) NOT NULL,
  `edition` int(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM AUTO_INCREMENT=5555556 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`isbn`, `title`, `author`, `edition`, `date`) VALUES
(3333333, 'computer', 'maged', 2, '2013-01-01'),
(222222, 'Art', 'ibrahim', 1, '2012-01-01'),
(111111, 'history', 'Ahmed', 3, '2000-01-01'),
(444444, 'cooking', 'mamdouh', 1, '2016-01-01'),
(5555555, 'medical', 'fawzy', 4, '2010-01-01'),
(66666, 'education', 'karim', 1, '2017-01-01'),
(777777, 'science', 'amr', 5, '2008-01-01'),
(88888, 'travel', 'mahmoud', 2, '2010-01-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
