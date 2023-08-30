-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `al_rohmah`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_code` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cover` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'in stock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_code`, `title`, `cover`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'A001 - 001', 'Bright An English (2)', 'Bright An English-1690961078.jpg', 'bright-an-english', 'not available', '2023-08-02 00:24:39', '2023-08-02 09:38:29', NULL),
(16, 'A001 - 002', 'Ilmu Pengetahuan Sosial', 'Ilmu Pengetahuan Sosial-1690961225.jpg', 'ilmu-pengetahuan-sosial', 'in stock', '2023-08-02 00:27:05', '2023-08-02 18:29:52', NULL),
(17, 'A001 - 003', 'Bright An English (1)', 'Bright An English (1)-1690961295.jpg', 'bright-an-english-1', 'in stock', '2023-08-02 00:28:15', '2023-08-02 09:38:43', NULL),
(18, 'A001 - 004', 'Mahir Berbahasa Indonesia', 'Mahir Berbahasa Indonesia-1690961322.jpg', 'mahir-berbahasa-indonesia', 'in stock', '2023-08-02 00:28:42', '2023-08-02 17:23:59', NULL),
(19, 'A001 - 005', 'Semangat Mendalami Fikih', 'Semangat Mendalami Fikih-1690961348.jpg', 'semangat-mendalami-fikih', 'in stock', '2023-08-02 00:29:08', '2023-08-02 00:29:08', NULL),
(20, 'A001 - 006', 'Pendidikan, Jasmani, Olahraga dan Kesehatan.', 'Pendidikan, Jasmani, Olahraga dan Kesehatan.-1690961385.jpg', 'pendidikan-jasmani-olahraga-dan-kesehatan', 'in stock', '2023-08-02 00:29:45', '2023-08-02 09:33:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'Sejarah', 'sejarah', '2023-08-01 06:33:42', '2023-08-01 06:37:31', NULL),
(16, 'Inggris', 'inggris', '2023-08-02 00:25:20', '2023-08-02 00:25:20', NULL),
(17, 'PJOK', 'pjok', '2023-08-02 00:25:29', '2023-08-02 00:25:29', NULL),
(18, 'Fikih', 'fikih', '2023-08-02 00:25:38', '2023-08-02 00:25:38', NULL),
(19, 'Bahasa Indonesia', 'bahasa-indonesia', '2023-08-02 00:26:06', '2023-08-02 00:26:06', NULL),
(20, 'IPS', 'ips', '2023-08-02 00:26:14', '2023-08-02 00:26:14', NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_26_005248_create_roles_table', 1),
(6, '2023_07_26_011310_add_role_id_column_to_users_table', 1),
(7, '2023_07_26_024351_create_categories_table', 2),
(8, '2023_07_26_024429_create_books_table', 2),
(9, '2023_07_26_024642_create_book_category_table', 2),
(10, '2023_07_26_025154_create_rent_logs_table', 3),
(11, '2023_07_28_225556_add_slug_column_to_categories_table', 4),
(12, '2023_07_28_230440_change_slug_column_into_nullable_to_categories_table', 5),
(13, '2023_07_28_233011_add_soft_delete_column_to_categories_table', 6),
(14, '2023_07_31_052657_add_slug_cover_column_to_books', 7),
(16, '2023_08_01_091612_add_soft_delete_to_books_table', 8),
(17, '2023_08_01_153637_add_slug_to_users_table', 9),
(18, '2023_08_01_164019_add_softdelete_to_users_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `rent_logs`
--

CREATE TABLE `rent_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_return_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent_logs`
--

INSERT INTO `rent_logs` (`id`, `user_id`, `book_id`, `rent_date`, `return_date`, `actual_return_date`, `created_at`, `updated_at`) VALUES
(9, 3, 16, '2023-08-03', '2023-08-06', '2023-08-03', '2023-08-02 18:22:54', '2023-08-02 18:23:04'),
(10, 3, 16, '2023-08-03', '2023-08-06', '2023-08-03', '2023-08-02 18:23:23', '2023-08-02 18:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `phone`, `address`, `status`, `created_at`, `updated_at`, `deleted_at`, `role_id`) VALUES
(1, 'admin', 'admin', '$2y$10$UceK7XVZ6sfzvIWnx.M.ZOXjIz3Kc0k.5hzXHoFL2.BgjcSaotOAO', '088220625662', 'Bandung Raya', 'active', NULL, NULL, NULL, 1),
(2, 'boba', 'boba', '$2y$10$UceK7XVZ6sfzvIWnx.M.ZOXjIz3Kc0k.5hzXHoFL2.BgjcSaotOAO', '08987840625', 'Bandung Timur', 'active', NULL, '2023-08-01 11:11:25', NULL, 2),
(3, 'Ihsan', 'ihsan', '$2y$10$UceK7XVZ6sfzvIWnx.M.ZOXjIz3Kc0k.5hzXHoFL2.BgjcSaotOAO', '098987281287', 'Bandung Selatan', 'active', NULL, '2023-08-01 09:34:12', NULL, 2),
(11, 'Wahyu', 'wahyu', '$2y$10$1yBP8v3O2LmwIZMNOXsMQeJ65W7n2GIftWgTRfV9B1v6u5HGzCRRO', '085668416366', 'Padang', 'active', '2023-07-28 04:19:06', '2023-08-02 17:04:49', NULL, 2),
(12, 'Arfan', 'arfan', '$2y$10$VHG/xB4v3xMo.nHOehCSlegeX1Reo281HrLeNRcbCCHjpBVBa4TUO', '823749234', 'Garut', 'inactive', '2023-07-28 07:36:09', '2023-08-01 09:28:43', NULL, 2),
(13, 'zazaza', 'zazaza', '$2y$10$ukbyzjdbfd2ec/pPJwyZqudjcSe.3.Pa9I9Gs4mNCzrorISc5hNay', '0987654321', 'zazaza', 'inactive', '2023-08-01 08:44:29', '2023-08-01 09:30:25', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_logs_user_id_foreign` (`user_id`),
  ADD KEY `rent_logs_book_id_foreign` (`book_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_logs`
--
ALTER TABLE `rent_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD CONSTRAINT `rent_logs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rent_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
