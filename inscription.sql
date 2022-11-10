-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 10 nov. 2022 à 15:44
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `connect`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `matricule` varchar(50) NOT NULL DEFAULT 'a',
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `e-mail` varchar(250) NOT NULL,
  `roles` varchar(50) NOT NULL,
  `mdp` text NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `etat` int(11) DEFAULT 1,
  `date_inscription` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modification` date DEFAULT NULL,
  `date_archivage` date DEFAULT NULL,
  `roles_etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `matricule`, `nom`, `prenom`, `e-mail`, `roles`, `mdp`, `photo`, `etat`, `date_inscription`, `date_modification`, `date_archivage`, `roles_etat`) VALUES
(1, '2022-1-ELV', 'Camara', 'sosso', 'sen.2014@gmail.com', 'Admistrateur', 'passer123', '', 1, '2022-11-07 16:26:43', NULL, NULL, 0),
(2, '2022-2-ELV', 'Diop', 'josephine', 'jose90@gmail.com', 'Admistrateur', '$2y$10$WgvzyId06eAe0QdF7TVxt.tXbpNQsIuPf2LKRiDiZD1h7BOoPC90.', '', 1, '2022-11-09 13:52:33', NULL, NULL, 0),
(3, '2022-3-ELV', 'wade', 'mama', 'wade90@gmail.com', 'Admistrateur', '$2y$10$orlvm/O.tO/yVik6pmjXv.64ZOsUy2am0lLdXXi7ym3unXOKEnR6m', '', 1, '2022-11-05 17:33:44', NULL, NULL, 0),
(4, '2022-4-ELV', 'fall', 'vieux', 'vieu2005@gmail.com', 'Admistrateur', '11111111', '', 1, '2022-11-05 18:00:20', NULL, NULL, 0),
(5, '2022-5-ELV', 'camaraa', 'fatou', 'fatou2002@gmail.com', 'Utilisateur', '$2y$10$e7HFx3878yEwaggT1EoNyuo8ySxaOpshRMLvKZS2WxXJlNq1/RCQa', '', 1, '2022-11-05 17:15:35', NULL, NULL, 0),
(6, '2022-6-ELV', 'Ndiaye', 'Aziz', 'aziz96@gmail.com', 'Admistrateur', '$2y$10$dy1rS.8fjgkPBVCBxDHJTOZ7Ts6GRJZUwyQmEHHgnHYYKvznFbynu', '', 0, '2022-11-07 17:16:54', NULL, NULL, 0),
(7, '2022-7-ELV', 'gnabaly', 'abdou', 'dou90@gmail.com', 'Utilisateur', '$2y$10$iKZvgmA2EfMHCVHj0vwLEutmpYSzYZscWD90JN1JTwFzSqQjzS/3O', '', 0, '2022-11-07 16:28:50', NULL, NULL, 0),
(8, '2022-8-ELV', 'gueye', 'ibou', 'gueye90@gmail.com', 'Utilisateur', '$2y$10$6X0AeRHoLZ.Del5VtrBOXOR8RGVj5XrVgsNnB/475rNjiYU1SwWre', '', 0, '2022-11-06 16:40:47', NULL, NULL, 1),
(9, '2022-9-ELV', 'sarr', 'mamadou', 'sarr90@gmail.com', 'Admistrateur', '$2y$10$iWEfMJg/sN1UENYj3vuU4uZT0U/TnPaJFtnu9w7Ih6eb9x4KufvZ2', '', 1, '2022-11-07 18:18:03', NULL, NULL, 1),
(16, '2022-16-ELV', 'seck', 'djiby', 'seck90@gmail.com', 'Utilisateur', '$2y$10$u9lTdoTrHFc6KBRR/cvIV.8FlKntU.lC7dadOh5SEgELuuweMupam', '', 1, '2022-11-07 18:36:13', NULL, NULL, 1),
(18, '2022-18-ELV', 'diop', 'khalipha', 'khaf90@gmail.com', 'Utilisateur', '$2y$10$jQHvBpOWM8YlTZ3OZA6DSeX8ez2tREoUuRSQXFZDW22yobZ5iazuy', '', 1, '2022-11-10 14:35:26', NULL, NULL, 1),
(19, '2022-19-ELV', 'dia', 'saliou', 'dia90@gmail.com', 'Admistrateur', '$2y$10$YYf5slnSLGk/0qmrppvtGeGwP/HVevicY6h0KrOEzJ5ndfCYA97aG', '', 1, '2022-11-07 18:56:54', NULL, NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
