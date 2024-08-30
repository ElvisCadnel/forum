-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 août 2024 à 09:18
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `pseudo_auteur` varchar(80) NOT NULL,
  `id_autheur` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `date_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `pseudo_auteur`, `id_autheur`, `id_question`, `commentaire`, `date_comment`) VALUES
(47, 'JohnPif', 45, 18, 'PHP ? Moi aussi je sais pas unh', 'Friday 01:23 30/08'),
(48, 'JohnPif', 45, 18, 'PHP Hypertext Preproceseur il me semble', 'Friday 01:24 30/08'),
(49, 'Marc', 46, 21, 'Je sais pas trop', 'Friday 01:25 30/08'),
(50, 'Marc', 46, 20, 'Cascading Steel Sheet ', 'Friday 01:26 30/08'),
(51, 'Marc', 46, 20, 'Cascading style sheet', 'Friday 01:27 30/08'),
(52, 'Marc', 46, 18, 'Heuh!!', 'Friday 01:27 30/08'),
(53, 'Linux', 47, 22, 'Utiliser un CDN', 'Friday 01:31 30/08'),
(54, 'Linux', 47, 22, 'Utiliser un CDN', 'Friday 01:32 30/08'),
(55, 'Linux', 47, 22, 'Utiliser un CDN', 'Friday 01:32 30/08'),
(56, 'elviscadnel', 48, 24, 'J\'attends vos commentaires ????????', 'Friday 01:39 30/08'),
(57, 'elviscadnel', 48, 19, 'pff', 'Friday 01:46 30/08'),
(58, 'elviscadnel', 48, 18, 'chatgpt.com', 'Friday 01:46 30/08');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `libelle` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `user_id`, `libelle`) VALUES
(18, 44, 'tanj.jpg'),
(19, 45, 'pexels-deepanker70-1482061_20240830_012057.jpg'),
(20, 46, 'pexels-cottonbro-5053848_20240830_012444.jpg'),
(21, 47, 'pexels-pixabay-38544_20240830_012843.jpg'),
(22, 48, 'pexels-cottonbro-5082580_20240830_013553.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(50) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `id_autheur` int(11) NOT NULL,
  `pseudo_auteur` varchar(80) NOT NULL,
  `date_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `description`, `contenu`, `id_autheur`, `pseudo_auteur`, `date_publication`) VALUES
(18, 'PHP ', 'Sigle description ', 'Quel est la signification de PHP', 44, 'Cafca', 'Friday 01:18 30/08/2024'),
(19, 'Laravel', 'C\'est quoi ? ', 'Importance . Est ce un framework ou un langage', 44, 'Cafca', 'Friday 01:19 30/08/2024'),
(20, 'CSS', 'Comment l\'utiliser', 'Je suis un debutant', 45, 'JohnPif', 'Friday 01:21 30/08/2024'),
(21, 'JS , Jquerry ,Angular ', 'Différence', 'Donnez moi la nuances', 45, 'JohnPif', 'Friday 01:22 30/08/2024'),
(22, 'Utiliser le Bootstrap ', 'Comment l\'utiliser', 'Etapes pour utiliser bootstrap', 46, 'Marc', 'Friday 01:26 30/08/2024'),
(23, 'Nouvelle Technologie ', 'Quel sont les nouvels technologie ?', 'technologie web', 47, 'Linux', 'Friday 01:30 30/08/2024'),
(24, 'As-tu déjà utiliser le Préprocesseur Sass ?', 'Sass est un preprocesseur qui génère du CSS ', 'Il permet d\'avoir une meilleur lisibilité du code et de pouvoir mieux comprendre son code', 48, 'elviscadnel', 'Friday 01:38 30/08/2024');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `pseudo` varchar(80) NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(70) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `prenom`, `email`, `mdp`) VALUES
(44, 'Cafca', 'Ibino', 'nel@gmail.com', '658261fe08011c227cd9e7d253177fd088c86734'),
(45, 'JohnPif', 'John', 'nel@gmail.com', '658261fe08011c227cd9e7d253177fd088c86734'),
(46, 'Marc', 'Zuckenberg', 'nel@gmail.com', '658261fe08011c227cd9e7d253177fd088c86734'),
(47, 'Linux', 'Cali', 'nel@gmail.com', '658261fe08011c227cd9e7d253177fd088c86734'),
(48, 'elviscadnel', 'ElvisCadnel', 'elviscadnel@gmail.com', '7492a34e86d9278b3c104f2a09ff8b5db02dae22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
