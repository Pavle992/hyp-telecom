-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 03:45 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

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
-- Table structure for table `assistance`
--

CREATE TABLE `assistance` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `category` varchar(150) DEFAULT NULL,
  `highlight_flag` char(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistance`
--

INSERT INTO `assistance` (`id`, `name`, `description`, `category`, `highlight_flag`) VALUES
(1, 'Abroad with TIM', 'Using your mobile phone abroad is easy! \r\nAll TIM customers with a rechargeable line and a subscription are automatically enabled to call, receive calls, send and receive SMS from abroad. And it is as easy as in Italy!', 'Service', 'Y'),
(2, 'Fast charging from the site tim.it', 'The service from Fast Reload tim.it site  lets you charge your phone without the need to register: \r\nsimply enter your information, and in  3 clicks your line is recharged!\r\n\r\nThe charging cuts start at a minimum of € 6 a up to 150 €. you will be some simple information such as:\r\nTIM number to recharge.\r\nan email address to which you send the notification operation performed.\r\nthe data of your credit card or PayPal.\r\nThey accept major credit cards issued in Italy belonging to the Visa, Mastercard (including Carta, Postepay, Clarima and Bankamericard Deutsche Credit Card), American Express, Diners Card and Aura.\r\n\r\nNB Please note that if you choose charging 6 € you will have € 5 credit and 500 MMS to be sent to all within 30 days. For full details on Reload + click here .', 'Payment', 'N'),
(3, 'TIM SMART', 'To you who want to surf unlimited high-speed anytime, anywhere, TIM offers the solution  TIM SMART  to be always connected, at home and outside the home.\n\nBy TIM SMART HOUSE you:\n\nUnlimited ADSL up to 20 Mbps \nTIMVision included\nunlimited calls to fixed and mobile, with no connection fee .\n\nBy  TIM SMART MOBILE  you:\n\nUnlimited ADSL up to 20 Mbps \nTIMVision included\nA SIM card with 500 minutes to all Internet 2GB 4G to your Smartphone and international calls from 1 cent per minute.\n\nEverything about your home bill: a single price to satisfy needs of the whole family.\nAlso you can ask so many options to enrich your TIM SMART.\n\nTIM to your SMART HOUSE you can add:\n\nOPTION SMART MOBILE Smartphone:\na SIM with 500 minutes to all Internet 2GB 4G to your Smartphone and international calls from 1 cent per minute.\nINTERNATIONAL VOICE from home:\nunlimited calls to landlines in the US, Canada and Western Europe.\n\nTo check if the offer is active and the availability of the services included calls for free Customer Service 187 or go to the section  Fixed MyTIM .\nTIM to your SMART MOBILE you can add:\n\nSIM PLUS Smartphone: \nA SIM card with 500 minutes to all Internet 2GB 4G to your Smartphone and international calls from 1 cent per minute.\nSIM PLUS 4G for PC and Tablet:\nInternet 4G 4GB per month.', 'Service', 'Y'),
(4, 'Recess', 'To be able to use the right to reconsider the inherent requirements of:\n\nACTIVATE NEW LINE\nPASSAGE TO ANOTHER OPERATOR\nACTIVATION OFFER / SERVICE ON LINE ALREADY \'TIM\nPURCHASE / HIRE OF PRODUCTS\nYou can contact customer service 187 or download directly from this site in the form to the written application ', 'Smart', 'N'),
(5, 'Value-added services: SMS / MMS / Internet', 'The value-added services, also called \'premium\' or \'content\', are also part of the services provided by external companies through SMS, MMS or data connection from a landline (WEB) or mobile (WAP) that you can activate, receive and / or make use of phone, tablet or PC.  \r\nThese are services such as: logos, ringtones, horoscopes, weather, news, videos, wallpapers and more.\r\nThe TIM Card, since its activation, is empowered to make / receive calls and video calls, send and receive SMS / MMS, browsing the internet, therefore, you can also activate the value added services (with the exception of TIM Card registered in the name minor for which to \'Adult; content services are disabled). activation of the service can take place following the activation procedure for each of the channels mentioned above (SMS, MMS, WEB, WAP etc.), but only ever with your consent.\r\nValue-added services are chargeable and charging arrangements (for each message and / or content, daily, weekly, monthly) vary depending on the type of service you have chosen to activate on your line. When you download content is therefore always important to verify if this means adherence to a subscription service with periodic debit your users.', 'Service', 'N'),
(6, 'Check the remaining credit while abroad', 'When you\'re abroad, you can check the remaining credit of your rechargeable TIM through the following ways:\r\n\r\nIf the local operator supports the service of Direct Call , you can call 40916 even if you\'re at zero credit.\r\nIf you still have remaining credit you can use the service 40916 via SMS by sending a free message to 40916 with the syntax \' CREDIT \'.\r\nDirectly from online pc entering the section MyTIM Mobile .\r\nBy phone on site TIM.it optimized for your smartphone, or via the \' App MyTIM Mobile , currently available for free download in versions for iPhone and smartphones with Android operating system . If you want to know what it costs to surf the Internet when you\'re abroad, you can see the shipping costs on the Internet with their cell phone or with the PC . In this case, in fact, for the display of information, you will support the costs and conditions normally applied to data roaming.\r\nFinally from abroad, you can check your own credit by typing * 123 # followed by ENTER when the local manager allows this service. After a few moments appear the amount of your remaining credit directly on the phone\'s display.', 'Monitor', 'Y'),
(7, 'Charging +', 'Reload + it allows you, for each operation of charging by € 6 or € 12  to get in addition to telephone traffic, a bundle MMS valid for all, to be consumed within 30 days after the charge.\n\nFrom 02.03.2014 the new offer Reload + is enriched with new cuts Reload!\n\nReload + € 17\n\nReload + € 22\n\nConfirmation of the bundle activation Reloading you will be notified via SMS\n\nFor more details and information click here .', 'Payment', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assistance`
--
ALTER TABLE `assistance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
