-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 27 jan. 2022 à 18:10
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `partytime`
--

-- --------------------------------------------------------

--
-- Structure de la table `cleaning`
--

DROP TABLE IF EXISTS `cleaning`;
CREATE TABLE IF NOT EXISTS `cleaning` (
  `id_cleaning` int(20) NOT NULL AUTO_INCREMENT,
  `cleaning_name` varchar(40) NOT NULL,
  `cleaning_price` varchar(20) DEFAULT NULL,
  `cleaning_prestation_details` mediumtext DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_cleaning`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `food_recipe`
--

DROP TABLE IF EXISTS `food_recipe`;
CREATE TABLE IF NOT EXISTS `food_recipe` (
  `id_food_recipe` int(20) NOT NULL AUTO_INCREMENT,
  `food_recipe_name` varchar(50) NOT NULL,
  `food_recipe_ingredients` mediumtext NOT NULL,
  `food_recipe_quantity` varchar(20) NOT NULL,
  `food_recipe_method` mediumtext NOT NULL,
  `id_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_food_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `party_creatively_recipe`
--

DROP TABLE IF EXISTS `party_creatively_recipe`;
CREATE TABLE IF NOT EXISTS `party_creatively_recipe` (
  `id_Party_creatively_recipe` int(20) NOT NULL AUTO_INCREMENT,
  `Party_creatively_name` varchar(50) NOT NULL,
  `Party_creatively_ingredients` mediumtext NOT NULL,
  `Party_creatively_quantity` varchar(20) NOT NULL,
  `Party_creatively_method` mediumtext NOT NULL,
  `id_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_Party_creatively_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `shots_recipe`
--

DROP TABLE IF EXISTS `shots_recipe`;
CREATE TABLE IF NOT EXISTS `shots_recipe` (
  `id_shots_recipe` int(20) NOT NULL AUTO_INCREMENT,
  `shots_recipe_name` varchar(50) NOT NULL,
  `shots_recipe_ingredients` mediumtext NOT NULL,
  `shots_recipe_quantity` varchar(20) NOT NULL,
  `shots_recipe_method` mediumtext NOT NULL,
  `id_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_shots_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) NOT NULL,
  `surname_user` varchar(50) NOT NULL,
  `address1_user` varchar(50) NOT NULL,
  `address2_user` varchar(50) NOT NULL,
  `postcode_user` varchar(10) NOT NULL,
  `city_user` text DEFAULT NULL,
  `email_user` varchar(50) NOT NULL,
  `telephone_user` varchar(20) NOT NULL,
  `password_user` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `surname_user`, `address1_user`, `address2_user`, `postcode_user`, `city_user`, `email_user`, `telephone_user`, `password_user`) VALUES
(13, 'Tony', 'Hawk', '1 hawk avenue', 'colossal', '31700', 'toulouse', 'tonyhawk@gmail.com', '0622652602', 'skateforlife'),
(12, 'Katherine', 'Sneddon', '23 Avenue Emile Dewoitine Apt 33', '', '31200', 'Toulouse', 'katherinesneddon33@gmail.com', '0622652602', '1234'),
(14, 'sarah', 'laytey', '13 rue bold', 'balma', '31300', 'Toulouse', 'sarah@gmail.com', '07856954236', 'sarah1'),
(15, 'karen', 'rawnsley', '14 rue de brille', 'apt 6', '31758', 'toulouse', 'karen@hotmail.com', '0622659632', 'karen42');

-- --------------------------------------------------------

--
-- Structure de la table `user_rights`
--

DROP TABLE IF EXISTS `user_rights`;
CREATE TABLE IF NOT EXISTS `user_rights` (
  `id_user_rights` int(20) NOT NULL AUTO_INCREMENT,
  `user_rights_name` varchar(50) DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_user_rights`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
