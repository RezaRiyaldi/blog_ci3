-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_blog
CREATE DATABASE IF NOT EXISTS `db_blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_blog`;

-- Dumping structure for table db_blog.account
CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(45) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_blog.account: ~4 rows (approximately)
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`username`, `password`, `name`, `role`) VALUES
	('admin', '$2y$10$nu38JilRh2V7s7.zd9p/re22V.xs3nJ1.vhMy1b.HvxMTxndJvUGC', 'Admin', 'admin'),
	('author', '$2y$10$Pp9m8c37KJyWTdnk4K9wmOELYJ32b04V/zNU/SFMP9AyWdFub4oGC', 'Author', 'author'),
	('koca', '$2y$10$v5lZM2A0W.n00.kEgt5DfO/Wl..s2qzB4Xsk31VYaF3h7K2a5EmPS', 'Kocahg', 'admin'),
	('reza', '$2y$10$Xe/QwsyR3YOs3kXD4vrwh.lqdJz4brxTf4P49VHnyF3r6x9S1HHBK', 'Rezas', 'author');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

-- Dumping structure for table db_blog.post
CREATE TABLE IF NOT EXISTS `post` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY (`idpost`),
  KEY `fk_post_account_idx` (`username`),
  CONSTRAINT `fk_post_account` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_blog.post: ~3 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`idpost`, `title`, `content`, `date`, `username`) VALUES
	(2, 'Tes2', 'teslagi nich\r\n', '2022-05-20 08:31:36', 'admin'),
	(4, 'Loreme', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, fugiat eveniet commodi officiis culpa. Odio possimus assumenda deserunt illum. Ab iusto omnis vitae exercitationem itaque asperiores tempore vel suscipit accusantium! Perspiciatis illo voluptates, ex accusantium qui deserunt aut et iste consequuntur praesentium in commodi fugiat assumenda dolore! Quia possimus culpa inventore, ipsum, quibusdam similique debitis fugit natus ab, molestias adipisci asperiores ea aperiam nisi! Vero quis doloribus earum repellendus placeat itaque aut odit! Deserunt pariatur quibusdam error dolorem quisquam totam sapiente adipisci, similique iste fuga, officia ex cupiditate commodi, expedita fugit hic esse. Impedit consectetur beatae at obcaecati quo!', '2022-05-20 09:23:40', 'author'),
	(5, 'Selamat Sore', 'selamat sore hari ini cuacanya cukup cerah, tp tidak secerah hari bersamamu:V Tp boong', '2022-05-20 12:06:49', 'admin');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
