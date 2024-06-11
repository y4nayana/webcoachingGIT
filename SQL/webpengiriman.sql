-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 11:43 AM
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
-- Database: `webpengiriman`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'User', 'Regular User'),
(2, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`, `id`) VALUES
(1, 3, 1),
(1, 4, 4),
(2, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'FSsultan', 1, '2024-05-11 08:49:49', 0),
(2, '::1', 'FSsultan', 2, '2024-05-11 08:59:29', 0),
(3, '::1', 'fssultan39@gmail.com', 2, '2024-05-11 09:00:24', 1),
(4, '::1', 'fssultan39@gmail.com', 2, '2024-05-11 09:02:40', 1),
(5, '::1', 'krisna@1.com', 3, '2024-05-11 09:09:50', 1),
(6, '::1', 'fssultan39@gmail.com', 2, '2024-05-11 09:38:48', 1),
(7, '::1', 'fssultan39@gmail.com', 2, '2024-05-11 10:41:30', 1),
(8, '::1', 'FSsultan', NULL, '2024-05-11 13:02:28', 0),
(9, '::1', 'fssultan39@gmail.com', 2, '2024-05-11 13:04:21', 1),
(10, '::1', 'fssultan39@gmail.com', 2, '2024-05-11 13:08:14', 1),
(11, '::1', 'fssultan39@gmail.com', 2, '2024-05-12 10:36:42', 1),
(12, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 03:20:30', 1),
(13, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 15:24:10', 1),
(14, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 15:25:48', 1),
(15, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 15:30:13', 1),
(16, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 15:32:47', 1),
(17, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 15:38:50', 1),
(18, '::1', 'krisna@1.com', 3, '2024-05-13 15:44:16', 1),
(19, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 15:49:41', 1),
(20, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 15:52:22', 1),
(21, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 16:01:44', 1),
(22, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 16:07:28', 1),
(23, '::1', 'Krisna', NULL, '2024-05-13 16:41:37', 0),
(24, '::1', 'krisna@1.com', 3, '2024-05-13 16:41:46', 1),
(25, '::1', 'krisna@1.com', 3, '2024-05-13 16:46:00', 1),
(26, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 16:48:31', 1),
(27, '::1', 'krisna@1.com', 3, '2024-05-13 17:15:52', 1),
(28, '::1', 'fssultan39@gmail.com', 2, '2024-05-13 17:17:03', 1),
(29, '::1', 'krisna@1.com', 3, '2024-05-14 07:43:28', 1),
(30, '::1', 'fssultan39@gmail.com', 2, '2024-05-14 07:45:37', 1),
(31, '::1', 'krisna@1.com', 3, '2024-05-14 07:50:58', 1),
(32, '::1', 'fssultan39@gmail.com', 2, '2024-05-14 07:59:07', 1),
(33, '::1', 'krisna@1.com', 3, '2024-05-19 09:12:03', 1),
(34, '::1', 'fssultan39@gmail.com', 2, '2024-05-19 09:26:09', 1),
(35, '::1', 'fssultan39@gmail.com', 2, '2024-05-26 14:03:53', 1),
(36, '::1', 'manurfau@gmail.com', 4, '2024-05-26 14:06:51', 1),
(37, '::1', 'manurfau@gmail.com', 4, '2024-05-26 14:20:48', 1),
(38, '::1', 'misteriseng@gmail.com', 5, '2024-05-26 14:23:01', 1),
(39, '::1', 'misteriseng@gmail.com', 5, '2024-05-26 14:25:13', 1),
(40, '::1', 'manurfau@gmail.com', 4, '2024-05-26 14:27:14', 1),
(41, '::1', 'misteriseng@gmail.com', 5, '2024-05-26 14:27:42', 1),
(42, '::1', 'manurfau@gmail.com', 4, '2024-05-26 14:29:11', 1),
(43, '::1', 'misteriseng@gmail.com', 5, '2024-05-26 14:29:30', 1),
(44, '::1', 'misteri', NULL, '2024-06-07 02:51:03', 0),
(45, '::1', 'misteri', NULL, '2024-06-07 02:51:42', 0),
(46, '::1', 'misteri', NULL, '2024-06-07 02:51:57', 0),
(47, '::1', 'misteri', NULL, '2024-06-07 02:52:09', 0),
(48, '::1', 'misteriseng@gmail.com', 5, '2024-06-07 02:52:21', 1),
(49, '::1', 'misteriseng@gmail.com', 5, '2024-06-07 02:52:48', 1),
(50, '::1', 'misteri', NULL, '2024-06-08 04:46:32', 0),
(51, '::1', 'manurfau@gmail.com', 4, '2024-06-08 04:47:09', 1),
(52, '::1', 'manurfau@gmail.com', 4, '2024-06-08 05:39:23', 1),
(53, '::1', 'misteriseng@gmail.com', 5, '2024-06-08 06:58:49', 1),
(54, '::1', 'manurfau@gmail.com', 4, '2024-06-08 09:01:37', 1),
(55, '::1', 'misteriseng@gmail.com', 5, '2024-06-08 13:40:41', 1),
(56, '::1', 'manurfau@gmail.com', 4, '2024-06-08 17:07:14', 1),
(57, '::1', 'manurfau@gmail.com', 4, '2024-06-09 03:19:19', 1),
(58, '::1', 'misteriseng@gmail.com', 5, '2024-06-09 03:41:51', 1),
(59, '::1', 'manurfau@gmail.com', 4, '2024-06-09 03:56:57', 1),
(60, '::1', 'misteri', NULL, '2024-06-11 06:29:16', 0),
(61, '::1', 'misteri', NULL, '2024-06-11 06:29:24', 0),
(62, '::1', 'misteri', NULL, '2024-06-11 06:29:31', 0),
(63, '::1', 'misteriseng@gmail.com', 5, '2024-06-11 06:29:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Manage All User'),
(2, 'manage-profile', 'manage user\'s profile'),
(3, 'manage-user', 'Manage All User'),
(4, 'manage-profile', 'manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-05-07-084313', 'App\\Database\\Migrations\\Schedule', 'default', 'App', 1715072478, 1),
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1715413517, 2),
(3, '2024-05-24-193017', 'App\\Database\\Migrations\\Pengiriman', 'default', 'App', 1716732183, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `asal_kota` varchar(255) NOT NULL,
  `tujuan_kota` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `nama`, `email`, `deskripsi`, `tanggal`, `asal_kota`, `tujuan_kota`, `created_at`, `updated_at`) VALUES
(1, 'Maharani', 'manurfau@gmail.com', 'Alat Kebersihan', '2024-03-24', 'Cikampek', 'Badung', '2024-05-26 21:21:30', '2024-05-26 21:21:30'),
(2, 'Salma', 'salma@gmail.com', 'Perkakas', '2024-06-22', 'Aceh', 'Bandung', '2024-06-08 17:17:49', '2024-06-08 17:17:49'),
(3, 'keisha', 'uwak@gmail.com', 'Frame Foto', '2021-05-27', 'Riau', 'Padang', '2024-06-08 17:19:00', '2024-06-08 17:19:00'),
(4, 'Krisna udayana', 'krisna@1.com', 'Meja', '2024-07-06', '17', '23', '2024-06-09 00:41:46', '2024-06-09 00:41:46'),
(5, 'ajsbciub', 'icqbiub@a.com', 'iuwfwuibfi', '2024-06-07', '1', '18', '2024-06-09 00:44:03', '2024-06-09 00:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'krisna@1.com', 'Krisna', '$2y$10$zdrG.l97EnqnwM1NOHZ0AuestZL7uYN4ZkfBJSU4FoBMKg49SDifK', NULL, NULL, NULL, '96a836652c784bb17d58ef8010f1d54a', NULL, NULL, 1, 0, '2024-05-11 09:04:54', '2024-05-11 09:04:54', NULL),
(4, 'manurfau@gmail.com', 'manurfau', '$2y$10$Qv8RBBsI8TMifRuUCLbRBeKk63BKNMBz93MgMB822QxZNytvyHw4e', NULL, NULL, NULL, '40f29e70dc758981a9337f925df5734f', NULL, NULL, 1, 0, '2024-05-26 14:04:45', '2024-05-26 14:04:45', NULL),
(5, 'misteriseng@gmail.com', 'misteri', '$2y$10$mkXUnfYXZ.ZeSM.wx/3j.eRKSoMiXwHRG1l7WyChtrUqM9T/RKHFy', NULL, NULL, NULL, '6b9d7fa1748e06a1a9932c3fd585b7e6', NULL, NULL, 1, 0, '2024-05-26 14:22:30', '2024-05-26 14:22:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
