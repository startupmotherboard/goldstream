-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 15 oct. 2020 à 14:36
-- Version du serveur :  10.0.38-MariaDB-0+deb8u1
-- Version de PHP :  7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `umarDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `home_buyer`
--

CREATE TABLE `home_buyer` (
  `id` int(20) NOT NULL,
  `request_id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthdate` varchar(20) DEFAULT NULL,
  `def` enum('yes','no') NOT NULL DEFAULT 'no',
  `banned` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `home_request`
--

CREATE TABLE `home_request` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `bedrooms` varchar(10) DEFAULT NULL COMMENT 'null=>no preference',
  `price_range` varchar(100) DEFAULT NULL,
  `square` varchar(100) DEFAULT NULL COMMENT 'null=>no preference',
  `property_type` varchar(150) DEFAULT NULL COMMENT 'Single-Family, Multi-Family, Seasonal, Land',
  `home_type` text,
  `preferences` varchar(150) DEFAULT NULL COMMENT 'Single-Family, Multi-Family, Seasonal, Land',
  `details` text,
  `banned` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `user_id` int(20) NOT NULL,
  `sender_id` int(20) NOT NULL,
  `msg` text NOT NULL,
  `readed` enum('yes','no') NOT NULL DEFAULT 'no',
  `sended_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attachment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `sender_id`, `msg`, `readed`, `sended_at`, `attachment`) VALUES
(1, 2, 2, 'test', 'yes', '2020-10-11 18:08:53', NULL),
(2, 2, 2, 'hello\n', 'yes', '2020-10-11 18:11:32', NULL),
(3, 2, 1, 'hello\n', 'no', '2020-10-13 04:33:07', NULL),
(4, 5, 1, 'gfdgdf', 'yes', '2020-10-13 20:43:35', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `setting`
--

CREATE TABLE `setting` (
  `id` int(4) NOT NULL,
  `meta_key` varchar(200) NOT NULL,
  `meta_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `setting`
--

INSERT INTO `setting` (`id`, `meta_key`, `meta_value`) VALUES
(1, 'meta_title', 'DASHBOARD'),
(2, 'logo', 'Homeli-Logo.png'),
(3, 'sender_email', 'noreply@homeli.com'),
(4, 'sender_name', 'homeli'),
(5, 'background', 'home-3.png');

-- --------------------------------------------------------

--
-- Structure de la table `templates`
--

CREATE TABLE `templates` (
  `id` int(121) UNSIGNED NOT NULL,
  `module` varchar(255) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `html` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `templates`
--

INSERT INTO `templates` (`id`, `module`, `title`, `subject`, `html`) VALUES
(1, 'forgot_pass', NULL, 'Forgot password', 'welcome {var_user_name},<br.>\r\nto recuperate your password click here:<Br/>\r\n<a href=\"{var_varification_link}\">{var_varification_link} </a>\r\n\r\n{var_website_name} team'),
(3, 'users', NULL, 'Invitation', '<p>Hello <strong>{var_user_email}</strong></p>\n\n\n\n<p>Click below link to register&nbsp;<br />\n\n{var_inviation_link}</p>\n\n\n\n<p>Thanks&nbsp;</p>\n\n');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `active` enum('yes','no') NOT NULL DEFAULT 'no',
  `role` varchar(10) DEFAULT NULL COMMENT 'A:admin,C;client',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `active`, `role`, `email`, `password`, `display_name`, `token`, `creator`, `created_at`, `deleted_at`) VALUES
(1, 'yes', 'A', 'admin@homeli.ca', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', NULL, NULL, '2020-10-11 15:15:22', NULL),
(2, 'yes', 'C', 'umar_z@live.ca', '098f6bcd4621d373cade4e832627b4f6', 'john doe', '', 0, '2020-10-11 18:08:04', NULL),
(3, 'yes', 'C', 'startupmotherboard@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'john doe', 'F1xUMQkAH6ir', 0, '2020-10-12 18:36:43', NULL),
(4, 'yes', 'C', 'umar.zulqarn@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test test', 'UfLCx2V1FoyP', 0, '2020-10-13 03:52:49', NULL),
(5, 'yes', 'C', 'contact1@procreagency.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Trtrezar Treztre', '', 0, '2020-10-13 15:56:08', NULL),
(6, 'yes', 'C', 'contact2@procreagency.com', 'c4ca4238a0b923820dcc509a6f75849b', 'gdd fd', '', 0, '2020-10-13 16:02:31', NULL),
(7, 'yes', 'C', 'test12221@test.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Azerty Wefleij', '', 0, '2020-10-14 20:01:34', NULL),
(8, 'yes', 'C', 'umar@umar.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Sfdsfsdf Adasasda', '', 0, '2020-10-15 08:49:57', NULL),
(9, 'yes', 'C', 'jeff@jeff.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 'Jeffrey Sadasdsa', '', 0, '2020-10-15 11:50:29', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(40) NOT NULL,
  `user_id` int(30) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `adr1` varchar(20) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `adr2` varchar(300) DEFAULT NULL,
  `birthdate` varchar(20) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `first_name`, `last_name`, `email`, `mobile`, `phone`, `adr1`, `province`, `city`, `zip`, `adr2`, `birthdate`, `image`) VALUES
(1, 2, 'john', 'doe', 'umar_z@live.ca', NULL, 'sadsa', 'asdsad', 'sadsa', 'sadsada', 'sadsad', 'sadsad', NULL, NULL),
(2, 3, 'john', 'doe', 'startupmotherboard@gmail.com', NULL, 'sadsadas', 'asdsad', 'sadsad', 'sadsadas', 'sadsad', 'sadsad', NULL, NULL),
(3, 4, 'test', 'test', 'umar.zulqarn@gmail.com', NULL, '647-147-4141', 'asdsad', 'sadsa', 'Toronto', 'sadsad', 'sadsad', '', NULL),
(4, 5, 'Trtrezar', 'Treztre', 'contact1@procreagency.com', NULL, '0611891882000', 'fezer', 'fer', 'Abbadia Cerreto', '58100', 'fre', '', NULL),
(5, 6, 'gdd', 'fd', 'contact2@procreagency.com', NULL, 'df', 'gdf', 'fd', 'df', 'gfd', '', NULL, NULL),
(6, 7, 'Azerty', 'Wefleij', 'test12221@test.com', NULL, 's', 'vcs', 'vfds', 'vsfdsv', 'sdvvdsf', 'vdsv', NULL, NULL),
(7, 8, 'Sfdsfsdf', 'Adasasda', 'umar@umar.com', NULL, 'sadsadsa', 'sdsad', 'sadsada', 'sadsadas', 'sadsad', 'sadsad', NULL, NULL),
(8, 9, 'Jeffrey', 'Sadasdsa', 'jeff@jeff.com', NULL, 'sad', 'sadsad', 'dsada', 'dsa', 'ddsa', 'sadsa', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `home_buyer`
--
ALTER TABLE `home_buyer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_id` (`request_id`);

--
-- Index pour la table `home_request`
--
ALTER TABLE `home_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Index pour la table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `home_buyer`
--
ALTER TABLE `home_buyer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `home_request`
--
ALTER TABLE `home_request`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(121) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
