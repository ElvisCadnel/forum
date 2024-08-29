-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 août 2024 à 12:19
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
(1, 'marco', 17, 5, 'C\'est trop cool ', ''),
(2, 'marco', 17, 8, 'Je préfère le back', ''),
(28, 'marco', 17, 8, 'Le front ?', ''),
(29, 'marco', 17, 8, 'Le front ?', ''),
(30, 'marco', 17, 8, 'Le front ?', ''),
(31, 'Rayann', 20, 8, 'Moi je suis front inh ?', ''),
(32, 'Rayann', 20, 8, 'back', 'Tuesday 16:16 27/08'),
(33, 'Rayann', 20, 8, 'back', 'Tuesday 16:17 27/08'),
(34, 'JohnDoe', 21, 8, 'Full c\'est genial', 'Tuesday 16:44 27/08'),
(35, 'JohnDoe', 21, 10, 'numquam reiciendis nulla animi dignissimos dolore! Ea, quis possimus sapiente repellat similique commodi suscipit recusandae repudiandae, enim cupiditate expedita? Eaque vitae reiciendis et? Perspiciatis itaque ipsum quo hic, amet animi nulla illo neque dolor cupiditate corporis magni autem non asperiores vero iusto sequi quia fugit voluptatum pariatur veniam blanditiis modi! Quae, minus eligendi. Alias aliquid distinctio odio mollitia blanditiis. Sed maiores natus quasi vitae beatae sunt, quos et dolor totam? Consectetur, sapiente laboriosam commodi dolor, consequuntur dicta impedit, neque maiores tenetur corrupti i', 'Tuesday 17:54 27/08'),
(36, 'JohnDoe', 21, 10, 'numquam reiciendis nulla animi dignissimos dolore! Ea, quis possimus sapiente repellat similique commodi suscipit recusandae repudiandae, enim cupiditate expedita? Eaque vitae reiciendis et? Perspiciatis itaque ipsum quo hic, amet animi nulla illo neque dolor cupiditate corporis magni autem non asperiores vero iusto sequi quia fugit voluptatum pariatur veniam blanditiis modi! Quae, minus eligendi. Alias aliquid distinctio odio mollitia blanditiis. Sed maiores natus quasi vitae beatae sunt, quos et dolor totam? Consectetur, sapiente laboriosam commodi dolor, consequuntur dicta impedit, neque maiores tenetur corrupti i', 'Tuesday 17:55 27/08'),
(37, 'JohnDoe', 21, 12, 'Premier commentaires', 'Wednesday 00:12 28/08'),
(38, 'JohnDoe', 21, 12, 'Pour vous dire ques je suis la', 'Wednesday 00:12 28/08'),
(39, 'marco', 17, 13, '??', 'Wednesday 01:58 28/08'),
(40, 'Rayann', 20, 13, 'il y a quoi', 'Wednesday 02:04 28/08'),
(41, 'Rayann', 20, 4, 'Laravel', 'Wednesday 12:48 28/08');

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
(4, 'Bootstrap ou tailwind ?', 'Entre ces deux Framework quel est le plus efficace', 'Description des deux framework . Explications de leur role. Utilité', 17, 'marco', '26/08/2024'),
(5, 'Github ', 'Sécuriser Votre Code\r\nHéberger gratuitement ', 'Utilité \r\nRequette de commande git', 17, 'marco', '26/08/2024'),
(8, 'Le Back end ou le Front end ?', 'Lequel de ces deux est plus populaire ', 'Il sagit de comprendres ', 20, 'Rayann', 'Tuesday 00:13 27/08/2024'),
(10, 'Text par defaut VS Code', 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, fugit facilis dicta ut in officia animi quae tempora? Quae quibusdam id excepturi consectetur porro, delectus mollitia. Deserunt nam facilis eum!\r\nRem doloribus architecto expedita saepe autem deserunt velit beatae. Vero nemo odit deserunt delectus libero suscipit, minima molestias modi dolorum dolorem nisi, rerum, asperiores reprehenderit facilis? Quisquam temporibus quis voluptate?\r\nCorrupti cum repellendus tempore maxime, dolore quis facere nisi qui aliquid itaque vero fuga officiis accusantium ipsum distinctio laboriosam magnam iusto autem eligendi cupiditate eum reprehenderit reiciendis. Sunt, illo veritatis.\r\nUt veniam incidunt aliquid? Tempora aut ipsam facere exercitationem! Voluptatibus quibusdam explicabo cupiditate deleniti! Consequuntur in impedit quasi tempora dicta saepe! Illo fuga saepe voluptatum expedita animi? Rem, voluptate repudiandae!\r\nEsse hic magnam at autem officia voluptate consequuntur minima saepe, quo temporibus inventore nemo eveniet repudiandae odio laboriosam ea ullam perferendis sed quos aliquid magni quas omnis. Voluptatibus, perspiciatis quas.\r\nDignissimos eaque aliquid quibusdam eius beatae sint, eum repudiandae quam iste ullam commodi dolor illo aspernatur! Ut ad ipsa commodi, qui magni saepe voluptatem voluptates id illo nesciunt? Placeat, expedita.\r\nProvident quis laboriosam veritatis accusantium eaque error iure illum eius ratione laborum ullam doloremque quo, eos numquam atque debitis exercitationem! Magnam quidem obcaecati voluptatum dicta, aut iure beatae eius cum!\r\nExpedita rem perferendis ex numquam? Quas enim numquam reiciendis nulla animi dignissimos dolore! Ea, quis possimus sapiente repellat similique commodi suscipit recusandae repudiandae, enim cupiditate expedita? Eaque vitae reiciendis et?\r\nPerspiciatis itaque ipsum quo hic, amet animi nulla illo neque dolor cupiditate corporis magni autem non asperiores vero iusto sequi quia fugit voluptatum pariatur veniam blanditiis modi! Quae, minus eligendi.\r\nAlias aliquid distinctio odio mollitia blanditiis. Sed maiores natus quasi vitae beatae sunt, quos et dolor totam? Consectetur, sapiente laboriosam commodi dolor, consequuntur dicta impedit, neque maiores tenetur corrupti id?', 21, 'JohnDoe', 'Tuesday 17:49 27/08/2024'),
(13, 'Laravel', 'C\'est quoi ?', 'Rôles et utilité concret', 17, 'marco', 'Wednesday 01:58 28/08/2024');

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
(14, 'elo', 'elo', 'elca@gmail.com', 'b480c074d6b75947c02681f31c90c668c46bf6b8'),
(17, 'marco', 'mgmailcom', 'm@gmail.com', '3829486b93ec44395f0b980424bae9b6fb07b7bc'),
(20, 'Rayann', 'Nel', 'nel@gmail.com', '658261fe08011c227cd9e7d253177fd088c86734'),
(21, 'JohnDoe', 'Doe', 'john@gmail.Com', 'd6b4e84ee7f31d88617a6b60421451272ebf1a3a');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
