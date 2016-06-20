-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 10:23 PM
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
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE IF NOT EXISTS `homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_desc` varchar(500) DEFAULT NULL,
  `group_path` varchar(50) DEFAULT NULL,
  `gover_desc` varchar(500) DEFAULT NULL,
  `gover_path` varchar(50) DEFAULT NULL,
  `bm_desc` varchar(500) DEFAULT NULL,
  `bm_path` varchar(50) DEFAULT NULL,
  `inovation` varchar(500) DEFAULT NULL,
  `testimonials` varchar(200) DEFAULT NULL,
  `projects` varchar(500) DEFAULT NULL,
  `fi_desc` varchar(500) DEFAULT NULL,
  `fi_path` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `group_desc`, `group_path`, `gover_desc`, `gover_path`, `bm_desc`, `bm_path`, `inovation`, `testimonials`, `projects`, `fi_desc`, `fi_path`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium molestie commodo. Pellentesque lectus dui, dictum vel nisi vitae, mollis maximus mauris. Nullam a luctus nibh, sit amet condimentum felis. Phasellus vitae velit orci. Vestibulum faucibus purus est, quis faucibus libero posuere eget.', '../img/home/group.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium molestie commodo. Pellentesque lectus dui, dictum vel nisi vitae, mollis maximus mauris. Nullam a luctus nibh, sit amet condimentum felis. Phasellus vitae velit orci. Vestibulum faucibus purus est, quis faucibus libero posuere eget.', '../img/home/governance.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium molestie commodo. Pellentesque lectus dui, dictum vel nisi vitae, mollis maximus mauris. Nullam a luctus nibh, sit amet condimentum felis. Phasellus vitae velit orci. Vestibulum faucibus purus est, quis faucibus libero posuere eget.', '../img/home/business.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium molestie commodo. Pellentesque lectus dui, dictum vel nisi vitae, mollis maximus mauris. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium molestie commodo. Pellentesque lectus dui, dictum vel nisi vitae, mollis maximus mauris. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium molestie commodo. Pellentesque lectus dui, dictum vel nisi vitae, mollis maximus mauris. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium molestie commodo. Pellentesque lectus dui, dictum vel nisi vitae, mollis maximus mauris. Nullam a luctus nibh, sit amet condimentum felis. Phasellus vitae velit orci. Vestibulum faucibus purus est, quis faucibus libero posuere eget.', '../img/home/investors.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
