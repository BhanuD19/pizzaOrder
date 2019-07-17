-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2014 at 01:39 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marias_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `category` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'margarita'),
(2, 'Vesuvio'),
(3, 'Funghi'),
(4, 'Altona'),
(5, 'Hawaii'),
(6, 'Vegetarian'),
(7, 'Tropicana'),
(8, 'Mamma Mia'),
(9, 'Fantastico'),
(10, 'Carousel'),
(11, 'Calzone'),
(12, 'Pepperoni'),
(13, 'Kerab Pizza'),
(14, 'Crocodile Pizza'),
(15, 'Taco Pizza'),
(16, 'Bravisimo'),
(17, 'Opera'),
(18, 'Romeo'),
(19, 'Chicken Pizza'),
(20, 'Black & White'),
(21, 'Mexicana'),
(22, 'Frutti De Mare'),
(23, 'Quattro Stagione'),
(24, 'Parma'),
(25, 'Capricciosa');

-- --------------------------------------------------------

--
-- Table structure for table `distination`
--

CREATE TABLE IF NOT EXISTS `distination` (
`id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `dist` varchar(300) NOT NULL,
  `agreement` varchar(100) NOT NULL,
  `person` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `distination`
--

INSERT INTO `distination` (`id`, `code`, `dist`, `agreement`, `person`, `time`) VALUES
(45, 'b5s5q4e7', 'nacab, talisay city', 'Delivery', '', '6:30pm'),
(46, '5ppan28s', '', 'Pick-Up', 'Henry Reyez', '11:30am'),
(47, 'as2825fa', '', 'Pick-Up', 'Gerdel cruz', '10:00am'),
(48, 'unoxsf2r', '', 'Pick-Up', 'Blake griffin', '8:00am'),
(49, '', '', '', '', ''),
(50, 'sqt5ytar', '', 'Pick-Up', 'argie', '8:00am'),
(51, '2ojgnm4y', '', 'Pick-Up', 'asasasasa', '8:00am'),
(52, 'ehd36fzh', '', 'Pick-Up', 'ggfdfdf', '8:00am'),
(53, 'z7eb2hui', 'dsaasasas', 'Delivery', '', '8:00am'),
(54, 'xq38bys8', '', 'Pick-Up', 'cswewrweqwewer', '8:00am'),
(55, 'd0rk5jk7', 'nacab, talisay city', 'Delivery', '', '12:30pm'),
(56, '3yw782fo', '', 'Pick-Up', 'qsqwqw', '12:45pm'),
(57, 'gsth3r38', '', 'Pick-Up', 'wertuiklsdcv ijhbefvokjn', '8:00am'),
(58, 'admin', '', 'Pick-Up', 'Shirley', '12:30pm'),
(59, 'oqdgjhkp', '', 'Pick-Up', 'Jannelyn Lapastora', '6:30pm'),
(60, '3ij7xhj2', '', 'Pick-Up', 'hgfhf', '11:45am'),
(61, '8uf2dpm8', 'la salle, bacolod city', 'Delivery', '', '9:45am'),
(62, 'jp8ik4cm', '', 'Pick-Up', 'jinky', '12:15pm'),
(63, 'r6g2u3m3', '', 'Pick-Up', '', '12:15pm'),
(64, 'bf50rbdb', 'davyton', 'Delivery', '', '8:00am'),
(65, 'xx5dc5hz', '', 'Delivery', '', '8:00am'),
(66, '7xo86eto', '', 'Pick-Up', '', '8:00am'),
(67, 'kvsqv6ie', '', 'Delivery', '', '8:00am'),
(68, '6g57jvp6', '', 'Delivery', '', '8:00am'),
(69, 'httofom6', '', 'Pick-Up', '', '9:45am'),
(70, 'kcmf8yam', '', 'Delivery', '', '8:00am');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qtyleft` int(11) NOT NULL,
  `qtysold` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `qtyleft`, `qtysold`, `product_id`) VALUES
(1, 'Tomato Sauce', 58, 58, '1, 2, 3,  4, 5, 6, 7, 8, 9, 10, '),
(2, 'Mozzarella Chesse', 58, 58, '1, 2, 3, 4, 5, 6, 7, 8, '),
(3, 'Mushrooms', 58, 58, '1,2,3, 5,12, 21, 24, '),
(4, 'Ham', 58, 58, '3, 6, 8, 21, 12, 24, '),
(5, 'Tuna', 58, 58, '1, 4, 10, 19, 15, '),
(6, 'Onion', 58, 58, '5, 14, 2, 6, 10, 13, 25, '),
(7, 'Pineapple', 58, 58, '2, 6, 10, 13, 14, 17, 19, '),
(8, 'Aubergine', 58, 58, '2, 3, 7, 12, 15, 18, 21, '),
(9, 'Sardines', 58, 58, '1, 4, 6, 7, 9, 10, 13, 24'),
(10, 'Ground Beef', 56, 60, '5, 6, 8, 3, 1, 9, 11, 18'),
(11, 'Bellpepper', 58, 58, '6, 7, 9, 21, 25, '),
(12, 'Zuchini', 58, 58, '5, 9, 3, 5, 7, 12, 3'),
(13, 'Olives', 58, 58, '9, 12, 15, 18, 20, 22, 24'),
(14, 'Chicken', 58, 58, '23, 25, 1, 16, 14, 18, 20'),
(15, 'Bacon', 58, 58, '6, 12, 34, 24, 23, 12, 3, 4'),
(16, 'Cayen Paper', 58, 58, '2, 3, 4, 7, 10, 20, 21, 22, 23, 25'),
(17, 'Balogenese Sauce', 56, 60, '4, 5, 7, 10, 23, 11'),
(18, 'Beef Tenderloin', 56, 60, '11, 23, 24, 25, 21, 22 '),
(19, 'Pork Tenderloin', 58, 58, '19, 18, 17, 16, 20'),
(20, 'Bearnaise Sauce', 56, 60, '5, 7, 9, 10, 11, 14, 16'),
(21, 'Egg', 58, 58, '4, 7, 9, 10, 13, 24,25'),
(22, 'Schrimps', 58, 58, '2, 3, 4, 7, 9, 10, 14 19, 20'),
(23, 'Curry', 56, 60, '11, 13, 17, 19, 21, 22, 25'),
(24, 'Pepperoni', 58, 58, '16, 17, 18, 19, 21, 23, 25 '),
(25, 'Tabasco', 58, 58, '2, 4, 5, 6, 7, 8, 9, 12, 14'),
(26, 'Meat Balls', 58, 58, '13, 15, 16, 17, 18, 20, 21, 22'),
(27, 'Salami', 56, 60, '3, 4, 6, 7, 8, 9, 10, 11, 12');

-- --------------------------------------------------------

--
-- Table structure for table `marias_members`
--

CREATE TABLE IF NOT EXISTS `marias_members` (
`id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `number` varchar(20) NOT NULL,
  `house1` varchar(225) NOT NULL,
  `street1` varchar(225) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `marias_members`
--

INSERT INTO `marias_members` (`id`, `firstname`, `lastname`, `email`, `password`, `number`, `house1`, `street1`, `city`) VALUES
(27, 'jannelyn', 'Lapastora', 'jannelyn@yahoo.com', 'lapastora', '434567', 'estefania', 'tangub', 'bacolod city'),
(28, 'shirley', 'orcena', 'shirley@yahoo.com', 'orcena', '434986', 'plaza', 'burgos', 'kabankalan city'),
(29, 'jeza', 'bermejo', 'jeza@yahoo.com', 'bermejo', '434978', 'bubog', 'nacab', 'Talisay City'),
(30, 'daylyn', 'ditchon', 'daylyn@yahoo.com', 'billote', '434567', 'plaza', 'tangub', 'bacolod'),
(31, 'angel', 'garcia', 'angel@yahoo.com', 'delgado', '565788', 'home', 'country homes', 'bacolod city'),
(32, 'isaac', 'Tsienyane', 'isaac@gmail.com', '123456', '0722953942', '78989', 'matheyson', 'davyton'),
(33, 'lesego', 'molefe', 'lsg@gmail.com', '123456', '082456879', '7858', '2', 'davyton'),
(34, 'zak', 'zak', 'zak@gmail.com', '12345678', '123456789', 'zak', 'zak', 'zak');

-- --------------------------------------------------------

--
-- Table structure for table `marias_orders`
--

CREATE TABLE IF NOT EXISTS `marias_orders` (
`id` int(255) NOT NULL,
  `cusid` int(11) NOT NULL,
  `amountpaid` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `transactiondate` varchar(30) NOT NULL,
  `transactioncode` varchar(30) NOT NULL,
  `mode` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `marias_orders`
--

INSERT INTO `marias_orders` (`id`, `cusid`, `amountpaid`, `status`, `transactiondate`, `transactioncode`, `mode`) VALUES
(12, 29, '713', 'Delivered', '02/26/2012', 'b5s5q4e7', 'Cash'),
(13, 28, '907', 'Delivered', '02/26/2012', '5ppan28s', 'Cash'),
(14, 27, '536', 'Delivered', '02/26/2012', 'as2825fa', 'Cash'),
(18, 27, '350', 'Delivered', '02/26/2012', 'z7eb2hui', 'Cash'),
(19, 29, '390', 'Completed', '02/26/2012', 'd0rk5jk7', 'Cash'),
(20, 27, '100.00', 'Delivered', '02/26/2012', '3yw782fo', 'Online Payment Paypal'),
(21, 27, '200.00', 'Delivered', '02/26/2012', 'gsth3r38', 'Online Payment Paypal'),
(23, 31, '450', 'Completed', '02/27/2012', 'oqdgjhkp', 'Cash'),
(24, 31, '600', 'Completed', '02/27/2012', '3ij7xhj2', 'Cash'),
(25, 31, '425.00', 'completed', '02/27/2012', '8uf2dpm8', 'Online Payment Paypal'),
(26, 31, '200', 'Completed', '02/27/2012', 'jp8ik4cm', 'Cash'),
(27, 29, '150', 'Completed', '02/28/2012', 'r6g2u3m3', 'Cash'),
(28, 32, '665', 'Completed', '05/22/2014', 'bf50rbdb', 'Cash'),
(29, 32, '296', 'Completed', '05/22/2014', 'xx5dc5hz', 'Cash'),
(30, 33, '312', 'Completed', '05/22/2014', '7xo86eto', 'Cash'),
(31, 32, '348', 'Completed', '05/22/2014', 'kvsqv6ie', 'Cash'),
(32, 34, '518', 'Completed', '10/27/2014', '6g57jvp6', 'Cash'),
(34, 34, '134', 'Completed', '10/27/2014', 'httofom6', 'Cash'),
(35, 34, '284', 'Completed', '10/27/2014', 'kcmf8yam', 'Cash'),
(36, 34, '284', 'Completed', '10/27/2014', 'kcmf8yam', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `marias_products`
--

CREATE TABLE IF NOT EXISTS `marias_products` (
`id` int(11) NOT NULL,
  `product_id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_size` int(10) NOT NULL,
  `product_size_name` varchar(100) NOT NULL,
  `product_photo` varchar(100) NOT NULL,
  `product_ingredients` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `marias_products`
--

INSERT INTO `marias_products` (`id`, `product_id`, `product_name`, `product_price`, `product_size`, `product_size_name`, `product_photo`, `product_ingredients`, `status`) VALUES
(1, 1, 'margarita', 100, 1, 'single', 'img001.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Onion, Pineapple, Olives, Cayen Paper, ', 'unavailable'),
(2, 1, 'margarita', 200, 2, 'regular', 'img001.png', '', 'available'),
(3, 1, 'margarita', 300, 3, 'family', 'img001.png', '', 'available'),
(4, 1, 'margarita', 400, 4, 'XL family', 'img001.png', '', 'available'),
(5, 1, 'margarita', 500, 5, 'XXL party', 'img001.png', '', 'available'),
(6, 2, 'Vesuvio', 125, 6, 'Single', 'img002.png', 'Tomato Sauce, Tomato Sauce, Mushrooms, Pineapple, Sardines, Bacon, Curry, ', 'available'),
(7, 2, 'Vesuvio', 225, 7, 'Regular', 'img002.png', '', 'available'),
(8, 2, 'Vesuvio', 325, 8, 'Family', 'img002.png', '', 'available'),
(9, 2, 'Vesuvio', 425, 9, 'XL Family', 'img002.png', '', 'available'),
(10, 2, 'Vesuvio', 525, 10, 'XXL Party', 'img002.png', '', 'available'),
(11, 3, 'Funghi', 145, 11, 'Single', 'img003.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Bellpepper, Chicken, Pork Tenderloin, Schrimps, ', 'available'),
(12, 3, 'Funghi', 245, 12, 'Regular', 'img003.png', '', 'available'),
(13, 3, 'Funghi', 345, 13, 'Family', 'img003.png', '', 'available'),
(14, 3, 'Funghi', 445, 14, 'XL Family', 'img003.png', '', 'available'),
(15, 3, 'Funghi', 545, 15, 'XXL Party', 'img003.png', '', 'available'),
(16, 4, 'Altona', 134, 16, 'Single', 'img004.png', 'Tomato Sauce, Mozzarella Chesse, Bellpepper, Zuchini, Cayen Paper, Bearnaise Sauce, ', 'available'),
(17, 4, 'Altona', 234, 17, 'Regular', 'img004.png', '', 'available'),
(18, 4, 'Altona', 334, 18, 'Family', 'img004.png', '', 'available'),
(19, 4, 'Altona', 435, 19, 'XL Family', 'img004.png', '', 'available'),
(20, 4, 'Altona', 534, 20, 'XXL Party', 'img004.png', '', 'available'),
(21, 5, 'Hawaii', 156, 21, 'Single', 'img005.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Onion, Tuna, Pepperoni, ', 'available'),
(22, 5, 'Hawaii', 245, 22, 'Regular', 'img005.png', '', 'available'),
(23, 5, 'Hawaii', 367, 23, 'Family', 'img005.png', '', 'available'),
(24, 5, 'Hawaii', 456, 24, 'XL Family', 'img005.png', '', 'available'),
(25, 5, 'Hawaii', 546, 25, 'XXL Party', 'img005.png', '', 'available'),
(26, 6, 'Vegetarian', 125, 26, 'Single', 'img006.png', 'Tomato Sauce, Mozzarella Chesse, Ham, Mushrooms, Salami, Tabasco, Beef Tenderloin, ', 'available'),
(27, 6, 'Vegetarian', 225, 27, 'Regular', 'img006.png', '', 'available'),
(28, 6, 'Vegetarian', 325, 28, 'Family', 'img006.png', '', 'available'),
(29, 6, 'Vegetarian', 425, 29, 'XL Family', 'img006.png', '', 'available'),
(30, 6, 'Vegetarian', 525, 30, 'XXL Party', 'img006.png', '', 'available'),
(31, 7, 'Tropicana', 124, 31, 'Single', 'img007.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Bellpepper, Schrimps, Pepperoni, ', 'available'),
(32, 7, 'Tropicana', 234, 32, 'Regular', 'img007.png', '', 'available'),
(33, 7, 'Tropicana', 345, 33, 'Family', 'img007.png', '', 'available'),
(34, 7, 'Tropicana', 435, 34, 'XL Family', 'img007.png', '', 'available'),
(35, 7, 'Tropicana', 546, 35, 'XXL Party', 'img007.png', '', 'available'),
(36, 8, 'Mamma Mia', 134, 36, 'Single', 'img008.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ground Beef, Olives, Curry, ', 'available'),
(37, 8, 'Mamma Mia', 234, 37, 'Regular', 'img008.png', '', 'available'),
(38, 8, 'Mamma Mia', 345, 38, 'Family', 'img008.png', '', 'available'),
(39, 8, 'Mamma Mia', 456, 39, 'XL Family', 'img008.png', '', 'available'),
(40, 8, 'Mamma Mia', 567, 40, 'XXL Party', 'img008.png', '', 'available'),
(41, 9, 'Fantastico', 125, 41, 'Single', 'img009.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Onion, Bellpepper, Zuchini, Cayen Paper', 'available'),
(42, 9, 'Fantastico', 225, 42, 'Regular', 'img009.png', '', 'available'),
(43, 9, 'Fantastico', 325, 43, 'Family', 'img009.png', '', 'available'),
(44, 9, 'Fantastico', 425, 44, 'XL Family', 'img009.png', '', 'available'),
(45, 9, 'Fantastico', 525, 45, 'XXL Party', 'img009.png', '', 'available'),
(46, 10, 'Carousel', 136, 46, 'Single', 'img010.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Pineapple, Sardines, Olives, Cayen Paper, ', 'available'),
(47, 10, 'Carousel', 237, 47, 'Regular', 'img010.png', '', 'available'),
(48, 10, 'Carousel', 345, 48, 'Family', 'img010.png', '', 'available'),
(49, 10, 'Carousel', 456, 49, 'XL Family', 'img010.png', '', 'available'),
(50, 10, 'Carousel', 567, 50, 'XXL Party', 'img010.png', '', 'available'),
(51, 11, 'Calzone', 123, 51, 'Single', 'img011.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Onion, Bellpepper, Tabasco, Salami, ', 'available'),
(52, 11, 'Calzone', 234, 52, 'Regular', 'img011.png', '', 'available'),
(53, 11, 'Calzone', 345, 53, 'Family', 'img011.png', '', 'available'),
(54, 11, 'Calzone', 458, 54, 'XL Family', 'img011.png', '', 'available'),
(55, 11, 'Calzone', 568, 55, 'XXL Party', 'img011.png', '', 'available'),
(56, 12, 'Pepperoni', 145, 56, 'Single', 'img012.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Tabasco, Bellpepper, Meat Balls, ', 'available'),
(57, 12, 'Pepperoni', 245, 57, 'Regular', 'img012.png', '', 'available'),
(58, 12, 'Pepperoni', 345, 58, 'Family', 'img012.png', '', 'available'),
(59, 12, 'Pepperoni', 456, 59, 'XL Family', 'img012.png', '', 'available'),
(60, 12, 'Pepperoni', 578, 60, 'XXL Party', 'img012.png', '', 'available'),
(61, 13, 'Kerab Pizza', 178, 61, 'Single', 'img013.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Pineapple, Curry, Bearnaise Sauce, ', 'available'),
(62, 13, 'Kerab Pizza', 268, 62, 'Regular', 'img013.png', '', 'available'),
(63, 13, 'Kerab Pizza', 378, 63, 'Family', 'img013.png', '', 'available'),
(64, 13, 'Kerab Pizza', 478, 64, 'XL Family', 'img013.png', '', 'available'),
(65, 13, 'Kerab Pizza', 578, 65, 'XXL Party', 'img013.png', '', 'available'),
(66, 14, 'Crocodile Pizza', 156, 66, 'Single', 'img014.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Tuna, Sardines, Ground Beef, Pork Tenderloin, ', 'available'),
(67, 14, 'Crocodile Pizza', 256, 67, 'Regular', 'img014.png', '', 'available'),
(68, 14, 'Crocodile Pizza', 356, 68, 'Family', 'img014.png', '', 'available'),
(69, 14, 'Crocodile Pizza', 456, 69, 'XL Family', 'img014.png', '', 'available'),
(70, 14, 'Crocodile Pizza', 567, 70, 'XXL Party', 'img014.png', '', 'available'),
(71, 15, 'Taco Pizza', 123, 71, 'Single', 'img015.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Beef Tenderloin, Bearnaise Sauce, ', 'available'),
(72, 15, 'Taco Pizza', 234, 72, 'Regular', 'img015.png', '', 'available'),
(73, 15, 'Taco Pizza', 334, 73, 'Family', 'img015.png', '', 'available'),
(74, 15, 'Taco Pizza', 445, 74, 'XL Family', 'img015.png', '', 'available'),
(75, 15, 'Taco Pizza', 556, 75, 'XXL Party', 'img015.png', '', 'available'),
(76, 16, 'Bravisimo', 134, 76, 'Single', 'img016.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Meat Balls, Pepperoni, Olives, ', 'available'),
(77, 16, 'Bravisimo', 234, 77, 'Regular', 'img016.png', '', 'available'),
(78, 16, 'Bravisimo', 345, 78, 'Family', 'img016.png', '', 'available'),
(79, 16, 'Bravisimo', 456, 79, 'XL Family', 'img016.png', '', 'available'),
(80, 16, 'Bravisimo', 567, 80, 'XXL Party', 'img016.png', '', 'available'),
(81, 17, 'Opera', 125, 81, 'Single', 'img017.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Aubergine, Bellpepper, Zuchini, ', 'available'),
(82, 17, 'Opera', 225, 82, 'Regular', 'img017.png', '', 'available'),
(83, 17, 'Opera', 325, 83, 'Family', 'img017.png', '', 'available'),
(84, 17, 'Opera', 425, 84, 'XL Family', 'img017.png', '', 'available'),
(85, 17, 'Opera', 525, 85, 'XXL Party', 'img017.png', '', 'available'),
(86, 18, 'Romeo', 136, 86, 'Single', 'img018.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Bellpepper, Olives, Balogenese Sauce, ', 'available'),
(87, 18, 'Romeo', 237, 87, 'Regular', 'img018.png', '', 'available'),
(88, 18, 'Romeo', 345, 88, 'Family', 'img018.png', '', 'available'),
(89, 18, 'Romeo', 456, 89, 'XL Family', 'img018.png', '', 'available'),
(90, 18, 'Romeo', 567, 90, 'XXL Party', 'img018.png', '', 'available'),
(91, 19, 'Chicken Pizza', 123, 91, 'Single', 'img019.png', 'Tomato Sauce, Tomato Sauce, Mushrooms, Chicken, Pepperoni, Cayen Paper, ', 'available'),
(92, 19, 'Chicken Pizza', 234, 92, 'Regular', 'img019.png', '', 'available'),
(93, 19, 'Chicken Pizza', 345, 93, 'Family', 'img019.png', '', 'available'),
(94, 19, 'Chicken Pizza', 458, 94, 'XL Family', 'img011.png', '', 'available'),
(95, 19, 'Chicken Pizza', 568, 95, 'XXL Party', 'img019.png', '', 'available'),
(96, 20, 'Black & White', 124, 96, 'Single', 'img020.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Aubergine, Ground Beef, Bacon, ', 'available'),
(97, 20, 'Black & White', 234, 97, 'Regular', 'img020.png', '', 'available'),
(98, 20, 'Black & White', 345, 98, 'Family', 'img020.png', '', 'available'),
(99, 20, 'Black & White', 465, 99, 'XL Family', 'img020.png', '', 'available'),
(100, 20, 'Black & White', 567, 100, 'XXL Party', 'img020.png', '', 'available'),
(101, 21, 'Mexicana', 124, 101, 'Single', 'img021.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Chicken, Bacon, Beef Tenderloin, ', 'available'),
(102, 21, 'Mexicana', 234, 102, 'Regular', 'img021.png', '', 'available'),
(103, 21, 'Mexicana', 356, 103, 'Family', 'img021.png', '', 'available'),
(104, 21, 'Mexicana', 456, 104, 'XL Family', 'img021.png', '', 'available'),
(105, 21, 'Mexicana', 567, 105, 'XXL Party', 'img021.png', '', 'available'),
(106, 22, 'Frutti De Mare', 123, 106, 'Single', 'img022.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Schrimps, Beef Tenderloin, Egg, ', 'available'),
(107, 22, 'Frutti De Mare', 107, 234, 'Regular', 'img022.png', '', 'available'),
(108, 22, 'Frutti De Mare', 324, 108, 'Family', 'img022.png', '', 'available'),
(109, 22, 'Frutti De Mare', 435, 109, 'XL Family', 'img022.png', '', 'available'),
(110, 22, 'Frutti De Mare', 543, 110, 'XXL Party', 'img022.png', '', 'available'),
(111, 23, 'Quattro Stagione', 167, 111, 'Single', 'img023.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Aubergine, Balogenese Sauce, Egg, ', 'available'),
(112, 23, 'Quattro Stagione', 267, 112, 'Regular', 'img023.png', '', 'available'),
(113, 23, 'Quattro Stagione', 367, 113, 'Family', 'img023.png', '', 'available'),
(114, 23, 'Quattro Stagione', 467, 114, 'XL Family', 'img023.png', '', 'available'),
(115, 23, 'Quattro Stagione', 567, 115, 'XXL Party', 'img023.png', '', 'available'),
(116, 24, 'Parma', 125, 116, 'Single', 'img024.png', 'Tomato Sauce, Mozzarella Chesse, Mushrooms, Ham, Tuna, Onion, Pineapple, ', 'available'),
(117, 24, 'Parma', 225, 117, 'Regular', 'img024.png', '', 'available'),
(118, 24, 'Parma', 325, 118, 'Family', 'img024.png', '', 'available'),
(119, 24, 'Parma', 425, 119, 'XL Family', 'img024.png', '', 'available'),
(120, 24, 'Parma', 525, 120, 'XXL Party', 'img024.png', '', 'available'),
(121, 25, 'Capricciosa', 156, 121, 'Single', 'img025.png', 'Tomato Sauce, Mozzarella Chesse, Onion, Sardines, Chicken, Beef Tenderloin, ', 'available'),
(122, 25, 'Capricciosa', 267, 122, 'Regular', 'img025.png', '', 'available'),
(123, 25, 'Capricciosa', 367, 123, 'Family', 'img025.png', '', 'available'),
(124, 25, 'Capricciosa', 467, 124, 'XL Family', 'img025.png', '', 'available'),
(125, 25, 'Capricciosa', 567, 125, 'XXL Party', 'img025.png', '', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `marias_users`
--

CREATE TABLE IF NOT EXISTS `marias_users` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `marias_users`
--

INSERT INTO `marias_users` (`id`, `username`, `password`, `status`, `date`) VALUES
(8, 'admin', 'admin', 0, ''),
(9, 'isaac', 'isaac', 0, ''),
(11, 'Brian', 'brian', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
`orderid` int(11) NOT NULL,
  `customer` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `pizzaname` varchar(100) NOT NULL,
  `pizasize` varchar(100) NOT NULL,
  `transactioncode` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `customer`, `qty`, `price`, `total`, `pizzaname`, `pizasize`, `transactioncode`) VALUES
(1, '13', '2', '134', '268', 'Altona', 'Single', 'murfuyju'),
(2, '13', '4', '546', '2184', 'Tropicana', 'XXL Party', 'murfuyju'),
(3, '13', '6', '568', '3408', 'Chicken Pizza', 'XXL Party', 'murfuyju'),
(4, '13', '5', '325', '1625', 'Vesuvio', 'Family', '5ovq3mpy'),
(5, '13', '4', '124', '496', 'Tropicana', 'Single', '5ovq3mpy'),
(6, '13', '2', '134', '268', 'Altona', 'Single', 'qseer552'),
(7, '13', '2', '134', '268', 'Altona', 'Single', '0wsu2hny'),
(8, '13', '2', '134', '268', 'Altona', 'Single', '0wsu2hny'),
(9, '13', '1', '134', '134', 'Altona', 'Single', 'osnprp4p'),
(10, '13', '1', '134', '134', 'Altona', 'Single', 'n56ricxd'),
(11, '13', '2', '145', '290', 'Funghi', 'Single', 'q2pz76z3'),
(12, '18', '6', '200', '1200', 'margarita', 'regular', '7mgkhgmb'),
(13, '', '', '', '0', '', '', ''),
(14, '26', '1', '200', '200', 'margarita', 'regular', 'hhnub2m4'),
(15, '26', '2', '200', '400', 'margarita', 'regular', 'c5g20hfw'),
(16, '26', '6', '200', '1200', 'margarita', 'regular', 'xgjqe4dc'),
(17, '26', '4', '200', '800', 'margarita', 'regular', 't8kv2647'),
(18, '26', '2', '200', '400', 'margarita', 'regular', '7n4dxehr'),
(19, '26', '4', '200', '800', 'margarita', 'regular', 'kzjdpbp4'),
(20, '26', '1', '200', '200', 'margarita', 'regular', '4stg5o4v'),
(21, '26', '1', '200', '200', 'margarita', 'regular', '6vv7dg0v'),
(22, '26', '1', '200', '200', 'margarita', 'regular', 'nmukxj8i'),
(23, '26', '1', '200', '200', 'margarita', 'regular', 'xcucn3ui'),
(24, '26', '1', '200', '200', 'margarita', 'regular', 'z8bxcqf4'),
(25, '13', '1', '100', '100', 'margarita', 'single', 'i0fgo53d'),
(26, '28', '1', '100', '100', 'margarita', 'single', 'mpga6ifi'),
(27, '29', '2', '134', '268', 'Bravisimo', 'Single', 'b5s5q4e7'),
(28, '29', '2', '100', '200', 'margarita', 'single', 'b5s5q4e7'),
(29, '29', '1', '145', '145', 'Funghi', 'Single', 'b5s5q4e7'),
(30, '28', '1', '200', '200', 'margarita', 'regular', '5ppan28s'),
(31, '28', '2', '136', '272', 'Carousel', 'Single', '5ppan28s'),
(32, '28', '3', '145', '435', 'Pepperoni', 'Single', '5ppan28s'),
(33, '27', '2', '145', '290', 'Funghi', 'Single', 'as2825fa'),
(34, '27', '2', '123', '246', 'Chicken Pizza', 'Single', 'as2825fa'),
(35, '29', '1', '345', '345', 'Funghi', 'Family', 'unoxsf2r'),
(36, '27', '1', '100', '100', 'margarita', 'single', 'sqt5ytar'),
(37, '27', '1', '100', '100', 'margarita', 'single', '2ojgnm4y'),
(38, '27', '4', '100', '400', 'margarita', 'single', 'ehd36fzh'),
(39, '27', '3', '100', '300', 'margarita', 'single', 'z7eb2hui'),
(40, '27', '4', '100', '400', 'margarita', 'single', 'xq38bys8'),
(41, '29', '2', '145', '290', 'Funghi', 'Single', 'd0rk5jk7'),
(42, '27', '1', '100', '100', 'margarita', 'single', '3yw782fo'),
(43, '27', '2', '100', '200', 'margarita', 'single', 'gsth3r38'),
(44, '8', '1', '100', '100', 'margarita', 'single', 'admin'),
(46, '31', '2', '125', '250', 'Vesuvio', 'Single', 'oqdgjhkp'),
(47, '31', '2', '100', '200', 'margarita', 'single', 'oqdgjhkp'),
(48, '31', '3', '200', '600', 'margarita', 'regular', '3ij7xhj2'),
(49, '31', '3', '125', '375', 'Vesuvio', 'Single', '8uf2dpm8'),
(50, '31', '2', '100', '200', 'margarita', 'single', 'jp8ik4cm'),
(51, '29', '1', '100', '100', 'margarita', 'single', 'r6g2u3m3'),
(52, '32', '2', '145', '290', 'Funghi', 'Single', 'bf50rbdb'),
(53, '32', '1', '325', '325', 'Parma', 'Family', 'bf50rbdb'),
(54, '32', '2', '123', '246', 'Chicken Pizza', 'Single', 'xx5dc5hz'),
(55, '33', '2', '156', '312', 'Capricciosa', 'Single', '7xo86eto'),
(57, '32', '2', '124', '248', 'Tropicana', 'Single', 'kvsqv6ie'),
(58, '34', '2', '234', '468', 'Tropicana', 'Regular', '6g57jvp6'),
(59, '34', '1', '134', '134', 'Mamma Mia', 'Single', 'httofom6'),
(60, '34', '1', '234', '234', 'Mamma Mia', 'Regular', 'kcmf8yam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distination`
--
ALTER TABLE `distination`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marias_members`
--
ALTER TABLE `marias_members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marias_orders`
--
ALTER TABLE `marias_orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marias_products`
--
ALTER TABLE `marias_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marias_users`
--
ALTER TABLE `marias_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
 ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `distination`
--
ALTER TABLE `distination`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `marias_members`
--
ALTER TABLE `marias_members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `marias_orders`
--
ALTER TABLE `marias_orders`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `marias_products`
--
ALTER TABLE `marias_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `marias_users`
--
ALTER TABLE `marias_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
