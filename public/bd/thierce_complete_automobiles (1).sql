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
-- Structure de la table `thierce_complete_automobiles`
--

DROP TABLE IF EXISTS `thierce_complete_automobiles`;
CREATE TABLE IF NOT EXISTS `thierce_complete_automobiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `franchise` bigint(20) NOT NULL,
  `categorie1` double(8,2) NOT NULL,
  `categorie2` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `thierce_complete_automobiles`
--

INSERT INTO `thierce_complete_automobiles` (`id`, `franchise`, `categorie1`, `categorie2`, `created_at`, `updated_at`) VALUES
(1, 50000, 4.50, 9.50, NULL, NULL),
(2, 75000, 4.20, 8.35, NULL, NULL),
(3, 100000, 3.95, 7.85, NULL, NULL),
(4, 150000, 2.95, 5.90, NULL, NULL),
(5, 200000, 2.85, 5.65, NULL, NULL),
(6, 250000, 2.70, 5.40, NULL, NULL),
(7, 300000, 2.45, 4.90, NULL, NULL),
(8, 350000, 2.35, 4.65, NULL, NULL),
(9, 400000, 2.20, 4.45, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
