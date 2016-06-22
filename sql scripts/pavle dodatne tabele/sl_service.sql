-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2016 at 09:32 PM
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
-- Table structure for table `sl_service`
--

DROP TABLE IF EXISTS `sl_service`;
CREATE TABLE IF NOT EXISTS `sl_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rates_discount_price` int(11) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `activation_rules` varchar(1000) DEFAULT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sl_service`
--

INSERT INTO `sl_service` (`id`, `name`, `description`, `rates_discount_price`, `category`, `activation_rules`, `image_path`) VALUES
(1, 'TIM Home Connect', 'TIM Home Connect the offer is meant to be used in home automation devices in the home, the management of which involves the use of a SIM\nConnect with Tim Home for you have available minutes, SMS and MB to be used to connect and manage your burglar alarm, your boiler or other home automation systems.', 2, 'Home and Family', 'If you are already in possession of a TIM Card directly online by clicking the ACTIVE button#\nAt the Shops TIM', '/img/smartlife services/sl_home_connect.png'),
(2, 'D-Link Starter Kit SmartHome', 'With the Smart Home HD Starter Kit will be able to set, control, monitor and automate your home wherever you are.\r\nThe kit includes:\r\n\r\nAn HD Monitor (DCS-935L) \r\nA Wi-Fi Motion Sensor (DCH-S150)\r\nA smart plug (DSP-W215) \r\nThrough the App mydlink Home for smartphones and tablets you have available to control all the devices in order to simplify the management of the house, making it safer and smarter.\r\n\r\nEasy configuration and management of your devices\r\n\r\nSimply download the app mydlink Home and the configuration wizard will help you make the best use all of the devices in easily and intuitively kit. \r\nWith the app you have to create the rules for on and off your appliances when and wherever want.\r\n\r\nautomatic notifications and real time on your smartphone\r\n\r\nThe app mydlink Home will notify you when:\r\nA movement or sound is detected\r\nA device has been turned on or off\r\nElectricity consumption has been exceeded\r\nA device does not work properly or overheats\r\nThe passive infrared motion', 5, 'Home and Family', 'If you are already in possession of a TIM Card directly online by clicking the ACTIVE button\nConfiguration is easy!\nSimply download the app mydlink Home and the configuration wizard will help you to operate all devices in the kit.', '/img/smartlife services/sl_smart_home_security.jpg'),
(3, 'TIMvision', 'With TIMvision can choose between film, TV series, cartoons and documentaries, the last seven days of the major channels Rai, La7 and La7 archive, anywhere, anytime.\n\nMore than 8,000 titles available, always on demand, in a single monthly subscription, to create your own schedule without commercial interruptions.\nIn addition, in the section Videostore, you can find the latest blockbusters with a constantly updated catalog, to rent or buy at any time even without a subscription.\nNot to interrupt your marathon, you can watch also TIMvision on the web, on smartphones and tablets without consuming GB, and Smart TV, inserting the credentials chosen at the time of registration to the service.', 10, 'TV and Entertainment', 'Activate directly online, for TIM customers. To discover the advantages and online activation mode, see the  Guide \nfor activations before 30.06.2016 it costs only 5 eur / month\nat the  Shops TIM\nvia App TIMvision\nfree of charge by calling 40916 or Customer Service 119\nby sending a free SMS with the text - PROMOTIMVISION ON- to the number 40916 for Customers Rechargeable or to the number 40915 for Customers with Subscription\nAnd possible to pay by remaining credit or credit card Visa, Mastercard, American Express; They are not accepted prepaid credit cards. Payment by credit card is not available for Windows Phone terminals', '/img/smartlife services/sl_tim_vision.jpg'),
(4, 'Samsung Galaxy Gear S with SIM', 'An elegant curved Super AMOLED display for optimal fit, customizable screens and interchangeable straps to better express their own style', 10, 'Health and Wellness', 'You can buy on tim.it even if you have no business TIM. Moreover, you need not be registered to make a purchase . Only the purchase of pricing options for your Mobile online requires registration, to enable the option on the line for you letterhead. In all cases, if you are a registered customer you can access and purchase more quickly, by not having to re-enter each time your personal details.', '/img/smartlife services/sl_samsung_gear.jpg'),
(5, 'Digital signature', 'The trust must ensure that a digital signature is far superior to that of traditional handwritten signature. A private key known only by the person authorized to make use of it may even serve to prove their identity. They expect very interesting developments and TIM is in the foreground', 5, 'Personal services', 'When you receive a signed document, you may want to validate its signature(s) to verify the signer and the signed content. Depending on how you have configured your application, validation may occur automatically. Signature validity is determined by checking the authenticity of the signature digital ID certificate status and document integrity', '/img/smartlife services/digital_signature.jpg'),
(6, 'TIMreading', 'Always carry on Smartphone and Tablet your favorite eBook, follow all your passions choosing among the most beloved magazine and look in your newspaper from the early hours of the morning. On TIMreading you find what you love to read, anywhere, anytime', 3, 'TV and Entertainment', 'You can enable online offer or at  TIM shops. \nThe offer is activated on your number of rechargeable phone at most within 48 hours of request and provides free activation and the first month free. After receiving the confirmation SMS dell '' supply activated SIM to benefit from the service you will need to flip through:\ncomplete the '' activation by clicking on the link in the SMS confirming the activation\ndefine your credentials (username and password) to flip through the digital\ndownload the application to the head choice or connect to the web site / tablet / smartphone * and enter in your login credentials * The flip through smartphones is only available for some titles. Discover devices compatible with each newspaper on timreading.it', '/img/smartlife services/sl_tim_reading.png'),
(7, 'Sony Smartband FE', 'An innovative wrist band can automatically record your physical, social activities and entertainment', 7, 'Health and Wellness', 'You can buy on tim.it even if you have no business TIM. Moreover, you need not be registered to make a purchase . Only the purchase of pricing options for your Mobile online requires registration, to enable the option on the line for you letterhead. In all cases, if you are a registered customer you can access and purchase more quickly, by not having to re-enter each time your personal details.', '/img/smartlife services/sl_smartband.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
