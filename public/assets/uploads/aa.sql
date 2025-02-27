-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2025 at 07:02 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u455025027_abosor`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'আমাদের প্রকল্প সম্পর্কে আলোচনা করা যাক', 'অবসর\r\nবহুমুখী প্রকল্পের স্বপ্নের সেতু', 'uploads/about/left-image.png', '2024-06-09 12:14:59', '2024-06-27 04:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `bank_payment_getways`
--

CREATE TABLE `bank_payment_getways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_payment_getways`
--

INSERT INTO `bank_payment_getways` (`id`, `bank_name`, `account_name`, `account_number`, `branch_name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'IBBL', 'MD OMAR FARUQUE', '20507770202728299', 'Khagrachori', 'uploads/payment-getway/1719688535-payment-getway.png', '2024-06-29 19:15:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(69, 36, 'Fund Added', 'uploads/documents/36970875234166623383.pdf', '2025-02-16 14:35:02', NULL),
(70, 36, 'Fund Added', 'uploads/documents/3685175254383059689.pdf', '2025-02-17 09:18:57', NULL),
(71, 36, 'Fund Added', 'uploads/documents/3691419496357163995.pdf', '2025-02-23 05:15:53', NULL),
(72, 36, 'Fund Added', 'uploads/documents/36126292179357351858.pdf', '2025-02-23 05:19:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

CREATE TABLE `dues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_areas`
--

CREATE TABLE `featured_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_areas`
--

INSERT INTO `featured_areas` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'সহজ ডিজিটাল প্ল্যাটফর্ম', 'uploads/featured/featured-item-01.png', '2024-06-09 12:14:59', NULL),
(2, 'আপনার প্রতিষ্ঠানের উপযোগী', 'uploads/featured/featured-item-01.png', '2024-06-09 12:14:59', NULL),
(3, 'আনলিমিটেড অ্যাক্সেস', 'uploads/featured/featured-item-01.png', '2024-06-09 12:14:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `getway_id` bigint(20) UNSIGNED NOT NULL,
  `sender_number` varchar(255) DEFAULT NULL,
  `amount` double(8,2) NOT NULL,
  `trx_id` varchar(255) DEFAULT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `type` enum('mobile-banking','bank-details','cash') NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `payment_status` enum('due','main') NOT NULL DEFAULT 'main',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `user_id`, `getway_id`, `sender_number`, `amount`, `trx_id`, `month`, `year`, `type`, `status`, `payment_status`, `created_at`, `updated_at`) VALUES
(79, 36, 1, '01745543676', 6000.00, '123456', 'January', '2024', 'mobile-banking', 'approved', 'main', '2025-02-16 14:33:08', '2025-02-16 14:35:01'),
(80, 36, 1, '01871268155', 6000.00, '1708', 'January', '2025', 'mobile-banking', 'approved', 'main', '2025-02-17 09:18:40', '2025-02-17 09:18:56'),
(81, 36, 0, NULL, 6000.00, 'N/A', 'January', '2025', 'cash', 'approved', 'main', '2025-02-23 05:15:52', NULL),
(82, 36, 0, NULL, 6000.00, 'N/A', 'March', '2025', 'cash', 'approved', 'main', '2025-02-23 05:19:53', NULL),
(83, 36, 0, NULL, 6000.00, 'N/A', 'January', '2024', 'cash', 'approved', 'main', '2025-02-24 07:09:40', NULL),
(84, 36, 0, NULL, 6000.00, 'N/A', 'January', '2024', 'cash', 'approved', 'main', '2025-02-24 07:11:09', NULL),
(85, 36, 0, NULL, 6000.00, 'N/A', 'January', '2024', 'cash', 'approved', 'main', '2025-02-24 07:13:18', NULL),
(86, 36, 1, '01745543676', 6000.00, '12345665', 'January', '2024', 'mobile-banking', 'pending', 'main', '2025-02-24 07:18:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invests`
--

CREATE TABLE `invests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `profit` double(8,2) DEFAULT NULL,
  `monthly_profit` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invests`
--

INSERT INTO `invests` (`id`, `name`, `amount`, `profit`, `monthly_profit`, `created_at`, `updated_at`) VALUES
(8, 'developer2', 44.00, 9.00, 4, '2025-02-11 13:52:29', '2025-02-11 13:59:29'),
(9, 'developer3', 324.00, 77.00, 43, '2025-02-11 13:59:49', '2025-02-11 14:00:00'),
(10, 'developer56', 234.00, 70.00, 3, '2025-02-11 16:53:06', '2025-02-11 16:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `invest_profit_histories`
--

CREATE TABLE `invest_profit_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invest_id` bigint(20) UNSIGNED NOT NULL,
  `monthly_profit` decimal(10,2) NOT NULL,
  `profit_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invest_profit_histories`
--

INSERT INTO `invest_profit_histories` (`id`, `invest_id`, `monthly_profit`, `profit_date`, `created_at`, `updated_at`) VALUES
(1, 12, 5.00, '2025-02-11', '2025-02-11 03:50:06', '2025-02-11 03:50:06'),
(2, 12, 54.00, '2025-02-11', '2025-02-11 07:28:57', '2025-02-11 07:28:57'),
(3, 8, 3.00, '2025-02-11', '2025-02-11 13:52:52', '2025-02-11 13:52:52'),
(4, 1, 23.00, '2025-02-11', '2025-02-11 13:58:44', '2025-02-11 13:58:44'),
(5, 8, 4.00, '2025-02-11', '2025-02-11 13:59:29', '2025-02-11 13:59:29'),
(6, 9, 43.00, '2025-02-11', '2025-02-11 14:00:00', '2025-02-11 14:00:00'),
(7, 10, 34.00, '2025-02-11', '2025-02-11 16:53:26', '2025-02-11 16:53:26'),
(8, 10, 3.00, '2025-02-11', '2025-02-11 16:54:55', '2025-02-11 16:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_27_061820_create_settings_table', 1),
(6, '2024_03_13_171916_create_pages_table', 1),
(7, '2024_03_17_131220_create_teams_table', 1),
(8, '2024_03_17_153337_create_abouts_table', 1),
(9, '2024_03_17_175321_create_work_processes_table', 1),
(10, '2024_03_18_053443_create_welcome_areas_table', 1),
(11, '2024_03_18_162353_create_featured_areas_table', 1),
(12, '2024_03_19_135259_create_mobile_payment_getways_table', 1),
(13, '2024_03_19_142654_create_bank_payment_getways_table', 1),
(14, '2024_03_20_060936_create_shares_table', 1),
(15, '2024_03_21_200958_create_funds_table', 1),
(16, '2024_03_22_202205_create_documents_table', 1),
(17, '2024_03_24_100522_create_dues_table', 1),
(18, '2024_03_24_111219_create_invests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payment_getways`
--

CREATE TABLE `mobile_payment_getways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_type` enum('personal','agent') NOT NULL DEFAULT 'personal',
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_payment_getways`
--

INSERT INTO `mobile_payment_getways` (`id`, `account_name`, `account_number`, `account_type`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'BKASH', '01875265155', 'personal', 'uploads/payment-getway/1719688399-payment-getway.png', '2024-06-15 08:49:42', '2024-06-29 19:30:36'),
(2, 'NAGAD', '01875268155', 'personal', 'uploads/payment-getway/1719688426-payment-getway.png', '2024-06-29 16:32:58', '2024-06-29 19:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, quibusdam!', '2024-06-09 12:14:59', NULL),
(2, 'Trams & Condition', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, quibusdam!', '2024-06-09 12:14:59', NULL),
(3, 'DMCA', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, quibusdam!', '2024-06-09 12:14:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'title', 'Site Title', '2024-06-09 12:14:58', '2024-06-27 03:45:22'),
(2, 'logo', 'uploads/default/1719459922-logo.png', '2024-06-09 12:14:58', '2024-06-27 03:45:22'),
(3, 'favicon', 'uploads/default/default-favicon.png', '2024-06-09 12:14:58', NULL),
(4, 'author_name', 'Admin', '2024-06-09 12:14:58', NULL),
(5, 'meta_keyword', 'keyword-1,keyword-2,keyword-3,keyword-4,keyword-5', '2024-06-09 12:14:58', NULL),
(6, 'meta_tags', 'tag-1,tag-2,tag-3,tag-4,tag-5', '2024-06-09 12:14:58', NULL),
(7, 'meta_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,', '2024-06-09 12:14:58', NULL),
(8, 'facebook', '0', '2024-06-09 12:14:58', NULL),
(9, 'twitter', '0', '2024-06-09 12:14:58', NULL),
(10, 'google', '0', '2024-06-09 12:14:58', NULL),
(11, 'linkedin', '0', '2024-06-09 12:14:58', NULL),
(12, 'google_client_id', NULL, '2024-06-09 12:14:58', NULL),
(13, 'google_client_secret', NULL, '2024-06-09 12:14:58', NULL),
(14, 'facebook_app_id', NULL, '2024-06-09 12:14:58', NULL),
(15, 'facebook_client_secret', NULL, '2024-06-09 12:14:58', NULL),
(16, 'twitter_client_id', NULL, '2024-06-09 12:14:58', NULL),
(17, 'twitter_client_secret', NULL, '2024-06-09 12:14:58', NULL),
(18, 'linkedin_client_id', NULL, '2024-06-09 12:14:58', NULL),
(19, 'linkedin_client_secret', NULL, '2024-06-09 12:14:58', NULL),
(20, 'mail_transport', 'smtp', '2024-06-09 12:14:58', NULL),
(21, 'mail_host', 'smtp.mailtrap.io', '2024-06-09 12:14:58', NULL),
(22, 'mail_port', '2525', '2024-06-09 12:14:58', NULL),
(23, 'mail_username', '028d59157d3fe0', '2024-06-09 12:14:58', NULL),
(24, 'mail_password', '3b06bc96a55072', '2024-06-09 12:14:58', NULL),
(25, 'mail_encryption', 'tls', '2024-06-09 12:14:58', NULL),
(26, 'mail_from', 'example@test.com', '2024-06-09 12:14:58', NULL),
(27, 'mail_from_name', 'Test', '2024-06-09 12:14:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `status` enum('pending','accept','rejected','deactive') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `name`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(37, 36, 'md alauddin', 2000.00, 'accept', '2024-06-29 19:31:42', '2024-06-29 19:36:05'),
(38, 36, 'md alauddin', 2000.00, 'accept', '2024-06-29 19:31:47', '2024-06-29 19:36:03'),
(39, 61, 'pulak', 2000.00, 'accept', '2025-02-10 11:11:28', '2025-02-10 18:13:28'),
(40, 61, 'pulak', 2000.00, 'accept', '2025-02-10 15:34:05', '2025-02-10 18:13:26'),
(41, 61, 'pulak', 2000.00, 'accept', '2025-02-10 17:26:20', '2025-02-10 18:13:24'),
(42, 61, 'developer', 2000.00, 'accept', '2025-02-10 18:08:16', '2025-02-10 18:13:22'),
(43, 36, 'md alauddin', 2000.00, 'accept', '2025-02-11 12:25:54', '2025-02-11 12:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `tw_link` varchar(255) DEFAULT NULL,
  `ins_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `fb_link`, `tw_link`, `ins_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MD ALAUDDIN', 'ক্যাশিয়ার', 'https://www.facebook.com/ala.uddinridoy.16/', NULL, NULL, 'uploads/team/1719946628-image.jpeg', '2024-07-01 09:15:18', '2024-07-02 18:57:08'),
(2, 'ABDUL MALEK', 'সভাপতি', NULL, NULL, NULL, 'uploads/team/1719825344-image.jpg', '2024-07-01 09:15:44', '2024-07-01 09:18:40'),
(3, 'MD OMAR FARUQUE', 'সহ সেক্রেটারি', NULL, NULL, NULL, 'uploads/team/1719946582-image.jpeg', '2024-07-01 09:20:02', '2024-07-02 18:56:22'),
(4, 'MD AMIR HOSSAIN', 'সেক্রেটারি', NULL, NULL, NULL, 'uploads/team/1719825675-image.jpg', '2024-07-01 09:21:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `profile` varchar(255) NOT NULL DEFAULT 'uploads/profile/profile-img.png',
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `total_fund` double(8,2) NOT NULL DEFAULT 0.00,
  `total_due` double(8,2) NOT NULL DEFAULT 0.00,
  `profile_id` int(11) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `education_qualification` varchar(255) DEFAULT NULL,
  `passport_or_nid_type` varchar(255) DEFAULT NULL,
  `passport_or_nid_number` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `date_of_birth` timestamp NULL DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `word_no` varchar(255) DEFAULT NULL,
  `post_office` varchar(255) DEFAULT NULL,
  `thana` varchar(255) DEFAULT NULL,
  `upzilla` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `provider`, `provider_id`, `profile`, `role`, `total_fund`, `total_due`, `profile_id`, `father_name`, `mother_name`, `phone_number`, `education_qualification`, `passport_or_nid_type`, `passport_or_nid_number`, `religion`, `date_of_birth`, `nationality`, `blood_group`, `occupation`, `village`, `word_no`, `post_office`, `thana`, `upzilla`, `district`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ABOSOR', 'admin@gmail.com', NULL, '$2y$10$7XsN9vfv/MdxPD05/WEKE.BewYJNasjMjtWjHjEdQ66R9a78vaZc6', NULL, NULL, 'uploads/profile/1719555030-profile-image.jpg', 'admin', 0.00, 0.00, 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7gYK0JeZTelsOwp643AkEUbSMuJzuCz3bI13z1AW83fXZjdJSkYU5kS2wPap', '2024-06-09 12:14:58', '2024-06-28 06:10:47'),
(4, 'Admin2', 'admin1@gmail.com', NULL, '$2y$10$7XsN9vfv/MdxPD05/WEKE.BewYJNasjMjtWjHjEdQ66R9a78vaZc6', NULL, NULL, 'uploads/profile/profile-img.png', 'admin', 0.00, 0.00, 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-09 12:14:58', NULL),
(22, 'Md Abdul Malek', 'amalek638@gmail.com', '2024-06-29 18:36:13', '$2y$10$ljjRjrjPUlX1YSOO2Kbbbek49i0rx/Pj9D.gHyWicCB/T7jEIdi/y', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 502, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:36:13'),
(23, 'Md Zia Uddin', 'mumtakin@gmail.com', '2024-06-29 18:43:33', '$2y$10$VPBswj0NoFU.pZCnqNl7bOnKfW3dgEqB3WwTWkckXmXSdCfa27fnK', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 503, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:43:33'),
(24, 'Md Omer Faruk', 'rsislamictv24@gmail.com', '2024-06-29 18:43:28', '$2y$10$kOEH4z2q7a6eOWn3/J9sOusfxY4kMIORe2sKG2Pe.56pDzuWBcCm.', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 504, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:43:28'),
(26, 'Md Nazrul Islam', 'nazrulislam582414@gmail.com', '2024-06-29 18:43:26', '$2y$10$oK55dinwCTDsmHAHsdRC5eHmTjTZDfqjOgsyKfOsZF/UJBkYgTvD6', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 506, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:43:26'),
(27, 'Md Riaajul Amin Parvej', 'parvez.bd770@gmail.com', '2024-06-29 18:43:31', '$2y$10$6uPJOsEJWAi.UY.5AHkBV.hP1gV3DydSxBDdz.XG0hONOQbSdzS.K', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 507, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:43:31'),
(28, 'Md Ariful Islam', 'kingarifulctg@gmail.com', '2024-06-29 18:43:18', '$2y$10$EDdqXl7FilnEZGDIC0cd5OCmDk483xICsEbLv33LBN2fgGzquYl7O', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 508, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:43:18'),
(29, 'Nur Mohammed Babu', 'nurmohammed1052002@gmail.com', '2024-09-30 19:21:30', '$2y$10$5lwRBOTYR8Rg8Zm8P97OVe4LyGQG0IATLz3qdukeBclTmpv8M0nhG', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 509, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-30 19:21:30'),
(30, 'Md Iddis Mia', 'omanb571@gmail.com', '2024-06-29 18:43:20', '$2y$10$TK4bDIJCWWghX9zt1i1KSuV5jgvllp4a08FTJyyx5.GLhh86n..yC', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 510, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:43:20'),
(31, 'Md Kausar Hossain', 'mdkausarhosenbd@gmail.com', '2024-06-29 18:43:23', '$2y$10$2pvtmc4XFE4EuEkxuQd.9.BymFOP8y6hdm7k7/ItqwXd2tvbQc0zG', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 511, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:43:23'),
(32, 'Mir Hossen', 'mirhossain5365@gmail.com', '2024-09-30 19:21:12', '$2y$10$DaAf3nRwX3bDCS/YJ3b7D.2.DweeYbJxqYQAKftptZo.qp7NdgHiq', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 512, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-30 19:21:12'),
(33, 'Md Amir Hossain', 'Amirhossen@gmail.com', '2024-06-29 18:46:16', '$2y$10$zopGMGfvnGwUDqmj/qLHFunkbErNrMRUhzsGMr7fG8WoxnMMP0oOK', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 513, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:46:16'),
(34, 'Md Abdul Kuddus', 'abdulkuddus@gmail.com', '2024-06-29 18:46:13', '$2y$10$ZBlbOCw/VC/MGrrf5RAYIePw0d81/7s6/zfqg3oqEnSd8fLXMzUk.', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 514, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:46:13'),
(35, 'Md Jahangir Hossain', 'jahangir143a@gmail.com', '2024-06-29 18:46:18', '$2y$10$mvcvCV1tzLme.pr1DUqBvOGMgFXkyR/KmiPWfUjGhmK6jBxhgEJxq', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 515, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:46:18'),
(36, 'MD ALAUDDIN', 'engr.alauddinridoy@gmail.com', '2024-06-29 18:51:35', '$2y$10$kB.yZ/pPF6AAlh42wgHMEuwx93d72PxRajbZKWm0hN3CdpEtkpkfa', NULL, NULL, 'uploads/profile/1730648582-profile-image.jpg', 'user', 300000.00, -4000.00, 1, 'Mah mudul Hoque', 'bibi umme hani', '01816451708', 'Bsc in civil', 'Nid', '4201931864', 'islam', '1996-10-15 00:00:00', 'Bangladeshi', 'o+', 'Engineer', 'East holudia', '07', 'Chikon Chora', 'vuzpur', 'Fatikchori', 'Chittagong', 'Pza8U0gDQhRtaM5RCttLOPdME5OIuKnSHUiADlkZbVXOQv6UQnu3zYrMX6UR', NULL, '2025-02-24 07:13:18'),
(37, 'Md Jahangir', 'jahangir@gmail.com', '2024-06-29 18:54:47', '$2y$10$LO69JTa0BC19fHiHjvle2u9rT0J.uiSDko.1D1x8.AFTSoinSINk.', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 517, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-29 18:54:47'),
(40, 'MD ZIA UDDIN', 'Ziauddindill7@gmail.com', '2024-09-30 19:21:04', '$2y$10$Eqg3TPGIdDGH9THiDlI0tOitm1m6Tts0mWd98cSMHzH6p6e6ympEi', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-30 19:21:04'),
(41, 'Rezaul Rana', '8.dmyriyad@gmail.com', '2024-11-03 15:37:27', '$2y$10$eGT7NiGi9w8ITvyj4oR5SuG.MGfMyUb8JOXlfs9P8uFam20xtqtPm', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KXpEzY61VvwDfw9XzdXnyAFCi3oUX4tgPkwjqt4A5LFZHQwYX0lOlDkj1cvo', '2024-10-05 22:27:15', '2024-11-03 15:37:27'),
(60, 'Md Rakib Hasan', 'rsofisial2580@gmail.com', NULL, '$2y$10$op89zCtZoFp1NmPRu8ShpOKX/3phZ3oAEdVqFw6XzVkbg0JtXvoCG', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-02 19:03:43', '2025-02-02 19:03:43'),
(61, 'developer', 'mrpulakbala@gmail.com', '2025-02-04 04:48:01', '$2y$10$MkgvsrYnpuIbpIR/4DcX2uTB.Fpj4yyLffWKhNfUg9XAQpUr38jL.', NULL, NULL, 'uploads/profile/1739202782-profile-image.png', 'user', 176000.00, 0.00, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HP4rK8MBk2A8a9b2ytA9NffSsIzDIzVGieZG1kSHe3Eaxg47cTNm2qQ7hDBY', '2025-02-04 04:33:52', '2025-02-16 13:52:38'),
(62, 'Jamesadamb', 'forflood516@gmail.com', '2025-02-04 13:44:58', '$2y$10$GmLaUyjO3X20F0aVmANqy.SAtMc2bGoCclSg3bI06xmGZyd.LlmE6', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-04 10:44:24', '2025-02-04 13:44:58'),
(63, 'sahan ahmed', 'sahandukan1969@gmail.com', NULL, '$2y$10$//QYfEsL6h5QiHO1jNm.F.TVb3Md1FkJiDB/eZdZqMsEZ54ENaxOm', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'h42T3aJc6Q61pROl7oebQjHdcOpYRIFVP4TSTWLRJ0K9gFy5QHxan93WxWh7', '2025-02-06 12:27:14', '2025-02-06 12:27:14'),
(65, 'rWuqzCOlJcim', 'vizosugeges431@gmail.com', NULL, '$2y$10$o/1VZGg0AHPyemn758iuEOsU.74zSb24ADTTWGMpwQGxeHbYJe7qm', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-12 10:47:46', '2025-02-12 10:47:46'),
(66, 'TgXpert', 'sansoneacothley@gmail.com', NULL, '$2y$10$pgvNk0vLANecLv7555raf.TJfgBjsTnkjvRQTljf.sieHybg/qdZa', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13 09:37:57', '2025-02-13 09:37:57'),
(67, 'Jasonron', 'm.e.gastopl.a.y@gmail.com', NULL, '$2y$10$7jLzWep.iRJDGoCJ9urE5.cy4gdzdkmV2mJenlaoPivzTiyiyf40G', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-14 18:15:02', '2025-02-14 18:15:02'),
(68, 'JeremyGet', 'cerny773@comcast.net', NULL, '$2y$10$Czs8ZcqPwAt508pPLbch0ehhgQ06ykII74vRlp4cYAVtkeGg0HpFa', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-16 19:01:57', '2025-02-16 19:01:57'),
(69, 'nUiNzGbEWwE', 'ailunar97oracleeo@gmail.com', NULL, '$2y$10$UwL8A8liqnAp48dBP.rV/eXw6GaEI.Qs4M8F38W9XHtMsdRw9E5de', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-21 02:18:56', '2025-02-21 02:18:56'),
(70, 'ngpDRviZYSpq', 'gentosbeoryv15@gmail.com', NULL, '$2y$10$lyoI4jiUhEZMEXrqEomSMOft3W0H.jkN7DtXKHsUzbwgPke1vNgWW', NULL, NULL, 'uploads/profile/profile-img.png', 'user', 0.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-22 15:46:10', '2025-02-22 15:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_areas`
--

CREATE TABLE `welcome_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_areas`
--

INSERT INTO `welcome_areas` (`id`, `heading`, `link`, `created_at`, `updated_at`) VALUES
(1, 'আমরা বিশেষ সুবিধা সম্বিলিত  সুধ মুক্ত বিজনেস পরিচালনা করে থাকি।', '#', '2024-06-09 12:14:59', '2024-06-27 04:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `work_processes`
--

CREATE TABLE `work_processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_processes`
--

INSERT INTO `work_processes` (`id`, `title`, `short_description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'আলোচনা', 'Godard pabst prism fam cliche.', 'uploads/work/work-process-item-01.png', '2024-06-09 12:14:59', NULL),
(2, 'সংশোধন', 'Godard pabst prism fam cliche.', 'uploads/work/work-process-item-01.png', '2024-06-09 12:14:59', NULL),
(3, 'অনুমোদন', 'Godard pabst prism fam cliche.', 'uploads/work/work-process-item-01.png', '2024-06-09 12:14:59', NULL),
(4, 'আরম্ভ', 'Godard pabst prism fam cliche.', 'uploads/work/work-process-item-01.png', '2024-06-09 12:14:59', NULL),
(5, 'ডেপলয়', 'Godard pabst prism fam cliche.', 'uploads/work/work-process-item-01.png', '2024-06-09 12:14:59', NULL),
(6, 'সাপোর্ট', 'Godard pabst prism fam cliche.', 'uploads/work/work-process-item-01.png', '2024-06-09 12:14:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_payment_getways`
--
ALTER TABLE `bank_payment_getways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dues`
--
ALTER TABLE `dues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_areas`
--
ALTER TABLE `featured_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invests`
--
ALTER TABLE `invests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invest_profit_histories`
--
ALTER TABLE `invest_profit_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invest_profit_histories_invest_id_foreign` (`invest_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_payment_getways`
--
ALTER TABLE `mobile_payment_getways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `welcome_areas`
--
ALTER TABLE `welcome_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_processes`
--
ALTER TABLE `work_processes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_payment_getways`
--
ALTER TABLE `bank_payment_getways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `dues`
--
ALTER TABLE `dues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_areas`
--
ALTER TABLE `featured_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `invests`
--
ALTER TABLE `invests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `invest_profit_histories`
--
ALTER TABLE `invest_profit_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mobile_payment_getways`
--
ALTER TABLE `mobile_payment_getways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `welcome_areas`
--
ALTER TABLE `welcome_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_processes`
--
ALTER TABLE `work_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
