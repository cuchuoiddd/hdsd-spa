-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2022 at 03:28 AM
-- Server version: 8.0.25
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hdsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_11_02_142642_create_settings_table', 1);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `position` int DEFAULT '0',
  `parent_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `slug`, `content`, `position`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'L???ch h???n', 'setting/lich-hen', '<p>H?????ng d???n s??? d???ng L???ch h???n</p>', 0, 0, '2022-11-05 07:50:00', '2022-11-05 10:11:46'),
(2, 'Qu???n l?? kh??ch h??ng', 'setting/quan-ly-khach-hang', NULL, 1, 0, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(3, 'Marketing', 'marketing', NULL, 2, 0, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(4, 'Qu???n l?? b??n h??ng', 'qlbh', NULL, 3, 0, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(5, 'Ch??m s??c kh??ch h??ng', 'cskh', NULL, 4, 0, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(6, 'Th???ng k??', 'tk', NULL, 5, 0, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(7, 'Kho v???n', 'kv', NULL, 6, 0, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(8, 'Duy???t chi', 'dc', NULL, 7, 0, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(9, 'Fanpage', 'marketing/fanpage', NULL, 0, 3, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(10, 'Fanpage Post', 'marketing/fanpage-post', NULL, 0, 3, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(11, 'X???p h???ng', 'xh', NULL, 0, 3, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(12, 'D??? li???u', 'dl', NULL, 0, 3, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(13, 'N??ng cao', 'nc', NULL, 0, 3, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(14, 'Marketing Dashboard', 'marketing/xep-hang/dashboard', NULL, 0, 11, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(15, 'B???ng x???p h???ng', 'marketing/xep-hang/bang-xep-hang', NULL, 0, 11, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(16, 'K???t n???i Facebook', 'marketing/du-lieu/ket-noi-facebook', NULL, 0, 12, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(17, 'K???t n???i Landipage', 'marketing/du-lieu/landipage', NULL, 0, 12, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(18, 'Kho s??? seeding', 'marketing/du-lieu/seeding', NULL, 0, 12, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(19, 'Optin Form', 'marketing/du-lieu/optin-form', NULL, 0, 12, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(20, 'Automation', 'marketing/nang-cao/automation', NULL, 0, 13, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(21, 'Voucher khuy???n m??i', 'marketing/nang-cao/khuyen-mai', NULL, 0, 13, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(22, 'Landipage', 'marketing/nang-cao/landipage', NULL, 0, 13, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(23, 'Nh???n tin fanpage', 'marketing/nang-cao/nhan-tin-fanpage', NULL, 0, 13, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(24, 'Qu???n l?? nh??m', 'qln', NULL, 0, 4, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(25, 'Qu???n l?? SP v?? DV', 'spdv', NULL, 0, 4, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(26, 'Nh?? cung c???p', 'quan-ly-ban-hang/nha-cung-cap', NULL, 0, 4, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(27, 'Qu???n l?? ????n h??ng', 'dldh', NULL, 0, 4, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(28, 'Qu???n l?? n???p v??', 'qlnv', NULL, 0, 4, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(29, 'Nh??m d???ch v???', 'quan-ly-ban-hang/quan-ly-nhom/nhom-dich-vu', '<p>Nh??m d???ch v???</p>', 0, 24, '2022-11-05 07:50:00', '2022-11-05 09:53:20'),
(30, 'Nh??m s???n ph???m', 'quan-ly-ban-hang/quan-ly-nhom/nhom-san-pham', NULL, 0, 24, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(31, 'Nh??m t??nh c??ch', 'quan-ly-ban-hang/quan-ly-nhom/nhom-tinh-cach', NULL, 0, 24, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(32, 'Danh s??ch d???ch v???', 'quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-dich-vu', NULL, 0, 25, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(33, 'Danh s??ch th??? thu???t (c??ng)', 'quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-thu-thuat', NULL, 0, 25, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(34, 'Danh s??ch s???n ph???m', 'quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-san-pham', NULL, 0, 25, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(35, 'Danh s??ch ????n h??ng', 'quan-ly-ban-hang/quan-ly-don-hang/danh-sach-don-hang', NULL, 0, 27, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(36, '???? thu trong k???', 'quan-ly-ban-hang/quan-ly-don-hang/da-thu-trong-ky', NULL, 0, 27, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(37, '???? thu trong k???', 'quan-ly-ban-hang/quan-ly-nap-vi/da-thu-trong-ky', NULL, 0, 28, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(38, 'CSKH nh??n vi??n', 'cham-soc-khach-hang/nhan-vien', NULL, 0, 5, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(39, 'CSKH ph??ng ban', 'cham-soc-khach-hang/phong-ban', NULL, 0, 5, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(40, 'Doanh s??? & Doanh thu', 'dsdt', NULL, 0, 6, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(41, 'Marketing', 'mkt', NULL, 0, 6, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(42, 'Telesales', 'tls', NULL, 0, 6, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(43, 'Ph??ng ban kh??c', 'pbk', NULL, 0, 6, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(44, 'Tin nh???n ???? g???i', '1', NULL, 0, 6, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(45, 'Qu???n l?? t???ng ????i', '2', NULL, 0, 6, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(46, 'Doanh thu', 'thong-ke/ds-dt/doanh-thu', NULL, 0, 40, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(47, 'B?? h??? th???ng', 'thong-ke/ds-dt/bd-he-thong', NULL, 0, 40, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(48, 'Ngu???n thu t??? ????n h??? th???ng', 'thong-ke/ds-dt/don-he-thong', NULL, 0, 40, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(49, 'Duy???t chi', 'thong-ke/ds-dt/duyet-chi', NULL, 0, 40, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(50, 'Doanh s??? nh??m SP&DV', 'thong-ke/ds-dt/ds-nhom-sp-dv', NULL, 0, 40, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(51, 'B???ng x???p h???ng', 'thong-ke/marketing/bang-xep-hang', NULL, 0, 41, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(52, 'B??o c??o doanh thu', 'thong-ke/marketing/bao-cao-doanh-thu', NULL, 0, 41, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(53, 'B???ng x???p h???ng', 'thong-ke/telesale/bang-xep-hang', NULL, 0, 42, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(54, 'B??o c??o doanh thu', 'thong-ke/telesale/bao-cao-doanh-thu', NULL, 0, 42, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(55, 'B?? C.vi???c & l???ch h???n', 'thong-ke/telesale/bd-cv-lich-hen', NULL, 0, 42, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(56, 'X???p h???ng CarePage', '3', NULL, 0, 43, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(57, 'B??o c??o DT CarePage', '4', NULL, 0, 43, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(58, 'B??o c??o DT L??? t??n', '5', NULL, 0, 43, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(59, 'B??o c??o KTV', '6', NULL, 0, 43, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(60, 'S???n ph???m kho', '7', NULL, 0, 7, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(61, 'L???ch s??? nh???p, xu???t kho', '8', NULL, 0, 7, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(62, 'B??o c??o t???n', '9', NULL, 0, 7, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(63, 'Danh m???c duy???t chi', '10', NULL, 0, 8, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(64, 'L?? do duy???t chi', '11', NULL, 0, 8, '2022-11-05 07:50:00', '2022-11-05 07:50:00'),
(65, 'Danh s??ch duy???t chi', '12', NULL, 0, 8, '2022-11-05 07:50:00', '2022-11-05 07:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `role_id`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ti???n Nguy???n', 'admin', 1, '$2y$10$oTZLbINGYvtVkhI7zdXEae9jOeyUs8RO1Bhzqt0Ve6CeuqZFZB4ZW', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
