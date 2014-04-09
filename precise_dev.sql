-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2014 at 05:32 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `precise_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_contact_list`
--

CREATE TABLE IF NOT EXISTS `billing_contact_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `billing_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_notes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `billing_street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `billing_contact_list`
--

INSERT INTO `billing_contact_list` (`id`, `billing_company`, `first_name`, `last_name`, `phone_number`, `fax_number`, `email`, `billing_notes`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `created_at`, `updated_at`) VALUES
(1, 'Capital Billing', 'Calvin', 'Lasterson', '313-414-5152', '515-313-5112', 'emailaddress@dotcom.com', 'The Holy Grail is a dish, plate, stone, or cup that is part of an important theme of Arthurian literature. A grail, wondrous but not explicitly "holy," first appears in Perceval le Gallois, an unfinished romance by Chrétien de Troyes:[1] it is a processional salver used to serve at a feast. Chrétien''s story attracted many continuators, translators and interpreters in the later 12th and early 13th centuries, including Wolfram von Eschenbach, who makes the grail a great precious stone that fell from the sky. The Grail legend became interwoven with legends of the Holy Chalice.[2] The connection with Joseph of Arimathea and with vessels associated with the Last Supper and crucifixion of Jesus, dates from Robert de Boron''s Joseph d''Arimathie (late 12th century) in which Joseph receives the Grail from an apparition of Jesus and sends it with his followers to Great Britain. Building upon this theme, later writers recounted how Joseph used the Grail to catch Christ''s blood while interring him and how he founded a line of guardians to keep it safe in Britain. The legend may combine Christian lore with a Celtic myth of a cauldron endowed with special powers.', '4055 Billing Ave. ste 234', 'City of City', 'MI', '48124', '2013-12-29 03:00:00', '2013-12-29 03:00:00'),
(2, 'Infinity Billing', 'Dude', 'Itsinfinity', '321-525-7637', '324-525-7633', 'infinitybilling@aol.yahoo.com', 'Normalized tables are suitable for general-purpose querying. This means any queries against these tables, including future queries whose details cannot be anticipated, are supported. In contrast, tables that are not normalized lend themselves to some types of queries, but not others. For example, consider an online bookseller whose customers maintain wishlists of books they''d like to have. For the obvious, anticipated query—what books does this customer want?—it''s enough to store the customer''s wishlist in the table as, say, a homogeneous string of authors and titles. With this design, though, the database can answer only that one single query. It cannot by itself answer interesting but unanticipated queries: What is the most-wished-for book? Which customers are interested in WWII espionage? How does Lord Byron stack up against his contemporary poets? Answers to these questions must come from special adaptive tools completely separate from the database. One tool might be software written especially to handle such queries. This special adaptive software has just one single purpose: in effect to normalize the non-normalized field. Unforeseen queries can be answered trivially, and entirely within the database framework, with a normalized table.', '525 Infinity Loop ', 'Beyond', 'Michigan', '23566', '2013-12-30 05:00:00', '2013-12-30 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `billing_index`
--

CREATE TABLE IF NOT EXISTS `billing_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `business_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_id` int(11) NOT NULL,
  `billing_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_notes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `billing_street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `billing_index`
--

INSERT INTO `billing_index` (`id`, `client_id`, `business_name`, `billing_id`, `billing_company`, `first_name`, `last_name`, `phone_number`, `fax_number`, `email`, `billing_notes`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `created_at`, `updated_at`) VALUES
(1, 4050, 'The Test Company for Testing', 1, 'Capital Billing', 'Calvin ', 'Lasterson', '313-414-5152', '515-313-5112', 'emailaddress@dotcom.com', 'The Holy Grail is a dish, plate, stone, or cup that is part of an important theme of Arthurian literature. A grail, wondrous but not explicitly "holy," first appears in Perceval le Gallois, an unfinished romance by Chrétien de Troyes:[1] it is a processional salver used to serve at a feast. Chrétien''s story attracted many continuators, translators and interpreters in the later 12th and early 13th centuries, including Wolfram von Eschenbach, who makes the grail a great precious stone that fell from the sky. The Grail legend became interwoven with legends of the Holy Chalice.[2] The connection with Joseph of Arimathea and with vessels associated with the Last Supper and crucifixion of Jesus, dates from Robert de Boron''s Joseph d''Arimathie (late 12th century) in which Joseph receives the Grail from an apparition of Jesus and sends it with his followers to Great Britain. Building upon this theme, later writers recounted how Joseph used the Grail to catch Christ''s blood while interring him and how he founded a line of guardians to keep it safe in Britain. The legend may combine Christian lore with a Celtic myth of a cauldron endowed with special powers.	', '4055 Billing Ave. ste 234', 'City of City', 'MI', '48124', '2013-12-29 03:00:00', '2013-12-29 03:00:00'),
(2, 4050, 'The Test Company for Testing', 2, 'Infinity Billing', 'Dude', 'Itsinfinity', '321-525-7637', '324-525-7633', 'infinitybilling@aol.yahoo.com', 'Normalized tables are suitable for general-purpose querying. This means any queries against these tables, including future queries whose details cannot be anticipated, are supported. In contrast, tables that are not normalized lend themselves to some types of queries, but not others.\r\nFor example, consider an online bookseller whose customers maintain wishlists of books they''d like to have. For the obvious, anticipated query—what books does this customer want?—it''s enough to store the customer''s wishlist in the table as, say, a homogeneous string of authors and titles.\r\nWith this design, though, the database can answer only that one single query. It cannot by itself answer interesting but unanticipated queries: What is the most-wished-for book? Which customers are interested in WWII espionage? How does Lord Byron stack up against his contemporary poets? Answers to these questions must come from special adaptive tools completely separate from the database. One tool might be software written especially to handle such queries. This special adaptive software has just one single purpose: in effect to normalize the non-normalized field.\r\nUnforeseen queries can be answered trivially, and entirely within the database framework, with a normalized table.', '525 Infinity Loop ', 'Beyond', 'Michigan', '23566', '2013-12-29 03:00:00', '2013-12-29 03:00:00'),
(3, 4051, 'Precise Maintenance', 1, 'Capital Billing', 'Calvin', 'Lasterson', '313-414-5152', '515-313-5112', 'emailaddress@dotcom.com', 'The Holy Grail is a dish, plate, stone, or cup that is part of an important theme of Arthurian literature. A grail, wondrous but not explicitly "holy," first appears in Perceval le Gallois, an unfinished romance by Chrétien de Troyes:[1] it is a processional salver used to serve at a feast. Chrétien''s story attracted many continuators, translators and interpreters in the later 12th and early 13th centuries, including Wolfram von Eschenbach, who makes the grail a great precious stone that fell from the sky. The Grail legend became interwoven with legends of the Holy Chalice.[2] The connection with Joseph of Arimathea and with vessels associated with the Last Supper and crucifixion of Jesus, dates from Robert de Boron''s Joseph d''Arimathie (late 12th century) in which Joseph receives the Grail from an apparition of Jesus and sends it with his followers to Great Britain. Building upon this theme, later writers recounted how Joseph used the Grail to catch Christ''s blood while interring him and how he founded a line of guardians to keep it safe in Britain. The legend may combine Christian lore with a Celtic myth of a cauldron endowed with special powers.', '4055 Billing Ave. ste 234', 'City of City', 'Michigan', '48124', '2013-12-29 05:00:00', '2013-12-29 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clientlists`
--

CREATE TABLE IF NOT EXISTS `clientlists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `business_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `net_terms` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_job_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clientlists`
--

INSERT INTO `clientlists` (`id`, `client_id`, `business_name`, `business_type`, `net_terms`, `current_job_number`, `created_at`, `updated_at`) VALUES
(1, 4050, 'The Test Company for Testing', 'Interior Maintenance', '30 days', '001', '2013-12-29 03:00:00', '2013-12-29 03:00:00'),
(2, 4051, 'Precise Maintenance', 'The best Kind', 'Forever', 'All of them.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_type_count`
--

CREATE TABLE IF NOT EXISTS `job_type_count` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job_type` text COLLATE utf8_unicode_ci NOT NULL,
  `job_type_number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_12_28_035711_create_client_table_1', 1),
('2013_12_28_035732_create_job_type_counter_1', 1),
('2013_12_28_035832_create_billing_contact_list', 1),
('2013_12_28_035848_create_worksite_list', 1),
('2013_12_28_035900_create_work_order_list', 1),
('2013_12_28_035911_create_purchase_order_list', 1),
('2013_12_28_035925_create_worksite_index', 1),
('2013_12_28_035935_create_billing_index', 1),
('2013_12_28_035946_create_work_order_index', 1),
('2013_12_28_040000_create_purchase_order_index', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_index`
--

CREATE TABLE IF NOT EXISTS `purchase_order_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `purchase_order_number` int(11) NOT NULL,
  `purchase_order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_list`
--

CREATE TABLE IF NOT EXISTS `purchase_order_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_order_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_order_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_order_notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `worksite_index`
--

CREATE TABLE IF NOT EXISTS `worksite_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `worksite_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `worksite_list`
--

CREATE TABLE IF NOT EXISTS `worksite_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `worksite_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_fax_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_street_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_notes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `work_order_index`
--

CREATE TABLE IF NOT EXISTS `work_order_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `work_order_id` int(11) NOT NULL,
  `work_order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `work_order_list`
--

CREATE TABLE IF NOT EXISTS `work_order_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `work_order_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worksite_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_in` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_out` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billable_hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billable_rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_po_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_order_notes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
