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
-- Structure de la table `assurance_voyages`
--

DROP TABLE IF EXISTS `assurance_voyages`;
CREATE TABLE IF NOT EXISTS `assurance_voyages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_passport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_validite_passeport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motif_voyage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_depart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_retour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `id_apporter` int(11) NOT NULL,
  `assurance_choisit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valider` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assurance_voyages`
--

INSERT INTO `assurance_voyages` (`id`, `prenom`, `nom`, `date_de_naissance`, `age`, `profession`, `adresse`, `numero_passport`, `date_validite_passeport`, `motif_voyage`, `pays`, `formule`, `date_depart`, `date_retour`, `duree`, `id_apporter`, `assurance_choisit`, `token`, `valider`, `created_at`, `updated_at`) VALUES
(1, 'momar', 'dieng', '2023-07-21', 45, 'informaticien', 'casablanca', 'A455445', '14/7/2010 au 15/2/2027', 'touriste', 'Allemagne', 'afrique-europe-moyen orient', '2023-07-08', '2023-07-06', 45, 2, NULL, '00185c832e3ceb4014d93a78f0af9c1e07784727', 0, '2023-07-11 16:49:47', '2023-07-11 16:49:47'),
(2, 'momar', 'dieng', '2023-07-21', 45, 'informaticien', 'casablanca', 'A455445', '14/7/2010 au 15/2/2027', 'touriste', 'Allemagne', 'afrique-europe-moyen orient', '2023-07-08', '2023-07-06', 45, 2, NULL, '87aef6a55d915b500ef2c4a9388f4d19dcad5b02', 0, '2023-07-11 16:50:37', '2023-07-11 16:50:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
