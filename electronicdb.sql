-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2018 at 09:20 AM
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
-- Database: `electronicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `item` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `surname`, `address`, `city`, `country`, `item`, `quantity`, `date`, `total`) VALUES
(7, 1, 'Chee', 'Kin', 'street', 'city', 'Bosnia and Herzegovina', 'Samsung Galaxy S8', 1, '2018-01-11', 1200),
(6, 1, 'Chee', 'Kin', 'street', 'city', 'Bosnia and Herzegovina', 'Samsung Galaxy S8', 1, '2018-01-10', 1200),
(4, 1, 'Chee', 'Kin', 'street', 'city', 'Bosnia and Herzegovina', 'Samsung Galaxy S8', 1, '2018-01-10', 1200),
(5, 1, 'Chee', 'Kin', 'street', 'city', 'Bosnia and Herzegovina', 'Samsung Galaxy S8', 1, '2018-01-10', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_brand` text NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_capacity` int(11) NOT NULL,
  `product_color` text NOT NULL,
  `product_image` text NOT NULL,
  `product_comment` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_brand`, `product_quantity`, `product_price`, `product_capacity`, `product_color`, `product_image`, `product_comment`) VALUES
(1, 'Samsung Galaxy S8', '1', 3, 1200, 64, 'silver', 'C:fakepathitem1.png', 'G950F\nSve najbolje\nDobar \nNije los'),
(2, 'Samsung Galaxy S6', '1', 0, 250, 128, 'black', 'C:fakepathitem2.png', 'asd\nads\nasd'),
(3, 'Samsung Galaxy S5', '1', 2, 500, 32, 'white', 'C:fakepathitem3.png', 'asd\nasd\nasd\nasd'),
(7, 'demo', '2', 2, 200, 32, 'black', 'C:fakepathitem1.png', 'asd\nasd\nasd\nasd'),
(8, 'demoitem', '3', 1, 200, 64, 'silver', 'C:fakepathitem1.png', 'asd\nasd'),
(9, 'moby-electronic', '1', 3, 13, 3, 'blue', 'C:fakepathitem1.png', 'dsdsds\nds\nds\nds\nd\ns');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `dateofbirth` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `email` text NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country` text NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `title`, `firstname`, `lastname`, `gender`, `dateofbirth`, `username`, `password`, `street`, `city`, `email`, `postcode`, `country`, `type`) VALUES
(1, 'Mr.', 'Chee', 'Kin', 'Male', '1954-09-15', 'cheekin', 'passwordTest123', 'street', 'city', 'm.hadzimehanovic@gmail.com', '71000', 'Bosnia and Herzegovina', 0),
(2, 'Mr.', 'Admin', 'AdminPrezime', 'male', '2018-01-11', 'admin', 'Admin12345', 'ulica', 'grad', 'email@gmail.com', '71000', 'BiH', 1),
(4, 'Mrs.', 'Female', 'Femalus', 'Female', '2018-01-11', 'female', 'Female12345', 'street', 'city', 'mail@gmail.com', '71999', 'country', 0),
(5, 'Mrs.', 'Female', 'Femalus', 'Female', '2018-01-11', 'female', 'Female12345', 'street', 'city', 'mail@gmail.com', '71999', 'country', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
