-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2025 at 04:27 PM
-- Server version: 8.4.3
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marrige_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_information`
--

CREATE TABLE `basic_information` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `biodata_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `birth_year` year NOT NULL,
  `height` decimal(3,1) NOT NULL,
  `complexion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_information`
--

INSERT INTO `basic_information` (`id`, `user_id`, `full_name`, `biodata_type`, `marital_status`, `birth_year`, `height`, `complexion`, `weight`, `blood_group`, `nationality`, `created_at`, `updated_at`) VALUES
(1, 1, 'pulak', 'Male', 'Single', '2014', 6.0, 'Fair', 65.00, 'B+', 'Bangladeshi', '2025-03-12 08:01:23', '2025-03-12 08:01:23'),
(9, 11, 'Jannatul Nayem ', 'Male', 'Married', '1996', 5.5, 'Fair', 52.00, 'A-', 'Bangladeshi', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(10, 12, 'Anika Tabasum', 'Female', 'Single', '2002', 5.3, 'Medium', 52.00, 'B+', 'Bangladeshi', '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(11, 13, 'dfdf', 'Male', 'Single', '2024', 5.7, 'Fair', 34.00, 'A+', 'india', '2025-03-16 09:41:21', '2025-03-16 09:41:21'),
(12, 13, 'dfdf', 'Male', 'Single', '2024', 5.7, 'Fair', 34.00, 'A+', 'india', '2025-03-16 09:44:39', '2025-03-16 09:44:39'),
(13, 13, 'dfdf', 'Male', 'Single', '2024', 5.7, 'Fair', 34.00, 'A+', 'india', '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(14, 15, 'Bayzid', 'Male', 'Single', '2001', 5.4, 'Medium', 65.00, 'B+', 'pakistani', '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(15, 17, 'sithi', 'Female', 'Single', '1999', 4.9, 'Fair', 50.00, 'O+', 'Bangladeshi', '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(16, 18, 'Hitlar Germany', 'Male', 'Single', '1965', 5.8, 'Fair', 52.00, 'A+', 'Pakistan', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(17, 19, 'Karina kappor', 'Female', 'Single', '1994', 5.6, 'Fair', 52.00, 'O+', 'Indian', '2025-04-09 03:25:50', '2025-04-09 03:25:50'),
(18, 20, 'শিপন হাওলাদার', 'Male', 'Single', '1998', 5.4, 'Fair', 64.00, 'B+', 'বাংলাদেশী', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(19, 22, 'মাকিন হাসান', 'Male', 'অবিবাহিত', '2000', 5.7, 'ফর্সা', 53.00, 'O+', 'Bangladeshi', '2025-05-01 10:39:16', '2025-05-03 10:40:27'),
(20, 22, 'পুলক বালা', 'Male', 'অবিবাহিত', '2000', 5.7, 'ফর্সা', 53.00, 'O+', 'Bangladeshi', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(21, 22, 'পুলক বালা', 'Male', 'অবিবাহিত', '2000', 5.7, 'ফর্সা', 53.00, 'O+', 'Bangladeshi', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(22, 23, 'দীপিকা পাডুকন', 'Female', 'অবিবাহিত', '2000', 4.6, 'ফর্সা', 56.00, 'O+', 'Bangladeshi', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('17ba0791499db908433b80f37c5fbc89b870084b', 'i:1;', 1741903602),
('17ba0791499db908433b80f37c5fbc89b870084b:timer', 'i:1741903602;', 1741903602),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1741786983),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1741786983;', 1741786983),
('f1abd670358e036c31296e66b3b66c382ac00812', 'i:1;', 1742269927),
('f1abd670358e036c31296e66b3b66c382ac00812:timer', 'i:1742269927;', 1742269927);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int NOT NULL,
  `district_id` int DEFAULT NULL,
  `state_id` int DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `district_id`, `state_id`, `country_id`, `name`) VALUES
(1, 64, 1, 1, 'Ashulia'),
(2, 64, 1, 1, 'Dhamrai'),
(3, 64, 1, 1, 'Dohar'),
(4, 64, 1, 1, 'Keraniganj'),
(5, 64, 1, 1, 'Nawabganj'),
(6, 64, 1, 1, 'Savar'),
(7, 64, 1, 1, 'Shibchar'),
(8, 64, 1, 1, 'Siddhirganj'),
(9, 64, 1, 1, 'Singair'),
(10, 64, 1, 1, 'Tangail'),
(11, 64, 1, 1, 'Narayanganj'),
(12, 64, 1, 1, 'Narsingdi'),
(13, 64, 1, 1, 'Munshiganj'),
(14, 65, 1, 1, 'Gazipur Sadar'),
(15, 65, 1, 1, 'Kaliakair'),
(16, 65, 1, 1, 'Kapasia'),
(17, 65, 1, 1, 'Sreepur'),
(18, 65, 1, 1, 'Tongi'),
(19, 66, 1, 1, 'Narayanganj Sadar'),
(20, 66, 1, 1, 'Sonargaon'),
(21, 66, 1, 1, 'Bandura'),
(22, 66, 1, 1, 'Rupganj'),
(23, 67, 1, 1, 'Tangail Sadar'),
(24, 67, 1, 1, 'Basail'),
(25, 67, 1, 1, 'Delduar'),
(26, 67, 1, 1, 'Madhupur'),
(27, 67, 1, 1, 'Ghatail'),
(28, 67, 1, 1, 'Kalihati'),
(29, 68, 1, 1, 'Kishoreganj Sadar'),
(30, 68, 1, 1, 'Bajitpur'),
(31, 68, 1, 1, 'Hossainpur'),
(32, 68, 1, 1, 'Katiadi'),
(33, 68, 1, 1, 'Kuliarchar'),
(34, 68, 1, 1, 'Itna'),
(35, 68, 1, 1, 'Mithamain'),
(36, 69, 1, 1, 'Manikganj Sadar'),
(37, 69, 1, 1, 'Singair'),
(38, 69, 1, 1, 'Shibalaya'),
(39, 69, 1, 1, 'Doulatpur'),
(40, 69, 1, 1, 'Harirampur'),
(41, 70, 1, 1, 'Munshiganj Sadar'),
(42, 70, 1, 1, 'Sreenagar'),
(43, 70, 1, 1, 'Louhajang'),
(44, 70, 1, 1, 'Gajaria'),
(45, 70, 1, 1, 'Munsiganj'),
(46, 71, 1, 1, 'Narsingdi Sadar'),
(47, 71, 1, 1, 'Raipura'),
(48, 71, 1, 1, 'Belabo'),
(49, 71, 1, 1, 'Shibpur'),
(50, 71, 1, 1, 'Monohardi'),
(51, 72, 1, 1, 'Faridpur Sadar'),
(52, 72, 1, 1, 'Boalmari'),
(53, 72, 1, 1, 'Nagarkanda'),
(54, 72, 1, 1, 'Sadarpur'),
(55, 72, 1, 1, 'Alfadanga'),
(56, 74, 1, 1, 'Madaripur Sadar'),
(57, 74, 1, 1, 'Shibchar'),
(58, 74, 1, 1, 'Rajoir'),
(59, 74, 1, 1, 'Kalkini'),
(60, 75, 1, 1, 'Rajbari Sadar'),
(61, 75, 1, 1, 'Pangsha'),
(62, 75, 1, 1, 'Bera'),
(63, 75, 1, 1, 'Goalundo'),
(64, 75, 1, 1, 'Kalukhali'),
(65, 76, 1, 1, 'Shariatpur Sadar'),
(66, 76, 1, 1, 'Bhedarganj'),
(67, 76, 1, 1, 'Gosairhat'),
(68, 76, 1, 1, 'Naria'),
(69, 76, 1, 1, 'Zajira'),
(70, 77, 1, 1, 'Chattogram Sadar'),
(71, 77, 1, 1, 'Anwara'),
(72, 77, 1, 1, 'Banshkhali'),
(73, 77, 1, 1, 'Boalkhali'),
(74, 77, 1, 1, 'Fatikchhari'),
(75, 77, 1, 1, 'Hathazari'),
(76, 77, 1, 1, 'Lohagara'),
(77, 77, 1, 1, 'Mirsharai'),
(78, 77, 1, 1, 'Patiya'),
(79, 77, 1, 1, 'Rangunia'),
(80, 77, 1, 1, 'Sandwip'),
(81, 78, 1, 1, 'Cox\'s Bazar Sadar'),
(82, 78, 1, 1, 'Chakaria'),
(83, 78, 1, 1, 'Kutubdia'),
(84, 78, 1, 1, 'Maheshkhali'),
(85, 78, 1, 1, 'Ramu'),
(86, 78, 1, 1, 'Teknaf'),
(87, 78, 1, 1, 'Pekua'),
(88, 79, 1, 1, 'Cumilla Sadar'),
(89, 79, 1, 1, 'Barura'),
(90, 79, 1, 1, 'Chauddagram'),
(91, 79, 1, 1, 'Daudkandi'),
(92, 79, 1, 1, 'Debidwar'),
(93, 79, 1, 1, 'Homna'),
(94, 79, 1, 1, 'Laksham'),
(95, 80, 1, 1, 'Brahmanbaria Sadar'),
(96, 80, 1, 1, 'Ashuganj'),
(97, 80, 1, 1, 'Nabinagar'),
(98, 80, 1, 1, 'Bancharampur'),
(99, 80, 1, 1, 'Bijoynagar'),
(100, 80, 1, 1, 'Kasba'),
(101, 81, 1, 1, 'Chandpur Sadar'),
(102, 81, 1, 1, 'Faridganj'),
(103, 81, 1, 1, 'Haimchar'),
(104, 81, 1, 1, 'Kachua'),
(105, 81, 1, 1, 'Matlab Uttar'),
(106, 81, 1, 1, 'Matlab Dakkhin'),
(107, 81, 1, 1, 'Shahrasti'),
(108, 82, 1, 1, 'Feni Sadar'),
(109, 82, 1, 1, 'Chhagalnaiya'),
(110, 82, 1, 1, 'Daganbhuiyan'),
(111, 82, 1, 1, 'Parshuram'),
(112, 82, 1, 1, 'Sonagazi'),
(113, 82, 1, 1, 'Fulgazi'),
(114, 83, 1, 1, 'Khagrachari Sadar'),
(115, 83, 1, 1, 'Dighinala'),
(116, 83, 1, 1, 'Lakshmipur'),
(117, 83, 1, 1, 'Manikchhari'),
(118, 83, 1, 1, 'Mahalchhari'),
(119, 83, 1, 1, 'Mohalchhari'),
(120, 84, 1, 1, 'Rangamati Sadar'),
(121, 84, 1, 1, 'Baghaichhari'),
(122, 84, 1, 1, 'Kaptai'),
(123, 84, 1, 1, 'Khilgaon'),
(124, 84, 1, 1, 'Juraichhari'),
(125, 85, 1, 1, 'Bandarban Sadar'),
(126, 85, 1, 1, 'Rowangchhari'),
(127, 85, 1, 1, 'Lama'),
(128, 85, 1, 1, 'Ruma'),
(129, 85, 1, 1, 'Thanchi'),
(130, 86, 1, 1, 'Lakshmipur Sadar'),
(131, 86, 1, 1, 'Ramganj'),
(132, 86, 1, 1, 'Raipur'),
(133, 86, 1, 1, 'Kamalnagar'),
(134, 86, 1, 1, 'Manmathpur'),
(135, 87, 1, 1, 'Noakhali Sadar'),
(136, 87, 1, 1, 'Begumganj'),
(137, 87, 1, 1, 'Companiganj'),
(138, 87, 1, 1, 'Chhagalnaiya'),
(139, 87, 1, 1, 'Senbagh'),
(140, 88, 1, 1, 'Khulna Sadar'),
(141, 88, 1, 1, 'Batiaghata'),
(142, 88, 1, 1, 'Dacope'),
(143, 88, 1, 1, 'Koyra'),
(144, 88, 1, 1, 'Paikgachha'),
(145, 88, 1, 1, 'Rupsha'),
(146, 89, 1, 1, 'Jessore Sadar'),
(147, 89, 1, 1, 'Abhaynagar'),
(148, 89, 1, 1, 'Chaugachha'),
(149, 89, 1, 1, 'Keshabpur'),
(150, 89, 1, 1, 'Shara'),
(151, 89, 1, 1, 'Manirampur'),
(152, 90, 1, 1, 'Jhenaidah Sadar'),
(153, 90, 1, 1, 'Kaliganj'),
(154, 90, 1, 1, 'Shailkupa'),
(155, 90, 1, 1, 'Madhuhati'),
(156, 90, 1, 1, 'Harinakundu'),
(157, 91, 1, 1, 'Magura Sadar'),
(158, 91, 1, 1, 'Sreepur'),
(159, 91, 1, 1, 'Shalikha'),
(160, 91, 1, 1, 'Mohammadpur'),
(161, 92, 1, 1, 'Narail Sadar'),
(162, 92, 1, 1, 'Kalia'),
(163, 92, 1, 1, 'Chalna'),
(164, 93, 1, 1, 'Satkhira Sadar'),
(165, 93, 1, 1, 'Assasuni'),
(166, 93, 1, 1, 'Shyamnagar'),
(167, 93, 1, 1, 'Kalaroa'),
(168, 93, 1, 1, 'Tala'),
(169, 94, 1, 1, 'Bagerhat Sadar'),
(170, 94, 1, 1, 'Kachua'),
(171, 94, 1, 1, 'Chitalmari'),
(172, 94, 1, 1, 'Morrelganj'),
(173, 94, 1, 1, 'Mongla'),
(174, 95, 1, 1, 'Chuadanga Sadar'),
(175, 95, 1, 1, 'Alamdanga'),
(176, 95, 1, 1, 'Damurhuda'),
(177, 96, 1, 1, 'Kushtia Sadar'),
(178, 96, 1, 1, 'Bheramara'),
(179, 96, 1, 1, 'Kumarkhali'),
(180, 96, 1, 1, 'Daulatpur'),
(181, 97, 1, 1, 'Barishal Sadar'),
(182, 97, 1, 1, 'Agailjhara'),
(183, 97, 1, 1, 'Bakerganj'),
(184, 97, 1, 1, 'Muladi'),
(185, 97, 1, 1, 'Wazirpur'),
(186, 98, 1, 1, 'Bhola Sadar'),
(187, 98, 1, 1, 'Charfashion'),
(188, 98, 1, 1, 'Daulatkhan'),
(189, 98, 1, 1, 'Borhanuddin'),
(190, 99, 1, 1, 'Jhalokathi Sadar'),
(191, 99, 1, 1, 'Rajapur'),
(192, 99, 1, 1, 'Kathalia'),
(193, 100, 1, 1, 'Patuakhali Sadar'),
(194, 100, 1, 1, 'Galachipa'),
(195, 100, 1, 1, 'Mirzaganj'),
(196, 100, 1, 1, 'Bauphal'),
(197, 101, 1, 1, 'Pirojpur Sadar'),
(198, 101, 1, 1, 'Kochua'),
(199, 101, 1, 1, 'Nesarabad'),
(200, 101, 1, 1, 'Mathbaria'),
(201, 101, 1, 1, 'Bhandaria'),
(202, 102, 1, 1, 'Barguna Sadar'),
(203, 102, 1, 1, 'Taltali'),
(204, 102, 1, 1, 'Betagi'),
(205, 102, 1, 1, 'Patharghata'),
(206, 103, 1, 1, 'Rajshahi Sadar'),
(207, 103, 1, 1, 'Bagha'),
(208, 103, 1, 1, 'Puthia'),
(209, 103, 1, 1, 'Tanore'),
(210, 103, 1, 1, 'Durgapur'),
(211, 104, 1, 1, 'Natore Sadar'),
(212, 104, 1, 1, 'Lalpur'),
(213, 104, 1, 1, 'Baraigram'),
(214, 104, 1, 1, 'Singra'),
(215, 104, 1, 1, 'Gurudaspur'),
(216, 105, 1, 1, 'Pabna Sadar'),
(217, 105, 1, 1, 'Atgharia'),
(218, 105, 1, 1, 'Faridpur'),
(219, 105, 1, 1, 'Sujanagar'),
(220, 105, 1, 1, 'Chatmohar'),
(221, 106, 1, 1, 'Bogura Sadar'),
(222, 106, 1, 1, 'Sherpur'),
(223, 106, 1, 1, 'Kahalu'),
(224, 106, 1, 1, 'Dhunat'),
(225, 106, 1, 1, 'Nandigram'),
(226, 107, 1, 1, 'Joypurhat Sadar'),
(227, 107, 1, 1, 'Khetlal'),
(228, 107, 1, 1, 'Akkelpur'),
(229, 108, 1, 1, 'Naogaon Sadar'),
(230, 108, 1, 1, 'Mahadevpur'),
(231, 108, 1, 1, 'Raninagar'),
(232, 108, 1, 1, 'Manda'),
(233, 109, 1, 1, 'Chapainawabganj Sadar'),
(234, 109, 1, 1, 'Shibganj'),
(235, 109, 1, 1, 'Gomostapur'),
(236, 109, 1, 1, 'Nachole'),
(237, 110, 1, 1, 'Sirajganj Sadar'),
(238, 110, 1, 1, 'Kazipur'),
(239, 110, 1, 1, 'Chauhali'),
(240, 110, 1, 1, 'Raiganj'),
(241, 111, 1, 1, 'Rangpur Sadar'),
(242, 111, 1, 1, 'Pirgachha'),
(243, 111, 1, 1, 'Kurigram'),
(244, 111, 1, 1, 'Mithapukur'),
(245, 112, 1, 1, 'Kurigram Sadar'),
(246, 112, 1, 1, 'Bhurungamari'),
(247, 112, 1, 1, 'Chilmari'),
(248, 113, 1, 1, 'Gaibandha Sadar'),
(249, 113, 1, 1, 'Sundarganj'),
(250, 113, 1, 1, 'Palashbari'),
(251, 113, 1, 1, 'Shaghata'),
(252, 114, 1, 1, 'Lalmonirhat Sadar'),
(253, 114, 1, 1, 'Aditmari'),
(254, 114, 1, 1, 'Hatibandha'),
(255, 114, 1, 1, 'Kalimati'),
(256, 114, 1, 1, 'Mokamtola'),
(257, 115, 1, 1, 'Nilphamari Sadar'),
(258, 115, 1, 1, 'Domar'),
(259, 115, 1, 1, 'Jaldhaka'),
(260, 115, 1, 1, 'Kishoreganj'),
(261, 116, 1, 1, 'Panchagarh Sadar'),
(262, 116, 1, 1, 'Debiganj'),
(263, 116, 1, 1, 'Atwari'),
(264, 116, 1, 1, 'Boda'),
(265, 117, 1, 1, 'Thakurgaon Sadar'),
(266, 117, 1, 1, 'Ranishankail'),
(267, 117, 1, 1, 'Haripur'),
(268, 117, 1, 1, 'Pirganj'),
(269, 118, 1, 1, 'Dinajpur Sadar'),
(270, 118, 1, 1, 'Birampur'),
(271, 118, 1, 1, 'Ghoraghat'),
(272, 118, 1, 1, 'Kaharol'),
(273, 118, 1, 1, 'Hakimpur'),
(274, 119, 1, 1, 'Sylhet Sadar'),
(275, 119, 1, 1, 'Moulvibazar'),
(276, 119, 1, 1, 'Sunamganj'),
(277, 119, 1, 1, 'Habiganj'),
(278, 120, 1, 1, 'Habiganj Sadar'),
(279, 120, 1, 1, 'Chunarughat'),
(280, 120, 1, 1, 'Ajmiriganj'),
(281, 120, 1, 1, 'Bahubal'),
(282, 121, 1, 1, 'Moulvibazar Sadar'),
(283, 121, 1, 1, 'Kulaura'),
(284, 121, 1, 1, 'Barlekha'),
(285, 121, 1, 1, 'Juri'),
(286, 122, 1, 1, 'Sunamganj Sadar'),
(287, 122, 1, 1, 'Chhatak'),
(288, 122, 1, 1, 'Biswanath'),
(289, 122, 1, 1, 'Dakhin Sunamganj'),
(290, 123, 1, 1, 'Mymensingh Sadar'),
(291, 123, 1, 1, 'Bhaluka'),
(292, 123, 1, 1, 'Trishal'),
(293, 123, 1, 1, 'Muktagachha'),
(294, 124, 1, 1, 'Jamalpur Sadar'),
(295, 124, 1, 1, 'Islampur'),
(296, 124, 1, 1, 'Madhupur'),
(297, 124, 1, 1, 'Dewanganj'),
(298, 125, 1, 1, 'Netrokona Sadar'),
(299, 125, 1, 1, 'Khaliajuri'),
(300, 125, 1, 1, 'Madan'),
(301, 125, 1, 1, 'Purbadhala'),
(302, 126, 1, 1, 'Sherpur Sadar'),
(303, 126, 1, 1, 'Nakla'),
(304, 126, 1, 1, 'Jhenaigati'),
(305, 126, 1, 1, 'Sreebordi');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `groom_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_mobile` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `relationship_with_guardian` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `groom_name`, `guardian_mobile`, `relationship_with_guardian`, `guardian_email`, `created_at`, `updated_at`) VALUES
(8, 18, 'mudi', '0147241215', 'bondhu', 'mudi@gmail.com', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(9, 19, 'Saif Ali', '912454231654', 'Ex husband', 'saif@gmail.com', '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(10, 20, 'পুলক', '014354321541', 'বন্ধু', 'pulak@gmail.com', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(11, 22, 'তানভীর হক', '0153215422', 'বন্ধু', 'rafu@gmail.com', '2025-05-01 10:39:16', '2025-05-02 05:56:26'),
(12, 22, 'তানভীর', '0153215422', 'বন্ধু', 'rafu@gmail.com', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(13, 22, 'তানভীর', '0153215422', 'বন্ধু', 'rafu@gmail.com', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(14, 23, 'শুভ হালদার', '0172342343', 'বন্ধু', 'pulakmr38@gmail.com', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`) VALUES
(1, 'Bangladesh', 'BD');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int NOT NULL,
  `state_id` int DEFAULT NULL,
  `country_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `state_id`, `country_id`, `name`) VALUES
(64, 1, 1, 'Dhaka'),
(65, 1, 1, 'Gazipur'),
(66, 1, 1, 'Narayanganj'),
(67, 1, 1, 'Tangail'),
(68, 1, 1, 'Kishoreganj'),
(69, 1, 1, 'Manikganj'),
(70, 1, 1, 'Munshiganj'),
(71, 1, 1, 'Narsingdi'),
(72, 1, 1, 'Faridpur'),
(73, 1, 1, 'Gopalganj'),
(74, 1, 1, 'Madaripur'),
(75, 1, 1, 'Rajbari'),
(76, 1, 1, 'Shariatpur'),
(77, 2, 1, 'Chattogram'),
(78, 2, 1, 'Cox\'s Bazar'),
(79, 2, 1, 'Cumilla'),
(80, 2, 1, 'Brahmanbaria'),
(81, 2, 1, 'Chandpur'),
(82, 2, 1, 'Feni'),
(83, 2, 1, 'Khagrachari'),
(84, 2, 1, 'Rangamati'),
(85, 2, 1, 'Bandarban'),
(86, 2, 1, 'Lakshmipur'),
(87, 2, 1, 'Noakhali'),
(88, 3, 1, 'Khulna'),
(89, 3, 1, 'Jessore'),
(90, 3, 1, 'Jhenaidah'),
(91, 3, 1, 'Magura'),
(92, 3, 1, 'Narail'),
(93, 3, 1, 'Satkhira'),
(94, 3, 1, 'Bagerhat'),
(95, 3, 1, 'Chuadanga'),
(96, 3, 1, 'Kushtia'),
(97, 4, 1, 'Barishal'),
(98, 4, 1, 'Bhola'),
(99, 4, 1, 'Jhalokathi'),
(100, 4, 1, 'Patuakhali'),
(101, 4, 1, 'Pirojpur'),
(102, 4, 1, 'Barguna'),
(103, 5, 1, 'Rajshahi'),
(104, 5, 1, 'Natore'),
(105, 5, 1, 'Pabna'),
(106, 5, 1, 'Bogura'),
(107, 5, 1, 'Joypurhat'),
(108, 5, 1, 'Naogaon'),
(109, 5, 1, 'Chapainawabganj'),
(110, 5, 1, 'Sirajganj'),
(111, 6, 1, 'Rangpur'),
(112, 6, 1, 'Kurigram'),
(113, 6, 1, 'Gaibandha'),
(114, 6, 1, 'Lalmonirhat'),
(115, 6, 1, 'Nilphamari'),
(116, 6, 1, 'Panchagarh'),
(117, 6, 1, 'Thakurgaon'),
(118, 6, 1, 'Dinajpur'),
(119, 7, 1, 'Sylhet'),
(120, 7, 1, 'Habiganj'),
(121, 7, 1, 'Moulvibazar'),
(122, 7, 1, 'Sunamganj'),
(123, 8, 1, 'Mymensingh'),
(124, 8, 1, 'Jamalpur'),
(125, 8, 1, 'Netrokona'),
(126, 8, 1, 'Sherpur');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `higher_qualification` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `other_qualification` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `islamic_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `passing_year` year NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `method`, `higher_qualification`, `other_qualification`, `islamic_title`, `passing_year`, `group_name`, `result`, `created_at`, `updated_at`) VALUES
(1, 1, 'technical', 'honours', 'Programming Language', 'hafez', '2015', 'science', 'A+', '2025-03-12 08:16:12', '2025-03-12 08:16:12'),
(6, 11, 'general', 'honours', 'China , cse', 'hafez', '2012', 'science', 'A+', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(7, 12, 'general', 'hsc', 'no', 'hafez', '2018', 'science', 'A', '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(8, 13, 'technical', 'hsc', 'Dhokabaz', 'hafez', '2015', 'science', 'A+', '2025-03-16 09:41:21', '2025-03-16 09:41:21'),
(9, 13, 'technical', 'hsc', 'Dhokabaz', 'hafez', '2015', 'science', 'A+', '2025-03-16 09:44:39', '2025-03-16 09:44:39'),
(10, 13, 'technical', 'hsc', 'Dhokabaz', 'hafez', '2015', 'science', 'A+', '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(11, 15, 'vocational', 'hsc', 'dfdf', 'alim', '2012', 'science', 'A+', '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(12, 17, 'general', 'hsc', 'codeing', 'hafez', '2012', 'arts', 'B', '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(13, 18, 'technical', 'hsc', 'fighter', 'hafez', '1912', 'science', 'A+', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(14, 19, 'general', 'ssc', 'film', 'alim', '2006', 'science', 'A+', '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(15, 20, 'general', 'honours', 'ডিপ্লোমা\n', 'fazil', '2016', 'commerce', 'A', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(16, 22, 'সাধারণ শিক্ষা', 'এসএসসি', 'প্রোগ্রামিং', 'আলিম', '2016', 'বিজ্ঞান', 'A', '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(17, 22, 'সাধারণ শিক্ষা', 'এসএসসি', 'প্রোগ্রামিং', 'আলিম', '2016', 'বিজ্ঞান', 'A', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(18, 22, 'সাধারণ শিক্ষা', 'এসএসসি', 'প্রোগ্রামিং', 'আলিম', '2016', 'বিজ্ঞান', 'A', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(19, 23, 'সাধারণ শিক্ষা', 'এইচএসসি', 'আভিনয়', 'আলিম', '2016', 'বিজ্ঞান', 'A', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `expected_partners`
--

CREATE TABLE `expected_partners` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `age_from` int NOT NULL,
  `age_to` int NOT NULL,
  `complexion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `height` int NOT NULL,
  `educational_qualification` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `financial_condition` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `expected_qualities` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expected_partners`
--

INSERT INTO `expected_partners` (`id`, `user_id`, `age_from`, `age_to`, `complexion`, `height`, `educational_qualification`, `district`, `marital_status`, `financial_condition`, `expected_qualities`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 29, 'yes', 184, 'ssc', 'dhaka', 'single', 'stable', 'laxmi', '2025-03-12 08:17:09', '2025-03-12 08:17:09'),
(5, 11, 18, 25, 'yes', 185, 'hsc', 'any where', 'single', 'stable', 'I want laxmi wife ', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(6, 12, 20, 30, 'yes', 185, 'hsc', 'Barisal', 'single', 'stable', 'dfjdkfafj', '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(7, 13, 19, 50, 'yes', 165, 'hsc', 'sdfsdf', 'single', 'stable', 'sdfdfdf', '2025-03-16 09:44:40', '2025-03-16 09:44:40'),
(8, 13, 19, 50, 'yes', 165, 'hsc', 'sdfsdf', 'single', 'stable', 'sdfdfdf', '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(9, 15, 18, 23, 'yes', 167, 'ssc', 'Lahore', 'single', 'stable', 'normal', '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(10, 17, 19, 25, 'yes', 161, 'ssc', 'lahore', 'single', 'stable', 'sadfsdf', '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(11, 18, 18, 25, 'yes', 167, 'ssc', 'Dhaka', 'single', 'stable', 'dfdf', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(12, 19, 18, 25, 'yes', 167, 'bachelor', 'india', 'single', 'stable', 'sdfdf', '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(13, 20, 18, 25, 'yes', 164, 'ssc', 'মাদারিপুর', 'single', 'stable', 'দকফজদকফজ', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(14, 22, 18, 24, 'উজ্জ্বল', 167, 'এইচএসসি', 'ঢাকা', 'অবিবাহিত', 'স্থিতিশীল', 'আমাকে ভালবাসতে হবে', '2025-05-01 10:39:16', '2025-05-02 05:43:50'),
(15, 22, 18, 24, 'উজ্জ্বল', 167, 'এইচএসসি', 'ঢাকা', 'অবিবাহিত', 'স্থিতিশীল', 'আমাকে ভালবাসতে হবে', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(16, 22, 18, 24, 'উজ্জ্বল', 167, 'এইচএসসি', 'ঢাকা', 'অবিবাহিত', 'স্থিতিশীল', 'আমাকে ভালবাসতে হবে', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(17, 23, 18, 44, 'yes', 167, 'স্নাতক', 'ঢাকা', 'অবিবাহিত', 'স্থিতিশীল', 'জানি নাহ', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_information`
--

CREATE TABLE `family_information` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `father_alive` enum('yes','no') COLLATE utf8mb4_general_ci NOT NULL,
  `father_profession` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mother_alive` enum('yes','no') COLLATE utf8mb4_general_ci NOT NULL,
  `mother_profession` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `brothers_count` int DEFAULT '0',
  `sisters_count` int DEFAULT '0',
  `financial_status` enum('stable','unstable','poor') COLLATE utf8mb4_general_ci NOT NULL,
  `financial_condition` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `religious_condition` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_information`
--

INSERT INTO `family_information` (`id`, `user_id`, `father_name`, `father_alive`, `father_profession`, `mother_name`, `mother_alive`, `mother_profession`, `brothers_count`, `sisters_count`, `financial_status`, `financial_condition`, `religious_condition`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nilu', 'yes', 'yes', 'Nila', 'yes', 'he is a housewife', 0, 2, 'stable', 'yes', 'yes', '2025-03-12 08:16:12', '2025-03-12 08:16:12'),
(6, 11, 'Md Jannatul islam', 'yes', 'yes', 'Jannatul', 'yes', 'she is a housewife', 0, 1, 'stable', 'no', 'all is well', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(7, 12, 'Muzammel hoq', 'yes', 'sdfsdf', 'Rubeya', 'yes', 'She is a housewife', 2, 1, 'stable', 'df', 'Veary well', '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(8, 13, 'dd', 'yes', 'sdfsdfsdfsdf', 'fdffdfdfd', 'yes', 'fdfdsfsfsdff', 2, 3, 'unstable', 'fsdfdsf', 'sdfdsff', '2025-03-16 09:41:21', '2025-03-16 09:41:21'),
(9, 13, 'dd', 'yes', 'sdfsdfsdfsdf', 'fdffdfdfd', 'yes', 'fdfdsfsfsdff', 2, 3, 'unstable', 'fsdfdsf', 'sdfdsff', '2025-03-16 09:44:40', '2025-03-16 09:44:40'),
(10, 13, 'dd', 'yes', 'sdfsdfsdfsdf', 'fdffdfdfd', 'yes', 'fdfdsfsfsdff', 2, 3, 'unstable', 'fsdfdsf', 'sdfdsff', '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(11, 15, 'sdfdf', 'yes', 'fdsfdf', 'sdff', 'yes', 'sdfdsfj', 2, 2, 'stable', 'dfdfdf', 'dfdfd', '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(12, 17, 'ss', 'yes', 'sdjkfhdf', 'ss', 'yes', 'ss', 2, 2, 'stable', 'sdkjf', 'sdkfh', '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(13, 18, 'Hitu', 'no', 'df', 'Hitani', 'no', 'she is a ded', 3, 3, 'stable', 'sdf', 'sdf', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(14, 19, 'kiron', 'no', 'dfdfdfdf', 'kironi', 'no', 'sdfdf2', 2, 2, 'stable', 'good', 'df d f', '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(15, 20, 'শামীর হাওলাদার', 'yes', 'অনেক দিন', 'জমা', 'yes', 'সদফকজদস্ফ', 1, 1, 'stable', 'না', 'এখন মনে নাই', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(16, 22, 'নির্মল বালা', 'yes', 'অনেকদিন ধরে', 'পলি বালা', 'yes', 'মা বাড়ীর কাজ করে\n', 1, 1, 'stable', 'নাহ আমার মাজার নিয়ে কনো বিশ্বাস নাই\n', 'কোরআন, হাদিস, দোয়ার ভাণ্ডার', '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(17, 22, 'নির্মল বালা', 'yes', 'অনেকদিন ধরে', 'পলি বালা', 'yes', 'মা বাড়ীর কাজ করে\n', 1, 1, 'stable', 'নাহ আমার মাজার নিয়ে কনো বিশ্বাস নাই\n', 'কোরআন, হাদিস, দোয়ার ভাণ্ডার', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(18, 22, 'নির্মল বালা', 'yes', 'অনেকদিন ধরে', 'পলি বালা', 'yes', 'মা বাড়ীর কাজ করে\n', 1, 1, 'stable', 'নাহ আমার মাজার নিয়ে কনো বিশ্বাস নাই\n', 'কোরআন, হাদিস, দোয়ার ভাণ্ডার', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(19, 23, 'সাইফ আলি খাঁ', 'yes', 'আনেকদিন', 'কারিনা কাপুর', 'yes', 'অভিনায়', 1, 1, 'stable', 'নাহ নাই', 'কোরআন, হাদিস, বুখারী\n', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `ignored_users`
--

CREATE TABLE `ignored_users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `ignorer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ignored_users`
--

INSERT INTO `ignored_users` (`id`, `user_id`, `ignorer_id`, `created_at`, `updated_at`) VALUES
(3, 19, 0, '2025-04-12 13:55:37', '2025-04-12 13:55:37'),
(4, 12, 0, '2025-05-02 08:32:34', '2025-05-02 08:32:34'),
(5, 22, 22, '2025-05-02 09:16:12', '2025-05-02 09:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marriage_information`
--

CREATE TABLE `marriage_information` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `guardians_agree` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `keep_veil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `allow_study` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `allow_job` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `living_arrangement` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `expect_gift` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marriage_thoughts` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marriage_information`
--

INSERT INTO `marriage_information` (`id`, `user_id`, `guardians_agree`, `keep_veil`, `allow_study`, `allow_job`, `living_arrangement`, `expect_gift`, `marriage_thoughts`, `created_at`, `updated_at`) VALUES
(1, 1, 'yes', 'yes', 'yes', 'ssc', 'dhaka', 'single', 'make full cricket team', '2025-03-12 08:16:12', '2025-03-12 08:16:12'),
(6, 11, 'yes', 'yes', 'yes', 'hsc', 'any where', 'single', 'because i need cute wife for my future plan exucate', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(7, 12, 'no', 'yes', 'yes', 'hsc', 'Barisal', 'single', 'sdf', '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(8, 13, 'yes', 'yes', 'yes', 'hsc', 'sdfsdf', 'single', 'sdfdsfsdfsdfsdfdf', '2025-03-16 09:44:40', '2025-03-16 09:44:40'),
(9, 13, 'yes', 'yes', 'yes', 'hsc', 'sdfsdf', 'single', 'sdfdsfsdfsdfsdfdf', '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(10, 15, 'yes', 'yes', 'yes', 'ssc', 'Lahore', 'single', 'sdfdfdf', '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(11, 17, 'yes', 'yes', 'yes', 'ssc', 'lahore', 'single', 'sdf', '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(12, 18, 'yes', 'yes', 'yes', 'ssc', 'Dhaka', 'single', 'we are create a team', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(13, 19, 'yes', 'yes', 'yes', 'bachelor', 'india', 'single', 'dfdf', '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(14, 20, 'yes', 'yes', 'yes', 'ssc', 'মাদারিপুর', 'single', 'সদফদস্ফ', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(15, 22, 'yes', 'yes', 'yes', 'এইচএসসি', 'ঢাকা', 'অবিবাহিত', 'জীবনে অনেক ভালবাসার দরকার', '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(16, 22, 'yes', 'yes', 'yes', 'এইচএসসি', 'ঢাকা', 'অবিবাহিত', 'জীবনে অনেক ভালবাসার দরকার', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(17, 22, 'yes', 'yes', 'yes', 'এইচএসসি', 'ঢাকা', 'অবিবাহিত', 'জীবনে অনেক ভালবাসার দরকার', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(18, 23, 'yes', 'yes', 'yes', 'স্নাতক', 'ঢাকা', 'অবিবাহিত', 'পরে বলি', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `occupation_information`
--

CREATE TABLE `occupation_information` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `monthly_income` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `occupation_information`
--

INSERT INTO `occupation_information` (`id`, `user_id`, `occupation`, `description`, `monthly_income`, `created_at`, `updated_at`) VALUES
(1, 1, 'yes', 'Software develoepr', 234234.00, '2025-03-12 08:16:12', '2025-03-12 08:16:12'),
(6, 11, 'yes', 'Software engineers in ssl ', 75000.00, '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(7, 12, 'no', 'sdf', 325421.00, '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(8, 13, 'yes', 'dsfsdfsdfsdfsdfsdfsf', 543213.00, '2025-03-16 09:44:40', '2025-03-16 09:44:40'),
(9, 13, 'yes', 'dsfsdfsdfsdfsdfsdfsf', 543213.00, '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(10, 15, 'yes', 'Developer', 109333.00, '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(11, 17, 'yes', 'sdfsdfsdf', 54654.00, '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(12, 18, 'yes', 'I am great fighter in world . ', 145212.00, '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(13, 19, 'yes', 'Fashioner', 213254.00, '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(14, 20, 'yes', 'টিচার', 10505.00, '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(15, 22, 'yes', 'টিচার\n', 216541.00, '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(16, 22, 'yes', 'টিচার\n', 216541.00, '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(17, 22, 'yes', 'টিচার\n', 216541.00, '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(18, 23, 'yes', 'অভিনয় \n', 43432.00, '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `connections` int NOT NULL,
  `offer_details` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `months` int DEFAULT NULL,
  `feature_1` text,
  `feature_2` text,
  `feature_3` text,
  `feature_4` text,
  `notification_message` text,
  `send_sms` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `connections`, `offer_details`, `discount`, `months`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `notification_message`, `send_sms`, `created_at`, `updated_at`) VALUES
(7, 'ব্যাসিক   প্যাকেজ', 200, 5, 'এখন অফার নেই।', 'ডিসকাউন্ট ৫০% পাবেন যখন দ্বিতীয় বার কানেকশন কিনবেন।', 2, 'আনলিমিটেড এসএমএস পাঠানোর সুবিধা', 'আপনি ৫ জন মানুষের যোগাযোগের তথ্য দেখতে পারবেন', 'প্রোফাইল হাইলাইট অপশন', 'কম টাকায় সেরা কানেকশন।', NULL, 1, '2025-04-19 03:57:42', '2025-04-19 06:40:10'),
(8, 'প্রিমিয়াম প্যাকেজ', 1000, 50, '২০% ছাড় ১ বছরের জন্য', 'ডিসকাউন্ট ৫০% পাবেন যখন দ্বিতীয় বার কানেকশন কিনবেন।', 12, 'আনলিমিটেড এসএমএস পাঠানো যাবে', '৫০ জন মানুষের যোগাযোগের তথ্য দেখা যাবে', 'প্রোফাইল হাইলাইট + র‍্যাংকিং বুস্ট', 'ফ্রি সাপোর্ট সার্ভিস', NULL, 1, '2025-04-19 07:12:18', '2025-05-03 11:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permanent_addresses`
--

CREATE TABLE `permanent_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `country_id` bigint UNSIGNED DEFAULT NULL,
  `state_id` bigint UNSIGNED DEFAULT NULL,
  `district_id` bigint UNSIGNED DEFAULT NULL,
  `city_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permanent_addresses`
--

INSERT INTO `permanent_addresses` (`id`, `user_id`, `country_id`, `state_id`, `district_id`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 64, 1, '2025-03-12 08:15:30', '2025-03-12 08:15:30'),
(7, 11, 1, 1, 72, 51, '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(8, 12, 1, 1, 66, 21, '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(9, 13, 1, 1, 66, 20, '2025-03-16 09:41:21', '2025-03-16 09:41:21'),
(10, 13, 1, 1, 66, 20, '2025-03-16 09:44:39', '2025-03-16 09:44:39'),
(11, 13, 1, 1, 66, 20, '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(12, 15, 3, 45, 896, NULL, '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(13, 17, 3, 46, 938, NULL, '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(14, 18, 3, 46, 938, NULL, '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(15, 19, 2, 10, 154, NULL, '2025-04-09 03:25:50', '2025-04-09 03:25:50'),
(16, 20, 1, 1, 65, 14, '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(17, 22, 1, 1, 64, 2, '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(18, 22, 1, 1, 64, 2, '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(19, 22, 1, 1, 64, 2, '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(20, 23, 1, 2, 78, 81, '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `clothes` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `beard` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `prayer` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `mahram` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quran_recitation` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fiqh` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `media` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diseases` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deen_work` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shrine_beliefs` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `islamic_books` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `islamic_scholars` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hobbies` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`id`, `user_id`, `clothes`, `beard`, `prayer`, `mahram`, `quran_recitation`, `fiqh`, `media`, `diseases`, `deen_work`, `shrine_beliefs`, `islamic_books`, `islamic_scholars`, `category`, `hobbies`, `mobile`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'yes', 'Software develoepr', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'orphan', 'cricket', '01734928592', 'C:\\Users\\ASUS VivoBook\\AppData\\Local\\Temp\\phpF15E.tmp', '2025-03-12 08:16:12', '2025-03-12 08:16:12'),
(6, 11, 'Islamic dreass', 'Software engineers in ssl ', 'yes', 'mahram', 'yes', 'Hanif', 'No', 'No . i am a healty man', 'Yes', 'no', '', 'quran \nhadis\nalquran', 'tablig', 'mobile games and programming', '01734298203', 'C:\\Users\\ASUS VivoBook\\AppData\\Local\\Temp\\php893B.tmp', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(7, 12, 'yes', 'sdf', 'sdfsdf', 'df', 'df', 'df', 'df', 'df', 'df', 'df', '', 'df', 'converted_muslim', 'df', '01755422', NULL, '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(8, 13, 'sdfsdfsdf', 'dsfsdfsdfsdfsdfsdfsf', 'sdfsdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfdf', 'sdf', 'fsdfdsf', 'fsdfdsf', 'fsdfdsf', 'sdfdsff', 'sdfsdfsdfsdf', 'converted_muslim', 'sdfdsfdsf', '017542121542', NULL, '2025-03-16 09:41:21', '2025-03-16 09:41:21'),
(9, 13, 'sdfsdfsdf', 'dsfsdfsdfsdfsdfsdfsf', 'sdfsdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfdf', 'sdf', 'fsdfdsf', 'fsdfdsf', 'fsdfdsf', 'sdfdsff', 'sdfsdfsdfsdf', 'converted_muslim', 'sdfdsfdsf', '017542121542', NULL, '2025-03-16 09:44:40', '2025-03-16 09:44:40'),
(10, 13, 'sdfsdfsdf', 'dsfsdfsdfsdfsdfsdfsf', 'sdfsdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfdf', 'sdf', 'fsdfdsf', 'fsdfdsf', 'fsdfdsf', 'sdfdsff', 'sdfsdfsdfsdf', 'converted_muslim', 'sdfdsfdsf', '017542121542', NULL, '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(11, 15, 'dfdf', 'Developer', 'fdsfdf', 'dfdf', 'dsfdf', 'dsfdf', 'dfdf', 'fdfdf', 'dffdf', 'dfdfdf', 'dfdfd', 'fdfdf', 'orphan', 'sdfdfdf', '01745632414', 'C:\\Users\\ASUS VivoBook\\AppData\\Local\\Temp\\php677C.tmp', '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(12, 17, 'sdfjdjf', 'sdfsdfsdf', 'sdjkfhdf', 'sdjfhd', 'sdkjfh', 'sdkfjh', 'sdkjfh', 'skdjfh', 'sdfh', 'sdkjf', 'sdkfh', 'sdkjf', 'infertile', 'sldf', '0354651.21', NULL, '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(13, 18, 'sdfdf', 'I am great fighter in world . ', 'df', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'infertile', 'sdf', '01424154201', NULL, '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(14, 19, 'dsfdf', 'Fashioner', 'dfdfdfdf', 'dfdfdf', '', 'sdfdf', 'd fdf', 'dfdf', '', '', 'df d f', 'd fdf  ', 'converted_muslim', 'sdfdf', '01745631214', NULL, '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(15, 20, 'ভাল ', 'টিচার', 'অনেক দিন', 'না', 'হুম', 'হুম', 'হুম', 'না', 'তাবলিগ ', 'না', 'এখন মনে নাই', 'এখন মনে নাই', 'infertile', 'পরে বলব\n', '০১৫৪৩২১৩৫২৫৪', NULL, '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(16, 22, 'শালীল  পোশাক পরি\n', 'টিচার\n', 'অনেকদিন ধরে', 'মেনে চলি\n', 'হ্যাঁ পাড়ি\n', 'জানি নাহ', 'হুম দেখি কম ', 'নাহ আমি নরমাল আছি ।', 'হ্যাঁ যুক্ত আছি ।', 'নাহ আমার মাজার নিয়ে কনো বিশ্বাস নাই\n', 'কোরআন, হাদিস, দোয়ার ভাণ্ডার', 'জানি নাহ', 'তাবলিগ', 'কিছু নাই\n', '01745543676', NULL, '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(17, 22, 'শালীল  পোশাক পরি\n', 'টিচার\n', 'অনেকদিন ধরে', 'মেনে চলি\n', 'হ্যাঁ পাড়ি\n', 'জানি নাহ', 'হুম দেখি কম ', 'নাহ আমি নরমাল আছি ।', 'হ্যাঁ যুক্ত আছি ।', 'নাহ আমার মাজার নিয়ে কনো বিশ্বাস নাই\n', 'কোরআন, হাদিস, দোয়ার ভাণ্ডার', 'জানি নাহ', 'তাবলিগ', 'কিছু নাই\n', '01745543676', NULL, '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(18, 22, 'শালীল  পোশাক পরি\n', 'টিচার\n', 'অনেকদিন ধরে', 'মেনে চলি\n', 'হ্যাঁ পাড়ি\n', 'জানি নাহ', 'হুম দেখি কম ', 'নাহ আমি নরমাল আছি ।', 'হ্যাঁ যুক্ত আছি ।', 'নাহ আমার মাজার নিয়ে কনো বিশ্বাস নাই\n', 'কোরআন, হাদিস, দোয়ার ভাণ্ডার', 'জানি নাহ', 'তাবলিগ', 'কিছু নাই\n', '01745543676', NULL, '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(19, 23, 'ভাল', 'অভিনয় \n', 'আনেকদিন', 'পরে করবো\n', 'পাড়ি\n', 'করি', 'হুম সুনিও দেখিও', 'নাহ নাই', 'হুম কিন্তু বলতে পারব নাহ', 'নাহ নাই', 'কোরআন, হাদিস, বুখারী\n', 'মনে পরে নাই', 'নব মুসলিম', 'পরে', '0145524645', NULL, '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `parents_know` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `testify_truth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `agree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pledges`
--

INSERT INTO `pledges` (`id`, `user_id`, `parents_know`, `testify_truth`, `agree`, `created_at`, `updated_at`) VALUES
(1, 1, 'yes', 'no', 'yes', '2025-03-12 08:17:37', '2025-03-12 08:17:37'),
(4, 11, 'yes', 'yes', 'yes', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(5, 12, 'yes', 'yes', 'yes', '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(6, 18, 'yes', 'yes', 'yes', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(7, 19, 'yes', 'yes', 'yes', '2025-04-09 03:25:51', '2025-04-09 03:25:51'),
(8, 20, 'yes', 'yes', 'yes', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(9, 22, 'yes', 'yes', 'yes', '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(10, 22, 'yes', 'yes', 'yes', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(11, 22, 'yes', 'yes', 'yes', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(12, 23, 'yes', 'yes', 'yes', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `present_addresses`
--

CREATE TABLE `present_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `country_id` bigint UNSIGNED DEFAULT NULL,
  `state_id` bigint UNSIGNED DEFAULT NULL,
  `district_id` bigint UNSIGNED DEFAULT NULL,
  `city_id` bigint UNSIGNED DEFAULT NULL,
  `same_as_permanent` tinyint(1) DEFAULT '0',
  `grew_up` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `present_addresses`
--

INSERT INTO `present_addresses` (`id`, `user_id`, `country_id`, `state_id`, `district_id`, `city_id`, `same_as_permanent`, `grew_up`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 65, 15, 0, 'Dhaka , Mirpur-10', '2025-03-12 08:16:12', '2025-03-12 08:16:12'),
(6, 11, 1, 1, 64, 7, 0, 'Dhaka, Faridpur', '2025-03-13 16:08:59', '2025-03-13 16:08:59'),
(7, 12, 1, 1, 65, 15, 0, 'Barisal,  Gournadi', '2025-03-14 10:48:24', '2025-03-14 10:48:24'),
(8, 13, 1, 1, 65, 14, 0, 'Andhra , Chittoor', '2025-03-16 09:41:21', '2025-03-16 09:41:21'),
(9, 13, 1, 1, 65, 14, 0, 'Andhra , Chittoor', '2025-03-16 09:44:39', '2025-03-16 09:44:39'),
(10, 13, 1, 1, 65, 14, 0, 'Andhra , Chittoor', '2025-03-16 09:45:11', '2025-03-16 09:45:11'),
(11, 15, 3, 46, 948, NULL, 0, 'pakistan , lahore', '2025-03-17 21:52:58', '2025-03-17 21:52:58'),
(12, 17, 3, 46, 949, NULL, 0, 'pakistan , lahore', '2025-03-25 23:51:11', '2025-03-25 23:51:11'),
(13, 18, 3, 46, 942, NULL, 0, 'pakistan, lahore', '2025-04-07 04:54:35', '2025-04-07 04:54:35'),
(14, 19, 2, 13, 255, NULL, 0, 'kolkata, ichapur', '2025-04-09 03:25:50', '2025-04-09 03:25:50'),
(15, 20, 1, 1, 74, 59, 0, 'নবগ্রাম, ডাসার', '2025-04-22 14:43:18', '2025-04-22 14:43:18'),
(16, 22, 1, 2, 82, 109, 0, 'মিরপুর-১ , ঢাকা', '2025-05-01 10:39:16', '2025-05-01 10:39:16'),
(17, 22, 1, 2, 82, 109, 0, 'মিরপুর-১ , ঢাকা', '2025-05-02 05:45:02', '2025-05-02 05:45:02'),
(18, 22, 1, 2, 82, 109, 0, 'মিরপুর-১ , ঢাকা', '2025-05-02 05:46:05', '2025-05-02 05:46:05'),
(19, 23, 1, 4, 97, 182, 0, 'পাকুরিতা, আগাইলঝাড়া', '2025-05-02 06:15:24', '2025-05-02 06:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NCvaHn1kHNEXSPuZKsZIPcsPCFDuVQWIvn2BO72Z', 22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQUx3UFF0c2pMdjNkZ0w5aVpHVDl5Y0xHMWkzTk02YVpWMGx3SzVlMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMjt9', 1746350659),
('yJsaiHtytxTAF5H7HbzJ6ypoVeVmqQyEfBiNrZVU', 22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjRGemhZTU1SVTJFYVMyUDIwRXlmNEVtYzl3MDhFNHYxWUxXWlcxYiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbGwtdXNlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1746360486);

-- --------------------------------------------------------

--
-- Table structure for table `shortlisted_users`
--

CREATE TABLE `shortlisted_users` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `shortlister_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shortlisted_users`
--

INSERT INTO `shortlisted_users` (`id`, `user_id`, `shortlister_id`, `created_at`, `updated_at`) VALUES
(9, 11, 0, '2025-04-12 13:48:20', '2025-04-12 13:48:20'),
(10, 19, 0, '2025-04-12 13:48:27', '2025-04-12 13:48:27'),
(11, 12, 0, '2025-05-02 08:30:40', '2025-05-02 08:30:40'),
(12, 22, 22, '2025-05-02 09:12:13', '2025-05-02 09:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int NOT NULL,
  `country_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`) VALUES
(1, 1, 'Dhaka Division'),
(2, 1, 'Chattogram Division'),
(3, 1, 'Khulna Division'),
(4, 1, 'Barishal Division'),
(5, 1, 'Rajshahi Division'),
(6, 1, 'Rangpur Division'),
(7, 1, 'Sylhet Division'),
(8, 1, 'Mymensingh Division');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_type`, `gender`, `dob`, `religion`, `country_code`, `mobile_number`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pulak Bala', 'pulakbala0524@gmail.com', NULL, '$2y$12$lLc8XaGLnblK/Odul2FF2.Cbi7N1stZkB6uQWDfY3qcT58ZVhXojm', 'Myself', 'Male', '2000-11-15', 'Muslim', '+88', '+881754826927', 'user', NULL, '2025-02-23 00:26:11', '2025-02-23 00:26:11'),
(2, 'Lima Bala', 'lima@gmail.com', NULL, '$2y$12$d47UgVSbLgCbtGEEeAwO/OXKuirmBITVGE8OBN/XX.qc3hPESmUwG', 'Myself', 'Male', '2000-11-12', 'Muslim', '+88', '+88174555554', 'user', NULL, '2025-02-23 02:46:32', '2025-02-23 02:46:32'),
(3, 'dipto v', 'diptov@gmail.com', NULL, '$2y$12$OKXsFsS4QhJhRC.IBjDLS.fMIW/BcBK3nn4aLP2zzct4zF1kSUK5K', 'Myself', 'Male', '1998-11-11', 'Muslim', '+88', '+88017463542', 'user', NULL, '2025-02-23 03:15:21', '2025-02-23 03:15:21'),
(4, 'Makin Ahamed', 'makin@gmail.com', NULL, '$2y$12$Qx8RM0BFLet2Qs4ks2VHZe3vE8kw44rwz.b2jV.rw93EwsMGsZP2e', 'Myself', 'Male', '1998-12-14', 'Muslim', '+88', '+880172343434', 'user', NULL, '2025-02-23 05:35:51', '2025-02-23 05:35:51'),
(5, 'Joy Hasan', 'joy@gmail.com', NULL, '$2y$12$5KN.b3DLlp1EtMVF7b97M.XPUBmD6Y0VxaXZPgYRIVKSy7KVYlocC', 'Myself', 'Male', '2004-11-15', 'Muslim', '+88', '+881754826922', 'user', NULL, '2025-02-23 09:23:51', '2025-02-23 09:23:51'),
(6, 'shaishab Bala', 'shaishab@gmail.com', NULL, '$2y$12$2BqJDtcrQzNvZrWIo2.AauUYE9dw0sDPA38QxsDnroRO/mYCeKGdK', 'Myself', 'Male', '2004-11-15', 'Muslim', '+88', '+881754826922', 'user', NULL, '2025-02-23 09:33:44', '2025-02-23 09:33:44'),
(7, 'shipon hawlader', 'shipon@gmail.com', NULL, '$2y$12$IdSCYEkLVECDVO5evlVgr.iy.0Z55yZjXzg90oTl5BOTu4XY7LgPO', 'Myself', 'Male', '2000-11-11', 'Muslim', '+88', '+880173434343', 'user', NULL, '2025-02-23 09:56:08', '2025-02-23 09:56:08'),
(8, 'nuru bondhu', 'nuru@gmail.com', NULL, '$2y$12$ZY1vbxFkR0j//ZRlP62jxukyzvU9CkzGbPzqyrB37rRu.se/kNZAK', 'Myself', 'Male', '2000-12-11', 'Muslim', '+88', '+8801734343434', 'user', NULL, '2025-02-23 10:09:25', '2025-02-23 10:09:25'),
(9, 'Hena kothye', 'hena@gmail.com', NULL, '$2y$12$Pctcq/nYgUNG6/PonFacdOEmAJu7v4kllMssC..vIUNgoxocqxj7G', 'Myself', 'Female', '2000-12-11', 'Muslim', '+88', '+880172343434', 'user', NULL, '2025-02-23 10:15:24', '2025-02-23 10:15:24'),
(10, 'Sumona Roy', 'sumona@gmail.com', NULL, '$2y$12$sIkOSWX98CtwYIJ.tFZV.O05D0qYrxsursC6u8D3H9APUmdflzwwW', 'Myself', 'Female', '2000-12-11', 'Muslim', '+88', '+88017234343', 'user', NULL, '2025-02-23 10:18:18', '2025-02-23 10:18:18'),
(11, 'Jannatul Nayem', 'nayem@gmail.com', NULL, '$2y$12$CWfS3DxMwrQetKKBd3DY4.fpiM0hCLdvPTJOWNpylqIyuH0Q0XW7m', 'Myself', 'Male', '1995-01-11', 'Muslim', '+88', '+8801723452892', 'user', NULL, '2025-03-13 15:42:04', '2025-03-13 15:42:04'),
(12, 'Anika Tabasum', 'anika@gmail.com', NULL, '$2y$12$xVhdwCtKuRiaQYLGYVgIVu/ppEB/rIJ1L175n1BcU6vCFoAp7lpWK', 'Myself', 'Male', '2002-03-14', 'Muslim', '+88', '+8801743478384', 'user', NULL, '2025-03-14 10:42:19', '2025-03-14 10:42:19'),
(13, 'Shyeed Amin', 'shyeed@gmail.com', NULL, '$2y$12$Zi9rDZGS2ct/JzFVWSm0weHQruYS.4m5ZBynEWeR78Lr.Wx1iuV0a', 'Myself', 'Male', '1990-11-12', 'Muslim', '+88', '+8801734349502', 'user', NULL, '2025-03-16 08:55:54', '2025-03-16 08:55:54'),
(14, 'Ms.Bithi Emran', 'bithi@gmail.com', NULL, '$2y$12$4cPwrC20Yn6368QBYoD1g.RDU29swh1VJGDDKGgD/CBEtXn0vN8bG', 'Myself', 'Female', '2000-11-12', 'Muslim', '+88', '+8801745213674', 'user', NULL, '2025-03-16 11:02:59', '2025-03-16 11:02:59'),
(15, 'bayzid ahamed', 'bayzid@gmail.com', NULL, '$2y$12$cIr7mUQew3nZ5sq1sed6i.5R29JMurLzKQ7ICVzzdg00coBPUKcC.', 'Myself', 'Male', '1999-11-12', 'Muslim', '+88', '+8801745632112', 'user', NULL, '2025-03-17 21:20:44', '2025-03-17 21:20:44'),
(16, 'mamun mia', 'mamun@gmail.com', NULL, '$2y$12$ZP9/.9no7c6k9BHnLURIWeA.Hvd9lD./EnX.OFZGDJlC9oaAI0JEe', 'Myself', 'Male', '1999-11-12', 'Muslim', '+88', '+88017456975241', 'user', NULL, '2025-03-20 10:29:14', '2025-03-20 10:29:14'),
(17, 'sithi bala', 'sithi@gmail.com', NULL, '$2y$12$OntT6n.RajTLXQH6/7fvWOAyv9CtNDSGeYay.gn0EmOMa2q5NSuZK', 'Myself', 'Male', '2000-11-11', 'Muslim', '+88', '+8801745543673', 'user', NULL, '2025-03-25 11:47:11', '2025-03-25 11:47:11'),
(18, 'Hitlar Germany', 'hitlar@gmail.com', NULL, '$2y$12$eQhu4KQJPPNlBVXHJvcewO9vokvnPi.IgVKe0k5oRkvsO3sLe/nZO', 'Myself', 'Male', '1901-11-11', 'Muslim', '+88', '+8801745543673', 'user', NULL, '2025-04-07 04:46:10', '2025-04-07 04:46:10'),
(19, 'Karina kappor', 'karina@gmail.com', NULL, '$2y$12$T.AuO9uiyTh9LZUjfWxGFeBSUNgQePqsyyREAPve8cRuhDSw5Amhy', 'Myself', 'Female', '1994-11-11', 'Muslim', '+88', '+8801754826927', 'user', NULL, '2025-04-09 03:20:41', '2025-04-10 05:41:43'),
(20, 'Shipon Howlader', 'shipons@gmail.com', NULL, '$2y$12$.sEf0bQGau3u6bnjhcKhzuQIcwNeN5F9OfKPg3Qe7.u/mFZUBPHpi', 'Myself', 'Male', '1998-12-15', 'Muslim', '+88', '+8801754826927', 'user', NULL, '2025-04-22 12:48:50', '2025-04-22 12:48:50'),
(21, 'Nayem islam', 'nota@gmail.com', NULL, '$2y$12$sZvmWu7zHzWZJT1IUGny..xA44Yz6Akzh4sCcuicvo3HcCgEInq2y', 'Myself', 'Male', '2000-12-12', 'Muslim', '+88', '+8801754826927', 'user', NULL, '2025-04-22 15:08:15', '2025-04-22 15:08:15'),
(22, 'Samrat Hossain', 'samrat@gmail.com', NULL, '$2y$12$AfDFtpiTdaKUINXQC7kLpeT5t1NvS4qwX5qgb9YMKfpxsVbpCTu7q', 'Myself', 'Male', '2000-12-11', 'Muslim', '+88', '+881754826927', 'user', '3JNpSiqnowQSi7rXqx82s5Mqjg2YLqsCIZfUOFqfAvFAPtbtvJO1r0sGeiBP', '2025-05-01 05:21:13', '2025-05-01 05:21:13'),
(23, 'দীপিকা পাডুকন', 'dipika@gmail.com', NULL, '$2y$12$IVsvAyhcEO7xV/3usrr5QeURDMYH4seLMqyg1EJf0P0qsU.IIPmSe', 'Myself', 'Female', '2000-12-12', 'Muslim', '+88', '+881754826927', 'user', NULL, '2025-05-02 05:59:05', '2025-05-02 05:59:05'),
(24, 'Mahfuja Usha', 'mahfuja@gmail.com', NULL, '$2y$12$JEUAReUyz1rNAg7yd0/qrOM7skoCaWCUfrUoQwr/MKf8XAHfqQarq', 'Myself', 'Female', '2000-12-11', 'Muslim', '+88', '+8801754826927', 'user', NULL, '2025-05-03 11:32:37', '2025-05-03 11:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `package_id` bigint UNSIGNED NOT NULL,
  `used_connections` int DEFAULT '0',
  `payment_status` enum('pending','completed','failed') DEFAULT 'pending',
  `expiry_date` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `subscribed_at` date DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `notes` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `user_id`, `package_id`, `used_connections`, `payment_status`, `expiry_date`, `is_active`, `subscribed_at`, `transaction_id`, `notes`, `created_at`, `updated_at`) VALUES
(33, 19, 7, 0, 'pending', '2025-06-19', 1, '2025-04-19', NULL, NULL, '2025-04-19 07:22:15', '2025-04-19 07:22:15'),
(34, 20, 7, 1, 'pending', '2025-06-22', 1, '2025-04-22', NULL, NULL, '2025-04-22 14:44:14', '2025-04-22 14:44:30'),
(35, 22, 7, 2, 'pending', '2025-07-02', 0, '2025-05-02', NULL, NULL, '2025-05-01 23:46:35', '2025-05-03 11:25:01'),
(36, 22, 8, 0, 'pending', '2025-05-03', 1, '2025-05-03', NULL, 'Upgraded from previous package', '2025-05-03 11:25:01', '2025-05-03 11:25:01'),
(37, 24, 7, 0, 'pending', '2025-07-03', 1, '2025-05-03', NULL, NULL, '2025-05-03 11:33:47', '2025-05-03 11:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `viewed_contacts`
--

CREATE TABLE `viewed_contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `contact_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `viewed_contacts`
--

INSERT INTO `viewed_contacts` (`id`, `user_id`, `contact_id`, `created_at`, `updated_at`) VALUES
(11, 18, 8, '2025-04-07 06:57:36', '2025-04-07 06:57:36'),
(12, 19, 8, '2025-04-09 03:36:02', '2025-04-09 03:36:02'),
(13, 19, 9, '2025-04-12 03:14:24', '2025-04-12 03:14:24'),
(14, 1, 9, '2025-04-12 13:41:18', '2025-04-12 13:41:18'),
(15, 20, 10, '2025-04-22 14:44:30', '2025-04-22 14:44:30'),
(16, 22, 11, '2025-05-01 23:46:43', '2025-05-01 23:46:43'),
(17, 22, 14, '2025-05-03 11:21:05', '2025-05-03 11:21:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_information`
--
ALTER TABLE `basic_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `expected_partners`
--
ALTER TABLE `expected_partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `family_information`
--
ALTER TABLE `family_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ignored_users`
--
ALTER TABLE `ignored_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriage_information`
--
ALTER TABLE `marriage_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation_information`
--
ALTER TABLE `occupation_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permanent_addresses`
--
ALTER TABLE `permanent_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pledges`
--
ALTER TABLE `pledges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `present_addresses`
--
ALTER TABLE `present_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shortlisted_users`
--
ALTER TABLE `shortlisted_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `viewed_contacts`
--
ALTER TABLE `viewed_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_information`
--
ALTER TABLE `basic_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1054;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `expected_partners`
--
ALTER TABLE `expected_partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_information`
--
ALTER TABLE `family_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ignored_users`
--
ALTER TABLE `ignored_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marriage_information`
--
ALTER TABLE `marriage_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `occupation_information`
--
ALTER TABLE `occupation_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permanent_addresses`
--
ALTER TABLE `permanent_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pledges`
--
ALTER TABLE `pledges`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `present_addresses`
--
ALTER TABLE `present_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `shortlisted_users`
--
ALTER TABLE `shortlisted_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `viewed_contacts`
--
ALTER TABLE `viewed_contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basic_information`
--
ALTER TABLE `basic_information`
  ADD CONSTRAINT `basic_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cities_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cities_ibfk_3` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `districts_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expected_partners`
--
ALTER TABLE `expected_partners`
  ADD CONSTRAINT `expected_partners_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `family_information`
--
ALTER TABLE `family_information`
  ADD CONSTRAINT `family_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `marriage_information`
--
ALTER TABLE `marriage_information`
  ADD CONSTRAINT `marriage_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `occupation_information`
--
ALTER TABLE `occupation_information`
  ADD CONSTRAINT `occupation_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permanent_addresses`
--
ALTER TABLE `permanent_addresses`
  ADD CONSTRAINT `permanent_addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD CONSTRAINT `personal_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pledges`
--
ALTER TABLE `pledges`
  ADD CONSTRAINT `pledges_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `present_addresses`
--
ALTER TABLE `present_addresses`
  ADD CONSTRAINT `present_addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD CONSTRAINT `user_packages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_packages_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `viewed_contacts`
--
ALTER TABLE `viewed_contacts`
  ADD CONSTRAINT `viewed_contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `viewed_contacts_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
