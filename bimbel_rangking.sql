-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2024 at 07:17 AM
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
-- Database: `bimbel_rangking`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'user', 'user'),
(2, 'administrator', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin5@gmail.com', 1, '2023-12-16 09:51:18', 1),
(2, '::1', 'admin5@gmail.com', 1, '2023-12-16 14:16:36', 1),
(3, '::1', 'admin5@gmail.com', 1, '2023-12-16 18:37:54', 1),
(4, '::1', 'admin5@gmail.com', 1, '2023-12-16 22:38:20', 1),
(5, '::1', 'test@admin.com', 2, '2023-12-21 03:32:18', 1),
(6, '::1', 'test@admin.com', 2, '2023-12-21 03:48:08', 1),
(7, '::1', 'test@admin.com', 2, '2023-12-21 03:50:40', 1),
(8, '::1', 'admin', NULL, '2023-12-21 04:28:02', 0),
(9, '::1', 'admin5@gmail.com', 1, '2023-12-21 04:28:09', 1),
(10, '::1', 'test@admin.com', 2, '2023-12-21 04:30:45', 1),
(11, '::1', 'test@admin.com', 2, '2023-12-21 04:32:55', 1),
(12, '::1', 'admin5@gmail.com', 1, '2023-12-21 04:36:35', 1),
(13, '::1', 'test@admin.com', 2, '2023-12-21 04:38:15', 1),
(14, '::1', 'admin5@gmail.com', 1, '2023-12-21 04:42:55', 1),
(15, '::1', 'admin5@gmail.com', 1, '2023-12-21 04:47:35', 1),
(16, '::1', 'test@admin.com', 2, '2023-12-21 04:47:51', 1),
(17, '::1', 'admin5@gmail.com', 1, '2023-12-21 04:55:01', 1),
(18, '::1', 'admin5@gmail.com', 1, '2023-12-21 04:59:28', 1),
(19, '::1', 'test@admin.com', 2, '2023-12-21 04:59:43', 1),
(20, '::1', 'test@admin.com', 2, '2023-12-21 05:03:51', 1),
(21, '::1', 'test@admin.com', 2, '2023-12-21 05:04:44', 1),
(22, '::1', 'admin5@gmail.com', 1, '2023-12-21 06:54:52', 1),
(23, '::1', 'admin', NULL, '2023-12-21 07:02:55', 0),
(24, '::1', 'admin5@gmail.com', 1, '2023-12-21 07:03:03', 1),
(25, '::1', 'admin5@gmail.com', 1, '2023-12-21 07:05:07', 1),
(26, '::1', 'admin5@gmail.com', 1, '2023-12-21 07:14:50', 1),
(27, '::1', 'test@admin.com', 2, '2023-12-21 07:15:16', 1),
(28, '::1', 'admin5@gmail.com', 1, '2023-12-21 07:16:03', 1),
(29, '::1', 'admin5@gmail.com', 1, '2023-12-21 17:34:11', 1),
(30, '::1', 'admin5@gmail.com', 1, '2023-12-21 17:34:40', 1),
(31, '::1', 'test@admin.com', 2, '2023-12-21 17:36:32', 1),
(32, '::1', 'admin5@gmail.com', 1, '2023-12-21 17:44:01', 1),
(33, '::1', 'admin5@gmail.com', 1, '2023-12-21 17:58:38', 1),
(34, '::1', 'admin5@gmail.com', 1, '2023-12-21 17:58:54', 1),
(35, '::1', 'test@admin.com', 2, '2023-12-21 17:59:08', 1),
(36, '::1', 'test@admin.com', 2, '2023-12-21 18:00:09', 1),
(37, '::1', 'test@admin.com', 2, '2023-12-21 18:04:56', 1),
(38, '::1', 'admin5@gmail.com', 1, '2023-12-21 18:05:17', 1),
(39, '::1', 'test@admin.com', 2, '2023-12-21 18:07:57', 1),
(40, '::1', 'admin5@gmail.com', 1, '2023-12-21 20:28:50', 1),
(41, '::1', 'admin5@gmail.com', 1, '2023-12-21 20:29:06', 1),
(42, '::1', 'test@admin.com', 2, '2023-12-21 20:29:28', 1),
(43, '::1', 'admin5@gmail.com', 1, '2023-12-21 20:34:11', 1),
(44, '::1', 'admin5@gmail.com', 1, '2023-12-21 22:49:25', 1),
(45, '::1', 'test@admin.com', 2, '2023-12-21 22:49:59', 1),
(46, '::1', 'test@admin.com', 2, '2023-12-21 22:53:45', 1),
(47, '::1', 'test@admin.com', 2, '2023-12-21 22:54:04', 1),
(48, '::1', 'admin5@gmail.com', 1, '2023-12-21 22:57:17', 1),
(49, '::1', 'admin5@gmail.com', 1, '2023-12-21 22:57:35', 1),
(50, '::1', 'test@admin.com', 2, '2023-12-21 22:58:18', 1),
(51, '::1', 'admin5@gmail.com', 1, '2023-12-21 23:30:46', 1),
(52, '::1', 'test@admin.com', 2, '2023-12-21 23:33:30', 1),
(53, '::1', 'admin lia', NULL, '2023-12-21 23:47:42', 0),
(54, '::1', 'test@admin.com', 2, '2023-12-22 04:28:43', 1),
(55, '::1', 'admin5@gmail.com', 1, '2023-12-22 04:41:26', 1),
(56, '::1', 'test@admin.com', 2, '2023-12-22 04:46:47', 1),
(57, '::1', 'admin5@gmail.com', 1, '2023-12-22 04:48:32', 1),
(58, '::1', 'admin5@gmail.com', 1, '2023-12-22 04:50:23', 1),
(59, '::1', 'admin5@gmail.com', 1, '2023-12-22 04:56:34', 1),
(60, '::1', 'test@admin.com', 2, '2023-12-22 04:58:12', 1),
(61, '::1', 'test@admin.com', 2, '2023-12-22 05:52:16', 1),
(62, '::1', 'admin5@gmail.com', 1, '2023-12-22 05:53:13', 1),
(63, '::1', 'admin5@gmail.com', 1, '2023-12-22 05:55:17', 1),
(64, '::1', 'test@admin.com', 2, '2023-12-22 09:11:48', 1),
(65, '::1', 'test@admin.com', 2, '2023-12-22 09:57:12', 1),
(66, '::1', 'test@admin.com', 2, '2023-12-22 10:02:27', 1),
(67, '::1', 'admin5@gmail.com', 1, '2023-12-22 15:49:51', 1),
(68, '::1', 'admin5@gmail.com', 1, '2023-12-22 15:58:15', 1),
(69, '::1', 'admin5@gmail.com', 1, '2023-12-22 17:00:22', 1),
(70, '::1', 'admin5@gmail.com', 1, '2023-12-22 17:51:25', 1),
(71, '::1', 'test@admin.com', 2, '2023-12-22 19:16:26', 1),
(72, '::1', 'admin5@gmail.com', 1, '2023-12-22 19:42:38', 1),
(73, '::1', 'test@admin.com', 2, '2023-12-22 20:49:57', 1),
(74, '::1', 'admin5@gmail.com', 1, '2023-12-22 20:52:09', 1),
(75, '::1', 'test@admin.com', 2, '2023-12-22 21:11:56', 1),
(76, '::1', 'admin5@gmail.com', 1, '2023-12-22 21:12:07', 1),
(77, '::1', 'test@admin.com', 2, '2023-12-22 21:13:54', 1),
(78, '::1', 'test@admin.com', 2, '2023-12-22 21:14:29', 1),
(79, '::1', 'admin5@gmail.com', 1, '2023-12-22 21:15:28', 1),
(80, '::1', 'admin5@gmail.com', 1, '2023-12-22 21:17:33', 1),
(81, '::1', 'test@admin.com', 2, '2023-12-23 00:31:01', 1),
(82, '::1', 'admin5@gmail.com', 1, '2023-12-23 01:08:54', 1),
(83, '::1', 'admin5@gmail.com', 1, '2023-12-23 01:26:34', 1),
(84, '::1', 'test@admin.com', 2, '2023-12-23 01:26:50', 1),
(85, '::1', 'test@admin.com', 2, '2023-12-23 01:48:44', 1),
(86, '::1', 'admin5@gmail.com', 1, '2023-12-23 02:27:28', 1),
(87, '::1', 'test@admin.com', 2, '2023-12-23 02:27:38', 1),
(88, '::1', 'test.admin@gmail.com', 3, '2023-12-23 02:28:14', 1),
(89, '::1', 'test.admin@gmail.com', 3, '2023-12-23 02:28:31', 1),
(90, '::1', 'admin5@gmail.com', 1, '2023-12-23 02:30:06', 1),
(91, '::1', 'admin5@gmail.com', 1, '2023-12-23 02:30:51', 1),
(92, '::1', 'admin5@gmail.com', 1, '2023-12-23 03:44:56', 1),
(93, '::1', 'admin5@gmail.com', 1, '2023-12-23 03:47:35', 1),
(94, '::1', 'test@admin.com', 2, '2023-12-23 03:48:19', 1),
(95, '::1', 'test@admin.com', 2, '2023-12-23 06:08:40', 1),
(96, '::1', 'test@admin.com', 2, '2023-12-23 07:29:40', 1),
(97, '::1', 'test@admin.com', 2, '2023-12-24 00:15:09', 1),
(98, '::1', 'test@admin.com', 2, '2023-12-24 00:22:30', 1),
(99, '::1', 'admin5@gmail.com', 1, '2023-12-24 00:26:01', 1),
(100, '::1', 'test@admin.com', 2, '2023-12-24 01:12:30', 1),
(101, '::1', 'test@admin.com', 2, '2023-12-24 01:13:35', 1),
(102, '::1', 'test@admin.com', 2, '2023-12-24 03:10:58', 1),
(103, '::1', 'admin5@gmail.com', 1, '2023-12-24 03:11:49', 1),
(104, '::1', 'admin5@gmail.com', 1, '2023-12-24 03:12:25', 1),
(105, '::1', 'admin5@gmail.com', 1, '2023-12-24 03:51:11', 1),
(106, '::1', 'test@admin.com', 2, '2023-12-24 05:25:11', 1),
(107, '::1', 'admin5@gmail.com', 1, '2023-12-24 05:29:11', 1),
(108, '::1', 'test@admin.com', 2, '2023-12-24 05:31:34', 1),
(109, '::1', 'test@admin.com', 2, '2023-12-24 05:32:50', 1),
(110, '::1', 'test@admin.com', 2, '2023-12-24 05:38:00', 1),
(111, '::1', 'test@admin.com', 2, '2023-12-24 05:59:38', 1),
(112, '::1', 'test@admin.com', 2, '2023-12-24 06:00:09', 1),
(113, '::1', 'admin5@gmail.com', 1, '2023-12-24 15:48:30', 1),
(114, '::1', 'test@admin.com', 2, '2023-12-24 15:49:31', 1),
(115, '::1', 'test@admin.com', 2, '2023-12-24 18:44:01', 1),
(116, '::1', 'admin5@gmail.com', 1, '2023-12-24 18:45:56', 1),
(117, '::1', 'admin5@gmail.com', 1, '2024-01-15 00:03:54', 1),
(118, '::1', 'admin5@gmail.com', 1, '2024-01-15 00:05:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `id_order` int(100) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `tipe_bimbel` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_mentor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama_lengkap`, `alamat`, `email`, `no_hp`, `asal_sekolah`, `nominal`, `token`, `id_order`, `alias`, `tipe_bimbel`, `created_at`, `updated_at`, `id_mentor`) VALUES
(1, 'Faykar', 'Semarang', 'admin5@gmail.com', '081544', 'SMK Negeri 2 Pekalongan', 1000000, 'cc590266-dbbe-4ec0-992f-a5fc18e81d6a', 1703465221, 'faykar', 'Regular', '2023-12-24 18:47:03', '2023-12-24 18:47:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pelajaran` varchar(50) NOT NULL,
  `jampel` time NOT NULL,
  `foto_mentor` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `alias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `nama`, `pelajaran`, `jampel`, `foto_mentor`, `materi`, `alias`) VALUES
(1, 'Yoga', 'Pemprogman Web II', '09:48:00', '1703465196_6fb0dab776077ed6438d.jpeg', 'Memperdalam Codeignater 4', 'yoga'),
(2, 'Misbah Hanif', 'Metodelogi Penelitian', '13:09:00', '1705298675_cd2e2414a6aeaa789d5b.png', 'Mempelajari Scpsi', 'faykar'),
(3, 'Steaven Julius', 'E-Commerce', '13:09:00', '1705298792_64e536f8919343fbd62f.png', 'Membauat Tokopedia\r\n', 'steaven-julius');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1698905495, 1);

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `pesan` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `foto_siswa` varchar(255) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `pesan`, `rating`, `foto_siswa`, `id_daftar`, `created_at`, `updated_at`) VALUES
(1, 'Pertama Tidak bisa Matematika eh Setelah les bisa', 'Sangat Baik', '1703465240_f79958276ef8c1c98cc5.jpeg', 1, '2023-12-24 18:47:20', '2023-12-24 18:47:20');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin5@gmail.com', 'admin', '$2y$10$oV2B55h1ku4nm0wON/UriOfofMj7nY.2BfnCLzPp96/JdKmmLYKtC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-11-02 01:18:22', '2023-11-02 01:18:22', NULL),
(2, 'test@admin.com', 'user', '$2y$10$e4oPfuHH3F0zZN6S9DurT.gMgMOz7bB1u5rFcYCiGJbj7OJYv8rQq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-21 03:32:10', '2023-12-21 03:32:10', NULL);

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
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_mentor` (`id_mentor`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_daftar` (`id_daftar`);

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
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id`);

--
-- Constraints for table `testi`
--
ALTER TABLE `testi`
  ADD CONSTRAINT `testi_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `daftar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
