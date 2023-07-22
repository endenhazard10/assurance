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
-- Structure de la table `thierce_collision_automobiles`
--

DROP TABLE IF EXISTS `thierce_collision_automobiles`;
CREATE TABLE IF NOT EXISTS `thierce_collision_automobiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `franchise` bigint(20) NOT NULL,
  `categorie1` double(8,2) NOT NULL,
  `categorie2_moins_9_cv` double(8,2) NOT NULL,
  `categorie2_plus_9_cv` double(8,2) NOT NULL,
  `categorie3_4` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `thierce_collision_automobiles`
--

INSERT INTO `thierce_collision_automobiles` (`id`, `franchise`, `categorie1`, `categorie2_moins_9_cv`, `categorie2_plus_9_cv`, `categorie3_4`, `created_at`, `updated_at`) VALUES
(1, 100000, 2.40, 2.40, 5.05, 5.05, NULL, NULL),
(2, 150000, 1.95, 1.95, 4.35, 4.35, NULL, NULL),
(3, 200000, 1.70, 1.70, 3.95, 3.95, NULL, NULL),
(4, 250000, 1.55, 1.55, 3.60, 3.60, NULL, NULL),
(5, 300000, 1.45, 1.45, 3.25, 3.25, NULL, NULL),
(6, 350000, 1.40, 1.40, 2.95, 2.95, NULL, NULL),
(7, 400000, 1.35, 1.35, 2.65, 2.65, NULL, NULL),
(8, 450000, 1.30, 1.30, 2.30, 2.30, NULL, NULL),
(9, 500000, 1.25, 1.25, 2.10, 2.10, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
