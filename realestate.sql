-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2019 at 02:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

DROP TABLE IF EXISTS `housing`;
CREATE TABLE IF NOT EXISTS `housing` (
  `id_housing` int(40) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `addresss` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pc` varchar(50) NOT NULL,
  `area` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `typed` varchar(50) NOT NULL,
  `descriptions` varchar(500) NOT NULL,
  PRIMARY KEY (`id_housing`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housing`
--

INSERT INTO `housing` (`id_housing`, `title`, `addresss`, `city`, `pc`, `area`, `price`, `photo`, `typed`, `descriptions`) VALUES
(1, 'Villa Contore', 'Spain', 'Barcelona', '4556', 150, 600000, 'img/1.jpg', 'sale', 'A very good house.'),
(2, 'Maison Trello', 'Italy', 'Rome', '3435', 180, 550000, 'img/2.jpg', 'sale', 'You can\'t find better offer than this.'),
(3, 'Apartment Bobby', 'USA', 'Seattle', '12114', 90, 1000, 'img/3.jpg', 'rent', 'Very well located apartment.'),
(4, 'Apartment Nasser', 'Luxembourg', 'Esch-sur-Alzette', '4876', 100, 750000, 'img/4.jpg', 'sale', 'A very nice owner. Cool features'),
(5, 'House Aldrin', 'UK', 'London', '9978', 130, 900000, 'img/5.jpg', 'rent', 'You should not miss the opportunity'),
(6, 'Villa Milla', 'Turkey', 'Izmir', '9911', 100, 300000, 'img/6villa.jfif', 'sale', 'That\'s the one!'),
(7, 'Holla Molla', 'Italy', 'Venice', '4555', 120, 200000, 'img/7villa.jfif', 'rent', 'A very good house'),
(8, 'Ollala House', 'Cuba', 'Banana', '1299', 200, 500000, 'img/8villa.jfif', 'rent', 'Very very nice one'),
(9, 'Apartment Simon', 'France', 'Paris', '2234', 100, 400000, 'img/9villa.jfif', 'rent', 'Paris is good');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
