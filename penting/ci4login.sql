-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2021 pada 16.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'administrator'),
(2, 'user', 'regular user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(2, '::1', 'andiana.menur@gmail.com', 3, '2020-12-08 09:05:02', 1),
(3, '::1', 'fayiawaluddin', NULL, '2020-12-08 09:05:25', 0),
(4, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-08 09:05:33', 1),
(5, '::1', 'andiana.menur@gmail.com', 3, '2020-12-08 21:26:45', 1),
(6, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-09 07:48:12', 1),
(7, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-09 08:02:44', 1),
(8, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-09 08:05:51', 1),
(9, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-09 21:07:13', 1),
(10, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-10 00:15:47', 1),
(11, '::1', 'andiana.menur@gmail.com', 3, '2020-12-10 20:08:22', 1),
(12, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-11 00:27:23', 1),
(13, '::1', 'andiana.menur@gmail.com', 3, '2020-12-12 05:04:59', 1),
(14, '::1', 'andiana.menur@gmail.com', 3, '2020-12-12 05:43:44', 1),
(15, '::1', 'andiana.menur@gmail.com', 3, '2020-12-13 22:40:10', 1),
(16, '::1', 'andiana.menur@gmail.com', 3, '2020-12-13 22:42:57', 1),
(17, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-14 02:25:21', 1),
(18, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-14 02:45:03', 1),
(19, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-16 00:52:42', 1),
(20, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-16 00:57:59', 1),
(21, '::1', 'andiana.menur@gmail.com', 3, '2020-12-16 07:02:51', 1),
(22, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-17 07:08:54', 1),
(23, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-17 07:30:14', 1),
(24, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-19 00:59:30', 1),
(25, '::1', 'andiana.menur@gmail.com', 3, '2020-12-19 05:20:54', 1),
(26, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-20 06:33:21', 1),
(27, '::1', 'andiana.menur@gmail.com', 3, '2020-12-20 09:44:45', 1),
(28, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-21 01:33:55', 1),
(29, '::1', 'andiana.menur@gmail.com', 3, '2020-12-21 10:29:08', 1),
(30, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-22 02:55:05', 1),
(31, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-22 04:33:15', 1),
(32, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-23 00:38:14', 1),
(33, '::1', 'andiana.menur@gmail.com', 3, '2020-12-23 01:49:20', 1),
(34, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-24 00:41:13', 1),
(35, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-24 05:04:28', 1),
(36, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-24 05:05:56', 1),
(37, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-24 21:13:28', 1),
(38, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-25 23:12:19', 1),
(39, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-26 00:08:02', 1),
(40, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-26 04:48:56', 1),
(41, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-27 03:31:42', 1),
(42, '::1', 'andiana.menur@gmail.com', 3, '2020-12-27 08:08:38', 1),
(43, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-29 05:50:22', 1),
(44, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-29 21:50:31', 1),
(45, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-30 00:14:16', 1),
(46, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-30 22:02:52', 1),
(47, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 01:22:58', 1),
(48, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 01:45:08', 1),
(49, '::1', 'zakiawaluddin@gmail.com', 1, '2020-12-31 05:25:29', 1),
(50, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 05:28:28', 1),
(51, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 05:41:20', 1),
(52, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 05:44:10', 1),
(53, '::1', 'andiana.menur@gmail.com', 3, '2020-12-31 05:49:07', 1),
(54, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 05:51:52', 1),
(55, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 05:53:12', 1),
(56, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 05:54:48', 1),
(57, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 05:57:06', 1),
(58, '::1', 'andiana.menur@gmail.com', 3, '2020-12-31 05:57:47', 1),
(59, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 06:13:50', 1),
(60, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 06:15:29', 1),
(61, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 06:17:15', 1),
(62, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 06:18:42', 1),
(63, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 06:23:36', 1),
(64, '::1', 'haydirawaludin@gmail.com', 4, '2020-12-31 08:17:19', 1),
(65, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-02 03:55:31', 1),
(66, '::1', 'fahmi123@gmail.com', 5, '2021-01-02 04:05:17', 1),
(67, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-02 04:30:12', 1),
(68, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-02 05:32:26', 1),
(69, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-02 05:59:03', 1),
(70, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-06 01:06:19', 1),
(71, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-06 02:41:45', 1),
(72, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-06 03:34:03', 1),
(73, '::1', 'haydirawaludin@gmail.com', 4, '2021-01-06 03:34:37', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage user', 'manage user'),
(2, 'manage profile', 'manage profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jbarang`
--

CREATE TABLE `jbarang` (
  `id_jual` smallint(6) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` smallint(6) NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jbarang`
--

INSERT INTO `jbarang` (`id_jual`, `nama_barang`, `jumlah_barang`, `hargabarang`, `tanggal_keluar`) VALUES
(6, 'apel', 1000, 500, '2020-12-30'),
(15, 'rawon', 20, 10000, '2021-01-06');

--
-- Trigger `jbarang`
--
DELIMITER $$
CREATE TRIGGER `update` AFTER INSERT ON `jbarang` FOR EACH ROW BEGIN
UPDATE sbarang set jumlah_barang = jumlah_barang - NEW.jumlah_barang WHERE nama_barang = NEW.nama_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1607438600, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sbarang`
--

CREATE TABLE `sbarang` (
  `id_stok` smallint(6) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` smallint(6) NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sbarang`
--

INSERT INTO `sbarang` (`id_stok`, `nama_barang`, `jumlah_barang`, `hargabarang`, `tanggal_masuk`) VALUES
(2, 'soto daging', 15, 50000, '2020-12-24'),
(28, 'susu kambing', 100, 9000, '2020-12-26'),
(30, 'jeruk nipis', 100, 1000, '2020-12-29'),
(31, 'filet', 100, 3000, '2020-12-23'),
(33, 'apel', 1000, 60, '2020-12-31'),
(34, 'es kopi', 1000, 90000, '2021-01-15'),
(35, 'susu kambing', 10, 1000, '2021-01-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'undraw_profile.svg',
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `userimage`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zakiawaluddin@gmail.com', 'fayiawaluddin', NULL, 'undraw_profile.svg', '$2y$10$yM9K8WtTrOz5AC6ZUbOqKudwpcti9W4bHkD/aQRmpZIZRNx5yh9Me', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-08 08:45:46', '2020-12-08 08:45:46', NULL),
(3, 'andiana.menur@gmail.com', 'andiana', NULL, 'undraw_profile.svg', '$2y$10$J9ItkNx/PWPoDWXlBaeI7OOYcQDri5X3jGWzgY9N.ljv33q/7UUuC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-08 09:04:54', '2020-12-08 09:04:54', NULL),
(4, 'haydirawaludin@gmail.com', 'haydir', NULL, 'undraw_profile.svg', '$2y$10$VC3dWVy1vTl3s/1Y5CoHbuNiDMUE1Z21XdiW.H3iQoqLqxfIsUS.S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-16 00:54:28', '2020-12-16 00:54:28', NULL),
(5, 'fahmi123@gmail.com', 'fahmi', NULL, 'undraw_profile.svg', '$2y$10$V1n7PB.GpZJQxTrHlu5La.MOhalaLVpJDSW6CqdPuH2mTmE6dT1mS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-02 04:04:33', '2021-01-02 04:04:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `jbarang`
--
ALTER TABLE `jbarang`
  ADD PRIMARY KEY (`id_jual`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sbarang`
--
ALTER TABLE `sbarang`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jbarang`
--
ALTER TABLE `jbarang`
  MODIFY `id_jual` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sbarang`
--
ALTER TABLE `sbarang`
  MODIFY `id_stok` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
