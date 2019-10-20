-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 09:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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

CREATE TABLE `minor` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `user_text` varchar(500) NOT NULL,
  `result` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minor`
--

INSERT INTO `minor` (`fname`, `lname`, `email`, `password`, `gender`, `user_text`, `result`) VALUES
('Nidhi', 'Gupta', 'nidhi@gmail.com', 'nidhi', 'F', 'i am happy today. good day.', 'Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.Thank you for taking this test.'),
('Nidhi', 'Gupta', 'nidhi@gmail.com', 'nidhi', 'F', 'i am happy today. good day.', 'Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.Thank you for taking this test.'),
('kritika', 'shetty', 'kittu@gmail.com', 'kitty', 'F', 'Great night! Having fun!!', 'Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.<br>Thank you for taking this test.'),
('kritika', 'shetty', 'kittu@gmail.com', 'kitty', 'F', 'Great night! Having fun!!', 'Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.<br>Thank you for taking this test.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
