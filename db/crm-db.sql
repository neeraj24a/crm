-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 08:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_representative`
--

CREATE TABLE `account_representative` (
  `id` char(36) NOT NULL,
  `last` varchar(128) NOT NULL,
  `first` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(36) NOT NULL,
  `phone2` varchar(36) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `assignments` varchar(255) NOT NULL,
  `notes` varchar(999) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_representative`
--

INSERT INTO `account_representative` (`id`, `last`, `first`, `email`, `phone`, `phone2`, `address`, `city`, `state`, `zip`, `country`, `assignments`, `notes`, `status`, `deleted`, `created_by`, `modified_by`, `date_entered`, `date_modified`) VALUES
('6b526c0c-9eaa-a671-e65e-5aa416e395ee', 'Test', 'AC2', 'example@example.com', '123', '123', '123 Sesame St', 'Anywtown', 'SomeState', '12345', 'USA', 'none', 'test', 1, 0, '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:31:45', '2018-03-10 17:32:50'),
('98b38a96-051f-0624-4a88-5aa04a3275e4', 'Kumar', 'Neeraj', 'neeraj@gmail.com', '1234567890', '1234567890', 'Rajarhat', 'Kolkata', 'West Bengal', '700135', 'India', 'NA', 'NA', 1, 0, '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-08 01:53:47', '2018-03-08 01:53:47'),
('ed3af6f9-df6d-fcc3-3822-5aa41647349d', 'Test', 'AC1', 'example@example.com', '123', '123', '123 Sesame St', 'Anywtown', 'SomeState', '12345', 'USA', 'none', 'test', 1, 0, '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:31:45', '2018-03-10 17:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` char(36) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `position` varchar(28) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `country`, `email`, `phone`, `position`, `is_active`, `status`, `deleted`, `created_by`, `modified_by`, `date_entered`, `date_modified`) VALUES
('5e698be7-1cc5-11e8-88d9-00e04ca8063e', 'Neeraj', 'Kumar', 'Rajarhat', 'Kolkata', 'West Bengal', '700135', 'India', 'neeraj24a@gmail.com', NULL, 'Admin', 1, 1, 0, '1', '1', '2018-03-01 00:00:00', '2018-03-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` char(36) NOT NULL,
  `kc` char(36) NOT NULL,
  `company` char(36) NOT NULL,
  `issue_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `printed_date` date NOT NULL,
  `signed` enum('yes','no') NOT NULL DEFAULT 'no',
  `signer` varchar(256) NOT NULL,
  `signed_date` date NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cert_data`
--

CREATE TABLE `cert_data` (
  `id` char(36) NOT NULL,
  `kc` char(36) NOT NULL,
  `ukd` varchar(16) NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` char(36) NOT NULL,
  `name` varchar(512) NOT NULL,
  `profile_pic` varchar(256) DEFAULT NULL,
  `jewish` enum('yes','no','unknown') NOT NULL,
  `url` varchar(512) NOT NULL,
  `address` varchar(128) NOT NULL,
  `address2` varchar(128) NOT NULL,
  `city` varchar(64) NOT NULL,
  `state` varchar(64) NOT NULL,
  `zip` int(8) NOT NULL,
  `country` varchar(64) NOT NULL,
  `lat` varchar(32) NOT NULL,
  `lng` varchar(32) NOT NULL,
  `kc_address` varchar(128) NOT NULL,
  `kc_address2` varchar(128) NOT NULL,
  `kc_city` varchar(64) NOT NULL,
  `kc_state` varchar(64) NOT NULL,
  `kc_zip` int(8) NOT NULL,
  `kc_country` varchar(64) NOT NULL,
  `kc_lat` varchar(32) NOT NULL,
  `kc_lng` varchar(32) NOT NULL,
  `kc_comp_notes` text NOT NULL,
  `overview` text NOT NULL,
  `ar` char(36) NOT NULL,
  `rc` char(36) NOT NULL,
  `admin` char(36) NOT NULL,
  `email` varchar(256) NOT NULL,
  `email2` varchar(256) DEFAULT NULL,
  `phone` int(12) NOT NULL,
  `phone2` int(12) DEFAULT NULL,
  `phone3` int(12) DEFAULT NULL,
  `contract_type` enum('R','PL') NOT NULL DEFAULT 'R',
  `active` enum('yes','no') NOT NULL,
  `contract_start` date NOT NULL,
  `contract_exp` date NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `profile_pic`, `jewish`, `url`, `address`, `address2`, `city`, `state`, `zip`, `country`, `lat`, `lng`, `kc_address`, `kc_address2`, `kc_city`, `kc_state`, `kc_zip`, `kc_country`, `kc_lat`, `kc_lng`, `kc_comp_notes`, `overview`, `ar`, `rc`, `admin`, `email`, `email2`, `phone`, `phone2`, `phone3`, `contract_type`, `active`, `contract_start`, `contract_exp`, `created_by`, `modified_by`, `date_entered`, `date_modified`, `status`, `deleted`) VALUES
('2d4c0226-4460-d866-78b4-5aa18e51d6c2', 'Test', 'car-1.jpg', 'unknown', 'http://www.google.com', 'Unnamed Road', 'Dhapa', 'Prey Kabbas', 'Takéo Province', 85000, 'Cambodia', '11.189839823943405', '104.85738975677782', 'House No 23', 'County Road 29', 'Chenango County', 'New York', 13815, 'United States', '42.6105779079486', '-75.41847805000003', 'NA', 'NA', '98b38a96-051f-0624-4a88-5aa04a3275e4', '1073d2a9-8391-1f3b-472b-5aa04a75682c', '5e698be7-1cc5-11e8-88d9-00e04ca8063e', 'neeraj@gmail.com', '', 1234567890, NULL, NULL, 'R', 'yes', '2018-03-31', '2019-03-30', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-09 00:58:15', '2018-03-10 18:02:49', 1, 0),
('6acb02dc-1e3a-00b0-f46f-5aa4dfad7bf8', 'Test 3', 'd765bbc6-77ce-cec1-7d37-5aa4e78e9aea.jpg', 'yes', 'http://yahoo.com', 'Sampson State Park', 'ghfhgf', 'Seneca County', 'New York', 14541, 'United States', '42.73577908679934', '-76.91261867500003', 'Sampson State Park', 'ghfhgf', 'Seneca County', 'New York', 14541, 'United States', '42.73577908679934', '-76.91261867500003', 'NA', '', '98b38a96-051f-0624-4a88-5aa04a3275e4', '1073d2a9-8391-1f3b-472b-5aa04a75682c', '5e698be7-1cc5-11e8-88d9-00e04ca8063e', 'neeraj24au@gmqil.com', 'neeraj24au@gmqil.com', 1234567890, NULL, NULL, 'R', 'yes', '2018-03-11', '2019-03-10', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-11 08:50:22', '2018-03-11 09:22:00', 1, 0),
('a373e609-013e-034c-1d4e-5aa41bc33bbe', 'Company1', NULL, 'unknown', 'http://google.com', 'Amphitheatre Parkway', '2', 'Santa Clara County', 'California', 94043, 'United States', '37.42200617728033', '-122.0840585231781', 'North Road', '2', 'Cayuga County', 'New York', 13021, 'United States', '42.87683206131038', '-76.46217922187503', 'test', 'test', '6b526c0c-9eaa-a671-e65e-5aa416e395ee', '1073d2a9-8391-1f3b-472b-5aa04a75682c', '5e698be7-1cc5-11e8-88d9-00e04ca8063e', 'sample@google.com', '', 800000000, NULL, NULL, 'R', 'yes', '2018-03-20', '2018-03-27', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:50:56', '2018-03-10 18:01:05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_facilities`
--

CREATE TABLE `company_facilities` (
  `id` char(36) NOT NULL,
  `company` char(36) NOT NULL,
  `facility` char(36) NOT NULL,
  `type` enum('OWN','MFG') NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_facilities`
--

INSERT INTO `company_facilities` (`id`, `company`, `facility`, `type`, `created_by`, `modified_by`, `date_entered`, `date_modified`, `status`, `deleted`) VALUES
('11df31b8-d916-c745-53ed-5aa41c231784', 'a373e609-013e-034c-1d4e-5aa41bc33bbe', '1159ae88-1092-fda0-62e7-5aa41ceeb226', 'OWN', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:58:58', '2018-03-10 17:58:58', 1, 0),
('1d407904-2315-11e8-bd55-00e04ca8063e', '2d4c0226-4460-d866-78b4-5aa18e51d6c2', '22b60cb2-556d-058b-23f3-5aa1a6b41104', 'OWN', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-09 00:00:00', '2018-03-09 00:00:00', 1, 0),
('711f6864-e157-de27-a874-5aa2e5494157', '2d4c0226-4460-d866-78b4-5aa18e51d6c2', '3ff5ee5c-e286-7093-f93b-5aa2e57020be', 'MFG', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 01:20:27', '2018-03-10 01:20:27', 1, 0),
('8b836a9d-3a93-80d8-7332-5aa41c2bdc79', 'a373e609-013e-034c-1d4e-5aa41bc33bbe', '8afc9572-2796-66fb-a7b0-5aa41cc6fec3', 'OWN', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:58:56', '2018-03-10 17:58:56', 1, 0),
('ac2053dc-3bfe-1d41-1fcb-5aa4394396e1', 'a373e609-013e-034c-1d4e-5aa41bc33bbe', '80063f0b-6015-e48c-d730-5aa439137843', 'MFG', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 21:01:14', '2018-03-10 21:01:14', 1, 0),
('b65d95a8-c6f5-d6b8-fc95-5aa41c0a5875', 'a373e609-013e-034c-1d4e-5aa41bc33bbe', '9127da68-82a8-578f-7040-5aa41ca7753b', 'OWN', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:57:40', '2018-03-10 17:57:40', 1, 0),
('cebecfbe-dd50-5fa3-6de4-5aa41c38cc4a', 'a373e609-013e-034c-1d4e-5aa41bc33bbe', '9127da68-82a8-578f-7040-5aa41ca7753b', 'OWN', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:57:41', '2018-03-10 17:57:41', 1, 0),
('cede8b2d-1218-1d0b-eddc-5aa41cafa0b9', 'a373e609-013e-034c-1d4e-5aa41bc33bbe', 'ce4d53de-9e13-2918-c423-5aa41c75009f', 'OWN', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:58:57', '2018-03-10 17:58:57', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` char(36) NOT NULL,
  `link_id` char(36) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `type` enum('facility','company') NOT NULL,
  `email` varchar(64) NOT NULL,
  `office` int(16) NOT NULL,
  `mobile` int(12) NOT NULL,
  `comments` text,
  `role` enum('general','kosher') NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modifed` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_entry`
--

CREATE TABLE `data_entry` (
  `id` char(36) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `position` varchar(28) NOT NULL,
  `company` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` char(36) NOT NULL,
  `name` varchar(256) NOT NULL,
  `address` varchar(128) NOT NULL,
  `address2` varchar(128) DEFAULT NULL,
  `city` varchar(64) NOT NULL,
  `state` varchar(64) NOT NULL,
  `zip` int(8) NOT NULL,
  `country` varchar(64) NOT NULL,
  `lat` varchar(32) NOT NULL,
  `lng` varchar(32) NOT NULL,
  `region` varchar(512) NOT NULL,
  `insp_occur` enum('0','1','2','3','4','6','12','24') NOT NULL,
  `insp_cost` varchar(16) NOT NULL,
  `overview` text NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `address`, `address2`, `city`, `state`, `zip`, `country`, `lat`, `lng`, `region`, `insp_occur`, `insp_cost`, `overview`, `created_by`, `modified_by`, `date_entered`, `date_modified`, `status`, `deleted`) VALUES
('1159ae88-1092-fda0-62e7-5aa41ceeb226', 'glob2', 'Payne Marsh Road', '', 'Tioga County', 'New York', 13736, 'United States', '42.330999143209105', '-76.17653469062503', 'e', '1', 'd', 'd', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:58:58', '2018-03-10 17:58:58', 1, 0),
('22b60cb2-556d-058b-23f3-5aa1a6b41104', 'Facility One', 'New York 275', '', 'Allegany County', 'New York', 14739, 'United States', '42.1569519741623', '-78.12111476875003', 'NA', '3', '500', 'NA', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-09 02:39:09', '2018-03-09 02:39:09', 1, 0),
('3ff5ee5c-e286-7093-f93b-5aa2e57020be', 'Test Facility', 'West Allen Road', '', 'Livingston County', 'Michigan', 48836, 'United States', '42.67926785150282', '-84.08119777656253', 'NA', '4', '200', 'NA', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 01:20:27', '2018-03-10 01:20:27', 1, 0),
('80063f0b-6015-e48c-d730-5aa439137843', 'Test 2', 'Murfreesboro Pike', '', 'Davidson County', 'Tennessee', 37210, 'United States', '36.14326733871196', '-86.74538234687503', 'NA', '2', '200', 'NA', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 21:01:14', '2018-03-10 21:01:14', 1, 0),
('8afc9572-2796-66fb-a7b0-5aa41cc6fec3', 'glob2', 'Payne Marsh Road', '', 'Tioga County', 'New York', 13736, 'United States', '42.330999143209105', '-76.17653469062503', 'e', '1', 'd', 'd', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:58:56', '2018-03-10 17:58:56', 1, 0),
('9127da68-82a8-578f-7040-5aa41ca7753b', 'glob facil', 'East Handsome Brook Road', '', 'Delaware County', 'New York', 13775, 'United States', '42.30256632080572', '-75.06142238593753', 'central', '0', '4', 'test2', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:55:45', '2018-03-10 17:56:06', 1, 0),
('c6451ec2-a81e-a389-5c79-5aa41c333703', 'glob facil', 'Old State Road', '', 'Madison County', 'New York', 13408, 'United States', '42.89695622878781', '-75.71510890937503', 'central', '0', '4', 'test', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:55:45', '2018-03-10 17:55:45', 1, 0),
('ce4d53de-9e13-2918-c423-5aa41c75009f', 'glob2', 'Payne Marsh Road', '', 'Tioga County', 'New York', 13736, 'United States', '42.330999143209105', '-76.17653469062503', 'e', '1', 'd', 'd', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-10 17:58:57', '2018-03-10 17:58:57', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `facility_inspector`
--

CREATE TABLE `facility_inspector` (
  `id` char(36) NOT NULL,
  `facility_id` varchar(36) NOT NULL,
  `inspector_id` varchar(36) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formulas`
--

CREATE TABLE `formulas` (
  `id` char(36) NOT NULL,
  `code` char(36) NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formula_ingredients`
--

CREATE TABLE `formula_ingredients` (
  `id` char(36) NOT NULL,
  `formula` char(36) NOT NULL,
  `ingredient` char(36) NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` char(36) NOT NULL,
  `company` char(36) NOT NULL,
  `name` varchar(256) NOT NULL,
  `rmc` varchar(64) NOT NULL,
  `ukd` varchar(16) NOT NULL,
  `vendor` varchar(64) NOT NULL,
  `notes` text NOT NULL,
  `packaging_type` enum('bulk','pp') NOT NULL,
  `approval_status` enum('a','p','u','r') NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_facility_link`
--

CREATE TABLE `ingredient_facility_link` (
  `id` char(36) NOT NULL,
  `ingredient` char(36) NOT NULL,
  `facility` char(36) NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspections`
--

CREATE TABLE `inspections` (
  `id` char(36) CHARACTER SET latin1 NOT NULL,
  `company_id` char(36) NOT NULL,
  `facility_id` char(36) CHARACTER SET latin1 NOT NULL,
  `inspector` varchar(36) CHARACTER SET latin1 NOT NULL,
  `insp_date` date NOT NULL,
  `issues` int(1) DEFAULT '0',
  `resolved_status` enum('open','resolved') CHARACTER SET latin1 NOT NULL DEFAULT 'resolved',
  `report` varchar(9999) CHARACTER SET utf8 DEFAULT NULL,
  `notes` varchar(999) CHARACTER SET latin1 DEFAULT NULL,
  `attachment` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `special` int(11) NOT NULL,
  `initial` int(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) CHARACTER SET latin1 NOT NULL,
  `modified_by` char(36) CHARACTER SET latin1 NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspectors`
--

CREATE TABLE `inspectors` (
  `id` char(36) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `web_enabled` int(1) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `phone` varchar(36) NOT NULL,
  `phone2` varchar(36) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `org` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `semi` int(1) NOT NULL,
  `semi_from` varchar(255) NOT NULL,
  `prev_agency` varchar(255) NOT NULL,
  `prev_positions` varchar(255) NOT NULL,
  `prev_years` varchar(255) NOT NULL,
  `curr_employed` int(1) NOT NULL,
  `curr_employer` varchar(255) NOT NULL,
  `reg_travel_states` varchar(255) NOT NULL,
  `reg_travel_countries` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `acct_name` varchar(128) NOT NULL,
  `acct_num` varchar(128) NOT NULL,
  `bank_name` varchar(128) NOT NULL,
  `bank_address` varchar(128) NOT NULL,
  `swift` varchar(128) NOT NULL,
  `bic` varchar(128) NOT NULL,
  `routing` varchar(128) NOT NULL,
  `special_inst` varchar(128) NOT NULL,
  `route` varchar(255) NOT NULL,
  `assignments` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `private_label_company_link`
--

CREATE TABLE `private_label_company_link` (
  `id` char(36) NOT NULL,
  `parent_company_id` char(36) NOT NULL,
  `privatelabel_company_id` char(36) NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `type` enum('R','PL') NOT NULL DEFAULT 'R',
  `private` tinyint(1) NOT NULL,
  `company` char(36) NOT NULL,
  `ukd` varchar(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `product_code` varchar(64) NOT NULL,
  `brand` varchar(64) NOT NULL,
  `kc_notes` text NOT NULL,
  `formula` varchar(36) NOT NULL,
  `pl_sameas` char(36) NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_facility_link`
--

CREATE TABLE `product_facility_link` (
  `id` char(36) NOT NULL,
  `product` char(36) NOT NULL,
  `facility` char(36) NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rabbinical_coordinator`
--

CREATE TABLE `rabbinical_coordinator` (
  `id` char(36) NOT NULL,
  `last` varchar(128) NOT NULL,
  `first` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(36) NOT NULL,
  `phone2` varchar(36) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `assignments` varchar(255) NOT NULL,
  `notes` varchar(999) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rabbinical_coordinator`
--

INSERT INTO `rabbinical_coordinator` (`id`, `last`, `first`, `email`, `phone`, `phone2`, `address`, `city`, `state`, `zip`, `country`, `assignments`, `notes`, `status`, `deleted`, `created_by`, `modified_by`, `date_entered`, `date_modified`) VALUES
('1073d2a9-8391-1f3b-472b-5aa04a75682c', 'Kumar', 'Neeraj', 'neeraj24au@gmqil.com', '1234567890', '1234567890', 'Rajarhat', 'Kolkata', 'West Bengal', '700135', 'India', 'NA', 'NA', 1, 0, '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', '2018-03-08 01:56:10', '2018-03-10 17:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags_facility`
--

CREATE TABLE `tags_facility` (
  `id` char(36) NOT NULL,
  `tag_id` varchar(36) NOT NULL,
  `facility_id` varchar(36) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukd`
--

CREATE TABLE `ukd` (
  `id` char(36) NOT NULL,
  `type` enum('ING','PRD') NOT NULL,
  `UKD` varchar(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `agency` varchar(128) NOT NULL,
  `exp_date` date NOT NULL,
  `passover` enum('yes','no') NOT NULL,
  `restrictions` varchar(128) NOT NULL,
  `kosher_group` varchar(128) NOT NULL,
  `kosher_status` varchar(128) NOT NULL,
  `approval_status` enum('approved','pending','unevaluated','rejected') NOT NULL,
  `evaluation_passover` varchar(128) NOT NULL,
  `evaluation_restrictions` varchar(128) NOT NULL,
  `evaluation_kosher_group` varchar(128) NOT NULL,
  `evaluation_kosher_status` varchar(128) NOT NULL,
  `ukd_internal` tinyint(1) NOT NULL,
  `kid` varchar(128) NOT NULL,
  `stage` varchar(128) NOT NULL,
  `a1` tinyint(1) NOT NULL DEFAULT '0',
  `a2` tinyint(1) NOT NULL DEFAULT '0',
  `a3` tinyint(1) NOT NULL DEFAULT '0',
  `a4` tinyint(1) NOT NULL DEFAULT '0',
  `a5` tinyint(1) NOT NULL DEFAULT '0',
  `a6` tinyint(1) NOT NULL DEFAULT '0',
  `a7` tinyint(1) NOT NULL DEFAULT '0',
  `a8` tinyint(1) NOT NULL DEFAULT '0',
  `a9` tinyint(1) NOT NULL DEFAULT '0',
  `a10` tinyint(1) NOT NULL DEFAULT '0',
  `a11` tinyint(1) NOT NULL DEFAULT '0',
  `a12` tinyint(1) NOT NULL DEFAULT '0',
  `a13` tinyint(1) NOT NULL DEFAULT '0',
  `a14` tinyint(1) NOT NULL DEFAULT '0',
  `a15` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukd_attachments`
--

CREATE TABLE `ukd_attachments` (
  `id` char(36) NOT NULL,
  `ukd` varchar(16) NOT NULL,
  `attachment` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `created_by` char(36) NOT NULL,
  `modiifed_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` enum('admin','company','data_entry','inspector') NOT NULL,
  `relation` varchar(255) NOT NULL,
  `last_visit` datetime NOT NULL,
  `active_key` char(36) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `relation`, `last_visit`, `active_key`, `status`, `deleted`, `created_by`, `modified_by`, `date_entered`, `date_modified`) VALUES
('7b0fd6c0-1cc5-11e8-88d9-00e04ca8063e', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '5e698be7-1cc5-11e8-88d9-00e04ca8063e', '2018-03-01 00:00:00', '', 1, 0, '5e698be7-1cc5-11e8-88d9-00e04ca8063e', '5e698be7-1cc5-11e8-88d9-00e04ca8063e', '2018-03-01 00:00:00', '2018-03-01 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_representative`
--
ALTER TABLE `account_representative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cert_data`
--
ALTER TABLE `cert_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_facilities`
--
ALTER TABLE `company_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_entry`
--
ALTER TABLE `data_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_inspector`
--
ALTER TABLE `facility_inspector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulas`
--
ALTER TABLE `formulas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formula_ingredients`
--
ALTER TABLE `formula_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_facility_link`
--
ALTER TABLE `ingredient_facility_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspections`
--
ALTER TABLE `inspections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspectors`
--
ALTER TABLE `inspectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_label_company_link`
--
ALTER TABLE `private_label_company_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_facility_link`
--
ALTER TABLE `product_facility_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rabbinical_coordinator`
--
ALTER TABLE `rabbinical_coordinator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags_facility`
--
ALTER TABLE `tags_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukd`
--
ALTER TABLE `ukd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukd_attachments`
--
ALTER TABLE `ukd_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
