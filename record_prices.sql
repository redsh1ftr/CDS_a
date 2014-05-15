-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2014 at 04:59 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cds_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `record_prices`
--

CREATE TABLE IF NOT EXISTS `record_prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `record_prices`
--

INSERT INTO `record_prices` (`id`, `type`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Pages', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Disc', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Films', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Microfiche', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Color Pages', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Dental Films', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Audio', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Other', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
