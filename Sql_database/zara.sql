-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 06:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zara`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `admin_id`, `collection_member`, `date`, `amount`, `loan_id`, `free1`, `created_at`, `updated_at`) VALUES
(5, '9', '3', '2019-11-26', '2000', '25', NULL, '2019-11-26 06:11:31', '2019-11-26 06:35:35'),
(6, '8', '4', '2019-11-20', '5500', '26', NULL, '2019-11-26 06:32:57', '2019-11-26 13:20:50'),
(7, '8', '4', '2019-11-26', '500', NULL, NULL, '2019-11-26 09:55:54', '2019-11-26 09:55:54'),
(8, '5', '2', '2019-11-27', '5000', '27', NULL, '2019-11-27 03:51:27', '2019-11-27 03:51:27'),
(9, '9', '3', '2019-11-29', '200', NULL, NULL, '2019-11-27 03:53:44', '2019-11-27 03:53:52'),
(10, '5', '5', '2019-11-29', '1500', '28', NULL, '2019-11-29 06:06:28', '2019-11-29 06:08:22'),
(11, '5', '4', '2020-10-05', '10', '29', NULL, '2020-10-05 17:06:37', '2020-10-05 17:06:37'),
(12, '5', '4', '2020-10-05', '10', '30', NULL, '2020-10-05 17:16:38', '2020-10-05 17:16:38'),
(13, '5', '5', '2020-10-05', '500', '31', NULL, '2020-10-05 17:34:38', '2020-10-05 17:34:38'),
(14, '5', '4', '2020-10-05', '500', '32', NULL, '2020-10-05 17:35:05', '2020-10-05 17:35:05'),
(15, '5', '5', '2020-10-05', '500', '33', NULL, '2020-10-05 17:46:31', '2020-10-05 17:46:31'),
(16, '5', '5', '2020-10-05', '500', '34', NULL, '2020-10-05 17:46:54', '2020-10-05 17:46:54'),
(17, '8', '6', '2020-10-06', '5000', NULL, NULL, '2020-10-06 17:57:08', '2020-10-06 17:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_mobile1`, `company_email`, `company_website`, `company_address`, `country`, `company_mobile2`, `company_mobile3`, `company_image`, `created_at`, `updated_at`) VALUES
(6, 'LS Soft', '01318712782', 'abu.sayeed.diu@gmail.com', 'www.lssoft.com', 'Mirpur -13,Road-4 Dhaka', 'Bangladesh', NULL, NULL, 'public/image/Untitled-1.png', '2019-03-26 12:36:41', '2020-10-07 16:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

CREATE TABLE `company_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_users`
--

INSERT INTO `company_users` (`id`, `first_name`, `last_name`, `email`, `user_mobile`, `password`, `user_role`, `user_status`, `created_at`, `updated_at`) VALUES
(5, 'Admin', NULL, 'admin@gmail.com', '01750758262', '$2y$10$E5exVqg4.5VIZkVlBFJr4.t0aj3qyPxuJXwmcQlIKtSBowD5YQntK', 1, 1, '2019-04-03 23:37:21', '2020-10-07 16:12:22'),
(8, 'Sayeed', NULL, 'sayeed@gmail.com', '01318712782', '$2y$10$E5exVqg4.5VIZkVlBFJr4.t0aj3qyPxuJXwmcQlIKtSBowD5YQntK', 2, 1, '2019-08-31 12:40:35', '2019-11-28 17:33:47'),
(9, 'Sumon', 'Islam', 'sumon@gmail.com', '01711417496', '$2y$10$E5exVqg4.5VIZkVlBFJr4.t0aj3qyPxuJXwmcQlIKtSBowD5YQntK', 2, 1, '2019-09-05 11:20:06', '2019-11-28 17:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `expense_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_type`, `purpose`, `date`, `total_amount`, `details`, `free`, `created_at`, `updated_at`) VALUES
(2, 'Gas Bill', 'Gas Bill', '2019-10-01', '700', NULL, NULL, '2019-10-01 09:47:32', '2019-10-01 09:47:32'),
(3, 'Cable bill', 'Bill', '2019-10-03', '550', 'argent', NULL, '2019-10-03 14:59:18', '2019-10-03 14:59:18'),
(4, 'Clothing', 'Frezz', '2019-11-10', '5', 'kk', NULL, '2019-11-10 07:27:51', '2019-11-10 07:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `kistis`
--

CREATE TABLE `kistis` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kistis`
--

INSERT INTO `kistis` (`id`, `admin_id`, `member_id`, `date`, `amount`, `free`, `created_at`, `updated_at`) VALUES
(1, '9', '4', '2019-11-26', '10000', NULL, '2019-11-26 08:55:41', '2019-11-26 08:55:41'),
(3, '9', '3', '2019-11-29', '500', NULL, '2019-11-26 09:23:36', '2019-11-26 09:23:36'),
(4, '8', '3', '2019-11-26', '30', NULL, '2019-11-26 09:47:43', '2019-11-26 09:47:43'),
(5, '8', '4', '2019-11-26', '240', NULL, '2019-11-26 09:49:28', '2019-11-26 09:52:59'),
(6, '8', '6', '2020-10-07', '5000', NULL, '2020-10-06 18:05:17', '2020-10-06 18:05:17'),
(7, '5', '3', '2020-10-07', '100', NULL, '2020-10-07 16:03:25', '2020-10-07 16:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proces` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit` varchar(44) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `loanper` int(11) DEFAULT NULL,
  `shareper` int(11) DEFAULT NULL,
  `processper` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `admin`, `member`, `date`, `amount`, `from_free`, `admit`, `msp`, `proces`, `share`, `book`, `profit`, `total`, `status`, `type`, `loanper`, `shareper`, `processper`, `created_at`, `updated_at`) VALUES
(25, '9', '3', '2019-11-26', '20000', '40', '100', '100', '200', '500', '20', '2000', '22000', '457', NULL, NULL, NULL, NULL, '2019-11-26 06:11:31', '2019-11-26 06:35:35'),
(26, '5', '4', '2019-11-26', '55000', '40', '100', '100', '550', '1375', '20', '5500', '60500', '456', NULL, NULL, NULL, NULL, '2019-11-26 06:32:56', '2019-11-26 13:20:50'),
(27, '5', '2', '2019-11-27', '50000', '40', '100', '100', '500', '1250', '20', '5000', '55000', '8777', NULL, NULL, NULL, NULL, '2019-11-27 03:51:27', '2019-11-27 03:51:27'),
(28, '5', '5', '2019-11-29', '15000', '40', '100', '100', '150', '375', '20', '1500', '17185', '785', NULL, NULL, NULL, NULL, '2019-11-29 06:06:28', '2019-11-29 06:08:21'),
(29, '5', '4', '2020-10-05', '100', NULL, '2', '3', '2', '3', '1', '2', '102', '11', 1, NULL, NULL, NULL, '2020-10-05 17:06:37', '2020-10-05 17:06:37'),
(30, '5', '4', '2020-10-05', '100', '2', '2', '2', '2', '2', '1', '2', '111', '11', 2, NULL, NULL, NULL, '2020-10-05 17:16:38', '2020-10-05 17:16:38'),
(33, '5', '5', '2020-10-05', '5000', '89', '5', '5', '250', '250', '5', '150', '5150', '604', 1, 3, 5, 5, '2020-10-05 17:46:31', '2020-10-05 18:14:10'),
(34, '5', '5', '2020-10-05', '5000', '7', '5', '5', '250', '250', '500', '350', '6367', '1017', 2, 7, 5, 5, '2020-10-05 17:46:54', '2020-10-05 18:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memberno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unitname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unitno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fhname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upazila` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subvillage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subpost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subupazila` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdistrict` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `dates`, `memberno`, `unitname`, `unitno`, `name`, `mobile`, `nid`, `age`, `fhname`, `profession`, `village`, `post`, `upazila`, `district`, `subname`, `relation`, `subvillage`, `subpost`, `subupazila`, `subdistrict`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, '2019-11-17', '1', 'Manda-1', '2', 'Saiful Haque John', '01968949468', '36', '36', 'Ismail Sarker', 'Farmer', 'Chokvolai', 'Kusumba', 'Manda', 'Naogaon', 'Saifulah', 'Brothers', 'Krisnapur', 'Kusumba', 'Manda', 'Naogaon', '1', 'public/image/5dd043f0a841f04e18f48-70ac-41e4-bd79-503b6c136546_200x200.png', '2019-11-16 18:46:08', '2019-11-18 05:46:53'),
(3, '2019-11-18', '20', 'Manda-1', '34', 'monsur', '09876788765678', '1234579564', '5', 'Ismail Sarker', 'Farmer', 'Chokvolai', 'Chakkanu', 'Manda', 'Naogaon', 'Saifulah', 'Brothers', 'Krisnapurkk', 'Kusumba', 'Manda', 'Naogaon', '1', 'public/image/5dd230961131011-2-corn-png-picture-thumb.png', '2019-11-18 05:48:06', '2019-11-18 05:48:06'),
(4, '2019-11-18', '3', 'manda-2', '2', 'sumon sarker', '01717-291884', '30', '30', 'Ismail Sarker', 'Teacher', 'Chokvolai', 'Kusumba', 'Manda', 'Naogaon', 'Saifulah', 'Brothers', 'Krisnapurkk', 'Kusumba', 'Manda', 'Naogaon', '1', 'public/image/5dd23ad14c6482764472205_611bc855f1_b.jpg', '2019-11-18 06:31:45', '2019-11-18 06:32:29'),
(5, '2019-11-20', '4', NULL, NULL, 'Sara', '2333232323', '1234579564', '10', 'Rana', 'Machi', 'Deluyabari', 'Kusumba', 'Manda', 'Naogaon', 'Arifs', 'Wife', 'Chokgopal', 'Kusumba', 'Manda', 'Naogaon', '1', 'public/image/5dd57af4c7c89f912bde2e344a9f6ed641ce822cca5b5.jpg', '2019-11-20 17:42:12', '2019-11-20 17:42:12'),
(6, '2020-10-06', '34', 'manda', '34', 'Sayeed', '01318712782', '346578', '25', 'Nazrul Islam', 'Teacher', 'Manda', 'manda', 'Manda', 'Naogaon', 'hello', 'hello', 'manda', 'manda', 'Manda', 'Naogaon', '1', 'public/image/5f7caf5c8293289339293_2572487399676484_5210984176995532800_o.jpg', '2020-10-06 17:54:36', '2020-10-06 17:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_24_193233_create_verify_tokens_table', 1),
(4, '2019_03_25_060543_create_companies_table', 2),
(5, '2019_03_25_081800_create_companies_table', 3),
(6, '2019_03_25_093258_create_branches_table', 4),
(7, '2019_03_25_101142_create_custormers_table', 5),
(8, '2019_03_25_102732_create_suppliers_table', 6),
(9, '2019_03_26_120029_create_company_users_table', 7),
(10, '2019_03_27_050006_create_groups_table', 8),
(11, '2019_03_27_053824_create_categories_table', 9),
(12, '2019_03_27_092214_create_accountheads_table', 10),
(13, '2019_03_30_105844_create_transvouchers_table', 11),
(14, '2019_03_30_111633_create_paymentvouchers_table', 11),
(15, '2019_03_30_111722_create_collectionvouchers_table', 11),
(16, '2019_04_08_070029_create_expencevouchers_table', 12),
(17, '2019_04_08_091449_create_incomevouchers_table', 12),
(18, '2019_09_01_153030_create_buyproducts_table', 12),
(19, '2019_09_03_184133_create_profiles_table', 13),
(20, '2019_09_07_085733_create_sales_table', 14),
(21, '2019_09_12_103219_create_transactions_table', 15),
(22, '2019_09_16_131514_create_wallets_table', 16),
(23, '2019_09_23_144411_create_products_table', 17),
(24, '2019_09_26_124448_create_shop_customers_table', 18),
(25, '2019_09_26_124515_create_shop_orders_table', 18),
(26, '2019_09_26_125709_create_shop_orderdetails_table', 18),
(27, '2019_09_27_143053_create_stocks_table', 19),
(28, '2019_10_01_151955_create_expenses_table', 20),
(29, '2019_10_01_152010_create_loans_table', 20),
(30, '2019_10_04_084043_create_ccollections_table', 21),
(31, '2019_11_17_001823_create_members_table', 22),
(32, '2019_11_21_234756_create_collections_table', 23),
(33, '2019_11_22_122828_create_loans_table', 24),
(34, '2019_11_22_122842_create_shares_table', 24),
(35, '2019_11_23_120241_create_m_s_ps_table', 25),
(36, '2019_11_23_122735_create_msps_table', 26),
(37, '2019_11_26_141720_create_kistis_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `msps`
--

CREATE TABLE `msps` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `msps`
--

INSERT INTO `msps` (`id`, `admin`, `member`, `date`, `tk`, `loan_id`, `created_at`, `updated_at`) VALUES
(9, '9', '5', '2019-11-26', '100', '25', '2019-11-26 06:11:31', '2019-11-26 06:11:31'),
(10, '9', '5', '2019-11-26', '100', '26', '2019-11-26 06:32:57', '2019-11-26 06:32:57'),
(11, '5', '2', '2019-11-27', '100', '27', '2019-11-27 03:51:27', '2019-11-27 03:51:27'),
(12, '5', '5', '2019-11-29', '100', '28', '2019-11-29 06:06:28', '2019-11-29 06:06:28'),
(13, '5', '4', '2020-10-05', '100', '29', '2020-10-05 17:06:37', '2020-10-05 17:06:37'),
(14, '5', '4', '2020-10-05', '100', '30', '2020-10-05 17:16:38', '2020-10-05 17:16:38'),
(15, '5', '5', '2020-10-05', '100', '31', '2020-10-05 17:34:38', '2020-10-05 17:34:38'),
(16, '5', '4', '2020-10-05', '100', '32', '2020-10-05 17:35:05', '2020-10-05 17:35:05'),
(17, '5', '5', '2020-10-05', '100', '33', '2020-10-05 17:46:31', '2020-10-05 17:46:31'),
(18, '5', '5', '2020-10-05', '100', '34', '2020-10-05 17:46:54', '2020-10-05 17:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `designation`, `mobile1`, `mobile2`, `address`, `email`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ahnaf', 'CEO', '01798-493171', '01750-758262', 'Green Road, Dhaka 1212', 'Dablu@gmail.com', 'its very good', 'public/image/IMG-20160913-WA0003.jpg', '2019-09-04 02:32:28', '2019-09-27 11:42:44'),
(2, 'Sayeed', 'Web Developer', '8801750-758262', '01750-758262', 'Manda ,Naogaon, bangladesh', 'Nurul.sayeed.dev@gmail.com', 'I am a Good boy', 'public/image/1.JPG', '2019-09-04 02:33:48', '2019-09-27 11:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loan_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `admin_id`, `member_id`, `date`, `balance`, `loan_id`, `created_at`, `updated_at`) VALUES
(20, '5', '4', '2019-11-26', '1375', '26', '2019-11-26 06:32:57', '2019-11-26 13:20:50'),
(21, '5', '2', '2019-11-27', '1250', '27', '2019-11-27 03:51:27', '2019-11-27 03:51:27'),
(23, '5', '4', '2020-10-05', '2.5', '29', '2020-10-05 17:06:37', '2020-10-05 17:06:37'),
(25, '5', '5', '2020-10-05', '125', '31', '2020-10-05 17:34:38', '2020-10-05 17:34:38'),
(26, '5', '4', '2020-10-05', '125', '32', '2020-10-05 17:35:05', '2020-10-05 17:35:05'),
(27, '5', '5', '2020-10-05', '125', '33', '2020-10-05 17:46:31', '2020-10-05 17:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `verify_tokens`
--

CREATE TABLE `verify_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_tokens`
--

INSERT INTO `verify_tokens` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(10, 'monsurahmedshafiq@gmail.com', '787501', '2019-03-24 02:04:50', '2019-03-24 02:04:50'),
(11, 'dilouarbd@gmail.com', '345839', '2019-08-31 13:10:25', '2019-08-31 13:10:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kistis`
--
ALTER TABLE `kistis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msps`
--
ALTER TABLE `msps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_tokens`
--
ALTER TABLE `verify_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kistis`
--
ALTER TABLE `kistis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `msps`
--
ALTER TABLE `msps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `verify_tokens`
--
ALTER TABLE `verify_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
