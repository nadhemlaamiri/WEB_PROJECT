-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 30 Juillet 2013 à 23:58
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `study_tour_dubai`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE IF NOT EXISTS `inscrit` (
  `id_inscrit` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `specialite` varchar(3) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motivation` longtext NOT NULL,
  PRIMARY KEY (`id_inscrit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `inscrit`
--

INSERT INTO `inscrit` (`id_inscrit`, `nom`, `specialite`, `tel`, `email`, `motivation`) VALUES
(1, 'Nadhem laamiri', '2', '90 793 903', 'Nadhem.laamiri@yahoo.fr', 'Dubai reste le rêve pour toujours'),
(2, 'Wided oueslati', '1', '22 222 222', 'Wided@gmail.com', 'Dubai'),
(3, 'Melek Hajri', '3', '23 555 555', 'Melek@gmail.com', 'dd'),
(4, 'Mariem Menaa', '2', '22 333 666', 'Meriem@gmail.com', 'dubai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
