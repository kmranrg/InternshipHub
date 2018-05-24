-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2018 at 04:19 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internships`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

DROP TABLE IF EXISTS `applied`;
CREATE TABLE IF NOT EXISTS `applied` (
  `student_id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `orgname`, `name`, `email`, `password`, `contact`, `city`) VALUES
(1, 'Apple', 'Steve', 'jobs@apple.com', 'Anurag', '9876543210', 'USA'),
(2, 'Microsoft', 'Bill', 'bill@gmail.com', 'Anurag', '9876543210', 'UK'),
(3, 'Amazon', 'Bezos', 'bezos@gmail.com', 'Anurag', '9876543210', 'New Delhi'),
(4, 'Flipkart', 'Flip', 'flip@kart.com', 'Anurag', '9876543210', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

DROP TABLE IF EXISTS `internship`;
CREATE TABLE IF NOT EXISTS `internship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `views` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `imglink` varchar(600) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `views`, `orgname`, `title`, `description`, `startdate`, `enddate`, `location`, `salary`, `imglink`) VALUES
(18, 0, 'Apple', 'Web Development Training', 'The Web Development Training by Internshala is a 6-week online training program in the fields of HTML, CSS,Bootstrap, PHP, and MySQLi. In this training program, you will learn how to create a website.', '14-07-2018', '15-08-2018', 'New Delhi', 2220, '8.png'),
(19, 0, 'Apple', 'Android Application', 'The online Android app development training is a 6 weeks training program. As part of the training, you will learn how to create an android app by making your own android music player with features like shake to change, visualizer, mark as favorite, etc.', '14-07-2018', '15-07-2018', 'New Delhi', 0, '8.png'),
(21, 0, 'Microsoft', 'Core Java Training', 'The Core Java Training by Internshala is a 6-weeks online training program covering the basic concepts of Java and Object-Oriented Programming such as arrays, methods, and inheritance, polymorphism, classes etc.', '14-07-2018', '15-07-2018', 'Bengluru', 2220, '12.png'),
(20, 0, 'Microsoft', 'Python', 'The online training, Programming with Python, is a 6-week training program covering essential concepts on the building blocks of Python, object-oriented programming, the use of SQLite database and development of GUIs for Python applications.', '14-07-2018', '25-09-2018', 'Bengluru', 2000, '12.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `contact`, `city`) VALUES
(1, 'Kumar Anurag', 'kmranrg@gmail.com', 'Anurag', '9983436229', 'New Delhi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
