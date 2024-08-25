-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Agu 2024 pada 03.21
-- Versi server: 8.0.30
-- Versi PHP: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperantara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agent`
--

CREATE TABLE `agent` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_guide`
--

CREATE TABLE `download_guide` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `join_agent`
--

CREATE TABLE `join_agent` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_18_072902_create_property_table', 1),
(6, '2024_08_19_065731_create_agent_table', 1),
(7, '2024_08_19_070312_create_blog_table', 1),
(8, '2024_08_19_090459_create_sell_property_table', 1),
(9, '2024_08_19_090620_create_join_agent_table', 1),
(10, '2024_08_19_090658_create_download_guide_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `property`
--

CREATE TABLE `property` (
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` json NOT NULL,
  `property_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lot_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lot_dimensions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baths` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `veranda_balcony` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_built` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `living_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dining_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathroom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gym_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` json NOT NULL,
  `link_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `property`
--

INSERT INTO `property` (`property_id`, `image`, `property_title`, `property_price`, `discount`, `property_tag`, `property_category`, `featured`, `address`, `description`, `lot_area`, `home_area`, `lot_dimensions`, `rooms`, `beds`, `baths`, `floors`, `veranda_balcony`, `year_built`, `property_status`, `certificate`, `living_room`, `garage`, `dining_area`, `bedroom`, `bathroom`, `gym_area`, `garden`, `parking`, `benefits`, `link_location`, `created_at`, `updated_at`) VALUES
('ID0001', '[\"public/property/image/2DEE59JBkUAEv0ZjY4njFNKUcogYn1b4l9NJTBmX.jpg\", \"public/property/image/4S40eRpmOAOqQ0jjyXKQvxPLHTXlMSyeentJJu1D.jpg\", \"public/property/image/Kn3DMrir3t4ayXT9Dq5d3mgxa3qEL9kbEqqSbEDa.jpg\", \"public/property/image/XU1YCXw7JlE0RWdgnSIQf7BkDJQntVarZmq4aF8V.jpg\", \"public/property/image/3YpH4A3BzpUUpQoG4Ltwm1dwowco0JM5Lq9yoDQD.jpg\"]', 'Kavling premium Cluster Forestville', '3300000000', NULL, 'Land', 'Land', 'Yes', 'Grand City', 'Miliki kesempatan untuk membangun rumah impian Anda di kavling premium ini, yang terletak di posisi hook, memberikan Anda ruang lebih untuk berkreasi dengan desain rumah yang unik dan optimal. Terletak di kawasan eksklusif Cluster Forestville, Grand City Balikpapan, lingkungan yang asri dan hijau ini menawarkan kenyamanan dan privasi bagi keluarga Anda. Jangan lewatkan kesempatan emas ini untuk memiliki properti di salah satu area paling bergengsi di Balikpapan!', '325', '-', '-', '-', '-', '-', '-', '-', '-', 'For Sale', 'SHGB', '-', '-', '-', '-', '-', '-', '-', '-', '[\"Hook Placement\", null, null, null, null, \"Near The City\", null, null, null, null, null, null]', 'https://www.instagram.com/p/C8uHibpPFBq/?img_index=1', '2024-08-23 05:06:11', '2024-08-23 16:09:19'),
('ID0002', '[\"public/property/image/zpOaiA7KQroUpMF823xjFePlOMp1EVgrLtOrMdXn.jpg\", \"public/property/image/bDUe2RfUn18UyfngnVHvPYX4Q6CvA9H4zmxRlTyb.jpg\", \"public/property/image/gBxhytN28whADPebHXg7yxH0krahx0xHPpEDJSe3.jpg\", \"public/property/image/SxWxxzkgkG3QVzixMUsz9dQiJGmGUu1c2epGD0NW.jpg\", \"public/property/image/ICqGTowRzy0kCkTMvYASkRQuiBN3L2cKUYsmQkS6.jpg\", \"public/property/image/pxDB8OViYellfCY5fCyTTfasEqXUafeonHWZn20g.jpg\"]', 'Luxury Home with Expansive Land', '4200000000', NULL, 'Residental', 'Houses', 'Yes', 'Abdi Praja, Sepinggan, Balikpapan', 'Temukan hunian mewah yang terletak di kawasan strategis Abdi Praja, Sepinggan, Balikpapan. Properti yang menakjubkan ini berada di posisi yang lebih tinggi, menawarkan pemandangan panorama yang memukau dari kota sekitarnya, hanya beberapa langkah dari kantor pemerintahan kota Balikpapan.\r\n\r\nDengan luas tanah total 447m² yang terdiri dari dua bidang tanah yang berdekatan, properti ini mencakup sebidang tanah kosong seluas 212m² yang cocok untuk membangun kolam renang, ruang hiburan outdoor, atau area parkir tambahan. Ini adalah kesempatan langka untuk memiliki rumah yang luas di salah satu lokasi paling diminati di Balikpapan, ideal bagi mereka yang mencari kemewahan dan kenyamanan.', '659', '447', '18m x 25m', '10', '3', '3', '2', '1', '2017', 'For Sale', 'SHGB', '5m x 3m', '6m x 5m', '5m x 3m', '5m x 3m', '5m x 3m', '-', '6m x 6m', '7m x 3m', '[\"Strategic Location\", \"Development Potential\", null, null, \"Panoramic Views\", \"Luxury Residence\", null, null, \"Large Land Area\", \"High Investment Value\", null, null]', 'https://www.instagram.com/p/C8uHibpPFBq/?img_index=1', '2024-08-23 17:47:26', '2024-08-23 17:47:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sell_property`
--

CREATE TABLE `sell_property` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Siperantara', 'admin@gmail.com', NULL, '$2y$10$9WJYJNlMV0aN5d2V38pxqe253plOgAeGIACGZTv0NPDftM6gWGRGq', 1, NULL, '2024-08-21 20:18:37', '2024-08-21 20:18:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `download_guide`
--
ALTER TABLE `download_guide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `join_agent`
--
ALTER TABLE `join_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indeks untuk tabel `sell_property`
--
ALTER TABLE `sell_property`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agent`
--
ALTER TABLE `agent`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `download_guide`
--
ALTER TABLE `download_guide`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `join_agent`
--
ALTER TABLE `join_agent`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sell_property`
--
ALTER TABLE `sell_property`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
