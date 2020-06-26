-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2020 at 03:42 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mammaskitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'asdas', 'faf', '2020-06-24 18:17:00', '2020-06-17 18:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

DROP TABLE IF EXISTS `cats`;
CREATE TABLE IF NOT EXISTS `cats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'iasdkhg', 'iasdkhg', '2020-06-25 08:51:56', '2020-06-25 08:51:56'),
(3, 'Md Talat Mahmud', 'md-talat-mahmud', '2020-06-25 09:00:17', '2020-06-25 09:00:17'),
(4, 'tlt', 'tlt', '2020-06-25 09:01:12', '2020-06-25 09:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_01_071503_create_sliders_table', 2),
(7, '2020_06_23_095209_create_categories_table', 3),
(8, '2020_06_23_113113_create_cats_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(3, 'kasdhfsdhfiii', 'ryoweiyraie', 'default.png', '2020-05-12 00:20:14', '2020-06-21 08:31:06'),
(4, 'aasnflsd', 'nalsnvs', 'default.png', '2020-05-20 00:00:18', '2020-05-20 02:00:00'),
(7, 'aosfosufsd', 'vsbdivsdv', 'default.png', NULL, NULL),
(8, 'slnvsodvs', 'sdhfsf', 'default.png', NULL, NULL),
(9, 'ansvsd', 'yfihfsf', 'default.png', NULL, NULL),
(10, 'nvasbvs', 'bvasbvs', 'default.png', NULL, NULL),
(11, 'uyreriter', 'vashdvi', 'default.png', NULL, NULL),
(14, 'Online Health Care System', 'asdasd', 'default.png', '2020-05-02 04:52:06', '2020-05-02 04:52:06'),
(15, 'Top-up IT Training', 'asas', 'default.png', '2020-05-02 04:53:33', '2020-05-02 04:53:33'),
(16, 'asda', 'asdasd', 'default.png', '2020-05-02 04:58:26', '2020-05-02 04:58:26'),
(17, 'aa', 'aa', 'default.png', '2020-05-03 00:05:08', '2020-05-03 00:05:08'),
(18, 'yy', 'yy', 'default.png', '2020-05-03 03:05:10', '2020-05-03 03:05:10'),
(19, 'ttt', 'ttt', 'default.png', '2020-05-03 03:07:08', '2020-05-03 03:07:08'),
(20, 'new', 'new', 'default.png', '2020-05-03 03:10:15', '2020-05-03 03:10:15'),
(21, 'Top-up IT Training', 'asas', 'default.png', '2020-05-03 03:43:31', '2020-05-03 03:43:31'),
(22, 'qq', 'asas', 'default.png', '2020-05-03 03:44:17', '2020-05-03 03:44:17'),
(23, 'Top-up IT Training', 'asas', 'default.png', '2020-05-03 03:46:36', '2020-05-03 03:46:36'),
(24, 'Online Health Care System', 'qq', 'default.png', '2020-05-03 03:49:04', '2020-05-03 03:49:04'),
(25, 'Top-up IT Training', 'aa', 'default.png', '2020-05-03 03:50:24', '2020-05-03 03:50:24'),
(26, 'test', 'test', 'test-2020-05-03-5eae9537744be.jpg', '2020-05-03 03:56:07', '2020-05-03 03:56:07'),
(27, 'asda', 'qq', 'asda-2020-05-03-5eae957eabb76.png', '2020-05-03 03:57:18', '2020-05-03 03:57:18'),
(28, 'qqqw', 'adsd', 'qqqw-2020-05-03-5eae962acda41.jpg', '2020-05-03 04:00:10', '2020-05-03 04:00:10'),
(29, 'Laboratory information management system (LIMS)', 'asas', 'laboratory-information-management-system-lims-2020-05-03-5eae99b41f947.jpg', '2020-05-03 04:15:16', '2020-05-03 04:15:16'),
(30, 'asda', 'qq', 'asda-2020-05-03-5eae9a1e569ad.jpg', '2020-05-03 04:17:02', '2020-05-03 04:17:02'),
(31, 'Top-up IT Training', 'asas', 'top-up-it-training-2020-05-03-5eae9af9ae876.jpg', '2020-05-03 04:20:41', '2020-05-03 04:20:41'),
(33, 'Top-up IT Training', 'asas', 'top-up-it-training-2020-05-03-5eae9ce148c74.jpg', '2020-05-03 04:28:49', '2020-05-03 04:28:49'),
(34, 'asddfgd', 'qq', 'asddfgd-2020-05-03-5eae9f76d7d43.jpg', '2020-05-03 04:39:50', '2020-05-03 04:39:50'),
(35, 'asda', 'asdasd', 'asda-2020-05-03-5eae9fc5e7e51.jpg', '2020-05-03 04:41:09', '2020-05-03 04:41:09'),
(36, 'new', 'new', 'new-2020-06-23-5ef1d7a036064.JPG', '2020-06-23 04:21:20', '2020-06-23 04:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Talat Mahmud', 'talatmahmudporag@yahoo.com', NULL, 'bf2cb58a68f684d95a3b78ef8f661c9a4e5b09e82cc8f9cc88cce90528caeb27', NULL, '2020-04-30 05:04:17', '2020-04-30 05:04:17'),
(2, 'Talat', 'md.talatcse@yahoo.com', NULL, 'bf2cb58a68f684d95a3b78ef8f661c9a4e5b09e82cc8f9cc88cce90528caeb27', NULL, NULL, NULL),
(3, 'Mahmud', 'md.talatcse@gmail.com', '2020-06-09 05:00:00', 'bf2cb58a68f684d95a3b78ef8f661c9a4e5b09e82cc8f9cc88cce90528caeb27', NULL, '2020-06-10 00:00:00', '2020-06-16 18:00:00'),
(4, 'Talat', 'md.talatcse@abc.com', NULL, '$2y$10$C7oohleaX.3PZfH7XQiiLulvQTIvr51rZ7USmnPLohgIgqMzX6Lc.', NULL, '2020-06-20 09:05:34', '2020-06-20 09:05:34'),
(5, 'y', 'y@gmail.com', NULL, '$2y$10$Rk5L7NoD3do9/F5fi2FvkuEER.7GPTfYXaGQGRPLPcweMlX9bYNXy', NULL, '2020-06-21 08:12:26', '2020-06-21 08:12:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
