-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-12-2020 a las 02:48:42
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examplephp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_status_id_foreign` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `status_id`) VALUES
(1, 'Acción', 1),
(2, 'Terror', 1),
(3, 'Comedia', 1),
(4, 'Anime', 1),
(5, 'Drama', 1),
(6, 'Suspenso', 1),
(7, 'Infantil', 1),
(8, 'Recuentos de la vida', 1),
(9, 'Romantico', 1),
(10, 'Aventura', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_movie`
--

DROP TABLE IF EXISTS `category_movie`;
CREATE TABLE IF NOT EXISTS `category_movie` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_movie_movie_id_foreign` (`movie_id`),
  KEY `category_movie_category_id_foreign` (`category_id`),
  KEY `category_movie_status_id_foreign` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(155, '2020_11_29_030205_create_movie_rental_table', 1),
(156, '2014_10_12_000000_create_users_table', 2),
(157, '2014_10_12_100000_create_password_resets_table', 2),
(158, '2020_10_20_144424_create_movies_table', 2),
(159, '2020_11_09_171425_create_user_table', 2),
(160, '2020_11_17_175728_create_roles_table', 2),
(161, '2020_11_28_212435_create_statuses_table', 2),
(162, '2020_11_28_221408_create_categories_table', 2),
(163, '2020_11_29_003401_create_rentals_table', 2),
(164, '2020_11_29_013739_create_type_statuses_table', 2),
(165, '2020_11_29_023117_create_category_movie_table', 2),
(166, '2020_11_29_023433_create_relationships', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movies_user_id_foreign` (`user_id`),
  KEY `movies_status_id_foreign` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Rerum vero.', 'Eaque repellendus harum sunt fugit nihil aliquid et ut.', 9, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(2, 'Est et id.', 'Reiciendis nihil sunt quibusdam eos saepe eveniet nihil.', 6, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(3, 'Voluptatum autem qui.', 'Deleniti qui ea omnis soluta vel maxime est id dolores est.', 4, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(4, 'Omnis cupiditate.', 'Et quasi doloribus occaecati nihil placeat fuga ut ratione quas.', 9, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(5, 'Autem et.', 'Ipsum autem in eum sunt dolor commodi et incidunt quas sint cum nihil ipsam.', 2, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(6, 'Non necessitatibus.', 'Et libero mollitia maxime rerum eligendi laudantium ratione.', 8, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(7, 'Consequuntur maiores.', 'Cum sit cum molestiae necessitatibus deserunt minus quod.', 10, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(8, 'Veritatis excepturi.', 'Culpa qui voluptatem et minus qui repudiandae aut aspernatur nisi veniam qui est sunt.', 6, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(9, 'Libero accusamus.', 'Ut ut fugit voluptates ad minima maxime dolorum.', 5, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49'),
(10, 'Voluptate est cumque.', 'Consequatur aliquam doloremque praesentium ipsa veniam sit enim voluptatem.', 8, 1, '2020-12-08 06:58:49', '2020-12-08 06:58:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie_rental`
--

DROP TABLE IF EXISTS `movie_rental`;
CREATE TABLE IF NOT EXISTS `movie_rental` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `rental_id` int(10) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `observations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movie_rental_movie_id_foreign` (`movie_id`),
  KEY `movie_rental_rental_id_foreign` (`rental_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentals`
--

DROP TABLE IF EXISTS `rentals`;
CREATE TABLE IF NOT EXISTS `rentals` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rentals_status_id_foreign` (`status_id`),
  KEY `rentals_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rentals`
--

INSERT INTO `rentals` (`id`, `start_date`, `end_date`, `total`, `user_id`, `status_id`) VALUES
(1, '2016-06-01', '2007-10-12', '5105.00', 7, 1),
(2, '1984-11-29', '2008-05-26', '6625.00', 6, 1),
(3, '2005-04-10', '2008-02-12', '5128.00', 6, 1),
(5, '1991-06-24', '2008-10-25', '4590.00', 10, 1),
(6, '1982-07-28', '1978-08-15', '4219.00', 7, 1),
(7, '1983-05-09', '2000-10-10', '8259.00', 8, 1),
(8, '1987-05-15', '1995-07-23', '5797.00', 9, 1),
(9, '2016-01-24', '2007-12-26', '7197.00', 6, 1),
(10, '2013-10-08', '1991-08-08', '1561.00', 9, 1),
(11, '1995-04-30', '2000-03-08', '3145.00', 10, 1),
(12, '1972-01-29', '1986-09-16', '2837.00', 5, 1),
(13, '1995-10-16', '1989-01-10', '3555.00', 6, 1),
(14, '2006-12-11', '1992-09-06', '7007.00', 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_status_id_foreign` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `status_id`) VALUES
(1, 'Gerente General', 1),
(2, 'Gerente general', 2),
(3, 'Cajero', 3),
(4, 'Rentador', 3),
(5, 'Conserje', 3),
(6, 'Vigilante', 3),
(7, 'Administración', 1),
(8, 'Aprendiz', 1),
(9, 'Pasante', 3),
(10, 'CEO', 1),
(11, 'Supervisor', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_status_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `statuses_type_status_id_foreign` (`type_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `type_status_id`) VALUES
(1, 'Activo', 1),
(2, 'Inactivo', 1),
(3, 'Ausente', 1),
(4, 'Inactivo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_statuses`
--

DROP TABLE IF EXISTS `type_statuses`;
CREATE TABLE IF NOT EXISTS `type_statuses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_statuses`
--

INSERT INTO `type_statuses` (`id`, `name`) VALUES
(1, 'Específico'),
(2, 'General'),
(3, 'Específico'),
(4, 'Condicional'),
(5, 'Secuencial'),
(6, 'Temporales'),
(7, 'Permamentes'),
(8, 'Mixtos'),
(9, 'Cambiantes'),
(10, 'Extremo'),
(11, 'Periodico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`),
  KEY `user_status_id_foreign` (`status_id`),
  KEY `user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status_id`, `role_id`) VALUES
(2, 'lunezeli', 'lunelly3@gmail.com', '23423234', 1, 1),
(3, 'Brice Larson', 'kareem77@gmail.com', '$2y$10$4s4Od.kosViTEEUilVJXPu1qcFxBE9mL1s0FWq2JxXXKz0OFVYtrG', 1, 1),
(4, 'Mr. Thurman Prosacco DDS', 'forrest.wiegand@mueller.com', '$2y$10$d4qEPChhqNRcS14kqtPjwutPH6BuZdRBr2rjhJnrnZLQv6DQ3cJBq', 1, 1),
(5, 'Savanah Schulist', 'pablo.harber@hotmail.com', '$2y$10$.Zanm50baif3bsNt1Fi4FeGyXa3QhxLwDsVZ6V1BUcClEU.6q1qHC', 1, 1),
(6, 'Pete Bayer PhD', 'ada73@gmail.com', '$2y$10$mt8R9qHAKvm70.UTZREGnufSc0bJ5fqDSQAS.RPk83Kz.JQhoZ/Gm', 1, 1),
(7, 'Keaton O\'Keefe PhD', 'turcotte.vern@halvorson.com', '$2y$10$3J1fHhg.DIX4l9CugPfV3uwfvp5Pyll2o0tbB9Ylnydp3aj6mvQYK', 1, 1),
(8, 'Bonnie Kozey', 'adrianna.will@hegmann.biz', '$2y$10$ZDOen5N2zqmhEnQ8x2x0VOnsyZLoY.qPNSBZDtH6Pjx.x9AjCzDEG', 1, 1),
(9, 'Angelita Kirlin III', 'richmond.lowe@gmail.com', '$2y$10$sXKhHCZHevgyC1PzEslyu.ulXuQ3VSOr5Z95OJjHWAVmxI.i/SnAW', 1, 1),
(10, 'Maryam Denesik', 'pfannerstill.tate@mohr.com', '$2y$10$MfgAdjut1IzjsMHinHtS/eHq0R5Qi0IGRsKgqLAKcRtsm3knM5jpO', 1, 1),
(11, 'Donavon Botsford', 'gerardo.gutkowski@gmail.com', '$2y$10$K4aKYKS2bvyWhYghjdet9eWO3EE5xTc/HlL3tcd6xQfOU9GDuruqG', 1, 1),
(12, 'Cleta Ondricka', 'broderick13@hotmail.com', '$2y$10$3mUNfdLqbFUL4BZR7QsD.e8byppLZhGKFliO1jDMzMwyYuIslpsWm', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `category_movie`
--
ALTER TABLE `category_movie`
  ADD CONSTRAINT `category_movie_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `category_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `category_movie_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `movie_rental`
--
ALTER TABLE `movie_rental`
  ADD CONSTRAINT `movie_rental_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_rental_rental_id_foreign` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_type_status_id_foreign` FOREIGN KEY (`type_status_id`) REFERENCES `type_statuses` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
