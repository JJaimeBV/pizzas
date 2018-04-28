/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50625
 Source Host           : localhost
 Source Database       : bayusa

 Target Server Type    : MySQL
 Target Server Version : 50625
 File Encoding         : utf-8

 Date: 05/11/2017 16:38:22 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `categories`
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1', null, 'ACCIÓN', 'ACCIÓN', 'accion', null, null), ('2', null, 'AVENTURAS', 'AVENTURAS', 'aventuras', null, null), ('3', null, 'ESTRATEGIA', 'ESTRATEGIA', 'estrategia', null, null), ('4', null, 'EDUCATIVOS', 'EDUCATIVOS', 'educativos', null, null), ('5', null, 'HABILIDAD', 'HABILIDAD', 'habilidad', null, null), ('6', null, 'JUEGOS DE CARRERAS', 'JUEGOS DE CARRERAS', 'juegos-de-carreras', null, null), ('7', null, 'JUEGOS DE DEPORTES', 'JUEGOS DE DEPORTES', 'juegos-de-deportes', null, null), ('8', null, 'MULTIJUGADORES', 'MULTIJUGADORES', 'multijugadores', null, null), ('9', null, 'PUZZLE', 'PUZZLE', 'puzzle', null, null), ('10', null, 'SIMULACIÓN', 'SIMULACIÓN', 'simulacion', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('2016_03_02_040115_create_categories_table', '1'), ('2016_03_02_040129_create_products_table', '1'), ('2016_03_11_002026_create_roles_table', '1'), ('2016_03_11_002027_create_users_table', '1'), ('2016_03_11_002028_create_password_resets_table', '1'), ('2016_03_18_002945_create_orders_table', '1'), ('2016_03_18_003006_create_order_items_table', '1');
COMMIT;

-- ----------------------------
--  Table structure for `order_items`
-- ----------------------------
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` decimal(5,2) NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `custom_label` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `type_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtotal` double(15,2) NOT NULL,
  `shipping` decimal(5,2) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `stract` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `min_quantity` int(10) unsigned NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `products`
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES ('1', 'Juego 1', 'Juego 1', 'Juego 1', 'Juego 1', '600', '10', '2', '50.00', '1.png', '1', '1', null, null), ('2', 'Juego 2', 'Juego 2', 'Juego 2', 'Juego 2', '601', '10', '2', '51.00', '2.png', '1', '3', null, null), ('3', 'Juego 3', 'Juego 3', 'Juego 3', 'Juego 3', '602', '10', '2', '52.00', '3.png', '1', '3', null, null), ('4', 'Juego 4', 'Juego 4', 'Juego 4', 'Juego 4', '603', '10', '2', '53.00', '4.png', '1', '2', null, null), ('5', 'Juego 5', 'Juego 5', 'Juego 5', 'Juego 5', '604', '10', '2', '54.00', '5.png', '1', '1', null, null), ('6', 'Juego 6', 'Juego 6', 'Juego 6', 'Juego 6', '605', '10', '2', '234.00', '6.png', '1', '4', null, null), ('7', 'Juego 7', 'Juego 7', 'Juego 7', 'Juego 7', '606', '10', '2', '56.00', '7.png', '1', '4', null, null), ('8', 'Juego 8', 'Juego 8', 'Juego 8', 'Juego 8', '607', '10', '2', '57.00', '8.png', '1', '1', null, null), ('9', 'Juego 9', 'Juego 9', 'Juego 9', 'Juego 9', '608', '10', '2', '55.00', '9.png', '1', '3', null, null), ('10', 'Juego 10', 'Juego 10', 'Juego 10', 'Juego 10', '609', '10', '2', '59.00', '10.png', '1', '5', null, null), ('11', 'Juego 11', 'Juego 11', 'Juego 11', 'Juego 11', '610', '10', '2', '60.00', '11.png', '1', '2', null, null), ('12', 'Juego 12', 'Juego 12', 'Juego 12', 'Juego 12', '611', '10', '2', '61.00', '12.png', '1', '6', null, null), ('13', 'Juego 13', 'Juego 13', 'Juego 13', 'Juego 13', '612', '10', '2', '34.00', '13.png', '1', '4', null, null), ('14', 'Juego 14', 'Juego 14', 'Juego 14', 'Juego 14', '613', '10', '2', '63.00', '14.png', '1', '6', null, null), ('15', 'Juego 15', 'Juego 15', 'Juego 15', 'Juego 15', '614', '10', '2', '68.00', '15.png', '1', '5', null, null), ('16', 'Juego 16', 'Juego 16', 'Juego 16', 'Juego 16', '615', '10', '2', '65.00', '16.png', '1', '3', null, null), ('17', 'Juego 17', 'Juego 17', 'Juego 17', 'Juego 17', '616', '10', '2', '66.00', '17.png', '1', '9', null, null), ('18', 'Juego 18', 'Juego 18', 'Juego 18', 'Juego 18', '617', '10', '2', '67.00', '18.png', '1', '10', null, null), ('19', 'Juego 19', 'Juego 19', 'Juego 19', 'Juego 19', '618', '10', '2', '55.00', '19.png', '1', '2', null, null), ('20', 'Juego 20', 'Juego 20', 'Juego 20', 'Juego 20', '619', '10', '2', '69.00', '20.png', '1', '9', null, null), ('21', 'Juego 21', 'Juego 21', 'Juego 21', 'Juego 21', '620', '10', '2', '70.00', '21.png', '1', '8', null, null), ('22', 'Juego 22', 'Juego 22', 'Juego 22', 'Juego 22', '621', '10', '2', '71.00', '22.png', '1', '10', null, null), ('23', 'Juego 23', 'Juego 23', 'Juego 23', 'Juego 23', '622', '10', '2', '76.00', '23.png', '1', '3', null, null), ('24', 'Juego 24', 'Juego 24', 'Juego 24', 'Juego 24', '623', '10', '2', '73.00', '24.png', '1', '10', null, null), ('25', 'Juego 25', 'Juego 25', 'Juego 25', 'Juego 25', '624', '10', '2', '74.00', '25.png', '1', '5', null, null), ('26', 'Juego 26', 'Juego 26', 'Juego 26', 'Juego 26', '625', '10', '2', '75.00', '26.png', '1', '4', null, null), ('27', 'Juego 27', 'Juego 27', 'Juego 27', 'Juego 27', '626', '10', '2', '44.00', '27.png', '1', '8', null, null), ('28', 'Juego 28', 'Juego 28', 'Juego 28', 'Juego 28', '627', '10', '2', '77.00', '28.png', '1', '5', null, null), ('29', 'Juego 29', 'Juego 29', 'Juego 29', 'Juego 29', '628', '10', '2', '78.00', '29.png', '1', '9', null, null), ('30', 'Juego 30', 'Juego 30', 'Juego 30', 'Juego 30', '629', '10', '2', '79.00', '30.png', '1', '6', null, null), ('31', 'Juego 31', 'Juego 31', 'Juego 31', 'Juego 31', '630', '10', '2', '22.00', '31.png', '1', '7', null, null), ('32', 'Juego 32', 'Juego 32', 'Juego 32', 'Juego 32', '631', '10', '2', '81.00', '32.png', '1', '6', null, null), ('33', 'Juego 33', 'Juego 33', 'Juego 33', 'Juego 33', '632', '10', '2', '10.00', '33.png', '1', '7', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `roles`
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES ('1', 'admin', null, null), ('2', 'store', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'Administrador', 'Administrador', 'admin@admin.com', 'Administrador', '$2y$10$OQRC6v8yO4o3DZ9vttzqv.dl2KpUtLtFNemaByeLc3Oi5RV03oBka', '1', '1', 'Administrador', null, '2017-05-11 17:49:56', '2017-05-11 17:49:56'), ('2', 'Jesus', 'Jaime', 'usuario@usuario.com', 'jesus', '$2y$10$OQRC6v8yO4o3DZ9vttzqv.dl2KpUtLtFNemaByeLc3Oi5RV03oBka', '2', '1', 'Jesus Jaime', null, '2017-05-11 17:49:56', '2017-05-11 17:49:56');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
