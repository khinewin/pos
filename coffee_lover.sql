-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2017 at 12:58 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_lan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `category_name`) VALUES
(1, '2017-07-29 06:41:20', '2017-07-29 06:41:20', 'Hot Coffee'),
(2, '2017-07-29 06:41:39', '2017-07-29 06:41:39', 'Cold Coffee'),
(3, '2017-07-29 06:41:44', '2017-07-29 06:41:44', 'Juice'),
(5, '2017-07-29 06:58:37', '2017-07-29 06:58:37', 'Cake'),
(6, '2017-07-31 04:27:17', '2017-07-31 04:27:17', 'Mix Shake');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_price` double(8,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `content_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `created_at`, `updated_at`, `content_name`, `content_price`, `category_id`, `content_cover`) VALUES
(2, '2017-07-29 07:52:47', '2017-07-29 07:52:47', 'Espresso', 2000.00, 1, 'Espresso597c3ecf134d4.jpg'),
(3, '2017-07-29 07:53:01', '2017-07-29 07:53:01', 'Black Coffee', 1500.00, 1, 'Black Coffee597c3edd88542.jpg'),
(4, '2017-07-29 07:53:17', '2017-07-29 07:53:17', 'Cappuccino Coffee', 2000.00, 1, 'Cappuccino Coffee597c3eede2a81.jpg'),
(5, '2017-07-29 07:53:32', '2017-07-31 11:16:05', 'Ice Coffee', 2000.00, 2, 'Ice Coffee597c3efcf3db0.jpg'),
(6, '2017-07-29 07:53:55', '2017-07-29 07:53:55', 'Ice Espresso Coffee', 2000.00, 2, 'Ice Espresso Coffee597c3f130dec3.jpg'),
(7, '2017-07-29 07:54:10', '2017-07-29 07:54:10', 'Apple Juice', 2000.00, 3, 'Apple Juice597c3f22a0b1d.jpg'),
(8, '2017-07-29 07:54:22', '2017-07-29 07:54:22', 'Orange Juice', 1500.00, 3, 'Orange Juice597c3f2e92f18.jpg'),
(9, '2017-07-29 07:54:56', '2017-07-29 07:54:56', 'DoNut\'s', 500.00, 5, 'DoNut\'s597c3f50c5a22.jpg'),
(10, '2017-07-29 08:15:44', '2017-07-29 08:15:44', 'J\'Donut', 500.00, 5, 'J\'Donut597c44301e6db.jpg'),
(11, '2017-07-29 08:16:08', '2017-07-31 04:26:32', 'Ice Cappuccino Coffee', 1500.00, 2, 'Ice Cappuccino Coffee597eb1670adfa.jpg'),
(13, '2017-07-31 04:27:34', '2017-07-31 04:27:34', 'Apple Mix Shake', 2000.00, 6, 'Apple Mix Shake597eb1b657bfc.jpg');

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2017_07_27_174516_create_permission_tables', 1),
(22, '2017_07_29_130743_create_categories_table', 2),
(23, '2017_07_29_133533_create_contents_table', 3),
(27, '2017_07_31_174722_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(4, 2, 'App\\User'),
(2, 3, 'App\\User'),
(3, 4, 'App\\User'),
(2, 5, 'App\\User'),
(1, 6, 'App\\User'),
(2, 7, 'App\\User'),
(3, 8, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deliver_status` int(11) DEFAULT NULL,
  `cash_status` int(11) DEFAULT NULL,
  `casher_id` int(11) DEFAULT NULL,
  `cash_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `customer`, `cart`, `user_id`, `deliver_status`, `cash_status`, `casher_id`, `cash_date`) VALUES
(2, '2017-07-31 12:10:30', '2017-07-31 12:10:30', 'c_1', 'O:8:"App\\Cart":3:{s:5:"items";a:2:{i:10;a:3:{s:3:"qty";i:2;s:5:"price";d:1000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:9;a:3:{s:3:"qty";i:1;s:5:"price";d:500;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:3;s:11:"totalAmount";d:1500;}', 7, NULL, NULL, NULL, NULL),
(3, '2017-07-31 12:12:35', '2017-07-31 12:12:35', 'c_2', 'O:8:"App\\Cart":3:{s:5:"items";a:3:{i:13;a:3:{s:3:"qty";i:2;s:5:"price";d:4000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:13;s:10:"created_at";s:19:"2017-07-31 10:57:34";s:10:"updated_at";s:19:"2017-07-31 10:57:34";s:12:"content_name";s:15:"Apple Mix Shake";s:13:"content_price";d:2000;s:11:"category_id";i:6;s:13:"content_cover";s:32:"Apple Mix Shake597eb1b657bfc.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:13;s:10:"created_at";s:19:"2017-07-31 10:57:34";s:10:"updated_at";s:19:"2017-07-31 10:57:34";s:12:"content_name";s:15:"Apple Mix Shake";s:13:"content_price";d:2000;s:11:"category_id";i:6;s:13:"content_cover";s:32:"Apple Mix Shake597eb1b657bfc.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:11;a:3:{s:3:"qty";i:2;s:5:"price";d:3000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:10;a:3:{s:3:"qty";i:1;s:5:"price";d:500;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:5;s:11:"totalAmount";d:7500;}', 7, NULL, NULL, NULL, NULL),
(4, '2017-08-01 01:54:50', '2017-08-01 07:47:39', 'c_6', 'O:8:"App\\Cart":3:{s:5:"items";a:3:{i:11;a:3:{s:3:"qty";i:2;s:5:"price";d:3000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:10;a:3:{s:3:"qty";i:2;s:5:"price";d:1000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:9;a:3:{s:3:"qty";i:1;s:5:"price";d:500;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:5;s:11:"totalAmount";d:4500;}', 7, 1, 1, 7, NULL),
(5, '2017-08-01 01:54:59', '2017-08-01 07:36:55', 'c_9', 'O:8:"App\\Cart":3:{s:5:"items";a:3:{i:8;a:3:{s:3:"qty";i:2;s:5:"price";d:3000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:8;s:10:"created_at";s:19:"2017-07-29 14:24:22";s:10:"updated_at";s:19:"2017-07-29 14:24:22";s:12:"content_name";s:12:"Orange Juice";s:13:"content_price";d:1500;s:11:"category_id";i:3;s:13:"content_cover";s:29:"Orange Juice597c3f2e92f18.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:8;s:10:"created_at";s:19:"2017-07-29 14:24:22";s:10:"updated_at";s:19:"2017-07-29 14:24:22";s:12:"content_name";s:12:"Orange Juice";s:13:"content_price";d:1500;s:11:"category_id";i:3;s:13:"content_cover";s:29:"Orange Juice597c3f2e92f18.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:7;a:3:{s:3:"qty";i:2;s:5:"price";d:4000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:7;s:10:"created_at";s:19:"2017-07-29 14:24:10";s:10:"updated_at";s:19:"2017-07-29 14:24:10";s:12:"content_name";s:11:"Apple Juice";s:13:"content_price";d:2000;s:11:"category_id";i:3;s:13:"content_cover";s:28:"Apple Juice597c3f22a0b1d.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:7;s:10:"created_at";s:19:"2017-07-29 14:24:10";s:10:"updated_at";s:19:"2017-07-29 14:24:10";s:12:"content_name";s:11:"Apple Juice";s:13:"content_price";d:2000;s:11:"category_id";i:3;s:13:"content_cover";s:28:"Apple Juice597c3f22a0b1d.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:6;a:3:{s:3:"qty";i:2;s:5:"price";d:4000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:6;s:10:"created_at";s:19:"2017-07-29 14:23:55";s:10:"updated_at";s:19:"2017-07-29 14:23:55";s:12:"content_name";s:19:"Ice Espresso Coffee";s:13:"content_price";d:2000;s:11:"category_id";i:2;s:13:"content_cover";s:36:"Ice Espresso Coffee597c3f130dec3.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:6;s:10:"created_at";s:19:"2017-07-29 14:23:55";s:10:"updated_at";s:19:"2017-07-29 14:23:55";s:12:"content_name";s:19:"Ice Espresso Coffee";s:13:"content_price";d:2000;s:11:"category_id";i:2;s:13:"content_cover";s:36:"Ice Espresso Coffee597c3f130dec3.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:6;s:11:"totalAmount";d:11000;}', 7, 1, 1, NULL, NULL),
(6, '2017-08-01 01:55:09', '2017-08-01 07:35:52', 'c_2', 'O:8:"App\\Cart":3:{s:5:"items";a:2:{i:2;a:3:{s:3:"qty";i:2;s:5:"price";d:4000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:2;s:10:"created_at";s:19:"2017-07-29 14:22:47";s:10:"updated_at";s:19:"2017-07-29 14:22:47";s:12:"content_name";s:8:"Espresso";s:13:"content_price";d:2000;s:11:"category_id";i:1;s:13:"content_cover";s:25:"Espresso597c3ecf134d4.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:2;s:10:"created_at";s:19:"2017-07-29 14:22:47";s:10:"updated_at";s:19:"2017-07-29 14:22:47";s:12:"content_name";s:8:"Espresso";s:13:"content_price";d:2000;s:11:"category_id";i:1;s:13:"content_cover";s:25:"Espresso597c3ecf134d4.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:3;a:3:{s:3:"qty";i:2;s:5:"price";d:3000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:3;s:10:"created_at";s:19:"2017-07-29 14:23:01";s:10:"updated_at";s:19:"2017-07-29 14:23:01";s:12:"content_name";s:12:"Black Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:1;s:13:"content_cover";s:29:"Black Coffee597c3edd88542.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:3;s:10:"created_at";s:19:"2017-07-29 14:23:01";s:10:"updated_at";s:19:"2017-07-29 14:23:01";s:12:"content_name";s:12:"Black Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:1;s:13:"content_cover";s:29:"Black Coffee597c3edd88542.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:4;s:11:"totalAmount";d:7000;}', 7, 1, 1, NULL, NULL),
(7, '2017-08-01 07:41:01', '2017-08-01 12:06:58', 'c_7', 'O:8:"App\\Cart":3:{s:5:"items";a:4:{i:13;a:3:{s:3:"qty";i:1;s:5:"price";d:2000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:13;s:10:"created_at";s:19:"2017-07-31 10:57:34";s:10:"updated_at";s:19:"2017-07-31 10:57:34";s:12:"content_name";s:15:"Apple Mix Shake";s:13:"content_price";d:2000;s:11:"category_id";i:6;s:13:"content_cover";s:32:"Apple Mix Shake597eb1b657bfc.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:13;s:10:"created_at";s:19:"2017-07-31 10:57:34";s:10:"updated_at";s:19:"2017-07-31 10:57:34";s:12:"content_name";s:15:"Apple Mix Shake";s:13:"content_price";d:2000;s:11:"category_id";i:6;s:13:"content_cover";s:32:"Apple Mix Shake597eb1b657bfc.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:11;a:3:{s:3:"qty";i:1;s:5:"price";d:1500;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:9;a:3:{s:3:"qty";i:2;s:5:"price";d:1000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:10;a:3:{s:3:"qty";i:4;s:5:"price";d:2000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:8;s:11:"totalAmount";d:6500;}', 8, 1, NULL, 7, NULL),
(8, '2017-08-02 03:01:29', '2017-08-02 03:03:25', 'c_6', 'O:8:"App\\Cart":3:{s:5:"items";a:4:{i:13;a:3:{s:3:"qty";i:2;s:5:"price";d:4000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:13;s:10:"created_at";s:19:"2017-07-31 10:57:34";s:10:"updated_at";s:19:"2017-07-31 10:57:34";s:12:"content_name";s:15:"Apple Mix Shake";s:13:"content_price";d:2000;s:11:"category_id";i:6;s:13:"content_cover";s:32:"Apple Mix Shake597eb1b657bfc.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:13;s:10:"created_at";s:19:"2017-07-31 10:57:34";s:10:"updated_at";s:19:"2017-07-31 10:57:34";s:12:"content_name";s:15:"Apple Mix Shake";s:13:"content_price";d:2000;s:11:"category_id";i:6;s:13:"content_cover";s:32:"Apple Mix Shake597eb1b657bfc.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:11;a:3:{s:3:"qty";i:2;s:5:"price";d:3000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:11;s:10:"created_at";s:19:"2017-07-29 14:46:08";s:10:"updated_at";s:19:"2017-07-31 10:56:32";s:12:"content_name";s:21:"Ice Cappuccino Coffee";s:13:"content_price";d:1500;s:11:"category_id";i:2;s:13:"content_cover";s:38:"Ice Cappuccino Coffee597eb1670adfa.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:10;a:3:{s:3:"qty";i:3;s:5:"price";d:1500;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:10;s:10:"created_at";s:19:"2017-07-29 14:45:44";s:10:"updated_at";s:19:"2017-07-29 14:45:44";s:12:"content_name";s:7:"J\'Donut";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"J\'Donut597c44301e6db.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}i:9;a:3:{s:3:"qty";i:2;s:5:"price";d:1000;s:7:"content";O:11:"App\\Content":25:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:11:"\0*\0original";a:7:{s:2:"id";i:9;s:10:"created_at";s:19:"2017-07-29 14:24:56";s:10:"updated_at";s:19:"2017-07-29 14:24:56";s:12:"content_name";s:7:"DoNut\'s";s:13:"content_price";d:500;s:11:"category_id";i:5;s:13:"content_cover";s:24:"DoNut\'s597c3f50c5a22.jpg";}s:8:"\0*\0casts";a:0:{}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:9:"\0*\0events";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}}s:8:"totalQty";i:9;s:11:"totalAmount";d:9500;}', 7, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Manager', 'web', NULL, NULL),
(2, 'Casher', 'web', NULL, NULL),
(3, 'Waiter', 'web', NULL, NULL),
(4, 'Administrator', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `active_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL,
  `last_login_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `active`, `active_ip`, `last_login`, `last_login_ip`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'khinewin', 'khinewin@gmail.com', '$2y$10$VMwl9fzFnCIRH2ga/gfEB.6hSENwbShJUwdiH21QzTDknREGcEv4e', 1, '192.168.0.2', '2017-07-31 13:04:18', '192.168.0.10', '7wPV0v8yunoXrfZOoflLi10G2NeafRMFQqOiXb2t7sT58zO9H5SaHYddJNQW', '2017-07-28 02:25:06', '2017-08-02 04:35:10'),
(7, 'mgmg', 'mgmg@gmail.com', '$2y$10$fS8kZF9ujhKftH2F4F1nn.WUm9U6HNlMvs3.INjtYuaq/CBlp6N.K', 0, '192.168.0.2', '2017-08-02 11:04:53', '192.168.0.2', '7PYxf8RFx62Q1lfuBQ1ifTxCVoLq7oJpYzgZgnOVCMf7v2oMEtrQTjrodEbA', '2017-07-29 09:59:52', '2017-08-02 04:34:53'),
(8, 'koko', 'koko@gmail.com', '$2y$10$JmuAPJHhzRfKCSFUIcBS7uFx0gPZGk0GkfFCEAv1FAqkkOKl77bDG', 0, '192.168.0.100', '2017-07-29 16:31:18', '192.168.0.2', 'jSf9wm9P1JlpR5ZoZZH5rwwQxE2m44rwU27bg90gxq2nL2OWvRvFj3SgygZM', '2017-07-29 10:00:00', '2017-08-01 12:05:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
