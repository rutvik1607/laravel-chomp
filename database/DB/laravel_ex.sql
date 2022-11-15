-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 12:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ex`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `description`, `category`, `image`, `ref1`, `created_at`, `updated_at`) VALUES
(1, 'Jordi Kuhlman', 'Ms.', 'Molestias dolorem ipsa quibusdam et excepturi in. Nisi et beatae ullam et. Aperiam harum a facilis qui reprehenderit.', 'Sint cumque aut praesentium. Sed ab velit in hic magnam facilis repellat. Minima dolorum ut doloremque. Ducimus eos ut est et.', 'https://via.placeholder.com/640x480.png/00eecc?text=sit', 'Reiciendis voluptatem quas expedita praesentium debitis. At qui et a nulla occaecati quam. Occaecati qui soluta velit rem sunt est. Cum qui debitis eius.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(2, 'Lola Denesik', 'Dr.', 'Voluptas quos nemo accusantium. Quam omnis beatae a facilis tempora eaque alias. Officiis laudantium eum delectus dolores voluptas nulla consequatur qui. Ab odit et dolore enim ad magni ea. Dolorem dignissimos commodi voluptas maiores.', 'Non cum aut ducimus nihil cupiditate. Aut aut et quia consequatur. Ducimus deserunt repudiandae mollitia itaque nemo velit.', 'https://via.placeholder.com/640x480.png/00aabb?text=in', 'Et magni occaecati ex perferendis consequatur facere ipsam. Sequi non a beatae dignissimos corporis. Recusandae aspernatur recusandae quis suscipit. Suscipit accusantium suscipit ullam voluptas vero.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(3, 'Talia Buckridge MD', 'Dr.', 'Autem sint laudantium animi labore voluptatem odio cum. Numquam rerum hic aut maiores placeat. Et sit aperiam similique saepe labore. Sit voluptatibus velit non a officiis.', 'Commodi quia ab hic doloremque commodi facere est nihil. Non et autem at et. Non aliquam est reiciendis eius iusto. Rerum rerum optio corrupti eligendi dignissimos voluptates consequatur.', 'https://via.placeholder.com/640x480.png/00bbdd?text=molestias', 'Consequatur illo cumque architecto facilis fugiat asperiores. Eligendi non quas aliquid. Est sed odio ea dolorem cumque quia.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(4, 'Deshaun Wolf', 'Dr.', 'Culpa sunt eos aliquid eaque. Dolorem iure quasi ipsam tenetur maxime voluptas omnis. Soluta vel nobis nihil voluptatem aperiam libero.', 'Ut magni sunt iste quaerat minus optio doloremque. Explicabo facere laborum consectetur. Tempora ut et quia animi quam laborum.', 'https://via.placeholder.com/640x480.png/0000dd?text=neque', 'Explicabo labore deleniti consequatur totam ab. Ipsum blanditiis placeat ex. Dignissimos necessitatibus eum officiis illum et numquam tenetur.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(5, 'Newton Bednar', 'Prof.', 'Et in aut consequatur nisi. Molestiae repellat atque nesciunt quasi ut aliquid. Reiciendis placeat tempore voluptates ex.', 'Officia laboriosam qui velit quae ea et. Aut ratione aspernatur et illo aut quo. Debitis ea nisi eaque voluptatem culpa.', 'https://via.placeholder.com/640x480.png/00bb22?text=et', 'Sapiente facere repellendus voluptas expedita ut ipsam incidunt. Sequi voluptatem magnam qui in. Velit laudantium vel quia assumenda. Quo dignissimos voluptatibus iste modi.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(6, 'Katharina Gislason', 'Ms.', 'Velit earum minus vel id. Laudantium laborum aut fuga fugiat impedit. Cupiditate inventore perspiciatis voluptatem. Natus aspernatur quaerat nesciunt adipisci.', 'Id ipsum iusto fugiat sequi consequatur. Atque voluptatem deserunt quae nihil qui dicta veniam labore. Voluptates harum aut rerum et quidem laborum impedit.', 'https://via.placeholder.com/640x480.png/00ffcc?text=ea', 'Aut et optio voluptatem. Minus soluta iure tenetur. Incidunt sit eaque et esse velit omnis animi.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(7, 'Monty Bergstrom DVM', 'Mr.', 'Dolorem nisi error et vel quo officiis est. Ut consequuntur ullam reiciendis eum temporibus illo quibusdam et. Ullam voluptas molestias aut inventore. Et dolorem aut voluptatibus voluptas.', 'Optio quidem nihil et non assumenda harum. Facilis tempore accusamus ad praesentium quia voluptate. Aut dolor ipsum ipsam. Non et commodi enim rerum.', 'https://via.placeholder.com/640x480.png/004411?text=nulla', 'Facere cupiditate eveniet illo culpa quia. Soluta enim tempore dignissimos voluptatem vel quaerat qui. Velit in qui aut asperiores vel quia nisi.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(8, 'Prof. Sherwood Howell', 'Ms.', 'Sit fugit optio eum qui molestiae atque. Quas et eligendi repellat repellendus sit. Rerum asperiores voluptas rem ducimus mollitia sed eveniet.', 'Illum est ex laboriosam eius. Excepturi quod et sapiente blanditiis quisquam praesentium. Magnam itaque non laudantium impedit est architecto.', 'https://via.placeholder.com/640x480.png/00dd44?text=et', 'Laboriosam quia suscipit impedit nostrum. Ipsa omnis eum voluptas suscipit nostrum. Autem minus accusamus in voluptatem. Eligendi voluptatem autem culpa maiores.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(9, 'Rolando Abshire', 'Dr.', 'Ipsum vel dolorem incidunt iusto error sapiente voluptatem. Architecto veritatis non saepe voluptate numquam. Ducimus hic suscipit et quia.', 'Quasi nihil rerum aliquam impedit accusamus sit consequuntur. Et architecto possimus hic eveniet tempore qui qui. Aut voluptatem dolores enim. Ipsum quo quam saepe mollitia.', 'https://via.placeholder.com/640x480.png/009999?text=maiores', 'Vel sed est suscipit sunt dolorem. Asperiores at maxime amet corporis ea. Veniam deserunt ut explicabo rerum omnis et.', '2022-11-15 04:33:27', '2022-11-15 04:33:27'),
(10, 'Doris Kihn', 'Miss', 'Doloremque voluptatem vel eum cupiditate dolorem. Aut est qui est non.', 'Voluptatem accusamus dolor sed aliquid. Recusandae totam illum reiciendis dolores quo nisi. Ea quos quia autem aliquid. Dolor exercitationem id in. Non asperiores saepe sit assumenda quia rerum.', 'https://via.placeholder.com/640x480.png/0077cc?text=quaerat', 'Tempore sint asperiores est corporis. Hic omnis quidem nam eum. Et ipsum libero est dolorem velit. Tenetur hic optio asperiores est perspiciatis repellendus enim voluptas.', '2022-11-15 04:33:27', '2022-11-15 04:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2022_11_11_073514_create_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_front` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `url`, `show_front`, `status`, `created_at`, `updated_at`) VALUES
(1, 'home', 'http://localhost:8080/custom/laravel/example-app/home', '1', 'active', '2022-11-14 04:31:38', '2022-11-14 04:31:38'),
(2, 'blog', 'http://localhost:8080/custom/laravel/example-app/blog', '1', 'active', '2022-11-14 04:31:45', '2022-11-14 04:31:45'),
(3, 'contect', 'http://localhost:8080/custom/laravel/example-app/contect', '1', 'active', '2022-11-14 04:31:53', '2022-11-14 04:31:53'),
(4, 'about', 'http://localhost:8080/custom/laravel/example-app/about', '1', 'active', '2022-11-14 04:32:03', '2022-11-15 01:05:44'),
(10, 'company', 'http://localhost:8080/custom/laravel/example-app/company', '0', 'active', '2022-11-15 01:35:26', '2022-11-15 01:35:33'),
(11, 'faq', 'http://localhost:8080/custom/laravel/example-app/faq', '1', 'active', '2022-11-15 01:35:40', '2022-11-15 01:35:40');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$TuWE.AooPwjkCeJTIWDH1OADivQSkzNz.qdJf9UEOw3pDywMHaYOW', NULL, '2022-11-14 04:31:29', '2022-11-15 00:39:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
