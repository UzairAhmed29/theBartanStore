-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2021 at 06:14 PM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebarta_theBartanStore_lv_001`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(14, '1598110943-00462897253-cl_logo1.png', 'Activated', '2020-08-22 10:42:23', '2020-08-22 10:42:44'),
(15, '1598110956-04518321978-cl_logo2.png', 'Activated', '2020-08-22 10:42:36', '2020-08-22 10:42:46'),
(16, '1598110962-02817497521-cl_logo3.png', 'Activated', '2020-08-22 10:42:42', '2020-08-22 10:42:47'),
(17, '1598110973-01079761229-cl_logo4.png', 'Activated', '2020-08-22 10:42:53', '2020-08-22 10:42:56'),
(18, '1598110981-00281139546-cl_logo5.png', 'Activated', '2020-08-22 10:43:01', '2020-08-22 10:43:04'),
(19, '1598110989-03280696417-cl_logo6.png', 'Activated', '2020-08-22 10:43:09', '2020-08-22 10:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Cuttlery', 'cuttlery', 'Activated', '2020-08-15 08:21:31', '2020-08-15 08:23:04'),
(13, 'Bowls', 'bowls', 'Activated', '2020-08-15 10:12:10', '2020-08-15 10:12:18'),
(14, 'Pans', 'pans', 'Activated', '2020-08-15 10:14:06', '2020-08-15 10:14:08'),
(15, 'Bottles', 'bottles', 'Activated', '2020-08-15 10:17:36', '2020-08-15 10:17:40'),
(16, 'cutters', 'cutters', 'Activated', '2020-08-15 10:22:22', '2020-08-15 10:22:38'),
(17, 'Knives', 'knives', 'Activated', '2020-08-15 10:22:29', '2020-08-15 10:22:40'),
(18, 'Scissors', 'scissors', 'Activated', '2020-08-15 10:22:36', '2020-08-15 10:22:41'),
(19, 'Kitchen', 'kitchen', 'Activated', '2020-08-16 10:41:14', '2020-08-16 10:44:09'),
(20, 'Dinnerware', 'dinnerware', 'Activated', '2020-08-16 10:41:24', '2020-08-16 10:43:29'),
(22, 'Coffee & Tea', 'coffee-tea', 'Activated', '2020-08-16 10:41:44', '2020-08-16 10:43:44'),
(24, 'Kids', 'kids', 'Activated', '2020-08-16 10:41:55', '2020-08-16 10:44:06'),
(27, 'Kitchen Tools', 'kitchen-tools', 'Activated', '2020-08-16 10:42:24', '2020-08-16 10:43:57'),
(28, 'Serving Spoons', 'serving-spoons', 'Activated', '2020-08-16 10:42:38', '2020-08-16 10:44:13'),
(30, 'Cookware', 'cookware', 'Activated', '2020-08-16 10:42:58', '2020-08-16 10:43:46'),
(31, 'Mealtime', 'mealtime', 'Activated', '2020-08-16 10:43:08', '2020-08-16 10:43:53'),
(32, 'Dinner Plates', 'dinner-plates', 'Activated', '2020-08-16 10:43:19', '2020-08-16 10:43:41'),
(33, 'Platters', 'platters', 'Activated', '2020-08-16 10:43:25', '2020-08-16 10:43:50'),
(40, 'Bottles & Jugs', 'bottles-jugs', 'Activated', '2020-10-03 09:53:41', '2020-10-03 09:53:47'),
(41, 'Kitchen Acessories', 'kitchen-acessories', 'Activated', '2020-10-17 05:52:59', '2020-10-17 05:53:39'),
(42, 'Food Container', 'food-container', 'Activated', '2020-10-17 05:57:29', '2020-10-17 05:57:35'),
(43, 'Jars', 'jars', 'Activated', '2020-10-17 05:59:27', '2020-10-17 05:59:50'),
(45, 'Baking', 'baking', 'Activated', '2021-02-23 06:31:05', '2021-02-23 06:33:23'),
(46, 'Electronic', 'electronic', 'Activated', '2021-02-23 07:34:48', '2021-02-23 07:35:59'),
(47, 'Thermose', 'thermose', 'Activated', '2021-02-23 07:42:18', '2021-02-23 07:42:26'),
(48, 'Cooler', 'cooler', 'Activated', '2021-05-24 06:16:06', '2021-05-24 06:24:48'),
(49, 'Plastic household', 'plastic-household', 'Activated', '2021-06-01 06:03:52', '2021-06-01 06:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `slug` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newsletter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `mc_api_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mc_list_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_price` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `facebook`, `code`, `newsletter`, `created_at`, `mc_api_key`, `mc_list_id`, `shipping_price`, `updated_at`) VALUES
(1, '795 Folsom Ave, Suite 600 San Francisco, 94107', 'louispierce@example.com', '+ 202-222-2121', 'https://www.facebook.ccom', 'Karachi123@', NULL, '2020-08-08 14:32:43', NULL, NULL, '100', '2021-03-28 06:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Owen Maldonado Leonard', 'uzairahmed2929@gmail.com', 'sdf', '14435422234', 'Hi there', '2020-09-27 05:04:18', '2020-09-27 05:04:18'),
(3, 'Guinevere Bender', 'bytileron@mailinator.com', 'Sint officia non ill', '+1 (509) 541-2399', 'Nihil qui ut odit ve', '2020-09-27 05:17:12', '2020-09-27 05:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `type`, `value`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Black Friday Sale', 'black_friday_110', 'discount', '20', '20 percent discount on all products', '2020-10-03 10:29:24', '2020-10-03 10:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `product_id`, `image`, `image_type`, `status`, `created_at`, `updated_at`) VALUES
(11, 73, '1597586645-03599167726-slider.png', 'carousel', 'Activated', '2020-08-16 09:04:05', '2020-08-16 09:04:07'),
(12, 72, '1597586884-06836357909-wallhaven-01jm2g.jpg', 'carousel', 'Activated', '2020-08-16 09:08:04', '2020-08-16 09:08:08'),
(13, 75, '1597586909-02654381846-wallhaven-n6zmzq.jpg', 'carousel', 'Deactivated', '2020-08-16 09:08:29', '2020-08-23 08:38:16'),
(15, 81, '1597586938-02872173859-wallhaven-4xrgyl.jpg', 'carousel', 'Activated', '2020-08-16 09:08:58', '2020-08-16 09:08:58'),
(17, 83, '1597593171-01445009299-DenbyNaturalCanvasEspressoCups-Setof2_3.png', 'advertisement', 'Activated', '2020-08-16 10:52:51', '2020-08-22 08:47:09'),
(18, 83, '1597593182-00664483215-DenbyNaturalCanvasEspressoCups-Setof2_2.png', 'advertisement', 'Activated', '2020-08-16 10:53:02', '2020-08-16 10:53:07'),
(20, 77, '1598104279-03924482117-wallhaven-763759.jpg', 'advertisement', 'Activated', '2020-08-22 08:51:19', '2020-08-22 08:51:22'),
(21, 74, '1598104846-02019914430-wallhaven-vmp23m.jpg', 'advertisement', 'Activated', '2020-08-22 09:00:46', '2020-08-22 09:00:51'),
(24, 72, '1598109825-02318620471-wallhaven-6qr5eq.jpg', 'advertisement', 'Activated', '2020-08-22 10:23:45', '2020-08-22 10:24:01'),
(26, 70, '1598189065-09524087069-wallhaven-2ezk7x.jpg', 'gallery', 'Activated', '2020-08-23 08:24:25', '2020-08-23 08:24:25'),
(28, 70, '1598189077-06199450042-wallhaven-4vlz7p.jpg', 'gallery', 'Activated', '2020-08-23 08:24:37', '2020-08-23 08:24:37'),
(29, 70, '1598189117-02899021248-wallhaven-4ye29x.jpg', 'gallery', 'Activated', '2020-08-23 08:25:17', '2020-08-23 08:25:17'),
(30, 70, '1598189140-02266874071-wallhaven-zxgvyg.jpg', 'gallery', 'Activated', '2020-08-23 08:25:40', '2020-08-23 08:25:40'),
(31, 70, '1598189581-02782997438-wallhaven-4yjxq7.jpg', 'gallery', 'Activated', '2020-08-23 08:33:01', '2020-08-23 08:33:01'),
(32, 70, '1598189594-08965025019-wallhaven-6qz8g7.jpg', 'gallery', 'Activated', '2020-08-23 08:33:14', '2020-08-23 08:33:14'),
(34, 70, '1598189609-06291874560-wallhaven-45dqm8.jpg', 'gallery', 'Activated', '2020-08-23 08:33:29', '2020-08-23 08:33:29'),
(35, 73, '1598189619-04810925386-wallhaven-45ek39.jpg', 'gallery', 'Activated', '2020-08-23 08:33:39', '2020-08-23 08:33:39'),
(36, 71, '1598189629-07187405856-wallhaven-45xdd8.jpg', 'gallery', 'Activated', '2020-08-23 08:33:49', '2020-08-23 08:33:49'),
(38, 72, '1598189639-07012139081-wallhaven-436ok3.jpg', 'gallery', 'Activated', '2020-08-23 08:33:59', '2020-08-23 08:33:59'),
(39, 72, '1598189649-00922788310-wallhaven-4327vy.jpg', 'gallery', 'Activated', '2020-08-23 08:34:09', '2020-08-23 08:34:09'),
(40, 83, '1598189662-04909653237-wallhaven-kwz2jq.jpg', 'gallery', 'Activated', '2020-08-23 08:34:22', '2020-08-23 08:34:22'),
(43, 75, '1598189672-01761499713-wallhaven-nejd6l.jpg', 'gallery', 'Activated', '2020-08-23 08:34:32', '2020-08-23 08:34:32'),
(44, 74, '1598189686-07115602497-wallhaven-odmewm.jpg', 'gallery', 'Activated', '2020-08-23 08:34:46', '2020-08-23 08:34:46'),
(45, 71, '1598189699-02634801190-wallhaven-r7lmvj.jpg', 'gallery', 'Activated', '2020-08-23 08:34:59', '2020-08-23 08:34:59'),
(47, 77, '1598189712-09293161404-wallhaven-vgjjml.jpg', 'gallery', 'Activated', '2020-08-23 08:35:12', '2020-08-23 08:35:12'),
(48, 73, '1598189720-02724316554-wallhaven-wyy176.jpg', 'gallery', 'Activated', '2020-08-23 08:35:20', '2020-08-23 08:35:20'),
(50, 83, '1598189727-07834322069-wallhaven-x1v6xv.jpg', 'carousel', 'Activated', '2020-08-23 08:35:27', '2020-08-23 08:37:06'),
(51, 81, '1598189737-09504607249-wallhaven-xly9dv.jpg', 'gallery', 'Activated', '2020-08-23 08:35:37', '2020-08-23 08:37:00'),
(52, 83, '1598189744-03110499763-wallhaven-yjw98x.jpg', 'gallery', 'Activated', '2020-08-23 08:35:44', '2020-08-23 08:36:56'),
(55, 90, '1601738392-02461130405-carousel.jpg', 'carousel', 'Activated', '2020-10-03 10:19:52', '2020-10-03 10:19:56'),
(56, 90, '1601738434-00027658172-wallhaven-0jwxww.jpg', 'advertisement', 'Activated', '2020-10-03 10:20:34', '2020-10-03 10:20:49');

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
(15, '2020_07_25_154950_create_tags_table', 1),
(21, '2014_10_12_000000_create_users_table', 2),
(22, '2014_10_12_100000_create_password_resets_table', 2),
(23, '2020_07_25_154918_create_products_table', 2),
(24, '2020_07_25_154938_create_categories_table', 2),
(25, '2020_07_25_155006_create_galleries_table', 2),
(26, '2020_07_25_155017_create_brands_table', 2),
(27, '2020_07_25_155053_create_contact_uses_table', 2),
(28, '2020_07_25_155105_create_contacts_table', 2),
(29, '2020_07_25_155119_create_orders_table', 2),
(30, '2020_08_28_154011_create_product_attributes_table', 3),
(31, '2020_08_28_163356_create_product_variations_table', 4),
(34, '2020_09_12_144642_create_product_review_table', 5),
(35, '2020_09_19_100136_create_coupons_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`product_ids`)),
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `orderId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressline1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressline2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsCouponApplied` int(255) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_ids`, `user_id`, `orderId`, `firstName`, `lastName`, `companyName`, `country`, `addressline1`, `addressline2`, `order_status`, `city`, `postalCode`, `phone`, `email`, `orderTotal`, `IsCouponApplied`, `notes`, `created_at`, `updated_at`) VALUES
(17, '[\"{\\\"id\\\":83,\\\"name\\\":\\\"Denby Natural Canvas Espresso Cups - Set of 2\\\",\\\"price\\\":7399,\\\"quantity\\\":4,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":83,\\\"category_id\\\":22,\\\"tags\\\":null,\\\"title\\\":\\\"Denby Natural Canvas Espresso Cups - Set of 2\\\",\\\"slug\\\":\\\"denby-natural-canvas-espresso-cups-set-of-2\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"7399\\\",\\\"wholesalePrice\\\":\\\"5919\\\",\\\"meta_description\\\":\\\"The Natural Canvas 2 Espresso Cups Set brought to you by Denby is designed to bring form without the formality to any occasion. A beautiful, durable and functional espresso cup and saucer set from Denby\'s new Natural Canvas range. A beautiful and functional sugar bowl and ramekin from Denby\'s new Natural Canvas range. Ideal for rich single and double espressos from the machine, cafetiere or filter machine. Sustainable and long-lasting, these ceramic espresso cups perfect as a housewarming gift or a treat for yourself. Also great for after dinner or Sunday morning coffees and makes a great gift in its stunning craft packaging.\\\",\\\"description\\\":\\\"Length: 9cm Width: 6.5cm Depth: 5cm\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1597593096-06130127390-DenbyNaturalCanvasEspressoCups-Setof2_1.png\\\",\\\"gallery\\\":null,\\\"additional_info\\\":\\\"Made in England\\\\r\\\\n\\\\u2022 Included in Denby\\\\u2019s 10 Year Guarantee\\\\r\\\\n\\\\u2022 Suitable for Oven, Microwave, Freezer and Dishwasher safe\\\\r\\\\n\\\\u2022 Contains: 2 x Espresso Cups, 2 x Espresso Saucer\\\",\\\"created_at\\\":\\\"2020-08-16 15:51:36\\\",\\\"updated_at\\\":\\\"2020-08-16 15:52:23\\\"}}\"]', 49, '5a6nT', 'Nooruddin', 'Tunio', 'Softtackles', 'Pakistan', 'Junaid Shopping Center Office 2', NULL, 'processing', 'Larkana', '54600', 'salamnooruddin@gmail.com', 'salamnooruddin@gmail.com', '29596', 0, NULL, '2020-10-03 09:33:15', '2020-10-03 09:33:15'),
(19, '[\"{\\\"id\\\":81,\\\"name\\\":\\\"Amefa Celebration Tapas Cutlery, Set of 10\\\",\\\"price\\\":45,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"red\\\",\\\"small\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":81,\\\"category_id\\\":16,\\\"tags\\\":\\\"cookware,cutters,kitchen\\\",\\\"title\\\":\\\"Amefa Celebration Tapas Cutlery, Set of 10\\\",\\\"slug\\\":\\\"amefa-celebration-tapas-cutlery-set-of-10\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"2699\\\",\\\"wholesalePrice\\\":\\\"1889\\\",\\\"meta_description\\\":\\\"Enjoy delicious appetizers, beautifully set on a wooden board with this on trend golden cutlery. The spoons and forks are perfect for tapas, cocktails, appetizers and deserts. Celebration Gold is available in a 10 piece set.\\\",\\\"description\\\":null,\\\"warranty\\\":\\\"1 year warranty\\\",\\\"policy\\\":\\\"30 Days\\\",\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1597505230-03094967082-Amefa_Celebration_Tapas_Cutlery_Set_of_10_1.png\\\",\\\"gallery\\\":[\\\"1597505255-4563628919-Amefa_Celebration_Tapas_Cutlery_Set_of_10_2.png\\\",\\\"1597505255-4563628919-Amefa_Celebration_Tapas_Cutlery_Set_of_10_3.png\\\"],\\\"additional_info\\\":\\\"Set Includes: 2x Medium teaspoon 2x Mocca spoon 2x Cake fork 2x Butter spreader 2x Spork\\\",\\\"created_at\\\":\\\"2020-08-15 15:27:10\\\",\\\"updated_at\\\":\\\"2020-08-22 18:31:37\\\"}}\"]', NULL, '69rS5', 'Tallulah Dunlap', 'Lamar Ortega', 'John Whitehead', 'Guinea-Bissau', '412 South Old Road', 'Sapiente aliqua Est', 'processing', 'Laudantium iusto es', '70167', '+1 (769) 227-9492', 'qovitur@mailinator.com', '45', 0, 'Quae amet recusanda', '2020-10-03 14:00:31', '2020-10-03 14:00:31'),
(20, '[\"{\\\"id\\\":71,\\\"name\\\":\\\"Amefa Eclat Cutlery Gift Box, Set of 24\\\",\\\"price\\\":0,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"Deleniti\\\",\\\"Quas\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":71,\\\"category_id\\\":12,\\\"tags\\\":null,\\\"title\\\":\\\"Amefa Eclat Cutlery Gift Box, Set of 24\\\",\\\"slug\\\":\\\"amefa-eclat-cutlery-gift-box-set-of-24\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"4199\\\",\\\"wholesalePrice\\\":\\\"2939\\\",\\\"meta_description\\\":\\\"Add a touch of understated style and functionality to your home with Amefa\'s Eclat Cutlery set in green. The Eclat cutlery set has a bright and deep color. that brings a modern and contemporary look and brightens your dining table. Dishwasher safe, it\'s perfect for busy modern living.\\\",\\\"description\\\":null,\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1597504309-04190310182-Amefa_Eclat_Cutlery_Gift_Box_Set_of_24_green_1.png\\\",\\\"gallery\\\":[\\\"1597504309-4190310182-Amefa_Eclat_Cutlery_Gift_Box_Set_of_24_green_2.png\\\",\\\"1597504309-4190310182-Amefa_Eclat_Cutlery_Gift_Box_Set_of_24_green_3.png\\\"],\\\"additional_info\\\":\\\"Set Includes: 6x Dinner Forks, 6x Dinner Spoons, 6x Dinner Knives, 6x Dessert Spoons\\\",\\\"created_at\\\":\\\"2020-08-15 15:11:49\\\",\\\"updated_at\\\":\\\"2020-08-15 15:11:53\\\"}}\"]', NULL, 'h6lLX', 'Ryan Rojas', 'Bethany Tyson', 'Griffith Larsen', 'Estonia', '656 North First Parkway', 'Cillum et consequatu', 'processing', 'Ut fugit dolores an', '10082', '+1 (448) 819-9137', 'pupizegafi@mailinator.com', '0', 0, 'Aliquip distinctio', '2020-10-03 14:01:27', '2020-10-03 14:01:27'),
(21, '[\"{\\\"id\\\":73,\\\"name\\\":\\\"Zyliss Frying Pan, 28cm\\\",\\\"price\\\":4099,\\\"quantity\\\":2,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":73,\\\"category_id\\\":14,\\\"tags\\\":null,\\\"title\\\":\\\"Zyliss Frying Pan, 28cm\\\",\\\"slug\\\":\\\"zyliss-frying-pan-28cm\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"4099\\\",\\\"wholesalePrice\\\":\\\"3689\\\",\\\"meta_description\\\":\\\"The Zyliss Cook 28cm frying pan is a fantastic multi-use pan, allowing you to create larger dishes like pan-friend salmon, and even French bread. The 3 multi-layer coating delivers exceptional non-stick performance and eliminates the need for oil or butter \\\\u2013 resulting in healthier food for you and your family.\\\",\\\"description\\\":null,\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1597504556-03116022239-Zyliss-Frying-Pan_-28cm-_1_-s.png\\\",\\\"gallery\\\":[\\\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_2.png\\\",\\\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_4_-s.png\\\"],\\\"additional_info\\\":\\\"The ultimate non-stick frying pan, with a 3-layer coating\\\\r\\\\n\\\\u2022 Enjoy healthy cooking with no oil or butter needed\\\\r\\\\n\\\\u2022 Ergonomic soft touch handle\\\\r\\\\n\\\\u2022 Suitable for all hobs, including induction\\\\r\\\\n\\\\u2022 Made from Forged Aluminium\\\\r\\\\n\\\\u2022 Accredited by the Good Housekeeping Institute (2019)\\\",\\\"created_at\\\":\\\"2020-08-15 15:15:56\\\",\\\"updated_at\\\":\\\"2020-08-15 15:16:04\\\"}}\"]', 49, '27ss3', 'Nooruddin', 'Tunio', 'Softtackles', 'Pakistan', 'Junaid Shopping Center Office 2', NULL, 'processing', 'Larkana', '54600', 'salamnooruddin@gmail.com', 'salamnooruddin@gmail.com', '8198', 0, NULL, '2020-10-03 14:49:38', '2020-10-03 14:49:38'),
(22, '[\"{\\\"id\\\":73,\\\"name\\\":\\\"Zyliss Frying Pan, 28cm\\\",\\\"price\\\":4099,\\\"quantity\\\":2,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":73,\\\"category_id\\\":14,\\\"tags\\\":null,\\\"title\\\":\\\"Zyliss Frying Pan, 28cm\\\",\\\"slug\\\":\\\"zyliss-frying-pan-28cm\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"4099\\\",\\\"wholesalePrice\\\":\\\"3689\\\",\\\"meta_description\\\":\\\"The Zyliss Cook 28cm frying pan is a fantastic multi-use pan, allowing you to create larger dishes like pan-friend salmon, and even French bread. The 3 multi-layer coating delivers exceptional non-stick performance and eliminates the need for oil or butter \\\\u2013 resulting in healthier food for you and your family.\\\",\\\"description\\\":null,\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1597504556-03116022239-Zyliss-Frying-Pan_-28cm-_1_-s.png\\\",\\\"gallery\\\":[\\\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_2.png\\\",\\\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_4_-s.png\\\"],\\\"additional_info\\\":\\\"The ultimate non-stick frying pan, with a 3-layer coating\\\\r\\\\n\\\\u2022 Enjoy healthy cooking with no oil or butter needed\\\\r\\\\n\\\\u2022 Ergonomic soft touch handle\\\\r\\\\n\\\\u2022 Suitable for all hobs, including induction\\\\r\\\\n\\\\u2022 Made from Forged Aluminium\\\\r\\\\n\\\\u2022 Accredited by the Good Housekeeping Institute (2019)\\\",\\\"created_at\\\":\\\"2020-08-15 15:15:56\\\",\\\"updated_at\\\":\\\"2020-08-15 15:16:04\\\"}}\",\"{\\\"id\\\":90,\\\"name\\\":\\\"Acrylic Transparent Jug, Olive Oil Bottle, Liquid Bottle, Liquid Dispenser with Handle\\\",\\\"price\\\":1785,\\\"quantity\\\":1,\\\"attributes\\\":[\\\"3litter\\\",\\\"transparent\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":90,\\\"category_id\\\":40,\\\"tags\\\":\\\"jugs,bottles,litter\\\",\\\"title\\\":\\\"Acrylic Transparent Jug, Olive Oil Bottle, Liquid Bottle, Liquid Dispenser with Handle\\\",\\\"slug\\\":\\\"acrylic-transparent-jug-olive-oil-bottle-liquid-bottle-liquid-dispenser-with-handle\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1810\\\",\\\"wholesalePrice\\\":\\\"1800\\\",\\\"meta_description\\\":\\\"Transparent Jug Bottle Dispenser with handle and clear lid. Versatile kitchen tool. 800ML Capacity.Easy to Use & Clean. To clean simply wash by hand with warm soapy water. Completely Food Safe - This can is made from 100% food-safe acrylic and is BPA-free.\\\",\\\"description\\\":null,\\\"warranty\\\":\\\"6 Months return warranty\\\",\\\"policy\\\":\\\"6 Months\\\",\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1601736917-03007132675-kw19-2.jpg\\\",\\\"gallery\\\":[\\\"1601736918-3007132675-kw19-1.jpg\\\",\\\"1601736918-3007132675-kw19-3.jpg\\\"],\\\"additional_info\\\":\\\"Color: Transparent\\\\r\\\\nMaterial: Acrylic Plastic\\\\r\\\\nVolume: 800 ML\\\\r\\\\nDimensions Jug : 9 X 12 X 22 cm (Length x Width x Height)\\\\r\\\\nPackage Content: 1X Jug\\\",\\\"created_at\\\":\\\"2020-10-03 14:55:18\\\",\\\"updated_at\\\":\\\"2020-10-03 14:55:22\\\"}}\"]', 49, 'I9618', 'Nooruddin', 'Tunio', 'Softtackles', 'Pakistan', 'Junaid Shopping Center Office 2', NULL, 'processing', 'Larkana', '54600', 'salamnooruddin@gmail.com', 'salamnooruddin@gmail.com', '9983', 0, NULL, '2020-10-03 15:14:23', '2020-10-03 15:14:23'),
(23, '[\"{\\\"id\\\":83,\\\"name\\\":\\\"Denby Natural Canvas Espresso Cups - Set of 2\\\",\\\"price\\\":7399,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":83,\\\"category_id\\\":22,\\\"tags\\\":null,\\\"title\\\":\\\"Denby Natural Canvas Espresso Cups - Set of 2\\\",\\\"slug\\\":\\\"denby-natural-canvas-espresso-cups-set-of-2\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"7399\\\",\\\"wholesalePrice\\\":\\\"5919\\\",\\\"meta_description\\\":\\\"The Natural Canvas 2 Espresso Cups Set brought to you by Denby is designed to bring form without the formality to any occasion. A beautiful, durable and functional espresso cup and saucer set from Denby\'s new Natural Canvas range. A beautiful and functional sugar bowl and ramekin from Denby\'s new Natural Canvas range. Ideal for rich single and double espressos from the machine, cafetiere or filter machine. Sustainable and long-lasting, these ceramic espresso cups perfect as a housewarming gift or a treat for yourself. Also great for after dinner or Sunday morning coffees and makes a great gift in its stunning craft packaging.\\\",\\\"description\\\":\\\"Length: 9cm Width: 6.5cm Depth: 5cm\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1597593096-06130127390-DenbyNaturalCanvasEspressoCups-Setof2_1.png\\\",\\\"gallery\\\":null,\\\"additional_info\\\":\\\"Made in England\\\\r\\\\n\\\\u2022 Included in Denby\\\\u2019s 10 Year Guarantee\\\\r\\\\n\\\\u2022 Suitable for Oven, Microwave, Freezer and Dishwasher safe\\\\r\\\\n\\\\u2022 Contains: 2 x Espresso Cups, 2 x Espresso Saucer\\\",\\\"created_at\\\":\\\"2020-08-16 15:51:36\\\",\\\"updated_at\\\":\\\"2020-08-16 15:52:23\\\"}}\"]', NULL, 's1I2O', 'Ora Ewing', 'Chaim Shannon', 'Clinton Juarez', 'Bermuda', '840 West Second Boulevard', 'Qui voluptatem Nam', 'processing', 'Officia nisi in dolo', '98209', '+1 (698) 882-2364', 'qivyf@mailinator.com', '7399', 0, 'Accusamus quam accus', '2020-10-04 04:49:45', '2020-10-04 04:49:45'),
(24, '[\"{\\\"id\\\":83,\\\"name\\\":\\\"Denby Natural Canvas Espresso Cups - Set of 2\\\",\\\"price\\\":7399,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":83,\\\"category_id\\\":22,\\\"tags\\\":null,\\\"title\\\":\\\"Denby Natural Canvas Espresso Cups - Set of 2\\\",\\\"slug\\\":\\\"denby-natural-canvas-espresso-cups-set-of-2\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"7399\\\",\\\"wholesalePrice\\\":\\\"5919\\\",\\\"meta_description\\\":\\\"The Natural Canvas 2 Espresso Cups Set brought to you by Denby is designed to bring form without the formality to any occasion. A beautiful, durable and functional espresso cup and saucer set from Denby\'s new Natural Canvas range. A beautiful and functional sugar bowl and ramekin from Denby\'s new Natural Canvas range. Ideal for rich single and double espressos from the machine, cafetiere or filter machine. Sustainable and long-lasting, these ceramic espresso cups perfect as a housewarming gift or a treat for yourself. Also great for after dinner or Sunday morning coffees and makes a great gift in its stunning craft packaging.\\\",\\\"description\\\":\\\"Length: 9cm Width: 6.5cm Depth: 5cm\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1597593096-06130127390-DenbyNaturalCanvasEspressoCups-Setof2_1.png\\\",\\\"gallery\\\":null,\\\"additional_info\\\":\\\"Made in England\\\\r\\\\n\\\\u2022 Included in Denby\\\\u2019s 10 Year Guarantee\\\\r\\\\n\\\\u2022 Suitable for Oven, Microwave, Freezer and Dishwasher safe\\\\r\\\\n\\\\u2022 Contains: 2 x Espresso Cups, 2 x Espresso Saucer\\\",\\\"created_at\\\":\\\"2020-08-16 15:51:36\\\",\\\"updated_at\\\":\\\"2020-08-16 15:52:23\\\"}}\"]', NULL, '0hr6s', 'Mark Owens', 'Charlotte Torres', 'Brian Padilla', 'Mali', '74 West Rocky Fabien Parkway', 'Aut ut odit voluptas', 'processing', 'Eiusmod corporis imp', '42546', '+1 (181) 373-9267', 'rebug@mailinator.com', '7399', 0, 'Non autem sit volup', '2020-10-04 04:50:52', '2020-10-04 04:50:52'),
(25, '[\"{\\\"id\\\":90,\\\"name\\\":\\\"Acrylic Transparent Jug, Olive Oil Bottle, Liquid Bottle, Liquid Dispenser with Handle\\\",\\\"price\\\":1795,\\\"quantity\\\":1,\\\"attributes\\\":[\\\"1litter\\\",\\\"transparent\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":90,\\\"category_id\\\":40,\\\"tags\\\":\\\"jugs,bottles,litter\\\",\\\"title\\\":\\\"Acrylic Transparent Jug, Olive Oil Bottle, Liquid Bottle, Liquid Dispenser with Handle\\\",\\\"slug\\\":\\\"acrylic-transparent-jug-olive-oil-bottle-liquid-bottle-liquid-dispenser-with-handle\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1810\\\",\\\"wholesalePrice\\\":\\\"1800\\\",\\\"meta_description\\\":\\\"Transparent Jug Bottle Dispenser with handle and clear lid. Versatile kitchen tool. 800ML Capacity.Easy to Use & Clean. To clean simply wash by hand with warm soapy water. Completely Food Safe - This can is made from 100% food-safe acrylic and is BPA-free.\\\",\\\"description\\\":null,\\\"warranty\\\":\\\"6 Months return warranty\\\",\\\"policy\\\":\\\"6 Months\\\",\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1601736917-03007132675-kw19-2.jpg\\\",\\\"gallery\\\":[\\\"1601736918-3007132675-kw19-1.jpg\\\",\\\"1601736918-3007132675-kw19-3.jpg\\\"],\\\"additional_info\\\":\\\"Color: Transparent\\\\r\\\\nMaterial: Acrylic Plastic\\\\r\\\\nVolume: 800 ML\\\\r\\\\nDimensions Jug : 9 X 12 X 22 cm (Length x Width x Height)\\\\r\\\\nPackage Content: 1X Jug\\\",\\\"created_at\\\":\\\"2020-10-03 14:55:18\\\",\\\"updated_at\\\":\\\"2020-10-03 14:55:22\\\"}}\",\"{\\\"id\\\":77,\\\"name\\\":\\\"Zyliss Saute Pan with Glass Lid, 28cm\\\",\\\"price\\\":5899,\\\"quantity\\\":4,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":77,\\\"category_id\\\":14,\\\"tags\\\":null,\\\"title\\\":\\\"Zyliss Saute Pan with Glass Lid, 28cm\\\",\\\"slug\\\":\\\"zyliss-saute-pan-with-glass-lid-28cm\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"5899\\\",\\\"wholesalePrice\\\":\\\"5309\\\",\\\"meta_description\\\":\\\"The Zyliss Cook 28cm Non-stick Saute Pan with Glass Lid has a wide surface area and tall sides, to keep your ingredients in the pan while you jostle. This multi-task pan is perfect for tasks like reducing a pan sauce or searing meat.\\\",\\\"description\\\":\\\"Dishwasher Safe\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1597504893-09131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_1.png\\\",\\\"gallery\\\":[\\\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_2.png\\\",\\\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_3.png\\\",\\\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_4.png\\\",\\\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_5.png\\\",\\\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_6.png\\\"],\\\"additional_info\\\":\\\"\\\\u2022 The ultimate non-stick saute pan, with a 3-layer coating\\\\r\\\\n\\\\u2022 Enjoy healthy cooking with no oil or butter needed\\\\r\\\\n\\\\u2022 Made from Forged Aluminium, safe for use with metal tools\\\\r\\\\n\\\\u2022 Suitable for all hobs, including induction\\\\r\\\\n\\\\u2022 Ergonomic soft touch handle\\\\r\\\\n\\\\u2022 Dishwasher safe with a 10-Year non-stick guarantee\\\\r\\\\n\\\\u2022 Accredited by the Good Housekeeping Institute (2020)\\\\r\\\\nDepth- 53.9cm, Width- 28.9cm, Height- 15.5cm\\\",\\\"created_at\\\":\\\"2020-08-15 15:21:33\\\",\\\"updated_at\\\":\\\"2020-08-15 15:21:35\\\"}}\",\"{\\\"id\\\":73,\\\"name\\\":\\\"Zyliss Frying Pan, 28cm\\\",\\\"price\\\":4099,\\\"quantity\\\":3,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":73,\\\"category_id\\\":14,\\\"tags\\\":null,\\\"title\\\":\\\"Zyliss Frying Pan, 28cm\\\",\\\"slug\\\":\\\"zyliss-frying-pan-28cm\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"4099\\\",\\\"wholesalePrice\\\":\\\"3689\\\",\\\"meta_description\\\":\\\"The Zyliss Cook 28cm frying pan is a fantastic multi-use pan, allowing you to create larger dishes like pan-friend salmon, and even French bread. The 3 multi-layer coating delivers exceptional non-stick performance and eliminates the need for oil or butter \\\\u2013 resulting in healthier food for you and your family.\\\",\\\"description\\\":null,\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1597504556-03116022239-Zyliss-Frying-Pan_-28cm-_1_-s.png\\\",\\\"gallery\\\":[\\\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_2.png\\\",\\\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_4_-s.png\\\"],\\\"additional_info\\\":\\\"The ultimate non-stick frying pan, with a 3-layer coating\\\\r\\\\n\\\\u2022 Enjoy healthy cooking with no oil or butter needed\\\\r\\\\n\\\\u2022 Ergonomic soft touch handle\\\\r\\\\n\\\\u2022 Suitable for all hobs, including induction\\\\r\\\\n\\\\u2022 Made from Forged Aluminium\\\\r\\\\n\\\\u2022 Accredited by the Good Housekeeping Institute (2019)\\\",\\\"created_at\\\":\\\"2020-08-15 15:15:56\\\",\\\"updated_at\\\":\\\"2020-08-15 15:16:04\\\"}}\"]', 51, 'UH1eI', 'Abraiz', 'Shaikh', 'Business Software Solutions', 'Pakistan', 'Flat 201, Almadina Arcade, Khalid Bin Waleed Road,', 'Medicare Chorangi,Near Ufone Customer care centre.', 'processing', 'Karachi', '74800', '+923333660117', 'abraizahmed@gmail.com', '37688', 0, NULL, '2020-10-04 06:02:32', '2020-10-04 06:02:32'),
(32, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":860,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[null,null],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'qQdbO', 'Joseph Mckay', 'Sylvia Lawrence', 'Debra Cobb', 'Western Sahara', '81 First Parkway', 'Quo reprehenderit m', 'processing', 'Veritatis reprehende', '50336', '+1 (788) 215-4765', 'qiruwe@mailinator.com', '860', 0, 'Qui laboriosam fugi', '2021-03-01 12:50:07', '2021-03-01 12:50:07'),
(33, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":860,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[null,null],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, '1vxbT', 'Joseph Mckay', 'Sylvia Lawrence', 'Debra Cobb', 'Western Sahara', '81 First Parkway', 'Quo reprehenderit m', 'processing', 'Veritatis reprehende', '50336', '+1 (788) 215-4765', 'qiruwe@mailinator.com', '860', 0, 'Qui laboriosam fugi', '2021-03-01 12:53:11', '2021-03-01 12:53:11'),
(34, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":860,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[null,null],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'tZ81R', 'Summer Hernandez', 'Caleb Peterson', 'Jena Hall', 'Cocos (Keeling) Islands', '552 South Cowley Lane', 'In ipsa anim accusa', 'processing', 'Blanditiis aperiam s', '23884', '+1 (964) 784-6471', 'zezikepi@mailinator.com', '860', 0, 'Sit in in aut praes', '2021-03-01 12:53:33', '2021-03-01 12:53:33'),
(35, '[\"{\\\"id\\\":260,\\\"name\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"price\\\":1130,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":260,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"title\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"slug\\\":\\\"thermose-sk-162p-1ltr-golden-body\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1130\\\",\\\"wholesalePrice\\\":\\\"1120\\\",\\\"meta_description\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"description\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614154818-06822040901-IMG20210210120049.jpg\\\",\\\"gallery\\\":[\\\"1614154818-6822040901-IMG20210210120049.jpg\\\",\\\"1614154818-6822040901-IMG20210210120107.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 08:20:18\\\",\\\"updated_at\\\":\\\"2021-02-28 07:50:34\\\"}}\",\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":700,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[null,null],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'monAS', 'Shahmeer', 'Shaikh', NULL, 'Pakistan', 'House #123 abc road Hyderabad', NULL, 'processing', 'Hyderabad', '77371', '03463840282', 'Abc123@gmail.com', '1830', 0, NULL, '2021-03-02 07:20:48', '2021-03-02 07:20:48'),
(36, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":700,\\\"quantity\\\":1,\\\"attributes\\\":[null,null],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, '21b61', 'dell', 'computer', NULL, 'Pakistan', 'GUJRAT BARTAN', NULL, 'processing', 'hyderabad', '71000', '0335-7485229', 'gujratbartan@gmail.com', '700', 0, NULL, '2021-03-10 06:48:36', '2021-03-10 06:48:36'),
(37, '[\"{\\\"id\\\":232,\\\"name\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"price\\\":700,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":232,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"title\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"slug\\\":\\\"thermose-happy-expresso-1liter\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"700\\\",\\\"wholesalePrice\\\":\\\"690\\\",\\\"meta_description\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"description\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243309-08156722982-IMG20210209130938.jpg\\\",\\\"gallery\\\":[\\\"1614067119-3890942239-IMG20210209130940.jpg\\\"],\\\"additional_info\\\":\\\"1liter\\\",\\\"created_at\\\":\\\"2021-02-23 07:58:39\\\",\\\"updated_at\\\":\\\"2021-02-25 08:55:09\\\"}}\",\"{\\\"id\\\":237,\\\"name\\\":\\\"Thermose Steel Body China 9016 1Ltr\\\",\\\"price\\\":710,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":237,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose China 9016 1Ltr\\\",\\\"title\\\":\\\"Thermose Steel Body China 9016 1Ltr\\\",\\\"slug\\\":\\\"thermose-steel-body-china-9016-1ltr\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"710\\\",\\\"wholesalePrice\\\":\\\"700\\\",\\\"meta_description\\\":\\\"Thermose China 9016 1Ltr\\\",\\\"description\\\":\\\"Thermose China 9016 1Ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614148923-00021282643-IMG20210209131320.jpg\\\",\\\"gallery\\\":[\\\"1614148923-0021282643-IMG20210209131318.jpg\\\",\\\"1614148923-0021282643-IMG20210209131320.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 06:42:03\\\",\\\"updated_at\\\":\\\"2021-02-28 07:12:13\\\"}}\",\"{\\\"id\\\":241,\\\"name\\\":\\\"Thermose Handy Pot TIn Body 9012  1ltr\\\",\\\"price\\\":630,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":241,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Handy Pot TIn Body 9012  1ltr\\\",\\\"title\\\":\\\"Thermose Handy Pot TIn Body 9012  1ltr\\\",\\\"slug\\\":\\\"thermose-handy-pot-tin-body-9012-1ltr\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"630\\\",\\\"wholesalePrice\\\":\\\"620\\\",\\\"meta_description\\\":\\\"Thermose Handy Pot TIn Body 9012  1ltr\\\",\\\"description\\\":\\\"Thermose Handy Pot TIn Body 9012  1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614151450-00371964261-IMG20210209131607.jpg\\\",\\\"gallery\\\":[\\\"1614151450-0371964261-IMG20210209131605.jpg\\\",\\\"1614151450-0371964261-IMG20210209131607.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 07:24:10\\\",\\\"updated_at\\\":\\\"2021-02-28 07:19:20\\\"}}\",\"{\\\"id\\\":239,\\\"name\\\":\\\"Thermose Tiger Tin Body 9011 1ltr\\\",\\\"price\\\":630,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":239,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Tiger Tin Body 9011 1 ltr\\\",\\\"title\\\":\\\"Thermose Tiger Tin Body 9011 1ltr\\\",\\\"slug\\\":\\\"thermose-tiger-tin-body-9011-1ltr\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"630\\\",\\\"wholesalePrice\\\":\\\"620\\\",\\\"meta_description\\\":\\\"Thermose Tiger Tin Body 9011 1ltr\\\",\\\"description\\\":\\\"Thermose Tiger Tin Body 9011 1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614150304-09519773316-IMG20210209131420.jpg\\\",\\\"gallery\\\":[\\\"1614150304-9519773316-IMG20210209131420.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 07:05:04\\\",\\\"updated_at\\\":\\\"2021-02-28 07:15:15\\\"}}\",\"{\\\"id\\\":263,\\\"name\\\":\\\"Thermose China 9914 1.9ltr\\\",\\\"price\\\":1030,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":263,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose China 9914 1.9ltr\\\",\\\"title\\\":\\\"Thermose China 9914 1.9ltr\\\",\\\"slug\\\":\\\"thermose-china-9914-19ltr\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"1030\\\",\\\"wholesalePrice\\\":\\\"1020\\\",\\\"meta_description\\\":\\\"Thermose China 9914 1.9ltr\\\",\\\"description\\\":\\\"Thermose China 9914 1.9ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614155646-07610926384-IMG20210210123520.jpg\\\",\\\"gallery\\\":[\\\"1614155646-7610926384-IMG20210210123520.jpg\\\",\\\"1614155646-7610926384-IMG20210210123522.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 08:34:06\\\",\\\"updated_at\\\":\\\"2021-02-28 07:52:12\\\"}}\",\"{\\\"id\\\":245,\\\"name\\\":\\\"Thermose 0.5ltr Jasmin OC-2002\\\",\\\"price\\\":410,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":245,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose 0.5ltr Jasmin OC-2002\\\",\\\"title\\\":\\\"Thermose 0.5ltr Jasmin OC-2002\\\",\\\"slug\\\":\\\"thermose-05ltr-jasmin-oc-2002\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"410\\\",\\\"wholesalePrice\\\":\\\"400\\\",\\\"meta_description\\\":\\\"Thermose 0.5ltr Jasmin OC-2002\\\",\\\"description\\\":\\\"Thermose 0.5ltr Jasmin OC-2002\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614152353-05394270198-IMG20210210113638.jpg\\\",\\\"gallery\\\":[\\\"1614152353-5394270198-IMG20210210113638.jpg\\\",\\\"1614152353-5394270198-IMG20210210113642.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 07:39:13\\\",\\\"updated_at\\\":\\\"2021-02-28 07:23:50\\\"}}\",\"{\\\"id\\\":258,\\\"name\\\":\\\"Thermose Mopen 1ltr Plastic Body\\\",\\\"price\\\":970,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":258,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Mopen 1ltr Plastic Body\\\",\\\"title\\\":\\\"Thermose Mopen 1ltr Plastic Body\\\",\\\"slug\\\":\\\"thermose-mopen-1ltr-plastic-body\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"970\\\",\\\"wholesalePrice\\\":\\\"960\\\",\\\"meta_description\\\":\\\"Thermose Mopen 1ltr Plastic Body\\\",\\\"description\\\":\\\"Thermose Mopen 1ltr Plastic Body\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614154552-02772034115-IMG20210210115815.jpg\\\",\\\"gallery\\\":[\\\"1614154552-2772034115-IMG20210210115815.jpg\\\",\\\"1614154552-2772034115-IMG20210210115817.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 08:15:52\\\",\\\"updated_at\\\":\\\"2021-02-28 07:45:48\\\"}}\",\"{\\\"id\\\":260,\\\"name\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"price\\\":1130,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":260,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"title\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"slug\\\":\\\"thermose-sk-162p-1ltr-golden-body\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1130\\\",\\\"wholesalePrice\\\":\\\"1120\\\",\\\"meta_description\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"description\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614154818-06822040901-IMG20210210120049.jpg\\\",\\\"gallery\\\":[\\\"1614154818-6822040901-IMG20210210120049.jpg\\\",\\\"1614154818-6822040901-IMG20210210120107.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 08:20:18\\\",\\\"updated_at\\\":\\\"2021-02-28 07:50:34\\\"}}\",\"{\\\"id\\\":244,\\\"name\\\":\\\"Thermose 2080  1ltr Plastic\\\",\\\"price\\\":490,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":244,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose 2080  1ltr Plastic\\\",\\\"title\\\":\\\"Thermose 2080  1ltr Plastic\\\",\\\"slug\\\":\\\"thermose-2080-1ltr-plastic\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"490\\\",\\\"wholesalePrice\\\":\\\"480\\\",\\\"meta_description\\\":\\\"Thermose 2080  1ltr Plastic\\\",\\\"description\\\":\\\"Thermose 2080  1ltr Plastic\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614151949-09111705296-IMG20210210113532.jpg\\\",\\\"gallery\\\":[\\\"1614151949-9111705296-IMG20210210113532.jpg\\\",\\\"1614151949-9111705296-IMG20210210113537.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 07:32:29\\\",\\\"updated_at\\\":\\\"2021-02-28 07:22:01\\\"}}\",\"{\\\"id\\\":243,\\\"name\\\":\\\"Thermose Chori Cap Full Steel 2ltr\\\",\\\"price\\\":1430,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":243,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Chori Cap Full Steel 2ltr\\\",\\\"title\\\":\\\"Thermose Chori Cap Full Steel 2ltr\\\",\\\"slug\\\":\\\"thermose-chori-cap-full-steel-2ltr\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"1430\\\",\\\"wholesalePrice\\\":\\\"1420\\\",\\\"meta_description\\\":\\\"Thermose Chori Cap Full Steel 2ltr\\\",\\\"description\\\":\\\"Thermose Chori Cap Full Steel 2ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614151799-09629754057-IMG20210210113431.jpg\\\",\\\"gallery\\\":[\\\"1614151799-9629754057-IMG20210210113431.jpg\\\",\\\"1614151799-9629754057-IMG20210210113434.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 07:29:59\\\",\\\"updated_at\\\":\\\"2021-02-28 07:21:26\\\"}}\",\"{\\\"id\\\":233,\\\"name\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"price\\\":730,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":233,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"title\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"slug\\\":\\\"thermose-happy-hybrid-1ltr\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"730\\\",\\\"wholesalePrice\\\":\\\"710\\\",\\\"meta_description\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"description\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243348-01183490841-IMG20210209131111.jpg\\\",\\\"gallery\\\":[\\\"1614067441-8392258462-IMG20210209131111.jpg\\\",\\\"1614067441-8392258462-IMG20210209131116.jpg\\\"],\\\"additional_info\\\":\\\"1liter\\\",\\\"created_at\\\":\\\"2021-02-23 08:04:01\\\",\\\"updated_at\\\":\\\"2021-02-25 08:55:48\\\"}}\"]', NULL, 'l32Vs', 'Shahmeer', 'Shaikh', NULL, 'Pakistan', 'House #123 abc road Hyderabad', NULL, 'processing', 'Hyderabad', '77371', '03463840282', 'Abc123@gmail.com', '8860', 0, NULL, '2021-03-22 07:16:38', '2021-03-22 07:16:38'),
(38, '[\"{\\\"id\\\":271,\\\"name\\\":\\\"Hand Mixer Red Box Kimee\\\",\\\"price\\\":400,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":271,\\\"category_id\\\":20,\\\"tags\\\":\\\"Hand Mixer Red Box Kimee\\\",\\\"title\\\":\\\"Hand Mixer Red Box Kimee\\\",\\\"slug\\\":\\\"hand-mixer-red-box-kimee\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"400\\\",\\\"wholesalePrice\\\":\\\"390\\\",\\\"meta_description\\\":\\\"Hand Mixer Red Box Kimee\\\",\\\"description\\\":\\\"Hand Mixer Red Box Kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614838442-05904623729-1d2f2cfa-46af-45de-80e7-9f27cef55865.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:14:02\\\",\\\"updated_at\\\":\\\"2021-03-04 06:14:02\\\"}}\",\"{\\\"id\\\":270,\\\"name\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"price\\\":365,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":270,\\\"category_id\\\":20,\\\"tags\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"title\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"slug\\\":\\\"orange-juicer-handy-777-plastic\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"365\\\",\\\"wholesalePrice\\\":\\\"355\\\",\\\"meta_description\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"description\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614838246-09520086149-1cb949a4-cc6c-49fd-a0e8-dbbdfdbda942.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:10:46\\\",\\\"updated_at\\\":\\\"2021-03-04 06:10:46\\\"}}\",\"{\\\"id\\\":275,\\\"name\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"price\\\":820,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":275,\\\"category_id\\\":20,\\\"tags\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"title\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"slug\\\":\\\"finger-chips-potato-plus-kimeea\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"820\\\",\\\"wholesalePrice\\\":\\\"810\\\",\\\"meta_description\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"description\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614840962-04893915209-86fc27f7-505b-482e-b1e3-a2b0a933188e.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:56:02\\\",\\\"updated_at\\\":\\\"2021-03-04 06:56:02\\\"}}\",\"{\\\"id\\\":274,\\\"name\\\":\\\"Hand Chopper Kimee\\\",\\\"price\\\":480,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":274,\\\"category_id\\\":20,\\\"tags\\\":\\\"Hand Chopper Kimee\\\",\\\"title\\\":\\\"Hand Chopper Kimee\\\",\\\"slug\\\":\\\"hand-chopper-kimee\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"480\\\",\\\"wholesalePrice\\\":\\\"490\\\",\\\"meta_description\\\":\\\"Hand Chopper Kimee\\\",\\\"description\\\":\\\"Hand Chopper Kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614840137-00353429919-4e3e5c01-151c-40cf-a48b-c775001d21da.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:42:17\\\",\\\"updated_at\\\":\\\"2021-03-04 06:42:17\\\"}}\",\"{\\\"id\\\":277,\\\"name\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"price\\\":450,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":277,\\\"category_id\\\":20,\\\"tags\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"title\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"slug\\\":\\\"orange-juicer-handy-888-red-plastic\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"450\\\",\\\"wholesalePrice\\\":\\\"440\\\",\\\"meta_description\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"description\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614841410-09537983020-532f9369-75da-49d8-a614-0cabf317820e.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:03:30\\\",\\\"updated_at\\\":\\\"2021-03-04 07:03:30\\\"}}\",\"{\\\"id\\\":281,\\\"name\\\":\\\"Orange Juicer Steel kimee\\\",\\\"price\\\":830,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":281,\\\"category_id\\\":20,\\\"tags\\\":\\\"Orange Juicer Steel kimee\\\",\\\"title\\\":\\\"Orange Juicer Steel kimee\\\",\\\"slug\\\":\\\"orange-juicer-steel-kimee\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"830\\\",\\\"wholesalePrice\\\":\\\"820\\\",\\\"meta_description\\\":\\\"Orange Juicer Steel kimee\\\",\\\"description\\\":\\\"Orange Juicer Steel kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614842164-06862937324-73298bc2-51c7-41b6-8bee-f2c01060a54e.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:16:04\\\",\\\"updated_at\\\":\\\"2021-03-04 07:16:04\\\"}}\",\"{\\\"id\\\":279,\\\"name\\\":\\\"Hand Chopper Quick Black Diba\\\",\\\"price\\\":680,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":279,\\\"category_id\\\":20,\\\"tags\\\":\\\"Hand Chopper Quick Black Diba\\\",\\\"title\\\":\\\"Hand Chopper Quick Black Diba\\\",\\\"slug\\\":\\\"hand-chopper-quick-black-diba\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"680\\\",\\\"wholesalePrice\\\":\\\"670\\\",\\\"meta_description\\\":\\\"Hand Chopper Quick Black Diba\\\",\\\"description\\\":\\\"Hand Chopper Quick Black Diba\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614841777-00228334091-1376c9ff-ecec-4926-8151-bb9833ab00cc.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:09:37\\\",\\\"updated_at\\\":\\\"2021-03-04 07:09:37\\\"}}\",\"{\\\"id\\\":272,\\\"name\\\":\\\"Finger Chips Cutter Jumbo Lock Kimee\\\",\\\"price\\\":1000,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":272,\\\"category_id\\\":20,\\\"tags\\\":\\\"Finger Chips Cutter Jumbo Lock Kimee\\\",\\\"title\\\":\\\"Finger Chips Cutter Jumbo Lock Kimee\\\",\\\"slug\\\":\\\"finger-chips-cutter-jumbo-lock-kimee\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"1000\\\",\\\"wholesalePrice\\\":\\\"990\\\",\\\"meta_description\\\":\\\"Finger Chips Cutter Jumbo Lock Kimee\\\",\\\"description\\\":\\\"Finger Chips Cutter Jumbo Lock Kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614839262-08168534509-2ba8e4a5-5bde-405c-b013-1d7ac33791e8.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:27:43\\\",\\\"updated_at\\\":\\\"2021-03-04 06:27:43\\\"}}\"]', NULL, 's5248', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '5025', 0, NULL, '2021-03-23 07:01:39', '2021-03-23 07:01:39'),
(39, '[\"{\\\"id\\\":212,\\\"name\\\":\\\"Dhakan Jali Handle China (single pcs)\\\",\\\"price\\\":160,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[null,null],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":212,\\\"category_id\\\":41,\\\"tags\\\":\\\"Dhakan Jali Handle (single piece available)\\\",\\\"title\\\":\\\"Dhakan Jali Handle China (single pcs)\\\",\\\"slug\\\":\\\"dhakan-jali-handle-china-single-pcs\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"170\\\",\\\"wholesalePrice\\\":\\\"160\\\",\\\"meta_description\\\":\\\"Dhakan Jali Handle China (single pcs)\\\",\\\"description\\\":\\\"Dhakan Jali Handle China (single pcs)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1613978176-07611496819-IMG20210208125842.jpg\\\",\\\"gallery\\\":[\\\"1613978176-7611496819-IMG20210208125626.jpg\\\",\\\"1613978176-7611496819-IMG20210208125638.jpg\\\",\\\"1613978176-7611496819-IMG20210208125700.jpg\\\",\\\"1613978176-7611496819-IMG20210208125842.jpg\\\"],\\\"additional_info\\\":\\\"(single pcs)\\\\r\\\\n(4 size available)\\\",\\\"created_at\\\":\\\"2021-02-22 07:16:16\\\",\\\"updated_at\\\":\\\"2021-03-23 07:29:24\\\"}}\"]', 36, '6239g', 'Lance Gates', 'Odette Waller', 'Curran Barry', 'Switzerland', '420 White Hague Boulevard', 'Non nihil et est fu', 'processing', 'Ullamco et deserunt', '19719', '+1 (968) 234-2017', 'uzair@objects.ws', '160', 0, 'Adipisci ipsa natus', '2021-03-23 12:10:52', '2021-03-23 12:10:52');
INSERT INTO `orders` (`id`, `product_ids`, `user_id`, `orderId`, `firstName`, `lastName`, `companyName`, `country`, `addressline1`, `addressline2`, `order_status`, `city`, `postalCode`, `phone`, `email`, `orderTotal`, `IsCouponApplied`, `notes`, `created_at`, `updated_at`) VALUES
(40, '[\"{\\\"id\\\":134,\\\"name\\\":\\\"Potato Masher Full Steel Master\\\",\\\"price\\\":180,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":134,\\\"category_id\\\":27,\\\"tags\\\":\\\"Master Potato Masher,kitchentool,steel,\\\\tHome, Hotel\\\\\\/Restaurant\\\",\\\"title\\\":\\\"Potato Masher Full Steel Master\\\",\\\"slug\\\":\\\"potato-masher-full-steel-master\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"180\\\",\\\"wholesalePrice\\\":\\\"170\\\",\\\"meta_description\\\":\\\"Steel Potato Masher\\\",\\\"description\\\":\\\"Master Steel Potato Masher\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611992635-00986021414-IMG20210128110056.jpg\\\",\\\"gallery\\\":[\\\"1611992635-0986021414-IMG20210128110050.jpg\\\",\\\"1611992635-0986021414-IMG20210128110056.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-01-30 02:43:55\\\",\\\"updated_at\\\":\\\"2021-02-28 06:35:43\\\"}}\",\"{\\\"id\\\":131,\\\"name\\\":\\\"Chimta Awami Prince\\\",\\\"price\\\":140,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"large\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":131,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,tong,kitchentool,Home, Hotel\\\\\\/Restaurant,Chimta Awami Prince\\\",\\\"title\\\":\\\"Chimta Awami Prince\\\",\\\"slug\\\":\\\"chimta-awami-prince\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611988703-07305991473-IMG20210128105533.jpg\\\",\\\"gallery\\\":[\\\"1611988470-9640071233-IMG20210128104739.jpg\\\",\\\"1611988470-9640071233-IMG20210128104943.jpg\\\",\\\"1611988470-9640071233-IMG20210128105533.jpg\\\"],\\\"additional_info\\\":\\\"small, meduim, large\\\\r\\\\n(3 size availbale) (single piece available)\\\",\\\"created_at\\\":\\\"2021-01-30 01:34:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:22:23\\\"}}\",\"{\\\"id\\\":287,\\\"name\\\":\\\"Test\\\",\\\"price\\\":21,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"test 1\\\",\\\"uzair2\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":287,\\\"category_id\\\":12,\\\"tags\\\":null,\\\"title\\\":\\\"Test\\\",\\\"slug\\\":\\\"test\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"12\\\",\\\"wholesalePrice\\\":\\\"10\\\",\\\"meta_description\\\":\\\"This is a test proudtc\\\",\\\"description\\\":null,\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":null,\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-23 13:42:48\\\",\\\"updated_at\\\":\\\"2021-03-23 13:45:01\\\"}}\"]', 36, 'XOWU8', 'Holmes Trujillo', 'Farrah Saunders', 'Madeson Mcdaniel', 'Rwanda', '20 Fabien Court', 'Debitis iusto Nam ut', 'processing', 'Ut dolores fugit mi', '48777', '+1 (239) 358-5734', 'uzair@objects.ws', '341', 0, 'Voluptatem Quaerat', '2021-03-23 14:07:11', '2021-03-23 14:07:11'),
(41, '[\"{\\\"id\\\":131,\\\"name\\\":\\\"Chimta Awami Prince\\\",\\\"price\\\":110,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"medium\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":131,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,tong,kitchentool,Home, Hotel\\\\\\/Restaurant,Chimta Awami Prince\\\",\\\"title\\\":\\\"Chimta Awami Prince\\\",\\\"slug\\\":\\\"chimta-awami-prince\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611988703-07305991473-IMG20210128105533.jpg\\\",\\\"gallery\\\":[\\\"1611988470-9640071233-IMG20210128104739.jpg\\\",\\\"1611988470-9640071233-IMG20210128104943.jpg\\\",\\\"1611988470-9640071233-IMG20210128105533.jpg\\\"],\\\"additional_info\\\":\\\"small, meduim, large\\\\r\\\\n(3 size availbale) (single piece available)\\\",\\\"created_at\\\":\\\"2021-01-30 01:34:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:22:23\\\"}}\"]', 36, 'NKwZ3', 'Devin Harrison', 'Garth Mcdowell', 'Wyoming Ewing', 'Micronesia, Federated States of', '473 White Milton Parkway', 'Ut omnis tempora nih', 'processing', 'Reiciendis explicabo', '61614', '+1 (543) 309-3411', 'uzair@objects.ws', '110', 0, 'Enim exercitationem', '2021-03-23 14:09:15', '2021-03-23 14:09:15'),
(42, '[\"{\\\"id\\\":287,\\\"name\\\":\\\"Test\\\",\\\"price\\\":20,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"test2\\\",\\\"uzair3\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":287,\\\"category_id\\\":12,\\\"tags\\\":null,\\\"title\\\":\\\"Test\\\",\\\"slug\\\":\\\"test\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"12\\\",\\\"wholesalePrice\\\":\\\"10\\\",\\\"meta_description\\\":\\\"This is a test proudtc\\\",\\\"description\\\":null,\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":null,\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-23 13:42:48\\\",\\\"updated_at\\\":\\\"2021-03-23 13:45:01\\\"}}\"]', 36, '4j25Y', 'Yael Estrada', 'Larissa Christian', 'Dale Davis', 'Chile', '40 South Clarendon Street', 'Quia sint corrupti', 'processing', 'Eos sunt culpa ill', '39470', '+1 (575) 465-6713', 'uzair@objects.ws', '20', 0, 'Eveniet blanditiis', '2021-03-23 14:09:59', '2021-03-23 14:09:59'),
(43, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":860,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"1.9L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'E7sD5', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '860', 0, NULL, '2021-03-23 17:09:25', '2021-03-23 17:09:25'),
(44, '[\"{\\\"id\\\":131,\\\"name\\\":\\\"Chimta Awami Prince\\\",\\\"price\\\":140,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"large\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":131,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,tong,kitchentool,Home, Hotel\\\\\\/Restaurant,Chimta Awami Prince\\\",\\\"title\\\":\\\"Chimta Awami Prince\\\",\\\"slug\\\":\\\"chimta-awami-prince\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611988703-07305991473-IMG20210128105533.jpg\\\",\\\"gallery\\\":[\\\"1611988470-9640071233-IMG20210128104739.jpg\\\",\\\"1611988470-9640071233-IMG20210128104943.jpg\\\",\\\"1611988470-9640071233-IMG20210128105533.jpg\\\"],\\\"additional_info\\\":\\\"small, meduim, large\\\\r\\\\n(3 size availbale) (single piece available)\\\",\\\"created_at\\\":\\\"2021-01-30 01:34:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:22:23\\\"}}\"]', NULL, 'FXEXM', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '140', 0, NULL, '2021-03-23 17:28:58', '2021-03-23 17:28:58'),
(45, '[\"{\\\"id\\\":131,\\\"name\\\":\\\"Chimta Awami Prince\\\",\\\"price\\\":110,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"medium\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":131,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,tong,kitchentool,Home, Hotel\\\\\\/Restaurant,Chimta Awami Prince\\\",\\\"title\\\":\\\"Chimta Awami Prince\\\",\\\"slug\\\":\\\"chimta-awami-prince\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611988703-07305991473-IMG20210128105533.jpg\\\",\\\"gallery\\\":[\\\"1611988470-9640071233-IMG20210128104739.jpg\\\",\\\"1611988470-9640071233-IMG20210128104943.jpg\\\",\\\"1611988470-9640071233-IMG20210128105533.jpg\\\"],\\\"additional_info\\\":\\\"small, meduim, large\\\\r\\\\n(3 size availbale) (single piece available)\\\",\\\"created_at\\\":\\\"2021-01-30 01:34:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:22:23\\\"}}\",\"{\\\"id\\\":150,\\\"name\\\":\\\"Kitchen Set 7pcs Master\\\",\\\"price\\\":1680,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":150,\\\"category_id\\\":27,\\\"tags\\\":\\\"spoon kitchen set,kitchentool\\\",\\\"title\\\":\\\"Kitchen Set 7pcs Master\\\",\\\"slug\\\":\\\"kitchen-set-7pcs-master\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1680\\\",\\\"wholesalePrice\\\":\\\"1670\\\",\\\"meta_description\\\":\\\"Master Spoon Kitchen Set\\\",\\\"description\\\":\\\"Master Spoon Kitchen Set\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1612079752-00131956385-IMG20210126140823.jpg\\\",\\\"gallery\\\":[\\\"1612079752-0131956385-IMG20210126140240.jpg\\\",\\\"1612079752-0131956385-IMG20210126140329.jpg\\\",\\\"1612079752-0131956385-IMG20210126140414.jpg\\\",\\\"1612079752-0131956385-IMG20210126140432.jpg\\\",\\\"1612079752-0131956385-IMG20210126140503.jpg\\\",\\\"1612079752-0131956385-IMG20210126140823.jpg\\\",\\\"1612079752-0131956385-IMG20210126140837.jpg\\\",\\\"1612079752-0131956385-IMG20210126140954.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-01-31 02:55:52\\\",\\\"updated_at\\\":\\\"2021-03-01 07:42:23\\\"}}\",\"{\\\"id\\\":151,\\\"name\\\":\\\"Spoon Ajwa No-01 12pcs\\\",\\\"price\\\":470,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"babyspoon\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":151,\\\"category_id\\\":27,\\\"tags\\\":\\\"Ajwa Spoon,kitchentool\\\",\\\"title\\\":\\\"Spoon Ajwa No-01 12pcs\\\",\\\"slug\\\":\\\"spoon-ajwa-no-01-12pcs\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"460\\\",\\\"wholesalePrice\\\":\\\"450\\\",\\\"meta_description\\\":\\\"Ajwa Spoon (three size are available)\\\",\\\"description\\\":\\\"Ajwa Spoon (3 size are available) 12pcs\\\",\\\"warranty\\\":null,\\\"policy\\\":\\\"(3 size are available) teaspoon, babyspoon, tablespoon\\\",\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1612081044-02784638023-IMG20210128121659.jpg\\\",\\\"gallery\\\":[\\\"1612081044-2784638023-IMG20210128120619.jpg\\\",\\\"1612081044-2784638023-IMG20210128121410.jpg\\\",\\\"1612081044-2784638023-IMG20210128121659.jpg\\\"],\\\"additional_info\\\":\\\"(3 size are available) \\\\r\\\\nteaspoon, \\\\r\\\\nbabyspoon, \\\\r\\\\ntablespoon.\\\",\\\"created_at\\\":\\\"2021-01-31 03:17:24\\\",\\\"updated_at\\\":\\\"2021-03-01 08:20:07\\\"}}\"]', NULL, 'z8O93', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '2260', 0, NULL, '2021-03-24 06:24:30', '2021-03-24 06:24:30'),
(46, '[\"{\\\"id\\\":284,\\\"name\\\":\\\"Carpet Cleaner 4 Brush Kimee\\\",\\\"price\\\":250,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":284,\\\"category_id\\\":20,\\\"tags\\\":\\\"Carpet Cleaner 4 Brush Kimee\\\",\\\"title\\\":\\\"Carpet Cleaner 4 Brush Kimee\\\",\\\"slug\\\":\\\"carpet-cleaner-4-brush-kimee\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"250\\\",\\\"wholesalePrice\\\":\\\"240\\\",\\\"meta_description\\\":\\\"Carpet Cleaner 4 Brush Kimee\\\",\\\"description\\\":\\\"Carpet Cleaner 4 Brush Kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614842866-05713929080-cfb4ff5b-de12-46f6-8c86-0cfbb7143735.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:27:46\\\",\\\"updated_at\\\":\\\"2021-03-23 07:19:09\\\"}}\"]', 36, 'F1DBW', 'Caryn Adkins', 'Alvin Campbell', 'Lucas Calderon', 'Antigua and Barbuda', '940 White New Drive', 'Adipisci aut est et', 'processing', 'Pariatur Aut vel co', '88935', '+1 (545) 309-7416', 'uzair@objects.ws', '350', 0, 'Amet et eum sed ali', '2021-03-27 10:10:49', '2021-03-27 10:10:49'),
(47, '[\"{\\\"id\\\":74,\\\"name\\\":\\\"Brabantia Baking Set\\\",\\\"price\\\":50,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"red\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":74,\\\"category_id\\\":13,\\\"tags\\\":null,\\\"title\\\":\\\"Brabantia Baking Set\\\",\\\"slug\\\":\\\"brabantia-baking-set\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"4499\\\",\\\"wholesalePrice\\\":\\\"3599\\\",\\\"meta_description\\\":\\\"All sticky situations and mix-ups are whisked away by this hands-on quart for baking and mixing. A complete and clever set of a whisk, bowl, pastry brush and spatula.\\\",\\\"description\\\":\\\"Depth: 24.8cm, Width: 24.8cm, Height: 15cm\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1597504641-02253951903-Zyliss-Frying-Pan_-28cm-_1_-s.png\\\",\\\"gallery\\\":[\\\"1597504641-2253951903-Zyliss-Frying-Pan_-28cm-_2.png\\\",\\\"1597504641-2253951903-Zyliss-Frying-Pan_-28cm-_4_-s.png\\\"],\\\"additional_info\\\":\\\"The rim of the mixing bowl makes pouring easy, whilst the silicone base prevents slipping.\\\\r\\\\n\\\\u2022 Whisk has an open shape for easy mixing and cleaning\\\\r\\\\n\\\\u2022 Baking spatula for mixing scraping - soft and flexible silicone\\\\r\\\\n\\\\u2022 Pastry brush for buttering baking tins, glazing cakes and spreading oil -soft and flexible silicone.\\\\r\\\\n\\\\u2022 Easy to clean - dishwasher safe\\\\r\\\\n\\\\u2022 Part of the Brabantia TASTY+ collection - a colourful tool for every kitchen job!\\\",\\\"created_at\\\":\\\"2020-08-15 10:17:21\\\",\\\"updated_at\\\":\\\"2021-02-22 08:08:43\\\"}}\"]', 36, 'y4Kj8', 'Hermione Gilbert', 'Mufutau Hurley', 'Aphrodite Reynolds', 'Faroe Islands', '571 South Fabien Road', 'Numquam consequat Q', 'processing', 'Ut illum dolore dol', '17746', '+1 (416) 314-1893', 'uzair@objects.ws', '150', 0, 'Sint tempor qui aspe', '2021-03-27 16:12:53', '2021-03-27 16:12:53'),
(48, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":750,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"1.6L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, '46Oz8', 'Shahmeer', 'Shaikh', NULL, 'Pakistan', 'House #123 abc road Hyderabad', NULL, 'processing', 'Hyderabad', '77371', '03463840282', 'Abc123@gmail.com', '1600', 0, NULL, '2021-03-28 06:06:34', '2021-03-28 06:06:34'),
(49, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":700,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"1.3L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'm9VYx', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '1500', 0, NULL, '2021-03-28 06:53:24', '2021-03-28 06:53:24'),
(50, '[\"{\\\"id\\\":131,\\\"name\\\":\\\"Chimta Awami Prince\\\",\\\"price\\\":140,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"large\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":131,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,tong,kitchentool,Home, Hotel\\\\\\/Restaurant,Chimta Awami Prince\\\",\\\"title\\\":\\\"Chimta Awami Prince\\\",\\\"slug\\\":\\\"chimta-awami-prince\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611988703-07305991473-IMG20210128105533.jpg\\\",\\\"gallery\\\":[\\\"1611988470-9640071233-IMG20210128104739.jpg\\\",\\\"1611988470-9640071233-IMG20210128104943.jpg\\\",\\\"1611988470-9640071233-IMG20210128105533.jpg\\\"],\\\"additional_info\\\":\\\"small, meduim, large\\\\r\\\\n(3 size availbale) (single piece available)\\\",\\\"created_at\\\":\\\"2021-01-30 01:34:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:22:23\\\"}}\"]', NULL, 'dD296', 'Shahmeer', 'Shaikh', NULL, 'Pakistan', 'House #123 abc road Hyderabad', NULL, 'processing', 'Hyderabad', '77371', '03463840282', 'Abc123@gmail.com', '380', 0, NULL, '2021-03-29 06:47:29', '2021-03-29 06:47:29'),
(51, '[\"{\\\"id\\\":132,\\\"name\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"price\\\":200,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":132,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,ice,tong,\\\\tHome, Hotel\\\\\\/Restaurant,Chimta Steel no-220 White Pearl\\\",\\\"title\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"slug\\\":\\\"chimta-steel-no-220-white-pearl\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"200\\\",\\\"wholesalePrice\\\":\\\"190\\\",\\\"meta_description\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"description\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611991420-09903174252-IMG20210128105649.jpg\\\",\\\"gallery\\\":[\\\"1611991420-9903174252-IMG20210128105643.jpg\\\",\\\"1611991420-9903174252-IMG20210128105649.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-01-30 02:23:40\\\",\\\"updated_at\\\":\\\"2021-03-23 07:23:38\\\"}}\"]', NULL, 'o5Mw5', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '300', 0, NULL, '2021-03-29 07:14:07', '2021-03-29 07:14:07'),
(52, '[\"{\\\"id\\\":285,\\\"name\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"price\\\":320,\\\"quantity\\\":2,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":285,\\\"category_id\\\":20,\\\"tags\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"title\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"slug\\\":\\\"namak-dani-tulip-kimee-4pic\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"320\\\",\\\"wholesalePrice\\\":\\\"310\\\",\\\"meta_description\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"description\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614843095-03620521997-b2d9af34-adbc-418e-b56e-9ce821aaee93.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:31:35\\\",\\\"updated_at\\\":\\\"2021-03-23 07:36:55\\\"}}\"]', NULL, 'T6VSx', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '740', 0, NULL, '2021-03-31 07:15:41', '2021-03-31 07:15:41'),
(53, '[\"{\\\"id\\\":230,\\\"name\\\":\\\"Usb Chargeable Juice Blender HM-03\\\",\\\"price\\\":1130,\\\"quantity\\\":2,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":230,\\\"category_id\\\":46,\\\"tags\\\":\\\"Usb Chargeable Juice Blender,380ml\\\",\\\"title\\\":\\\"Usb Chargeable Juice Blender HM-03\\\",\\\"slug\\\":\\\"usb-chargeable-juice-blender-hm-03\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1130\\\",\\\"wholesalePrice\\\":\\\"1120\\\",\\\"meta_description\\\":\\\"Usb Chargeable Juice Blender\\\",\\\"description\\\":\\\"Usb Chargeable Juice Blender\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614065577-02005911492-IMG20210209124809.jpg\\\",\\\"gallery\\\":[\\\"1614065577-2005911492-IMG20210209124656.jpg\\\",\\\"1614065577-2005911492-IMG20210209124809.jpg\\\"],\\\"additional_info\\\":\\\"380ml\\\\r\\\\nbattery capacity 2000mah\\\\r\\\\ncharging time about 3 hours\\\",\\\"created_at\\\":\\\"2021-02-23 07:32:57\\\",\\\"updated_at\\\":\\\"2021-03-23 07:41:39\\\"}}\"]', NULL, 'AE3rv', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'completed', 'hyderabad', '71000', '00000000', 'example@example.com', '2360', 0, 'I want fast delivery', '2021-04-01 06:35:28', '2021-04-01 06:39:35'),
(54, '[\"{\\\"id\\\":154,\\\"name\\\":\\\"Rice Spoon #01 Ajwa (single pcs)\\\",\\\"price\\\":110,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":154,\\\"category_id\\\":27,\\\"tags\\\":\\\"Spoon,Ajwa Rice Spoon #01,Rice Spoon #01 Ajwa\\\",\\\"title\\\":\\\"Rice Spoon #01 Ajwa (single pcs)\\\",\\\"slug\\\":\\\"rice-spoon-01-ajwa-single-pcs\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Rice Spoon #01 Ajwa (single pcs)=100 (12 pcs)=980\\\",\\\"description\\\":\\\"Rice Spoon #01 Ajwa\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1612419762-01379620502-IMG20210128124805.jpg\\\",\\\"gallery\\\":[\\\"1612419763-1379620502-IMG20210128124710.jpg\\\",\\\"1612419763-1379620502-IMG20210128124805.jpg\\\",\\\"1612419763-1379620502-IMG20210128124942.jpg\\\"],\\\"additional_info\\\":\\\"(single pcs)=100 \\\\r\\\\n(12 pcs)=980\\\",\\\"created_at\\\":\\\"2021-02-04 01:22:43\\\",\\\"updated_at\\\":\\\"2021-03-14 06:52:10\\\"}}\"]', NULL, 'cTdV3', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'completed', 'hyderabad', '71000', '00000000', 'example@example.com', '210', 0, NULL, '2021-04-03 06:56:56', '2021-04-03 06:57:36'),
(55, '[\"{\\\"id\\\":277,\\\"name\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"price\\\":450,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":277,\\\"category_id\\\":20,\\\"tags\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"title\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"slug\\\":\\\"orange-juicer-handy-888-red-plastic\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"450\\\",\\\"wholesalePrice\\\":\\\"440\\\",\\\"meta_description\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"description\\\":\\\"Orange Juicer Handy 888 Red Plastic\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614841410-09537983020-532f9369-75da-49d8-a614-0cabf317820e.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:03:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:37:00\\\"}}\"]', NULL, 'WcAqo', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'completed', 'hyderabad', '71000', '00000000', 'fine@gmail.com', '550', 0, NULL, '2021-04-03 07:33:40', '2021-04-03 07:34:20'),
(56, '[\"{\\\"id\\\":285,\\\"name\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"price\\\":320,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":285,\\\"category_id\\\":20,\\\"tags\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"title\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"slug\\\":\\\"namak-dani-tulip-kimee-4pic\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"320\\\",\\\"wholesalePrice\\\":\\\"310\\\",\\\"meta_description\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"description\\\":\\\"Namak Dani Tulip kimee 4pic\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614843095-03620521997-b2d9af34-adbc-418e-b56e-9ce821aaee93.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:31:35\\\",\\\"updated_at\\\":\\\"2021-03-23 07:36:55\\\"}}\",\"{\\\"id\\\":260,\\\"name\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"price\\\":1130,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":260,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"title\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"slug\\\":\\\"thermose-sk-162p-1ltr-golden-body\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1130\\\",\\\"wholesalePrice\\\":\\\"1120\\\",\\\"meta_description\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"description\\\":\\\"Thermose SK-162p 1ltr Golden Body\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614154818-06822040901-IMG20210210120049.jpg\\\",\\\"gallery\\\":[\\\"1614154818-6822040901-IMG20210210120049.jpg\\\",\\\"1614154818-6822040901-IMG20210210120107.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 08:20:18\\\",\\\"updated_at\\\":\\\"2021-02-28 07:50:34\\\"}}\"]', NULL, 'zD5iy', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'fine@gmail.com', '1550', 0, NULL, '2021-04-04 05:53:58', '2021-04-04 05:53:58'),
(57, '[\"{\\\"id\\\":270,\\\"name\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"price\\\":365,\\\"quantity\\\":\\\"3\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":270,\\\"category_id\\\":20,\\\"tags\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"title\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"slug\\\":\\\"orange-juicer-handy-777-plastic\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"365\\\",\\\"wholesalePrice\\\":\\\"355\\\",\\\"meta_description\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"description\\\":\\\"Orange Juicer Handy 777 Plastic\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614838246-09520086149-1cb949a4-cc6c-49fd-a0e8-dbbdfdbda942.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:10:46\\\",\\\"updated_at\\\":\\\"2021-03-23 07:36:58\\\"}}\",\"{\\\"id\\\":276,\\\"name\\\":\\\"Namak Dani Crystal 1pcs kimee\\\",\\\"price\\\":80,\\\"quantity\\\":\\\"5\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":276,\\\"category_id\\\":20,\\\"tags\\\":\\\"Namak Dani Crystal 1pcs kimee\\\",\\\"title\\\":\\\"Namak Dani Crystal 1pcs kimee\\\",\\\"slug\\\":\\\"namak-dani-crystal-1pcs-kimee\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"80\\\",\\\"wholesalePrice\\\":\\\"70\\\",\\\"meta_description\\\":\\\"Namak Dani Crystal 1pcs kimee\\\",\\\"description\\\":\\\"Namak Dani Crystal 1pcs kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614841144-00021512279-413c2e56-9f8f-4b87-8071-28ab06eb2694.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:59:04\\\",\\\"updated_at\\\":\\\"2021-03-23 07:36:54\\\"}}\",\"{\\\"id\\\":242,\\\"name\\\":\\\"Thermose Zoku Happy 1ltr\\\",\\\"price\\\":710,\\\"quantity\\\":\\\"3\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":242,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Zoku Happy 1ltr\\\",\\\"title\\\":\\\"Thermose Zoku Happy 1ltr\\\",\\\"slug\\\":\\\"thermose-zoku-happy-1ltr\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"710\\\",\\\"wholesalePrice\\\":\\\"700\\\",\\\"meta_description\\\":\\\"Thermose Zoku Happy 1ltr\\\",\\\"description\\\":\\\"Thermose Zoku Happy 1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614151600-03143131920-IMG20210210113337.jpg\\\",\\\"gallery\\\":[\\\"1614151600-3143131920-IMG20210210113337.jpg\\\",\\\"1614151600-3143131920-IMG20210210113343.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 07:26:40\\\",\\\"updated_at\\\":\\\"2021-03-23 07:41:37\\\"}}\",\"{\\\"id\\\":139,\\\"name\\\":\\\"Pizza Cutter Steel Master\\\",\\\"price\\\":150,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":139,\\\"category_id\\\":27,\\\"tags\\\":\\\"Master Pizza cutter,kitchentool,Home, Hotel\\\\\\/Restaurant\\\",\\\"title\\\":\\\"Pizza Cutter Steel Master\\\",\\\"slug\\\":\\\"pizza-cutter-steel-master\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"150\\\",\\\"wholesalePrice\\\":\\\"145\\\",\\\"meta_description\\\":\\\"Master Pizza cutter\\\",\\\"description\\\":\\\"Pizza Cutter Steel Master\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1611996129-05372087345-IMG20210128111105.jpg\\\",\\\"gallery\\\":[\\\"1611996129-5372087345-IMG20210128111105.jpg\\\",\\\"1611996129-5372087345-IMG20210128111108.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-01-30 03:42:09\\\",\\\"updated_at\\\":\\\"2021-03-01 05:55:53\\\"}}\",\"{\\\"id\\\":186,\\\"name\\\":\\\"Yellow LPG Cylinder Small\\\",\\\"price\\\":4320,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":186,\\\"category_id\\\":30,\\\"tags\\\":\\\"Yellow LPG Cylinder Small,gas\\\",\\\"title\\\":\\\"Yellow LPG Cylinder Small\\\",\\\"slug\\\":\\\"yellow-lpg-cylinder-small\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"4320\\\",\\\"wholesalePrice\\\":\\\"4300\\\",\\\"meta_description\\\":\\\"The high quality of fiber glass and HDPE are sumptuously used in plant for LPG gas tanks. Cylinders are manufactured according to national & international.\\\\r\\\\n\\\\r\\\\nBGC Cylinders are user friendly due to its design and 50% lighter than conventional cylinder.\\\\r\\\\nBGC Cylinders quality assures 100% safety from explosion. Highly safe composite material does not blast unlike metal cylinders.\\\\r\\\\nHandling of BGC composite Cylinder is much easier due to its light weight. Empty cylinder tare weight is 5kg.\\\\r\\\\nBGC Composite Cylinder is corrosion free because it doesn\\\\u2019t leave stain on kitchen floor or anywhere else, and never corrode even in humid or coastal areas.\\\\r\\\\nBGC Cylinder is UV resistant to effects from sun, rain and temperature variations and handling.\\\\r\\\\nBGC Cylinder can be customized as per customer preferences and requirements. You can choose the color, brand etc.\\\",\\\"description\\\":\\\"The high quality of fiber glass and HDPE are sumptuously used in plant for LPG gas tanks. Cylinders are manufactured according to national & international.\\\\r\\\\n\\\\r\\\\nBGC Cylinders are user friendly due to its design and 50% lighter than conventional cylinder.\\\\r\\\\nBGC Cylinders quality assures 100% safety from explosion. Highly safe composite material does not blast unlike metal cylinders.\\\\r\\\\nHandling of BGC composite Cylinder is much easier due to its light weight. Empty cylinder tare weight is 5kg.\\\\r\\\\nBGC Composite Cylinder is corrosion free because it doesn\\\\u2019t leave stain on kitchen floor or anywhere else, and never corrode even in humid or coastal areas.\\\\r\\\\nBGC Cylinder is UV resistant to effects from sun, rain and temperature variations and handling.\\\\r\\\\nBGC Cylinder can be customized as per customer preferences and requirements. You can choose the color, brand etc.\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1613802801-05943776340-yellow-cylinder-small-2.jpg\\\",\\\"gallery\\\":[\\\"1613802801-5943776340-yellow-cylinder-small-2.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-20 06:33:21\\\",\\\"updated_at\\\":\\\"2021-02-25 08:35:51\\\"}}\",\"{\\\"id\\\":211,\\\"name\\\":\\\"Knife Multi Color\\\",\\\"price\\\":0,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"5.5inch\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":211,\\\"category_id\\\":17,\\\"tags\\\":\\\"Knife Multi Color (single piece available)\\\",\\\"title\\\":\\\"Knife Multi Color\\\",\\\"slug\\\":\\\"knife-multi-color\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"000\\\",\\\"wholesalePrice\\\":\\\"000\\\",\\\"meta_description\\\":\\\"Knife Multi Color (single piece available)\\\",\\\"description\\\":\\\"Knife Multi Color (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1613976859-02194070591-IMG20210208125500.jpg\\\",\\\"gallery\\\":[\\\"1613976859-2194070591-IMG20210208125213.jpg\\\",\\\"1613976859-2194070591-IMG20210208125225.jpg\\\",\\\"1613976859-2194070591-IMG20210208125256.jpg\\\",\\\"1613976859-2194070591-IMG20210208125333.jpg\\\",\\\"1613976859-2194070591-IMG20210208125345.jpg\\\",\\\"1613976859-2194070591-IMG20210208125401.jpg\\\",\\\"1613976859-2194070591-IMG20210208125458.jpg\\\",\\\"1613976859-2194070591-IMG20210208125500.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-22 06:54:19\\\",\\\"updated_at\\\":\\\"2021-03-23 07:35:35\\\"}}\"]', 50, '4ly9q', 'ayoub', 'chohan', '-', 'Pakistan', 'house no 88/89 al waheed colony hyderabad sind', NULL, 'processing', 'hyderabad', '71000', '03003056073', 'thebartanstore@gmail.com', '8195', 0, NULL, '2021-04-04 07:06:56', '2021-04-04 07:06:56'),
(58, '[\"{\\\"id\\\":280,\\\"name\\\":\\\"Suger Pot Roze Kimee\\\",\\\"price\\\":190,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":280,\\\"category_id\\\":20,\\\"tags\\\":\\\"Suger Pot Roze Kimee\\\",\\\"title\\\":\\\"Suger Pot Roze Kimee\\\",\\\"slug\\\":\\\"suger-pot-roze-kimee\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"190\\\",\\\"wholesalePrice\\\":\\\"180\\\",\\\"meta_description\\\":\\\"Suger Pot Roze Kimee\\\",\\\"description\\\":\\\"Suger Pot Roze Kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614841908-07438039160-48150e59-04ff-46b2-a849-2b389d85fbdf.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:11:48\\\",\\\"updated_at\\\":\\\"2021-03-23 07:37:30\\\"}}\"]', NULL, '9gi45', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'completed', 'hyderabad', '71000', '00000000', 'fine@gmail.com', '290', 0, NULL, '2021-04-06 06:01:52', '2021-04-06 06:02:17'),
(59, '[\"{\\\"id\\\":233,\\\"name\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"price\\\":730,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":233,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"title\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"slug\\\":\\\"thermose-happy-hybrid-1ltr\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"730\\\",\\\"wholesalePrice\\\":\\\"710\\\",\\\"meta_description\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"description\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243348-01183490841-IMG20210209131111.jpg\\\",\\\"gallery\\\":[\\\"1614067441-8392258462-IMG20210209131111.jpg\\\",\\\"1614067441-8392258462-IMG20210209131116.jpg\\\"],\\\"additional_info\\\":\\\"1liter\\\",\\\"created_at\\\":\\\"2021-02-23 08:04:01\\\",\\\"updated_at\\\":\\\"2021-02-25 08:55:48\\\"}}\"]', 59, 'eY2Gw', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'completed', 'hyderabad', '71000', '+9200000000', 'fine@gmail.com', '830', 0, NULL, '2021-04-06 06:22:41', '2021-04-06 06:28:17'),
(60, '[\"{\\\"id\\\":131,\\\"name\\\":\\\"Chimta Awami Prince\\\",\\\"price\\\":140,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"large\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":131,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,tong,kitchentool,Home, Hotel\\\\\\/Restaurant,Chimta Awami Prince\\\",\\\"title\\\":\\\"Chimta Awami Prince\\\",\\\"slug\\\":\\\"chimta-awami-prince\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611988703-07305991473-IMG20210128105533.jpg\\\",\\\"gallery\\\":[\\\"1611988470-9640071233-IMG20210128104739.jpg\\\",\\\"1611988470-9640071233-IMG20210128104943.jpg\\\",\\\"1611988470-9640071233-IMG20210128105533.jpg\\\"],\\\"additional_info\\\":\\\"small, meduim, large\\\\r\\\\n(3 size availbale) (single piece available)\\\",\\\"created_at\\\":\\\"2021-01-30 01:34:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:22:23\\\"}}\"]', NULL, 's0yW1', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '9200000000', 'fine@gmail.com', '380', 0, NULL, '2021-04-08 06:05:37', '2021-04-08 06:05:37'),
(61, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":750,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"1.6L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'Rv5AD', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '+92 00000009200000000', 'fine@gmail.com', '1600', 0, NULL, '2021-04-08 06:29:02', '2021-04-08 06:29:02'),
(62, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":750,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"1.6L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'op6zs', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '+92 0000', 'fine@gmail.com', '1600', 0, NULL, '2021-04-10 07:15:44', '2021-04-10 07:15:44');
INSERT INTO `orders` (`id`, `product_ids`, `user_id`, `orderId`, `firstName`, `lastName`, `companyName`, `country`, `addressline1`, `addressline2`, `order_status`, `city`, `postalCode`, `phone`, `email`, `orderTotal`, `IsCouponApplied`, `notes`, `created_at`, `updated_at`) VALUES
(63, '[\"{\\\"id\\\":281,\\\"name\\\":\\\"Orange Juicer Steel kimee\\\",\\\"price\\\":1000,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":281,\\\"category_id\\\":20,\\\"tags\\\":\\\"Orange Juicer Steel kimee\\\",\\\"title\\\":\\\"Orange Juicer Steel kimee\\\",\\\"slug\\\":\\\"orange-juicer-steel-kimee\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1000\\\",\\\"wholesalePrice\\\":\\\"850\\\",\\\"meta_description\\\":\\\"Orange Juicer Steel kimee\\\",\\\"description\\\":\\\"Orange Juicer Steel kimee\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614842164-06862937324-73298bc2-51c7-41b6-8bee-f2c01060a54e.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 07:16:04\\\",\\\"updated_at\\\":\\\"2021-04-04 06:37:04\\\"}}\",\"{\\\"id\\\":275,\\\"name\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"price\\\":820,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":275,\\\"category_id\\\":20,\\\"tags\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"title\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"slug\\\":\\\"finger-chips-potato-plus-kimeea\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"820\\\",\\\"wholesalePrice\\\":\\\"810\\\",\\\"meta_description\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"description\\\":\\\"Finger Chips Potato Plus Kimeea\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614840962-04893915209-86fc27f7-505b-482e-b1e3-a2b0a933188e.jpg\\\",\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-03-04 06:56:02\\\",\\\"updated_at\\\":\\\"2021-03-23 07:33:55\\\"}}\",\"{\\\"id\\\":231,\\\"name\\\":\\\"Thermose Happy Day 1ltr\\\",\\\"price\\\":720,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":231,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Happy Day 1ltr\\\",\\\"title\\\":\\\"Thermose Happy Day 1ltr\\\",\\\"slug\\\":\\\"thermose-happy-day-1ltr\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"720\\\",\\\"wholesalePrice\\\":\\\"710\\\",\\\"meta_description\\\":\\\"Thermose Happy Day 1ltr\\\",\\\"description\\\":\\\"Thermose Happy Day 1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614066778-08032271081-IMG20210209130840.jpg\\\",\\\"gallery\\\":[\\\"1614066778-8032271081-IMG20210209130755.jpg\\\",\\\"1614066778-8032271081-IMG20210209130840.jpg\\\"],\\\"additional_info\\\":\\\"1ltr\\\",\\\"created_at\\\":\\\"2021-02-23 07:52:58\\\",\\\"updated_at\\\":\\\"2021-03-23 07:38:07\\\"}}\",\"{\\\"id\\\":232,\\\"name\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"price\\\":700,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":232,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"title\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"slug\\\":\\\"thermose-happy-expresso-1liter\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"700\\\",\\\"wholesalePrice\\\":\\\"690\\\",\\\"meta_description\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"description\\\":\\\"Thermose Happy Expresso 1liter\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243309-08156722982-IMG20210209130938.jpg\\\",\\\"gallery\\\":[\\\"1614067119-3890942239-IMG20210209130940.jpg\\\"],\\\"additional_info\\\":\\\"1liter\\\",\\\"created_at\\\":\\\"2021-02-23 07:58:39\\\",\\\"updated_at\\\":\\\"2021-02-25 08:55:09\\\"}}\",\"{\\\"id\\\":233,\\\"name\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"price\\\":730,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":233,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"title\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"slug\\\":\\\"thermose-happy-hybrid-1ltr\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"730\\\",\\\"wholesalePrice\\\":\\\"710\\\",\\\"meta_description\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"description\\\":\\\"Thermose Happy Hybrid 1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243348-01183490841-IMG20210209131111.jpg\\\",\\\"gallery\\\":[\\\"1614067441-8392258462-IMG20210209131111.jpg\\\",\\\"1614067441-8392258462-IMG20210209131116.jpg\\\"],\\\"additional_info\\\":\\\"1liter\\\",\\\"created_at\\\":\\\"2021-02-23 08:04:01\\\",\\\"updated_at\\\":\\\"2021-02-25 08:55:48\\\"}}\",\"{\\\"id\\\":237,\\\"name\\\":\\\"Thermose Steel Body China 9016 1Ltr\\\",\\\"price\\\":710,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":237,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose China 9016 1Ltr\\\",\\\"title\\\":\\\"Thermose Steel Body China 9016 1Ltr\\\",\\\"slug\\\":\\\"thermose-steel-body-china-9016-1ltr\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"710\\\",\\\"wholesalePrice\\\":\\\"700\\\",\\\"meta_description\\\":\\\"Thermose China 9016 1Ltr\\\",\\\"description\\\":\\\"Thermose China 9016 1Ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614148923-00021282643-IMG20210209131320.jpg\\\",\\\"gallery\\\":[\\\"1614148923-0021282643-IMG20210209131318.jpg\\\",\\\"1614148923-0021282643-IMG20210209131320.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 06:42:03\\\",\\\"updated_at\\\":\\\"2021-03-23 07:38:18\\\"}}\",\"{\\\"id\\\":238,\\\"name\\\":\\\"Thermose Steel Body 9014 1ltr\\\",\\\"price\\\":690,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":238,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Steel Body 9014 1ltr\\\",\\\"title\\\":\\\"Thermose Steel Body 9014 1ltr\\\",\\\"slug\\\":\\\"thermose-steel-body-9014-1ltr\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"690\\\",\\\"wholesalePrice\\\":\\\"680\\\",\\\"meta_description\\\":\\\"Thermose Steel Body 9014 1ltr\\\",\\\"description\\\":\\\"Thermose Steel Body 9014 1ltr\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614149512-09419264503-IMG20210209131355.jpg\\\",\\\"gallery\\\":[\\\"1614149512-9419264503-IMG20210209131352.jpg\\\",\\\"1614149512-9419264503-IMG20210209131355.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-24 06:51:53\\\",\\\"updated_at\\\":\\\"2021-03-23 07:38:17\\\"}}\",\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":860,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"1.9L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, 'kdUBZ', 'casio', 'casio', NULL, 'Pakistan', 'house no 1 latifabad hyderabad', NULL, 'processing', 'hyderabad', '71000', '00000000000000', 'example@example.com', '6330', 0, NULL, '2021-04-12 06:15:25', '2021-04-12 06:15:25'),
(64, '[\"{\\\"id\\\":268,\\\"name\\\":\\\"Cutlery Set Steel 14g Golden Pearl\\\",\\\"price\\\":1080,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":268,\\\"category_id\\\":12,\\\"tags\\\":\\\"Cutlery Set Steel 14g Golden Pearl\\\",\\\"title\\\":\\\"Cutlery Set Steel 14g Golden Pearl\\\",\\\"slug\\\":\\\"cutlery-set-steel-14g-golden-pearl\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1080\\\",\\\"wholesalePrice\\\":\\\"1070\\\",\\\"meta_description\\\":\\\"Cutlery Set Steel 14g Golden Pearl\\\",\\\"description\\\":\\\"Cutlery Set Steel 14g Golden Pearl\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614236628-01926843535-IMG20210207125126.jpg\\\",\\\"gallery\\\":[\\\"1614236628-1926843535-IMG20210207124855.jpg\\\",\\\"1614236628-1926843535-IMG20210207125126.jpg\\\",\\\"1614236628-1926843535-IMG20210207125155.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-02-25 07:03:48\\\",\\\"updated_at\\\":\\\"2021-03-23 07:28:23\\\"}}\"]', NULL, '4v8gC', 'Shahmeer', 'Shaikh', NULL, 'Pakistan', 'House #123 abc road Hyderabad', NULL, 'processing', 'Hyderabad', '77371', '03463840282', 'Abc123@gmail.com', '1180', 0, NULL, '2021-04-25 12:29:08', '2021-04-25 12:29:08'),
(65, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":750,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"1.6L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\"]', NULL, '63Bot', 'Shahmeer', 'Shaikh', NULL, 'Pakistan', 'House #123 abc road Hyderabad', NULL, 'processing', 'Hyderabad', '77371', '03463840282', 'Abc123@gmail.com', '1600', 0, NULL, '2021-04-25 12:40:56', '2021-04-25 12:40:56'),
(66, '[\"{\\\"id\\\":234,\\\"name\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"price\\\":700,\\\"quantity\\\":\\\"1\\\",\\\"attributes\\\":[\\\"1.3L\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":234,\\\"category_id\\\":47,\\\"tags\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"title\\\":\\\"Thermose Full Steel SPI Seagull\\\",\\\"slug\\\":\\\"thermose-full-steel-spi-seagull\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"670\\\",\\\"wholesalePrice\\\":\\\"650\\\",\\\"meta_description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"description\\\":\\\"Thermose Full Steel SPI Seagull (4 size available) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1614243418-04022886109-IMG20210209131200.jpg\\\",\\\"gallery\\\":[\\\"1614068640-6159282343-IMG20210209131200.jpg\\\",\\\"1614068640-6159282343-IMG20210209131206.jpg\\\"],\\\"additional_info\\\":\\\"1.0L\\\\r\\\\n1.3L\\\\r\\\\n1.6L\\\\r\\\\n1.9L\\\",\\\"created_at\\\":\\\"2021-02-23 08:24:00\\\",\\\"updated_at\\\":\\\"2021-02-25 08:56:58\\\"}}\",\"{\\\"id\\\":132,\\\"name\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"price\\\":190,\\\"quantity\\\":1,\\\"attributes\\\":[],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":132,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,ice,tong,\\\\tHome, Hotel\\\\\\/Restaurant,Chimta Steel no-220 White Pearl\\\",\\\"title\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"slug\\\":\\\"chimta-steel-no-220-white-pearl\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"200\\\",\\\"wholesalePrice\\\":\\\"190\\\",\\\"meta_description\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"description\\\":\\\"Chimta Steel no-220 White Pearl\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611991420-09903174252-IMG20210128105649.jpg\\\",\\\"gallery\\\":[\\\"1611991420-9903174252-IMG20210128105643.jpg\\\",\\\"1611991420-9903174252-IMG20210128105649.jpg\\\"],\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-01-30 02:23:40\\\",\\\"updated_at\\\":\\\"2021-03-23 07:23:38\\\"}}\"]', NULL, '1b305', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '990', 0, NULL, '2021-05-05 10:00:36', '2021-05-05 10:00:36'),
(67, '[\"{\\\"id\\\":131,\\\"name\\\":\\\"Chimta Awami Prince\\\",\\\"price\\\":140,\\\"quantity\\\":1,\\\"attributes\\\":[\\\"large\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":131,\\\"category_id\\\":27,\\\"tags\\\":\\\"chimta,tong,kitchentool,Home, Hotel\\\\\\/Restaurant,Chimta Awami Prince\\\",\\\"title\\\":\\\"Chimta Awami Prince\\\",\\\"slug\\\":\\\"chimta-awami-prince\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"110\\\",\\\"wholesalePrice\\\":\\\"100\\\",\\\"meta_description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"description\\\":\\\"Chimta Awami Prince (3 size availbale) (single piece available)\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":\\\"on\\\",\\\"thumbnail\\\":\\\"1611988703-07305991473-IMG20210128105533.jpg\\\",\\\"gallery\\\":[\\\"1611988470-9640071233-IMG20210128104739.jpg\\\",\\\"1611988470-9640071233-IMG20210128104943.jpg\\\",\\\"1611988470-9640071233-IMG20210128105533.jpg\\\"],\\\"additional_info\\\":\\\"small, meduim, large\\\\r\\\\n(3 size availbale) (single piece available)\\\",\\\"created_at\\\":\\\"2021-01-30 01:34:30\\\",\\\"updated_at\\\":\\\"2021-03-23 07:22:23\\\"}}\"]', NULL, 'b7rs3', 'fine', 'fine', NULL, 'Pakistan', 'zam zam', NULL, 'processing', 'hyderabad', '71000', '00000000', 'example@example.com', '240', 0, NULL, '2021-05-06 10:15:04', '2021-05-06 10:15:04'),
(68, '[\"{\\\"id\\\":288,\\\"name\\\":\\\"Cooler Aqua Royal\\\",\\\"price\\\":2050,\\\"quantity\\\":2,\\\"attributes\\\":[\\\"20ltr\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":288,\\\"category_id\\\":48,\\\"tags\\\":\\\"Cooler Aqua Royal\\\",\\\"title\\\":\\\"Cooler Aqua Royal\\\",\\\"slug\\\":\\\"cooler-aqua-royal\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1000\\\",\\\"wholesalePrice\\\":\\\"950\\\",\\\"meta_description\\\":\\\"Cooler Aqua Royal\\\",\\\"description\\\":\\\"Cooler Aqua Royal\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1621837665-01062615899-IMG20210518115120.jpg\\\",\\\"gallery\\\":[\\\"1621837665-1062615899-IMG20210518115120.jpg\\\",\\\"1621837665-1062615899-IMG20210518115317.jpg\\\"],\\\"additional_info\\\":\\\"6 size are available\\\",\\\"created_at\\\":\\\"2021-05-24 06:27:45\\\",\\\"updated_at\\\":\\\"2021-05-24 06:35:28\\\"}}\"]', 50, 'f53h7', 'shahmeer', 'shaikh', NULL, 'Pakistan', 'house#no 1 c block unit no 6 latifabad hyderabad', NULL, 'processing', 'hyderabad', '71000', '03362722317', 'thebartanstore@gmail.com', '4200', 0, NULL, '2021-05-27 08:17:32', '2021-05-27 08:17:32'),
(69, '[\"{\\\"id\\\":309,\\\"name\\\":\\\"Test\\\",\\\"price\\\":111,\\\"quantity\\\":1,\\\"attributes\\\":[\\\"sm\\\",\\\"red\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":309,\\\"category_id\\\":12,\\\"tags\\\":null,\\\"title\\\":\\\"Test\\\",\\\"slug\\\":\\\"test\\\",\\\"status\\\":\\\"Deactivated\\\",\\\"retailPrice\\\":\\\"12\\\",\\\"wholesalePrice\\\":\\\"10\\\",\\\"meta_description\\\":\\\"asdasd\\\",\\\"description\\\":null,\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":null,\\\"gallery\\\":null,\\\"additional_info\\\":null,\\\"created_at\\\":\\\"2021-06-15 16:15:11\\\",\\\"updated_at\\\":\\\"2021-06-17 06:01:49\\\"}}\"]', 36, 'qt8eM', 'Yvonne Rowe', 'Rana Warner', 'Lionel Coffey', 'Western Sahara', '76 Oak Avenue', 'Voluptas eius in eve', 'processing', 'Sed consequatur Omn', '80351', '+1 (992) 262-3084', 'uzair@objects.ws', '211', 0, 'Quod eos aut ipsa s', '2021-06-19 08:12:48', '2021-06-19 08:12:48'),
(70, '[\"{\\\"id\\\":288,\\\"name\\\":\\\"Cooler Aqua Royal\\\",\\\"price\\\":1450,\\\"quantity\\\":1,\\\"attributes\\\":[\\\"12ltr\\\"],\\\"conditions\\\":[],\\\"associatedModel\\\":{\\\"id\\\":288,\\\"category_id\\\":48,\\\"tags\\\":\\\"Cooler Aqua Royal\\\",\\\"title\\\":\\\"Cooler Aqua Royal\\\",\\\"slug\\\":\\\"cooler-aqua-royal\\\",\\\"status\\\":\\\"Activated\\\",\\\"retailPrice\\\":\\\"1000\\\",\\\"wholesalePrice\\\":\\\"950\\\",\\\"meta_description\\\":\\\"Cooler Aqua Royal\\\",\\\"description\\\":\\\"Cooler Aqua Royal\\\",\\\"warranty\\\":null,\\\"policy\\\":null,\\\"new\\\":null,\\\"thumbnail\\\":\\\"1621837665-01062615899-IMG20210518115120.jpg\\\",\\\"gallery\\\":[\\\"1621837665-1062615899-IMG20210518115120.jpg\\\",\\\"1621837665-1062615899-IMG20210518115317.jpg\\\"],\\\"additional_info\\\":\\\"6 size are available\\\",\\\"created_at\\\":\\\"2021-05-24 06:27:45\\\",\\\"updated_at\\\":\\\"2021-05-24 06:35:28\\\"}}\"]', NULL, 'cStpy', 'Shahmeer', 'Shaikh', NULL, 'Pakistan', 'House #123 abc road Hyderabad', NULL, 'processing', 'Hyderabad', '77371', '03463840282', 'Abc123@gmail.com', '1550', 0, NULL, '2021-06-20 06:33:41', '2021-06-20 06:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('uzairahmed2929@gmail.com', '$2y$10$XNOJ2seknN3XXiKQIeH8weO2.fmh.16mg1b7uYAL3xFYOqNGPBdtS', '2020-08-08 15:03:54'),
('uzairahmed2929@gmail.com', '$2y$10$PIQrA7q9jSXS7/aig93YsOJ.cpDZonBFgiYYhm9Zk9OOo8jptZJRO', '2020-08-08 15:03:54'),
('mycred@mycred.me', '$2y$10$c.xzXg52CiUL36LWU/rWJ.8ttCkCZX8jXA2IB1S82SrVDCQeIoPj6', '2020-08-15 05:20:46'),
('mycred@mycred.me', '$2y$10$2vSacbO4DfmTiPSSP6bEOu2Wyz1jNiGGLCapyB1quGdkQixRhqNRG', '2020-08-15 05:20:46'),
('laravel@test.com', '$2y$10$pVSwZ2gezbLZeoHU7.mP6O5N6zcStQIivuXr2e.TBgWK6AKMdsY8W', '2020-09-26 13:13:35'),
('linux@system.com', '$2y$10$tqBP5HDid8rsXypZKst6pef.KgFV.WGz1NgMSOd/PpZJ.25apgdYG', '2020-09-26 13:13:50'),
('linux@system.com', 'xcMgjMHDGJs4SFdpcmrQGUcoigIsgFjBqprMzJ9wpZZA8TP0pm6OGtjE7EfX', '2020-09-26 14:22:07'),
('linux@system.com', 'vQllyYIQCq1x87RcuqlWx0iMn9puOGV6MhAeIlu4ruUkVUPPDFRuw9LT0TmJ', '2020-09-26 14:22:30'),
('linux@system.com', 'K0erxDuTpdp2TBiEtqAAsN33eKjBnPUVphZaZ7rurdAXmoXlpr51pSaNSb3X', '2020-09-26 14:22:57'),
('linux@system.com', '3OPpuLGBZm1UucvnSvEeSs35M1WuWY8OYf2F20BNrNfz1WwF1gy5ZtIf7NhR', '2020-09-26 14:24:24'),
('linux@system.com', 'tWPdvGIISovFEIUAHjB07GSpc0zlkvmG4cpBiav0syYGoDqNQnVAjRpIuqOt', '2020-09-26 14:30:00'),
('linux@system.com', '5PWZow6w1sp7NVl96ICRAkI2aa4KLrqqTq8p7r5aSC7d0pin18LBPTo0umt0', '2020-09-26 14:30:09'),
('linux@system.com', 'f2g9gDaVZAWRFBTacI9XwEUBjIypnnH1QC8aHd0XQX6A8NsAemgArEmIX58c', '2020-09-26 14:30:30'),
('linux@system.com', 'IctEHjviV9BBMtzUwBnPleiu5Ohms8z7GPZ2Wxb3jFTKkfBO8nzgWKUVcshY', '2020-09-26 14:30:45'),
('linux@system.com', 'lCw6bTiafTumqKJqOfTKKoywDyqFBB9xs36jvQZMqsS8QvENAtARnjSE1lMw', '2020-09-26 14:31:20'),
('linux@system.com', '3y0cGfeftrmIcp9iAV7Dl4QIwuOR7YmHEdGwMOmU8JzxeLIVVwga7s52rtp4', '2020-09-26 14:31:52'),
('linux@system.com', 'CzGlED8iAING91EuwAdzsGeoJDIajVO5pkeHxbRIIMxdpqDH1RoTfkuc5zTr', '2020-09-26 14:31:58'),
('linux@system.com', '9rV34Rz0J1vXxv9En3WuZHE95ZLVQFbcqnDPH7kkOWlm1QVnssnaUmJn6Blt', '2020-09-26 14:32:08'),
('linux@system.com', 'H5B3qVJ5YqLyDlGm7NhDwES1pwomYbb6Y9np53rUMafEYytlN6nRPRMR6sNM', '2020-09-26 14:32:30'),
('linux@system.com', 'bYGK92tEaVcsUUvO2rBN178EbfQpbwpcRRjMYs0A7RW5ODOqDeCzwZudCTHW', '2020-09-26 14:32:43'),
('uzair@objects.ws', '$2y$10$6vagmhaYCCLuPoiHT7RVpeO3TLUU9EDJiy8ABpaSDz8vW5XpUkXmS', '2020-10-03 10:30:43'),
('fine@gmail.com', 'P04f73IRKfHkZ4OAgukWJavd6UxYlaj7u8Gw7Clh0W8ujj3SnBVk9xmx1Glb', '2021-04-03 07:38:52'),
('fine@gmail.com', '78GOGYifBtZm1pD9Ab9SMSMUInW9TmqCxhCJyRDFR6CknlnpFbFHO7I1yaPe', '2021-04-03 07:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retailPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wholesalePrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_info` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `tags`, `title`, `slug`, `status`, `retailPrice`, `wholesalePrice`, `meta_description`, `description`, `warranty`, `policy`, `new`, `thumbnail`, `gallery`, `additional_info`, `created_at`, `updated_at`) VALUES
(70, 12, 'MacKensie Harrington', 'Cora Donovan', 'cora-donovan', 'Activated', '454', '821', 'Incidunt amet nobi', 'Pariatur Nihil proi', 'Emerald Cervantes', 'Ferris Sutton', NULL, '1596886095-09494162090-8.jpg', '[\"1596886095-9494162090-11.jpg\",\"1596886095-9494162090-12.jpg\",\"1596886095-9494162090-13.jpg\",\"1596886095-9494162090-14.jpg\",\"1596886095-9494162090-15.jpg\"]', 'Quam nihil quasi err', '2020-08-08 06:28:15', '2021-01-27 12:34:40'),
(71, 12, NULL, 'Amefa Eclat Cutlery Gift Box, Set of 24', 'amefa-eclat-cutlery-gift-box-set-of-24', 'Deactivated', '4199', '2939', 'Add a touch of understated style and functionality to your home with Amefa\'s Eclat Cutlery set in green. The Eclat cutlery set has a bright and deep color. that brings a modern and contemporary look and brightens your dining table. Dishwasher safe, it\'s perfect for busy modern living.', NULL, NULL, NULL, 'on', '1597504309-04190310182-Amefa_Eclat_Cutlery_Gift_Box_Set_of_24_green_1.png', '[\"1597504309-4190310182-Amefa_Eclat_Cutlery_Gift_Box_Set_of_24_green_2.png\",\"1597504309-4190310182-Amefa_Eclat_Cutlery_Gift_Box_Set_of_24_green_3.png\"]', 'Set Includes: 6x Dinner Forks, 6x Dinner Spoons, 6x Dinner Knives, 6x Dessert Spoons', '2020-08-15 10:11:49', '2021-03-15 08:51:23'),
(72, 13, NULL, 'Denby Studio Blue Rice Bowl, Set of 4', 'denby-studio-blue-rice-bowl-set-of-4', 'Deactivated', '10799', '8639', 'The Rice Bowl Set shows the mix and match appeal of rustic aesthetic of the Studio Blue collection. Great for using to serve rice, side dishes, dips, olives, crisps and desserts. The Rice Bowls can also be used decoratively on the table and around the home.', NULL, NULL, NULL, 'on', '1597504427-05187239570-Denby_Studio_Blue_Rice_Bowl_Set_of_4_1.png', '[\"1597504427-5187239570-Denby_Studio_Blue_Rice_Bowl_Set_of_4_3_180x.png\",\"1597504427-5187239570-Denby_Studio_Blue_Rice_Bowl_Set_of_4_4.png\"]', '• Made in England\r\n• Included in Denby’s 10 Year Guarantee\r\n• Expertly glazed to prevent chipping and enhance durability\r\n• Suitable for oven, microwave and freezer\r\n• Dishwasher safe', '2020-08-15 10:13:47', '2021-03-16 08:11:16'),
(73, 14, NULL, 'Zyliss Frying Pan, 28cm', 'zyliss-frying-pan-28cm', 'Activated', '4099', '3689', 'The Zyliss Cook 28cm frying pan is a fantastic multi-use pan, allowing you to create larger dishes like pan-friend salmon, and even French bread. The 3 multi-layer coating delivers exceptional non-stick performance and eliminates the need for oil or butter – resulting in healthier food for you and your family.', NULL, NULL, NULL, 'on', '1597504556-03116022239-Zyliss-Frying-Pan_-28cm-_1_-s.png', '[\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_2.png\",\"1597504556-3116022239-Zyliss-Frying-Pan_-28cm-_4_-s.png\"]', 'The ultimate non-stick frying pan, with a 3-layer coating\r\n• Enjoy healthy cooking with no oil or butter needed\r\n• Ergonomic soft touch handle\r\n• Suitable for all hobs, including induction\r\n• Made from Forged Aluminium\r\n• Accredited by the Good Housekeeping Institute (2019)', '2020-08-15 10:15:56', '2021-01-27 12:35:21'),
(74, 13, NULL, 'Brabantia Baking Set', 'brabantia-baking-set', 'Deactivated', '4499', '3599', 'All sticky situations and mix-ups are whisked away by this hands-on quart for baking and mixing. A complete and clever set of a whisk, bowl, pastry brush and spatula.', 'Depth: 24.8cm, Width: 24.8cm, Height: 15cm', NULL, NULL, NULL, '1597504641-02253951903-Zyliss-Frying-Pan_-28cm-_1_-s.png', '[\"1597504641-2253951903-Zyliss-Frying-Pan_-28cm-_2.png\",\"1597504641-2253951903-Zyliss-Frying-Pan_-28cm-_4_-s.png\"]', 'The rim of the mixing bowl makes pouring easy, whilst the silicone base prevents slipping.\r\n• Whisk has an open shape for easy mixing and cleaning\r\n• Baking spatula for mixing scraping - soft and flexible silicone\r\n• Pastry brush for buttering baking tins, glazing cakes and spreading oil -soft and flexible silicone.\r\n• Easy to clean - dishwasher safe\r\n• Part of the Brabantia TASTY+ collection - a colourful tool for every kitchen job!', '2020-08-15 10:17:21', '2021-02-22 08:08:43'),
(75, 15, NULL, 'Zoku Midnight Floral Stainless Steel Bottle', 'zoku-midnight-floral-stainless-steel-bottle', 'Activated', '2699', '1699', 'A fresh take on our classic stainless steel bottle. Midnight floral features vibrant yet delicate pink flowers on an edgy black background.', 'With vacuum insulated construction, beverages stay cold for up to 40 hours and hot for up to 12 hours. Designed to take a hit, this double-walled bottle is made of heavy gauge 18/8 stainless steel, yet remains easy to carry with removable paracord lanyard.', NULL, NULL, 'on', '1597504754-07375208969-Zoku_Midnight_Floral_Stainless_Steel_Bottle__2.jpg', '[\"1597504754-7375208969-Zoku_Midnight_Floral_Stainless_Steel_Bottle_1.jpg\",\"1597504754-7375208969-Zoku_Midnight_Floral_Stainless_Steel_Bottle_3.jpg\",\"1597504754-7375208969-Zoku_Midnight_Floral_Stainless_Steel_Bottle_4.jpg\",\"1597504754-7375208969-Zoku_Midnight_Floral_Stainless_Steel_Bottle_5.jpg\"]', 'Depth- 6.9cm, Width- 6.9cm, Height- 24cm', '2020-08-15 10:19:14', '2021-01-27 12:35:31'),
(77, 14, NULL, 'Zyliss Saute Pan with Glass Lid, 28cm', 'zyliss-saute-pan-with-glass-lid-28cm', 'Activated', '5899', '5309', 'The Zyliss Cook 28cm Non-stick Saute Pan with Glass Lid has a wide surface area and tall sides, to keep your ingredients in the pan while you jostle. This multi-task pan is perfect for tasks like reducing a pan sauce or searing meat.', 'Dishwasher Safe', NULL, NULL, 'on', '1597504893-09131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_1.png', '[\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_2.png\",\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_3.png\",\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_4.png\",\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_5.png\",\"1597504893-9131302918-Zyliss-Saute-Pan-with-Glass-Lid_-28cm-_6.png\"]', '• The ultimate non-stick saute pan, with a 3-layer coating\r\n• Enjoy healthy cooking with no oil or butter needed\r\n• Made from Forged Aluminium, safe for use with metal tools\r\n• Suitable for all hobs, including induction\r\n• Ergonomic soft touch handle\r\n• Dishwasher safe with a 10-Year non-stick guarantee\r\n• Accredited by the Good Housekeeping Institute (2020)\r\nDepth- 53.9cm, Width- 28.9cm, Height- 15.5cm', '2020-08-15 10:21:33', '2021-01-27 12:35:21'),
(81, 16, 'cookware,cutters,kitchen', 'Amefa Celebration Tapas Cutlery, Set of 10', 'amefa-celebration-tapas-cutlery-set-of-10', 'Deactivated', '2699', '1889', 'Enjoy delicious appetizers, beautifully set on a wooden board with this on trend golden cutlery. The spoons and forks are perfect for tapas, cocktails, appetizers and deserts. Celebration Gold is available in a 10 piece set.', NULL, '1 year warranty', '30 Days', 'on', '1597505230-03094967082-Amefa_Celebration_Tapas_Cutlery_Set_of_10_1.png', '[\"1597505255-4563628919-Amefa_Celebration_Tapas_Cutlery_Set_of_10_2.png\",\"1597505255-4563628919-Amefa_Celebration_Tapas_Cutlery_Set_of_10_3.png\"]', 'Set Includes: 2x Medium teaspoon 2x Mocca spoon 2x Cake fork 2x Butter spreader 2x Spork', '2020-08-15 10:27:10', '2021-02-22 08:09:34'),
(83, 22, NULL, 'Denby Natural Canvas Espresso Cups - Set of 2', 'denby-natural-canvas-espresso-cups-set-of-2', 'Activated', '7399', '5919', 'The Natural Canvas 2 Espresso Cups Set brought to you by Denby is designed to bring form without the formality to any occasion. A beautiful, durable and functional espresso cup and saucer set from Denby\'s new Natural Canvas range. A beautiful and functional sugar bowl and ramekin from Denby\'s new Natural Canvas range. Ideal for rich single and double espressos from the machine, cafetiere or filter machine. Sustainable and long-lasting, these ceramic espresso cups perfect as a housewarming gift or a treat for yourself. Also great for after dinner or Sunday morning coffees and makes a great gift in its stunning craft packaging.', 'Length: 9cm Width: 6.5cm Depth: 5cm', '3 NMonths', NULL, NULL, '1597593096-06130127390-DenbyNaturalCanvasEspressoCups-Setof2_1.png', NULL, 'Made in England\r\n• Included in Denby’s 10 Year Guarantee\r\n• Suitable for Oven, Microwave, Freezer and Dishwasher safe\r\n• Contains: 2 x Espresso Cups, 2 x Espresso Saucer', '2020-08-16 10:51:36', '2021-03-23 07:28:51'),
(90, 40, 'jugs,bottles,litter', 'Acrylic Transparent Jug, Olive Oil Bottle, Liquid Bottle, Liquid Dispenser with Handle', 'acrylic-transparent-jug-olive-oil-bottle-liquid-bottle-liquid-dispenser-with-handle', 'Deactivated', '1810', '1800', 'Transparent Jug Bottle Dispenser with handle and clear lid. Versatile kitchen tool. 800ML Capacity.Easy to Use & Clean. To clean simply wash by hand with warm soapy water. Completely Food Safe - This can is made from 100% food-safe acrylic and is BPA-free.', NULL, '6 Months return warranty', '6 Months', 'on', '1601736917-03007132675-kw19-2.jpg', '[\"1601736918-3007132675-kw19-1.jpg\",\"1601736918-3007132675-kw19-3.jpg\"]', 'Color: Transparent\r\nMaterial: Acrylic Plastic\r\nVolume: 800 ML\r\nDimensions Jug : 9 X 12 X 22 cm (Length x Width x Height)\r\nPackage Content: 1X Jug', '2020-10-03 09:55:18', '2021-03-01 08:51:49'),
(94, 42, NULL, 'Food Container with Divider', 'food-container-with-divider', 'Activated', '2450', NULL, '100% brand new and original LocknLock product\r\nPerfect for storing different types of leftover food\r\nRemovable dividers for more space as required\r\nStack-able design that saves space on the shelf or in the fridge\r\nAirtight and liquid tight design prevent spillage\r\n2.7 liter capacity', 'Multi purpose food storage container, perfect for storing different types of fruits or food. Removable dividers and stack-able design. Original LocknLock product.', NULL, NULL, 'on', '1602932340-09285679314-01-2.jpg', '[\"1602932340-9285679314-02-3.jpg\",\"1602932340-9285679314-03-2.jpg\"]', 'WEIGHT	0.634 kg\r\nContainer size: 11.64 inches x 9.05 inches x 2.67 inches', '2020-10-17 05:59:00', '2021-03-23 07:33:56'),
(96, 43, 'jars', 'PACK OF 4 PCS DIAMOND DESIGN - 62 Mm Mouth Storage Jar 500ML (WATER) - DIAMOND STYLE Pet Plastic - Transparent', 'pack-of-4-pcs-diamond-design-62-mm-mouth-storage-jar-500ml-water-diamond-style-pet-plastic-transparent', 'Activated', '260', NULL, 'Product details of PACK OF 4 PCS DIAMOND DESIGN - 62 Mm Mouth Storage Jar 500ML (WATER) - DIAMOND STYLE Pet Plastic - Transparent', '62 MM WIDE MOUTH\r\nDIAMOND DESIGN.\r\nPERFECT FOR STORAGE.\r\nCRYSTAL CLEAR PET PLASTIC.\r\nENOUGH STRENGTH.\r\nEASY FILLING.\r\n62 MM WIDE MOUTH\r\nDIAMOND DESIGN.\r\nPERFECT FOR STORAGE.\r\nCRYSTAL CLEAR PET PLASTIC.\r\nENOUGH STRENGTH.\r\nEASY FILLING.', NULL, NULL, 'on', '1610989446-00945091125-172d14e61bf1292a6479dbbd38068d5f.jpg_340x340q80.jpg', NULL, NULL, '2021-01-18 12:04:06', '2021-01-27 12:35:20'),
(99, 43, 'jars', 'Pack of 12 Multipurpose Food Condiment Storage Jars 3x3 inches 250ml each', 'pack-of-12-multipurpose-food-condiment-storage-jars-3x3-inches-250ml-each', 'Activated', '550', NULL, 'Pack of 12 Multipurpose Food Condiment Storage Jars 3x3 inches 250ml each', 'Material: Plastic\r\nStorage capacity: 250ml per jar\r\nHeight: Approximately 3 inches\r\nDiameter: Approximatley 3 inches\r\nInterlock mechanism - can be locked with each other\r\nMultipurpose - can be used for many purposes\r\nTotal 12 Jars of 250ml each will be provided\r\nThese empty plastic jars are a good barrier against air and moisture. The plastic is tough, highly resistant to diluted oils and alcohols, grease, cold and temperature.Plastic jars with lids are perfect for cosmetics, beauty products, for storage of dry food, herbs, spices in your kitchen, bathroom, office and garage, and for arts and crafts supplies with endless possibilities!', NULL, NULL, NULL, '1610990620-03009566057-a94279226c89461bfdc56d2026404a8f.jpg_340x340q80.jpg', NULL, NULL, '2021-01-18 12:23:40', '2021-01-27 12:35:20'),
(101, 43, 'cup set', 'cup for coffee and tea saucers', 'cup-for-coffee-and-tea-saucers', 'Deactivated', '400', NULL, 'cup for coffee and tea saucers', 'NEW PRODUCT\r\nNEW DESIGN\r\nGOOD MATERIAL\r\nDISCOUNTED PRICE\r\nfive star hotel used', NULL, NULL, 'on', '1610991676-05670219788-1c5022a1a5115d3b70f46ec87bfbd2eb.jpg_340x340q80 (1).jpg', NULL, NULL, '2021-01-18 12:41:16', '2021-03-16 08:10:45'),
(104, 12, 'cuttlery', 'Galaxy Dinner/Desert Fork 6Pcs Set Stainless Steel', 'galaxy-dinnerdesert-fork-6pcs-set-stainless-steel', 'Activated', '420', NULL, 'Galaxy Dinner/Desert Fork 6Pcs Set Stainless Steel', 'Rust Resistance\r\n18/10 Stainless Steel\r\nPerfect Balance\r\nHigh Quality Finish\r\nGuage : 13G\r\nDurable\r\nLenght 20Cm', NULL, NULL, 'on', '1610992709-00499308235-02b01ce5f677b37477ce3f1555cecaf9.jpg_340x340q80.jpg', NULL, NULL, '2021-01-18 12:58:29', '2021-01-27 12:34:53'),
(106, 12, 'cuttlery', 'oup Spoons - Melamine - Off white - Set of 6', 'oup-spoons-melamine-off-white-set-of-6', 'Activated', '230', NULL, 'oup Spoons - Melamine - Off white - Set of 6', 'Color : off white\r\nSet of 6 spoons\r\nUse for soup and dessert\r\nstain free material\r\nboth sides glazed\r\nColor : off white\r\nSet of 6 spoons\r\nUse for soup and dessert\r\nstain free material\r\nboth sides glazed\r\nColor : off white\r\nSet of 6 spoons\r\nUse for soup and dessert\r\nstain free material\r\nboth sides glazed\r\n.\r\n\r\nColor : off white\r\nSet of 6 spoons\r\nUse for soup and dessert\r\nstain free material\r\nboth sides glazed', NULL, NULL, 'on', '1610993065-07401912258-006fa5fa646e78203a464fc1707d7648.jpg_340x340q80.jpg', NULL, NULL, '2021-01-18 13:04:25', '2021-01-27 12:34:44'),
(108, 40, 'bottles & jugs', 'SPORTS WATER BOTTLE LARGE CAPACITY GYM BOTTLE APOLLO WB-25 - 2.2 LITTERS', 'sports-water-bottle-large-capacity-gym-bottle-apollo-wb-25-22-litters', 'Activated', '900', NULL, 'SPORTS WATER BOTTLE LARGE CAPACITY GYM BOTTLE APOLLO WB-25 - 2.2 LITTERS', 'Capacity: 2.2 Litters730OzFull\r\nBoiling Water: Not Applicable\r\nFeature: Eco-Friendly\r\nShape: With Lid\r\nMaterial: Plastic\r\nPlastic Type: AS\r\nBPA Free\r\nDEHP Free', NULL, NULL, 'on', '1610993705-01063570482-e4c8690a7b75e8bdcc105f5dba9c009b.jpg_340x340q80.jpg', NULL, NULL, '2021-01-18 13:15:05', '2021-01-27 12:35:31'),
(109, 40, 'bottles & jugs', 'SHAKER BOTTLE PROTEIN SHAKER BOTTLE SPRING BOTTLE WITH TWO SPARE JAR APOLLO WB-01', 'shaker-bottle-protein-shaker-bottle-spring-bottle-with-two-spare-jar-apollo-wb-01', 'Activated', '650', NULL, 'SHAKER BOTTLE PROTEIN SHAKER BOTTLE SPRING BOTTLE WITH TWO SPARE JAR APOLLO WB-01', 'Capacity: 500ml\r\nMaterial: Plastic\r\nPlastic Type: PP\r\nFeature: Eco-Friendly\r\nBottle Mouth: Round\r\nBoiling Water: Applicable\r\nAnti-corrosion Coating: Not Equipped\r\nWater Bottle Type:Protein Shake Bottle', NULL, NULL, 'on', '1610993859-02135631203-8b78e14ac7e75ec093e87a381bfe6ffd.jpg_340x340q80.jpg', NULL, NULL, '2021-01-18 13:17:39', '2021-01-27 12:35:15'),
(110, 40, 'bottles & jugs', 'SPIDER BOTTLE PROTEIN & MULTI PURPOSE SHAKER WITH 2GO SOLUTION Strauss Spider Shaker Bottle 500ml', 'spider-bottle-protein-multi-purpose-shaker-with-2go-solution-strauss-spider-shaker-bottle-500ml', 'Activated', '430', NULL, 'SPIDER BOTTLE PROTEIN & MULTI PURPOSE SHAKER WITH 2GO SOLUTION Strauss Spider Shaker Bottle 500ml', 'In-Box Contents: 1 Shaker Bottle 500 ml: Note:The mixing wire is inside the bottle\r\nOur Shaker Bottles are 100% Food grade material the most safe and healthy material for bottles which is BPA Free. Eco Friendly, safe for all\r\n100 % Leak proof, storage container, pill container, water bottle plus shaker for preparation and saving time\r\nWidely use: It is large enough (500ml) to keep your water all day when you are in gym, practice, class, hiking, Yoga or others sports\r\nAs a sports person, you would definitely require protein drinks or water at the least while playing your sport. Use the Shaker to carry water or your protein drink to the field.It is a perfect utility item for mixing shakes and other healthy drinks. Trendy shaker bottle with scientifically designed mesh for lump free smooth shake It has embossed milliliter markings. Leak proof and highly durable. Recommended for mixing protein drinks at gyms or during outdoor sports.', NULL, NULL, 'on', '1610994156-09968134022-d43fb1698a7335cd3253cf3d15738b62.jpg_340x340q80.jpg', NULL, NULL, '2021-01-18 13:22:36', '2021-01-27 12:35:15'),
(122, 12, 'cuttlery', 'Perkin Kitchen Utensil Set with Holder Cooking Utensils', 'perkin-kitchen-utensil-set-with-holder-cooking-utensils', 'Activated', '1650', '1500', '【Scratch Resistant and High Temperature Resistant 】 High-quality food silicone, high temperature resistance, up to 230 °, soft material, wear resistant, not scratching non-stick pan, the inner core is made of Nylon,soft and hard, it is effortless and durable.', '【FDA Qualified 】 This cooking utensil set made of high quality food grade silica gel. It had passed FDA certification, BPA FREE, safe, durable and is an environmentally, friendly and versatile kitchen tool for you.', '3 months', 'Return', 'on', '1611484063-03846951132-51bptkw9zoL._AC_SY450_.jpg', '[\"1611484063-3846951132-31JIPDPUorL._AC_SY450_.jpg\",\"1611484063-3846951132-41gCTJoQKFL._AC_SY450_.jpg\",\"1611484063-3846951132-41wgbWPktdL._AC_SY450_.jpg\",\"1611484063-3846951132-51QwzyR6S+L._AC_SY450_.jpg\",\"1611484063-3846951132-414YalePK7L._AC_SY450_.jpg\"]', '【FDA Qualified 】 This cooking utensil set made of high quality food grade silica gel. It had passed FDA certification, BPA FREE, safe, durable and is an environmentally, friendly and versatile kitchen tool for you.\r\n【Scratch Resistant and High Temperature Resistant 】 High-quality food silicone, high temperature resistance, up to 230 °, soft material, wear resistant, not scratching non-stick pan, the inner core is made of Nylon,soft and hard, it is effortless and durable.\r\n【Comfortable for Hand and Easy Storage】 It is very suitable for the hand, the design conforms to the manual mechanics.There is a hanging hole at the end, which can be hung on the kitchen wall for convenient storage', '2021-01-24 05:27:43', '2021-01-27 12:35:20'),
(131, 27, 'chimta,tong,kitchentool,Home, Hotel/Restaurant,Chimta Awami Prince', 'Chimta Awami Prince', 'chimta-awami-prince', 'Activated', '110', '100', 'Chimta Awami Prince (3 size availbale) (single piece available)', 'Chimta Awami Prince (3 size availbale) (single piece available)', NULL, NULL, 'on', '1611988703-07305991473-IMG20210128105533.jpg', '[\"1611988470-9640071233-IMG20210128104739.jpg\",\"1611988470-9640071233-IMG20210128104943.jpg\",\"1611988470-9640071233-IMG20210128105533.jpg\"]', 'small, meduim, large\r\n(3 size availbale) (single piece available)', '2021-01-30 01:34:30', '2021-03-23 07:22:23'),
(132, 27, 'chimta,ice,tong,	Home, Hotel/Restaurant,Chimta Steel no-220 White Pearl', 'Chimta Steel no-220 White Pearl', 'chimta-steel-no-220-white-pearl', 'Activated', '200', '190', 'Chimta Steel no-220 White Pearl', 'Chimta Steel no-220 White Pearl', NULL, NULL, 'on', '1611991420-09903174252-IMG20210128105649.jpg', '[\"1611991420-9903174252-IMG20210128105643.jpg\",\"1611991420-9903174252-IMG20210128105649.jpg\"]', NULL, '2021-01-30 02:23:40', '2021-03-23 07:23:38'),
(133, 27, 'chimta,tong,white pearl tong chimta #111,	Home, Hotel/Restaurant,kitchentool,Chimta Steel No-111 White Pearl', 'Chimta Steel No-111 White Pearl', 'chimta-steel-no-111-white-pearl', 'Activated', '120', '110', 'Chimta Steel No-111 White Pearl', 'Chimta Steel No-111 White Pearl', NULL, NULL, 'on', '1611992066-09840911326-IMG20210128105930.jpg', '[\"1611992066-9840911326-IMG20210128105920.jpg\",\"1611992066-9840911326-IMG20210128105930.jpg\"]', NULL, '2021-01-30 02:34:26', '2021-03-23 07:23:27'),
(134, 27, 'Master Potato Masher,kitchentool,steel,	Home, Hotel/Restaurant', 'Potato Masher Full Steel Master', 'potato-masher-full-steel-master', 'Activated', '180', '170', 'Steel Potato Masher', 'Master Steel Potato Masher', NULL, NULL, 'on', '1611992635-00986021414-IMG20210128110056.jpg', '[\"1611992635-0986021414-IMG20210128110050.jpg\",\"1611992635-0986021414-IMG20210128110056.jpg\"]', NULL, '2021-01-30 02:43:55', '2021-02-28 06:35:43'),
(135, 27, 'Master Steel Egg Beater,kitchentool,	Home, Hotel/Restaurant', 'Egg Beater Master', 'egg-beater-master', 'Activated', '140', '130', 'Master Steel Egg Beater', 'Master Egg Beater', NULL, NULL, NULL, '1611993623-03164927009-IMG20210128110329.jpg', '[\"1611993623-3164927009-IMG20210128110329.jpg\",\"1611993623-3164927009-IMG20210128110342.jpg\"]', NULL, '2021-01-30 03:00:23', '2021-03-23 07:30:31'),
(136, 27, 'Master Lemon Squeezer,kitchentool', 'Lemon Squeezer Master', 'lemon-squeezer-master', 'Activated', '220', '200', 'Master Lemon Squeezer', 'Master Lemon Squeezer', NULL, NULL, 'on', '1611994953-09199801685-IMG20210128110505.jpg', '[\"1611994953-9199801685-IMG20210128110442.jpg\",\"1611994953-9199801685-IMG20210128110451.jpg\",\"1611994953-9199801685-IMG20210128110505.jpg\"]', NULL, '2021-01-30 03:22:33', '2021-02-28 06:40:49'),
(137, 27, 'Master Potato Peeler,kitchentool,steel,Home, Hotel/Restaurant', 'Potato Peeler Steel Master', 'potato-peeler-steel-master', 'Activated', '120', '110', 'Master Potato Peeler', 'Master Potato Peeler', NULL, NULL, NULL, '1611995682-04140915733-IMG20210128110655.jpg', '[\"1611995682-4140915733-IMG20210128110631.jpg\",\"1611995682-4140915733-IMG20210128110655.jpg\",\"1611995682-4140915733-IMG20210128110739.jpg\",\"1611995682-4140915733-IMG20210128110803.jpg\"]', NULL, '2021-01-30 03:34:42', '2021-03-01 07:10:22'),
(138, 27, 'Master Curry Spoon,kitchentool,Home, Hotel/Restaurant,Curry Spoon Steel Master', 'Curry Spoon Steel Master', 'curry-spoon-steel-master', 'Activated', '150', '140', 'Curry Spoon Steel Master', 'Curry Spoon Steel Master', NULL, NULL, 'on', '1611995990-02392376519-IMG20210128110935.jpg', '[\"1611995990-2392376519-IMG20210128110919.jpg\",\"1611995990-2392376519-IMG20210128110935.jpg\"]', NULL, '2021-01-30 03:39:50', '2021-03-23 07:26:49'),
(139, 27, 'Master Pizza cutter,kitchentool,Home, Hotel/Restaurant', 'Pizza Cutter Steel Master', 'pizza-cutter-steel-master', 'Activated', '150', '145', 'Master Pizza cutter', 'Pizza Cutter Steel Master', NULL, NULL, NULL, '1611996129-05372087345-IMG20210128111105.jpg', '[\"1611996129-5372087345-IMG20210128111105.jpg\",\"1611996129-5372087345-IMG20210128111108.jpg\"]', NULL, '2021-01-30 03:42:09', '2021-03-01 05:55:53'),
(140, 27, 'Master Bottle Opener,kitchentool,Home, Hotel/Restaurant', 'Bottle Opener Steel Master', 'bottle-opener-steel-master', 'Activated', '130', '120', 'Master Bottle Opener', 'Bottle Opener Steel Master', NULL, NULL, 'on', '1611996304-06125341692-IMG20210128111546.jpg', '[\"1611996304-6125341692-IMG20210128111546.jpg\",\"1611996304-6125341692-IMG20210128111559.jpg\",\"1611996304-6125341692-IMG20210128111621.jpg\"]', NULL, '2021-01-30 03:45:04', '2021-03-23 07:18:17'),
(141, 27, 'cake,cake lifter', 'Cake Lifter Steel Master', 'cake-lifter-steel-master', 'Activated', '160', '140', 'Cake Lifter Steel Master', 'Cake Lifter Steel Master', NULL, NULL, 'on', '1612077572-02977104693-IMG20210128111320.jpg', '[\"1612077572-2977104693-IMG20210128111320.jpg\",\"1612077572-2977104693-IMG20210128111326.jpg\"]', NULL, '2021-01-31 02:19:32', '2021-03-23 07:18:31'),
(142, 27, 'Master Vegetable Cutter Kadukash,kitchentool', 'Kado Kash Steel Master', 'kado-kash-steel-master', 'Activated', '140', '120', 'Vegetable Cutter Kaduskash', 'Master Vegetable Cutter Kadukash', NULL, NULL, NULL, '1612077975-08221305943-IMG20210128111424.jpg', '[\"1612077976-8221305943-IMG20210128111424.jpg\",\"1612077976-8221305943-IMG20210128111433.jpg\"]', NULL, '2021-01-31 02:26:16', '2021-03-01 06:19:32'),
(143, 27, 'Ice Tong Chimta,kitchentool', 'Ice Tong White Pearl', 'ice-tong-white-pearl', 'Activated', '90', '80', 'Ice Tong Chimta', 'Ice Tong Chimta', NULL, NULL, NULL, '1612078207-01877035956-IMG20210128111751.jpg', '[\"1612078207-1877035956-IMG20210128111728.jpg\",\"1612078207-1877035956-IMG20210128111751.jpg\"]', NULL, '2021-01-31 02:30:07', '2021-03-01 06:50:43'),
(144, 27, 'chimta,kitchentool,White Pearl Tong Chimta #118', 'Chimta Steel No 118 China White Pearl', 'chimta-steel-no-118-china-white-pearl', 'Activated', '200', '190', 'White Pearl Tong Chimta #118', 'White Pearl Tong Chimta #118', NULL, NULL, NULL, '1612078402-02734815930-IMG20210128111856.jpg', '[\"1612078402-2734815930-IMG20210128111856.jpg\",\"1612078402-2734815930-IMG20210128111912.jpg\"]', NULL, '2021-01-31 02:33:22', '2021-03-23 07:23:10'),
(145, 27, 'white pearl tong chimta,kitchentool', 'Chimta Steel No 03 White Pearl', 'chimta-steel-no-03-white-pearl', 'Activated', '110', '100', 'white pearl tong chimta', 'white pearl tong chimta', NULL, NULL, NULL, '1612078699-02486733054-IMG20210128112042.jpg', '[\"1612078699-2486733054-IMG20210128112042.jpg\",\"1612078699-2486733054-IMG20210128112054.jpg\"]', NULL, '2021-01-31 02:38:19', '2021-03-23 07:22:42'),
(146, 27, NULL, 'Channi Steel Master (3 size available)', 'channi-steel-master-3-size-available', 'Activated', '130', '120', 'Master Tea Channi', 'Master Tea Channi (3 size available) (single pcs available)', NULL, NULL, 'on', '1612078872-02733592590-IMG20210128112303.jpg', '[\"1612078872-2733592590-IMG20210128112303.jpg\",\"1612078872-2733592590-IMG20210128112309.jpg\",\"1612078872-2733592590-IMG20210128112321.jpg\"]', 'Small\r\nMedium\r\nLarge', '2021-01-31 02:41:12', '2021-03-23 07:21:02'),
(147, 27, 'spoon kitchen set,kitchentool,Lifetime Spoon Kitchen Set', 'Kitchen Set Life Time 4pcs Large', 'kitchen-set-life-time-4pcs-large', 'Activated', '1060', '1030', 'Lifetime Spoon Kitchen Set', 'Lifetime Spoon Kitchen Set', NULL, NULL, NULL, '1612079237-04273831142-IMG20210126132840.jpg', '[\"1612160672-2569619379-IMG20210126132213.jpg\",\"1612160672-2569619379-IMG20210126132519.jpg\",\"1612160672-2569619379-IMG20210126132840.jpg\",\"1612160672-2569619379-IMG202101261324377.jpg\",\"1612160672-2569619379-WhatsApp Image 2021-01-27 at 11.46.34 PM.jpeg\"]', NULL, '2021-01-31 02:47:17', '2021-03-01 06:53:21'),
(148, 27, 'spoon kitchen set,kitchentool,Nafees Spoon Kitchen Set', 'Kitchen Set Nafees 4pcs large', 'kitchen-set-nafees-4pcs-large', 'Activated', '720', '710', 'Nafees Spoon Kitchen Set', 'Nafees Spoon Kitchen Set', NULL, NULL, NULL, '1612079417-02010885792-IMG20210126134143.jpg', '[\"1612079417-2010885792-IMG20210126133549.jpg\",\"1612079417-2010885792-IMG20210126133654.jpg\",\"1612079417-2010885792-IMG20210126133817.jpg\",\"1612079417-2010885792-IMG20210126134001.jpg\",\"1612079417-2010885792-IMG20210126134143.jpg\"]', NULL, '2021-01-31 02:50:17', '2021-03-01 07:03:55'),
(149, 27, 'kitchentool,Mehran Spoon Kitchen Set', 'Kitchen Set Wooden Handle 4pcs Mehran', 'kitchen-set-wooden-handle-4pcs-mehran', 'Activated', '590', '580', 'Mehran Spoon Kitchen Set', 'Mehran Spoon Kitchen Set', NULL, NULL, NULL, '1612079628-04520899973-IMG20210126135601.jpg', '[\"1612079628-4520899973-IMG20210126134702.jpg\",\"1612079628-4520899973-IMG20210126134752.jpg\",\"1612079628-4520899973-IMG20210126135154.jpg\",\"1612079628-4520899973-IMG20210126135402.jpg\",\"1612079628-4520899973-IMG20210126135601.jpg\"]', NULL, '2021-01-31 02:53:48', '2021-03-01 07:38:51'),
(150, 27, 'spoon kitchen set,kitchentool', 'Kitchen Set 7pcs Master', 'kitchen-set-7pcs-master', 'Activated', '1680', '1670', 'Master Spoon Kitchen Set', 'Master Spoon Kitchen Set', NULL, NULL, 'on', '1612079752-00131956385-IMG20210126140823.jpg', '[\"1612079752-0131956385-IMG20210126140240.jpg\",\"1612079752-0131956385-IMG20210126140329.jpg\",\"1612079752-0131956385-IMG20210126140414.jpg\",\"1612079752-0131956385-IMG20210126140432.jpg\",\"1612079752-0131956385-IMG20210126140503.jpg\",\"1612079752-0131956385-IMG20210126140823.jpg\",\"1612079752-0131956385-IMG20210126140837.jpg\",\"1612079752-0131956385-IMG20210126140954.jpg\"]', NULL, '2021-01-31 02:55:52', '2021-03-01 07:42:23'),
(151, 27, 'Ajwa Spoon,kitchentool', 'Spoon Ajwa No-01 12pcs', 'spoon-ajwa-no-01-12pcs', 'Activated', '460', '450', 'Ajwa Spoon (three size are available)', 'Ajwa Spoon (3 size are available) 12pcs', NULL, '(3 size are available) teaspoon, babyspoon, tablespoon', 'on', '1612081044-02784638023-IMG20210128121659.jpg', '[\"1612081044-2784638023-IMG20210128120619.jpg\",\"1612081044-2784638023-IMG20210128121410.jpg\",\"1612081044-2784638023-IMG20210128121659.jpg\"]', '(3 size are available) \r\nteaspoon, \r\nbabyspoon, \r\ntablespoon.', '2021-01-31 03:17:24', '2021-03-01 08:20:07'),
(152, 27, 'Ajwa Marriage Spoon,kitchentool', 'Table Fork Ajwa Plain', 'table-fork-ajwa-plain', 'Activated', '490', '480', 'Ajwa Marriage Spoon', 'Table Fork Ajwa Plain (12pcs set)', NULL, NULL, NULL, '1612082873-02309168017-IMG20210128124359.jpg', '[\"1612082873-2309168017-IMG20210128123920.jpg\",\"1612082873-2309168017-IMG20210128124359.jpg\",\"1612082873-2309168017-IMG20210128124432.jpg\"]', NULL, '2021-01-31 03:47:53', '2021-03-02 06:46:11'),
(153, 27, 'kitchentool,(three size are available), Spoon 14g Plain Ajwa', 'Spoon 14g Plain Ajwa', 'spoon-14g-plain-ajwa', 'Activated', '460', '450', 'Ajwa Marriage Spoon (three size are available)', 'Spoon 14g Plain Ajwa (three size are available)', NULL, NULL, NULL, '1612083202-09849901662-IMG20210128122959.jpg', '[\"1612159754-2002538461-IMG20210128122734.jpg\",\"1612159754-2002538461-IMG20210128122959.jpg\",\"1612159754-2002538461-IMG20210128123149.jpg\",\"1612159755-2002538461-IMG20210128125141.jpg\"]', '(12 piece set)\r\n(three size are available)\r\nteaspoon, babyspoon, tablespoon', '2021-01-31 03:53:22', '2021-03-11 06:33:33'),
(154, 27, 'Spoon,Ajwa Rice Spoon #01,Rice Spoon #01 Ajwa', 'Rice Spoon #01 Ajwa (single pcs)', 'rice-spoon-01-ajwa-single-pcs', 'Activated', '110', '100', 'Rice Spoon #01 Ajwa (single pcs)=100 (12 pcs)=980', 'Rice Spoon #01 Ajwa', NULL, NULL, NULL, '1612419762-01379620502-IMG20210128124805.jpg', '[\"1612419763-1379620502-IMG20210128124710.jpg\",\"1612419763-1379620502-IMG20210128124805.jpg\",\"1612419763-1379620502-IMG20210128124942.jpg\"]', '(single pcs)=100 \r\n(12 pcs)=980', '2021-02-04 01:22:43', '2021-03-14 06:52:10'),
(155, 27, 'Spoon,Serving Spoon #01 Ajwa (single pcs)', 'Serving Spoon #01 Ajwa (single pcs)', 'serving-spoon-01-ajwa-single-pcs', 'Activated', '110', '100', 'Serving Spoon #01 Ajwa\r\n (single pcs)=100 \r\n(12 pcs)=980', 'Serving Spoon #01 Ajwa (single pcs)', NULL, NULL, NULL, '1612419838-07965210934-IMG20210128125303.jpg', '[\"1613549916-7093032975-IMG20210128125205.jpg\",\"1613549916-7093032975-IMG20210128125303.jpg\",\"1613549916-7093032975-IMG20210128125352.jpg\"]', '(single pcs)=100 \r\n(12 pcs)=980', '2021-02-04 01:23:58', '2021-03-14 06:50:10'),
(156, 27, 'Spoon,Ajwa Serving Spoon Plane,Serving Spoon Plain Ajwa', 'Serving Spoon Plain Ajwa', 'serving-spoon-plain-ajwa', 'Activated', '110', '100', 'Serving Spoon Plain Ajwa (single pcs)=100 (12 pcs)=980', 'Serving Spoon Plain Ajwa', NULL, NULL, NULL, '1612419914-09122924877-IMG20210128125600.jpg', '[\"1612419914-9122924877-IMG20210128125454.jpg\",\"1612419914-9122924877-IMG20210128125600.jpg\",\"1612419914-9122924877-IMG20210128125734.jpg\"]', '(single pcs)=100 \r\n(12 pcs)=980', '2021-02-04 01:25:14', '2021-03-14 06:44:41'),
(157, 27, 'Spoon', 'Rice Spoon Plain Ajwa', 'rice-spoon-plain-ajwa', 'Activated', '110', '100', 'Rice Spoon Plain Ajwa (single pcs)=100 (12 pcs)=980', 'Rice Spoon Plain Ajwa', NULL, NULL, NULL, '1612419966-00219481228-IMG20210128125931.jpg', '[\"1612419966-0219481228-IMG20210128125841.jpg\",\"1612419966-0219481228-IMG20210128125931.jpg\",\"1612419966-0219481228-IMG20210128130050.jpg\"]', '(single pcs)=100 \r\n(12 pcs)=980', '2021-02-04 01:26:06', '2021-03-14 06:42:19'),
(158, 27, 'knife', 'Knife Ajwa Plain (single pcs)', 'knife-ajwa-plain-single-pcs', 'Activated', '130', '120', 'Ajwa Knife Plain (single pcs)=120\r\n(12 pcs)=1220', 'Knife Ajwa Plain', NULL, NULL, NULL, '1612420072-08783492949-IMG20210128130317.jpg', '[\"1612420072-8783492949-IMG20210128130216.jpg\",\"1612420072-8783492949-IMG20210128130317.jpg\",\"1612420072-8783492949-IMG20210128130456.jpg\"]', '(single pcs)=120\r\n(12 pcs)=1220', '2021-02-04 01:27:52', '2021-03-14 07:41:32'),
(159, 27, 'spoon,Ajwa Spoon #03', 'Spoon #03 Ajwa', 'spoon-03-ajwa', 'Activated', '460', '450', 'Spoon #03 Ajwa', 'Spoon #03 Ajwa  (12 piece set)(Three size are available)', NULL, NULL, NULL, '1612420171-09605322014-IMG20210128130648.jpg', '[\"1612420171-9605322014-IMG20210128130556.jpg\",\"1612420171-9605322014-IMG20210128130648.jpg\"]', '(12 piece set)(Three size are available)', '2021-02-04 01:29:31', '2021-03-14 07:10:13'),
(160, 27, 'Fork', 'Fork #03 Ajwa (12 pcs set)', 'fork-03-ajwa-12-pcs-set', 'Activated', '500', '490', 'Fork #03 Ajwa (12 pcs set)', 'Fork #03 Ajwa (12 pcs set)', NULL, NULL, NULL, '1612420281-06539412329-IMG20210128130947.jpg', '[\"1612420281-6539412329-IMG20210128130916.jpg\",\"1612420281-6539412329-IMG20210128130947.jpg\"]', '(12 pcs set)', '2021-02-04 01:31:24', '2021-03-23 07:33:57'),
(161, 27, 'Spoon,Ajwa Serving Spoon #03', 'Serving Spoon #03 Ajwa', 'serving-spoon-03-ajwa', 'Activated', '110', '100', 'Serving Spoon #03 Ajwa (single pcs)=100 (12 pcs)=980', 'Serving Spoon #03 Ajwa', NULL, NULL, NULL, '1612420569-02199363012-IMG20210128131243.jpg', '[\"1612420569-2199363012-IMG20210128131210.jpg\",\"1612420569-2199363012-IMG20210128131243.jpg\"]', '(single pcs)=100 \r\n(12 pcs)=980', '2021-02-04 01:36:09', '2021-03-14 06:39:47'),
(162, 27, 'Spoon,Rice Spoon #03 Ajwa (single pcs)', 'Rice Spoon #03 Ajwa (single pcs)', 'rice-spoon-03-ajwa-single-pcs', 'Activated', '110', '100', 'Ajwa Rice Spoon #03 \r\n(single pcs)=100\r\n(12 pcs)=980', 'Rice Spoon #03 Ajwa', NULL, NULL, NULL, '1612420795-06254813327-IMG20210128131407.jpg', '[\"1612420795-6254813327-IMG20210128131336.jpg\",\"1612420795-6254813327-IMG20210128131407.jpg\",\"1612420795-6254813327-IMG20210128131414.jpg\"]', '(single pcs)=100\r\n(12 pcs)=980', '2021-02-04 01:39:55', '2021-03-14 06:37:21'),
(163, 27, 'Spoon,SM Brothers Spoon Star', 'Spoon Star SM Brothers', 'spoon-star-sm-brothers', 'Activated', '280', '270', 'SM Brothers Spoon Star', 'Spoon Star SM Brothers  (12 piece set) (Three size are available)', NULL, NULL, NULL, '1612420889-01006743759-IMG20210128131814.jpg', '[\"1612420889-1006743759-IMG20210128131655.jpg\",\"1612420889-1006743759-IMG20210128131814.jpg\"]', '(12 piece set) (Three size are available)', '2021-02-04 01:41:29', '2021-03-13 07:38:12'),
(164, 27, 'Fork', 'Fork Star SM Brothers', 'fork-star-sm-brothers', 'Activated', '300', '290', 'SM Brothers Fork Star', 'Fork Star SM Brothers (12 piece set)', NULL, NULL, NULL, '1612420944-00926230430-IMG20210128131916.jpg', '[\"1612420944-0926230430-IMG20210128131837.jpg\",\"1612420944-0926230430-IMG20210128131916.jpg\"]', '(12 piece set)', '2021-02-04 01:42:24', '2021-03-13 07:41:44'),
(165, 27, 'spoon,SM Brothers Rice Spoon Star', 'Rice Spoon Star SM Brothers (single pcs)', 'rice-spoon-star-sm-brothers-single-pcs', 'Activated', '85', '75', 'Rice Spoon Star SM Brothers (single pcs)', 'Rice Spoon Star SM Brothers (single pcs)', NULL, NULL, NULL, '1612421037-01604985422-IMG20210128132202.jpg', '[\"1612421037-1604985422-IMG20210128132011.jpg\",\"1612421037-1604985422-IMG20210128132202.jpg\",\"1612421037-1604985422-IMG20210128132212.jpg\"]', NULL, '2021-02-04 01:43:57', '2021-03-13 07:57:28'),
(166, 27, 'spoon,SM Brothers Serving Spoon Star,Serving Spoon Star SM Brothers', 'Serving Spoon Star SM Brothers (single pcs)', 'serving-spoon-star-sm-brothers-single-pcs', 'Activated', '80', '70', 'Serving Spoon Star SM Brothers', 'Serving Spoon Star SM Brothers', NULL, NULL, NULL, '1612421257-09851227389-IMG20210128132433.jpg', '[\"1612421257-9851227389-IMG20210128132511.jpg\"]', '(12pcs available) single pcs available', '2021-02-04 01:47:37', '2021-03-13 07:15:35'),
(167, 27, 'spoon,SM Brothers Spoon Prime(12 piece set)', 'Spoon Prime SM Brothers', 'spoon-prime-sm-brothers', 'Activated', '280', '270', 'SM Brothers Spoon Prime(12 piece set)\r\n3 size available', 'SM Brothers Spoon Prime(12 piece set) (Three size are available)', NULL, NULL, NULL, '1612421341-04715283080-IMG20210128132646.jpg', '[\"1612421341-4715283080-IMG20210128132606.jpg\",\"1612421341-4715283080-IMG20210128132646.jpg\"]', '(12 piece set)\r\n3 size available', '2021-02-04 01:49:01', '2021-03-13 06:57:39'),
(168, 27, 'Fork,Fork Prime SM Brothers', 'Fork Prime SM Brothers', 'fork-prime-sm-brothers', 'Activated', '300', '290', 'SM Brothers Fork Prime', 'Fork Prime SM Brothers  (12 piece set)', NULL, NULL, NULL, '1612421459-02177815996-IMG20210128132750.jpg', '[\"1612421459-2177815996-IMG20210128132710.jpg\",\"1612421459-2177815996-IMG20210128132750.jpg\"]', '(12pcs set)', '2021-02-04 01:50:59', '2021-03-13 07:03:11'),
(169, 27, 'Spoon,SM Brothers Serving Spoon Prime', 'Serving Spoon Prime SM Brothers 12pcs available', 'serving-spoon-prime-sm-brothers-12pcs-available', 'Activated', '80', '80', 'Serving Spoon Prime SM Brothers \r\n(12pcs set) \r\nsingle pcs available', 'SM Brothers Serving Spoon Prime', NULL, NULL, NULL, '1612422328-06832519974-IMG20210201115804.jpg', '[\"1612422328-6832519974-IMG20210201115656.jpg\",\"1612422328-6832519974-IMG20210201115804.jpg\"]', '(12pcs available) \r\nsingle pcs available', '2021-02-04 02:05:28', '2021-03-13 07:18:15'),
(170, 27, 'Spoon,SM Brothers Spoon Diamond', 'Spoon Diamond SM Brothers', 'spoon-diamond-sm-brothers', 'Activated', '280', '270', 'Spoon Diamond SM Brothers', 'Spoon Diamond SM Brothers(12 piece set) 3 size available', NULL, NULL, NULL, '1612422800-01491208385-IMG20210201120928.jpg', '[\"1612422800-1491208385-IMG20210201120741.jpg\",\"1612422800-1491208385-IMG20210201120928.jpg\"]', '(12 piece set) 3 size available', '2021-02-04 02:13:20', '2021-03-13 07:29:21'),
(171, 27, 'Fork,Fork Diamond SM Brothers', 'Fork Diamond SM Brothers', 'fork-diamond-sm-brothers', 'Activated', '300', '290', 'SM Brothers Fork Diamond', 'SM Brothers Fork Diamond (12 piece set)', NULL, NULL, NULL, '1612422870-05450479186-IMG20210201121958.jpg', '[\"1612422870-5450479186-IMG20210201121958.jpg\",\"1612422870-5450479186-IMG20210201121932.jpg\"]', '(12pcs set)', '2021-02-04 02:14:30', '2021-03-23 07:34:21'),
(172, 27, 'Spoon,SM Brothers  Rice Spoon Prime', 'Rice Spoon Prime SM Brothers(single pcs)', 'rice-spoon-prime-sm-brotherssingle-pcs', 'Activated', '85', '75', 'Rice Spoon Prime SM Brothers(single pcs)', 'Rice Spoon Prime SM Brothers(single pcs)', NULL, NULL, NULL, '1612422985-04923175035-IMG20210201120636.jpg', '[\"1612422985-4923175035-IMG20210201120024.jpg\",\"1612422985-4923175035-IMG20210201120409.jpg\",\"1612422985-4923175035-IMG20210201120636.jpg\"]', '(single pcs)', '2021-02-04 02:16:25', '2021-03-13 07:55:00'),
(173, 27, 'Spoon,SM Brothers Spoon Diamond,SM Brothers Rice Spoon Diamond', 'Rice Spoon Diamond SM Brothers(single pcs )', 'rice-spoon-diamond-sm-brotherssingle-pcs', 'Activated', '85', '75', 'Rice Spoon Diamond SM Brothers(single pcs )', 'Rice Spoon Diamond SM Brothers(single pcs )', NULL, NULL, NULL, '1612423083-09583209478-IMG20210201121419.jpg', '[\"1612423083-9583209478-IMG20210201121233.jpg\",\"1612423083-9583209478-IMG20210201121419.jpg\"]', NULL, '2021-02-04 02:18:03', '2021-03-13 07:53:15'),
(174, 17, 'knife', 'Knife Arshiya (single pcs)', 'knife-arshiya-single-pcs', 'Activated', '130', '120', 'knife', 'knife', NULL, NULL, NULL, '1612423209-05250163289-IMG20210201122214.jpg', '[\"1612423209-5250163289-IMG20210201122109.jpg\",\"1612423209-5250163289-IMG20210201122214.jpg\"]', '(3 size available)', '2021-02-04 02:20:09', '2021-03-23 07:36:47'),
(175, 27, 'Gun Lighter', 'Gun Lighter spark', 'gun-lighter-spark', 'Activated', '270', '260', 'Gun Lighter', 'Gun Lighter', NULL, NULL, NULL, '1612423331-00927612885-IMG20210201123009.jpg', '[\"1612423331-0927612885-IMG20210201123009.jpg\",\"1612423331-0927612885-IMG20210201123006.jpg\"]', NULL, '2021-02-04 02:22:11', '2021-03-02 07:08:30'),
(176, 16, 'Pizza Cutter', 'Pizza Cutter Super Star', 'pizza-cutter-super-star', 'Activated', '130', '120', 'Pizza Cutter Super Star', 'Pizza Cutter', NULL, NULL, NULL, '1612423452-07090590382-IMG20210201123226.jpg', '[\"1612423452-7090590382-IMG20210201123226.jpg\",\"1612423452-7090590382-IMG20210201123225.jpg\"]', NULL, '2021-02-04 02:24:12', '2021-03-14 07:43:56'),
(177, 27, 'Channi,Chalni Steel Red Ring No:5', 'Chalni Steel Red Ring No:5', 'chalni-steel-red-ring-no5', 'Activated', '230', '220', 'Chalni Steel Red Ring No:5', 'Chalni Steel Red Ring No:5', NULL, NULL, NULL, '1612423710-02438926943-IMG20210201123603.jpg', '[\"1615624637-3024604188-IMG20210201123603.jpg\",\"1615624637-3024604188-IMG20210201123613.jpg\"]', NULL, '2021-02-04 02:28:30', '2021-03-23 07:20:27'),
(178, 17, 'Master Knife', 'Knife Plastic Handle Master ( 4 size available)', 'knife-plastic-handle-master-4-size-available', 'Activated', '105', '95', 'Knife Plastic Handle Master ( 4 size available)', 'Knife Plastic Handle Master ( 4 size available)', NULL, NULL, NULL, '1612423840-04192233977-IMG20210201124221.jpg', '[\"1612423840-4192233977-IMG20210201124221.jpg\",\"1612423840-4192233977-IMG20210201124216.jpg\"]', '( 4 size available)', '2021-02-04 02:30:40', '2021-03-23 07:35:31'),
(179, 27, 'Josh Channi,Chalni Steel Josh (3 size available)', 'Chalni Steel Josh (3 size available)', 'chalni-steel-josh-3-size-available', 'Activated', '190', '180', 'Chalni Steel Josh (3 size available)', 'Chalni Steel Josh (3 size available)', NULL, NULL, NULL, '1612424027-04970724023-IMG20210128112903.jpg', '[\"1612424027-4970724023-IMG20210128112503.jpg\",\"1612424027-4970724023-IMG20210128112648.jpg\",\"1612424027-4970724023-IMG20210128112903.jpg\",\"1612424027-4970724023-IMG20210128112932.jpg\"]', '3 size available\r\nsingle pcs', '2021-02-04 02:33:47', '2021-03-23 07:20:04'),
(180, 27, 'Classic Tea Strainer Channi,Chalni Steel Presto (4 size available)', 'Chalni Steel Presto (4 size available)', 'chalni-steel-presto-4-size-available', 'Activated', '220', '210', 'Chalni Steel Presto (4 size available)', 'Chalni Steel Presto (4 size available)', NULL, NULL, NULL, '1612424227-00089391304-IMG20210128113502.jpg', '[\"1612424227-0089391304-IMG20210128113119.jpg\",\"1612424227-0089391304-IMG20210128113241.jpg\",\"1612424227-0089391304-IMG20210128113452.jpg\",\"1612424227-0089391304-IMG20210128113502.jpg\"]', '(4 size available)\r\nSingle pcs', '2021-02-04 02:37:07', '2021-03-23 07:20:14'),
(181, 27, 'Tea Strainer Channi,Chalni China (3 size available)', 'Chalni China (3 size available)', 'chalni-china-3-size-available', 'Activated', '75', '65', 'Chalni China (3 size available)', 'Chalni China (3 size available)', NULL, NULL, NULL, '1612424322-04586472501-IMG20210128113835.jpg', '[\"1612424322-4586472501-IMG20210128113724.jpg\",\"1612424322-4586472501-IMG20210128113827.jpg\",\"1612424322-4586472501-IMG20210128113835.jpg\"]', '(3 size available)\r\nSingle pcs', '2021-02-04 02:38:42', '2021-03-23 07:19:30'),
(182, 27, 'Prince Tea Strainer Channi,Chalni Prince (3 size Available) (single pcs available)', 'Chalni Prince (3 size Available) (single pcs available)', 'chalni-prince-3-size-available-single-pcs-available', 'Activated', '75', '65', 'Chalni Prince (3 size Available) (single pcs available)', 'Chalni Prince (3 size Available) (single pcs available)', NULL, NULL, NULL, '1612424475-04633974228-IMG20210201134846.jpg', '[\"1612424475-4633974228-IMG20210201133250.jpg\",\"1612424475-4633974228-IMG20210201133547.jpg\",\"1612424475-4633974228-IMG20210201134846.jpg\"]', '3 Size Available \r\nSingle pcs', '2021-02-04 02:41:15', '2021-03-23 07:19:53'),
(183, 27, 'Tea Strainer Channi,(3 size available) (single piece available)', 'Chalni China Steel (3 size available)', 'chalni-china-steel-3-size-available', 'Activated', '75', '65', 'Tea Strainer Channi (3 size available) (single piece available)', 'Tea Strainer Channi (3 size available) (single piece available)', NULL, NULL, NULL, '1612424619-07942587912-IMG20210201135654.jpg', '[\"1612424619-7942587912-IMG20210201134446.jpg\",\"1612424619-7942587912-IMG20210201134508.jpg\",\"1612424619-7942587912-IMG20210201135654.jpg\"]', NULL, '2021-02-04 02:43:39', '2021-03-23 07:19:43'),
(184, 17, 'Master Knife', 'Knife DW Master (single pcs)', 'knife-dw-master-single-pcs', 'Activated', '170', '160', 'Knife DW Master', 'Knife DW Master', NULL, NULL, NULL, '1612425713-02984303738-IMG20210201124741.jpg', '[\"1612425713-2984303738-IMG20210201124730.jpg\",\"1612425713-2984303738-IMG20210201124741.jpg\"]', '(3 size available)', '2021-02-04 03:01:53', '2021-03-23 07:36:46'),
(185, 17, 'Master Knife,Knife Qurbani 6inch Master', 'Knife Qurbani 6inch Master', 'knife-qurbani-6inch-master', 'Activated', '290', '280', 'Knife Qurbani 6inch Master', 'Knife Qurbani 6inch Master', NULL, NULL, NULL, '1612425831-09035297218-IMG20210201125007.jpg', '[\"1612425831-9035297218-IMG20210201124946.jpg\",\"1612425831-9035297218-IMG20210201125007.jpg\"]', NULL, '2021-02-04 03:03:51', '2021-03-23 07:35:30'),
(186, 30, 'Yellow LPG Cylinder Small,gas', 'Yellow LPG Cylinder Small (capacity 5kg)', 'yellow-lpg-cylinder-small-capacity-5kg', 'Activated', '4320', '4300', 'The high quality of fiber glass and HDPE are sumptuously used in plant for LPG gas tanks. Cylinders are manufactured according to national & international.\r\n\r\nBGC Cylinders are user friendly due to its design and 50% lighter than conventional cylinder.\r\nBGC Cylinders quality assures 100% safety from explosion. Highly safe composite material does not blast unlike metal cylinders.\r\nHandling of BGC composite Cylinder is much easier due to its light weight. Empty cylinder tare weight is 5kg.\r\nBGC Composite Cylinder is corrosion free because it doesn’t leave stain on kitchen floor or anywhere else, and never corrode even in humid or coastal areas.\r\nBGC Cylinder is UV resistant to effects from sun, rain and temperature variations and handling.\r\nBGC Cylinder can be customized as per customer preferences and requirements. You can choose the color, brand etc.', 'The high quality of fiber glass and HDPE are sumptuously used in plant for LPG gas tanks. Cylinders are manufactured according to national & international.\r\n\r\nBGC Cylinders are user friendly due to its design and 50% lighter than conventional cylinder.\r\nBGC Cylinders quality assures 100% safety from explosion. Highly safe composite material does not blast unlike metal cylinders.\r\nHandling of BGC composite Cylinder is much easier due to its light weight. Empty cylinder tare weight is 5kg.\r\nBGC Composite Cylinder is corrosion free because it doesn’t leave stain on kitchen floor or anywhere else, and never corrode even in humid or coastal areas.\r\nBGC Cylinder is UV resistant to effects from sun, rain and temperature variations and handling.\r\nBGC Cylinder can be customized as per customer preferences and requirements. You can choose the color, brand etc.', NULL, NULL, 'on', '1613802801-05943776340-yellow-cylinder-small-2.jpg', '[\"1613802801-5943776340-yellow-cylinder-small-2.jpg\"]', NULL, '2021-02-20 06:33:21', '2021-04-04 06:59:03'),
(187, 30, 'Yellow LPG Cylinder,gas', 'Yellow LPG Cylinder', 'yellow-lpg-cylinder', 'Activated', '5820', '5800', 'The high quality of fiber glass and HDPE are sumptuously used in plant for LPG gas tanks. Cylinders are manufactured according to national & international.\r\n\r\nBGC Cylinders are user friendly due to its design and 50% lighter than conventional cylinder.\r\nBGC Cylinders quality assures 100% safety from explosion. Highly safe composite material does not blast unlike metal cylinders.\r\nHandling of BGC composite Cylinder is much easier due to its light weight. Empty cylinder tare weight is 5kg.\r\nBGC Composite Cylinder is corrosion free because it doesn’t leave stain on kitchen floor or anywhere else, and never corrode even in humid or coastal areas.\r\nBGC Cylinder is UV resistant to effects from sun, rain and temperature variations and handling.\r\nBGC Cylinder can be customized as per customer preferences and requirements. You can choose the color, brand etc.', 'The high quality of fiber glass and HDPE are sumptuously used in plant for LPG gas tanks. Cylinders are manufactured according to national & international.\r\n\r\nBGC Cylinders are user friendly due to its design and 50% lighter than conventional cylinder.\r\nBGC Cylinders quality assures 100% safety from explosion. Highly safe composite material does not blast unlike metal cylinders.\r\nHandling of BGC composite Cylinder is much easier due to its light weight. Empty cylinder tare weight is 5kg.\r\nBGC Composite Cylinder is corrosion free because it doesn’t leave stain on kitchen floor or anywhere else, and never corrode even in humid or coastal areas.\r\nBGC Cylinder is UV resistant to effects from sun, rain and temperature variations and handling.\r\nBGC Cylinder can be customized as per customer preferences and requirements. You can choose the color, brand etc.', NULL, NULL, 'on', '1613805347-08659331231-yellow-cylinder-price.jpg', '[\"1613805347-8659331231-yellow-cylinder-price.jpg\"]', NULL, '2021-02-20 07:15:47', '2021-02-25 08:34:53'),
(188, 41, 'Egg Beater Commercial (12inch)', 'Egg Beater Steel Havey (12inch) China', 'egg-beater-steel-havey-12inch-china', 'Activated', '330', '320', 'Egg Beater Steel Havey (12inch) China', 'Egg Beater Steel Havey (12inch) China', NULL, NULL, 'on', '1613891784-02154970437-IMG20210208122718.jpg', '[\"1613891784-2154970437-IMG20210208122718.jpg\"]', NULL, '2021-02-21 07:16:24', '2021-03-23 07:31:41');
INSERT INTO `products` (`id`, `category_id`, `tags`, `title`, `slug`, `status`, `retailPrice`, `wholesalePrice`, `meta_description`, `description`, `warranty`, `policy`, `new`, `thumbnail`, `gallery`, `additional_info`, `created_at`, `updated_at`) VALUES
(189, 41, 'Egg Beater Commercial (14inch),Egg Beater Steel (14inch)', 'Egg Beater Steel Havey (14inch) China', 'egg-beater-steel-havey-14inch-china', 'Activated', '350', '340', 'Egg Beater Steel (14inch)', 'Egg Beater Steel (14inch)', NULL, NULL, 'on', '1613892288-06733899259-IMG20210208122645.jpg', '[\"1613892288-6733899259-IMG20210208122645.jpg\"]', NULL, '2021-02-21 07:24:48', '2021-03-23 07:32:08'),
(190, 41, 'Egg Beater Commercial (16 inch)', 'Egg Beater Steel Havey (16 inch) China', 'egg-beater-steel-havey-16-inch-china', 'Activated', '370', '360', 'Egg Beater Steel (16 inch)', 'Egg Beater Steel (16 inch)', NULL, NULL, NULL, '1613892432-02161489712-IMG20210208122535.jpg', '[\"1613892432-2161489712-IMG20210208122535.jpg\"]', NULL, '2021-02-21 07:27:12', '2021-03-23 07:32:22'),
(191, 41, 'Egg Beater Commercial (22 inch)', 'Egg Beater Steel Havey (22 inch) China', 'egg-beater-steel-havey-22-inch-china', 'Activated', '480', '470', 'Egg Beater Steel  (22 inch)', 'Egg Beater Steel  (22 inch)', NULL, NULL, NULL, '1613892532-08913322975-IMG20210208122505.jpg', '[\"1613892532-8913322975-IMG20210208122505.jpg\"]', NULL, '2021-02-21 07:28:52', '2021-03-23 07:32:39'),
(192, 41, 'Egg Beater Commercial (18 inch)', 'Egg Beater Steel Havey (18inch) China', 'egg-beater-steel-havey-18inch-china', 'Activated', '390', '380', 'Egg Beater Steel (18 inch)', 'Egg Beater Steel (18 inch)', NULL, NULL, NULL, '1613893293-06134590430-IMG20210208122048.jpg', '[\"1613893293-6134590430-IMG20210208122048.jpg\"]', NULL, '2021-02-21 07:41:33', '2021-03-23 07:32:37'),
(193, 41, 'Egg Beater Commercial (24 inch)', 'Egg Beater Steel Havey (24 inch) China', 'egg-beater-steel-havey-24-inch-china', 'Activated', '510', '500', 'Egg Beater Steel (24 inch)', 'Egg Beater Steel (24 inch)', NULL, NULL, NULL, '1613893460-04962577138-IMG20210208122401.jpg', '[\"1613893460-4962577138-IMG20210208122401.jpg\"]', NULL, '2021-02-21 07:44:20', '2021-03-23 07:32:40'),
(194, 27, 'Kafger New Steel Master', 'Kafger New Steel Master', 'kafger-new-steel-master', 'Activated', '230', '220', 'Kafger New Steel Master', 'Kafger New Steel Master', NULL, NULL, NULL, '1613894267-09022894361-IMG20210208122814.jpg', '[\"1613894267-9022894361-IMG20210208122800.jpg\"]', NULL, '2021-02-21 07:57:47', '2021-03-23 07:35:16'),
(195, 27, 'Ice Cream Scoop Master', 'Ice Cream Scoop Steel Master', 'ice-cream-scoop-steel-master', 'Activated', '110', '100', 'Ice Cream Scoop Steel Master', 'Ice Cream Scoop Master', NULL, NULL, NULL, '1613894627-02634710573-IMG20210208122948.jpg', '[\"1613894627-2634710573-IMG20210208122941.jpg\",\"1613894627-2634710573-IMG20210208122948.jpg\"]', NULL, '2021-02-21 08:03:47', '2021-03-23 07:35:14'),
(196, 27, 'Palta New Steel Master', 'Palta New Steel Master', 'palta-new-steel-master', 'Activated', '230', '220', 'Palta New Steel Master', 'Palta New Steel Master', NULL, NULL, NULL, '1613894953-01834552931-IMG20210208123039.jpg', '[\"1613894953-1834552931-IMG20210208123036.jpg\",\"1613894953-1834552931-IMG20210208123039.jpg\"]', NULL, '2021-02-21 08:09:13', '2021-03-23 07:37:09'),
(197, 27, 'Chamcha Stone Wood Master', 'Chamcha Stone Wood Master', 'chamcha-stone-wood-master', 'Activated', '270', '260', 'Chamcha Stone handle Master', 'Chamcha Stone handle Master', NULL, NULL, NULL, '1613895700-01845517983-IMG20210208123130.jpg', '[\"1613895700-1845517983-IMG20210208123124.jpg\",\"1613895700-1845517983-IMG20210208123130.jpg\"]', NULL, '2021-02-21 08:21:40', '2021-03-23 07:20:51'),
(198, 27, 'Cheff Chamcha Stone Handle Master', 'Cheff Chamcha Stone Handle Master', 'cheff-chamcha-stone-handle-master', 'Activated', '270', '260', 'Cheff Chamcha Stone Handle Master', 'Cheff Chamcha Stone Handle Master', NULL, NULL, NULL, '1613895877-09980512570-IMG20210208123153.jpg', '[\"1613895877-9980512570-IMG20210208123142.jpg\",\"1613895877-9980512570-IMG20210208123153.jpg\"]', NULL, '2021-02-21 08:24:37', '2021-03-23 07:21:30'),
(199, 27, 'Kafger New Stone Handle Master', 'Kafger New Stone Handle Master', 'kafger-new-stone-handle-master', 'Activated', '270', '260', 'Kafger New Stone Handle Master', 'Kafger New Stone Handle Master', NULL, NULL, NULL, '1613896039-08379596520-IMG20210208123235.jpg', '[\"1613896039-8379596520-IMG20210208123229.jpg\",\"1613896039-8379596520-IMG20210208123235.jpg\"]', NULL, '2021-02-21 08:27:19', '2021-03-23 07:35:17'),
(200, 27, 'Master Stone Handle Service Cup', 'Service Cup Stone Wood Master', 'service-cup-stone-wood-master', 'Activated', '330', '320', 'Service Cup Stone Wood Master', 'Service Cup Stone Wood Master', NULL, NULL, NULL, '1613896379-09427233652-IMG20210208123320.jpg', '[\"1613896379-9427233652-IMG20210208123314.jpg\",\"1613896379-9427233652-IMG20210208123320.jpg\"]', NULL, '2021-02-21 08:32:59', '2021-03-23 07:37:21'),
(201, 27, 'New Steel Master Service Cup', 'Service Cup New Steel Master', 'service-cup-new-steel-master', 'Activated', '330', '320', 'New Steel Master Service Cup', 'New Steel Master Service Cup', NULL, NULL, NULL, '1613896674-07462058019-IMG20210208123513.jpg', '[\"1613896674-7462058019-IMG20210208123509.jpg\",\"1613896674-7462058019-IMG20210208123513.jpg\"]', NULL, '2021-02-21 08:37:54', '2021-03-23 07:37:20'),
(202, 27, 'Chamcha New Steel Master', 'Chamcha New Steel Master', 'chamcha-new-steel-master', 'Activated', '230', '220', 'Chamcha New Steel Master', 'Chamcha New Steel Master', NULL, NULL, NULL, '1613896785-09906233439-IMG20210208123559.jpg', '[\"1613896785-9906233439-IMG20210208123555.jpg\",\"1613896785-9906233439-IMG20210208123559.jpg\"]', NULL, '2021-02-21 08:39:45', '2021-03-23 07:20:38'),
(203, 27, 'Cheff Chamcha New Steel Master', 'Cheff Spoon New Steel Master', 'cheff-spoon-new-steel-master', 'Activated', '230', '220', 'Cheff Chamcha New Steel Master', 'Cheff Chamcha New Steel Master', NULL, NULL, NULL, '1613896889-03829319762-IMG20210208123635.jpg', '[\"1613896889-3829319762-IMG20210208123633.jpg\",\"1613896889-3829319762-IMG20210208123635.jpg\"]', NULL, '2021-02-21 08:41:29', '2021-03-23 07:21:52'),
(204, 41, 'Egg Beater (8 inch) Normal,Egg Beater Steel (8 inch) Normal', 'Egg Beater Steel (8 inch) Normal', 'egg-beater-steel-8-inch-normal', 'Activated', '80', '70', 'Egg Beater Steel (8 inch) Normal', 'Egg Beater Steel (8 inch) Normal', NULL, NULL, NULL, '1613897065-09739302570-IMG20210208124924.jpg', '[\"1613897065-9739302570-IMG20210208124921.jpg\",\"1613897065-9739302570-IMG20210208124924.jpg\"]', NULL, '2021-02-21 08:44:25', '2021-03-23 07:31:30'),
(205, 27, NULL, 'Cheff Jali Spoon New Steel Master', 'cheff-jali-spoon-new-steel-master', 'Activated', '230', '220', 'Cheff Jali Spoon New Steel Master', 'Cheff Jali Spoon New Steel Master', NULL, NULL, NULL, '1613897826-02403518690-IMG20210208123419.jpg', '[\"1613897826-2403518690-IMG20210208123415.jpg\",\"1613897826-2403518690-IMG20210208123419.jpg\"]', NULL, '2021-02-21 08:57:06', '2021-03-23 07:21:40'),
(206, 41, 'Egg Beater Spring Steel Wire small', 'Egg Beater Spring Steel Wire small', 'egg-beater-spring-steel-wire-small', 'Activated', '60', '50', 'Egg Beater Spring Steel Wire small', 'Egg Beater Spring Steel Wire small', NULL, NULL, NULL, '1613974540-01430561903-IMG20210208124939.jpg', '[\"1613974540-1430561903-IMG20210208124935.jpg\",\"1613974540-1430561903-IMG20210208124939.jpg\"]', NULL, '2021-02-22 06:15:40', '2021-03-23 07:30:42'),
(207, 41, 'Egg Beater Spring Wooden Handle small', 'Egg Beater Spring Wooden Handle small', 'egg-beater-spring-wooden-handle-small', 'Activated', '60', '50', 'Egg Beater Spring Wooden Handle small', 'Egg Beater Spring Wooden Handle small', NULL, NULL, NULL, '1613974702-01920470504-IMG20210208124952.jpg', '[\"1613974702-1920470504-IMG20210208124947.jpg\",\"1613974702-1920470504-IMG20210208124952.jpg\"]', NULL, '2021-02-22 06:18:22', '2021-03-23 07:31:18'),
(208, 41, 'Handi Stand Handle Steel large', 'Handi Stand Handle Steel large', 'handi-stand-handle-steel-large', 'Activated', '150', '140', 'Handi Stand Handle Steel large', 'Handi Stand Handle Steel large', NULL, NULL, NULL, '1613974985-05722033689-IMG20210208125007.jpg', '[\"1613974985-5722033689-IMG20210208125003.jpg\",\"1613974985-5722033689-IMG20210208125007.jpg\"]', NULL, '2021-02-22 06:23:05', '2021-03-23 07:34:07'),
(209, 41, 'Handi Stand Steel large', 'Handi Stand Steel large', 'handi-stand-steel-large', 'Activated', '130', '120', 'Handi Stand Steel large', 'Handi Stand Steel large', NULL, NULL, NULL, '1613975092-03114292690-IMG20210208125036.jpg', '[\"1613975092-3114292690-IMG20210208125035.jpg\",\"1613975092-3114292690-IMG20210208125036.jpg\"]', NULL, '2021-02-22 06:24:52', '2021-03-23 07:34:09'),
(210, 41, 'Katora Jali (3 size are available)', 'Katora Jali (3 size are available)', 'katora-jali-3-size-are-available', 'Activated', '340', '330', 'Katora Jali (3 size are available)', 'Katora Jali (3 size are available)', NULL, NULL, NULL, '1613975564-01528092980-IMG20210208125100.jpg', '[\"1613975564-1528092980-IMG20210208125100.jpg\",\"1613975564-1528092980-IMG20210208125126.jpg\",\"1613975564-1528092980-IMG20210208125142.jpg\"]', NULL, '2021-02-22 06:32:44', '2021-03-23 07:35:18'),
(211, 17, 'Knife Multi Color (single piece available)', 'Knife Multi Color', 'knife-multi-color', 'Activated', '000', '000', 'Knife Multi Color (single piece available)', 'Knife Multi Color (single piece available)', NULL, NULL, NULL, '1613976859-02194070591-IMG20210208125500.jpg', '[\"1613976859-2194070591-IMG20210208125213.jpg\",\"1613976859-2194070591-IMG20210208125225.jpg\",\"1613976859-2194070591-IMG20210208125256.jpg\",\"1613976859-2194070591-IMG20210208125333.jpg\",\"1613976859-2194070591-IMG20210208125345.jpg\",\"1613976859-2194070591-IMG20210208125401.jpg\",\"1613976859-2194070591-IMG20210208125458.jpg\",\"1613976859-2194070591-IMG20210208125500.jpg\"]', NULL, '2021-02-22 06:54:19', '2021-03-23 07:35:35'),
(212, 41, 'Dhakan Jali Handle (single piece available)', 'Dhakan Jali Handle China (single pcs)', 'dhakan-jali-handle-china-single-pcs', 'Activated', '170', '160', 'Dhakan Jali Handle China (single pcs)', 'Dhakan Jali Handle China (single pcs)', NULL, NULL, NULL, '1613978176-07611496819-IMG20210208125842.jpg', '[\"1613978176-7611496819-IMG20210208125626.jpg\",\"1613978176-7611496819-IMG20210208125638.jpg\",\"1613978176-7611496819-IMG20210208125700.jpg\",\"1613978176-7611496819-IMG20210208125842.jpg\"]', '(single pcs)\r\n(4 size available)', '2021-02-22 07:16:16', '2021-03-23 07:29:24'),
(213, 41, 'Egg Beater Havey Plastic Handle Large', 'Egg Beater Havey Plastic Handle Large', 'egg-beater-havey-plastic-handle-large', 'Activated', '300', '290', 'Egg Beater Havey Plastic Handle Large', 'Egg Beater Havey Plastic Handle Large', NULL, NULL, NULL, '1613978563-07220179618-IMG20210208125113.jpg', '[\"1613978563-7220179618-IMG20210208125109.jpg\",\"1613978563-7220179618-IMG20210208125113.jpg\"]', NULL, '2021-02-22 07:22:43', '2021-03-23 07:30:13'),
(214, 41, 'Pakora Jhara FW (single piece available)', 'Pakora Jhara FW (single piece available)', 'pakora-jhara-fw-single-piece-available', 'Activated', '150', '140', 'Pakora Jhara FW (single piece available)', 'Pakora Jhara FW (single piece available)', NULL, NULL, NULL, '1613978858-09254561108-IMG20210208130052.jpg', '[\"1613978858-9254561108-IMG20210208125910.jpg\",\"1613978858-9254561108-IMG20210208125933.jpg\",\"1613978858-9254561108-IMG20210208125952.jpg\",\"1613978858-9254561108-IMG20210208130008.jpg\",\"1613978858-9254561108-IMG20210208130052.jpg\"]', NULL, '2021-02-22 07:27:38', '2021-03-23 07:37:07'),
(215, 41, 'Bar B Q Grill No 1,Bar B Q Grill No 1 Comercial', 'Bar B Q Grill No 1 Comercial', 'bar-b-q-grill-no-1-comercial', 'Activated', '380', '370', 'Bar B Q Grill No 1 Comercial', 'Bar B Q Grill No 1 Comercial', NULL, NULL, NULL, '1613979511-01302261971-IMG20210208131344.jpg', '[\"1613979511-1302261971-IMG20210208131344.jpg\"]', NULL, '2021-02-22 07:38:31', '2021-03-23 07:16:43'),
(216, 41, 'Bar B Q Grill No 2', 'Bar B Q Grill No 2 Comercial', 'bar-b-q-grill-no-2-comercial', 'Activated', '430', '420', 'Bar B Q Grill No 2 Comercial', 'Bar B Q Grill No 2 Comercial', NULL, NULL, NULL, '1613979601-03490270397-IMG20210208131433.jpg', '[\"1613979601-3490270397-IMG20210208131433.jpg\"]', NULL, '2021-02-22 07:40:01', '2021-03-23 07:17:22'),
(217, 41, 'Bar B Q Grill No 3', 'Bar B Q Grill No 3 Comercial', 'bar-b-q-grill-no-3-comercial', 'Activated', '480', '470', 'Bar B Q Grill No 3 Comercial', 'Bar B Q Grill No 3 Comercial', NULL, NULL, NULL, '1613979733-07391675283-IMG20210208131511.jpg', '[\"1613979733-7391675283-IMG20210208131511.jpg\"]', NULL, '2021-02-22 07:42:13', '2021-03-23 07:17:32'),
(218, 41, 'Bar B Q Grill No 4,Bar B Q Grill No 4 Comercial', 'Bar B Q Grill No 4 Comercial', 'bar-b-q-grill-no-4-comercial', 'Activated', '530', '520', 'Bar B Q Grill No 4 Comercial', 'Bar B Q Grill No 4 Comercial', NULL, NULL, NULL, '1613979829-02981924064-IMG20210208131530.jpg', '[\"1613979829-2981924064-IMG20210208131530.jpg\"]', NULL, '2021-02-22 07:43:49', '2021-03-23 07:17:41'),
(219, 41, 'Pakora Jhara Iron (single piece available)', 'Pakora Jhara Iron (single pcs available)', 'pakora-jhara-iron-single-pcs-available', 'Activated', '95', '85', 'Pakora Jhara Iron (single piece available)', 'Pakora Jhara Iron (single piece available)', NULL, NULL, NULL, '1613980018-06615985447-IMG20210208130340.jpg', '[\"1613980018-6615985447-IMG20210208130216.jpg\",\"1613980018-6615985447-IMG20210208130228.jpg\",\"1613980018-6615985447-IMG20210208130244.jpg\",\"1613980018-6615985447-IMG20210208130252.jpg\",\"1613980018-6615985447-IMG20210208130340.jpg\"]', '(4 size available)\r\n(single pcs)', '2021-02-22 07:46:58', '2021-03-23 07:37:08'),
(220, 41, 'Oil Jhara 20cm China', 'Oil Jhara 20cm China', 'oil-jhara-20cm-china', 'Activated', '230', '220', 'Oil Jhara 20cm China', 'Oil Jhara 20cm China', NULL, NULL, NULL, '1613980332-07122554860-IMG20210208131623.jpg', '[\"1613980332-7122554860-IMG20210208131617.jpg\",\"1613980332-7122554860-IMG20210208131623.jpg\"]', NULL, '2021-02-22 07:52:12', '2021-03-23 07:36:56'),
(221, 41, 'Dhakan Jali Color Coating (2 size available)', 'Dhakan Jali Color Coating (2 size available)', 'dhakan-jali-color-coating-2-size-available', 'Activated', '65', '55', 'Dhakan Jali Color Coating (2 size available)', 'Dhakan Jali Color Coating (2 size available)', NULL, NULL, NULL, '1613980603-04117399269-IMG20210208131801.jpg', '[\"1613980603-4117399269-IMG20210208131733.jpg\",\"1613980603-4117399269-IMG20210208131741.jpg\",\"1613980603-4117399269-IMG20210208131800.jpg\",\"1613980603-4117399269-IMG20210208131801.jpg\"]', '(2 size available)', '2021-02-22 07:56:43', '2021-03-23 07:29:11'),
(222, 45, 'Muffin Tray 24 Khana Non stick', 'Muffin Tray 24 Khana Non stick', 'muffin-tray-24-khana-non-stick', 'Activated', '430', '420', 'Muffin Tray 24 Khana Non stick', 'Muffin Tray 24 Khana Non stick', NULL, NULL, NULL, '1614062182-03843419123-IMG20210209113621.jpg', '[\"1614062182-3843419123-IMG20210209113618.jpg\",\"1614062182-3843419123-IMG20210209113621.jpg\",\"1614062182-3843419123-IMG20210209113629.jpg\"]', NULL, '2021-02-23 06:36:22', '2021-03-23 07:36:53'),
(223, 45, 'Muffin Tray 12 Khana Non stick', 'Muffin Tray 12 Khana Non stick', 'muffin-tray-12-khana-non-stick', 'Activated', '380', '370', 'Muffin Tray 12 Khana Non stick', 'Muffin Tray 12 Khana Non stick', NULL, NULL, NULL, '1614062356-07169981947-IMG20210209113534.jpg', '[\"1614062356-7169981947-IMG20210209113527.jpg\",\"1614062356-7169981947-IMG20210209113534.jpg\",\"1614062356-7169981947-IMG20210209113542.jpg\"]', NULL, '2021-02-23 06:39:16', '2021-03-23 07:35:24'),
(224, 45, 'Pizza Pan Comercial Black', 'Pizza Pan Comercial Black (single pcs)', 'pizza-pan-comercial-black-single-pcs', 'Activated', '330', '320', 'Pizza Pan Comercial Black', 'Pizza Pan Comercial Black (3 size are available)', NULL, NULL, NULL, '1614062672-01205896334-IMG20210209114012.jpg', '[\"1614062672-1205896334-IMG20210209113908.jpg\",\"1614062672-1205896334-IMG20210209113917.jpg\",\"1614062672-1205896334-IMG20210209113940.jpg\",\"1614062672-1205896334-IMG20210209114012.jpg\"]', '(single pcs)\r\n7inch, 9inch, 12inch', '2021-02-23 06:44:32', '2021-03-23 07:37:12'),
(225, 41, 'Dhakan Jali', 'Dhakan Jali Steel', 'dhakan-jali-steel', 'Activated', '100', '90', 'Dhakan Jali Steel', 'Dhakan Jali Steel(4 size are available)', NULL, NULL, NULL, '1614063039-05161329707-IMG20210208131931.jpg', '[\"1614063039-5161329707-IMG20210208131815.jpg\",\"1614063039-5161329707-IMG20210208131827.jpg\",\"1614063039-5161329707-IMG20210208131909.jpg\",\"1614063039-5161329707-IMG20210208131929.jpg\",\"1614063039-5161329707-IMG20210208131931.jpg\"]', '(4 size available)', '2021-02-23 06:50:39', '2021-03-23 07:29:59'),
(226, 41, 'Kunda Jali Color', 'Konda Jali Large Color Coating', 'konda-jali-large-color-coating', 'Activated', '180', '170', 'Konda Jali Large Color Coating', 'Konda Jali Large Color Coating', NULL, NULL, NULL, '1614063640-07989149050-IMG20210209112153.jpg', '[\"1614063640-7989149050-IMG20210209112151.jpg\",\"1614063640-7989149050-IMG20210209112153.jpg\"]', NULL, '2021-02-23 07:00:40', '2021-03-23 07:35:26'),
(227, 45, 'Pizza Seprater Comercial (3 size are available) (singe piece available)', 'Pizza Seprater Comercial (single pcs)', 'pizza-seprater-comercial-single-pcs', 'Activated', '210', '200', 'Pizza Seprater Comercial (3 size are available) (singe piece available)', 'Pizza Seprater Comercial (3 size are available) (singe piece available)', NULL, '7inch, 9inch, 12inch', NULL, '1614064197-05563982976-IMG20210209114936.jpg', '[\"1614064197-5563982976-IMG20210209114324.jpg\",\"1614064197-5563982976-IMG20210209114911.jpg\",\"1614064197-5563982976-IMG20210209114922.jpg\",\"1614064197-5563982976-IMG20210209114936.jpg\"]', NULL, '2021-02-23 07:09:57', '2021-03-23 07:37:14'),
(228, 17, 'Knife Set 7 Piece ST-593', 'Knife Set 7 Piece ST-593', 'knife-set-7-piece-st-593', 'Deactivated', '000', '000', 'Knife Set 7 Piece ST-593', 'Knife Set 7 Piece ST-593', NULL, NULL, NULL, '1614064563-04383099513-IMG20210209123718.jpg', '[\"1614064563-4383099513-IMG20210209123540.jpg\",\"1614064563-4383099513-IMG20210209123614.jpg\",\"1614064563-4383099513-IMG20210209123718.jpg\"]', NULL, '2021-02-23 07:16:03', '2021-03-23 07:35:29'),
(229, 41, 'Wet Basket Vegetable Cutter', 'Wet Basket Vegetable Cutter', 'wet-basket-vegetable-cutter', 'Activated', '890', '880', 'Wet Basket Vegetable Cutter', 'Wet Basket Vegetable Cutter', NULL, NULL, NULL, '1614064891-03273746258-IMG20210209124412.jpg', '[\"1614064891-3273746258-IMG20210209124324.jpg\",\"1614064891-3273746258-IMG20210209124412.jpg\"]', NULL, '2021-02-23 07:21:31', '2021-03-23 07:41:42'),
(230, 46, 'Usb Chargeable Juice Blender,380ml', 'Usb Chargeable Juice Blender HM-03', 'usb-chargeable-juice-blender-hm-03', 'Activated', '1130', '1120', 'Usb Chargeable Juice Blender', 'Usb Chargeable Juice Blender', NULL, NULL, NULL, '1614065577-02005911492-IMG20210209124809.jpg', '[\"1614065577-2005911492-IMG20210209124656.jpg\",\"1614065577-2005911492-IMG20210209124809.jpg\"]', '380ml\r\nbattery capacity 2000mah\r\ncharging time about 3 hours', '2021-02-23 07:32:57', '2021-03-23 07:41:39'),
(231, 47, 'Thermose Happy Day 1ltr', 'Thermose Happy Day 1ltr', 'thermose-happy-day-1ltr', 'Activated', '720', '710', 'Thermose Happy Day 1ltr', 'Thermose Happy Day 1ltr', NULL, NULL, NULL, '1614066778-08032271081-IMG20210209130840.jpg', '[\"1614066778-8032271081-IMG20210209130755.jpg\",\"1614066778-8032271081-IMG20210209130840.jpg\"]', '1ltr', '2021-02-23 07:52:58', '2021-03-23 07:38:07'),
(232, 47, 'Thermose Happy Expresso 1liter', 'Thermose Happy Expresso 1liter', 'thermose-happy-expresso-1liter', 'Activated', '700', '690', 'Thermose Happy Expresso 1liter', 'Thermose Happy Expresso 1liter', NULL, NULL, NULL, '1614243309-08156722982-IMG20210209130938.jpg', '[\"1614067119-3890942239-IMG20210209130940.jpg\"]', '1liter', '2021-02-23 07:58:39', '2021-02-25 08:55:09'),
(233, 47, 'Thermose Happy Hybrid 1ltr', 'Thermose Happy Hybrid 1ltr', 'thermose-happy-hybrid-1ltr', 'Activated', '730', '710', 'Thermose Happy Hybrid 1ltr', 'Thermose Happy Hybrid 1ltr', NULL, NULL, NULL, '1614243348-01183490841-IMG20210209131111.jpg', '[\"1614067441-8392258462-IMG20210209131111.jpg\",\"1614067441-8392258462-IMG20210209131116.jpg\"]', '1liter', '2021-02-23 08:04:01', '2021-02-25 08:55:48'),
(234, 47, 'Thermose Full Steel SPI Seagull (4 size available) (single piece available)', 'Thermose Full Steel SPI Seagull', 'thermose-full-steel-spi-seagull', 'Activated', '670', '650', 'Thermose Full Steel SPI Seagull (4 size available) (single piece available)', 'Thermose Full Steel SPI Seagull (4 size available) (single piece available)', NULL, NULL, NULL, '1614243418-04022886109-IMG20210209131200.jpg', '[\"1614068640-6159282343-IMG20210209131200.jpg\",\"1614068640-6159282343-IMG20210209131206.jpg\"]', '1.0L\r\n1.3L\r\n1.6L\r\n1.9L', '2021-02-23 08:24:00', '2021-02-25 08:56:58'),
(235, 45, 'Pizza Pan China  (3 piece set)', 'Pizza Pan China  (3 piece set)', 'pizza-pan-china-3-piece-set', 'Activated', '760', '750', 'Pizza Pan China  (3 piece set)', 'Pizza Pan China  (3 piece set)', NULL, NULL, NULL, '1614069809-06996221253-IMG20210209125327.jpg', '[\"1614069809-6996221253-IMG20210209125226.jpg\",\"1614069809-6996221253-IMG20210209125253.jpg\",\"1614069809-6996221253-IMG20210209125304.jpg\",\"1614069809-6996221253-IMG20210209125322.jpg\",\"1614069809-6996221253-IMG20210209125327.jpg\"]', '26inch, 29inch, 32inch', '2021-02-23 08:43:29', '2021-03-23 07:37:11'),
(236, 45, 'Baking Tray 3piece Set Non Stick', 'Baking Tray 3 pcs Set Non Stick', 'baking-tray-3-pcs-set-non-stick', 'Activated', '1190', '1180', 'Baking Tray 3piece Set Non Stick', 'Baking Tray 3piece Set Non Stick', NULL, NULL, NULL, '1614147996-01372009801-IMG20210209125607.jpg', '[\"1614147996-1372009801-IMG20210209125524.jpg\",\"1614147996-1372009801-IMG20210209125538.jpg\",\"1614147996-1372009801-IMG20210209125555.jpg\",\"1614147996-1372009801-IMG20210209125604.jpg\",\"1614147996-1372009801-IMG20210209125607.jpg\"]', NULL, '2021-02-24 06:26:36', '2021-03-23 07:16:21'),
(237, 47, 'Thermose China 9016 1Ltr', 'Thermose Steel Body China 9016 1Ltr', 'thermose-steel-body-china-9016-1ltr', 'Activated', '710', '700', 'Thermose China 9016 1Ltr', 'Thermose China 9016 1Ltr', NULL, NULL, NULL, '1614148923-00021282643-IMG20210209131320.jpg', '[\"1614148923-0021282643-IMG20210209131318.jpg\",\"1614148923-0021282643-IMG20210209131320.jpg\"]', NULL, '2021-02-24 06:42:03', '2021-03-23 07:38:18'),
(238, 47, 'Thermose Steel Body 9014 1ltr', 'Thermose Steel Body 9014 1ltr', 'thermose-steel-body-9014-1ltr', 'Activated', '690', '680', 'Thermose Steel Body 9014 1ltr', 'Thermose Steel Body 9014 1ltr', NULL, NULL, NULL, '1614149512-09419264503-IMG20210209131355.jpg', '[\"1614149512-9419264503-IMG20210209131352.jpg\",\"1614149512-9419264503-IMG20210209131355.jpg\"]', NULL, '2021-02-24 06:51:53', '2021-03-23 07:38:17'),
(239, 47, 'Thermose Tiger Tin Body 9011 1 ltr', 'Thermose Tiger Tin Body 9011 1ltr', 'thermose-tiger-tin-body-9011-1ltr', 'Activated', '630', '620', 'Thermose Tiger Tin Body 9011 1ltr', 'Thermose Tiger Tin Body 9011 1ltr', NULL, NULL, NULL, '1614150304-09519773316-IMG20210209131420.jpg', '[\"1614150304-9519773316-IMG20210209131420.jpg\"]', NULL, '2021-02-24 07:05:04', '2021-03-23 07:38:20'),
(240, 47, 'Thermose Tiger 8313 1 ltr', 'Thermose Tiger 8313  1ltr', 'thermose-tiger-8313-1ltr', 'Activated', '530', '520', 'Thermose Tiger 8313  1ltr', 'Thermose Tiger 8313  1ltr', NULL, NULL, NULL, '1614151244-07381651244-IMG20210209131539.jpg', '[\"1614151244-7381651244-IMG20210209131539.jpg\"]', NULL, '2021-02-24 07:20:44', '2021-03-23 07:38:19'),
(241, 47, 'Thermose Handy Pot TIn Body 9012  1ltr', 'Thermose Handy Pot TIn Body 9012  1ltr', 'thermose-handy-pot-tin-body-9012-1ltr', 'Activated', '630', '620', 'Thermose Handy Pot TIn Body 9012  1ltr', 'Thermose Handy Pot TIn Body 9012  1ltr', NULL, NULL, NULL, '1614151450-00371964261-IMG20210209131607.jpg', '[\"1614151450-0371964261-IMG20210209131605.jpg\",\"1614151450-0371964261-IMG20210209131607.jpg\"]', NULL, '2021-02-24 07:24:10', '2021-03-23 07:38:06'),
(242, 47, 'Thermose Zoku Happy 1ltr', 'Thermose Zoku Happy 1ltr', 'thermose-zoku-happy-1ltr', 'Activated', '710', '700', 'Thermose Zoku Happy 1ltr', 'Thermose Zoku Happy 1ltr', NULL, NULL, NULL, '1614151600-03143131920-IMG20210210113337.jpg', '[\"1614151600-3143131920-IMG20210210113337.jpg\",\"1614151600-3143131920-IMG20210210113343.jpg\"]', NULL, '2021-02-24 07:26:40', '2021-03-23 07:41:37'),
(243, 47, 'Thermose Chori Cap Full Steel 2ltr', 'Thermose Chori Cap Full Steel 2ltr', 'thermose-chori-cap-full-steel-2ltr', 'Activated', '1430', '1420', 'Thermose Chori Cap Full Steel 2ltr', 'Thermose Chori Cap Full Steel 2ltr', NULL, NULL, NULL, '1614151799-09629754057-IMG20210210113431.jpg', '[\"1614151799-9629754057-IMG20210210113431.jpg\",\"1614151799-9629754057-IMG20210210113434.jpg\"]', NULL, '2021-02-24 07:29:59', '2021-03-23 07:37:50'),
(244, 47, 'Thermose 2080  1ltr Plastic', 'Thermose 2080  1ltr Plastic', 'thermose-2080-1ltr-plastic', 'Activated', '490', '480', 'Thermose 2080  1ltr Plastic', 'Thermose 2080  1ltr Plastic', NULL, NULL, NULL, '1614151949-09111705296-IMG20210210113532.jpg', '[\"1614151949-9111705296-IMG20210210113532.jpg\",\"1614151949-9111705296-IMG20210210113537.jpg\"]', NULL, '2021-02-24 07:32:29', '2021-03-23 07:37:38'),
(245, 47, 'Thermose 0.5ltr Jasmin OC-2002', 'Thermose 0.5ltr Jasmin OC-2002', 'thermose-05ltr-jasmin-oc-2002', 'Activated', '410', '400', 'Thermose 0.5ltr Jasmin OC-2002', 'Thermose 0.5ltr Jasmin OC-2002', NULL, NULL, NULL, '1614152353-05394270198-IMG20210210113638.jpg', '[\"1614152353-5394270198-IMG20210210113638.jpg\",\"1614152353-5394270198-IMG20210210113642.jpg\"]', NULL, '2021-02-24 07:39:13', '2021-03-23 07:37:34'),
(246, 47, 'Thermose 0.5ltr Lilly OC-2001', 'Thermose 0.5ltr Lilly OC-2001', 'thermose-05ltr-lilly-oc-2001', 'Activated', '400', '390', 'Thermose 0.5ltr Lilly OC-2001', 'Thermose 0.5ltr Lilly OC-2001', NULL, NULL, NULL, '1614152537-05921488270-IMG20210210113858.jpg', '[\"1614152537-5921488270-IMG20210210113858.jpg\",\"1614152537-5921488270-IMG20210210113902.jpg\"]', NULL, '2021-02-24 07:42:17', '2021-03-23 07:37:37'),
(247, 47, 'Thermose Pakistani Black Tiger 1ltr', 'Thermose Pakistani Black Tiger 1ltr', 'thermose-pakistani-black-tiger-1ltr', 'Activated', '400', '390', 'Thermose Pakistani Black Tiger 1ltr', 'Thermose Pakistani Black Tiger 1ltr', NULL, NULL, NULL, '1614152748-04835012912-IMG20210210114014.jpg', '[\"1614152748-4835012912-IMG20210210114014.jpg\",\"1614152748-4835012912-IMG20210210114017.jpg\"]', NULL, '2021-02-24 07:45:48', '2021-03-23 07:38:11'),
(248, 47, 'Thermose Deer 1801 1ltr', 'Thermose Deer 1801 1ltr', 'thermose-deer-1801-1ltr', 'Activated', '430', '420', 'Thermose Deer 1801 1ltr', 'Thermose Deer 1801 1ltr', NULL, NULL, NULL, '1614152979-02019483087-IMG20210210114130.jpg', '[\"1614152979-2019483087-IMG20210210114130.jpg\",\"1614152979-2019483087-IMG20210210114138.jpg\"]', NULL, '2021-02-24 07:49:39', '2021-03-23 07:38:00'),
(249, 47, 'Thermose 0.3ltr 1004 Chosa Asian', 'Thermose 0.3ltr 1004 Chosa Asian', 'thermose-03ltr-1004-chosa-asian', 'Activated', '200', '190', 'Thermose 0.3ltr 1004 Chosa Asian', 'Thermose 0.3ltr 1004 Chosa Asian', NULL, NULL, NULL, '1614153096-00948016960-IMG20210210114216.jpg', '[\"1614153096-0948016960-IMG20210210114216.jpg\",\"1614153096-0948016960-IMG20210210114223.jpg\"]', NULL, '2021-02-24 07:51:36', '2021-03-23 07:37:32'),
(250, 47, 'Thermose Winer 1ltr', 'Thermose Winer 1ltr', 'thermose-winer-1ltr', 'Activated', '440', '430', 'Thermose Winer 1ltr', 'Thermose Winer 1ltr', NULL, NULL, NULL, '1614153194-07914639416-IMG20210210114358.jpg', '[\"1614153194-7914639416-IMG20210210114358.jpg\",\"1614153194-7914639416-IMG20210210114400.jpg\"]', NULL, '2021-02-24 07:53:14', '2021-03-23 07:38:23'),
(251, 47, 'Thermose 0.3tr 2888 Vitamin Master', 'Thermose 0.3tr 2888 Vitamin Master', 'thermose-03tr-2888-vitamin-master', 'Activated', '220', '210', 'Thermose 0.3tr 2888 Vitamin Master', 'Thermose 0.3tr 2888 Vitamin Master', NULL, NULL, NULL, '1614153308-00108938412-IMG20210210114803.jpg', '[\"1614153308-0108938412-IMG20210210114803.jpg\",\"1614153308-0108938412-IMG20210210114753.jpg\"]', NULL, '2021-02-24 07:55:08', '2021-03-23 07:37:33'),
(252, 47, 'Thermose 3080 0.5ltr Plastic Body', 'Thermose 3080 0.5ltr Plastic Body', 'thermose-3080-05ltr-plastic-body', 'Activated', '390', '380', 'Thermose 3080 0.5ltr Plastic Body', 'Thermose 3080 0.5ltr Plastic Body', NULL, NULL, NULL, '1614153546-06015233241-IMG20210210114908.jpg', '[\"1614153546-6015233241-IMG20210210114908.jpg\",\"1614153546-6015233241-IMG20210210114914.jpg\"]', NULL, '2021-02-24 07:59:06', '2021-03-23 07:37:44'),
(253, 47, 'Thermose Rabit Steel Riffle 0.75ltr', 'Thermose Rabit Steel Riffle 0.75ltr', 'thermose-rabit-steel-riffle-075ltr', 'Activated', '390', '380', 'Thermose Rabit Steel Riffle 0.75ltr', 'Thermose Rabit Steel Riffle 0.75ltr', NULL, NULL, NULL, '1614153904-04318622863-IMG20210210115028.jpg', '[\"1614153904-4318622863-IMG20210210115028.jpg\",\"1614153904-4318622863-IMG20210210115033.jpg\"]', NULL, '2021-02-24 08:05:04', '2021-03-23 07:38:16'),
(254, 47, 'Thermose Flying Camel 0.5ltr', 'Thermose Flying Camel 0.5ltr', 'thermose-flying-camel-05ltr', 'Activated', '420', '410', 'Thermose Flying Camel 0.5ltr', 'Thermose Flying Camel 0.5ltr', NULL, NULL, NULL, '1614154019-08132136902-IMG20210210115121.jpg', '[\"1614154019-8132136902-IMG20210210115121.jpg\",\"1614154019-8132136902-IMG20210210115126.jpg\"]', NULL, '2021-02-24 08:06:59', '2021-03-23 07:38:01'),
(255, 47, 'Thermose Lotus 1ltr OC-3001', 'Thermose Lotus 1ltr OC-3001', 'thermose-lotus-1ltr-oc-3001', 'Activated', '450', '440', 'Thermose Lotus 1ltr OC-3001', 'Thermose Lotus 1ltr OC-3001', NULL, NULL, NULL, '1614154171-00236274359-IMG20210210115225.jpg', '[\"1614154171-0236274359-IMG20210210115225.jpg\",\"1614154171-0236274359-IMG20210210115228.jpg\"]', NULL, '2021-02-24 08:09:31', '2021-03-23 07:38:09'),
(256, 47, 'Thermose Aqua 1ltr OC-3003 Ocean', 'Thermose Aqua 1ltr OC-3003 Ocean', 'thermose-aqua-1ltr-oc-3003-ocean', 'Activated', '510', '500', 'Thermose Aqua 1ltr OC-3003 Ocean', 'Thermose Aqua 1ltr OC-3003 Ocean', NULL, NULL, NULL, '1614154318-08587431132-IMG20210210115426.jpg', '[\"1614154318-8587431132-IMG20210210115426.jpg\",\"1614154318-8587431132-IMG20210210115434.jpg\"]', NULL, '2021-02-24 08:11:58', '2021-03-23 07:37:45'),
(257, 47, 'Thermose Daisy 1ltr OC-3002 Ocean', 'Thermose Daisy 1ltr OC-3002 Ocean', 'thermose-daisy-1ltr-oc-3002-ocean', 'Activated', '510', '500', 'Thermose Daisy 1ltr OC-3002 Ocean', 'Thermose Daisy 1ltr OC-3002 Ocean', NULL, NULL, NULL, '1614154419-07096391437-IMG20210210115601.jpg', '[\"1614154419-7096391437-IMG20210210115601.jpg\",\"1614154419-7096391437-IMG20210210115605.jpg\"]', NULL, '2021-02-24 08:13:39', '2021-03-23 07:37:54'),
(258, 47, 'Thermose Mopen 1ltr Plastic Body', 'Thermose Mopen 1ltr Plastic Body', 'thermose-mopen-1ltr-plastic-body', 'Activated', '970', '960', 'Thermose Mopen 1ltr Plastic Body', 'Thermose Mopen 1ltr Plastic Body', NULL, NULL, NULL, '1614154552-02772034115-IMG20210210115815.jpg', '[\"1614154552-2772034115-IMG20210210115815.jpg\",\"1614154552-2772034115-IMG20210210115817.jpg\"]', NULL, '2021-02-24 08:15:52', '2021-03-23 07:38:10'),
(259, 47, 'Thermose Classic Lato 1ltr', 'Thermose Classic Lato 1ltr', 'thermose-classic-lato-1ltr', 'Activated', '450', '440', 'Thermose Classic Lato 1ltr', 'Thermose Classic Lato 1ltr', NULL, NULL, NULL, '1614154701-01473589903-IMG20210210115946.jpg', '[\"1614154701-1473589903-IMG20210210115946.jpg\",\"1614154701-1473589903-IMG20210210115951.jpg\"]', NULL, '2021-02-24 08:18:21', '2021-03-23 07:37:53'),
(260, 47, 'Thermose SK-162p 1ltr Golden Body', 'Thermose SK-162p 1ltr Golden Body', 'thermose-sk-162p-1ltr-golden-body', 'Activated', '1130', '1120', 'Thermose SK-162p 1ltr Golden Body', 'Thermose SK-162p 1ltr Golden Body', NULL, NULL, NULL, '1614154818-06822040901-IMG20210210120049.jpg', '[\"1614154818-6822040901-IMG20210210120049.jpg\",\"1614154818-6822040901-IMG20210210120107.jpg\"]', NULL, '2021-02-24 08:20:18', '2021-02-28 07:50:34'),
(261, 47, 'Thermose Bottle 1ltr Day Days', 'Thermose Bottle 1ltr Day Days', 'thermose-bottle-1ltr-day-days', 'Activated', '630', '620', 'Thermose Bottle 1ltr Day Days', 'Thermose Bottle 1ltr Day Days', NULL, NULL, NULL, '1614154934-05063279072-IMG20210210123146.jpg', '[\"1614154934-5063279072-IMG20210210123157.jpg\",\"1614154934-5063279072-IMG20210210123146.jpg\"]', NULL, '2021-02-24 08:22:14', '2021-03-23 07:37:47'),
(262, 47, 'Thermose China 9616 1.6Ltr', 'Thermose China 9616 1.6Ltr', 'thermose-china-9616-16ltr', 'Activated', '950', '940', 'Thermose China 9616 1.6Ltr', 'Thermose China 9616 1.6Ltr', NULL, NULL, NULL, '1614155393-04095719230-IMG20210210123407.jpg', '[\"1614155393-4095719230-IMG20210210123407.jpg\",\"1614155393-4095719230-IMG20210210123418.jpg\"]', NULL, '2021-02-24 08:29:53', '2021-03-23 07:37:48'),
(263, 47, 'Thermose China 9914 1.9ltr', 'Thermose China 9914 1.9ltr', 'thermose-china-9914-19ltr', 'Activated', '1030', '1020', 'Thermose China 9914 1.9ltr', 'Thermose China 9914 1.9ltr', NULL, NULL, NULL, '1614155646-07610926384-IMG20210210123520.jpg', '[\"1614155646-7610926384-IMG20210210123520.jpg\",\"1614155646-7610926384-IMG20210210123522.jpg\"]', NULL, '2021-02-24 08:34:06', '2021-03-23 07:37:49'),
(264, 47, 'Thermose China 9916 1.9Ltr', 'Thermose China 9916 1.9Ltr', 'thermose-china-9916-19ltr', 'Activated', '1060', '1050', 'Thermose China 9916 1.9Ltr', 'Thermose China 9916 1.9Ltr', NULL, NULL, NULL, '1614156015-04127289340-IMG20210210130316.jpg', '[\"1614156015-4127289340-IMG20210210130316.jpg\",\"1614156015-4127289340-IMG20210210130317.jpg\"]', NULL, '2021-02-24 08:40:15', '2021-03-23 07:37:49'),
(265, 47, 'Thermose Botle 0.45ltr 1088', 'Thermose Botle 0.45ltr 1088', 'thermose-botle-045ltr-1088', 'Activated', '430', '420', 'Thermose Botle 0.45ltr 1088', 'Thermose Botle 0.45ltr 1088', NULL, NULL, NULL, '1614156889-02903303116-IMG20210210125131.jpg', '[\"1614156889-2903303116-IMG20210210125131.jpg\",\"1614156889-2903303116-IMG20210210125134.jpg\"]', NULL, '2021-02-24 08:54:49', '2021-03-23 07:37:46'),
(266, 12, 'Cutlary Set Steel 14g Model', 'Cutlary Set Steel 14g Model', 'cutlary-set-steel-14g-model', 'Activated', '1080', '1070', 'Cutlary Set Steel 14g Model', 'Cutlary Set Steel 14g Model', NULL, NULL, NULL, '1614235826-00419836952-IMG20210208120647.jpg', '[\"1614235826-0419836952-IMG20210208120445.jpg\",\"1614235826-0419836952-IMG20210208120647.jpg\",\"1614235826-0419836952-IMG20210208120707.jpg\"]', NULL, '2021-02-25 06:50:26', '2021-03-23 07:28:00'),
(267, 12, 'Cutlary Set Beauty 5Stars', 'Cutlary Set Beauty 5Stars', 'cutlary-set-beauty-5stars', 'Activated', '1180', '1170', 'Cutlary Set Beauty 5Stars', 'Cutlary Set Beauty 5Stars', NULL, NULL, NULL, '1614236173-02989493170-IMG20210207120700.jpg', '[\"1614236173-2989493170-IMG20210207115953.jpg\",\"1614236173-2989493170-IMG20210207120133.jpg\",\"1614236173-2989493170-IMG20210207120700.jpg\",\"1614236173-2989493170-IMG20210207120840.jpg\"]', NULL, '2021-02-25 06:56:13', '2021-03-23 07:27:40'),
(268, 12, 'Cutlery Set Steel 14g Golden Pearl', 'Cutlery Set Steel 14g Golden Pearl', 'cutlery-set-steel-14g-golden-pearl', 'Activated', '1080', '1070', 'Cutlery Set Steel 14g Golden Pearl', 'Cutlery Set Steel 14g Golden Pearl', NULL, NULL, NULL, '1614236628-01926843535-IMG20210207125126.jpg', '[\"1614236628-1926843535-IMG20210207124855.jpg\",\"1614236628-1926843535-IMG20210207125126.jpg\",\"1614236628-1926843535-IMG20210207125155.jpg\"]', NULL, '2021-02-25 07:03:48', '2021-03-23 07:28:23'),
(269, 41, 'Egg Cutter S/Steel Sallos 777 Kime', 'Egg Cutter S/Steel Sallos 777 Kime', 'egg-cutter-ssteel-sallos-777-kime', 'Deactivated', '130', '120', 'Egg Cutter S/Steel Sallos 777 Kime', 'Egg Cutter S/Steel Sallos 777 Kime', NULL, NULL, NULL, '1614837966-07251869500-1b651a0d-60a7-45af-a886-07fe8e5f3aaf.jpg', NULL, NULL, '2021-03-04 06:06:06', '2021-04-25 09:51:40'),
(270, 20, 'Orange Juicer Handy 777 Plastic', 'Orange Juicer Handy 777 Plastic', 'orange-juicer-handy-777-plastic', 'Deactivated', '365', '355', 'Orange Juicer Handy 777 Plastic', 'Orange Juicer Handy 777 Plastic', NULL, NULL, NULL, '1614838246-09520086149-1cb949a4-cc6c-49fd-a0e8-dbbdfdbda942.jpg', NULL, NULL, '2021-03-04 06:10:46', '2021-04-25 09:31:59'),
(271, 20, 'Hand Mixer Red Box Kimee', 'Hand Mixer Red Box Kimee', 'hand-mixer-red-box-kimee', 'Deactivated', '400', '390', 'Hand Mixer Red Box Kimee', 'Hand Mixer Red Box Kimee', NULL, NULL, NULL, '1614838442-05904623729-1d2f2cfa-46af-45de-80e7-9f27cef55865.jpg', NULL, NULL, '2021-03-04 06:14:02', '2021-04-25 09:33:13'),
(272, 20, 'Finger Chips Cutter Jumbo Lock Kimee', 'Finger Chips Cutter Jumbo Lock Kimee', 'finger-chips-cutter-jumbo-lock-kimee', 'Activated', '1000', '990', 'Finger Chips Cutter Jumbo Lock Kimee', 'Finger Chips Cutter Jumbo Lock Kimee', NULL, NULL, NULL, '1622017112-00902084876-IMG20210518131634.jpg', '[\"1622017112-0902084876-IMG20210518131624.jpg\",\"1622017112-0902084876-IMG20210518131634.jpg\"]', NULL, '2021-03-04 06:27:43', '2021-05-26 08:19:07'),
(273, 20, NULL, 'Egg Boiler Kimee', 'egg-boiler-kimee', 'Deactivated', '410', '400', 'Egg Boiler Kimee', 'Egg Boiler Kimee', NULL, NULL, NULL, '1614839572-07780196221-2cfc4de7-6938-4c9e-9a89-ce62da88e77a.jpg', NULL, NULL, '2021-03-04 06:32:53', '2021-04-25 09:45:34'),
(274, 20, 'Hand Chopper Kimee', 'Hand Chopper Kimee', 'hand-chopper-kimee', 'Deactivated', '480', '490', 'Hand Chopper Kimee', 'Hand Chopper Kimee', NULL, NULL, NULL, '1614840137-00353429919-4e3e5c01-151c-40cf-a48b-c775001d21da.jpg', NULL, NULL, '2021-03-04 06:42:17', '2021-04-25 09:46:31'),
(275, 20, 'Finger Chips Potato Plus Kimeea', 'Finger Chips Potato Plus Kimeea', 'finger-chips-potato-plus-kimeea', 'Deactivated', '820', '810', 'Finger Chips Potato Plus Kimeea', 'Finger Chips Potato Plus Kimeea', NULL, NULL, NULL, '1614840962-04893915209-86fc27f7-505b-482e-b1e3-a2b0a933188e.jpg', NULL, NULL, '2021-03-04 06:56:02', '2021-04-25 09:47:57'),
(276, 20, 'Namak Dani Crystal 1pcs kimee', 'Namak Dani Crystal 1pcs kimee', 'namak-dani-crystal-1pcs-kimee', 'Deactivated', '80', '70', 'Namak Dani Crystal 1pcs kimee', 'Namak Dani Crystal 1pcs kimee', NULL, NULL, NULL, '1614841144-00021512279-413c2e56-9f8f-4b87-8071-28ab06eb2694.jpg', NULL, NULL, '2021-03-04 06:59:04', '2021-04-25 09:36:53'),
(277, 20, 'Orange Juicer Handy 888 Red Plastic', 'Orange Juicer Handy 888 Red Plastic', 'orange-juicer-handy-888-red-plastic', 'Deactivated', '450', '440', 'Orange Juicer Handy 888 Red Plastic', 'Orange Juicer Handy 888 Red Plastic', NULL, NULL, NULL, '1614841410-09537983020-532f9369-75da-49d8-a614-0cabf317820e.jpg', NULL, NULL, '2021-03-04 07:03:30', '2021-04-25 09:36:42'),
(278, 20, 'Apple Cutter Plastic Kimee', 'Apple Cutter Plastic Kimee', 'apple-cutter-plastic-kimee', 'Deactivated', '150', '140', 'Apple Cutter Plastic Kimee', 'Apple Cutter Plastic Kimee', NULL, NULL, NULL, '1614841612-03163477239-918b636a-35be-45ce-9cc3-56f78a2a957e.jpg', NULL, NULL, '2021-03-04 07:06:52', '2021-04-25 09:36:27'),
(279, 20, 'Hand Chopper Quick Black Diba', 'Hand Chopper Quick Black Diba', 'hand-chopper-quick-black-diba', 'Deactivated', '680', '670', 'Hand Chopper Quick Black Diba', 'Hand Chopper Quick Black Diba', NULL, NULL, NULL, '1614841777-00228334091-1376c9ff-ecec-4926-8151-bb9833ab00cc.jpg', NULL, NULL, '2021-03-04 07:09:37', '2021-04-25 09:36:10'),
(280, 20, 'Suger Pot Roze Kimee', 'Suger Pot Roze Kimee', 'suger-pot-roze-kimee', 'Deactivated', '190', '180', 'Suger Pot Roze Kimee', 'Suger Pot Roze Kimee', NULL, NULL, NULL, '1614841908-07438039160-48150e59-04ff-46b2-a849-2b389d85fbdf.jpg', NULL, NULL, '2021-03-04 07:11:48', '2021-04-25 09:35:52'),
(281, 20, 'Orange Juicer Steel kimee', 'Orange Juicer Steel kimee', 'orange-juicer-steel-kimee', 'Deactivated', '1000', '850', 'Orange Juicer Steel kimee', 'Orange Juicer Steel kimee', NULL, NULL, NULL, '1614842164-06862937324-73298bc2-51c7-41b6-8bee-f2c01060a54e.jpg', NULL, NULL, '2021-03-04 07:16:04', '2021-04-25 09:35:28'),
(282, 20, 'Carpet Cleaner 3 Brush Kimee', 'Carpet Cleaner 3 Brush Kimee', 'carpet-cleaner-3-brush-kimee', 'Deactivated', '250', '240', 'Carpet Cleaner 3 Brush Kimee', 'Carpet Cleaner 3 Brush Kimee', NULL, NULL, NULL, '1614842500-02073853699-492739fd-8489-4ae1-9add-2d1ea16cf6be.jpg', NULL, NULL, '2021-03-04 07:21:40', '2021-04-25 09:35:05'),
(283, 20, 'Carpet Cleaner 2 brush kimee', 'Carpet Cleaner 2 brush kimee', 'carpet-cleaner-2-brush-kimee', 'Deactivated', '220', '210', 'Carpet Cleaner 2 brush kimee', 'Carpet Cleaner 2 brush kimee', NULL, NULL, NULL, '1614842667-04671415293-610647d9-1e6c-4f97-9cc8-1cb8702db062.jpg', NULL, NULL, '2021-03-04 07:24:27', '2021-04-25 09:35:16'),
(284, 20, 'Carpet Cleaner 4 Brush Kimee', 'Carpet Cleaner 4 Brush Kimee', 'carpet-cleaner-4-brush-kimee', 'Deactivated', '250', '240', 'Carpet Cleaner 4 Brush Kimee', 'Carpet Cleaner 4 Brush Kimee', NULL, NULL, NULL, '1614842866-05713929080-cfb4ff5b-de12-46f6-8c86-0cfbb7143735.jpg', NULL, NULL, '2021-03-04 07:27:46', '2021-04-25 09:34:51'),
(285, 20, 'Namak Dani Tulip kimee 4pic', 'Namak Dani Tulip kimee 4pic', 'namak-dani-tulip-kimee-4pic', 'Deactivated', '320', '310', 'Namak Dani Tulip kimee 4pic', 'Namak Dani Tulip kimee 4pic', NULL, NULL, NULL, '1614843095-03620521997-b2d9af34-adbc-418e-b56e-9ce821aaee93.jpg', NULL, NULL, '2021-03-04 07:31:35', '2021-04-25 09:34:39'),
(286, 27, NULL, 'tong', 'tong', 'Deactivated', '000', '000', 'tong', 'tong', NULL, NULL, NULL, '1616392854-05128068345-WhatsApp-Image-2021-03-21-at-10.png', '[\"1616392854-5128068345-WhatsApp-Image-2021-03-21-at-10.png\"]', NULL, '2021-03-22 06:00:54', '2021-03-22 06:00:54'),
(288, 48, 'Cooler Aqua Royal', 'Cooler Aqua Royal', 'cooler-aqua-royal', 'Activated', '1000', '950', 'Cooler Aqua Royal', 'Cooler Aqua Royal', NULL, NULL, NULL, '1621837665-01062615899-IMG20210518115120.jpg', '[\"1621837665-1062615899-IMG20210518115120.jpg\",\"1621837665-1062615899-IMG20210518115317.jpg\"]', '6 size are available', '2021-05-24 06:27:45', '2021-05-24 06:35:28'),
(289, 48, 'Cooler Panja,Steel Body', 'Cooler Panja Steel Body', 'cooler-panja-steel-body', 'Activated', '2250', '2240', 'Cooler Panja Steel Body', 'Cooler Panja Steel Body', NULL, NULL, NULL, '1621839068-07958637941-IMG20210518113716.jpg', '[\"1621839068-7958637941-IMG20210518113716.jpg\",\"1621839068-7958637941-IMG20210518114241.jpg\"]', '2 size available', '2021-05-24 06:51:08', '2021-05-31 06:46:15'),
(290, 48, 'Cooler Beauty', 'Cooler Beauty 12ltr', 'cooler-beauty-12ltr', 'Activated', '840', '830', 'Cooler Beauty', 'Cooler Beauty', NULL, NULL, NULL, '1621839180-01506420085-IMG20210518121125.jpg', '[\"1621839180-1506420085-IMG20210518121125.jpg\",\"1621839180-1506420085-IMG20210518121209.jpg\"]', NULL, '2021-05-24 06:53:00', '2021-05-31 06:48:49'),
(291, 48, 'Cooler Toyo Party', 'Cooler Toyo Party 12ltr', 'cooler-toyo-party-12ltr', 'Activated', '960', '950', 'Cooler Toyo Party', 'Cooler Toyo Party', NULL, NULL, NULL, '1621839328-04687933423-IMG20210518121635.jpg', '[\"1621839328-4687933423-IMG20210518121635.jpg\",\"1621839328-4687933423-IMG20210518121707.jpg\"]', NULL, '2021-05-24 06:55:28', '2021-05-31 06:28:12'),
(292, 48, 'Cooler Toyo Smart', 'Cooler Toyo Smart 14ltr', 'cooler-toyo-smart-14ltr', 'Activated', '1100', '1090', 'Cooler Toyo Smart', 'Cooler Toyo Smart', NULL, NULL, NULL, '1621839517-09200342529-IMG20210518121934.jpg', '[\"1621839517-9200342529-IMG20210518121934.jpg\",\"1621839517-9200342529-IMG20210518122114.jpg\"]', NULL, '2021-05-24 06:58:37', '2021-05-31 06:48:45'),
(293, 48, 'Cooler Dolphin', 'Cooler Dolphin', 'cooler-dolphin', 'Activated', '750', '740', 'Cooler Dolphin', 'Cooler Dolphin', NULL, NULL, NULL, '1621840733-09221953487-IMG20210518122247.jpg', '[\"1621840733-9221953487-IMG20210518122247.jpg\",\"1621840733-9221953487-IMG20210518122312.jpg\"]', '4 size available', '2021-05-24 07:18:53', '2021-05-31 06:37:13'),
(294, 15, 'Tissue Box Stylish &  Durable AH-190', 'Tissue Box AH-190', 'tissue-box-ah-190', 'Deactivated', '000', '000', 'Tissue Box Stylish &  Durable AH-190', 'Tissue Box Stylish &  Durable AH-190', NULL, NULL, NULL, '1621923476-00954016874-IMG20210519121044.jpg', '[\"1621923476-0954016874-IMG20210519120918.jpg\",\"1621923476-0954016874-IMG20210519121044.jpg\"]', NULL, '2021-05-25 06:17:56', '2021-05-25 06:17:56'),
(295, 49, 'Aroni Elegant Basket AH-130', 'Aroni Elegant Basket AH-130', 'aroni-elegant-basket-ah-130', 'Activated', '410', '400', 'Aroni Elegant Basket AH-130', 'Aroni Elegant Basket Multi Purpose Basket AH-130\r\nFantastic storage solution for easier life highly durable and sturdy for day to day usage ideal for both domestic and commercial use available in three different size.', NULL, NULL, 'on', '1621924118-09318269580-IMG20210519121736.jpg', '[\"1621924118-9318269580-IMG20210519121724.jpg\",\"1621924118-9318269580-IMG20210519121736.jpg\"]', '1.5ltr, 2.3ltr, 4.5ltr', '2021-05-25 06:28:38', '2021-06-01 06:18:39'),
(296, 49, 'Aroni Royal Basket AH-120', 'Aroni Royal Basket AH-120', 'aroni-royal-basket-ah-120', 'Activated', '360', '350', 'Aroni Royal Basket AH-120', 'Aroni Royal Basket AH-120\r\nFantastic storage solution for easier life highly durable and sturdy for day to day usage ideal for both domestic and commercial use available in three different size.', NULL, NULL, NULL, '1621924335-06753091441-IMG20210519121551.jpg', '[\"1621924335-6753091441-IMG20210519121551.jpg\",\"1621924335-6753091441-IMG20210519121616.jpg\"]', '1.5ltr, 2.3ltr, 4.5ltr', '2021-05-25 06:32:15', '2021-06-01 06:18:44'),
(297, 49, 'Salt & Pepper Shaker AH-210', 'Aroni Salt & Pepper Shaker AH-210', 'aroni-salt-pepper-shaker-ah-210', 'Activated', '80', '70', 'Salt & Pepper Shaker AH-210', 'Salt & Pepper Shaker AH-210\r\nEasy to Open \r\nDual Shaker \r\nDurable Material \r\nNew Stylish 2 in 1 Design\r\nAvailable in Different Colors \r\nIdeal for both Home & Commercial use', NULL, NULL, 'on', '1621924745-05852142706-IMG20210519121434.jpg', '[\"1621924745-5852142706-IMG20210519121321.jpg\",\"1621924745-5852142706-IMG20210519121434.jpg\"]', 'Easy to Open. \r\nDual Shaker .\r\nDurable Material .\r\nNew Stylish 2 in 1 Design.\r\nAvailable in Different Colors .\r\nIdeal for both Home & Commercial use.', '2021-05-25 06:39:05', '2021-06-01 06:18:45'),
(298, 49, 'Aroni Oil Jug AH-200', 'Aroni Oil Jug AH-200', 'aroni-oil-jug-ah-200', 'Activated', '180', '170', 'Aroni Oil Jug AH-200', 'Aroni Oil Jug AH-200', NULL, NULL, NULL, '1621925060-05050271664-IMG20210519121213.jpg', '[\"1621925060-5050271664-IMG20210519121125.jpg\",\"1621925060-5050271664-IMG20210519121213.jpg\"]', '1ltr', '2021-05-25 06:44:20', '2021-06-01 06:18:41'),
(299, 49, 'Aroni Ratton Basket AH-103', 'Aroni Ratton Basket AH-103', 'aroni-ratton-basket-ah-103', 'Activated', '310', '300', 'Aroni Ratton Basket AH-103', 'Aroni Ratton Basket AH-103\r\nFantastic storage solution for easier life highly durable and sturdy for day to day usage ideal for both domestic and commercial use available in variety size.', NULL, NULL, NULL, '1621925304-05939571011-IMG20210519123326.jpg', '[\"1621925304-5939571011-IMG20210519123326.jpg\",\"1621925304-5939571011-IMG20210519123404.jpg\"]', NULL, '2021-05-25 06:48:24', '2021-06-01 06:18:43'),
(300, 49, 'Aroni Partition Tray AH-180', 'Aroni Partition Tray AH-180', 'aroni-partition-tray-ah-180', 'Activated', '160', '150', 'Aroni Partition Tray AH-180', 'Aroni Partition Tray AH-180', NULL, NULL, NULL, '1621926561-02711838130-IMG20210519121654.jpg', '[\"1621926561-2711838130-IMG20210519121631.jpg\",\"1621926561-2711838130-IMG20210519121654.jpg\"]', NULL, '2021-05-25 07:09:22', '2021-06-01 06:18:42'),
(301, 27, 'Double Pizza Cutter', 'Double Pizza Cutter', 'double-pizza-cutter', 'Activated', '200', '190', 'Double Pizza Cutter', 'Products are of high quality stainless steel precision production, design elegance, luxurious, smooth line, comfortable, good wear resistance, durability is essential  home brand of choice.', NULL, NULL, NULL, '1622357465-09411039379-IMG20210527121005.jpg', '[\"1622357465-9411039379-IMG20210527121005.jpg\"]', NULL, '2021-05-30 06:51:05', '2021-05-30 08:18:35'),
(302, 27, 'Pizza Cutter Kitchen Mater', 'Pizza Cutter Kitchen Mater', 'pizza-cutter-kitchen-mater', 'Deactivated', '200', '190', 'Pizza Cutter Kitchen Mater', 'Products are of high quality stainless steel precision production, design elegance, luxurious, smooth line, comfortable, good wear resistance, durability is essential  home brand of choice.', NULL, NULL, NULL, '1622357652-01934157282-IMG20210527121030.jpg', '[\"1622357652-1934157282-IMG20210527121030.jpg\"]', NULL, '2021-05-30 06:54:12', '2021-05-30 06:54:12'),
(303, 27, 'Cake Lifter Steel Kimee', 'Cake Lifter Steel Kimee', 'cake-lifter-steel-kimee', 'Activated', '160', '150', 'Cake Lifter Steel Kimee', 'Cake Lifter Steel Kimee', NULL, NULL, NULL, '1622358241-01703923912-IMG20210527121057.jpg', '[\"1622358241-1703923912-IMG20210527121057.jpg\"]', NULL, '2021-05-30 07:04:01', '2021-05-30 08:17:37'),
(304, 27, 'Knife sharpener kimee', 'Knife sharpener kimee', 'knife-sharpener-kimee', 'Activated', '180', '170', 'Knife sharpener kimee', 'Knife sharpener kimee', NULL, NULL, NULL, '1622358436-08318322669-IMG20210527121150.jpg', '[\"1622358436-8318322669-IMG20210527121150.jpg\"]', NULL, '2021-05-30 07:07:16', '2021-05-30 08:19:33'),
(305, 27, 'Oil Spoon White Pearl', 'Oil Spoon White Pearl', 'oil-spoon-white-pearl', 'Activated', '180', '170', 'Oil Spoon White Pearl', 'Oil Spoon White Pearl', NULL, NULL, NULL, '1622358626-05470212346-IMG20210527121218.jpg', '[\"1622358626-5470212346-IMG20210527121218.jpg\"]', NULL, '2021-05-30 07:10:26', '2021-05-30 08:19:18');
INSERT INTO `products` (`id`, `category_id`, `tags`, `title`, `slug`, `status`, `retailPrice`, `wholesalePrice`, `meta_description`, `description`, `warranty`, `policy`, `new`, `thumbnail`, `gallery`, `additional_info`, `created_at`, `updated_at`) VALUES
(306, 27, 'Wooden Meat Hummer SSS', 'Wooden Meat Hummer SSS', 'wooden-meat-hummer-sss', 'Deactivated', '240', '230', 'Wooden Meat Hummer SSS', 'Meat hummer with steel teeth on both sides Solid construction with high quality wood, light in weight and easy to use.', NULL, NULL, NULL, '1622358973-07295079803-IMG20210527121441.jpg', '[\"1622358973-7295079803-IMG20210527121441.jpg\"]', NULL, '2021-05-30 07:16:13', '2021-05-30 07:16:13'),
(307, 19, 'Dhakan Jali Black Steel', 'Dhakan Jali Black Steel', 'dhakan-jali-black-steel', 'Activated', '200', '190', 'Dhakan Jali Black Steel', 'Dhakan Jali Black Steel', NULL, NULL, NULL, '1622359371-02922901967-IMG20210527121650.jpg', '[\"1622359371-2922901967-IMG20210527121650.jpg\"]', NULL, '2021-05-30 07:22:51', '2021-05-30 08:18:32'),
(308, 17, 'Kinfe China K-008', 'Kinfe China K-008', 'kinfe-china-k-008', 'Activated', '110', '100', 'Kinfe China K-008', 'Kinfe China K-008', NULL, NULL, NULL, '1622359526-09201390378-IMG20210527121457.jpg', '[\"1622359526-9201390378-IMG20210527121457.jpg\"]', NULL, '2021-05-30 07:25:26', '2021-05-30 08:19:00'),
(309, 12, NULL, 'Test', 'test', 'Deactivated', '12', '10', 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-15 16:15:11', '2021-06-17 06:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `name`, `values`, `created_at`, `updated_at`) VALUES
(58, 74, 'color', '[\"red\",\" blue\",\" green\"]', '2020-08-29 07:18:20', '2020-08-29 07:18:20'),
(74, 70, 'color', '[\"red\"]', '2020-08-29 08:52:46', '2020-08-29 08:52:46'),
(120, 71, 'Larissa Hopkins', '[\"Deleniti\",\" labore\",\" atqu\"]', '2020-09-06 05:45:49', '2020-09-06 05:46:09'),
(121, 71, 'Remedios Pennington', '[\"Quas\",\" quia\",\" similique\"]', '2020-09-06 05:45:49', '2020-09-06 05:46:09'),
(122, 81, 'color', '[\"red\",\"blue\",\"green\"]', '2020-09-09 11:01:53', '2020-09-09 11:01:53'),
(123, 81, 'size', '[\"small\",\"medium\",\"large\"]', '2020-09-09 11:01:53', '2020-09-09 11:01:53'),
(129, 90, 'Size', '[\"1litter\",\"2litter\",\"3litter\"]', '2020-10-03 10:00:32', '2020-10-03 10:00:32'),
(130, 90, 'Color', '[\"transparent\",\"white\"]', '2020-10-03 10:02:45', '2020-10-03 10:02:45'),
(140, 151, 'size', '[\"teaspoon\",\"babyspoon\",\"tablespoon\"]', '2021-02-01 01:11:06', '2021-02-01 01:11:06'),
(141, 153, 'size', '[\"teaspoon\",\"babyspoon\",\"tablespoon\"]', '2021-02-01 01:12:00', '2021-02-01 01:12:00'),
(142, 170, 'size', '[\"teaspoon\",\"babyspoon\",\"tablespoon\"]', '2021-02-17 07:40:03', '2021-02-17 07:40:03'),
(143, 167, 'size', '[\"teaspoon\",\"babyspoon\",\"tablespoon\"]', '2021-02-17 07:51:48', '2021-02-17 07:51:48'),
(145, 163, 'size', '[\"teaspoon\",\"babyspoon\",\"tablespoon\"]', '2021-02-17 08:01:54', '2021-02-17 08:01:54'),
(146, 210, 'size', '[\"small\",\"medium\",\"large\"]', '2021-02-22 06:33:33', '2021-02-22 06:33:33'),
(147, 211, 'size', '[\"3.5inch\",\"4.5inch\",\"5inch\",\"5.5inch\",\"6inch\",\"7inch\"]', '2021-02-22 06:56:31', '2021-02-22 06:56:31'),
(148, 212, 'size', '[\"21cm\",\"25cm\",\"29cm\"]', '2021-02-22 07:16:58', '2021-02-22 07:16:58'),
(149, 214, 'size', '[\"size no 1\",\"size no 2\",\"size no 3\",\"size no 4\"]', '2021-02-22 07:29:43', '2021-02-22 07:29:43'),
(150, 219, 'size', '[\"size no 1\",\"size no 2\",\"size no 3\",\"size no 4\"]', '2021-02-22 07:48:22', '2021-02-22 07:48:22'),
(151, 221, 'size', '[\"size no 1 \",\"size no 2\"]', '2021-02-22 08:00:00', '2021-02-22 08:00:00'),
(152, 224, 'size', '[\"7inch\",\"9inch\",\"12inch\"]', '2021-02-23 06:45:29', '2021-02-23 06:45:29'),
(154, 234, 'size', '[\"1L\",\"1.3L\",\"1.6L\",\"1.9L\"]', '2021-02-23 08:24:59', '2021-02-23 08:24:59'),
(155, 131, 'size', '[\"small\",\"medium\",\"large\"]', '2021-02-25 07:30:05', '2021-02-25 07:30:05'),
(156, 146, 'size', '[\"small\",\"medium\",\"large\"]', '2021-03-01 07:46:14', '2021-03-01 07:46:14'),
(157, 183, 'size', '[\"samll\",\"medium\",\"large\"]', '2021-03-04 08:01:57', '2021-03-04 08:01:57'),
(158, 182, 'size', '[\"no:1\",\"no:2\",\"no:3\"]', '2021-03-11 07:02:54', '2021-03-11 07:02:54'),
(159, 181, 'size', '[\"no:1\",\"no:2\",\"no:3\"]', '2021-03-11 07:31:22', '2021-03-11 07:31:22'),
(160, 180, 'size', '[\"no:1\",\"no:2\",\"no:3\",\"no:4\"]', '2021-03-11 07:44:01', '2021-03-11 07:44:01'),
(161, 179, 'size', '[\"no:1\",\"no:2\",\"no:3\"]', '2021-03-11 08:07:58', '2021-03-11 08:07:58'),
(163, 159, 'size', '[\"teaspoon\",\"babyspoon\",\"tablespoon\"]', '2021-03-14 07:15:14', '2021-03-14 07:15:14'),
(164, 178, 'size', '[\"3.5inch\",\"4inch\",\"5inch\",\"6inch\"]', '2021-03-14 08:08:54', '2021-03-14 08:08:54'),
(165, 225, 'size', '[\"no:1\",\" no:2\",\" no:3\",\" no:4\"]', '2021-03-15 07:11:09', '2021-03-15 07:11:24'),
(166, 184, 'size', '[\"4inch\",\"5inch\",\"6inch\"]', '2021-03-15 08:41:45', '2021-03-15 08:41:45'),
(168, 227, 'size', '[\"7inch\",\"9inch\",\"12inch\"]', '2021-03-16 07:47:08', '2021-03-16 07:47:08'),
(169, 174, 'size', '[\"4inch\",\"5inch\",\"6inch\"]', '2021-03-16 08:24:12', '2021-03-16 08:24:12'),
(172, 288, 'size', '[\"6ltr\",\"8ltr\",\"12ltr\",\"14ltr\",\"20ltr\",\"24.5ltr\"]', '2021-05-24 06:29:54', '2021-05-24 06:29:54'),
(174, 307, 'size', '[\"small\",\" medium\",\" large\"]', '2021-05-30 08:51:12', '2021-05-30 08:51:40'),
(176, 293, 'size', '[\"4ltr\",\"6ltr\",\"10ltr\",\"15ltr\"]', '2021-05-31 06:40:01', '2021-05-31 06:40:01'),
(177, 289, 'size', '[\"10ltr\",\"12ltr\"]', '2021-05-31 06:46:56', '2021-05-31 06:46:56'),
(178, 309, 'Size', '[\"sm\"]', '2021-06-15 16:15:56', '2021-06-15 16:16:29'),
(179, 309, 'Color', '[\"red\"]', '2021-06-15 16:15:56', '2021-06-15 16:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` int(11) NOT NULL,
  `visibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `user_id`, `product_id`, `title`, `message`, `index`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 59, 280, 'Excellent product', 'The delivery was fast in 24 hours', 5, 'visible', '2021-04-06 06:06:58', '2021-04-06 06:06:58'),
(2, 59, 231, 'Thermose Happy Day 1ltr', 'Product quality was excellent', 1, 'hidden', '2021-04-06 06:12:05', '2021-04-06 06:12:05'),
(3, 59, 233, 'Excellent product', 'Delivery was Just in 24 hours\r\nI can\'t expected', 1, 'hidden', '2021-04-06 06:17:31', '2021-04-06 06:17:31'),
(4, 36, 303, 'Best Product', 'The product is great.', 5, 'visible', '2021-06-13 14:14:03', '2021-06-13 14:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retailPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wholesalePrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `product_id`, `title`, `sku`, `stock`, `retailPrice`, `wholesalePrice`, `created_at`, `updated_at`) VALUES
(407, 71, 'Deleniti Quas', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:13', '2020-09-06 05:46:13'),
(408, 71, ' labore Quas', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:13', '2020-09-06 05:46:13'),
(409, 71, ' atqu Quas', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:13', '2020-09-06 05:46:13'),
(410, 71, 'Deleniti  quia', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:13', '2020-09-06 05:46:13'),
(411, 71, ' labore  quia', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:13', '2020-09-06 05:46:13'),
(412, 71, ' atqu  quia', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:13', '2020-09-06 05:46:13'),
(413, 71, 'Deleniti  similique', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:13', '2020-09-06 05:46:13'),
(414, 71, ' labore  similique', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:14', '2020-09-06 05:46:14'),
(415, 71, ' atqu  similique', '000', 'out-stock', '0.00', NULL, '2020-09-06 05:46:14', '2020-09-06 05:46:14'),
(489, 74, 'red', '001', 'in-stock', '50', NULL, '2020-09-06 06:50:08', '2020-09-11 13:28:45'),
(490, 74, ' blue', '002', 'in-stock', '80', '60', '2020-09-06 06:50:08', '2020-09-11 13:28:45'),
(491, 74, ' green', '003', 'out-stock', '500', '490', '2020-09-06 06:50:08', '2020-09-11 13:28:45'),
(496, 81, 'red small', 'sku-001', 'in-stock', '50.00', '45.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(497, 81, 'blue small', 'sku-002', 'in-stock', '45.00', '40.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(498, 81, 'green small', 'sku-003', 'in-stock', '40.00', '35.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(499, 81, 'red medium', 'sku-004', 'in-stock', '35.00', '30.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(500, 81, 'blue medium', 'sku-005', 'in-stock', '30.00', '25.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(501, 81, 'green medium', 'sku-006', 'in-stock', '25.00', '20.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(502, 81, 'red large', 'sku-007', 'in-stock', '20.00', '15.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(503, 81, 'blue large', 'sku-008', 'in-stock', '15.00', '10.00', '2020-09-09 11:02:03', '2020-09-09 11:07:01'),
(504, 81, 'green large', 'sku-009', 'out-stock', '10.00', '0.0', '2020-09-09 11:02:03', '2020-09-10 10:52:17'),
(526, 90, '1litter transparent', '001', 'in-stock', '1800', '1795', '2020-10-03 10:02:51', '2020-10-03 10:04:05'),
(527, 90, '2litter transparent', '002', 'in-stock', '1795', '1790', '2020-10-03 10:02:51', '2020-10-03 10:04:05'),
(528, 90, '3litter transparent', '003', 'in-stock', '1790', '1785', '2020-10-03 10:02:51', '2020-10-03 10:04:05'),
(529, 90, '1litter white', '004', 'in-stock', '1785', '1780', '2020-10-03 10:02:51', '2020-10-03 10:04:05'),
(530, 90, '2litter white', '005', 'in-stock', '1780', '1775', '2020-10-03 10:02:51', '2020-10-03 10:04:05'),
(531, 90, '3litter white', '004', 'in-stock', '1775', '1770', '2020-10-03 10:02:51', '2020-10-03 10:04:05'),
(545, 170, 'teaspoon', 'teaspoon', 'in-stock', '280', '270', '2021-02-17 07:40:10', '2021-03-13 07:31:48'),
(546, 170, 'babyspoon', 'babyspoon', 'in-stock', '290', '280', '2021-02-17 07:40:10', '2021-03-13 07:31:48'),
(547, 170, 'tablespoon', 'tablespoon', 'in-stock', '310', '300', '2021-02-17 07:40:10', '2021-03-13 07:31:48'),
(548, 167, 'teaspoon', 'teaspoon', 'in-stock', '280', '270', '2021-02-17 07:51:54', '2021-03-13 07:00:23'),
(549, 167, 'babyspoon', 'babyspoon', 'in-stock', '290', '280', '2021-02-17 07:51:54', '2021-03-13 07:00:23'),
(550, 167, 'tablespoon', 'tablespoon', 'in-stock', '310', '300', '2021-02-17 07:51:54', '2021-03-13 07:00:23'),
(551, 163, 'teaspoon', 'teaspoon', 'in-stock', '280', '270', '2021-02-17 08:02:26', '2021-03-13 07:39:38'),
(552, 163, 'babyspoon', 'babyspoon', 'in-stock', '290', '280', '2021-02-17 08:02:26', '2021-03-13 07:39:38'),
(553, 163, 'tablespoon', 'tablespoon', 'in-stock', '310', '300', '2021-02-17 08:02:26', '2021-03-13 07:39:38'),
(554, 210, 'small', 'small', 'in-stock', '340', '330', '2021-02-22 06:33:41', '2021-03-14 07:32:46'),
(555, 210, 'medium', 'medium', 'in-stock', '360', '350', '2021-02-22 06:33:41', '2021-03-14 07:32:46'),
(556, 210, 'large', 'large', 'in-stock', '380', '370', '2021-02-22 06:33:41', '2021-03-14 07:32:46'),
(557, 211, '3.5inch', '000', 'in-stock', '0.00', NULL, '2021-02-22 06:56:42', '2021-02-22 06:57:56'),
(558, 211, '4.5inch', '000', 'in-stock', '0.00', NULL, '2021-02-22 06:56:42', '2021-02-22 06:57:56'),
(559, 211, '5inch', '000', 'in-stock', '0.00', NULL, '2021-02-22 06:56:42', '2021-02-22 06:57:56'),
(560, 211, '5.5inch', '000', 'in-stock', '0.00', NULL, '2021-02-22 06:56:42', '2021-02-22 06:57:56'),
(561, 211, '6inch', '000', 'in-stock', '0.00', NULL, '2021-02-22 06:56:42', '2021-02-22 06:57:56'),
(562, 211, '7inch', '000', 'in-stock', '0.00', NULL, '2021-02-22 06:56:42', '2021-02-22 06:57:56'),
(563, 212, '21cm', '21cm', 'in-stock', '170', '160', '2021-02-22 07:17:33', '2021-03-15 06:34:06'),
(564, 212, '25cm', '25cm', 'in-stock', '180', '170', '2021-02-22 07:17:33', '2021-03-15 06:34:06'),
(565, 212, '29cm', '29cm', 'in-stock', '190', '180', '2021-02-22 07:17:33', '2021-03-15 06:34:06'),
(566, 214, 'size no 1', 'no:1', 'in-stock', '150', '140', '2021-02-22 07:30:03', '2021-03-15 05:59:32'),
(567, 214, 'size no 2', 'no:2', 'in-stock', '160', '150', '2021-02-22 07:30:03', '2021-03-15 05:59:32'),
(568, 214, 'size no 3', 'no:3', 'in-stock', '170', '160', '2021-02-22 07:30:03', '2021-03-15 05:59:32'),
(569, 214, 'size no 4', 'no:4', 'in-stock', '180', '170', '2021-02-22 07:30:03', '2021-03-15 05:59:32'),
(570, 219, 'size no 1', 'no:1', 'in-stock', '95', '85', '2021-02-22 07:48:36', '2021-03-14 07:37:28'),
(571, 219, 'size no 2', 'no:2', 'in-stock', '100', '90', '2021-02-22 07:48:36', '2021-03-14 07:37:28'),
(572, 219, 'size no 3', 'no:3', 'in-stock', '105', '95', '2021-02-22 07:48:36', '2021-03-14 07:37:28'),
(573, 219, 'size no 4', 'no:4', 'in-stock', '110', '100', '2021-02-22 07:48:36', '2021-03-14 07:37:28'),
(574, 221, 'size no 1 ', 'no:1', 'in-stock', '65', '55', '2021-02-22 08:01:20', '2021-03-15 07:00:48'),
(575, 221, 'size no 2', 'no:2', 'in-stock', '75', '65', '2021-02-22 08:01:20', '2021-03-15 07:00:48'),
(576, 224, '7inch', '7inch', 'in-stock', '330', '320', '2021-02-23 06:45:44', '2021-03-16 07:31:33'),
(577, 224, '9inch', '9inch', 'in-stock', '380', '370', '2021-02-23 06:45:44', '2021-03-16 07:31:33'),
(578, 224, '12inch', '12inch', 'in-stock', '480', '470', '2021-02-23 06:45:44', '2021-03-16 07:31:33'),
(582, 234, '1L', '1L', 'in-stock', '670', '650', '2021-02-23 08:25:09', '2021-02-25 08:17:11'),
(583, 234, '1.3L', '1.3L', 'in-stock', '710', '700', '2021-02-23 08:25:09', '2021-02-25 08:17:11'),
(584, 234, '1.6L', '1.6L', 'in-stock', '760', '750', '2021-02-23 08:25:09', '2021-02-25 08:17:11'),
(585, 234, '1.9L', '1.9L', 'in-stock', '870', '860', '2021-02-23 08:25:09', '2021-02-25 08:17:11'),
(586, 131, 'small', 'Small', 'in-stock', '110', '100', '2021-02-25 07:30:15', '2021-02-25 07:38:21'),
(587, 131, 'medium', 'medium', 'in-stock', '120', '110', '2021-02-25 07:30:15', '2021-02-25 07:38:21'),
(588, 131, 'large', 'large', 'in-stock', '150', '140', '2021-02-25 07:30:15', '2021-02-25 07:38:21'),
(592, 146, 'small', 'small', 'in-stock', '130', '120', '2021-03-01 07:46:30', '2021-03-01 07:47:39'),
(593, 146, 'medium', 'medium', 'in-stock', '140', '130', '2021-03-01 07:46:30', '2021-03-01 07:47:39'),
(594, 146, 'large', 'large', 'in-stock', '150', '140', '2021-03-01 07:46:30', '2021-03-01 07:47:39'),
(595, 151, 'teaspoon', 'teaspoon', 'in-stock', '460', '450', '2021-03-01 07:59:38', '2021-03-01 08:22:15'),
(596, 151, 'babyspoon', 'babyspoon', 'in-stock', '480', '470', '2021-03-01 07:59:38', '2021-03-01 08:22:15'),
(597, 151, 'tablespoon', 'tablespoon', 'in-stock', '500', '490', '2021-03-01 07:59:38', '2021-03-01 08:22:15'),
(598, 183, 'samll', 'no-1', 'in-stock', '75', '65', '2021-03-04 08:02:06', '2021-03-04 08:03:42'),
(599, 183, 'medium', 'no-2', 'in-stock', '80', '70', '2021-03-04 08:02:06', '2021-03-04 08:03:42'),
(600, 183, 'large', 'no-3', 'in-stock', '85', '75', '2021-03-04 08:02:06', '2021-03-04 08:03:42'),
(601, 153, 'teaspoon', 'teaspoon', 'in-stock', '460', '450', '2021-03-11 06:34:02', '2021-03-11 06:36:03'),
(602, 153, 'babyspoon', 'babyspoon', 'in-stock', '480', '470', '2021-03-11 06:34:02', '2021-03-11 06:36:03'),
(603, 153, 'tablespoon', 'tablespoon', 'in-stock', '500', '490', '2021-03-11 06:34:02', '2021-03-11 06:36:03'),
(604, 182, 'no:1', 'no:1', 'in-stock', '75', '65', '2021-03-11 07:03:15', '2021-03-11 07:07:11'),
(605, 182, 'no:2', 'no:2', 'in-stock', '85', '75', '2021-03-11 07:03:15', '2021-03-11 07:07:11'),
(606, 182, 'no:3', 'no:3', 'in-stock', '95', '85', '2021-03-11 07:03:15', '2021-03-11 07:07:11'),
(607, 181, 'no:1', 'no:1', 'in-stock', '75', '65', '2021-03-11 07:31:41', '2021-03-11 07:33:38'),
(608, 181, 'no:2', 'no:2', 'in-stock', '80', '70', '2021-03-11 07:31:41', '2021-03-11 07:33:38'),
(609, 181, 'no:3', 'no:3', 'in-stock', '95', '85', '2021-03-11 07:31:41', '2021-03-11 07:33:38'),
(610, 180, 'no:1', 'no:1', 'in-stock', '220', '210', '2021-03-11 07:44:08', '2021-03-11 07:46:18'),
(611, 180, 'no:2', 'no:2', 'in-stock', '230', '220', '2021-03-11 07:44:08', '2021-03-11 07:46:18'),
(612, 180, 'no:3', 'no:3', 'in-stock', '240', '230', '2021-03-11 07:44:08', '2021-03-11 07:46:18'),
(613, 180, 'no:4', 'no:4', 'in-stock', '250', '240', '2021-03-11 07:44:08', '2021-03-11 07:46:18'),
(614, 179, 'no:1', 'no:1', 'in-stock', '190', '180', '2021-03-11 08:08:07', '2021-03-11 08:09:46'),
(615, 179, 'no:2', 'no:2', 'in-stock', '200', '190', '2021-03-11 08:08:07', '2021-03-11 08:09:46'),
(616, 179, 'no:3', 'no:3', 'in-stock', '220', '210', '2021-03-11 08:08:07', '2021-03-11 08:09:46'),
(617, 169, 'teaspoon', 'teaspoon', 'in-stock', '280', '270', '2021-03-13 06:40:06', '2021-03-13 06:41:29'),
(618, 169, 'babyspoon', 'babyspoon', 'in-stock', '290', '280', '2021-03-13 06:40:06', '2021-03-13 06:41:29'),
(619, 169, 'tablespoon', 'tablespoon', 'in-stock', '310', '300', '2021-03-13 06:40:06', '2021-03-13 06:41:29'),
(620, 159, 'teaspoon', 'teaspoon', 'in-stock', '460', '450', '2021-03-14 07:15:27', '2021-03-14 07:17:27'),
(621, 159, 'babyspoon', 'babyspoon', 'in-stock', '480', '470', '2021-03-14 07:15:27', '2021-03-14 07:17:27'),
(622, 159, 'tablespoon', 'tablespoon', 'in-stock', '500', '490', '2021-03-14 07:15:27', '2021-03-14 07:17:27'),
(623, 178, '3.5inch', '3.5inch', 'in-stock', '105', '95', '2021-03-14 08:09:01', '2021-03-14 08:11:15'),
(624, 178, '4inch', '4inch', 'in-stock', '110', '100', '2021-03-14 08:09:01', '2021-03-14 08:11:15'),
(625, 178, '5inch', '5inch', 'in-stock', '120', '110', '2021-03-14 08:09:02', '2021-03-14 08:11:15'),
(626, 178, '6inch', '6inch', 'in-stock', '130', '120', '2021-03-14 08:09:02', '2021-03-14 08:11:15'),
(627, 225, 'no:1', 'no:1', 'in-stock', '100', '90', '2021-03-15 07:11:35', '2021-03-15 07:14:53'),
(628, 225, ' no:2', 'no:2', 'in-stock', '110', '100', '2021-03-15 07:11:35', '2021-03-15 07:14:53'),
(629, 225, ' no:3', 'no:3', 'in-stock', '120', '110', '2021-03-15 07:11:35', '2021-03-15 07:14:53'),
(630, 225, ' no:4', 'no:4', 'in-stock', '140', '130', '2021-03-15 07:11:35', '2021-03-15 07:14:53'),
(631, 184, '4inch', '4inch', 'in-stock', '170', '160', '2021-03-15 08:41:51', '2021-03-15 08:42:59'),
(632, 184, '5inch', '5inch', 'in-stock', '175', '165', '2021-03-15 08:41:51', '2021-03-15 08:42:59'),
(633, 184, '6inch', '6inch', 'in-stock', '180', '170', '2021-03-15 08:41:51', '2021-03-15 08:42:59'),
(634, 235, 'small', 'small', 'in-stock', '330', '320', '2021-03-16 07:21:37', '2021-03-16 07:24:10'),
(635, 235, 'medium', 'medium', 'in-stock', '380', '370', '2021-03-16 07:21:37', '2021-03-16 07:24:10'),
(636, 235, 'large', 'large', 'in-stock', '480', '470', '2021-03-16 07:21:37', '2021-03-16 07:24:10'),
(637, 227, '7inch', '7inch', 'in-stock', '210', '200', '2021-03-16 07:47:25', '2021-03-16 07:49:08'),
(638, 227, '9inch', '9inch', 'in-stock', '250', '240', '2021-03-16 07:47:25', '2021-03-16 07:49:08'),
(639, 227, '12inch', '12inch', 'in-stock', '310', '300', '2021-03-16 07:47:25', '2021-03-16 07:49:08'),
(640, 174, '4inch', '4inch', 'in-stock', '130', '120', '2021-03-16 08:24:24', '2021-03-16 08:28:35'),
(641, 174, '5inch', '5inch', 'in-stock', '140', '130', '2021-03-16 08:24:24', '2021-03-16 08:28:35'),
(642, 174, '6inch', '6inch', 'in-stock', '150', '140', '2021-03-16 08:24:24', '2021-03-16 08:28:35'),
(652, 288, '6ltr', '6ltr', 'in-stock', '1000', '950', '2021-05-24 06:30:01', '2021-05-24 06:35:12'),
(653, 288, '8ltr', '8ltr', 'in-stock', '1200', '1150', '2021-05-24 06:30:01', '2021-05-24 06:35:12'),
(654, 288, '12ltr', '12ltr', 'in-stock', '1500', '1450', '2021-05-24 06:30:01', '2021-05-24 06:35:12'),
(655, 288, '14ltr', '14ltr', 'in-stock', '1650', '1600', '2021-05-24 06:30:01', '2021-05-24 06:35:12'),
(656, 288, '20ltr', '20ltr', 'in-stock', '2100', '2050', '2021-05-24 06:30:01', '2021-05-24 06:35:12'),
(657, 288, '24.5ltr', '24.5ltr', 'in-stock', '2550', '2500', '2021-05-24 06:30:01', '2021-05-24 06:35:12'),
(661, 307, 'small', 'small', 'in-stock', '200', '190', '2021-05-30 08:51:46', '2021-05-30 08:52:42'),
(662, 307, ' medium', 'medium', 'in-stock', '210', '200', '2021-05-30 08:51:46', '2021-05-30 08:52:42'),
(663, 307, ' large', 'large', 'in-stock', '220', '210', '2021-05-30 08:51:46', '2021-05-30 08:52:42'),
(666, 293, '4ltr', '4ltr', 'in-stock', '750', '740', '2021-05-31 06:40:08', '2021-05-31 06:43:29'),
(667, 293, '6ltr', '6ltr', 'in-stock', '870', '860', '2021-05-31 06:40:08', '2021-05-31 06:43:29'),
(668, 293, '10ltr', '10ltr', 'in-stock', '1300', '1290', '2021-05-31 06:40:08', '2021-05-31 06:43:29'),
(669, 293, '15ltr', '15ltr', 'in-stock', '1410', '1400', '2021-05-31 06:40:08', '2021-05-31 06:43:29'),
(670, 289, '10ltr', '10ltr', 'in-stock', '2250', '2240', '2021-05-31 06:47:01', '2021-05-31 06:48:23'),
(671, 289, '12ltr', '12ltr', 'in-stock', '2350', '2340', '2021-05-31 06:47:01', '2021-05-31 06:48:23'),
(681, 309, 'sm red', '000', 'in-stock', '111', NULL, '2021-06-15 16:16:34', '2021-06-15 16:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webiste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterProfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebookProfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramProfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `email`, `avatar`, `role`, `status`, `designation`, `gender`, `webiste`, `phone`, `country`, `province`, `city`, `address`, `twitterProfile`, `facebookProfile`, `instagramProfile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(36, 'Uzair Ahmed', NULL, 'uzair@objects.ws', NULL, 'Administrator', 'Activated', NULL, 'male', NULL, NULL, 'AF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$2u63R2tuNgiwYX5r94bO8.CiS0JIF4uDp6.vjNAK/cifEANJE9mAq', 'eRgCUizWF9B9gF9cxk87AdZFEi8ylucSfJ1CXryZgk4nykiit6cf2Cl6PPqe', '2020-09-12 05:32:24', '2020-09-13 03:50:45'),
(49, 'Nooruddin', NULL, 'salamnooruddin@gmail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$gSdLgPkWkwk9e8P.vHZVNusirpH.HfkdUsfabIE34bJv9azZPi3hS', 'yTI5k8dlZ30rP6cm3PL7nNXXQTA1415UZcMwDqCjeyu9SSR8VUmsHehtxcci', '2020-10-03 04:18:19', '2020-10-03 04:18:19'),
(50, 'theBartanStore', 'Admin', 'thebartanstore@gmail.com', NULL, 'Administrator', 'Activated', NULL, 'male', NULL, NULL, 'AF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OZVldH/GJyT6/7OTNIk.jeyyIif7n/YMy.kK1Zsd2PsWVfdHYL0Iu', 'Sq1elYxmIJi1PiRFj8O83r8u8ycjPjNxyarXW9WNJoIF42IC90zqtDYSepWv', '2020-10-03 09:04:06', '2020-10-03 09:04:09'),
(51, 'Abraiz Ahmed', NULL, 'abraizahmed@gmail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Y3ivsWJa4Czx.dvnsfzf4.ZRR1bZ3LP9ZGmweEeMMVL2gskqbY7Bm', NULL, '2020-10-04 05:46:53', '2020-10-04 05:46:53'),
(52, 'JesseAcifs', NULL, 'i.oo.x.ve.rt.ri.s@gmail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$0Cc.KUyxIL.jDF1B9oelle2XVj/bYNc6Xix/McQI/5tpIj7gv71ta', NULL, '2021-01-24 10:01:41', '2021-01-24 10:01:41'),
(53, 'Test', NULL, 'test@gmail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$P76A5gV6pYxYMHZhPWw36uiDiFSMl3/LQNYStLbQQsLfizh6BsyjC', NULL, '2021-03-23 12:03:06', '2021-03-23 12:03:06'),
(54, 'Test User', NULL, 'test@user.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$rvf5YPh7mRYc/ELSPmdW/OWWvERZoHX7/GdrkyIDPLJByGkzTM8fa', NULL, '2021-03-23 12:04:51', '2021-03-23 12:04:51'),
(55, 'Test user 2', NULL, 'test@user2.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$t20bMUEGi0lxmIzZfZ7uhu3aXHYVnGraiiyo8gsEX6JrZauNEz8Mu', NULL, '2021-03-23 12:05:40', '2021-03-23 12:05:40'),
(57, 'dell', NULL, 'dell@gmail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$uKQJPQ3EbkR0SUhLPOsiGORK/Bqu5cd2KMNcBkACxnqdxgLGkrNXi', NULL, '2021-03-27 06:33:25', '2021-03-27 07:57:24'),
(58, 'hp', NULL, 'hp20@gmail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$bxp2RMySR200WsC4hgTJFe/9xc04Jm2GGMLZMVxvxrFembz5u9nSW', NULL, '2021-03-28 06:44:27', '2021-03-28 06:44:27'),
(59, 'fine', NULL, 'fine@gmail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$GlwbBcPlQkEJbYYonDWk7eN8fYxoNa5JZ0EPEMGvtqXBlrkAKZzz2', 'vdhjaYh5NKpvjxsSbb66591DiBZ68cjS7OsJiOxPsfRiQDOfekAPbdiT8PR7', '2021-04-03 06:59:34', '2021-04-03 07:27:13'),
(60, 'DonaldPen', 'DonaldPen', 'orexova.olaga@mail.com', NULL, 'Customer', 'Activated', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jd9qd@42ioZ', NULL, '2021-04-07 20:20:00', '2021-04-09 18:33:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=682;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
