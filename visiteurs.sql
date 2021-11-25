-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Novembre 2021 à 04:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `visiteurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `mail`, `contact`) VALUES
(1, 'bogui', 'emmanuel', 'boguiemmanuel@gmail.com', 747860451),
(3, 'ahui', 'jean', 'ahuitjean@gmail.com', 586548795),
(4, 'ahuit', 'matial', 'ahuitjean@gmail.com', 747860451),
(5, 'bone', 'gret', 'ema@gmail.com', 747865412),
(6, 'ali', 'matias', 'ali@gmail.com', 748860451),
(7, 'bonan', 'emmanuel', 'rgmail@gmail.com', 747865478),
(8, 'tuo', 'mamadou', 'tuo@gmail.com', 748596321),
(9, 'traore', 'bourama', 'goodessen9@gmail.com', 564305534);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
