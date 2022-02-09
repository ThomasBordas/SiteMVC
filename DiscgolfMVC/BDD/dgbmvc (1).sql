-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 nov. 2021 à 15:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dgbmvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `dgb_table`
--

DROP TABLE IF EXISTS `dgb_table`;
CREATE TABLE IF NOT EXISTS `dgb_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_user` varchar(255) NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `pseudo_user` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dgb_table`
--

INSERT INTO `dgb_table` (`id`, `mail_user`, `pwd_user`, `pseudo_user`) VALUES
(1, 'tylls19@hotmail.fr', '$2y$10$peqWneow3eqG.xBhPy.yBuZeF2KwrEYsUpmQd9ssH3Ll6XbDm57Sa', 'tylls'),
(2, 'test@gmail.fr', '$2y$10$24SSGHdH857uxuAUP1yIjOkJkayQMmx691nEQalIXsh3Ma93H9/Du', 'Thomas'),
(3, 'test10@gmail.com', '$2y$10$BPBYrBQ2EbujT7CWTTAw/O436Vozl2KXQE0zyaTVES15j8BGkY.Dy', 'toto'),
(4, 'loulou@gmail.com', '$2y$10$A6I5bYAodwHm3QCylbSeyuJRx45NjBxub544FWOmV7IE7HEtxdkra', 'loulou'),
(5, 'alice@gmail.com', '$2y$10$lT7WhBlugENXgBbb7zlDOus8fXbfAGp1KYyRM7cPg5OVDi9YXCuKC', 'Alice');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `created_at`, `id_users`) VALUES
(1, 'test', '2021-11-15 04:05:26', 1),
(2, 'salut', '2021-11-15 04:25:23', 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `dgb_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
