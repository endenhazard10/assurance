-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 17 juil. 2023 à 23:34
-- Version du serveur : 8.0.33-0ubuntu0.22.04.2
-- Version de PHP : 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rencontre`
--

-- --------------------------------------------------------

--
-- Structure de la table `tpv_rc_diesels`
--

CREATE TABLE `tpv_rc_diesels` (
  `id` bigint UNSIGNED NOT NULL,
  `puissance` int NOT NULL,
  `energie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_de_place_1` bigint NOT NULL,
  `nombre_de_place_2_a_4` bigint NOT NULL,
  `nombre_de_place_5_a_7` bigint NOT NULL,
  `nombre_de_place_8_a_10` bigint NOT NULL,
  `nombre_de_place_11_a_16` bigint NOT NULL,
  `nombre_de_place_17` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tpv_rc_diesels`
--

INSERT INTO `tpv_rc_diesels` (`puissance`, `energie`, `nombre_de_place_1`, `nombre_de_place_2_a_4`, `nombre_de_place_5_a_7`, `nombre_de_place_8_a_10`, `nombre_de_place_11_a_16`, `nombre_de_place_17`, `created_at`, `updated_at`) VALUES
(3, 'diesel', 9882, 11271, 12760, 17150, 22081, 25382, NULL, NULL),
(4, 'diesel', 9897, 11282, 12772, 17162, 22092, 25393, NULL, NULL),
(5, 'diesel', 11726, 13111, 14601, 18991, 23921, 27222, NULL, NULL),
(6, 'diesel', 13895, 15280, 16769, 21160, 26090, 29391, NULL, NULL),
(7, 'diesel', 16038, 17423, 18912, 23302, 28233, 31534, NULL, NULL),
(8, 'diesel', 18912, 20297, 21787, 26177, 34408, 38589, NULL, NULL),
(9, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(10, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(11, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(12, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(13, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(14, 'disel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(15, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(16, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(17, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(18, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(19, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(20, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(21, 'disel', 23891, 25276, 26765, 31153, 36086, 39387, NULL, NULL),
(22, 'diesel', 24714, 26100, 27589, 36979, 36910, 40210, NULL, NULL),
(23, 'diesel', 25538, 26923, 28413, 32803, 37734, 41034, NULL, NULL),
(24, 'diesel', 26538, 27747, 29237, 33627, 38557, 41858, NULL, NULL),
(25, 'diesel', 27186, 28571, 30060, 34451, 39381, 42682, NULL, NULL),
(26, 'diesel', 28010, 29395, 30884, 35274, 40205, 43506, NULL, NULL),
(27, 'diesel', 28834, 30219, 31708, 36098, 41029, 44329, NULL, NULL),
(28, 'diesel', 29627, 31042, 32532, 36922, 41853, 45153, NULL, NULL),
(29, 'diesel', 30481, 31866, 33356, 37746, 42676, 45977, NULL, NULL),
(30, 'diesel', 32129, 33514, 35003, 39393, 44324, 47625, NULL, NULL),
(31, 'diesel', 32717, 34102, 35592, 39982, 44913, 48213, NULL, NULL),
(32, 'diesel', 33306, 34691, 36180, 40570, 45501, 48802, NULL, NULL),
(33, 'diesel', 33894, 35279, 36769, 41159, 46090, 49390, NULL, NULL),
(34, 'diesel', 34483, 35868, 37357, 41747, 46678, 49979, NULL, NULL),
(35, 'diesel', 35071, 36456, 37946, 42336, 47267, 50567, NULL, NULL),
(36, 'diesel', 35660, 37045, 38534, 42925, 47855, 51156, NULL, NULL),
(37, 'diesel', 36248, 37633, 39123, 43513, 48444, 51744, NULL, NULL),
(38, 'diesel', 36837, 38222, 39711, 44102, 49032, 52333, NULL, NULL),
(39, 'diesel', 37426, 38811, 40300, 44690, 49621, 52921, NULL, NULL),
(40, 'diesel', 38014, 39399, 40888, 45279, 50209, 53510, NULL, NULL),
(41, 'diesel', 38603, 39988, 41477, 45867, 50798, 54098, NULL, NULL),
(42, 'diesel', 39191, 40576, 42066, 46456, 51386, 54687, NULL, NULL),
(43, 'diesel', 39780, 41165, 42654, 47044, 51975, 55276, NULL, NULL),
(44, 'diesel', 40368, 41753, 43243, 47633, 52563, 55864, NULL, NULL),
(45, 'diesel', 40957, 42342, 43831, 48221, 53152, 56463, NULL, NULL),
(46, 'diesel', 41545, 42930, 44420, 48810, 53740, 57041, NULL, NULL),
(47, 'diesel', 42134, 43519, 45008, 49398, 54329, 57630, NULL, NULL),
(48, 'diesel', 42722, 44107, 45597, 49987, 54917, 58218, NULL, NULL),
(49, 'diesel', 43311, 44696, 46185, 50575, 55506, 58807, NULL, NULL),
(50, 'diesel', 43311, 44696, 46185, 50575, 55506, 58807, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tpv_rc_diesels`
--
ALTER TABLE `tpv_rc_diesels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tpv_rc_diesels`
--
ALTER TABLE `tpv_rc_diesels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
