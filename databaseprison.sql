-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 04:12 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id_activity` int(10) UNSIGNED NOT NULL,
  `activity` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `act_duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id_activity`, `activity`, `act_duration`, `created_at`, `updated_at`) VALUES
(1, 'clean', 1, NULL, NULL),
(2, 'outreach', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id_area` int(10) UNSIGNED NOT NULL,
  `level_area` int(11) NOT NULL,
  `id_jail` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id_area`, `level_area`, `id_jail`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `casedetails`
--

CREATE TABLE `casedetails` (
  `id_case` int(10) UNSIGNED NOT NULL,
  `case_section` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `punishment` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `case_duration` int(11) NOT NULL,
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `casedetails`
--

INSERT INTO `casedetails` (`id_case`, `case_section`, `punishment`, `case_duration`, `id_prisoner`, `created_at`, `updated_at`) VALUES
(1, 'one', 'crime', 5, 1, NULL, NULL),
(2, 'two', 'killer', 8, 2, NULL, NULL),
(3, 'one', 'crime', 5, 3, NULL, NULL),
(4, 'two', 'killer', 8, 4, NULL, NULL),
(5, 'one', 'crime', 5, 5, NULL, NULL),
(6, 'two', 'killer', 8, 6, NULL, NULL),
(7, 'one', 'crime', 5, 7, NULL, NULL),
(8, 'two', 'killer', 8, 8, NULL, NULL),
(9, 'one', 'crime', 5, 9, NULL, NULL),
(10, 'two', 'killer', 8, 10, NULL, NULL),
(11, 'one', 'crime', 5, 11, NULL, NULL),
(12, 'two', 'killer', 8, 12, NULL, NULL),
(13, 'one', 'crime', 5, 13, NULL, NULL),
(14, 'two', 'killer', 8, 14, NULL, NULL),
(15, 'one', 'crime', 5, 15, NULL, NULL),
(16, 'two', 'killer', 8, 16, NULL, NULL),
(17, 'one', 'crime', 5, 17, NULL, NULL),
(18, 'two', 'killer', 8, 18, NULL, NULL),
(19, 'one', 'crime', 5, 19, NULL, NULL),
(20, 'two', 'killer', 8, 20, NULL, NULL),
(21, 'one', 'crime', 5, 21, NULL, NULL),
(22, 'two', 'killer', 8, 22, NULL, NULL),
(23, 'one', 'crime', 5, 23, NULL, NULL),
(24, 'two', 'killer', 8, 24, NULL, NULL),
(25, 'one', 'crime', 5, 25, NULL, NULL),
(26, 'two', 'killer', 8, 26, NULL, NULL),
(27, 'one', 'crime', 5, 27, NULL, NULL),
(28, 'two', 'killer', 8, 28, NULL, NULL),
(29, 'one', 'crime', 5, 29, NULL, NULL),
(30, 'two', 'killer', 8, 30, NULL, NULL),
(31, 'one', 'crime', 5, 31, NULL, NULL),
(32, 'two', 'killer', 8, 32, NULL, NULL),
(33, 'one', 'crime', 5, 33, NULL, NULL),
(34, 'two', 'killer', 8, 34, NULL, NULL),
(35, 'one', 'crime', 5, 35, NULL, NULL),
(36, 'two', 'killer', 8, 36, NULL, NULL),
(37, 'one', 'crime', 5, 37, NULL, NULL),
(38, 'two', 'killer', 8, 38, NULL, NULL),
(39, 'one', 'crime', 5, 39, NULL, NULL),
(40, 'two', 'killer', 8, 40, NULL, NULL),
(41, 'one', 'crime', 5, 41, NULL, NULL),
(42, 'two', 'killer', 8, 42, NULL, NULL),
(43, 'one', 'crime', 5, 43, NULL, NULL),
(44, 'two', 'killer', 8, 44, NULL, NULL),
(45, 'one', 'crime', 5, 45, NULL, NULL),
(46, 'two', 'killer', 8, 46, NULL, NULL),
(47, 'one', 'crime', 5, 47, NULL, NULL),
(48, 'two', 'killer', 8, 48, NULL, NULL),
(49, 'one', 'crime', 5, 49, NULL, NULL),
(50, 'two', 'killer', 8, 50, NULL, NULL),
(51, 'one', 'crime', 5, 51, NULL, NULL),
(52, 'two', 'killer', 8, 52, NULL, NULL),
(53, 'one', 'crime', 5, 53, NULL, NULL),
(54, 'two', 'killer', 8, 54, NULL, NULL),
(55, 'one', 'crime', 5, 55, NULL, NULL),
(56, 'two', 'killer', 8, 56, NULL, NULL),
(57, 'one', 'crime', 5, 57, NULL, NULL),
(58, 'two', 'killer', 8, 58, NULL, NULL),
(59, 'one', 'crime', 5, 59, NULL, NULL),
(60, 'two', 'killer', 8, 60, NULL, NULL),
(61, 'one', 'crime', 5, 61, NULL, NULL),
(62, 'two', 'killer', 8, 62, NULL, NULL),
(63, 'one', 'crime', 5, 63, NULL, NULL),
(64, 'two', 'killer', 8, 64, NULL, NULL),
(65, 'one', 'crime', 5, 65, NULL, NULL),
(66, 'two', 'killer', 8, 66, NULL, NULL),
(67, 'one', 'crime', 5, 67, NULL, NULL),
(68, 'two', 'killer', 8, 68, NULL, NULL),
(69, 'one', 'crime', 5, 69, NULL, NULL),
(70, 'two', 'killer', 8, 70, NULL, NULL),
(71, 'one', 'crime', 5, 71, NULL, NULL),
(72, 'two', 'killer', 8, 72, NULL, NULL),
(73, 'one', 'crime', 5, 73, NULL, NULL),
(74, 'two', 'killer', 8, 74, NULL, NULL),
(75, 'one', 'crime', 5, 75, NULL, NULL),
(76, 'two', 'killer', 8, 76, NULL, NULL),
(77, 'one', 'crime', 5, 77, NULL, NULL),
(78, 'two', 'killer', 8, 78, NULL, NULL),
(79, 'one', 'crime', 5, 79, NULL, NULL),
(80, 'two', 'killer', 8, 80, NULL, NULL),
(81, 'one', 'crime', 5, 81, NULL, NULL),
(82, 'two', 'killer', 8, 82, NULL, NULL),
(83, 'one', 'crime', 5, 83, NULL, NULL),
(84, 'two', 'killer', 8, 84, NULL, NULL),
(85, 'one', 'crime', 5, 85, NULL, NULL),
(86, 'two', 'killer', 8, 86, NULL, NULL),
(87, 'one', 'crime', 5, 87, NULL, NULL),
(88, 'two', 'killer', 8, 88, NULL, NULL),
(89, 'one', 'crime', 5, 89, NULL, NULL),
(90, 'two', 'killer', 8, 90, NULL, NULL),
(91, 'one', 'crime', 5, 91, NULL, NULL),
(92, 'two', 'killer', 8, 92, NULL, NULL),
(93, 'one', 'crime', 5, 93, NULL, NULL),
(94, 'two', 'killer', 8, 94, NULL, NULL),
(95, 'one', 'crime', 5, 95, NULL, NULL),
(96, 'two', 'killer', 8, 96, NULL, NULL),
(97, 'one', 'crime', 5, 97, NULL, NULL),
(98, 'two', 'killer', 8, 98, NULL, NULL),
(99, 'one', 'crime', 5, 99, NULL, NULL),
(100, 'two', 'killer', 8, 100, NULL, NULL),
(101, 'one', 'crime', 5, 101, NULL, NULL),
(102, 'two', 'killer', 8, 102, NULL, NULL),
(103, 'one', 'crime', 5, 103, NULL, NULL),
(104, 'two', 'killer', 8, 104, NULL, NULL),
(105, 'one', 'crime', 5, 105, NULL, NULL),
(106, 'two', 'killer', 8, 106, NULL, NULL),
(107, 'one', 'crime', 5, 107, NULL, NULL),
(108, 'two', 'killer', 8, 108, NULL, NULL),
(109, 'one', 'crime', 5, 109, NULL, NULL),
(110, 'two', 'killer', 8, 110, NULL, NULL),
(111, 'one', 'crime', 5, 111, NULL, NULL),
(112, 'two', 'killer', 8, 112, NULL, NULL),
(113, 'one', 'crime', 5, 113, NULL, NULL),
(114, 'two', 'killer', 8, 114, NULL, NULL),
(115, 'one', 'crime', 5, 115, NULL, NULL),
(116, 'two', 'killer', 8, 116, NULL, NULL),
(117, 'one', 'crime', 5, 117, NULL, NULL),
(118, 'two', 'killer', 8, 118, NULL, NULL),
(119, 'one', 'crime', 5, 119, NULL, NULL),
(120, 'two', 'killer', 8, 120, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cells`
--

CREATE TABLE `cells` (
  `id_cell` int(10) UNSIGNED NOT NULL,
  `id_area` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cells`
--

INSERT INTO `cells` (`id_cell`, `id_area`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(4, 1, NULL, NULL),
(5, 1, NULL, NULL),
(6, 1, NULL, NULL),
(7, 1, NULL, NULL),
(8, 1, NULL, NULL),
(9, 1, NULL, NULL),
(10, 1, NULL, NULL),
(11, 1, NULL, NULL),
(12, 1, NULL, NULL),
(13, 1, NULL, NULL),
(14, 1, NULL, NULL),
(15, 1, NULL, NULL),
(16, 1, NULL, NULL),
(17, 1, NULL, NULL),
(18, 1, NULL, NULL),
(19, 1, NULL, NULL),
(20, 1, NULL, NULL),
(21, 2, NULL, NULL),
(22, 2, NULL, NULL),
(23, 2, NULL, NULL),
(24, 2, NULL, NULL),
(25, 2, NULL, NULL),
(26, 2, NULL, NULL),
(27, 2, NULL, NULL),
(28, 2, NULL, NULL),
(29, 2, NULL, NULL),
(30, 2, NULL, NULL),
(31, 2, NULL, NULL),
(32, 2, NULL, NULL),
(33, 2, NULL, NULL),
(34, 2, NULL, NULL),
(35, 2, NULL, NULL),
(36, 2, NULL, NULL),
(37, 2, NULL, NULL),
(38, 2, NULL, NULL),
(39, 2, NULL, NULL),
(40, 2, NULL, NULL),
(41, 3, NULL, NULL),
(42, 3, NULL, NULL),
(43, 3, NULL, NULL),
(44, 3, NULL, NULL),
(45, 3, NULL, NULL),
(46, 3, NULL, NULL),
(47, 3, NULL, NULL),
(48, 3, NULL, NULL),
(49, 3, NULL, NULL),
(50, 3, NULL, NULL),
(51, 3, NULL, NULL),
(52, 3, NULL, NULL),
(53, 3, NULL, NULL),
(54, 3, NULL, NULL),
(55, 3, NULL, NULL),
(56, 3, NULL, NULL),
(57, 3, NULL, NULL),
(58, 3, NULL, NULL),
(59, 3, NULL, NULL),
(60, 3, NULL, NULL),
(61, 4, NULL, NULL),
(62, 4, NULL, NULL),
(63, 4, NULL, NULL),
(64, 4, NULL, NULL),
(65, 4, NULL, NULL),
(66, 4, NULL, NULL),
(67, 4, NULL, NULL),
(68, 4, NULL, NULL),
(69, 4, NULL, NULL),
(70, 4, NULL, NULL),
(71, 4, NULL, NULL),
(72, 4, NULL, NULL),
(73, 4, NULL, NULL),
(74, 4, NULL, NULL),
(75, 4, NULL, NULL),
(76, 4, NULL, NULL),
(77, 4, NULL, NULL),
(78, 4, NULL, NULL),
(79, 4, NULL, NULL),
(80, 4, NULL, NULL),
(81, 5, NULL, NULL),
(82, 5, NULL, NULL),
(83, 5, NULL, NULL),
(84, 5, NULL, NULL),
(85, 5, NULL, NULL),
(86, 5, NULL, NULL),
(87, 5, NULL, NULL),
(88, 5, NULL, NULL),
(89, 5, NULL, NULL),
(90, 5, NULL, NULL),
(91, 5, NULL, NULL),
(92, 5, NULL, NULL),
(93, 5, NULL, NULL),
(94, 5, NULL, NULL),
(95, 5, NULL, NULL),
(96, 5, NULL, NULL),
(97, 5, NULL, NULL),
(98, 5, NULL, NULL),
(99, 5, NULL, NULL),
(100, 5, NULL, NULL),
(101, 6, NULL, NULL),
(102, 6, NULL, NULL),
(103, 6, NULL, NULL),
(104, 6, NULL, NULL),
(105, 6, NULL, NULL),
(106, 6, NULL, NULL),
(107, 6, NULL, NULL),
(108, 6, NULL, NULL),
(109, 6, NULL, NULL),
(110, 6, NULL, NULL),
(111, 6, NULL, NULL),
(112, 6, NULL, NULL),
(113, 6, NULL, NULL),
(114, 6, NULL, NULL),
(115, 6, NULL, NULL),
(116, 6, NULL, NULL),
(117, 6, NULL, NULL),
(118, 6, NULL, NULL),
(119, 6, NULL, NULL),
(120, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eventactivities`
--

CREATE TABLE `eventactivities` (
  `id_activity` int(10) UNSIGNED NOT NULL,
  `id_area` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `eventactivities`
--

INSERT INTO `eventactivities` (`id_activity`, `id_area`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `freeprisonhistory`
--

CREATE TABLE `freeprisonhistory` (
  `id_freeprison` int(10) UNSIGNED NOT NULL,
  `freedate` date NOT NULL,
  `type_of_freedom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freeprisonhistory`
--

INSERT INTO `freeprisonhistory` (`id_freeprison`, `freedate`, `type_of_freedom`, `id_prisoner`, `created_at`, `updated_at`) VALUES
(10, '1997-08-25', 'died', 20, NULL, NULL),
(11, '1997-09-09', 'died', 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `haverelative`
--

CREATE TABLE `haverelative` (
  `id_relative` int(10) UNSIGNED NOT NULL,
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `haverelative`
--

INSERT INTO `haverelative` (`id_relative`, `id_prisoner`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jails`
--

CREATE TABLE `jails` (
  `id_jail` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jails`
--

INSERT INTO `jails` (`id_jail`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id_level` int(10) UNSIGNED NOT NULL,
  `lv` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id_level`, `lv`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id_login` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id_login`, `name`, `pass`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Password', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managecase`
--

CREATE TABLE `managecase` (
  `id_officer` int(10) UNSIGNED NOT NULL,
  `id_case` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `managecase`
--

INSERT INTO `managecase` (`id_officer`, `id_case`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(2, 4, NULL, NULL),
(2, 5, NULL, NULL),
(2, 6, NULL, NULL),
(3, 7, NULL, NULL),
(3, 8, NULL, NULL),
(4, 9, NULL, NULL),
(4, 10, NULL, NULL),
(5, 11, NULL, NULL),
(6, 12, NULL, NULL),
(7, 13, NULL, NULL),
(7, 14, NULL, NULL),
(8, 15, NULL, NULL),
(9, 16, NULL, NULL),
(10, 17, NULL, NULL),
(11, 18, NULL, NULL),
(12, 19, NULL, NULL),
(14, 20, NULL, NULL),
(14, 21, NULL, NULL),
(14, 22, NULL, NULL),
(15, 23, NULL, NULL),
(15, 24, NULL, NULL),
(15, 25, NULL, NULL),
(16, 26, NULL, NULL),
(16, 27, NULL, NULL),
(17, 28, NULL, NULL),
(17, 29, NULL, NULL),
(18, 30, NULL, NULL),
(18, 31, NULL, NULL),
(20, 32, NULL, NULL),
(19, 33, NULL, NULL),
(19, 34, NULL, NULL),
(20, 35, NULL, NULL),
(21, 36, NULL, NULL),
(21, 37, NULL, NULL),
(22, 38, NULL, NULL),
(22, 39, NULL, NULL),
(23, 40, NULL, NULL),
(23, 41, NULL, NULL),
(24, 42, NULL, NULL),
(24, 43, NULL, NULL),
(25, 44, NULL, NULL),
(26, 45, NULL, NULL),
(28, 46, NULL, NULL),
(28, 47, NULL, NULL),
(29, 48, NULL, NULL),
(29, 49, NULL, NULL),
(30, 50, NULL, NULL),
(30, 51, NULL, NULL),
(31, 52, NULL, NULL),
(31, 53, NULL, NULL),
(32, 54, NULL, NULL),
(32, 55, NULL, NULL),
(33, 56, NULL, NULL),
(33, 57, NULL, NULL),
(34, 58, NULL, NULL),
(34, 59, NULL, NULL),
(35, 60, NULL, NULL),
(35, 61, NULL, NULL),
(36, 62, NULL, NULL),
(37, 63, NULL, NULL),
(36, 64, NULL, NULL),
(36, 65, NULL, NULL),
(37, 66, NULL, NULL),
(38, 67, NULL, NULL),
(38, 68, NULL, NULL),
(38, 69, NULL, NULL),
(39, 70, NULL, NULL),
(39, 71, NULL, NULL),
(40, 72, NULL, NULL),
(40, 73, NULL, NULL),
(41, 74, NULL, NULL),
(41, 75, NULL, NULL),
(42, 76, NULL, NULL),
(43, 77, NULL, NULL),
(45, 78, NULL, NULL),
(42, 79, NULL, NULL),
(43, 80, NULL, NULL),
(44, 81, NULL, NULL),
(45, 82, NULL, NULL),
(46, 83, NULL, NULL),
(46, 84, NULL, NULL),
(47, 85, NULL, NULL),
(47, 86, NULL, NULL),
(48, 87, NULL, NULL),
(48, 88, NULL, NULL),
(49, 89, NULL, NULL),
(49, 90, NULL, NULL),
(50, 91, NULL, NULL),
(51, 92, NULL, NULL),
(51, 93, NULL, NULL),
(52, 94, NULL, NULL),
(53, 95, NULL, NULL),
(53, 96, NULL, NULL),
(54, 97, NULL, NULL),
(54, 98, NULL, NULL),
(55, 99, NULL, NULL),
(56, 100, NULL, NULL),
(57, 101, NULL, NULL),
(57, 102, NULL, NULL),
(58, 103, NULL, NULL),
(58, 104, NULL, NULL),
(59, 105, NULL, NULL),
(59, 106, NULL, NULL),
(60, 107, NULL, NULL),
(60, 108, NULL, NULL),
(61, 109, NULL, NULL),
(62, 110, NULL, NULL),
(62, 111, NULL, NULL),
(62, 112, NULL, NULL),
(63, 113, NULL, NULL),
(63, 114, NULL, NULL),
(64, 115, NULL, NULL),
(64, 116, NULL, NULL),
(65, 117, NULL, NULL),
(65, 118, NULL, NULL),
(2, 119, NULL, NULL),
(3, 120, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_04_164440_create_prisoners_table', 1),
(2, '2017_11_04_165241_create_officers_table', 1),
(3, '2017_11_04_170540_create_levels_table', 1),
(4, '2017_11_04_171324_create_jails_table', 1),
(5, '2017_11_04_171719_create_activities_table', 1),
(6, '2017_11_04_172059_create_areas_table', 1),
(7, '2017_11_04_172751_create_cells_table', 1),
(8, '2017_11_04_173101_create_relatives_table', 1),
(9, '2017_11_04_173922_create_freeprisonhistory_table', 1),
(10, '2017_11_04_174723_create_casedetails_table', 1),
(11, '2017_11_04_175528_create_Prisonerbehavioralhistory_table', 1),
(12, '2017_11_04_180743_create_prisonereducepunishmenthistory_table', 1),
(13, '2017_11_04_181211_create_visithistory_table', 1),
(14, '2017_11_04_182031_create_eventactivities_table', 1),
(15, '2017_11_04_182350_create_haverelative_table', 1),
(16, '2017_11_04_183319_create_managecase_table', 1),
(17, '2017_11_04_183446_create_plusscore_table', 1),
(18, '2017_11_04_183490_create_prisoner_officer_table', 1),
(19, '2017_11_12_194348_create_foreign_keys', 1),
(20, '2017_12_12_194348_create_logins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id_officer` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `position` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_area` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id_officer`, `name`, `dob`, `position`, `gender`, `id_area`, `created_at`, `updated_at`) VALUES
(1, 'Aaron Turner', '1993-06-21', 'official', 'M', 1, NULL, NULL),
(2, 'Abraham Davis', '1988-04-02', 'official', 'M', 1, NULL, NULL),
(3, 'Abdul Sriraja', '1984-03-14', 'official', 'M', 1, NULL, NULL),
(4, 'Adam Miller', '1994-08-04', 'official', 'M', 1, NULL, NULL),
(5, 'Adrian Walker', '1977-02-05', 'Associate Direc', 'M', 1, NULL, NULL),
(6, 'Allen Wright', '1987-12-30', 'official', 'M', 1, NULL, NULL),
(7, 'Jared Leto', '1987-01-29', 'official', 'M', 1, NULL, NULL),
(8, 'Kenneth Cosh', '1969-07-18', 'Director', 'M', 1, NULL, NULL),
(9, 'Ada Wong', '1986-04-01', 'official', 'F', 1, NULL, NULL),
(10, 'Adeline Owen', '1983-01-04', 'official', 'F', 1, NULL, NULL),
(11, 'Anita Lewis', '1991-02-15', 'official', 'F', 1, NULL, NULL),
(12, 'Constance Young', '1988-07-14', 'official', 'F', 1, NULL, NULL),
(13, 'Doris Arryn', '1989-11-09', 'official', 'F', 1, NULL, NULL),
(14, 'Eve ', '1980-06-18', 'official', 'F', 1, NULL, NULL),
(15, 'Helen', '1994-02-26', 'official', 'F', 1, NULL, NULL),
(16, 'Aiden Pearce', '1986-01-29', 'official', 'M', 2, NULL, NULL),
(17, 'Blake Langerman', '1997-08-04', 'official', 'M', 2, NULL, NULL),
(18, 'Brandon Stark', '1997-05-04', 'official', 'M', 2, NULL, NULL),
(19, 'Daniel Watson', '1997-09-04', 'official', 'M', 2, NULL, NULL),
(20, 'Derek Arryn', '1997-08-10', 'official', 'M', 2, NULL, NULL),
(21, 'Drake Ericsen', '1997-08-15', 'official', 'M', 2, NULL, NULL),
(22, 'Xavi Alonso', '1997-10-11', 'official', 'M', 2, NULL, NULL),
(23, 'Jihadi John', '1997-09-04', 'official', 'M', 2, NULL, NULL),
(24, 'Uzumaki Naruto', '1997-08-05', 'official', 'M', 2, NULL, NULL),
(25, 'Shimura Shinpac', '1997-08-04', 'official', 'M', 2, NULL, NULL),
(26, 'Tyrian Lanniste', '1997-08-04', 'official', 'M', 2, NULL, NULL),
(27, 'Babie Shark', '1997-08-01', 'official', 'M', 2, NULL, NULL),
(28, 'Shimura Tae', '1997-08-04', 'official', 'F', 2, NULL, NULL),
(29, 'Shimura Shinpac', '1997-04-04', 'official', 'M', 2, NULL, NULL),
(30, 'Hugh Hugo', '1997-02-04', 'official', 'M', 2, NULL, NULL),
(31, 'Sarah Gray', '1997-02-04', 'official', 'M', 3, NULL, NULL),
(32, 'Logan Corner', '1997-02-05', 'official', 'M', 3, NULL, NULL),
(33, 'Brian Cooper', '1997-02-11', 'official', 'M', 3, NULL, NULL),
(34, 'Dennis Ritchie', '1995-11-11', 'official', 'M', 3, NULL, NULL),
(35, 'David Zussman', '1997-05-05', 'official', 'M', 3, NULL, NULL),
(36, 'Eric Carter', '1997-05-06', 'official', 'M', 3, NULL, NULL),
(37, 'Yusof Ossas', '1997-04-03', 'official', 'M', 3, NULL, NULL),
(38, 'Jackie Chanaron', '1997-10-10', 'official', 'M', 3, NULL, NULL),
(39, 'Rachel Costa', '1997-06-06', 'official', 'F', 3, NULL, NULL),
(40, 'Alexis Sandres', '1997-07-07', 'official', 'M', 3, NULL, NULL),
(41, 'Johny Bravo', '1997-05-03', 'official', 'M', 4, NULL, NULL),
(42, 'Dennis Grall', '1997-05-04', 'official', 'M', 4, NULL, NULL),
(43, 'Sebastian Caste', '1997-05-07', 'official', 'M', 4, NULL, NULL),
(44, 'Julie Kidman', '1997-01-01', 'official', 'F', 4, NULL, NULL),
(45, 'Mohammed Ali', '1997-01-01', 'official', 'M', 4, NULL, NULL),
(46, 'Natasha Onaleva', '1997-09-09', 'official', 'F', 4, NULL, NULL),
(47, 'Selena Wilson', '1997-02-02', 'official', 'M', 4, NULL, NULL),
(48, 'Jonhnie O’Sulli', '1997-10-10', 'official', 'M', 4, NULL, NULL),
(49, 'Bruno Vars', '1992-05-03', 'official', 'M', 4, NULL, NULL),
(50, 'Sam Blacksmith', '1994-08-01', 'official', 'M', 4, NULL, NULL),
(51, 'Buzz Lightyear', '1996-11-12', 'official', 'M', 5, NULL, NULL),
(52, 'Tony Slark', '1996-05-06', 'official', 'M', 5, NULL, NULL),
(53, 'Abdullahu Usman', '1996-05-08', 'official', 'M', 5, NULL, NULL),
(54, 'Iori Kogawa', '1996-10-06', 'official', 'F', 5, NULL, NULL),
(55, 'Maria Ozawa', '1996-09-11', 'official', 'F', 5, NULL, NULL),
(56, 'Kenshiro Daisen', '1996-01-01', 'official', 'M', 5, NULL, NULL),
(57, 'Monkey D. Roger', '1993-10-06', 'official', 'M', 5, NULL, NULL),
(58, 'Patrik Kanser', '1995-05-10', 'official', 'M', 5, NULL, NULL),
(59, 'Ross Roma', '1996-09-03', 'official', 'M', 5, NULL, NULL),
(60, 'Reynold Ray', '1995-08-06', 'official', 'M', 5, NULL, NULL),
(61, 'Precius Py', '1997-02-06', 'official', 'M', 6, NULL, NULL),
(62, 'Tobi Wan', '1997-02-03', 'official', 'M', 6, NULL, NULL),
(63, 'Peter Parkerz', '1997-02-05', 'official', 'M', 6, NULL, NULL),
(64, 'Orson Arao', '1997-05-06', 'official', 'M', 6, NULL, NULL),
(65, 'Louis Xander', '1997-02-04', 'official', 'M', 6, NULL, NULL),
(66, 'Norton Nart', '1997-03-06', 'official', 'M', 6, NULL, NULL),
(67, 'Gracius Romeo', '1997-02-10', 'official', 'M', 6, NULL, NULL),
(68, 'Disuki Deeva', '1997-02-06', 'official', 'M', 6, NULL, NULL),
(69, 'Jumbo Plus', '1997-05-10', 'official', 'M', 6, NULL, NULL),
(70, 'Den Gran', '1997-08-07', 'official', 'M', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plusscore`
--

CREATE TABLE `plusscore` (
  `id_activity` int(10) UNSIGNED NOT NULL,
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plusscore`
--

INSERT INTO `plusscore` (`id_activity`, `id_prisoner`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prisonerbehavioralhistory`
--

CREATE TABLE `prisonerbehavioralhistory` (
  `id_behav` int(10) UNSIGNED NOT NULL,
  `crime` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `guilt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `id_officer` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prisonerbehavioralhistory`
--

INSERT INTO `prisonerbehavioralhistory` (`id_behav`, `crime`, `guilt`, `start_date`, `end_date`, `id_prisoner`, `id_officer`, `created_at`, `updated_at`) VALUES
(1, 'Wrangle', 'lock', '1997-08-25', '1997-08-28', 5, 2, NULL, NULL),
(2, 'Wrangle', 'lock', '1997-08-25', '1997-08-28', 10, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prisonereducepunishmenthistory`
--

CREATE TABLE `prisonereducepunishmenthistory` (
  `id_reducehis` int(10) UNSIGNED NOT NULL,
  `cause_reduce` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time_reducted` int(11) NOT NULL,
  `start_datereduce` date NOT NULL,
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prisonereducepunishmenthistory`
--

INSERT INTO `prisonereducepunishmenthistory` (`id_reducehis`, `cause_reduce`, `time_reducted`, `start_datereduce`, `id_prisoner`, `created_at`, `updated_at`) VALUES
(1, 'do good deeds', 5, '1997-08-30', 1, NULL, NULL),
(2, 'do good deeds', 4, '1997-08-29', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prisoners`
--

CREATE TABLE `prisoners` (
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `id_cell` int(10) UNSIGNED NOT NULL,
  `fname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `scorepri` int(11) NOT NULL,
  `id_level` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prisoners`
--

INSERT INTO `prisoners` (`id_prisoner`, `id_cell`, `fname`, `lname`, `address`, `dob`, `gender`, `scorepri`, `id_level`, `created_at`, `updated_at`) VALUES
(1, 1, 'Louis', 'Xandar', '239', '1997-08-25', 'M', 50, 1, NULL, NULL),
(2, 1, 'Zoe', 'Ray', '225', '1997-08-25', 'M', 42, 1, NULL, NULL),
(3, 1, 'Satianporn', 'Khumdee', '432', '1999-09-25', 'M', 53, 1, NULL, NULL),
(4, 2, 'Algernon', 'Cexa', '888', '1999-09-25', 'M', 54, 1, NULL, NULL),
(5, 2, 'Alan', 'Violet', '888', '1999-09-25', 'M', 55, 1, NULL, NULL),
(6, 3, 'Alen', 'Walker', '888', '1999-09-25', 'M', 68, 1, NULL, NULL),
(7, 4, 'Genie', 'EAlbert ', '888', '1999-09-25', 'M', 70, 1, NULL, NULL),
(8, 6, 'Laay', 'Elia', '888', '1999-09-25', 'M', 72, 1, NULL, NULL),
(9, 8, 'Tama', 'Ces', '888', '1999-09-25', 'M', 12, 1, NULL, NULL),
(10, 15, 'Alexander ', 'Aiza', '888', '1999-09-25', 'M', 50, 1, NULL, NULL),
(11, 16, 'Lex', 'Cancer', '888', '1999-09-25', 'M', 60, 1, NULL, NULL),
(12, 9, 'Lux', 'Sanook', '888', '1999-09-25', 'M', 70, 1, NULL, NULL),
(13, 20, 'Sandy', 'Kaya', '888', '1999-09-25', 'M', 50, 1, NULL, NULL),
(14, 22, 'Black', 'Kingbar', '888', '1999-09-25', 'M', 50, 1, NULL, NULL),
(15, 14, 'Mant', 'Cytle', '888', '1999-09-25', 'M', 40, 1, NULL, NULL),
(16, 25, 'Neo', 'Next', '888', '1999-09-25', 'M', 105, 2, NULL, NULL),
(17, 25, 'Algernon ', 'Gray', '888', '1999-09-25', 'M', 110, 2, NULL, NULL),
(18, 26, 'Algy', 'Ice', '888', '1999-09-25', 'M', 144, 2, NULL, NULL),
(19, 27, 'Lonny', 'Alons', '888', '1999-09-25', 'M', 133, 2, NULL, NULL),
(20, 28, 'Vinny', 'Pooh', '888', '1999-09-25', 'M', 105, 2, NULL, NULL),
(21, 28, 'Ambie', 'Barber', '888', '1999-09-25', 'M', 110, 2, NULL, NULL),
(22, 30, 'Andrew', 'Drew', '888', '1999-09-25', 'M', 115, 2, NULL, NULL),
(23, 30, 'Ansel', 'Xera', '888', '1999-09-25', 'M', 120, 2, NULL, NULL),
(24, 31, 'Gustus', 'Gooze', '888', '1999-09-25', 'M', 170, 2, NULL, NULL),
(25, 2, 'Nuti', 'Suri', '888', '1999-09-25', 'M', 150, 2, NULL, NULL),
(26, 33, 'Win', 'Loser', '888', '1999-09-25', 'M', 140, 2, NULL, NULL),
(27, 35, 'Barry', 'Barlet', '888', '1999-09-25', 'M', 130, 2, NULL, NULL),
(28, 35, 'Barreta', 'Xacer', '888', '1999-09-25', 'M', 105, 2, NULL, NULL),
(29, 37, 'Batty', 'Bartho', '888', '1999-09-25', 'M', 107, 2, NULL, NULL),
(30, 37, 'Basie', 'Braza', '888', '1999-09-25', 'M', 120, 2, NULL, NULL),
(31, 38, 'Benjamin ', 'Franker', '888', '1999-09-25', 'M', 150, 2, NULL, NULL),
(32, 38, 'Arshavi', 'Lazada', '888', '1999-09-25', 'M', 160, 2, NULL, NULL),
(33, 15, 'Arsene', 'Wengera', '888', '1999-09-25', 'M', 50, 1, NULL, NULL),
(34, 5, 'Julian', 'Cesar', '888', '1999-09-25', 'M', 50, 1, NULL, NULL),
(35, 40, 'William', 'Billy', '888', '1999-09-25', 'M', 160, 2, NULL, NULL),
(36, 41, 'Naruza', 'Uzuma', '888', '1999-09-25', 'M', 222, 3, NULL, NULL),
(37, 41, 'Julian', 'Cesar', '888', '1999-09-25', 'M', 225, 3, NULL, NULL),
(38, 42, 'Ford', 'Honda', '888', '1999-09-25', 'M', 230, 3, NULL, NULL),
(39, 35, 'Romeo', 'Lukaku', '888', '1999-09-25', 'M', 140, 2, NULL, NULL),
(40, 37, 'Inui', 'Yasha', '888', '1999-09-25', 'M', 114, 2, NULL, NULL),
(41, 37, 'Echizen', 'Ryoma', '888', '1999-09-25', 'M', 115, 2, NULL, NULL),
(42, 38, 'Seijuro', 'Calder', '888', '1999-09-25', 'M', 150, 2, NULL, NULL),
(43, 38, 'Carboy', 'Yagazar', '888', '1999-09-25', 'M', 140, 2, NULL, NULL),
(44, 39, 'Aden', 'Yager', '888', '1999-09-25', 'M', 130, 2, NULL, NULL),
(45, 45, 'Hikaru', 'Nogo', '888', '1999-09-25', 'M', 220, 3, NULL, NULL),
(46, 45, 'Sai', 'Lander', '888', '1999-09-25', 'M', 225, 3, NULL, NULL),
(47, 47, 'Cameron ', 'Ron', '888', '1999-09-25', 'M', 230, 3, NULL, NULL),
(48, 47, 'Casper ', 'Laser', '888', '1999-09-25', 'M', 242, 3, NULL, NULL),
(49, 48, 'Ricky', 'Cillis', '888', '1999-09-25', 'M', 252, 3, NULL, NULL),
(50, 49, 'Cristian', 'Ronal', '888', '1999-09-25', 'M', 250, 3, NULL, NULL),
(51, 50, 'Claud', 'Cracker', '888', '1999-09-25', 'M', 260, 3, NULL, NULL),
(52, 50, 'Fortune', 'Cookie', '888', '1999-09-25', 'M', 240, 3, NULL, NULL),
(53, 51, 'Cliff', 'Carer', '888', '1999-09-25', 'M', 220, 3, NULL, NULL),
(54, 52, 'Collin ', 'Careen', '888', '1999-09-25', 'M', 210, 3, NULL, NULL),
(55, 55, 'Dusky', 'Desmond ', '888', '1999-09-25', 'M', 203, 3, NULL, NULL),
(56, 54, 'Domenick ', 'Domarin', '888', '1999-09-25', 'M', 207, 3, NULL, NULL),
(57, 54, 'Dwayne', 'Dwarf', '888', '1999-09-25', 'M', 205, 3, NULL, NULL),
(58, 55, 'Eddie', 'Pheenaruk', '888', '1999-09-25', 'M', 245, 3, NULL, NULL),
(59, 60, 'Alben', 'Istype', '888', '1999-09-25', 'M', 255, 3, NULL, NULL),
(60, 60, 'Julian', 'Cesar', '888', '1999-09-25', 'M', 265, 3, NULL, NULL),
(61, 61, 'Felix ', 'Lix', '888', '1999-09-25', 'M', 335, 4, NULL, NULL),
(62, 62, 'Ferguson', 'Fergie', '888', '1999-09-25', 'M', 350, 4, NULL, NULL),
(63, 64, 'Lloyd', 'Leeroy', '888', '1999-09-25', 'M', 320, 4, NULL, NULL),
(64, 65, 'Francis ', 'Congorang', '888', '1999-09-25', 'M', 330, 4, NULL, NULL),
(65, 68, 'Ragaza', 'Onlin', '888', '1999-09-25', 'M', 350, 4, NULL, NULL),
(66, 70, 'Vitas', 'Opera', '888', '1999-09-25', 'M', 340, 4, NULL, NULL),
(67, 70, 'Fredrick', 'Gege', '888', '1999-09-25', 'M', 320, 4, NULL, NULL),
(68, 69, 'Jeff', 'Jeffery ', '888', '1999-09-25', 'M', 330, 4, NULL, NULL),
(69, 69, 'Bert', 'Romqwan', '888', '1999-09-25', 'M', 332, 4, NULL, NULL),
(70, 72, 'Griffin ', 'Roma', '888', '1999-09-25', 'M', 320, 4, NULL, NULL),
(71, 73, 'Yuyu', 'Hakusho', '888', '1999-09-25', 'M', 370, 4, NULL, NULL),
(72, 73, 'Harvey ', 'Moon', '888', '1999-09-25', 'M', 350, 4, NULL, NULL),
(73, 74, 'Playe', 'Station', '888', '1999-09-25', 'M', 340, 4, NULL, NULL),
(74, 76, 'Plala', 'Stachor', '888', '1999-09-25', 'M', 320, 4, NULL, NULL),
(75, 75, 'Harry', 'Hooky', '888', '1999-09-25', 'M', 310, 4, NULL, NULL),
(76, 74, 'Deva', 'Onlino', '888', '1999-09-25', 'M', 320, 4, NULL, NULL),
(77, 77, 'Horace', 'Horuse', '888', '1999-09-25', 'M', 350, 4, NULL, NULL),
(78, 78, 'Yaphet', 'Shadow', '888', '1999-09-25', 'M', 340, 4, NULL, NULL),
(79, 78, 'Feind', 'Nevermore', '888', '1999-09-25', 'M', 330, 4, NULL, NULL),
(80, 79, 'Mamie', 'Pokko', '888', '1999-09-25', 'M', 315, 4, NULL, NULL),
(81, 81, 'Jackie', 'Challen', '888', '1999-09-25', 'M', 402, 5, NULL, NULL),
(82, 81, 'Tomy', 'Jerra', '888', '1999-09-25', 'M', 405, 5, NULL, NULL),
(83, 83, 'Jonny', 'Albara', '888', '1999-09-25', 'M', 410, 5, NULL, NULL),
(84, 83, 'Joey', 'Boyer', '888', '1999-09-25', 'M', 420, 5, NULL, NULL),
(85, 84, 'Kenny', 'Risky', '888', '1999-09-25', 'M', 450, 5, NULL, NULL),
(86, 85, ' Christopher', 'Colimmus', '888', '1999-09-25', 'M', 430, 5, NULL, NULL),
(87, 88, 'Leon ', 'Lee', '888', '1999-09-25', 'M', 440, 5, NULL, NULL),
(88, 89, 'Leslie', 'Bankin', '888', '1999-09-25', 'M', 450, 5, NULL, NULL),
(89, 91, 'Alonso', 'Lonny', '888', '1999-09-25', 'M', 454, 5, NULL, NULL),
(90, 91, 'Manny', 'Parkyo', '888', '1999-09-25', 'M', 433, 5, NULL, NULL),
(91, 100, 'Matthias ', 'Matter', '888', '1999-09-25', 'M', 420, 5, NULL, NULL),
(92, 93, 'Maximilian ', 'Moohamhud', '888', '1999-09-25', 'M', 405, 5, NULL, NULL),
(93, 95, 'Myles ', 'Mylo', '888', '1999-09-25', 'M', 410, 5, NULL, NULL),
(94, 100, 'Nathan', 'Nara', '888', '1999-09-25', 'M', 423, 5, NULL, NULL),
(95, 99, 'Ozzie', 'Saera', '888', '1999-09-25', 'M', 420, 5, NULL, NULL),
(96, 99, 'Petie', 'Phillip', '888', '1999-09-25', 'M', 450, 5, NULL, NULL),
(97, 99, 'Quicky', 'Silver', '888', '1999-09-25', 'M', 440, 5, NULL, NULL),
(98, 98, 'Ray', 'Reynold', '888', '1999-09-25', 'M', 430, 5, NULL, NULL),
(99, 100, 'Kendrick', 'Duckduck', '888', '1999-09-25', 'M', 420, 5, NULL, NULL),
(100, 101, 'Arcy', 'Warden', '888', '1999-09-25', 'M', 505, 6, NULL, NULL),
(101, 102, 'Aegisa', 'Roshan', '888', '1999-09-25', 'M', 555, 6, NULL, NULL),
(102, 119, 'Chuan', 'Invis', '888', '1999-09-25', 'M', 520, 6, NULL, NULL),
(103, 108, 'Sumail', 'Artaor', '888', '1999-09-25', 'M', 515, 6, NULL, NULL),
(104, 105, 'Arteezy', 'Imdone', '888', '1999-09-25', 'M', 526, 6, NULL, NULL),
(105, 104, 'Kise', 'Ryota', '888', '1999-09-25', 'M', 520, 6, NULL, NULL),
(106, 105, 'Akashi', 'Seijuro', '888', '1999-09-25', 'M', 525, 6, NULL, NULL),
(107, 106, 'Mido', 'Rima', '888', '1999-09-25', 'M', 510, 6, NULL, NULL),
(108, 110, 'Thomas ', 'Edisa', '888', '1999-09-25', 'M', 530, 6, NULL, NULL),
(109, 109, 'Treeof', 'Xavier', '888', '1999-09-25', 'M', 514, 6, NULL, NULL),
(110, 108, 'Uriah', 'Huha', '888', '1999-09-25', 'M', 520, 6, NULL, NULL),
(111, 108, 'Wallis ', 'Larana', '888', '1999-09-25', 'M', 540, 6, NULL, NULL),
(112, 115, 'Woody', 'Talkma', '888', '1999-09-25', 'M', 550, 6, NULL, NULL),
(113, 111, 'Chala', 'Headsha', '888', '1999-09-25', 'M', 560, 6, NULL, NULL),
(114, 102, 'Wayne', 'Loona', '888', '1999-09-25', 'M', 525, 6, NULL, NULL),
(115, 5, 'Yaya', 'Toure', '888', '1999-09-25', 'M', 60, 1, NULL, NULL),
(116, 118, 'Drink', 'Water', '888', '1999-09-25', 'M', 540, 6, NULL, NULL),
(117, 119, 'Lomon', 'Sweat', '888', '1999-09-25', 'M', 520, 6, NULL, NULL),
(118, 120, 'Tom', 'Cruise', '888', '1999-09-25', 'M', 525, 6, NULL, NULL),
(119, 120, 'Mikael', 'Arteta', '888', '1999-09-25', 'M', 530, 6, NULL, NULL),
(120, 5, 'Ramsry', 'Aeron', '888', '1999-09-25', 'M', 50, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prisoner_officer`
--

CREATE TABLE `prisoner_officer` (
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `id_officer` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prisoner_officer`
--

INSERT INTO `prisoner_officer` (`id_prisoner`, `id_officer`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(4, 2, NULL, NULL),
(5, 2, NULL, NULL),
(6, 2, NULL, NULL),
(7, 3, NULL, NULL),
(8, 3, NULL, NULL),
(9, 4, NULL, NULL),
(10, 4, NULL, NULL),
(11, 5, NULL, NULL),
(12, 6, NULL, NULL),
(13, 7, NULL, NULL),
(14, 7, NULL, NULL),
(15, 8, NULL, NULL),
(16, 9, NULL, NULL),
(17, 10, NULL, NULL),
(18, 11, NULL, NULL),
(19, 12, NULL, NULL),
(20, 14, NULL, NULL),
(21, 14, NULL, NULL),
(22, 14, NULL, NULL),
(23, 15, NULL, NULL),
(24, 15, NULL, NULL),
(25, 15, NULL, NULL),
(26, 16, NULL, NULL),
(27, 16, NULL, NULL),
(28, 17, NULL, NULL),
(29, 17, NULL, NULL),
(30, 18, NULL, NULL),
(31, 18, NULL, NULL),
(32, 20, NULL, NULL),
(33, 19, NULL, NULL),
(34, 19, NULL, NULL),
(35, 20, NULL, NULL),
(36, 21, NULL, NULL),
(37, 21, NULL, NULL),
(38, 22, NULL, NULL),
(39, 22, NULL, NULL),
(40, 23, NULL, NULL),
(41, 23, NULL, NULL),
(42, 24, NULL, NULL),
(43, 24, NULL, NULL),
(44, 25, NULL, NULL),
(45, 26, NULL, NULL),
(46, 28, NULL, NULL),
(47, 28, NULL, NULL),
(48, 29, NULL, NULL),
(49, 29, NULL, NULL),
(50, 30, NULL, NULL),
(51, 30, NULL, NULL),
(52, 31, NULL, NULL),
(53, 31, NULL, NULL),
(54, 32, NULL, NULL),
(55, 32, NULL, NULL),
(56, 33, NULL, NULL),
(57, 33, NULL, NULL),
(58, 34, NULL, NULL),
(59, 34, NULL, NULL),
(60, 35, NULL, NULL),
(61, 35, NULL, NULL),
(62, 36, NULL, NULL),
(63, 37, NULL, NULL),
(64, 36, NULL, NULL),
(65, 36, NULL, NULL),
(66, 37, NULL, NULL),
(67, 38, NULL, NULL),
(68, 38, NULL, NULL),
(69, 38, NULL, NULL),
(70, 39, NULL, NULL),
(71, 39, NULL, NULL),
(72, 40, NULL, NULL),
(73, 40, NULL, NULL),
(74, 41, NULL, NULL),
(75, 41, NULL, NULL),
(76, 42, NULL, NULL),
(77, 43, NULL, NULL),
(78, 45, NULL, NULL),
(79, 42, NULL, NULL),
(80, 43, NULL, NULL),
(81, 44, NULL, NULL),
(82, 45, NULL, NULL),
(83, 46, NULL, NULL),
(84, 46, NULL, NULL),
(85, 47, NULL, NULL),
(86, 47, NULL, NULL),
(87, 48, NULL, NULL),
(88, 48, NULL, NULL),
(89, 49, NULL, NULL),
(90, 49, NULL, NULL),
(91, 50, NULL, NULL),
(92, 51, NULL, NULL),
(93, 51, NULL, NULL),
(94, 52, NULL, NULL),
(95, 53, NULL, NULL),
(96, 53, NULL, NULL),
(97, 54, NULL, NULL),
(98, 54, NULL, NULL),
(99, 55, NULL, NULL),
(100, 56, NULL, NULL),
(101, 57, NULL, NULL),
(102, 57, NULL, NULL),
(103, 58, NULL, NULL),
(104, 58, NULL, NULL),
(105, 59, NULL, NULL),
(106, 59, NULL, NULL),
(107, 60, NULL, NULL),
(108, 60, NULL, NULL),
(109, 61, NULL, NULL),
(110, 62, NULL, NULL),
(111, 62, NULL, NULL),
(112, 62, NULL, NULL),
(113, 63, NULL, NULL),
(114, 63, NULL, NULL),
(115, 64, NULL, NULL),
(116, 64, NULL, NULL),
(117, 65, NULL, NULL),
(118, 65, NULL, NULL),
(119, 2, NULL, NULL),
(120, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relatives`
--

CREATE TABLE `relatives` (
  `id_relative` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `contractdetail` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `relatives`
--

INSERT INTO `relatives` (`id_relative`, `name`, `contractdetail`, `created_at`, `updated_at`) VALUES
(1, 'inwark', '08211111', NULL, NULL),
(2, 'inwark2', '082525251', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visithistory`
--

CREATE TABLE `visithistory` (
  `id_visit` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contract_detail` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Datetime` datetime NOT NULL,
  `id_prisoner` int(10) UNSIGNED NOT NULL,
  `id_officer` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visithistory`
--

INSERT INTO `visithistory` (`id_visit`, `name`, `item`, `contract_detail`, `Datetime`, `id_prisoner`, `id_officer`, `created_at`, `updated_at`) VALUES
(1, 'Y', 'box', 'aasdadsd', '1997-08-25 00:00:00', 1, 3, NULL, NULL),
(2, 'uY', 'boux', 'aasdadsd', '1997-08-25 00:00:00', 2, 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`),
  ADD KEY `areas_id_jail_foreign` (`id_jail`);

--
-- Indexes for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD PRIMARY KEY (`id_case`),
  ADD KEY `casedetails_id_prisoner_foreign` (`id_prisoner`);

--
-- Indexes for table `cells`
--
ALTER TABLE `cells`
  ADD PRIMARY KEY (`id_cell`),
  ADD KEY `cells_id_area_foreign` (`id_area`);

--
-- Indexes for table `eventactivities`
--
ALTER TABLE `eventactivities`
  ADD KEY `eventactivities_id_activity_foreign` (`id_activity`),
  ADD KEY `eventactivities_id_area_foreign` (`id_area`);

--
-- Indexes for table `freeprisonhistory`
--
ALTER TABLE `freeprisonhistory`
  ADD PRIMARY KEY (`id_freeprison`),
  ADD KEY `freeprisonhistory_id_prisoner_foreign` (`id_prisoner`);

--
-- Indexes for table `haverelative`
--
ALTER TABLE `haverelative`
  ADD KEY `haverelative_id_relative_foreign` (`id_relative`),
  ADD KEY `haverelative_id_prisoner_foreign` (`id_prisoner`);

--
-- Indexes for table `jails`
--
ALTER TABLE `jails`
  ADD PRIMARY KEY (`id_jail`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `managecase`
--
ALTER TABLE `managecase`
  ADD KEY `managecase_id_case_foreign` (`id_case`),
  ADD KEY `managecase_id_officer_foreign` (`id_officer`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id_officer`),
  ADD KEY `officers_id_area_foreign` (`id_area`);

--
-- Indexes for table `plusscore`
--
ALTER TABLE `plusscore`
  ADD KEY `plusscore_id_activity_foreign` (`id_activity`),
  ADD KEY `plusscore_id_prisoner_foreign` (`id_prisoner`);

--
-- Indexes for table `prisonerbehavioralhistory`
--
ALTER TABLE `prisonerbehavioralhistory`
  ADD PRIMARY KEY (`id_behav`),
  ADD KEY `prisonerbehavioralhistory_id_prisoner_foreign` (`id_prisoner`),
  ADD KEY `prisonerbehavioralhistory_id_officer_foreign` (`id_officer`);

--
-- Indexes for table `prisonereducepunishmenthistory`
--
ALTER TABLE `prisonereducepunishmenthistory`
  ADD PRIMARY KEY (`id_reducehis`),
  ADD KEY `prisonereducepunishmenthistory_id_prisoner_foreign` (`id_prisoner`);

--
-- Indexes for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`id_prisoner`),
  ADD KEY `prisoners_id_level_foreign` (`id_level`),
  ADD KEY `prisoners_id_cell_foreign` (`id_cell`);

--
-- Indexes for table `prisoner_officer`
--
ALTER TABLE `prisoner_officer`
  ADD KEY `prisoner_officer_id_prisoner_foreign` (`id_prisoner`),
  ADD KEY `prisoner_officer_id_officer_foreign` (`id_officer`);

--
-- Indexes for table `relatives`
--
ALTER TABLE `relatives`
  ADD PRIMARY KEY (`id_relative`);

--
-- Indexes for table `visithistory`
--
ALTER TABLE `visithistory`
  ADD PRIMARY KEY (`id_visit`),
  ADD KEY `visithistory_id_prisoner_foreign` (`id_prisoner`),
  ADD KEY `visithistory_id_officer_foreign` (`id_officer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_id_jail_foreign` FOREIGN KEY (`id_jail`) REFERENCES `jails` (`id_jail`) ON DELETE CASCADE;

--
-- Constraints for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD CONSTRAINT `casedetails_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE;

--
-- Constraints for table `cells`
--
ALTER TABLE `cells`
  ADD CONSTRAINT `cells_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE;

--
-- Constraints for table `eventactivities`
--
ALTER TABLE `eventactivities`
  ADD CONSTRAINT `eventactivities_id_activity_foreign` FOREIGN KEY (`id_activity`) REFERENCES `activities` (`id_activity`) ON DELETE CASCADE,
  ADD CONSTRAINT `eventactivities_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE;

--
-- Constraints for table `freeprisonhistory`
--
ALTER TABLE `freeprisonhistory`
  ADD CONSTRAINT `freeprisonhistory_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE;

--
-- Constraints for table `haverelative`
--
ALTER TABLE `haverelative`
  ADD CONSTRAINT `haverelative_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE,
  ADD CONSTRAINT `haverelative_id_relative_foreign` FOREIGN KEY (`id_relative`) REFERENCES `relatives` (`id_relative`) ON DELETE CASCADE;

--
-- Constraints for table `managecase`
--
ALTER TABLE `managecase`
  ADD CONSTRAINT `managecase_id_case_foreign` FOREIGN KEY (`id_case`) REFERENCES `casedetails` (`id_case`) ON DELETE CASCADE,
  ADD CONSTRAINT `managecase_id_officer_foreign` FOREIGN KEY (`id_officer`) REFERENCES `officers` (`id_officer`) ON DELETE CASCADE;

--
-- Constraints for table `officers`
--
ALTER TABLE `officers`
  ADD CONSTRAINT `officers_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE;

--
-- Constraints for table `plusscore`
--
ALTER TABLE `plusscore`
  ADD CONSTRAINT `plusscore_id_activity_foreign` FOREIGN KEY (`id_activity`) REFERENCES `activities` (`id_activity`) ON DELETE CASCADE,
  ADD CONSTRAINT `plusscore_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE;

--
-- Constraints for table `prisonerbehavioralhistory`
--
ALTER TABLE `prisonerbehavioralhistory`
  ADD CONSTRAINT `prisonerbehavioralhistory_id_officer_foreign` FOREIGN KEY (`id_officer`) REFERENCES `officers` (`id_officer`) ON DELETE CASCADE,
  ADD CONSTRAINT `prisonerbehavioralhistory_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE;

--
-- Constraints for table `prisonereducepunishmenthistory`
--
ALTER TABLE `prisonereducepunishmenthistory`
  ADD CONSTRAINT `prisonereducepunishmenthistory_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE;

--
-- Constraints for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD CONSTRAINT `prisoners_id_cell_foreign` FOREIGN KEY (`id_cell`) REFERENCES `cells` (`id_cell`) ON DELETE CASCADE,
  ADD CONSTRAINT `prisoners_id_level_foreign` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id_level`) ON DELETE CASCADE;

--
-- Constraints for table `prisoner_officer`
--
ALTER TABLE `prisoner_officer`
  ADD CONSTRAINT `prisoner_officer_id_officer_foreign` FOREIGN KEY (`id_officer`) REFERENCES `officers` (`id_officer`) ON DELETE CASCADE,
  ADD CONSTRAINT `prisoner_officer_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE;

--
-- Constraints for table `visithistory`
--
ALTER TABLE `visithistory`
  ADD CONSTRAINT `visithistory_id_officer_foreign` FOREIGN KEY (`id_officer`) REFERENCES `officers` (`id_officer`) ON DELETE CASCADE,
  ADD CONSTRAINT `visithistory_id_prisoner_foreign` FOREIGN KEY (`id_prisoner`) REFERENCES `prisoners` (`id_prisoner`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
