-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 24 juil. 2023 à 15:36
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
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$H3COboXpj9cjssXjbSsIbuZHpSMV3hNe7L9/PfBY9oOmq.Lco8dSG', NULL, '2023-03-03 20:34:34', '2023-03-03 20:34:34'),
(3, 'momar', 'admin@gmail.com', NULL, 'a2cd71436fbfabbd67193156bd6a8b14a2ddc5f8', NULL, NULL, NULL),
(4, 'admin', 'admin@admin.sn', NULL, '$2y$10$9f3ZQtXW2r0h3lmRYWlNDuRkqTlM44Zn4VW5tgo/QBXrlgJAbI0R2', NULL, '2023-07-22 00:01:03', '2023-07-22 00:01:03');

-- --------------------------------------------------------

--
-- Structure de la table `assurances`
--

CREATE TABLE `assurances` (
  `id` bigint UNSIGNED NOT NULL,
  `numero_client` bigint NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_de_place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `valeur_neuve` bigint NOT NULL DEFAULT '0',
  `valeur_venale` bigint NOT NULL DEFAULT '0',
  `nom_sur_la_carte_grise` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_police` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_effet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_echeance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_avenant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsabilite_civile` bigint NOT NULL DEFAULT '0',
  `thierce_complete` bigint NOT NULL DEFAULT '0',
  `thierce_complete_franchise` bigint NOT NULL DEFAULT '0',
  `thierce_collision` bigint NOT NULL DEFAULT '0',
  `thierce_collision_franchise` bigint NOT NULL DEFAULT '0',
  `vol` bigint NOT NULL DEFAULT '0',
  `vol_franchise` bigint NOT NULL DEFAULT '0',
  `incendie` bigint NOT NULL DEFAULT '0',
  `incendie_franchise` bigint NOT NULL DEFAULT '0',
  `bris_de_glace` bigint NOT NULL DEFAULT '0',
  `defence_et_recours` bigint NOT NULL DEFAULT '0',
  `defence_et_recours_capital_garanti` bigint NOT NULL DEFAULT '0',
  `avance_sur_recours` bigint NOT NULL DEFAULT '0',
  `avance_sur_recours_capital_garanti` bigint NOT NULL DEFAULT '0',
  `personnes_transportees` bigint NOT NULL DEFAULT '0',
  `id_apporter` int NOT NULL,
  `assurance_choisit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `prime_ttc` bigint NOT NULL DEFAULT '0',
  `taxes` bigint NOT NULL DEFAULT '0',
  `prime_nette` bigint NOT NULL DEFAULT '0',
  `rga` bigint NOT NULL DEFAULT '0',
  `accessoires` bigint NOT NULL DEFAULT '0',
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `immatriculation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mise_en_circulation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valider` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `niveau` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_rc` int NOT NULL DEFAULT '0',
  `commissions_apporteur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commissions_accessoires` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assurances`
--

INSERT INTO `assurances` (`id`, `numero_client`, `prenom`, `nom`, `profession`, `adresse`, `marque`, `modele`, `puissance`, `energie`, `categorie`, `nombre_de_place`, `valeur_neuve`, `valeur_venale`, `nom_sur_la_carte_grise`, `numero_police`, `date_effet`, `date_echeance`, `dure`, `numero_avenant`, `responsabilite_civile`, `thierce_complete`, `thierce_complete_franchise`, `thierce_collision`, `thierce_collision_franchise`, `vol`, `vol_franchise`, `incendie`, `incendie_franchise`, `bris_de_glace`, `defence_et_recours`, `defence_et_recours_capital_garanti`, `avance_sur_recours`, `avance_sur_recours_capital_garanti`, `personnes_transportees`, `id_apporter`, `assurance_choisit`, `prime_ttc`, `taxes`, `prime_nette`, `rga`, `accessoires`, `telephone`, `immatriculation`, `date_de_naissance`, `mise_en_circulation`, `valider`, `created_at`, `updated_at`, `niveau`, `bonus_rc`, `commissions_apporteur`, `commissions_accessoires`) VALUES
(4, 433, 'momar', 'dieng', 'hgvg', 'thies', 'Audi', 'hgg', '5', '2', '21', '15', 76676, 7667766, 'jinf', '66756', '2023-07-09', '08/11/2023', '4', '5656', 40282, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 48617, 4328, 40282, 1007, 3000, '784380485', 'jhbjh', '2023-07-14', '2023-07-28', 1, '2023-07-22 18:06:43', '2023-07-22 18:06:43', 'vehicule', 10, '9723.4', '3000'),
(5, 66, 'momar', 'dieng', 'gvgy', 'thies', 'Yamaha', 'gbd', '4', '1', 'null', '0', 0, 0, 'gbdgh b', '776', '2023-07-14', '13/12/2023', '5', '27676', 16097, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 21409, 1910, 16097, 402, 3000, '784380485', 'gyubcdhc', '2023-07-20', '2023-07-27', 1, '2023-07-22 19:05:13', '2023-07-22 19:05:13', 'deux roues', 10, '4281.8', '3000'),
(6, 76, 'momar', 'dieng', 'hgbfd', 'thies', 'Audi', 'ghbfd', '2', '2', '22', '778', 66767, 766767, 'buhfhud', '778878', '2023-07-14', '13/11/2023', '4', '777878', 27160, 6343, 50000, 1035, 250000, 230030, 30000, 383384, 0, 0, 4000, 250000, 45000, 1500000, 13000, 2, 'axa', 3349025, 304395, 3028951, 679, 15000, '784380485', 'hbcd', '2023-07-23', '2023-07-30', 1, '2023-07-22 19:14:59', '2023-07-22 19:14:59', 'tpv', 15, '669805', '15000'),
(7, 87, 'momar', 'dieng', 'hubded', 'thies', 'Toyota', 'bhc ', '2', '1', '22', '7887', 78787, 7878787, 'hjncdhc', '8787', '2023-07-13', '12/11/2023', '4', '78787', 31953, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 39247, 3495, 31953, 799, 3000, '784380485', 'hcddc', '2023-07-15', '2023-07-28', 1, '2023-07-23 12:17:16', '2023-07-23 12:17:16', 'vehicule', 0, '7849.4', '3000'),
(8, 53353, 'abdou', 'fall', 'informaticien', 'thies', 'Audi', 'ghvgh', '6', '1', '30', '355', 343434, 223323, 'hbujuyh', '3', '2023-07-09', '08/10/2023', '3', '3433', 34927, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 42593, 3793, 34927, 873, 3000, '784380485', 'hbh', '2023-07-22', '2023-07-28', 1, '2023-07-23 23:04:16', '2023-07-23 23:04:16', 'vehicule', 0, '8518.6', '3000'),
(9, 156561, 'modou', 'fall', 'chauffeur', 'thies', 'Mercedes', 'V2', '2', '1', 'null', '0', 0, 0, 'momar dieng', '3666', '2023-07-09', '08/11/2023', '4', '67667', 9276, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 13736, 1228, 9276, 232, 3000, '784380485', '53663', '2023-07-28', '2023-07-29', 1, '2023-07-23 23:51:45', '2023-07-23 23:51:45', 'deux roues', 10, '2747.2', '3000'),
(10, 28778, 'momar', 'dieng', 'hgg', 'thies', 'Audi', 'HHG', '8', '1', '22', '76', 5655, 66767, 'gbghb', '65', '2023-07-08', '07/02/2024', '7', '3', 79879, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 95364, 8488, 79879, 1997, 5000, '784380485', 'hhhj', '2023-07-23', '2023-07-22', 1, '2023-07-24 00:22:50', '2023-07-24 00:22:50', 'vehicule', 0, '19072.8', '5000'),
(11, 6776, 'momar', 'dieng', 'hgj', 'thies', 'Audi', 'jhhj', '2', '1', 'null', '0', 0, 0, 'hbhb', '4', '2023-07-08', '07/10/2023', '3', '-3', 7730, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 11996, 1073, 7730, 193, 3000, '784380485', 'ghbgh', '2023-07-22', '2023-07-29', 1, '2023-07-24 00:23:47', '2023-07-24 00:23:47', 'deux roues', 0, '2399.2', '3000'),
(12, 76, 'momar', 'dieng', 'bhh', 'thies', 'Yamaha', 'jh', '3', '1', '21', '3', 87, 6556, 'jjk', '43434', '2023-07-09', '08/03/2024', '8', '3443', 60124, 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0, 0, 0, 0, 0, 2, 'axa', 73139, 6512, 60124, 1503, 5000, '784380485', 'hb', '2023-07-28', '2023-07-23', 1, '2023-07-24 00:25:30', '2023-07-24 00:25:30', 'tpv', 15, '14627.8', '5000');

-- --------------------------------------------------------

--
-- Structure de la table `assurance_voyages`
--

CREATE TABLE `assurance_voyages` (
  `id` bigint UNSIGNED NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_passport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_validite_passeport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motif_voyage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_depart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_retour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` int NOT NULL,
  `id_apporter` int NOT NULL,
  `assurance_choisit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valider` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prime_ttc` bigint NOT NULL DEFAULT '0',
  `numero_police` int DEFAULT NULL,
  `commissions_apporteur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commissions_accessoires` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assurance_voyages`
--

INSERT INTO `assurance_voyages` (`id`, `prenom`, `nom`, `date_de_naissance`, `age`, `profession`, `adresse`, `numero_passport`, `date_validite_passeport`, `motif_voyage`, `pays`, `formule`, `date_depart`, `date_retour`, `duree`, `id_apporter`, `assurance_choisit`, `valider`, `created_at`, `updated_at`, `prime_ttc`, `numero_police`, `commissions_apporteur`, `commissions_accessoires`) VALUES
(1, 'momar', 'dieng', '2023-07-23', 18, 'hb', 'thies', 'bhb', 'hbhh', 'hbh', 'Algerie', 'afrique-europe-moyen orient', '2023-07-08', '2023-07-30', 4, 2, 'axa', 1, '2023-07-21 00:18:36', '2023-07-21 00:18:36', 25889, 116565, NULL, NULL),
(2, 'momar', 'dieng', '2023-07-23', 27, 'info', 'thies', 'hbbefuv', 'hbhcdhc', 'bcdhb', 'Andorre', 'afrique-europe-moyen orient', '2023-07-08', '2023-07-08', 3, 2, 'axa', 1, '2023-07-21 13:45:49', '2023-07-21 13:45:49', 33141, 561561, NULL, NULL),
(4, 'momar', 'dieng', '2023-07-09', 25, 'agent', 'thies', 'AZVG5565', 'A455454', 'voyage', 'Angola', 'monde entier', '2023-07-09', '2023-06-30', 15, 2, 'axa', 1, '2023-07-24 00:17:17', '2023-07-24 00:17:17', 33141, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `compagnies`
--

CREATE TABLE `compagnies` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `incendies`
--

CREATE TABLE `incendies` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(96, '2014_10_12_000000_create_users_table', 1),
(97, '2014_10_12_100000_create_password_resets_table', 1),
(98, '2019_08_19_000000_create_failed_jobs_table', 1),
(99, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(100, '2023_03_02_230105_create_admins_table', 1),
(101, '2023_03_13_230643_create_tarif_rc_automobiles_table', 1),
(102, '2023_03_25_211349_create_tarif2_roues_table', 1),
(103, '2023_04_05_235354_create_assurances_table', 1),
(104, '2023_04_07_002444_create_thierce_complete_automobiles_table', 1),
(105, '2023_04_07_002805_create_thierce_collision_automobiles_table', 1),
(106, '2023_04_09_003207_create_incendies_table', 1),
(107, '2023_07_08_153627_create_voyage_prime_t_t_c_s_table', 1),
(108, '2023_07_11_162232_create_assurance_voyages_table', 1),
(109, '2023_07_15_224703_create_compagnies_table', 1),
(110, '2023_07_17_171247_create_tpv_rc_essences_table', 1),
(111, '2023_07_17_171847_create_tpv_rc_diesels_table', 1),
(112, '2023_07_17_214323_add_column_to_table', 1),
(113, '2023_07_19_231546_ajouter_reduction_assurance', 1),
(114, '2023_07_20_165445_prime_ttc', 1),
(115, '2023_07_21_174348_rename_numero_attestation_assurances', 2),
(117, '2023_07_21_180447_add_numero_police_to_assurance_voyages', 3),
(118, '2023_07_22_013804_ajouter_prenom_users', 4),
(119, '2023_07_22_171054_add_code_apporter_users', 5),
(120, '2023_07_22_171811_add_adresse_users', 6),
(121, '2023_07_22_185125_add_commission_a_assurances', 7),
(122, '2023_07_22_185455_add_commission_a_assurance_voyages', 7),
(123, '2023_07_23_012424_add_commissios_a_users', 8);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif2_roues`
--

CREATE TABLE `tarif2_roues` (
  `id` bigint UNSIGNED NOT NULL,
  `type` int NOT NULL,
  `axa` bigint NOT NULL,
  `amsa` bigint NOT NULL,
  `wafa` bigint NOT NULL,
  `cnart` bigint NOT NULL,
  `allianz` bigint NOT NULL,
  `nsia` bigint NOT NULL,
  `askia` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarif2_roues`
--

INSERT INTO `tarif2_roues` (`id`, `type`, `axa`, `amsa`, `wafa`, `cnart`, `allianz`, `nsia`, `askia`, `created_at`, `updated_at`) VALUES
(1, 1, 18780, 18780, 18780, 18780, 18780, 18780, 15024, NULL, NULL),
(2, 2, 29448, 29448, 29448, 29448, 29448, 29448, 23558, NULL, NULL),
(3, 3, 34021, 34021, 34021, 34021, 34021, 34021, 27217, NULL, NULL),
(4, 4, 40880, 40880, 40880, 40880, 40880, 40880, 32704, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tarif_rc_automobiles`
--

CREATE TABLE `tarif_rc_automobiles` (
  `id` bigint UNSIGNED NOT NULL,
  `categories` int NOT NULL,
  `energie` int NOT NULL,
  `puissance` int NOT NULL,
  `axa` bigint NOT NULL,
  `amsa` bigint NOT NULL,
  `wafa` bigint NOT NULL,
  `cnart` bigint NOT NULL,
  `allianz` bigint NOT NULL,
  `nsia` bigint NOT NULL,
  `askia` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarif_rc_automobiles`
--

INSERT INTO `tarif_rc_automobiles` (`id`, `categories`, `energie`, `puissance`, `axa`, `amsa`, `wafa`, `cnart`, `allianz`, `nsia`, `askia`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 37601, 37601, 37601, 37601, 37601, 37601, 30081, NULL, NULL),
(2, 1, 1, 2, 37601, 37601, 37601, 37601, 37601, 37601, 30081, NULL, NULL),
(3, 1, 1, 3, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(4, 1, 1, 4, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(5, 1, 1, 5, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(6, 1, 1, 6, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(7, 1, 1, 7, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(8, 1, 1, 8, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(9, 1, 1, 9, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(10, 1, 1, 10, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(11, 1, 1, 11, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(12, 1, 1, 12, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(13, 1, 1, 13, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(14, 1, 1, 14, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(15, 1, 1, 15, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(16, 1, 1, 16, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(17, 1, 1, 17, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(18, 1, 1, 18, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(19, 1, 1, 19, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(20, 1, 1, 20, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(21, 1, 1, 21, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(22, 1, 1, 22, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(23, 1, 1, 23, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(24, 1, 1, 24, 104155, 104155, 104155, 104155, 104155, 104155, 83324, NULL, NULL),
(25, 1, 2, 1, 37601, 37601, 37601, 37601, 37601, 37601, 30081, NULL, NULL),
(26, 1, 2, 2, 37601, 37601, 37601, 37601, 37601, 37601, 30081, NULL, NULL),
(27, 1, 2, 3, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(28, 1, 2, 4, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(29, 1, 2, 5, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(30, 1, 2, 6, 45181, 45181, 45181, 45181, 45181, 45181, 36145, NULL, NULL),
(31, 1, 2, 7, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(32, 1, 2, 8, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(33, 1, 2, 9, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(34, 1, 2, 10, 51078, 51078, 51078, 51078, 51078, 51078, 40862, NULL, NULL),
(35, 1, 2, 11, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(36, 1, 2, 12, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(37, 1, 2, 13, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(38, 1, 2, 14, 65677, 65677, 65677, 65677, 65677, 65677, 52542, NULL, NULL),
(39, 1, 2, 15, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(40, 1, 2, 16, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(41, 1, 2, 17, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(42, 1, 2, 18, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(43, 1, 2, 19, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(44, 1, 2, 20, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(45, 1, 2, 21, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(46, 1, 2, 22, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(47, 1, 2, 23, 86456, 86456, 86456, 86456, 86456, 86456, 69165, NULL, NULL),
(48, 1, 2, 24, 104155, 104155, 104155, 104155, 104155, 104155, 83324, NULL, NULL),
(49, 20, 1, 1, 56958, 56958, 56958, 56958, 56958, 56958, 45566, NULL, NULL),
(50, 20, 1, 2, 56958, 56958, 56958, 56958, 56958, 56958, 45566, NULL, NULL),
(51, 20, 1, 3, 67644, 67644, 67644, 67644, 67644, 67644, 54115, NULL, NULL),
(52, 20, 1, 4, 67644, 67644, 67644, 67644, 67644, 67644, 54115, NULL, NULL),
(53, 20, 1, 5, 67644, 67644, 67644, 67644, 67644, 67644, 54115, NULL, NULL),
(54, 20, 1, 6, 67644, 67644, 67644, 67644, 67644, 67644, 54115, NULL, NULL),
(55, 20, 1, 7, 78974, 78974, 78974, 78974, 78974, 78974, 63179, NULL, NULL),
(56, 20, 1, 8, 78974, 78974, 78974, 78974, 78974, 78974, 63179, NULL, NULL),
(57, 20, 1, 9, 78974, 78974, 78974, 78974, 78974, 78974, 63179, NULL, NULL),
(58, 20, 1, 10, 78974, 78974, 78974, 78974, 78974, 78974, 63179, NULL, NULL),
(59, 20, 1, 11, 113944, 113944, 113944, 113944, 113944, 113944, 91155, NULL, NULL),
(60, 20, 1, 12, 113944, 113944, 113944, 113944, 113944, 113944, 91155, NULL, NULL),
(61, 20, 1, 13, 113944, 113944, 113944, 113944, 113944, 113944, 91155, NULL, NULL),
(62, 20, 1, 14, 113944, 113944, 113944, 113944, 113944, 113944, 91155, NULL, NULL),
(63, 20, 1, 15, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(64, 20, 1, 16, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(65, 20, 1, 17, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(66, 20, 1, 18, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(67, 20, 1, 19, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(68, 20, 1, 20, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(69, 20, 1, 21, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(70, 20, 1, 22, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(71, 20, 1, 23, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(72, 20, 1, 24, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(73, 20, 2, 1, 56958, 56958, 56958, 56958, 56958, 56958, 45566, NULL, NULL),
(74, 20, 2, 2, 56958, 56958, 56958, 56958, 56958, 56958, 45566, NULL, NULL),
(75, 20, 2, 3, 67644, 67644, 67644, 67644, 67644, 67644, 54115, NULL, NULL),
(76, 20, 2, 4, 67644, 67644, 67644, 67644, 67644, 67644, 54115, NULL, NULL),
(77, 20, 2, 5, 78974, 78974, 78974, 78974, 78974, 78974, 63179, NULL, NULL),
(78, 20, 2, 6, 78974, 78974, 78974, 78974, 78974, 78974, 63179, NULL, NULL),
(79, 20, 2, 7, 78974, 78974, 78974, 78974, 78974, 78974, 63179, NULL, NULL),
(80, 20, 2, 8, 113944, 113944, 113944, 113944, 113944, 113944, 91155, NULL, NULL),
(81, 20, 2, 9, 113944, 113944, 113944, 113944, 113944, 113944, 91155, NULL, NULL),
(82, 20, 2, 10, 113944, 113944, 113944, 113944, 113944, 113944, 91155, NULL, NULL),
(83, 20, 2, 11, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(84, 20, 2, 12, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(85, 20, 2, 13, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(86, 20, 2, 14, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(87, 20, 2, 15, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(88, 20, 2, 16, 146969, 146969, 146969, 146969, 146969, 146969, 117575, NULL, NULL),
(89, 20, 2, 17, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(90, 20, 2, 18, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(91, 20, 2, 19, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(92, 20, 2, 20, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(93, 20, 2, 21, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(94, 20, 2, 22, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(95, 20, 2, 23, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(96, 20, 2, 24, 174491, 174491, 174491, 174491, 174491, 174491, 139593, NULL, NULL),
(97, 21, 1, 1, 88759, 88759, 88759, 88759, 88759, 88759, 71007, NULL, NULL),
(98, 21, 1, 2, 88760, 88760, 88760, 88760, 88760, 88760, 71008, NULL, NULL),
(99, 21, 1, 3, 101048, 101048, 101048, 101048, 101048, 101048, 80838, NULL, NULL),
(100, 21, 1, 4, 101048, 101048, 101048, 101048, 101048, 101048, 80838, NULL, NULL),
(101, 21, 1, 5, 101048, 101048, 101048, 101048, 101048, 101048, 80838, NULL, NULL),
(102, 21, 1, 6, 101048, 101048, 101048, 101048, 101048, 101048, 80838, NULL, NULL),
(103, 21, 1, 7, 127880, 127880, 127880, 127880, 127880, 127880, 102304, NULL, NULL),
(104, 21, 1, 8, 127880, 127880, 127880, 127880, 127880, 127880, 102304, NULL, NULL),
(105, 21, 1, 9, 127880, 127880, 127880, 127880, 127880, 127880, 102304, NULL, NULL),
(106, 21, 1, 10, 127880, 127880, 127880, 127880, 127880, 127880, 102304, NULL, NULL),
(107, 21, 1, 11, 168085, 168085, 168085, 168085, 168085, 168085, 134468, NULL, NULL),
(108, 21, 1, 12, 168085, 168085, 168085, 168085, 168085, 168085, 134468, NULL, NULL),
(109, 21, 1, 13, 168085, 168085, 168085, 168085, 168085, 168085, 134468, NULL, NULL),
(110, 21, 1, 14, 168085, 168085, 168085, 168085, 168085, 168085, 134468, NULL, NULL),
(111, 21, 1, 15, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(112, 21, 1, 16, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(113, 21, 1, 17, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(114, 21, 1, 18, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(115, 21, 1, 19, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(116, 21, 1, 20, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(117, 21, 1, 21, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(118, 21, 1, 22, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(119, 21, 1, 23, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(120, 21, 1, 24, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(121, 21, 2, 1, 88759, 88759, 88759, 88759, 88759, 88759, 71007, NULL, NULL),
(122, 21, 2, 2, 88759, 88759, 88759, 88759, 88759, 88759, 71007, NULL, NULL),
(123, 21, 2, 3, 101048, 101048, 101048, 101048, 101048, 101048, 80838, NULL, NULL),
(124, 21, 2, 4, 101048, 101048, 101048, 101048, 101048, 101048, 80838, NULL, NULL),
(125, 21, 2, 5, 127880, 127880, 127880, 127880, 127880, 127880, 102304, NULL, NULL),
(126, 21, 2, 6, 127880, 127880, 127880, 127880, 127880, 127880, 102304, NULL, NULL),
(127, 21, 2, 7, 127880, 127880, 127880, 127880, 127880, 127880, 102304, NULL, NULL),
(128, 21, 2, 8, 168085, 168085, 168085, 168085, 168085, 168085, 124468, NULL, NULL),
(129, 21, 2, 9, 168085, 168085, 168085, 168085, 168085, 168085, 124468, NULL, NULL),
(130, 21, 2, 10, 168085, 168085, 168085, 168085, 168085, 168085, 124468, NULL, NULL),
(131, 21, 2, 11, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(132, 21, 2, 12, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(133, 21, 2, 13, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(134, 21, 2, 14, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(135, 21, 2, 15, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(136, 21, 2, 16, 206063, 206063, 206063, 206063, 206063, 206063, 164850, NULL, NULL),
(137, 21, 2, 17, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(138, 21, 2, 18, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(139, 21, 2, 19, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(140, 21, 2, 20, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(141, 21, 2, 21, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(142, 21, 2, 22, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(143, 21, 2, 23, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(144, 21, 2, 24, 237710, 237710, 237710, 237710, 237710, 237710, 190168, NULL, NULL),
(145, 22, 1, 1, 91294, 91294, 91294, 91294, 91294, 91294, 73035, NULL, NULL),
(146, 22, 1, 2, 91294, 91294, 91294, 91294, 91294, 91294, 73035, NULL, NULL),
(147, 22, 1, 3, 103580, 103580, 103580, 103580, 103580, 103580, 82864, NULL, NULL),
(148, 22, 1, 4, 103580, 103580, 103580, 103580, 103580, 103580, 82864, NULL, NULL),
(149, 22, 1, 5, 103580, 103580, 103580, 103580, 103580, 103580, 82864, NULL, NULL),
(150, 22, 1, 6, 103580, 103580, 103580, 103580, 103580, 103580, 82864, NULL, NULL),
(151, 22, 1, 7, 130415, 130415, 130415, 130415, 130415, 130415, 104332, NULL, NULL),
(152, 22, 1, 8, 130415, 130415, 130415, 130415, 130415, 130415, 104332, NULL, NULL),
(153, 22, 1, 9, 130415, 130415, 130415, 130415, 130415, 130415, 104332, NULL, NULL),
(154, 22, 1, 10, 130415, 130415, 130415, 130415, 130415, 130415, 104332, NULL, NULL),
(155, 22, 1, 11, 170617, 170617, 170617, 170617, 170617, 170617, 136494, NULL, NULL),
(156, 22, 1, 12, 170617, 170617, 170617, 170617, 170617, 170617, 136494, NULL, NULL),
(157, 22, 1, 13, 170617, 170617, 170617, 170617, 170617, 170617, 136494, NULL, NULL),
(158, 22, 1, 14, 170617, 170617, 170617, 170617, 170617, 170617, 136494, NULL, NULL),
(159, 22, 1, 15, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(160, 22, 1, 16, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(161, 22, 1, 17, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(162, 22, 1, 18, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(163, 22, 1, 19, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(164, 22, 1, 20, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(165, 22, 1, 21, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(166, 22, 1, 22, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(167, 22, 1, 23, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(168, 22, 1, 24, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(169, 22, 2, 1, 91294, 91294, 91294, 91294, 91294, 91294, 73035, NULL, NULL),
(170, 22, 2, 2, 91294, 91294, 91294, 91294, 91294, 91294, 73035, NULL, NULL),
(171, 22, 2, 3, 103580, 103580, 103580, 103580, 103580, 103580, 82864, NULL, NULL),
(172, 22, 2, 4, 103580, 103580, 103580, 103580, 103580, 103580, 82864, NULL, NULL),
(173, 22, 2, 5, 130415, 130415, 130415, 130415, 130415, 130415, 104332, NULL, NULL),
(174, 22, 2, 6, 130415, 130415, 130415, 130415, 130415, 130415, 104332, NULL, NULL),
(175, 22, 2, 7, 130415, 130415, 130415, 130415, 130415, 130415, 104332, NULL, NULL),
(176, 22, 2, 8, 170617, 170617, 170617, 170617, 170617, 170617, 136494, NULL, NULL),
(177, 22, 2, 9, 170617, 170617, 170617, 170617, 170617, 170617, 136494, NULL, NULL),
(178, 22, 2, 10, 170617, 170617, 170617, 170617, 170617, 170617, 136494, NULL, NULL),
(179, 22, 2, 11, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(180, 22, 2, 12, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(181, 22, 2, 13, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(182, 22, 2, 14, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(183, 22, 2, 15, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(184, 22, 2, 16, 208597, 208597, 208597, 208597, 208597, 208597, 166878, NULL, NULL),
(185, 22, 2, 17, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(186, 22, 2, 18, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(187, 22, 2, 19, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(188, 22, 2, 20, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(189, 22, 2, 21, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(190, 22, 2, 22, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(191, 22, 2, 23, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(192, 22, 2, 24, 240245, 240245, 240245, 240245, 240245, 240245, 192196, NULL, NULL),
(193, 30, 1, 1, 115559, 115559, 115559, 115559, 115559, 115559, 92447, NULL, NULL),
(194, 30, 1, 2, 115559, 115559, 115559, 115559, 115559, 115559, 92447, NULL, NULL),
(195, 30, 1, 3, 133056, 133056, 133056, 133056, 133056, 133056, 106445, NULL, NULL),
(196, 30, 1, 4, 133056, 133056, 133056, 133056, 133056, 133056, 106445, NULL, NULL),
(197, 30, 1, 5, 133056, 133056, 133056, 133056, 133056, 133056, 106445, NULL, NULL),
(198, 30, 1, 6, 133056, 133056, 133056, 133056, 133056, 133056, 106445, NULL, NULL),
(199, 30, 1, 7, 165601, 165601, 165601, 165601, 165601, 165601, 132481, NULL, NULL),
(200, 30, 1, 8, 165601, 165601, 165601, 165601, 165601, 165601, 132481, NULL, NULL),
(201, 30, 1, 9, 165601, 165601, 165601, 165601, 165601, 165601, 132481, NULL, NULL),
(202, 30, 1, 10, 165601, 165601, 165601, 165601, 165601, 165601, 132481, NULL, NULL),
(203, 30, 1, 11, 222270, 222270, 222270, 222270, 222270, 222270, 177816, NULL, NULL),
(204, 30, 1, 12, 222270, 222270, 222270, 222270, 222270, 222270, 177816, NULL, NULL),
(205, 30, 1, 13, 222270, 222270, 222270, 222270, 222270, 222270, 177816, NULL, NULL),
(206, 30, 1, 14, 222270, 222270, 222270, 222270, 222270, 222270, 177816, NULL, NULL),
(207, 30, 1, 15, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(208, 30, 1, 16, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(209, 30, 1, 17, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(210, 30, 1, 18, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(211, 30, 1, 19, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(212, 30, 1, 20, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(213, 30, 1, 21, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(214, 30, 1, 22, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(215, 30, 1, 23, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(216, 30, 1, 24, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(217, 30, 2, 1, 115559, 115559, 115559, 115559, 115559, 115559, 92447, NULL, NULL),
(218, 30, 2, 2, 115559, 115559, 115559, 115559, 115559, 115559, 92447, NULL, NULL),
(219, 30, 2, 3, 133056, 133056, 133056, 133056, 133056, 133056, 106445, NULL, NULL),
(220, 30, 2, 4, 133056, 133056, 133056, 133056, 133056, 133056, 106445, NULL, NULL),
(221, 30, 2, 5, 165601, 165601, 165601, 165601, 165601, 165601, 132481, NULL, NULL),
(222, 30, 2, 6, 165601, 165601, 165601, 165601, 165601, 165601, 132481, NULL, NULL),
(223, 30, 2, 7, 165601, 165601, 165601, 165601, 165601, 165601, 132481, NULL, NULL),
(224, 30, 2, 8, 222270, 222270, 222270, 222270, 222270, 222270, 177816, NULL, NULL),
(225, 30, 2, 9, 222270, 222270, 222270, 222270, 222270, 222270, 177816, NULL, NULL),
(226, 30, 2, 10, 222270, 222270, 222270, 222270, 222270, 222270, 177816, NULL, NULL),
(227, 30, 2, 11, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(228, 30, 2, 12, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(229, 30, 2, 13, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(230, 30, 2, 14, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(231, 30, 2, 15, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(232, 30, 2, 16, 283130, 283130, 283130, 283130, 283130, 283130, 226504, NULL, NULL),
(233, 30, 2, 17, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(234, 30, 2, 18, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(235, 30, 2, 19, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(236, 30, 2, 20, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(237, 30, 2, 21, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(238, 30, 2, 22, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(239, 30, 2, 23, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(240, 30, 2, 24, 328955, 328955, 328955, 328955, 328955, 328955, 263164, NULL, NULL),
(241, 31, 1, 1, 117937, 117937, 117937, 117937, 117937, 117937, 94350, NULL, NULL),
(242, 31, 1, 2, 117937, 117937, 117937, 117937, 117937, 117937, 94350, NULL, NULL),
(243, 31, 1, 3, 135437, 135437, 135437, 135437, 135437, 135437, 108350, NULL, NULL),
(244, 31, 1, 4, 135437, 135437, 135437, 135437, 135437, 135437, 108350, NULL, NULL),
(245, 31, 1, 5, 135437, 135437, 135437, 135437, 135437, 135437, 108350, NULL, NULL),
(246, 31, 1, 6, 135437, 135437, 135437, 135437, 135437, 135437, 108350, NULL, NULL),
(247, 31, 1, 7, 167982, 167982, 167982, 167982, 167982, 167982, 134382, NULL, NULL),
(248, 31, 1, 8, 167982, 167982, 167982, 167982, 167982, 167982, 134382, NULL, NULL),
(249, 31, 1, 9, 167982, 167982, 167982, 167982, 167982, 167982, 134382, NULL, NULL),
(250, 31, 1, 10, 167982, 167982, 167982, 167982, 167982, 167982, 134382, NULL, NULL),
(251, 31, 1, 11, 224650, 224650, 224650, 224650, 224650, 224650, 179720, NULL, NULL),
(252, 31, 1, 12, 224650, 224650, 224650, 224650, 224650, 224650, 179720, NULL, NULL),
(253, 31, 1, 13, 224650, 224650, 224650, 224650, 224650, 224650, 179720, NULL, NULL),
(254, 31, 1, 14, 224650, 224650, 224650, 224650, 224650, 224650, 179720, NULL, NULL),
(255, 31, 1, 15, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(256, 31, 1, 16, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(257, 31, 1, 17, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(258, 31, 1, 18, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(259, 31, 1, 19, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(260, 31, 1, 20, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(261, 31, 1, 21, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(262, 31, 1, 22, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(263, 31, 1, 23, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(264, 31, 1, 24, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(265, 31, 2, 1, 117937, 117937, 117937, 117937, 117937, 117937, 94350, NULL, NULL),
(266, 31, 2, 2, 117937, 117937, 117937, 117937, 117937, 117937, 94350, NULL, NULL),
(267, 31, 2, 3, 135437, 135437, 135437, 135437, 135437, 135437, 108350, NULL, NULL),
(268, 31, 2, 4, 135437, 135437, 135437, 135437, 135437, 135437, 108350, NULL, NULL),
(269, 31, 2, 5, 167982, 167982, 167982, 167982, 167982, 167982, 134386, NULL, NULL),
(270, 31, 2, 6, 167982, 167982, 167982, 167982, 167982, 167982, 134386, NULL, NULL),
(271, 31, 2, 7, 167982, 167982, 167982, 167982, 167982, 167982, 134386, NULL, NULL),
(272, 31, 2, 8, 224650, 224650, 224650, 224650, 224650, 224650, 179720, NULL, NULL),
(273, 31, 2, 9, 224650, 224650, 224650, 224650, 224650, 224650, 179720, NULL, NULL),
(274, 31, 2, 10, 224650, 224650, 224650, 224650, 224650, 224650, 179720, NULL, NULL),
(275, 31, 2, 11, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(276, 31, 2, 12, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(277, 31, 2, 13, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(278, 31, 2, 14, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(279, 31, 2, 15, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(280, 31, 2, 16, 285510, 285510, 285510, 285510, 285510, 285510, 228408, NULL, NULL),
(281, 31, 2, 17, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(282, 31, 2, 18, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(283, 31, 2, 19, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(284, 31, 2, 20, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(285, 31, 2, 21, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(286, 31, 2, 22, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(287, 31, 2, 23, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL),
(288, 31, 2, 24, 331336, 331336, 331336, 331336, 331336, 331336, 265069, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `thierce_collision_automobiles`
--

CREATE TABLE `thierce_collision_automobiles` (
  `id` bigint UNSIGNED NOT NULL,
  `franchise` bigint NOT NULL,
  `categorie1` double(8,2) NOT NULL,
  `categorie2_moins_9_cv` double(8,2) NOT NULL,
  `categorie2_plus_9_cv` double(8,2) NOT NULL,
  `categorie3_4` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Structure de la table `thierce_complete_automobiles`
--

CREATE TABLE `thierce_complete_automobiles` (
  `id` bigint UNSIGNED NOT NULL,
  `franchise` bigint NOT NULL,
  `categorie1` double(8,2) NOT NULL,
  `categorie2` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

INSERT INTO `tpv_rc_diesels` (`id`, `puissance`, `energie`, `nombre_de_place_1`, `nombre_de_place_2_a_4`, `nombre_de_place_5_a_7`, `nombre_de_place_8_a_10`, `nombre_de_place_11_a_16`, `nombre_de_place_17`, `created_at`, `updated_at`) VALUES
(1, 3, 'diesel', 9882, 11271, 12760, 17150, 22081, 25382, NULL, NULL),
(2, 4, 'diesel', 9897, 11282, 12772, 17162, 22092, 25393, NULL, NULL),
(3, 5, 'diesel', 11726, 13111, 14601, 18991, 23921, 27222, NULL, NULL),
(4, 6, 'diesel', 13895, 15280, 16769, 21160, 26090, 29391, NULL, NULL),
(5, 7, 'diesel', 16038, 17423, 18912, 23302, 28233, 31534, NULL, NULL),
(6, 8, 'diesel', 18912, 20297, 21787, 26177, 34408, 38589, NULL, NULL),
(7, 9, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(8, 10, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(9, 11, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(10, 12, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(11, 13, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(12, 14, 'disel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(13, 15, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(14, 16, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(15, 17, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(16, 18, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(17, 19, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(18, 20, 'diesel', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(19, 21, 'disel', 23891, 25276, 26765, 31153, 36086, 39387, NULL, NULL),
(20, 22, 'diesel', 24714, 26100, 27589, 36979, 36910, 40210, NULL, NULL),
(21, 23, 'diesel', 25538, 26923, 28413, 32803, 37734, 41034, NULL, NULL),
(22, 24, 'diesel', 26538, 27747, 29237, 33627, 38557, 41858, NULL, NULL),
(23, 25, 'diesel', 27186, 28571, 30060, 34451, 39381, 42682, NULL, NULL),
(24, 26, 'diesel', 28010, 29395, 30884, 35274, 40205, 43506, NULL, NULL),
(25, 27, 'diesel', 28834, 30219, 31708, 36098, 41029, 44329, NULL, NULL),
(26, 28, 'diesel', 29627, 31042, 32532, 36922, 41853, 45153, NULL, NULL),
(27, 29, 'diesel', 30481, 31866, 33356, 37746, 42676, 45977, NULL, NULL),
(28, 30, 'diesel', 32129, 33514, 35003, 39393, 44324, 47625, NULL, NULL),
(29, 31, 'diesel', 32717, 34102, 35592, 39982, 44913, 48213, NULL, NULL),
(30, 32, 'diesel', 33306, 34691, 36180, 40570, 45501, 48802, NULL, NULL),
(31, 33, 'diesel', 33894, 35279, 36769, 41159, 46090, 49390, NULL, NULL),
(32, 34, 'diesel', 34483, 35868, 37357, 41747, 46678, 49979, NULL, NULL),
(33, 35, 'diesel', 35071, 36456, 37946, 42336, 47267, 50567, NULL, NULL),
(34, 36, 'diesel', 35660, 37045, 38534, 42925, 47855, 51156, NULL, NULL),
(35, 37, 'diesel', 36248, 37633, 39123, 43513, 48444, 51744, NULL, NULL),
(36, 38, 'diesel', 36837, 38222, 39711, 44102, 49032, 52333, NULL, NULL),
(37, 39, 'diesel', 37426, 38811, 40300, 44690, 49621, 52921, NULL, NULL),
(38, 40, 'diesel', 38014, 39399, 40888, 45279, 50209, 53510, NULL, NULL),
(39, 41, 'diesel', 38603, 39988, 41477, 45867, 50798, 54098, NULL, NULL),
(40, 42, 'diesel', 39191, 40576, 42066, 46456, 51386, 54687, NULL, NULL),
(41, 43, 'diesel', 39780, 41165, 42654, 47044, 51975, 55276, NULL, NULL),
(42, 44, 'diesel', 40368, 41753, 43243, 47633, 52563, 55864, NULL, NULL),
(43, 45, 'diesel', 40957, 42342, 43831, 48221, 53152, 56463, NULL, NULL),
(44, 46, 'diesel', 41545, 42930, 44420, 48810, 53740, 57041, NULL, NULL),
(45, 47, 'diesel', 42134, 43519, 45008, 49398, 54329, 57630, NULL, NULL),
(46, 48, 'diesel', 42722, 44107, 45597, 49987, 54917, 58218, NULL, NULL),
(47, 49, 'diesel', 43311, 44696, 46185, 50575, 55506, 58807, NULL, NULL),
(48, 50, 'diesel', 43311, 44696, 46185, 50575, 55506, 58807, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tpv_rc_essences`
--

CREATE TABLE `tpv_rc_essences` (
  `id` bigint UNSIGNED NOT NULL,
  `puissance` int NOT NULL,
  `energie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_de_place_2` bigint NOT NULL,
  `nombre_de_place_3_a_6` bigint NOT NULL,
  `nombre_de_place_7_a_10` bigint NOT NULL,
  `nombre_de_place_11_a_14` bigint NOT NULL,
  `nombre_de_place_15_a_23` bigint NOT NULL,
  `nombre_de_place_24` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tpv_rc_essences`
--

INSERT INTO `tpv_rc_essences` (`id`, `puissance`, `energie`, `nombre_de_place_2`, `nombre_de_place_3_a_6`, `nombre_de_place_7_a_10`, `nombre_de_place_11_a_14`, `nombre_de_place_15_a_23`, `nombre_de_place_24`, `created_at`, `updated_at`) VALUES
(1, 3, 'essence', 9882, 11271, 12760, 17150, 22081, 25382, NULL, NULL),
(2, 4, 'essence', 9897, 11282, 12772, 17162, 22092, 25393, NULL, NULL),
(3, 5, 'essence', 11726, 13111, 14601, 18991, 23921, 27222, NULL, NULL),
(4, 6, 'essence', 13895, 15280, 16769, 21160, 26090, 29391, NULL, NULL),
(5, 7, 'essence', 16038, 17423, 18912, 23302, 28233, 31534, NULL, NULL),
(6, 8, 'essence', 18912, 20297, 21787, 26177, 34408, 38589, NULL, NULL),
(7, 9, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(8, 10, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(9, 11, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(10, 12, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(11, 13, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(12, 14, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(13, 15, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(14, 16, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(15, 17, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(16, 18, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(17, 19, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(18, 20, 'essence', 23888, 25273, 26763, 31153, 36084, 39384, NULL, NULL),
(19, 21, 'essence', 23891, 25276, 26765, 31153, 36086, 39387, NULL, NULL),
(20, 22, 'essence', 24714, 26100, 27589, 36979, 36910, 40210, NULL, NULL),
(21, 23, 'essence', 25538, 26923, 28413, 32803, 37734, 41034, NULL, NULL),
(22, 24, 'essence', 26538, 27747, 29237, 33627, 38557, 41858, NULL, NULL),
(23, 25, 'essence', 27186, 28571, 30060, 34451, 39381, 42682, NULL, NULL),
(24, 26, 'essence', 28010, 29395, 30884, 35274, 40205, 43506, NULL, NULL),
(25, 27, 'essence', 28834, 30219, 31708, 36098, 41029, 44329, NULL, NULL),
(26, 28, 'essence', 29627, 31042, 32532, 36922, 41853, 45153, NULL, NULL),
(27, 29, 'essence', 30481, 31866, 33356, 37746, 42676, 45977, NULL, NULL),
(28, 30, 'essence', 32129, 33514, 35003, 39393, 44324, 47625, NULL, NULL),
(29, 31, 'essence', 32717, 34102, 35592, 39982, 44913, 48213, NULL, NULL),
(30, 32, 'essence', 33306, 34691, 36180, 40570, 45501, 48802, NULL, NULL),
(31, 33, 'essence', 33894, 35279, 36769, 41159, 46090, 49390, NULL, NULL),
(32, 34, 'essence', 34483, 35868, 37357, 41747, 46678, 49979, NULL, NULL),
(33, 35, 'essence', 35071, 36456, 37946, 42336, 47267, 50567, NULL, NULL),
(34, 36, 'essence', 35660, 37045, 38534, 42925, 47855, 51156, NULL, NULL),
(35, 37, 'essence', 36248, 37633, 39123, 43513, 48444, 51744, NULL, NULL),
(36, 38, 'essence', 36837, 38222, 39711, 44102, 49032, 52333, NULL, NULL),
(37, 39, 'essence', 37426, 38811, 40300, 44690, 49621, 52921, NULL, NULL),
(38, 40, 'essence', 38014, 39399, 40888, 45279, 50209, 53510, NULL, NULL),
(39, 41, 'essence', 38603, 39988, 41477, 45867, 50798, 54098, NULL, NULL),
(40, 42, 'essence', 39191, 40576, 42066, 46456, 51386, 54687, NULL, NULL),
(41, 43, 'essence', 39780, 41165, 42654, 47044, 51975, 55276, NULL, NULL),
(42, 44, 'essence', 40368, 41753, 43243, 47633, 52563, 55864, NULL, NULL),
(43, 45, 'essence', 40957, 42342, 43831, 48221, 53152, 56463, NULL, NULL),
(44, 46, 'essence', 41545, 42930, 44420, 48810, 53740, 57041, NULL, NULL),
(45, 47, 'essence', 42134, 43519, 45008, 49398, 54329, 57630, NULL, NULL),
(46, 48, 'essence', 42722, 44107, 45597, 49987, 54917, 58218, NULL, NULL),
(47, 49, 'essence', 43311, 44696, 46185, 50575, 55506, 58807, NULL, NULL),
(48, 50, 'essence', 43311, 44696, 46185, 50575, 55506, 58807, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contrat_automobile_vendus` bigint DEFAULT NULL,
  `contrat_voyage_vendus` bigint DEFAULT NULL,
  `contrat_habitation_vendus` bigint DEFAULT NULL,
  `code_apporter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commissions_apporteur` bigint DEFAULT NULL,
  `commissions_accessoires` bigint DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `prenom`, `telephone`, `contrat_automobile_vendus`, `contrat_voyage_vendus`, `contrat_habitation_vendus`, `code_apporter`, `adresse`, `commissions_apporteur`, `commissions_accessoires`) VALUES
(1, 'dieng', 'momar@gmail.com', NULL, 'momardieng', NULL, NULL, NULL, 'momar', '784380485', NULL, NULL, NULL, 'AA653663', 'dakar, point E', NULL, NULL),
(2, 'dieng', 'momar.dieng17@gmail.com', NULL, '$2y$10$OrHNg74M6lbD9lD0z5OnJungS7VBRacREtyOv2bswUB57tIcSpRN2', 'jP0tloVOrK9Hy8B8FARjezSCVNI7jZ8RJwha5pbMRPdDr7oyHMgCb48cYavh', '2023-02-26 16:42:31', '2023-02-26 16:42:31', 'momar', '774235679', NULL, NULL, NULL, 'AB536556', 'dakar, point E', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `voyage_prime_t_t_c_s`
--

CREATE TABLE `voyage_prime_t_t_c_s` (
  `id` bigint UNSIGNED NOT NULL,
  `age` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_destination` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prime_ttc` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `assurances`
--
ALTER TABLE `assurances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assurance_voyages`
--
ALTER TABLE `assurance_voyages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compagnies`
--
ALTER TABLE `compagnies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `incendies`
--
ALTER TABLE `incendies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `tarif2_roues`
--
ALTER TABLE `tarif2_roues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tarif_rc_automobiles`
--
ALTER TABLE `tarif_rc_automobiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `thierce_collision_automobiles`
--
ALTER TABLE `thierce_collision_automobiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `thierce_complete_automobiles`
--
ALTER TABLE `thierce_complete_automobiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tpv_rc_diesels`
--
ALTER TABLE `tpv_rc_diesels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tpv_rc_essences`
--
ALTER TABLE `tpv_rc_essences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_code_apporter_unique` (`code_apporter`);

--
-- Index pour la table `voyage_prime_t_t_c_s`
--
ALTER TABLE `voyage_prime_t_t_c_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `assurances`
--
ALTER TABLE `assurances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `assurance_voyages`
--
ALTER TABLE `assurance_voyages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `compagnies`
--
ALTER TABLE `compagnies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `incendies`
--
ALTER TABLE `incendies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tarif2_roues`
--
ALTER TABLE `tarif2_roues`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tarif_rc_automobiles`
--
ALTER TABLE `tarif_rc_automobiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT pour la table `thierce_collision_automobiles`
--
ALTER TABLE `thierce_collision_automobiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `thierce_complete_automobiles`
--
ALTER TABLE `thierce_complete_automobiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `tpv_rc_diesels`
--
ALTER TABLE `tpv_rc_diesels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `tpv_rc_essences`
--
ALTER TABLE `tpv_rc_essences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `voyage_prime_t_t_c_s`
--
ALTER TABLE `voyage_prime_t_t_c_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
