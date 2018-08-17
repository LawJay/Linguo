-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for linguo
CREATE DATABASE IF NOT EXISTS `linguo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `linguo`;

-- Dumping structure for table linguo.likes
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table linguo.likes: ~6 rows (approximately)
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` (`id`, `created_at`, `updated_at`, `user_id`, `post_id`, `like`) VALUES
	(2, '2018-08-17 00:29:47', '2018-08-17 11:12:12', 10, 7, 1),
	(3, '2018-08-17 00:29:50', '2018-08-17 11:26:10', 10, 6, 0),
	(4, '2018-08-17 00:29:53', '2018-08-17 11:12:06', 10, 5, 0),
	(5, '2018-08-17 00:29:54', '2018-08-17 11:12:16', 10, 4, 0),
	(11, '2018-08-17 11:12:02', '2018-08-17 11:12:02', 10, 8, 0),
	(12, '2018-08-17 11:19:10', '2018-08-17 11:19:10', 10, 9, 1);
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;

-- Dumping structure for table linguo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table linguo.migrations: ~3 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2018_08_11_225105_create_users_table', 1),
	(2, '2018_08_13_172054_create_posts_table', 2),
	(3, '2018_08_16_193437_create_likes_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table linguo.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table linguo.posts: ~6 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `body`, `user_id`) VALUES
	(4, '2018-08-13 21:54:03', '2018-08-13 21:54:03', 'start typing here', 4),
	(5, '2018-08-13 22:14:53', '2018-08-13 22:14:53', 'Hey there', 6),
	(7, '2018-08-14 19:18:55', '2018-08-14 22:25:00', 'Changed again', 4),
	(8, '2018-08-16 18:12:00', '2018-08-16 18:12:00', 'Welcome to the site.', 10);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table linguo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table linguo.users: ~9 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `created_at`, `updated_at`, `email`, `name`, `password`, `remember_token`) VALUES
	(1, '2018-08-11 23:46:50', '2018-08-11 23:46:50', 'test@tgest.com', 'Jambo', '$2y$10$ZChnH79uVciKXkE.gmDK1ukiUPubcXuJV/jrcuAjeR5SiTjPQfKdO', NULL),
	(2, '2018-08-11 23:47:04', '2018-08-11 23:47:04', 'test', 'test', '$2y$10$3uazJMGLOmi0XpQdeAddBOf.wV4bx1zykTwGTNb3n.nIay3UAjXfa', NULL),
	(4, '2018-08-12 15:52:43', '2018-08-12 15:52:43', 'jamiepeterlaw@gmail.com', 'Jambo', '$2y$10$c2STjUF477U1VbfY0ubvyuQDO6GapB5LHuBdUUmCXdMxIE1vnH3K2', 'IKmbuwLtJQZHSQOF0f7YiAdM4hjbZkUumlmVN1AinHsN1m7RWTXfmutEaZo2'),
	(5, '2018-08-13 01:04:28', '2018-08-13 01:04:28', 'l33tsco@gmail.com', 'test', '$2y$10$jJM2sQZS5pb.DZ5NpyxQweE6xhrwactjIGBOlh.bcKDkOKCZIU4u2', NULL),
	(6, '2018-08-13 22:14:42', '2018-08-13 22:14:42', 'bigdaddy@admin.com', 'Mr Black', '$2y$10$FnHgIs5WPjSG.ohnwMP5e.cohJnFLOA.89BDEfOh24qbh2VYxWqrO', NULL),
	(7, '2018-08-16 00:51:10', '2018-08-16 00:51:10', 'BigBoi@me.com', 'Jumbo', '$2y$10$2bwugE8JAqlgxkjWwuQhresZZa7SfvAO48h06PO7MxXAqfJ0DuQvy', NULL),
	(8, '2018-08-16 10:25:26', '2018-08-16 10:25:26', 'Jambo@jambo.com', 'Jambito', '$2y$10$2KBxe0RkiAnqXUJ1Afm2BuD8oKn3FyBnUcuA.5nmnmTsai8NlCnlG', NULL),
	(9, '2018-08-16 12:38:59', '2018-08-16 12:38:59', 'admin@admin2.com', 'Jambito', '$2y$10$MrcaWPWY2XEvDq6..YwUdO53pSTmEFG81KfH/wFwiIv2x5V.l0uzm', NULL),
	(10, '2018-08-16 13:47:50', '2018-08-16 14:33:29', 'admin@admin.com', 'TheAdmin', '$2y$10$c2B4Zo5RQE9KtB/9eXSL0ufoSO2b6Bd/ig8.L3fsOp3eBQEF7sA5y', 'iW208Ul3v2lKHXAICnOPRNhLUEuuaVT7RqrMD0BtwcHG5oJsjNN0CAbVEpZG');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
