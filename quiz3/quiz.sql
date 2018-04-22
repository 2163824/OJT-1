-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 05, 2018 at 11:45 PM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `facultyID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `facultyID`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `text` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `subject`, `text`) VALUES
(19, 2152940, 'sorry', 'i did not review last night'),
(4, 890, 'really?', 'OMG is this really working?'),
(9, 555, 'sorry', 'i cant go to class today'),
(18, 2152940, 'sir', 'sir i cant access the quiz'),
(16, 2152940, 'noo', 'please postponed the quiz'),
(20, 56, 'why', 'what is the answer of no.5 in dbms? hehe');

-- --------------------------------------------------------

--
-- Table structure for table `loginsystem`
--

DROP TABLE IF EXISTS `loginsystem`;
CREATE TABLE IF NOT EXISTS `loginsystem` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginsystem`
--

INSERT INTO `loginsystem` (`user_id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'jelly', 'llanes', '123', '$2y$10$Ji/THfmIWSTBU614HOHl5eUbHpuE8FxVqphtOTjUfiKeuRTrn0r2W'),
(34, 'ivy mae', 'palma', '456', '$2y$10$2EgzDeqmEBQBmND38x1eNOsMoP0pwfbuFIFcrrmYgLWZ9Y3IoKry.'),
(29, 'Lakas', 'Ganda', '000', '$2y$10$MJ1/PSD3o6pDavPg9GVBDezhQXyfLM0NZ0JCX8jTIAuXzHpjHP3XW'),
(35, 'Angelica', 'Grabanzor', '2152940', '$2y$10$PEOBnDTXc4.DoKfh12JUnuq03Qk0lgrmlDtsJ5m4tZiXmMgGqYQAy'),
(32, 'yoko', 'na', '56', '$2y$10$HWO0csjl26QS/2/Qp5lluOax8IGAXj/0WG9/XeSHPX.OG5Nfc5kKS');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `subject_id` int(4) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `subject_id`) VALUES
(1, 'What does PHP stand for?', 'Personal Hypertext Processor', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'none of the above', 0, 1),
(3, 'How do you write \"Hello World\" in PHP', ' Document.Write(\"Hello World\");', ' \"Hello World\";', 'echo \"Hello World\";', 'lumabas ka!', 0, 1),
(6, 'what is my name', 'a', 'b', 'c', 'd', 2, 2),
(5, 'The PHP syntax is most similar to:', 'Perl and C', 'VBScript', 'JavaScript', 'none of the above', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(40) NOT NULL,
  `subject_code` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_code`, `password`) VALUES
(1, 'Programming Applications', 'IT341', 'progapps'),
(2, 'Database Management System', 'IT111', 'dbms'),
(3, 'Foreign Language', 'IT666', 'forlang');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
