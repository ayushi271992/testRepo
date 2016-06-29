-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 10:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `delhidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_fanatic`
--

CREATE TABLE IF NOT EXISTS `food_fanatic` (
  `Food_Fanatic_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Food_Fanatic_Image_Url` varchar(100) NOT NULL,
  `Food_Fanatic_Image_Name` varchar(50) NOT NULL,
  `Food_Fanatic_Description` text NOT NULL,
  `Food_Fanatic_Nearest_Metro_Station` text,
  `Food_Fanatic_Destination_To` text,
  `Food_Fanatic_Opening_Time` time DEFAULT NULL,
  `Food_Fanatic_Closing_Time` time DEFAULT NULL,
  `Food_Fanatic_Cost` varchar(100) DEFAULT NULL,
  `Food_Fanatic_Days_Closed` text,
  PRIMARY KEY (`Food_Fanatic_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fun_lovers`
--

CREATE TABLE IF NOT EXISTS `fun_lovers` (
  `Fun_Lovers_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Fun_Lovers_Image_Url` varchar(100) NOT NULL,
  `Fun_Lovers_Image_Name` varchar(50) NOT NULL,
  `Fun_Lovers_Description` text NOT NULL,
  `Fun_Lovers_Nearest_Metro_Station` text,
  `Fun_Lovers_Destination_To` text,
  `Fun_Lovers_Opening_Time` time DEFAULT NULL,
  `Fun_Lovers_Closing_Time` time DEFAULT NULL,
  `Fun_Lovers_Cost` varchar(100) DEFAULT NULL,
  `Fun_Lovers_Days_Closed` text,
  PRIMARY KEY (`Fun_Lovers_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fun_lovers`
--

INSERT INTO `fun_lovers` (`Fun_Lovers_Id`, `Fun_Lovers_Image_Url`, `Fun_Lovers_Image_Name`, `Fun_Lovers_Description`, `Fun_Lovers_Nearest_Metro_Station`, `Fun_Lovers_Destination_To`, `Fun_Lovers_Opening_Time`, `Fun_Lovers_Closing_Time`, `Fun_Lovers_Cost`, `Fun_Lovers_Days_Closed`) VALUES
(1, 'C:\\wamp\\www\\testRepo\\testRepo\\img\\3.jpg', 'Adventure Island', 'One of the Adventurous place in Delhi for the ride lovers.', 'Rithala', 'Keshav Puram', '11:00:00', '20:00:00', '1000', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `heritage_seeker`
--

CREATE TABLE IF NOT EXISTS `heritage_seeker` (
  `Heritage_Seeker_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Heritage_Seeker_Image_Url` varchar(100) NOT NULL,
  `Heritage_Seeker_Image_Name` varchar(50) NOT NULL,
  `Heritage_Seeker_Description` text NOT NULL,
  `Heritage_Seeker_Nearest_Metro_Station` text,
  `Heritage_Seeker_Destination_To` text,
  `Heritage_Seeker_Opening_Time` time DEFAULT NULL,
  `Heritage_Seeker_Closing_Time` time DEFAULT NULL,
  `Heritage_Seeker_Cost` varchar(100) DEFAULT NULL,
  `Heritage_Seeker_Days_Closed` text,
  PRIMARY KEY (`Heritage_Seeker_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `music_mania`
--

CREATE TABLE IF NOT EXISTS `music_mania` (
  `Music_Mania_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Music_Mania_Image_Url` varchar(100) NOT NULL,
  `Music_Mania_Image_Name` varchar(50) NOT NULL,
  `Music_Mania_Description` text NOT NULL,
  `Music_Mania_Nearest_Metro_Station` text,
  `Music_Mania_Destination_To` text,
  `Music_Mania_Opening_Time` time DEFAULT NULL,
  `Music_Mania_Closing_Time` time DEFAULT NULL,
  `Music_Mania_Cost` varchar(100) DEFAULT NULL,
  `Music_Mania_Days_Closed` text,
  PRIMARY KEY (`Music_Mania_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shopaholic`
--

CREATE TABLE IF NOT EXISTS `shopaholic` (
  `Shopaholic_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Shopaholic_Image_Url` varchar(100) NOT NULL,
  `Shopaholic_Image_Name` varchar(50) NOT NULL,
  `Shopaholic_Description` text NOT NULL,
  `Shopaholic_Nearest_Metro_Station` text,
  `Shopaholic_Destination_To` text,
  `Shopaholic_Opening_Time` time DEFAULT NULL,
  `Shopaholic_Closing_Time` time DEFAULT NULL,
  `Shopaholic_Cost` varchar(100) DEFAULT NULL,
  `Shopaholic_Days_Closed` text,
  PRIMARY KEY (`Shopaholic_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `spiritual_divine`
--

CREATE TABLE IF NOT EXISTS `spiritual_divine` (
  `Spiritual_Divine_Id` int(3) NOT NULL AUTO_INCREMENT,
  `Spiritual_Divine_Image_Url` varchar(100) NOT NULL,
  `Spiritual_Divine_Image_Name` varchar(50) NOT NULL,
  `Spiritual_Divine_Description` text NOT NULL,
  `Spiritual_Divine_Nearest_Metro_Station` text,
  `Spiritual_Divine_Destination_To` text,
  `Spiritual_Divine_Opening_Time` time DEFAULT NULL,
  `Spiritual_Divine_Closing_Time` time DEFAULT NULL,
  `Spiritual_Divine_Cost` varchar(100) DEFAULT NULL,
  `Spiritual_Divine_Days_Closed` text,
  PRIMARY KEY (`Spiritual_Divine_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `spiritual_divine`
--

INSERT INTO `spiritual_divine` (`Spiritual_Divine_Id`, `Spiritual_Divine_Image_Url`, `Spiritual_Divine_Image_Name`, `Spiritual_Divine_Description`, `Spiritual_Divine_Nearest_Metro_Station`, `Spiritual_Divine_Destination_To`, `Spiritual_Divine_Opening_Time`, `Spiritual_Divine_Closing_Time`, `Spiritual_Divine_Cost`, `Spiritual_Divine_Days_Closed`) VALUES
(1, 'C:\\wamp\\www\\testRepo\\testRepo\\img\\akshardham1.jpg', 'Akshardham', 'One of the most beautifully built temple in India with sound and light show', 'Akshardham', 'kanhaiya nagar', '10:00:00', '21:00:00', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
