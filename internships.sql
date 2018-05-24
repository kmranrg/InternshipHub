-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2018 at 10:59 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `orgname`, `name`, `email`, `password`, `contact`, `city`) VALUES
(1, 'Apple', 'Steve Jobs', 'steve@apple.com', 'AppleSteve', '9876543210', 'New York'),
(2, 'Microsoft', 'Bill Gates', 'bill@microsoft.com', 'MicrosoftBill', '9876543210', 'Cupertino');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

DROP TABLE IF EXISTS `internship`;
CREATE TABLE IF NOT EXISTS `internship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orgname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `imglink` varchar(600) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `orgname`, `title`, `description`, `startdate`, `enddate`, `location`, `salary`, `imglink`) VALUES
(1, 'Apple', 'Web Development', 'The Web Development Training by Internshala is a 6-week online training program in the fields of HTML, CSS,Bootstrap, PHP, and MySQLi. In this training program, you will learn how to create a website.', '14-07-2018', '30-08-2018', 'New Delhi', 2200, '10.jpg'),
(2, 'Apple', 'Android Application', 'The online Android app development training is a 6 weeks training program. As part of the training, you will learn how to create an android app by making your own android music player with features like shake to change', '19-08-2018', '22-09-2018', 'Bengluru', 3200, '9.jpg'),
(3, 'Microsoft', 'Core Java', 'The Core Java Training by Internshala is a 6-weeks online training program \r\n covering the basic concepts of Java and Object-Oriented Programming such as\r\n arrays, methods, and inheritance, polymorphism, classes etc.', '17-07-2018', '17-08-2018', 'Kolkata', 4000, '8.jpg'),
(4, 'Microsoft', 'Advanced Python', 'The online training, Programming with Python, is a 6-week training program covering essential concepts on the building blocks of Python, object-oriented programming, the use of SQLite database and development of GUIs for Python applications.', '22-10-2018', '22-11-2018', 'Hyderabad', 4500, '7.jpg');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
