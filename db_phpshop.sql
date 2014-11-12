-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2013 at 02:32 PM
-- Server version: 5.5.25
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_phpshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`, `admin_name`) VALUES
(1, 'admin', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_tel` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `bill_status` enum('wait','pay','send') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `created_date`, `customer_name`, `customer_tel`, `customer_address`, `bill_status`) VALUES
(2, '2013-04-03 04:51:47', 'à¸–à¸²à¸§à¸£ à¸¨à¸£à¸µà¹€à¸ªà¸™à¸žà¸´à¸¥à¸²', '0868776053', '80 moo 5', 'wait'),
(3, '2013-04-03 09:16:43', 'à¸–à¸²à¸§à¸£ à¸¨à¸£à¸µà¹€à¸ªà¸™à¸žà¸´à¸¥à¸²', '0868776053', '80 moo 5', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_price` int(5) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `order_status` enum('wait','pay','send') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `order_price`, `bill_id`, `order_status`) VALUES
(1, 9, 300, 2, 'send'),
(2, 12, 250, 2, 'send'),
(3, 13, 350, 2, 'pay'),
(4, 14, 300, 2, 'pay'),
(5, 13, 350, 2, 'pay'),
(6, 12, 250, 2, 'wait'),
(7, 9, 300, 3, 'wait'),
(8, 12, 250, 3, 'wait'),
(9, 13, 350, 3, 'wait'),
(10, 14, 300, 3, 'wait'),
(11, 13, 350, 3, 'wait'),
(12, 12, 250, 3, 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `status` enum('show','hide') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `detail`, `price`, `image`, `created_date`, `status`) VALUES
(9, 'PHP Reference Function', '', 300, 'cover.png', '2013-04-03', 'show'),
(12, 'PHP OOP', '', 250, 'php_oop.png', '2013-04-03', 'show'),
(13, 'Yii Advanced', '', 350, 'cover.png', '2013-04-03', 'show'),
(14, 'Yii Basic', '', 300, 'yii_basic.png', '2013-04-03', 'show');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
