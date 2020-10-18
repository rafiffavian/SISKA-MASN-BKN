-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 09:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siska`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infographs`
--

CREATE TABLE `infographs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infographs`
--

INSERT INTO `infographs` (`id`, `photo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'doctor1.jpg', 1, '2020-10-17 08:50:12', '2020-10-17 08:50:12'),
(2, 'Infografis-Kenaikan-Pangkat.jpg', 1, '2020-10-17 11:07:53', '2020-10-17 11:07:53'),
(3, 'info.PNG', 1, '2020-10-18 05:18:24', '2020-10-18 05:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_17_140137_create_photos_table', 2),
(5, '2020_10_17_140204_create_videos_table', 2),
(6, '2020_10_17_140239_create_news_table', 2),
(7, '2020_10_17_140331_create_infographs_table', 2),
(8, '2020_10_17_140457_create_motivations_table', 2),
(9, '2020_10_17_162451_add_photo_on_news_tables', 3),
(10, '2020_10_17_164247_update_content_on_news_tables', 4),
(11, '2020_10_17_170625_update_content_on_motivations_tables', 5);

-- --------------------------------------------------------

--
-- Table structure for table `motivations`
--

CREATE TABLE `motivations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motivations`
--

INSERT INTO `motivations` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tetap merendah', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab sapiente consequatur ullam? Molestiae tempore ipsum nam voluptates quidem omnis quaerat sequi? Natus libero minima, ipsum rem placeat dolor impedit cumque?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab sapiente consequatur ullam? Molestiae tempore ipsum nam voluptates quidem omnis quaerat sequi? Natus libero minima, ipsum rem placeat dolor impedit cumque?', 1, '2020-10-17 10:07:32', '2020-10-17 10:07:32'),
(2, 'The golden rules you need to know for a positive life', 'Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.', 1, '2020-10-17 10:55:24', '2020-10-17 10:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`, `photo`) VALUES
(1, 'Wabah Virus Corona', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis perferendis facilis cumque eaque veritatis commodi laborum enim ratione quam magnam temporibus! Inventore dolores nam rerum pariatur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis perferendis facilis cumque eaque veritatis commodi laborum enim ratione quam magnam temporibus! ', 1, '2020-10-17 09:52:30', '2020-10-17 09:52:30', 'IMG20190906162733.jpg'),
(2, 'Libur Telah Tiba!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis perferendis facilis cumque eaque veritatis commodi laborum enim ratione quam magnam temporibus! Inventore dolores nam rerum pariatur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis ', 1, '2020-10-17 11:04:37', '2020-10-17 11:04:37', 'news1.png'),
(3, 'BKN mengadakan rapat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis perferendis facilis cumque eaque veritatis commodi laborum enim ratione quam magnam temporibus! Inventore dolores nam rerum pariatur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis perferendis facilis cumque eaque veritatis commodi laborum enim ratione quam magnam temporibus!', 1, '2020-10-17 11:05:10', '2020-10-17 11:05:10', 'news2.jpg'),
(4, 'BKN mengadakan seminar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis perferendis facilis cumque eaque veritatis commodi laborum enim ratione quam magnam temporibus! Inventore dolores nam rerum pariatur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a, dolorum aperiam officiis perferendis facilis cumque eaque veritatis commodi laborum enim ratione quam magnam temporibus!', 1, '2020-10-17 11:05:26', '2020-10-17 11:05:26', 'news3.jpg');

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'doctor2.jpg', 1, '2020-10-17 08:47:45', '2020-10-17 08:47:45'),
(3, 'gambar1.jpg', 1, '2020-10-17 10:58:57', '2020-10-17 10:58:57'),
(4, 'gambar2.jpg', 1, '2020-10-17 10:59:05', '2020-10-17 10:59:05'),
(5, 'gambar3.jpg', 1, '2020-10-17 10:59:15', '2020-10-17 10:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafif', 'rafif@gmail.com', NULL, '$2y$10$NnobYvdecIxd1Qe9rtqUrOS05grdAKM1Wug3OHrsJsLwN5eEliuE6', NULL, '2020-10-17 04:40:13', '2020-10-17 04:40:13'),
(2, 'admin', 'admin@bkn.go.id', NULL, '$2y$10$8sLU9m1OD89nI4661U5OI.fdEr/V8eNjOL6gT9XtDZd9IJIbbY8FC', NULL, '2020-10-18 11:21:35', '2020-10-18 11:21:35'),
(3, 'test', 'test@gmail.com', NULL, '$2y$10$ud02RxXOB6pk8NCrBeZstuf5eggXvrLiudNGA4A35o4rd.2T0AKyO', NULL, '2020-10-18 11:26:12', '2020-10-18 11:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Untitled 2.mp4', 1, '2020-10-17 09:02:27', '2020-10-17 09:02:27'),
(2, 'testing.mp4', 1, '2020-10-18 00:23:49', '2020-10-18 00:23:49'),
(3, 'Untitled 2.mp4', 1, '2020-10-18 00:25:27', '2020-10-18 00:25:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infographs`
--
ALTER TABLE `infographs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motivations`
--
ALTER TABLE `motivations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infographs`
--
ALTER TABLE `infographs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `motivations`
--
ALTER TABLE `motivations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
