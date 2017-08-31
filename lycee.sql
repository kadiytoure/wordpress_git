DROP DATABASE IF EXISTS `lycee_db`;

CREATE DATABASE `lycee_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

GRANT ALL PRIVILEGES ON `lycee_db`.* TO 'groupe_wordpress'@'localhost';

FLUSH PRIVILEGES;

USE `lycee_db`;
