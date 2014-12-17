-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2014 at 01:24 PM
-- Server version: 5.5.33-cll-lve
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tannazmezon`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) NOT NULL,
  `category_code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_code`) VALUES
(1, 'محصولات', 'P'),
(2, 'ژورنال دیجیتال', 'J'),
(3, 'پارچه', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `group_id` int(11) NOT NULL,
  `activate` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `gender`, `mobile`, `group_id`, `activate`) VALUES
(1, 'pooya', 'sabramooz', 'مرد', '09361946269', 1, 1),
(11, 'mehrdad', 'parsa', 'مرد', '09376179571', 1, 1),
(12, 'ali', 'alaee', '', '091241241242', 1, 1),
(13, 'رامین', 'عبدی نیا', '', '09124381586', 5, 1),
(14, ' مهرداد', ' پارسا', '', ' 09376179571', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`) VALUES
(1, 'تست'),
(2, 'آرایشگاه'),
(3, 'jkn'),
(4, 'kn'),
(5, 'مشتری');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `explain` text NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `discount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `explain`, `image1`, `image2`, `image3`, `discount`, `category_id`, `sub_category_id`) VALUES
(14, '', 'Untitled-3.jpg', '', '', 0, 1, 6),
(15, '', 'Untitled-4.jpg', '', '', 0, 1, 6),
(16, '', 'Untitled-5.jpg', '', '', 0, 1, 6),
(17, '', 'ddd.jpg', '', '', 0, 1, 6),
(18, '', 'fff.jpg', '', '', 0, 1, 6),
(19, '', 'ggg.jpg', '', '', 0, 1, 6),
(20, '', 'hhh.jpg', '', '', 0, 1, 6),
(21, '', 'qqq.jpg', '', '', 0, 1, 6),
(22, '', 'qqq.jpg', '', '', 0, 1, 6),
(23, '', 'sss.jpg', '', '', 0, 1, 6),
(24, '', 'Untitled-1.jpg', '', '', 0, 1, 6),
(25, '', 'Untitled-3.jpg', '', '', 0, 1, 6),
(26, '', ',,,.jpg', '', '', 0, 1, 6),
(27, '', 'bbb.jpg', '', '', 0, 1, 6),
(28, '', 'kk.jpg', '', '', 0, 1, 6),
(29, '', 'll.jpg', '', '', 0, 1, 6),
(30, '', 'Untitled-;;;.jpg', '', '', 0, 1, 6),
(31, '', '.,m.jpg', '', '', 0, 3, 1),
(32, '', 'bvc.jpg', '', '', 0, 3, 1),
(33, '', 'fde.jpg', '', '', 0, 3, 1),
(34, '', 'fds.jpg', '', '', 0, 3, 1),
(35, '', 'hgf.jpg', '', '', 0, 3, 1),
(36, '', 'jj.jpg', '', '', 0, 3, 1),
(37, '', 'lij.jpg', '', '', 0, 3, 1),
(38, '', 'lij.jpg', '', '', 0, 3, 1),
(39, '', 'tre.jpg', '', '', 0, 3, 1),
(40, '', 'mnb.jpg', '', '', 0, 3, 1),
(41, '', 'Untitled-nnnn.jpg', '', '', 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category_name` varchar(250) NOT NULL,
  `sub_category_code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `sub_category_name`, `sub_category_code`) VALUES
(1, 'لباس عروس', 'B'),
(2, 'لباس شب', 'N'),
(3, 'لباس نامزدی', 'E'),
(4, 'لباس مهمانی', 'M'),
(5, 'لباس اسپرت', 'S'),
(6, 'مانتو', 'G');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
