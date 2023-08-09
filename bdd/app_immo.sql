-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 09 août 2023 à 05:09
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app_immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `biens_immo`
--

DROP TABLE IF EXISTS `biens_immo`;
CREATE TABLE IF NOT EXISTS `biens_immo` (
  `id_biens_immo` int NOT NULL AUTO_INCREMENT,
  `image` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `surface` int NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `contenu` text NOT NULL,
  `vendeur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_biens_immo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `biens_immo`
--

INSERT INTO `biens_immo` (`id_biens_immo`, `image`, `type`, `surface`, `prix`, `contenu`, `vendeur`) VALUES
(1, 'https://medias.elloha.com/crop-870x496/bb9eba76-5496-4258-9335-b42a07d89ca3/media-94109192-013-min.jpg', 'cabane', 70, '7500', 'Vend cabane, elle est déjà équipé pour le confort, pour l\'électricité je vous recommande d\'avoir voir groupe électrogène.\r\nDeux chambre, une terrace.', 'HOAREAU Paul'),
(2, 'https://www.amaviacollection.com/wp-content/uploads/2022/05/Villa-Gaia-1-scaled.jpeg', 'villa', 500, '2000450', 'Vend villa pour raison de déménagement, elle possède une piscine extérieur, un garage, une cave à vin.\r\nUne très belle vu sur la vallée.', 'ROTHSCHILD Isaak'),
(3, 'https://www.travaux.com/images/cms/original/ebcd4d3c-6a00-47d2-8165-6d9e192082af.jpeg', 'appartement', 100, '500000', 'Vend appartement spacieux à deux étages, très éclairé déjà meublé.', 'SMITH Evelyn'),
(4, 'https://t3.ftcdn.net/jpg/00/90/03/14/360_F_90031400_4hSiiZCzNU24vdmyaMZCgPXeYxbFBSN6.jpg', 'maison', 270, '700000', 'Vend maison traditionnelle créole à la Plaine des Palmiste.', 'PAYET Michel');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contacts` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_contacts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
