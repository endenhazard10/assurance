-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 15 juil. 2023 à 15:25
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rencontre`
--

-- --------------------------------------------------------

--
-- Structure de la table `voyage_prime_t_t_c_s`
--

DROP TABLE IF EXISTS `voyage_prime_t_t_c_s`;
CREATE TABLE IF NOT EXISTS `voyage_prime_t_t_c_s` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prime_ttc` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `voyage_prime_t_t_c_s`
--

INSERT INTO `voyage_prime_t_t_c_s` (`id`, `age`, `zone_destination`, `duree`, `prime_ttc`, `created_at`, `updated_at`) VALUES
(1, 'a1', 'z1', 'd1', 9740.00, NULL, NULL),
(2, 'a1', 'z1', 'd2', 11144.00, NULL, NULL),
(3, 'a1', 'z1', 'd3', 13249.00, NULL, NULL),
(4, 'a1', 'z1', 'd4', 15357.00, NULL, NULL),
(5, 'a1', 'z1', 'd5', 16058.00, NULL, NULL),
(6, 'a1', 'z1', 'd6', 19569.00, NULL, NULL),
(7, 'a1', 'z1', 'd7', 25889.00, NULL, NULL),
(8, 'a1', 'z2', 'd1', 12547.00, NULL, NULL),
(9, 'a1', 'z2', 'd2', 14654.00, NULL, NULL),
(10, 'a1', 'z2', 'd3', 16760.00, NULL, NULL),
(11, 'a1', 'z2', 'd4', 19569.00, NULL, NULL),
(12, 'a1', 'z2', 'd5', 21676.00, NULL, NULL),
(13, 'a1', 'z2', 'd6', 27292.00, NULL, NULL),
(14, 'a1', 'z2', 'd7', 37123.00, NULL, NULL),
(15, 'a2', 'z1', 'd1', 11780.00, NULL, NULL),
(16, 'a2', 'z2', 'd2', 13636.00, NULL, NULL),
(17, 'a2', 'z1', 'd3', 16422.00, NULL, NULL),
(18, 'a2', 'z1', 'd4', 19209.00, NULL, NULL),
(19, 'a2', 'z1', 'd5', 20137.00, NULL, NULL),
(20, 'a2', 'z1', 'd6', 24781.00, NULL, NULL),
(21, 'a2', 'z1', 'd7', 33141.00, NULL, NULL),
(22, 'a2', 'z2', 'd1', 15493.00, NULL, NULL),
(23, 'a2', 'z2', 'd2', 18280.00, NULL, NULL),
(24, 'a2', 'z2', 'd3', 21066.00, NULL, NULL),
(25, 'a2', 'z2', 'd4', 24781.00, NULL, NULL),
(26, 'a2', 'z2', 'd5', 27567.00, NULL, NULL),
(27, 'a2', 'z2', 'd6', 34997.00, NULL, NULL),
(28, 'a2', 'z2', 'd7', 48001.00, NULL, NULL),
(29, 'a3', 'z1', 'd1', 21476.00, NULL, NULL),
(30, 'a3', 'z1', 'd2', 25486.00, NULL, NULL),
(31, 'a3', 'z1', 'd3', 31504.00, NULL, NULL),
(32, 'a3', 'z1', 'd4', 37524.00, NULL, NULL),
(33, 'a3', 'z1', 'd5', 39528.00, NULL, NULL),
(34, 'a3', 'z1', 'd6', 49560.00, NULL, NULL),
(35, 'a3', 'z1', 'd7', 67617.00, NULL, NULL),
(36, 'a3', 'z2', 'd1', 29493.00, NULL, NULL),
(37, 'a3', 'z2', 'd2', 35518.00, NULL, NULL),
(38, 'a3', 'z2', 'd3', 41536.00, NULL, NULL),
(39, 'a3', 'z2', 'd4', 49560.00, NULL, NULL),
(40, 'a3', 'z2', 'd5', 55578.00, NULL, NULL),
(41, 'a3', 'z2', 'd6', 71626.00, NULL, NULL),
(42, 'a3', 'z2', 'd7', 99715.00, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
