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
-- Structure de la table `assurances`
--

DROP TABLE IF EXISTS `assurances`;
CREATE TABLE IF NOT EXISTS `assurances` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numero_client` bigint(20) NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_de_place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur_neuve` bigint(20) NOT NULL,
  `valeur_venale` bigint(20) NOT NULL,
  `ptac` bigint(20) NOT NULL,
  `numero_carte_grise` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_attestation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_effet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_echeance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_avenant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsabilite_civile` bigint(20) NOT NULL DEFAULT 0,
  `thierce_complete` bigint(20) NOT NULL DEFAULT 0,
  `thierce_collision` bigint(20) NOT NULL DEFAULT 0,
  `vol` bigint(20) NOT NULL DEFAULT 0,
  `incendie` bigint(20) NOT NULL DEFAULT 0,
  `bris_de_glace` bigint(20) NOT NULL DEFAULT 0,
  `defence_et_recours` bigint(20) NOT NULL DEFAULT 0,
  `avance_sur_recours` bigint(20) NOT NULL DEFAULT 0,
  `personnes_transportees` bigint(20) NOT NULL DEFAULT 0,
  `id_apporter` int(11) NOT NULL,
  `assurance_choisit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `montant` bigint(20) NOT NULL DEFAULT 0,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `immatriculation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mise_en_circulation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valider` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assurances`
--

INSERT INTO `assurances` (`id`, `numero_client`, `prenom`, `nom`, `profession`, `adresse`, `marque`, `modele`, `puissance`, `energie`, `categorie`, `nombre_de_place`, `valeur_neuve`, `valeur_venale`, `ptac`, `numero_carte_grise`, `numero_attestation`, `date_effet`, `date_echeance`, `dure`, `numero_avenant`, `responsabilite_civile`, `thierce_complete`, `thierce_collision`, `vol`, `incendie`, `bris_de_glace`, `defence_et_recours`, `avance_sur_recours`, `personnes_transportees`, `id_apporter`, `assurance_choisit`, `montant`, `token`, `telephone`, `immatriculation`, `date_de_naissance`, `mise_en_circulation`, `valider`, `created_at`, `updated_at`) VALUES
(1, 2, 'hjb', 'hb', 'kbbh', 'jb', 'Nissan', 'bj ', '4', '1', '20', '2', 2, 3, 2, 'jbhj', '3', '16/04/2023', '15/09/2023', '5', '2', 0, 75000, 200000, 3000, 5000, 25000, 0, 30000, 0, 2, 'null', 0, '2cab9e4fc8f087b40c8dc8f568c57fa0f69d4f22', '4', 'jn', '2023-04-19', '2023-04-19', 0, '2023-04-16 18:15:31', '2023-04-16 18:15:31'),
(2, 2, 'momar', 'kj', 'jbh', 'hb', 'Audi', 'bhj', '3', '1', '22', '2', 3, 2, 2, 'hjb', '3', '16/04/2023', '15/12/2023', '8', '2', 0, 150000, 200000, 3000, 5000, 25000, 0, 30000, 0, 2, 'null', 0, '3b04ee0e6c2b8e8a7e7b9aaf3510d4e7425c7138', '2', 'kj', '2023-04-26', '2023-04-12', 0, '2023-04-16 18:18:11', '2023-04-16 18:18:11'),
(3, 2, 'momar', 'jhb', 'bhj', 'bhj', 'Yamaha', 'khn', '6', '1', '20', '2', 3, 3, 3, 'kj', '2', '16/04/2023', '15/01/2024', '9', '3', 0, 50000, 150000, 3000, 5000, 25000, 7500, 30000, 6500, 2, 'null', 0, 'fc8640f84f173c6d70bd8032b520872185edb0b4', '2', 'nj', '2023-04-28', '2023-04-28', 0, '2023-04-16 18:27:42', '2023-04-16 18:27:42'),
(4, 2, 'gg', 'ghvg', 'hj', 'hjb', 'Audi', 'ju', '5', '2', '20', '575', 2, 3, 54, 'ghcfh', '2', '21/04/2023', '20/12/2023', '8', '7', 0, 50000, 250000, 3000, 5000, 25000, 7500, 45000, 6500, 2, 'null', 0, '0b61ffda7ae2e1816e358aa372e4770b3e14c441', '445', 'jg', '2023-04-19', '2023-04-27', 0, '2023-04-21 20:05:48', '2023-04-21 20:05:48'),
(5, 545, 'yc', 'ghg', 'ghg', 'gvg', 'Nissan', 'hj', '13', '1', '20', '5', 454, 6545, 454, 'kb', '4656', '29/04/2023', '28/07/2023', '3', '4545', 0, 0, 200000, 0, 0, 0, 0, 0, 0, 2, 'null', 0, '6e8008990aec546409bcd2a28ef92dda5034865e', '2', '5645', '2023-04-28', '2023-04-06', 0, '2023-04-29 21:41:03', '2023-04-29 21:41:03'),
(6, 12, 'eden', 'hazard', 'casa', 'casa', 'Nissan', 'mo', '1', '1', '20', '4545', 654, 465, 45, '4', '54', '29/04/2023', '28/09/2023', '5', '4', 0, 75000, 0, 0, 0, 0, 0, 0, 0, 2, 'null', 0, '2b5180b342edb3a046c1d84abef7f6b2c9dd56d1', '45', '646', '2023-04-21', '2023-04-28', 0, '2023-04-29 21:55:35', '2023-04-29 21:55:35'),
(7, 5, 'hjh', 'g', 'gh', 'bh', 'Nissan', '5', '16', '1', '20', '2', 2, 2, 3, '45', '3', '30/04/2023', '29/09/2023', '5', '3', 0, 150000, 150000, 0, 0, 0, 0, 45000, 0, 2, 'null', 0, '8cb3dcf7069d23d3b106d96f935019a402d8dfb2', '44', '45', '2023-04-27', '2023-04-20', 0, '2023-04-30 18:09:48', '2023-04-30 18:09:48'),
(8, 2, 'momar', 'df', 'gf', 'gh', 'Nissan', '4', '14', '1', '1', '42', 1, 45, 4, '4', '2', '30/04/2023', '29/11/2023', '7', '2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'null', 0, 'a186de623f3a7c9edeacb140e3de7e4b66fce281', '45', '4545', '2023-05-04', '2023-04-13', 0, '2023-04-30 19:24:02', '2023-04-30 19:24:02'),
(9, 4, 'momar', 'hb', 'hj', 'b', 'Nissan', '4', '2', '1', '1', '4', 65, 5, 45, '45', '5', '02/05/2023', '01/07/2023', '2', '5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'null', 0, '03624112c79dd1b7e153468c7fbd1b48fd225b3f', '466', '5', '2023-05-31', '2023-05-18', 0, '2023-05-01 22:29:12', '2023-05-01 22:29:12'),
(10, 2, 'momar', 'gfv', 'iugiyg', 'gvhjvh', 'Toyota', '4564', '5', '1', '1', '45', 6556, 574574, 65, 'khk', '2', '08/05/2023', '07/10/2023', '5', '454', 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'null', 0, '0b3b133498c6df48c6c81fd1cd7fe4b5d93cbf96', '64688', '544', '2023-05-10', '2023-05-18', 0, '2023-05-08 19:41:48', '2023-05-08 19:41:48'),
(11, 2, 'jb', 'bhj', 'kbh', 'kjb', 'Toyota', '45', '1', '1', '1', '46', 46, 4, 2, '65', '2', '09/06/2023', '08/12/2023', '6', '3', 0, 75000, 150000, 3000, 5000, 25000, 4000, 30000, 6500, 2, 'null', 0, '84987989f67597a239f924cba442e80945c89e35', '6', '5', '2023-06-21', '2023-06-22', 0, '2023-06-09 21:40:48', '2023-06-09 21:40:48'),
(12, 54, 'momar', 'dieng', 'chauffeur', 'dakar', 'Mercedes', 'Class c', '3', '1', '1', '5', 45752, 1565, 89752, 'A785', '455', '21/06/2023', '20/11/2023', '5', '4521', 0, 100000, 150000, 0, 0, 25000, 0, 15000, 6500, 2, 'null', 0, 'e7a608adc4e6f0e7c07c6e514186a1f7a9c11b9e', '785425623', 'DK7845', '2023-06-02', '2023-06-08', 0, '2023-06-21 12:08:52', '2023-06-21 12:08:52'),
(13, 2, 'momar', 'dieng', 'informaticien', 'casablanca', 'Toyota', 'v2', '4', '1', '20', '5', 4554, 454545, 45, '54645', '2', '11/07/2023', '10/01/2024', '6', '4', 0, 100000, 0, 0, 0, 0, 4000, 30000, 0, 2, 'null', 0, '2e1186f0897caac960766f4438a3c69e2abe10f9', '777777777', '5454', '2023-07-12', '2023-07-19', 0, '2023-07-11 17:22:57', '2023-07-11 17:22:57'),
(14, 5, 'momar', 'dieng', 'chauffeur', 'casablanca', 'Nissan', 'g1', '12', '1', '20', '6', 55, 45645, 44141, '411', '45', '11/07/2023', '10/09/2023', '2', '5', 0, 100000, 0, 0, 0, 0, 0, 15000, 0, 2, 'null', 0, '3629036c301be89ddd5ee466aedec83faab29c8a', '265566565', '65655', '2023-07-20', '2023-07-13', 0, '2023-07-11 21:25:10', '2023-07-11 21:25:10'),
(15, 22, 'momar', 'dieng', 'chaufeur', 'thies', 'Audi', 'g2', '3', '2', '21', '34', 4434343, 34535346, 454545, 'ghvg', '334', '11/07/2023', '10/10/2023', '3', '334', 0, 100000, 250000, 10360604, 17267673, 25000, 4000, 30000, 6500, 2, 'null', 0, '2fb244b8229f0e2cd1d1a995b9caf0db180fac05', '784380485', 'bjhh', '2023-07-13', '2023-07-08', 0, '2023-07-11 21:51:30', '2023-07-11 21:51:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
