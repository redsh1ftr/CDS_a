-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2014 at 04:19 PM
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
-- Table structure for table `status_letters`
--

CREATE TABLE IF NOT EXISTS `status_letters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verbiage` longtext COLLATE utf8_unicode_ci NOT NULL,
  `response` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `status_letters`
--

INSERT INTO `status_letters` (`id`, `name`, `verbiage`, `response`, `created_at`, `updated_at`) VALUES
(1, 'Base', '', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:46:05', '2014-06-09 12:46:05'),
(2, 'In Process', 'Deponent, DEPONENTNAME, has our subpoena and is currently processing the request.', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:48:21', '2014-06-09 12:48:21'),
(3, 'Facebook', 'Deponent, FACEBOOK (and other social media sites), will not respond to a Subpoena for production of records at this time.  They have withdrawn Registered Agents from Michigan.  They will only respond to Law Enforcement and to subpoenas issued by courts with jurisdiction over FACEBOOK.  FACEBOOK maintains records in MENLO PARK CALIFORNIA and thus maintains a subpoena must be issued by a California court.  Additionally, under the federal Stored Communications Act (18 USC §§ 2701 et seq.) they maintain that the user is the proper party to receive this request.  Please instruct our office on how you wish us to proceed in this matter.  (see attached correspondence from Facebook)', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:48:46', '2014-06-09 12:48:46'),
(4, 'MESC', 'Deponent, DEPONENTNAME, will not respond to a Subpoena for production of records at this time.  They have changed their internal policies and now believe they cannot send us records requested.  They will only produce records if they are a party to the action or if requested under Workers Compensation Act as they maintain they are confidential. (MCL 421.11 Sec. 11(b)(iii)).  You may file a Motion to Show Cause to challenge this position.  Please instruct our office on how you wish us to proceed in this matter.', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:49:43', '2014-06-09 12:49:43'),
(5, 'Objection', 'Plaintiff''s counsel has objected to the production of documents.  A copy of said objection is attached, pursuant to MCR 2.305(B)(2) and/or MCR 2.302 and 2.306, please provide a copy of an order from the Court or a stipulation between the parties that allows for the reproduction of the documents requested under the subpoena.  Until a copy of an order is received by our office, we will take no further action .  Please advise us if you have a different course of action intended.', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:50:24', '2014-06-09 12:50:24'),
(6, 'No Further Action', 'The request for records from the above referenced deponent was sent to the address provided to us. We have attempted to locate a phone number to contact this entity but have been unsuccessful.  We have not had a response to our written request nor have the documents been returned as undeliverable.  At this time, there is no further action we can take in the matter and we are, therefore, billing and closing this request.  Should you acquire additional information, we will be happy to reopen this request.', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:51:08', '2014-06-09 12:51:08'),
(7, 'Out of State Subpoena', 'The request for records from the above referenced deponent has been returned to our office.  The deponent does not recognize or accept an out of state subpoena.  We have therefore, re-sent this as a "request" for records with an authorization to release same in an effort to obtain these records for you.  If there are any further delays, we will notify you as soon as we become aware of them.', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:51:52', '2014-06-09 12:51:52'),
(8, 'Show Cause', 'Deponent, DEPONENTNAME, will not respond to the Subpoena for production of records.  It may be necessary for you to file a Motion to Show Cause.  Please instruct our office on how you wish us to proceed in this matter.', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:54:06', '2014-06-09 12:54:06'),
(9, 'Company Dissolved', 'We have checked the following sources to attempt to verify the location of the deponent; Michigan Corporate Look-up and internet telephone directories.  Pursuant to the information provided by the State of Michigan, the entity that you are looking for has been dissolved on or about DISSOLVEDDATE. At this time, we will be closing this request. If you can provide any additional information to assist us in locating this deponent we will be happy to reopen your request.', 'Your quick response to this request will expedite this matter.  If we do not receive a response from you within 30 days of the date of this letter, we will assume that you do not wish us to take any further action and we will close and bill, accordingly.<br><br>\r\n\r\nWe realize that time is of the essence and will continue to take any and all action necessary to complete your request in the most expeditious manner possible.<br><br>\r\n\r\nThank you for the opportunity to be of service to you and your firm.  As always, should you have any questions, please do not hesitate to contact us.  It is our goal to continue to provide you with quality service.<br><br>', '2014-06-09 12:56:07', '2014-06-09 12:56:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;