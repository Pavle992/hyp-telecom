-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 10:22 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hyptelecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `sl_service_categories`
--

DROP TABLE IF EXISTS `sl_service_categories`;
CREATE TABLE IF NOT EXISTS `sl_service_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sl_service_categories`
--

INSERT INTO `sl_service_categories` (`id`, `name`, `description`, `image_path`) VALUES
(1, 'TV & Entertainment', 'Discover the type of entertainment you prefer. The fun starts now!<br/> TV Series, Movies, Books, Games and more', '/img/sl_services_groups/tv-entertainment.jpg'),
(2, 'Health and Wellness', 'Find out how helth and wellness can positively change your life<br/>Try the latest wearables', '/img/sl_services_groups/smart-health.jpg'),
(3, 'Home and Family', 'Smart life means simpler and safer life <br/> For your home and loved once.', '/img/sl_services_groups/home-family.jpg'),
(4, 'Personal', 'A new aproach to the world of e-payment and digital identity <br/> Keep your passwords, invoices, medical reports and manage safely your digital payments', '/img/sl_services_groups/personal.jpg'),
(5, 'Pobablabalba', 'bablablablalbalblalbalbalb', '/img/sl_services_groups/tv-entertainment.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
