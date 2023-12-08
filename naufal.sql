-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 01:21 PM
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
-- Database: `true_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `title`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Hello', 'carousels/gWi3nWZ1jHZfiCQekFv6AxP4SYKdJWEyDa2RUCSb.webp', '2023-12-02 04:29:09', '2023-12-02 04:29:09'),
(2, 'Welcome', 'carousels/jgowed81rKL9Z5unCCIP9xGkUCXdNjCOpONqLeW1.jpg', '2023-12-02 04:29:31', '2023-12-02 04:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', 'sejarah', '2023-12-02 04:10:37', '2023-12-02 04:10:37'),
(2, 'Bahasa Jawa', 'bahasa-jawa', '2023-12-02 04:40:03', '2023-12-02 04:40:03'),
(3, 'Games', 'games', '2023-12-02 05:12:52', '2023-12-02 05:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `web_title` varchar(60) NOT NULL,
  `web_profile` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `web_title`, `web_profile`, `instagram`, `facebook`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'N4-Falz', '<p><span style=\"color: rgb(255, 255, 255);\">Web ini adalah web yang menyediakan berbagai informasi mengenai fun-fact, berita, games, hingga meme. Web ini masih dalam pengembangan, so stay tunes</span></p>', 'https://instagram.com/nfl.fadhli', 'https://www.facebook.com/naufal.fadhliz', 'sternravonski@gmail.com', 'Jaten, Karanganyar', '2023-12-02 04:07:56', '2023-12-02 04:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `username` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `slug`, `category_id`, `body`, `username`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Detik-Detik Proklamasi', 'detik-detik-proklamasi', 1, '<p class=\"ql-align-justify\"><strong>Jakarta, InfoPublik</strong>&nbsp;- Peristiwa detik-detik proklamasi mengacu pada momen-momen penting yang mengarah kepada Proklamasi Kemerdekaan Indonesia pada 17 Agustus 1945 yang dilakukan oleh Soekarno dan Mohammad Hatta.&nbsp;</p><p class=\"ql-align-justify\">Dilansir dari laman Sekretariat Negara pada Kamis (17/8/2023) menyebutkan, rangkuman singkat mengenai peristiwa-peristiwa penting tersebut:</p><p class=\"ql-align-justify\"><strong>Malam Sebelum Proklamasi (16 Agustus 1945)</strong></p><p class=\"ql-align-justify\">Di rumah Laksamana Maeda di Jalan Imam Bonjol, Jakarta, terjadi perdebatan mengenai waktu yang tepat untuk memproklamirkan kemerdekaan. Pemuda-pemuda seperti Soediro dan Chaerul Saleh mendesak agar proklamasi dilakukan secepatnya tanpa menunggu persetujuan dari Jepang.</p><p class=\"ql-align-justify\"><strong>Dini Hari (17 Agustus 1945)</strong></p><p class=\"ql-align-justify\">Soekarno, Hatta, dan Soebardjo mengetik teks Proklamasi Kemerdekaan di rumah Laksamana Maeda. Teksnya sengaja dibuat singkat untuk menghindari kesalahan saat pembacaannya.Teks proklamasi berbunyi: \"Kami bangsa Indonesia dengan ini menjatakan kemerdekaan Indonesia. Hal-hal yang mengenai pemindahan kekuasaan d.l.l. diselenggarakan dengan cara saksama dan dalam tempo yang sesingkat-singkatnya.\"</p><p class=\"ql-align-justify\"><strong>Pagi Hari (17 Agustus 1945)</strong></p><p class=\"ql-align-justify\">Sekitar pukul 10.00 WIB, di rumah Soekarno di Jalan Pegangsaan Timur Nomor 56 (sekarang Jalan Proklamasi), Jakarta, Proklamasi Kemerdekaan dibacakan di hadapan ratusan penduduk yang hadir. Walaupun hanya berlangsung singkat, momen ini menjadi tonggak sejarah bagi bangsa Indonesia. Setelah pembacaan teks proklamasi, bendera merah putih dikibarkan dan lagu kebangsaan \"Indonesia Raya\" dinyanyikan.</p><p class=\"ql-align-justify\"><strong>Setelah Proklamasi</strong></p><p class=\"ql-align-justify\">Pada hari yang sama, Soekarno dan Hatta diangkat oleh pemuka-pemuka tanah air menjadi Presiden dan Wakil Presiden Republik Indonesia, secara berturut-turut. Berita proklamasi kemerdekaan menyebar ke seluruh nusantara, baik melalui radio maupun cara lainnya.&nbsp;</p><p class=\"ql-align-justify\"><em>Foto: Youtube Setpres</em></p><p>Referensi :</p><p><a href=\"https://www.infopublik.id/kategori/nasional-sosial-budaya/770083/ini-momen-penting-saat-detik-detik-proklamasi-republik-indonesia#:~:text=Pagi%20Hari%20(17%20Agustus%201945,tonggak%20sejarah%20bagi%20bangsa%20Indonesia.\" target=\"_blank\" style=\"color: rgb(23, 107, 71);\"><strong><em>infopublik.id</em></strong></a></p>', 'Admin', 'contents/wp3Gl6JloBmvamQIfd2PkVRr9Sr9XtrLXAa3NWbA.jpg', '2023-12-02 04:14:25', '2023-12-02 04:56:38'),
(2, 'Mengenal Tiwul', 'mengenal-tiwul', 2, '<p>Tiwul (baca: thiwul) adalah penganan yang dibuat dari tepung gaplek, diberi gula sedikit, kemudian dikukus, dapat dimakan bersama kelapa parut yang telah diberi garam sedikit.</p><p>Tiwul merupakan penganan pokok khas suku Jawa sebagai pengganti beras padi yang dibuat dari gaplek. Masyarakat Jawa kususnya di Ponorogo, Trenggalek, Wonosobo, Gunungkidul, Wonogiri, Pacitan dan Blitar masih rutin mengkonsumsi jenis makanan ini, terutama saat musim paceklik. Dalam bahasa Jawa, nasi disebut sêgo (bahasa Jawa baku) atau sêga (bahasa Jawa non baku).</p><p>Sebagai makanan pokok, kandungan kalorinya lebih rendah daripada beras namun cukup memenuhi sebagai bahan makanan pengganti beras. Tiwul dipercaya mencegah penyakit maag, perut keroncongan, dan lain sebagainya. Tiwul pernah digunakan untuk makanan pokok sebagian penduduk Indonesia pada masa penjajahan Jepang dan sekarang tiwul dibuat jadi tiwul instan. Selain itu tiwul identik dengan makanan orang-orang miskin pada zaman dulu karena tidak mampu membeli beras, sehingga menjadikan tiwul sebagai alternatif dari nasi.</p><p>Dari Kebumen, Banyumas dan Cilacap juga terdapat penganan serupa tiwul yang disebut Oyek. Meskipun sama-sama berasal dari gaplek, kedua jenis makanan ini berbeda dalam proses pembuatannya, sehingga rasanya pun sedikit berbeda. Sedangkan di Gresik, Tiwul menjadi buruan penikmat kuliner pagi hari yang biasanya habis dalam waktu 3 jam setelah buka.</p><p>Link Terkait:</p><p><a href=\"https://id.wikipedia.org/wiki/Thiwul\" target=\"_blank\">Wikipedia</a></p><p><a href=\"https://docs.google.com/presentation/d/1wl2offAl5GzMxC60Sldw5lq5EZqxqxsq/edit?usp=drive_link&amp;ouid=115914618312157372856&amp;rtpof=true&amp;sd=true\" target=\"_blank\">Tugas Bahasa Jawa - Kearifan Lokal</a></p>', 'Admin', 'contents/hQQTiUWBaKrUx226EgSL8DFZFrMOk39KkZAMwKqg.jpg', '2023-12-02 04:39:37', '2023-12-02 04:57:48'),
(3, 'Apa itu Trails Series?', 'apa-itu-trails-series', 3, '<p><strong><em>Trails</em></strong>, atau dikenal sebagai Kiseki (軌跡) di Jepang, adalah serangkaian video game role-playing fantasi sains oleh Nihon Falcom. Ini adalah bagian dari franchise The Legend of Heroes yang lebih besar dan dimulai dengan rilis Trails in the Sky pada tahun 2004.<em>Trails</em> menampilkan sejumlah besar karakter dan terdiri dari beberapa alur cerita yang saling berhubungan yang berlatarkan negara berbeda di benua Zemuria: <strong>Liberl </strong>(<strong>Trails in the Sky</strong>), <strong>Crossbell</strong>, <strong>Erebonia</strong> (<strong>Trails of Cold Steel</strong>), dan <strong>Calvard</strong> (<strong>Trails Through Daybreak</strong>). Seri ini terutama menampilkan gameplay <em>turn-based</em>, dengan beberapa <em>spin-off</em> dan entri terbaru yang menampilkan gaya permainan lain.</p><p><em>Trails </em>dirancang oleh Falcom sebagai tujuan untuk menciptakan cerita paling ambisius dalam video game, dengan presiden perusahaan Toshihiro Kondo menganggapnya sebagai karya seumur hidupnya. Game ini dirilis secara eksklusif di Asia hingga tahun 2010-an, dengan Xseed Games menangani lokalisasi bahasa Inggrisnya hingga NIS America mengambil alih pada tahun 2019. Game ini umumnya dipuji karena pembangunan dunia dan alur karakternya serta telah melihat karya dan adaptasi asli manga, drama audio, dan anime, dengan game tersebut terjual lebih dari tujuh juta kopi pada tahun 2022.</p><p>Link Terkait :</p><p><a href=\"https://en.wikipedia.org/wiki/Turn-based_strategy\" target=\"_blank\">Apa itu turn-based?</a></p><p><a href=\"https://id.wikipedia.org/wiki/RPG\" target=\"_blank\">Apa itu game RPG?</a></p><p><a href=\"https://kiseki.fandom.com/wiki/Main_Page\" target=\"_blank\">Kiseki Fandom</a></p>', 'Admin', 'contents/bF0pvapDYaZEsB8QmJjshQQoloT8r4HwhoEzNd8A.jpg', '2023-12-02 05:12:25', '2023-12-02 05:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Thiwul', 'galleries/IG003xYb3LaShvTNC25bnIItF86wk4E6dtTuw7fZ.jpg', '2023-12-02 04:47:20', '2023-12-02 04:47:20'),
(2, 'Waifu >///<', 'galleries/d0bVjTh0Nrj7h2VlD9KP4oiLs9c9lPPSiGgZ6Bzd.webp', '2023-12-02 04:48:13', '2023-12-02 04:48:13'),
(3, 'Hari Guru', 'galleries/dKXZ3w1z36NJQrvPi5EydCy4krpy7u2vdMi5PBmc.jpg', '2023-12-02 04:53:05', '2023-12-02 04:53:05');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_10_23_012610_create_contents_table', 1),
(4, '2023_10_23_013034_create_categories_table', 1),
(5, '2023_10_23_014436_create_configurations_table', 1),
(6, '2023_10_23_014510_create_carousels_table', 1),
(7, '2023_10_23_014655_create_galleries_table', 1),
(8, '2023_10_23_014801_create_suggestions_table', 1);

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
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `body`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'GEGE ABIS ANJIR WOKWOK', 'Just People', 'jstp@gmail.com', '2023-12-02 04:58:50', '2023-12-02 04:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','contributor') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', '$2y$10$.FuvI4SfBvKn7T6iA6mHT.joiywqPnLMIaC6Yw53rmye5TIJHcYgS', 'admin', '2023-12-02 03:48:03', '2023-12-02 03:48:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
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
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
