-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 15 juil. 2023 à 15:24
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
-- Structure de la table `tarif2_roues`
--

DROP TABLE IF EXISTS `tarif2_roues`;
CREATE TABLE IF NOT EXISTS `tarif2_roues` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `axa` bigint(20) NOT NULL,
  `amsa` bigint(20) NOT NULL,
  `wafa` bigint(20) NOT NULL,
  `cnart` bigint(20) NOT NULL,
  `allianz` bigint(20) NOT NULL,
  `nsia` bigint(20) NOT NULL,
  `askia` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarif2_roues`
--

INSERT INTO `tarif2_roues` (`id`, `type`, `axa`, `amsa`, `wafa`, `cnart`, `allianz`, `nsia`, `askia`, `created_at`, `updated_at`) VALUES
(1, 1, 18780, 18780, 18780, 18780, 18780, 18780, 15024, NULL, NULL),
(2, 2, 29448, 29448, 29448, 29448, 29448, 29448, 23558, NULL, NULL),
(3, 3, 34021, 34021, 34021, 34021, 34021, 34021, 27217, NULL, NULL),
(4, 4, 40880, 40880, 40880, 40880, 40880, 40880, 32704, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
