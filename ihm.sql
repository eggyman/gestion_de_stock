-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 déc. 2019 à 20:49
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ihm`
--

-- --------------------------------------------------------

--
-- Structure de la table `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `cin` varchar(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personel`
--

INSERT INTO `personel` (`cin`, `nom`, `prenom`, `mail`, `pwd`) VALUES
('12345678', 'walid', 'zaerf', 'sdqf@dsfq.fr', '1234'),
('14767117', 'touati', 'alaeddine', 'touati19999@gmail.com', 'motdepasse44'),
('15010850', 'benhassine', 'mariem', 'mariem@gamil.com', 'azert');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `ref` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prix` double NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ref`, `nom`, `prix`, `quantite`) VALUES
('ref18', 'madame', 1000, 80);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
