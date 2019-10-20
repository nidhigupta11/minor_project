-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2019 at 07:56 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minorpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `minor`
--

DROP TABLE IF EXISTS `minor`;
CREATE TABLE IF NOT EXISTS `minor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `user_text` varchar(500) NOT NULL,
  `result` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minor`
--

INSERT INTO `minor` (`id`, `fname`, `lname`, `email`, `password`, `gender`, `user_text`, `result`) VALUES
(1, 'Nidhi', 'Gupta', 'nidhi@gmail.com', 'nidhi', 'F', 'i am happy today. good day.', 'Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.Thank you for taking this test.'),
(3, 'kritika', 'shetty', 'kittu@gmail.com', 'kitty', 'F', 'Great night! Having fun!!', 'Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.<br>Thank you for taking this test.');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `text` varchar(1024) NOT NULL,
  `result` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
