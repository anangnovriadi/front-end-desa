# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.3.15-MariaDB)
# Database: desa_digital
# Generation Time: 2019-06-23 14:58:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table beritas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `beritas`;

CREATE TABLE `beritas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `header_top` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_kanan_atas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_bottom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;

INSERT INTO `contents` (`id`, `header_top`, `logo_kanan_atas`, `alamat_bottom`, `author`, `created_at`, `updated_at`)
VALUES
	(1,'Portal Layanan Publik Pemerintah Desa Cisarua','c8233631a6cdf0ffdbd57d53a46d7c77fe0c33ef.png','Jln. R.Natapraja No. 01 Cibodas Desa Cisarua Kec. Nagrak, Kabupaten Sukabumi','Anang Novriadi','2019-05-27 16:44:14','2019-05-27 23:37:44');

/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table maps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maps`;

CREATE TABLE `maps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `embed_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `maps` WRITE;
/*!40000 ALTER TABLE `maps` DISABLE KEYS */;

INSERT INTO `maps` (`id`, `embed_url`, `created_at`, `updated_at`)
VALUES
	(1,'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31689.12058713!2d106.77043686836176!3d-6.873815182092031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6833d8d15145b9%3A0x5e652adbaf5075a3!2sCisarua%2C+Nagrak%2C+Sukabumi%2C+Jawa+Barat!5e0!3m2!1sid!2sid!4v1556470087899!5m2!1sid!2sid','2019-05-27 23:33:52','2019-05-27 23:34:57');

/*!40000 ALTER TABLE `maps` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_05_27_155253_create_contents_table',1),
	(4,'2019_05_27_155953_create_beritas_table',1),
	(6,'2019_05_27_233239_create_maps_table',2),
	(7,'2019_05_28_001605_create_youtubes_table',3),
	(8,'2019_05_28_033927_create_perangkats_table',4),
	(9,'2019_06_22_141423_create_potensis_table',5);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table perangkats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `perangkats`;

CREATE TABLE `perangkats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kepala` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `perangkats` WRITE;
/*!40000 ALTER TABLE `perangkats` DISABLE KEYS */;

INSERT INTO `perangkats` (`id`, `name`, `img_thumb`, `jabatan`, `status_kepala`, `created_at`, `updated_at`)
VALUES
	(5,'Sutanto','3e72939090e2051247f35850dff529684d71e654.jpg','Kadis','1','2019-05-29 07:03:53','2019-06-03 09:57:09'),
	(6,'Suyono','dab8b3d7b9ca85f90986918d85589c03e21a56e8.jpg','Staff','0','2019-05-29 07:04:13','2019-05-29 07:04:13'),
	(7,'Waluyo','74fadbdbf20712213e007197a2d3c40a02e7cafc.jpg','Staff','0','2019-05-29 07:04:48','2019-05-29 07:04:48');

/*!40000 ALTER TABLE `perangkats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table potensis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `potensis`;

CREATE TABLE `potensis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `potensis` WRITE;
/*!40000 ALTER TABLE `potensis` DISABLE KEYS */;

INSERT INTO `potensis` (`id`, `name`, `info`, `img_thumb`, `created_at`, `updated_at`)
VALUES
	(2,'Pertanian','lorem ipsum','383d35e7d21b3a33f8d3440949ebd6f8a919e47b.jpg','2019-06-23 06:17:20','2019-06-23 14:02:22'),
	(3,'Perikanan','lorem ipsum','8ab93ec907b7cc9738c6d7f309ce1af71fa30e05.jpg','2019-06-23 14:02:13','2019-06-23 14:02:13'),
	(4,'Peternakan','lorem ipsum dolor','118552eabc63be7d4317f94c214ca29672b94e1a.jpg','2019-06-23 14:03:24','2019-06-23 14:03:24'),
	(5,'Bisnis','lorem ipsum dolor','75ab192f0c3141bc458ed3592ccec7ce367d50e1.jpg','2019-06-23 14:04:07','2019-06-23 14:04:07');

/*!40000 ALTER TABLE `potensis` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'admin','admin@admin.com',NULL,'$2y$10$wgY7cWYDbYjkJ0kyd0CYnOT7SAzV/NFShtQMUgAAJx5ROBNsi5vx2',NULL,'2019-05-27 16:17:50','2019-05-27 16:17:50');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table youtubes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `youtubes`;

CREATE TABLE `youtubes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `embed_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `youtubes` WRITE;
/*!40000 ALTER TABLE `youtubes` DISABLE KEYS */;

INSERT INTO `youtubes` (`id`, `embed_url`, `created_at`, `updated_at`)
VALUES
	(1,'https://www.youtube.com/embed/ECPeWx1O08c','2019-05-28 00:19:00','2019-05-28 00:23:54');

/*!40000 ALTER TABLE `youtubes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
