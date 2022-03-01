-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 mars 2022 à 18:38
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `partytime`
--

-- --------------------------------------------------------

--
-- Structure de la table `cleaning`
--

DROP TABLE IF EXISTS `cleaning`;
CREATE TABLE IF NOT EXISTS `cleaning` (
  `id_cleaning` int NOT NULL AUTO_INCREMENT,
  `cleaning_name` varchar(40) NOT NULL,
  `cleaning_price` varchar(20) NOT NULL,
  `cleaning_prestation_details` text NOT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_cleaning`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `food_recipe`
--

DROP TABLE IF EXISTS `food_recipe`;
CREATE TABLE IF NOT EXISTS `food_recipe` (
  `id_food_recipe` int NOT NULL AUTO_INCREMENT,
  `food_recipe_ingredients` text NOT NULL,
  `food_recipe_quantity` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `food_recipe_method` text NOT NULL,
  `id_user` int DEFAULT NULL,
  `food_image` varchar(255) NOT NULL,
  `food_recipe_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_food_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `id_party` int NOT NULL,
  `image_party` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name_party` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description_party` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recipe_party` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `method_party` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_party`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `party`
--

INSERT INTO `party` (`id_party`, `image_party`, `name_party`, `description_party`, `recipe_party`, `method_party`) VALUES
(0, 'C:\\wamp64\\www\\ProjectInPhp_test1\\Images/babyGuinness.jpg', '\"Baby Guinness', 'this is the description of the shot', 'this is the recipe', 'this is the method'),
(2, 'C:\\wamp64\\www\\ProjectInPhp_test1\\Images/MonkeyBrains.jpg', 'Monkey Brains', 'this is the party description', 'this is the party recipe', 'this is the party method');

-- --------------------------------------------------------

--
-- Structure de la table `party_creatively_recipe`
--

DROP TABLE IF EXISTS `party_creatively_recipe`;
CREATE TABLE IF NOT EXISTS `party_creatively_recipe` (
  `id_Party_creatively_recipe` int NOT NULL AUTO_INCREMENT,
  `party_creatively_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Party_creatively_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Party_creatively_ingredients` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Party_creatively_quantity` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Party_creatively_method` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_Party_creatively_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `shots_recipe`
--

DROP TABLE IF EXISTS `shots_recipe`;
CREATE TABLE IF NOT EXISTS `shots_recipe` (
  `id_shots_recipe` int NOT NULL AUTO_INCREMENT,
  `shots_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shots_recipe_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shots_recipe_ingredients` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shots_recipe_quantity` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shots_recipe_method` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_shots_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) NOT NULL,
  `surname_user` varchar(50) NOT NULL,
  `address1_user` varchar(50) NOT NULL,
  `address2_user` varchar(50) NOT NULL,
  `postcode_user` varchar(10) NOT NULL,
  `city_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telephone_user` varchar(20) NOT NULL,
  `password_user` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `surname_user`, `address1_user`, `address2_user`, `postcode_user`, `city_user`, `email_user`, `telephone_user`, `password_user`) VALUES
(13, 'Tony', 'Hawk', '1 hawk avenue', 'colossal', '31700', 'toulouse', 'tonyhawk@gmail.com', '0622652602', 'skateforlife'),
(12, 'Katherine', 'Sneddon', '23 Avenue Emile Dewoitine Apt 33', '', '31200', 'Toulouse', 'katherinesneddon33@gmail.com', '0622652602', '1234'),
(87, 'please hash', 'jash', '23 Avenue Emile Dewoitine Apt 33', 'apt33', '31200', 'Toulouse', 'admin@nothashing.com', '0112515852', ''),
(85, 'Katherine Sneddon', 'repair', '23 Avenue Emile Dewoitine Apt 33', 'apt33', '31200', 'Toulouse', 'admin@repair.com', '15987', '2569'),
(110, 'fgeporpoeg rgeolkgepor', 'repair', 'gegert', 'htrh', '3552', 'rjek;e', 'katherinelouise@gmail.com', '0622652602', '$2y$10$dPkJWXNRP/mllUQ9sbhsqu8'),
(109, 'Katherine Sneddon', 'sneddon', '23 Avenue Emile Dewoitine Apt 33', '5685', '31200', 'Toulouse', 'katherinesneddon336@gmail.com', '06526589', '$2y$10$1vQinTCdwXuTMrg9pjoVTOh'),
(107, '', '', '', '', '', '', '', '', ''),
(108, 'Katherine Sneddon', 'repair', '23 Avenue Emile Dewoitine Apt 33', 'apt33', '31200', 'Toulouse', 'admin@repair.com', '06226525625', '$2y$10$iioD.R/rRnKyw6yVgwu/Tee'),
(106, 'Katherine Sneddon', 'repair', '23 Avenue Emile Dewoitine Apt 33', 'htrh', '31200', 'Toulouse', 'admin@hifks.com', '0622652602', '$2y$10$mEiNXayBT1OR2792MEYmcOL'),
(105, 'Katherine Sneddon', 'test else', '23 Avenue Emile Dewoitine Apt 33', 'htrh', '31200', 'Toulouse', 'admin@reodps.com', '036545132', '$2y$10$PGIKAq8M.DA0zSeda7fF5eW');

-- --------------------------------------------------------

--
-- Structure de la table `user_rights`
--

DROP TABLE IF EXISTS `user_rights`;
CREATE TABLE IF NOT EXISTS `user_rights` (
  `id_user_rights` int NOT NULL AUTO_INCREMENT,
  `user_rights_name` varchar(50) NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_user_rights`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
