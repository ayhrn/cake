-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Ven 09 Octobre 2015 à 04:49
-- Version du serveur :  5.5.44
-- Version de PHP :  5.4.43

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appstore`
--

-- --------------------------------------------------------

--
-- Structure de la table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) unsigned NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `date_submitted` date NOT NULL,
  `app_description` text NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `applications`
--

INSERT INTO `applications` (`id`, `app_name`, `date_submitted`, `app_description`, `users_id`, `category_id`) VALUES
(1, 'Evernota', '2015-03-04', 'Prends pleins de notes', 1, 6),
(3, 'asddddddddddd', '2015-10-08', 'L''alphabet pour frustré', 1, 4),
(4, 'Robot Cats Attack', '2011-01-03', 'Les chats de se monde résisteront-ils à cette attaque sanglante ?', 1, 4),
(5, '123 News', '2035-01-01', '123 News Flash 123', 1, 5),
(6, 'Rare Vlad', '0000-00-00', 'Rare Vlad can only be seen once every 1 million app', 4, 7),
(7, 'User App', '2035-01-01', 'User application', 9, 7),
(9, 'App 2k16', '2015-10-09', 'New and Improved', 9, 8);

-- --------------------------------------------------------

--
-- Structure de la table `app_system`
--

CREATE TABLE `app_system` (
  `id` int(10) unsigned NOT NULL,
  `app_id` int(10) unsigned NOT NULL,
  `os_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `app_system`
--

INSERT INTO `app_system` (`id`, `app_id`, `os_id`) VALUES
(3, 3, 4),
(4, 3, 1),
(5, 3, 3),
(7, 1, 2),
(8, 4, 2),
(9, 5, 1),
(10, 5, 2),
(11, 5, 7),
(12, 6, 6),
(13, 7, 5),
(14, 7, 8),
(16, 9, 6);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'Games'),
(5, 'News'),
(6, 'Music'),
(7, 'Utilities'),
(8, 'Productivity');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `name`) VALUES
(1, 'Google'),
(2, 'Microsoft'),
(3, 'MSI'),
(4, 'EA');

-- --------------------------------------------------------

--
-- Structure de la table `o_system`
--

CREATE TABLE `o_system` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `fournisseur_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `o_system`
--

INSERT INTO `o_system` (`id`, `name`, `fournisseur_id`) VALUES
(1, 'Jelly Bean', 1),
(2, 'KitKat', 1),
(3, 'Windows 10', 2),
(4, 'Windows RT', 2),
(5, 'Anti Ubi', 4),
(6, 'Windows XP', 2),
(7, 'Marshmallow', 1),
(8, 'Lollipop', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`) VALUES
(1, 'admin', '$2a$10$2vcw.ee1dZD4Pbr9tyo5tO9VoCVOYfnHmijp.RF5Y7q9cIn4BQc/i', 'admin', 'vladasd@hotmail.com', '2015-10-07', '2015-10-08'),
(4, 'Vlad', '$2a$10$vvc5/zpGiyzPxFFfmg3vMOeyeWoaCl8cbJgLgz9Gi5rL0eUD6STZO', 'admin', '', '2015-10-07', '2015-10-07'),
(5, 'fran', '$2a$10$MtnmVxaiJEkOOxY4gxpKXuvF0cZ0/0QI6aVTZbDDb2BNJbf7oqsmC', 'admin', 'fran@fr.fr', '2015-10-07', '2015-10-08'),
(6, 'eng', '$2a$10$dqHC25gEKfqaVCqWdgTXr.ovv95ksoePcWab2rvBQ/eDEIcHkyWuK', 'user', 'eng@eng.com', '2015-10-07', '2015-10-09'),
(8, 'Vian', '$2a$10$PL3IZEP9polnTVyQlcAzheEbd6VH4MNEYrVpxnRtsXyQkp97isfmy', 'user', 'vian@vian.com', '2015-10-08', '2015-10-09'),
(9, 'user', '$2a$10$sH3k1LtcImsWzly2efih..9kHW5crcvDwp5YZ8pyY8rEx78Ow7kzW', 'user', 'user@localhost.com', '2015-10-09', '2015-10-09');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `app_system`
--
ALTER TABLE `app_system`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `o_system`
--
ALTER TABLE `o_system`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fournisseur_id` (`fournisseur_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `app_system`
--
ALTER TABLE `app_system`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `o_system`
--
ALTER TABLE `o_system`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `users_id_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `o_system`
--
ALTER TABLE `o_system`
  ADD CONSTRAINT `fournisseur_id_fk` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseurs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
