-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2021 at 06:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items_project`
--

DROP TABLE IF EXISTS `items_project`;
CREATE TABLE IF NOT EXISTS `items_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_project`
--

INSERT INTO `items_project` (`id`, `name`, `price`) VALUES
(1, 'Sam Galaxy VII', 35999),
(2, 'Sam Galaxy Note X', 75999),
(3, 'Sam Galaxy A50', 21999),
(4, 'Sam Galaxy M30', 19999),
(5, 'Sam Galaxy Active', 25999),
(6, 'Sam Galaxy Active 2', 35999),
(7, 'Fossil X13', 27999),
(8, 'Apple Watch 2', 39999),
(9, 'Sam Galaxy Buds', 9999),
(10, 'Sam Galaxy Buds 2', 15999),
(11, 'Airpods', 21999),
(12, 'SkullCandy Earpods', 9999);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
