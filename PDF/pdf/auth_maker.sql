-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2014 at 10:07 PM
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
-- Table structure for table `auth_maker`
--

CREATE TABLE IF NOT EXISTS `auth_maker` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field1_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field1_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field2_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field2_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field3_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field3_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field4_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field4_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field5_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field5_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field6_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field6_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field7_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field7_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field8_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field8_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field9_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field9_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field10_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field10_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field11_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field11_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field12_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field12_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auth_maker`
--

INSERT INTO `auth_maker` (`id`, `auth_name`, `field1_name`, `field1_data`, `field2_name`, `field2_data`, `field3_name`, `field3_data`, `field4_name`, `field4_data`, `field5_name`, `field5_data`, `field6_name`, `field6_data`, `field7_name`, `field7_data`, `field8_name`, `field8_data`, `field9_name`, `field9_data`, `field10_name`, `field10_data`, `field11_name`, `field11_data`, `field12_name`, `field12_data`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 'ssa', 'topmostSubform[0].Page1[0].TO___Social_Security_Administration[0]', 'NAME', 'topmostSubform[0].Page1[0].My_Date_of_Birth[0]', 'DOB', 'topmostSubform[0].Page1[0].My_Social_Security_Number[0]', 'SSN', 'topmostSubform[0].Page1[0].NAME_OF_PERSON_OR_ORGANIZATION_1[0]', 'C D Services, Inc.', 'topmostSubform[0].Page1[0].ADDRESS_OF_PERSON_OR_ORGANIZATION_1[0]', '24041 Research Drive', 'topmostSubform[0].Page1[0].ADDRESS_OF_PERSON_OR_ORGANIZATION_2[0]', '"Farmington Hills MI, 48335"', 'topmostSubform[0].Page1[0].ADDRESS_OF_PERSON_OR_ORGANIZATION_3[0]', '(248) 476-1700', 'topmostSubform[0].Page1[0].I_want_this_information_released_because[0]', 'At my request - for discovery purposes under Michigan Court Rules', 'topmostSubform[0].Page1[0].determination_or_questionnaire_1[0]', 'Complete File (Including applications, questionnaires, consults, exams, determinations, IME, medical records, all reports', 'topmostSubform[0].Page1[0].determination_or_questionnaire_2[0]', '(awards function work) memos, correspondence, referrals, photos, witness statement, denial reports  etc.)', 'topmostSubform[0].Page1[0].CheckBox2[0]', '1', 'topmostSubform[0].Page1[0].CheckBox3[0]', '1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
