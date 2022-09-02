-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 02, 2022 at 06:00 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Online_Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'لبنیات', 'labaniat.png', '2022-07-22 18:35:32', '2022-07-22 18:35:32'),
(2, 'خشکبار', 'khoshkbar.png', '2022-07-22 18:35:32', '2022-07-22 18:35:32'),
(3, 'پروتئینی', 'protein.png', '2022-07-22 18:35:32', '2022-07-22 18:35:32'),
(4, 'شوینده و بهداشتی', 'shooyande.png', '2022-07-22 18:35:32', '2022-07-22 18:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'مشهد'),
(2, 'تهران'),
(3, 'قوچان'),
(4, 'تبریز'),
(5, 'اصفهان'),
(6, 'ساری');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'عالی بود', '2022-08-12 08:34:34', '2022-08-12 08:34:34'),
(2, 2, 1, 'بنظرم یکم چرب بود اما درکل خوبه و قیمتش توی شگفت‌انگیز خیلی خوب بود', '2022-08-12 08:34:34', '2022-08-12 08:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `url`) VALUES
(1, 1, 'img/products/1.jpeg'),
(2, 2, 'img/products/2.jpeg'),
(3, 3, 'img/products/3.jpeg'),
(4, 3, 'img/products/3-2.jpeg'),
(5, 4, 'img/products/4.jpeg'),
(6, 4, 'img/products/4-2.jpeg'),
(7, 5, 'img/products/5.jpeg'),
(8, 6, 'img/products/6.jpeg'),
(9, 6, 'img/products/6-2.jpeg'),
(10, 6, 'img/products/6-3.jpeg'),
(11, 7, 'img/products/7.jpeg'),
(12, 8, 'img/products/8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `value` json NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `product_id`, `title`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'رنگ', '[\"آبی\", \"سبز\", \"مشکی\"]', '2022-07-18 08:25:53', '2022-07-18 08:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `price_off` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `price_off`, `category_id`, `description`, `count`, `created_at`, `updated_at`) VALUES
(1, 'شیر بادام غیر لبنی نیچر لین - 1 لیتر', '81000', '78000', 1, 'ارزش غذایی در هر ۲۴۰ میلی لیتر انرژی : ۹۱ کیلو کالری قند : ۸.۴ گرم چربی : ۴.۸ گرم نمک : ۰.۲۹ گرم اسید های چرب ترانس : ۰ گرم بدون قند (شیرین شده با قند خرما) غیر لبنی بدون شکر افزوده (با قند خرما) کم چرب کم نمک مناسب برای دیابتی ها منبع خوب کلیسم منبع خوب فیبر بدون مواد نگهدارنده تهیه شده از بادام طبیعی شیرین شده با قند خرما منبع غنی فیبر و پروتئین مناسب برای گیاه خواران حجم ۱ لیتر مدت ماندگاری: ۹ ماه کالری: ۳۸ چربی: ۳% قند طبیعی بادام : ۴% اسیدهای چرب تراس واشباع: ۰% کلسترول :۰% فیبر: ۲% کلسیم : ۳۰% سدیم : ۲', 20, '2022-07-20 09:47:00', '2022-07-20 09:47:00'),
(2, 'پنیر سفید ایرانی میهن - 400 گرم', '36000', '', 1, '', 100, '2022-07-20 09:47:00', '2022-07-20 09:47:00'),
(3, 'پنیر پنج ستاره آمل کم چرب - 400 گرم', '45000', '39500', 1, 'شماره پروانه بهداشت: ۴۹/۱۱۶۵۹\r\nروش نگهداری: یخچال\r\nشکل ماده غذایی: قالبی', 56, '2022-07-20 09:53:31', '2022-07-20 09:53:31'),
(4, 'پنير فتا پروبيوتيک کم چرب کم نمک هراز - 750 گرم', '79000', '', 1, 'پنیر باکیفیت کم‌چرب قالبی', 23, '2022-07-20 09:53:31', '2022-07-20 09:53:31'),
(5, 'خرمای مضافتی بم نقره ای ساغر - 600 گرم', '76000', '48500', 2, '', 60, '2022-07-20 10:02:36', '2022-07-20 10:02:36'),
(6, 'انجیر خشک چاپار مقدار 400 گرم', '150000', '', 2, '', 29, '2022-07-20 10:02:36', '2022-07-20 10:02:36'),
(7, 'مخلوط میوه خشک مانژن - 150 گرم', '85000', '50000', 2, 'این محصول ارگانیک می باشد و به شماره پروانه بهداشت ۹۹۰۷', 20, '2022-07-20 10:08:06', '2022-07-20 10:08:06'),
(8, 'مویز اعلاء بدون هسته زرخواه - 350 گرم', '93000', '', 2, 'این محصول ارگانیک می باشد و به شماره پروانه بهداشت 9797', 36, '2022-07-20 10:08:06', '2022-07-20 10:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `user_id`, `product_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 4, '2022-09-02 05:59:51', '2022-09-02 05:59:51'),
(2, 2, 1, 5, '2022-09-02 05:59:51', '2022-09-02 05:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `mobile_number` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `role` varchar(1) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile_number`, `email`, `user_name`, `password`, `city`, `address`, `role`, `created_at`, `updated_at`) VALUES
(1, 'مریم بنه', '09151414141', 'maryamboneh@gmail.com', 'maryamboneh', '123456', 'مشهد', ' مشهد میدان یازدهم کوچه بیست و هشتم پلاک ۷۷', '0', '2022-08-12 08:53:08', '2022-08-12 08:53:08'),
(2, 'طاهره حیدری', '09157777777', 'taheraw@gmail.com', 'tahereh', '123456', 'تهران', 'تهران شمیرانات کوچه سوم پلاک ۹', '1', '2022-08-12 08:53:08', '2022-08-12 08:53:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
